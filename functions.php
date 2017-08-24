<?php add_theme_support('post-thumbnails'); ?>
<?php
//ヘッダー部分のCSS消去
add_action('wp_print_styles','lm_dequeue_header_styles');
function lm_dequeue_header_styles(){ wp_dequeue_style('yarppWidgetCss'); }

//フッター部分のCSS消去
add_action('get_footer','lm_dequeue_footer_styles');
function lm_dequeue_footer_styles(){ wp_dequeue_style('yarppRelatedCss'); }

//サムネイルを有効にした場合に呼び出されるCSS消去
add_action('wp_print_styles','lm_dequeue_header_styles1');
function lm_dequeue_header_styles1(){ wp_dequeue_style('yarpp-thumbnails-yarpp-thumbnail'); }
add_action('get_footer','lm_dequeue_footer_styles1');
function lm_dequeue_footer_styles1(){ wp_dequeue_style('yarpp-thumbnails-yarpp-thumbnail'); }
?>