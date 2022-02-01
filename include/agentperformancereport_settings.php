<?php
$tdataagentperformancereport = array();
$tdataagentperformancereport[".searchableFields"] = array();
$tdataagentperformancereport[".ShortName"] = "agentperformancereport";
$tdataagentperformancereport[".OwnerID"] = "";
$tdataagentperformancereport[".OriginalTable"] = "dbo.Calls";


$tdataagentperformancereport[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataagentperformancereport[".originalPagesByType"] = $tdataagentperformancereport[".pagesByType"];
$tdataagentperformancereport[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataagentperformancereport[".originalPages"] = $tdataagentperformancereport[".pages"];
$tdataagentperformancereport[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataagentperformancereport[".originalDefaultPages"] = $tdataagentperformancereport[".defaultPages"];

//	field labels
$fieldLabelsagentperformancereport = array();
$fieldToolTipsagentperformancereport = array();
$pageTitlesagentperformancereport = array();
$placeHoldersagentperformancereport = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagentperformancereport["Greek"] = array();
	$fieldToolTipsagentperformancereport["Greek"] = array();
	$placeHoldersagentperformancereport["Greek"] = array();
	$pageTitlesagentperformancereport["Greek"] = array();
	$fieldLabelsagentperformancereport["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsagentperformancereport["Greek"]["dialerAgent"] = "";
	$placeHoldersagentperformancereport["Greek"]["dialerAgent"] = "";
	$fieldLabelsagentperformancereport["Greek"]["callDate"] = "Call Date";
	$fieldToolTipsagentperformancereport["Greek"]["callDate"] = "";
	$placeHoldersagentperformancereport["Greek"]["callDate"] = "";
	$fieldLabelsagentperformancereport["Greek"]["callStatus"] = "Call Status";
	$fieldToolTipsagentperformancereport["Greek"]["callStatus"] = "";
	$placeHoldersagentperformancereport["Greek"]["callStatus"] = "";
	$fieldLabelsagentperformancereport["Greek"]["totalTalkTime"] = "Total Talk Time";
	$fieldToolTipsagentperformancereport["Greek"]["totalTalkTime"] = "";
	$placeHoldersagentperformancereport["Greek"]["totalTalkTime"] = "";
	$fieldLabelsagentperformancereport["Greek"]["perStatusTalkTime"] = "Per Status Talk Time";
	$fieldToolTipsagentperformancereport["Greek"]["perStatusTalkTime"] = "";
	$placeHoldersagentperformancereport["Greek"]["perStatusTalkTime"] = "";
	$fieldLabelsagentperformancereport["Greek"]["talkTimePcnt"] = "Talk Time Pcnt";
	$fieldToolTipsagentperformancereport["Greek"]["talkTimePcnt"] = "";
	$placeHoldersagentperformancereport["Greek"]["talkTimePcnt"] = "";
	$fieldLabelsagentperformancereport["Greek"]["totalTypingTime"] = "Total Typing Time";
	$fieldToolTipsagentperformancereport["Greek"]["totalTypingTime"] = "";
	$placeHoldersagentperformancereport["Greek"]["totalTypingTime"] = "";
	$fieldLabelsagentperformancereport["Greek"]["perStatusTypingTime"] = "Per Status Typing Time";
	$fieldToolTipsagentperformancereport["Greek"]["perStatusTypingTime"] = "";
	$placeHoldersagentperformancereport["Greek"]["perStatusTypingTime"] = "";
	$fieldLabelsagentperformancereport["Greek"]["typingTimePcnt"] = "Typing Time Pcnt";
	$fieldToolTipsagentperformancereport["Greek"]["typingTimePcnt"] = "";
	$placeHoldersagentperformancereport["Greek"]["typingTimePcnt"] = "";
	$fieldLabelsagentperformancereport["Greek"]["totalTotalTime"] = "Total Total Time";
	$fieldToolTipsagentperformancereport["Greek"]["totalTotalTime"] = "";
	$placeHoldersagentperformancereport["Greek"]["totalTotalTime"] = "";
	$fieldLabelsagentperformancereport["Greek"]["perStatusTotalTime"] = "Per Status Total Time";
	$fieldToolTipsagentperformancereport["Greek"]["perStatusTotalTime"] = "";
	$placeHoldersagentperformancereport["Greek"]["perStatusTotalTime"] = "";
	$fieldLabelsagentperformancereport["Greek"]["totalTimePcnt"] = "Total Time Pcnt";
	$fieldToolTipsagentperformancereport["Greek"]["totalTimePcnt"] = "";
	$placeHoldersagentperformancereport["Greek"]["totalTimePcnt"] = "";
	$fieldLabelsagentperformancereport["Greek"]["totalCallsCount"] = "Total Calls Count";
	$fieldToolTipsagentperformancereport["Greek"]["totalCallsCount"] = "";
	$placeHoldersagentperformancereport["Greek"]["totalCallsCount"] = "";
	$fieldLabelsagentperformancereport["Greek"]["perStatusCallsCount"] = "Per Status Calls Count";
	$fieldToolTipsagentperformancereport["Greek"]["perStatusCallsCount"] = "";
	$placeHoldersagentperformancereport["Greek"]["perStatusCallsCount"] = "";
	$fieldLabelsagentperformancereport["Greek"]["callsPcnt"] = "Calls Pcnt";
	$fieldToolTipsagentperformancereport["Greek"]["callsPcnt"] = "";
	$placeHoldersagentperformancereport["Greek"]["callsPcnt"] = "";
	if (count($fieldToolTipsagentperformancereport["Greek"]))
		$tdataagentperformancereport[".isUseToolTips"] = true;
}


	$tdataagentperformancereport[".NCSearch"] = true;



$tdataagentperformancereport[".shortTableName"] = "agentperformancereport";
$tdataagentperformancereport[".nSecOptions"] = 0;

$tdataagentperformancereport[".mainTableOwnerID"] = "";
$tdataagentperformancereport[".entityType"] = 2;
$tdataagentperformancereport[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagentperformancereport[".strOriginalTableName"] = "dbo.Calls";

	



$tdataagentperformancereport[".showAddInPopup"] = false;

$tdataagentperformancereport[".showEditInPopup"] = false;

$tdataagentperformancereport[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagentperformancereport[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagentperformancereport[".listAjax"] = false;
//	temporary
$tdataagentperformancereport[".listAjax"] = false;

	$tdataagentperformancereport[".audit"] = false;

	$tdataagentperformancereport[".locking"] = false;


$pages = $tdataagentperformancereport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagentperformancereport[".edit"] = true;
	$tdataagentperformancereport[".afterEditAction"] = 1;
	$tdataagentperformancereport[".closePopupAfterEdit"] = 1;
	$tdataagentperformancereport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagentperformancereport[".add"] = true;
$tdataagentperformancereport[".afterAddAction"] = 1;
$tdataagentperformancereport[".closePopupAfterAdd"] = 1;
$tdataagentperformancereport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagentperformancereport[".list"] = true;
}



$tdataagentperformancereport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagentperformancereport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagentperformancereport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagentperformancereport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagentperformancereport[".printFriendly"] = true;
}



$tdataagentperformancereport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagentperformancereport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagentperformancereport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagentperformancereport[".isUseAjaxSuggest"] = true;




																																																																																																																		

$tdataagentperformancereport[".ajaxCodeSnippetAdded"] = false;

$tdataagentperformancereport[".buttonsAdded"] = false;

$tdataagentperformancereport[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagentperformancereport[".isUseTimeForSearch"] = false;


$tdataagentperformancereport[".badgeColor"] = "E8926F";


$tdataagentperformancereport[".allSearchFields"] = array();
$tdataagentperformancereport[".filterFields"] = array();
$tdataagentperformancereport[".requiredSearchFields"] = array();




$tdataagentperformancereport[".tableType"] = "report";

$tdataagentperformancereport[".printerPageOrientation"] = 0;
$tdataagentperformancereport[".nPrinterPageScale"] = 100;

$tdataagentperformancereport[".nPrinterSplitRecords"] = 40;

$tdataagentperformancereport[".geocodingEnabled"] = false;

//report settings
$tdataagentperformancereport[".crossTabReport"] = true;

$tdataagentperformancereport[".reportGroupFields"] = true;
$tdataagentperformancereport[".pageSize"] = 5;
$tdataagentperformancereport[".showGroupSummaryCount"] = true;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "callDate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callDate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callStatus";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callStatus";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerAgent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerAgent";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataagentperformancereport[".reportGroupFieldsData"] = $reportGroupFields;
$tdataagentperformancereport[".reportGroupFieldsList"] = $reportGroupFieldsList;


$tdataagentperformancereport[".isExistTotalFields"] = true;


$tdataagentperformancereport[".reportPageSummary"] = true;

$tdataagentperformancereport[".reportGlobalSummary"] = true;

$tdataagentperformancereport[".repShowDet"] = true;

$tdataagentperformancereport[".reportLayout"] = 0;

//end of report settings










$tstrOrderBy = "order by 
isnull(perStatus.dialerAgent,'Άγνωστος'),perStatus.callDate,
perStatus.status";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagentperformancereport[".strOrderBy"] = $tstrOrderBy;

$tdataagentperformancereport[".orderindexes"] = array();
	$tdataagentperformancereport[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "isnull(perStatus.dialerAgent, 'Άγνωστος')");

	$tdataagentperformancereport[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "perStatus.callDate");

	$tdataagentperformancereport[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "perStatus.status");



$tdataagentperformancereport[".sqlHead"] = "select isnull(perStatus.dialerAgent,'Άγνωστος') as dialerAgent,  perStatus.callDate,  perStatus.status as callStatus,  isnull(totals.totalTalkTime,0) as totalTalkTime,  isnull(perStatusTalkTime,0) as perStatusTalkTime,  isnull(round((perStatusTalkTime*1.0/totalTalkTime*1.0),2),0) as talkTimePcnt,  isnull(totals.totalTypingTime,0) as totalTypingTime,  isnull(perStatusTypingTime,0) as perStatusTypingTime,  isNull(round((perStatusTypingTime*1.0/totalTypingTime*1.0),2),0) as typingTimePcnt,  isnull(totals.totalTotalTime,0) as totalTotalTime,  isnull(perStatus.perStatusTotalTime,0) as perStatusTotalTime,  round((perStatus.perStatusTotalTime*1.0/totals.totalTalkTime*1.0),2) as totalTimePcnt,  isnull(totals.callsCount,0) as totalCallsCount,  isnull(perStatus.callsCount,0) as perStatusCallsCount,  round((perStatus.callsCount*1.0/totals.callsCount*1.0),2) as callsPcnt";
$tdataagentperformancereport[".sqlFrom"] = "from   (  select dialerAgent,  format(callStart, 'dd/MM/yyyy') AS callDate, cs.status,  sum (talkTime) as perStatusTalkTime,  sum (TypingTime) as perStatusTypingTime,  sum(totalCallTime) as perStatusTotalTime,   count(1) as callsCount  from calls as c   join callStatus as cs on cs.id = c.callStatusId  group by dialerAgent,  format(callStart, 'dd/MM/yyyy')  , cs.status ) as perStatus  left join  (select   dialeragent, format(callStart, 'dd/MM/yyyy') as callDate,   sum (talkTime) as totalTalkTime,  sum (TypingTime) as totalTypingTime,  sum(totalCallTime) as totalTotalTime,   count(1) as callsCount  from calls as c  group by dialeragent, format(callStart, 'dd/MM/yyyy') ) as totals  on totals.dialerAgent=perStatus.dialerAgent   and totals.callDate=perStatus.callDate";
$tdataagentperformancereport[".sqlWhereExpr"] = "";
$tdataagentperformancereport[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataagentperformancereport[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagentperformancereport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagentperformancereport[".arrGroupsPerPage"] = $arrGPP;

$tdataagentperformancereport[".highlightSearchResults"] = true;

$tableKeysagentperformancereport = array();
$tdataagentperformancereport[".Keys"] = $tableKeysagentperformancereport;


$tdataagentperformancereport[".hideMobileList"] = array();




//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","dialerAgent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(perStatus.dialerAgent,'Άγνωστος')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["rprint"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdataagentperformancereport["dialerAgent"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "dialerAgent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","callDate");
	$fdata["FieldType"] = 202;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "perStatus.callDate";

	
	
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


	$tdataagentperformancereport["callDate"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "callDate";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","callStatus");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "perStatus.status";

	
	
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


	$tdataagentperformancereport["callStatus"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "callStatus";
//	totalTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "totalTalkTime";
	$fdata["GoodName"] = "totalTalkTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","totalTalkTime");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

		$fdata["strField"] = "totalTalkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(totals.totalTalkTime,0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["totalTalkTime"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "totalTalkTime";
//	perStatusTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "perStatusTalkTime";
	$fdata["GoodName"] = "perStatusTalkTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","perStatusTalkTime");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "perStatusTalkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(perStatusTalkTime,0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["perStatusTalkTime"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "perStatusTalkTime";
//	talkTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "talkTimePcnt";
	$fdata["GoodName"] = "talkTimePcnt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","talkTimePcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "talkTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(round((perStatusTalkTime*1.0/totalTalkTime*1.0),2),0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["talkTimePcnt"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "talkTimePcnt";
//	totalTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "totalTypingTime";
	$fdata["GoodName"] = "totalTypingTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","totalTypingTime");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "totalTypingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(totals.totalTypingTime,0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["totalTypingTime"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "totalTypingTime";
//	perStatusTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "perStatusTypingTime";
	$fdata["GoodName"] = "perStatusTypingTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","perStatusTypingTime");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "perStatusTypingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(perStatusTypingTime,0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["perStatusTypingTime"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "perStatusTypingTime";
//	typingTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "typingTimePcnt";
	$fdata["GoodName"] = "typingTimePcnt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","typingTimePcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "typingTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isNull(round((perStatusTypingTime*1.0/totalTypingTime*1.0),2),0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["typingTimePcnt"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "typingTimePcnt";
//	totalTotalTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "totalTotalTime";
	$fdata["GoodName"] = "totalTotalTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","totalTotalTime");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "totalTotalTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(totals.totalTotalTime,0)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdataagentperformancereport["totalTotalTime"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "totalTotalTime";
//	perStatusTotalTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "perStatusTotalTime";
	$fdata["GoodName"] = "perStatusTotalTime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","perStatusTotalTime");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "perStatusTotalTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(perStatus.perStatusTotalTime,0)";

	
	
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


	$tdataagentperformancereport["perStatusTotalTime"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "perStatusTotalTime";
//	totalTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "totalTimePcnt";
	$fdata["GoodName"] = "totalTimePcnt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","totalTimePcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "totalTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "round((perStatus.perStatusTotalTime*1.0/totals.totalTalkTime*1.0),2)";

	
	
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


	$tdataagentperformancereport["totalTimePcnt"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "totalTimePcnt";
//	totalCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "totalCallsCount";
	$fdata["GoodName"] = "totalCallsCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","totalCallsCount");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "totalCallsCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(totals.callsCount,0)";

	
	
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


	$tdataagentperformancereport["totalCallsCount"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "totalCallsCount";
//	perStatusCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "perStatusCallsCount";
	$fdata["GoodName"] = "perStatusCallsCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","perStatusCallsCount");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "perStatusCallsCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(perStatus.callsCount,0)";

	
	
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


	$tdataagentperformancereport["perStatusCallsCount"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "perStatusCallsCount";
//	callsPcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "callsPcnt";
	$fdata["GoodName"] = "callsPcnt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentPerformanceReport","callsPcnt");
	$fdata["FieldType"] = 131;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callsPcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "round((perStatus.callsCount*1.0/totals.callsCount*1.0),2)";

	
	
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


	$tdataagentperformancereport["callsPcnt"] = $fdata;
		$tdataagentperformancereport[".searchableFields"][] = "callsPcnt";


$tables_data["agentPerformanceReport"]=&$tdataagentperformancereport;
$field_labels["agentPerformanceReport"] = &$fieldLabelsagentperformancereport;
$fieldToolTips["agentPerformanceReport"] = &$fieldToolTipsagentperformancereport;
$placeHolders["agentPerformanceReport"] = &$placeHoldersagentperformancereport;
$page_titles["agentPerformanceReport"] = &$pageTitlesagentperformancereport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["agentPerformanceReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_agentperformancereport()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "isnull(perStatus.dialerAgent,'Άγνωστος') as dialerAgent,  perStatus.callDate,  perStatus.status as callStatus,  isnull(totals.totalTalkTime,0) as totalTalkTime,  isnull(perStatusTalkTime,0) as perStatusTalkTime,  isnull(round((perStatusTalkTime*1.0/totalTalkTime*1.0),2),0) as talkTimePcnt,  isnull(totals.totalTypingTime,0) as totalTypingTime,  isnull(perStatusTypingTime,0) as perStatusTypingTime,  isNull(round((perStatusTypingTime*1.0/totalTypingTime*1.0),2),0) as typingTimePcnt,  isnull(totals.totalTotalTime,0) as totalTotalTime,  isnull(perStatus.perStatusTotalTime,0) as perStatusTotalTime,  round((perStatus.perStatusTotalTime*1.0/totals.totalTalkTime*1.0),2) as totalTimePcnt,  isnull(totals.callsCount,0) as totalCallsCount,  isnull(perStatus.callsCount,0) as perStatusCallsCount,  round((perStatus.callsCount*1.0/totals.callsCount*1.0),2) as callsPcnt";
$proto0["m_strFrom"] = "from   (  select dialerAgent,  format(callStart, 'dd/MM/yyyy') AS callDate, cs.status,  sum (talkTime) as perStatusTalkTime,  sum (TypingTime) as perStatusTypingTime,  sum(totalCallTime) as perStatusTotalTime,   count(1) as callsCount  from calls as c   join callStatus as cs on cs.id = c.callStatusId  group by dialerAgent,  format(callStart, 'dd/MM/yyyy')  , cs.status ) as perStatus  left join  (select   dialeragent, format(callStart, 'dd/MM/yyyy') as callDate,   sum (talkTime) as totalTalkTime,  sum (TypingTime) as totalTypingTime,  sum(totalCallTime) as totalTotalTime,   count(1) as callsCount  from calls as c  group by dialeragent, format(callStart, 'dd/MM/yyyy') ) as totals  on totals.dialerAgent=perStatus.dialerAgent   and totals.callDate=perStatus.callDate";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by   isnull(perStatus.dialerAgent,'Άγνωστος'),perStatus.callDate,  perStatus.status";
	
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "perStatus.dialerAgent"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Άγνωστος'"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "isnull(perStatus.dialerAgent,'Άγνωστος')";
$proto6["m_srcTableName"] = "agentPerformanceReport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "dialerAgent";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "callDate",
	"m_strTable" => "perStatus",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto10["m_sql"] = "perStatus.callDate";
$proto10["m_srcTableName"] = "agentPerformanceReport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "perStatus",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto12["m_sql"] = "perStatus.status";
$proto12["m_srcTableName"] = "agentPerformanceReport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "callStatus";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "totals.totalTalkTime"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "isnull(totals.totalTalkTime,0)";
$proto14["m_srcTableName"] = "agentPerformanceReport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "totalTalkTime";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "perStatusTalkTime"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "isnull(perStatusTalkTime,0)";
$proto18["m_srcTableName"] = "agentPerformanceReport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "perStatusTalkTime";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "round((perStatusTalkTime*1.0/totalTalkTime*1.0),2)"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "isnull(round((perStatusTalkTime*1.0/totalTalkTime*1.0),2),0)";
$proto22["m_srcTableName"] = "agentPerformanceReport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "talkTimePcnt";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "totals.totalTypingTime"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "isnull(totals.totalTypingTime,0)";
$proto26["m_srcTableName"] = "agentPerformanceReport";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "totalTypingTime";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "perStatusTypingTime"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "isnull(perStatusTypingTime,0)";
$proto30["m_srcTableName"] = "agentPerformanceReport";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "perStatusTypingTime";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "round((perStatusTypingTime*1.0/totalTypingTime*1.0),2)"
));

$proto35["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "isNull";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "isNull(round((perStatusTypingTime*1.0/totalTypingTime*1.0),2),0)";
$proto34["m_srcTableName"] = "agentPerformanceReport";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "typingTimePcnt";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$proto39=array();
$proto39["m_functiontype"] = "SQLF_CUSTOM";
$proto39["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "totals.totalTotalTime"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "isnull(totals.totalTotalTime,0)";
$proto38["m_srcTableName"] = "agentPerformanceReport";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "totalTotalTime";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "perStatus.perStatusTotalTime"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "isnull(perStatus.perStatusTotalTime,0)";
$proto42["m_srcTableName"] = "agentPerformanceReport";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "perStatusTotalTime";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$proto47=array();
$proto47["m_functiontype"] = "SQLF_CUSTOM";
$proto47["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(perStatus.perStatusTotalTime*1.0/totals.totalTalkTime*1.0)"
));

$proto47["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "2"
));

$proto47["m_arguments"][]=$obj;
$proto47["m_strFunctionName"] = "round";
$obj = new SQLFunctionCall($proto47);

$proto46["m_sql"] = "round((perStatus.perStatusTotalTime*1.0/totals.totalTalkTime*1.0),2)";
$proto46["m_srcTableName"] = "agentPerformanceReport";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "totalTimePcnt";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$proto51=array();
$proto51["m_functiontype"] = "SQLF_CUSTOM";
$proto51["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "totals.callsCount"
));

$proto51["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto51["m_arguments"][]=$obj;
$proto51["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto51);

$proto50["m_sql"] = "isnull(totals.callsCount,0)";
$proto50["m_srcTableName"] = "agentPerformanceReport";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "totalCallsCount";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$proto55=array();
$proto55["m_functiontype"] = "SQLF_CUSTOM";
$proto55["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "perStatus.callsCount"
));

$proto55["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto55["m_arguments"][]=$obj;
$proto55["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto55);

$proto54["m_sql"] = "isnull(perStatus.callsCount,0)";
$proto54["m_srcTableName"] = "agentPerformanceReport";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "perStatusCallsCount";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$proto59=array();
$proto59["m_functiontype"] = "SQLF_CUSTOM";
$proto59["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(perStatus.callsCount*1.0/totals.callsCount*1.0)"
));

$proto59["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "2"
));

$proto59["m_arguments"][]=$obj;
$proto59["m_strFunctionName"] = "round";
$obj = new SQLFunctionCall($proto59);

$proto58["m_sql"] = "round((perStatus.callsCount*1.0/totals.callsCount*1.0),2)";
$proto58["m_srcTableName"] = "agentPerformanceReport";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "callsPcnt";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strHead"] = "  select";
$proto63["m_strFieldList"] = "dialerAgent,  format(callStart, 'dd/MM/yyyy') AS callDate, cs.status,  sum (talkTime) as perStatusTalkTime,  sum (TypingTime) as perStatusTypingTime,  sum(totalCallTime) as perStatusTotalTime,   count(1) as callsCount";
$proto63["m_strFrom"] = "from calls as c   join callStatus as cs on cs.id = c.callStatusId";
$proto63["m_strWhere"] = "";
$proto63["m_strOrderBy"] = "";
	
		;
			$proto63["cipherer"] = null;
$proto65=array();
$proto65["m_sql"] = "";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_where"] = $obj;
$proto67=array();
$proto67["m_sql"] = "";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto63["m_having"] = $obj;
$proto63["m_fieldlist"] = array();
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto69["m_sql"] = "dialerAgent";
$proto69["m_srcTableName"] = "agentPerformanceReport";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto63["m_fieldlist"][]=$obj;
						$proto71=array();
			$proto72=array();
$proto72["m_functiontype"] = "SQLF_CUSTOM";
$proto72["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto72["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto72["m_arguments"][]=$obj;
$proto72["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto72);

$proto71["m_sql"] = "format(callStart, 'dd/MM/yyyy')";
$proto71["m_srcTableName"] = "agentPerformanceReport";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto71);

$proto63["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "cs",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto75["m_sql"] = "cs.status";
$proto75["m_srcTableName"] = "agentPerformanceReport";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto63["m_fieldlist"][]=$obj;
						$proto77=array();
			$proto78=array();
$proto78["m_functiontype"] = "SQLF_SUM";
$proto78["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto78["m_arguments"][]=$obj;
$proto78["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto78);

$proto77["m_sql"] = "sum (talkTime)";
$proto77["m_srcTableName"] = "agentPerformanceReport";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "perStatusTalkTime";
$obj = new SQLFieldListItem($proto77);

$proto63["m_fieldlist"][]=$obj;
						$proto80=array();
			$proto81=array();
$proto81["m_functiontype"] = "SQLF_SUM";
$proto81["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "sum (TypingTime)";
$proto80["m_srcTableName"] = "agentPerformanceReport";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "perStatusTypingTime";
$obj = new SQLFieldListItem($proto80);

$proto63["m_fieldlist"][]=$obj;
						$proto83=array();
			$proto84=array();
$proto84["m_functiontype"] = "SQLF_SUM";
$proto84["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto84["m_arguments"][]=$obj;
$proto84["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto84);

$proto83["m_sql"] = "sum(totalCallTime)";
$proto83["m_srcTableName"] = "agentPerformanceReport";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "perStatusTotalTime";
$obj = new SQLFieldListItem($proto83);

$proto63["m_fieldlist"][]=$obj;
						$proto86=array();
			$proto87=array();
$proto87["m_functiontype"] = "SQLF_COUNT";
$proto87["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto87["m_arguments"][]=$obj;
$proto87["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto87);

$proto86["m_sql"] = "count(1)";
$proto86["m_srcTableName"] = "agentPerformanceReport";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "callsCount";
$obj = new SQLFieldListItem($proto86);

$proto63["m_fieldlist"][]=$obj;
$proto63["m_fromlist"] = array();
												$proto89=array();
$proto89["m_link"] = "SQLL_MAIN";
			$proto90=array();
$proto90["m_strName"] = "dbo.Calls";
$proto90["m_srcTableName"] = "agentPerformanceReport";
$proto90["m_columns"] = array();
$proto90["m_columns"][] = "id";
$proto90["m_columns"][] = "contactId";
$proto90["m_columns"][] = "callStart";
$proto90["m_columns"][] = "callHangup";
$proto90["m_columns"][] = "callEnd";
$proto90["m_columns"][] = "talkTime";
$proto90["m_columns"][] = "typingTime";
$proto90["m_columns"][] = "totalCallTime";
$proto90["m_columns"][] = "tvchannel";
$proto90["m_columns"][] = "broadcast";
$proto90["m_columns"][] = "seller";
$proto90["m_columns"][] = "callStatusId";
$proto90["m_columns"][] = "callDenialReasonID";
$proto90["m_columns"][] = "callClassificationID";
$proto90["m_columns"][] = "callSubClassificationID";
$proto90["m_columns"][] = "remarks";
$proto90["m_columns"][] = "redialDate";
$proto90["m_columns"][] = "redialComments";
$proto90["m_columns"][] = "redialIsPrivate";
$proto90["m_columns"][] = "redialDone";
$proto90["m_columns"][] = "contactMethod";
$proto90["m_columns"][] = "courier";
$proto90["m_columns"][] = "deliveryComments";
$proto90["m_columns"][] = "courierDeliveryDate";
$proto90["m_columns"][] = "courierTimeFrom";
$proto90["m_columns"][] = "courierTimeTo";
$proto90["m_columns"][] = "dialerPhone";
$proto90["m_columns"][] = "dialerCallEpoch";
$proto90["m_columns"][] = "dialerCampaign";
$proto90["m_columns"][] = "dialerList";
$proto90["m_columns"][] = "dialerLeadID";
$proto90["m_columns"][] = "dialerAgent";
$proto90["m_columns"][] = "dialerRecording";
$proto90["m_columns"][] = "productFamilyId";
$proto90["m_columns"][] = "orderShipCompany";
$proto90["m_columns"][] = "orderInvoiceRequired";
$proto90["m_columns"][] = "callComments";
$proto90["m_columns"][] = "internalCommunication";
$proto90["m_columns"][] = "callGdprAcceptance";
$proto90["m_columns"][] = "callGdprRecordingAcceptance";
$proto90["m_columns"][] = "orderPaymentMethod";
$proto90["m_columns"][] = "contactName";
$proto90["m_columns"][] = "contactZipCode";
$proto90["m_columns"][] = "contactCity";
$proto90["m_columns"][] = "ContactArea";
$proto90["m_columns"][] = "contactGender";
$proto90["m_columns"][] = "contactAge";
$proto90["m_columns"][] = "crmUser";
$proto90["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto90);

$proto89["m_table"] = $obj;
$proto89["m_sql"] = "calls as c";
$proto89["m_alias"] = "c";
$proto89["m_srcTableName"] = "agentPerformanceReport";
$proto91=array();
$proto91["m_sql"] = "";
$proto91["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto91["m_column"]=$obj;
$proto91["m_contained"] = array();
$proto91["m_strCase"] = "";
$proto91["m_havingmode"] = false;
$proto91["m_inBrackets"] = false;
$proto91["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto91);

$proto89["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto89);

$proto63["m_fromlist"][]=$obj;
												$proto93=array();
$proto93["m_link"] = "SQLL_INNERJOIN";
			$proto94=array();
$proto94["m_strName"] = "dbo.callStatus";
$proto94["m_srcTableName"] = "agentPerformanceReport";
$proto94["m_columns"] = array();
$proto94["m_columns"][] = "id";
$proto94["m_columns"][] = "status";
$proto94["m_columns"][] = "isDenial";
$proto94["m_columns"][] = "displayOrder";
$proto94["m_columns"][] = "dialerStatus";
$proto94["m_columns"][] = "callClassificationId";
$proto94["m_columns"][] = "callSubClassificationId";
$obj = new SQLTable($proto94);

$proto93["m_table"] = $obj;
$proto93["m_sql"] = "join callStatus as cs on cs.id = c.callStatusId";
$proto93["m_alias"] = "cs";
$proto93["m_srcTableName"] = "agentPerformanceReport";
$proto95=array();
$proto95["m_sql"] = "cs.id = c.callStatusId";
$proto95["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cs",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto95["m_column"]=$obj;
$proto95["m_contained"] = array();
$proto95["m_strCase"] = "= c.callStatusId";
$proto95["m_havingmode"] = false;
$proto95["m_inBrackets"] = false;
$proto95["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto95);

$proto93["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto93);

$proto63["m_fromlist"][]=$obj;
$proto63["m_groupby"] = array();
												$proto97=array();
						$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto97["m_column"]=$obj;
$obj = new SQLGroupByItem($proto97);

$proto63["m_groupby"][]=$obj;
												$proto99=array();
						$proto100=array();
$proto100["m_functiontype"] = "SQLF_CUSTOM";
$proto100["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto100["m_arguments"][]=$obj;
$proto100["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto100);

$proto99["m_column"]=$obj;
$obj = new SQLGroupByItem($proto99);

$proto63["m_groupby"][]=$obj;
												$proto103=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "cs",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto103["m_column"]=$obj;
$obj = new SQLGroupByItem($proto103);

$proto63["m_groupby"][]=$obj;
$proto63["m_orderby"] = array();
$proto63["m_srcTableName"]="agentPerformanceReport";		
$obj = new SQLQuery($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "(  select dialerAgent,  format(callStart, 'dd/MM/yyyy') AS callDate, cs.status,  sum (talkTime) as perStatusTalkTime,  sum (TypingTime) as perStatusTypingTime,  sum(totalCallTime) as perStatusTotalTime,   count(1) as callsCount  from calls as c   join callStatus as cs on cs.id = c.callStatusId  group by dialerAgent,  format(callStart, 'dd/MM/yyyy')  , cs.status ) as perStatus";
$proto62["m_alias"] = "perStatus";
$proto62["m_srcTableName"] = "agentPerformanceReport";
$proto105=array();
$proto105["m_sql"] = "";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = false;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto107=array();
$proto107["m_link"] = "SQLL_LEFTJOIN";
			$proto108=array();
$proto108["m_strHead"] = "select";
$proto108["m_strFieldList"] = "dialeragent, format(callStart, 'dd/MM/yyyy') as callDate,   sum (talkTime) as totalTalkTime,  sum (TypingTime) as totalTypingTime,  sum(totalCallTime) as totalTotalTime,   count(1) as callsCount";
$proto108["m_strFrom"] = "from calls as c";
$proto108["m_strWhere"] = "";
$proto108["m_strOrderBy"] = "";
	
		;
			$proto108["cipherer"] = null;
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_where"] = $obj;
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto108["m_having"] = $obj;
$proto108["m_fieldlist"] = array();
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto114["m_sql"] = "dialeragent";
$proto114["m_srcTableName"] = "agentPerformanceReport";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto108["m_fieldlist"][]=$obj;
						$proto116=array();
			$proto117=array();
$proto117["m_functiontype"] = "SQLF_CUSTOM";
$proto117["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto117["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto117["m_arguments"][]=$obj;
$proto117["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto117);

$proto116["m_sql"] = "format(callStart, 'dd/MM/yyyy')";
$proto116["m_srcTableName"] = "agentPerformanceReport";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto116);

$proto108["m_fieldlist"][]=$obj;
						$proto120=array();
			$proto121=array();
$proto121["m_functiontype"] = "SQLF_SUM";
$proto121["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto121["m_arguments"][]=$obj;
$proto121["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto121);

$proto120["m_sql"] = "sum (talkTime)";
$proto120["m_srcTableName"] = "agentPerformanceReport";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "totalTalkTime";
$obj = new SQLFieldListItem($proto120);

$proto108["m_fieldlist"][]=$obj;
						$proto123=array();
			$proto124=array();
$proto124["m_functiontype"] = "SQLF_SUM";
$proto124["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto124["m_arguments"][]=$obj;
$proto124["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto124);

$proto123["m_sql"] = "sum (TypingTime)";
$proto123["m_srcTableName"] = "agentPerformanceReport";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "totalTypingTime";
$obj = new SQLFieldListItem($proto123);

$proto108["m_fieldlist"][]=$obj;
						$proto126=array();
			$proto127=array();
$proto127["m_functiontype"] = "SQLF_SUM";
$proto127["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto127["m_arguments"][]=$obj;
$proto127["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto127);

$proto126["m_sql"] = "sum(totalCallTime)";
$proto126["m_srcTableName"] = "agentPerformanceReport";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "totalTotalTime";
$obj = new SQLFieldListItem($proto126);

$proto108["m_fieldlist"][]=$obj;
						$proto129=array();
			$proto130=array();
$proto130["m_functiontype"] = "SQLF_COUNT";
$proto130["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto130["m_arguments"][]=$obj;
$proto130["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto130);

$proto129["m_sql"] = "count(1)";
$proto129["m_srcTableName"] = "agentPerformanceReport";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "callsCount";
$obj = new SQLFieldListItem($proto129);

$proto108["m_fieldlist"][]=$obj;
$proto108["m_fromlist"] = array();
												$proto132=array();
$proto132["m_link"] = "SQLL_MAIN";
			$proto133=array();
$proto133["m_strName"] = "dbo.Calls";
$proto133["m_srcTableName"] = "agentPerformanceReport";
$proto133["m_columns"] = array();
$proto133["m_columns"][] = "id";
$proto133["m_columns"][] = "contactId";
$proto133["m_columns"][] = "callStart";
$proto133["m_columns"][] = "callHangup";
$proto133["m_columns"][] = "callEnd";
$proto133["m_columns"][] = "talkTime";
$proto133["m_columns"][] = "typingTime";
$proto133["m_columns"][] = "totalCallTime";
$proto133["m_columns"][] = "tvchannel";
$proto133["m_columns"][] = "broadcast";
$proto133["m_columns"][] = "seller";
$proto133["m_columns"][] = "callStatusId";
$proto133["m_columns"][] = "callDenialReasonID";
$proto133["m_columns"][] = "callClassificationID";
$proto133["m_columns"][] = "callSubClassificationID";
$proto133["m_columns"][] = "remarks";
$proto133["m_columns"][] = "redialDate";
$proto133["m_columns"][] = "redialComments";
$proto133["m_columns"][] = "redialIsPrivate";
$proto133["m_columns"][] = "redialDone";
$proto133["m_columns"][] = "contactMethod";
$proto133["m_columns"][] = "courier";
$proto133["m_columns"][] = "deliveryComments";
$proto133["m_columns"][] = "courierDeliveryDate";
$proto133["m_columns"][] = "courierTimeFrom";
$proto133["m_columns"][] = "courierTimeTo";
$proto133["m_columns"][] = "dialerPhone";
$proto133["m_columns"][] = "dialerCallEpoch";
$proto133["m_columns"][] = "dialerCampaign";
$proto133["m_columns"][] = "dialerList";
$proto133["m_columns"][] = "dialerLeadID";
$proto133["m_columns"][] = "dialerAgent";
$proto133["m_columns"][] = "dialerRecording";
$proto133["m_columns"][] = "productFamilyId";
$proto133["m_columns"][] = "orderShipCompany";
$proto133["m_columns"][] = "orderInvoiceRequired";
$proto133["m_columns"][] = "callComments";
$proto133["m_columns"][] = "internalCommunication";
$proto133["m_columns"][] = "callGdprAcceptance";
$proto133["m_columns"][] = "callGdprRecordingAcceptance";
$proto133["m_columns"][] = "orderPaymentMethod";
$proto133["m_columns"][] = "contactName";
$proto133["m_columns"][] = "contactZipCode";
$proto133["m_columns"][] = "contactCity";
$proto133["m_columns"][] = "ContactArea";
$proto133["m_columns"][] = "contactGender";
$proto133["m_columns"][] = "contactAge";
$proto133["m_columns"][] = "crmUser";
$proto133["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "calls as c";
$proto132["m_alias"] = "c";
$proto132["m_srcTableName"] = "agentPerformanceReport";
$proto134=array();
$proto134["m_sql"] = "";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto132["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto132);

$proto108["m_fromlist"][]=$obj;
$proto108["m_groupby"] = array();
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto108["m_groupby"][]=$obj;
												$proto138=array();
						$proto139=array();
$proto139["m_functiontype"] = "SQLF_CUSTOM";
$proto139["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto139["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto139["m_arguments"][]=$obj;
$proto139["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto139);

$proto138["m_column"]=$obj;
$obj = new SQLGroupByItem($proto138);

$proto108["m_groupby"][]=$obj;
$proto108["m_orderby"] = array();
$proto108["m_srcTableName"]="agentPerformanceReport";		
$obj = new SQLQuery($proto108);

$proto107["m_table"] = $obj;
$proto107["m_sql"] = "left join  (select   dialeragent, format(callStart, 'dd/MM/yyyy') as callDate,   sum (talkTime) as totalTalkTime,  sum (TypingTime) as totalTypingTime,  sum(totalCallTime) as totalTotalTime,   count(1) as callsCount  from calls as c  group by dialeragent, format(callStart, 'dd/MM/yyyy') ) as totals  on totals.dialerAgent=perStatus.dialerAgent   and totals.callDate=perStatus.callDate";
$proto107["m_alias"] = "totals";
$proto107["m_srcTableName"] = "agentPerformanceReport";
$proto142=array();
$proto142["m_sql"] = "totals.dialerAgent=perStatus.dialerAgent   and totals.callDate=perStatus.callDate";
$proto142["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "totals.dialerAgent=perStatus.dialerAgent   and totals.callDate=perStatus.callDate"
));

$proto142["m_column"]=$obj;
$proto142["m_contained"] = array();
						$proto144=array();
$proto144["m_sql"] = "totals.dialerAgent=perStatus.dialerAgent";
$proto144["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "totals",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto144["m_column"]=$obj;
$proto144["m_contained"] = array();
$proto144["m_strCase"] = "=perStatus.dialerAgent";
$proto144["m_havingmode"] = false;
$proto144["m_inBrackets"] = false;
$proto144["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto144);

			$proto142["m_contained"][]=$obj;
						$proto146=array();
$proto146["m_sql"] = "totals.callDate=perStatus.callDate";
$proto146["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callDate",
	"m_strTable" => "totals",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto146["m_column"]=$obj;
$proto146["m_contained"] = array();
$proto146["m_strCase"] = "=perStatus.callDate";
$proto146["m_havingmode"] = false;
$proto146["m_inBrackets"] = false;
$proto146["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto146);

			$proto142["m_contained"][]=$obj;
$proto142["m_strCase"] = "";
$proto142["m_havingmode"] = false;
$proto142["m_inBrackets"] = false;
$proto142["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto142);

$proto107["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto107);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto148=array();
						$proto149=array();
$proto149["m_functiontype"] = "SQLF_CUSTOM";
$proto149["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "perStatus.dialerAgent"
));

$proto149["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Άγνωστος'"
));

$proto149["m_arguments"][]=$obj;
$proto149["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto149);

$proto148["m_column"]=$obj;
$proto148["m_bAsc"] = 1;
$proto148["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto148);

$proto0["m_orderby"][]=$obj;					
												$proto152=array();
						$obj = new SQLField(array(
	"m_strName" => "callDate",
	"m_strTable" => "perStatus",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto152["m_column"]=$obj;
$proto152["m_bAsc"] = 1;
$proto152["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto152);

$proto0["m_orderby"][]=$obj;					
												$proto154=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "perStatus",
	"m_srcTableName" => "agentPerformanceReport"
));

$proto154["m_column"]=$obj;
$proto154["m_bAsc"] = 1;
$proto154["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto154);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="agentPerformanceReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agentperformancereport = createSqlQuery_agentperformancereport();


	
		;

															

$tdataagentperformancereport[".sqlquery"] = $queryData_agentperformancereport;



$tableEvents["agentPerformanceReport"] = new eventsBase;
$tdataagentperformancereport[".hasEvents"] = false;

?>