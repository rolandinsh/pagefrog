<?php
/**
 * Plugin Name:       Facebook Instant Articles & Google AMP Pages / SimpleMediaCode
 * Plugin URI: https://github.com/rolandinsh/smcmobilewp
 * Git URI: https://github.com/rolandinsh/smcmobilewp
 * Description:       The PageFrog plugin allows you to easily publish and manage your content directly from WordPress for Facebook Instant Articles (FBIA) and Google Accelerated Mobile Pages (AMP) with full support for ads and analytics.
 * Version:           1.0.2
 * Author:            PageFrog Team, Rolands Umbrovskis
 * Author URI:        https://simplemediacode.com/
 * Text Domain:       pagefrog
 * Domain Path:       /languages
 * @link              https://simplemediacode.com/
 * @since             1.0.0
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('SMCMOBILEWP_PD', plugin_dir_path(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/smcMobilewpActivator.php
 */
function activate_pagefrog()
{
    require_once plugin_dir_path(__FILE__) . 'includes/smcMobilewpActivator.php';
    smcMobilewpActivator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/smcMobilewpDeactivator.php
 */
function deactivate_pagefrog()
{
    require_once plugin_dir_path(__FILE__) . 'includes/smcMobilewpDeactivator.php';
    smcMobilewpDeactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_pagefrog');
register_deactivation_hook(__FILE__, 'deactivate_pagefrog');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-pagefrog.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pagefrog()
{

    $plugin = new PageFrog();
    $plugin->run();
}

run_pagefrog();
