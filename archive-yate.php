<?php

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/search_section' ); ?>
		<div class="section section--white section--justified">
			<div class="cards row">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/result_yacht' );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="pagination">
						<?php
							global $wp_query;
							$total = $wp_query->found_posts;
							$on_page = $wp_query->post_count; 
						?>
						<?php if( $total > $on_page ) : ?>
							<p class="pagination__pages-text">Páginas</p>
						<?php endif; ?>
						<?php
						echo paginate_links(array(
							'prev_next' => false
						));
						?>
					</div>
				</div>
			</div>
		</div>

	<!--</main>--><!-- #main -->

<?php
get_footer('yacht_archive');