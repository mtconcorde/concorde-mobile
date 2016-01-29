<?php /* Template Name: Landing Page Template */ get_header(); ?>
<main id="main" class="main">
	<section class="secondary-hero" style="<?php $image = get_field('hero_image');	if( !empty($image) ): ?>background: url('<?php echo $image['url']; ?>') no-repeat center;<?php endif; ?>">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section><!-- secondary-hero -->
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
