<?php
/*
Plugin Name: Drop-Down Post List
Plugin URI: http://www.dagondesign.com/articles/drop-down-post-list-plugin-for-wordpress/
Description: Generates a drop-down list of posts for a particular category.
Author: Dagon Design
Version: 1.33
Author URI: http://www.dagondesign.com
*/

$ddpl_version = '1.33';

// Setup defaults if options do not exist
add_option('ddpl_type', 'jump'); 
add_option('ddpl_button', 'View'); 
add_option('ddpl_default', '(select a post)'); 
add_option('ddpl_sort', 'date_desc'); 
add_option('ddpl_limit', 0); 
add_option('ddpl_before_form', ''); 
add_option('ddpl_after_form', ''); 
add_option('ddpl_before_list', ''); 
add_option('ddpl_after_list', ''); 


function ddpl_add_option_pages() {
	if (function_exists('add_options_page')) {
		add_options_page('Drop-Down Post List', 'DDPostList', 8, __FILE__, 'ddpl_options_page');
	}		
}


function ddpl_options_page() {

	global $ddpl_version;

	if (isset($_POST['set_defaults'])) {
		echo '<div id="message" class="updated fade"><p><strong>';

		update_option('ddpl_type', 'jump'); 
		update_option('ddpl_button', 'View'); 
		update_option('ddpl_default', '(select a post)'); 
		update_option('ddpl_sort', 'date_desc'); 
		update_option('ddpl_limit', 0); 
		update_option('ddpl_before_form', ''); 
		update_option('ddpl_after_form', ''); 
		update_option('ddpl_before_list', ''); 
		update_option('ddpl_after_list', ''); 

		echo 'Default Options Loaded!';
		echo '</strong></p></div>';

	} else if (isset($_POST['info_update'])) {

		echo '<div id="message" class="updated fade"><p><strong>';

		update_option('ddpl_type', (string)$_POST["ddpl_type"]); 
		update_option('ddpl_button', (string)$_POST["ddpl_button"]); 
		update_option('ddpl_default', (string)$_POST["ddpl_default"]); 
		update_option('ddpl_sort', (string)$_POST["ddpl_sort"]); 
		update_option('ddpl_limit', (int)$_POST["ddpl_limit"]); 
		update_option('ddpl_before_form', (string)$_POST["ddpl_before_form"]); 
		update_option('ddpl_after_form', (string)$_POST["ddpl_after_form"]); 
		update_option('ddpl_before_list', (string)$_POST["ddpl_before_list"]); 
		update_option('ddpl_after_list', (string)$_POST["ddpl_after_list"]);

		echo 'Configuration Updated!';
		echo '</strong></p></div>';

	} ?>




	<div class=wrap>

	<h2>Drop-Down Post List v<?php echo $ddpl_version; ?></h2>

	<p>For information and updates, please visit:<br />
	<a href="http://www.dagondesign.com/articles/drop-down-post-list-plugin-for-wordpress/">http://www.dagondesign.com/articles/drop-down-post-list-plugin-for-wordpress/</a></p>


	<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
	<input type="hidden" name="info_update" id="info_update" value="true" />


	<h3>Options</h3>
	<table width="100%" border="0" cellspacing="0" cellpadding="6">

	<tr valign="top"><td width="35%" align="right">
		<strong>Form Type</strong> &nbsp; 
	</td><td align="left">
		<input name="ddpl_type" type="radio" value="jump" <?php if (get_option('ddpl_type') == "jump") echo "checked='checked'"; ?> />&nbsp;&nbsp; Jump menu<br />
		<input name="ddpl_type" type="radio" value="list" <?php if (get_option('ddpl_type') == "list") echo "checked='checked'"; ?> />&nbsp;&nbsp; List with button<br />
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Default Option</strong> &nbsp; 
	</td><td align="left">
		<input name="ddpl_default" type="text" size="20" value="<?php echo stripslashes(htmlspecialchars(get_option('ddpl_default'))) ?>"/>
		<br /><i>If entered, this will be the default list option (does not link to anything)</i>
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Button Text</strong> &nbsp; 
	</td><td align="left">
		<input name="ddpl_button" type="text" size="20" value="<?php echo stripslashes(htmlspecialchars(get_option('ddpl_button'))) ?>"/>
		<br /><i>Button is only shown if using 'list with button' form type</i>
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Sorting Method</strong> &nbsp; 
	</td><td align="left">
		<input name="ddpl_sort" type="radio" value="date_desc" <?php if (get_option('ddpl_sort') == "date_desc") echo "checked='checked'"; ?> />&nbsp;&nbsp; By date - newest first<br />
		<input name="ddpl_sort" type="radio" value="date_asc" <?php if (get_option('ddpl_sort') == "date_asc") echo "checked='checked'"; ?> />&nbsp;&nbsp; By date - oldest first<br />
		<input name="ddpl_sort" type="radio" value="title" <?php if (get_option('ddpl_sort') == "title") echo "checked='checked'"; ?> />&nbsp;&nbsp; By title<br />
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Post Limit</strong> &nbsp; 
	</td><td align="left">
		<input name="ddpl_limit" type="text" size="5" value="<?php echo get_option('ddpl_limit') ?>"/>
		<br /><i>Limits the number of posts in the list (0 = no limit)</i>
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Add Before Form</strong> &nbsp; 
	</td><td align="left">
		<textarea name="ddpl_before_form" cols="40" rows="4"><?php echo stripslashes(htmlspecialchars(get_option('ddpl_before_form'))) ?></textarea>
		<br /><i>Code to display before the form</i>
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Add After Form</strong> &nbsp; 
	</td><td align="left">
		<textarea name="ddpl_after_form" cols="40" rows="4"><?php echo stripslashes(htmlspecialchars(get_option('ddpl_after_form'))) ?></textarea>
		<br /><i>Code to display after the form</i>
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Add Before List</strong> &nbsp; 
	</td><td align="left">
		<textarea name="ddpl_before_list" cols="40" rows="4"><?php echo stripslashes(htmlspecialchars(get_option('ddpl_before_list'))) ?></textarea>
		<br /><i>Code to display before the list</i>
	</td></tr>

	<tr valign="top"><td width="35%" align="right">
		<strong>Add After List</strong> &nbsp; 
	</td><td align="left">
		<textarea name="ddpl_after_list" cols="40" rows="4"><?php echo stripslashes(htmlspecialchars(get_option('ddpl_after_list'))) ?></textarea>
		<br /><i>Code to display after the list</i>
	</td></tr>

	</table>

	<div class="submit">
		<input type="submit" name="set_defaults" value="<?php _e('Load Default Options'); ?> &raquo;" />
		<input type="submit" name="info_update" value="<?php _e('Update options'); ?> &raquo;" />
	</div>

	</form>
	</div><?php
}



function ddpl_list($catID) {

	$all_cats = FALSE;
	if (strtolower(trim($catID)) == 'all') {
		$all_cats = TRUE;
	}


	global $wpdb;
	$tp = $wpdb->prefix;
	// Currently using a work-around for the version system
	// determines if pre or post 2.3 from wp_term_taxonomy 
	$ver = 2.2;
	$wpv = $wpdb->get_results("show tables like '{$tp}term_taxonomy'");
	if (count($wpv) > 0) {
		$ver = 2.3;
	}


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


	if ($ver < 2.3) {

		$cat_sel_code = ' ';
		if (!$all_cats) {
			$cat_sel_code = " AND {$table_prefix}post2cat.category_id = {$catID} ";
		}

		$post_list = (array)$wpdb->get_results("
			SELECT ID, post_title, post_date
			FROM {$table_prefix}posts, {$table_prefix}post2cat
			WHERE {$table_prefix}posts.ID = {$table_prefix}post2cat.post_id 
			{$cat_sel_code} 
			AND post_status = 'publish' 
			AND post_type != 'page' 
			{$sort_code} 
			{$limit_code} 
		");

	} else { // post 2.3

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

	}


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


	if ($ddpl_type == 'jump') {

		$t_out .= '<form class="ddpl-form" name="catform' . $catID. '" id="catform' . $catID. '" action="">';
		$t_out .= $ddpl_before_list;
		$t_out .= '<select name="jumpMenu' . $catID. '" id="jumpMenu' . $catID. '" onchange="MM_jumpMenu(\'parent\',this,0)">';

		if ($ddpl_default != '') {
			$t_out .= '<option value="">' . $ddpl_default . '</option>';
		}

		foreach ($post_list as $p) {
			$t_out .= '<option value="' . get_permalink($p->ID) . '">' . $p->post_title . '</option>';
		}

		$t_out .= '</select>';
		$t_out .= $ddpl_after_list;
		$t_out .= '</form>';

	} else {

		$t_out .= '<form class="ddpl-form" name="catform' . $catID. '" id="catform' . $catID. '">';
		$t_out .= $ddpl_before_list;
		$t_out .= '<select>';

		foreach ($post_list as $p) {
			$t_out .= '<option value="' . get_permalink($p->ID) . '">' . $p->post_title . '</option>';
		}

		$t_out .= '</select>';
		$t_out .= $ddpl_after_list;
		$t_out .= '<input type="button" value="' . stripslashes(htmlspecialchars($ddpl_button)) . '" onClick="MM_jumpMenu(\'parent\', this.form.elements[0], 0)"></form>';

	}
	

	return $ddpl_before_form . $t_out . $ddpl_after_form;
}



function ddpl_check($content) {

	// remove P tags around html comments (comment out to disable)
	$content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content); 

	$results = array();

	preg_match_all("/<!--\s?ddpl\s?(.*)\s?-->/", $content, $results);

	$i = 0;
	foreach ($results[0] as $r) {
		$content = str_replace($r, ddpl_list($results[1][$i]), $content);
		$i++;
	}

	return $content;
}



function ddpl_head() {
	echo "
	<script type=\"text/javascript\">
	<!--
	function MM_jumpMenu(targ,selObj,restore){ //v3.0
	  eval(targ+\".location='\"+selObj.options[selObj.selectedIndex].value+\"'\");
	  if (restore) selObj.selectedIndex=0;
	}
	//-->
	</script>
	";
}


add_action('admin_menu', 'ddpl_add_option_pages');
add_filter('the_content', 'ddpl_check');
add_action('wp_head', 'ddpl_head');

?>