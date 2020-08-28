<?php
get_header();
?>

<main>
    <section class='first-screen'>
        <video autoplay muted loop src=" <?php echo get_template_directory_uri() . '/multimedia/Portada_ms.mp4' ?> " type="video/mp4"></video>
        <div class="overlay"></div>
        <div class="padding"></div>
            <div id="station0" class="station">
                <div class="title">
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
            <div class="padding"></div>
    </section>
</main>

<?php get_footer() ?>
