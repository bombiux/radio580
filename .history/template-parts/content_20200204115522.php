<a href="<?php the_permalink(); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class();?> >
        <figure class="post-thumbnail">
            <?php the_post_thumbnail( 'fb' ); ?>
        </figure>
        <div class="section-bg">
            <h2 class='news-preview'><?php the_title(); ?></h2>
            <p></p> <?php echo get_excerpt(); ?>
        </div>
    </article>
</a>