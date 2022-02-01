<?php
$tdataagent_performance_report = array();
$tdataagent_performance_report[".searchableFields"] = array();
$tdataagent_performance_report[".ShortName"] = "agent_performance_report";
$tdataagent_performance_report[".OwnerID"] = "";
$tdataagent_performance_report[".OriginalTable"] = "dbo.vAgentPerformanceReportWithApps";


$tdataagent_performance_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataagent_performance_report[".originalPagesByType"] = $tdataagent_performance_report[".pagesByType"];
$tdataagent_performance_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataagent_performance_report[".originalPages"] = $tdataagent_performance_report[".pages"];
$tdataagent_performance_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataagent_performance_report[".originalDefaultPages"] = $tdataagent_performance_report[".defaultPages"];

//	field labels
$fieldLabelsagent_performance_report = array();
$fieldToolTipsagent_performance_report = array();
$pageTitlesagent_performance_report = array();
$placeHoldersagent_performance_report = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagent_performance_report["Greek"] = array();
	$fieldToolTipsagent_performance_report["Greek"] = array();
	$placeHoldersagent_performance_report["Greek"] = array();
	$pageTitlesagent_performance_report["Greek"] = array();
	$fieldLabelsagent_performance_report["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsagent_performance_report["Greek"]["dialerAgent"] = "";
	$placeHoldersagent_performance_report["Greek"]["dialerAgent"] = "";
	$fieldLabelsagent_performance_report["Greek"]["dialerPhone"] = "Dialer Phone";
	$fieldToolTipsagent_performance_report["Greek"]["dialerPhone"] = "";
	$placeHoldersagent_performance_report["Greek"]["dialerPhone"] = "";
	$fieldLabelsagent_performance_report["Greek"]["calldate"] = "Calldate";
	$fieldToolTipsagent_performance_report["Greek"]["calldate"] = "";
	$placeHoldersagent_performance_report["Greek"]["calldate"] = "";
	$fieldLabelsagent_performance_report["Greek"]["callStatus"] = "Call Status";
	$fieldToolTipsagent_performance_report["Greek"]["callStatus"] = "";
	$placeHoldersagent_performance_report["Greek"]["callStatus"] = "";
	$fieldLabelsagent_performance_report["Greek"]["denialReason"] = "Denial Reason";
	$fieldToolTipsagent_performance_report["Greek"]["denialReason"] = "";
	$placeHoldersagent_performance_report["Greek"]["denialReason"] = "";
	$fieldLabelsagent_performance_report["Greek"]["dialerCampaign"] = "Dialer Campaign";
	$fieldToolTipsagent_performance_report["Greek"]["dialerCampaign"] = "";
	$placeHoldersagent_performance_report["Greek"]["dialerCampaign"] = "";
	$fieldLabelsagent_performance_report["Greek"]["dialerList"] = "Dialer List";
	$fieldToolTipsagent_performance_report["Greek"]["dialerList"] = "";
	$placeHoldersagent_performance_report["Greek"]["dialerList"] = "";
	$fieldLabelsagent_performance_report["Greek"]["talkTime"] = "Talk Time";
	$fieldToolTipsagent_performance_report["Greek"]["talkTime"] = "";
	$placeHoldersagent_performance_report["Greek"]["talkTime"] = "";
	$fieldLabelsagent_performance_report["Greek"]["typingTime"] = "Typing Time";
	$fieldToolTipsagent_performance_report["Greek"]["typingTime"] = "";
	$placeHoldersagent_performance_report["Greek"]["typingTime"] = "";
	$fieldLabelsagent_performance_report["Greek"]["totalCallTime"] = "Total Call Time";
	$fieldToolTipsagent_performance_report["Greek"]["totalCallTime"] = "";
	$placeHoldersagent_performance_report["Greek"]["totalCallTime"] = "";
	$fieldLabelsagent_performance_report["Greek"]["vTotalApps"] = "Volton Σύνολο";
	$fieldToolTipsagent_performance_report["Greek"]["vTotalApps"] = "";
	$placeHoldersagent_performance_report["Greek"]["vTotalApps"] = "";
	$fieldLabelsagent_performance_report["Greek"]["vPending"] = "Volton Εκκρεμότητα";
	$fieldToolTipsagent_performance_report["Greek"]["vPending"] = "";
	$placeHoldersagent_performance_report["Greek"]["vPending"] = "";
	$fieldLabelsagent_performance_report["Greek"]["vConfirmed"] = "Volton επιβεβαίωση";
	$fieldToolTipsagent_performance_report["Greek"]["vConfirmed"] = "";
	$placeHoldersagent_performance_report["Greek"]["vConfirmed"] = "";
	$fieldLabelsagent_performance_report["Greek"]["vCanceled"] = "Volton Ακύρωση";
	$fieldToolTipsagent_performance_report["Greek"]["vCanceled"] = "";
	$placeHoldersagent_performance_report["Greek"]["vCanceled"] = "";
	$fieldLabelsagent_performance_report["Greek"]["nTotalApps"] = "Nova Σύνολο ";
	$fieldToolTipsagent_performance_report["Greek"]["nTotalApps"] = "";
	$placeHoldersagent_performance_report["Greek"]["nTotalApps"] = "";
	$fieldLabelsagent_performance_report["Greek"]["nPending"] = "Nova Εκκρεμότητα";
	$fieldToolTipsagent_performance_report["Greek"]["nPending"] = "";
	$placeHoldersagent_performance_report["Greek"]["nPending"] = "";
	$fieldLabelsagent_performance_report["Greek"]["nConfirmed"] = "Nova Επιβεβαίωση";
	$fieldToolTipsagent_performance_report["Greek"]["nConfirmed"] = "";
	$placeHoldersagent_performance_report["Greek"]["nConfirmed"] = "";
	$fieldLabelsagent_performance_report["Greek"]["nCanceled"] = "Nova Ακύρωση";
	$fieldToolTipsagent_performance_report["Greek"]["nCanceled"] = "";
	$placeHoldersagent_performance_report["Greek"]["nCanceled"] = "";
	if (count($fieldToolTipsagent_performance_report["Greek"]))
		$tdataagent_performance_report[".isUseToolTips"] = true;
}


	$tdataagent_performance_report[".NCSearch"] = true;



$tdataagent_performance_report[".shortTableName"] = "agent_performance_report";
$tdataagent_performance_report[".nSecOptions"] = 0;

$tdataagent_performance_report[".mainTableOwnerID"] = "";
$tdataagent_performance_report[".entityType"] = 2;
$tdataagent_performance_report[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagent_performance_report[".strOriginalTableName"] = "dbo.vAgentPerformanceReportWithApps";

	



$tdataagent_performance_report[".showAddInPopup"] = false;

$tdataagent_performance_report[".showEditInPopup"] = false;

$tdataagent_performance_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagent_performance_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagent_performance_report[".listAjax"] = false;
//	temporary
$tdataagent_performance_report[".listAjax"] = false;

	$tdataagent_performance_report[".audit"] = false;

	$tdataagent_performance_report[".locking"] = false;


$pages = $tdataagent_performance_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagent_performance_report[".edit"] = true;
	$tdataagent_performance_report[".afterEditAction"] = 1;
	$tdataagent_performance_report[".closePopupAfterEdit"] = 1;
	$tdataagent_performance_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagent_performance_report[".add"] = true;
$tdataagent_performance_report[".afterAddAction"] = 1;
$tdataagent_performance_report[".closePopupAfterAdd"] = 1;
$tdataagent_performance_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagent_performance_report[".list"] = true;
}



$tdataagent_performance_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagent_performance_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagent_performance_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagent_performance_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagent_performance_report[".printFriendly"] = true;
}



$tdataagent_performance_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagent_performance_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagent_performance_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagent_performance_report[".isUseAjaxSuggest"] = true;




																																																																																																																											

$tdataagent_performance_report[".ajaxCodeSnippetAdded"] = false;

$tdataagent_performance_report[".buttonsAdded"] = false;

$tdataagent_performance_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagent_performance_report[".isUseTimeForSearch"] = false;


$tdataagent_performance_report[".badgeColor"] = "B22222";


$tdataagent_performance_report[".allSearchFields"] = array();
$tdataagent_performance_report[".filterFields"] = array();
$tdataagent_performance_report[".requiredSearchFields"] = array();




$tdataagent_performance_report[".tableType"] = "report";

$tdataagent_performance_report[".printerPageOrientation"] = 0;
$tdataagent_performance_report[".nPrinterPageScale"] = 100;

$tdataagent_performance_report[".nPrinterSplitRecords"] = 40;

$tdataagent_performance_report[".geocodingEnabled"] = false;

//report settings
$tdataagent_performance_report[".crossTabReport"] = true;

$tdataagent_performance_report[".reportGroupFields"] = true;
$tdataagent_performance_report[".pageSize"] = 5;
$tdataagent_performance_report[".showGroupSummaryCount"] = true;
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
$tdataagent_performance_report[".reportGroupFieldsData"] = $reportGroupFields;
$tdataagent_performance_report[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdataagent_performance_report[".reportHorizontalSummary"] = true;

$tdataagent_performance_report[".isExistTotalFields"] = true;

$tdataagent_performance_report[".reportVerticalSummary"] = true;



$tdataagent_performance_report[".repShowDet"] = true;

$tdataagent_performance_report[".reportLayout"] = 0;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagent_performance_report[".strOrderBy"] = $tstrOrderBy;

$tdataagent_performance_report[".orderindexes"] = array();


$tdataagent_performance_report[".sqlHead"] = "SELECT dialerAgent,  	dialerPhone,  	calldate,  	callStatus,  	denialReason,  	dialerCampaign,  	dialerList,  	talkTime,  	typingTime,  	totalCallTime,  	vTotalApps,  	vPending,  	vConfirmed,  	vCanceled,  	nTotalApps,  	nPending,  	nConfirmed,  	nCanceled";
$tdataagent_performance_report[".sqlFrom"] = "FROM dbo.vAgentPerformanceReportWithApps";
$tdataagent_performance_report[".sqlWhereExpr"] = "";
$tdataagent_performance_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagent_performance_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagent_performance_report[".arrGroupsPerPage"] = $arrGPP;

$tdataagent_performance_report[".highlightSearchResults"] = true;

$tableKeysagent_performance_report = array();
$tdataagent_performance_report[".Keys"] = $tableKeysagent_performance_report;


$tdataagent_performance_report[".hideMobileList"] = array();




//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","dialerAgent");
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


	$tdataagent_performance_report["dialerAgent"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "dialerAgent";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","dialerPhone");
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


	$tdataagent_performance_report["dialerPhone"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "dialerPhone";
//	calldate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "calldate";
	$fdata["GoodName"] = "calldate";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","calldate");
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


	$tdataagent_performance_report["calldate"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "calldate";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","callStatus");
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


	$tdataagent_performance_report["callStatus"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "callStatus";
//	denialReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "denialReason";
	$fdata["GoodName"] = "denialReason";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","denialReason");
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


	$tdataagent_performance_report["denialReason"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "denialReason";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","dialerCampaign");
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


	$tdataagent_performance_report["dialerCampaign"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","dialerList");
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


	$tdataagent_performance_report["dialerList"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "dialerList";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","talkTime");
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


	$tdataagent_performance_report["talkTime"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","typingTime");
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


	$tdataagent_performance_report["typingTime"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","totalCallTime");
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


	$tdataagent_performance_report["totalCallTime"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "totalCallTime";
//	vTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "vTotalApps";
	$fdata["GoodName"] = "vTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","vTotalApps");
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


	$tdataagent_performance_report["vTotalApps"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "vTotalApps";
//	vPending
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vPending";
	$fdata["GoodName"] = "vPending";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","vPending");
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


	$tdataagent_performance_report["vPending"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "vPending";
//	vConfirmed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "vConfirmed";
	$fdata["GoodName"] = "vConfirmed";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","vConfirmed");
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


	$tdataagent_performance_report["vConfirmed"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "vConfirmed";
//	vCanceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "vCanceled";
	$fdata["GoodName"] = "vCanceled";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","vCanceled");
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


	$tdataagent_performance_report["vCanceled"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "vCanceled";
//	nTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nTotalApps";
	$fdata["GoodName"] = "nTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","nTotalApps");
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


	$tdataagent_performance_report["nTotalApps"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "nTotalApps";
//	nPending
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nPending";
	$fdata["GoodName"] = "nPending";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","nPending");
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


	$tdataagent_performance_report["nPending"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "nPending";
//	nConfirmed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nConfirmed";
	$fdata["GoodName"] = "nConfirmed";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","nConfirmed");
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


	$tdataagent_performance_report["nConfirmed"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "nConfirmed";
//	nCanceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nCanceled";
	$fdata["GoodName"] = "nCanceled";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithApps";
	$fdata["Label"] = GetFieldLabel("Agent_Performance_Report","nCanceled");
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


	$tdataagent_performance_report["nCanceled"] = $fdata;
		$tdataagent_performance_report[".searchableFields"][] = "nCanceled";


$tables_data["Agent Performance Report"]=&$tdataagent_performance_report;
$field_labels["Agent_Performance_Report"] = &$fieldLabelsagent_performance_report;
$fieldToolTips["Agent_Performance_Report"] = &$fieldToolTipsagent_performance_report;
$placeHolders["Agent_Performance_Report"] = &$placeHoldersagent_performance_report;
$page_titles["Agent_Performance_Report"] = &$pageTitlesagent_performance_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Agent Performance Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_agent_performance_report()
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
	"m_srcTableName" => "Agent Performance Report"
));

$proto6["m_sql"] = "dialerAgent";
$proto6["m_srcTableName"] = "Agent Performance Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto8["m_sql"] = "dialerPhone";
$proto8["m_srcTableName"] = "Agent Performance Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "calldate",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto10["m_sql"] = "calldate";
$proto10["m_srcTableName"] = "Agent Performance Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto12["m_sql"] = "callStatus";
$proto12["m_srcTableName"] = "Agent Performance Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "denialReason",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto14["m_sql"] = "denialReason";
$proto14["m_srcTableName"] = "Agent Performance Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto16["m_sql"] = "dialerCampaign";
$proto16["m_srcTableName"] = "Agent Performance Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto18["m_sql"] = "dialerList";
$proto18["m_srcTableName"] = "Agent Performance Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto20["m_sql"] = "talkTime";
$proto20["m_srcTableName"] = "Agent Performance Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto22["m_sql"] = "typingTime";
$proto22["m_srcTableName"] = "Agent Performance Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto24["m_sql"] = "totalCallTime";
$proto24["m_srcTableName"] = "Agent Performance Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "vTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto26["m_sql"] = "vTotalApps";
$proto26["m_srcTableName"] = "Agent Performance Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vPending",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto28["m_sql"] = "vPending";
$proto28["m_srcTableName"] = "Agent Performance Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "vConfirmed",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto30["m_sql"] = "vConfirmed";
$proto30["m_srcTableName"] = "Agent Performance Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "vCanceled",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto32["m_sql"] = "vCanceled";
$proto32["m_srcTableName"] = "Agent Performance Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto34["m_sql"] = "nTotalApps";
$proto34["m_srcTableName"] = "Agent Performance Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nPending",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto36["m_sql"] = "nPending";
$proto36["m_srcTableName"] = "Agent Performance Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nConfirmed",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto38["m_sql"] = "nConfirmed";
$proto38["m_srcTableName"] = "Agent Performance Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nCanceled",
	"m_strTable" => "dbo.vAgentPerformanceReportWithApps",
	"m_srcTableName" => "Agent Performance Report"
));

$proto40["m_sql"] = "nCanceled";
$proto40["m_srcTableName"] = "Agent Performance Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.vAgentPerformanceReportWithApps";
$proto43["m_srcTableName"] = "Agent Performance Report";
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
$proto42["m_srcTableName"] = "Agent Performance Report";
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
$proto0["m_srcTableName"]="Agent Performance Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agent_performance_report = createSqlQuery_agent_performance_report();


	
		;

																		

$tdataagent_performance_report[".sqlquery"] = $queryData_agent_performance_report;



$tableEvents["Agent Performance Report"] = new eventsBase;
$tdataagent_performance_report[".hasEvents"] = false;

?>