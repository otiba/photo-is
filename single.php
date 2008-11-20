<?php get_header(); ?>
<div id="wrap">
<div id="content">

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
			<div class="navigation">
				<p><?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?></p>
			</div>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="posttitle"><a class="posttitlelink" href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<p>Posted: <?php the_time('l, F jS, Y') ?> at <?php the_time() ?></p>
					<p>Category: <?php the_category(', ') ?></p>
				</div>
			</div>
			<?php comments_template(); ?>
		<?php endwhile; ?>
	<?php else: ?>
	<h2 class="posttitle center">Not found.</h2>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

      <!-- Preview:Content:Content -->
    </div>
</div>
<?php get_footer(); ?>
