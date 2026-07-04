<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<title>Sermons - TUMSDA Church</title>
	<meta name="description" content="TUMSDA Church - The Church we love the most">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=League+Spartan:wght@400;600;700;800&family=Source+Sans+Pro:wght@400;700&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="/TUMSDA/assets/css/style.css">
	<link rel="icon" type="image/png" href="/TUMSDA/assets/img/favicon.png">
	<script src="/TUMSDA/assets/js/main.js" defer></script>
</head>
<body>

	<!-- Mobile Side Panel Menu -->
	<div class="mobile-side-panel" id="mobileSidePanel">
		<div class="side-panel-overlay" id="sidePanelOverlay"></div>
		<div class="side-panel-content">
			<div class="side-panel-search">
				<div class="search-container">
					<span class="search-placeholder">Search...</span>
					<div class="search-line"></div>
				</div>
			</div>
			<nav class="side-panel-nav">
				<ul class="side-panel-menu">
					<li class="side-panel-item">
						<a class="side-panel-link " href="/TUMSDA/index.php">
							<span>Home</span>
						</a>
					</li>
					<li class="side-panel-item">
						<a class="side-panel-link " href="/TUMSDA/about.php">
							<span>About Us</span>
						</a>
					</li>
					<li class="side-panel-item">
						<a class="side-panel-link " href="/TUMSDA/departments.php">
							<span>Departments</span>
						</a>
					</li>
					<li class="side-panel-item">
						<a class="side-panel-link " href="/TUMSDA/ministries.php">
							<span>Ministries</span>
						</a>
					</li>
					<li class="side-panel-item">
						<a class="side-panel-link " href="/TUMSDA/evangelism.php">
							<span>Evangelism</span>
						</a>
					</li>
					<li class="side-panel-item">
						<a class="side-panel-link active" href="/TUMSDA/sermons.php">
							<span>Sermons</span>
						</a>
					</li>
					<li class="side-panel-item">
						<a class="side-panel-link " href="/TUMSDA/leadership.php">
							<span>Leadership</span>
						</a>
					</li>
				</ul>
			</nav>
		</div> <!-- not satisfied with the design though -->
		
		<!-- Close button positioned in the left content area -->
		<button class="side-panel-close" id="sidePanelClose">×</button>
	</div>

	<div class="content-wrapper">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
				<div class="container">
					<a class="navbar-brand d-flex align-items-center gap-2" href="/TUMSDA/index.php">
						<img src="/TUMSDA/assets/img/logo.jpg" alt="TUMSDA Logo" width="36" height="36" onerror="this.style.display='none'">
					</a>
					<button class="navbar-toggler d-lg-none" type="button" id="mobileMenuToggle" aria-label="Toggle mobile menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse d-none d-lg-block" id="mainNav">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link " href="/TUMSDA/index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="/TUMSDA/about.php">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="/TUMSDA/departments.php">Departments</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="/TUMSDA/ministries.php">Ministries</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="/TUMSDA/evangelism.php">Evangelism</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="/TUMSDA/sermons.php">Sermons</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="/TUMSDA/leadership.php">Leadership</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main>

<!-- Hero Section -->
<section class="sermons-hero">
	<div class="sermons-hero-container">
		<div class="sermons-hero-overlay">
			<div class="sermons-hero-content">
				<h1 class="sermons-hero-title">Sermons & Resources</h1>
				<p class="sermons-hero-description">A collection of sermons and study materials to inspire, guide, and equip you in your spiritual journey. Access past messages, Bible study guides, and helpful resources designed to support personal growth and ministry.</p>
			</div>
		</div>
	</div>
</section>

<!-- Sermons Section -->
<section class="section sermons-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="fw-bold mb-4 text-center">Sermons</h1>
				<p class="text-center mb-5">Watch our latest sermons and spiritual messages from TUMSDA Church YouTube Channel.</p>
			</div>
		</div>
		
		<div class="row g-4">
			<!-- Featured Sermon Video -->
			<div class="col-lg-8">
				<div class="sermon-featured">
					<h3 class="fw-semibold mb-3">Featured Sermon</h3>
					<div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg">
						<iframe src="https://www.youtube.com/embed/c3Nxku50sZE?si=RGAvfrRAU-m7VXSq" title="Featured TUMSDA Sermon" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="sermon-info mt-3">
						<h5 class="fw-semibold">Recent Videos</h5>
						<p class="text-muted small">Watch this inspiring message from our church service</p>
					</div>
				</div>
			</div>
			
			<!-- Additional Sermon Videos -->
			<div class="col-lg-4">
				<h4 class="fw-semibold mb-3">More Sermons</h4>
				<div class="sermon-thumbnails">
					<div class="sermon-thumbnail mb-3">
						<div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
							<iframe src="https://www.youtube.com/embed/n81AX4AcJD4?si=V_IyggW3VTplW3Gn" title="TUMSDA Sermon 2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="sermon-thumbnail-info mt-2">
							<h6 class="fw-semibold small">Spiritual Growth</h6>
							<p class="text-muted small mb-0">Growing in faith as a Christian</p>
						</div>
					</div>
					
					<div class="sermon-thumbnail">
						<div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
							<iframe src="https://www.youtube.com/embed/X78SzybLPwI?si=8DlOT_jl5cG4YGom" title="TUMSDA Sermon 3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="sermon-thumbnail-info mt-2">
							<h6 class="fw-semibold small">Hope & Faith</h6>
							<p class="text-muted small mb-0">Finding hope in challenging times</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Music Section -->
<section class="section music-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="music-header text-center mb-5">
					<h2 class="fw-bold mb-3">Heavenly Music</h2>
					<p class="lead mb-4">Listen to our latest heavenly music recordings that uplift the soul and bring us closer to God</p>
					<div class="music-subtitle">
						<i class="fas fa-music me-2"></i>
						<span>Experience the divine harmony of worship through our beautiful choir performances</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row g-4">
			<!-- Featured Music Video -->
			<div class="col-lg-8">
				<div class="music-featured">
					<div class="music-badge">
						<i class="fas fa-star me-1"></i>
						Featured Video
					</div>
					<div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg">
						<iframe src="https://www.youtube.com/embed/qW0lqJQgHo8?si=GSKHQOGZ0lrRXahm" title="Featured TUMSDA Music" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="music-info mt-3">
						<h5 class="fw-semibold">Divine Harmony</h5>
						<p class="text-muted small">A beautiful musical offering that touches the heart and inspires worship</p>
						<div class="music-meta">
							<span class="badge bg-primary me-2">
								<i class="fas fa-music me-1"></i>Churvh Choir
							</span>
							<span class="badge bg-secondary">
								<i class="fas fa-heart me-1"></i>Inspirational
							</span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Additional Music Videos -->
			<div class="col-lg-4">
				<h4 class="fw-semibold mb-3">More Music</h4>
				<div class="music-thumbnails">
					<div class="music-thumbnail mb-3">
						<div class="music-thumbnail-header">
							<div class="music-play-icon">
								<i class="fas fa-play"></i>
							</div>
							<div class="music-duration"></div>
						</div>
						<div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
							<iframe src="https://www.youtube.com/embed/jCpzyesDoI0?si=5KFxA81PcDsIlF50" title="TUMSDA Music 2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="music-thumbnail-info mt-2">
							<h6 class="fw-semibold small">Worship & Praise</h6>
							<p class="text-muted small mb-0">Uplifting melodies that celebrate God's goodness</p>
						</div>
					</div>
					
					<div class="music-thumbnail">
						<div class="music-thumbnail-header">
							<div class="music-play-icon">
								<i class="fas fa-play"></i>
							</div>
							<div class="music-duration"></div>
						</div>
						<div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
							<iframe src="https://www.youtube.com/embed/US0xwYnXwII?si=w5HX4Cc01L_kzVkM" title="TUMSDA Music 3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="music-thumbnail-info mt-2">
							<h6 class="fw-semibold small">Spiritual Journey</h6>
							<p class="text-muted small mb-0">Soul-stirring hymns that guide our spiritual path</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Stay Connected Section -->
<section class="section stay-connected-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="stay-connected-cta text-center">
					<h4 class="fw-semibold mb-3">Stay Connected</h4>
					<p class="text-muted mb-4">Subscribe to our channels and never miss a sermon or update</p>
					<div class="cta-buttons">
						<a href="https://youtube.com/@tumsda_church" target="_blank" rel="noopener" class="btn btn-primary me-3">
							<i class="fab fa-youtube me-2"></i>Subscribe to Church Channel
						</a>
						<a href="https://youtube.com/@tumsdachurchchoir" target="_blank" rel="noopener" class="btn btn-outline-primary">
							<i class="fas fa-music me-2"></i>Subscribe to Choir Channel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Resources Section -->
<section class="section resources-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="fw-bold mb-4 text-center">Resources</h2>
				<p class="lead text-center mb-5">Access spiritual resources and study materials</p>
			</div>
		</div>
		
		<div class="row">
			<!-- Study Resources -->
			<div class="col-12">
				<div class="resource-category">
					<h4 class="fw-semibold mb-4 text-center">Study Resources</h4>
					<div class="resource-list">
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/SS.png" alt="Sabbath School" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Sabbath School Lessons</h6>
								<p class="text-muted small mb-2">Weekly Bible study lessons and materials</p>
								<a href="https://absg.sspmadventist.org/en/2025-03/11/videos" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Access Lessons</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/BS.jpeg" alt="Bible Study" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Bible Study Guides</h6>
								<p class="text-muted small mb-2">Comprehensive Bible study resources</p>
								<a href="https://adventist.org/beliefs/bible/study" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Study Bible</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/PY.jpg" alt="Prayer" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Bible Study & Prayer</h6>
								<p class="text-muted small mb-2">Interactive Bible study and prayer resources</p>
								<a href="https://sspmadventist.org/sabbathschool/alive/biblestudyandprayer" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Study & Pray</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/AB.png" alt="Adventist Beliefs" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Adventist Beliefs</h6>
								<p class="text-muted small mb-2">Official Adventist beliefs and doctrines</p>
								<a href="https://adventist.org/beliefs" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Learn Beliefs</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/MP.png" alt="Music Philosophy" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Music Philosophy</h6>
								<p class="text-muted small mb-2">Seventh-day Adventist philosophy of music and worship</p>
								<a href="https://gc.adventist.org/guidelines/a-seventh-day-adventist-philosophy-of-music/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Read Philosophy</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/YA.jpg" alt="Young Adults" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Young Adults</h6>
								<p class="text-muted small mb-2">Resources and studies for young adults</p>
								<a href="https://inverse.sspmadventist.org/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Join Young Adults</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/AP.png" alt="Adventist Pioneer" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Adventist Pioneer Library</h6>
								<p class="text-muted small mb-2">Historical writings and pioneer literature</p>
								<a href="https://m.egwwritings.org/en/folders/15" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Explore Library</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/EGW.png" alt="EGW Writings" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">EGW Writings</h6>
								<p class="text-muted small mb-2">Complete collection of Ellen G. White writings</p>
								<a href="https://m.egwwritings.org/en/folders/2" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Read Writings</a>
							</div>
						</div>
						
						<div class="resource-item">
							<div class="resource-icon">
								<img src="/TUMSDA/assets/icons/AA.jpeg" alt="Adventist Archives" class="resource-icon-img">
							</div>
							<div class="resource-content">
								<h6 class="fw-semibold">Adventist Archives</h6>
								<p class="text-muted small mb-2">Historical documents and research materials</p>
								<a href="https://www.adventistarchives.org/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Browse Archives</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

		</main>
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="footer-section">
							<p class="footer-official-statement">tumsda.org <!-- to be changed once confirmed -->is the official website of the Seventh-day Adventist Church, Technical University of Mombasa.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="footer-section">
							<div class="footer-legal-links">
								<a href="https://adventist.org/trademark-and-logo-usage" target="_blank" class="legal-item">
									<div class="legal-bars">
										<div class="legal-bar legal-bar-1"></div>
										<div class="legal-bar legal-bar-2"></div>
										<div class="legal-bar legal-bar-3"></div>
									</div>
									<span>TRADEMARK AND LOGO USAGE</span>
								</a>
								<a href="https://adventist.org/legal" target="_blank" class="legal-item">
									<div class="legal-bars">
										<div class="legal-bar legal-bar-1"></div>
										<div class="legal-bar legal-bar-2"></div>
										<div class="legal-bar legal-bar-3"></div>
									</div>
									<span>LEGAL NOTICE</span>
								</a>
								<a href="https://privacy.adventist.org/" target="_blank" class="legal-item">
									<div class="legal-bars">
										<div class="legal-bar legal-bar-1"></div>
										<div class="legal-bar legal-bar-2"></div>
										<div class="legal-bar legal-bar-3"></div>
									</div>
									<span>PRIVACY POLICY</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright-section">
					<p class="footer-copyright">&copy; 2025 Technical University of Mombasa SDA Church.</p>
					<p class="footer-address">Tom Mboya Street Tudor, Msa. P.O Box 90420-80100 MSA Kenya</p>
				</div>
			</div>
		</footer>
	</div>
	<div class="seventh-section">
		<div class="seventh-section-content">
			<img src="/TUMSDA/assets/img/icon.png" alt="TUMSDA Logo" class="seventh-section-logo logo-white">
			<img src="/TUMSDA/assets/img/icon2.png" alt="TUMSDA Logo" class="seventh-section-logo logo-black">
		</div>
	</div>

	<div id="supportPopup" class="popup-overlay">
		<div class="popup-card">
			<button class="popup-close" id="supportClose">&times;</button>
			<div class="popup-content">
				<h3>Support</h3>
				<p>Little is much when God is in it. Support our mission to Challa through:</p>
				<p class="support-details"><strong>MPESA TILL NO: 3482464</strong></p>
				<p class="support-details"><strong>NAME: RHODA MUTANU</strong></p>
				<img src="/TUMSDA/assets/img/Till.jpg" alt="MPESA Till" class="popup-image">
				<p><strong>Thank You! May God Bless You Abundantly!</strong></p>
			</div>
		</div>
	</div>

	<!-- Mission Chair Popup Card -->
	<div id="missionChairPopup" class="popup-overlay">
		<div class="popup-card">
			<button class="popup-close" id="missionChairClose">&times;</button>
			<div class="popup-content">
				<h3>Mission Chair Message</h3>
				<div class="mission-chair-message">
					<p>As we prepare for this year's mission in Challa, my heart is filled with anticipation and prayer. Each mission is more than a program; it is an opportunity to touch lives for eternity. The people of Challa are waiting to hear the good news that Jesus is coming soon. This mission is not for a few—it is for all of us, because the harvest is plentiful but the laborers are few (Matthew 9:37).</p>
					
					<p>I urge you, my brothers and sisters, to partner with us in any way you can. Come with us to the field if you are able. If you cannot, support with your resources. And above all, remember us daily in your prayers. Together, let us lift up Christ and watch Him draw all people to Himself.</p>
					
					<p>Let us go to Challa with one voice, one heart, and one mission: to proclaim the soon return of Jesus. I look forward to seeing what God will do through us this December.</p>
				</div>
				<div class="mission-chair-signature">
					<p><strong>Daniel Mochoge</strong><br>Mission Chair</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Sabbath Gallery Popup Card -->
	<div id="galleryPopup" class="popup-overlay">
		<div class="popup-card">
			<button class="popup-close" id="galleryClose">&times;</button>
			<div class="popup-content">
				<h3>Sabbath Gallery Collections</h3>
				<p class="text-muted mb-4">Explore our collection of Sabbath photos from various special events and celebrations throughout the year.</p>
				<div class="gallery-links-grid">
					<a href="https://photos.app.goo.gl/PUo6c4YmVQ3y2vvx6" target="_blank" class="gallery-link">
						<i class="fas fa-crown"></i>
						<span>Finalist Sabbath 2025</span>
					</a>
					<a href="https://photos.app.goo.gl/UjttHTMwkvJ6Z7F18" target="_blank" class="gallery-link">
						<i class="fas fa-users"></i>
						<span>CUCASO 2025</span>
					</a>
					<a href="https://photos.app.goo.gl/DBQUrjHioUXGJf6H8" target="_blank" class="gallery-link">
						<i class="fas fa-female"></i>
						<span>ALO Sabbath 2024</span>
					</a>
					<a href="https://photos.app.goo.gl/sHDiLWxWK4cU5fcb9" target="_blank" class="gallery-link">
						<i class="fas fa-users"></i>
						<span>ALUMNI Sabbath 2024</span>
					</a>
					<a href="https://photos.app.goo.gl/iJLVVn3DaYG5jkP96" target="_blank" class="gallery-link">
						<i class="fas fa-graduation-cap"></i>
						<span>Graduates' Sabbath 2024</span>
					</a>
					<a href="https://photos.app.goo.gl/o1GsUc6vFgjYFKwYA" target="_blank" class="gallery-link">
						<i class="fas fa-gem"></i>
						<span>Jewel's Sabbath 2024</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Us Popup Card -->
	<div id="contactPopup" class="popup-overlay">
		<div class="popup-card">
			<button class="popup-close" id="contactClose">&times;</button>
			<div class="popup-content">
				<h3>Contact Us</h3>
				<p>Get in touch with us for any questions, prayer requests, or to learn more about our church family.</p>
				
				<div class="contact-info-grid">
					<div class="contact-info-item">
						<i class="fas fa-map-marker-alt"></i>
						<div>
							<h5>Location</h5>
							<p>Tom Mboya Street Tudor, Msa<br>P.O Box 90420-80100 MSA Kenya</p>
						</div>
					</div>
					
					<div class="contact-info-item">
						<i class="fas fa-phone"></i>
						<div>
							<h5>Phone</h5>
							<p><a href="tel:+254712345678">+254712345678</a></p>
						</div>
					</div>
					
					<div class="contact-info-item">
						<i class="fas fa-envelope"></i>
						<div>
							<h5>Email</h5>
							<p><a href="mailto:tumsda@gmail.com">tumsda@gmail.com</a></p>
						</div>
					</div>
					
					<div class="contact-info-item">
						<i class="fas fa-clock"></i>
						<div>
							<h5>Service Times</h5>
							<p>Sabbath School: 9:00 AM<br>Divine Service: 11:00 AM</p>
						</div>
					</div>
				</div>
				
				<div class="contact-cta">
					<a href="/TUMSDA/leadership.php#contact" class="btn btn-primary">Send Message</a>
					<a href="https://whatsapp.com/channel/0029Vb5zZEjBKfi4xoxGlI25" target="_blank" class="btn btn-outline-primary">WhatsApp</a>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="/TUMSDA/assets/js/main.js"></script>
</body>
</html>
 