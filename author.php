<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section role="main" class="author">
	<div class="layout__jumbletron">
		<header>
			<h3 class="author__leadin">Articles from</h3>
			<h2 class="author__title">
				<?php if ( have_posts() ): the_post(); ?>
					<?php
					the_author();
					rewind_posts();
					?>
				<?php endif; ?>
			</h2>
		</header>
	</div>

	<div class="layout__content">
		<?php if ( have_posts() ): ?>
			<div class="author__post-listing">
				<ul>
					<?php
					while( have_posts() ): the_post();
					get_template_part( 'template-parts/listing', 'excerpt' );
					endwhile;
					?>
				</ul>
			</div>
			<?php get_template_part( 'template-parts/pagination' ); ?>
		<?php else: ?>
			<div class="author__no-posts">
				<p>No articles form this author yet.</p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_sidebar();
get_footer(); ?>
