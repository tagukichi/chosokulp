<?php
/**
 * ACF フィールド登録（無料版・繰り返しフィールド不使用）
 *
 * ホームページに設定した固定ページの編集画面（タイトル直下）に
 * 「調速LP コンテンツ」グループを表示し、FAQ を入力できるようにする。
 * ACF プラグインが無効でもテーマは通常動作する（登録をスキップ）。
 *
 * @package chosoku-lp
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('acf/init', 'chosoku_register_acf_fields');
function chosoku_register_acf_fields() {

	if (!function_exists('acf_add_local_field_group')) {
		return; // ACF 未導入時は何もしない
	}

	// 既定の FAQ（プレースホルダー表示用。実際の出力は template-parts/lp.php 側で制御）
	$faq_defaults = array(
		array('q' => 'どの自治体に対応していますか？', 'a' => '用途地域・ハザード・地価・取引事例などは全国対応です。一部の自治体は窓口リンク集付きでご利用いただけ、対応は順次拡充しています。'),
		array('q' => '路線価などの具体的な数値は表示されますか？', 'a' => 'アプリ内では具体的な金額数値は表示せず、一次情報源（国税庁など）へのリンクをご案内します。'),
		array('q' => 'AIが宅建士の代わりになるのですか？', 'a' => 'いいえ。AIはあくまで「窓口で確認すべき観点」を提示する補助です。最終的な判断・確認は宅地建物取引士が行う建付けとしています。'),
		array('q' => '個人情報やデータは安全ですか？', 'a' => '物件住所はサーバー側で処理し、認証・通信は暗号化により保護しています。詳細はお問い合わせください。'),
		array('q' => 'スマートフォンでも使えますか？', 'a' => 'はい。スマホ閲覧に最適化しており、縦長ページも快適にご利用いただけます。'),
		array('q' => '解約はできますか？', 'a' => 'サブスクリプションはいつでも解約可能です。詳細はお問い合わせフォームよりご連絡ください。'),
	);

	$fields = array(
		array(
			'key'   => 'field_chosoku_faq_tab',
			'label' => 'よくある質問（FAQ）',
			'type'  => 'tab',
		),
		array(
			'key'     => 'field_chosoku_faq_intro',
			'label'   => '',
			'name'    => '',
			'type'    => 'message',
			'message' => '各FAQの「質問」と「回答」を入力してください。<br><strong>質問を空欄にした項目は表示されません。</strong>すべて空欄のままなら、テーマ既定の6件を表示します。',
		),
	);

	for ($i = 1; $i <= 6; $i++) {
		$d = isset($faq_defaults[$i - 1]) ? $faq_defaults[$i - 1] : array('q' => '', 'a' => '');
		$fields[] = array(
			'key'         => 'field_chosoku_faq_' . $i . '_q',
			'label'       => 'FAQ' . $i . '：質問',
			'name'        => 'faq_' . $i . '_q',
			'type'        => 'text',
			'placeholder' => $d['q'],
			'wrapper'     => array('width' => '100'),
		);
		$fields[] = array(
			'key'         => 'field_chosoku_faq_' . $i . '_a',
			'label'       => 'FAQ' . $i . '：回答',
			'name'        => 'faq_' . $i . '_a',
			'type'        => 'textarea',
			'rows'        => 3,
			'new_lines'   => '', // 改行はテンプレート側で nl2br 処理
			'placeholder' => $d['a'],
		);
	}

	/* -------- 連携（kanri）セクション -------- */
	$intg_checks = array(
		'会社の案件を、社内でまとめて一元管理',
		'営業担当は、自分の案件を個人単位で管理',
		'調速で調べた物件を、そのまま案件として登録',
		'顧客管理から案件登録までを、1つの動線で',
	);

	$fields[] = array(
		'key'   => 'field_chosoku_intg_tab',
		'label' => '連携（kanri）',
		'type'  => 'tab',
	);
	$fields[] = array(
		'key'     => 'field_chosoku_intg_intro',
		'label'   => '',
		'name'    => '',
		'type'    => 'message',
		'message' => '「案件管理kanri」セクションの見出し・説明・チェックリスト・右側メディアを編集できます。<br>右側は <strong>動画URL（YouTube等）→ 動画ファイル → 画像</strong> の順に表示し、すべて未設定なら既定の図を表示します。',
	);
	$fields[] = array(
		'key'          => 'field_chosoku_intg_title',
		'label'        => '見出し',
		'name'         => 'integration_title',
		'type'         => 'textarea',
		'rows'         => 2,
		'new_lines'    => '', // 改行はテンプレート側で <br> に変換
		'instructions' => '改行したい位置で Enter を押すと、その位置で改行されます。',
		'placeholder'  => "案件管理「kanri」と、\nひとつながり。",
	);
	$fields[] = array(
		'key'         => 'field_chosoku_intg_lead',
		'label'       => '説明文',
		'name'        => 'integration_lead',
		'type'        => 'textarea',
		'rows'        => 3,
		'new_lines'   => '',
		'placeholder' => '「kanri」は、会社の案件を社内でまとめて管理できる案件管理ツールです。営業担当は自分が抱える案件を個人単位で管理でき、調速で調べた物件は、そのまま案件として引き継げます。',
	);
	for ($i = 1; $i <= 4; $i++) {
		$fields[] = array(
			'key'         => 'field_chosoku_intg_check_' . $i,
			'label'       => 'チェックリスト' . $i,
			'name'        => 'integration_check_' . $i,
			'type'        => 'text',
			'placeholder' => isset($intg_checks[$i - 1]) ? $intg_checks[$i - 1] : '',
		);
	}
	$fields[] = array(
		'key'           => 'field_chosoku_intg_image',
		'label'         => '右側：画像',
		'name'          => 'integration_media_image',
		'type'          => 'image',
		'return_format' => 'url',
		'preview_size'  => 'medium',
		'library'       => 'all',
		'instructions'  => 'kanriの画面キャプチャなど。動画が未設定のとき表示されます。',
	);
	$fields[] = array(
		'key'           => 'field_chosoku_intg_video',
		'label'         => '右側：動画ファイル',
		'name'          => 'integration_media_video',
		'type'          => 'file',
		'return_format' => 'url',
		'library'       => 'all',
		'mime_types'    => 'mp4,webm,ogg,mov',
		'instructions'  => 'MP4等をアップロード。動画URLが未設定のとき表示されます。',
	);
	$fields[] = array(
		'key'          => 'field_chosoku_intg_video_url',
		'label'        => '右側：動画URL（YouTube / Vimeo）',
		'name'         => 'integration_video_url',
		'type'         => 'url',
		'instructions' => 'YouTube / Vimeo のURLを貼ると埋め込み表示します（最優先）。',
	);

	/* -------- ソリューション（調査→提案→資料化 / 01-04） -------- */
	$sol_defaults = array(
		1 => array(
			'title' => '住所1つで、12種類以上の調査結果',
			'desc'  => '地図・用途地域・建蔽率/容積率・ハザード・学区・地価・取引事例・周辺施設まで。これまで何時間もかかっていた多面調査が、1つの画面に即時で並びます。',
			'li'    => array('調査地付近の人口統計や不動産取引事例を表示', 'スーパー・学校・駅まで、距離と徒歩分数つき', '路線価図索引はクリックで一次情報源へ'),
		),
		2 => array(
			'title' => 'AIが、お客様向けの提案文を自動生成',
			'desc'  => '周辺データを根拠に「この街で暮らすイメージ」が湧く提案文を生成。営業担当のフリーメモも自然に文章へ反映します。金額数値はAIに渡さない、ハルシネーション抑制設計です。',
			'li'    => array('周辺データを根拠にした“暮らしの提案”', '担当者のメモを文章に反映', '最終確認は宅地建物取引士が行う建付け'),
		),
		3 => array(
			'title' => 'プレゼンボードで、A4 1枚にまとめる',
			'desc'  => '提案文・法令制限・周辺施設・人気店・価格情報・物件位置をブロック化。ドラッグ&ドロップで自由に並べ替え、不要なブロックは隠せます。そのままA4横でPDF印刷・Excel出力。',
			'li'    => array('ドラッグ&ドロップで並べ替え・ブロックごとに8色パレット', '編集レイアウトのままA4横で出力', '提案資料・社内回付資料にそのまま使える'),
		),
		4 => array(
			'title' => '公的データだから、安心して使える',
			'desc'  => '国土交通省・国税庁・国土地理院・e-Stat・Google Maps Places を組み合わせ、AIが数値を“作らない”設計。一次情報源へのリンクを備え、最終確認は宅地建物取引士が行う前提で組み立てています。',
			'li'    => array('出典は公的データ／一次情報源リンク付き', 'AIは「窓口で確認すべき観点」を提示', '断定ではなく、確認を支える建付け'),
		),
	);

	$fields[] = array('key' => 'field_chosoku_sol_tab', 'label' => 'ソリューション（3ステップ）', 'type' => 'tab');
	$fields[] = array(
		'key'     => 'field_chosoku_sol_intro',
		'label'   => '', 'name' => '', 'type' => 'message',
		'message' => '「調査 → 提案 → 資料化」セクションの見出しと、01〜04の各項目（タイトル・説明・チェックリスト）を編集できます。<br>チェックリストは空欄の項目を非表示にできます。すべて未入力なら既定文を表示します。',
	);
	$fields[] = array('key' => 'field_chosoku_sol_eyebrow', 'label' => 'セクション：ラベル', 'name' => 'solution_eyebrow', 'type' => 'text', 'placeholder' => '調速 が、その悩みを1画面に。');
	$fields[] = array('key' => 'field_chosoku_sol_title', 'label' => 'セクション：見出し', 'name' => 'solution_title', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'instructions' => 'Enterで改行できます。', 'placeholder' => '調査 → 提案 → 資料化を、ひとつの流れに。');
	$fields[] = array('key' => 'field_chosoku_sol_lead', 'label' => 'セクション：リード文', 'name' => 'solution_lead', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'placeholder' => 'バラバラだった作業を集約。住所を入れるだけで、その先の資料づくりまで一気通貫で進みます。');

	for ($n = 1; $n <= 4; $n++) {
		$d = $sol_defaults[$n];
		$fields[] = array('key' => 'field_chosoku_sol_' . $n . '_label', 'label' => '', 'name' => '', 'type' => 'message', 'message' => '<strong>0' . $n . '</strong>');
		$fields[] = array('key' => 'field_chosoku_sol_' . $n . '_title', 'label' => '0' . $n . '：タイトル', 'name' => 'solution_' . $n . '_title', 'type' => 'text', 'placeholder' => $d['title']);
		$fields[] = array('key' => 'field_chosoku_sol_' . $n . '_desc', 'label' => '0' . $n . '：説明文', 'name' => 'solution_' . $n . '_desc', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '', 'placeholder' => $d['desc']);
		for ($j = 1; $j <= 3; $j++) {
			$fields[] = array(
				'key'         => 'field_chosoku_sol_' . $n . '_li_' . $j,
				'label'       => '0' . $n . '：チェック' . $j,
				'name'        => 'solution_' . $n . '_li_' . $j,
				'type'        => 'text',
				'placeholder' => isset($d['li'][$j - 1]) ? $d['li'][$j - 1] : '',
				'wrapper'     => array('width' => '33'),
			);
		}
	}

	/* -------- 選ばれる理由（WHY / 01-06） -------- */
	$why_defaults = array(
		1 => array('title' => '公的データ100%', 'desc' => '用途地域や地価、取引事例、ハザードなどの情報は、国土交通省・国税庁・国土地理院・e-Stat・Google Maps Places といった公的データを組み合わせて表示します。AIに数値をつくらせない設計なので、根拠のある情報だけをお客様に提示できます。'),
		2 => array('title' => '宅建士の判断を支える設計', 'desc' => 'AIはあくまで「窓口で確認すべき観点」や調査の抜け漏れを補う補助役です。最終的な判断や重要事項の確認は宅地建物取引士が行う前提で設計しているため、AIまかせにならず、安心して日々の実務に組み込めます。'),
		3 => array('title' => '業務フローの起点集約', 'desc' => '自治体の窓口ページ、路線価図、主要な不動産ポータルや調査サイトへのリンクを1画面に集約。複数のサイトを探し回ったり、同じ物件情報を何度も入力し直したりする手間をなくし、調査の起点をひとつにまとめます。'),
		4 => array('title' => '印刷・Excel出力が標準装備', 'desc' => '編集したレイアウトのまま、A4横のPDFやExcelとして出力できます。出力した資料はそのままお客様への提案書や、社内での回付・保管用の書類として使えるので、資料をつくり直す手間がかかりません。'),
		5 => array('title' => 'kanri との完全統合', 'desc' => '案件管理ダッシュボード「kanri」と1つのアカウントで連携。顧客管理から物件調査、案件登録までを同じ画面の流れで行えるため、同じ情報を二度入力する必要がなく、社内での案件共有もスムーズになります。'),
		6 => array('title' => '全国対応', 'desc' => '用途地域・ハザード・地価・取引事例などの調査は全国のエリアに対応しています。一部の自治体は窓口リンク集付きで、対応エリアも順次拡充しているため、地域を問わず日々の物件調査に活用いただけます。'),
	);

	$fields[] = array('key' => 'field_chosoku_why_txt_tab', 'label' => '選ばれる理由（テキスト）', 'type' => 'tab');
	$fields[] = array(
		'key'     => 'field_chosoku_why_intro',
		'label'   => '', 'name' => '', 'type' => 'message',
		'message' => '「選ばれる理由」セクションの見出しと、01〜06 の各タイトル・説明文を編集できます（画像は「選ばれる理由 画像」タブで設定）。未入力なら既定文を表示します。',
	);
	$fields[] = array('key' => 'field_chosoku_why_eyebrow', 'label' => 'セクション：ラベル', 'name' => 'why_eyebrow', 'type' => 'text', 'placeholder' => 'WHY 調速');
	$fields[] = array('key' => 'field_chosoku_why_title', 'label' => 'セクション：見出し', 'name' => 'why_title', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'instructions' => 'Enterで改行できます。', 'placeholder' => '調速が、現場に選ばれる理由');
	$fields[] = array('key' => 'field_chosoku_why_lead', 'label' => 'セクション：リード文', 'name' => 'why_lead', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'placeholder' => 'スピードだけでなく、不動産業務の“正確さ”と“安心”を支える設計にこだわりました。');
	for ($n = 1; $n <= 6; $n++) {
		$d = $why_defaults[$n];
		$fields[] = array('key' => 'field_chosoku_why_' . $n . '_label', 'label' => '', 'name' => '', 'type' => 'message', 'message' => '<strong>0' . $n . '</strong>');
		$fields[] = array('key' => 'field_chosoku_why_' . $n . '_title', 'label' => '0' . $n . '：タイトル', 'name' => 'why_' . $n . '_title', 'type' => 'text', 'placeholder' => $d['title']);
		$fields[] = array('key' => 'field_chosoku_why_' . $n . '_desc', 'label' => '0' . $n . '：説明文', 'name' => 'why_' . $n . '_desc', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'placeholder' => $d['desc']);
	}

	acf_add_local_field_group(array(
		'key'                   => 'group_chosoku_lp',
		'title'                 => '調速LP コンテンツ',
		'fields'                => $fields,
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'acf_after_title', // タイトル直下＝編集画面の上部
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
		'description'           => 'ホームページに設定した固定ページで編集できるLPコンテンツ。',
	));
}
