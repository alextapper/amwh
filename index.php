<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="AMWH is a monthly art and music crawl on the first Saturday of every month in South Nashville.">
		<meta name="keywords" content="Nashville art crawl, wedgewood houston, first saturday art crawl, nashville arts, ">

		<title>Arts &amp; Music at Wedgewood/Houston | Nashville, TN | Art Crawl</title>

		<!-- css stylesheets -->
		<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/style.css">

		<!-- favicons -->
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon">

		<!-- JQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

		<!-- GA -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-50999315-7', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>

	<body>
		<!-- START HEADER SECTION -->
		<header class="header-index">

			<div class="logo-background max-width-960 v-centered">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" class="v-centered">
			</div>

		</header>

		<!-- about section -->
		<div class="section-wrapper">
		<div class="section-about">
			
			<p class="body-copy"><strong>Next crawl date: Saturday, <?php the_field( 'crawl_date' ); ?> from 6&ndash;9 PM</strong></p>

			<p class="body-copy">Wedgewood / Houston (nicknamed WeHo) has long been a neighborhood driven by strong artisan relationships and has functioned as a historic home for many artist studios. Every month, we open our doors for all Nashvillians to experience a free art and music walk. To coincide with Art Night in Nashville, the walk begins at 6:00 PM on the first Saturday of every month. Minutes from downtown, WeHo has dozens of venues, commercial galleries, artist-run studios, and coworking spaces exhibiting groundbreaking art each month. Our peak season runs from March to November, with monthly attendance peaking in the thousands.</p>

			<div class="about-grid-wrapper">
				<div class="social-icons">
					<a href="https://www.facebook.com/artsmusicweho"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social/facebook.svg" id="facebook" class=""></a>
					<a href="http://instagram.com/artsmusicweho/"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social/insta.svg" id="insta"></a>
					<a href="https://twitter.com/artsmusicweho"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social/twitter.svg" id="twitter"></a>
				</div>

				<!-- choose your adventure section -->
				<div class="section-adventure">

					<div class="adventure-content">Choose your own adventure... are you a crawler, artist, or sponsor?</div>

					<ul>
						<li id="crawlers">Crawlers</li
						><li id="artists">Artists</li
						><li id="sponsors">Sponsors</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

				<script type="text/javascript">
					$('#crawlers').click(function() {
					  $('.adventure-content').html('Please enjoy the map down below as you navigate an exciting and unique evening. To stay current with each venues’ artwork for the month, sign up for our <a target="_blank" href="http://eepurl.com/Y-pYL">newsletter</a>.');
					});

					$('#artists').click(function() {
					  $('.adventure-content').html('Art is a form of an expression that comes in many flavors. If you&rsquo;re an artist looking to get plugged in at one of our venues in the Wedgewood / Houston community, please email us at <a target="_blank" href= "mailto:artsmusicwedgewoodhouston@gmail.com">artsmusicwedgewoodhouston@gmail.com</a>.');
					});

					$('#sponsors').click(function() {
					  $('.adventure-content').html('AMWH offers local businesses an opportunity to connect with this active, entrepreneurial, and artistic community. Contact <a target="_blank" href="mailto:trevor@compound-creative.com">trevor@compound-creative.com</a> to secure a spot as a sponsor for the 2015 season (March – November 2015).');
					});
				</script>
			
			
		</div>
		</div>
		<!-- end about section -->
		

		<!-- map section -->
		<div class="section-wrapper">
			<div class="section-map" id="map">
			<p class="body-copy rotate">This map looks better if you rotate your device.</p>
				<?php include 'map-svg.svg'; ?>
			</div>
		</div>

		<!-- gallery list section -->
		<div class="section-gallery-list">

			<?php $posts = get_posts(array(
					'post_type'			=> 'post',
					'posts_per_page'	=> -1,
					'meta_key'			=> 'map_letter',
					'orderby'			=> 'meta_value',
					'order'				=> 'ASC'
				));
			if( $posts ): ?>

			<?php foreach( $posts as $post ): ?><div class="gallery-list-item">
				<div class="gallery-list-body" id="<?php the_field( 'map_letter' ); ?>-body">
					<p class="gallery-letter" id="<?php the_field( 'map_letter' ); ?>"><?php the_field( 'map_letter' ); ?></p>
					<div class="gallery-info">
						<p class="gallery-name"><a href="<?php the_permalink(); ?>"><?php the_field( 'gallery_name' ); ?></a></p>
						<p class="gallery-address"><?php the_field( 'address' ); ?></p>
						<p class="gallery-phone"><?php the_field( 'phone_number' ); ?></p>
						<p class="gallery-current-show"><strong>Current show:</strong> <?php the_field( 'current_exhibit_title' ); ?></p>
						<p class="gallery-more"><a href="<?php the_permalink(); ?>">More...</a></p>
					</div>
				</div>
			</div><?php endforeach; ?>

		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		</div>
		<!-- end map section -->



		<!-- START FOOTER SECTION -->
		<footer id="contact">
			<p>&copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>&nbsp;AMWH &nbsp; | &nbsp; Design by <a href="http://compound-creative.com">Compound</a></p>
		</footer>

		<!-- animate scroll -->
		<script src="<?php bloginfo( 'template_directory' ); ?>/scripts/animatescroll.js"></script>

		<!-- custom javascript -->
		<script src="<?php bloginfo( 'template_directory' ); ?>/scripts/custom.js"></script>

	</body>

</html>