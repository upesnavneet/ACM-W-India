<?php
/**
 * Template Name: Executive Committee Page
 *
 * @package WordPress
 * @subpackage ACM
 * @since ACM 1.0
 */
get_header();
?>

<style>
/* ── Executives Page Styles ───────────────────────────── */

/* ── Executive Committee Page — Dark Premium Theme ── */

.exec-page-wrapper {
	background: linear-gradient(180deg, #0a0e1a 0%, #0d1b2a 40%, #1b2838 100%);
	padding: 4rem 0 6rem;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	overflow-x: hidden;
	min-height: 100vh;
}

/* ── Header Section ── */
.exec-header {
	text-align: center;
	margin-bottom: 4rem;
	padding: 0 1.5rem;
	position: relative;
}

.exec-header__title {
	font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;
	font-size: clamp(1.1rem, 2.5vw, 1.5rem);
	font-weight: 700;
	color: #ffffff;
	margin: 0 0 0.6rem;
	letter-spacing: 0.25em;
	text-transform: uppercase;
	line-height: 1.3;
}

.exec-header__line {
	display: block;
	width: 60px;
	height: 3px;
	background: linear-gradient(90deg, #38bdf8, #6366f1);
	margin: 0 auto 1rem;
	border-radius: 2px;
}

.exec-header__subtitle {
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-size: 0.88rem;
	color: #8892a4;
	max-width: 520px;
	margin: 0 auto;
	line-height: 1.6;
	font-weight: 400;
}

/* ── Card Grid ── */
.exec-grid {
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
	gap: 2.5rem 2rem;
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 2rem;
}

/* ── Focus and Blur Interaction (JS classes) ── */
body.card-hovered .exec-header,
body.card-hovered .breadcrumb-container {
	filter: blur(6px);
	opacity: 0.35;
}

body.card-hovered .exec-card:not(.is-hovered) {
	filter: blur(5px);
	opacity: 0.3;
	transform: scale(0.96);
}

.exec-header, .breadcrumb-container, .exec-card {
	transition: filter 0.4s ease, opacity 0.4s ease, transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

/* ── Card ── */
.exec-card {
	display: flex;
	flex-direction: column;
	background: transparent;
	position: relative;
	z-index: 1;
}

.exec-card.is-hovered {
	filter: blur(0) !important;
	opacity: 1 !important;
	transform: scale(1.05);
	z-index: 10;
}

/* ── Avatar Area ── */
.exec-card__avatar-wrap {
	position: relative;
	width: 100%;
	aspect-ratio: 1 / 1.1;
	overflow: hidden;
	background: linear-gradient(145deg, #111827 0%, #1e293b 100%);
	border-radius: 20px;
	margin-bottom: 1rem;
	box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
	transition: box-shadow 0.4s ease, border-color 0.4s ease;
	border: 1px solid rgba(56, 189, 248, 0.08);
}

.exec-card.is-hovered .exec-card__avatar-wrap {
	box-shadow: 0 16px 48px rgba(56, 189, 248, 0.15), 0 8px 24px rgba(0, 0, 0, 0.4);
	border-color: rgba(56, 189, 248, 0.25);
}

.exec-card__avatar {
	width: 100%;
	height: 100%;
	object-fit: cover;
	display: block;
	transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.exec-card.is-hovered .exec-card__avatar {
	transform: scale(1.06);
}

/* ── Description Panel ── */
.exec-card__desc-panel {
	position: absolute;
	top: 0;
	left: calc(100% + 14px);
	width: 260px;
	background: rgba(10, 14, 26, 0.95);
	backdrop-filter: blur(16px);
	-webkit-backdrop-filter: blur(16px);
	border: 1px solid rgba(56, 189, 248, 0.15);
	border-radius: 16px;
	padding: 1.5rem;
	box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
	opacity: 0;
	visibility: hidden;
	transform: translateX(-16px);
	transition: opacity 0.3s ease, transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.3s;
	pointer-events: none;
	z-index: 100;
	display: flex;
	flex-direction: column;
	justify-content: center;
	height: 220px;
}

.exec-card__desc-panel::after {
	content: '';
	position: absolute;
	top: 30px;
	left: -8px;
	width: 0;
	height: 0;
	border-top: 8px solid transparent;
	border-bottom: 8px solid transparent;
	border-right: 8px solid rgba(10, 14, 26, 0.95);
}

.exec-card.is-hovered .exec-card__desc-panel {
	opacity: 1;
	visibility: visible;
	transform: translateX(0);
	pointer-events: auto;
}

.exec-card__quote {
	color: #cbd5e1;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-size: 0.82rem;
	line-height: 1.7;
	font-style: italic;
	margin: 0;
	text-align: left;
	-webkit-font-smoothing: antialiased;
}

/* ── Initials Fallback ── */
.exec-card__initials {
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 3.5rem;
	font-weight: 700;
	font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;
	color: rgba(255, 255, 255, 0.15);
	background: transparent;
	user-select: none;
	transition: color 0.4s ease;
	letter-spacing: 4px;
}

.exec-card.is-hovered .exec-card__initials {
	color: #38bdf8;
}

/* ── Card Text Content ── */
.exec-card__content {
	padding: 0 0.25rem;
}

.exec-card__name {
	font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;
	font-size: 1.1rem;
	font-weight: 700;
	color: #e2e8f0;
	margin: 0 0 0.3rem;
	line-height: 1.3;
}

.exec-card__role {
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-size: 0.72rem;
	color: #64748b;
	margin: 0;
	font-weight: 400;
	line-height: 1.5;
}

/* ── Full-width override ── */
#maincontent {
	max-width: 100% !important;
	padding: 0 !important;
}

/* Side pop alignment depending on screen position to avoid scroll overflow */
@media (min-width: 641px) and (max-width: 908px) {
	/* 2 columns */
	.exec-card:nth-child(2n) .exec-card__desc-panel {
		left: auto;
		right: calc(100% + 12px);
		transform: translateX(20px);
	}
	.exec-card:nth-child(2n) .exec-card__desc-panel::after {
		left: auto;
		right: -8px;
		border-right: none;
		border-left: 8px solid rgba(10, 14, 26, 0.95);
	}
	.exec-card:nth-child(2n).is-hovered .exec-card__desc-panel {
		transform: translateX(0);
	}
}

@media (min-width: 909px) and (max-width: 1200px) {
	/* 3 columns */
	.exec-card:nth-child(3n) .exec-card__desc-panel {
		left: auto;
		right: calc(100% + 12px);
		transform: translateX(20px);
	}
	.exec-card:nth-child(3n) .exec-card__desc-panel::after {
		left: auto;
		right: -8px;
		border-right: none;
		border-left: 8px solid rgba(10, 14, 26, 0.95);
	}
	.exec-card:nth-child(3n).is-hovered .exec-card__desc-panel {
		transform: translateX(0);
	}
}

@media (min-width: 1201px) {
	/* 4 columns */
	.exec-card:nth-child(4n) .exec-card__desc-panel {
		left: auto;
		right: calc(100% + 12px);
		transform: translateX(20px);
	}
	.exec-card:nth-child(4n) .exec-card__desc-panel::after {
		left: auto;
		right: -8px;
		border-right: none;
		border-left: 8px solid rgba(10, 14, 26, 0.95);
	}
	.exec-card:nth-child(4n).is-hovered .exec-card__desc-panel {
		transform: translateX(0);
	}
}

/* ── Responsive tweaks ── */
@media only screen and (max-width: 640px) {
	.exec-grid {
		grid-template-columns: 1fr;
		padding: 0 1.5rem;
		gap: 2.5rem;
	}
	.exec-header {
		margin-bottom: 2.5rem;
	}
	
	/* On mobile, drop down instead of side pop */
	.exec-card__desc-panel {
		position: relative;
		left: 0 !important;
		right: auto !important;
		width: 100%;
		height: auto;
		margin-top: 1rem;
		transform: translateY(-10px);
		border-radius: 14px;
	}
	.exec-card__desc-panel::after {
		display: none;
	}
	.exec-card.is-hovered .exec-card__desc-panel {
		transform: translateY(0);
	}
}
#maincontent {
	background-color: transparent !important;
}
</style>
<div class="exec-page-wrapper">

	<div id="maincontent" class="row">
		<div class="columns small-12">

			<!-- ── Centered Header ── -->
			<div class="exec-header">
				<h1 class="exec-header__title">Executive Committee</h1>
				<span class="exec-header__line"></span>
				<p class="exec-header__subtitle">
					ACM India Women Committee
				</p>
			</div>

			<!-- ── Card Grid ── -->
			<div class="exec-grid">

				<?php
				$executives = array(
					array(
						'name'    => 'Geetanjali Kale',
						'role'    => 'Chair, ACM India Women Committee | PICT, Pune',
						'initials'=> 'GK',
						'photo'   => get_template_directory_uri() . '/img/executives/geetanjali-kale.jpg',
						'quote'   => 'Dr. Geetanjali is an Associate Professor at PICT with over two decades of excellence. A dedicated ACM leader for over a decade, she is committed to inclusive growth and strengthening tech mentorship networks.',
					),
					array(
						'name'    => 'Alpana Dubey',
						'role'    => 'Vice- Chair, ACM India Women Committee | Accenture, Bangalore',
						'initials'=> 'AD',
						'photo'   => get_template_directory_uri() . '/img/executives/AlpanaDubey.png',
						'quote'   => 'Alpana is the Innovation Research Principal Director at Accenture, leading AI and robotics R&D. She has nearly two decades of research experience and is dedicated to advancing tech ecosystems and mentorship.',
					),
					array(
						'name'    => 'Renuka Sindhghatta Rajan',
						'role'    => 'Secretary/Treasurer, ACM India Women Committee | IBM, Bangalore',
						'initials'=> 'RR',
						'quote'   => 'Dr. Renuka is a Senior Technical Staff Member and Manager at IBM Research, specializing in intelligent processes and Explainable AI. She is committed to fostering research communities and mentorship.',
					),
					array(
						'name'    => 'Sachi Choudhary',
						'role'    => 'Member, ACM India Women Committee | UPES, Dehradun',
						'initials'=> 'SC',
						'photo'   => get_template_directory_uri() . '/img/executives/SachiChoudhary.webp',
						'quote'   => 'Dr. Sachi is an Associate Professor at UPES and Faculty Coordinator of the UPES ACM-W Student Chapter. She has extensive experience teaching and researching data science, AI, and machine learning.',
					),
					array(
						'name'    => 'Sonia Garcha',
						'role'    => 'Member, ACM India Women Committee | CSpathshala, Pune',
						'initials'=> 'SG',
						'quote'   => 'Sonia is a Director at YouthAid Foundation and Startup Mentor with GWNET. She has extensive experience in strategic consulting, community outreach, and promoting technology-driven social impact.',
					),
					array(
						'name'    => 'Manik Gupta',
						'role'    => 'Member, ACM India Women Committee | BITS Pilani Hyderabad Campus, Hyderabad',
						'initials'=> 'MG',
						'photo'   => get_template_directory_uri() . '/img/executives/ManikGupta.jpg',
						'quote'   => 'Dr. Manik is an Associate Professor at BITS Pilani with academic research backgrounds at UCL and Queen Mary. She specializes in applying machine learning and IoT to real-world smart systems.',
					),
					array(
						'name'    => 'Jayashree Mohan',
						'role'    => 'Member, ACM India Women Committee | Microsoft Research, Bangalore',
						'initials'=> 'JM',
						'photo'   => get_template_directory_uri() . '/img/executives/JayashreeMohan.jpg',
						'quote'   => 'Dr. Jayashree is a Senior Researcher at Microsoft Research, Bengaluru. Her research focuses on storage reliability, file systems, and building dependable, high-performance computing infrastructure.',
					),
					array(
						'name'    => 'Nita Thakare',
						'role'    => 'Member, ACM India Women Committee | Priyadarshini College of Engineering, Nagpur',
						'initials'=> 'NT',
						'photo'   => get_template_directory_uri() . '/img/executives/NitaThakare.jpg',
						'quote'   => 'Dr. Nita is a Professor and Head of Computer Engineering at GGS College Nashik. With over two decades of academic leadership, she actively advances technical education and student mentorship.',
					),
					array(
						'name'    => 'Mini Ulanat',
						'role'    => 'Member, ACM India Women Committee | CUSAT, Cochin',
						'initials'=> 'MU',
						'photo'   => get_template_directory_uri() . '/img/executives/MiniUlanat.jpg',
						'quote'   => 'Dr. Mini is associated with CUSAT, focusing on Social Network Analysis and Sentiment Analysis. She is an active community mentor, supporting national-level student computing and leadership initiatives.',
					),
					array(
						'name'    => 'Sriparna Saha',
						'role'    => 'Member, ACM India Women Committee | IIT Patna, Patna',
						'initials'=> 'SS',
						'photo'   => get_template_directory_uri() . '/img/executives/SriparnaSaha.jpg',
						'quote'   => 'Dr. Sriparna is an Associate Professor at IIT Patna, specializing in AI, NLP, and Machine Learning. She is a Humboldt fellow with extensive contributions to international computing research.',
					),
				);

				foreach ( $executives as $exec ) :
					$initials = esc_html( $exec['initials'] );
					?>
					<div class="exec-card">
						<div class="exec-card__avatar-wrap">
							<?php if ( ! empty( $exec['photo'] ) ) : ?>
								<img class="exec-card__avatar" src="<?php echo esc_url( $exec['photo'] ); ?>" alt="<?php echo esc_attr( $exec['name'] ); ?>">
							<?php else : ?>
								<div class="exec-card__initials"><?php echo $initials; ?></div>
							<?php endif; ?>
						</div>
						<div class="exec-card__desc-panel">
							<p class="exec-card__quote"><?php echo esc_html( $exec['quote'] ); ?></p>
						</div>
						<div class="exec-card__content">
							<h3 class="exec-card__name"><?php echo esc_html( $exec['name'] ); ?></h3>
							<p class="exec-card__role"><?php echo esc_html( $exec['role'] ); ?></p>
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
