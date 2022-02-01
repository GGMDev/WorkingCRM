<?php
$tdatacallsforredial = array();
$tdatacallsforredial[".searchableFields"] = array();
$tdatacallsforredial[".ShortName"] = "callsforredial";
$tdatacallsforredial[".OwnerID"] = "dialerAgent";
$tdatacallsforredial[".OriginalTable"] = "dbo.Calls";


$tdatacallsforredial[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacallsforredial[".originalPagesByType"] = $tdatacallsforredial[".pagesByType"];
$tdatacallsforredial[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacallsforredial[".originalPages"] = $tdatacallsforredial[".pages"];
$tdatacallsforredial[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacallsforredial[".originalDefaultPages"] = $tdatacallsforredial[".defaultPages"];

//	field labels
$fieldLabelscallsforredial = array();
$fieldToolTipscallsforredial = array();
$pageTitlescallsforredial = array();
$placeHolderscallsforredial = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallsforredial["Greek"] = array();
	$fieldToolTipscallsforredial["Greek"] = array();
	$placeHolderscallsforredial["Greek"] = array();
	$pageTitlescallsforredial["Greek"] = array();
	$fieldLabelscallsforredial["Greek"]["id"] = "Id";
	$fieldToolTipscallsforredial["Greek"]["id"] = "";
	$placeHolderscallsforredial["Greek"]["id"] = "";
	$fieldLabelscallsforredial["Greek"]["redialDate"] = "Ημ/νία Επανάκλησης";
	$fieldToolTipscallsforredial["Greek"]["redialDate"] = "";
	$placeHolderscallsforredial["Greek"]["redialDate"] = "";
	$fieldLabelscallsforredial["Greek"]["redialComments"] = "Σχόλια Επανάκλησης";
	$fieldToolTipscallsforredial["Greek"]["redialComments"] = "";
	$placeHolderscallsforredial["Greek"]["redialComments"] = "";
	$fieldLabelscallsforredial["Greek"]["redialIsPrivate"] = "Προσωπική";
	$fieldToolTipscallsforredial["Greek"]["redialIsPrivate"] = "";
	$placeHolderscallsforredial["Greek"]["redialIsPrivate"] = "";
	$fieldLabelscallsforredial["Greek"]["redialDone"] = "Έγινε Επανάκληση";
	$fieldToolTipscallsforredial["Greek"]["redialDone"] = "";
	$placeHolderscallsforredial["Greek"]["redialDone"] = "";
	$fieldLabelscallsforredial["Greek"]["dialerRecording"] = "Αρχείο Ηχογράφησης";
	$fieldToolTipscallsforredial["Greek"]["dialerRecording"] = "";
	$placeHolderscallsforredial["Greek"]["dialerRecording"] = "";
	$fieldLabelscallsforredial["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipscallsforredial["Greek"]["dialerAgent"] = "";
	$placeHolderscallsforredial["Greek"]["dialerAgent"] = "";
	$fieldLabelscallsforredial["Greek"]["callClassificationID"] = "Ομάδα Κλήσης";
	$fieldToolTipscallsforredial["Greek"]["callClassificationID"] = "";
	$placeHolderscallsforredial["Greek"]["callClassificationID"] = "";
	$fieldLabelscallsforredial["Greek"]["callSubClassificationID"] = "Τιμή Ομάδας Κλήσης";
	$fieldToolTipscallsforredial["Greek"]["callSubClassificationID"] = "";
	$placeHolderscallsforredial["Greek"]["callSubClassificationID"] = "";
	$fieldLabelscallsforredial["Greek"]["dialerPhone"] = "Αρ. Κλήσης";
	$fieldToolTipscallsforredial["Greek"]["dialerPhone"] = "";
	$placeHolderscallsforredial["Greek"]["dialerPhone"] = "";
	$fieldLabelscallsforredial["Greek"]["totalCallTime"] = "Total Call Time";
	$fieldToolTipscallsforredial["Greek"]["totalCallTime"] = "";
	$placeHolderscallsforredial["Greek"]["totalCallTime"] = "";
	$fieldLabelscallsforredial["Greek"]["callDate"] = "Ημ/νία Κλήσης";
	$fieldToolTipscallsforredial["Greek"]["callDate"] = "";
	$placeHolderscallsforredial["Greek"]["callDate"] = "";
	$fieldLabelscallsforredial["Greek"]["callTime"] = "Ώρα Κλήσης";
	$fieldToolTipscallsforredial["Greek"]["callTime"] = "";
	$placeHolderscallsforredial["Greek"]["callTime"] = "";
	$fieldLabelscallsforredial["Greek"]["redialTime"] = "Ώρα Επανάκλησης";
	$fieldToolTipscallsforredial["Greek"]["redialTime"] = "";
	$placeHolderscallsforredial["Greek"]["redialTime"] = "";
	if (count($fieldToolTipscallsforredial["Greek"]))
		$tdatacallsforredial[".isUseToolTips"] = true;
}


	$tdatacallsforredial[".NCSearch"] = true;



$tdatacallsforredial[".shortTableName"] = "callsforredial";
$tdatacallsforredial[".nSecOptions"] = 0;

$tdatacallsforredial[".mainTableOwnerID"] = "dialerAgent";
$tdatacallsforredial[".entityType"] = 1;
$tdatacallsforredial[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallsforredial[".strOriginalTableName"] = "dbo.Calls";

	



$tdatacallsforredial[".showAddInPopup"] = false;

$tdatacallsforredial[".showEditInPopup"] = false;

$tdatacallsforredial[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallsforredial[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallsforredial[".listAjax"] = false;
//	temporary
$tdatacallsforredial[".listAjax"] = false;

	$tdatacallsforredial[".audit"] = true;

	$tdatacallsforredial[".locking"] = false;


$pages = $tdatacallsforredial[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallsforredial[".edit"] = true;
	$tdatacallsforredial[".afterEditAction"] = 0;
	$tdatacallsforredial[".closePopupAfterEdit"] = 1;
	$tdatacallsforredial[".afterEditActionDetTable"] = "dbo.application";
}

if( $pages[PAGE_ADD] ) {
$tdatacallsforredial[".add"] = true;
$tdatacallsforredial[".afterAddAction"] = 0;
$tdatacallsforredial[".closePopupAfterAdd"] = 1;
$tdatacallsforredial[".afterAddActionDetTable"] = "dbo.internalComments";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallsforredial[".list"] = true;
}



$tdatacallsforredial[".strSortControlSettingsJSON"] = "";

$tdatacallsforredial[".strClickActionJSON"] = "{\"fields\":{\"broadcast\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callClassificationID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callDenialReasonID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callEnd\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"callHangup\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"callStart\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"callStatusId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callSubClassificationID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"comments\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"contactId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"contactMethod\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courier\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierComments1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierComments2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierDeliveryDate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierTimeFrom\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"courierTimeTo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerAgent\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerCallEpoch\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerCampaign\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerLeadID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerList\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerPhone\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerRecording\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"orderInvoiceRequired\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"orderShipCompany\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"productFamilyId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialComments\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialDate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialDone\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"redialIsPrivate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remarks\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seller\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"talkTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"talkTimeDuration\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"totalCallTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"totalCallTimeDuration\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"tvchannel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"typingTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}},\"typingTimeDuration\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.applications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.applications\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.VoltonApplications\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.VoltonApplications\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatacallsforredial[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallsforredial[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallsforredial[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallsforredial[".printFriendly"] = true;
}



$tdatacallsforredial[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallsforredial[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallsforredial[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallsforredial[".isUseAjaxSuggest"] = false;

$tdatacallsforredial[".rowHighlite"] = true;



		
																																																																																																																										

$tdatacallsforredial[".ajaxCodeSnippetAdded"] = false;

$tdatacallsforredial[".buttonsAdded"] = true;

$tdatacallsforredial[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacallsforredial[".isUseTimeForSearch"] = false;


$tdatacallsforredial[".badgeColor"] = "2F4F4F";


$tdatacallsforredial[".allSearchFields"] = array();
$tdatacallsforredial[".filterFields"] = array();
$tdatacallsforredial[".requiredSearchFields"] = array();

$tdatacallsforredial[".googleLikeFields"] = array();
$tdatacallsforredial[".googleLikeFields"][] = "dialerPhone";
$tdatacallsforredial[".googleLikeFields"][] = "redialTime";
$tdatacallsforredial[".googleLikeFields"][] = "callClassificationID";
$tdatacallsforredial[".googleLikeFields"][] = "callSubClassificationID";



$tdatacallsforredial[".tableType"] = "list";

$tdatacallsforredial[".printerPageOrientation"] = 0;
$tdatacallsforredial[".nPrinterPageScale"] = 100;

$tdatacallsforredial[".nPrinterSplitRecords"] = 40;

$tdatacallsforredial[".geocodingEnabled"] = false;






$tdatacallsforredial[".searchIsRequiredForFilters"] = true;

$tdatacallsforredial[".noRecordsFirstPage"] = true;



$tdatacallsforredial[".pageSize"] = 20;

$tdatacallsforredial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallsforredial[".strOrderBy"] = $tstrOrderBy;

$tdatacallsforredial[".orderindexes"] = array();


$tdatacallsforredial[".sqlHead"] = "SELECT id,  dialerPhone,  dialerAgent,  format(callStart, 'dd/MM/yyyy') AS callDate,  convert(varchar, callStart, 24) AS callTime,  format(redialDate, 'dd/MM/yyyy') AS redialDate,  convert(varchar, redialDate, 24) AS redialTime,  redialComments,  redialIsPrivate,  redialDone,  callClassificationID,  callSubClassificationID,  totalCallTime,  dialerRecording";
$tdatacallsforredial[".sqlFrom"] = "FROM dbo.Calls";
$tdatacallsforredial[".sqlWhereExpr"] = "(dialerAgent =':user.username') AND (redialIsPrivate =1) AND (redialDate is not null) AND (isnull(redialDone, 0) = 0)";
$tdatacallsforredial[".sqlTail"] = "";

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
$tdatacallsforredial[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallsforredial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallsforredial[".arrGroupsPerPage"] = $arrGPP;

$tdatacallsforredial[".highlightSearchResults"] = true;

$tableKeyscallsforredial = array();
$tableKeyscallsforredial[] = "id";
$tdatacallsforredial[".Keys"] = $tableKeyscallsforredial;


$tdatacallsforredial[".hideMobileList"] = array();
		$tdatacallsforredial[".hideMobileList"][1] = array();
$tdatacallsforredial[".hideMobileList"][1]["id"] = true;
		$tdatacallsforredial[".hideMobileList"][5] = array();
$tdatacallsforredial[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","id");
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


	$tdatacallsforredial["id"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "id";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","dialerPhone");
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


	$tdatacallsforredial["dialerPhone"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "dialerPhone";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","dialerAgent");
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
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
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
	$edata["LookupTable"] = "dbo.CallCenter_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username+' '+isnull(fullname,'')";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsforredial["dialerAgent"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "dialerAgent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsForRedial","callDate");
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


	$tdatacallsforredial["callDate"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "callDate";
//	callTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callTime";
	$fdata["GoodName"] = "callTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsForRedial","callTime");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
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


	$tdatacallsforredial["callTime"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "callTime";
//	redialDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "redialDate";
	$fdata["GoodName"] = "redialDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsForRedial","redialDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "redialDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(redialDate, 'dd/MM/yyyy')";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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
		$fdata["defaultSearchOption"] = "Between";

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


	$tdatacallsforredial["redialDate"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "redialDate";
//	redialTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "redialTime";
	$fdata["GoodName"] = "redialTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsForRedial","redialTime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "redialTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "convert(varchar, redialDate, 24)";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
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


	$tdatacallsforredial["redialTime"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "redialTime";
//	redialComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "redialComments";
	$fdata["GoodName"] = "redialComments";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","redialComments");
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


	$tdatacallsforredial["redialComments"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "redialComments";
//	redialIsPrivate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "redialIsPrivate";
	$fdata["GoodName"] = "redialIsPrivate";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","redialIsPrivate");
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


	$tdatacallsforredial["redialIsPrivate"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "redialIsPrivate";
//	redialDone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "redialDone";
	$fdata["GoodName"] = "redialDone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","redialDone");
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


	$tdatacallsforredial["redialDone"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "redialDone";
//	callClassificationID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "callClassificationID";
	$fdata["GoodName"] = "callClassificationID";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","callClassificationID");
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


	$tdatacallsforredial["callClassificationID"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "callClassificationID";
//	callSubClassificationID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "callSubClassificationID";
	$fdata["GoodName"] = "callSubClassificationID";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","callSubClassificationID");
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


	$tdatacallsforredial["callSubClassificationID"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "callSubClassificationID";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","totalCallTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "totalCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalCallTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 1
	);
	$vdata["timeFormatData"]["showSeconds"] = true;

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


	$tdatacallsforredial["totalCallTime"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "totalCallTime";
//	dialerRecording
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dialerRecording";
	$fdata["GoodName"] = "dialerRecording";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsForRedial","dialerRecording");
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


	$tdatacallsforredial["dialerRecording"] = $fdata;
		$tdatacallsforredial[".searchableFields"][] = "dialerRecording";


$tables_data["callsForRedial"]=&$tdatacallsforredial;
$field_labels["callsForRedial"] = &$fieldLabelscallsforredial;
$fieldToolTips["callsForRedial"] = &$fieldToolTipscallsforredial;
$placeHolders["callsForRedial"] = &$placeHolderscallsforredial;
$page_titles["callsForRedial"] = &$pageTitlescallsforredial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["callsForRedial"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["callsForRedial"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callsforredial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  dialerPhone,  dialerAgent,  format(callStart, 'dd/MM/yyyy') AS callDate,  convert(varchar, callStart, 24) AS callTime,  format(redialDate, 'dd/MM/yyyy') AS redialDate,  convert(varchar, redialDate, 24) AS redialTime,  redialComments,  redialIsPrivate,  redialDone,  callClassificationID,  callSubClassificationID,  totalCallTime,  dialerRecording";
$proto0["m_strFrom"] = "FROM dbo.Calls";
$proto0["m_strWhere"] = "(dialerAgent =':user.username') AND (redialIsPrivate =1) AND (redialDate is not null) AND (isnull(redialDone, 0) = 0)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(dialerAgent =':user.username') AND (redialIsPrivate =1) AND (redialDate is not null) AND (isnull(redialDone, 0) = 0)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(dialerAgent =':user.username') AND (redialIsPrivate =1) AND (redialDate is not null) AND (isnull(redialDone, 0) = 0)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "dialerAgent =':user.username'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=':user.username'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "redialIsPrivate =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "redialIsPrivate",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "redialDate is not null";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "redialDate",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "is not null";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "isnull(redialDone, 0) = 0";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "redialDone"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto11);

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 0";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto16["m_sql"] = "id";
$proto16["m_srcTableName"] = "callsForRedial";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto18["m_sql"] = "dialerPhone";
$proto18["m_srcTableName"] = "callsForRedial";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto20["m_sql"] = "dialerAgent";
$proto20["m_srcTableName"] = "callsForRedial";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "format(callStart, 'dd/MM/yyyy')";
$proto22["m_srcTableName"] = "callsForRedial";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "varchar"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "24"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "convert";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "convert(varchar, callStart, 24)";
$proto26["m_srcTableName"] = "callsForRedial";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "callTime";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "redialDate"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "format(redialDate, 'dd/MM/yyyy')";
$proto31["m_srcTableName"] = "callsForRedial";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "redialDate";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_CUSTOM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "varchar"
));

$proto36["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "redialDate"
));

$proto36["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "24"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "convert";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "convert(varchar, redialDate, 24)";
$proto35["m_srcTableName"] = "callsForRedial";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "redialTime";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "redialComments",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto40["m_sql"] = "redialComments";
$proto40["m_srcTableName"] = "callsForRedial";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "redialIsPrivate",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto42["m_sql"] = "redialIsPrivate";
$proto42["m_srcTableName"] = "callsForRedial";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "redialDone",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto44["m_sql"] = "redialDone";
$proto44["m_srcTableName"] = "callsForRedial";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "callClassificationID",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto46["m_sql"] = "callClassificationID";
$proto46["m_srcTableName"] = "callsForRedial";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "callSubClassificationID",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto48["m_sql"] = "callSubClassificationID";
$proto48["m_srcTableName"] = "callsForRedial";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto50["m_sql"] = "totalCallTime";
$proto50["m_srcTableName"] = "callsForRedial";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerRecording",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "callsForRedial"
));

$proto52["m_sql"] = "dialerRecording";
$proto52["m_srcTableName"] = "callsForRedial";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "dbo.Calls";
$proto55["m_srcTableName"] = "callsForRedial";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "contactId";
$proto55["m_columns"][] = "callStart";
$proto55["m_columns"][] = "callHangup";
$proto55["m_columns"][] = "callEnd";
$proto55["m_columns"][] = "talkTime";
$proto55["m_columns"][] = "typingTime";
$proto55["m_columns"][] = "totalCallTime";
$proto55["m_columns"][] = "tvchannel";
$proto55["m_columns"][] = "broadcast";
$proto55["m_columns"][] = "seller";
$proto55["m_columns"][] = "callStatusId";
$proto55["m_columns"][] = "callDenialReasonID";
$proto55["m_columns"][] = "callClassificationID";
$proto55["m_columns"][] = "callSubClassificationID";
$proto55["m_columns"][] = "remarks";
$proto55["m_columns"][] = "redialDate";
$proto55["m_columns"][] = "redialComments";
$proto55["m_columns"][] = "redialIsPrivate";
$proto55["m_columns"][] = "redialDone";
$proto55["m_columns"][] = "contactMethod";
$proto55["m_columns"][] = "courier";
$proto55["m_columns"][] = "deliveryComments";
$proto55["m_columns"][] = "courierDeliveryDate";
$proto55["m_columns"][] = "courierTimeFrom";
$proto55["m_columns"][] = "courierTimeTo";
$proto55["m_columns"][] = "dialerPhone";
$proto55["m_columns"][] = "dialerCallEpoch";
$proto55["m_columns"][] = "dialerCampaign";
$proto55["m_columns"][] = "dialerList";
$proto55["m_columns"][] = "dialerLeadID";
$proto55["m_columns"][] = "dialerAgent";
$proto55["m_columns"][] = "dialerRecording";
$proto55["m_columns"][] = "productFamilyId";
$proto55["m_columns"][] = "orderShipCompany";
$proto55["m_columns"][] = "orderInvoiceRequired";
$proto55["m_columns"][] = "callComments";
$proto55["m_columns"][] = "internalCommunication";
$proto55["m_columns"][] = "callGdprAcceptance";
$proto55["m_columns"][] = "callGdprRecordingAcceptance";
$proto55["m_columns"][] = "orderPaymentMethod";
$proto55["m_columns"][] = "contactName";
$proto55["m_columns"][] = "contactZipCode";
$proto55["m_columns"][] = "contactCity";
$proto55["m_columns"][] = "ContactArea";
$proto55["m_columns"][] = "contactGender";
$proto55["m_columns"][] = "contactAge";
$proto55["m_columns"][] = "crmUser";
$proto55["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "dbo.Calls";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "callsForRedial";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="callsForRedial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callsforredial = createSqlQuery_callsforredial();


	
		;

														

$tdatacallsforredial[".sqlquery"] = $queryData_callsforredial;



include_once(getabspath("include/callsforredial_events.php"));
$tableEvents["callsForRedial"] = new eventclass_callsforredial;
$tdatacallsforredial[".hasEvents"] = true;

?>