<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'image' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'agentStatus' => array( 'menutItem' => false ),
'custom_button_container' => array( 'menutItem' => false ),
'list_options' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'image',
'menu',
'agentStatus',
'custom_button_container',
'list_options',
'username_button',
'loginform_login' ),
'above-grid' => array(  ),
'grid' => array(  ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'grid' => array(  ) ),
'itemForms' => array( 'image' => 'supertop',
'menu' => 'supertop',
'agentStatus' => 'supertop',
'custom_button_container' => 'supertop',
'list_options' => 'supertop',
'username_button' => 'supertop',
'loginform_login' => 'supertop' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'list_options' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'menu' => array( 'menu' ),
'list_options' => array( 'list_options' ),
'image' => array( 'image' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'custom_button_container' => array( 'custom_button_container' ),
'custom_button' => array( 'custom_button',
'custom_button1',
'custom_button2',
'custom_button3',
'custom_button4',
'custom_button5',
'custom_button6' ),
'text' => array( 'agentStatus' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'Active',
'pauseManualCall',
'pauseLunch',
'pauseWC',
'pauseBackoffice',
'pauseEmail',
'pauseReport' ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'Active',
'pauseManualCall',
'pauseLunch',
'pauseWC',
'pauseBackoffice',
'pauseEmail',
'pauseReport' ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'agentStatus',
'custom_button_container',
'list_options',
'username_button',
'loginform_login' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'center' ),
'c2' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'menu' => array( 'type' => 'menu' ),
'list_options' => array( 'type' => 'list_options',
'items' => array(  ) ),
'image' => array( 'type' => 'image',
'imagePath' => 'ggm logo small.jpg',
'width' => '80px' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'logout_link' => array( 'type' => 'logout_link',
'padding' => array( 'top' => '10px' ),
'bold' => true ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'custom_button_container' => array( 'type' => 'custom_button_container',
'items' => array( 'custom_button1',
'custom_button3',
'custom_button2',
'custom_button4',
'custom_button5',
'custom_button6',
'custom_button' ),
'label' => array( 'type' => 0,
'text' => 'Agent Status' ) ),
'custom_button' => array( 'eventId' => 'Active',
'label' => array( 'text' => 'Active',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ),
'color' => '#278100',
'bold' => true ),
'custom_button1' => array( 'eventId' => 'pauseManualCall',
'label' => array( 'text' => 'Pause>>Manual Κλήση',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ) ),
'custom_button2' => array( 'eventId' => 'pauseLunch',
'label' => array( 'text' => 'Pause>>Lunch',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ) ),
'custom_button3' => array( 'eventId' => 'pauseWC',
'label' => array( 'text' => 'Pause>>WC',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ) ),
'custom_button4' => array( 'eventId' => 'pauseBackoffice',
'label' => array( 'text' => 'Pause>>Backoffice',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ) ),
'custom_button5' => array( 'eventId' => 'pauseEmail',
'label' => array( 'text' => 'Pause>>Email',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ) ),
'custom_button6' => array( 'eventId' => 'pauseReport',
'label' => array( 'text' => 'Pause>>Report',
'type' => 0 ),
'type' => 'custom_button',
'padding' => array( 'top' => '5px' ) ),
'agentStatus' => array( 'type' => 'text',
'label' => array( 'text' => 'agentStatus',
'type' => 0 ),
'editedByRte' => false,
'bold' => true,
'font-size' => '12px' ) ),
'dbProps' => array(  ),
'version' => 4,
'menuWidth' => 'full',
'pageAlign' => 'center',
'fixedTopbar' => true );
		?>