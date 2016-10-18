<?php
/**
* Plugin Name: SendX Email Marketing
* Description: WordPress Plugin for Various services provided by SendX 
* Version:     1.0
* Author:      SendX
* Author URI:  https://in.linkedin.com/in/mahendra-singh-2961b8127
* License:     GPL2
*/

function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'SendX', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

add_action( 'admin_menu', 'my_plugin_menu' );

var $account_id='55555';

function theme_front_page_settings()
 {
	?>
		<head>
			<script type="text/js" src="js/my.js"></script>
			<link rel="stylesheet" type="text/css" href="css/my.css">
		</head>
		<body id="options">
			<div id="SendXDetails">
				<h1 id="name">SendX</h1>
				<p id="about">360<sup>o</sup> Email Marketing Automation - Engage With Customers<br></p>
			<div>	
				<a id="WebSite" href="http://sendx.io/" target="blank_">  Visit Us  </a>
				<a id="WebSupport" href="http://help.sendx.io/help_center" target="blank_">  Support  </a>
			</div><br><br>
					SendX Account ID <input type="text" id="aid"><br><br>
				<button id="commit">Save Changes</button>	
			</div>	
		</body>
	<?php	
  }



  function add_async_forscript($url)
{
    if (strpos($url, '#asyncload')===false)
        return $url;
    else if (is_admin())
        return str_replace('#asyncload', '', $url);
    else
        {
        	include( WP_DRIP_DIRNAME . "/js/append.js" );
        	return str_replace('#asyncload', '', $url)."' async='async"; 
        }	
}
add_filter('clean_url', 'add_async_forscript', 11, 1);


?>