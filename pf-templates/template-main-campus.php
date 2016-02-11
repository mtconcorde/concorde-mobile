<?php /* Template Name: Main Campus Page Template */ get_header(); ?>
<main id="main">
	<section class="secondary-hero" style="<?php $image = get_field('hero_image');	if( !empty($image) ): ?>background: url('<?php echo $image['url']; ?>') no-repeat bottom;<?php endif; ?>">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section><!-- secondary-hero -->
	<div id="lower" class="region">
		<div class="content clearfix">
			<?php
			// check for programs (parent repeater)
			$i = 0;
			if( have_rows('campuses') ): ?>
				<?php 
				// loop through programs (parent repeater)
				while( have_rows('campuses') ): the_row(); 
				$state_image = get_sub_field('state_image');
				?>
					<div id="block-views-campus-hub-page-block-<?=$i?>" class="block block-views col-4 col-md-12 campus-list active">
						<div class="content">
							<div class="views-container clearfix inner-col equal-col">
								<h2><?php the_sub_field('state'); ?></h2>
								<p><img src="<?php echo $state_image['url']; ?>" alt="<?php echo $state_image['alt'] ?>" /></p>
								<ul>
									<?php 
									// check for campus (sub repeater)
									if( have_rows('campus') ): ?>
										<?php 
										// loop through campus (sub repeater)
										while( have_rows('campus') ): the_row();
										// display each campus
										?>
											<li class="">
												<div class="field-container">
													<span class="field-content col-6 col-xs-12"><a href="<?php the_sub_field('city_link'); ?>"><?php the_sub_field('city'); ?> &gt;</a></span>
												</div><!-- field-container -->
											</li>
										<?php endwhile; ?>
									<?php endif; //if( get_sub_field('campus') ): ?>
								</ul>
							</div><!-- views-container -->
						</div><!-- content -->
					</div><!-- campus-hub-page-block -->
				<?php $i++; endwhile; // while( has_sub_field('campus') ): ?>		
			<?php endif; // if( get_field('campuses') ): ?>
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