<?php wp_footer(); ?><footer>
	<div class="container">
    	<div class="footer">
    	<?php 
			$wix_options = get_option( 'wix_theme_options' );
			if(!empty($wix_options['footertext'])) {
				echo '&copy; ' . wp_filter_nohtml_kses($wix_options['footertext']);
			}
		?>
        </div>    
    </div>
</footer>

</body>
</html>