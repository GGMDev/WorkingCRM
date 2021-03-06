<?php
$tdataagentcallstatusanalysis = array();
$tdataagentcallstatusanalysis[".searchableFields"] = array();
$tdataagentcallstatusanalysis[".ShortName"] = "agentcallstatusanalysis";
$tdataagentcallstatusanalysis[".OwnerID"] = "";
$tdataagentcallstatusanalysis[".OriginalTable"] = "AgentCallStatusAnalysis";


$tdataagentcallstatusanalysis[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataagentcallstatusanalysis[".originalPagesByType"] = $tdataagentcallstatusanalysis[".pagesByType"];
$tdataagentcallstatusanalysis[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataagentcallstatusanalysis[".originalPages"] = $tdataagentcallstatusanalysis[".pages"];
$tdataagentcallstatusanalysis[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataagentcallstatusanalysis[".originalDefaultPages"] = $tdataagentcallstatusanalysis[".defaultPages"];

//	field labels
$fieldLabelsagentcallstatusanalysis = array();
$fieldToolTipsagentcallstatusanalysis = array();
$pageTitlesagentcallstatusanalysis = array();
$placeHoldersagentcallstatusanalysis = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagentcallstatusanalysis["Greek"] = array();
	$fieldToolTipsagentcallstatusanalysis["Greek"] = array();
	$placeHoldersagentcallstatusanalysis["Greek"] = array();
	$pageTitlesagentcallstatusanalysis["Greek"] = array();
	$fieldLabelsagentcallstatusanalysis["Greek"]["agent"] = "Agent";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["agent"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["agent"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["callDate"] = "Call Date";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["callDate"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["callDate"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["dialerCampaign"] = "Dialer Campaign";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["dialerCampaign"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["dialerCampaign"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["dialerList"] = "Dialer List";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["dialerList"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["dialerList"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["___________________"] = "?????????????? ??????????????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["___________________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["___________________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["____________"] = "?????????? ????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["____________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["____________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["__________"] = "????????????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["__________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["__________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["________"] = "????????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["__________"] = "?????? ????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["__________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["__________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["_____________________"] = "???????????????????? (????????????????)";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["_____________________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["_____________________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["____________________"] = "???????????? - ??????????????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["____________________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["____________________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["_____________________"] = "???????????? - ????????????????????????";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["_____________________"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["_____________________"] = "";
	$fieldLabelsagentcallstatusanalysis["Greek"]["____________Fax"] = "??????????????????????/Fax";
	$fieldToolTipsagentcallstatusanalysis["Greek"]["____________Fax"] = "";
	$placeHoldersagentcallstatusanalysis["Greek"]["____________Fax"] = "";
	if (count($fieldToolTipsagentcallstatusanalysis["Greek"]))
		$tdataagentcallstatusanalysis[".isUseToolTips"] = true;
}


	$tdataagentcallstatusanalysis[".NCSearch"] = true;



$tdataagentcallstatusanalysis[".shortTableName"] = "agentcallstatusanalysis";
$tdataagentcallstatusanalysis[".nSecOptions"] = 0;

$tdataagentcallstatusanalysis[".mainTableOwnerID"] = "";
$tdataagentcallstatusanalysis[".entityType"] = 6;
$tdataagentcallstatusanalysis[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagentcallstatusanalysis[".strOriginalTableName"] = "AgentCallStatusAnalysis";

	



$tdataagentcallstatusanalysis[".showAddInPopup"] = false;

$tdataagentcallstatusanalysis[".showEditInPopup"] = false;

$tdataagentcallstatusanalysis[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagentcallstatusanalysis[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagentcallstatusanalysis[".listAjax"] = false;
//	temporary
$tdataagentcallstatusanalysis[".listAjax"] = false;

	$tdataagentcallstatusanalysis[".audit"] = false;

	$tdataagentcallstatusanalysis[".locking"] = false;


$pages = $tdataagentcallstatusanalysis[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagentcallstatusanalysis[".edit"] = true;
	$tdataagentcallstatusanalysis[".afterEditAction"] = 1;
	$tdataagentcallstatusanalysis[".closePopupAfterEdit"] = 1;
	$tdataagentcallstatusanalysis[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagentcallstatusanalysis[".add"] = true;
$tdataagentcallstatusanalysis[".afterAddAction"] = 1;
$tdataagentcallstatusanalysis[".closePopupAfterAdd"] = 1;
$tdataagentcallstatusanalysis[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagentcallstatusanalysis[".list"] = true;
}



$tdataagentcallstatusanalysis[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagentcallstatusanalysis[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagentcallstatusanalysis[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagentcallstatusanalysis[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagentcallstatusanalysis[".printFriendly"] = true;
}



$tdataagentcallstatusanalysis[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagentcallstatusanalysis[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagentcallstatusanalysis[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagentcallstatusanalysis[".isUseAjaxSuggest"] = true;

$tdataagentcallstatusanalysis[".rowHighlite"] = true;



																																																																																																																		

$tdataagentcallstatusanalysis[".ajaxCodeSnippetAdded"] = false;

$tdataagentcallstatusanalysis[".buttonsAdded"] = false;

$tdataagentcallstatusanalysis[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagentcallstatusanalysis[".isUseTimeForSearch"] = false;


$tdataagentcallstatusanalysis[".badgeColor"] = "778899";


$tdataagentcallstatusanalysis[".allSearchFields"] = array();
$tdataagentcallstatusanalysis[".filterFields"] = array();
$tdataagentcallstatusanalysis[".requiredSearchFields"] = array();

$tdataagentcallstatusanalysis[".googleLikeFields"] = array();
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "agent";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "callDate";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "dialerCampaign";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "dialerList";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "?????????????? ??????????????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "?????????? ????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "????????????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "????????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "?????? ????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "???????????????????? (????????????????)";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "???????????? - ??????????????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "???????????? - ????????????????????????";
$tdataagentcallstatusanalysis[".googleLikeFields"][] = "??????????????????????/Fax";




$tdataagentcallstatusanalysis[".printerPageOrientation"] = 0;
$tdataagentcallstatusanalysis[".nPrinterPageScale"] = 100;

$tdataagentcallstatusanalysis[".nPrinterSplitRecords"] = 40;

$tdataagentcallstatusanalysis[".geocodingEnabled"] = false;










$tdataagentcallstatusanalysis[".pageSize"] = 20;

$tdataagentcallstatusanalysis[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagentcallstatusanalysis[".strOrderBy"] = $tstrOrderBy;

$tdataagentcallstatusanalysis[".orderindexes"] = array();


$tdataagentcallstatusanalysis[".sqlHead"] = "";
$tdataagentcallstatusanalysis[".sqlFrom"] = "";
$tdataagentcallstatusanalysis[".sqlWhereExpr"] = "";
$tdataagentcallstatusanalysis[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagentcallstatusanalysis[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagentcallstatusanalysis[".arrGroupsPerPage"] = $arrGPP;

$tdataagentcallstatusanalysis[".highlightSearchResults"] = true;

$tableKeysagentcallstatusanalysis = array();
$tdataagentcallstatusanalysis[".Keys"] = $tableKeysagentcallstatusanalysis;


$tdataagentcallstatusanalysis[".hideMobileList"] = array();




//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","agent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agent";

	
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


	$tdataagentcallstatusanalysis["agent"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "agent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","callDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callDate";

	
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


	$tdataagentcallstatusanalysis["callDate"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "callDate";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","dialerCampaign");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerCampaign";

	
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


	$tdataagentcallstatusanalysis["dialerCampaign"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","dialerList");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerList";

	
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


	$tdataagentcallstatusanalysis["dialerList"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "dialerList";
//	?????????????? ??????????????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "?????????????? ??????????????????????";
	$fdata["GoodName"] = "___________________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","___________________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "?????????????? ??????????????????????";

	
		$fdata["FullName"] = "?????????????? ??????????????????????";

	
	
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


	$tdataagentcallstatusanalysis["?????????????? ??????????????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "?????????????? ??????????????????????";
//	?????????? ????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "?????????? ????????????";
	$fdata["GoodName"] = "____________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","____________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "?????????? ????????????";

	
		$fdata["FullName"] = "?????????? ????????????";

	
	
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


	$tdataagentcallstatusanalysis["?????????? ????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "?????????? ????????????";
//	????????????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "????????????????????";
	$fdata["GoodName"] = "__________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","__________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "????????????????????";

	
		$fdata["FullName"] = "????????????????????";

	
	
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


	$tdataagentcallstatusanalysis["????????????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "????????????????????";
//	????????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "????????????????";
	$fdata["GoodName"] = "________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "????????????????";

	
		$fdata["FullName"] = "????????????????";

	
	
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


	$tdataagentcallstatusanalysis["????????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "????????????????";
//	?????? ????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "?????? ????????????";
	$fdata["GoodName"] = "__________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","__________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "?????? ????????????";

	
		$fdata["FullName"] = "?????? ????????????";

	
	
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


	$tdataagentcallstatusanalysis["?????? ????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "?????? ????????????";
//	???????????????????? (????????????????)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "???????????????????? (????????????????)";
	$fdata["GoodName"] = "_____________________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","_____________________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "???????????????????? (????????????????)";

	
		$fdata["FullName"] = "???????????????????? (????????????????)";

	
	
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


	$tdataagentcallstatusanalysis["???????????????????? (????????????????)"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "???????????????????? (????????????????)";
//	???????????? - ??????????????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "???????????? - ??????????????????????";
	$fdata["GoodName"] = "____________________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","____________________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "???????????? - ??????????????????????";

	
		$fdata["FullName"] = "???????????? - ??????????????????????";

	
	
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


	$tdataagentcallstatusanalysis["???????????? - ??????????????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "???????????? - ??????????????????????";
//	???????????? - ????????????????????????
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "???????????? - ????????????????????????";
	$fdata["GoodName"] = "_____________________";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","_____________________");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "???????????? - ????????????????????????";

	
		$fdata["FullName"] = "???????????? - ????????????????????????";

	
	
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


	$tdataagentcallstatusanalysis["???????????? - ????????????????????????"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "???????????? - ????????????????????????";
//	??????????????????????/Fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "??????????????????????/Fax";
	$fdata["GoodName"] = "____________Fax";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AgentCallStatusAnalysis","____________Fax");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "??????????????????????/Fax";

	
		$fdata["FullName"] = "??????????????????????/Fax";

	
	
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


	$tdataagentcallstatusanalysis["??????????????????????/Fax"] = $fdata;
		$tdataagentcallstatusanalysis[".searchableFields"][] = "??????????????????????/Fax";


$tables_data["AgentCallStatusAnalysis"]=&$tdataagentcallstatusanalysis;
$field_labels["AgentCallStatusAnalysis"] = &$fieldLabelsagentcallstatusanalysis;
$fieldToolTips["AgentCallStatusAnalysis"] = &$fieldToolTipsagentcallstatusanalysis;
$placeHolders["AgentCallStatusAnalysis"] = &$placeHoldersagentcallstatusanalysis;
$page_titles["AgentCallStatusAnalysis"] = &$pageTitlesagentcallstatusanalysis;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["AgentCallStatusAnalysis"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["AgentCallStatusAnalysis"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/agentcallstatusanalysis_ops.php" ) );



	
		;

													

$tdataagentcallstatusanalysis[".sqlquery"] = $queryData_agentcallstatusanalysis;



$tableEvents["AgentCallStatusAnalysis"] = new eventsBase;
$tdataagentcallstatusanalysis[".hasEvents"] = false;

?>