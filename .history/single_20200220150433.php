<?php get_header(); ?>
    <main class='<?php the_post_class(); ?>'>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <figure class="main-thumbnail">
                <div class="thumb-cont">
                    <?php the_post_thumbnail('fb') ?>
                </div>
                <figcaption>
                    <small>
                        <?php
                            the_post_thumbnail_caption();
                        ?>
                    </small>
                </figcaption>
            </figure>
            <div class="post-content">
                <h2>
                    <?php the_title(); ?>
                </h2>
                
                <small>
                    <p>
                        De <?php the_author() ?>
                    </p>
                    <p>
                        <?php the_time('j \d\e\ F \d\e\ Y,\ g:i A') ?>
                    </p>
                </small>
                
                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div>
            
        </div>
        <?php endwhile; endif; ?>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </main>

<?php get_footer();