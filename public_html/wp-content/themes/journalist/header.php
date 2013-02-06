<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> at <?php } ?><?php bloginfo('name'); ?> - Good eating and drinking in Provence</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="Keywords" content= "Provence, food, wine, restaurant, eating, drinking, travel, eating out, wine producer, food producer, Provence hotels, market, cheese, blog, good, cookery, bakery, Avignon, vineyard, personal, writer " />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<meta name="google-site-verification" content="Elj9NLIFYFdjKhAeoeg-rp8O97F_Z_NVYMkbPUSgN-M" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url'); ?>/favicon.png" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<?php
  $browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  if ($browser == true){
    $browser = 'iphone';
  }
?>


<body>
<div id="container" class="group">

<!-- line below is the blog title -->
<h6><a href="<?php bloginfo('url'); ?>/">
        <div class="headerText">  provence</div>
         <div style="position:absolute;left:153px;color:#666666;font-weight:bold">foodandwine</div>
        <div style="position:absolute;left:470px;color:#AAAAAA; font-weight:bold">.com</div>
    </a>
</h6>

<div class="siteDescriptionText">a personal guide to good eating & drinking</div>
   <!--
add the garlic pic after the text and link it to homepage -->
<a href="<?php bloginfo('url'); ?>/">
<?php
if($browser == 'iphone')
{ ?>
    <div id="garlicLogoSmallScreen"></div>
<?php
} else {?>
   <div id="garlicLogo"></div>

<?php
} ?></a>

<!--
<div id="header_img2">
 
</div>
-->

<!--
<div id="bubble"><p><?php //bloginfo('description'); ?></p></div>  erase this line if you want to turn the bubble off -->

<?php 

function dropdown_list($catID) {
	$all_cats = FALSE;
	if (strtolower(trim($catID)) == 'all') {
		$all_cats = TRUE;
	}


	global $wpdb;
	$tp = $wpdb->prefix;
	$wpv = $wpdb->get_results("show tables like '{$tp}term_taxonomy'");
	


	$ddpl_type = get_option('ddpl_type'); 
	$ddpl_button = trim(get_option('ddpl_button')); 
	$ddpl_default = stripslashes(trim(get_option('ddpl_default'))); 
	$ddpl_sort = get_option('ddpl_sort'); 
	$ddpl_limit = (int)get_option('ddpl_limit'); 
	$ddpl_before_form = stripslashes(get_option('ddpl_before_form')); 
	$ddpl_after_form = stripslashes(get_option('ddpl_after_form')); 
	$ddpl_before_list = stripslashes(get_option('ddpl_before_list')); 
	$ddpl_after_list = stripslashes(get_option('ddpl_after_list')); 
	
	$t_out = '';

	$table_prefix = $wpdb->prefix;

	$sort_code = 'ORDER BY post_date DESC';
	switch ($ddpl_sort) {
		case 'date_desc': 
			$sort_code = 'ORDER BY post_date DESC';
			break;
		case 'date_asc': 
			$sort_code = 'ORDER BY post_date ASC';
			break;
		case 'title':
			$sort_code = 'ORDER BY post_title ASC';
			break;
	}

	$limit_code = '';
	if ($ddpl_limit > 0) {
		$limit_code = ' LIMIT ' . $ddpl_limit;
	}
	$cat_sel_code = ' ';
	if (!$all_cats) {
		$cat_sel_code = " AND {$table_prefix}term_taxonomy.term_id = {$catID} ";
	}
		
	$post_list = (array)$wpdb->get_results("
		SELECT ID,
			post_title,
			post_date
		FROM {$table_prefix}posts, {$table_prefix}term_relationships, {$table_prefix}term_taxonomy
		WHERE {$table_prefix}posts.ID = {$table_prefix}term_relationships.object_id
		AND {$table_prefix}term_relationships.term_taxonomy_id = {$table_prefix}term_taxonomy.term_taxonomy_id
		AND {$table_prefix}term_taxonomy.taxonomy = 'category' 
		{$cat_sel_code}
		AND post_status = 'publish' 
		AND post_type != 'page' 
		{$sort_code} 
		{$limit_code} 
	");

	// use random ID when showing all
	if ($all_cats) {
		$randstr = '';
		$maxchar = 8;
		$chars = str_shuffle('abcdef1234567890');
		$len = strlen($chars);
		for ($i = 0; $i < $maxchar; $i++) {
			$randstr .= $chars[mt_rand(0, $len-1)];
		}
		$catID = $randstr;
	}


	//$t_out .= '<form class="ddpl-form" name="catform' . $catID. '" id="catform' . $catID. '" action="">';
	//$t_out .= $ddpl_before_list;
	//$t_out .= '<select name="jumpMenu' . $catID. '" id="jumpMenu' . $catID. '" onchange="MM_jumpMenu(\'parent\',this,0)">';

	if ($ddpl_default != '') {
		//$ddpl_default below is "select a post" on the first line of drop-down
		//$t_out .= '<div>';//<option value="">' . $ddpl_default . '</option>';
	}

	//$t_out .= '<br/>';
	foreach ($post_list as $p) {
	//	$t_out .= '<option value="' . get_permalink($p->ID) . '">' . $p->post_title . '</option>';
		//$t_out .= '<a href ="' . get_permalink($p->ID) . '">'  . $p->post_title . '</a></br>';//
		//$t_out .= '</br>';
	//if( $count == $post_list.size ) {

	//	} else {
			$t_out .= '<div id="singleDropDown">
			<a href ="' . get_permalink($p->ID) . '">'  . $p->post_title . '</a>
			</div> '; //this works displaying just text
	//	}

	}
    //  $t_out .=  '</div>';
	//$t_out .= '</a>';
	//$t_out .= '</select>';
	//$t_out .= $ddpl_after_list;
	//$t_out .= '</form>';

	return $t_out;//$ddpl_before_form . $t_out . $ddpl_after_form;
}
?>




    <div id="navmenu">
  <ul >
    <li>
        <div id="homeMenuItem"><a class="restaurantMenuAnchor" href =<?php bloginfo('url'); ?> > &nbsp;&nbsp;&nbsp;HOME </a>
		</div>
	</li>


    <li>
		 <div id="restaurantMenuItem"><a class="restaurantMenuAnchor" href ="http://www.provencefoodandwine.com/?cat=14";
         title="Restaurants listed with region"> RESTAURANTS </a>
		</div>
	</li>
	<li>
		<div id="hotelMenuItem"><a class="restaurantMenuAnchor"  href ="http://www.provencefoodandwine.com/?cat=29";
        title="Hotels/B+Bs listed with region" >HOTELS/B+Bs </a>
		</div>
	</li>
    <li>
		<div id="wineProducerMenuItem"><a class="wineProducersMenuAnchor"  href ="http://www.provencefoodandwine.com/?cat=3";
        title="Wine Producers listed with region">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WINE<br/>&nbsp;PRODUCERS </a>
		</div>
	</li>
    <li>
		<div id="foodProducerMenuItem"><a class="wineProducersMenuAnchor"  href ="http://www.provencefoodandwine.com/?cat=31";
        title="Food Producers listed with region">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOOD<br/>&nbsp;PRODUCERS </a>
		</div>
	</li>
    <li>
        <div id="shopMenuItem"><a class="wineProducersMenuAnchor"  href ="http://www.provencefoodandwine.com/?cat=45";
        title="Shops listed with region"> &nbsp;&nbsp;&nbsp;SHOPS & <br/>&nbsp;&nbsp;&nbsp;MARKETS </a>
		</div>
	</li>
  <!--  <li>
		<div id="marketMenuItem"><a class="restaurantMenuAnchor"  href ="?cat=55";
        title="Markets listed with region"> MARKETS </a>
			<ul> <div id="marketMenuItemDropDown"><?php echo dropdown_list(55);?></div> </ul>
		</div>
	</li>-->
    <li>
		<div id="surpriseMenuItem"><a class="wineProducersMenuAnchor"  href ="http://www.provencefoodandwine.com/?cat=65";
        title="Other Temptations listed with region"> &nbsp;&nbsp;OTHER<br/>&nbsp;&nbsp; IDEAS </a>
		</div>
	</li>



  </ul>
</div>






