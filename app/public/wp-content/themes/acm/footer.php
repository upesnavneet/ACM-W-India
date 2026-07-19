<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage ACM
 * @since ACM 1.0
 */
$social_networks = get_option( 'acm_social_networks' );
if ( false === $social_networks ) {
	$social_networks = array(
		'linkedin' => 'https://www.linkedin.com/company/acm-w-india/',
	);
}
$custom_logos = get_option( 'acm_custom_logos' );
$id_logos     = array();
if ( $custom_logos ) {
	foreach ( $custom_logos as $name => $value ) {
		if ( $value ) {
			array_push( $id_logos, $value );
		}
	}
}

if ( ! function_exists( 'acm_get_social_svg_html' ) ) {
	function acm_get_social_svg_html( $network ) {
		switch ( strtolower( $network ) ) {
			case 'linkedin':
				return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>';
			case 'facebook':
				return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>';
			case 'twitter':
				return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>';
			case 'instagram':
				return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>';
			case 'youtube':
				return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>';
			case 'email':
			case 'mail':
				return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>';
			default:
				return '<span style="font-size: 11px; font-weight: bold; text-transform: uppercase;">' . esc_html( substr( $network, 0, 2 ) ) . '</span>';
		}
	}
}

?>
<div class="row">
	<style>
		footer {
			background: #111827 !important; /* Rich Dark Charcoal/Slate */
			border-top: 6px solid #a6bc09 !important; /* Signature Lime line */
			color: #94a3b8 !important;
			padding: 4rem 0 2.5rem 0 !important;
			font-family: 'Inter', system-ui, -apple-system, sans-serif !important;
		}
		.footer-wrapper {
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 1.5rem;
		}
		.footer-main-grid {
			display: grid;
			grid-template-columns: 1.5fr 1fr 1fr;
			gap: 3rem;
			padding-bottom: 3rem;
			border-bottom: 1px solid #1f2937;
		}
		.footer-brand-section {
			display: flex;
			flex-direction: column;
			gap: 1.25rem;
		}
		.footer-logo-row {
			display: flex;
			align-items: center;
			gap: 16px;
		}
		.footer-logo-badge {
			background: #ffffff;
			padding: 8px 16px;
			border-radius: 10px;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
			border: 1px solid #374151;
		}
		.footer-brand-title {
			font-family: 'Outfit', 'Roboto Condensed', sans-serif;
			font-size: 22px;
			font-weight: 700;
			color: #ffffff !important;
			letter-spacing: -0.02em;
			margin: 0;
		}
		.footer-brand-desc {
			font-size: 14px;
			line-height: 1.6;
			color: #94a3b8;
			margin: 0;
			max-width: 380px;
		}
		.footer-nav-section {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		.footer-section-title {
			font-family: 'Roboto Condensed', sans-serif;
			font-size: 14px;
			font-weight: 700;
			color: #ffffff !important;
			text-transform: uppercase;
			letter-spacing: 0.1em;
			margin-bottom: 1.5rem;
			margin-top: 0;
		}
		.footer-links-list {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			gap: 0.4rem;
			align-items: flex-start;
		}
		.footer-inner-col {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			text-align: left;
		}
		.footer-links-list a {
			color: #94a3b8 !important;
			font-size: 14.5px;
			text-decoration: none !important;
			transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
			display: inline-block;
		}
		.footer-links-list a:hover {
			color: #a6bc09 !important;
			transform: scale(1.05);
		}
		.footer-connect-section {
			display: flex;
			flex-direction: column;
			align-items: flex-end;
		}
		.footer-social-links {
			display: flex;
			gap: 12px;
			list-style: none;
			margin: 0 0 1.5rem 0;
			padding: 0;
		}
		.footer-social-btn {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 42px;
			height: 42px;
			border-radius: 50%;
			background: #1f2937;
			color: #cbd5e1 !important;
			transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
			border: 1px solid #374151;
		}
		.footer-social-btn:hover {
			background: #a6bc09;
			color: #030712 !important;
			transform: translateY(-3px) scale(1.05);
			border-color: #a6bc09;
			box-shadow: 0 6px 15px rgba(166, 188, 9, 0.3);
		}
		.footer-social-btn svg {
			display: block;
		}
		.footer-parent-logo {
			margin-top: 0.5rem;
		}
		.footer-parent-logo img {
			max-height: 55px;
			width: auto;
			opacity: 0.85;
			transition: opacity 0.2s;
		}
		.footer-parent-logo img:hover {
			opacity: 1;
		}
		.footer-bottom {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding-top: 1.5rem;
			font-size: 13px;
			color: #64748b;
		}
		.footer-bottom a {
			color: #64748b !important;
			text-decoration: none !important;
			transition: color 0.2s;
		}
		.footer-bottom a:hover {
			color: #94a3b8 !important;
		}
		@media (max-width: 768px) {
			footer {
				padding: 3rem 0 2rem 0 !important;
			}
			.footer-main-grid {
				grid-template-columns: 1fr;
				gap: 2.5rem;
				text-align: center;
				padding-bottom: 2rem;
			}
			.footer-brand-section, .footer-nav-section, .footer-connect-section {
				align-items: center;
				text-align: center;
			}
			.footer-inner-col {
				align-items: center !important;
				text-align: center !important;
			}
			.footer-logo-row {
				flex-direction: column;
				gap: 10px;
			}
			.footer-brand-desc {
				max-width: 100%;
			}
			.footer-bottom {
				flex-direction: column;
				gap: 1rem;
				text-align: center;
			}
		}
	</style>
	<footer>
		<div class="footer-wrapper">
			<?php
			if ( count( $id_logos ) > 0 ) :
				?>
				<div class="acm__custom-logos">
					<?php
					$total_items  = count( $id_logos );
					$items_in_row = 0;
					$items        = 0;
					// Loop through the rows of data.
					foreach ( $id_logos as $id ) :
						$items_in_row++;
						$items++;
						// Get logo url.
						$logo = wp_get_attachment_url( $id );
						// Open row div if it's the first element of the row.
						if ( 1 === $items_in_row ) :
							?>
							<div class="acm__custom-logos-row">
							<?php
						endif;
						?>
							<div class="acm__custom-logo" style="background-image: url('<?php echo esc_url( $logo ); ?>')">
							</div>
							<?php
							// Close row div and reset counter to 0.
							if ( 3 === $items_in_row || $items === $total_items ) :
								$items_in_row = 0;
								?>
							</div>
								<?php
							endif;
						endforeach;
					?>
				</div>
				<?php
			else :
				?>
				<div class="footer-main-grid">
					<!-- Column 1: Brand / ACM-W India Logo -->
					<div class="footer-brand-section">
						<div class="footer-logo-row">
							<div class="footer-logo-badge">
								<img alt="ACM-W India Logo" height="50" style="max-height: 50px; width: auto;" src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>">
							</div>
							<h3 class="footer-brand-title">ACM-W India</h3>
						</div>
						<p class="footer-brand-desc">
							Supporting, celebrating, and advocating for women in computing across India.
						</p>
					</div>

					<!-- Column 2: Centered Quick Links -->
					<div class="footer-nav-section">
						<div class="footer-inner-col">
							<h4 class="footer-section-title">Quick Links</h4>
							<ul class="footer-links-list">
								<li><a href="<?php echo esc_url( get_home_url() ); ?>">Home</a></li>
								<li><a href="<?php echo esc_url( get_home_url() ); ?>/about/">About</a></li>
								<li><a href="<?php echo esc_url( get_home_url() ); ?>/student-chapters/">Student Chapters</a></li>
								<li><a href="<?php echo esc_url( get_home_url() ); ?>/executive-committee/">Executive Committee</a></li>
								<li><a href="<?php echo esc_url( get_home_url() ); ?>/flagship-events/">Flagship Events</a></li>
							</ul>
						</div>
					</div>

					<!-- Column 3: Social Links -->
					<div class="footer-connect-section">
						<div class="footer-inner-col">
							<h4 class="footer-section-title">Connect With Us</h4>
							<ul class="footer-social-links">
								<?php
								if ( $social_networks && count( $social_networks ) > 0 ) :
									foreach ( $social_networks as $social_network => $url ) :
										if ( $url ) :
											$mailto = ( 'email' === $social_network ) ? 'mailto:' . $url : $url;
											$target = ( 'email' !== $social_network ) ? "target='_blank'" : '';
											?>
											<li>
												<a href="<?php echo esc_url( $mailto ); ?>" <?php echo $target; ?> class="footer-social-btn" title="<?php echo esc_attr( ucfirst( $social_network ) ); ?>">
													<?php echo acm_get_social_svg_html( $social_network ); ?>
												</a>
											</li>
											<?php
										endif;
									endforeach;
								endif;
								?>
							</ul>
							
							<!-- Optional ACM Parent Logo -->
							<?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
								<div class="footer-parent-logo" style="align-self: flex-start;">
									<img alt="ACM Logo" src="<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>">
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php
			endif;
			?>

			<!-- Footer Bottom Copyright Bar -->
			<div class="footer-bottom">
				<div>
					&copy; <?php echo date('Y'); ?> ACM-W India. All Rights Reserved.
				</div>
				<div>
					<a href="https://india.acm.org/" target="_blank">ACM India</a>
				</div>
			</div>
		</div>
	</footer>
	<script>
		$(document).ready(function() {
			var wrapper = document.querySelector(".section-nav");
			var nav = priorityNav.init({
				mainNavWrapper: ".section-nav-wrapper",
				breakPoint: 0,
				navDropdownLabel: "MORE"
			});
		});
	</script>
</div>
</main>
</body>
<?php wp_footer(); ?>

</html>
