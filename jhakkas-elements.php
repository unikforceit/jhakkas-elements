<?php
/**
 * Plugin Name: Jhakkas Elements
 * Description: Jhakkas Elements is a custom elementor widgets.
 * Plugin URI:  https://wordpress.org/jhakkas-elements/
 * Version:     1.0.0
 * Author:      UnikForce
 * Author URI:  https://unikforce.com/
 * Text Domain: jhakkas
 */
 
namespace JhakkasElements;

if (!defined('ABSPATH'))
    exit;

if (!class_exists('Jhakkas_Elements')) {

    /**
     * Main JhakkasElement Class
     *
     */
    final class Jhakkas_Elements
    {


        /**
         * Plugin Version
         *
         * @since 1.0.0
         *
         * @var string The plugin version.
         */
        const VERSION = '1.0.0';

        /**
         * Minimum Elementor Version
         *
         * @since 1.0.0
         *
         * @var string Minimum Elementor version required to run the plugin.
         */
        const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

        /**
         * Minimum PHP Version
         *
         * @since 1.0.0
         *
         * @var string Minimum PHP version required to run the plugin.
         */
        const MINIMUM_PHP_VERSION = '7.0';

        /** Singleton *************************************************************/

        private static $instance;

        /**
         * On Plugins Loaded
         *
         * Checks if Elementor has loaded, and performs some compatibility checks.
         * If All checks pass, inits the plugin.
         *
         * Fired by `plugins_loaded` action hook.
         *
         * @since 1.0.0
         *
         * @access public
         */
        public function on_plugins_loaded()
        {

            if ($this->is_compatible()) {
                add_action('elementor/init', [$this, 'init']);
            }

        }

        /**
         * Compatibility Checks
         *
         * Checks if the installed version of Elementor meets the plugin's minimum requirement.
         * Checks if the installed PHP version meets the plugin's minimum requirement.
         *
         * @since 1.0.0
         *
         * @access public
         */
        public function is_compatible()
        {

            // Check if Elementor installed and activated
            if (!did_action('elementor/loaded')) {
                add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
                return false;
            }

            // Check for required Elementor version
            if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
                add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
                return false;
            }

            // Check for required PHP version
            if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
                add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
                return false;
            }

        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have Elementor installed or activated.
         *
         * @since 1.0.0
         *
         * @access public
         */
        public function admin_notice_missing_main_plugin()
        {

            if (isset($_GET['activate'])) unset($_GET['activate']);

            $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
                esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'unikforce'),
                '<strong>' . esc_html__('Jhakkas Elements', 'unikforce') . '</strong>',
                '<strong>' . esc_html__('Elementor', 'unikforce') . '</strong>'
            );

            printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have a minimum required Elementor version.
         *
         * @since 1.0.0
         *
         * @access public
         */
        public function admin_notice_minimum_elementor_version()
        {

            if (isset($_GET['activate'])) unset($_GET['activate']);

            $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
                esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'unikforce'),
                '<strong>' . esc_html__('Jhakkas Elements', 'unikforce') . '</strong>',
                '<strong>' . esc_html__('Elementor', 'unikforce') . '</strong>',
                self::MINIMUM_ELEMENTOR_VERSION
            );

            printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have a minimum required PHP version.
         *
         * @since 1.0.0
         *
         * @access public
         */
        public function admin_notice_minimum_php_version()
        {

            if (isset($_GET['activate'])) unset($_GET['activate']);

            $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
                esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'unikforce'),
                '<strong>' . esc_html__('Jhakkas Elements', 'unikforce') . '</strong>',
                '<strong>' . esc_html__('PHP', 'unikforce') . '</strong>',
                self::MINIMUM_PHP_VERSION
            );

            printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

        }

        /**
         * Main JhakkasElement Instance
         *
         * Insures that only one instance of JhakkasElement exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         */
        public static function instance()
        {

            if (!isset(self::$instance) && !(self::$instance instanceof Jhakkas_Elements)) {

                self::$instance = new Jhakkas_Elements;

                self::$instance->setup_constants();

                self::$instance->hooks();

                self::$instance->on_plugins_loaded();

                self::$instance->jhakkas_includes();

            }
            return self::$instance;
        }

        /**
         * Throw error on object clone
         *
         * The whole idea of the singleton design pattern is that there is a single
         * object therefore, we don't want the object to be cloned.
         */
        public function __clone()
        {
            // Cloning instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'jhakkas'), '1.0.0');
        }

        /**
         * Disable unserializing of the class
         *
         */
        public function __wakeup()
        {
            // Unserializing instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'jhakkas'), '1.0.0');
        }

        /**
         * Setup plugin constants
         *
         */
        private function setup_constants()
        {

            // Plugin Folder Path
            if (!defined('JHAKKAS_DIR')) {
                define('JHAKKAS_DIR', plugin_dir_path(__FILE__));
            }
            // Plugin Folder Path
            if (!defined('JHAKKAS_INC_DIR')) {
                define('JHAKKAS_INC_DIR', plugin_dir_path(__FILE__));
            }

            // Plugin Folder URL
            if (!defined('JHAKKAS_URL')) {
                define('JHAKKAS_URL', plugin_dir_url(__FILE__));
            }

            // Plugin Folder URL
            if (!defined('JHAKKAS_ASSETS_URL')) {
                define('JHAKKAS_ASSETS_URL', plugin_dir_url(__FILE__).'assets/');
            }

            define('JHAKKAS_VERSION', self::VERSION);

        }

        private function jhakkas_includes()
        {
            foreach (glob(JHAKKAS_DIR . 'helper/*.php') as $file) {
                require_once $file;
            }
        }

        /**
         * Setup the default hooks and actions
         */
        private function hooks()
        {

            add_action('elementor/widgets/widgets_registered', array(self::$instance, 'jhakkas_include_widgets'));
            add_action('elementor/frontend/after_register_scripts', array($this, 'jhakkas_register_frontend_scripts'), 10);
            add_action('elementor/frontend/after_enqueue_styles', array($this, 'jhakkas_register_frontend_styles'), 10);
            add_action('elementor/init', array($this, 'jhakkas_elementor_category'));
            add_action('template_redirect', function () {
                $instance = \Elementor\Plugin::$instance->templates_manager->get_source('local');
                remove_action('template_redirect', [$instance, 'block_template_frontend']);
            }, 9);
        }

        public function jhakkas_elementor_category()
        {
            \Elementor\Plugin::instance()->elements_manager->add_category(
                'jhakkas-elements',
                array(
                    'title' => __('Jhakkas Elements', 'jhakkas'),
                    'icon' => 'fa fa-plug',
                ),
                1);
        }

        /**
         * Load Frontend Style
         *
         */
        public function  jhakkas_register_frontend_styles()
        {
            // CSS Library
            wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), JHAKKAS_VERSION);
            // CSS Custom
            wp_enqueue_style('jhakkas-elements', JHAKKAS_ASSETS_URL . 'css/jhakkas.css', array(), JHAKKAS_VERSION);
        }

        /**
         * Load Frontend Scripts
         *
         */
        public function  jhakkas_register_frontend_scripts()
        {
            // JS Library
            //wp_enqueue_script('jQuery', JHAKKAS_ASSETS_URL . 'js/library/jquery.min.js', array('jquery'), '', true);
            // JS Custom
            wp_enqueue_script('jhakkas-elements', JHAKKAS_ASSETS_URL . 'js/jhakkas.js', array('jquery'), JHAKKAS_VERSION, true);

        }


        /**
         * Include required files
         *
         */
        public function  jhakkas_include_widgets($widgets_manager)
        {
            foreach (glob(JHAKKAS_DIR . 'widgets/*/controls.php') as $file) {
                require_once $file;
            }
        }

    }

} // End if class_exists check

function JHAKKAS_INIT() {
    return Jhakkas_Elements::instance();
}

// Get Jhakkas Running
JHAKKAS_INIT();
