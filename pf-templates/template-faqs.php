<?php /* Template Name: FAQs Page Template */ get_header(); ?>
<main id="main">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<section class="main-content">
		<div class="content">
			<div class="row clearfix">
				<div class="col-12">
					<?php 
					// check for rows (parent repeater)
					if( have_rows('faqs_section') ): ?>
						<div id="accordion">
						<?php 
						// loop through rows (parent repeater)
						while( have_rows('faqs_section') ): the_row(); ?>
								<h4><?php the_sub_field('category'); ?></h4>
								<?php 
								// check for rows (sub repeater)
								if( have_rows('faqs') ): ?>
									<?php 
									// loop through rows (sub repeater)
									while( have_rows('faqs') ): the_row();
										// display each item as a list - with a class of completed ( if completed )
										?>
										<h4 class="accordion-toggle"><?php the_sub_field('question'); ?></h4>
										<div class="accordion-content">
											<?php the_sub_field('answer'); ?>
										</div><!-- accordion-content -->
									<?php endwhile; ?>
								<?php endif; //if( get_sub_field('faqs') ): ?>
						<?php endwhile; // while( has_sub_field('faqs_section') ): ?>
						</div>
					<?php endif; // if( get_field('faqs_section') ): ?>
				</div><!-- col-12 -->
			</div><!-- row -->
		</div><!-- content -->
	</section><!-- main-content -->
</main>
<?php get_footer(); ?>