<?php
$tdatavagentperformancereport_v2 = array();
$tdatavagentperformancereport_v2[".searchableFields"] = array();
$tdatavagentperformancereport_v2[".ShortName"] = "vagentperformancereport_v2";
$tdatavagentperformancereport_v2[".OwnerID"] = "";
$tdatavagentperformancereport_v2[".OriginalTable"] = "dbo.vAgentPerformanceReportWithAppsV2";


$tdatavagentperformancereport_v2[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatavagentperformancereport_v2[".originalPagesByType"] = $tdatavagentperformancereport_v2[".pagesByType"];
$tdatavagentperformancereport_v2[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatavagentperformancereport_v2[".originalPages"] = $tdatavagentperformancereport_v2[".pages"];
$tdatavagentperformancereport_v2[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatavagentperformancereport_v2[".originalDefaultPages"] = $tdatavagentperformancereport_v2[".defaultPages"];

//	field labels
$fieldLabelsvagentperformancereport_v2 = array();
$fieldToolTipsvagentperformancereport_v2 = array();
$pageTitlesvagentperformancereport_v2 = array();
$placeHoldersvagentperformancereport_v2 = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvagentperformancereport_v2["Greek"] = array();
	$fieldToolTipsvagentperformancereport_v2["Greek"] = array();
	$placeHoldersvagentperformancereport_v2["Greek"] = array();
	$pageTitlesvagentperformancereport_v2["Greek"] = array();
	$fieldLabelsvagentperformancereport_v2["Greek"]["callid"] = "Callid";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["callid"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["callid"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["dialerAgent"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["dialerAgent"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["dialerPhone"] = "Τηλέφωνο Κλήσης";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["dialerPhone"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["dialerPhone"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["calldate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["calldate"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["calldate"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["denialReason"] = "Λόγος Άρνησης";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["denialReason"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["denialReason"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["isPositive"] = "Is Positive";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["isPositive"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["isPositive"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["callStatus"] = "Κατάσταση";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["callStatus"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["callStatus"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["dialerCampaign"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["dialerCampaign"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["dialerList"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["dialerList"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["talkTime"] = "Χρ. Ομιλίας (sec)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["talkTime"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["talkTime"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["typingTime"] = "Χρ. Καταχώρησης (sec)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["typingTime"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["typingTime"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["totalCallTime"] = "Διάρκεια Κλήσης (sec)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["totalCallTime"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["totalCallTime"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["novaTotalApps"] = "Σύνολο Αιτήσεων (Nova)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["novaTotalApps"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["novaTotalApps"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["voltonTotalApps"] = "Σύνολο Αιτήσεων (Volton)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["voltonTotalApps"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["voltonTotalApps"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["vsalesStatus"] = "Κατάσταση Αίτησης (Volton)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["vsalesStatus"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["vsalesStatus"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["vStatusCount"] = "Πλήθος Αιτήσεων (Volton)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["vStatusCount"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["vStatusCount"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["nSalesStatus"] = "Κατάσταση Αίτησης (Nova)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["nSalesStatus"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["nSalesStatus"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["nStatusCount"] = "Πλήθος Αιτήσεων (Nova)";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["nStatusCount"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["nStatusCount"] = "";
	$fieldLabelsvagentperformancereport_v2["Greek"]["forCount"] = "Πλήθος Κλήσεων";
	$fieldToolTipsvagentperformancereport_v2["Greek"]["forCount"] = "";
	$placeHoldersvagentperformancereport_v2["Greek"]["forCount"] = "";
	if (count($fieldToolTipsvagentperformancereport_v2["Greek"]))
		$tdatavagentperformancereport_v2[".isUseToolTips"] = true;
}


	$tdatavagentperformancereport_v2[".NCSearch"] = true;



$tdatavagentperformancereport_v2[".shortTableName"] = "vagentperformancereport_v2";
$tdatavagentperformancereport_v2[".nSecOptions"] = 0;

$tdatavagentperformancereport_v2[".mainTableOwnerID"] = "";
$tdatavagentperformancereport_v2[".entityType"] = 2;
$tdatavagentperformancereport_v2[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavagentperformancereport_v2[".strOriginalTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";

	



$tdatavagentperformancereport_v2[".showAddInPopup"] = false;

$tdatavagentperformancereport_v2[".showEditInPopup"] = false;

$tdatavagentperformancereport_v2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavagentperformancereport_v2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavagentperformancereport_v2[".listAjax"] = false;
//	temporary
$tdatavagentperformancereport_v2[".listAjax"] = false;

	$tdatavagentperformancereport_v2[".audit"] = false;

	$tdatavagentperformancereport_v2[".locking"] = false;


$pages = $tdatavagentperformancereport_v2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavagentperformancereport_v2[".edit"] = true;
	$tdatavagentperformancereport_v2[".afterEditAction"] = 1;
	$tdatavagentperformancereport_v2[".closePopupAfterEdit"] = 1;
	$tdatavagentperformancereport_v2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavagentperformancereport_v2[".add"] = true;
$tdatavagentperformancereport_v2[".afterAddAction"] = 1;
$tdatavagentperformancereport_v2[".closePopupAfterAdd"] = 1;
$tdatavagentperformancereport_v2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavagentperformancereport_v2[".list"] = true;
}



$tdatavagentperformancereport_v2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavagentperformancereport_v2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavagentperformancereport_v2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavagentperformancereport_v2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavagentperformancereport_v2[".printFriendly"] = true;
}



$tdatavagentperformancereport_v2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavagentperformancereport_v2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavagentperformancereport_v2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavagentperformancereport_v2[".isUseAjaxSuggest"] = true;




																																																																																																																											

$tdatavagentperformancereport_v2[".ajaxCodeSnippetAdded"] = false;

$tdatavagentperformancereport_v2[".buttonsAdded"] = false;

$tdatavagentperformancereport_v2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavagentperformancereport_v2[".isUseTimeForSearch"] = false;


$tdatavagentperformancereport_v2[".badgeColor"] = "4169E1";


$tdatavagentperformancereport_v2[".allSearchFields"] = array();
$tdatavagentperformancereport_v2[".filterFields"] = array();
$tdatavagentperformancereport_v2[".requiredSearchFields"] = array();




$tdatavagentperformancereport_v2[".tableType"] = "report";

$tdatavagentperformancereport_v2[".printerPageOrientation"] = 0;
$tdatavagentperformancereport_v2[".nPrinterPageScale"] = 100;

$tdatavagentperformancereport_v2[".nPrinterSplitRecords"] = 40;

$tdatavagentperformancereport_v2[".geocodingEnabled"] = false;

//report settings
$tdatavagentperformancereport_v2[".crossTabReport"] = true;

$tdatavagentperformancereport_v2[".reportGroupFields"] = true;
$tdatavagentperformancereport_v2[".pageSize"] = 5;
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
	$reportGroupFieldsList []= "calldate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "calldate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callStatus";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callStatus";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "denialReason";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "denialReason";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerCampaign";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerCampaign";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerList";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerList";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 6;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "nSalesStatus";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "nSalesStatus";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 7;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "vsalesStatus";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "vsalesStatus";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 8;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdatavagentperformancereport_v2[".reportGroupFieldsData"] = $reportGroupFields;
$tdatavagentperformancereport_v2[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdatavagentperformancereport_v2[".reportHorizontalSummary"] = true;

$tdatavagentperformancereport_v2[".isExistTotalFields"] = true;

$tdatavagentperformancereport_v2[".reportVerticalSummary"] = true;



$tdatavagentperformancereport_v2[".repShowDet"] = true;

$tdatavagentperformancereport_v2[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavagentperformancereport_v2[".strOrderBy"] = $tstrOrderBy;

$tdatavagentperformancereport_v2[".orderindexes"] = array();


$tdatavagentperformancereport_v2[".sqlHead"] = "SELECT callid,  	dialerAgent,  	dialerPhone,  	calldate,  	denialReason,  	isPositive,  	callStatus,  	dialerCampaign,  	dialerList,  	talkTime,  	typingTime,  	totalCallTime,  	novaTotalApps,  	voltonTotalApps,  	vsalesStatus,  	vStatusCount,  	nSalesStatus,  	nStatusCount,    1 as forCount";
$tdatavagentperformancereport_v2[".sqlFrom"] = "FROM dbo.vAgentPerformanceReportWithAppsV2";
$tdatavagentperformancereport_v2[".sqlWhereExpr"] = "";
$tdatavagentperformancereport_v2[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatavagentperformancereport_v2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavagentperformancereport_v2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavagentperformancereport_v2[".arrGroupsPerPage"] = $arrGPP;

$tdatavagentperformancereport_v2[".highlightSearchResults"] = true;

$tableKeysvagentperformancereport_v2 = array();
$tableKeysvagentperformancereport_v2[] = "callid";
$tdatavagentperformancereport_v2[".Keys"] = $tableKeysvagentperformancereport_v2;


$tdatavagentperformancereport_v2[".hideMobileList"] = array();




//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","callid");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["callid"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "callid";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","dialerAgent");
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
	$edata["DisplayField"] = "isnull(fullname+ ' ('+username+')','Δεν Υπάρχει Χρήστης')";

	

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


	$tdatavagentperformancereport_v2["dialerAgent"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "dialerAgent";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","dialerPhone");
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


	$tdatavagentperformancereport_v2["dialerPhone"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "dialerPhone";
//	calldate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "calldate";
	$fdata["GoodName"] = "calldate";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","calldate");
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
		$fdata["defaultSearchOption"] = "Between";

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


	$tdatavagentperformancereport_v2["calldate"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "calldate";
//	denialReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "denialReason";
	$fdata["GoodName"] = "denialReason";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","denialReason");
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


	$tdatavagentperformancereport_v2["denialReason"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "denialReason";
//	isPositive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "isPositive";
	$fdata["GoodName"] = "isPositive";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","isPositive");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "isPositive";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isPositive";

	
	
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


	$tdatavagentperformancereport_v2["isPositive"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "isPositive";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","callStatus");
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.vAgentPerformanceReportWithAppsV21";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "callStatus";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "callStatus";

	

	
	$edata["LookupOrderBy"] = "callStatus";

	
	
	
	

	
	
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


	$tdatavagentperformancereport_v2["callStatus"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "callStatus";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","dialerCampaign");
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


	$tdatavagentperformancereport_v2["dialerCampaign"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","dialerList");
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


	$tdatavagentperformancereport_v2["dialerList"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "dialerList";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","talkTime");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatavagentperformancereport_v2["talkTime"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","typingTime");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatavagentperformancereport_v2["typingTime"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","totalCallTime");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatavagentperformancereport_v2["totalCallTime"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "totalCallTime";
//	novaTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "novaTotalApps";
	$fdata["GoodName"] = "novaTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","novaTotalApps");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["novaTotalApps"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "novaTotalApps";
//	voltonTotalApps
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "voltonTotalApps";
	$fdata["GoodName"] = "voltonTotalApps";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","voltonTotalApps");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["voltonTotalApps"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "voltonTotalApps";
//	vsalesStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "vsalesStatus";
	$fdata["GoodName"] = "vsalesStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","vsalesStatus");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["vsalesStatus"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "vsalesStatus";
//	vStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "vStatusCount";
	$fdata["GoodName"] = "vStatusCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","vStatusCount");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["vStatusCount"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "vStatusCount";
//	nSalesStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nSalesStatus";
	$fdata["GoodName"] = "nSalesStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","nSalesStatus");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["nSalesStatus"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "nSalesStatus";
//	nStatusCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nStatusCount";
	$fdata["GoodName"] = "nStatusCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","nStatusCount");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["nStatusCount"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "nStatusCount";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vAgentPerformanceReport_v2","forCount");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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


	$tdatavagentperformancereport_v2["forCount"] = $fdata;
		$tdatavagentperformancereport_v2[".searchableFields"][] = "forCount";


$tables_data["vAgentPerformanceReport v2"]=&$tdatavagentperformancereport_v2;
$field_labels["vAgentPerformanceReport_v2"] = &$fieldLabelsvagentperformancereport_v2;
$fieldToolTips["vAgentPerformanceReport_v2"] = &$fieldToolTipsvagentperformancereport_v2;
$placeHolders["vAgentPerformanceReport_v2"] = &$placeHoldersvagentperformancereport_v2;
$page_titles["vAgentPerformanceReport_v2"] = &$pageTitlesvagentperformancereport_v2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["vAgentPerformanceReport v2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vagentperformancereport_v2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "callid,  	dialerAgent,  	dialerPhone,  	calldate,  	denialReason,  	isPositive,  	callStatus,  	dialerCampaign,  	dialerList,  	talkTime,  	typingTime,  	totalCallTime,  	novaTotalApps,  	voltonTotalApps,  	vsalesStatus,  	vStatusCount,  	nSalesStatus,  	nStatusCount,    1 as forCount";
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
	"m_strName" => "callid",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto6["m_sql"] = "callid";
$proto6["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto8["m_sql"] = "dialerAgent";
$proto8["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto10["m_sql"] = "dialerPhone";
$proto10["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "calldate",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto12["m_sql"] = "calldate";
$proto12["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "denialReason",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto14["m_sql"] = "denialReason";
$proto14["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "isPositive",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto16["m_sql"] = "isPositive";
$proto16["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto18["m_sql"] = "callStatus";
$proto18["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto20["m_sql"] = "dialerCampaign";
$proto20["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto22["m_sql"] = "dialerList";
$proto22["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto24["m_sql"] = "talkTime";
$proto24["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto26["m_sql"] = "typingTime";
$proto26["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto28["m_sql"] = "totalCallTime";
$proto28["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "novaTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto30["m_sql"] = "novaTotalApps";
$proto30["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonTotalApps",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto32["m_sql"] = "voltonTotalApps";
$proto32["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "vsalesStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto34["m_sql"] = "vsalesStatus";
$proto34["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "vStatusCount",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto36["m_sql"] = "vStatusCount";
$proto36["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nSalesStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto38["m_sql"] = "nSalesStatus";
$proto38["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nStatusCount",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "vAgentPerformanceReport v2"
));

$proto40["m_sql"] = "nStatusCount";
$proto40["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto42["m_sql"] = "1";
$proto42["m_srcTableName"] = "vAgentPerformanceReport v2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto45["m_srcTableName"] = "vAgentPerformanceReport v2";
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
$proto44["m_srcTableName"] = "vAgentPerformanceReport v2";
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
$proto0["m_srcTableName"]="vAgentPerformanceReport v2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vagentperformancereport_v2 = createSqlQuery_vagentperformancereport_v2();


	
		;

																			

$tdatavagentperformancereport_v2[".sqlquery"] = $queryData_vagentperformancereport_v2;



$tableEvents["vAgentPerformanceReport v2"] = new eventsBase;
$tdatavagentperformancereport_v2[".hasEvents"] = false;

?>