<?php
$tdatavagentperformance = array();
$tdatavagentperformance[".searchableFields"] = array();
$tdatavagentperformance[".ShortName"] = "vagentperformance";
$tdatavagentperformance[".OwnerID"] = "";
$tdatavagentperformance[".OriginalTable"] = "dbo.vAgentPerformance";


$tdatavagentperformance[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavagentperformance[".originalPagesByType"] = $tdatavagentperformance[".pagesByType"];
$tdatavagentperformance[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavagentperformance[".originalPages"] = $tdatavagentperformance[".pages"];
$tdatavagentperformance[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavagentperformance[".originalDefaultPages"] = $tdatavagentperformance[".defaultPages"];

//	field labels
$fieldLabelsvagentperformance = array();
$fieldToolTipsvagentperformance = array();
$pageTitlesvagentperformance = array();
$placeHoldersvagentperformance = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvagentperformance["Greek"] = array();
	$fieldToolTipsvagentperformance["Greek"] = array();
	$placeHoldersvagentperformance["Greek"] = array();
	$pageTitlesvagentperformance["Greek"] = array();
	$fieldLabelsvagentperformance["Greek"]["agent"] = "Agent";
	$fieldToolTipsvagentperformance["Greek"]["agent"] = "";
	$placeHoldersvagentperformance["Greek"]["agent"] = "";
	$fieldLabelsvagentperformance["Greek"]["callDate"] = "Call Date";
	$fieldToolTipsvagentperformance["Greek"]["callDate"] = "";
	$placeHoldersvagentperformance["Greek"]["callDate"] = "";
	$fieldLabelsvagentperformance["Greek"]["dialerCampaign"] = "Dialer Campaign";
	$fieldToolTipsvagentperformance["Greek"]["dialerCampaign"] = "";
	$placeHoldersvagentperformance["Greek"]["dialerCampaign"] = "";
	$fieldLabelsvagentperformance["Greek"]["dialerList"] = "Dialer List";
	$fieldToolTipsvagentperformance["Greek"]["dialerList"] = "";
	$placeHoldersvagentperformance["Greek"]["dialerList"] = "";
	$fieldLabelsvagentperformance["Greek"]["callStatus"] = "Call Status";
	$fieldToolTipsvagentperformance["Greek"]["callStatus"] = "";
	$placeHoldersvagentperformance["Greek"]["callStatus"] = "";
	$fieldLabelsvagentperformance["Greek"]["totalCallsCount"] = "Total Calls Count";
	$fieldToolTipsvagentperformance["Greek"]["totalCallsCount"] = "";
	$placeHoldersvagentperformance["Greek"]["totalCallsCount"] = "";
	$fieldLabelsvagentperformance["Greek"]["statusCallsCount"] = "Status Calls Count";
	$fieldToolTipsvagentperformance["Greek"]["statusCallsCount"] = "";
	$placeHoldersvagentperformance["Greek"]["statusCallsCount"] = "";
	$fieldLabelsvagentperformance["Greek"]["statusCallsPcnt"] = "Status Calls Pcnt";
	$fieldToolTipsvagentperformance["Greek"]["statusCallsPcnt"] = "";
	$placeHoldersvagentperformance["Greek"]["statusCallsPcnt"] = "";
	$fieldLabelsvagentperformance["Greek"]["totalTalkTime"] = "Total Talk Time";
	$fieldToolTipsvagentperformance["Greek"]["totalTalkTime"] = "";
	$placeHoldersvagentperformance["Greek"]["totalTalkTime"] = "";
	$fieldLabelsvagentperformance["Greek"]["StatusTalkTime"] = "Status Talk Time";
	$fieldToolTipsvagentperformance["Greek"]["StatusTalkTime"] = "";
	$placeHoldersvagentperformance["Greek"]["StatusTalkTime"] = "";
	$fieldLabelsvagentperformance["Greek"]["statustalkTimePcnt"] = "Statustalk Time Pcnt";
	$fieldToolTipsvagentperformance["Greek"]["statustalkTimePcnt"] = "";
	$placeHoldersvagentperformance["Greek"]["statustalkTimePcnt"] = "";
	$fieldLabelsvagentperformance["Greek"]["totalTypingTime"] = "Total Typing Time";
	$fieldToolTipsvagentperformance["Greek"]["totalTypingTime"] = "";
	$placeHoldersvagentperformance["Greek"]["totalTypingTime"] = "";
	$fieldLabelsvagentperformance["Greek"]["statusTypingTime"] = "Status Typing Time";
	$fieldToolTipsvagentperformance["Greek"]["statusTypingTime"] = "";
	$placeHoldersvagentperformance["Greek"]["statusTypingTime"] = "";
	$fieldLabelsvagentperformance["Greek"]["statusTypingTimePcnt"] = "Status Typing Time Pcnt";
	$fieldToolTipsvagentperformance["Greek"]["statusTypingTimePcnt"] = "";
	$placeHoldersvagentperformance["Greek"]["statusTypingTimePcnt"] = "";
	$fieldLabelsvagentperformance["Greek"]["agentDayTotalCallTime"] = "Agent Day Total Call Time";
	$fieldToolTipsvagentperformance["Greek"]["agentDayTotalCallTime"] = "";
	$placeHoldersvagentperformance["Greek"]["agentDayTotalCallTime"] = "";
	$fieldLabelsvagentperformance["Greek"]["statusCallTime"] = "Status Call Time";
	$fieldToolTipsvagentperformance["Greek"]["statusCallTime"] = "";
	$placeHoldersvagentperformance["Greek"]["statusCallTime"] = "";
	$fieldLabelsvagentperformance["Greek"]["statusTCallTimePcnt"] = "Status TCall Time Pcnt";
	$fieldToolTipsvagentperformance["Greek"]["statusTCallTimePcnt"] = "";
	$placeHoldersvagentperformance["Greek"]["statusTCallTimePcnt"] = "";
	if (count($fieldToolTipsvagentperformance["Greek"]))
		$tdatavagentperformance[".isUseToolTips"] = true;
}


	$tdatavagentperformance[".NCSearch"] = true;



$tdatavagentperformance[".shortTableName"] = "vagentperformance";
$tdatavagentperformance[".nSecOptions"] = 0;

$tdatavagentperformance[".mainTableOwnerID"] = "";
$tdatavagentperformance[".entityType"] = 0;
$tdatavagentperformance[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavagentperformance[".strOriginalTableName"] = "dbo.vAgentPerformance";

	



$tdatavagentperformance[".showAddInPopup"] = false;

$tdatavagentperformance[".showEditInPopup"] = false;

$tdatavagentperformance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavagentperformance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavagentperformance[".listAjax"] = false;
//	temporary
$tdatavagentperformance[".listAjax"] = false;

	$tdatavagentperformance[".audit"] = false;

	$tdatavagentperformance[".locking"] = false;


$pages = $tdatavagentperformance[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavagentperformance[".edit"] = true;
	$tdatavagentperformance[".afterEditAction"] = 1;
	$tdatavagentperformance[".closePopupAfterEdit"] = 1;
	$tdatavagentperformance[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavagentperformance[".add"] = true;
$tdatavagentperformance[".afterAddAction"] = 1;
$tdatavagentperformance[".closePopupAfterAdd"] = 1;
$tdatavagentperformance[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavagentperformance[".list"] = true;
}



$tdatavagentperformance[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavagentperformance[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavagentperformance[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavagentperformance[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavagentperformance[".printFriendly"] = true;
}



$tdatavagentperformance[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavagentperformance[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavagentperformance[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavagentperformance[".isUseAjaxSuggest"] = true;

$tdatavagentperformance[".rowHighlite"] = true;



																																																																																																																																																																																																																																				

$tdatavagentperformance[".ajaxCodeSnippetAdded"] = false;

$tdatavagentperformance[".buttonsAdded"] = false;

$tdatavagentperformance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavagentperformance[".isUseTimeForSearch"] = false;


$tdatavagentperformance[".badgeColor"] = "cfae83";


$tdatavagentperformance[".allSearchFields"] = array();
$tdatavagentperformance[".filterFields"] = array();
$tdatavagentperformance[".requiredSearchFields"] = array();

$tdatavagentperformance[".googleLikeFields"] = array();
$tdatavagentperformance[".googleLikeFields"][] = "agent";
$tdatavagentperformance[".googleLikeFields"][] = "callDate";
$tdatavagentperformance[".googleLikeFields"][] = "dialerCampaign";
$tdatavagentperformance[".googleLikeFields"][] = "dialerList";
$tdatavagentperformance[".googleLikeFields"][] = "callStatus";
$tdatavagentperformance[".googleLikeFields"][] = "totalCallsCount";
$tdatavagentperformance[".googleLikeFields"][] = "statusCallsCount";
$tdatavagentperformance[".googleLikeFields"][] = "statusCallsPcnt";
$tdatavagentperformance[".googleLikeFields"][] = "totalTalkTime";
$tdatavagentperformance[".googleLikeFields"][] = "StatusTalkTime";
$tdatavagentperformance[".googleLikeFields"][] = "statustalkTimePcnt";
$tdatavagentperformance[".googleLikeFields"][] = "totalTypingTime";
$tdatavagentperformance[".googleLikeFields"][] = "statusTypingTime";
$tdatavagentperformance[".googleLikeFields"][] = "statusTypingTimePcnt";
$tdatavagentperformance[".googleLikeFields"][] = "agentDayTotalCallTime";
$tdatavagentperformance[".googleLikeFields"][] = "statusCallTime";
$tdatavagentperformance[".googleLikeFields"][] = "statusTCallTimePcnt";



$tdatavagentperformance[".tableType"] = "list";

$tdatavagentperformance[".printerPageOrientation"] = 0;
$tdatavagentperformance[".nPrinterPageScale"] = 100;

$tdatavagentperformance[".nPrinterSplitRecords"] = 40;

$tdatavagentperformance[".geocodingEnabled"] = false;










$tdatavagentperformance[".pageSize"] = 20;

$tdatavagentperformance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavagentperformance[".strOrderBy"] = $tstrOrderBy;

$tdatavagentperformance[".orderindexes"] = array();


$tdatavagentperformance[".sqlHead"] = "SELECT agent,  	callDate,  	dialerCampaign,  	dialerList,  	callStatus,  	totalCallsCount,  	statusCallsCount,  	statusCallsPcnt,  	totalTalkTime,  	StatusTalkTime,  	statustalkTimePcnt,  	totalTypingTime,  	statusTypingTime,  	statusTypingTimePcnt,  	agentDayTotalCallTime,  	statusCallTime,  	statusTCallTimePcnt";
$tdatavagentperformance[".sqlFrom"] = "FROM dbo.vAgentPerformance";
$tdatavagentperformance[".sqlWhereExpr"] = "";
$tdatavagentperformance[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavagentperformance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavagentperformance[".arrGroupsPerPage"] = $arrGPP;

$tdatavagentperformance[".highlightSearchResults"] = true;

$tableKeysvagentperformance = array();
$tdatavagentperformance[".Keys"] = $tableKeysvagentperformance;


$tdatavagentperformance[".hideMobileList"] = array();




//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","agent");
	$fdata["FieldType"] = 200;

	
	
	
			

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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatavagentperformance["agent"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "agent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","callDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callDate";

	
	
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
			$edata["EditParams"].= " maxlength=4000";

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


	$tdatavagentperformance["callDate"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "callDate";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","dialerCampaign");
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


	$tdatavagentperformance["dialerCampaign"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","dialerList");
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


	$tdatavagentperformance["dialerList"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "dialerList";
//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","callStatus");
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


	$tdatavagentperformance["callStatus"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "callStatus";
//	totalCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "totalCallsCount";
	$fdata["GoodName"] = "totalCallsCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","totalCallsCount");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatavagentperformance["totalCallsCount"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "totalCallsCount";
//	statusCallsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "statusCallsCount";
	$fdata["GoodName"] = "statusCallsCount";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statusCallsCount");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatavagentperformance["statusCallsCount"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statusCallsCount";
//	statusCallsPcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "statusCallsPcnt";
	$fdata["GoodName"] = "statusCallsPcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statusCallsPcnt");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "statusCallsPcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusCallsPcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 13;

	
	
	
	
		
	
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


	$tdatavagentperformance["statusCallsPcnt"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statusCallsPcnt";
//	totalTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "totalTalkTime";
	$fdata["GoodName"] = "totalTalkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","totalTalkTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "totalTalkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalTalkTime";

	
	
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


	$tdatavagentperformance["totalTalkTime"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "totalTalkTime";
//	StatusTalkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "StatusTalkTime";
	$fdata["GoodName"] = "StatusTalkTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","StatusTalkTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "StatusTalkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatusTalkTime";

	
	
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


	$tdatavagentperformance["StatusTalkTime"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "StatusTalkTime";
//	statustalkTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "statustalkTimePcnt";
	$fdata["GoodName"] = "statustalkTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statustalkTimePcnt");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "statustalkTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statustalkTimePcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 13;

	
	
	
	
		
	
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


	$tdatavagentperformance["statustalkTimePcnt"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statustalkTimePcnt";
//	totalTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "totalTypingTime";
	$fdata["GoodName"] = "totalTypingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","totalTypingTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "totalTypingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalTypingTime";

	
	
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


	$tdatavagentperformance["totalTypingTime"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "totalTypingTime";
//	statusTypingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "statusTypingTime";
	$fdata["GoodName"] = "statusTypingTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statusTypingTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "statusTypingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusTypingTime";

	
	
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


	$tdatavagentperformance["statusTypingTime"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statusTypingTime";
//	statusTypingTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "statusTypingTimePcnt";
	$fdata["GoodName"] = "statusTypingTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statusTypingTimePcnt");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "statusTypingTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusTypingTimePcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 13;

	
	
	
	
		
	
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


	$tdatavagentperformance["statusTypingTimePcnt"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statusTypingTimePcnt";
//	agentDayTotalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "agentDayTotalCallTime";
	$fdata["GoodName"] = "agentDayTotalCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","agentDayTotalCallTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agentDayTotalCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agentDayTotalCallTime";

	
	
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


	$tdatavagentperformance["agentDayTotalCallTime"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "agentDayTotalCallTime";
//	statusCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "statusCallTime";
	$fdata["GoodName"] = "statusCallTime";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statusCallTime");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "statusCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusCallTime";

	
	
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


	$tdatavagentperformance["statusCallTime"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statusCallTime";
//	statusTCallTimePcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "statusTCallTimePcnt";
	$fdata["GoodName"] = "statusTCallTimePcnt";
	$fdata["ownerTable"] = "dbo.vAgentPerformance";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformance","statusTCallTimePcnt");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "statusTCallTimePcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusTCallTimePcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 13;

	
	
	
	
		
	
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


	$tdatavagentperformance["statusTCallTimePcnt"] = $fdata;
		$tdatavagentperformance[".searchableFields"][] = "statusTCallTimePcnt";


$tables_data["dbo.vAgentPerformance"]=&$tdatavagentperformance;
$field_labels["dbo_vAgentPerformance"] = &$fieldLabelsvagentperformance;
$fieldToolTips["dbo_vAgentPerformance"] = &$fieldToolTipsvagentperformance;
$placeHolders["dbo_vAgentPerformance"] = &$placeHoldersvagentperformance;
$page_titles["dbo_vAgentPerformance"] = &$pageTitlesvagentperformance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.vAgentPerformance"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vAgentPerformance"] = array();



	
				$strOriginalDetailsTable="dbo.vVoltonApplicationsStatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.vVoltonApplicationsStatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vvoltonapplicationsstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.vAgentPerformance"][0] = $masterParams;
				$masterTablesData["dbo.vAgentPerformance"][0]["masterKeys"] = array();
	$masterTablesData["dbo.vAgentPerformance"][0]["masterKeys"][]="dialerAgent";
				$masterTablesData["dbo.vAgentPerformance"][0]["masterKeys"][]="callDate";
				$masterTablesData["dbo.vAgentPerformance"][0]["detailKeys"] = array();
	$masterTablesData["dbo.vAgentPerformance"][0]["detailKeys"][]="agent";
				$masterTablesData["dbo.vAgentPerformance"][0]["detailKeys"][]="callDate";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vagentperformance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "agent,  	callDate,  	dialerCampaign,  	dialerList,  	callStatus,  	totalCallsCount,  	statusCallsCount,  	statusCallsPcnt,  	totalTalkTime,  	StatusTalkTime,  	statustalkTimePcnt,  	totalTypingTime,  	statusTypingTime,  	statusTypingTimePcnt,  	agentDayTotalCallTime,  	statusCallTime,  	statusTCallTimePcnt";
$proto0["m_strFrom"] = "FROM dbo.vAgentPerformance";
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
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto6["m_sql"] = "agent";
$proto6["m_srcTableName"] = "dbo.vAgentPerformance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callDate",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto8["m_sql"] = "callDate";
$proto8["m_srcTableName"] = "dbo.vAgentPerformance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto10["m_sql"] = "dialerCampaign";
$proto10["m_srcTableName"] = "dbo.vAgentPerformance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto12["m_sql"] = "dialerList";
$proto12["m_srcTableName"] = "dbo.vAgentPerformance";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto14["m_sql"] = "callStatus";
$proto14["m_srcTableName"] = "dbo.vAgentPerformance";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallsCount",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto16["m_sql"] = "totalCallsCount";
$proto16["m_srcTableName"] = "dbo.vAgentPerformance";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallsCount",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto18["m_sql"] = "statusCallsCount";
$proto18["m_srcTableName"] = "dbo.vAgentPerformance";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallsPcnt",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto20["m_sql"] = "statusCallsPcnt";
$proto20["m_srcTableName"] = "dbo.vAgentPerformance";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTalkTime",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto22["m_sql"] = "totalTalkTime";
$proto22["m_srcTableName"] = "dbo.vAgentPerformance";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "StatusTalkTime",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto24["m_sql"] = "StatusTalkTime";
$proto24["m_srcTableName"] = "dbo.vAgentPerformance";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "statustalkTimePcnt",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto26["m_sql"] = "statustalkTimePcnt";
$proto26["m_srcTableName"] = "dbo.vAgentPerformance";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTypingTime",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto28["m_sql"] = "totalTypingTime";
$proto28["m_srcTableName"] = "dbo.vAgentPerformance";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTypingTime",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto30["m_sql"] = "statusTypingTime";
$proto30["m_srcTableName"] = "dbo.vAgentPerformance";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTypingTimePcnt",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto32["m_sql"] = "statusTypingTimePcnt";
$proto32["m_srcTableName"] = "dbo.vAgentPerformance";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "agentDayTotalCallTime",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto34["m_sql"] = "agentDayTotalCallTime";
$proto34["m_srcTableName"] = "dbo.vAgentPerformance";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "statusCallTime",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto36["m_sql"] = "statusCallTime";
$proto36["m_srcTableName"] = "dbo.vAgentPerformance";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "statusTCallTimePcnt",
	"m_strTable" => "dbo.vAgentPerformance",
	"m_srcTableName" => "dbo.vAgentPerformance"
));

$proto38["m_sql"] = "statusTCallTimePcnt";
$proto38["m_srcTableName"] = "dbo.vAgentPerformance";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "dbo.vAgentPerformance";
$proto41["m_srcTableName"] = "dbo.vAgentPerformance";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "agent";
$proto41["m_columns"][] = "callDate";
$proto41["m_columns"][] = "dialerCampaign";
$proto41["m_columns"][] = "dialerList";
$proto41["m_columns"][] = "callStatus";
$proto41["m_columns"][] = "totalCallsCount";
$proto41["m_columns"][] = "statusCallsCount";
$proto41["m_columns"][] = "statusCallsPcnt";
$proto41["m_columns"][] = "totalTalkTime";
$proto41["m_columns"][] = "StatusTalkTime";
$proto41["m_columns"][] = "statustalkTimePcnt";
$proto41["m_columns"][] = "totalTypingTime";
$proto41["m_columns"][] = "statusTypingTime";
$proto41["m_columns"][] = "statusTypingTimePcnt";
$proto41["m_columns"][] = "agentDayTotalCallTime";
$proto41["m_columns"][] = "statusCallTime";
$proto41["m_columns"][] = "statusTCallTimePcnt";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "dbo.vAgentPerformance";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "dbo.vAgentPerformance";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.vAgentPerformance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vagentperformance = createSqlQuery_vagentperformance();


	
		;

																	

$tdatavagentperformance[".sqlquery"] = $queryData_vagentperformance;



$tableEvents["dbo.vAgentPerformance"] = new eventsBase;
$tdatavagentperformance[".hasEvents"] = false;

?>