<?php
/**
 * ACF フィールド登録（無料版・繰り返しフィールド不使用）
 *
 * ホームページに設定した固定ページの編集画面（タイトル直下）に
 * 「調速LP コンテンツ」グループを表示し、各セクションを入力できるようにする。
 * 入力が空の項目はテーマ既定の文言・画像を表示する（プレースホルダーに既定文を表示）。
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

	$fields = array();

	/* -------- よくある質問（FAQ） -------- */
	$faq_defaults = chosoku_faq_defaults();
	$fields[] = array('key' => 'field_chosoku_faq_tab', 'label' => 'よくある質問（FAQ）', 'type' => 'tab');
	$fields[] = array(
		'key'     => 'field_chosoku_faq_intro',
		'label'   => '',
		'name'    => '',
		'type'    => 'message',
		'message' => '各FAQの「質問」と「回答」を入力してください（最大' . CHOSOKU_FAQ_MAX . '件）。<br><strong>質問を空欄にした項目は表示されません。</strong>すべて空欄のままなら、テーマ既定の' . count($faq_defaults) . '件を表示します。',
	);
	for ($i = 1; $i <= CHOSOKU_FAQ_MAX; $i++) {
		$d = isset($faq_defaults[$i - 1]) ? $faq_defaults[$i - 1] : array('q' => '', 'a' => '');
		$fields[] = array(
			'key'         => 'field_chosoku_faq_' . $i . '_q',
			'label'       => 'FAQ' . $i . '：質問',
			'name'        => 'faq_' . $i . '_q',
			'type'        => 'text',
			'placeholder' => $d['q'],
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

	/* -------- 案件管理表セクション -------- */
	$kanri_defaults = array(
		1 => array(
			'title' => '案件管理',
			'desc'  => '案件ごとに、顧客情報・調査データ・工程表・利回りシミュレーションを1ページで。',
			'li'    => array('案件一覧は優先度・進行状況・担当者で絞り込み', '工程表と全体工程でスケジュールを管理', '全社共有管理・チェックシートで販売準備の遅れがひと目で'),
		),
		2 => array(
			'title' => '顧客管理',
			'desc'  => 'お客様を1か所で管理。温度感・進捗・次回アクションがひと目でわかります。',
			'li'    => array('商談記録を6ステップで残せる', '次回アクションの期限切れはアラートでお知らせ', 'スマホは電話ボタンからそのまま発信'),
		),
		3 => array(
			'title' => 'ポートフォリオ',
			'desc'  => '保有物件・レントロール・借入・毎月の収支をまとめて管理。',
			'li'    => array('空室30日超はアラートでお知らせ', 'もしも試算（金利・空室・家賃の変化）', '売却試算と全体まとめ（LTV・DSCR・稼働率など）'),
		),
	);
	$fields[] = array('key' => 'field_chosoku_intg_tab', 'label' => '案件管理表', 'type' => 'tab');
	$fields[] = array(
		'key'     => 'field_chosoku_intg_intro',
		'label'   => '',
		'name'    => '',
		'type'    => 'message',
		'message' => '「案件管理表」セクションの見出し・説明文と、3つのカード（案件管理・顧客管理・ポートフォリオ）を編集できます。<br>カードの画像は空欄なら同梱の画面画像を表示します。<br>見出しの下に動画・画像を入れたい場合は「任意のメディア」を設定してください（<strong>動画URL → 動画ファイル → 画像</strong> の順に表示。すべて空欄なら表示しません）。',
	);
	$fields[] = array(
		'key'          => 'field_chosoku_intg_title',
		'label'        => '見出し',
		'name'         => 'integration_title',
		'type'         => 'textarea',
		'rows'         => 2,
		'new_lines'    => '', // 改行はテンプレート側で <br> に変換
		'instructions' => '改行したい位置で Enter を押すと、その位置で改行されます。',
		'placeholder'  => "案件・顧客・保有物件を、\nひとつの画面で。",
	);
	$fields[] = array(
		'key'         => 'field_chosoku_intg_lead',
		'label'       => '説明文',
		'name'        => 'integration_lead',
		'type'        => 'textarea',
		'rows'        => 3,
		'new_lines'   => '',
		'placeholder' => '案件管理表は、案件管理・顧客管理・ポートフォリオの3つの機能を備えた、不動産会社向けの業務アプリです。調速で調べた物件は、案件詳細の「調査データ」にそのまま入ります。',
	);
	for ($n = 1; $n <= 3; $n++) {
		$d = $kanri_defaults[$n];
		$fields[] = array('key' => 'field_chosoku_kanri_' . $n . '_label', 'label' => '', 'name' => '', 'type' => 'message', 'message' => '<strong>カード' . $n . '（' . $d['title'] . '）</strong>');
		$fields[] = array('key' => 'field_chosoku_kanri_' . $n . '_title', 'label' => 'カード' . $n . '：タイトル', 'name' => 'kanri_' . $n . '_title', 'type' => 'text', 'placeholder' => $d['title']);
		$fields[] = array('key' => 'field_chosoku_kanri_' . $n . '_desc', 'label' => 'カード' . $n . '：説明文', 'name' => 'kanri_' . $n . '_desc', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'placeholder' => $d['desc']);
		for ($j = 1; $j <= 3; $j++) {
			$fields[] = array(
				'key'         => 'field_chosoku_kanri_' . $n . '_li_' . $j,
				'label'       => 'カード' . $n . '：ポイント' . $j,
				'name'        => 'kanri_' . $n . '_li_' . $j,
				'type'        => 'text',
				'placeholder' => $d['li'][$j - 1],
				'wrapper'     => array('width' => '33'),
			);
		}
		$fields[] = array(
			'key'           => 'field_chosoku_kanri_' . $n . '_image',
			'label'         => 'カード' . $n . '：画像',
			'name'          => 'kanri_' . $n . '_image',
			'type'          => 'image',
			'return_format' => 'url',
			'preview_size'  => 'medium',
			'library'       => 'all',
			'instructions'  => '空欄なら同梱の画面画像を表示します。',
		);
	}
	$fields[] = array('key' => 'field_chosoku_kanri_note', 'label' => 'カードの下の一文', 'name' => 'kanri_note', 'type' => 'text', 'placeholder' => 'アラート・やることメモ・社内連絡も共通で使え、すべての機能がスマホに対応しています。');
	$fields[] = array('key' => 'field_chosoku_intg_media_label', 'label' => '', 'name' => '', 'type' => 'message', 'message' => '<strong>任意のメディア（見出しの下に表示）</strong>');
	$fields[] = array(
		'key'          => 'field_chosoku_intg_video_url',
		'label'        => '動画URL（YouTube / Vimeo / mp4）',
		'name'         => 'integration_video_url',
		'type'         => 'url',
		'instructions' => 'YouTube / Vimeo のURLは埋め込み、mp4等のURLは自動再生・ループで表示します（最優先）。',
	);
	$fields[] = array(
		'key'           => 'field_chosoku_intg_video',
		'label'         => '動画ファイル',
		'name'          => 'integration_media_video',
		'type'          => 'file',
		'return_format' => 'url',
		'library'       => 'all',
		'mime_types'    => 'mp4,webm,ogg,mov',
		'instructions'  => 'MP4等をアップロード。動画URLが未設定のとき表示されます（自動再生・ループ）。',
	);
	$fields[] = array(
		'key'           => 'field_chosoku_intg_image',
		'label'         => '画像',
		'name'          => 'integration_media_image',
		'type'          => 'image',
		'return_format' => 'url',
		'preview_size'  => 'medium',
		'library'       => 'all',
		'instructions'  => '動画が未設定のとき表示されます。',
	);

	/* -------- 特長（調査→価格判断→資料化 / 01-04） -------- */
	$sol_defaults = array(
		1 => array(
			'title' => '公的データの取得・整理を、住所1つで',
			'desc'  => '地図・用途地域・建蔽率/容積率・ハザード・学区・地価・周辺取引事例・周辺施設まで。調査に必要な公的データを自動で取得し、17のセクションに整理して1つの画面に表示します。',
			'li'    => array('周辺取引事例は500m・1km・2kmから、事例のある一番近い範囲を自動で選択', 'スーパー・学校・駅まで、距離と徒歩分数つき', '右側の調査メニューで、見たい項目へすぐ移動'),
		),
		2 => array(
			'title' => '価格の目安と提案文づくりを、AIが支援',
			'desc'  => '周辺の取引事例・公示地価やWeb上の募集賃料をもとに、坪単価・家賃の目安を築年別の表で整理。解体して売る場合の解体費の概算や、お客様向け提案文の下書きも作成します。いずれも営業担当の判断を支える社内向けの参考情報です。',
			'li'    => array('AI参考価格（売買・賃貸）：築年別の目安を表で', 'AI解体費（概算）：坪単価に含まれない費用も明示', 'AIが作成した部分は枠で囲んで表示'),
		),
		3 => array(
			'title' => '価格を決めて、そのまま提案資料に',
			'desc'  => '価格の計算表で「自分の考える坪単価」「AIの目安」「解体更地の場合」の3通りを並べて計算。ボタンひとつで営業決定価格に入れ、判断理由とあわせて保存できます。決めた内容はプレゼンシートと案件管理表に反映されます。',
			'li'    => array('プレゼンシートは太字・下線・大きさ・色を編集（物件概要の表はマスごと）', '印刷（PDF）・PowerPoint・Excelで出力', 'お客様向けのシートにはAIの参考価格を載せない設計'),
		),
		4 => array(
			'title' => '建築に制限がある土地に、調査の最初で気づける',
			'desc'  => '市街化調整区域、またはその境界付近と判定された物件は、赤い枠で「要確認」と表示。確認の手順と国土交通省の地図を開くボタンを用意し、都市計画課への確認漏れを防ぎます。',
			'li'    => array('確認の手順を①②③で案内', '出典は一次情報源へのリンク付き', 'AIは補助、最終判断は宅地建物取引士'),
		),
	);
	// 各項目の画像欄（02 はAIのアニメーションのため画像欄なし）
	$sol_images = array(
		1 => array('solution_1_image' => '画像'),
		3 => array('solution_3_image' => '画像（大）', 'solution_3_image_sub' => '画像（右下に重ねる小さい画像）'),
		4 => array('solution_4_image' => '画像'),
	);

	$fields[] = array('key' => 'field_chosoku_sol_tab', 'label' => '特長（01〜04）', 'type' => 'tab');
	$fields[] = array(
		'key'     => 'field_chosoku_sol_intro',
		'label'   => '', 'name' => '', 'type' => 'message',
		'message' => '「調査 → 価格判断 → 資料化」セクションの見出しと、01〜04の各項目（タイトル・説明・チェックリスト・画像）を編集できます。<br>チェックリストは空欄の項目を非表示にできます。未入力の項目は既定の文言・画像を表示します。<br>02 の右側はAIの作成アニメーションのため、画像の設定はありません。',
	);
	$fields[] = array('key' => 'field_chosoku_sol_eyebrow', 'label' => 'セクション：ラベル', 'name' => 'solution_eyebrow', 'type' => 'text', 'placeholder' => '調速 が、その悩みを1画面に。');
	$fields[] = array('key' => 'field_chosoku_sol_title', 'label' => 'セクション：見出し', 'name' => 'solution_title', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'instructions' => 'Enterで改行できます。', 'placeholder' => '調査 → 価格判断 → 資料化を、ひとつの流れで支援。');
	$fields[] = array('key' => 'field_chosoku_sol_lead', 'label' => 'セクション：リード文', 'name' => 'solution_lead', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'placeholder' => 'バラバラだった作業を1画面に集約。住所の入力から価格の判断、お客様に渡す資料づくりまで、業務の流れをソフトウェアが一気通貫で支援します。');

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
		if (2 === $n) {
			$fields[] = array('key' => 'field_chosoku_sol_2_note', 'label' => '02：注記', 'name' => 'solution_2_note', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '', 'placeholder' => '※ AIの目安は参考値です。不動産の評価・鑑定を行う機能ではありません。最終的な価格判断は宅地建物取引士の確認のもとで行ってください。');
		}
		if (isset($sol_images[$n])) {
			foreach ($sol_images[$n] as $name => $label) {
				$fields[] = array(
					'key'           => 'field_chosoku_' . $name,
					'label'         => '0' . $n . '：' . $label,
					'name'          => $name,
					'type'          => 'image',
					'return_format' => 'url',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'instructions'  => '空欄なら同梱の画面画像を表示します。',
				);
			}
		}
	}

	/* -------- 選ばれる理由（WHY / 01-06） -------- */
	$why_defaults = array(
		1 => array('title' => '出典が見える、根拠のある情報', 'desc' => '法令・地価・取引事例・ハザードは国土交通省などの公的データ、家賃や解体費の目安はWeb上の相場をもとに表示。出典や一次情報源へのリンクを添えています。'),
		2 => array('title' => '宅建士の判断を支える設計', 'desc' => 'AIは目安や確認すべき観点を示す補助役。最終的な判断は宅地建物取引士が行う前提で設計しています。'),
		3 => array('title' => '業務フローの起点集約', 'desc' => '自治体の窓口ページ、路線価図、ポータルサイトの検索を1画面に集約。同じ物件情報を何度も入力し直す手間をなくします。'),
		4 => array('title' => '印刷・PowerPoint・Excel出力が標準装備', 'desc' => '編集したレイアウトのままA4で出力。提案書にも社内の回付資料にも、そのまま使えます。'),
		5 => array('title' => '案件管理表とひとつながり', 'desc' => '調べた物件・営業決定価格・判断理由が、そのまま案件管理表に反映。同じ情報を二度入力する必要がありません。'),
		6 => array('title' => '全国対応', 'desc' => '用途地域・ハザード・地価・取引事例などのデータ表示は全国に対応。一部の自治体は窓口リンク集付きです。'),
	);

	$fields[] = array('key' => 'field_chosoku_why_txt_tab', 'label' => '選ばれる理由（テキスト）', 'type' => 'tab');
	$fields[] = array(
		'key'     => 'field_chosoku_why_intro',
		'label'   => '', 'name' => '', 'type' => 'message',
		'message' => '「選ばれる理由」セクションの見出しと、01〜06 の各タイトル・説明文を編集できます（画像は「外観 > カスタマイズ > 調速LP設定 > 「選ばれる理由」画像」で差し替え）。未入力なら既定文を表示します。',
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
