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
    
        <?php /* if (have_posts()) : while (have_posts()) : the_post();
            
        <?php /*  endwhile; */?>
        <?php /* if ($wp_query->max_num_pages>1 ) echo 
            '<div class="misha_loadmore">More posts</div>';  */// you can use <a> as well
        ?>  

        <?php /* endif; wp_reset_query(); */ ?>      


    <section class="news main-content">
		<article>
			<?php
 
			  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
			  $query_args = array(
			    'post_type' => 'post',
			    'paged' => $paged
			  );
 
			?>
 
			<?php if (have_posts()) : while (have_posts()) : the_post(); // run the loop ?>
            get_template_part('template-parts/content') */ ?>
			<?php endwhile; ?>
 
			<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
			<button class="loadmore2">Load More</button>
			<?php } ?>
			<?php endif; ?>
		</article>	
    </section>
</main>


 
<script>
	var posts_myajax = '<?php echo serialize( $the_query->query_vars ) ?>',
    current_page_myajax = 1,
    max_page_myajax = <?php echo $the_query->max_num_pages ?>
</script>




<?php get_footer() ?>
