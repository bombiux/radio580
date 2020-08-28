<a href="<?php the_permalink(); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class();?> >
        <figure class="post-thumbnail">
            <?php the_post_thumbnail( 'fb' ); ?>
        </figure>
        <div class="section-bg">
            <h5><?php the_title(); ?></h5>
            <?php the_excerpt(); ?>
            <button>Leer Más</button>
        </div>
    </article>
</a>