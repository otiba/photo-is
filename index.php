<!-- ----- Header ----- -->

<?php get_header(); ?>

<!-- ----- Content ----- -->
<div id="wrap">
	<div id="content">

<!-- Loops starts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
	<h2 class="posttitle"><a class="posttitlelink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
	<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
</div><!-- End of post -->

<?php endwhile; ?>
<div class="navigation"><p><?php next_posts_link('&laquo; Previous Entries') ?> | <?php previous_posts_link('Next Entries &raquo;') ?></p></div>
<?php else : endif; ?>

	</div><!-- End of content -->
</div><!-- End of wrap -->

<?php get_footer(); ?>
