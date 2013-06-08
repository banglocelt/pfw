<div id="sidebar">

 <div class="searchCaption">TYPE IN A KEY WORD</div>
   <div id="search">
     <div id="search_area">
       <form id="searchform" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
         <div>
           <input class="searchfield" type="text" name="s" id="s" value="" title="Enter keyword to search" />
           <input class="submit" type="submit" value="Search" title="Click to search archives" />
         </div>
        </form>
      </div>
    </div>

<br />
<div class="searchCaption"> SIGN UP FOR FREE 
<br />
EMAIL UPDATES
</div>
		
<form id="search_form" Method="POST" action= "http://feedburner.google.com/fb/a/mailverify" 
	   target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=provencefoodwine', 
	   'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
	Enter your Email address:<br>
	
	<div>
                  
	<input class="searchfield" name="EMAIL" type="text" size="20" value="">
	<input class="searchfield" name="uri"  type="hidden" value="provencefoodwine">
	<input class="submit" type="submit" value="Subscribe">
	</div>
	Powered by <a href="http://feedburner.google.com">FeedBurner</a>

</form>


<div class="searchCaption"; style="padding-top : 20px; padding-bottom : 9px; font-size : 14px ">THIS MONTH'S RECIPE</div>


    <?php $catID = get_cat_ID('recipes');
   // print($catID);
          query_posts('category_name=recipes');
     if (have_posts()) : while (have_posts()) : the_post();
 //    print(the_title());
     //print($post->ID);
        $currentMonthOfCurrentDate =  date( 'n', current_time( 'timestamp' ) );
        $monthOfRecipePost =  get_the_time('n');

        $currentYearOfCurrentDate =  date( 'Y', current_time( 'timestamp' ) );
        $yearOfRecipePost =  get_the_time('Y');

       // print('currentMonthOfCurrentDate = ' .$currentMonthOfCurrentDate);
      //  print( 'monthOfRecipePost = ' . $monthOfRecipePost);

        if( ($currentMonthOfCurrentDate == $monthOfRecipePost) & ($currentYearOfCurrentDate == $yearOfRecipePost) ) :
            $thumb = get_post_meta($post->ID, 'RecipeOfTheMonth', $single = true);

           // print($thumb);
           // print(bloginfo('template_url'));
            //print($cat);
            // check for thumbnail class
            //$thumb_class = get_post_meta($post->ID, 'thumbnail_class', $single = true); ?>

           <a href="<?php the_permalink() ?>" rel="bookmark" ><img src="<?php echo $thumb; ?>" alt="" />  </a>

           <div style="position:relative;"><h2" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></div>

        	<?php //$values = get_post_custom_values("Image"); echo $values[0];
         endif;
    endwhile;
   endif; ?>
   <!--
	<a href= "http://www.provencefoodandwine.com/2012/02/03/guineafowl-with-garlic-and-olives/" >
		<div id="recipeSidebarPic"></div> </a>
<div style="position:relative;">Guineafowl with Garlic and Olives</div>
-->

	
<div class="searchCaption"; style="padding-top : 20px; padding-bottom : 9px; font-size : 14px">IN PROVENCE NOW? DON'T MISS</div>
	
	
	<!-- was this <a href= "http://www.provencefoodandwine.com/2011/09/09/chateau-val-joanis/" >
		<div id="visitSidebarPic"></div> </a>
<div style="position:relative;">Chateau Val Joanis, while the gorgeous garden is at its best</div>
	was this -->
	<?php $catID = get_cat_ID('dont-miss');
          query_posts('category_name=dont-miss');
		if (have_posts()) : while (have_posts()) : the_post();
 
            $thumb = get_post_meta($post->ID, 'DontMiss', $single = true);?>
           <a href="<?php the_permalink() ?>" rel="bookmark" ><img src="<?php echo $thumb; ?>" alt="" />  </a>

           <div style="position:relative;"><h2" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></div>

		   <?php
       
    endwhile;
   endif; ?>
   
   
<br />

<div class="searchCaption">
	<a class="searchCaption" href ="http://www.provencefoodandwine.com/?cat=314";
         title="Itineraries - interesting things to do during your stay"> ITINERARIES - PLAN YOUR TRIP!</a>
	
	</a>
</div>

<br />

<div class="searchCaption">SUBSCRIBE BY FEED
	<a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Provence food and wine RSS feed'); ?>">
	<div id="rssIcon"></div>
	</a>
</div>

<div >
<a  href="http://www.twitter.com/ProvenceFood">
<img style="border:none" src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" title="Follow ProvenceFood on Twitter" alt="Follow ProvenceFood on Twitter"/></a>
</div>




<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>



<div id="pages">
<h3>Pages</h3>
<ul>
    <?php wp_list_pages('title_li='); ?>
</ul>
</div>

<h3>Search</h3>
<p class="searchinfo">search site archives</p>
<div id="search">
<div id="search_area">
    <form id="searchform" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div>
        <input class="searchfield" type="text" name="s" id="s" value="" title="Enter keyword to search" />
        <input class="submit" type="submit" value="search" title="Click to search archives" />
    </div>
    </form>
</div>
</div>




<h3>Blogroll</h3>
<ul>
<?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
</ul>

<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>

<h3>Categories</h3>
<ul>
    <?php wp_list_cats(); ?>
</ul>

<h3>Meta</h3>
<ul>
    <li><?php // wp_register(); ?></li>
    <li><?php wp_loginout(); ?></li>
    <li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">Site Feed</a></li>
    <li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>">Comments Feed</a></li>
    <li><a href="#content" title="back to top">Back to top</a></li>
    <?php wp_meta(); ?>
</ul>
<?php endif; ?>

<?php if (function_exists('wp_theme_switcher')) { ?>
<h3>Themes</h3>
<div class="themes">
<?php wp_theme_switcher(); ?>
</div>
<?php } ?>


<!---
<div class="searchCaption">
<a  href="http://www.facebook.com/home.php?#!/profile.php?id=100001593046380&v=wall" title="Follow provencefoodandwine on Facebook" alt="Follow provencefoodandwine on Facebook">
<div id="faceBookF"></div>
 </a>
</div>
--->

<br/>

 <!--<div class="recentPosts">FAVOURITE BOOKS FROM <br/> MY FRENCH SHELF </div> -->
   <!--	<a href="C:/xampp/htdocs/provencefoodandwine/wp-content/themes/provencefoodandwine/books.php" title="FAVOURITE BOOKS FROM MY FRENCH SHELF - ORDER NOW! ">
	-->
    <!-- <div >
    <a style ="color: #FF0000;" href="?page_id=762 " title="FAVOURITE BOOKS FROM MY FRENCH SHELF - ORDER NOW! "> </div>
    LOW PRICES - SO PLEASE ORDER  <br/>
HERE AND HELP THIS WEBSITE!</a>

<br/> <br/>-->


		<div class="searchCaption"; style="padding-top : 20px; padding-bottom : 9px">PROVENCE MAP</div>

<iframe width="220" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=provence+region+france&amp;sll=43.864238,4.9823&amp;sspn=0.893073,2.007751&amp;ie=UTF8&amp;hq=&amp;hnear=Provence-Alpes-C%C3%B4te+d'Azur,+France&amp;ll=43.882057,4.751587&amp;spn=1.385752,1.653442&amp;z=7&amp;iwloc=A&amp;output=embed">
</iframe>
<br />
<small><a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;
                geocode=&amp;q=provence+region+france&amp;sll=43.864238,4.9823&amp;
                sspn=0.893073,2.007751&amp;ie=UTF8&amp;hq=&amp;hnear=Provence-Alpes-C%C3%B4te+d'Azur,+France&amp;
                ll=43.882057,4.751587&amp;spn=1.385752,1.653442&amp;z=8&amp;iwloc=A"

                "http://maps.google.co.uk/maps?f=q&source=embed&hl=en&q=provence+region+france&sll=43.864238,4.9823&ie=UTF8&hq=&hnear=Provence-Alpes-C%C3%B4te+d%27Azur,+France&ll=43.909766,6.080933&spn=1.709616,4.938354&z=8"
    style="color:#0000FF;text-align:left">View Larger Map

</a>
</small>
		
		
 </div>

 

