<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @link       https://simplemediacode.com/
 * @since      1.0.2
 * @package    smcmobilewp
 * @subpackage smcmobilewp/includes
 * @author     Rolands Umbrovskis <info@simplemediacode.com>
 */
class smcMobilewpActivator
{

    /**
     * Fired during plugin activation.
     *
     * This class defines all code necessary to run during the plugin's activation.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        add_option('pagefrog_do_activation_redirect', true);
    }

}
