<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_6' ) ) {

    /**
     * Functions related to Demo 6
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_6 extends Gutentor_Template_Library_Base{

        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 1.1.0
         * @return object
         */
        public static function get_instance() {

            // Store the instance locally to avoid private static replication
            static $instance = null;

            // Only run these methods if they haven't been ran previously
            if ( null === $instance ) {
                $instance = new self();
            }

            // Always return the instance
            return $instance;

        }

        /**
         * Load block library
         * Used for blog template loading
         *
         * @since      1.1.5
         * @package    Gutentor
         * @author     Gutentor <info@gutentor.com>
         *
         * @param $templates_list array
         * @return array
         */
        public function add_block_template_library( $templates_list ){

            $block_library_list = array(

                //Block/Modules Templates Starts
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/#section-a9360b40-5b13-4e4c-9cc0-f6d1fbcd0b84',
				),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/contact/#section-88d08964-cfa4-48e3-b0f4-c8a5323d5eba',
                ),
            
                array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', ),
					'categories'		=> array( 'cosmoswp','icon-box' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/icon-box/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/icon-box/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/#section-3fdb569c-72a1-4fee-9836-4749ce304793',
                ),
                array(
					'title'				=> __( 'Restaurant Menu', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'restaurant-menu' ),
					'categories'		=> array( 'cosmoswp','restaurant-menu' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/restauranrt-menu/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/modules/restauranrt-menu/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/#section-0eff7c83-90cb-44ca-b56a-b42633b4b5b0',
				),

                        

                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 6', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('education','home','home 6' ),
                    'categories'        => array( 'cosmoswp', 'education' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/',
                ),
               
                array(
                    'title'             => __( 'About 6', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 6' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/about/',
                ),
                
                array(
                    'title'             => __( 'Contact 6', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 6' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-6/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_6::get_instance()->run();