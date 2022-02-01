<?php
$tdataagentvoltonapplicationswithstatus = array();
$tdataagentvoltonapplicationswithstatus[".searchableFields"] = array();
$tdataagentvoltonapplicationswithstatus[".ShortName"] = "agentvoltonapplicationswithstatus";
$tdataagentvoltonapplicationswithstatus[".OwnerID"] = "";
$tdataagentvoltonapplicationswithstatus[".OriginalTable"] = "agentVoltonApplicationsWithStatus";


$tdataagentvoltonapplicationswithstatus[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataagentvoltonapplicationswithstatus[".originalPagesByType"] = $tdataagentvoltonapplicationswithstatus[".pagesByType"];
$tdataagentvoltonapplicationswithstatus[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataagentvoltonapplicationswithstatus[".originalPages"] = $tdataagentvoltonapplicationswithstatus[".pages"];
$tdataagentvoltonapplicationswithstatus[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataagentvoltonapplicationswithstatus[".originalDefaultPages"] = $tdataagentvoltonapplicationswithstatus[".defaultPages"];

//	field labels
$fieldLabelsagentvoltonapplicationswithstatus = array();
$fieldToolTipsagentvoltonapplicationswithstatus = array();
$pageTitlesagentvoltonapplicationswithstatus = array();
$placeHoldersagentvoltonapplicationswithstatus = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"] = array();
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"] = array();
	$placeHoldersagentvoltonapplicationswithstatus["Greek"] = array();
	$pageTitlesagentvoltonapplicationswithstatus["Greek"] = array();
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["callid"] = "Callid";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["callid"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["callid"] = "";
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["dialerAgent"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["dialerAgent"] = "";
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["callDate"] = "Call Date";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["callDate"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["callDate"] = "";
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["lastStatusDate"] = "Last Status Date";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["lastStatusDate"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["lastStatusDate"] = "";
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["backOfficeStatus"] = "Back Office Status";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["backOfficeStatus"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["backOfficeStatus"] = "";
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["backOfficeStatisticsStatus"] = "Back Office Statistics Status";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["backOfficeStatisticsStatus"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["backOfficeStatisticsStatus"] = "";
	$fieldLabelsagentvoltonapplicationswithstatus["Greek"]["agentApplicationStatus"] = "Agent Application Status";
	$fieldToolTipsagentvoltonapplicationswithstatus["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersagentvoltonapplicationswithstatus["Greek"]["agentApplicationStatus"] = "";
	if (count($fieldToolTipsagentvoltonapplicationswithstatus["Greek"]))
		$tdataagentvoltonapplicationswithstatus[".isUseToolTips"] = true;
}


	$tdataagentvoltonapplicationswithstatus[".NCSearch"] = true;



$tdataagentvoltonapplicationswithstatus[".shortTableName"] = "agentvoltonapplicationswithstatus";
$tdataagentvoltonapplicationswithstatus[".nSecOptions"] = 0;

$tdataagentvoltonapplicationswithstatus[".mainTableOwnerID"] = "";
$tdataagentvoltonapplicationswithstatus[".entityType"] = 6;
$tdataagentvoltonapplicationswithstatus[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagentvoltonapplicationswithstatus[".strOriginalTableName"] = "agentVoltonApplicationsWithStatus";

	



$tdataagentvoltonapplicationswithstatus[".showAddInPopup"] = false;

$tdataagentvoltonapplicationswithstatus[".showEditInPopup"] = false;

$tdataagentvoltonapplicationswithstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagentvoltonapplicationswithstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagentvoltonapplicationswithstatus[".listAjax"] = false;
//	temporary
$tdataagentvoltonapplicationswithstatus[".listAjax"] = false;

	$tdataagentvoltonapplicationswithstatus[".audit"] = false;

	$tdataagentvoltonapplicationswithstatus[".locking"] = false;


$pages = $tdataagentvoltonapplicationswithstatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagentvoltonapplicationswithstatus[".edit"] = true;
	$tdataagentvoltonapplicationswithstatus[".afterEditAction"] = 1;
	$tdataagentvoltonapplicationswithstatus[".closePopupAfterEdit"] = 1;
	$tdataagentvoltonapplicationswithstatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagentvoltonapplicationswithstatus[".add"] = true;
$tdataagentvoltonapplicationswithstatus[".afterAddAction"] = 1;
$tdataagentvoltonapplicationswithstatus[".closePopupAfterAdd"] = 1;
$tdataagentvoltonapplicationswithstatus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagentvoltonapplicationswithstatus[".list"] = true;
}



$tdataagentvoltonapplicationswithstatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagentvoltonapplicationswithstatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagentvoltonapplicationswithstatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagentvoltonapplicationswithstatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagentvoltonapplicationswithstatus[".printFriendly"] = true;
}



$tdataagentvoltonapplicationswithstatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagentvoltonapplicationswithstatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagentvoltonapplicationswithstatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagentvoltonapplicationswithstatus[".isUseAjaxSuggest"] = true;

$tdataagentvoltonapplicationswithstatus[".rowHighlite"] = true;



																																																																																																																								

$tdataagentvoltonapplicationswithstatus[".ajaxCodeSnippetAdded"] = false;

$tdataagentvoltonapplicationswithstatus[".buttonsAdded"] = false;

$tdataagentvoltonapplicationswithstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagentvoltonapplicationswithstatus[".isUseTimeForSearch"] = false;


$tdataagentvoltonapplicationswithstatus[".badgeColor"] = "DB7093";


$tdataagentvoltonapplicationswithstatus[".allSearchFields"] = array();
$tdataagentvoltonapplicationswithstatus[".filterFields"] = array();
$tdataagentvoltonapplicationswithstatus[".requiredSearchFields"] = array();





$tdataagentvoltonapplicationswithstatus[".printerPageOrientation"] = 0;
$tdataagentvoltonapplicationswithstatus[".nPrinterPageScale"] = 100;

$tdataagentvoltonapplicationswithstatus[".nPrinterSplitRecords"] = 40;

$tdataagentvoltonapplicationswithstatus[".geocodingEnabled"] = false;






$tdataagentvoltonapplicationswithstatus[".searchIsRequiredForFilters"] = true;




$tdataagentvoltonapplicationswithstatus[".pageSize"] = 20;

$tdataagentvoltonapplicationswithstatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagentvoltonapplicationswithstatus[".strOrderBy"] = $tstrOrderBy;

$tdataagentvoltonapplicationswithstatus[".orderindexes"] = array();


$tdataagentvoltonapplicationswithstatus[".sqlHead"] = "";
$tdataagentvoltonapplicationswithstatus[".sqlFrom"] = "";
$tdataagentvoltonapplicationswithstatus[".sqlWhereExpr"] = "";
$tdataagentvoltonapplicationswithstatus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagentvoltonapplicationswithstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagentvoltonapplicationswithstatus[".arrGroupsPerPage"] = $arrGPP;

$tdataagentvoltonapplicationswithstatus[".highlightSearchResults"] = true;

$tableKeysagentvoltonapplicationswithstatus = array();
$tdataagentvoltonapplicationswithstatus[".Keys"] = $tableKeysagentvoltonapplicationswithstatus;


$tdataagentvoltonapplicationswithstatus[".hideMobileList"] = array();




//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
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


	$tdataagentvoltonapplicationswithstatus["callid"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "callid";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","dialerAgent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["FullName"] = "dialerAgent";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
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
	$edata["DisplayField"] = "fullname";

	

	
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
	$edata["DisplayField"] = "fullname";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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
	$edata["DisplayField"] = "fullname";

	

	
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


	$tdataagentvoltonapplicationswithstatus["dialerAgent"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "dialerAgent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","callDate");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataagentvoltonapplicationswithstatus["callDate"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "callDate";
//	lastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lastStatusDate";
	$fdata["GoodName"] = "lastStatusDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","lastStatusDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lastStatusDate";

	
		$fdata["FullName"] = "lastStatusDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "callid";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataagentvoltonapplicationswithstatus["lastStatusDate"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "lastStatusDate";
//	backOfficeStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "backOfficeStatus";
	$fdata["GoodName"] = "backOfficeStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","backOfficeStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "backOfficeStatus";

	
		$fdata["FullName"] = "backOfficeStatus";

	
	
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


	$tdataagentvoltonapplicationswithstatus["backOfficeStatus"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "backOfficeStatus";
//	backOfficeStatisticsStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "backOfficeStatisticsStatus";
	$fdata["GoodName"] = "backOfficeStatisticsStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","backOfficeStatisticsStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "backOfficeStatisticsStatus";

	
		$fdata["FullName"] = "backOfficeStatisticsStatus";

	
	
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


	$tdataagentvoltonapplicationswithstatus["backOfficeStatisticsStatus"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "backOfficeStatisticsStatus";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agentVoltonApplicationsWithStatus","agentApplicationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agentApplicationStatus";

	
		$fdata["FullName"] = "agentApplicationStatus";

	
	
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


	$tdataagentvoltonapplicationswithstatus["agentApplicationStatus"] = $fdata;
		$tdataagentvoltonapplicationswithstatus[".searchableFields"][] = "agentApplicationStatus";


$tables_data["agentVoltonApplicationsWithStatus"]=&$tdataagentvoltonapplicationswithstatus;
$field_labels["agentVoltonApplicationsWithStatus"] = &$fieldLabelsagentvoltonapplicationswithstatus;
$fieldToolTips["agentVoltonApplicationsWithStatus"] = &$fieldToolTipsagentvoltonapplicationswithstatus;
$placeHolders["agentVoltonApplicationsWithStatus"] = &$placeHoldersagentvoltonapplicationswithstatus;
$page_titles["agentVoltonApplicationsWithStatus"] = &$pageTitlesagentvoltonapplicationswithstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agentVoltonApplicationsWithStatus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["agentVoltonApplicationsWithStatus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/agentvoltonapplicationswithstatus_ops.php" ) );



	
		;

							

$tdataagentvoltonapplicationswithstatus[".sqlquery"] = $queryData_agentvoltonapplicationswithstatus;



$tableEvents["agentVoltonApplicationsWithStatus"] = new eventsBase;
$tdataagentvoltonapplicationswithstatus[".hasEvents"] = false;

?>