<?PHP
if (!class_exists('WPOrg_Plugin')) {
    class WPOrg_Plugin
    {
        public static function init()
        {
            register_setting('wporg_settings', 'wporg_option_ecommerce');
        }

        public static function get_ecommerce()
        {
            return get_option('wporg_option_ecommerce');
        }
    }

    WPOrg_Plugin::init();
    WPOrg_Plugin::get_ecommerce();
}
