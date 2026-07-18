<?php
/**
 * Footer
 *
 * @package chosoku-lp
 */
$chosoku_login    = chosoku_url('chosoku_login_url', 'https://real-estate-research-app.vercel.app/');
$chosoku_logo_t   = get_theme_mod('chosoku_logo_tate');
$chosoku_company  = chosoku_url('chosoku_company_url', '#');
$chosoku_tokusho  = chosoku_tokusho_url();
$chosoku_privacy  = chosoku_url('chosoku_privacy_url', '#');
$chosoku_terms    = chosoku_terms_url();
?>
	<!-- ============================= FOOTER ============================= -->
	<footer data-section="footer" class="site-footer">
		<div class="container footer-inner">
			<div class="footer-brand">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo-chip" aria-label="調速（ちょーはや）不動産調査アプリ ホーム">
					<?php if ($chosoku_logo_t) : ?>
						<img src="<?php echo esc_url($chosoku_logo_t); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img logo-img--tate">
					<?php else : ?>
						<img src="<?php echo esc_url(get_theme_file_uri('assets/img/logo-tate.png')); ?>" alt="調速" class="logo-img logo-img--tate" width="1254" height="1254">
					<?php endif; ?>
				</a>
				<p class="footer-tagline">公的データ × AI で、<br>不動産営業の生産性を最大化。</p>
			</div>

			<nav class="footer-nav" aria-label="フッターメニュー">
				<div class="footer-col">
					<h4>プロダクト</h4>
					<ul>
						<li><a href="#solution">特長</a></li>
						<li><a href="#demo">デモ</a></li>
						<li><a href="#features">機能</a></li>
						<li><a href="#how">使い方</a></li>
						<li><a href="#integration">kanri 連携</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>サポート</h4>
					<ul>
						<li><a href="#faq">よくある質問</a></li>
						<li><a href="#contact">お問い合わせ</a></li>
						<li><a href="<?php echo esc_url($chosoku_login); ?>" target="_blank" rel="noopener">ログイン ↗</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>会社・規約</h4>
					<ul>
						<li><a href="<?php echo esc_url($chosoku_company); ?>">運営会社</a></li>
						<li><a href="<?php echo esc_url($chosoku_tokusho); ?>">特定商取引法に基づく表記</a></li>
						<li><a href="<?php echo esc_url($chosoku_privacy); ?>">プライバシーポリシー</a></li>
						<li><a href="<?php echo esc_url($chosoku_terms); ?>">利用規約</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<p class="footer-copy">&copy; 2026 調速（ちょーはや）. All rights reserved.</p>
				<p class="footer-disclaimer">※ 本サービスは物件調査を支援するものです。各種法令・地価・取引価格等の最終確認は、一次情報源および宅地建物取引士の判断によります。</p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
