<?php
/**
 * LP 本体（1ページ完結のセクション群）
 *
 * @package chosoku-lp
 */
$chosoku_demo    = chosoku_url('chosoku_demo_url', 'https://kanri-chi.vercel.app/demo');
$chosoku_login   = chosoku_url('chosoku_login_url', 'https://real-estate-research-app.vercel.app/');
$chosoku_privacy = chosoku_url('chosoku_privacy_url', '#');
$chosoku_cf7     = trim((string) get_theme_mod('chosoku_cf7_shortcode', ''));
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
					住所を入れて、<span class="hero-accent">5分</span>。<br>
					物件調査が、<br>提案資料まで終わる。
				</h1>
				<p class="hero-lead">
					<span class="hero-accent">公的データ × AI</span> で、不動産営業の生産性を最大化。<br class="pc-only">
					12種類以上の調査結果を住所1つで即時表示し、提案文・A4資料まで自動で組み上げます。
				</p>
				<div class="hero-cta">
					<a href="#contact" class="btn btn-primary btn-lg">お問い合わせはこちら</a>
				</div>
				<ul class="hero-points">
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						調査時間を約1/10に
					</li>
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						公的データ100%
					</li>
					<li>
						<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
						スマホ対応
					</li>
				</ul>
			</div>

			<!-- 製品モック（PC + スマホ合成） -->
			<div class="hero-visual hero-anim-visual">
				<div class="mock-window" aria-label="調速 物件調査画面のイメージ" role="img">
					<div class="mock-bar">
						<span class="mock-dot"></span><span class="mock-dot"></span><span class="mock-dot"></span>
						<span class="mock-url">app.chosoku.jp</span>
					</div>
					<div class="mock-body">
						<div class="mock-search">
							<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
							<span class="mock-search-text">東京都〇〇区〇〇 1-2-3</span>
							<span class="mock-search-btn">調査</span>
						</div>
						<div class="mock-grid">
							<div class="mock-panel mock-panel--map">
								<span class="mock-panel-tag">地図</span>
								<div class="mock-map"><span class="mock-pin"></span></div>
							</div>
							<div class="mock-panel"><span class="mock-panel-tag">用途地域</span><span class="mock-skel w70"></span><span class="mock-skel w40"></span></div>
							<div class="mock-panel"><span class="mock-panel-tag">建蔽率 / 容積率</span><span class="mock-skel w60"></span><span class="mock-skel w50"></span></div>
							<div class="mock-panel"><span class="mock-panel-tag">ハザード</span><span class="mock-chip">浸水</span><span class="mock-chip">土砂</span><span class="mock-chip">地震</span></div>
							<div class="mock-panel"><span class="mock-panel-tag">学区</span><span class="mock-skel w80"></span><span class="mock-skel w50"></span></div>
							<div class="mock-panel"><span class="mock-panel-tag">地価（一次情報源リンク）</span><span class="mock-skel w70"></span><span class="mock-link-skel">国税庁で確認 ↗</span></div>
							<div class="mock-panel"><span class="mock-panel-tag">取引事例</span><span class="mock-bars"><i style="height:40%"></i><i style="height:70%"></i><i style="height:55%"></i><i style="height:85%"></i></span></div>
							<div class="mock-panel"><span class="mock-panel-tag">生活利便施設</span><span class="mock-skel w90"></span><span class="mock-skel w60"></span></div>
						</div>
					</div>
				</div>

				<div class="mock-phone" aria-hidden="true">
					<div class="mock-phone-notch"></div>
					<div class="mock-phone-screen">
						<div class="mock-phone-search"><span></span></div>
						<div class="mock-phone-map"><span class="mock-pin"></span></div>
						<div class="mock-phone-panels">
							<div class="mock-phone-panel"><span class="mock-panel-tag">用途地域</span><span class="mock-skel w70"></span></div>
							<div class="mock-phone-panel"><span class="mock-panel-tag">ハザード</span><span class="mock-chip">浸水</span><span class="mock-chip">地震</span></div>
							<div class="mock-phone-panel"><span class="mock-panel-tag">地価</span><span class="mock-skel w60"></span></div>
							<div class="mock-phone-panel"><span class="mock-panel-tag">取引事例</span><span class="mock-bars"><i style="height:50%"></i><i style="height:80%"></i><i style="height:60%"></i></span></div>
						</div>
					</div>
				</div>
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
					<p>自治体の窓口を何カ所も回り、<span class="nobr">移動と待ち時間で半日が消えてしまう</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>複数の不動産ポータル・調査サイトを、<span class="nobr">毎回ハシゴして打ち直している</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>調べる項目が多く、<span class="nobr">確認漏れや抜け漏れが起きてしまう</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>お客様向けの資料を、<span class="nobr">毎回ゼロから手作りしている</span></p>
				</li>
				<li class="problem-item">
					<span class="problem-mark" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
					<p>新人とベテランで、<span class="nobr">調査品質にばらつきが出てしまう</span></p>
				</li>
			</ul>
		</div>
	</section>

	<!-- ============================= ソリューション ============================= -->
	<section data-section="solution" class="solution section" id="solution">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow"><?php echo chosoku_text('solution_eyebrow', '調速 が、その全部を1画面に。'); ?></p>
				<h2 class="section-title"><?php echo chosoku_text('solution_title', '<span class="nobr">調査 → 提案 → 資料化を、</span><span class="nobr">ひとつの流れに。</span>'); ?></h2>
				<p class="section-lead"><?php echo chosoku_text('solution_lead', 'バラバラだった作業を集約。住所を入れるだけで、その先の資料づくりまで一気通貫で進みます。'); ?></p>
			</div>

			<!-- 01 -->
			<div class="sol-row">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">01</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_1_title', '住所1つで、12種類以上の調査結果'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_1_desc', '地図・用途地域・建蔽率/容積率・ハザード・学区・地価・取引事例・周辺施設まで。これまで何時間もかかっていた多面調査が、1つの画面に即時で並びます。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_1_li_', array('13パネルをワンクリックで一覧表示', 'スーパー・学校・駅まで、距離と徒歩分数つき', '路線価図索引はクリックで一次情報源へ')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<div class="mock-card mock-facility">
						<div class="mock-card-head"><span class="mock-panel-tag">生活利便施設（最寄り）</span></div>
						<div class="facility-grid">
							<div class="facility-panel">
								<span class="facility-cat">スーパー</span>
								<div class="facility-item"><span class="facility-name">〇〇スーパー △△店</span><span class="facility-meta"><b>約450m</b><i>徒歩6分</i></span></div>
								<div class="facility-item"><span class="facility-name">生鮮市場 □□通り店</span><span class="facility-meta"><b>約540m</b><i>徒歩7分</i></span></div>
							</div>
							<div class="facility-panel">
								<span class="facility-cat">コンビニ</span>
								<div class="facility-item"><span class="facility-name">〇〇マート △△町店</span><span class="facility-meta"><b>約140m</b><i>徒歩2分</i></span></div>
								<div class="facility-item"><span class="facility-name">□□ストア 駅前店</span><span class="facility-meta"><b>約280m</b><i>徒歩4分</i></span></div>
							</div>
							<div class="facility-panel">
								<span class="facility-cat">小学校</span>
								<div class="facility-item"><span class="facility-name">市立〇〇小学校</span><span class="facility-meta"><b>約260m</b><i>徒歩4分</i></span></div>
							</div>
							<div class="facility-panel">
								<span class="facility-cat">駅</span>
								<div class="facility-item"><span class="facility-name">〇〇線 △△駅</span><span class="facility-meta"><b>約800m</b><i>徒歩10分</i></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 02 -->
			<div class="sol-row sol-row--reverse">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">02</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_2_title', '<span class="nobr">AIが、お客様向けの</span><span class="nobr">提案文を自動生成</span>'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_2_desc', '周辺データを根拠に「この街で暮らすイメージ」が湧く提案文を生成。営業担当のフリーメモも自然に文章へ反映します。金額数値はAIに渡さない、ハルシネーション抑制設計です。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_2_li_', array('周辺データを根拠にした“暮らしの提案”', '担当者のメモを文章に反映', '最終確認は宅地建物取引士が行う建付け')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<div class="mock-card mock-ai">
						<div class="mock-ai-head">
							<svg class="ico" viewBox="0 0 24 24"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15l-1.9-4.1L5.5 9l4.6-1.4z"/><path d="M19 14l.8 2 .2.8-2 .8L17 19l-.8-2-2-.8 2-.8z"/></svg>
							<span class="mock-ai-title">AIが提案文を生成中…</span>
						</div>
						<div class="mock-ai-body">
							<p class="mock-ai-text" data-typewriter="最寄り駅まで徒歩8分。周辺にはスーパーや小学校が揃い、子育て世帯にも暮らしやすいエリアです。落ち着いた住環境で、はじめてのマイホームにも安心してお選びいただけます。"></p>
						</div>
						<div class="mock-ai-foot"><span class="mock-chip green">下書き完成</span></div>
					</div>
				</div>
			</div>

			<!-- 03 -->
			<div class="sol-row">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">03</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_3_title', '<span class="nobr">プレゼンボードで、</span><span class="nobr">A4 1枚にまとめる</span>'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_3_desc', '提案文・法令制限・周辺施設・人気店・価格情報・物件位置をブロック化。ドラッグ&ドロップで自由に並べ替え、不要なブロックは隠せます。そのままA4横でPDF印刷・Excel出力。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_3_li_', array('D&Dで並べ替え・ブロックごとに8色パレット', '編集レイアウトのままA4横で出力', '提案資料・社内回付資料にそのまま使える')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<div class="mock-card mock-board">
						<div class="mock-board-head">
							<span class="mock-panel-tag">プレゼンボード（A4横）</span>
							<span class="mock-board-tools"><i></i><i></i><i></i></span>
						</div>
						<div class="mock-board-grid mock-board-grid--2col">
							<div class="mock-block mock-block--map c1">
								<span class="mock-panel-tag">物件位置</span>
								<div class="mock-map"><span class="mock-pin"></span></div>
							</div>
							<div class="mock-block mock-block--text c2 swap-c"><span class="mock-panel-tag">AI提案文</span><span class="mock-skel w80"></span><span class="mock-grab"></span></div>
							<div class="mock-block c3 swap-a"><span class="mock-panel-tag">法令制限</span><span class="mock-skel w70"></span><span class="mock-grab"></span></div>
							<div class="mock-block c2 swap-b"><span class="mock-panel-tag">周辺施設</span><span class="mock-skel w60"></span><span class="mock-grab"></span></div>
							<div class="mock-block c1"><span class="mock-panel-tag">価格情報</span><span class="mock-skel w50"></span></div>
							<div class="mock-block c4 swap-d"><span class="mock-panel-tag">人気店</span><span class="mock-skel w60"></span><span class="mock-grab"></span></div>
						</div>
					</div>
				</div>
			</div>

			<!-- 04 -->
			<div class="sol-row sol-row--reverse">
				<div class="sol-text reveal reveal--left">
					<span class="sol-num">04</span>
					<h3 class="sol-title"><?php echo chosoku_text('solution_4_title', '公的データだから、安心して使える'); ?></h3>
					<p class="sol-desc"><?php echo chosoku_text('solution_4_desc', '国土交通省・国税庁・国土地理院・e-Stat・Google Maps Places を組み合わせ、AIが数値を“作らない”設計。一次情報源へのリンクを備え、最終確認は宅地建物取引士が行う前提で組み立てています。'); ?></p>
					<ul class="sol-list">
						<?php foreach (chosoku_list('solution_4_li_', array('出典は公的データ／一次情報源リンク付き', 'AIは「窓口で確認すべき観点」を提示', '断定ではなく、確認を支える建付け')) as $li) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($li); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="sol-visual reveal reveal--right">
					<div class="mock-card mock-sources">
						<span class="mock-panel-tag">データソース</span>
						<div class="mock-source-list">
							<div class="mock-source"><span class="mock-source-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></span>国土交通省<span class="mock-source-link">↗</span></div>
							<div class="mock-source"><span class="mock-source-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></span>国税庁（路線価）<span class="mock-source-link">↗</span></div>
							<div class="mock-source"><span class="mock-source-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></span>国土地理院<span class="mock-source-link">↗</span></div>
							<div class="mock-source"><span class="mock-source-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></span>e-Stat / Google Maps<span class="mock-source-link">↗</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============================= デモ ============================= -->
	<section data-section="demo" class="demo section" id="demo">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">DEMO</p>
				<h2 class="section-title"><span class="nobr">実際の画面を、</span><span class="nobr">その場で体験。</span></h2>
				<p class="section-lead">登録は不要です。実際の画面で、調速の使い心地をその場でお試しいただけます。</p>
			</div>

			<div class="demo-cta reveal">
				<span class="demo-cta-badge" aria-hidden="true">
					<svg class="ico" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/><path d="m10 8 4 2.5-4 2.5z"/></svg>
				</span>
				<h3>ブラウザですぐに操作できます</h3>
				<p>住所の入力から調査結果の表示まで、実際の画面で体験いただけます。デモは新しいタブで開きます。</p>
				<a href="<?php echo esc_url($chosoku_demo); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-lg demo-cta-btn">
					デモを試す
					<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h6"/></svg>
				</a>
			</div>

			<p class="demo-note reveal">
				<svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 16v-4M12 8h.01"/></svg>
				表示される内容はデモ用です。実際のデータや機能の範囲はプランにより異なります。詳しくは<a href="#contact">お問い合わせ</a>ください。
			</p>
		</div>
	</section>

	<!-- ============================= 機能 ============================= -->
	<section data-section="features" class="features section section--alt" id="features">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">FEATURES</p>
				<h2 class="section-title">営業の一日を支える、6つの機能</h2>
				<p class="section-lead">調査から提案、案件登録まで。現場で本当に必要な機能だけを、迷わない導線でまとめました。</p>
			</div>

			<div class="feature-cards">
				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></div>
					<h3 class="feature-card-title">ワンクリック多面調査<span class="nobr">（13パネル）</span></h3>
					<p class="feature-card-desc">地図・用途地域・建蔽率/容積率・ハザード・学区・地価・取引事例・周辺施設まで。住所1つで多面的な調査結果を一覧表示します。</p>
					<ul class="feature-card-points">
						<li>クリック可能な路線価図索引で一次情報源へ</li>
						<li>市全体＋周辺メッシュの人口推移</li>
						<li>取引事例は平均・中央値・㎡単価で把握</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15l-1.9-4.1L5.5 9l4.6-1.4z"/><path d="M19 14l.8 2 .2.8-2 .8L17 19l-.8-2-2-.8 2-.8z"/></svg></div>
					<h3 class="feature-card-title">AI提案文<span class="nobr">（お客様向け）</span></h3>
					<p class="feature-card-desc">周辺データを根拠に、お客様向けの提案文をAIが下書き。担当者のメモも自然に反映します。最終確認は宅地建物取引士が行う前提です。</p>
					<ul class="feature-card-points">
						<li>周辺データを根拠にした暮らしの提案</li>
						<li>担当者のメモを文章へ自然に反映</li>
						<li>AIは補助、最終判断は人が行う設計</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M8 18v2M16 18v2"/></svg></div>
					<h3 class="feature-card-title">プレゼンボード<span class="nobr">（A4横・D&D）</span></h3>
					<p class="feature-card-desc">各情報をブロック化し、ドラッグ&ドロップで自由に並べ替え。8色パレットで色変更も。編集レイアウトのままA4横でPDF・Excel出力できます。</p>
					<ul class="feature-card-points">
						<li>D&Dで直感的にレイアウト編集</li>
						<li>編集レイアウトのままA4横でPDF印刷</li>
						<li>Excel出力で社内回付資料にも</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M4 21v-7M4 10V3M12 21v-9M12 8V3M20 21v-5M20 12V3"/><circle cx="4" cy="12" r="2"/><circle cx="12" cy="10" r="2"/><circle cx="20" cy="14" r="2"/></svg></div>
					<h3 class="feature-card-title">営業判断価格パネル</h3>
					<p class="feature-card-desc">起点データ4種（取引中央値／㎡単価×面積／公示地価×面積／手動入力）から選択。スライダーや調整理由の入力に対応し、資料へ自動反映します。</p>
					<ul class="feature-card-points">
						<li>4つの起点データから根拠を選択</li>
						<li>スライダーで素早く価格レンジ調整</li>
						<li>調整理由を残してチーム共有</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M9 17H7A5 5 0 0 1 7 7h2M15 7h2a5 5 0 0 1 0 10h-2M8 12h8"/></svg></div>
					<h3 class="feature-card-title">業務統合<span class="nobr">（kanri 連携）</span></h3>
					<p class="feature-card-desc">案件管理アプリ「kanri」と1つのアカウントで連携・データ共有。調査 → 提案 → 案件登録までを、ひとつの動線で行えます。</p>
					<ul class="feature-card-points">
						<li>1アカウントで調査と案件管理を横断</li>
						<li>調査 → 提案 → 案件登録を1動線に</li>
						<li>自治体マスターは自動同期</li>
					</ul>
				</article>

				<article class="feature-card reveal">
					<div class="feature-card-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M10 13a5 5 0 0 0 7 0l3-3a5 5 0 0 0-7-7l-1.5 1.5"/><path d="M14 11a5 5 0 0 0-7 0l-3 3a5 5 0 0 0 7 7l1.5-1.5"/></svg></div>
					<h3 class="feature-card-title">外部サイトショートカット</h3>
					<p class="feature-card-desc">主要な不動産ポータルや調査サイトの検索結果へワンクリックで遷移。物件種別と町名で絞り込んだ状態で開くので、サイトを行き来する手間がなくなります。</p>
					<ul class="feature-card-points">
						<li>主要ポータル・調査サイトへ即遷移</li>
						<li>物件種別・町名で絞り込み済み</li>
						<li>業務の起点を1画面に集約</li>
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
				<p class="section-lead">特別な準備は不要。住所を入れるだけで、お客様に渡せる資料まで辿り着きます。</p>
			</div>

			<ol class="steps steps--timeline">
				<li class="step reveal">
					<div class="step-marker"><span class="step-num">1</span></div>
					<div class="step-body">
						<span class="step-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
						<h3>住所を入力</h3>
						<p>調べたい物件の住所を入力するだけ。難しい操作はありません。</p>
					</div>
				</li>
				<li class="step reveal">
					<div class="step-marker"><span class="step-num">2</span></div>
					<div class="step-body">
						<span class="step-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></span>
						<h3>12種類以上の調査が自動表示</h3>
						<p>地図・法令・ハザード・地価・取引事例・周辺施設が一画面に並びます。</p>
					</div>
				</li>
				<li class="step reveal">
					<div class="step-marker"><span class="step-num">3</span></div>
					<div class="step-body">
						<span class="step-ico" aria-hidden="true"><svg class="ico" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/></svg></span>
						<h3>AI提案文＋資料をお客様へ</h3>
						<p>提案文とA4プレゼンボードを生成。PDF・Excelで出力してそのまま提示。</p>
					</div>
				</li>
			</ol>

			<div class="how-cta reveal">
				<a href="#contact" class="btn btn-primary btn-lg">まずは無料で試す</a>
			</div>
		</div>
	</section>

	<!-- ============================= 選ばれる理由 ============================= -->
	<section data-section="why" class="why section section--alt" id="why">
		<div class="container">
			<div class="section-head reveal">
				<p class="eyebrow">WHY CHOSOKU</p>
				<h2 class="section-title"><span class="nobr">調速が、</span><span class="nobr">現場に選ばれる理由</span></h2>
				<p class="section-lead">スピードだけでなく、不動産業務の“正確さ”と“安心”を支える設計にこだわりました。</p>
			</div>

			<ol class="why-list">
				<li class="why-item reveal">
					<figure class="why-figure"><?php chosoku_why_image(1); ?></figure>
					<div class="why-text">
						<span class="why-num">01</span>
						<h3>公的データ100%</h3>
						<p>国土交通省・国税庁・国土地理院・e-Stat・Google Maps Places の組み合わせ。AIが数値を作らない設計です。</p>
					</div>
				</li>
				<li class="why-item reveal">
					<figure class="why-figure"><?php chosoku_why_image(2); ?></figure>
					<div class="why-text">
						<span class="why-num">02</span>
						<h3>宅建士の判断を支える設計</h3>
						<p>AIは「窓口で確認すべき観点」を提示する補助役。最終確認は宅地建物取引士が行う建付けです。</p>
					</div>
				</li>
				<li class="why-item reveal">
					<figure class="why-figure"><?php chosoku_why_image(3); ?></figure>
					<div class="why-text">
						<span class="why-num">03</span>
						<h3>業務フローの起点集約</h3>
						<p>自治体窓口・路線価図・主要ポータル・調査サイトへの遷移を1画面に。探し回る時間をなくします。</p>
					</div>
				</li>
				<li class="why-item reveal">
					<figure class="why-figure"><?php chosoku_why_image(4); ?></figure>
					<div class="why-text">
						<span class="why-num">04</span>
						<h3>印刷・Excel出力が標準装備</h3>
						<p>A4横のPDF／Excelがそのまま提案資料・社内回付資料に。作り直しの手間がありません。</p>
					</div>
				</li>
				<li class="why-item reveal">
					<figure class="why-figure"><?php chosoku_why_image(5); ?></figure>
					<div class="why-text">
						<span class="why-num">05</span>
						<h3>kanri との完全統合</h3>
						<p>顧客管理 → 物件調査 → 案件登録 を1アカウント・1動線で。情報の二重入力をなくします。</p>
					</div>
				</li>
				<li class="why-item reveal">
					<figure class="why-figure"><?php chosoku_why_image(6); ?></figure>
					<div class="why-text">
						<span class="why-num">06</span>
						<h3>全国対応</h3>
						<p>用途地域・ハザード・地価・取引事例等は全国対応。一部自治体は窓口リンク集付きで、順次拡充します。</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============================= 連携・拡張 ============================= -->
	<?php
	// 連携（kanri）セクション：ACF優先、未入力は既定値
	$intg_pid = (int) get_option('page_on_front');
	$intg_pid = $intg_pid ? $intg_pid : null;
	$intg_gf  = function_exists('get_field');

	$intg_title = $intg_gf ? trim((string) get_field('integration_title', $intg_pid)) : '';
	if ($intg_title === '') { $intg_title = "案件管理「kanri」と、\nひとつながり。"; }

	$intg_lead = $intg_gf ? trim((string) get_field('integration_lead', $intg_pid)) : '';
	if ($intg_lead === '') { $intg_lead = '「kanri」は、会社の案件を社内でまとめて管理できる案件管理ツールです。営業担当は自分が抱える案件を個人単位で管理でき、調速で調べた物件は、そのまま案件として引き継げます。'; }

	$intg_checks_default = array(
		'会社の案件を、社内でまとめて一元管理',
		'営業担当は、自分の案件を個人単位で管理',
		'調速で調べた物件を、そのまま案件として登録',
		'顧客管理から案件登録までを、1つの動線で',
	);
	$intg_checks = array();
	if ($intg_gf) {
		for ($i = 1; $i <= 4; $i++) {
			$c = trim((string) get_field('integration_check_' . $i, $intg_pid));
			if ($c !== '') { $intg_checks[] = $c; }
		}
	}
	if (empty($intg_checks)) { $intg_checks = $intg_checks_default; }

	// 右側メディア：動画URL(埋め込み) > 動画URL(mp4等) > 動画ファイル > 画像 > 既定図
	$intg_video_url = $intg_gf ? trim((string) get_field('integration_video_url', $intg_pid)) : '';
	$intg_video     = $intg_gf ? trim((string) get_field('integration_media_video', $intg_pid)) : '';
	$intg_image     = $intg_gf ? trim((string) get_field('integration_media_image', $intg_pid)) : '';
	$intg_embed = '';
	if ($intg_video_url !== '' && function_exists('wp_oembed_get')) {
		$intg_embed = wp_oembed_get($intg_video_url);
		if (!$intg_embed) { $intg_embed = ''; }
	}
	$intg_url_file = ($intg_video_url !== '' && preg_match('/\.(mp4|webm|ogg|mov)(\?.*)?$/i', $intg_video_url));
	$intg_has_media = ($intg_embed !== '' || $intg_url_file || $intg_video !== '' || $intg_image !== '');
	?>
	<section data-section="integration" class="integration section" id="integration">
		<div class="container">
			<div class="integration-inner">
				<div class="integration-text reveal">
					<p class="eyebrow">INTEGRATION</p>
					<h2 class="section-title"><?php echo nl2br(esc_html($intg_title)); ?></h2>
					<p class="section-lead"><?php echo nl2br(esc_html($intg_lead)); ?></p>
					<ul class="integration-list">
						<?php foreach ($intg_checks as $c) : ?>
							<li><svg class="ico" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg><?php echo esc_html($c); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<div class="integration-visual reveal<?php echo $intg_has_media ? ' integration-visual--media' : ''; ?>">
					<?php if ($intg_embed !== '') : ?>
						<div class="integration-media integration-embed"><?php echo $intg_embed; // WPコアのoEmbed（YouTube/Vimeo等） ?></div>
					<?php elseif ($intg_url_file) : ?>
						<div class="integration-media"><video src="<?php echo esc_url($intg_video_url); ?>" autoplay muted loop playsinline preload="auto"></video></div>
					<?php elseif ($intg_video !== '') : ?>
						<div class="integration-media"><video src="<?php echo esc_url($intg_video); ?>" autoplay muted loop playsinline preload="auto"></video></div>
					<?php elseif ($intg_image !== '') : ?>
						<div class="integration-media"><img src="<?php echo esc_url($intg_image); ?>" alt="" loading="lazy"></div>
					<?php else : ?>
						<div aria-hidden="true">
							<div class="flow">
								<div class="flow-node">
									<span class="flow-ico"><svg class="ico" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg></span>
									<span class="flow-label">顧客管理<small>kanri</small></span>
								</div>
								<span class="flow-arrow"><svg class="ico" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
								<div class="flow-node flow-node--primary">
									<span class="flow-ico"><svg class="ico" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg></span>
									<span class="flow-label">物件調査<small>調速</small></span>
								</div>
								<span class="flow-arrow"><svg class="ico" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
								<div class="flow-node">
									<span class="flow-ico"><svg class="ico" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg></span>
									<span class="flow-label">案件登録<small>kanri</small></span>
								</div>
							</div>
							<p class="flow-note">社内の案件管理から物件調査、案件登録までを1動線で。</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
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
			$faq_defaults = array(
				array('q' => 'どの自治体に対応していますか？', 'a' => '用途地域・ハザード・地価・取引事例などは全国対応です。一部の自治体は窓口リンク集付きでご利用いただけ、対応は順次拡充しています。'),
				array('q' => '路線価などの具体的な数値は表示されますか？', 'a' => 'アプリ内では具体的な金額数値は表示せず、一次情報源（国税庁など）へのリンクをご案内します。数値の確認はリンク先の公的情報、および宅地建物取引士による最終確認を前提とした設計です。'),
				array('q' => 'AIが宅建士の代わりになるのですか？', 'a' => 'いいえ。AIはあくまで「窓口で確認すべき観点」を提示する補助です。最終的な判断・確認は宅地建物取引士が行う建付けとしています。'),
				array('q' => '個人情報やデータは安全ですか？', 'a' => '物件住所はサーバー側で処理し、認証・通信は暗号化により保護しています。詳細はお問い合わせください。'),
				array('q' => 'スマートフォンでも使えますか？', 'a' => 'はい。スマホ閲覧に最適化しており、専用のハンバーガーメニューで縦長ページも快適にご利用いただけます。外回りの営業中でも確認できます。'),
				array('q' => '解約はできますか？', 'a' => 'サブスクリプションはいつでも解約可能です。プランや解約手続きの詳細は、お問い合わせフォームよりお気軽にご連絡ください。'),
			);

			// ACF（固定ページ）に入力があればそれを優先。質問が空の項目は非表示。
			$faq_items = array();
			if (function_exists('get_field')) {
				$lp_pid = (int) get_option('page_on_front');
				for ($i = 1; $i <= 6; $i++) {
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
					<p class="section-lead">無料お試し・資料請求・導入のご相談を承っています。内容を確認のうえ、担当者よりご連絡いたします。</p>
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
								<option value="trial">無料で試す</option>
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
