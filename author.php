<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section role="main" class="author">
	<div class="layout-jumbletron">
		<header>
			<p class="author-leadin">Articles from</p>
			<h1>
				<?php if ( have_posts() ): the_post(); ?>
					<?php
					the_author();
					rewind_posts();
					?>
				<?php endif; ?>
			</h1>
		</header>
	</div>

	<div class="layout-content">
		<?php if ( have_posts() ): ?>
			<div class="author-post-listing">
				<ul>
					<?php
					while( have_posts() ): the_post();
					get_template_part( 'template-parts/listing' );
					endwhile;
					?>
				</ul>
			</div>
			<?php get_template_part( 'template-parts/pagination' ); ?>
		<?php else: ?>
			<div class="author-no-posts">
				<p>No articles form this author yet.</p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_sidebar();
get_footer(); ?>
