# 調速（チョーソク）LP

物件調査アシスタント「調速（Chosoku）」のランディングページ。
**静的 HTML / CSS / バニラ JS** で制作し、最終的に **WordPress（FSE ブロックテーマ）** へ移植するためのソースです。

確定仕様は [`SPEC.md`](./SPEC.md) を参照してください。

## プレビュー

ビルド不要。ローカルで開くだけで確認できます。

```bash
# どちらかでローカルサーバを立てる（フォントやSVGの読み込みのため http 推奨）
python3 -m http.server 8000
#  → http://localhost:8000/

# もしくは VS Code の Live Server などでも可
```

## 構成

```
index.html              LP本体（9セクション）
assets/css/style.css    デザインシステム＋スタイル
assets/js/main.js       モバイルメニュー / FAQアコーディオン / フェードイン / フォーム
assets/img/             ロゴ（仮SVG）・ファビコン
```

## カスタマイズの要点

| やりたいこと | 場所 |
|---|---|
| ブランドカラーの調整 | `assets/css/style.css` の `:root`（デザイントークン） |
| ロゴ差し替え | `assets/img/logo-mark.svg` / `logo-mark-white.svg` を実データに置換 |
| GA4 有効化 | `index.html` の `<head>` 内コメント済みスニペット、`G-XXXXXXXXXX` を差し替え |
| お問い合わせ先 | 最終的に CF7 で設定（静的版はUIのみ・送信は無効） |
| OGP画像 | `assets/img/ogp.png` を用意し `index.html` の `og:image` を確認 |

## 未確定・要提供（クライアント支給待ち）

`SPEC.md` の「6. 未支給・要提供の項目」を参照。ロゴ実データ、CF7通知先メール、特商法表記、
プライバシーポリシー／利用規約、解約FAQの確定文、製品スクリーンショット、GA4測定ID。

## WordPress（FSE）への移植

`SPEC.md` の「8. WordPress（FSE）への移植時メモ」を参照。
セクション単位でブロックテンプレート化し、デザイントークンを `theme.json` に転記、
フォームを CF7 ショートコードへ置換します。

## 注意

- ロゴは現状、添付された仮ロゴを **SVG で再現したもの**です。正式なロゴデータ受領後に差し替えてください。
- 製品スクリーンショットは CSS によるプレースホルダー表示です。
