<!DOCTYPE html>
<html <?php language_attributes(); ?>
	class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js-priorityNav wf-robotocondensed-n7-active wf-robotocondensed-n4-active wf-robotocondensed-n3-active wf-robotocondensed-i3-active wf-robotocondensed-i4-active wf-robotocondensed-i7-active wf-roboto-n4-active wf-roboto-n5-active wf-active">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="shortcut icon" href="/favicon.ico?v=2">
	<meta class="foundation-data-attribute-namespace">
	<meta class="foundation-mq-xxlarge">
	<meta class="foundation-mq-xlarge-only">
	<meta class="foundation-mq-xlarge">
	<meta class="foundation-mq-large-only">
	<meta class="foundation-mq-large">
	<meta class="foundation-mq-medium-only">
	<meta class="foundation-mq-medium">
	<meta class="foundation-mq-small-only">
	<meta class="foundation-mq-small">
	<meta class="foundation-mq-topbar">
	<title>ACM | <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<style>
		blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
			margin: 0;
			padding: 0;
		}
		.subheader, code, p {
			font-weight: 400;
		}
		.tooltip, p {
			font-size: .875rem;
		}
		.breadcrumbs a, p {
			font-family: Verdana;
		}
		* {
			box-sizing: border-box;
		}
		p {
			line-height: 1.4;
			margin-bottom: 1.25rem;
			display: block;
			margin-block-start: 1em;
			margin-block-end: 1em;
			margin-inline-start: 0px;
			margin-inline-end: 0px;
			unicode-bidi: isolate;
		}
		body {
			background: #f5f5f5;
			color: #222;
			padding: 0;
			margin: 0;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			line-height: 1.5;
			cursor: auto;
		}
		body, html {
			font-size: 100%;
			height: 100%;
		}
		.alert-box, a:after, body, .antialiased {
			-webkit-font-smoothing: antialiased;
		}
		a:after, body {
			font-style: normal;
		}
		html {
			font-family: sans-serif;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: transparent;
		}
		:after, :before {
			box-sizing: border-box;
		}
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4 / 3;
			--wp--preset--aspect-ratio--3-4: 3 / 4;
			--wp--preset--aspect-ratio--3-2: 3 / 2;
			--wp--preset--aspect-ratio--2-3: 2 / 3;
			--wp--preset--aspect-ratio--16-9: 16 / 9;
			--wp--preset--aspect-ratio--9-16: 9 / 16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
			--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
			--wp--preset--font-size--normal: 16px;
			--wp--preset--font-size--huge: 42px;
			--wp-block-synced-color: #7a00df;
			--wp-block-synced-color--rgb: 122, 0, 223;
			--wp-bound-block-color: var(--wp-block-synced-color);
			--wp-editor-canvas-background: #ddd;
			--wp-admin-theme-color: #007cba;
			--wp-admin-theme-color--rgb: 0, 124, 186;
			--wp-admin-theme-color-darker-10: #006ba1;
			--wp-admin-theme-color-darker-10--rgb: 0, 107, 160.5;
			--wp-admin-theme-color-darker-20: #005a87;
			--wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
			--wp-admin-border-width-focus: 2px;
		}
		@media (min-resolution: 192dpi) {
			:root {
				--wp-admin-border-width-focus: 1.5px;
			}
		}

		/* Timeline Scroll Animations */
		@keyframes timelineFadeInUp {
			from {
				opacity: 0;
				transform: translateY(40px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes timelineFadeOutDown {
			from {
				opacity: 1;
				transform: translateY(0);
			}
			to {
				opacity: 0;
				transform: translateY(40px);
			}
		}

		.timeline-item {
			opacity: 0;
			transform: translateY(40px);
			transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
		}

		.timeline-item.is-visible {
			opacity: 1;
			transform: translateY(0);
		}

		/* Stagger children for a cascading effect */
		.timeline-item:nth-child(1) { transition-delay: 0s; }
		.timeline-item:nth-child(2) { transition-delay: 0.08s; }
		.timeline-item:nth-child(3) { transition-delay: 0.16s; }
		.timeline-item:nth-child(4) { transition-delay: 0.24s; }
		.timeline-item:nth-child(5) { transition-delay: 0.32s; }
		.timeline-item:nth-child(6) { transition-delay: 0.4s; }

		/* Dot pulse animation when visible */
		.timeline-item.is-visible .timeline-dot {
			animation: dotPulse 0.5s ease-out 0.3s;
		}

		@keyframes dotPulse {
			0% { box-shadow: 0 0 0 4px #eff6ff; }
			50% { box-shadow: 0 0 0 8px rgba(59, 130, 246, 0.2); }
			100% { box-shadow: 0 0 0 4px #eff6ff; }
		}

		/* Timeline line grow animation */
		.timeline-line {
			transform-origin: top;
			transition: transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
		}
		@media only screen and (min-width: 1130px) {
			.utilities-area .logo-section {
				width: auto !important;
			}
		}
	</style>
</head>

<body
	class="posttype_<?php echo esc_html( get_post_type( get_the_ID() ) ); ?> <?php echo is_home() ? 'is_home' : 'not_home'; ?>">
	<header id="header" class="row">
		<nav class="top-bar eyebrow show-for-medium-up" data-topbar data-options="is_hover: false">
			<section class="top-bar-section">
				<div id="skiptocontent"><a href="#SkipTarget">skip to main content</a></div>
				<?php if ( has_nav_menu( 'topsmall' ) ) : ?>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'topsmall',
								'menu_class'     => 'right',
								'depth'          => 1,
								'link_before'    => '<span class="">',
								'link_after'     => '</span>',
							)
						);
					?>
				<?php endif; ?>
			</section>
		</nav>
		<div class="clearfix utilities-area">
			<div class="logo-section">
				<div class="navbar-header show-for-large-up">
					<a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>" style="display: flex; align-items: center; text-decoration: none;">
						<?php
							$logo = get_theme_mod( 'logo_image' ) ?
								get_theme_mod( 'logo_image' ) :
								get_theme_root_uri() . '/acm/img/logo.png';
						?>
						<img alt="ACM Logo" height="55" class="logo" title="Home" style="margin-top: 8px; margin-bottom: 8px;"
							src="<?php echo esc_url( $logo ); ?>" />
					</a>
				</div>
				<div class="navbar-header hide-for-large-up">
					<a href="<?php echo esc_url( get_home_url() ); ?>" style="display: flex; align-items: center; text-decoration: none;">
						<img alt="ACM Logo" class="img-responsive hide-for-large-up" title="Home"
							src="<?php echo esc_url( get_theme_root_uri() ); ?>/acm/img/logo.png" style="max-height: 50px; width: auto; float: left; margin-right: 10px;">
					</a>
				</div>
			</div>
			<div id="acm-description" class="column large-5 show-for-large-up">
				<div>
					ACM-W India supporting, celebrating, and advocating for Women in Computing.
				</div>
			</div>
			<div id="ctas-and-search" class="column large-5 medium-6 no-pad-left ctas-and-search">
				<?php
				if ( has_nav_menu( 'secondary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'secondary',
							'menu_class'     => 'block-grid right',
							'depth'          => 1,
							'link_before'    => '<span class="">',
							'link_after'     => '</span>',
						)
					);
				}
				?>
				<div style="float: right; height: 100%; display: flex; align-items: center;">
					<a href="https://www.linkedin.com/company/acm-w-india/" target="_blank" style="background-color: #005a87; color: #ffffff; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 6px; padding: 10px 16px; margin-top: 15px; margin-bottom: 15px; font-family: 'Roboto Condensed', Helvetica, Arial, sans-serif; font-weight: 500; font-size: 14px; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#004b6b'" onmouseout="this.style.backgroundColor='#005a87'" title="LinkedIn">
						LinkedIn
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1px;"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
					</a>
				</div>
			</div>
		</div>
		<nav class="top-bar main-nav" data-topbar data-options="is_hover: false">
			<ul class="title-area">
				<li class="toggle-topbar menu-icon">
					<a href="/#"><span></span></a>
				</li>
			</ul>
			<section class="top-bar-section">
				<div class="mobile-links">
					<div class="mobile-search">
						<form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>">
							<i class="fa fa-search left"></i>
							<input class="text" type="text" value=" " name="s" id="s" />
							<input type="submit" class="submit button" name="submit"
								value="<?php esc_attr_e( 'Search' ); ?>" />
						</form>
					</div>
				</div>
				<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class'     => 'nav-menu',
									'menu_id'        => 'primary-menu',
								)
							);
						} else {
							echo '<div class="menu-container"><ul id="primary-menu" class="nav-menu" style="display:flex; list-style:none; margin:0; padding:0 0 0 15px; align-items:center; height:100%;">';
							echo '<li class="menu-item" style="margin-right: 2rem;"><a href="/" style="color:#fff; font-weight:400; font-family:\'Roboto Condensed\', Helvetica, Roboto, Arial, sans-serif; font-size:15px; text-transform:uppercase; text-decoration:none;">Home</a></li>';
							echo '<li class="menu-item" style="margin-right: 2rem;"><a href="/about/" style="color:#fff; font-weight:400; font-family:\'Roboto Condensed\', Helvetica, Roboto, Arial, sans-serif; font-size:15px; text-transform:uppercase; text-decoration:none;">About</a></li>';
							echo '<li class="menu-item" style="margin-right: 2rem;"><a href="/executive-committee/" style="color:#fff; font-weight:400; font-family:\'Roboto Condensed\', Helvetica, Roboto, Arial, sans-serif; font-size:15px; text-transform:uppercase; text-decoration:none;">Executive Committee</a></li>';
							echo '<li class="menu-item" style="margin-right: 2rem;"><a href="/flagship-events/" style="color:#fff; font-weight:400; font-family:\'Roboto Condensed\', Helvetica, Roboto, Arial, sans-serif; font-size:15px; text-transform:uppercase; text-decoration:none;">Flagship Events</a></li>';
							echo '<li class="menu-item" style="margin-right: 2rem;"><a href="/student-chapters/" style="color:#fff; font-weight:400; font-family:\'Roboto Condensed\', Helvetica, Roboto, Arial, sans-serif; font-size:15px; text-transform:uppercase; text-decoration:none;">Student Chapters</a></li>';
							echo '</ul></div>';
						}
						?>
				<button class="nav__dropdown-toggle">MORE</button>
				<div class="more-list-box"></div>
			</section>
		</nav>
	</header>
	<main id="main" role="main">
