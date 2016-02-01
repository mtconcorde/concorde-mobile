<?php /* Template Name: Program Page Template */ get_header(); ?>
<main id="main">
	<h1 class="page-title"><?php the_title(); ?></h1>
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
				<?php if( get_field('available_campuses') ): ?>
					<h4 class="accordion-toggle">Available Campuses</h4>
					<div class="accordion-content">
						<ul class="program-campuses list-unstyled clearfix">
							<?php $post_objects = get_field('available_campuses');
							if( $post_objects ): ?>
							    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post); ?>
							        <li>
							        	<a href="<?php the_permalink(); ?>"><?php the_field('program_location'); ?></a>
							        </li>
							    <?php endforeach; ?>
							    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif;?>
						</ul>
					</div><!-- accordion-content -->
				<?php endif; ?>
				<?php if( get_field('program_video') ): ?>
					<h4 class="accordion-toggle">Program Video</h4>
					<div class="accordion-content">
						<div class="video-wrapper">
							<?php the_field('program_video'); ?>
						</div><!-- video-wrapper -->
					</div><!-- accordion-content -->
				<?php endif; ?>
			</div><!-- accordion -->
		</div><!-- content -->
	</aside><!-- sidebar_lower -->
</main>
<?php get_footer(); ?>