/* =================================================================
   調速（Chosoku）LP  -  script.js
   - ハンバーガーメニュー制御
   - ヘッダーのスクロール影
   - Intersection Observer によるスクロールリビール
   - 機能タブ切り替え
   - お問い合わせフォームのクライアント側バリデーション（UIのみ）
   ================================================================= */

document.addEventListener('DOMContentLoaded', function () {

  /* ----------------------------------------------------------------
     1. ハンバーガーメニュー制御
     ---------------------------------------------------------------- */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isOpen = this.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      this.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // メニュー内リンクをクリックしたら閉じる
    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });

    // Escキーで閉じる
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });
  }

  /* ----------------------------------------------------------------
     2. ヘッダーのスクロール影 ＋ スクロール進捗バー
     ---------------------------------------------------------------- */
  const header = document.querySelector('.site-header');
  const progress = document.querySelector('.scroll-progress');
  let ticking = false;

  function onScroll() {
    const y = window.scrollY;
    if (header) { header.classList.toggle('is-scrolled', y > 8); }
    if (progress) {
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      const ratio = docHeight > 0 ? Math.min(y / docHeight, 1) : 0;
      progress.style.setProperty('--p', ratio.toFixed(4));
    }
    ticking = false;
  }

  function requestScroll() {
    if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
  }

  onScroll();
  window.addEventListener('scroll', requestScroll, { passive: true });
  window.addEventListener('resize', requestScroll, { passive: true });

  /* ----------------------------------------------------------------
     3. グリッド内の段階表示（--i を子要素に付与）
     ---------------------------------------------------------------- */
  const staggerGroups = document.querySelectorAll('.problem-grid, .why-grid, .steps, .feature-cards');
  staggerGroups.forEach(function (group) {
    Array.prototype.forEach.call(group.children, function (child, i) {
      child.style.setProperty('--i', i);
    });
  });

  /* ----------------------------------------------------------------
     4. スクロールリビール（Intersection Observer）
     ---------------------------------------------------------------- */
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ----------------------------------------------------------------
     5. 機能タブ切り替え
     ---------------------------------------------------------------- */
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  function activateTab(btn) {
    const targetId = btn.getAttribute('aria-controls');

    tabBtns.forEach(function (b) {
      const active = b === btn;
      b.classList.toggle('is-active', active);
      b.setAttribute('aria-selected', active ? 'true' : 'false');
    });

    tabPanels.forEach(function (panel) {
      const active = panel.id === targetId;
      panel.classList.toggle('is-active', active);
      if (active) { panel.removeAttribute('hidden'); }
      else { panel.setAttribute('hidden', ''); }
    });
  }

  tabBtns.forEach(function (btn, index) {
    btn.addEventListener('click', function () { activateTab(btn); });

    // キーボード操作（左右矢印）
    btn.addEventListener('keydown', function (e) {
      let newIndex = null;
      if (e.key === 'ArrowRight') { newIndex = (index + 1) % tabBtns.length; }
      if (e.key === 'ArrowLeft') { newIndex = (index - 1 + tabBtns.length) % tabBtns.length; }
      if (newIndex !== null) {
        e.preventDefault();
        tabBtns[newIndex].focus();
        activateTab(tabBtns[newIndex]);
      }
    });
  });

  /* ----------------------------------------------------------------
     6. お問い合わせフォーム（クライアント側バリデーション / UIのみ）
        ※ WordPress では Contact Form 7 等に置き換え。
           ここでは送信処理は行わず、入力確認と完了表示のみ行う。
     ---------------------------------------------------------------- */
  const form = document.getElementById('contactForm');
  const status = document.getElementById('formStatus');

  if (form) {
    // 各フィールドにエラー表示用の要素を用意
    form.querySelectorAll('[required]').forEach(function (input) {
      const wrap = input.closest('.field, .field-check');
      if (wrap && wrap.classList.contains('field') && !wrap.querySelector('.field-error')) {
        const span = document.createElement('span');
        span.className = 'field-error';
        span.textContent = '入力してください';
        wrap.appendChild(span);
      }
      // 入力時にエラー解除
      input.addEventListener('input', function () { clearError(input); });
      input.addEventListener('change', function () { clearError(input); });
    });

    function clearError(input) {
      const wrap = input.closest('.field, .field-check');
      if (wrap) { wrap.classList.remove('is-error'); }
    }

    function validate() {
      let firstInvalid = null;

      form.querySelectorAll('[required]').forEach(function (input) {
        const wrap = input.closest('.field, .field-check');
        let invalid = false;

        if (input.type === 'checkbox') {
          invalid = !input.checked;
        } else if (input.type === 'email') {
          invalid = !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim());
          const err = wrap && wrap.querySelector('.field-error');
          if (err) { err.textContent = input.value.trim() ? '正しいメールアドレスを入力してください' : '入力してください'; }
        } else {
          invalid = input.value.trim() === '';
        }

        if (wrap) { wrap.classList.toggle('is-error', invalid); }
        if (invalid && !firstInvalid) { firstInvalid = input; }
      });

      return firstInvalid;
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (status) { status.textContent = ''; status.className = 'form-status'; }

      const firstInvalid = validate();

      if (firstInvalid) {
        if (status) {
          status.textContent = '未入力の項目があります。ご確認ください。';
          status.classList.add('is-error');
        }
        firstInvalid.focus();
        return;
      }

      // --- 送信成功時の擬似処理（UIのみ） ---
      const submitBtn = form.querySelector('button[type="submit"]');
      if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = '送信中…'; }

      window.setTimeout(function () {
        form.reset();
        if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = '送信する'; }
        if (status) {
          status.textContent = 'お問い合わせありがとうございます。担当者より追ってご連絡いたします。';
          status.classList.add('is-success');
        }
      }, 700);
    });
  }

  /* ----------------------------------------------------------------
     7. 現在の年をフッターに反映（任意）
     ---------------------------------------------------------------- */
  const copy = document.querySelector('.footer-copy');
  if (copy) {
    const year = new Date().getFullYear();
    copy.innerHTML = copy.innerHTML.replace(/\d{4}/, year);
  }

  /* ----------------------------------------------------------------
     8. AI提案文のタイプライター生成（画面内に入ったら1回だけ実行）
     ---------------------------------------------------------------- */
  const typeEl = document.querySelector('.mock-ai-text[data-typewriter]');
  if (typeEl) {
    const fullText = typeEl.getAttribute('data-typewriter') || '';
    const card = typeEl.closest('.mock-ai');
    const title = card ? card.querySelector('.mock-ai-title') : null;
    const reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let started = false;

    function finish() {
      typeEl.textContent = fullText;
      typeEl.classList.add('is-done');
      if (card) { card.classList.add('is-typed'); }
      if (title) { title.textContent = '提案文の下書きが完成しました'; }
    }

    function runTypewriter() {
      if (started) { return; }
      started = true;
      if (reduceMotion) { finish(); return; }
      let i = 0;
      (function tick() {
        typeEl.textContent = fullText.slice(0, i);
        i++;
        if (i <= fullText.length) {
          // 句読点で少し溜める
          const ch = fullText.charAt(i - 2);
          const delay = (ch === '。' || ch === '、') ? 220 : 48;
          window.setTimeout(tick, delay);
        } else {
          window.setTimeout(function () {
            typeEl.classList.add('is-done');
            if (card) { card.classList.add('is-typed'); }
            if (title) { title.textContent = '提案文の下書きが完成しました'; }
          }, 350);
        }
      })();
    }

    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            runTypewriter();
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      io.observe(card || typeEl);
    } else {
      runTypewriter();
    }
  }

});
