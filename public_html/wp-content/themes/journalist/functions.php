<?php
if ( function_exists('register_sidebar') )
	
	register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	
	register_sidebar(array('name'=>'sidebar-left'
	));
	
    
	

$themecolors = array(
	'bg' => 'fff',
	'border' => '777',
	'text' => '1c1c1c',
	'link' => '004276',
);

class Provence_Books {
    function provenceBooks() {
       ?>
	   <br/> 
	<div id="michelinGreenGuide"></div>
<br/>
        <div style="position:relative"> OUT NOW : 
		 <span style="font-weight:bold;"> Michelin Green Guide to Provence</span>, edited by Mary Dowey.
		</div>

		
  <br/> <br/>
		<div id="thousandGreatWines"></div>

<br/>
        <div style="position:relative;">RECENTLY PUBLISHED : <span style="font-weight:bold;">1000 Great Wines That Won't Cost a Fortune from the World's Best Wineries</span>
(Dorling Kindersley). Mary Dowey contributed the Southern Rhone recommendations</div>

<br/> 
  <br/> 
		<div id="wineOpus"></div>

<br/>
        <div style="position:relative;">A 2011 BESTSELLER <span style="font-weight:bold;">The Wine Opus</span>
        , US title <span style="font-weight:bold;">Opus Vino</span> (Dorling Kindersley),
        a guide to over 4,000 of the world's greatest wineries. In it, Mary writes
        about 88 top estates in the Southern Rhone. Don't miss it.</div>
  <br/> <br/> 
		<div id="provenceWineTravelGuide"></div>
		<br/> 
		<div style="position:relative;">PROVENCE WINE TRAVEL GUIDE : To catch the flavour of Mary's journey into ros&eacute; territory for 
		<span style="font-weight:bold;">Decanter</span> magazine (published in the May 2012 issue), click 	
			<a href= "http://www.provencefoodandwine.com/wp-content/uploads/2012/04/Decanter-Provence-travel-MAY-2012.pdf" >here</a> 
        </div> 
		
  <br/> <br/> 
		<div id="luberonWineGuide"></div>
		<br/> 
		<div style="position:relative;">LUBERON WINE TRAVEL GUIDE : To read Mary's top Luberon tips published in the December 2011 issue of
		<span style="font-weight:bold;">Decanter</span> magazine, click 
		<!-- Embed PDF File 
		<OBJECT data="Decanter Luberon travel.pdf" TYPE="application/x-pdf" TITLE="Decanter Luberon Travel" width="500" height="375" >-->
			<a href= "http://www.provencefoodandwine.com/wp-content/uploads/2011/12/Decanter-Luberon-travel.pdf" >here</a> 
		<!--</object> -->
        </div>
	<br/> <br/> 
		<div id="cassisBandolWineGuide"></div>
		<br/> 
		<div style="position:relative;">CASSIS & BANDOL WINE TRAVEL GUIDE : To read Mary's report on two enchanting little wine regions beside the Mediterranean for
		<span style="font-weight:bold;">Decanter</span> magazine (published in the August 2013 issue), click  
		<a href= "http://www.provencefoodandwine.com/wp-content/uploads/2013/08/Decanter-Cassis-Bandol-AUG13.pdf" >here</a> 
		
        </div>
		
<?php
    }
}

register_sidebar_widget('Provence Books', array('Provence_Books', 'provenceBooks')); 


function tj_comment_class( $classname='' ) {
	global $comment, $post;

	$c = array();	
	if ($classname)
		$c[] = $classname;

	// Collects the comment type (comment, trackback),
	$c[] = $comment->comment_type;

	// If the comment author has an id (registered), then print the log in name
	if ( $comment->user_id > 0 ) {
		$user = get_userdata($comment->user_id);

		// For all registered users, 'byuser'; to specificy the registered user, 'commentauthor+[log in name]'
		$c[] = "byuser comment-author-" . sanitize_title_with_dashes(strtolower($user->user_login));
		// For comment authors who are the author of the post
		if ( $comment->user_id === $post->post_author )
			$c[] = 'bypostauthor';
	}

	// Separates classes with a single space, collates classes for comment LI
	return join(' ', apply_filters('comment_class', $c));
}

function direct_email($text="Email this post to a friend"){
        global $post;
        $title = htmlspecialchars($post->post_title);
        $subject = 'About '.htmlspecialchars(get_bloginfo('name')).' : '.$title;
        $body = 'I recommend this page : '.$title.'. You can read it at : '.get_permalink($post->ID);
        $link = '<a rel="nofollow" href="mailto:?subject='.rawurlencode($subject).'&amp;body='.rawurlencode($body).'" title="'.$text.' : '.$title.'">'.$text.'</a>';
        return $link;
}

?>
