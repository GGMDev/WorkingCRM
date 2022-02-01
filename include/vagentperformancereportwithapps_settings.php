<?php
$tdatavagentperformancereportwithapps = array();
$tdatavagentperformancereportwithapps[".searchableFields"] = array();
$tdatavagentperformancereportwithapps[".ShortName"] = "vagentperformancereportwithapps";
$tdatavagentperformancereportwithapps[".OwnerID"] = "";
$tdatavagentperformancereportwithapps[".OriginalTable"] = "dbo.vAgentPerformanceReportWithApps";


$tdatavagentperformancereportwithapps[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavagentperformancereportwithapps[".originalPagesByType"] = $tdatavagentperformancereportwithapps[".pagesByType"];
$tdatavagentperformancereportwithapps[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavagentperformancereportwithapps[".originalPages"] = $tdatavagentperformancereportwithapps[".pages"];
$tdatavagentperformancereportwithapps[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavagentperformancereportwithapps[".originalDefaultPages"] = $tdatavagentperformancereportwithapps[".defaultPages"];

//	field labels
$fieldLabelsvagentperformancereportwithapps = array();
$fieldToolTipsvagentperformancereportwithapps = array();
$pageTitlesvagentperformancereportwithapps = array();
$placeHoldersvagentperformancereportwithapps = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvagentperformancereportwithapps["Greek"] = array();
	$fieldToolTipsvagentperformancereportwithapps["Greek"] = array();
	$placeHoldersvagentperformancereportwithapps["Greek"] = array();
	$pageTitlesvagentperformancereportwithapps["Greek"] = array();
	$fieldLabelsvagentperformancereportwithapps["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["dialerAgent"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["dialerAgent"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["dialerPhone"] = "Αρ. Τηλεφώνου";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["dialerPhone"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["dialerPhone"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["calldate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["calldate"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["calldate"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["callStatus"] = "Κατάσταση";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["callStatus"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["callStatus"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["denialReason"] = "Λόγος Άρνησης";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["denialReason"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["denialReason"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["dialerCampaign"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["dialerCampaign"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["talkTime"] = "Ομιλία (sec)";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["talkTime"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["talkTime"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["typingTime"] = "Επεξεργασία (sec)";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["typingTime"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["typingTime"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["totalCallTime"] = "Διάρκεια (sec)";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["totalCallTime"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["totalCallTime"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["vTotalApps"] = "Volton Σύνολο";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["vTotalApps"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["vTotalApps"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["vPending"] = "Volton Εκκρεμότητα";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["vPending"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["vPending"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["vConfirmed"] = "Volton Επιβεβαιωμένες";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["vConfirmed"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["vConfirmed"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["vCanceled"] = "Volton Ακυρωμένες";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["vCanceled"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["vCanceled"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["nTotalApps"] = "Nova Σύνολο";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["nTotalApps"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["nTotalApps"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["nPending"] = "Nova Εκκρεμότητα";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["nPending"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["nPending"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["nConfirmed"] = "Nova Επιβεβαιωμένες";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["nConfirmed"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["nConfirmed"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["nCanceled"] = "Nova Ακυρωμένες";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["nCanceled"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["nCanceled"] = "";
	$fieldLabelsvagentperformancereportwithapps["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsvagentperformancereportwithapps["Greek"]["dialerList"] = "";
	$placeHoldersvagentperformancereportwithapps["Greek"]["dialerList"] = "";
	if (count($fieldToolTipsvagentperformancereportwithapps["Greek"]))
		$tdatavagentperformancereportwithapps[".isUseToolTips"] = true;
}


	$tdatavagentperformancereportwithapps[".NCSearch"] = true;



$tdatavagentperformancereportwithapps[".shortTableName"] = "vagentperformancereportwithapps";
$tdatavagentperformancereportwithapps[".nSecOptions"] = 0;

$tdatavagentperformancereportwithapps[".mainTableOwnerID"] = "";
$tdatavagentperformancereportwithapps[".entityType"] = 0;
$tdatavagentperformancereportwithapps[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavagentperformancereportwithapps[".strOriginalTableName"] = "dbo.vAgentPerformanceReportWithApps";

	



$tdatavagentperformancereportwithapps[".showAddInPopup"] = false;

$tdatavagentperformancereportwithapps[".showEditInPopup"] = false;

$tdatavagentperformancereportwithapps[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavagentperformancereportwithapps[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatavagentperformancereportwithapps[".listAjax"] = true;
//	temporary
$tdatavagentperformancereportwithapps[".listAjax"] = false;

	$tdatavagentperformancereportwithapps[".audit"] = false;

	$tdatavagentperformancereportwithapps[".locking"] = false;


$pages = $tdatavagentperformancereportwithapps[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavagentperformancereportwithapps[".edit"] = true;
	$tdatavagentperformancereportwithapps[".afterEditAction"] = 1;
	$tdatavagentperformancereportwithapps[".closePopupAfterEdit"] = 1;
	$tdatavagentperformancereportwithapps[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavagentperformancereportwithapps[".add"] = true;
$tdatavagentperformancereportwithapps[".afterAddAction"] = 1;
$tdatavagentperformancereportwithapps[".closePopupAfterAdd"] = 1;
$tdatavagentperformancereportwithapps[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavagentperformancereportwithapps[".list"] = true;
}



$tdatavagentperformancereportwithapps[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavagentperformancereportwithapps[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavagentperformancereportwithapps[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavagentperformancereportwithapps[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavagentperformancereportwithapps[".printFriendly"] = true;
}



$tdatavagentperformancereportwithapps[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavagentperformancereportwithapps[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavagentperformancereportwithapps[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavagentperformancereportwithapps[".isUseAjaxSuggest"] = true;

$tdatavagentperformancereportwithapps[".rowHighlite"] = true;



																																																																																																																											

$tdatavagentperformancereportwithapps[".ajaxCodeSnippetAdded"] = false;

$tdatavagentperformancereportwithapps[".buttonsAdded"] = false;

$tdatavagentperformancereportwithapps[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavagentperformancereportwithapps[".isUseTimeForSearch"] = false;


$tdatavagentperformancereportwithapps[".badgeColor"] = "6B8E23";


$tdatavagentperformancereportwithapps[".allSearchFields"] = array();
$tdatavagentperformancereportwithapps[".filterFields"] = array();
$tdatavagentperformancereportwithapps[".requiredSearchFields"] = array();

$tdatavagentperformancereportwithapps[".googleLikeFields"] = array();
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "dialerAgent";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "dialerPhone";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "calldate";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "callStatus";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "denialReason";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "dialerCampaign";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "dialerList";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "talkTime";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "typingTime";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "totalCallTime";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "vTotalApps";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "vPending";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "vConfirmed";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "vCanceled";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "nTotalApps";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "nPending";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "nConfirmed";
$tdatavagentperformancereportwithapps[".googleLikeFields"][] = "nCanceled";



$tdatavagentperformancereportwithapps[".tableType"] = "list";

$tdatavagentperformancereportwithapps[".printerPageOrientation"] = 0;
$tdatavagentperformancereportwithapps[".nPrinterPageScale"] = 100;

$tdatavagentperformancereportwithapps[".nPrinterSplitRecords"] = 40;

$tdatavagentperformancereportwithapps[".geocodingEnabled"] = false;





$tdatavagentperformancereportwithapps[".isResizeColumns"] = true;





$tdatavagentperformancereportwithapps[".pageSize"] = 20;

$tdatavagentperformancereportwithapps[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavagentperformancereportwithapps[".strOrderBy"] = $tstrOrderBy;

$tdatavagentperformancereportwithapps[".orderindexes"] = array();


$tdatavagentperformancereportwithapps[".sqlHead"] = "SELECT dialerAgent,  	dialerPhone,  	calldate,  	callStatus,  	denialReason,  	dialerCampaign,  	dialerList,  	talkTime,  	typingTime,  	totalCallTime,  	vTotalApps,  	vPending,  	vConfirmed,  	vCanceled,  	nTotalApps,  	nPending,  	nConfirmed,  	nCanceled";
$tdatavagentperformancereportwithapps[".sqlFrom"] = "FROM dbo.vAgentPerformanceReportWithApps";
$tdatavagentperformancereportwithapps[".sqlWhereExpr"] = "";
$tdatavagentperformancereportwithapps[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavagentperformancereportwithapps[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavagentperformancereportwithapps[".arrGroupsPerPage"] = $arrGPP;

$tdatavagentperformancereportwithapps[".highlightSearchResults"] = true;

$tableKeysvagentperformancereportwithapps = array();
$tdatavagentperformancereportwithapps[".Keys"] = $tableKeysvagentperformancereportwithapps;


$tdatavagentperformancereportwithapps[".hideMobileList"] = array();




//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","dialerAgent");
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
	$edata["DisplayField"] = "fullname+' ('+username+')'";

	

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


	$tdatavagentperformancereportwithapps["dialerAgent"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "dialerAgent";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","dialerPhone");
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


	$tdatavagentperformancereportwithapps["dialerPhone"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "dialerPhone";
//	calldate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "calldate";
	$fdata["GoodName"] = "calldate";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","calldate");
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


	$tdatavagentperformancereportwithapps["calldate"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "calldate";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","callStatus");
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


	$tdatavagentperformancereportwithapps["callStatus"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "callStatus";
//	denialReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "denialReason";
	$fdata["GoodName"] = "denialReason";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","denialReason");
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


	$tdatavagentperformancereportwithapps["denialReason"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "denialReason";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","dialerCampaign");
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


	$tdatavagentperformancereportwithapps["dialerCampaign"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","dialerList");
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


	$tdatavagentperformancereportwithapps["dialerList"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "dialerList";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","talkTime");
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


	$tdatavagentperformancereportwithapps["talkTime"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","typingTime");
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


	$tdatavagentperformancereportwithapps["typingTime"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","totalCallTime");
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


	$tdatavagentperformancereportwithapps["totalCallTime"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "totalCallTime";
//	vTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "vTotalApps";
	$fdata["GoodName"] = "vTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","vTotalApps");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "vTotalApps";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vTotalApps";

	
	
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


	$tdatavagentperformancereportwithapps["vTotalApps"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "vTotalApps";
//	vPending
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vPending";
	$fdata["GoodName"] = "vPending";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","vPending");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "vPending";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vPending";

	
	
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


	$tdatavagentperformancereportwithapps["vPending"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "vPending";
//	vConfirmed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "vConfirmed";
	$fdata["GoodName"] = "vConfirmed";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","vConfirmed");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "vConfirmed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vConfirmed";

	
	
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


	$tdatavagentperformancereportwithapps["vConfirmed"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "vConfirmed";
//	vCanceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "vCanceled";
	$fdata["GoodName"] = "vCanceled";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","vCanceled");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "vCanceled";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vCanceled";

	
	
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


	$tdatavagentperformancereportwithapps["vCanceled"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "vCanceled";
//	nTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nTotalApps";
	$fdata["GoodName"] = "nTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","nTotalApps");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nTotalApps";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nTotalApps";

	
	
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


	$tdatavagentperformancereportwithapps["nTotalApps"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "nTotalApps";
//	nPending
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nPending";
	$fdata["GoodName"] = "nPending";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","nPending");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nPending";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nPending";

	
	
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


	$tdatavagentperformancereportwithapps["nPending"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "nPending";
//	nConfirmed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nConfirmed";
	$fdata["GoodName"] = "nConfirmed";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","nConfirmed");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nConfirmed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nConfirmed";

	
	
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


	$tdatavagentperformancereportwithapps["nConfirmed"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "nConfirmed";
//	nCanceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nCanceled";
	$fdata["GoodName"] = "nCanceled";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithApps","nCanceled");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nCanceled";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nCanceled";

	
	
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


	$tdatavagentperformancereportwithapps["nCanceled"] = $fdata;
		$tdatavagentperformancereportwithapps[".searchableFields"][] = "nCanceled";


$tables_data["dbo.vAgentPerformanceReportWithApps"]=&$tdatavagentperformancereportwithapps;
$field_labels["dbo_vAgentPerformanceReportWithApps"] = &$fieldLabelsvagentperformancereportwithapps;
$fieldToolTips["dbo_vAgentPerformanceReportWithApps"] = &$fieldToolTipsvagentperformancereportwithapps;
$placeHolders["dbo_vAgentPerformanceReportWithApps"] = &$placeHoldersvagentperformancereportwithapps;
$page_titles["dbo_vAgentPerformanceReportWithApps"] = &$pageTitlesvagentperformancereportwithapps;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.vAgentPerformanceReportWithApps"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vAgentPerformanceReportWithApps"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vagentperformancereportwithapps()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dialerAgent,  	dialerPhone,  	calldate,  	callStatus,  	denialReason,  	dialerCampaign,  	dialerList,  	talkTime,  	typingTime,  	totalCallTime,  	vTotalApps,  	vPending,  	vConfirmed,  	vCanceled,  	nTotalApps,  	nPending,  	nConfirmed,  	nCanceled";
$proto0["m_strFrom"] = "FROM dbo.vAgentPerformanceReportWithApps";
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
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto6["m_sql"] = "dialerAgent";
$proto6["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto8["m_sql"] = "dialerPhone";
$proto8["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "calldate",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto10["m_sql"] = "calldate";
$proto10["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto12["m_sql"] = "callStatus";
$proto12["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "denialReason",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto14["m_sql"] = "denialReason";
$proto14["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto16["m_sql"] = "dialerCampaign";
$proto16["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto18["m_sql"] = "dialerList";
$proto18["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto20["m_sql"] = "talkTime";
$proto20["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto22["m_sql"] = "typingTime";
$proto22["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto24["m_sql"] = "totalCallTime";
$proto24["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "vTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto26["m_sql"] = "vTotalApps";
$proto26["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vPending",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto28["m_sql"] = "vPending";
$proto28["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "vConfirmed",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto30["m_sql"] = "vConfirmed";
$proto30["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "vCanceled",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto32["m_sql"] = "vCanceled";
$proto32["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto34["m_sql"] = "nTotalApps";
$proto34["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nPending",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto36["m_sql"] = "nPending";
$proto36["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nConfirmed",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto38["m_sql"] = "nConfirmed";
$proto38["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nCanceled",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithApps"
));

$proto40["m_sql"] = "nCanceled";
$proto40["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.vAgentPerformanceReportWithApps";
$proto43["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "dialerAgent";
$proto43["m_columns"][] = "dialerPhone";
$proto43["m_columns"][] = "calldate";
$proto43["m_columns"][] = "callStatus";
$proto43["m_columns"][] = "denialReason";
$proto43["m_columns"][] = "dialerCampaign";
$proto43["m_columns"][] = "dialerList";
$proto43["m_columns"][] = "talkTime";
$proto43["m_columns"][] = "typingTime";
$proto43["m_columns"][] = "totalCallTime";
$proto43["m_columns"][] = "vTotalApps";
$proto43["m_columns"][] = "vPending";
$proto43["m_columns"][] = "vConfirmed";
$proto43["m_columns"][] = "vCanceled";
$proto43["m_columns"][] = "nTotalApps";
$proto43["m_columns"][] = "nPending";
$proto43["m_columns"][] = "nConfirmed";
$proto43["m_columns"][] = "nCanceled";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "dbo.vAgentPerformanceReportWithApps";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "dbo.vAgentPerformanceReportWithApps";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.vAgentPerformanceReportWithApps";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vagentperformancereportwithapps = createSqlQuery_vagentperformancereportwithapps();


	
		;

																		

$tdatavagentperformancereportwithapps[".sqlquery"] = $queryData_vagentperformancereportwithapps;



$tableEvents["dbo.vAgentPerformanceReportWithApps"] = new eventsBase;
$tdatavagentperformancereportwithapps[".hasEvents"] = false;

?>