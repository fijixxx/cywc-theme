<div class="footer">
    <div class="author">
        <div id="author">
            Author
        </div>
        periberry |<br>[pso2] ship3: Priperry and more...
    </div>
    <ul class="catfoot">
        <a href="<?php bloginfo('url'); ?>">
            <li class="footpoem">Menu</li>
        </a>
        <?php wp_list_categories('title_li='); ?>
    </ul>
    <div id="tags">
        <div class="tags">
            Tags
        </div>
        <?php wp_tag_cloud(); ?>
    </div>
    <div class="copy">
        © 2017-<?php echo date('Y');?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
    </div>
</div>
<div id="button">
    <i class="fa fa-plus-circle fa-4x" aria-hidden="true"></i>
</div>
<div id="cover" class="close"></div>
<div id="tapmenu" class="close">
    <a href="<?php bloginfo('url'); ?>">
        <div class="taptitle"><?php bloginfo('name'); ?></div>
    </a>
    <img src="//cy-i-wc.com/blog/wp-content/themes/cywc/fav32.png">
    <ul class="tapcat">
        <li class="cattat">Menu</li>
        <?php wp_list_categories('title_li='); ?>
    </ul>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/footer.script.js"></script>
<?php wp_footer(); ?>
</body>
</html>