<?php
$tdataagent_performance_report_v2 = array();
$tdataagent_performance_report_v2[".searchableFields"] = array();
$tdataagent_performance_report_v2[".ShortName"] = "agent_performance_report_v2";
$tdataagent_performance_report_v2[".OwnerID"] = "";
$tdataagent_performance_report_v2[".OriginalTable"] = "dbo.vAgentPerformanceReportWithApps";


$tdataagent_performance_report_v2[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataagent_performance_report_v2[".originalPagesByType"] = $tdataagent_performance_report_v2[".pagesByType"];
$tdataagent_performance_report_v2[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataagent_performance_report_v2[".originalPages"] = $tdataagent_performance_report_v2[".pages"];
$tdataagent_performance_report_v2[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataagent_performance_report_v2[".originalDefaultPages"] = $tdataagent_performance_report_v2[".defaultPages"];

//	field labels
$fieldLabelsagent_performance_report_v2 = array();
$fieldToolTipsagent_performance_report_v2 = array();
$pageTitlesagent_performance_report_v2 = array();
$placeHoldersagent_performance_report_v2 = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagent_performance_report_v2["Greek"] = array();
	$fieldToolTipsagent_performance_report_v2["Greek"] = array();
	$placeHoldersagent_performance_report_v2["Greek"] = array();
	$pageTitlesagent_performance_report_v2["Greek"] = array();
	$fieldLabelsagent_performance_report_v2["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsagent_performance_report_v2["Greek"]["dialerAgent"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["dialerAgent"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["dialerPhone"] = "Dialer Phone";
	$fieldToolTipsagent_performance_report_v2["Greek"]["dialerPhone"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["dialerPhone"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["calldate"] = "Calldate";
	$fieldToolTipsagent_performance_report_v2["Greek"]["calldate"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["calldate"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["callStatus"] = "Call Status";
	$fieldToolTipsagent_performance_report_v2["Greek"]["callStatus"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["callStatus"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["denialReason"] = "Denial Reason";
	$fieldToolTipsagent_performance_report_v2["Greek"]["denialReason"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["denialReason"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["dialerCampaign"] = "Dialer Campaign";
	$fieldToolTipsagent_performance_report_v2["Greek"]["dialerCampaign"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["dialerCampaign"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["dialerList"] = "Dialer List";
	$fieldToolTipsagent_performance_report_v2["Greek"]["dialerList"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["dialerList"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["talkTime"] = "Talk Time";
	$fieldToolTipsagent_performance_report_v2["Greek"]["talkTime"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["talkTime"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["typingTime"] = "Typing Time";
	$fieldToolTipsagent_performance_report_v2["Greek"]["typingTime"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["typingTime"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["totalCallTime"] = "Total Call Time";
	$fieldToolTipsagent_performance_report_v2["Greek"]["totalCallTime"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["totalCallTime"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["vTotalApps"] = "Volton Σύνολο";
	$fieldToolTipsagent_performance_report_v2["Greek"]["vTotalApps"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["vTotalApps"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["vPending"] = "Volton Εκκρεμότητα";
	$fieldToolTipsagent_performance_report_v2["Greek"]["vPending"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["vPending"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["vConfirmed"] = "Volton επιβεβαίωση";
	$fieldToolTipsagent_performance_report_v2["Greek"]["vConfirmed"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["vConfirmed"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["vCanceled"] = "Volton Ακύρωση";
	$fieldToolTipsagent_performance_report_v2["Greek"]["vCanceled"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["vCanceled"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["nTotalApps"] = "Nova Σύνολο ";
	$fieldToolTipsagent_performance_report_v2["Greek"]["nTotalApps"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["nTotalApps"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["nPending"] = "Nova Εκκρεμότητα";
	$fieldToolTipsagent_performance_report_v2["Greek"]["nPending"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["nPending"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["nConfirmed"] = "Nova Επιβεβαίωση";
	$fieldToolTipsagent_performance_report_v2["Greek"]["nConfirmed"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["nConfirmed"] = "";
	$fieldLabelsagent_performance_report_v2["Greek"]["nCanceled"] = "Nova Ακύρωση";
	$fieldToolTipsagent_performance_report_v2["Greek"]["nCanceled"] = "";
	$placeHoldersagent_performance_report_v2["Greek"]["nCanceled"] = "";
	if (count($fieldToolTipsagent_performance_report_v2["Greek"]))
		$tdataagent_performance_report_v2[".isUseToolTips"] = true;
}


	$tdataagent_performance_report_v2[".NCSearch"] = true;



$tdataagent_performance_report_v2[".shortTableName"] = "agent_performance_report_v2";
$tdataagent_performance_report_v2[".nSecOptions"] = 0;

$tdataagent_performance_report_v2[".mainTableOwnerID"] = "";
$tdataagent_performance_report_v2[".entityType"] = 2;
$tdataagent_performance_report_v2[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagent_performance_report_v2[".strOriginalTableName"] = "dbo.vAgentPerformanceReportWithApps";

	



$tdataagent_performance_report_v2[".showAddInPopup"] = false;

$tdataagent_performance_report_v2[".showEditInPopup"] = false;

$tdataagent_performance_report_v2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagent_performance_report_v2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagent_performance_report_v2[".listAjax"] = false;
//	temporary
$tdataagent_performance_report_v2[".listAjax"] = false;

	$tdataagent_performance_report_v2[".audit"] = false;

	$tdataagent_performance_report_v2[".locking"] = false;


$pages = $tdataagent_performance_report_v2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagent_performance_report_v2[".edit"] = true;
	$tdataagent_performance_report_v2[".afterEditAction"] = 1;
	$tdataagent_performance_report_v2[".closePopupAfterEdit"] = 1;
	$tdataagent_performance_report_v2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagent_performance_report_v2[".add"] = true;
$tdataagent_performance_report_v2[".afterAddAction"] = 1;
$tdataagent_performance_report_v2[".closePopupAfterAdd"] = 1;
$tdataagent_performance_report_v2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagent_performance_report_v2[".list"] = true;
}



$tdataagent_performance_report_v2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagent_performance_report_v2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagent_performance_report_v2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagent_performance_report_v2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagent_performance_report_v2[".printFriendly"] = true;
}



$tdataagent_performance_report_v2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagent_performance_report_v2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagent_performance_report_v2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagent_performance_report_v2[".isUseAjaxSuggest"] = true;




																																																																																																																											

$tdataagent_performance_report_v2[".ajaxCodeSnippetAdded"] = false;

$tdataagent_performance_report_v2[".buttonsAdded"] = false;

$tdataagent_performance_report_v2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagent_performance_report_v2[".isUseTimeForSearch"] = false;


$tdataagent_performance_report_v2[".badgeColor"] = "B22222";


$tdataagent_performance_report_v2[".allSearchFields"] = array();
$tdataagent_performance_report_v2[".filterFields"] = array();
$tdataagent_performance_report_v2[".requiredSearchFields"] = array();




$tdataagent_performance_report_v2[".tableType"] = "report";

$tdataagent_performance_report_v2[".printerPageOrientation"] = 0;
$tdataagent_performance_report_v2[".nPrinterPageScale"] = 100;

$tdataagent_performance_report_v2[".nPrinterSplitRecords"] = 40;

$tdataagent_performance_report_v2[".geocodingEnabled"] = false;

//report settings
$tdataagent_performance_report_v2[".crossTabReport"] = true;

$tdataagent_performance_report_v2[".reportGroupFields"] = true;
$tdataagent_performance_report_v2[".pageSize"] = 5;
$tdataagent_performance_report_v2[".showGroupSummaryCount"] = true;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "dialerAgent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerAgent";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callStatus";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callStatus";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "denialReason";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "denialReason";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerCampaign";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerCampaign";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerList";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerList";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataagent_performance_report_v2[".reportGroupFieldsData"] = $reportGroupFields;
$tdataagent_performance_report_v2[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdataagent_performance_report_v2[".reportHorizontalSummary"] = true;

$tdataagent_performance_report_v2[".isExistTotalFields"] = true;

$tdataagent_performance_report_v2[".reportVerticalSummary"] = true;



$tdataagent_performance_report_v2[".repShowDet"] = true;

$tdataagent_performance_report_v2[".reportLayout"] = 0;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagent_performance_report_v2[".strOrderBy"] = $tstrOrderBy;

$tdataagent_performance_report_v2[".orderindexes"] = array();


$tdataagent_performance_report_v2[".sqlHead"] = "SELECT dialerAgent,  	dialerPhone,  	calldate,  	callStatus,  	denialReason,  	dialerCampaign,  	dialerList,  	talkTime,  	typingTime,  	totalCallTime,  	vTotalApps,  	vPending,  	vConfirmed,  	vCanceled,  	nTotalApps,  	nPending,  	nConfirmed,  	nCanceled";
$tdataagent_performance_report_v2[".sqlFrom"] = "FROM dbo.vAgentPerformanceReportWithApps";
$tdataagent_performance_report_v2[".sqlWhereExpr"] = "";
$tdataagent_performance_report_v2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagent_performance_report_v2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagent_performance_report_v2[".arrGroupsPerPage"] = $arrGPP;

$tdataagent_performance_report_v2[".highlightSearchResults"] = true;

$tableKeysagent_performance_report_v2 = array();
$tdataagent_performance_report_v2[".Keys"] = $tableKeysagent_performance_report_v2;


$tdataagent_performance_report_v2[".hideMobileList"] = array();




//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","dialerAgent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["dialerAgent"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "dialerAgent";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","dialerPhone");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["dialerPhone"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "dialerPhone";
//	calldate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "calldate";
	$fdata["GoodName"] = "calldate";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","calldate");
	$fdata["FieldType"] = 202;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["calldate"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "calldate";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","callStatus");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["callStatus"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "callStatus";
//	denialReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "denialReason";
	$fdata["GoodName"] = "denialReason";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","denialReason");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["denialReason"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "denialReason";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","dialerCampaign");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["dialerCampaign"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","dialerList");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["dialerList"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "dialerList";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","talkTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["talkTime"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","typingTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["typingTime"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","totalCallTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["totalCallTime"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "totalCallTime";
//	vTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "vTotalApps";
	$fdata["GoodName"] = "vTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","vTotalApps");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["vTotalApps"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "vTotalApps";
//	vPending
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vPending";
	$fdata["GoodName"] = "vPending";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","vPending");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["vPending"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "vPending";
//	vConfirmed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "vConfirmed";
	$fdata["GoodName"] = "vConfirmed";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","vConfirmed");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["vConfirmed"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "vConfirmed";
//	vCanceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "vCanceled";
	$fdata["GoodName"] = "vCanceled";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","vCanceled");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["vCanceled"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "vCanceled";
//	nTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nTotalApps";
	$fdata["GoodName"] = "nTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","nTotalApps");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["nTotalApps"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "nTotalApps";
//	nPending
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nPending";
	$fdata["GoodName"] = "nPending";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","nPending");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["nPending"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "nPending";
//	nConfirmed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nConfirmed";
	$fdata["GoodName"] = "nConfirmed";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","nConfirmed");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["nConfirmed"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "nConfirmed";
//	nCanceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nCanceled";
	$fdata["GoodName"] = "nCanceled";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report_v2","nCanceled");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagent_performance_report_v2["nCanceled"] = $fdata;
		$tdataagent_performance_report_v2[".searchableFields"][] = "nCanceled";


$tables_data["Agent Performance Report v2"]=&$tdataagent_performance_report_v2;
$field_labels["Agent_Performance_Report_v2"] = &$fieldLabelsagent_performance_report_v2;
$fieldToolTips["Agent_Performance_Report_v2"] = &$fieldToolTipsagent_performance_report_v2;
$placeHolders["Agent_Performance_Report_v2"] = &$placeHoldersagent_performance_report_v2;
$page_titles["Agent_Performance_Report_v2"] = &$pageTitlesagent_performance_report_v2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Agent Performance Report v2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_agent_performance_report_v2()
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
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto6["m_sql"] = "dialerAgent";
$proto6["m_srcTableName"] = "Agent Performance Report v2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto8["m_sql"] = "dialerPhone";
$proto8["m_srcTableName"] = "Agent Performance Report v2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "calldate",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto10["m_sql"] = "calldate";
$proto10["m_srcTableName"] = "Agent Performance Report v2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto12["m_sql"] = "callStatus";
$proto12["m_srcTableName"] = "Agent Performance Report v2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "denialReason",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto14["m_sql"] = "denialReason";
$proto14["m_srcTableName"] = "Agent Performance Report v2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto16["m_sql"] = "dialerCampaign";
$proto16["m_srcTableName"] = "Agent Performance Report v2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto18["m_sql"] = "dialerList";
$proto18["m_srcTableName"] = "Agent Performance Report v2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto20["m_sql"] = "talkTime";
$proto20["m_srcTableName"] = "Agent Performance Report v2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto22["m_sql"] = "typingTime";
$proto22["m_srcTableName"] = "Agent Performance Report v2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto24["m_sql"] = "totalCallTime";
$proto24["m_srcTableName"] = "Agent Performance Report v2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "vTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto26["m_sql"] = "vTotalApps";
$proto26["m_srcTableName"] = "Agent Performance Report v2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vPending",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto28["m_sql"] = "vPending";
$proto28["m_srcTableName"] = "Agent Performance Report v2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "vConfirmed",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto30["m_sql"] = "vConfirmed";
$proto30["m_srcTableName"] = "Agent Performance Report v2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "vCanceled",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto32["m_sql"] = "vCanceled";
$proto32["m_srcTableName"] = "Agent Performance Report v2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto34["m_sql"] = "nTotalApps";
$proto34["m_srcTableName"] = "Agent Performance Report v2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nPending",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto36["m_sql"] = "nPending";
$proto36["m_srcTableName"] = "Agent Performance Report v2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nConfirmed",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto38["m_sql"] = "nConfirmed";
$proto38["m_srcTableName"] = "Agent Performance Report v2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nCanceled",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report v2"
));

$proto40["m_sql"] = "nCanceled";
$proto40["m_srcTableName"] = "Agent Performance Report v2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.vAgentPerformanceReportWithApps";
$proto43["m_srcTableName"] = "Agent Performance Report v2";
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
$proto42["m_srcTableName"] = "Agent Performance Report v2";
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
$proto0["m_srcTableName"]="Agent Performance Report v2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agent_performance_report_v2 = createSqlQuery_agent_performance_report_v2();


	
		;

																		

$tdataagent_performance_report_v2[".sqlquery"] = $queryData_agent_performance_report_v2;



$tableEvents["Agent Performance Report v2"] = new eventsBase;
$tdataagent_performance_report_v2[".hasEvents"] = false;

?>