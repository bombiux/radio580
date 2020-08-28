<!-- <a href="<?php the_permalink(); ?>">
    <article>
        <h2><?php /* the_title(); */ ?></h2>
        <p><?php /* the_time(); */ ?></p>
        <?php /* the_excerpt();  */?>
    </article>
</a> -->

<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
 
    <div class="section-bg">
            <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <div class="author">By <?php the_author(); ?> </div>
    </div>
</section>