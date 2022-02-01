<?php
$tdatavagentperformancereport_report = array();
$tdatavagentperformancereport_report[".searchableFields"] = array();
$tdatavagentperformancereport_report[".ShortName"] = "vagentperformancereport_report";
$tdatavagentperformancereport_report[".OwnerID"] = "";
$tdatavagentperformancereport_report[".OriginalTable"] = "dbo.vAgentPerformanceReport";


$tdatavagentperformancereport_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatavagentperformancereport_report[".originalPagesByType"] = $tdatavagentperformancereport_report[".pagesByType"];
$tdatavagentperformancereport_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatavagentperformancereport_report[".originalPages"] = $tdatavagentperformancereport_report[".pages"];
$tdatavagentperformancereport_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatavagentperformancereport_report[".originalDefaultPages"] = $tdatavagentperformancereport_report[".defaultPages"];

//	field labels
$fieldLabelsvagentperformancereport_report = array();
$fieldToolTipsvagentperformancereport_report = array();
$pageTitlesvagentperformancereport_report = array();
$placeHoldersvagentperformancereport_report = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvagentperformancereport_report["Greek"] = array();
	$fieldToolTipsvagentperformancereport_report["Greek"] = array();
	$placeHoldersvagentperformancereport_report["Greek"] = array();
	$pageTitlesvagentperformancereport_report["Greek"] = array();
	$fieldLabelsvagentperformancereport_report["Greek"]["agent"] = "Agent";
	$fieldToolTipsvagentperformancereport_report["Greek"]["agent"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["agent"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["callDate"] = "Ημερομηνία";
	$fieldToolTipsvagentperformancereport_report["Greek"]["callDate"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["callDate"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsvagentperformancereport_report["Greek"]["dialerCampaign"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["dialerCampaign"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsvagentperformancereport_report["Greek"]["dialerList"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["dialerList"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["callStatus"] = "Status";
	$fieldToolTipsvagentperformancereport_report["Greek"]["callStatus"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["callStatus"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["totalCallsCount"] = "Σύνολο";
	$fieldToolTipsvagentperformancereport_report["Greek"]["totalCallsCount"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["totalCallsCount"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusCallsCount"] = "Πλήθος";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusCallsCount"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusCallsCount"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusCallsPcnt"] = "Πλήθος %";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusCallsPcnt"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusCallsPcnt"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["totalTalkTime"] = "Total Talk Time";
	$fieldToolTipsvagentperformancereport_report["Greek"]["totalTalkTime"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["totalTalkTime"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusTalkTime"] = "Talk Time";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusTalkTime"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusTalkTime"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statustalkTimePcnt"] = "Talk %";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statustalkTimePcnt"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statustalkTimePcnt"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["totalTypingTime"] = "Total Typing Time";
	$fieldToolTipsvagentperformancereport_report["Greek"]["totalTypingTime"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["totalTypingTime"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusTypingTime"] = "Typing Time";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusTypingTime"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusTypingTime"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusTypingTimePcnt"] = "Typing %";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusTypingTimePcnt"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusTypingTimePcnt"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusCallTime"] = "Total Time";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusCallTime"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusCallTime"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["totalCallTime"] = "Total Call Time";
	$fieldToolTipsvagentperformancereport_report["Greek"]["totalCallTime"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["totalCallTime"] = "";
	$fieldLabelsvagentperformancereport_report["Greek"]["statusCallTimePcnt"] = "Total %";
	$fieldToolTipsvagentperformancereport_report["Greek"]["statusCallTimePcnt"] = "";
	$placeHoldersvagentperformancereport_report["Greek"]["statusCallTimePcnt"] = "";
	if (count($fieldToolTipsvagentperformancereport_report["Greek"]))
		$tdatavagentperformancereport_report[".isUseToolTips"] = true;
}


	$tdatavagentperformancereport_report[".NCSearch"] = true;



$tdatavagentperformancereport_report[".shortTableName"] = "vagentperformancereport_report";
$tdatavagentperformancereport_report[".nSecOptions"] = 0;

$tdatavagentperformancereport_report[".mainTableOwnerID"] = "";
$tdatavagentperformancereport_report[".entityType"] = 2;
$tdatavagentperformancereport_report[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavagentperformancereport_report[".strOriginalTableName"] = "dbo.vAgentPerformanceReport";

	



$tdatavagentperformancereport_report[".showAddInPopup"] = false;

$tdatavagentperformancereport_report[".showEditInPopup"] = false;

$tdatavagentperformancereport_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavagentperformancereport_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavagentperformancereport_report[".listAjax"] = false;
//	temporary
$tdatavagentperformancereport_report[".listAjax"] = false;

	$tdatavagentperformancereport_report[".audit"] = false;

	$tdatavagentperformancereport_report[".locking"] = false;


$pages = $tdatavagentperformancereport_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavagentperformancereport_report[".edit"] = true;
	$tdatavagentperformancereport_report[".afterEditAction"] = 1;
	$tdatavagentperformancereport_report[".closePopupAfterEdit"] = 1;
	$tdatavagentperformancereport_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavagentperformancereport_report[".add"] = true;
$tdatavagentperformancereport_report[".afterAddAction"] = 1;
$tdatavagentperformancereport_report[".closePopupAfterAdd"] = 1;
$tdatavagentperformancereport_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavagentperformancereport_report[".list"] = true;
}



$tdatavagentperformancereport_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavagentperformancereport_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavagentperformancereport_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavagentperformancereport_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavagentperformancereport_report[".printFriendly"] = true;
}



$tdatavagentperformancereport_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavagentperformancereport_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavagentperformancereport_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavagentperformancereport_report[".isUseAjaxSuggest"] = false;




																																																																																																																								

$tdatavagentperformancereport_report[".ajaxCodeSnippetAdded"] = false;

$tdatavagentperformancereport_report[".buttonsAdded"] = false;

$tdatavagentperformancereport_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavagentperformancereport_report[".isUseTimeForSearch"] = false;


$tdatavagentperformancereport_report[".badgeColor"] = "DAA520";


$tdatavagentperformancereport_report[".allSearchFields"] = array();
$tdatavagentperformancereport_report[".filterFields"] = array();
$tdatavagentperformancereport_report[".requiredSearchFields"] = array();




$tdatavagentperformancereport_report[".tableType"] = "report";

$tdatavagentperformancereport_report[".printerPageOrientation"] = 0;
$tdatavagentperformancereport_report[".nPrinterPageScale"] = 100;

$tdatavagentperformancereport_report[".nPrinterSplitRecords"] = 40;

$tdatavagentperformancereport_report[".geocodingEnabled"] = false;

//report settings
$tdatavagentperformancereport_report[".crossTabReport"] = true;

$tdatavagentperformancereport_report[".reportGroupFields"] = true;
$tdatavagentperformancereport_report[".pageSize"] = 5;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "agent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "agent";
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
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerCampaign";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerCampaign";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerList";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerList";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callDate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callDate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
$tdatavagentperformancereport_report[".reportGroupFieldsData"] = $reportGroupFields;
$tdatavagentperformancereport_report[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdatavagentperformancereport_report[".reportHorizontalSummary"] = true;

$tdatavagentperformancereport_report[".isExistTotalFields"] = true;

$tdatavagentperformancereport_report[".reportVerticalSummary"] = true;



$tdatavagentperformancereport_report[".repShowDet"] = true;

$tdatavagentperformancereport_report[".reportLayout"] = 6;

//end of report settings





$tdatavagentperformancereport_report[".searchIsRequiredForFilters"] = true;

$tdatavagentperformancereport_report[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavagentperformancereport_report[".strOrderBy"] = $tstrOrderBy;

$tdatavagentperformancereport_report[".orderindexes"] = array();


$tdatavagentperformancereport_report[".sqlHead"] = "SELECT agent,  	format(callDate,'dd/MM/yyyy') as callDate,  	dialerCampaign,  	dialerList,  	callStatus,  	totalCallsCount,  	statusCallsCount,  	statusCallsPcnt,  	totalTalkTime,  	statusTalkTime,  	statustalkTimePcnt,  	totalTypingTime,  	statusTypingTime,  	statusTypingTimePcnt,  	totalCallTime,  	statusCallTime,  	statusCallTimePcnt";
$tdatavagentperformancereport_report[".sqlFrom"] = "FROM dbo.vAgentPerformanceReport";
$tdatavagentperformancereport_report[".sqlWhereExpr"] = "";
$tdatavagentperformancereport_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavagentperformancereport_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavagentperformancereport_report[".arrGroupsPerPage"] = $arrGPP;

$tdatavagentperformancereport_report[".highlightSearchResults"] = true;

$tableKeysvagentperformancereport_report = array();
$tdatavagentperformancereport_report[".Keys"] = $tableKeysvagentperformancereport_report;


$tdatavagentperformancereport_report[".hideMobileList"] = array();




//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","agent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "agent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agent";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatavagentperformancereport_report["agent"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "agent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","callDate");
	$fdata["FieldType"] = 202;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(callDate,'dd/MM/yyyy')";

	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavagentperformancereport_report["callDate"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "callDate";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","dialerCampaign");
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


	$tdatavagentperformancereport_report["dialerCampaign"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","dialerList");
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


	$tdatavagentperformancereport_report["dialerList"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "dialerList";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","callStatus");
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


	$tdatavagentperformancereport_report["callStatus"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "callStatus";
//	totalCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "totalCallsCount";
	$fdata["GoodName"] = "totalCallsCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","totalCallsCount");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "totalCallsCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalCallsCount";

	
	
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


	$tdatavagentperformancereport_report["totalCallsCount"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "totalCallsCount";
//	statusCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "statusCallsCount";
	$fdata["GoodName"] = "statusCallsCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusCallsCount");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "statusCallsCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusCallsCount";

	
	
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


	$tdatavagentperformancereport_report["statusCallsCount"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusCallsCount";
//	statusCallsPcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "statusCallsPcnt";
	$fdata["GoodName"] = "statusCallsPcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusCallsPcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "statusCallsPcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusCallsPcnt";

	
	
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
		$fdata["filterTotalFields"] = "totalCallsCount";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavagentperformancereport_report["statusCallsPcnt"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusCallsPcnt";
//	totalTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "totalTalkTime";
	$fdata["GoodName"] = "totalTalkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","totalTalkTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "totalTalkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalTalkTime";

	
	
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


	$tdatavagentperformancereport_report["totalTalkTime"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "totalTalkTime";
//	statusTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "statusTalkTime";
	$fdata["GoodName"] = "statusTalkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusTalkTime");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "statusTalkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusTalkTime";

	
	
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


	$tdatavagentperformancereport_report["statusTalkTime"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusTalkTime";
//	statustalkTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "statustalkTimePcnt";
	$fdata["GoodName"] = "statustalkTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statustalkTimePcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "statustalkTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statustalkTimePcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	$tdatavagentperformancereport_report["statustalkTimePcnt"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statustalkTimePcnt";
//	totalTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "totalTypingTime";
	$fdata["GoodName"] = "totalTypingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","totalTypingTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			// end of report field settings

	
	
			

		$fdata["strField"] = "totalTypingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalTypingTime";

	
	
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


	$tdatavagentperformancereport_report["totalTypingTime"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "totalTypingTime";
//	statusTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "statusTypingTime";
	$fdata["GoodName"] = "statusTypingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusTypingTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "statusTypingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusTypingTime";

	
	
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


	$tdatavagentperformancereport_report["statusTypingTime"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusTypingTime";
//	statusTypingTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "statusTypingTimePcnt";
	$fdata["GoodName"] = "statusTypingTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusTypingTimePcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "statusTypingTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusTypingTimePcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	$tdatavagentperformancereport_report["statusTypingTimePcnt"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusTypingTimePcnt";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","totalCallTime");
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


	$tdatavagentperformancereport_report["totalCallTime"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "totalCallTime";
//	statusCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "statusCallTime";
	$fdata["GoodName"] = "statusCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusCallTime");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "statusCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusCallTime";

	
	
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


	$tdatavagentperformancereport_report["statusCallTime"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusCallTime";
//	statusCallTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "statusCallTimePcnt";
	$fdata["GoodName"] = "statusCallTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport_Report","statusCallTimePcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "statusCallTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusCallTimePcnt";

	
	
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


	$tdatavagentperformancereport_report["statusCallTimePcnt"] = $fdata;
		$tdatavagentperformancereport_report[".searchableFields"][] = "statusCallTimePcnt";


$tables_data["dbo.vAgentPerformanceReport Report"]=&$tdatavagentperformancereport_report;
$field_labels["dbo_vAgentPerformanceReport_Report"] = &$fieldLabelsvagentperformancereport_report;
$fieldToolTips["dbo_vAgentPerformanceReport_Report"] = &$fieldToolTipsvagentperformancereport_report;
$placeHolders["dbo_vAgentPerformanceReport_Report"] = &$placeHoldersvagentperformancereport_report;
$page_titles["dbo_vAgentPerformanceReport_Report"] = &$pageTitlesvagentperformancereport_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vAgentPerformanceReport Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vagentperformancereport_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "agent,  	format(callDate,'dd/MM/yyyy') as callDate,  	dialerCampaign,  	dialerList,  	callStatus,  	totalCallsCount,  	statusCallsCount,  	statusCallsPcnt,  	totalTalkTime,  	statusTalkTime,  	statustalkTimePcnt,  	totalTypingTime,  	statusTypingTime,  	statusTypingTimePcnt,  	totalCallTime,  	statusCallTime,  	statusCallTimePcnt";
$proto0["m_strFrom"] = "FROM dbo.vAgentPerformanceReport";
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
	"m_strName" => "agent",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto6["m_sql"] = "agent";
$proto6["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callDate"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "format(callDate,'dd/MM/yyyy')";
$proto8["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto12["m_sql"] = "dialerCampaign";
$proto12["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto14["m_sql"] = "dialerList";
$proto14["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto16["m_sql"] = "callStatus";
$proto16["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallsCount",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto18["m_sql"] = "totalCallsCount";
$proto18["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallsCount",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto20["m_sql"] = "statusCallsCount";
$proto20["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallsPcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto22["m_sql"] = "statusCallsPcnt";
$proto22["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTalkTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto24["m_sql"] = "totalTalkTime";
$proto24["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTalkTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto26["m_sql"] = "statusTalkTime";
$proto26["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "statustalkTimePcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto28["m_sql"] = "statustalkTimePcnt";
$proto28["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTypingTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto30["m_sql"] = "totalTypingTime";
$proto30["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTypingTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto32["m_sql"] = "statusTypingTime";
$proto32["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTypingTimePcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto34["m_sql"] = "statusTypingTimePcnt";
$proto34["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto36["m_sql"] = "totalCallTime";
$proto36["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto38["m_sql"] = "statusCallTime";
$proto38["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallTimePcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport Report"
));

$proto40["m_sql"] = "statusCallTimePcnt";
$proto40["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.vAgentPerformanceReport";
$proto43["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "agent";
$proto43["m_columns"][] = "callDate";
$proto43["m_columns"][] = "dialerCampaign";
$proto43["m_columns"][] = "dialerList";
$proto43["m_columns"][] = "callStatus";
$proto43["m_columns"][] = "totalCallsCount";
$proto43["m_columns"][] = "statusCallsCount";
$proto43["m_columns"][] = "statusCallsPcnt";
$proto43["m_columns"][] = "totalTalkTime";
$proto43["m_columns"][] = "statusTalkTime";
$proto43["m_columns"][] = "statustalkTimePcnt";
$proto43["m_columns"][] = "totalTypingTime";
$proto43["m_columns"][] = "statusTypingTime";
$proto43["m_columns"][] = "statusTypingTimePcnt";
$proto43["m_columns"][] = "totalCallTime";
$proto43["m_columns"][] = "statusCallTime";
$proto43["m_columns"][] = "statusCallTimePcnt";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "dbo.vAgentPerformanceReport";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "dbo.vAgentPerformanceReport Report";
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
$proto0["m_srcTableName"]="dbo.vAgentPerformanceReport Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vagentperformancereport_report = createSqlQuery_vagentperformancereport_report();


	
		;

																	

$tdatavagentperformancereport_report[".sqlquery"] = $queryData_vagentperformancereport_report;



$tableEvents["dbo.vAgentPerformanceReport Report"] = new eventsBase;
$tdatavagentperformancereport_report[".hasEvents"] = false;

?>