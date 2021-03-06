<?php
			$optionsArray = array( 'details' => array( 'dbo.contactAddresses' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'firstName',
'lastName',
'phone1',
'phone1Type',
'phone2',
'phone2Type',
'phone3',
'phone3Type',
'mobile1',
'mobile2',
'address',
'postalCode',
'noCall',
'noCallDate',
'comments',
'agentMessage',
'isCompany',
'name',
'referenceCode',
'area',
'city',
'vatNumber',
'taxOffice',
'externalRefCode' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'firstName' => array( 'integrated_edit_field1' ),
'lastName' => array( 'integrated_edit_field2' ),
'phone1' => array( 'integrated_edit_field3' ),
'phone1Type' => array( 'integrated_edit_field4' ),
'phone2' => array( 'integrated_edit_field5' ),
'phone2Type' => array( 'integrated_edit_field6' ),
'phone3' => array( 'integrated_edit_field7' ),
'phone3Type' => array( 'integrated_edit_field8' ),
'mobile1' => array( 'integrated_edit_field9' ),
'mobile2' => array( 'integrated_edit_field10' ),
'address' => array( 'integrated_edit_field11' ),
'postalCode' => array( 'integrated_edit_field12' ),
'noCall' => array( 'integrated_edit_field14' ),
'noCallDate' => array( 'integrated_edit_field15' ),
'comments' => array( 'integrated_edit_field16' ),
'agentMessage' => array( 'integrated_edit_field17' ),
'isCompany' => array( 'integrated_edit_field18' ),
'name' => array( 'integrated_edit_field19' ),
'referenceCode' => array( 'integrated_edit_field20' ),
'area' => array( 'integrated_edit_field21' ),
'city' => array( 'integrated_edit_field22' ),
'vatNumber' => array( 'integrated_edit_field24' ),
'taxOffice' => array( 'integrated_edit_field25' ),
'externalRefCode' => array( 'integrated_edit_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field7',
'integrated_edit_field8',
'details_preview',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field20',
'integrated_edit_field19',
'integrated_edit_field12',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field18',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field9' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'update_records' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field20' => 'grid',
'integrated_edit_field19' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field21' => 'grid',
'integrated_edit_field22' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field17' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field24' => 'grid',
'integrated_edit_field25' => 'grid',
'integrated_edit_field9' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c13' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c14' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c19' ),
'integrated_edit_field20' => array( 'location' => 'grid',
'cellId' => 'c20' ),
'integrated_edit_field19' => array( 'location' => 'grid',
'cellId' => 'c21' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c23' ),
'integrated_edit_field21' => array( 'location' => 'grid',
'cellId' => 'c24' ),
'integrated_edit_field22' => array( 'location' => 'grid',
'cellId' => 'c25' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c28' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c29' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c32' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c33' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c36' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c40' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c43' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c43' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c45' ),
'integrated_edit_field24' => array( 'location' => 'grid',
'cellId' => 'c45' ),
'integrated_edit_field25' => array( 'location' => 'grid',
'cellId' => 'c45' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c41' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field' ),
'update_records' => array( 'update_records' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c11' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c45' => array( 'cols' => array( 3 ),
'rows' => array( 0,
1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field18',
'integrated_edit_field24',
'integrated_edit_field25' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field20' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c21' => array( 'cols' => array( 1,
2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 1,
2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c22' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c23' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c24' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c25' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field22' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c26' => array( 'cols' => array( 3 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c27' => array( 'cols' => array( 3 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c28' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c29' => array( 'cols' => array( 1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c30' => array( 'cols' => array( 2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c31' => array( 'cols' => array( 3 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c32' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c33' => array( 'cols' => array( 1 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c34' => array( 'cols' => array( 2 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c35' => array( 'cols' => array( 3 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 2 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 3 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c41' => array( 'cols' => array( 0 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c42' => array( 'cols' => array( 1 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c44' => array( 'cols' => array( 2 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c46' => array( 'cols' => array( 3 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 0 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c37' => array( 'cols' => array( 1 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c38' => array( 'cols' => array( 2 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c39' => array( 'cols' => array( 3 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c40' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 11 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c43' => array( 'cols' => array( 3 ),
'rows' => array( 11 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14',
'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c36' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 12 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 13 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 1 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 2 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 3 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 15 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array( 'update_records' => array( 'tag' => 'UPDATE_N_RECORDS',
'type' => 2 ) ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => true ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ),
array( 'cell' => 'c45',
'rowspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c20' ),
array( 'cell' => 'c21',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c15' ),
array( 'cell' => 'c16',
'colspan' => 2 ),
array( 'cell' => 'c18' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c19',
'colspan' => 3 ),
array( 'cell' => 'c22' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c23' ),
array( 'cell' => 'c24' ),
array( 'cell' => 'c25' ),
array( 'cell' => 'c26' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c17' ),
array( 'cell' => 'c27' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c28' ),
array( 'cell' => 'c29' ),
array( 'cell' => 'c30' ),
array( 'cell' => 'c31' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c32' ),
array( 'cell' => 'c33' ),
array( 'cell' => 'c34' ),
array( 'cell' => 'c35' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c41' ),
array( 'cell' => 'c42' ),
array( 'cell' => 'c44' ),
array( 'cell' => 'c46' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c14' ),
array( 'cell' => 'c37' ),
array( 'cell' => 'c38' ),
array( 'cell' => 'c39' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c40',
'colspan' => 3 ),
array( 'cell' => 'c43' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c36',
'colspan' => 4 ) ) ),
array( 'cells' => array( array( 'cell' => 'c6',
'colspan' => 4 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c5' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c6' => array( 'model' => 'c3',
'items' => array( 'details_preview' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c8' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c9' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c10' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c11' => array( 'model' => 'c3',
'items' => array(  ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c13' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c14' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c15' => array( 'model' => 'c3',
'items' => array(  ) ),
'c16' => array( 'model' => 'c3',
'items' => array(  ) ),
'c17' => array( 'model' => 'c3',
'items' => array(  ) ),
'c18' => array( 'model' => 'c3',
'items' => array(  ) ),
'c19' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field11' ) ),
'c20' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field20' ) ),
'c21' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field19' ) ),
'c22' => array( 'model' => 'c3',
'items' => array(  ) ),
'c23' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field12' ) ),
'c24' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field21' ) ),
'c25' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field22' ) ),
'c26' => array( 'model' => 'c3',
'items' => array(  ) ),
'c1' => array( 'model' => 'c3',
'items' => array(  ) ),
'c2' => array( 'model' => 'c3',
'items' => array(  ) ),
'c27' => array( 'model' => 'c3',
'items' => array(  ) ),
'c28' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c29' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c30' => array( 'model' => 'c3',
'items' => array(  ) ),
'c31' => array( 'model' => 'c3',
'items' => array(  ) ),
'c32' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c33' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ) ),
'c34' => array( 'model' => 'c3',
'items' => array(  ) ),
'c35' => array( 'model' => 'c3',
'items' => array(  ) ),
'c36' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field16' ) ),
'c40' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field17' ) ),
'c43' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field14',
'integrated_edit_field15' ) ),
'c44' => array( 'model' => 'c3',
'items' => array(  ) ),
'c45' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field18',
'integrated_edit_field24',
'integrated_edit_field25' ),
'border' => array( array( 'side' => '',
'width' => '1px',
'color' => '#220bf5' ) ) ),
'c37' => array( 'model' => 'c3',
'items' => array(  ) ),
'c38' => array( 'model' => 'c3',
'items' => array(  ) ),
'c39' => array( 'model' => 'c3',
'items' => array(  ) ),
'c41' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c42' => array( 'model' => 'c3',
'items' => array(  ) ),
'c46' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 4,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'integrated_edit_field1' => array( 'field' => 'firstName',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'lastName',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'phone1',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'phone1Type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'phone2',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'phone2Type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'phone3',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'phone3Type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field9' => array( 'field' => 'mobile1',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field10' => array( 'field' => 'mobile2',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field11' => array( 'field' => 'address',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'postalCode',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field14' => array( 'field' => 'noCall',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field15' => array( 'field' => 'noCallDate',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'update_records' => array( 'type' => 'update_records' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'dbo.contactAddresses',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field16' => array( 'field' => 'comments',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field17' => array( 'field' => 'agentMessage',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field18' => array( 'field' => 'isCompany',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field19' => array( 'field' => 'name',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field20' => array( 'field' => 'referenceCode',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field21' => array( 'field' => 'area',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field22' => array( 'field' => 'city',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field24' => array( 'field' => 'vatNumber',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field25' => array( 'field' => 'taxOffice',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field' => array( 'field' => 'externalRefCode',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>