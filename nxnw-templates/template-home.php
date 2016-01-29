<?php /* Template Name: Home Page Template */ get_header(); ?>
<main id="main" class="main">
	<div class="home-hero">
		<img src="<?php echo content_url(); ?>/img/mobile-homepage-hero.jpg" alt="Concorde Students">
	</div><!-- home-hero -->
	<div id="home-mobile-nav" class="text-center">
		<div class="display-table">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>program">
				<span>Programs</span>
				<img src="<?php echo content_url(); ?>/img/icon-cap-mobile.png" alt="Concorde Programs">
			</a>
	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>campus">
				<span>Campuses</span>
				<img src="<?php echo content_url(); ?>/img/icon-globe-mobile.png" alt="Concorde Campuses">
			</a>
	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>financial-aid">
				<span>Financial Aid</span>
				<img src="<?php echo content_url(); ?>/img/icon-financial-aid-mobile.png" alt="Concorde Financial Aid">
			</a>
		</div><!-- display-table -->
		<div class="display-table">	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>accreditation">
				<span>Accreditation</span>
				<img src="<?php echo content_url(); ?>/img/icon-accreditation-mobile.png" alt="Concorde Accreditation">
			</a>
	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>request-info">
				<span>Request Info</span>
				<img src="<?php echo content_url(); ?>/img/icon-info-mobile.png" alt="Concorde Request Info">
			</a>
	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">
				<span>FAQ</span>
				<img src="<?php echo content_url(); ?>/img/icon-question-mark-mobile.png" alt="Concorde FAQ">
			</a>
		</div><!-- display-table -->
	</div><!-- homepage-mobile-nav -->
</main>
<?php get_footer(); ?>
