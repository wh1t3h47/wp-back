<?PHP

$option_name = 'wporg_option_ecommerce';

delete_option($option_name);

// for site options in Multisite
delete_site_option($option_name);

// drop a custom database table
global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}mytable");
