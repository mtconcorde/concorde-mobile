<?php /* Template Name: Career Profiles Template */ get_header(); ?>
<main id="main">
	<div id="content_top" class="region top">
		<div class="content clearfix"></div>
	</div><!-- content_top -->
	<div id="content">
		<div class="content clearfix">
			<aside id="sidebar_upper" class="region sidebar upper">
				<div class="content clearfix"></div>
			</aside><!-- sidebar_upper -->
			<div id="content_main" class="region main">
				<div class="content clearfix">
					<div id="block-system-main" class="block block-system">
						<div class="content">
							<article class="clearfix">
								<header>
									<h1><?php the_title(); ?></h1>
								</header>
								<div class="content">
									<?php the_content(); ?> 	
								</div><!-- content -->
							</article>
						</div><!-- content -->
					</div><!-- block-system-main -->
				</div><!--content clearfix -->
			</div><!-- content_main -->
			<aside id="sidebar_lower" class="region sidebar lower">
				<div class="content clearfix">
					<div id="block-block-1" class="block block-block requestinfo onestepform">
						<h2>Request Information</h2>
						<div class="content">
							<?php include (TEMPLATEPATH . '/includes/request-information-form.php'); ?>
						</div><!-- content -->
					</div><!-- requestinfo -->
					<?php 
						$image = get_field('more_information_image');
						if( !empty($image) ): ?>
							<div id="block-block-2408" class="block block-block ">
								<div class="content">
									<p><a class="colorbox" href="<?php if( get_field('more_information_link') ): ?><?php the_field('more_information_link'); ?><?php endif; ?>" rel="lightbox"><img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"></a></p> 
								</div><!-- content -->
							</div><!-- block -->
					<?php endif; ?> 
				</div><!-- content -->
			</aside>
		</div><!-- content -->
	</div><!-- content -->
</main>
<?php get_footer(); ?>
