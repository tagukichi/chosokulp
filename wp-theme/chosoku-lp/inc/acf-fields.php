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
		'type'         => 'text',
		'instructions' => '改行したい位置で Enter を押すと反映されます。',
		'placeholder'  => '案件管理「kanri」と、ひとつながり。',
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
