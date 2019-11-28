<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
while ( have_posts() ) : the_post();
	?>

<main <?php post_class( 'site-main' ); ?> role="main">
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<section class="elementor-element elementor-element-48732501 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" style="background-image: url(https://hesmedwaste.com/wp-content/uploads/2019/09/sub-page-banner.png); background-position: center center; background-repeat: no-repeat;background-size: cover;padding: 100px 0px 50px 0px;">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
					<div class="elementor-element elementor-element-707f0583 elementor-column elementor-col-100 elementor-top-column">
						<div class="elementor-column-wrap  elementor-element-populated">
							<div class="elementor-widget-wrap">
								<div class="elementor-element elementor-element-6a8660b6 elementor-widget elementor-widget-image">
									<div class="elementor-widget-container">
										<div class="elementor-image" style="text-align: left;">
											<img width="99" height="100" src="https://hesmedwaste.com/wp-content/uploads/2019/09/sub-page-logo.png" class="attachment-large size-large" alt="">
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-63203d60 elementor-widget elementor-widget-heading">
									<div class="elementor-widget-container">
										<h1 class="elementor-heading-title elementor-size-default" style="color: #ffffff;font-family: 'Source Sans Pro', Sans-serif;font-size: 50px;font-weight: bold;"><?php the_title(); ?></h1>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>

	<?php comments_template(); ?>
</main>

	<?php
endwhile;
