<?php
defined('_SECURE_') or die('Forbidden');
    
// common action icons
$icon_config = array(
	'add' => "<span class='sms-icon glyphicon glyphicon-plus' alt='" . _('Add') . "' title='" . _('Add') . "'></span>",
	'edit' => "<span class='sms-icon glyphicon glyphicon-cog' alt='" . _('Edit') . "' title='" . _('Edit') . "'></span>",
	'delete' => "<span class='sms-icon glyphicon glyphicon-trash' alt='" . _('Delete') . "' title='" . _('Delete') . "'></span>",
	'view' => "<span class='sms-icon glyphicon glyphicon-eye-open' alt='" . _('View') . "' title='" . _('View') . "'></span>",
	'manage' => "<span class='sms-icon glyphicon glyphicon-folder-open' alt='" . _('Manage') . "' title='" . _('Manage') . "'></span>",
	'forward' => "<span class='sms-icon glyphicon glyphicon-new-window' alt='" . _('Forward') . "' title='" . _('Forward') . "'></span>",
	'reply' => "<span class='sms-icon glyphicon glyphicon-log-out' alt='" . _('Reply') . "' title='" . _('Reply') . "'></span>",
	'resend' => "<span class='sms-icon glyphicon glyphicon-log-in' alt='" . _('Resend') . "' title='" . _('Resend') . "'></span>",
	'user_pref' => "<span class='sms-icon glyphicon glyphicon-user' alt='" . _('User preference') . "' title='" . _('User preference') . "'></span>",
	'user_config' => "<span class='sms-icon glyphicon glyphicon-wrench' alt='" . _('User configuration') . "' title='" . _('User configuration') . "'></span>",
	'user_delete' => "<span class='sms-icon glyphicon glyphicon-trash' alt='" . _('Delete user') . "' title='" . _('Delete user') . "'></span>",
	'admin' => "<span class='sms-icon glyphicon glyphicon-certificate' alt='" . _('Administrator') . "' title='" . _('Administrator') . "'></span>",
	'export' => "<span class='sms-icon glyphicon glyphicon-export' alt='" . _('Export') . "' title='" . _('Export') . "'></span>",
	'import' => "<span class='sms-icon glyphicon glyphicon-import' alt='" . _('Import') . "' title='" . _('Import') . "'></span>",
	'group' => "<span class='sms-icon glyphicon glyphicon-briefcase' alt='" . _('Group') . "' title='" . _('Group') . "'></span>",
	'move' => "<span class='sms-icon glyphicon glyphicon glyphicon-move' alt='" . _('Move') . "' title='" . _('Move') . "'></span>",
	'go' => "<span class='sms-icon glyphicon glyphicon-cog' alt='" . _('Go') . "' title='" . _('Go') . "'></span>",
	'online' => "<span class='sms-icon glyphicon glyphicon-ok-circle' alt='" . _('Online') . "' title='" . _('Online') . "'></span>",
	'offline' => "<span class='sms-icon glyphicon glyphicon-remove-circle' alt='" . _('Offline') . "' title='" . _('Offline') . "'></span>",
	'idle' => "<span class='sms-icon glyphicon glyphicon-time' alt='" . _('Idle') . "' title='" . _('Idle') . "'></span>",
	'ban' => "<span class='sms-icon glyphicon glyphicon-thumbs-down' alt='" . _('Ban') . "' title='" . _('Ban') . "'></span>",
	'unban' => "<span class='sms-icon glyphicon glyphicon-thumbs-up' alt='" . _('Unban') . "' title='" . _('Unban') . "'></span>",
	'logout' => "<span class='sms-icon glyphicon glyphicon-off' alt='" . _('Logout') . "' title='" . _('Logout') . "'></span>",
	'reduce' => "<span class='sms-icon glyphicon glyphicon-minus' alt='" . _('Reduce') . "' title='" . _('Reduce') . "'></span>",
	'buy' => "<span class='sms-icon glyphicon glyphicon-credit-card' alt='" . _('Buy') . "' title='" . _('Buy') . "'></span>",
	'login_as' => "<span class='sms-icon glyphicon glyphicon-adjust' alt='" . _('Login as') . "' title='" . _('Login as') . "'></span>",
);

// menu structure
    
    // menu tabs
$core_config['menutab'] = array(
	'home' => _('Home') ,
	'my_account' =>  _('Messages') ,
    'phonebook_group' =>  _('Phonebook') ,
	'reports' => _('Reports') ,
	'features' => _('Features') ,
	'settings' => _('Settings') ,
    'sender_id' => _('Senderid') ,
    'doc' => _('Doc') ,
    'support' => _('Support') ,
    'anchor_group' => $user_config['username'] ,
);
// anchor group tab
$menutab = $core_config['menutab']['anchor_group'];
$menu_config[$menutab][] = array(
     'index.php?app=main&inc=core_user&route=user_config&op=user_config',
     _('User configuration') ,
     1
);
$menu_config[$menutab][] = array(
     'index.php?app=main&inc=core_user&route=user_pref&op=user_pref',
     _('Preferences') ,
     1
);
// divider
$menu_config[$menutab][] = array(
     '#',
     '-',
     97
);
$menu_config[$menutab][] = array(
    'index.php?app=main&inc=core_auth&route=logout',
     _('Logout'),
    98
);
$menu_config[$menutab][] = array(
     'index.php?app=main&inc=feature_credit&op=credit_list',
     $ret .= '<span class="sms-icon glyphicon glyphicon-credit-card"></span><div id="submenu-credit-show">' . $credit . '</div>',
     99
);
// my account tab
$menutab = $core_config['menutab']['my_account'];
$menu_config[$menutab] = array(
array(
     'index.php?app=main&inc=core_sendsms&op=sendsms',
     _('Compose message') ,
     1
     ) ,
);
// settings tab
if (auth_isadmin()) {
	
	// admin settings
	$menutab = $core_config['menutab']['settings'];

	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_user&route=user_mgmnt&op=user_list',
		_('Manage account') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_acl&op=acl_list',
		_('Manage ACL') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_user&route=subuser_mgmnt&op=subuser_list',
		_('Manage subuser') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_sender_id&op=sender_id_list',
		_('Manage sender ID') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_main_config&op=main_config',
		_('Main configuration') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_gateway&op=gateway_list',
		_('Manage gateway and SMSC') ,
		3
	);
} else if ($user_config['status'] == 3) {
	
	// user menus
	$menutab = $core_config['menutab']['settings'];
	
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_user&route=subuser_mgmnt&op=subuser_list',
		_('Manage subuser') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_sender_id&op=sender_id_list',
		_('Manage sender ID') ,
		3
	);
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_site&op=site_config',
		_('Manage site') ,
		3
	);
} else if ($user_config['status'] == 4) {

	// subuser menus
	$menutab = $core_config['menutab']['settings'];
	
	$menu_config[$menutab][] = array(
		'index.php?app=main&inc=core_sender_id&op=sender_id_list',
		_('Manage sender ID') ,
		3
	);
	
}
