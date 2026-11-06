<?php
/**
 * LP 本体（1ページ完結のセクション群）
 *
 * @package chosoku-lp
 */
$chosoku_login   = chosoku_url('chosoku_login_url', 'https://app.cho-haya.com/');
$chosoku_privacy = chosoku_url('chosoku_privacy_url', '#');
$chosoku_cf7     = trim((string) get_theme_mod('chosoku_cf7_shortcode', ''));
$chosoku_cap     = '※ 画面はイメージです。数値・住所はダミーです。';
?>
<main>

	<!-- ============================= HERO ============================= -->
	<section data-section="hero" class="hero">
		<div class="hero-bg" aria-hidden="true">
			<span class="orb orb-1"></span>
			<span class="orb orb-2"></span>
			<span class="orb orb-3"></span>
		</div>
		<div class="container hero-inner">
			<div class="hero-copy hero-anim">
				<h1 class="hero-title">
					住所を入力して、<span class="hero-accent">約5分</span>。<br>
					不動産調査業務を効率化する<br>クラウド型ソフトウェア。
				</h1>
				<p class="hero-lead">
					<span class="hero-accent">公的データ × AI</span> で、不動産調査業務の生産性を最大化。<br class="pc-only">
					公的データの取得・整理から価格判断、提案資料、案件管理までを、ひとつの流れで支援します。
				</p>
				<div class="hero-cta">
					<a href="#contact" class="btn btn-primary btn-lg">お問い合わせはこちら</a>
				</div>
				<ul class="hero-points">
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						調査業務の時間を約1/10に
					</li>
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						価格判断の支援まで
					</li>
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						案件管理表と連携
					</li>
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						スマホ対応
					</li>
				</ul>
			</div>

			<!-- 製品画面（実画面：PC + スマホ） -->
			<div class="hero-visual hero-anim-visual">
				<!-- 製品モック：実際の調査画面の構成（左＝番号付きの調査結果、右＝調査メニュー）に似せたアニメーション -->
				<div class="mock-window" role="img" aria-label="調速の調査画面のイメージ（左に調査結果、右に調査メニュー）">
					<div class="mock-bar">
						<span class="mock-dot"></span><span class="mock-dot"></span><span class="mock-dot"></span>
						<span class="mock-url">app.cho-haya.com</span>
					</div>
					<div class="fvm-body" aria-hidden="true">
						<div class="fvm-main">
							<div class="fvm-track">
								<section class="fvm-card fvm-card--9">
									<h4><span class="fvm-no">9</span>土地評価額</h4>
									<div class="fvm-row"><span class="mock-skel w40"></span><span class="mock-skel w30"></span></div>
								</section>
								<section class="fvm-card fvm-card--10">
									<h4><span class="fvm-no">10</span>周辺取引事例</h4>
									<div class="fvm-seg"><span class="is-on">〜500m</span><span>〜1km</span><span>〜2km</span><span>市全体</span></div>
									<div class="fvm-chart"><span class="mock-bars"><i style="height:45%"></i><i style="height:70%"></i><i style="height:55%"></i><i style="height:85%"></i><i style="height:62%"></i><i style="height:76%"></i></span></div>
									<div class="fvm-row"><span class="mock-skel w90"></span></div>
								</section>
								<section class="fvm-card fvm-card--11">
									<h4><span class="fvm-no">11</span>AI参考価格</h4>
									<div class="fvm-cols">
										<div class="fvm-box">
											<span class="fvm-label">AI参考価格（売買）</span>
											<div class="fvm-ai fvm-ai--glow"><span class="fvm-ai-head">AIが作成した内容</span><span class="mock-skel w90"></span><span class="mock-skel w70"></span><span class="mock-skel w80"></span></div>
										</div>
										<div class="fvm-box">
											<span class="fvm-label">AI参考価格（賃貸）</span>
											<div class="fvm-ai"><span class="fvm-ai-head">AIが作成した内容</span><span class="fvm-big"></span><span class="mock-skel w80"></span><span class="mock-skel w60"></span></div>
										</div>
									</div>
								</section>
								<section class="fvm-card fvm-card--12">
									<h4><span class="fvm-no">12</span>ポータルサイトで検索</h4>
									<div class="fvm-chips"><span></span><span></span><span></span><span></span></div>
								</section>
								<section class="fvm-card fvm-card--13">
									<h4><span class="fvm-no">13</span>営業決定価格</h4>
									<div class="fvm-calc"><span class="fvm-cell"></span><b>×</b><span class="fvm-cell"></span><b>=</b><span class="fvm-cell fvm-cell--result"></span></div>
									<div class="fvm-final"><span class="fvm-final-tag">最終判断</span><span class="mock-skel w50"></span></div>
								</section>
								<section class="fvm-card fvm-card--14">
									<h4><span class="fvm-no">14</span>AIレポート</h4>
									<span class="mock-skel w90"></span><span class="mock-skel w70"></span>
								</section>
							</div>
						</div>
						<div class="fvm-menu">
							<span class="fvm-btn fvm-btn--ghost">新規物件調査</span>
							<span class="fvm-btn">プレゼンシートを作成</span>
							<span class="fvm-btn">案件管理表に登録</span>
							<span class="fvm-btn fvm-btn--ghost">印刷 / PDF保存</span>
							<span class="fvm-menu-label">調査メニュー</span>
							<ol class="fvm-menu-list">
								<li class="fvm-menu-active"></li>
								<li><span>9</span>土地評価額</li>
								<li><span>10</span>周辺取引事例</li>
								<li><span>11</span>AI参考価格</li>
								<li><span>12</span>ポータル検索</li>
								<li><span>13</span>営業決定価格</li>
								<li><span>14</span>AIレポート</li>
							</ol>
						</div>
					</div>
				</div>

				<div class="mock-phone" aria-hidden="true">
					<div class="mock-phone-notch"></div>
					<div class="mock-phone-screen fvm-phone">
						<span class="fvm-phone-btn">PowerPointで出力</span>
						<div class="fvm-phone-card">
							<b>物件調査サマリー</b>
							<span class="mock-skel w70"></span>
						</div>
						<div class="fvm-phone-card">
							<span class="mock-panel-tag">物件概要</span>
							<div class="fvm-phone-rows"><i></i><span class="mock-skel w80"></span><i></i><span class="mock-skel w60"></span><i></i><span class="mock-skel w70"></span><i></i><span class="mock-skel w50"></span></div>
						</div>
					</div>
				</div>
				<p class="shot-cap shot-cap--hero">※ 画面はイメージです。</p>
			</div>
		</div>

		<div class="hero-marquee" aria-hidden="true">
			<div class="marquee-track">
				<span>国土交通省</span><span>国税庁</span><span>国土地理院</span><span>e-Stat</span><span>Google Maps Places</span>
				<span>国土交通省</span><span>国税庁</span><span>国土地理院</span><span>e-Stat</span><span>Google Maps Places</span>
			</div>
		</div>
	</section>

	<!-- ============================= 課題提起 ============================= -->
	<section data-section="problem" class="problem section" id="problem">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">PROBLEMS</p>
				<h2 class="section-title"><span class="nobr">こんなお悩み、</span><span class="nobr">ありませんか？</span></h2>
				<p class="section-lead">ひとつでも当てはまったら、調速がきっとお役に立てます。</p>
			</div>

			<ul class="problem-list reveal" aria-label="営業の現場でよくあるお悩み">
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>自治体の窓口やポータルサイトを行き来して、<span class="nobr">移動と待ち時間で半日が消えてしまう</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>調べる項目が多く、<span class="nobr">市街化調整区域などの確認漏れが心配</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>価格の根拠をそろえるのに、<span class="nobr">取引事例や相場を何度も調べ直している</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>お客様向けの資料を、<span class="nobr">毎回定型文から作成している</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>案件・顧客・保有物件の情報が、<span class="nobr">Excelや紙に散らばっている</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>新人とベテランで、<span class="nobr">調査品質にバラツキが出てしまう</span></p>
				</li>
			</ul>
		</div>
	</section>

	<!-- ============================= ソリューション ============================= -->
	<section data-section="solution" class="solution section" id="solution">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow"><?php echo chosoku_text('solution_eyebrow', '調速 が、その悩みを1画面に。'); ?></p>
				<h2 class="section-title"><?php echo chosoku_text('solution_title', '<span class="nobr">調査 → 価格判断 →</span> <span class="nobr">資料化を、</span><span class="nobr">ひとつの流れで支援。</span>'); ?></h2>
				<p class="section-lead"><?php echo chosoku_text('solution_lead', 'バラバラだった作業を1画面に集約。住所の入力から価格の判断、お客様に渡す資料づくりまで、業務の流れをソフトウェアが一気通貫で支援します。'); ?></p>
			</div>

			<!-- 01 -->
			<div class="sol-row">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">01</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_1_title', '<span class="nobr">公的データの取得・整理を、</span><span class="nobr">住所1つで</span>'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_1_desc', '地図・用途地域・建蔽率/容積率・ハザード・学区・地価・周辺取引事例・周辺施設まで。調査に必要な公的データを自動で取得し、17のセクションに整理して1つの画面に表示します。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_1_li_', array('周辺取引事例は500m・1km・2kmから、事例のある一番近い範囲を自動で選択', 'スーパー・学校・駅まで、距離と徒歩分数つき', '右側の調査メニューで、見たい項目へすぐ移動')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<figure class="shot">
						<?php echo chosoku_screen_img('solution_1_image', 'assets/img/screens/sol-01.jpg', 1040, 498, '周辺取引事例（表示範囲と取引事例一覧）'); ?>
						<figcaption class="shot-cap"><?php echo esc_html($chosoku_cap); ?></figcaption>
					</figure>
				</div>
			</div>

			<!-- 02 -->
			<div class="sol-row sol-row--reverse">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">02</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_2_title', '<span class="nobr">価格の目安と提案文づくりを、</span><span class="nobr">AIが支援</span>'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_2_desc', '周辺の取引事例・公示地価やWeb上の募集賃料をもとに、坪単価・家賃の目安を築年別の表で整理。解体して売る場合の解体費の概算や、お客様向け提案文の下書きも作成します。いずれも営業担当の判断を支える社内向けの参考情報です。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_2_li_', array('AI参考価格（売買・賃貸）：築年別の目安を表で', 'AI解体費（概算）：坪単価に含まれない費用も明示', 'AIが作成した部分は枠で囲んで表示')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
					<p class="sol-note"><?php echo chosoku_text('solution_2_note', '※ AIの目安は参考値です。不動産の評価・鑑定を行う機能ではありません。最終的な価格判断は宅地建物取引士の確認のもとで行ってください。'); ?></p>
				</div>
				<div class="sol-visual reveal reveal--right">
					<div class="mock-card aim" data-ai-demo aria-label="AIが価格の目安・解体費・提案文を作成するイメージ">
						<div class="aim-tabs">
							<button type="button" class="aim-tab is-active" data-tab="price">AI参考価格</button>
							<button type="button" class="aim-tab" data-tab="demolition">AI解体費</button>
							<button type="button" class="aim-tab" data-tab="proposal">AI提案文</button>
						</div>
						<div class="aim-panes">
							<div class="aim-pane is-active" data-pane="price">
								<div class="aim-head"><span class="aim-ico">¥</span><p><b>AI参考価格（売買）</b><small>周辺の取引事例と公示地価から、坪単価の目安を整理します。</small></p></div>
								<div class="aim-range"><span class="is-on">500m</span><span>1km</span><span>2km</span></div>
								<div class="aim-frame">
									<div class="aim-frame-head"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15l-1.9-4.1L5.5 9l4.6-1.4z"/><path d="M19 14l.8 2 .2.8-2 .8L17 19l-.8-2-2-.8 2-.8z"/></svg>AIが作成した内容<span>ここから下</span></div>
									<div class="aim-frame-body">
										<p class="aim-text" data-type="対象地から500m圏・直近1年の取引事例をもとにした坪単価の目安です。周辺は築30〜40年の戸建てが中心で、公示地価の水準とも大きな乖離はありません。"></p>
										<table class="aim-table">
											<thead><tr><th>区分</th><th>坪単価の目安</th></tr></thead>
											<tbody>
												<tr><td>築10年未満</td><td><span class="aim-bar" style="width:86%"></span></td></tr>
												<tr><td>築10〜20年</td><td><span class="aim-bar" style="width:76%"></span></td></tr>
												<tr><td>築20〜30年</td><td><span class="aim-bar" style="width:68%"></span></td></tr>
												<tr class="is-hl"><td>築30〜40年</td><td><span class="aim-bar" style="width:60%"></span></td></tr>
												<tr><td>築40〜50年</td><td><span class="aim-bar" style="width:52%"></span></td></tr>
											</tbody>
										</table>
									</div>
									<div class="aim-frame-foot">▲ AIが作成した内容はここまで</div>
								</div>
							</div>

							<div class="aim-pane" data-pane="demolition">
								<div class="aim-head"><span class="aim-ico">解</span><p><b>AI解体費（概算）</b><small>構造別の解体費の相場から、延床面積をもとに総額の目安を計算します。</small></p></div>
								<div class="aim-frame">
									<div class="aim-frame-head"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15l-1.9-4.1L5.5 9l4.6-1.4z"/><path d="M19 14l.8 2 .2.8-2 .8L17 19l-.8-2-2-.8 2-.8z"/></svg>AIが作成した内容<span>ここから下</span></div>
									<div class="aim-frame-body">
										<p class="aim-text" data-type="対象地域の構造別の相場をもとに、延床面積から解体費の総額の目安を計算しました。実際の費用は解体業者の見積もりで確認してください。"></p>
										<table class="aim-table">
											<thead><tr><th>構造</th><th>坪単価の目安</th></tr></thead>
											<tbody>
												<tr class="is-hl"><td>木造</td><td><span class="aim-bar" style="width:50%"></span></td></tr>
												<tr><td>軽量鉄骨造</td><td><span class="aim-bar" style="width:62%"></span></td></tr>
												<tr><td>重量鉄骨造</td><td><span class="aim-bar" style="width:72%"></span></td></tr>
												<tr><td>RC造</td><td><span class="aim-bar" style="width:84%"></span></td></tr>
											</tbody>
										</table>
										<p class="aim-note aim-reveal"><b>坪単価に含まれない費用（別途）</b>付帯工事・残置物の処分・地中埋設物の撤去・アスベストの事前調査</p>
									</div>
									<div class="aim-frame-foot">▲ AIが作成した内容はここまで</div>
								</div>
							</div>

							<div class="aim-pane" data-pane="proposal">
								<div class="aim-head"><span class="aim-ico">文</span><p><b>AI提案文</b><small>周辺データと担当者のメモから、お客様向けの文章を下書きします。</small></p></div>
								<div class="aim-memo"><span>担当者メモ</span>子育て世帯向け・駅近を強調</div>
								<div class="aim-frame">
									<div class="aim-frame-head"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15l-1.9-4.1L5.5 9l4.6-1.4z"/><path d="M19 14l.8 2 .2.8-2 .8L17 19l-.8-2-2-.8 2-.8z"/></svg>AIが作成した内容<span>ここから下</span></div>
									<div class="aim-frame-body">
										<p class="aim-text aim-text--long" data-type="最寄り駅まで徒歩8分。周辺にはスーパーや小学校が揃い、子育て世帯にも暮らしやすいエリアです。落ち着いた住環境で、はじめてのマイホームにも安心してお選びいただけます。"></p>
									</div>
									<div class="aim-frame-foot">▲ AIが作成した内容はここまで</div>
								</div>
							</div>
						</div>
						<div class="aim-status"><span class="aim-dot"></span><span class="aim-status-text">AIが作成します</span></div>
					</div>
				</div>
			</div>

			<!-- 03 -->
			<div class="sol-row">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">03</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_3_title', '<span class="nobr">価格を決めて、</span><span class="nobr">そのまま提案資料に</span>'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_3_desc', '価格の計算表で「自分の考える坪単価」「AIの目安」「解体更地の場合」の3通りを並べて計算。ボタンひとつで営業決定価格に入れ、判断理由とあわせて保存できます。決めた内容はプレゼンシートと案件管理表に反映されます。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_3_li_', array('プレゼンシートは太字・下線・大きさ・色を編集（物件概要の表はマスごと）', '印刷（PDF）・PowerPoint・Excelで出力', 'お客様向けのシートにはAIの参考価格を載せない設計')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<figure class="shot shot--layered">
						<?php echo chosoku_screen_img('solution_3_image', 'assets/img/screens/sol-03.jpg', 1040, 858, '価格の計算表と最終判断（営業決定価格・判断理由）'); ?>
						<?php echo chosoku_screen_img('solution_3_image_sub', 'assets/img/screens/sol-03b.jpg', 560, 593, 'プレゼンシートの書式編集ツール（太字・下線・大きさ・色）', 'shot-overlay'); ?>
						<figcaption class="shot-cap"><?php echo esc_html($chosoku_cap); ?></figcaption>
					</figure>
				</div>
			</div>

			<!-- 04 -->
			<div class="sol-row sol-row--reverse">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">04</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_4_title', '<span class="nobr">建築に制限がある土地に、</span><span class="nobr">調査の最初で気づける</span>'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_4_desc', '市街化調整区域、またはその境界付近と判定された物件は、赤い枠で「要確認」と表示。確認の手順と国土交通省の地図を開くボタンを用意し、都市計画課への確認漏れを防ぎます。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_4_li_', array('確認の手順を①②③で案内', '出典は一次情報源へのリンク付き', 'AIは補助、最終判断は宅地建物取引士')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<figure class="shot shot--narrow">
						<?php echo chosoku_screen_img('solution_4_image', 'assets/img/screens/sol-04.jpg', 1010, 1395, '市街化調整区域の境界付近を知らせる赤い枠と確認の手順'); ?>
						<figcaption class="shot-cap">※ 画面はイメージです。住所はダミーです。</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<!-- ============================= 機能 ============================= -->
	<section data-section="features" class="features section section--alt" id="features">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">FEATURES</p>
				<h2 class="section-title"><span class="nobr">業務の一日を支える、</span><span class="nobr">6つの機能</span></h2>
				<p class="section-lead">調査業務から価格判断、提案、案件登録まで。現場で本当に必要な機能を、迷わない導線でまとめました。</p>
			</div>

			<div class="feature-cards">
				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></div>
					<h3 class="feature-card-title">ワンクリック多面調査</h3>
					<p class="feature-card-desc">地図・法令・ハザード・地価・周辺取引事例・周辺施設まで、17のセクションで一覧表示します。</p>
					<ul class="feature-card-points">
						<li>取引事例は期間・種別・用途地域で絞り込み、Excel出力も</li>
						<li>人口推移・路線価図索引</li>
						<li>調査メニューで項目へすぐ移動</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15l-1.9-4.1L5.5 9l4.6-1.4z"/><path d="M19 14l.8 2 .2.8-2 .8L17 19l-.8-2-2-.8 2-.8z"/></svg></div>
					<h3 class="feature-card-title">AI参考価格<span class="nobr">（売買・賃貸）</span></h3>
					<p class="feature-card-desc">取引事例・公示地価や募集賃料をもとに、坪単価・家賃の目安を築年別に整理。価格判断を支える社内向けの参考情報です。</p>
					<ul class="feature-card-points">
						<li>坪単価の目安と売り目線（売買）</li>
						<li>間取り別・築年別の家賃目安（賃貸）</li>
						<li>道路付・土地形状などの条件を反映した補正後の目安</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="m15 12-8.4 8.4a2.1 2.1 0 0 1-3-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.9-1.9a2 2 0 0 1-.6-1.4V7l-2.3-2.3a6 6 0 0 0-4.2-1.7H9l.9.8A6.2 6.2 0 0 1 12 8.4V10l2 2h1.2a2 2 0 0 1 1.4.6l1.9 1.9"/></svg></div>
					<h3 class="feature-card-title">AI解体費<span class="nobr">（概算）</span></h3>
					<p class="feature-card-desc">地域の構造別の解体費の相場から、延床面積をもとに総額の目安を計算します。</p>
					<ul class="feature-card-points">
						<li>総額の平均と範囲を表示</li>
						<li>付帯工事・残置物・地中埋設物・アスベスト調査は別途費用になることを明示</li>
						<li>解体業者の見積もりで確認する前提</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M16 14v4M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M8 18h.01M12 18h.01"/></svg></div>
					<h3 class="feature-card-title">価格の計算表と最終判断</h3>
					<p class="feature-card-desc">3通りの計算を並べ、ボタンひとつで営業決定価格へ。判断理由とあわせて自動保存します。</p>
					<ul class="feature-card-points">
						<li>自分の坪単価・AIの目安・解体更地の場合を比較</li>
						<li>「この金額を使う」で最終判断へ反映</li>
						<li>プレゼンシート・案件管理表に自動で反映</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M8 18v2M16 18v2"/></svg></div>
					<h3 class="feature-card-title">プレゼンシート</h3>
					<p class="feature-card-desc">各ブロックの本文も物件概要の表も、太字・下線・大きさ・色を変えられます。</p>
					<ul class="feature-card-points">
						<li>物件概要の表はマスごとに編集</li>
						<li>印刷（PDF）・PowerPoint・Excelで出力</li>
						<li>自由記入ボックスを追加</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg></div>
					<h3 class="feature-card-title">ポータルサイトで検索</h3>
					<p class="feature-card-desc">主要なポータルサイトを、売買・賃貸を切り替えて町名・市名で検索。月極駐車場も地図で探せます。</p>
					<ul class="feature-card-points">
						<li>売買／賃貸の切り替え</li>
						<li>町名／市名の切り替え</li>
						<li>月極駐車場を地図と専門サイトで検索</li>
					</ul>
				</article>
			</div>
		</div>
	</section>

	<!-- ============================= 使い方（3ステップ） ============================= -->
	<section data-section="how" class="how section" id="how">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">HOW IT WORKS</p>
				<h2 class="section-title"><span class="nobr">使い方は、</span><span class="nobr">たったの3ステップ</span></h2>
				<p class="section-lead">特別な準備は不要。住所の入力から、価格の判断、お客様に渡す資料の作成までをソフトウェアが支援します。</p>
			</div>

			<ol class="steps steps--timeline">
				<li class="step reveal">
					<div class="step-marker"><span class="step-num">1</span></div>
					<div class="step-body">
						<span class="step-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
						<h3>住所を入力</h3>
						<p>調べたい物件の住所と、わかる範囲の物件情報を入力するだけ。</p>
					</div>
				</li>
				<li class="step reveal">
					<div class="step-marker"><span class="step-num">2</span></div>
					<div class="step-body">
						<span class="step-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></span>
						<h3>調査結果とAIの目安を確認</h3>
						<p>法令・ハザード・取引事例などの調査結果と、AIの参考価格・解体費の目安が一画面に並びます。</p>
					</div>
				</li>
				<li class="step reveal">
					<div class="step-marker"><span class="step-num">3</span></div>
					<div class="step-body">
						<span class="step-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/></svg></span>
						<h3>価格を決めて、資料と案件に</h3>
						<p>計算表で営業決定価格を決め、プレゼンシートを出力。案件管理表にもそのまま登録できます。</p>
					</div>
				</li>
			</ol>

			<div class="how-cta reveal">
				<a href="#contact" class="btn btn-primary btn-lg">お問い合わせはこちら</a>
			</div>
		</div>
	</section>

	<!-- ============================= 選ばれる理由 ============================= -->
	<section data-section="why" class="why section section--alt" id="why">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow"><?php echo chosoku_text('why_eyebrow', 'WHY 調速'); ?></p>
				<h2 class="section-title"><?php echo chosoku_text('why_title', '<span class="nobr">調速が、</span><span class="nobr">現場に選ばれる理由</span>'); ?></h2>
				<p class="section-lead"><?php echo chosoku_text('why_lead', 'スピードだけでなく、不動産業務の“正確さ”と“安心”を支える設計にこだわりました。'); ?></p>
			</div>

			<?php
			$why_texts = array(
				1 => array('出典が見える、根拠のある情報', '法令・地価・取引事例・ハザードは国土交通省などの公的データ、家賃や解体費の目安はWeb上の相場をもとに表示。出典や一次情報源へのリンクを添えています。'),
				2 => array('宅建士の判断を支える設計', 'AIは目安や確認すべき観点を示す補助役。最終的な判断は宅地建物取引士が行う前提で設計しています。'),
				3 => array('業務フローの起点集約', '自治体の窓口ページ、路線価図、ポータルサイトの検索を1画面に集約。同じ物件情報を何度も入力し直す手間をなくします。'),
				4 => array('印刷・PowerPoint・Excel出力が標準装備', '編集したレイアウトのままA4で出力。提案書にも社内の回付資料にも、そのまま使えます。'),
				5 => array('案件管理表とひとつながり', '調べた物件・営業決定価格・判断理由が、そのまま案件管理表に反映。同じ情報を二度入力する必要がありません。'),
				6 => array('全国対応', '用途地域・ハザード・地価・取引事例などのデータ表示は全国に対応。一部の自治体は窓口リンク集付きです。'),
			);
			?>
			<ol class="why-list">
				<?php foreach ($why_texts as $n => $wt) : ?>
					<li class="why-item reveal">
						<?php chosoku_why_figure($n); ?>
						<div class="why-text">
							<span class="why-num"><?php echo esc_html(sprintf('%02d', $n)); ?></span>
							<h3><?php echo chosoku_text('why_' . $n . '_title', 4 === $n ? '<span class="nobr">印刷・PowerPoint・Excel出力が</span><span class="nobr">標準装備</span>' : esc_html($wt[0])); ?></h3>
							<p><?php echo chosoku_text('why_' . $n . '_desc', esc_html($wt[1])); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
			<p class="shot-cap shot-cap--center"><?php echo esc_html($chosoku_cap); ?></p>
		</div>
	</section>

	<!-- ============================= 案件管理表 ============================= -->
	<?php
	// 案件管理表セクション：ACF優先、未入力は既定値
	$intg_pid = (int) get_option('page_on_front');
	$intg_pid = $intg_pid ? $intg_pid : null;
	$intg_gf  = function_exists('get_field');

	// 任意のメディア（動画URL(埋め込み) > 動画URL(mp4等) > 動画ファイル > 画像）。未設定なら表示しない
	$intg_video_url = $intg_gf ? trim((string) get_field('integration_video_url', $intg_pid)) : '';
	$intg_video     = $intg_gf ? trim((string) get_field('integration_media_video', $intg_pid)) : '';
	$intg_image     = $intg_gf ? trim((string) get_field('integration_media_image', $intg_pid)) : '';
	$intg_embed = '';
	if ($intg_video_url !== '' && function_exists('wp_oembed_get')) {
		$intg_embed = wp_oembed_get($intg_video_url);
		if (!$intg_embed) { $intg_embed = ''; }
	}
	$intg_url_file = ($intg_video_url !== '' && preg_match('/\.(mp4|webm|ogg|mov)(\?.*)?$/i', $intg_video_url));

	$kanri_cards = array(
		1 => array(
			'mod'   => 'case',
			'title' => '案件管理',
			'desc'  => '案件ごとに、顧客情報・調査データ・工程表・利回りシミュレーションを1ページで。',
			'li'    => array('案件一覧は優先度・進行状況・担当者で絞り込み', '工程表と全体工程でスケジュールを管理', '全社共有管理・チェックシートで販売準備の遅れがひと目で'),
			'img'   => array('assets/img/screens/kanri-case.jpg', 640, 391, '案件管理の画面'),
		),
		2 => array(
			'mod'   => 'customer',
			'title' => '顧客管理',
			'desc'  => 'お客様を1か所で管理。温度感・進捗・次回アクションがひと目でわかります。',
			'li'    => array('商談記録を6ステップで残せる', '次回アクションの期限切れはアラートでお知らせ', 'スマホは電話ボタンからそのまま発信'),
			'img'   => array('assets/img/screens/kanri-customer.jpg', 640, 386, '顧客管理の画面'),
		),
		3 => array(
			'mod'   => 'portfolio',
			'title' => 'ポートフォリオ',
			'desc'  => '保有物件・レントロール・借入・毎月の収支をまとめて管理。',
			'li'    => array('空室30日超はアラートでお知らせ', 'もしも試算（金利・空室・家賃の変化）', '売却試算と全体まとめ（LTV・DSCR・稼働率など）'),
			'img'   => array('assets/img/screens/kanri-portfolio.jpg', 640, 388, 'ポートフォリオの画面'),
		),
	);
	?>
	<section data-section="integration" class="integration section" id="integration">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">CASE MANAGEMENT</p>
				<h2 class="section-title"><?php echo chosoku_text('integration_title', '<span class="nobr">案件・顧客・保有物件を、</span><span class="nobr">ひとつの画面で。</span>'); ?></h2>
				<p class="section-lead"><?php echo chosoku_text('integration_lead', '案件管理表は、案件管理・顧客管理・ポートフォリオの3つの機能を備えた、不動産会社向けの業務アプリです。調速で調べた物件は、案件詳細の「調査データ」にそのまま入ります。'); ?></p>
			</div>

			<?php if ($intg_embed !== '' || $intg_url_file || $intg_video !== '' || $intg_image !== '') : ?>
				<div class="kanri-media reveal">
					<?php if ($intg_embed !== '') : ?>
						<div class="integration-media integration-embed"><?php echo $intg_embed; // WPコアのoEmbed（YouTube/Vimeo等） ?></div>
					<?php elseif ($intg_url_file) : ?>
						<div class="integration-media"><video src="<?php echo esc_url($intg_video_url); ?>" autoplay muted loop playsinline preload="auto"></video></div>
					<?php elseif ($intg_video !== '') : ?>
						<div class="integration-media"><video src="<?php echo esc_url($intg_video); ?>" autoplay muted loop playsinline preload="auto"></video></div>
					<?php else : ?>
						<div class="integration-media integration-media--light"><img src="<?php echo esc_url($intg_image); ?>" alt="" loading="lazy"></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<div class="kanri-cards">
				<?php foreach ($kanri_cards as $n => $kc) : ?>
					<article class="kanri-card kanri-card--<?php echo esc_attr($kc['mod']); ?> reveal">
						<?php echo chosoku_screen_img('kanri_' . $n . '_image', $kc['img'][0], $kc['img'][1], $kc['img'][2], $kc['img'][3], 'kanri-card-img'); ?>
						<div class="kanri-card-body">
							<h3 class="kanri-card-title"><?php echo chosoku_text('kanri_' . $n . '_title', esc_html($kc['title'])); ?></h3>
							<p class="kanri-card-desc"><?php echo chosoku_text('kanri_' . $n . '_desc', esc_html($kc['desc'])); ?></p>
							<ul class="feature-card-points">
								<?php foreach (chosoku_list('kanri_' . $n . '_li_', $kc['li']) as $li) : ?>
									<li><?php echo esc_html($li); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
			<p class="kanri-note reveal"><?php echo chosoku_text('kanri_note', 'アラート・やることメモ・社内連絡も共通で使え、すべての機能がスマホに対応しています。'); ?></p>
			<p class="shot-cap shot-cap--center">※ 画面はイメージです。会社名・人名・物件名・金額は架空のものです。</p>
		</div>
	</section>

	<!-- ============================= FAQ ============================= -->
	<section data-section="faq" class="faq section section--alt" id="faq">
		<div class="container container--narrow">
			<div class="section-head reveal">
				<p class="eyebrow">FAQ</p>
				<h2 class="section-title">よくあるご質問</h2>
			</div>

			<?php
			// 既定のFAQ（ACF未入力時のフォールバック）
			$faq_defaults = chosoku_faq_defaults();

			// ACF（固定ページ）に入力があればそれを優先。質問が空の項目は非表示。
			$faq_items = array();
			if (function_exists('get_field')) {
				$lp_pid = (int) get_option('page_on_front');
				for ($i = 1; $i <= CHOSOKU_FAQ_MAX; $i++) {
					$q = trim((string) get_field('faq_' . $i . '_q', $lp_pid ? $lp_pid : null));
					$a = trim((string) get_field('faq_' . $i . '_a', $lp_pid ? $lp_pid : null));
					if ($q !== '') {
						$faq_items[] = array('q' => $q, 'a' => $a);
					}
				}
			}
			if (empty($faq_items)) {
				$faq_items = $faq_defaults;
			}
			?>
			<div class="faq-list reveal">
				<?php foreach ($faq_items as $faq) : ?>
					<details class="faq-item">
						<summary><?php echo esc_html($faq['q']); ?></summary>
						<div class="faq-body"><p><?php echo nl2br(esc_html($faq['a'])); ?></p></div>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ============================= お問い合わせ ============================= -->
	<section data-section="contact" class="contact section" id="contact">
		<div class="container">
			<div class="contact-inner">
				<div class="contact-text reveal">
					<p class="eyebrow">CONTACT</p>
					<h2 class="section-title">まずは、お気軽にご相談ください。</h2>
					<p class="section-lead">資料請求・導入のご相談を承っています。内容を確認のうえ、担当者よりご連絡いたします。</p>
				</div>

				<?php if ($chosoku_cf7 !== '') : ?>
					<!-- Contact Form 7（カスタマイザーで設定されたショートコード） -->
					<div class="contact-form reveal cf7-wrap">
						<?php echo do_shortcode($chosoku_cf7); ?>
					</div>
				<?php else : ?>
					<!-- フォールバック: デザイン確認用のダミーフォーム（CF7未設定時） -->
					<form class="contact-form reveal" id="contactForm" novalidate>
						<div class="field">
							<label for="cf-type">お問い合わせ種別<span class="req">必須</span></label>
							<select id="cf-type" name="inquiry-type" required>
								<option value="">選択してください</option>
								<option value="document">資料請求</option>
								<option value="consult">導入のご相談</option>
								<option value="other">その他</option>
							</select>
						</div>

						<div class="field-row">
							<div class="field">
								<label for="cf-company">会社名<span class="req">必須</span></label>
								<input type="text" id="cf-company" name="company" autocomplete="organization" required placeholder="〇〇不動産株式会社">
							</div>
							<div class="field">
								<label for="cf-name">お名前<span class="req">必須</span></label>
								<input type="text" id="cf-name" name="your-name" autocomplete="name" required placeholder="調速 太郎">
							</div>
						</div>

						<div class="field-row">
							<div class="field">
								<label for="cf-email">メールアドレス<span class="req">必須</span></label>
								<input type="email" id="cf-email" name="your-email" autocomplete="email" required placeholder="taro@example.co.jp">
							</div>
							<div class="field">
								<label for="cf-tel">電話番号</label>
								<input type="tel" id="cf-tel" name="your-tel" autocomplete="tel" placeholder="03-1234-5678">
							</div>
						</div>

						<div class="field">
							<label for="cf-message">お問い合わせ内容<span class="req">必須</span></label>
							<textarea id="cf-message" name="your-message" rows="5" required placeholder="ご相談内容・ご質問などをご記入ください。"></textarea>
						</div>

						<label class="field-check">
							<input type="checkbox" id="cf-agree" name="agree" required>
							<span><a href="<?php echo esc_url($chosoku_privacy); ?>" class="inline-link">プライバシーポリシー</a>に同意します<span class="req">必須</span></span>
						</label>

						<button type="submit" class="btn btn-primary btn-lg btn-block">送信する</button>

						<p class="form-status" id="formStatus" role="status" aria-live="polite"></p>
					</form>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>
