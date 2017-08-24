<?php get_header(); ?>
    <div id="eyecatch_sing">
        <div class="eyecover_sing">
            CATCH<br>YOU<span>...if we can!</span>
        </div>
    </div>
<div id="container">
    <div class="artwrap_singular">
        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
            <div id="article_singular">
                <div class="thum">
                    <?php the_post_thumbnail('large'); ?>
                    <div class="title">
                        <h2>
                            <?php echo get_the_title(); ?>
                        </h2>
                    </div>
                </div>
                <div class="opt">
                    <?php echo get_the_category_list(); ?>
                    <div class="post_time">
                        <div class="post_date">
                            <?php echo get_the_date("Y/m/d H:i"); ?>
                        </div>
                        <div class="post_modified">
                            <?php echo get_the_modified_date("Y/m/d H:i"); ?>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
        <div class="YARPP">
            <?php related_posts(); ?>
        </div>
    </div>
    <div id="side">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php comments_template(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/singular.script.js"></script>
<?php get_footer(); ?>