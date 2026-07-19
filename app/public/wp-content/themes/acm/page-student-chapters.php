<?php
/**
 * Template Name: Student Chapters
 *
 * @package WordPress
 * @subpackage ACM
 * @since ACM 1.0
 */
get_header();

// Setup variables based on provided code
$chapters_file = __DIR__ . '/chapters.json';
$chapters = [];
if (file_exists($chapters_file)) {
    $content = file_get_contents($chapters_file);
    $content = preg_replace('/^\xEF\xBB\xBF/', '', $content); // Remove BOM if present
    $chapters = json_decode($content, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("JSON Decode Error in chapters.json: " . json_last_error_msg());
    }
    if (!is_array($chapters)) {
        $chapters = [];
    }
}
$students     = array_values(array_filter($chapters, fn($c) => isset($c['type']) && $c['type'] === 'student'));
$professional = array_values(array_filter($chapters, fn($c) => isset($c['type']) && $c['type'] === 'professional'));
$student_count = 69;
$professional_count = count($professional);
$total        = $student_count + $professional_count;
$states       = 18;
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
			<h1 style="text-align: left; font-weight: 700; font-size: 32px; margin-top: 1rem; margin-bottom: 2rem; color: #1e293b; font-family: 'Roboto Condensed', Helvetica, Roboto, Arial, sans-serif;">
				Student Chapters
			</h1>
            
            <p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
                ACM-W India Chapters are local communities dedicated to supporting, celebrating, and empowering women in computing. With a growing network of 69 student chapters and 3 professional chapters, ACM-W India provides opportunities for members to connect with peers, mentors, educators, researchers, and industry professionals while fostering an inclusive environment that encourages participation and leadership in computing.
            </p>
            <p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 2rem; color: #000000;">
                ACM-W India Chapters organize technical talks, workshops, mentoring sessions, networking events, outreach activities, and initiatives that promote learning, collaboration, and professional growth. As part of the larger ACM-W India network, chapters receive guidance, resources, and opportunities to engage with national programs and activities aimed at inspiring and supporting women at every stage of their journey in computing.
            </p>

            <!-- Chapter Search -->
            <div style="margin-bottom: 2rem; background: #f8fafc; padding: 1.5rem; border-radius: 8px; border: 1px solid #e2e8f0;">
                <h3 style="font-weight: 700; font-size: 1.25rem; margin-bottom: 0.5rem; color: #1e293b;">Search Chapter</h3>
                <input class="search" id="chapter-search" placeholder="Search by name or city" style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 4px; font-size: 0.875rem;">
                <div id="search-results" style="margin-top: 1rem; max-height: 200px; overflow-y: auto;"></div>
            </div>

            <!-- Chapter Map -->
            <div style="margin-bottom: 2rem;">
                <h3 style="font-weight: 700; font-size: 1.25rem; margin-bottom: 0.5rem; color: #1e293b;">Chapter Map</h3>
                <p style="font-size: 0.875rem; color: #64748b; margin-bottom: 1rem;">Hover a marker for chapter details. Click to visit the chapter site.</p>
                <div id="map" style="width: 100%; height: 400px; background: #e5e7eb; border-radius: 8px;"></div>
                <div class="legend" style="margin-top: 1rem; font-size: 0.875rem;">
                    <span style="margin-right: 1rem;"><span style="display:inline-block; width:12px; height:12px; border-radius:50%; background:hsl(67, 91%, 39%); margin-right:4px; vertical-align: middle;"></span>Professional Chapter (<?= count($professional) ?>)</span>
                    <span><span style="display:inline-block; width:12px; height:12px; border-radius:50%; background:hsl(197, 100%, 28%); margin-right:4px; vertical-align: middle;"></span>Student Chapter (<?= $student_count ?>)</span>
                </div>
            </div>
            
            <div id="chapter-detail" style="display:none; background: #f8fafc; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem; border: 1px solid #e2e8f0;">
                <h3 style="font-weight: 700; font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b;">Chapter Details</h3>
                <div id="detail-body"></div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
                <div style="background: #f1f5f9; padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid #e2e8f0;">
                    <div style="font-size: 2rem; font-weight: 700; color: #0182ac;"><?= $student_count ?></div>
                    <div style="font-size: 0.875rem; color: #64748b; font-weight: 600; text-transform: uppercase; margin-top: 0.5rem;">Student Chapters</div>
                </div>
                <div style="background: #f1f5f9; padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid #e2e8f0;">
                    <div style="font-size: 2rem; font-weight: 700; color: #0182ac;"><?= $professional_count ?></div>
                    <div style="font-size: 0.875rem; color: #64748b; font-weight: 600; text-transform: uppercase; margin-top: 0.5rem;">Professional Chapters</div>
                </div>
                <div style="background: #f1f5f9; padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid #e2e8f0;">
                    <div style="font-size: 2rem; font-weight: 700; color: #0182ac;"><?= $total ?></div>
                    <div style="font-size: 0.875rem; color: #64748b; font-weight: 600; text-transform: uppercase; margin-top: 0.5rem;">Total Chapters</div>
                </div>
                <div style="background: #f1f5f9; padding: 1.5rem; border-radius: 8px; text-align: center; border: 1px solid #e2e8f0;">
                    <div style="font-size: 2rem; font-weight: 700; color: #0182ac;"><?= $states ?>+</div>
                    <div style="font-size: 0.875rem; color: #64748b; font-weight: 600; text-transform: uppercase; margin-top: 0.5rem;">States</div>
                </div>
            </div>

            <!-- Tabs -->
            <style>
                .chapter-tabs-container {
                    display: flex;
                    border-bottom: 2px solid #e2e8f0;
                    margin-bottom: 2rem;
                    gap: 2rem;
                }
                .chapter-tab-btn {
                    background: transparent;
                    border: none;
                    color: #1e293b;
                    font-size: 1rem;
                    font-weight: 600;
                    padding: 0.75rem 0;
                    cursor: pointer;
                    position: relative;
                    outline: none !important;
                    box-shadow: none !important;
                    text-shadow: none !important;
                    transition: color 0.2s ease;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }
                .chapter-tab-btn:hover {
                    color: #0f172a;
                }
                .chapter-tab-btn.active {
                    color: #0182ac;
                }
                .chapter-tab-btn::after {
                    content: '';
                    position: absolute;
                    bottom: -2px;
                    left: 0;
                    width: 100%;
                    height: 2px;
                    background-color: #0182ac;
                    transform: scaleX(0);
                    transition: transform 0.3s ease;
                    transform-origin: left;
                }
                .chapter-tab-btn.active::after {
                    transform: scaleX(1);
                }
            </style>
            <div class="chapter-tabs-container">
                <button onclick="showChapters('student')" class="chapter-tab-btn active" data-type="student">Student Chapters</button>
                <button onclick="showChapters('professional')" class="chapter-tab-btn" data-type="professional">Professional Chapters</button>
            </div>

            <div id="student-section">
                <p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
                    ACM-W India Student Chapters provide a platform for students in colleges and universities across the country to explore their interests in computing, develop technical and leadership skills, and build meaningful connections within the computing community. Through a network of 69 student chapters, members have opportunities to collaborate with peers, engage with mentors, participate in chapter-led initiatives, and contribute to activities that support the advancement of women in computing.
                </p>
            </div>

            <div id="professional-section" style="display: none;">
                <p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #000000;">
                    ACM-W India Professional Chapters support women in computing by creating communities that foster professional growth, leadership, and collaboration. They bring together professionals from academia, research, business, and industry, providing opportunities to connect with peers, exchange knowledge, and engage in meaningful discussions on technical and career-related topics. Through networking events, mentorship activities, and professional development initiatives, ACM-W India Professional Chapters empower women to advance their careers while contributing to a more inclusive computing community.
                </p>
            </div>

            <div style="background: #f1f5f9; padding: 1.5rem; border-radius: 8px;">
                <h3 style="font-weight: 700; font-size: 1.25rem; margin-bottom: 1rem; color: #1e293b;">How to Apply</h3>
                <p style="font-size: 0.875rem; margin-bottom: 0.5rem;">To start an ACM-W India Student Chapter, follow ACM's chapter-formation guidelines.</p>
                <p style="font-size: 0.875rem;"><a href="https://www.acm.org/chapters/students/how-to-start-a-student-chapter" target="_blank" style="color: #0182ac; font-weight: 700; text-decoration: none;">Chapter Formation Guidelines &rarr;</a></p>
            </div>



		</div>
	</article>
	
	<?php get_sidebar('content_right'); ?>
</div>

<script>
  window.ACM_CHAPTERS = <?= json_encode($chapters, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;

  function esc(s){return (s||'').toString().replace(/[&<>"]/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]))}
  function tplIW(c){
    return `<div class="iw" style="font-size:13px; font-family:sans-serif;">
      <b style="font-size:14px; color:#1e293b;">${esc(c.name)}</b><br>
      <span style="color:#5c6b75">${esc(c.address)}</span>
      ${c.sponsor?`<br><b style="color:#475569">Sponsor:</b> ${esc(c.sponsor)}`:''}
      ${c.email?`<br><b style="color:#475569">Email:</b> ${esc(c.email)}`:''}
      ${c.phone?`<br><b style="color:#475569">Phone:</b> ${esc(c.phone)}`:''}
      <br><br>${c.url?`<a href="${esc(c.url)}" target="_blank" style="color:#0182ac; font-weight:bold;">Visit website →</a>`:'<i style="color:#888">No website listed</i>'}
    </div>`;
  }
  function tplCard(c){
    return `<div class="item" style="background: #fff; border: 1px solid #e2e8f0; padding: 1rem; border-radius: 8px; font-size: 0.875rem;" data-name="${esc((c.name+' '+c.address).toLowerCase())}">
      <h4 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.5rem; color: #0182ac; line-height:1.4;">${esc(c.name)}</h4>
      <p style="margin-bottom: 0.5rem; color: #334155; line-height:1.5;">${esc(c.address)}</p>
      ${c.chair?`<p style="margin-bottom: 0.5rem; color: #475569;"><b>Chair:</b> ${esc(c.chair)}</p>`:''}
      <div class="row" style="margin-top: 1rem; display:flex; gap:1rem;">
        ${c.url?`<a href="${esc(c.url)}" target="_blank" style="color: #0182ac; font-weight: 700; text-decoration: none;">Visit site</a>`:''}
        <a href="#" onclick="showDetail('${c.id}');return false" style="color: #64748b; font-weight: 700; text-decoration: underline;">Details</a>
      </div>
    </div>`;
  }

  // Handle case where chapters.json doesn't exist yet or is empty
  if(window.ACM_CHAPTERS && window.ACM_CHAPTERS.length > 0) {
      const proChapters = window.ACM_CHAPTERS.filter(c=>c.type==='professional');
      const stuChapters = window.ACM_CHAPTERS.filter(c=>c.type==='student');
      
      const proGrid = document.getElementById('pro-grid');
      const stuGrid = document.getElementById('stu-grid');
      
      if(proGrid) proGrid.innerHTML = proChapters.map(tplCard).join('');
      if(stuGrid) stuGrid.innerHTML = stuChapters.map(tplCard).join('');
  }

  document.getElementById('chapter-search').addEventListener('input', function(){
    const q = this.value.toLowerCase().trim();
    const resultBox = document.getElementById('search-results');

    if(q === ""){
        resultBox.innerHTML = "";
        return;
    }

    const matches = window.ACM_CHAPTERS.filter(c =>
        (c.name + " " + c.address)
        .toLowerCase()
        .includes(q)
    );

    if(matches.length === 0){
        resultBox.innerHTML = "<p style='font-size: 0.875rem; margin:0; padding:0.5rem;'>No chapter found</p>";
        return;
    }

    resultBox.innerHTML = matches.map(c => `
        <div class="search-item" style="padding: 0.75rem 0.5rem; border-bottom: 1px solid #e2e8f0; font-size: 0.875rem;">
            <b style="color:#1e293b; display:block; margin-bottom:0.25rem;">${c.name}</b>
            <small style="color: #64748b; display:block; margin-bottom:0.25rem; line-height:1.4;">${c.address}</small>
            ${c.url ? `<a href="${c.url}" target="_blank" style="color: #0182ac; text-decoration: none; font-weight:600;">Visit Website</a>` : ''}
        </div>
    `).join('');
  });

  window.showDetail = function(id){
    const c = window.ACM_CHAPTERS.find(x=>x.id==id); if(!c) return;
    const box = document.getElementById('chapter-detail');
    document.getElementById('detail-body').innerHTML = `
      <h2 style="color:#0182ac; margin:4px 0 1rem; font-size: 1.25rem; font-weight:700;">${esc(c.name)}</h2>
      <p style="font-size: 0.875rem; margin-bottom: 0.5rem; color:#334155;"><b>Type:</b> <span style="text-transform:capitalize;">${c.type}</span></p>
      <p style="font-size: 0.875rem; margin-bottom: 0.5rem; color:#334155;"><b>Address:</b> ${esc(c.address)}</p>
      ${c.sponsor?`<p style="font-size: 0.875rem; margin-bottom: 0.5rem; color:#334155;"><b>Sponsor:</b> ${esc(c.sponsor)}</p>`:''}
      ${c.email?`<p style="font-size: 0.875rem; margin-bottom: 0.5rem; color:#334155;"><b>Email:</b> <a href="mailto:${esc(c.email)}" style="color: #0182ac;">${esc(c.email)}</a></p>`:''}
      ${c.phone?`<p style="font-size: 0.875rem; margin-bottom: 0.5rem; color:#334155;"><b>Phone:</b> ${esc(c.phone)}</p>`:''}
      ${c.url?`<p style="margin-top: 1.5rem;"><a href="${esc(c.url)}" target="_blank" style="background:#0182ac;color:#fff;padding:8px 16px;border-radius:4px;display:inline-block;text-decoration:none;font-size:0.875rem;font-weight:600;">Visit chapter website &rarr;</a></p>`:''}`;
    box.style.display='block'; box.scrollIntoView({behavior:'smooth', block:'center'});
  };

  function acmInitChaptersMap(){
    if(!document.getElementById('map') || typeof L === 'undefined') return;
    
    // Initialize Leaflet map
    const map = L.map('map').setView([22.5, 79.0], 4);
    
    // Use CartoDB Voyager tiles (clean, minimalistic, free, no API key needed)
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
      subdomains: 'abcd',
      maxZoom: 20
    }).addTo(map);

    if(window.ACM_CHAPTERS && window.ACM_CHAPTERS.length > 0) {
        window.ACM_CHAPTERS.forEach(c=>{
          const isPro = c.type==='professional';
          if(c.lat && c.lng) {
              const markerColor = isPro ? 'hsl(67, 91%, 39%)' : 'hsl(197, 100%, 28%)';
              const markerRadius = isPro ? 9 : 6;

              const marker = L.circleMarker([parseFloat(c.lat), parseFloat(c.lng)], {
                  radius: markerRadius,
                  fillColor: markerColor,
                  color: "#ffffff",
                  weight: 2,
                  opacity: 1,
                  fillOpacity: 0.95
              }).addTo(map);
              
              // Bind popup instead of tooltip to make it interactive
              const popup = L.popup({
                 className: 'acm-map-tooltip',
                 closeButton: false,
                 autoPan: false
              }).setContent(tplIW(c));

              marker.bindPopup(popup);

              let hoverTimeout;
              
              marker.on('mouseover', function(e) {
                  clearTimeout(hoverTimeout);
                  this.openPopup();
                  
                  // When the popup opens, attach a mouseleave event to its container
                  const popupEl = this.getPopup().getElement();
                  if (popupEl) {
                      popupEl.addEventListener('mouseenter', () => {
                          clearTimeout(hoverTimeout);
                      });
                      popupEl.addEventListener('mouseleave', () => {
                          hoverTimeout = setTimeout(() => {
                              this.closePopup();
                          }, 200);
                      });
                  }
              });

              marker.on('mouseout', function(e) {
                  hoverTimeout = setTimeout(() => {
                      this.closePopup();
                  }, 200);
              });

              marker.on('click', ()=>{
                if(c.url) window.open(c.url,'_blank');
                else showDetail(c.id);
              });
          }
        });
    }
  }

  function showChapters(type){
      const buttons = document.querySelectorAll('.chapter-tab-btn');
      buttons.forEach(btn => {
          if(btn.dataset.type === type) {
              btn.classList.add('active');
          } else {
              btn.classList.remove('active');
          }
      });
      document.getElementById("professional-section").style.display = (type === "professional") ? "block" : "none";
      document.getElementById("student-section").style.display = (type === "student") ? "block" : "none";
  }
  
  // Initialize map when DOM is loaded since Leaflet isn't using a callback parameter like Google Maps
  document.addEventListener("DOMContentLoaded", acmInitChaptersMap);
</script>

<style>
  /* Fix tooltip styling to look like info window */
  .acm-map-tooltip {
      background: #fff;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 0.75rem;
      pointer-events: auto; /* allow clicking inside tooltip if needed */
  }
  .leaflet-tooltip-top:before {
      border-top-color: #fff;
  }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

<?php get_footer(); ?>
