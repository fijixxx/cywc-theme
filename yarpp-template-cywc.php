<?php
/*
YARPP Template: cywc-YARPP
Description: cywc-YARPP
Author: periberry
*/ ?>
<?php if (have_posts()):?>
    <div class="related">Related</div>
    <ol>
        <?php while (have_posts()) : the_post(); ?>
            <li>
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
            </li>
        <?php endwhile; ?>
    </ol>
<?php else: ?>
    <p> </p>
<?php endif; ?>