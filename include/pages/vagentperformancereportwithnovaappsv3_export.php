<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'dialerPhone' => array( 'totalsType' => '' ),
'dialerAgent' => array( 'totalsType' => '' ),
'calldate' => array( 'totalsType' => '' ),
'dialerCampaign' => array( 'totalsType' => '' ),
'dialerList' => array( 'totalsType' => '' ),
'talkTime' => array( 'totalsType' => '' ),
'typingTime' => array( 'totalsType' => '' ),
'totalCallTime' => array( 'totalsType' => '' ),
'callStatus' => array( 'totalsType' => '' ),
'salesStatus' => array( 'totalsType' => '' ),
'callClassificationID' => array( 'totalsType' => '' ),
'callSubClassificationID' => array( 'totalsType' => '' ),
'totalAppsQty' => array( 'totalsType' => '' ),
'statusAppsCount' => array( 'totalsType' => '' ),
'appStatusRatioInCall' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'dialerPhone',
'dialerAgent',
'calldate',
'totalAppsQty',
'dialerCampaign',
'statusAppsCount',
'appStatusRatioInCall',
'dialerList',
'talkTime',
'typingTime',
'totalCallTime',
'callStatus',
'salesStatus',
'callClassificationID',
'callSubClassificationID' ),
'exportFields' => array( 'id',
'dialerPhone',
'totalAppsQty',
'statusAppsCount',
'appStatusRatioInCall',
'dialerAgent',
'calldate',
'dialerCampaign',
'dialerList',
'talkTime',
'typingTime',
'totalCallTime',
'callStatus',
'salesStatus',
'callClassificationID',
'callSubClassificationID' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'export_field' ),
'dialerPhone' => array( 'export_field1' ),
'dialerAgent' => array( 'export_field2' ),
'calldate' => array( 'export_field3' ),
'totalAppsQty' => array( 'export_field4' ),
'dialerCampaign' => array( 'export_field5' ),
'statusAppsCount' => array( 'export_field6' ),
'appStatusRatioInCall' => array( 'export_field7' ),
'dialerList' => array( 'export_field8' ),
'talkTime' => array( 'export_field9' ),
'typingTime' => array( 'export_field10' ),
'totalCallTime' => array( 'export_field11' ),
'callStatus' => array( 'export_field12' ),
'salesStatus' => array( 'export_field13' ),
'callClassificationID' => array( 'export_field15' ),
'callSubClassificationID' => array( 'export_field16' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field4',
'export_field6',
'export_field7',
'export_field2',
'export_field3',
'export_field5',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field16' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field4' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field5' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field16' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field4',
'export_field6',
'export_field7',
'export_field2',
'export_field3',
'export_field5',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field16' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'dialerPhone',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'dialerAgent',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'calldate',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'totalAppsQty',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'dialerCampaign',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'statusAppsCount',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'appStatusRatioInCall',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'dialerList',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'talkTime',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'typingTime',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'totalCallTime',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'callStatus',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'salesStatus',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'callClassificationID',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'callSubClassificationID',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>