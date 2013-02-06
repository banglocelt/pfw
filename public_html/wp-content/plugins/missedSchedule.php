<?php
/*
Plugin Name: [Post] Scheduled MIA-s
Plugin URI: http://blog.5ubliminal.com/topics/wordpress/plugins/
Description: Bring the left-for-dead <code>Missed Schedule</code> (MIA) posts back to life.
Version: 5.U.B
Author: 5ubliminal
Author URI: http://blog.5ubliminal.com/
Support URI: http://blog.5ubliminal.com/support/
*/
// ----------------------------------------------------------------------------- //
define('SCHEDULEDMIAS_DELAY', 3); // Minutes .. change as you wish
define('SCHEDULEDMIAS_TRANSIENT', 'scheduled_mias'); // Minutes .. change as you wish
// ----------------------------------------------------------------------------- //
class Schedules_MIAs{
	public function Schedules_MIAs(){ $this->__construct(); }
	public function __construct(){
		add_action('init', array($this, 'onInit'), 1);
	}
	public function onInit(){
		// I disable internal cron jobs for post publishing completely
		// ... Comment the line below to let Wordpress try do its job before we kick in
		remove_action('publish_future_post', 'check_and_publish_future_post');
		if(get_transient(SCHEDULEDMIAS_TRANSIENT)) return; // Make sure enough time elapsed since last run
		set_transient(SCHEDULEDMIAS_TRANSIENT, 1, abs(intval(SCHEDULEDMIAS_DELAY)) * 60); // Reset delay
		global $wpdb; // Global $wpdb object
		// Find MIA post_IDs, try both LOCAL datetime and GMT datetime
		$scheduledIDs = $wpdb->get_col(
			"SELECT `ID` FROM `{$wpdb->posts}` ".
			"WHERE ( ".
			"	((`post_date` > 0 )&& (`post_date` <= CURRENT_TIMESTAMP())) OR ".
			"	((`post_date_gmt` > 0) && (`post_date_gmt` <= UTC_TIMESTAMP())) ".
			") AND `post_status` = 'future'"
		);
		if(!count($scheduledIDs)) return; // None found ... bail
		foreach($scheduledIDs as $scheduledID){
			if(!$scheduledID) continue; // Just in case
			// Publish each post_ID the Wordpress friendly way
			wp_publish_post($scheduledID);
		}
	}
};
// ----------------------------------------------------------------------------- //
$Schedules_MIAs = new Schedules_MIAs();
// ----------------------------------------------------------------------------- //
?>