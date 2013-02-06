<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<p class="comments"><a href="<?php comments_link(); ?>"><?php //comments_number('without comments','with one comment','with % comments'); ?></a></p>

<div class="main">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>




<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

</div>


<?php get_sidebar(); ?>

<?php //get_footer(); ?>

