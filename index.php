<?php
/**
* Plugin Name: SendX Email Marketing
* Description: WordPress Plugin for Various services provided by SendX 
* Version:     1.0.1
* Author:      Mahendra@SendX
* Author URI:  https://in.linkedin.com/in/mahendra-singh-2961b8127
* License:     GPL2
*/

$name="";

function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'SendX', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_options() 
{
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Insufficient rights to access this plugin page.' ) );
}

	//global $account_id='55555';
	?>
		<head>
			<link rel="stylesheet" type="text/css" href="plugin.css">
		</head>
		<!-- Settings Page -->
		<body id="options">
			<div id="SendXDetails">
				<h1 id="name">SendX</h1>
				<p id="about">360<sup>o</sup> Email Marketing Automation - Engage With Customers<br></p>
			<div>	
				<a id="WebSite" href="http://sendx.io/" target="blank_">Visit Us</a>&nbsp
				<a id="WebSupport" href="http://help.sendx.io/help_center" target="blank_">Support</a>
			</div><br>
					SendX Account ID <input type="text" id="aid"><br><br>
				<button id="commit">Save Changes</button>	
			</div>	
		</body>
	<?php	
  }

// Asynchronus call 
wp_enqueue_script('dcsnt', 'head.js#asyncload' );

public function appender() 
{
		// Check Account ID
		if ( ! $this->get_option( 'is_disabled' ) )
		{
			if ( $this->get_option( 'account_id' ) ) 
			{ 
				$account_id = $this->get_option( 'account_id' );
				include( "appender.php" );
			}
			else 
			{
				echo '<!-- SendX: Input your account ID-->';
			}
		}
}

?>