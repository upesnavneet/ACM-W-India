<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage ACM
 * @since ACM 1.0
 */
get_header();
?>


<div class="row breadcrumb-container" style="margin-top: 1rem;">
	<div class="columns small-12">
		<ul class="breadcrumbs">
			<?php ACMUtils::the_breadcrumb(); ?>
		</ul>
	</div>
</div>
	
	<div id="maincontent" class="row" style="margin-top: 2rem;">
		<article class="has-edit-button columns large-8 medium-8 small-12 zone-1 reveal-on-scroll"
			id="SkipTarget"
			tabindex="-1">
			
			<div class="intro-section" style="margin-bottom: 3rem; color: #000000; font-family: Roboto, sans-serif;">
				<h2 style="text-align: left; font-weight: 700; font-size: 24px; margin-top: 1rem; margin-bottom: 1.5rem; color: #1e293b; font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;">
					About ACM-W India
				</h2>
				
				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
					Women in computing have shaped the digital world through innovation, resilience, and vision. From Ada Lovelace imagining programmable machines in the 1800s to Grace Hopper making programming languages more human-friendly, women have continuously transformed technology and inspired future generations to innovate fearlessly. 
				</p>
				
				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
					ACM-W India aims to carry forward the legacy of brilliant women and the mission of ACM to celebrate, inform, and support women with a deep fascination for the world of technology.
				</p>
				
				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
					ACM-W India actively supports and empowers women across every aspect of computing by offering diverse programs and resources for ACM members, encouraging students to pursue and grow in careers in technology through professional chapter activities, guiding career development in computing, and creating meaningful opportunities for learning, collaboration, and networking. 
				</p>

				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 0.5rem; color: #000000;">
					ACM-W India aims to empower and support women through initiatives such as:
				</p>
				<ul style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; margin-left: 1.5rem; list-style-type: disc; color: #000000;">
					<li style="margin-bottom: 0.5rem;">Foster industry and academic collaboration through partnerships with leading organizations like Google, IBM, and TCS Research</li>
					<li style="margin-bottom: 0.5rem;">Promote computing education through initiatives like CSpathshala, AI Olympiad, Summer and Winter Schools, and expert speaker programs</li>
					<li style="margin-bottom: 0.5rem;">Advance computational learning and pedagogy through programs like COMPUTE and the Teaching Partnership Program in collaboration with CBSE, AICTE, and other educational bodies</li>
					<li style="margin-bottom: 0.5rem;">Encourage research and innovation through PhD Clinics, fellowships, mentorship programs, research grants, and travel support</li>
					<li style="margin-bottom: 0.5rem;">Strengthen the computing community through student and professional chapters across India, technical workshops, coding events, networking sessions, and mentorship activities</li>
				</ul>
				
				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
					ACM-W India also aims to promote computer literacy, especially in rural India, with the vision of empowering underprivileged women and children and helping them become independent and self-reliant.
				</p>
				
				<h3 style="text-align: left; font-weight: 700; font-size: 20px; margin-top: 2rem; margin-bottom: 1rem; color: #1e293b; font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;">
					Key Initiatives
				</h3>
				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
					ACM-W India focuses strongly on networking, mentorship, and career growth. Signature events include the <strong>All India Celebration of Women in Computing (AICWiC)</strong>, which aims to increase the participation and advancement of women in the technical workforce, and the <strong>ACM-W India Grad Cohort</strong>, a flagship mentoring initiative designed specifically for women graduate students in computing across India.
				</p>

				<h3 style="text-align: left; font-weight: 700; font-size: 20px; margin-top: 2rem; margin-bottom: 1rem; color: #1e293b; font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;">
					Leadership (2025&ndash;2027)
				</h3>
				<p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
					ACM-W India is guided by a dedicated executive committee. For the term spanning July 1, 2025, to June 30, 2027, the leadership includes:
				</p>
				<ul style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 2.5rem; margin-left: 1.5rem; list-style-type: disc; color: #000000;">
					<li style="margin-bottom: 0.5rem;"><strong>Chair:</strong> Geetanjali Kale (PICT, Pune)</li>
					<li style="margin-bottom: 0.5rem;"><strong>Vice-Chair:</strong> Alpana Dubey (Accenture, Bangalore)</li>
					<li style="margin-bottom: 0.5rem;"><strong>Secretary/Treasurer:</strong> Renuka Sindhghatta Rajan (IBM, Bangalore)</li>
				</ul>
			</div>

		</article>
		
		<?php get_sidebar('content_right'); ?>
		

	</div>


<?php get_footer(); ?>
