<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div id="content" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class="dateFormat" ><p> <?php the_time('l, F jS, Y'); ?></p> </div>

<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php //the_title(); ?></a></h1>

<div class="main">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>

<div class="meta group">
	<div class="signature">
    
		<p>Written by <?php the_author() ?> <span class="edit"><?php edit_post_link('Edit'); ?></span></p>
		<?/*php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); */?>
	<p>Posted in <?php the_category(',') ?></p>
		<?php //if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>

	
	<p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('Leave a comment',
'with one comment','with % comments'); ?></a></p>

	</div>

		<!-- The Posted in stuff above used to be within this <div class="tags">
	    </div> -->
</div>

<div class="navigation group">
    <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
    <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
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
