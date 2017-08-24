        <?php get_header(); ?>
        <div id="eyecatch">
            <div class="eyecover">
                CATCH<br>YOU<span>...if we can!</span>
            </div>
        </div>
        <div id="container">
            <div class="artwrap">
                <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                <div id="article">
                    <a href="<?php the_permalink(); ?>">
                       <div class="thum">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <div class="opt">
                            <h2 class="title">
                                <?php echo get_the_title(); ?>
                            </h2>
                            <div class="excerpt">
                                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <div class="art_foot">
                                <?php echo get_the_category_list(); ?>
                                |
                                <div class="time">
                                    <?php echo get_the_date("Y/m/d"); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <div id="side">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="nav">
         <?php
          $big = 9999999999;
          $arg = array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'current' => max( 1, get_query_var('paged') ),
            'total'   => $wp_query->max_num_pages
           );
           echo paginate_links(array(
                'mid_size' => '4',
                'prev_text' => '◁ Prev',
                'next_text' => 'Next ▷'
           ));
         ?>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/index.script.js"></script>
        <?php get_footer(); ?>