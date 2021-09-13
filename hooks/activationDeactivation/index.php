<?php
/*KEK rofl lel can u r00t?*/
register_activation_hook(__FILE__, 'pluginprefix_function_to_run');

/*
Activation / Deactivation Hooks
Activation and deactivation hooks provide ways to perform actions when plugins are activated or deactivated.

On activation, plugins can run a routine to add rewrite rules, add custom database tables, or set default option values.
On deactivation, plugins can run a routine to remove temporary data such as cache and temp files and directories.
Alert:The deactivation hook is sometimes confused with the uninstall hook. The uninstall hook is best suited to delete all data permanently such as deleting plugin options and custom tables, etc. Read more about the uninstall hooks here.
 */

/**
 * Register the ecommerce custom post type
 */
function pluginprefix_setup_post_type()
{
    register_post_type('ecommerce', ['public' => true]);
}
add_action('init', 'pluginprefix_setup_post_type');

/**
 * Activation #Activation
 * To set up an activation hook, use the register_activation_hook() function:
 */
function pluginprefix_activate()
{
    echo 'Activating ecommerce plugin';
    // Trigger our function that registers the custom post type plugin.
    pluginprefix_setup_post_type();
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules();
    echo 'Ecommerce plugin activated';
}
register_activation_hook(__FILE__, 'pluginprefix_activate');

/*
Deactivation #Deactivation
To set up a deactivation hook, use the register_deactivation_hook() function:
 */
function pluginprefix_deactivate()
{
    echo 'Deactivating ecommerce plugin';
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type('ecommerce');
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
    echo 'Ecommerce plugin deactivated';
}

register_deactivation_hook(__FILE__, 'pluginprefix_deactivate');
