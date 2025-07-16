# Seminar Rosters

**Contributors:** Michael Patrick  
**Tags:** woocommerce, seminars, events, roster, admin  
**Requires at least:** 5.0  
**Tested up to:** 6.5  
**Stable tag:** 1.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

## Description

The **Seminar Rosters** plugin provides a simple admin interface for viewing and generating seminar rosters based on WooCommerce event orders. It adds role-based access for instructors to view rosters of upcoming and past seminars directly from the WordPress admin panel.

## Features

- Adds a custom **Seminar Instructor** role.
- Adds a top-level menu for **Seminar Rosters** with:
  - **Upcoming Seminars**
  - **Past Seminars**
- Displays roster data for WooCommerce-based events.
- Modular architecture using separate include files for interface pages.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/seminar-rosters` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. A new role `Seminar Instructor` will be created with read-only access.
4. Navigate to **Seminar Rosters** in the WordPress admin menu.

## Usage

- Assign the `Seminar Instructor` role to users who should access seminar rosters.
- Visit **Seminar Rosters > Upcoming Seminars** to view upcoming events.
- Visit **Seminar Rosters > Past Seminars** to view archived event data.

The plugin includes the view logic via `pages/index.php`, which should be customized to query and display seminar or WooCommerce order data.

## Customization

You can customize the output of seminar data by editing the `pages/index.php` file. This file is included on both Upcoming and Past seminar pages, so you may want to add conditional logic to distinguish between the views.

## Changelog

### 1.0
- Initial release with role creation and admin menu pages.

## License

This plugin is licensed under the GPLv2 or later.
