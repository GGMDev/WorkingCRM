<?php
$tdatavvoltonapplicationsstatus = array();
$tdatavvoltonapplicationsstatus[".searchableFields"] = array();
$tdatavvoltonapplicationsstatus[".ShortName"] = "vvoltonapplicationsstatus";
$tdatavvoltonapplicationsstatus[".OwnerID"] = "";
$tdatavvoltonapplicationsstatus[".OriginalTable"] = "dbo.vVoltonApplicationsStatus";


$tdatavvoltonapplicationsstatus[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavvoltonapplicationsstatus[".originalPagesByType"] = $tdatavvoltonapplicationsstatus[".pagesByType"];
$tdatavvoltonapplicationsstatus[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavvoltonapplicationsstatus[".originalPages"] = $tdatavvoltonapplicationsstatus[".pages"];
$tdatavvoltonapplicationsstatus[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavvoltonapplicationsstatus[".originalDefaultPages"] = $tdatavvoltonapplicationsstatus[".defaultPages"];

//	field labels
$fieldLabelsvvoltonapplicationsstatus = array();
$fieldToolTipsvvoltonapplicationsstatus = array();
$pageTitlesvvoltonapplicationsstatus = array();
$placeHoldersvvoltonapplicationsstatus = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvvoltonapplicationsstatus["Greek"] = array();
	$fieldToolTipsvvoltonapplicationsstatus["Greek"] = array();
	$placeHoldersvvoltonapplicationsstatus["Greek"] = array();
	$pageTitlesvvoltonapplicationsstatus["Greek"] = array();
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["callid"] = "Callid";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["callid"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["callid"] = "";
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["dialerAgent"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["dialerAgent"] = "";
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["callDate"] = "Call Date";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["callDate"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["callDate"] = "";
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["lastStatusDate"] = "Last Status Date";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["lastStatusDate"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["lastStatusDate"] = "";
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["backOfficeStatus"] = "Back Office Status";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["backOfficeStatus"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["backOfficeStatus"] = "";
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["backOfficeStatisticsStatus"] = "Back Office Statistics Status";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["backOfficeStatisticsStatus"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["backOfficeStatisticsStatus"] = "";
	$fieldLabelsvvoltonapplicationsstatus["Greek"]["agentApplicationStatus"] = "Agent Application Status";
	$fieldToolTipsvvoltonapplicationsstatus["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersvvoltonapplicationsstatus["Greek"]["agentApplicationStatus"] = "";
	if (count($fieldToolTipsvvoltonapplicationsstatus["Greek"]))
		$tdatavvoltonapplicationsstatus[".isUseToolTips"] = true;
}


	$tdatavvoltonapplicationsstatus[".NCSearch"] = true;



$tdatavvoltonapplicationsstatus[".shortTableName"] = "vvoltonapplicationsstatus";
$tdatavvoltonapplicationsstatus[".nSecOptions"] = 0;

$tdatavvoltonapplicationsstatus[".mainTableOwnerID"] = "";
$tdatavvoltonapplicationsstatus[".entityType"] = 0;
$tdatavvoltonapplicationsstatus[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavvoltonapplicationsstatus[".strOriginalTableName"] = "dbo.vVoltonApplicationsStatus";

	



$tdatavvoltonapplicationsstatus[".showAddInPopup"] = false;

$tdatavvoltonapplicationsstatus[".showEditInPopup"] = false;

$tdatavvoltonapplicationsstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavvoltonapplicationsstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavvoltonapplicationsstatus[".listAjax"] = false;
//	temporary
$tdatavvoltonapplicationsstatus[".listAjax"] = false;

	$tdatavvoltonapplicationsstatus[".audit"] = false;

	$tdatavvoltonapplicationsstatus[".locking"] = false;


$pages = $tdatavvoltonapplicationsstatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavvoltonapplicationsstatus[".edit"] = true;
	$tdatavvoltonapplicationsstatus[".afterEditAction"] = 1;
	$tdatavvoltonapplicationsstatus[".closePopupAfterEdit"] = 1;
	$tdatavvoltonapplicationsstatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavvoltonapplicationsstatus[".add"] = true;
$tdatavvoltonapplicationsstatus[".afterAddAction"] = 1;
$tdatavvoltonapplicationsstatus[".closePopupAfterAdd"] = 1;
$tdatavvoltonapplicationsstatus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavvoltonapplicationsstatus[".list"] = true;
}



$tdatavvoltonapplicationsstatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavvoltonapplicationsstatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavvoltonapplicationsstatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavvoltonapplicationsstatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavvoltonapplicationsstatus[".printFriendly"] = true;
}



$tdatavvoltonapplicationsstatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavvoltonapplicationsstatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavvoltonapplicationsstatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavvoltonapplicationsstatus[".isUseAjaxSuggest"] = true;

$tdatavvoltonapplicationsstatus[".rowHighlite"] = true;



																																																																																																																		

$tdatavvoltonapplicationsstatus[".ajaxCodeSnippetAdded"] = false;

$tdatavvoltonapplicationsstatus[".buttonsAdded"] = false;

$tdatavvoltonapplicationsstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavvoltonapplicationsstatus[".isUseTimeForSearch"] = false;


$tdatavvoltonapplicationsstatus[".badgeColor"] = "DAA520";


$tdatavvoltonapplicationsstatus[".allSearchFields"] = array();
$tdatavvoltonapplicationsstatus[".filterFields"] = array();
$tdatavvoltonapplicationsstatus[".requiredSearchFields"] = array();

$tdatavvoltonapplicationsstatus[".googleLikeFields"] = array();
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "callid";
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "dialerAgent";
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "callDate";
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "lastStatusDate";
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "backOfficeStatus";
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "backOfficeStatisticsStatus";
$tdatavvoltonapplicationsstatus[".googleLikeFields"][] = "agentApplicationStatus";



$tdatavvoltonapplicationsstatus[".tableType"] = "list";

$tdatavvoltonapplicationsstatus[".printerPageOrientation"] = 0;
$tdatavvoltonapplicationsstatus[".nPrinterPageScale"] = 100;

$tdatavvoltonapplicationsstatus[".nPrinterSplitRecords"] = 40;

$tdatavvoltonapplicationsstatus[".geocodingEnabled"] = false;










$tdatavvoltonapplicationsstatus[".pageSize"] = 20;

$tdatavvoltonapplicationsstatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavvoltonapplicationsstatus[".strOrderBy"] = $tstrOrderBy;

$tdatavvoltonapplicationsstatus[".orderindexes"] = array();


$tdatavvoltonapplicationsstatus[".sqlHead"] = "SELECT callid,  	dialerAgent,  	callDate,  	lastStatusDate,  	backOfficeStatus,  	backOfficeStatisticsStatus,  	agentApplicationStatus";
$tdatavvoltonapplicationsstatus[".sqlFrom"] = "FROM dbo.vVoltonApplicationsStatus";
$tdatavvoltonapplicationsstatus[".sqlWhereExpr"] = "";
$tdatavvoltonapplicationsstatus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavvoltonapplicationsstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavvoltonapplicationsstatus[".arrGroupsPerPage"] = $arrGPP;

$tdatavvoltonapplicationsstatus[".highlightSearchResults"] = true;

$tableKeysvvoltonapplicationsstatus = array();
$tdatavvoltonapplicationsstatus[".Keys"] = $tableKeysvvoltonapplicationsstatus;


$tdatavvoltonapplicationsstatus[".hideMobileList"] = array();




//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatavvoltonapplicationsstatus["callid"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "callid";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","dialerAgent");
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


	$tdatavvoltonapplicationsstatus["dialerAgent"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "dialerAgent";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","callDate");
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


	$tdatavvoltonapplicationsstatus["callDate"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "callDate";
//	lastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lastStatusDate";
	$fdata["GoodName"] = "lastStatusDate";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","lastStatusDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastStatusDate";

	
	
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


	$tdatavvoltonapplicationsstatus["lastStatusDate"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "lastStatusDate";
//	backOfficeStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "backOfficeStatus";
	$fdata["GoodName"] = "backOfficeStatus";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","backOfficeStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "backOfficeStatus";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatavvoltonapplicationsstatus["backOfficeStatus"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "backOfficeStatus";
//	backOfficeStatisticsStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "backOfficeStatisticsStatus";
	$fdata["GoodName"] = "backOfficeStatisticsStatus";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","backOfficeStatisticsStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "backOfficeStatisticsStatus";

	
		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatavvoltonapplicationsstatus["backOfficeStatisticsStatus"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "backOfficeStatisticsStatus";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "dbo.vVoltonApplicationsStatus";
	$fdata["Label"] = GetFieldLabel("dbo_vVoltonApplicationsStatus","agentApplicationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agentApplicationStatus";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatavvoltonapplicationsstatus["agentApplicationStatus"] = $fdata;
		$tdatavvoltonapplicationsstatus[".searchableFields"][] = "agentApplicationStatus";


$tables_data["dbo.vVoltonApplicationsStatus"]=&$tdatavvoltonapplicationsstatus;
$field_labels["dbo_vVoltonApplicationsStatus"] = &$fieldLabelsvvoltonapplicationsstatus;
$fieldToolTips["dbo_vVoltonApplicationsStatus"] = &$fieldToolTipsvvoltonapplicationsstatus;
$placeHolders["dbo_vVoltonApplicationsStatus"] = &$placeHoldersvvoltonapplicationsstatus;
$page_titles["dbo_vVoltonApplicationsStatus"] = &$pageTitlesvvoltonapplicationsstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.vVoltonApplicationsStatus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vVoltonApplicationsStatus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vvoltonapplicationsstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "callid,  	dialerAgent,  	callDate,  	lastStatusDate,  	backOfficeStatus,  	backOfficeStatisticsStatus,  	agentApplicationStatus";
$proto0["m_strFrom"] = "FROM dbo.vVoltonApplicationsStatus";
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
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto6["m_sql"] = "callid";
$proto6["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto8["m_sql"] = "dialerAgent";
$proto8["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "callDate",
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto10["m_sql"] = "callDate";
$proto10["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lastStatusDate",
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto12["m_sql"] = "lastStatusDate";
$proto12["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "backOfficeStatus",
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto14["m_sql"] = "backOfficeStatus";
$proto14["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "backOfficeStatisticsStatus",
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto16["m_sql"] = "backOfficeStatisticsStatus";
$proto16["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "agentApplicationStatus",
	"m_strTable" => "dbo.vVoltonApplicationsStatus",
	"m_srcTableName" => "dbo.vVoltonApplicationsStatus"
));

$proto18["m_sql"] = "agentApplicationStatus";
$proto18["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.vVoltonApplicationsStatus";
$proto21["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "callid";
$proto21["m_columns"][] = "dialerAgent";
$proto21["m_columns"][] = "callDate";
$proto21["m_columns"][] = "lastStatusDate";
$proto21["m_columns"][] = "backOfficeStatus";
$proto21["m_columns"][] = "backOfficeStatisticsStatus";
$proto21["m_columns"][] = "agentApplicationStatus";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.vVoltonApplicationsStatus";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.vVoltonApplicationsStatus";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.vVoltonApplicationsStatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vvoltonapplicationsstatus = createSqlQuery_vvoltonapplicationsstatus();


	
		;

							

$tdatavvoltonapplicationsstatus[".sqlquery"] = $queryData_vvoltonapplicationsstatus;



$tableEvents["dbo.vVoltonApplicationsStatus"] = new eventsBase;
$tdatavvoltonapplicationsstatus[".hasEvents"] = false;

?>