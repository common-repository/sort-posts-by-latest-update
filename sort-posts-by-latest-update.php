<?php
/*
Plugin Name: Sort Posts by Latest Update
Description: Sorts posts by their latest update date on the homepage.
Version: 1.0
Author: Saroj Meher
Author URI: https://www.sarojmeher.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Hook into the 'pre_get_posts' action to modify the query on the homepage
function sort_posts_by_latest_update($query) {
    // Check if this is the main query and the homepage
    if ($query->is_home() && $query->is_main_query()) {
        // Order posts by their last update date
        $query->set('orderby', 'modified');
        $query->set('order', 'DESC');
    }
}

// Add the function to the 'pre_get_posts' action
add_action('pre_get_posts', 'sort_posts_by_latest_update');
