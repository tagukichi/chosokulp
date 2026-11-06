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
	define('CHOSOKU_VER', '1.2.1');
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
		'「調速（ちょーはや）」は、中小不動産業者の不動産調査業務を支援するクラウド型ソフトウェアです。公的データの取得・整理から、AIによる価格の目安や提案文の下書き、価格の計算、プレゼンシートの作成、案件管理表への登録までを支援し、調査業務の生産性を高めます。'
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
 * 「選ばれる理由」の画像（figure 要素ごと）を出力
 * カスタマイザーで画像が設定されていればそれを、無ければ同梱のアプリ画面画像を表示。
 *
 * @param int $n 1〜6
 */
function chosoku_why_figure($n) {
	$mod = get_theme_mod('chosoku_why_img_' . $n);
	if ($mod) {
		printf(
			'<figure class="why-figure why-figure--screen"><img class="why-img" src="%s" alt="" loading="lazy"></figure>',
			esc_url($mod)
		);
		return;
	}
	// ファイル名, 幅, 高さ, alt, スマホ画面か
	$defaults = array(
		1 => array(array('why-01.jpg', 900, 630, 'AI解体費の注意書きと参照したWebページ', false)),
		2 => array(array('why-02.jpg', 400, 669, '最終判断（営業決定価格・判断理由）のスマホ表示', true)),
		3 => array(array('why-03.jpg', 900, 794, '物件詳細の入力（構造の表記・間取り）', false)),
		4 => array(array('why-04.jpg', 900, 412, 'プレゼンシートの印刷（PDF）', false)),
		5 => array(array('why-05.jpg', 900, 547, 'PC の案件一覧 + スマホの案件詳細の合成', false)),
		6 => array(
			array('why-06a.jpg', 300, 600, '用途地域（本庄市の例）のスマホ表示', true),
			array('why-06b.jpg', 300, 600, '周辺取引事例（所沢市の例）のスマホ表示', true),
		),
	);
	$imgs = isset($defaults[$n]) ? $defaults[$n] : array();
	$cls  = 'why-figure why-figure--screen' . (count($imgs) > 1 ? ' why-figure--duo' : '');
	echo '<figure class="' . esc_attr($cls) . '">';
	foreach ($imgs as $img) {
		printf(
			'<img class="why-img%s" src="%s" alt="%s" width="%d" height="%d" loading="lazy">',
			$img[4] ? ' why-img--sp' : '',
			esc_url(get_theme_file_uri('assets/img/screens/' . $img[0])),
			esc_attr($img[3]),
			$img[1],
			$img[2]
		);
	}
	echo '</figure>';
}

/**
 * アプリ画面画像の <img> を返す。ACF の画像欄に入力があればそれを、無ければ同梱画像を使う。
 *
 * @param string $field       ACF フィールド名（空なら常に同梱画像）
 * @param string $default_rel 同梱画像のテーマ内パス
 * @param int    $w           同梱画像の幅
 * @param int    $h           同梱画像の高さ
 * @param string $alt         代替テキスト
 * @param string $class       class 属性
 * @return string
 */
function chosoku_screen_img($field, $default_rel, $w, $h, $alt, $class = '') {
	$url = '';
	if ($field !== '' && function_exists('get_field')) {
		$pid = get_option('page_on_front');
		$v   = get_field($field, $pid ? $pid : null);
		if (is_array($v) && !empty($v['url'])) {
			$url = $v['url'];
		} elseif (is_numeric($v) && $v) {
			$url = (string) wp_get_attachment_image_url((int) $v, 'full');
		} elseif (is_string($v)) {
			$url = trim($v);
		}
	}
	$cls = $class !== '' ? ' class="' . esc_attr($class) . '"' : '';
	if ($url !== '') {
		return sprintf('<img%s src="%s" alt="%s" loading="lazy">', $cls, esc_url($url), esc_attr($alt));
	}
	return sprintf(
		'<img%s src="%s" alt="%s" width="%d" height="%d" loading="lazy">',
		$cls,
		esc_url(get_theme_file_uri($default_rel)),
		esc_attr($alt),
		$w,
		$h
	);
}

/**
 * FAQ の入力欄の数
 */
if (!defined('CHOSOKU_FAQ_MAX')) {
	define('CHOSOKU_FAQ_MAX', 8);
}

/**
 * 既定の FAQ（ACF 未入力時の表示と、ACF 入力欄のプレースホルダーで共用）
 *
 * @return array
 */
function chosoku_faq_defaults() {
	return array(
		array('q' => 'どの自治体に対応していますか？', 'a' => '用途地域・ハザード・地価・取引事例などのデータ表示は全国対応です。一部の自治体は窓口リンク集付きでご利用いただけ、対応は順次拡充しています。'),
		array('q' => 'AIが出す価格をお客様に見せてもよいですか？', 'a' => 'AI参考価格・AI解体費は営業担当向けの参考情報で、お客様向けのプレゼンシートには載りません。不動産の評価・鑑定を行う機能ではないため、最終的な価格は宅地建物取引士の確認のもとで決めてください。'),
		array('q' => '解体費はどのくらい正確ですか？', 'a' => 'Web上の相場情報からの概算です。建物の状態・立地・付帯工事で大きく変わるため、必ず解体業者の見積もりで確認してください。'),
		array('q' => 'AIが宅建士の代わりになるのですか？', 'a' => 'いいえ。調速は、お客様ご自身が行う不動産調査業務を支援するクラウド型ソフトウェアであり、調査の代行や不動産の評価・鑑定は行いません。AIは「窓口で確認すべき観点」を提示する補助で、最終的な判断・確認は宅地建物取引士が行う建付けとしています。'),
		array('q' => '個人情報やデータは安全ですか？', 'a' => '物件住所はサーバー側で処理し、認証・通信は暗号化により保護しています。詳細はお問い合わせください。'),
		array('q' => 'スマートフォンでも使えますか？', 'a' => 'はい。調査結果の閲覧と、案件管理表のすべての機能がスマホに対応しています。プレゼンシートの編集はPCで行ってください。'),
	);
}

/**
 * ヘッダー・フッター共通のロゴ画像URLを返す。
 * 優先順：サイト基本情報 > ロゴ → 調速LP設定 > ロゴ → ''（空なら同梱の横ロゴを使う）
 *
 * @return string
 */
function chosoku_logo_url() {
	$url = '';
	$id  = get_theme_mod('custom_logo');
	if ($id) {
		$url = (string) wp_get_attachment_image_url($id, 'full');
	}
	if (!$url) {
		$url = (string) get_theme_mod('chosoku_logo_yoko');
	}
	return $url;
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
