<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'code' => array( 'totalsType' => '' ),
'description' => array( 'totalsType' => '' ),
'retailPrice' => array( 'totalsType' => '' ),
'costPrice' => array( 'totalsType' => '' ),
'details' => array( 'totalsType' => '' ),
'photo' => array( 'totalsType' => '' ),
'familyId' => array( 'totalsType' => '' ),
'itemCustomerId' => array( 'totalsType' => '' ),
'salesCategoryId' => array( 'totalsType' => '' ),
'isPackage' => array( 'totalsType' => '' ),
'itemWeight' => array( 'totalsType' => '' ),
'itemVolume' => array( 'totalsType' => '' ),
'itemCourierCost' => array( 'totalsType' => '' ),
'thumbnail' => array( 'totalsType' => '' ),
'salesComission' => array( 'totalsType' => '' ),
'itemDiscount' => array( 'totalsType' => '' ),
'itemShippingCost' => array( 'totalsType' => '' ),
'defaultSalesQty' => array( 'totalsType' => '' ),
'itemIsActive' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'code',
'description',
'retailPrice',
'costPrice',
'details',
'familyId',
'itemCustomerId',
'salesCategoryId',
'isPackage',
'itemWeight',
'itemVolume',
'itemCourierCost',
'salesComission',
'itemDiscount',
'itemShippingCost',
'defaultSalesQty',
'itemIsActive' ),
'exportFields' => array( 'code',
'description',
'retailPrice',
'costPrice',
'details',
'isPackage',
'itemWeight',
'itemVolume',
'itemCourierCost',
'familyId',
'salesCategoryId',
'itemCustomerId',
'salesComission',
'itemDiscount',
'itemShippingCost',
'defaultSalesQty',
'itemIsActive' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'code' => array( 'export_field1' ),
'description' => array( 'export_field2' ),
'retailPrice' => array( 'export_field3' ),
'costPrice' => array( 'export_field4' ),
'details' => array( 'export_field5' ),
'familyId' => array( 'export_field6' ),
'itemCustomerId' => array( 'export_field7' ),
'salesCategoryId' => array( 'export_field8' ),
'isPackage' => array( 'export_field9' ),
'itemWeight' => array( 'export_field10' ),
'itemVolume' => array( 'export_field11' ),
'itemCourierCost' => array( 'export_field12' ),
'salesComission' => array( 'export_field13' ),
'itemDiscount' => array( 'export_field14' ),
'itemShippingCost' => array( 'export_field15' ),
'defaultSalesQty' => array( 'export_field16' ),
'itemIsActive' => array( 'export_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field6',
'export_field8',
'export_field7',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field6' => 'grid',
'export_field8' => 'grid',
'export_field7' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_field17' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
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
'export_field14',
'export_field15',
'export_field16',
'export_field17' ) ),
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
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field6',
'export_field8',
'export_field7',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ),
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
'export_field1' => array( 'field' => 'code',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'description',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'retailPrice',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'costPrice',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'details',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'familyId',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'itemCustomerId',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'salesCategoryId',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'isPackage',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'itemWeight',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'itemVolume',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'itemCourierCost',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'salesComission',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'itemDiscount',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'itemShippingCost',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'defaultSalesQty',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'itemIsActive',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>