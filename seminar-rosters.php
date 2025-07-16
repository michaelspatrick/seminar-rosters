<?php
/*
Plugin Name: Seminar Rosters
Description: Provides admin interface for viewing and generating seminar rosters based on WooCommerce events.
Version: 1.0
Author: Michael Patrick
*/

register_activation_hook(__FILE__, 'seminar_rosters_create_role');

function seminar_rosters_create_role() {
    add_role('seminar_instructor', 'Seminar Instructor', [
        'read' => true,
    ]);
}

add_action('admin_menu', 'seminar_rosters_register_pages');

function seminar_rosters_register_pages() {
    $capability = 'read';

    add_menu_page(
        'Seminar Rosters',
        'Seminar Rosters',
        $capability,
        'seminar-rosters-upcoming',
        'seminar_rosters_upcoming_page',
        'dashicons-welcome-learn-more',
        26
    );

    add_submenu_page(
        'seminar-rosters-upcoming',
        'Upcoming Seminars',
        'Upcoming Seminars',
        $capability,
        'seminar-rosters-upcoming',
        'seminar_rosters_upcoming_page'
    );

    add_submenu_page(
        'seminar-rosters-upcoming',
        'Past Seminars',
        'Past Seminars',
        $capability,
        'seminar-rosters-past',
        'seminar_rosters_past_page'
    );
}

function seminar_rosters_upcoming_page() {
    include plugin_dir_path(__FILE__) . 'pages/index.php';
}

function seminar_rosters_past_page() {
    include plugin_dir_path(__FILE__) . 'pages/index.php';
}

