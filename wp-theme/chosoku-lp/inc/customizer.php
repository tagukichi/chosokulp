<?php
/**
 * 調速 LP カスタマイザー設定
 * 「外観 > カスタマイズ > 調速LP設定」から、ロゴ・WHY画像・各種URL・CF7フォームを設定。
 *
 * @package chosoku-lp
 */

if (!defined('ABSPATH')) {
	exit;
}

function chosoku_customize_register($wp_customize) {

	$wp_customize->add_panel('chosoku_lp', array(
		'title'    => __('調速LP設定', 'chosoku-lp'),
		'priority' => 20,
	));

	/* ---------------- ロゴ / アイコン ---------------- */
	$wp_customize->add_section('chosoku_logo', array(
		'title'       => __('ロゴ・アイコン', 'chosoku-lp'),
		'description' => __('ヘッダーは「サイト基本情報 > ロゴ」でも変更できます。ブラウザのタブに出るアイコンは「サイト基本情報 > サイトアイコン」で設定してください。', 'chosoku-lp'),
		'panel'       => 'chosoku_lp',
	));
	$wp_customize->add_setting('chosoku_logo_yoko', array('sanitize_callback' => 'esc_url_raw'));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'chosoku_logo_yoko', array(
		'label'       => __('ヘッダーロゴ（横）', 'chosoku-lp'),
		'description' => __('未設定なら「サイト基本情報 > ロゴ」→ 同梱の横ロゴ の順で表示します。', 'chosoku-lp'),
		'section'     => 'chosoku_logo',
	)));
	$wp_customize->add_setting('chosoku_logo_tate', array('sanitize_callback' => 'esc_url_raw'));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'chosoku_logo_tate', array(
		'label'       => __('フッターロゴ（縦）', 'chosoku-lp'),
		'description' => __('未設定の場合は同梱の縦ロゴを表示します。', 'chosoku-lp'),
		'section'     => 'chosoku_logo',
	)));

	/* ---------------- WHY 画像 ---------------- */
	$wp_customize->add_section('chosoku_why', array(
		'title'       => __('「選ばれる理由」画像', 'chosoku-lp'),
		'description' => __('01〜06 の各項目に表示する画像。未設定は薄いグレーのプレースホルダー。', 'chosoku-lp'),
		'panel'       => 'chosoku_lp',
	));
	for ($i = 1; $i <= 6; $i++) {
		$wp_customize->add_setting('chosoku_why_img_' . $i, array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'chosoku_why_img_' . $i, array(
			/* translators: %d 項目番号 */
			'label'   => sprintf(__('WHY画像 %02d', 'chosoku-lp'), $i),
			'section' => 'chosoku_why',
		)));
	}

	/* ---------------- お問い合わせ（CF7） ---------------- */
	$wp_customize->add_section('chosoku_contact', array(
		'title'       => __('お問い合わせフォーム', 'chosoku-lp'),
		'description' => __('Contact Form 7 のショートコードを貼り付けると、その場所に CF7 フォームを表示します。空の場合はデザイン用のダミーフォームを表示します。', 'chosoku-lp'),
		'panel'       => 'chosoku_lp',
	));
	$wp_customize->add_setting('chosoku_cf7_shortcode', array('sanitize_callback' => 'wp_kses_post'));
	$wp_customize->add_control('chosoku_cf7_shortcode', array(
		'label'       => __('CF7 ショートコード', 'chosoku-lp'),
		'description' => __('例： [contact-form-7 id="123" title="お問い合わせ"]', 'chosoku-lp'),
		'section'     => 'chosoku_contact',
		'type'        => 'textarea',
	));

	/* ---------------- 外部リンク / URL ---------------- */
	$wp_customize->add_section('chosoku_links', array(
		'title' => __('リンク・URL', 'chosoku-lp'),
		'panel' => 'chosoku_lp',
	));
	$links = array(
		'chosoku_login_url'   => array(__('ログインURL（本体アプリ）', 'chosoku-lp'), 'https://real-estate-research-app.vercel.app/'),
		'chosoku_demo_url'    => array(__('デモURL', 'chosoku-lp'), 'https://kanri-chi.vercel.app/demo'),
		'chosoku_privacy_url' => array(__('プライバシーポリシー URL', 'chosoku-lp'), '#'),
		'chosoku_terms_url'   => array(__('利用規約 URL', 'chosoku-lp'), '#'),
		'chosoku_tokusho_url' => array(__('特定商取引法に基づく表記 URL', 'chosoku-lp'), '#'),
		'chosoku_company_url' => array(__('運営会社 URL', 'chosoku-lp'), '#'),
	);
	foreach ($links as $id => $data) {
		$wp_customize->add_setting($id, array('default' => $data[1], 'sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control($id, array(
			'label'   => $data[0],
			'section' => 'chosoku_links',
			'type'    => 'url',
		));
	}

	/* ---------------- SEO / OGP ---------------- */
	$wp_customize->add_section('chosoku_seo', array(
		'title' => __('SEO / OGP', 'chosoku-lp'),
		'panel' => 'chosoku_lp',
	));
	$wp_customize->add_setting('chosoku_meta_description', array('sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control('chosoku_meta_description', array(
		'label'   => __('メタディスクリプション', 'chosoku-lp'),
		'section' => 'chosoku_seo',
		'type'    => 'textarea',
	));
	$wp_customize->add_setting('chosoku_og_image', array('sanitize_callback' => 'esc_url_raw'));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'chosoku_og_image', array(
		'label'   => __('OGP画像（SNSシェア用）', 'chosoku-lp'),
		'section' => 'chosoku_seo',
	)));
}
add_action('customize_register', 'chosoku_customize_register');
