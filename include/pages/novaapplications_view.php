<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'dbo.internalComments' => array( 'displayPreview' => 1 ) ),
'master' => array( 'dbo.Calls' => array( 'preview' => true ),
'dbo.CallsBackofficeView' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'callid',
'applicationStatusId',
'applicationType',
'applicantName',
'applicantFirstName',
'applicantBirthdate',
'applicantProfession',
'applicantIdNumber',
'applicantAddress',
'applicantPostalCode',
'applicantArea',
'applicantCity',
'applicantTaxRegistrationNumber',
'applicantTaxOffice',
'applicantPhone',
'applicantMobile',
'applicantEmail',
'standAloneProgram',
'doublePlayProgram',
'triplePlayProgram',
'triplePlayProgramType',
'additionalServiceInternet',
'additionalServiceInternetSpeed',
'additionalServiceInternationalCalls',
'additionalServiceStaticIp',
'additionalServiceStaticBlock8Ip',
'additionalServiceSecondLine',
'additionalServiceLandLine1000Minutes',
'additionalServiceEquipment',
'additionalServiceEquipmentInstallation',
'portabilityIsNewLine',
'portabilityOldNumber',
'portabilityOldOwner',
'portabilityActivationAddress',
'portabilityActivationPostalCode',
'portabilityActivationArea',
'portabilityActivationCity',
'portabilityPstnIsdn',
'portabilityLine1PhoneNumber',
'portabilityLine2PhoneNumber',
'portabilityLine3PhoneNumber',
'portabilityLine4PhoneNumber',
'portabilityUsername1',
'portabilityusername2',
'documentIdPassport',
'documentIdPassportPreviousOwner',
'documentLastBill',
'documentAddressValidation',
'documentDeathCertificate',
'documentAuthorization',
'documentOther',
'documentOtherType',
'id',
'ProgramSpeed',
'applicationAgentStatus',
'applicationLastStatusDate',
'applicationContactMethod',
'applicationCourier',
'applicationCourierDate',
'applicationCourierTimeFrom',
'applicationCourierTimeTo',
'applicationCourierComments',
'dialerAgent',
'adittionalServiceMobileNoLimit',
'additionalServiceEONMultiScreen',
'additionalServiceNovaMultiroom',
'additionalServiceAdultPack' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'callid' => array( 'integrated_edit_field1' ),
'applicationStatusId' => array( 'integrated_edit_field2' ),
'applicationType' => array( 'integrated_edit_field3' ),
'applicantName' => array( 'integrated_edit_field4' ),
'applicantFirstName' => array( 'integrated_edit_field5' ),
'applicantBirthdate' => array( 'integrated_edit_field6' ),
'applicantProfession' => array( 'integrated_edit_field7' ),
'applicantIdNumber' => array( 'integrated_edit_field8' ),
'applicantAddress' => array( 'integrated_edit_field9' ),
'applicantPostalCode' => array( 'integrated_edit_field10' ),
'applicantArea' => array( 'integrated_edit_field11' ),
'applicantCity' => array( 'integrated_edit_field12' ),
'applicantTaxRegistrationNumber' => array( 'integrated_edit_field13' ),
'applicantTaxOffice' => array( 'integrated_edit_field14' ),
'applicantPhone' => array( 'integrated_edit_field15' ),
'applicantMobile' => array( 'integrated_edit_field16' ),
'applicantEmail' => array( 'integrated_edit_field17' ),
'standAloneProgram' => array( 'integrated_edit_field18' ),
'doublePlayProgram' => array( 'integrated_edit_field19' ),
'triplePlayProgram' => array( 'integrated_edit_field21' ),
'triplePlayProgramType' => array( 'integrated_edit_field22' ),
'additionalServiceInternet' => array( 'integrated_edit_field24' ),
'additionalServiceInternetSpeed' => array( 'integrated_edit_field25' ),
'additionalServiceInternationalCalls' => array( 'integrated_edit_field26' ),
'additionalServiceStaticIp' => array( 'integrated_edit_field27' ),
'additionalServiceStaticBlock8Ip' => array( 'integrated_edit_field28' ),
'additionalServiceSecondLine' => array( 'integrated_edit_field29' ),
'additionalServiceLandLine1000Minutes' => array( 'integrated_edit_field30' ),
'additionalServiceEquipment' => array( 'integrated_edit_field31' ),
'additionalServiceEquipmentInstallation' => array( 'integrated_edit_field32' ),
'portabilityIsNewLine' => array( 'integrated_edit_field33' ),
'portabilityOldNumber' => array( 'integrated_edit_field34' ),
'portabilityOldOwner' => array( 'integrated_edit_field35' ),
'portabilityActivationAddress' => array( 'integrated_edit_field36' ),
'portabilityActivationPostalCode' => array( 'integrated_edit_field37' ),
'portabilityActivationArea' => array( 'integrated_edit_field38' ),
'portabilityActivationCity' => array( 'integrated_edit_field39' ),
'portabilityPstnIsdn' => array( 'integrated_edit_field40' ),
'portabilityLine1PhoneNumber' => array( 'integrated_edit_field41' ),
'portabilityLine2PhoneNumber' => array( 'integrated_edit_field42' ),
'portabilityLine3PhoneNumber' => array( 'integrated_edit_field43' ),
'portabilityLine4PhoneNumber' => array( 'integrated_edit_field44' ),
'portabilityUsername1' => array( 'integrated_edit_field45' ),
'portabilityusername2' => array( 'integrated_edit_field46' ),
'documentIdPassport' => array( 'integrated_edit_field47' ),
'documentIdPassportPreviousOwner' => array( 'integrated_edit_field48' ),
'documentLastBill' => array( 'integrated_edit_field49' ),
'documentAddressValidation' => array( 'integrated_edit_field50' ),
'documentDeathCertificate' => array( 'integrated_edit_field51' ),
'documentAuthorization' => array( 'integrated_edit_field52' ),
'documentOther' => array( 'integrated_edit_field53' ),
'documentOtherType' => array( 'integrated_edit_field54' ),
'id' => array( 'integrated_edit_field' ),
'ProgramSpeed' => array( 'integrated_edit_field20' ),
'applicationAgentStatus' => array( 'integrated_edit_field23' ),
'applicationLastStatusDate' => array( 'integrated_edit_field55' ),
'applicationContactMethod' => array( 'integrated_edit_field56' ),
'applicationCourier' => array( 'integrated_edit_field57' ),
'applicationCourierDate' => array( 'integrated_edit_field58' ),
'applicationCourierTimeFrom' => array( 'integrated_edit_field59' ),
'applicationCourierTimeTo' => array( 'integrated_edit_field60' ),
'applicationCourierComments' => array( 'integrated_edit_field61' ),
'dialerAgent' => array( 'integrated_edit_field62' ),
'adittionalServiceMobileNoLimit' => array( 'integrated_edit_field63' ),
'additionalServiceEONMultiScreen' => array( 'integrated_edit_field64' ),
'additionalServiceNovaMultiroom' => array( 'integrated_edit_field65' ),
'additionalServiceAdultPack' => array( 'integrated_edit_field66' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'master_info',
'integrated_edit_field1',
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
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
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
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
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
'integrated_edit_field',
'integrated_edit_field20',
'details_preview',
'integrated_edit_field23',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61',
'integrated_edit_field62',
'integrated_edit_field63',
'integrated_edit_field64',
'integrated_edit_field65',
'integrated_edit_field66' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'master_info' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
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
'integrated_edit_field13' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field17' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field19' => 'grid',
'integrated_edit_field21' => 'grid',
'integrated_edit_field22' => 'grid',
'integrated_edit_field24' => 'grid',
'integrated_edit_field25' => 'grid',
'integrated_edit_field26' => 'grid',
'integrated_edit_field27' => 'grid',
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
'integrated_edit_field41' => 'grid',
'integrated_edit_field42' => 'grid',
'integrated_edit_field43' => 'grid',
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
'integrated_edit_field' => 'grid',
'integrated_edit_field20' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field23' => 'grid',
'integrated_edit_field55' => 'grid',
'integrated_edit_field56' => 'grid',
'integrated_edit_field57' => 'grid',
'integrated_edit_field58' => 'grid',
'integrated_edit_field59' => 'grid',
'integrated_edit_field60' => 'grid',
'integrated_edit_field61' => 'grid',
'integrated_edit_field62' => 'grid',
'integrated_edit_field63' => 'grid',
'integrated_edit_field64' => 'grid',
'integrated_edit_field65' => 'grid',
'integrated_edit_field66' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
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
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field19' => array( 'location' => 'grid',
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
'integrated_edit_field27' => array( 'location' => 'grid',
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
'integrated_edit_field41' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field42' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field43' => array( 'location' => 'grid',
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
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field20' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field23' => array( 'location' => 'grid',
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
'cellId' => 'c3' ),
'integrated_edit_field62' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field63' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field64' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field65' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field66' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'hamburger' => array( 'hamburger' ),
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
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
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
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
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
'integrated_edit_field',
'integrated_edit_field20',
'integrated_edit_field23',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61',
'integrated_edit_field62',
'integrated_edit_field63',
'integrated_edit_field64',
'integrated_edit_field65',
'integrated_edit_field66' ),
'view_edit' => array( 'view_edit' ),
'view_pdf' => array( 'view_pdf' ),
'master_info' => array( 'master_info' ),
'details_preview' => array( 'details_preview' ),
'username_button' => array( 'username_button' ),
'adminarea_link' => array( 'adminarea_link' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field1',
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
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
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
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
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
'integrated_edit_field',
'integrated_edit_field20',
'details_preview',
'integrated_edit_field23',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61',
'integrated_edit_field62',
'integrated_edit_field63',
'integrated_edit_field64',
'integrated_edit_field65',
'integrated_edit_field66' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 1 ),
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
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
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
'integrated_edit_field1',
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
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field21',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
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
'integrated_edit_field41',
'integrated_edit_field42',
'integrated_edit_field43',
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
'integrated_edit_field',
'integrated_edit_field20',
'details_preview',
'integrated_edit_field23',
'integrated_edit_field55',
'integrated_edit_field56',
'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60',
'integrated_edit_field61',
'integrated_edit_field62',
'integrated_edit_field63',
'integrated_edit_field64',
'integrated_edit_field65',
'integrated_edit_field66' ),
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
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'integrated_edit_field1' => array( 'field' => 'callid',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'applicationStatusId',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'applicationType',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'applicantName',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'applicantFirstName',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'applicantBirthdate',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'applicantProfession',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'applicantIdNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'applicantAddress',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'applicantPostalCode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'applicantArea',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'applicantCity',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'applicantTaxRegistrationNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'applicantTaxOffice',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'applicantPhone',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'applicantMobile',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'applicantEmail',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'standAloneProgram',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'doublePlayProgram',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field21' => array( 'field' => 'triplePlayProgram',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field22' => array( 'field' => 'triplePlayProgramType',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field24' => array( 'field' => 'additionalServiceInternet',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'additionalServiceInternetSpeed',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field26' => array( 'field' => 'additionalServiceInternationalCalls',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field27' => array( 'field' => 'additionalServiceStaticIp',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field28' => array( 'field' => 'additionalServiceStaticBlock8Ip',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field29' => array( 'field' => 'additionalServiceSecondLine',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field30' => array( 'field' => 'additionalServiceLandLine1000Minutes',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field31' => array( 'field' => 'additionalServiceEquipment',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field32' => array( 'field' => 'additionalServiceEquipmentInstallation',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field33' => array( 'field' => 'portabilityIsNewLine',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field34' => array( 'field' => 'portabilityOldNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field35' => array( 'field' => 'portabilityOldOwner',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field36' => array( 'field' => 'portabilityActivationAddress',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field37' => array( 'field' => 'portabilityActivationPostalCode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field38' => array( 'field' => 'portabilityActivationArea',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field39' => array( 'field' => 'portabilityActivationCity',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field40' => array( 'field' => 'portabilityPstnIsdn',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field41' => array( 'field' => 'portabilityLine1PhoneNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field42' => array( 'field' => 'portabilityLine2PhoneNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field43' => array( 'field' => 'portabilityLine3PhoneNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field44' => array( 'field' => 'portabilityLine4PhoneNumber',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field45' => array( 'field' => 'portabilityUsername1',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field46' => array( 'field' => 'portabilityusername2',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field47' => array( 'field' => 'documentIdPassport',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field48' => array( 'field' => 'documentIdPassportPreviousOwner',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field49' => array( 'field' => 'documentLastBill',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field50' => array( 'field' => 'documentAddressValidation',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field51' => array( 'field' => 'documentDeathCertificate',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field52' => array( 'field' => 'documentAuthorization',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field53' => array( 'field' => 'documentOther',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field54' => array( 'field' => 'documentOtherType',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'view_edit' => array( 'type' => 'view_edit' ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'integrated_edit_field' => array( 'field' => 'id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field20' => array( 'field' => 'ProgramSpeed',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'dbo.Calls' => 'true' ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'dbo.internalComments',
'items' => array(  ),
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'logout_link' => array( 'type' => 'logout_link' ),
'integrated_edit_field23' => array( 'field' => 'applicationAgentStatus',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field55' => array( 'field' => 'applicationLastStatusDate',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field56' => array( 'field' => 'applicationContactMethod',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field57' => array( 'field' => 'applicationCourier',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field58' => array( 'field' => 'applicationCourierDate',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field59' => array( 'field' => 'applicationCourierTimeFrom',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field60' => array( 'field' => 'applicationCourierTimeTo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field61' => array( 'field' => 'applicationCourierComments',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field62' => array( 'field' => 'dialerAgent',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field63' => array( 'field' => 'adittionalServiceMobileNoLimit',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field64' => array( 'field' => 'additionalServiceEONMultiScreen',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field65' => array( 'field' => 'additionalServiceNovaMultiroom',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field66' => array( 'field' => 'additionalServiceAdultPack',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>