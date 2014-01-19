<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				© 2012 POUTNÍCI Kolín - vodní skauti a skautky Kolín. Dobrý skautský oddíl v Kolíně pro kluky i holky. Skauting Kolín. Buď připraven i TY!!! Skautský oddíl Kolín. Skauting Kolín, skautsky oddil v Koline, kvalitní skautský oddíl Kolín. Kvalitní dětský oddíl Kolín. Skauting v Kolíně. Skaut v Kolíně. Vodní skauti Kolín. Vodní skauting v Kolíně. Kanoistika, divoká voda, plachtění, lezení na Pašince. Přístav vodních skautů.
				<div class="skauting-pro-zivot">
					<a href="http://www.poutnicikolin.cz/" title="Poutníci Kolín">2. přístav Poutníci Kolín | www.poutnicikolin.cz</a>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<span class="footer-banner"></span>
</body>
</html>