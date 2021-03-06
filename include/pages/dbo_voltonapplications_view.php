<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'dbo.internalComments' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'dbo.Calls' => array( 'preview' => true ),
'dbo.CallsBackofficeView' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'applicantName',
'applicantIdNumber',
'applicantAddress',
'applicantPostalCode',
'applicantTaxRegistrationNumber',
'applicantTaxOffice',
'applicantEmail',
'applicantProfession',
'applicantKod',
'applicantGemi',
'applicantPhone',
'applicantMobile',
'contactName',
'contactPhone',
'contactMobile',
'contactEmail',
'legalName',
'legalIdNumber',
'mailAddress',
'mailPostalCode',
'powerAddress',
'powerOwnershipType',
'powerPostalCode',
'powerAgreedKw',
'powerSupplyNumber',
'powerMeterNumber',
'powerCurrentSupplier',
'powerCurrentDayMeter',
'powerCurrentNightMeter',
'powerActivationStatus',
'voltonPlan',
'voltonContractDuration',
'voltonWarrantyAmount',
'voltonWarrantyOnFirstBill',
'voltonOther',
'voltonComments',
'voltonAutoPayment',
'applicationType',
'applicantWorkPhone',
'document1',
'document2',
'document3',
'document4',
'document5',
'document6',
'document7',
'document8',
'document9',
'document10',
'document11',
'document12',
'document13',
'document14',
'document15' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'applicantName' => array( 'integrated_edit_field3' ),
'applicantIdNumber' => array( 'integrated_edit_field4' ),
'applicantAddress' => array( 'integrated_edit_field5' ),
'applicantPostalCode' => array( 'integrated_edit_field6' ),
'applicantTaxRegistrationNumber' => array( 'integrated_edit_field7' ),
'applicantTaxOffice' => array( 'integrated_edit_field8' ),
'applicantEmail' => array( 'integrated_edit_field9' ),
'applicantProfession' => array( 'integrated_edit_field10' ),
'applicantKod' => array( 'integrated_edit_field11' ),
'applicantGemi' => array( 'integrated_edit_field12' ),
'applicantPhone' => array( 'integrated_edit_field13' ),
'applicantMobile' => array( 'integrated_edit_field14' ),
'contactName' => array( 'integrated_edit_field15' ),
'contactPhone' => array( 'integrated_edit_field16' ),
'contactMobile' => array( 'integrated_edit_field17' ),
'contactEmail' => array( 'integrated_edit_field18' ),
'legalName' => array( 'integrated_edit_field19' ),
'legalIdNumber' => array( 'integrated_edit_field20' ),
'mailAddress' => array( 'integrated_edit_field21' ),
'mailPostalCode' => array( 'integrated_edit_field22' ),
'powerAddress' => array( 'integrated_edit_field24' ),
'powerOwnershipType' => array( 'integrated_edit_field25' ),
'powerPostalCode' => array( 'integrated_edit_field26' ),
'powerAgreedKw' => array( 'integrated_edit_field28' ),
'powerSupplyNumber' => array( 'integrated_edit_field29' ),
'powerMeterNumber' => array( 'integrated_edit_field30' ),
'powerCurrentSupplier' => array( 'integrated_edit_field31' ),
'powerCurrentDayMeter' => array( 'integrated_edit_field32' ),
'powerCurrentNightMeter' => array( 'integrated_edit_field33' ),
'powerActivationStatus' => array( 'integrated_edit_field34' ),
'voltonPlan' => array( 'integrated_edit_field35' ),
'voltonContractDuration' => array( 'integrated_edit_field36' ),
'voltonWarrantyAmount' => array( 'integrated_edit_field37' ),
'voltonWarrantyOnFirstBill' => array( 'integrated_edit_field38' ),
'voltonOther' => array( 'integrated_edit_field39' ),
'voltonComments' => array( 'integrated_edit_field40' ),
'voltonAutoPayment' => array( 'integrated_edit_field44' ),
'applicationType' => array( 'integrated_edit_field45' ),
'applicantWorkPhone' => array( 'integrated_edit_field46' ),
'document1' => array( 'integrated_edit_field47' ),
'document2' => array( 'integrated_edit_field48' ),
'document3' => array( 'integrated_edit_field49' ),
'document4' => array( 'integrated_edit_field50' ),
'document5' => array( 'integrated_edit_field51' ),
'document6' => array( 'integrated_edit_field52' ),
'document7' => array( 'integrated_edit_field53' ),
'document8' => array( 'integrated_edit_field54' ),
'document9' => array( 'integrated_edit_field55' ),
'document10' => array( 'integrated_edit_field56' ),
'document11' => array( 'integrated_edit_field57' ),
'document12' => array( 'integrated_edit_field58' ),
'document13' => array( 'integrated_edit_field59' ),
'document14' => array( 'integrated_edit_field60' ),
'document15' => array( 'integrated_edit_field61' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'master_info',
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
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'integrated_edit_field48',
'integrated_edit_field49',
'integrated_edit_field50',
'integrated_edit_field51',
'integrated_edit_field52',
'integrated_edit_field53',
'integrated_edit_field54',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'master_info' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field17' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field19' => 'grid',
'integrated_edit_field20' => 'grid',
'integrated_edit_field21' => 'grid',
'integrated_edit_field22' => 'grid',
'integrated_edit_field24' => 'grid',
'integrated_edit_field25' => 'grid',
'integrated_edit_field26' => 'grid',
'integrated_edit_field28' => 'grid',
'integrated_edit_field29' => 'grid',
'integrated_edit_field30' => 'grid',
'integrated_edit_field31' => 'grid',
'integrated_edit_field32' => 'grid',
'integrated_edit_field33' => 'grid',
'integrated_edit_field34' => 'grid',
'integrated_edit_field35' => 'grid',
'integrated_edit_field36' => 'grid',
'integrated_edit_field37' => 'grid',
'integrated_edit_field38' => 'grid',
'integrated_edit_field39' => 'grid',
'integrated_edit_field40' => 'grid',
'integrated_edit_field44' => 'grid',
'integrated_edit_field45' => 'grid',
'integrated_edit_field46' => 'grid',
'integrated_edit_field47' => 'grid',
'integrated_edit_field48' => 'grid',
'integrated_edit_field49' => 'grid',
'integrated_edit_field50' => 'grid',
'integrated_edit_field51' => 'grid',
'integrated_edit_field52' => 'grid',
'integrated_edit_field53' => 'grid',
'integrated_edit_field54' => 'grid',
'integrated_edit_field55' => 'grid',
'integrated_edit_field56' => 'grid',
'integrated_edit_field57' => 'grid',
'integrated_edit_field58' => 'grid',
'integrated_edit_field59' => 'grid',
'integrated_edit_field60' => 'grid',
'integrated_edit_field61' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field19' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field20' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field21' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field22' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field24' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field25' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field26' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field28' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field29' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field30' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field31' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field32' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field33' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field34' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field35' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field36' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field37' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field38' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field39' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field40' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field44' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field45' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field46' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field47' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field48' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field49' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field50' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field51' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field52' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field53' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field54' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field55' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field56' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field57' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field58' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field59' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field60' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field61' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'master_info' => array( 'master_info' ),
'integrated_edit_field' => array( 'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
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
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'integrated_edit_field48',
'integrated_edit_field49',
'integrated_edit_field50',
'integrated_edit_field51',
'integrated_edit_field52',
'integrated_edit_field53',
'integrated_edit_field54',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
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
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'integrated_edit_field48',
'integrated_edit_field49',
'integrated_edit_field50',
'integrated_edit_field51',
'integrated_edit_field52',
'integrated_edit_field53',
'integrated_edit_field54',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info',
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
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field38',
'integrated_edit_field39',
'integrated_edit_field40',
'integrated_edit_field44',
'integrated_edit_field45',
'integrated_edit_field46',
'integrated_edit_field47',
'integrated_edit_field48',
'integrated_edit_field49',
'integrated_edit_field50',
'integrated_edit_field51',
'integrated_edit_field52',
'integrated_edit_field53',
'integrated_edit_field54',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'dbo.Calls' => 'true' ) ),
'integrated_edit_field3' => array( 'field' => 'applicantName',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'applicantIdNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'applicantAddress',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'applicantPostalCode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'applicantTaxRegistrationNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'applicantTaxOffice',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'applicantEmail',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'applicantProfession',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'applicantKod',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'applicantGemi',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'applicantPhone',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'applicantMobile',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'contactName',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'contactPhone',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'contactMobile',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'contactEmail',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'legalName',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field20' => array( 'field' => 'legalIdNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field21' => array( 'field' => 'mailAddress',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field22' => array( 'field' => 'mailPostalCode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field24' => array( 'field' => 'powerAddress',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'powerOwnershipType',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field26' => array( 'field' => 'powerPostalCode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field28' => array( 'field' => 'powerAgreedKw',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field29' => array( 'field' => 'powerSupplyNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field30' => array( 'field' => 'powerMeterNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field31' => array( 'field' => 'powerCurrentSupplier',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field32' => array( 'field' => 'powerCurrentDayMeter',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field33' => array( 'field' => 'powerCurrentNightMeter',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field34' => array( 'field' => 'powerActivationStatus',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field35' => array( 'field' => 'voltonPlan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field36' => array( 'field' => 'voltonContractDuration',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field37' => array( 'field' => 'voltonWarrantyAmount',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field38' => array( 'field' => 'voltonWarrantyOnFirstBill',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field39' => array( 'field' => 'voltonOther',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field40' => array( 'field' => 'voltonComments',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field44' => array( 'field' => 'voltonAutoPayment',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field45' => array( 'field' => 'applicationType',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field46' => array( 'field' => 'applicantWorkPhone',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field47' => array( 'field' => 'document1',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field48' => array( 'field' => 'document2',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field49' => array( 'field' => 'document3',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field50' => array( 'field' => 'document4',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field51' => array( 'field' => 'document5',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field52' => array( 'field' => 'document6',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field53' => array( 'field' => 'document7',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field54' => array( 'field' => 'document8',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field55' => array( 'field' => 'document9',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field56' => array( 'field' => 'document10',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field57' => array( 'field' => 'document11',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field58' => array( 'field' => 'document12',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field59' => array( 'field' => 'document13',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field60' => array( 'field' => 'document14',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field61' => array( 'field' => 'document15',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>