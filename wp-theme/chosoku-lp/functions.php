<?php
/**
 * 調速 LP（ちょーはや）theme functions
 *
 * @package chosoku-lp
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!defined('CHOSOKU_VER')) {
	define('CHOSOKU_VER', '1.0.0');
}

/**
 * テーマの基本サポート
 */
function chosoku_setup() {
	load_theme_textdomain('chosoku-lp', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets'));
	add_theme_support('custom-logo', array(
		'height'      => 120,
		'width'       => 360,
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme', 'chosoku_setup');

/**
 * CSS / JS / フォントの読み込み
 */
function chosoku_assets() {
	// Google Fonts（Noto Sans JP + Inter）
	wp_enqueue_style(
		'chosoku-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+JP:wght@400;500;700;900&display=swap',
		array(),
		null
	);

	// メインスタイル（style.css に LP 全スタイルを内包）
	wp_enqueue_style('chosoku-style', get_stylesheet_uri(), array('chosoku-fonts'), CHOSOKU_VER);

	// LP スクリプト（メニュー / リビール / タイプライター 等）
	wp_enqueue_script('chosoku-lp', get_theme_file_uri('assets/js/lp.js'), array(), CHOSOKU_VER, true);
}
add_action('wp_enqueue_scripts', 'chosoku_assets');

/**
 * フォント用 preconnect
 */
function chosoku_resource_hints($hints, $relation) {
	if ('preconnect' === $relation) {
		$hints[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin');
	}
	return $hints;
}
add_filter('wp_resource_hints', 'chosoku_resource_hints', 10, 2);

/**
 * description / OGP メタ（wp_head）
 */
function chosoku_head_meta() {
	$desc = get_theme_mod(
		'chosoku_meta_description',
		'中小不動産業者向けの物件調査支援ツール「調速（ちょーはや）」。住所1つで12種類以上の調査結果を即時表示し、AIが提案文・A4プレゼンボードまで自動で組み上げます。公的データ × AI で不動産営業の生産性を最大化。'
	);
	$title = wp_get_document_title();
	echo "\n" . '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:locale" content="ja_JP">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
	$ogimg = get_theme_mod('chosoku_og_image');
	if ($ogimg) {
		echo '<meta property="og:image" content="' . esc_url($ogimg) . '">' . "\n";
	}
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}
add_action('wp_head', 'chosoku_head_meta', 5);

require get_theme_file_path('inc/customizer.php');
require get_theme_file_path('inc/acf-fields.php');

/**
 * 外部リンク取得ヘルパー（カスタマイザー値 → 既定値）
 */
function chosoku_url($mod, $default = '#') {
	$v = get_theme_mod($mod, $default);
	return $v ? $v : $default;
}

/**
 * WHY セクションの画像スロット出力
 * カスタマイザーで設定があればそれを、無ければ薄グレーのプレースホルダーを表示。
 *
 * @param int $n 1〜6
 */
function chosoku_why_image($n) {
	$mod = get_theme_mod('chosoku_why_img_' . $n);
	if ($mod) {
		printf(
			'<img class="why-img" src="%s" alt="" loading="lazy">',
			esc_url($mod)
		);
	} else {
		printf(
			'<img class="why-img" src="%s" alt="" width="400" height="280" loading="lazy">',
			esc_url(get_theme_file_uri('assets/img/why/placeholder.svg'))
		);
	}
}

/**
 * 利用規約リンク先URLを返す。
 * 優先順：カスタマイザーで指定 → 「利用規約」テンプレートを使う固定ページ → '#'
 */
function chosoku_terms_url() {
	$v = get_theme_mod('chosoku_terms_url', '#');
	if ($v && $v !== '#') {
		return $v;
	}
	$pages = get_posts(array(
		'post_type'   => 'page',
		'post_status' => 'publish',
		'numberposts' => 1,
		'fields'      => 'ids',
		'meta_key'    => '_wp_page_template',
		'meta_value'  => 'template-terms.php',
	));
	if (!empty($pages)) {
		return get_permalink($pages[0]);
	}
	return '#';
}

/**
 * 特定商取引法に基づく表記のリンク先URLを返す。
 * 優先順：カスタマイザー指定 →「特定商取引法に基づく表記」テンプレートを使う固定ページ → '#'
 */
function chosoku_tokusho_url() {
	$v = get_theme_mod('chosoku_tokusho_url', '#');
	if ($v && $v !== '#') {
		return $v;
	}
	$pages = get_posts(array(
		'post_type'   => 'page',
		'post_status' => 'publish',
		'numberposts' => 1,
		'fields'      => 'ids',
		'meta_key'    => '_wp_page_template',
		'meta_value'  => 'template-tokusho.php',
	));
	if (!empty($pages)) {
		return get_permalink($pages[0]);
	}
	return '#';
}

/**
 * ACFテキスト取得。入力があればエスケープ＋改行反映した値、無ければ既定HTMLをそのまま返す。
 *
 * @param string $name         ACFフィールド名
 * @param string $default_html 未入力時に出力する既定のHTML（テーマ内の信頼できる文字列）
 * @return string 出力用HTML
 */
function chosoku_text($name, $default_html = '') {
	if (function_exists('get_field')) {
		$pid = get_option('page_on_front');
		$pid = $pid ? $pid : null;
		$v = trim((string) get_field($name, $pid));
		if ($v !== '') {
			return nl2br(esc_html($v));
		}
	}
	return $default_html;
}

/**
 * ACFの連番テキスト（$prefix.1〜$count）を配列で取得。
 * 入力があるものだけを返し、1つも無ければ既定配列を返す。
 *
 * @param string $prefix   例 'solution_1_li_'
 * @param array  $defaults 未入力時の既定配列
 * @param int    $count    項目数
 * @return array
 */
function chosoku_list($prefix, $defaults, $count = 3) {
	if (function_exists('get_field')) {
		$pid = get_option('page_on_front');
		$pid = $pid ? $pid : null;
		$items = array();
		for ($i = 1; $i <= $count; $i++) {
			$v = trim((string) get_field($prefix . $i, $pid));
			if ($v !== '') {
				$items[] = $v;
			}
		}
		if (!empty($items)) {
			return $items;
		}
	}
	return $defaults;
}
