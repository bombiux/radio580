<!-- <a href="<?php the_permalink(); ?>">
    <article>
        <h2><?php /* the_title(); */ ?></h2>
        <p><?php /* the_time(); */ ?></p>
        <?php /* the_excerpt();  */?>
    </article>
</a> -->
<a href="<?php the_permalink(); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class();?> >
        <div class="section-bg">
            < class="post-thumbnail">
                
                    <?php the_post_thumbnail( 'fb' ); ?>
                
            </>
            <h3><?php the_title(); ?></h3>
        </div>
    </article>
</a>