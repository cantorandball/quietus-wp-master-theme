<?php $paginate_links = get_paginate_links(); ?>

<?php if ( $paginate_links ): ?>
	<nav role="navigation" class="pagination">
		<?php echo $paginate_links; ?>
	</nav>
<?php endif; ?>
