<?php /* Template Name: Main Program Page Template */ get_header(); ?>
<?php 
	/*Making use of the different sized images that WordPress creates with the media uploader. Pulling the medium sized image for mobile.*/
	$page_background_image = get_field('hero_image');
	if( !empty($page_background_image) ) {
		// vars
		$url = $page_background_image['url'];

		// get the medium size from WordPress upload
		$size = 'medium';
		$thumb = $page_background_image['sizes'][ $size ];
	};
?>
<main id="main">
	<section class="secondary-hero" style="background: url('<?php echo $thumb; ?>') no-repeat center;">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section><!-- secondary-hero -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix">
			<?php
			// check for programs (parent repeater)
			if( have_rows('programs') ): ?>
				<?php 
				// loop through programs (parent repeater)
				while( have_rows('programs') ): the_row(); ?>
					<div id="block-views-programs-hub-page-block" class="block block-views">
						<h2><?php the_sub_field('program_category'); ?></h2>
							<div class="content">
								<div class="program-block ">
									<?php 
									// check for program (sub repeater)
									if( have_rows('program') ): ?>
										<ul class="clearfix">
											<?php 
											// loop through program (sub repeater)
											while( have_rows('program') ): the_row();
												// display each program
												$program_image = get_sub_field('program_image');
											?>
												<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
													<div class="field-container">
														<span class="field-content program-link">
															<a href="<?php the_sub_field('program_link'); ?>">
																<div class="program-container clearfix">
																	<div class="field-content menu-image clearfix">
																		<img src="<?php echo $program_image['url']; ?>" alt="<?php echo $program_image['alt'] ?>" />
																	</div><!-- field-content -->
																	<div class="inner-col-content">
																		<h6 class="field-content title"><?php the_sub_field('program_title'); ?></h6>
																		<div class="field-content degree-types"><?php the_sub_field('program_degree'); ?></div>
																		<div class="hub-page-subtext"></div>
																	</div><!-- inner-col-content -->
																</div><!-- program-container -->
															</a>
														</span>
													</div><!-- field-container -->
												</li>
											<?php endwhile; ?>
										</ul>
									<?php endif; //if( get_sub_field('program') ): ?>
								</div><!-- program-block -->
							</div><!-- content -->
					</div><!-- program-hub-page-block -->
				<?php endwhile; // while( has_sub_field('programs') ): ?>		
			<?php endif; // if( get_field('programs') ): ?>
		</div><!-- content -->
	</div><!-- content_bottom -->
	<section class="main-content">
		<div class="content">
			<div class="row clearfix">
				<div class="col-12">
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
					<?php the_content(); ?>
				</div><!-- col-12 -->
			</div><!-- row -->
		</div><!-- content -->
	</section><!-- main-content -->
</main>
<?php get_footer(); ?>