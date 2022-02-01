<?php
$tdatacallcenter_audit = array();
$tdatacallcenter_audit[".searchableFields"] = array();
$tdatacallcenter_audit[".ShortName"] = "callcenter_audit";
$tdatacallcenter_audit[".OwnerID"] = "";
$tdatacallcenter_audit[".OriginalTable"] = "dbo.CallCenter_audit";


$tdatacallcenter_audit[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacallcenter_audit[".originalPagesByType"] = $tdatacallcenter_audit[".pagesByType"];
$tdatacallcenter_audit[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacallcenter_audit[".originalPages"] = $tdatacallcenter_audit[".pages"];
$tdatacallcenter_audit[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacallcenter_audit[".originalDefaultPages"] = $tdatacallcenter_audit[".defaultPages"];

//	field labels
$fieldLabelscallcenter_audit = array();
$fieldToolTipscallcenter_audit = array();
$pageTitlescallcenter_audit = array();
$placeHolderscallcenter_audit = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallcenter_audit["Greek"] = array();
	$fieldToolTipscallcenter_audit["Greek"] = array();
	$placeHolderscallcenter_audit["Greek"] = array();
	$pageTitlescallcenter_audit["Greek"] = array();
	$fieldLabelscallcenter_audit["Greek"]["id"] = "Id";
	$fieldToolTipscallcenter_audit["Greek"]["id"] = "";
	$placeHolderscallcenter_audit["Greek"]["id"] = "";
	$fieldLabelscallcenter_audit["Greek"]["datetime"] = "Datetime";
	$fieldToolTipscallcenter_audit["Greek"]["datetime"] = "";
	$placeHolderscallcenter_audit["Greek"]["datetime"] = "";
	$fieldLabelscallcenter_audit["Greek"]["ip"] = "Ip";
	$fieldToolTipscallcenter_audit["Greek"]["ip"] = "";
	$placeHolderscallcenter_audit["Greek"]["ip"] = "";
	$fieldLabelscallcenter_audit["Greek"]["user"] = "User";
	$fieldToolTipscallcenter_audit["Greek"]["user"] = "";
	$placeHolderscallcenter_audit["Greek"]["user"] = "";
	$fieldLabelscallcenter_audit["Greek"]["table"] = "Table";
	$fieldToolTipscallcenter_audit["Greek"]["table"] = "";
	$placeHolderscallcenter_audit["Greek"]["table"] = "";
	$fieldLabelscallcenter_audit["Greek"]["action"] = "Action";
	$fieldToolTipscallcenter_audit["Greek"]["action"] = "";
	$placeHolderscallcenter_audit["Greek"]["action"] = "";
	$fieldLabelscallcenter_audit["Greek"]["description"] = "Description";
	$fieldToolTipscallcenter_audit["Greek"]["description"] = "";
	$placeHolderscallcenter_audit["Greek"]["description"] = "";
	if (count($fieldToolTipscallcenter_audit["Greek"]))
		$tdatacallcenter_audit[".isUseToolTips"] = true;
}


	$tdatacallcenter_audit[".NCSearch"] = true;



$tdatacallcenter_audit[".shortTableName"] = "callcenter_audit";
$tdatacallcenter_audit[".nSecOptions"] = 0;

$tdatacallcenter_audit[".mainTableOwnerID"] = "";
$tdatacallcenter_audit[".entityType"] = 0;
$tdatacallcenter_audit[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallcenter_audit[".strOriginalTableName"] = "dbo.CallCenter_audit";

	



$tdatacallcenter_audit[".showAddInPopup"] = false;

$tdatacallcenter_audit[".showEditInPopup"] = false;

$tdatacallcenter_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallcenter_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallcenter_audit[".listAjax"] = false;
//	temporary
$tdatacallcenter_audit[".listAjax"] = false;

	$tdatacallcenter_audit[".audit"] = true;

	$tdatacallcenter_audit[".locking"] = false;


$pages = $tdatacallcenter_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallcenter_audit[".edit"] = true;
	$tdatacallcenter_audit[".afterEditAction"] = 0;
	$tdatacallcenter_audit[".closePopupAfterEdit"] = 1;
	$tdatacallcenter_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallcenter_audit[".add"] = true;
$tdatacallcenter_audit[".afterAddAction"] = 0;
$tdatacallcenter_audit[".closePopupAfterAdd"] = 1;
$tdatacallcenter_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallcenter_audit[".list"] = true;
}



$tdatacallcenter_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallcenter_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallcenter_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallcenter_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallcenter_audit[".printFriendly"] = true;
}



$tdatacallcenter_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallcenter_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallcenter_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallcenter_audit[".isUseAjaxSuggest"] = false;

$tdatacallcenter_audit[".rowHighlite"] = true;



																																																																																																																											

$tdatacallcenter_audit[".ajaxCodeSnippetAdded"] = false;

$tdatacallcenter_audit[".buttonsAdded"] = false;

$tdatacallcenter_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallcenter_audit[".isUseTimeForSearch"] = false;


$tdatacallcenter_audit[".badgeColor"] = "8FBC8B";


$tdatacallcenter_audit[".allSearchFields"] = array();
$tdatacallcenter_audit[".filterFields"] = array();
$tdatacallcenter_audit[".requiredSearchFields"] = array();

$tdatacallcenter_audit[".googleLikeFields"] = array();
$tdatacallcenter_audit[".googleLikeFields"][] = "id";
$tdatacallcenter_audit[".googleLikeFields"][] = "datetime";
$tdatacallcenter_audit[".googleLikeFields"][] = "ip";
$tdatacallcenter_audit[".googleLikeFields"][] = "user";
$tdatacallcenter_audit[".googleLikeFields"][] = "table";
$tdatacallcenter_audit[".googleLikeFields"][] = "action";
$tdatacallcenter_audit[".googleLikeFields"][] = "description";



$tdatacallcenter_audit[".tableType"] = "list";

$tdatacallcenter_audit[".printerPageOrientation"] = 0;
$tdatacallcenter_audit[".nPrinterPageScale"] = 100;

$tdatacallcenter_audit[".nPrinterSplitRecords"] = 40;

$tdatacallcenter_audit[".geocodingEnabled"] = false;






$tdatacallcenter_audit[".searchIsRequiredForFilters"] = true;

$tdatacallcenter_audit[".noRecordsFirstPage"] = true;



$tdatacallcenter_audit[".pageSize"] = 20;

$tdatacallcenter_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallcenter_audit[".strOrderBy"] = $tstrOrderBy;

$tdatacallcenter_audit[".orderindexes"] = array();


$tdatacallcenter_audit[".sqlHead"] = "SELECT id,  	[datetime],  	ip,  	[user],  	[table],  	[action],  	description";
$tdatacallcenter_audit[".sqlFrom"] = "FROM dbo.CallCenter_audit";
$tdatacallcenter_audit[".sqlWhereExpr"] = "";
$tdatacallcenter_audit[".sqlTail"] = "";

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
$tdatacallcenter_audit[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallcenter_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallcenter_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatacallcenter_audit[".highlightSearchResults"] = true;

$tableKeyscallcenter_audit = array();
$tableKeyscallcenter_audit[] = "id";
$tdatacallcenter_audit[".Keys"] = $tableKeyscallcenter_audit;


$tdatacallcenter_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","id");
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


	$tdatacallcenter_audit["id"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","datetime");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[datetime]";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacallcenter_audit["datetime"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","ip");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatacallcenter_audit["ip"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[user]";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatacallcenter_audit["user"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","table");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[table]";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatacallcenter_audit["table"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","action");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[action]";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatacallcenter_audit["action"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.CallCenter_audit";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_audit","description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacallcenter_audit["description"] = $fdata;
		$tdatacallcenter_audit[".searchableFields"][] = "description";


$tables_data["dbo.CallCenter_audit"]=&$tdatacallcenter_audit;
$field_labels["dbo_CallCenter_audit"] = &$fieldLabelscallcenter_audit;
$fieldToolTips["dbo_CallCenter_audit"] = &$fieldToolTipscallcenter_audit;
$placeHolders["dbo_CallCenter_audit"] = &$placeHolderscallcenter_audit;
$page_titles["dbo_CallCenter_audit"] = &$pageTitlescallcenter_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.CallCenter_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CallCenter_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callcenter_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	[datetime],  	ip,  	[user],  	[table],  	[action],  	description";
$proto0["m_strFrom"] = "FROM dbo.CallCenter_audit";
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
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.CallCenter_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto8["m_sql"] = "[datetime]";
$proto8["m_srcTableName"] = "dbo.CallCenter_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "dbo.CallCenter_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto12["m_sql"] = "[user]";
$proto12["m_srcTableName"] = "dbo.CallCenter_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto14["m_sql"] = "[table]";
$proto14["m_srcTableName"] = "dbo.CallCenter_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto16["m_sql"] = "[action]";
$proto16["m_srcTableName"] = "dbo.CallCenter_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.CallCenter_audit",
	"m_srcTableName" => "dbo.CallCenter_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "dbo.CallCenter_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.CallCenter_audit";
$proto21["m_srcTableName"] = "dbo.CallCenter_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.CallCenter_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.CallCenter_audit";
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
$proto0["m_srcTableName"]="dbo.CallCenter_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callcenter_audit = createSqlQuery_callcenter_audit();


	
		;

							

$tdatacallcenter_audit[".sqlquery"] = $queryData_callcenter_audit;



$tableEvents["dbo.CallCenter_audit"] = new eventsBase;
$tdatacallcenter_audit[".hasEvents"] = false;

?>