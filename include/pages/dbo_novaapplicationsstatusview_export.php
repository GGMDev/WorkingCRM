<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'callphone' => array( 'totalsType' => '' ),
'agent' => array( 'totalsType' => '' ),
'dialerCampaign' => array( 'totalsType' => '' ),
'dialerList' => array( 'totalsType' => '' ),
'callDate' => array( 'totalsType' => '' ),
'agentApplicationStatus' => array( 'totalsType' => '' ),
'applicationStatusId' => array( 'totalsType' => '' ),
'applicationPhaseStatusId' => array( 'totalsType' => '' ),
'lastStatusDate' => array( 'totalsType' => '' ),
'applicationAge' => array( 'totalsType' => '' ),
'forCount' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'applicationStatusId',
'forCount',
'applicationAge',
'lastStatusDate',
'applicationPhaseStatusId',
'agentApplicationStatus',
'callDate',
'dialerList',
'dialerCampaign',
'agent',
'callphone' ),
'exportFields' => array( 'applicationStatusId',
'callphone',
'agent',
'dialerCampaign',
'dialerList',
'callDate',
'agentApplicationStatus',
'applicationPhaseStatusId',
'lastStatusDate',
'applicationAge',
'forCount' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'applicationStatusId' => array( 'export_field2' ),
'forCount' => array( 'export_field11' ),
'applicationAge' => array( 'export_field10' ),
'lastStatusDate' => array( 'export_field9' ),
'applicationPhaseStatusId' => array( 'export_field8' ),
'agentApplicationStatus' => array( 'export_field7' ),
'callDate' => array( 'export_field6' ),
'dialerList' => array( 'export_field5' ),
'dialerCampaign' => array( 'export_field4' ),
'agent' => array( 'export_field3' ),
'callphone' => array( 'export_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field2',
'export_field1',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field2' => 'grid',
'export_field1' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field2',
'export_field11',
'export_field10',
'export_field9',
'export_field8',
'export_field7',
'export_field6',
'export_field5',
'export_field4',
'export_field3',
'export_field1' ) ),
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
'selectFields' => true,
'delimiter' => ',',
'selectDelimiter' => true,
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
'items' => array( 'export_field2',
'export_field1',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
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
'export_field2' => array( 'field' => 'applicationStatusId',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'forCount',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'applicationAge',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'lastStatusDate',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'applicationPhaseStatusId',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'agentApplicationStatus',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'callDate',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'dialerList',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'dialerCampaign',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'agent',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'callphone',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => true,
'exportSelectFields' => true );
		?>