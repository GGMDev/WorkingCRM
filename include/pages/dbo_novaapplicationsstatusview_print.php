<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'callphone' => array( 'totalsType' => '' ),
'agent' => array( 'totalsType' => '' ),
'dialerCampaign' => array( 'totalsType' => '' ),
'dialerList' => array( 'totalsType' => '' ),
'callDate' => array( 'totalsType' => '' ),
'agentApplicationStatus' => array( 'totalsType' => '' ),
'applicationStatusId' => array( 'totalsType' => 'COUNT' ),
'applicationPhaseStatusId' => array( 'totalsType' => '' ),
'lastStatusDate' => array( 'totalsType' => '' ),
'applicationAge' => array( 'totalsType' => '' ),
'forCount' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'applicationStatusId',
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
'fieldItems' => array( 'applicationStatusId' => array( 'simple_grid_field2',
'simple_grid_field',
'simple_grid_field12' ),
'callphone' => array( 'simple_grid_field1',
'simple_grid_field13' ),
'agent' => array( 'simple_grid_field3',
'simple_grid_field14' ),
'dialerCampaign' => array( 'simple_grid_field4',
'simple_grid_field15' ),
'dialerList' => array( 'simple_grid_field5',
'simple_grid_field16' ),
'callDate' => array( 'simple_grid_field6',
'simple_grid_field17' ),
'agentApplicationStatus' => array( 'simple_grid_field7',
'simple_grid_field18' ),
'applicationPhaseStatusId' => array( 'simple_grid_field8',
'simple_grid_field19' ),
'lastStatusDate' => array( 'simple_grid_field9',
'simple_grid_field20' ),
'applicationAge' => array( 'simple_grid_field10',
'simple_grid_field21' ),
'forCount' => array( 'simple_grid_field11',
'simple_grid_field22' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'print_pdf',
'master_info' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field',
'simple_grid_field2',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field1',
'simple_grid_field14',
'simple_grid_field3',
'simple_grid_field15',
'simple_grid_field4',
'simple_grid_field16',
'simple_grid_field5',
'simple_grid_field17',
'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field7',
'simple_grid_field19',
'simple_grid_field8',
'simple_grid_field20',
'simple_grid_field9',
'simple_grid_field21',
'simple_grid_field10',
'simple_grid_field22',
'simple_grid_field11' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'master_info' => 'top',
'print_pages' => 'above-grid',
'simple_grid_field' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field11' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'footcell_field' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'print_pdf' => array( 'print_pdf' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22' ),
'grid_field_totals' => array( 'simple_grid_field12' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'applicationStatusId_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'callphone_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'agent_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'dialerCampaign_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'dialerList_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'callDate_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'agentApplicationStatus_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'applicationPhaseStatusId_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'lastStatusDate_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'applicationAge_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'forCount_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'applicationStatusId_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'callphone_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'agent_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'dialerCampaign_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'dialerList_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'callDate_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'agentApplicationStatus_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'applicationPhaseStatusId_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'lastStatusDate_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'applicationAge_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'forCount_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'applicationStatusId_fieldfootercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 11,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ),
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
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'applicationStatusId',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'applicationStatusId',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'applicationStatusId',
'columnName' => 'field' ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'callphone',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'callphone',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'agent',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'agent',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'dialerCampaign',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'dialerCampaign',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'dialerList',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'dialerList',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'callDate',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'callDate',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'agentApplicationStatus',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'agentApplicationStatus',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'applicationPhaseStatusId',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'applicationPhaseStatusId',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'lastStatusDate',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'lastStatusDate',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'applicationAge',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'applicationAge',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'forCount',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'forCount',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'dbo.Calls' => 'true',
'dbo.CallsBackofficeView' => 'true' ) ),
'simple_grid_field2' => array( 'field' => 'applicationStatusId',
'type' => 'grid_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'applicationStatusId' ),
'simple_grid_field12' => array( 'type' => 'grid_field_totals',
'field' => 'applicationStatusId',
'totals' => 'COUNT' ),
'simple_grid_field1' => array( 'field' => 'callphone',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'callphone' ),
'simple_grid_field3' => array( 'field' => 'agent',
'type' => 'grid_field' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'agent' ),
'simple_grid_field4' => array( 'field' => 'dialerCampaign',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'dialerCampaign' ),
'simple_grid_field5' => array( 'field' => 'dialerList',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'dialerList' ),
'simple_grid_field6' => array( 'field' => 'callDate',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'callDate' ),
'simple_grid_field7' => array( 'field' => 'agentApplicationStatus',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'agentApplicationStatus' ),
'simple_grid_field8' => array( 'field' => 'applicationPhaseStatusId',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'applicationPhaseStatusId' ),
'simple_grid_field9' => array( 'field' => 'lastStatusDate',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'lastStatusDate' ),
'simple_grid_field10' => array( 'field' => 'applicationAge',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'applicationAge' ),
'simple_grid_field11' => array( 'field' => 'forCount',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'forCount' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>