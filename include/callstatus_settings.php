<?php
$tdatacallstatus = array();
$tdatacallstatus[".searchableFields"] = array();
$tdatacallstatus[".ShortName"] = "callstatus";
$tdatacallstatus[".OwnerID"] = "";
$tdatacallstatus[".OriginalTable"] = "dbo.callStatus";


$tdatacallstatus[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacallstatus[".originalPagesByType"] = $tdatacallstatus[".pagesByType"];
$tdatacallstatus[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacallstatus[".originalPages"] = $tdatacallstatus[".pages"];
$tdatacallstatus[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacallstatus[".originalDefaultPages"] = $tdatacallstatus[".defaultPages"];

//	field labels
$fieldLabelscallstatus = array();
$fieldToolTipscallstatus = array();
$pageTitlescallstatus = array();
$placeHolderscallstatus = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallstatus["Greek"] = array();
	$fieldToolTipscallstatus["Greek"] = array();
	$placeHolderscallstatus["Greek"] = array();
	$pageTitlescallstatus["Greek"] = array();
	$fieldLabelscallstatus["Greek"]["id"] = "Id";
	$fieldToolTipscallstatus["Greek"]["id"] = "";
	$placeHolderscallstatus["Greek"]["id"] = "";
	$fieldLabelscallstatus["Greek"]["status"] = "Κατάσταση Κλήσης";
	$fieldToolTipscallstatus["Greek"]["status"] = "";
	$placeHolderscallstatus["Greek"]["status"] = "";
	$fieldLabelscallstatus["Greek"]["isDenial"] = "Είναι Άρνηση";
	$fieldToolTipscallstatus["Greek"]["isDenial"] = "";
	$placeHolderscallstatus["Greek"]["isDenial"] = "";
	$fieldLabelscallstatus["Greek"]["displayOrder"] = "Σειρά Εμφάνισης";
	$fieldToolTipscallstatus["Greek"]["displayOrder"] = "";
	$placeHolderscallstatus["Greek"]["displayOrder"] = "";
	$fieldLabelscallstatus["Greek"]["dialerStatus"] = "Dialer Status";
	$fieldToolTipscallstatus["Greek"]["dialerStatus"] = "";
	$placeHolderscallstatus["Greek"]["dialerStatus"] = "";
	$fieldLabelscallstatus["Greek"]["callClassificationId"] = "Ομάδα Κλήσης";
	$fieldToolTipscallstatus["Greek"]["callClassificationId"] = "";
	$placeHolderscallstatus["Greek"]["callClassificationId"] = "";
	$fieldLabelscallstatus["Greek"]["callSubClassificationId"] = "Τιμή Ομάδας Κλήσης";
	$fieldToolTipscallstatus["Greek"]["callSubClassificationId"] = "";
	$placeHolderscallstatus["Greek"]["callSubClassificationId"] = "";
	$fieldLabelscallstatus["Greek"]["isPositive"] = "Είναι Θετικό";
	$fieldToolTipscallstatus["Greek"]["isPositive"] = "";
	$placeHolderscallstatus["Greek"]["isPositive"] = "";
	if (count($fieldToolTipscallstatus["Greek"]))
		$tdatacallstatus[".isUseToolTips"] = true;
}


	$tdatacallstatus[".NCSearch"] = true;



$tdatacallstatus[".shortTableName"] = "callstatus";
$tdatacallstatus[".nSecOptions"] = 0;

$tdatacallstatus[".mainTableOwnerID"] = "";
$tdatacallstatus[".entityType"] = 0;
$tdatacallstatus[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallstatus[".strOriginalTableName"] = "dbo.callStatus";

	



$tdatacallstatus[".showAddInPopup"] = false;

$tdatacallstatus[".showEditInPopup"] = false;

$tdatacallstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallstatus[".listAjax"] = false;
//	temporary
$tdatacallstatus[".listAjax"] = false;

	$tdatacallstatus[".audit"] = true;

	$tdatacallstatus[".locking"] = false;


$pages = $tdatacallstatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallstatus[".edit"] = true;
	$tdatacallstatus[".afterEditAction"] = 0;
	$tdatacallstatus[".closePopupAfterEdit"] = 1;
	$tdatacallstatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallstatus[".add"] = true;
$tdatacallstatus[".afterAddAction"] = 0;
$tdatacallstatus[".closePopupAfterAdd"] = 1;
$tdatacallstatus[".afterAddActionDetTable"] = "dbo.Calls";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallstatus[".list"] = true;
}



$tdatacallstatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallstatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallstatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallstatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallstatus[".printFriendly"] = true;
}



$tdatacallstatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallstatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallstatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallstatus[".isUseAjaxSuggest"] = false;

$tdatacallstatus[".rowHighlite"] = true;



																																																																																																																											

$tdatacallstatus[".ajaxCodeSnippetAdded"] = false;

$tdatacallstatus[".buttonsAdded"] = false;

$tdatacallstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallstatus[".isUseTimeForSearch"] = false;


$tdatacallstatus[".badgeColor"] = "4682B4";


$tdatacallstatus[".allSearchFields"] = array();
$tdatacallstatus[".filterFields"] = array();
$tdatacallstatus[".requiredSearchFields"] = array();

$tdatacallstatus[".googleLikeFields"] = array();
$tdatacallstatus[".googleLikeFields"][] = "id";
$tdatacallstatus[".googleLikeFields"][] = "status";
$tdatacallstatus[".googleLikeFields"][] = "isDenial";
$tdatacallstatus[".googleLikeFields"][] = "displayOrder";
$tdatacallstatus[".googleLikeFields"][] = "dialerStatus";
$tdatacallstatus[".googleLikeFields"][] = "callClassificationId";
$tdatacallstatus[".googleLikeFields"][] = "callSubClassificationId";
$tdatacallstatus[".googleLikeFields"][] = "isPositive";



$tdatacallstatus[".tableType"] = "list";

$tdatacallstatus[".printerPageOrientation"] = 0;
$tdatacallstatus[".nPrinterPageScale"] = 100;

$tdatacallstatus[".nPrinterSplitRecords"] = 40;

$tdatacallstatus[".geocodingEnabled"] = false;






$tdatacallstatus[".searchIsRequiredForFilters"] = true;

$tdatacallstatus[".noRecordsFirstPage"] = true;



$tdatacallstatus[".pageSize"] = 20;

$tdatacallstatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallstatus[".strOrderBy"] = $tstrOrderBy;

$tdatacallstatus[".orderindexes"] = array();


$tdatacallstatus[".sqlHead"] = "SELECT id,  	status,  	isDenial,  	displayOrder,  	dialerStatus,  	callClassificationId,  	callSubClassificationId,  	isPositive";
$tdatacallstatus[".sqlFrom"] = "FROM dbo.callStatus";
$tdatacallstatus[".sqlWhereExpr"] = "";
$tdatacallstatus[".sqlTail"] = "";

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
$tdatacallstatus[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallstatus[".arrGroupsPerPage"] = $arrGPP;

$tdatacallstatus[".highlightSearchResults"] = true;

$tableKeyscallstatus = array();
$tableKeyscallstatus[] = "id";
$tdatacallstatus[".Keys"] = $tableKeyscallstatus;


$tdatacallstatus[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacallstatus["id"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatacallstatus["status"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "status";
//	isDenial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "isDenial";
	$fdata["GoodName"] = "isDenial";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","isDenial");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isDenial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isDenial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacallstatus["isDenial"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "isDenial";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","displayOrder");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "displayOrder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayOrder";

	
	
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


	$tdatacallstatus["displayOrder"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "displayOrder";
//	dialerStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dialerStatus";
	$fdata["GoodName"] = "dialerStatus";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","dialerStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerStatus";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatacallstatus["dialerStatus"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "dialerStatus";
//	callClassificationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "callClassificationId";
	$fdata["GoodName"] = "callClassificationId";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","callClassificationId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callClassificationId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callClassificationId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.callClassifications";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "classification";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "callSubClassificationId";

	
	
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


	$tdatacallstatus["callClassificationId"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "callClassificationId";
//	callSubClassificationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "callSubClassificationId";
	$fdata["GoodName"] = "callSubClassificationId";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","callSubClassificationId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callSubClassificationId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callSubClassificationId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.callSubClassifications";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subClassification";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "callClassificationId", "lookup" => "classificationId" );

	
	

	
	
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


	$tdatacallstatus["callSubClassificationId"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "callSubClassificationId";
//	isPositive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "isPositive";
	$fdata["GoodName"] = "isPositive";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatus","isPositive");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isPositive";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isPositive";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacallstatus["isPositive"] = $fdata;
		$tdatacallstatus[".searchableFields"][] = "isPositive";


$tables_data["dbo.callStatus"]=&$tdatacallstatus;
$field_labels["dbo_callStatus"] = &$fieldLabelscallstatus;
$fieldToolTips["dbo_callStatus"] = &$fieldToolTipscallstatus;
$placeHolders["dbo_callStatus"] = &$placeHolderscallstatus;
$page_titles["dbo_callStatus"] = &$pageTitlescallstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callStatus"] = array();
//	dbo.Calls
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Calls";
		$detailsParam["dOriginalTable"] = "dbo.Calls";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "calls";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Calls");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.callStatus"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.callStatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.callStatus"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.callStatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.callStatus"][$dIndex]["detailKeys"][]="callStatusId";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callStatus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	status,  	isDenial,  	displayOrder,  	dialerStatus,  	callClassificationId,  	callSubClassificationId,  	isPositive";
$proto0["m_strFrom"] = "FROM dbo.callStatus";
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
	"m_strName" => "id",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.callStatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "dbo.callStatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "isDenial",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto10["m_sql"] = "isDenial";
$proto10["m_srcTableName"] = "dbo.callStatus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto12["m_sql"] = "displayOrder";
$proto12["m_srcTableName"] = "dbo.callStatus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerStatus",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto14["m_sql"] = "dialerStatus";
$proto14["m_srcTableName"] = "dbo.callStatus";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "callClassificationId",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto16["m_sql"] = "callClassificationId";
$proto16["m_srcTableName"] = "dbo.callStatus";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "callSubClassificationId",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto18["m_sql"] = "callSubClassificationId";
$proto18["m_srcTableName"] = "dbo.callStatus";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "isPositive",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatus"
));

$proto20["m_sql"] = "isPositive";
$proto20["m_srcTableName"] = "dbo.callStatus";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.callStatus";
$proto23["m_srcTableName"] = "dbo.callStatus";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "status";
$proto23["m_columns"][] = "isDenial";
$proto23["m_columns"][] = "displayOrder";
$proto23["m_columns"][] = "dialerStatus";
$proto23["m_columns"][] = "callClassificationId";
$proto23["m_columns"][] = "callSubClassificationId";
$proto23["m_columns"][] = "isPositive";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.callStatus";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.callStatus";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.callStatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callstatus = createSqlQuery_callstatus();


	
		;

								

$tdatacallstatus[".sqlquery"] = $queryData_callstatus;



$tableEvents["dbo.callStatus"] = new eventsBase;
$tdatacallstatus[".hasEvents"] = false;

?>