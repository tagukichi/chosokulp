<?php
/**
 * フォールバックテンプレート。
 * 本テーマは1ページ完結のLPのため、どのリクエストでもLP本体を表示する。
 *
 * @package chosoku-lp
 */
get_header();
get_template_part('template-parts/lp');
get_footer();
