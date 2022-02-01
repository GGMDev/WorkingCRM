<?php
$tdatadbo_vagentperformancereport = array();
$tdatadbo_vagentperformancereport[".searchableFields"] = array();
$tdatadbo_vagentperformancereport[".ShortName"] = "dbo_vagentperformancereport";
$tdatadbo_vagentperformancereport[".OwnerID"] = "";
$tdatadbo_vagentperformancereport[".OriginalTable"] = "dbo.vAgentPerformanceReport";


$tdatadbo_vagentperformancereport[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatadbo_vagentperformancereport[".originalPagesByType"] = $tdatadbo_vagentperformancereport[".pagesByType"];
$tdatadbo_vagentperformancereport[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatadbo_vagentperformancereport[".originalPages"] = $tdatadbo_vagentperformancereport[".pages"];
$tdatadbo_vagentperformancereport[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatadbo_vagentperformancereport[".originalDefaultPages"] = $tdatadbo_vagentperformancereport[".defaultPages"];

//	field labels
$fieldLabelsdbo_vagentperformancereport = array();
$fieldToolTipsdbo_vagentperformancereport = array();
$pageTitlesdbo_vagentperformancereport = array();
$placeHoldersdbo_vagentperformancereport = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_vagentperformancereport["Greek"] = array();
	$fieldToolTipsdbo_vagentperformancereport["Greek"] = array();
	$placeHoldersdbo_vagentperformancereport["Greek"] = array();
	$pageTitlesdbo_vagentperformancereport["Greek"] = array();
	$fieldLabelsdbo_vagentperformancereport["Greek"]["agent"] = "Agent";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["agent"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["agent"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["callDate"] = "Ημερομηνία";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["callDate"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["callDate"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["dialerCampaign"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["dialerCampaign"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["dialerList"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["dialerList"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["callStatus"] = "Status";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["callStatus"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["callStatus"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["totalCallsCount"] = "Σύνολο";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["totalCallsCount"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["totalCallsCount"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusCallsCount"] = "Πλήθος";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusCallsCount"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusCallsCount"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusCallsPcnt"] = "Πλήθος %";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusCallsPcnt"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusCallsPcnt"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["totalTalkTime"] = "Total Talk Time";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["totalTalkTime"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["totalTalkTime"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusTalkTime"] = "Talk Time";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusTalkTime"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusTalkTime"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statustalkTimePcnt"] = "Talk %";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statustalkTimePcnt"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statustalkTimePcnt"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["totalTypingTime"] = "Total Typing Time";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["totalTypingTime"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["totalTypingTime"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusTypingTime"] = "Typing Time";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusTypingTime"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusTypingTime"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusTypingTimePcnt"] = "Typing %";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusTypingTimePcnt"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusTypingTimePcnt"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusCallTime"] = "Total Time";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusCallTime"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusCallTime"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["totalCallTime"] = "Total Call Time";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["totalCallTime"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["totalCallTime"] = "";
	$fieldLabelsdbo_vagentperformancereport["Greek"]["statusCallTimePcnt"] = "Total %";
	$fieldToolTipsdbo_vagentperformancereport["Greek"]["statusCallTimePcnt"] = "";
	$placeHoldersdbo_vagentperformancereport["Greek"]["statusCallTimePcnt"] = "";
	if (count($fieldToolTipsdbo_vagentperformancereport["Greek"]))
		$tdatadbo_vagentperformancereport[".isUseToolTips"] = true;
}


	$tdatadbo_vagentperformancereport[".NCSearch"] = true;



$tdatadbo_vagentperformancereport[".shortTableName"] = "dbo_vagentperformancereport";
$tdatadbo_vagentperformancereport[".nSecOptions"] = 0;

$tdatadbo_vagentperformancereport[".mainTableOwnerID"] = "";
$tdatadbo_vagentperformancereport[".entityType"] = 2;
$tdatadbo_vagentperformancereport[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_vagentperformancereport[".strOriginalTableName"] = "dbo.vAgentPerformanceReport";

	



$tdatadbo_vagentperformancereport[".showAddInPopup"] = false;

$tdatadbo_vagentperformancereport[".showEditInPopup"] = false;

$tdatadbo_vagentperformancereport[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_vagentperformancereport[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_vagentperformancereport[".listAjax"] = false;
//	temporary
$tdatadbo_vagentperformancereport[".listAjax"] = false;

	$tdatadbo_vagentperformancereport[".audit"] = false;

	$tdatadbo_vagentperformancereport[".locking"] = false;


$pages = $tdatadbo_vagentperformancereport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_vagentperformancereport[".edit"] = true;
	$tdatadbo_vagentperformancereport[".afterEditAction"] = 1;
	$tdatadbo_vagentperformancereport[".closePopupAfterEdit"] = 1;
	$tdatadbo_vagentperformancereport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_vagentperformancereport[".add"] = true;
$tdatadbo_vagentperformancereport[".afterAddAction"] = 1;
$tdatadbo_vagentperformancereport[".closePopupAfterAdd"] = 1;
$tdatadbo_vagentperformancereport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_vagentperformancereport[".list"] = true;
}



$tdatadbo_vagentperformancereport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_vagentperformancereport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_vagentperformancereport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_vagentperformancereport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_vagentperformancereport[".printFriendly"] = true;
}



$tdatadbo_vagentperformancereport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_vagentperformancereport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_vagentperformancereport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_vagentperformancereport[".isUseAjaxSuggest"] = false;




																																																																																																																											

$tdatadbo_vagentperformancereport[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_vagentperformancereport[".buttonsAdded"] = false;

$tdatadbo_vagentperformancereport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_vagentperformancereport[".isUseTimeForSearch"] = false;


$tdatadbo_vagentperformancereport[".badgeColor"] = "DAA520";


$tdatadbo_vagentperformancereport[".allSearchFields"] = array();
$tdatadbo_vagentperformancereport[".filterFields"] = array();
$tdatadbo_vagentperformancereport[".requiredSearchFields"] = array();




$tdatadbo_vagentperformancereport[".tableType"] = "report";

$tdatadbo_vagentperformancereport[".printerPageOrientation"] = 0;
$tdatadbo_vagentperformancereport[".nPrinterPageScale"] = 100;

$tdatadbo_vagentperformancereport[".nPrinterSplitRecords"] = 40;

$tdatadbo_vagentperformancereport[".geocodingEnabled"] = false;

//report settings
$tdatadbo_vagentperformancereport[".crossTabReport"] = true;

$tdatadbo_vagentperformancereport[".reportGroupFields"] = true;
$tdatadbo_vagentperformancereport[".pageSize"] = 5;
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
$tdatadbo_vagentperformancereport[".reportGroupFieldsData"] = $reportGroupFields;
$tdatadbo_vagentperformancereport[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdatadbo_vagentperformancereport[".reportHorizontalSummary"] = true;

$tdatadbo_vagentperformancereport[".isExistTotalFields"] = true;

$tdatadbo_vagentperformancereport[".reportVerticalSummary"] = true;



$tdatadbo_vagentperformancereport[".repShowDet"] = true;

$tdatadbo_vagentperformancereport[".reportLayout"] = 6;

//end of report settings





$tdatadbo_vagentperformancereport[".searchIsRequiredForFilters"] = true;

$tdatadbo_vagentperformancereport[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_vagentperformancereport[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_vagentperformancereport[".orderindexes"] = array();


$tdatadbo_vagentperformancereport[".sqlHead"] = "SELECT agent,  	format(callDate,'dd/MM/yyyy') as callDate,  	dialerCampaign,  	dialerList,  	callStatus,  	totalCallsCount,  	statusCallsCount,  	statusCallsPcnt,  	totalTalkTime,  	statusTalkTime,  	statustalkTimePcnt,  	totalTypingTime,  	statusTypingTime,  	statusTypingTimePcnt,  	totalCallTime,  	statusCallTime,  	statusCallTimePcnt";
$tdatadbo_vagentperformancereport[".sqlFrom"] = "FROM dbo.vAgentPerformanceReport";
$tdatadbo_vagentperformancereport[".sqlWhereExpr"] = "";
$tdatadbo_vagentperformancereport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_vagentperformancereport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_vagentperformancereport[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_vagentperformancereport[".highlightSearchResults"] = true;

$tableKeysdbo_vagentperformancereport = array();
$tdatadbo_vagentperformancereport[".Keys"] = $tableKeysdbo_vagentperformancereport;


$tdatadbo_vagentperformancereport[".hideMobileList"] = array();




//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","agent");
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


	$tdatadbo_vagentperformancereport["agent"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "agent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","callDate");
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


	$tdatadbo_vagentperformancereport["callDate"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "callDate";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","dialerCampaign");
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


	$tdatadbo_vagentperformancereport["dialerCampaign"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","dialerList");
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


	$tdatadbo_vagentperformancereport["dialerList"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "dialerList";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","callStatus");
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


	$tdatadbo_vagentperformancereport["callStatus"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "callStatus";
//	totalCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "totalCallsCount";
	$fdata["GoodName"] = "totalCallsCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","totalCallsCount");
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


	$tdatadbo_vagentperformancereport["totalCallsCount"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "totalCallsCount";
//	statusCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "statusCallsCount";
	$fdata["GoodName"] = "statusCallsCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusCallsCount");
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


	$tdatadbo_vagentperformancereport["statusCallsCount"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusCallsCount";
//	statusCallsPcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "statusCallsPcnt";
	$fdata["GoodName"] = "statusCallsPcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusCallsPcnt");
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


	$tdatadbo_vagentperformancereport["statusCallsPcnt"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusCallsPcnt";
//	totalTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "totalTalkTime";
	$fdata["GoodName"] = "totalTalkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","totalTalkTime");
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


	$tdatadbo_vagentperformancereport["totalTalkTime"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "totalTalkTime";
//	statusTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "statusTalkTime";
	$fdata["GoodName"] = "statusTalkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusTalkTime");
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


	$tdatadbo_vagentperformancereport["statusTalkTime"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusTalkTime";
//	statustalkTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "statustalkTimePcnt";
	$fdata["GoodName"] = "statustalkTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statustalkTimePcnt");
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


	$tdatadbo_vagentperformancereport["statustalkTimePcnt"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statustalkTimePcnt";
//	totalTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "totalTypingTime";
	$fdata["GoodName"] = "totalTypingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","totalTypingTime");
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


	$tdatadbo_vagentperformancereport["totalTypingTime"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "totalTypingTime";
//	statusTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "statusTypingTime";
	$fdata["GoodName"] = "statusTypingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusTypingTime");
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


	$tdatadbo_vagentperformancereport["statusTypingTime"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusTypingTime";
//	statusTypingTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "statusTypingTimePcnt";
	$fdata["GoodName"] = "statusTypingTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusTypingTimePcnt");
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


	$tdatadbo_vagentperformancereport["statusTypingTimePcnt"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusTypingTimePcnt";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","totalCallTime");
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


	$tdatadbo_vagentperformancereport["totalCallTime"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "totalCallTime";
//	statusCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "statusCallTime";
	$fdata["GoodName"] = "statusCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusCallTime");
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


	$tdatadbo_vagentperformancereport["statusCallTime"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusCallTime";
//	statusCallTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "statusCallTimePcnt";
	$fdata["GoodName"] = "statusCallTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReport";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReport","statusCallTimePcnt");
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


	$tdatadbo_vagentperformancereport["statusCallTimePcnt"] = $fdata;
		$tdatadbo_vagentperformancereport[".searchableFields"][] = "statusCallTimePcnt";


$tables_data["dbo.vAgentPerformanceReport"]=&$tdatadbo_vagentperformancereport;
$field_labels["dbo_vAgentPerformanceReport"] = &$fieldLabelsdbo_vagentperformancereport;
$fieldToolTips["dbo_vAgentPerformanceReport"] = &$fieldToolTipsdbo_vagentperformancereport;
$placeHolders["dbo_vAgentPerformanceReport"] = &$placeHoldersdbo_vagentperformancereport;
$page_titles["dbo_vAgentPerformanceReport"] = &$pageTitlesdbo_vagentperformancereport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vAgentPerformanceReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_vagentperformancereport()
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
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto6["m_sql"] = "agent";
$proto6["m_srcTableName"] = "dbo.vAgentPerformanceReport";
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
$proto8["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto12["m_sql"] = "dialerCampaign";
$proto12["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto14["m_sql"] = "dialerList";
$proto14["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto16["m_sql"] = "callStatus";
$proto16["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallsCount",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto18["m_sql"] = "totalCallsCount";
$proto18["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallsCount",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto20["m_sql"] = "statusCallsCount";
$proto20["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallsPcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto22["m_sql"] = "statusCallsPcnt";
$proto22["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTalkTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto24["m_sql"] = "totalTalkTime";
$proto24["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTalkTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto26["m_sql"] = "statusTalkTime";
$proto26["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "statustalkTimePcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto28["m_sql"] = "statustalkTimePcnt";
$proto28["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTypingTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto30["m_sql"] = "totalTypingTime";
$proto30["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTypingTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto32["m_sql"] = "statusTypingTime";
$proto32["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTypingTimePcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto34["m_sql"] = "statusTypingTimePcnt";
$proto34["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto36["m_sql"] = "totalCallTime";
$proto36["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallTime",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto38["m_sql"] = "statusCallTime";
$proto38["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallTimePcnt",
	"m_strTable" => "dbo.vAgentPerformanceReport",
	"m_srcTableName" => "dbo.vAgentPerformanceReport"
));

$proto40["m_sql"] = "statusCallTimePcnt";
$proto40["m_srcTableName"] = "dbo.vAgentPerformanceReport";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.vAgentPerformanceReport";
$proto43["m_srcTableName"] = "dbo.vAgentPerformanceReport";
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
$proto42["m_srcTableName"] = "dbo.vAgentPerformanceReport";
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
$proto0["m_srcTableName"]="dbo.vAgentPerformanceReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_vagentperformancereport = createSqlQuery_dbo_vagentperformancereport();


	
		;

																	

$tdatadbo_vagentperformancereport[".sqlquery"] = $queryData_dbo_vagentperformancereport;



$tableEvents["dbo.vAgentPerformanceReport"] = new eventsBase;
$tdatadbo_vagentperformancereport[".hasEvents"] = false;

?>