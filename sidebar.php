<div class="trend">
    Trend
</div>
<?php
    if (function_exists('wpp_get_mostpopular'))
        $args = array(
            'thumbnail_width' => 80,
            'thumbnail_height' => 80,
            'range' => all,
            'limit' => 7,
            'stats_views' => 0,
            'excerpt_format' => 1,
            'excerpt_length' => 17,
            'post_html' => '<li><div class="thum_side">{thumb}</div><div class="opt_side"><h2>{title}</h2></div></li>'
        );

        wpp_get_mostpopular( $args );
?>