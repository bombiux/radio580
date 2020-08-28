<?php
get_header();
?>

<main>
    <section class='first-screen'>
        <video autoplay muted loop src=" <?php echo get_template_directory_uri() . '/multimedia/Portada_ms.mp4' ?> " type="video/mp4"></video>
        <div class="overlay">
            <h6>Te prensentamos nuestra nueva página web</h6>
            <button>Ver Video</button>
        </div>
       
        <div id="station0" class="station">
            <div class="title">
                <span class="dashicons dashicons-controls-play"></span>
                <div id="title0" class="subtitle"></div>
                <div id="live0" class="live">LIVE</div>
                <div id="playing0" class="playing">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="news main-content">
        <?php query_posts('showposts = 5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time(); ?></p>
                    <?php the_excerpt(); ?>
                </article>
            </a>
        <?php endwhile;?>

        <?php endif; wp_reset_query(); ?>      

        <?php
            global $wp_query; // you can remove this line if everything works for you
            
            // don't display the button if there are not enough posts
            if (  $wp_query->max_num_pages > 1 )
	echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well
?>  
    </section>
</main>

<?php get_footer() ?>
