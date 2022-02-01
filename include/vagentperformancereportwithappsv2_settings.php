<?php
$tdatavagentperformancereportwithappsv2 = array();
$tdatavagentperformancereportwithappsv2[".searchableFields"] = array();
$tdatavagentperformancereportwithappsv2[".ShortName"] = "vagentperformancereportwithappsv2";
$tdatavagentperformancereportwithappsv2[".OwnerID"] = "";
$tdatavagentperformancereportwithappsv2[".OriginalTable"] = "dbo.vAgentPerformanceReportWithAppsV2";


$tdatavagentperformancereportwithappsv2[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatavagentperformancereportwithappsv2[".originalPagesByType"] = $tdatavagentperformancereportwithappsv2[".pagesByType"];
$tdatavagentperformancereportwithappsv2[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatavagentperformancereportwithappsv2[".originalPages"] = $tdatavagentperformancereportwithappsv2[".pages"];
$tdatavagentperformancereportwithappsv2[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatavagentperformancereportwithappsv2[".originalDefaultPages"] = $tdatavagentperformancereportwithappsv2[".defaultPages"];

//	field labels
$fieldLabelsvagentperformancereportwithappsv2 = array();
$fieldToolTipsvagentperformancereportwithappsv2 = array();
$pageTitlesvagentperformancereportwithappsv2 = array();
$placeHoldersvagentperformancereportwithappsv2 = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvagentperformancereportwithappsv2["Greek"] = array();
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"] = array();
	$placeHoldersvagentperformancereportwithappsv2["Greek"] = array();
	$pageTitlesvagentperformancereportwithappsv2["Greek"] = array();
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["dialerAgent"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["dialerAgent"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["dialerPhone"] = "Τηλ. Κλήσης";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["dialerPhone"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["dialerPhone"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["calldate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["calldate"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["calldate"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["denialReason"] = "Λόγος Άρνησης";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["denialReason"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["denialReason"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["isPositive"] = "Θετικό Αποτέλεσμα";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["isPositive"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["isPositive"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["callStatus"] = "Κατάσταση Κλήσης";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["callStatus"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["callStatus"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["dialerCampaign"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["dialerCampaign"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["dialerList"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["dialerList"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["talkTime"] = "TalkTime";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["talkTime"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["talkTime"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["typingTime"] = "TypingTime";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["typingTime"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["typingTime"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["totalCallTime"] = "Total CallTime";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["totalCallTime"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["totalCallTime"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["novaTotalApps"] = "Πλήθος Αιτ/σεων Nova";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["novaTotalApps"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["novaTotalApps"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["voltonTotalApps"] = "Πλήθος Αιτ/σεων Volton";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["voltonTotalApps"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["voltonTotalApps"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["vsalesStatus"] = "Κατάσταση Αιτ/σεων (volton)";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["vsalesStatus"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["vsalesStatus"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["vStatusCount"] = "Πλήθος σε (volton)";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["vStatusCount"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["vStatusCount"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["nSalesStatus"] = "Κατάσταση Αιτ/σεων (nova)";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["nSalesStatus"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["nSalesStatus"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["nStatusCount"] = "Πλήθος σε (nova)";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["nStatusCount"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["nStatusCount"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["forCount"] = "For Count";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["forCount"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["forCount"] = "";
	$fieldLabelsvagentperformancereportwithappsv2["Greek"]["callid"] = "Callid";
	$fieldToolTipsvagentperformancereportwithappsv2["Greek"]["callid"] = "";
	$placeHoldersvagentperformancereportwithappsv2["Greek"]["callid"] = "";
	$pageTitlesvagentperformancereportwithappsv2["Greek"]["search"] = "Agent Performance Report V2 - Κριτήρια";
	if (count($fieldToolTipsvagentperformancereportwithappsv2["Greek"]))
		$tdatavagentperformancereportwithappsv2[".isUseToolTips"] = true;
}


	$tdatavagentperformancereportwithappsv2[".NCSearch"] = true;



$tdatavagentperformancereportwithappsv2[".shortTableName"] = "vagentperformancereportwithappsv2";
$tdatavagentperformancereportwithappsv2[".nSecOptions"] = 0;

$tdatavagentperformancereportwithappsv2[".mainTableOwnerID"] = "";
$tdatavagentperformancereportwithappsv2[".entityType"] = 0;
$tdatavagentperformancereportwithappsv2[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavagentperformancereportwithappsv2[".strOriginalTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";

	



$tdatavagentperformancereportwithappsv2[".showAddInPopup"] = false;

$tdatavagentperformancereportwithappsv2[".showEditInPopup"] = false;

$tdatavagentperformancereportwithappsv2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavagentperformancereportwithappsv2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavagentperformancereportwithappsv2[".listAjax"] = false;
//	temporary
$tdatavagentperformancereportwithappsv2[".listAjax"] = false;

	$tdatavagentperformancereportwithappsv2[".audit"] = false;

	$tdatavagentperformancereportwithappsv2[".locking"] = false;


$pages = $tdatavagentperformancereportwithappsv2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavagentperformancereportwithappsv2[".edit"] = true;
	$tdatavagentperformancereportwithappsv2[".afterEditAction"] = 1;
	$tdatavagentperformancereportwithappsv2[".closePopupAfterEdit"] = 1;
	$tdatavagentperformancereportwithappsv2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavagentperformancereportwithappsv2[".add"] = true;
$tdatavagentperformancereportwithappsv2[".afterAddAction"] = 1;
$tdatavagentperformancereportwithappsv2[".closePopupAfterAdd"] = 1;
$tdatavagentperformancereportwithappsv2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavagentperformancereportwithappsv2[".list"] = true;
}



$tdatavagentperformancereportwithappsv2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavagentperformancereportwithappsv2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavagentperformancereportwithappsv2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavagentperformancereportwithappsv2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavagentperformancereportwithappsv2[".printFriendly"] = true;
}



$tdatavagentperformancereportwithappsv2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavagentperformancereportwithappsv2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavagentperformancereportwithappsv2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavagentperformancereportwithappsv2[".isUseAjaxSuggest"] = true;

$tdatavagentperformancereportwithappsv2[".rowHighlite"] = true;



																																																																																																																											

$tdatavagentperformancereportwithappsv2[".ajaxCodeSnippetAdded"] = false;

$tdatavagentperformancereportwithappsv2[".buttonsAdded"] = false;

$tdatavagentperformancereportwithappsv2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavagentperformancereportwithappsv2[".isUseTimeForSearch"] = false;


$tdatavagentperformancereportwithappsv2[".badgeColor"] = "008B8B";


$tdatavagentperformancereportwithappsv2[".allSearchFields"] = array();
$tdatavagentperformancereportwithappsv2[".filterFields"] = array();
$tdatavagentperformancereportwithappsv2[".requiredSearchFields"] = array();




$tdatavagentperformancereportwithappsv2[".tableType"] = "list";

$tdatavagentperformancereportwithappsv2[".printerPageOrientation"] = 0;
$tdatavagentperformancereportwithappsv2[".nPrinterPageScale"] = 100;

$tdatavagentperformancereportwithappsv2[".nPrinterSplitRecords"] = 40;

$tdatavagentperformancereportwithappsv2[".geocodingEnabled"] = false;










$tdatavagentperformancereportwithappsv2[".pageSize"] = 20;

$tdatavagentperformancereportwithappsv2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavagentperformancereportwithappsv2[".strOrderBy"] = $tstrOrderBy;

$tdatavagentperformancereportwithappsv2[".orderindexes"] = array();


$tdatavagentperformancereportwithappsv2[".sqlHead"] = "SELECT dialerAgent,  dialerPhone,  calldate,  callStatus,  denialReason,  isPositive,  dialerCampaign,  dialerList,  talkTime,  typingTime,  totalCallTime,  novaTotalApps,  voltonTotalApps,  vsalesStatus,  vStatusCount,  nSalesStatus,  nStatusCount,  1 AS forCount,  callid";
$tdatavagentperformancereportwithappsv2[".sqlFrom"] = "FROM dbo.vAgentPerformanceReportWithAppsV2";
$tdatavagentperformancereportwithappsv2[".sqlWhereExpr"] = "";
$tdatavagentperformancereportwithappsv2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavagentperformancereportwithappsv2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavagentperformancereportwithappsv2[".arrGroupsPerPage"] = $arrGPP;

$tdatavagentperformancereportwithappsv2[".highlightSearchResults"] = true;

$tableKeysvagentperformancereportwithappsv2 = array();
$tableKeysvagentperformancereportwithappsv2[] = "callid";
$tdatavagentperformancereportwithappsv2[".Keys"] = $tableKeysvagentperformancereportwithappsv2;


$tdatavagentperformancereportwithappsv2[".hideMobileList"] = array();




//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","dialerAgent");
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
	$edata["DisplayField"] = "fullname+ ' ('+username+')'";

	

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


	$tdatavagentperformancereportwithappsv2["dialerAgent"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "dialerAgent";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","dialerPhone");
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


	$tdatavagentperformancereportwithappsv2["dialerPhone"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "dialerPhone";
//	calldate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "calldate";
	$fdata["GoodName"] = "calldate";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","calldate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "calldate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calldate";

	
	
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


	$tdatavagentperformancereportwithappsv2["calldate"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "calldate";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","callStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "callStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callStatus";

	
	
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
	$edata["LookupTable"] = "dbo.callStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

	

	
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


	$tdatavagentperformancereportwithappsv2["callStatus"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "callStatus";
//	denialReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "denialReason";
	$fdata["GoodName"] = "denialReason";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","denialReason");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "denialReason";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "denialReason";

	
	
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


	$tdatavagentperformancereportwithappsv2["denialReason"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "denialReason";
//	isPositive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "isPositive";
	$fdata["GoodName"] = "isPositive";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","isPositive");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isPositive";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isPositive";

	
	
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


	$tdatavagentperformancereportwithappsv2["isPositive"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "isPositive";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","dialerCampaign");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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
	$edata["LinkFieldType"] = 0;
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


	$tdatavagentperformancereportwithappsv2["dialerCampaign"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","dialerList");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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
	$edata["LinkFieldType"] = 0;
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


	$tdatavagentperformancereportwithappsv2["dialerList"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "dialerList";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","talkTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "talkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "talkTime";

	
	
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


	$tdatavagentperformancereportwithappsv2["talkTime"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","typingTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "typingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typingTime";

	
	
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


	$tdatavagentperformancereportwithappsv2["typingTime"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","totalCallTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "totalCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalCallTime";

	
	
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


	$tdatavagentperformancereportwithappsv2["totalCallTime"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "totalCallTime";
//	novaTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "novaTotalApps";
	$fdata["GoodName"] = "novaTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","novaTotalApps");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "novaTotalApps";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "novaTotalApps";

	
	
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


	$tdatavagentperformancereportwithappsv2["novaTotalApps"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "novaTotalApps";
//	voltonTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "voltonTotalApps";
	$fdata["GoodName"] = "voltonTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","voltonTotalApps");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonTotalApps";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonTotalApps";

	
	
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


	$tdatavagentperformancereportwithappsv2["voltonTotalApps"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "voltonTotalApps";
//	vsalesStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "vsalesStatus";
	$fdata["GoodName"] = "vsalesStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","vsalesStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "vsalesStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vsalesStatus";

	
	
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


	$tdatavagentperformancereportwithappsv2["vsalesStatus"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "vsalesStatus";
//	vStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "vStatusCount";
	$fdata["GoodName"] = "vStatusCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","vStatusCount");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "vStatusCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vStatusCount";

	
	
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


	$tdatavagentperformancereportwithappsv2["vStatusCount"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "vStatusCount";
//	nSalesStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nSalesStatus";
	$fdata["GoodName"] = "nSalesStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","nSalesStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nSalesStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nSalesStatus";

	
	
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


	$tdatavagentperformancereportwithappsv2["nSalesStatus"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "nSalesStatus";
//	nStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nStatusCount";
	$fdata["GoodName"] = "nStatusCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","nStatusCount");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nStatusCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nStatusCount";

	
	
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


	$tdatavagentperformancereportwithappsv2["nStatusCount"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "nStatusCount";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","forCount");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "forCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1";

	
	
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


	$tdatavagentperformancereportwithappsv2["forCount"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "forCount";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV2","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callid";

	
	
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


	$tdatavagentperformancereportwithappsv2["callid"] = $fdata;
		$tdatavagentperformancereportwithappsv2[".searchableFields"][] = "callid";


$tables_data["dbo.vAgentPerformanceReportWithAppsV2"]=&$tdatavagentperformancereportwithappsv2;
$field_labels["dbo_vAgentPerformanceReportWithAppsV2"] = &$fieldLabelsvagentperformancereportwithappsv2;
$fieldToolTips["dbo_vAgentPerformanceReportWithAppsV2"] = &$fieldToolTipsvagentperformancereportwithappsv2;
$placeHolders["dbo_vAgentPerformanceReportWithAppsV2"] = &$placeHoldersvagentperformancereportwithappsv2;
$page_titles["dbo_vAgentPerformanceReportWithAppsV2"] = &$pageTitlesvagentperformancereportwithappsv2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.vAgentPerformanceReportWithAppsV2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vAgentPerformanceReportWithAppsV2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vagentperformancereportwithappsv2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dialerAgent,  dialerPhone,  calldate,  callStatus,  denialReason,  isPositive,  dialerCampaign,  dialerList,  talkTime,  typingTime,  totalCallTime,  novaTotalApps,  voltonTotalApps,  vsalesStatus,  vStatusCount,  nSalesStatus,  nStatusCount,  1 AS forCount,  callid";
$proto0["m_strFrom"] = "FROM dbo.vAgentPerformanceReportWithAppsV2";
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
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto6["m_sql"] = "dialerAgent";
$proto6["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto8["m_sql"] = "dialerPhone";
$proto8["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "calldate",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto10["m_sql"] = "calldate";
$proto10["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto12["m_sql"] = "callStatus";
$proto12["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "denialReason",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto14["m_sql"] = "denialReason";
$proto14["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "isPositive",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto16["m_sql"] = "isPositive";
$proto16["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto18["m_sql"] = "dialerCampaign";
$proto18["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto20["m_sql"] = "dialerList";
$proto20["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto22["m_sql"] = "talkTime";
$proto22["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto24["m_sql"] = "typingTime";
$proto24["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto26["m_sql"] = "totalCallTime";
$proto26["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "novaTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto28["m_sql"] = "novaTotalApps";
$proto28["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto30["m_sql"] = "voltonTotalApps";
$proto30["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "vsalesStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto32["m_sql"] = "vsalesStatus";
$proto32["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "vStatusCount",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto34["m_sql"] = "vStatusCount";
$proto34["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nSalesStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto36["m_sql"] = "nSalesStatus";
$proto36["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nStatusCount",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto38["m_sql"] = "nStatusCount";
$proto38["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto40["m_sql"] = "1";
$proto40["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV2"
));

$proto42["m_sql"] = "callid";
$proto42["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto45["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "callid";
$proto45["m_columns"][] = "dialerAgent";
$proto45["m_columns"][] = "dialerPhone";
$proto45["m_columns"][] = "calldate";
$proto45["m_columns"][] = "denialReason";
$proto45["m_columns"][] = "isPositive";
$proto45["m_columns"][] = "callStatus";
$proto45["m_columns"][] = "dialerCampaign";
$proto45["m_columns"][] = "dialerList";
$proto45["m_columns"][] = "talkTime";
$proto45["m_columns"][] = "typingTime";
$proto45["m_columns"][] = "totalCallTime";
$proto45["m_columns"][] = "novaTotalApps";
$proto45["m_columns"][] = "voltonTotalApps";
$proto45["m_columns"][] = "vsalesStatus";
$proto45["m_columns"][] = "vStatusCount";
$proto45["m_columns"][] = "nSalesStatus";
$proto45["m_columns"][] = "nStatusCount";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.vAgentPerformanceReportWithAppsV2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vagentperformancereportwithappsv2 = createSqlQuery_vagentperformancereportwithappsv2();


	
		;

																			

$tdatavagentperformancereportwithappsv2[".sqlquery"] = $queryData_vagentperformancereportwithappsv2;



$tableEvents["dbo.vAgentPerformanceReportWithAppsV2"] = new eventsBase;
$tdatavagentperformancereportwithappsv2[".hasEvents"] = false;

?>