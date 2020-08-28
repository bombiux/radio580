<?php function get_post_format() { ?>
    <a href="<?php the_permalink(); ?>">
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time(); ?></p>
                    <?php the_excerpt(); ?>
                </article>
    </a>
