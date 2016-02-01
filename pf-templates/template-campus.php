<?php /* Template Name: Campus Page Template */ get_header(); ?>
<?php 
	/*Making use of the different sized images that WordPress creates with the media uploader. Pulling the medium sized image for mobile.*/
	$page_background_image = get_field('page_background_image');
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
	<div id="content">
		<div class="content readmore">
			<?php the_content(); ?>
		</div><!-- content -->
	</div><!-- content -->
	<div id="lower" class="region">
		<div class="content clearfix">
			<div id="block-block-2" class="block block-block buttons">
				<div class="content">
				    <ul class="list-unstyled home-hero-links row clearfix">
					    <li class="col-xs-6"><a class="btn-accent btn-block" href="<?php echo esc_url( home_url( '/' ) ); ?>request-info">Request <br> Info</a></li>
						<li class="col-xs-6"><a class="btn-primary btn-block" href="<?php echo esc_url( home_url( '/' ) ); ?>schedule-tour">Schedule a Tour</a></li>
					</ul>  
				</div><!-- content -->
			</div><!-- block-block-2 -->
		</div><!-- content clearfix -->
	</div><!-- lower -->
	<aside id="sidebar_lower" class="region sidebar lower">
		<div class="content clearfix">
			<div id="accordion">
				<?php if( get_field('programs') ): ?>
					<h4 class="accordion-toggle">Programs Offered</h4>
					<div class="accordion-content">
						<ul class="campus-programs list-unstyled clearfix">
							<?php while( have_rows('programs') ): the_row(); 
								// vars
								$program_title = get_sub_field('program_title');
								$program_link = get_sub_field('program_link');
							?>
								<li>
						            <a href="<?php echo $program_link; ?>"><?php echo $program_title; ?></a>
						        </li>
							<?php endwhile; ?>
						</ul>
					</div><!-- accordion-content -->
				<?php endif; ?>
				<?php if( get_field('resources') ): ?>
					<h4 class="accordion-toggle">Resource Links</h4>
					<div class="accordion-content">
						<p>
							<?php if( have_rows('resources') ): ?>
								<?php while( have_rows('resources') ): the_row(); 
									// vars
									$resource_title = get_sub_field('resource_title');
									$resource_link = get_sub_field('resource_link');
									?>
									<a target="_blank" href="<?php echo $resource_link; ?>"><?php echo $resource_title; ?></a>
									<br>
								<?php endwhile; ?>
							<?php endif; ?>
						</p>
					</div><!-- accordion-content -->
				<?php endif; ?>
				<?php if( get_field('google_map_code') ): ?>
					<h4 class="accordion-toggle">Map View</h4>
					<div class="accordion-content">
						<div class="iframe-wrapper">
							<?php the_field('google_map_code');?>
						</div><!-- iframe-wrapper -->
					</div><!-- accordion-content -->
				<?php endif; ?>
				<?php if( get_field('campus_image') ): ?>
					<h4 class="accordion-toggle">Campus View</h4>
					<div class="accordion-content">
						<?php 
							$image = get_field('campus_image');
							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div><!-- accordion-content -->
				<?php endif; ?>
			</div><!-- accordion -->
		</div><!-- content -->
	</aside><!-- sidebar_lower -->
</main>
<?php get_footer(); ?>