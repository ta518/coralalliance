<?php
	/* Get Fields */
	$logo = get_field('logo');
	$footerBg = get_field('footer_background');
?>

<!-- footer -->
			<footer id="footer" style="background:url(<?php echo $footerBg['url']; ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
				<div class="container">
					<div class="footer">
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
					</div>
				</div>
			</footer>
			<!-- /footer -->
		<?php wp_footer(); ?>

	</body>
</html>
