<?php
/*
  Plugin name: OBPress Demo Widgets by Zyrgon
  Plugin uri: www.zyrgon.net
  Text Domain: OBPress_Demo_Widgets
  Description: Widgets to OBPress
  Version: 0.0.7
  Author: Zyrgon
  Author uri: www.zyrgon.net
  License: GPlv2 or Later
*/

//Show Elementor plugins only if api token and chain/hotel are set in the admin
if(get_option('obpress_api_set') == true){
    require_once('elementor/init.php');
}

add_action( 'init', 'obpress_demo_widgets_load_textdomain' );
 
function obpress_demo_widgets_load_textdomain() {
    load_plugin_textdomain( 'OBPress_Demo_Widgets', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

// TODO, MAKE GIT BRANCH, CONNECT WITH UPDATE CHECKER

require_once(WP_PLUGIN_DIR . '/OBPress_Demo_Widgets/plugin-update-checker-4.11/plugin-update-checker.php');
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/LukaZyrgon/obpress_demo_widgets',
    __FILE__,
    'OBPress_Demo_Widgets'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
