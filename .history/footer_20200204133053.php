</main><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<span class="year">© <?php echo date('Y') ?></span>
		<span>
			<a href="http://barricada.com.ni/">Radio 580 |</a>
		</span>
		<span>Todos los derechos Reservados</span>
	</div>
	<a class="twitter-timeline" data-width="400" data-theme="dark" href="https://twitter.com/radio580nic?ref_src=twsrc%5Etfw">Tweets by radio580nic</a>
	
</footer>


<?php wp_footer(); ?>
<script>
	var posts_myajax = '<?php echo serialize( $the_query->query_vars ) ?>',
    current_page_myajax = 1,
    max_page_myajax = <?php echo $the_query->max_num_pages ?>
</script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
</script>
</body>
</html>