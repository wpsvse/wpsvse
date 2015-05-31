 <?php
/**
 * WordPress Sverige functions for the adminbar
 *
 * @package WordPress Sverige
 */

//**************************************************
// Brand Adminbar
//**************************************************
function wpsvse_brand_logo() {
    echo '
    <style type="text/css">
		html { margin:0!important; }
		#wpadminbar {
				background: rgba(0,0,0,.75);
				height: 48px;
        line-height: 48px;
		}
		.wp-admin #wpadminbar {
				background: #23282D;
		}
    #wpadminbar .quicklinks li#wp-admin-bar-bp-notifications #ab-pending-notifications, #wpadminbar .quicklinks li#wp-admin-bar-my-account a span.count, #wpadminbar .quicklinks li#wp-admin-bar-my-account-with-avatar a span.count {
      padding: 1px 5px;
    }
		.navbar {
			  padding-top: 48px;
  			padding-bottom: 7px;
		}
		#wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input { height: 48px; line-height: 48px;}
    #wpadminbar>#wp-toolbar #wp-admin-bar-wp-logo .ab-icon {
        background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/icons/brand-icon.png) !important;
        background-position: 0 8px;
        background-repeat: no-repeat;
        width: 32px;
    }
		#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input,
		#wpadminbar .quicklinks .menupop ul.ab-sub-secondary, #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu,
		#wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar .ab-top-menu>li:hover>.ab-item, #wpadminbar .ab-top-menu>li>.ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus {
			  background: rgba(0,0,0,.75);
		}
		#wpadminbar .quicklinks .menupop ul li:hover {
				background: #000;
		}
		#wpadminbar .ab-icon, #wpadminbar .ab-item:before, #wpadminbar>#wp-toolbar>#wp-admin-bar-root-default .ab-icon {
				padding: 12px 0;
		}
		#wpadminbar .menupop .menupop>.ab-item:before { padding: 2px 0; }
    #wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
        content: "";
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
        background-position: 0 0;
    }
	#wpadminbar>#wp-toolbar>#wp-admin-bar-top-secondary>#wp-admin-bar-search #adminbarsearch input.adminbar-input {
		margin-top: 8px;
 		margin-right: 8px;
	}
		#wpadminbar #adminbarsearch { height: 48px; }
		#wpadminbar #adminbarsearch:before { top: 14px; }
		#wpadminbar>#wp-toolbar>#wp-admin-bar-top-secondary>#wp-admin-bar-search #adminbarsearch input.adminbar-input { height: 32px; }
		@media screen and (max-width:782px){
				#wpadminbar .ab-icon, #wpadminbar .ab-item:before, #wpadminbar>#wp-toolbar>#wp-admin-bar-root-default .ab-icon {
						padding: 0;
				}
		}
		.wpseo-score-icon { margin: 18px 10px 0 4px!important; }
		html.wp-toolbar { padding-top: 48px; }
		#wpadminbar #wp-admin-bar-my-account.with-avatar>a img {
			border: none;
			background: none;
		}
    </style>
    ';
}

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpsvse_brand_logo');

//**************************************************
// Toolbar login form
//**************************************************
function wpsvse_toolbar_login( $wp_admin_bar ) {
	global $wp_admin_bar;
  if(!is_user_logged_in()) {
		$form_args = array( 'echo' => false, 'label_username' => '', 'label_password' => '', 'label_remember' => 'Kom ihåg', );
		$wpsvse_login_form = wp_login_form( $form_args );
		$wp_admin_bar->add_menu( array(
			'id'     => 'wpsvse-login',
			'parent' => 'top-secondary',
			'title'  => $wpsvse_login_form,
		) );
  }
}
add_action( 'admin_bar_menu', 'wpsvse_toolbar_login' );