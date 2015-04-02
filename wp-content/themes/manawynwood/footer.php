
		</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="large-8 columns container-footer">
				<?php wp_nav_menu( array('menu' => 'footer-menu' )); ?>
			</div>
		</div>
	</footer>
	<div class="footer-bottom">
		<div class="row">
			<div class="large-4 columns">
				<a class="large-6 columns" target="_blank" href="<?php echo of_get_option('privacy'); ?>">Privacy</a>
				<a class="large-6 columns left" target="_blank" href="<?php echo of_get_option('PolicyTerms'); ?>">PolicyTerms of Use</a>
			</div>
			<div class="large-4 columns rights">
				@2014 MANA WYNWOOD. All rights reserved.
			</div>
		</div>
		<div id='map' style="position: absolute; height: 0; left: 0; top: 0; width: 100%; z-index: 9;"></div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>