<?php
/**
 * Template Name: Executives Page
 *
 * @package WordPress
 * @subpackage ACM
 * @since ACM 1.0
 */
get_header();
?>

<style>
/* ── Executives Page Styles ───────────────────────────── */

.exec-page-wrapper {
	background: #f5f5f5;
	padding: 0 0 4rem;
	overflow-x: hidden;
}

/* ── Breadcrumb bar (kept from standard pages) ── */
.exec-breadcrumb-bar {
	background: #fff;
	border-bottom: 1px solid #e0e0e0;
}

/* ── Hero strip (replaces banner) ── */
.exec-hero {
	background: linear-gradient(135deg, #1e293b 0%, #282828 60%, #3a4a1e 100%);
	padding: 3.5rem 1.5rem 3rem;
	text-align: center;
	position: relative;
	overflow: hidden;
}

.exec-hero::before {
	content: '';
	position: absolute;
	inset: 0;
	background: radial-gradient(ellipse at 70% 50%, rgba(166,188,9,0.18) 0%, transparent 70%);
	pointer-events: none;
}

.exec-hero__eyebrow {
	display: inline-block;
	font-size: 0.72rem;
	font-family: Verdana, sans-serif;
	letter-spacing: 0.18em;
	text-transform: uppercase;
	color: #a6bc09;
	background: rgba(166,188,9,0.12);
	border: 1px solid rgba(166,188,9,0.35);
	border-radius: 100px;
	padding: 0.3em 1.1em;
	margin-bottom: 1rem;
}

.exec-hero__title {
	font-family: 'Roboto Condensed', Helvetica, Arial, sans-serif;
	font-size: clamp(1.75rem, 4vw, 2.6rem);
	font-weight: 700;
	color: #ffffff;
	margin: 0 0 0.75rem;
	line-height: 1.15;
}

.exec-hero__title span {
	color: #a6bc09;
}

.exec-hero__subtitle {
	font-family: Verdana, sans-serif;
	font-size: 0.88rem;
	color: #b7b7b7;
	max-width: 520px;
	margin: 0 auto;
	line-height: 1.6;
}

/* ── Section heading ── */
.exec-section-heading {
	text-align: center;
	padding: 3rem 1.5rem 1.5rem;
}

.exec-section-heading h2 {
	font-family: 'Roboto Condensed', Helvetica, Arial, sans-serif;
	font-size: 1.4rem;
	font-weight: 700;
	color: #1e293b;
	margin: 0 0 0.4rem;
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 0.75rem;
}

.exec-section-heading h2::before,
.exec-section-heading h2::after {
	content: '';
	flex: 1;
	max-width: 80px;
	height: 2px;
	background: linear-gradient(90deg, transparent, #a6bc09);
}

.exec-section-heading h2::after {
	background: linear-gradient(90deg, #a6bc09, transparent);
}

.exec-section-heading p {
	font-size: 0.83rem;
	color: #666;
	font-family: Verdana, sans-serif;
	margin: 0;
}

/* ── Card Grid ── */
.exec-grid {
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
	gap: 1.75rem;
	max-width: 1100px;
	margin: 0 auto;
	padding: 0 1.5rem 3rem;
}

/* ── Blur effect for the rest of the page ── */
body.card-hovered .exec-hero,
body.card-hovered .exec-section-heading,
body.card-hovered .breadcrumb-container {
	filter: blur(5px);
	opacity: 0.6;
}

body.card-hovered .exec-card:not(.is-hovered) {
	filter: blur(5px);
	opacity: 0.4;
	transform: scale(0.95);
}

.exec-hero, .exec-section-heading, .breadcrumb-container, .exec-card {
	transition: all 0.4s ease;
}

/* ── Individual Card ── */
.exec-card {
	position: relative;
	z-index: 1;
}

.exec-card.is-hovered {
	z-index: 100;
	transform: scale(1.05);
}

.exec-card__main {
	background: #ffffff;
	border-radius: 14px;
	overflow: hidden;
	box-shadow: 0 2px 12px rgba(0,0,0,0.07);
	display: flex;
	flex-direction: column;
	position: relative;
	z-index: 2;
	height: 100%;
	transition: box-shadow 0.28s ease;
}

.exec-card.is-hovered .exec-card__main {
	box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.exec-card.is-hovered .exec-card__avatar-wrap::after {
	opacity: 1;
}

/* Avatar area */
.exec-card__avatar-wrap {
	position: relative;
	height: 220px;
	overflow: hidden;
	background: linear-gradient(145deg, #1e293b, #282828);
}

.exec-card__avatar-wrap::after {
	content: '';
	position: absolute;
	inset: 0;
	background: linear-gradient(to top, rgba(166,188,9,0.25), transparent);
	opacity: 0;
	transition: opacity 0.28s;
}

.exec-card__avatar {
	width: 100%;
	height: 100%;
	object-fit: cover;
	display: block;
	transition: transform 0.35s ease;
}

.exec-card.is-hovered .exec-card__avatar {
	transform: scale(1.04);
}

/* Initials fallback when no photo */
.exec-card__initials {
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 3.5rem;
	font-weight: 700;
	font-family: 'Roboto Condensed', Helvetica, Arial, sans-serif;
	color: #a6bc09;
	letter-spacing: -2px;
	user-select: none;
}

/* Accent bar */
.exec-card__accent {
	height: 4px;
	background: linear-gradient(90deg, #a6bc09, #6a8c00);
}

/* Body */
.exec-card__body {
	padding: 1.25rem 1.35rem 1.5rem;
	flex: 1;
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
}

.exec-card__name {
	font-family: 'Roboto Condensed', Helvetica, Arial, sans-serif;
	font-size: 1.15rem;
	font-weight: 700;
	color: #1e293b;
	margin: 0 0 0.25rem;
	line-height: 1.2;
}

.exec-card__role {
	font-size: 0.75rem;
	font-family: Verdana, sans-serif;
	letter-spacing: 0.1em;
	text-transform: uppercase;
	color: #a6bc09;
	font-weight: 600;
	margin: 0;
}

/* ── Description Box (overlays the avatar area) ── */
.exec-card__bio-box {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	height: 220px; /* same height as avatar area */
	background: rgba(0, 0, 0, 0.92);
	color: #ffffff;
	padding: 1.5rem;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 10;
	opacity: 0;
	transform: translateY(20px);
	transition: opacity 0.35s ease, transform 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
	pointer-events: none;
	border-radius: 14px 14px 0 0;
}

.exec-card.is-hovered .exec-card__bio-box {
	opacity: 1;
	transform: translateY(0);
	pointer-events: auto;
}

.exec-card__bio-content {
	text-align: center;
}

.exec-card__bio-content p {
	font-family: Verdana, sans-serif;
	font-style: italic;
	font-size: 0.82rem;
	line-height: 1.7;
	margin: 0;
	color: #ffffff;
}

/* Responsive tweaks */
@media only screen and (max-width: 600px) {
	.exec-grid {
		grid-template-columns: 1fr;
		padding: 0 1rem 1rem;
	}
	.exec-hero {
		padding: 2.5rem 1rem 2rem;
	}
}
#maincontent {
	background-color: transparent !important;
}
</style>
<div class="exec-page-wrapper">

	<div id="maincontent" class="row">
		<div class="columns small-12">

	<!-- ── Hero strip (no banner image) ── -->
	<div class="exec-hero">
		<span class="exec-hero__eyebrow">Leadership</span>
		<h1 class="exec-hero__title">Meet Our <span>Executives</span></h1>
		<p class="exec-hero__subtitle">
			The dedicated team driving ACM-W India's mission to celebrate, inform, and support women in computing across India.
		</p>
	</div>

	<!-- ── Executive Committee ── -->
	<div class="exec-section-heading">
		<h2>Executive Committee</h2>
		<p>2024 – 2025 Academic Year</p>
	</div>

	<div class="exec-grid">

		<?php
		$executives = array(
			array(
				'name'    => 'Dr. Geetanjali Kale',
				'role'    => 'Chair',
				'initials'=> 'GK',
				'bio'     => '“I believe in empowering women in computing to break barriers, innovate, and lead the next generation of technologists.”',
			),
			array(
				'name'    => 'Ms. Ananya Reddy',
				'role'    => 'Vice-Chair',
				'initials'=> 'AR',
				'bio'     => '“Through collaboration and mentorship, we can build a strong network of women shaping the future of AI and HCI.”',
			),
			array(
				'name'    => 'Dr. Meera Iyer',
				'role'    => 'Secretary',
				'initials'=> 'MI',
				'bio'     => '“Communication and community are at the heart of our mission. Together, we amplify the voices of women in tech.”',
			),
			array(
				'name'    => 'Ms. Kavya Nair',
				'role'    => 'Treasurer',
				'initials'=> 'KN',
				'bio'     => '“Financial transparency and resource availability ensure our programs reach every aspiring female engineer across India.”',
			),
			array(
				'name'    => 'Prof. Sunita Gupta',
				'role'    => 'Academic Liaison',
				'initials'=> 'SG',
				'bio'     => '“Education is the foundation of progress. We strive to integrate inclusive computing curricula in universities nationwide.”',
			),
			array(
				'name'    => 'Dr. Lakshmi Venkat',
				'role'    => 'Industry Relations',
				'initials'=> 'LV',
				'bio'     => '“Bridging the gap between academia and industry creates pathways for women to thrive in leadership roles.”',
			),
		);

		foreach ( $executives as $exec ) :
			$initials = esc_html( $exec['initials'] );
			?>
			<div class="exec-card">
				<div class="exec-card__main">
					<div class="exec-card__avatar-wrap">
						<div class="exec-card__initials"><?php echo $initials; ?></div>
						<div class="exec-card__bio-box">
							<div class="exec-card__bio-content">
								<p><?php echo esc_html( $exec['bio'] ); ?></p>
							</div>
						</div>
					</div>
					<div class="exec-card__accent"></div>
					<div class="exec-card__body">
						<h3 class="exec-card__name"><?php echo esc_html( $exec['name'] ); ?></h3>
						<p class="exec-card__role"><?php echo esc_html( $exec['role'] ); ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	</div><!-- .exec-grid -->

	<script>
	document.addEventListener('DOMContentLoaded', function() {
		const cards = document.querySelectorAll('.exec-card');
		const body = document.body;

		cards.forEach(card => {
			card.addEventListener('mouseenter', () => {
				card.classList.add('is-hovered');
				body.classList.add('card-hovered');
			});
			card.addEventListener('mouseleave', () => {
				card.classList.remove('is-hovered');
				body.classList.remove('card-hovered');
			});
		});
	});
	</script>

		</div><!-- .columns -->
	</div><!-- #maincontent -->
</div><!-- .exec-page-wrapper -->

<?php get_footer(); ?>
