<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Poutnici_Kolin
 * @since Poutnici Kolin 1.0
 */

$options = poutnicikolin_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'poutnicikolin' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'poutnicikolin' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			
			<div class="menu-item logo">
				<a href="http://www.poutnicikolin.cz/" title="Domů">
					<img class="self" alt="Poutníci Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/poutnici-logo.png">
				</a>
			</div>
            <!-- O2 ThinkBig projekt -->
			<div class="menu-item logo">
				<!--<a href="http://www.o2thinkbig.cz/projekty/detail/2103" title="Na jedné lodi..." target="_blank">-->
					<img class="self" alt="O2 Thing Big Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/o2thinkbig-logo.png">
				<!--</a>-->
			</div>
			<div class="menu-item text"><strong>Spřátelené weby:</strong></div>
			<div class="menu-item logo">
				<a href="http://www.kajak-vut.com/" title="Kajak VUT" target="_blank">
					<img class="fellow" alt="Kajak VUT Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/kajak.png">
				</a>
			</div>
			<div class="menu-item logo">
				<a href="http://www.hopsuk.cz/" title="Horolezecký oddíl Potkali se u Kolína" target="_blank">
					<img class="fellow" alt="HOPSUK Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/hopsuk.png">
				</a>
			</div>
            <div class="menu-item logo">
				<a href="http://www.zlutaponorka.com/" title="PVS Žlutá ponorka Třebíč" target="_blank">
					<img class="fellow" alt="Žlutá ponorka Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/zluta-ponorka.png">
				</a>
			</div>
			<div class="menu-item logo">
				<a href="http://www.mukolin.cz/cz/obcan/sport/sportovni-kluby/08186-2-pristav-vodnich-skautu-poutnici-kolin.html" title="Poutníci na mukolin.cz" target="_blank">
					<img class="fellow" alt="Město Kolín Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/mesto-kolin-logo.png">
				</a>
			</div>
			<div class="menu-item logo">
				<a href="http://www.kolin.cz/sport/kluby" title="Poutníci na kolin.cz" target="_blank">
					<img class="fellow" alt="kolin.cz Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/poutnicikolin/images/kolincz-logo.gif">
				</a>
			</div>
			
		</div><!-- #secondary .widget-area -->
<?php endif; ?>