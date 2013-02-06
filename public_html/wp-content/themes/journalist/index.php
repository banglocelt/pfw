<?php get_header(); ?>

<?php get_sidebar('left'); ?>
                                       
<div id="content" class="group">
<?php if (have_posts()) :
while (have_posts()) : the_post(); ?>

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

 <br/>

<iframe src="http://facebook.com/plugins/like.php?href=<?php the_permalink()?>&layout=standard&show_faces=false&width=450&action=like&colorscheme=light"
scrolling="no" frameborder="0"
allowTransparency="true" style="border:none; overflow:hidden; width:200px; height:30px"></iframe>

              <br/>
<a href="http://www.stumbleupon.com/submit?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>&title=<?php echo urlencode(get_the_title(get_the_ID())); ?>">
<div id="stumbleUpon"></div>
  <div id="stumbleUponText"> StumbleUpon!   </div>  </a>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div id="stumbleUponText" <?php echo direct_email(); ?>   </div>
   <!--
<a href="http://www.stumbleupon.com/submit?url="+data:post.url"><img alt="StumbleUpon" border="0" src="http://www.stumbleupon.com/images/small_su_logo.png"/>
</a>                          -->

 <!--   <div> <script src="http://www.stumbleupon.com/hostedbadge.php?s=3"></script>      </div>   -->

<br/> <br/>


	<p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('Leave a comment',
'with one comment','with % comments'); ?></a></p>

	</div>

		<!-- The Posted in stuff above used to be within this <div class="tags">
	    </div> -->
</div>



<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

<div class="navigation">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>


</div>

</div>



<?php get_sidebar(); ?>


<?php //wp_footer(); ?>
