<?php /* Template Name: Main Campus Page Template */ get_header(); ?>
<main id="main">
	<section class="secondary-hero" style="<?php $image = get_field('hero_image');	if( !empty($image) ): ?>background: url('<?php echo $image['url']; ?>') no-repeat bottom;<?php endif; ?>">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section><!-- secondary-hero -->
	<div id="lower" class="region">
		<div class="content clearfix">
			<div id="block-views-campus-hub-page-block" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>California</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Cali.jpg" alt="Concorde Career Colleges California" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/garden-grove-california">Garden Grove, CA &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/north-hollywood-california">North Hollywood, CA &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-bernardino-california">San Bernardino, CA &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-diego-california">San Diego, CA &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container -->
				</div><!-- content -->
			</div><!-- block-views -->
			<div id="block-views-campus-hub-page-block-1" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Colorado</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Col.jpg" alt="Concorde Career Colleges Colorado" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/aurora-colorado">Aurora, CO (Denver Metro Area) &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container -->
				</div><!-- content -->
			</div><!-- block-views -->
			<div id="block-views-campus-hub-page-block-2" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Florida</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Fl.jpg" alt="Concorde Career Colleges Florida" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/jacksonville-florida">Jacksonville, FL &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/miramar-florida">Miramar, FL (Miami Metro Area) &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/orlando-florida">Orlando, FL &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/tampa-florida">Tampa, FL &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- view-container -->
				</div><!-- content -->
			</div><!--block-views -->
			<div id="block-views-campus-hub-page-block-3" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Mississippi</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Mis.jpg" alt="Concorde Career Colleges Mississippi" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/southaven-mississippi">Southaven, MS &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container -->
				</div><!-- content -->
			</div><!--block-views -->
			<div id="block-views-campus-hub-page-block-4" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Missouri</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Mo_0.jpg" alt="Concorde Career Colleges Missouri" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/kansas-city-missouri">Kansas City, MO &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container --> 
				</div><!-- content -->
			</div><!--block-views -->
			<div id="block-views-campus-hub-page-block-6" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Oregon</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Or.jpg" alt="Concorde Career Colleges Oregon" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/portland-oregon">Portland, OR &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container -->
				</div><!-- content -->
			</div><!--block-views -->
			<div id="block-views-campus-hub-page-block-7" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Tennessee</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Ten.jpg" alt="Concorde Career Colleges Tennessee" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/memphis-tennessee">Memphis, TN (Memphis Metro Area) &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container -->
				</div><!-- content -->
			</div><!--block-views -->
			<div id="block-views-campus-hub-page-block-8" class="block block-views col-4 col-md-12 campus-list active">
				<div class="content">
					<div class="views-container clearfix inner-col equal-col">
						<h2>Texas</h2>
						<img src="<?php echo content_url(); ?>/img/campuses/Tx.jpg" alt="Concorde Career Colleges Texas" />    
						<ul>          
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/dallas-texas">Dallas, TX (Dallas Metroplex) &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/grand-prairie-texas">Grand Prairie, TX (Dallas Metroplex) &gt;</a></span>
								</div><!-- field-container -->
							</li>
							<li class="">
								<div class="field-container">
									<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-antonio-texas">San Antonio, TX &gt;</a></span>
								</div><!-- field-container -->
							</li>
						</ul>
					</div><!-- views-container -->
				</div><!-- content -->
			</div><!--block-views -->
		</div><!-- content -->
	</div><!-- lower -->
	<section class="main-content">
		<div class="content">
			<div class="row clearfix">
				<div class="col-12">
					<div class="intro-content">
						<?php if( get_field('subheading') ): ?>
							<h5 class="subheading"><?php the_field('subheading'); ?></h5>
						<?php endif; ?>
						<?php if( get_field('hero_description') ): ?>
							<div class="hero-desc">
								<?php the_field('hero_description'); ?>
								<ul class="list-unstyled home-hero-links row clearfix">
									<li class="col-6 col-xs-6"><a class="btn-accent btn-block" href="<?php echo esc_url( home_url( '/' ) ); ?>request-info">Request Info</a></li>
									<li class="col-6 col-xs-6"><a class="btn-primary btn-block schedule" href="<?php echo esc_url( home_url( '/' ) ); ?>schedule-tour">Schedule A Tour</a></li>
								</ul>
							</div><!-- hero-desc -->
						<?php endif; ?>
					</div><!-- intro-content -->
					<?php the_content(); ?>
				</div><!-- col-12 -->
			</div><!-- row -->
		</div><!-- content -->
	</section><!-- main-content -->
</main>
<?php get_footer(); ?>