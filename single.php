<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="<?php the_field('gallery_name'); ?> participates in the AMWH Crawl each month.">
		<meta name="keywords" content="Nashville art crawl, wedgewood houston, first saturday art crawl, nashville arts, ">

		<title><?php the_field('gallery_name'); ?> — Arts &amp; Music at Wedgewood/Houston | Nashville, TN | Art Crawl</title>

		<!-- css stylesheets -->
		<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/style.css">

		<!-- favicons -->
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon">

		<!-- JQuery -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>		

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
		<header class="header-single" style="background-image: url('<?php the_field( 'background_image' ); ?>'); background-position: <?php the_field( 'background_position' ); ?>;">

			<div class="logo-background max-width-960 v-centered">
				<img src="<?php the_field( 'gallery_logo' ); ?>" class="v-centered">
			</div>

		</header>

		<!-- about section -->
		<div class="section-about">
			<h1 class="h1-gallery">Zeitgeist Gallery</h1>

			<p class="body-artists">
			<?php if( get_field('phone_number') ): ?>
				<strong>Call:</strong> <?php the_field( 'phone_number' ); ?><br>
			<?php endif; ?>
			<?php if( get_field('address') ): ?>
				<strong>Visit:</strong> <a href="<?php the_field( 'google_maps_link' ); ?>"><?php the_field( 'address' ); ?></a><br>
			<?php endif; ?>
			<?php if( get_field('website') ): ?>
				<strong>Website:</strong> <a href="<?php the_field( 'website' ); ?>"><?php the_field( 'website' ); ?></a></p>
			<?php endif; ?>

			<!-- inset section -->
			<div class="current-exhibit-wrapper">
				<h2 class="body-current-exhibit">Current Exhibit:</h2>
				<p class="body-artists"><?php the_field( 'current_exhibit_copy' ); ?></p>	
			</div>

			<h2 class="body-current-exhibit">About the gallery:</h2>
			<p class="body-copy light grey"><?php the_field( 'about_the_gallery' ); ?></p>

			<div class="social-icons-gallery">
				<?php if( get_field('facebook_link') ): ?>
					<a href="<?php the_field( 'facebook_link' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social/facebook.svg" id="facebook-gallery"></a>
				<?php endif; ?>
				<?php if( get_field('instagram_link') ): ?>
					<a href="<?php the_field( 'instagram_link' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social/insta.svg" id="insta-gallery"></a>
				<?php endif; ?>
				<?php if( get_field('twitter_link') ): ?>
					<a href="<?php the_field( 'twitter_link' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social/twitter.svg" id="twitter-gallery"></a>
				<?php endif; ?>
			</div>

			<a href="<?php echo esc_url( home_url( '/#map' ) ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/back-to-map.png" class="back-to-map"></a>
		</div>

		
		<!-- START FOOTER SECTION -->
		<footer id="contact">
			<p>&copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>&nbsp;AMWH &nbsp; | &nbsp; Design by <a href="http://compound-creative.com">Compound</a></p>

		</footer>
	</body>
</html>