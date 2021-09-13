<?PHP

require_once '../../repositories/index.php';

// if called by wordpress
if (defined('WP_UNINSTALL_PLUGIN')) {
    EcommerceRepository::uninstall();
}
