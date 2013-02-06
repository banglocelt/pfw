<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div id="content">
<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<!-- <h2 class="archive">Archive for the &#8216;<?php //single_cat_title(); ?>&#8217; Category</h2> -->
<div class="main" style="margin-bottom:20px"><h4><?php single_cat_title(); ?></h4></div>
<?php /* If this is a tag */ } elseif (is_tag()) { ?>
<h2 class="archive">Archive for the &#8216;<?php single_tag_title(); ?>&#8217; tag</h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="archive">Archive for <?php the_time('F jS, Y'); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="archive">Archive for <?php the_time('F, Y'); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="archive">Archive for <?php the_time('Y'); ?></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="archive">Author Archive</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="archive">Blog Archives</h2>
<?php } ?>


<?php while (have_posts()) : the_post(); ?>


<div style="position: relative; width: 300px;  margin-bottom:-20px" >
<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>



<?php
/* state the region under the title of the post, it's the only
child of the region category for this post */
foreach((get_the_category()) as $childcat) {
    if (cat_is_ancestor_of(57, $childcat)) {

        /*echo '<div> '.$childcat->cat_name . '</div>' ; */
          echo $childcat->cat_name;
    }
}
?>

</div>



         <?php  
$postID = $post->ID;
$postTitle = $post->Title;
echo $postTitle;


// Get images for this post
$arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $postID );
// Get array keys representing attached image numbers
$arrKeys = array_keys($arrImages);
// If images exist for this page
if($arrImages) {
    // Get array keys representing attached image numbers
    $arrKeys = array_keys($arrImages);
//for($i=0;$i<10;$i+=1){echo"\n"; echo $arrKeys[$i]; echo"\n";}
    // Get the first image attachment
    $iNum = $arrKeys[0];
    // Get the thumbnail url for the attachment
    $sThumbUrl = wp_get_attachment_thumb_url($iNum);

    // UNCOMMENT THIS IF YOU WANT THE FULL SIZE IMAGE INSTEAD OF THE THUMBNAIL
	//$sImageUrl = wp_get_attachment_url($iNum);

    $marginTop = '-40';
    $marginBottom = '-20';

    //for this post : Les Chèvres de Saint-Jean-de-Sault, move the thumbnail up
    if( $postID == 572) {
           $marginTop = '-60';
           $marginBottom = '0';
    }

	// Build the <img> string
	$sImgString = '<div style="position : relative; left :300px; margin-top:'. $marginTop .'px; margin-bottom:'. $marginBottom .'px ">


    <img src="' . $sThumbUrl . '" width="50" height="50" alt="Thumbnail Image" title="Thumbnail Image" /></div>';

    // Print the image
	echo $sImgString;

}




?>
<br/><br/>



<div class="main">
	<?php //the_content('Read the rest of this entry &raquo;'); ?>
</div>



<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

<div class="navigation group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

</div> 

<?php get_sidebar(); ?>

<?php //get_footer(); ?>
