<?php
$tdatacallsbackofficeview = array();
$tdatacallsbackofficeview[".searchableFields"] = array();
$tdatacallsbackofficeview[".ShortName"] = "callsbackofficeview";
$tdatacallsbackofficeview[".OwnerID"] = "dialerAgent";
$tdatacallsbackofficeview[".OriginalTable"] = "dbo.Calls";


$tdatacallsbackofficeview[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacallsbackofficeview[".originalPagesByType"] = $tdatacallsbackofficeview[".pagesByType"];
$tdatacallsbackofficeview[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacallsbackofficeview[".originalPages"] = $tdatacallsbackofficeview[".pages"];
$tdatacallsbackofficeview[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacallsbackofficeview[".originalDefaultPages"] = $tdatacallsbackofficeview[".defaultPages"];

//	field labels
$fieldLabelscallsbackofficeview = array();
$fieldToolTipscallsbackofficeview = array();
$pageTitlescallsbackofficeview = array();
$placeHolderscallsbackofficeview = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallsbackofficeview["Greek"] = array();
	$fieldToolTipscallsbackofficeview["Greek"] = array();
	$placeHolderscallsbackofficeview["Greek"] = array();
	$pageTitlescallsbackofficeview["Greek"] = array();
	$fieldLabelscallsbackofficeview["Greek"]["id"] = "Id";
	$fieldToolTipscallsbackofficeview["Greek"]["id"] = "";
	$placeHolderscallsbackofficeview["Greek"]["id"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["broadcast"] = "Εκπομπή";
	$fieldToolTipscallsbackofficeview["Greek"]["broadcast"] = "";
	$placeHolderscallsbackofficeview["Greek"]["broadcast"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["tvchannel"] = "Κανάλι";
	$fieldToolTipscallsbackofficeview["Greek"]["tvchannel"] = "";
	$placeHolderscallsbackofficeview["Greek"]["tvchannel"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["seller"] = "Πωλητής";
	$fieldToolTipscallsbackofficeview["Greek"]["seller"] = "";
	$placeHolderscallsbackofficeview["Greek"]["seller"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["remarks"] = "Σχόλιο Αποτελέσματος";
	$fieldToolTipscallsbackofficeview["Greek"]["remarks"] = "";
	$placeHolderscallsbackofficeview["Greek"]["remarks"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["redialDate"] = "Ημ/νία Επανάκλησης";
	$fieldToolTipscallsbackofficeview["Greek"]["redialDate"] = "";
	$placeHolderscallsbackofficeview["Greek"]["redialDate"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["redialComments"] = "Σχόλια Επανάκλησης";
	$fieldToolTipscallsbackofficeview["Greek"]["redialComments"] = "";
	$placeHolderscallsbackofficeview["Greek"]["redialComments"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["redialIsPrivate"] = "Προσωπική";
	$fieldToolTipscallsbackofficeview["Greek"]["redialIsPrivate"] = "";
	$placeHolderscallsbackofficeview["Greek"]["redialIsPrivate"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["redialDone"] = "Έγινε Επανάκληση";
	$fieldToolTipscallsbackofficeview["Greek"]["redialDone"] = "";
	$placeHolderscallsbackofficeview["Greek"]["redialDone"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactMethod"] = "Τρόπος Παραλαβής";
	$fieldToolTipscallsbackofficeview["Greek"]["contactMethod"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactMethod"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["courier"] = "Courier";
	$fieldToolTipscallsbackofficeview["Greek"]["courier"] = "";
	$placeHolderscallsbackofficeview["Greek"]["courier"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["courierDeliveryDate"] = "Ημ/νία Ραντεβού";
	$fieldToolTipscallsbackofficeview["Greek"]["courierDeliveryDate"] = "";
	$placeHolderscallsbackofficeview["Greek"]["courierDeliveryDate"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["courierTimeFrom"] = "Από";
	$fieldToolTipscallsbackofficeview["Greek"]["courierTimeFrom"] = "";
	$placeHolderscallsbackofficeview["Greek"]["courierTimeFrom"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["courierTimeTo"] = "Έως";
	$fieldToolTipscallsbackofficeview["Greek"]["courierTimeTo"] = "";
	$placeHolderscallsbackofficeview["Greek"]["courierTimeTo"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactId"] = "Πελάτης CRM";
	$fieldToolTipscallsbackofficeview["Greek"]["contactId"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactId"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerRecording"] = "Αρχείο Ηχογράφησης";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerRecording"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerRecording"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callStatusId"] = "Κατάσταση";
	$fieldToolTipscallsbackofficeview["Greek"]["callStatusId"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callStatusId"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerCampaign"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerCampaign"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerList"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerList"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerLeadID"] = "Lead ID";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerLeadID"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerLeadID"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerAgent"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerAgent"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callDenialReasonID"] = "Λόγος Άρνησης";
	$fieldToolTipscallsbackofficeview["Greek"]["callDenialReasonID"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callDenialReasonID"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callClassificationID"] = "Ομάδα Κλήσης";
	$fieldToolTipscallsbackofficeview["Greek"]["callClassificationID"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callClassificationID"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callSubClassificationID"] = "Τιμή Ομάδας Κλήσης";
	$fieldToolTipscallsbackofficeview["Greek"]["callSubClassificationID"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callSubClassificationID"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerPhone"] = "Αρ. Κλήσης";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerPhone"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerPhone"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["dialerCallEpoch"] = "Call Epoch";
	$fieldToolTipscallsbackofficeview["Greek"]["dialerCallEpoch"] = "";
	$placeHolderscallsbackofficeview["Greek"]["dialerCallEpoch"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callStart"] = "Έναρξη";
	$fieldToolTipscallsbackofficeview["Greek"]["callStart"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callStart"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callHangup"] = "Call Hangup";
	$fieldToolTipscallsbackofficeview["Greek"]["callHangup"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callHangup"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callEnd"] = "Call End";
	$fieldToolTipscallsbackofficeview["Greek"]["callEnd"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callEnd"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["talkTime"] = "Talk Time";
	$fieldToolTipscallsbackofficeview["Greek"]["talkTime"] = "";
	$placeHolderscallsbackofficeview["Greek"]["talkTime"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["typingTime"] = "Typing Time";
	$fieldToolTipscallsbackofficeview["Greek"]["typingTime"] = "";
	$placeHolderscallsbackofficeview["Greek"]["typingTime"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["totalCallTime"] = "Total Call Time";
	$fieldToolTipscallsbackofficeview["Greek"]["totalCallTime"] = "";
	$placeHolderscallsbackofficeview["Greek"]["totalCallTime"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["productFamilyId"] = "Κατηγορία Προϊόντος";
	$fieldToolTipscallsbackofficeview["Greek"]["productFamilyId"] = "";
	$placeHolderscallsbackofficeview["Greek"]["productFamilyId"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["orderShipCompany"] = "Εταιρία Αποστολής";
	$fieldToolTipscallsbackofficeview["Greek"]["orderShipCompany"] = "";
	$placeHolderscallsbackofficeview["Greek"]["orderShipCompany"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["orderInvoiceRequired"] = "Έκδοση Τιμολογίου";
	$fieldToolTipscallsbackofficeview["Greek"]["orderInvoiceRequired"] = "";
	$placeHolderscallsbackofficeview["Greek"]["orderInvoiceRequired"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["internalCommunication"] = "Εσωτερική Επικοινωνία";
	$fieldToolTipscallsbackofficeview["Greek"]["internalCommunication"] = "";
	$placeHolderscallsbackofficeview["Greek"]["internalCommunication"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["deliveryComments"] = "Σχόλια Παράδοσης";
	$fieldToolTipscallsbackofficeview["Greek"]["deliveryComments"] = "";
	$placeHolderscallsbackofficeview["Greek"]["deliveryComments"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callComments"] = "Παρατηρήσεις";
	$fieldToolTipscallsbackofficeview["Greek"]["callComments"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callComments"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callGdprAcceptance"] = "Συναίνεση Επικ/νίας";
	$fieldToolTipscallsbackofficeview["Greek"]["callGdprAcceptance"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callGdprAcceptance"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callGdprRecordingAcceptance"] = "Συναίνεση Ηχογρ.";
	$fieldToolTipscallsbackofficeview["Greek"]["callGdprRecordingAcceptance"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callGdprRecordingAcceptance"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["orderPaymentMethod"] = "Τρ. Πληρωμής";
	$fieldToolTipscallsbackofficeview["Greek"]["orderPaymentMethod"] = "";
	$placeHolderscallsbackofficeview["Greek"]["orderPaymentMethod"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactName"] = "Ονοματεπώνυμο";
	$fieldToolTipscallsbackofficeview["Greek"]["contactName"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactName"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactZipCode"] = "Ταχ. Κώδικας";
	$fieldToolTipscallsbackofficeview["Greek"]["contactZipCode"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactZipCode"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactCity"] = "Πόλη";
	$fieldToolTipscallsbackofficeview["Greek"]["contactCity"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactCity"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["ContactArea"] = "Περιοχή";
	$fieldToolTipscallsbackofficeview["Greek"]["ContactArea"] = "";
	$placeHolderscallsbackofficeview["Greek"]["ContactArea"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactGender"] = "Φύλο";
	$fieldToolTipscallsbackofficeview["Greek"]["contactGender"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactGender"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callDate"] = "Ημ/νία Κλήσης";
	$fieldToolTipscallsbackofficeview["Greek"]["callDate"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callDate"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["callTime"] = "Ώρα Κλήσης";
	$fieldToolTipscallsbackofficeview["Greek"]["callTime"] = "";
	$placeHolderscallsbackofficeview["Greek"]["callTime"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["contactAge"] = "Ηλικία";
	$fieldToolTipscallsbackofficeview["Greek"]["contactAge"] = "";
	$placeHolderscallsbackofficeview["Greek"]["contactAge"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["crmUser"] = "Crm User";
	$fieldToolTipscallsbackofficeview["Greek"]["crmUser"] = "";
	$placeHolderscallsbackofficeview["Greek"]["crmUser"] = "";
	$fieldLabelscallsbackofficeview["Greek"]["pauseAfterCall"] = "Pause";
	$fieldToolTipscallsbackofficeview["Greek"]["pauseAfterCall"] = "";
	$placeHolderscallsbackofficeview["Greek"]["pauseAfterCall"] = "";
	$pageTitlescallsbackofficeview["Greek"]["view"] = "Προβολή Κλήσης ({%id})";
	if (count($fieldToolTipscallsbackofficeview["Greek"]))
		$tdatacallsbackofficeview[".isUseToolTips"] = true;
}


	$tdatacallsbackofficeview[".NCSearch"] = true;



$tdatacallsbackofficeview[".shortTableName"] = "callsbackofficeview";
$tdatacallsbackofficeview[".nSecOptions"] = 0;

$tdatacallsbackofficeview[".mainTableOwnerID"] = "dialerAgent";
$tdatacallsbackofficeview[".entityType"] = 1;
$tdatacallsbackofficeview[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallsbackofficeview[".strOriginalTableName"] = "dbo.Calls";

	



$tdatacallsbackofficeview[".showAddInPopup"] = false;

$tdatacallsbackofficeview[".showEditInPopup"] = false;

$tdatacallsbackofficeview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallsbackofficeview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatacallsbackofficeview[".listAjax"] = true;
//	temporary
$tdatacallsbackofficeview[".listAjax"] = false;

	$tdatacallsbackofficeview[".audit"] = true;

	$tdatacallsbackofficeview[".locking"] = false;


$pages = $tdatacallsbackofficeview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallsbackofficeview[".edit"] = true;
	$tdatacallsbackofficeview[".afterEditAction"] = 0;
	$tdatacallsbackofficeview[".closePopupAfterEdit"] = 1;
	$tdatacallsbackofficeview[".afterEditActionDetTable"] = "dbo.application";
}

if( $pages[PAGE_ADD] ) {
$tdatacallsbackofficeview[".add"] = true;
$tdatacallsbackofficeview[".afterAddAction"] = 0;
$tdatacallsbackofficeview[".closePopupAfterAdd"] = 1;
$tdatacallsbackofficeview[".afterAddActionDetTable"] = "dbo.internalComments";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallsbackofficeview[".list"] = true;
}



$tdatacallsbackofficeview[".strSortControlSettingsJSON"] = "";

$tdatacallsbackofficeview[".strClickActionJSON"] = "{\"fields\":{\"broadcast\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callClassificationID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callDenialReasonID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callEnd\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"callHangup\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"callStart\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"callStatusId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callSubClassificationID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"comments\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"contactId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"contactMethod\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courier\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierComments1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierComments2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierDeliveryDate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierTimeFrom\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierTimeTo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerAgent\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerCallEpoch\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerCampaign\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerLeadID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerList\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerPhone\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerRecording\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"orderInvoiceRequired\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"orderShipCompany\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"productFamilyId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialComments\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialDate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialDone\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialIsPrivate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remarks\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seller\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"talkTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"talkTimeDuration\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"totalCallTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"totalCallTimeDuration\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"tvchannel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"typingTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"typingTimeDuration\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.VoltonApplications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.VoltonApplications\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatacallsbackofficeview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallsbackofficeview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallsbackofficeview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallsbackofficeview[".printFriendly"] = true;
}



$tdatacallsbackofficeview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallsbackofficeview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallsbackofficeview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallsbackofficeview[".isUseAjaxSuggest"] = false;

$tdatacallsbackofficeview[".rowHighlite"] = true;



		
																																																																																																																										

$tdatacallsbackofficeview[".ajaxCodeSnippetAdded"] = false;

$tdatacallsbackofficeview[".buttonsAdded"] = true;

$tdatacallsbackofficeview[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacallsbackofficeview[".isUseTimeForSearch"] = true;


$tdatacallsbackofficeview[".badgeColor"] = "E8926F";


$tdatacallsbackofficeview[".allSearchFields"] = array();
$tdatacallsbackofficeview[".filterFields"] = array();
$tdatacallsbackofficeview[".requiredSearchFields"] = array();




$tdatacallsbackofficeview[".tableType"] = "list";

$tdatacallsbackofficeview[".printerPageOrientation"] = 0;
$tdatacallsbackofficeview[".nPrinterPageScale"] = 100;

$tdatacallsbackofficeview[".nPrinterSplitRecords"] = 40;

$tdatacallsbackofficeview[".geocodingEnabled"] = false;





$tdatacallsbackofficeview[".isResizeColumns"] = true;

$tdatacallsbackofficeview[".searchIsRequiredForFilters"] = true;

$tdatacallsbackofficeview[".noRecordsFirstPage"] = true;



$tdatacallsbackofficeview[".pageSize"] = 20;

$tdatacallsbackofficeview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallsbackofficeview[".strOrderBy"] = $tstrOrderBy;

$tdatacallsbackofficeview[".orderindexes"] = array();


$tdatacallsbackofficeview[".sqlHead"] = "SELECT id,  contactId,  callStart,  format(callStart, 'dd/MM/yyyy') AS callDate,  convert(varchar, callStart, 24) AS callTime,  callHangup,  callEnd,  talkTime,  typingTime,  totalCallTime,  tvchannel,  broadcast,  seller,  callStatusId,  callDenialReasonID,  callClassificationID,  callSubClassificationID,  remarks,  redialDate,  redialComments,  redialIsPrivate,  redialDone,  contactMethod,  courier,  deliveryComments,  courierDeliveryDate,  courierTimeFrom,  courierTimeTo,  dialerPhone,  dialerCallEpoch,  dialerCampaign,  dialerList,  dialerLeadID,  dialerAgent,  dialerRecording,  productFamilyId,  orderShipCompany,  orderInvoiceRequired,  callComments,  internalCommunication,  callGdprAcceptance,  callGdprRecordingAcceptance,  orderPaymentMethod,  contactName,  contactZipCode,  contactCity,  ContactArea,  contactGender,  contactAge,  crmUser,  pauseAfterCall";
$tdatacallsbackofficeview[".sqlFrom"] = "FROM dbo.Calls";
$tdatacallsbackofficeview[".sqlWhereExpr"] = "";
$tdatacallsbackofficeview[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatacallsbackofficeview[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallsbackofficeview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallsbackofficeview[".arrGroupsPerPage"] = $arrGPP;

$tdatacallsbackofficeview[".highlightSearchResults"] = true;

$tableKeyscallsbackofficeview = array();
$tableKeyscallsbackofficeview[] = "id";
$tdatacallsbackofficeview[".Keys"] = $tableKeyscallsbackofficeview;


$tdatacallsbackofficeview[".hideMobileList"] = array();
		$tdatacallsbackofficeview[".hideMobileList"][1] = array();
$tdatacallsbackofficeview[".hideMobileList"][1]["id"] = true;
		$tdatacallsbackofficeview[".hideMobileList"][5] = array();
$tdatacallsbackofficeview[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["id"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "id";
//	contactId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contactId";
	$fdata["GoodName"] = "contactId";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contactId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.contacts";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "convert(varchar,id)+'  -  '+lastName+' '+firstname+'. '+address";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "name";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactId"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactId";
//	callStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "callStart";
	$fdata["GoodName"] = "callStart";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callStart");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "callStart";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callStart";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "More than";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
			$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Interval slider";
		$fdata["showCollapsed"] = false;

	
	
	
	

	$fdata["filterKnobsType"] = 0;
		$fdata["filterSliderStepType"] = 1;
	$fdata["filterSliderStepValue"] = 1;
//end of Filters settings


	$tdatacallsbackofficeview["callStart"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callStart";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(callStart, 'dd/MM/yyyy')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Interval list";
		$fdata["showCollapsed"] = true;

	
	
		//intervals' settings
	$fdata["showWithNoRecords"] = 0;
	$fdata["filterIntervals"] =  array();

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 0;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "CustomID";
		$intervalData["intervalLabelText"] = "INTERVAL_LABEL";
						$intervalData["upperLimit"] = "";
				$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 1;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "CustomID";
		$intervalData["intervalLabelText"] = "INTERVAL_LABEL1";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 2;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "CustomID";
		$intervalData["intervalLabelText"] = "INTERVAL_LABEL2";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 3;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "CustomID";
		$intervalData["intervalLabelText"] = "INTERVAL_LABEL3";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 4;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "CustomID";
		$intervalData["intervalLabelText"] = "INTERVAL_LABEL4";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 5;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "CustomID";
		$intervalData["intervalLabelText"] = "INTERVAL_LABEL5";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 6;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 0;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "Προηγούμενα Έτη";
				$intervalData["lowerLimit"] = "";
						$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 7;

		$fdata["filterIntervals"][] = $intervalData;

	
//end of Filters settings


	$tdatacallsbackofficeview["callDate"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callDate";
//	callTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callTime";
	$fdata["GoodName"] = "callTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callTime");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "convert(varchar, callStart, 24)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callTime"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callTime";
//	callHangup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "callHangup";
	$fdata["GoodName"] = "callHangup";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callHangup");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "callHangup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callHangup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callHangup"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callHangup";
//	callEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "callEnd";
	$fdata["GoodName"] = "callEnd";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callEnd");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "callEnd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callEnd";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Time");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callEnd"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callEnd";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","talkTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "talkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "talkTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["talkTime"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","typingTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "typingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typingTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["typingTime"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","totalCallTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "totalCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalCallTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["totalCallTime"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "totalCallTime";
//	tvchannel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tvchannel";
	$fdata["GoodName"] = "tvchannel";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","tvchannel");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tvchannel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tvchannel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["tvchannel"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "tvchannel";
//	broadcast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "broadcast";
	$fdata["GoodName"] = "broadcast";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","broadcast");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "broadcast";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "broadcast";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["broadcast"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "broadcast";
//	seller
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "seller";
	$fdata["GoodName"] = "seller";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","seller");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "seller";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seller";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["seller"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "seller";
//	callStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "callStatusId";
	$fdata["GoodName"] = "callStatusId";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callStatusId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "callSubClassificationID_onChangeEvent", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.callStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status + ' (id='+convert(varchar,id) +  ')'";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "displayOrder";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "callClassificationID", "lookup" => "callClassificationId" );
	$edata["categoryFields"][] = array( "main" => "callSubClassificationID", "lookup" => "callSubClassificationId" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 2;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callStatusId"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callStatusId";
//	callDenialReasonID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "callDenialReasonID";
	$fdata["GoodName"] = "callDenialReasonID";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callDenialReasonID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callDenialReasonID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callDenialReasonID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.denialReason";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "denialReason + ' (id='+convert(varchar,id) +  ')'";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callDenialReasonID"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callDenialReasonID";
//	callClassificationID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "callClassificationID";
	$fdata["GoodName"] = "callClassificationID";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callClassificationID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callClassificationID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callClassificationID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.callClassifications";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "classification+ ' (id='+convert(varchar,id) +  ')'";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "callStatusId";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "callSubClassificationID";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callClassificationID"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callClassificationID";
//	callSubClassificationID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "callSubClassificationID";
	$fdata["GoodName"] = "callSubClassificationID";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callSubClassificationID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callSubClassificationID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callSubClassificationID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "callSubClassificationID_onChangeEvent", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.callSubClassifications";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subClassification + ' (id=' + convert(varchar,id) +  ')'";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "displayOrder";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "callClassificationID", "lookup" => "classificationId" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "callStatusId";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callSubClassificationID"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callSubClassificationID";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","remarks");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "remarks";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarks";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["remarks"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "remarks";
//	redialDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "redialDate";
	$fdata["GoodName"] = "redialDate";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","redialDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "redialDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "redialDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["redialDate"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "redialDate";
//	redialComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "redialComments";
	$fdata["GoodName"] = "redialComments";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","redialComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "redialComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "redialComments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
		$edata["insertNull"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["redialComments"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "redialComments";
//	redialIsPrivate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "redialIsPrivate";
	$fdata["GoodName"] = "redialIsPrivate";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","redialIsPrivate");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "redialIsPrivate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "redialIsPrivate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["redialIsPrivate"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "redialIsPrivate";
//	redialDone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "redialDone";
	$fdata["GoodName"] = "redialDone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","redialDone");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "redialDone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "redialDone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["redialDone"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "redialDone";
//	contactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "contactMethod";
	$fdata["GoodName"] = "contactMethod";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactMethod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactMethod";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Viber";
	$edata["LookupValues"][] = "Email";
	$edata["LookupValues"][] = "Courier";
	$edata["LookupValues"][] = "Παραλαβή Από Κατάστημα";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactMethod"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactMethod";
//	courier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "courier";
	$fdata["GoodName"] = "courier";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","courier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "courier";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ACS";
	$edata["LookupValues"][] = "Γενική Ταχυδρομική";
	$edata["LookupValues"][] = "ΕΛΤΑ";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["courier"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "courier";
//	deliveryComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "deliveryComments";
	$fdata["GoodName"] = "deliveryComments";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","deliveryComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "deliveryComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deliveryComments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["deliveryComments"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "deliveryComments";
//	courierDeliveryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "courierDeliveryDate";
	$fdata["GoodName"] = "courierDeliveryDate";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","courierDeliveryDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "courierDeliveryDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "courierDeliveryDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["courierDeliveryDate"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "courierDeliveryDate";
//	courierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "courierTimeFrom";
	$fdata["GoodName"] = "courierTimeFrom";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","courierTimeFrom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courierTimeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "courierTimeFrom";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 15,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["courierTimeFrom"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "courierTimeFrom";
//	courierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "courierTimeTo";
	$fdata["GoodName"] = "courierTimeTo";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","courierTimeTo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courierTimeTo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "courierTimeTo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 15,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["courierTimeTo"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "courierTimeTo";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerPhone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerPhone"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerPhone";
//	dialerCallEpoch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dialerCallEpoch";
	$fdata["GoodName"] = "dialerCallEpoch";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerCallEpoch");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "dialerCallEpoch";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerCallEpoch";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerCallEpoch"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerCallEpoch";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerCampaign");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerCampaign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerCampaign";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.campaignsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerCampaign";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerCampaign";

	

	
	$edata["LookupOrderBy"] = "dialerCampaign";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerCampaign"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerList");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerList";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerList";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.listsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerList";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerList";

	

	
	$edata["LookupOrderBy"] = "dialerList";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerList"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerList";
//	dialerLeadID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "dialerLeadID";
	$fdata["GoodName"] = "dialerLeadID";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerLeadID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerLeadID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerLeadID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerLeadID"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerLeadID";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerAgent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerAgent";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.CallCenter_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "isnull(fullname,'')+' ('+username+')'";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "fullname";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerAgent"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerAgent";
//	dialerRecording
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "dialerRecording";
	$fdata["GoodName"] = "dialerRecording";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","dialerRecording");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerRecording";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerRecording";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
		$vdata["LinkPrefix"] ="http://10.101.128.206/archive/2021-07-14/";

	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["dialerRecording"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "dialerRecording";
//	productFamilyId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "productFamilyId";
	$fdata["GoodName"] = "productFamilyId";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","productFamilyId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "productFamilyId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "productFamilyId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.itemFamily";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["productFamilyId"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "productFamilyId";
//	orderShipCompany
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "orderShipCompany";
	$fdata["GoodName"] = "orderShipCompany";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","orderShipCompany");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "orderShipCompany";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orderShipCompany";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.itemCustomer";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["orderShipCompany"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "orderShipCompany";
//	orderInvoiceRequired
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "orderInvoiceRequired";
	$fdata["GoodName"] = "orderInvoiceRequired";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","orderInvoiceRequired");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "orderInvoiceRequired";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orderInvoiceRequired";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["orderInvoiceRequired"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "orderInvoiceRequired";
//	callComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "callComments";
	$fdata["GoodName"] = "callComments";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "callComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callComments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callComments"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callComments";
//	internalCommunication
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "internalCommunication";
	$fdata["GoodName"] = "internalCommunication";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","internalCommunication");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "internalCommunication";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "internalCommunication";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["internalCommunication"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "internalCommunication";
//	callGdprAcceptance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "callGdprAcceptance";
	$fdata["GoodName"] = "callGdprAcceptance";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callGdprAcceptance");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callGdprAcceptance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callGdprAcceptance";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Ναι";
	$edata["LookupValues"][] = "Όχι";

	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callGdprAcceptance"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callGdprAcceptance";
//	callGdprRecordingAcceptance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "callGdprRecordingAcceptance";
	$fdata["GoodName"] = "callGdprRecordingAcceptance";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","callGdprRecordingAcceptance");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callGdprRecordingAcceptance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callGdprRecordingAcceptance";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Ναι";
	$edata["LookupValues"][] = "Όχι";

	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["callGdprRecordingAcceptance"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "callGdprRecordingAcceptance";
//	orderPaymentMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "orderPaymentMethod";
	$fdata["GoodName"] = "orderPaymentMethod";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","orderPaymentMethod");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "orderPaymentMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orderPaymentMethod";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Αντικαταβολή";
	$edata["LookupValues"][] = "Πιστωτική Κάρτα";
	$edata["LookupValues"][] = "Κατάθεση";
	$edata["LookupValues"][] = "Δωρεάν";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["orderPaymentMethod"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "orderPaymentMethod";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactName"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactName";
//	contactZipCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "contactZipCode";
	$fdata["GoodName"] = "contactZipCode";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactZipCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactZipCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactZipCode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.postalCodes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"contactCity", 'lookupF'=>"city");
	$edata["autoCompleteFields"][] = array('masterF'=>"ContactArea", 'lookupF'=>"area");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "postalCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "postalCode";

	

	
	$edata["LookupOrderBy"] = "postalCode";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactZipCode"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactZipCode";
//	contactCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "contactCity";
	$fdata["GoodName"] = "contactCity";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactCity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactCity"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactCity";
//	ContactArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ContactArea";
	$fdata["GoodName"] = "ContactArea";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","ContactArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ContactArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactArea";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["ContactArea"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "ContactArea";
//	contactGender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "contactGender";
	$fdata["GoodName"] = "contactGender";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactGender");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contactGender";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactGender";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Άνδρας";
	$edata["LookupValues"][] = "Γυναίκα";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactGender"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactGender";
//	contactAge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "contactAge";
	$fdata["GoodName"] = "contactAge";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","contactAge");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contactAge";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactAge";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["contactAge"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "contactAge";
//	crmUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "crmUser";
	$fdata["GoodName"] = "crmUser";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","crmUser");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "crmUser";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "crmUser";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["crmUser"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "crmUser";
//	pauseAfterCall
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "pauseAfterCall";
	$fdata["GoodName"] = "pauseAfterCall";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_CallsBackofficeView","pauseAfterCall");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pauseAfterCall";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pauseAfterCall";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsbackofficeview["pauseAfterCall"] = $fdata;
		$tdatacallsbackofficeview[".searchableFields"][] = "pauseAfterCall";


$tables_data["dbo.CallsBackofficeView"]=&$tdatacallsbackofficeview;
$field_labels["dbo_CallsBackofficeView"] = &$fieldLabelscallsbackofficeview;
$fieldToolTips["dbo_CallsBackofficeView"] = &$fieldToolTipscallsbackofficeview;
$placeHolders["dbo_CallsBackofficeView"] = &$placeHolderscallsbackofficeview;
$page_titles["dbo_CallsBackofficeView"] = &$pageTitlescallsbackofficeview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.CallsBackofficeView"] = array();
//	dbo.internalComments
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.internalComments";
		$detailsParam["dOriginalTable"] = "dbo.internalComments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "internalcomments";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_internalComments");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["detailKeys"][]="parentId";
//	dbo.novaApplications
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.novaApplications";
		$detailsParam["dOriginalTable"] = "dbo.novaApplications";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "novaapplications";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_novaApplications");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["detailKeys"][]="callid";
//	dbo.voltonApplications
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.voltonApplications";
		$detailsParam["dOriginalTable"] = "dbo.voltonApplications";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dbo_voltonapplications";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_voltonApplications");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CallsBackofficeView"][$dIndex]["detailKeys"][]="callid";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CallsBackofficeView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callsbackofficeview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  contactId,  callStart,  format(callStart, 'dd/MM/yyyy') AS callDate,  convert(varchar, callStart, 24) AS callTime,  callHangup,  callEnd,  talkTime,  typingTime,  totalCallTime,  tvchannel,  broadcast,  seller,  callStatusId,  callDenialReasonID,  callClassificationID,  callSubClassificationID,  remarks,  redialDate,  redialComments,  redialIsPrivate,  redialDone,  contactMethod,  courier,  deliveryComments,  courierDeliveryDate,  courierTimeFrom,  courierTimeTo,  dialerPhone,  dialerCallEpoch,  dialerCampaign,  dialerList,  dialerLeadID,  dialerAgent,  dialerRecording,  productFamilyId,  orderShipCompany,  orderInvoiceRequired,  callComments,  internalCommunication,  callGdprAcceptance,  callGdprRecordingAcceptance,  orderPaymentMethod,  contactName,  contactZipCode,  contactCity,  ContactArea,  contactGender,  contactAge,  crmUser,  pauseAfterCall";
$proto0["m_strFrom"] = "FROM dbo.Calls";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contactId",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto8["m_sql"] = "contactId";
$proto8["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "callStart",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto10["m_sql"] = "callStart";
$proto10["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "format(callStart, 'dd/MM/yyyy')";
$proto12["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "varchar"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "24"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "convert";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "convert(varchar, callStart, 24)";
$proto16["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "callTime";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "callHangup",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto21["m_sql"] = "callHangup";
$proto21["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "callEnd",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto23["m_sql"] = "callEnd";
$proto23["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto25["m_sql"] = "talkTime";
$proto25["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto27["m_sql"] = "typingTime";
$proto27["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto29["m_sql"] = "totalCallTime";
$proto29["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tvchannel",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto31["m_sql"] = "tvchannel";
$proto31["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "broadcast",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto33["m_sql"] = "broadcast";
$proto33["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "seller",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto35["m_sql"] = "seller";
$proto35["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatusId",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto37["m_sql"] = "callStatusId";
$proto37["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "callDenialReasonID",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto39["m_sql"] = "callDenialReasonID";
$proto39["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "callClassificationID",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto41["m_sql"] = "callClassificationID";
$proto41["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "callSubClassificationID",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto43["m_sql"] = "callSubClassificationID";
$proto43["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto45["m_sql"] = "remarks";
$proto45["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "redialDate",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto47["m_sql"] = "redialDate";
$proto47["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "redialComments",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto49["m_sql"] = "redialComments";
$proto49["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "redialIsPrivate",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto51["m_sql"] = "redialIsPrivate";
$proto51["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "redialDone",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto53["m_sql"] = "redialDone";
$proto53["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "contactMethod",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto55["m_sql"] = "contactMethod";
$proto55["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "courier",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto57["m_sql"] = "courier";
$proto57["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "deliveryComments",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto59["m_sql"] = "deliveryComments";
$proto59["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "courierDeliveryDate",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto61["m_sql"] = "courierDeliveryDate";
$proto61["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "courierTimeFrom",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto63["m_sql"] = "courierTimeFrom";
$proto63["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "courierTimeTo",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto65["m_sql"] = "courierTimeTo";
$proto65["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto67["m_sql"] = "dialerPhone";
$proto67["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCallEpoch",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto69["m_sql"] = "dialerCallEpoch";
$proto69["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto71["m_sql"] = "dialerCampaign";
$proto71["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto73["m_sql"] = "dialerList";
$proto73["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerLeadID",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto75["m_sql"] = "dialerLeadID";
$proto75["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto77["m_sql"] = "dialerAgent";
$proto77["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerRecording",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto79["m_sql"] = "dialerRecording";
$proto79["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "productFamilyId",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto81["m_sql"] = "productFamilyId";
$proto81["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "orderShipCompany",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto83["m_sql"] = "orderShipCompany";
$proto83["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "orderInvoiceRequired",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto85["m_sql"] = "orderInvoiceRequired";
$proto85["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "callComments",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto87["m_sql"] = "callComments";
$proto87["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "internalCommunication",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto89["m_sql"] = "internalCommunication";
$proto89["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "callGdprAcceptance",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto91["m_sql"] = "callGdprAcceptance";
$proto91["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "callGdprRecordingAcceptance",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto93["m_sql"] = "callGdprRecordingAcceptance";
$proto93["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "orderPaymentMethod",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto95["m_sql"] = "orderPaymentMethod";
$proto95["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto97["m_sql"] = "contactName";
$proto97["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "contactZipCode",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto99["m_sql"] = "contactZipCode";
$proto99["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "contactCity",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto101["m_sql"] = "contactCity";
$proto101["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactArea",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto103["m_sql"] = "ContactArea";
$proto103["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "contactGender",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto105["m_sql"] = "contactGender";
$proto105["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "contactAge",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto107["m_sql"] = "contactAge";
$proto107["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "crmUser",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto109["m_sql"] = "crmUser";
$proto109["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "pauseAfterCall",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.CallsBackofficeView"
));

$proto111["m_sql"] = "pauseAfterCall";
$proto111["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto113=array();
$proto113["m_link"] = "SQLL_MAIN";
			$proto114=array();
$proto114["m_strName"] = "dbo.Calls";
$proto114["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto114["m_columns"] = array();
$proto114["m_columns"][] = "id";
$proto114["m_columns"][] = "contactId";
$proto114["m_columns"][] = "callStart";
$proto114["m_columns"][] = "callHangup";
$proto114["m_columns"][] = "callEnd";
$proto114["m_columns"][] = "talkTime";
$proto114["m_columns"][] = "typingTime";
$proto114["m_columns"][] = "totalCallTime";
$proto114["m_columns"][] = "tvchannel";
$proto114["m_columns"][] = "broadcast";
$proto114["m_columns"][] = "seller";
$proto114["m_columns"][] = "callStatusId";
$proto114["m_columns"][] = "callDenialReasonID";
$proto114["m_columns"][] = "callClassificationID";
$proto114["m_columns"][] = "callSubClassificationID";
$proto114["m_columns"][] = "remarks";
$proto114["m_columns"][] = "redialDate";
$proto114["m_columns"][] = "redialComments";
$proto114["m_columns"][] = "redialIsPrivate";
$proto114["m_columns"][] = "redialDone";
$proto114["m_columns"][] = "contactMethod";
$proto114["m_columns"][] = "courier";
$proto114["m_columns"][] = "deliveryComments";
$proto114["m_columns"][] = "courierDeliveryDate";
$proto114["m_columns"][] = "courierTimeFrom";
$proto114["m_columns"][] = "courierTimeTo";
$proto114["m_columns"][] = "dialerPhone";
$proto114["m_columns"][] = "dialerCallEpoch";
$proto114["m_columns"][] = "dialerCampaign";
$proto114["m_columns"][] = "dialerList";
$proto114["m_columns"][] = "dialerLeadID";
$proto114["m_columns"][] = "dialerAgent";
$proto114["m_columns"][] = "dialerRecording";
$proto114["m_columns"][] = "productFamilyId";
$proto114["m_columns"][] = "orderShipCompany";
$proto114["m_columns"][] = "orderInvoiceRequired";
$proto114["m_columns"][] = "callComments";
$proto114["m_columns"][] = "internalCommunication";
$proto114["m_columns"][] = "callGdprAcceptance";
$proto114["m_columns"][] = "callGdprRecordingAcceptance";
$proto114["m_columns"][] = "orderPaymentMethod";
$proto114["m_columns"][] = "contactName";
$proto114["m_columns"][] = "contactZipCode";
$proto114["m_columns"][] = "contactCity";
$proto114["m_columns"][] = "ContactArea";
$proto114["m_columns"][] = "contactGender";
$proto114["m_columns"][] = "contactAge";
$proto114["m_columns"][] = "crmUser";
$proto114["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto114);

$proto113["m_table"] = $obj;
$proto113["m_sql"] = "dbo.Calls";
$proto113["m_alias"] = "";
$proto113["m_srcTableName"] = "dbo.CallsBackofficeView";
$proto115=array();
$proto115["m_sql"] = "";
$proto115["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto115["m_column"]=$obj;
$proto115["m_contained"] = array();
$proto115["m_strCase"] = "";
$proto115["m_havingmode"] = false;
$proto115["m_inBrackets"] = false;
$proto115["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto115);

$proto113["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto113);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.CallsBackofficeView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callsbackofficeview = createSqlQuery_callsbackofficeview();


	
		;

																																																			

$tdatacallsbackofficeview[".sqlquery"] = $queryData_callsbackofficeview;



include_once(getabspath("include/callsbackofficeview_events.php"));
$tableEvents["dbo.CallsBackofficeView"] = new eventclass_callsbackofficeview;
$tdatacallsbackofficeview[".hasEvents"] = true;

?>