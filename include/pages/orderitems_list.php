<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => true,
'detailsAdd' => true,
'inlineEdit' => true,
'delete' => true,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => false,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'master' => array( 'dbo.Items' => array( 'preview' => true ),
'dbo.Calls' => array( 'preview' => false ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'callid' => array( 'totalsType' => '' ),
'itemid' => array( 'totalsType' => '' ),
'qty' => array( 'totalsType' => '' ),
'unitPrice' => array( 'totalsType' => '' ),
'totalPrice' => array( 'totalsType' => '' ),
'itemCode' => array( 'totalsType' => '' ),
'itemDescription' => array( 'totalsType' => '' ),
'discountPcnt' => array( 'totalsType' => '' ),
'shippingCost' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'itemid',
'qty',
'unitPrice',
'discountPcnt',
'totalPrice',
'shippingCost' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'discountPcnt',
'callid',
'id',
'shippingCost',
'itemDescription',
'itemCode',
'unitPrice',
'totalPrice',
'qty',
'itemid' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'itemid',
'qty',
'unitPrice',
'discountPcnt',
'totalPrice',
'shippingCost' ),
'inlineEditFields' => array( 'itemid',
'qty',
'unitPrice',
'discountPcnt',
'totalPrice',
'shippingCost' ),
'fieldItems' => array( 'itemid' => array( 'simple_grid_field11',
'simple_grid_field2' ),
'qty' => array( 'simple_grid_field12',
'simple_grid_field3' ),
'unitPrice' => array( 'simple_grid_field13',
'simple_grid_field4' ),
'discountPcnt' => array( 'simple_grid_field17',
'simple_grid_field8' ),
'totalPrice' => array( 'simple_grid_field14',
'simple_grid_field5' ),
'shippingCost' => array( 'grid_field_label1',
'grid_field1' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'left' => array( 'search_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'above-grid' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'custom_button',
'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field11',
'simple_grid_field2',
'simple_grid_field12',
'simple_grid_field3',
'simple_grid_field13',
'simple_grid_field4',
'simple_grid_field17',
'simple_grid_field8',
'simple_grid_field14',
'simple_grid_field5',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_field_label1',
'grid_field1' ) ),
'formXtTags' => array( 'top' => array( 'breadcrumb',
'mastertable_block' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'search_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'delete' => 'above-grid',
'custom_button' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field11' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field5' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'search_panel' => 5 ) ),
'itemsByType' => array( 'inline_add' => array( 'inline_add' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'delete' => array( 'delete' ),
'custom_button' => array( 'custom_button' ),
'details_found' => array( 'details_found' ),
'page_size' => array( 'page_size' ),
'pagination' => array( 'pagination' ),
'grid_field_label' => array( 'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field17',
'simple_grid_field14',
'grid_field_label1' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field8',
'simple_grid_field5',
'grid_field1' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_edit' => array( 'grid_edit' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'search_panel_field' => array( 'search_panel_field8',
'search_panel_field1',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field',
'search_panel_field9' ),
'edit_selected' => array( 'edit_selected' ),
'delete_selected' => array( 'delete_selected' ),
'-' => array( '-3',
'-4',
'-5',
'-',
'-1',
'-2' ),
'advsearch_link' => array( 'advsearch_link' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'master_info' => array( 'master_info' ),
'logo' => array( 'logo' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'itemid_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'qty_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'unitPrice_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'discountPcnt_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'shippingCost_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'totalPrice_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inlineedit_column',
'inline_save',
'inline_cancel' ),
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'itemid_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'qty_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'unitPrice_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'discountPcnt_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'shippingCost_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'totalPrice_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
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
'headcell_field9' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 8,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => true,
'customButtons' => array( 'updateOrderTotals1' ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'updateOrderTotals1' ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'custom_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'padding' => array( 'top' => '10px' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'padding' => array( 'top' => '10px' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field6' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'cell_field6' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'footcell_field6' ) ) ) ),
'cells' => array( 'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'itemid',
'columnName' => 'field',
'width' => '400px' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'itemid',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'qty',
'columnName' => 'field',
'width' => '50px',
'align' => 'center' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'qty',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'unitPrice',
'columnName' => 'field',
'width' => '50px',
'align' => 'center' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'unitPrice',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'discountPcnt',
'columnName' => 'field',
'width' => '50px',
'align' => 'center' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'discountPcnt',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'totalPrice',
'columnName' => 'field',
'align' => 'center',
'width' => '70px' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'totalPrice',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ),
'columnName' => 'checkbox' ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ),
'columnName' => 'checkbox' ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ),
'columnName' => 'checkbox' ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel' ),
'columnName' => 'list-icons' ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'width' => '50px',
'columnName' => 'field',
'field' => 'shippingCost' ),
'headcell_field8' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'columnName' => 'field',
'field' => 'shippingCost' ),
'headcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'inline_add' => array( 'type' => 'inline_add' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'delete' => array( 'type' => 'delete' ),
'custom_button' => array( 'type' => 'custom_button',
'eventId' => 'updateOrderTotals1',
'label' => array( 'text' => 'ΥΠΟΛΟΓΙΣΜΟΣ ΣΥΝΟΛΟΥ ΠΑΡΑΓΓΕΛΙΑΣ',
'type' => 0 ),
'buttonSize' => 'large' ),
'details_found' => array( 'type' => 'details_found' ),
'page_size' => array( 'type' => 'page_size' ),
'pagination' => array( 'type' => 'pagination' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'itemid',
'clickSort' => true ),
'simple_grid_field2' => array( 'field' => 'itemid',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true,
'width' => '395px' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'qty',
'clickSort' => true,
'label' => array( 'field' => 'qty',
'table' => 'dbo.orderItems',
'type' => 3 ) ),
'simple_grid_field3' => array( 'field' => 'qty',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true,
'width' => '45px' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'unitPrice',
'clickSort' => true,
'label' => array( 'field' => 'unitPrice',
'table' => 'dbo.orderItems',
'type' => 3 ) ),
'simple_grid_field4' => array( 'field' => 'unitPrice',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true,
'width' => '45px' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'discountPcnt',
'label' => array( 'field' => 'discountPcnt',
'table' => 'dbo.orderItems',
'type' => 3 ),
'clickSort' => true ),
'simple_grid_field8' => array( 'field' => 'discountPcnt',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'width' => '45px' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'totalPrice',
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'totalPrice',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true,
'width' => '65px',
'bold' => true ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => false ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 'shippingCost',
'label' => array( 'field' => 'shippingCost',
'table' => 'dbo.orderItems',
'type' => 3 ),
'clickSort' => true ),
'grid_field1' => array( 'field' => 'shippingCost',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'width' => '45px' ),
'search_panel_field8' => array( 'field' => 'discountPcnt',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field1' => array( 'field' => 'shippingCost',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'itemDescription',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field6' => array( 'field' => 'itemCode',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field5' => array( 'field' => 'unitPrice',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'totalPrice',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'qty',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'itemid',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'-3' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'-4' => array( 'type' => '-' ),
'-5' => array( 'type' => '-' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field8',
'search_panel_field9',
'search_panel_field',
'search_panel_field1',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2' ),
'_flexiblePanel' => true ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'edit_selected',
'delete_selected',
'-3',
'-2',
'-1',
'-',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-4',
'-5' ) ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'dbo.Items' => 'true' ) ),
'logo' => array( 'type' => 'logo' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'search_panel_field' => array( 'field' => 'id',
'type' => 'search_panel_field' ),
'search_panel_field9' => array( 'field' => 'callid',
'type' => 'search_panel_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>