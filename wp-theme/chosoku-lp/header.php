<?php
/**
 * Header
 *
 * @package chosoku-lp
 */
$chosoku_login = chosoku_url('chosoku_login_url', 'https://real-estate-research-app.vercel.app/');
$chosoku_logo  = get_theme_mod('chosoku_logo_yoko');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- スクロール進捗バー -->
	<div class="scroll-progress" aria-hidden="true"></div>

	<!-- ============================= HEADER ============================= -->
	<header data-section="header" class="site-header" id="top">
		<nav class="nav container">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo" aria-label="調速（チョーソク）不動産調査アプリ ホーム">
				<?php if ($chosoku_logo) : ?>
					<img src="<?php echo esc_url($chosoku_logo); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img logo-img--yoko">
				<?php else : ?>
					<img src="<?php echo esc_url(get_theme_file_uri('assets/img/logo-yoko.png')); ?>" alt="調速" class="logo-img logo-img--yoko" width="1774" height="887">
				<?php endif; ?>
			</a>

			<ul class="nav-links">
				<li><a href="#problem">課題</a></li>
				<li><a href="#solution">特長</a></li>
				<li><a href="#demo">デモ</a></li>
				<li><a href="#features">機能</a></li>
				<li><a href="#how">使い方</a></li>
				<li><a href="#faq">FAQ</a></li>
			</ul>

			<div class="nav-actions">
				<a href="<?php echo esc_url($chosoku_login); ?>" class="nav-login" target="_blank" rel="noopener">ログイン</a>
				<a href="#contact" class="btn btn-primary btn-sm">無料で試す</a>
			</div>

			<button class="hamburger" type="button" aria-label="メニュー" aria-expanded="false" aria-controls="mobileMenu">
				<span class="hamburger-line"></span>
				<span class="hamburger-line"></span>
				<span class="hamburger-line"></span>
			</button>

			<div class="mobile-menu" id="mobileMenu">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-menu-logo" aria-label="調速（チョーソク）不動産調査アプリ ホーム">
					<?php if ($chosoku_logo) : ?>
						<img src="<?php echo esc_url($chosoku_logo); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img">
					<?php else : ?>
						<img src="<?php echo esc_url(get_theme_file_uri('assets/img/logo-yoko.png')); ?>" alt="調速" class="logo-img" width="1774" height="887">
					<?php endif; ?>
				</a>
				<ul>
					<li><a href="#problem">課題</a></li>
					<li><a href="#solution">特長</a></li>
					<li><a href="#demo">デモ</a></li>
					<li><a href="#features">機能</a></li>
					<li><a href="#how">使い方</a></li>
					<li><a href="#integration">連携</a></li>
					<li><a href="#faq">FAQ</a></li>
					<li><a href="#contact">お問い合わせ</a></li>
				</ul>
				<div class="mobile-menu-actions">
					<a href="<?php echo esc_url($chosoku_login); ?>" class="btn btn-ghost" target="_blank" rel="noopener">ログイン</a>
					<a href="#contact" class="btn btn-primary">無料で試す</a>
				</div>
			</div>
		</nav>
	</header>
