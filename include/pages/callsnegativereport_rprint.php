<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'talkTime',
'typingTime',
'totalCallTime',
'forCount' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'talkTime' => array( 'report_grid_field1' ),
'typingTime' => array( 'report_grid_field2' ),
'totalCallTime' => array( 'report_grid_field3' ),
'forCount' => array( 'report_grid_field12' ),
'dialerCampaign' => array( 'report_group_field' ),
'dialerList' => array( 'report_group_field1' ),
'callResult' => array( 'report_group_field2' ),
'dialerAgent' => array( 'report_group_field3' ),
'callDate' => array( 'report_group_field4' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'report_group_field3',
'report_group_field4',
'report_group_field',
'report_group_field1',
'report_group_field2',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field12' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'report_group_field3' => 'grid',
'report_group_field4' => 'grid',
'report_group_field' => 'grid',
'report_group_field1' => 'grid',
'report_group_field2' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field2' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field12' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field12' ),
'report_group_field' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field3',
'report_group_field4',
'report_group_field',
'report_group_field1',
'report_group_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field12' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field1' => array( 'field' => 'talkTime',
'type' => 'report_grid_field' ),
'report_grid_field2' => array( 'field' => 'typingTime',
'type' => 'report_grid_field' ),
'report_grid_field3' => array( 'field' => 'totalCallTime',
'type' => 'report_grid_field' ),
'report_grid_field12' => array( 'field' => 'forCount',
'type' => 'report_grid_field' ),
'report_group_field' => array( 'field' => 'dialerCampaign',
'type' => 'report_group_field' ),
'report_group_field1' => array( 'field' => 'dialerList',
'type' => 'report_group_field' ),
'report_group_field2' => array( 'field' => 'callResult',
'type' => 'report_group_field' ),
'report_group_field3' => array( 'field' => 'dialerAgent',
'type' => 'report_group_field' ),
'report_group_field4' => array( 'field' => 'callDate',
'type' => 'report_group_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>