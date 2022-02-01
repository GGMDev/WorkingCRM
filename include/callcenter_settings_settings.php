<?php
$tdatacallcenter_settings = array();
$tdatacallcenter_settings[".searchableFields"] = array();
$tdatacallcenter_settings[".ShortName"] = "callcenter_settings";
$tdatacallcenter_settings[".OwnerID"] = "";
$tdatacallcenter_settings[".OriginalTable"] = "dbo.CallCenter_settings";


$tdatacallcenter_settings[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacallcenter_settings[".originalPagesByType"] = $tdatacallcenter_settings[".pagesByType"];
$tdatacallcenter_settings[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacallcenter_settings[".originalPages"] = $tdatacallcenter_settings[".pages"];
$tdatacallcenter_settings[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacallcenter_settings[".originalDefaultPages"] = $tdatacallcenter_settings[".defaultPages"];

//	field labels
$fieldLabelscallcenter_settings = array();
$fieldToolTipscallcenter_settings = array();
$pageTitlescallcenter_settings = array();
$placeHolderscallcenter_settings = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallcenter_settings["Greek"] = array();
	$fieldToolTipscallcenter_settings["Greek"] = array();
	$placeHolderscallcenter_settings["Greek"] = array();
	$pageTitlescallcenter_settings["Greek"] = array();
	$fieldLabelscallcenter_settings["Greek"]["ID"] = "ID";
	$fieldToolTipscallcenter_settings["Greek"]["ID"] = "";
	$placeHolderscallcenter_settings["Greek"]["ID"] = "";
	$fieldLabelscallcenter_settings["Greek"]["TYPE"] = "TYPE";
	$fieldToolTipscallcenter_settings["Greek"]["TYPE"] = "";
	$placeHolderscallcenter_settings["Greek"]["TYPE"] = "";
	$fieldLabelscallcenter_settings["Greek"]["NAME"] = "NAME";
	$fieldToolTipscallcenter_settings["Greek"]["NAME"] = "";
	$placeHolderscallcenter_settings["Greek"]["NAME"] = "";
	$fieldLabelscallcenter_settings["Greek"]["USERNAME"] = "USERNAME";
	$fieldToolTipscallcenter_settings["Greek"]["USERNAME"] = "";
	$placeHolderscallcenter_settings["Greek"]["USERNAME"] = "";
	$fieldLabelscallcenter_settings["Greek"]["COOKIE"] = "COOKIE";
	$fieldToolTipscallcenter_settings["Greek"]["COOKIE"] = "";
	$placeHolderscallcenter_settings["Greek"]["COOKIE"] = "";
	$fieldLabelscallcenter_settings["Greek"]["SEARCH"] = "SEARCH";
	$fieldToolTipscallcenter_settings["Greek"]["SEARCH"] = "";
	$placeHolderscallcenter_settings["Greek"]["SEARCH"] = "";
	$fieldLabelscallcenter_settings["Greek"]["TABLENAME"] = "TABLENAME";
	$fieldToolTipscallcenter_settings["Greek"]["TABLENAME"] = "";
	$placeHolderscallcenter_settings["Greek"]["TABLENAME"] = "";
	if (count($fieldToolTipscallcenter_settings["Greek"]))
		$tdatacallcenter_settings[".isUseToolTips"] = true;
}


	$tdatacallcenter_settings[".NCSearch"] = true;



$tdatacallcenter_settings[".shortTableName"] = "callcenter_settings";
$tdatacallcenter_settings[".nSecOptions"] = 0;

$tdatacallcenter_settings[".mainTableOwnerID"] = "";
$tdatacallcenter_settings[".entityType"] = 0;
$tdatacallcenter_settings[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallcenter_settings[".strOriginalTableName"] = "dbo.CallCenter_settings";

	



$tdatacallcenter_settings[".showAddInPopup"] = false;

$tdatacallcenter_settings[".showEditInPopup"] = false;

$tdatacallcenter_settings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallcenter_settings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallcenter_settings[".listAjax"] = false;
//	temporary
$tdatacallcenter_settings[".listAjax"] = false;

	$tdatacallcenter_settings[".audit"] = true;

	$tdatacallcenter_settings[".locking"] = false;


$pages = $tdatacallcenter_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallcenter_settings[".edit"] = true;
	$tdatacallcenter_settings[".afterEditAction"] = 1;
	$tdatacallcenter_settings[".closePopupAfterEdit"] = 1;
	$tdatacallcenter_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallcenter_settings[".add"] = true;
$tdatacallcenter_settings[".afterAddAction"] = 0;
$tdatacallcenter_settings[".closePopupAfterAdd"] = 1;
$tdatacallcenter_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallcenter_settings[".list"] = true;
}



$tdatacallcenter_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallcenter_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallcenter_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallcenter_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallcenter_settings[".printFriendly"] = true;
}



$tdatacallcenter_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallcenter_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallcenter_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallcenter_settings[".isUseAjaxSuggest"] = false;

$tdatacallcenter_settings[".rowHighlite"] = true;



																																																																																																																											

$tdatacallcenter_settings[".ajaxCodeSnippetAdded"] = false;

$tdatacallcenter_settings[".buttonsAdded"] = false;

$tdatacallcenter_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallcenter_settings[".isUseTimeForSearch"] = false;


$tdatacallcenter_settings[".badgeColor"] = "6DA5C8";


$tdatacallcenter_settings[".allSearchFields"] = array();
$tdatacallcenter_settings[".filterFields"] = array();
$tdatacallcenter_settings[".requiredSearchFields"] = array();

$tdatacallcenter_settings[".googleLikeFields"] = array();
$tdatacallcenter_settings[".googleLikeFields"][] = "ID";
$tdatacallcenter_settings[".googleLikeFields"][] = "TYPE";
$tdatacallcenter_settings[".googleLikeFields"][] = "NAME";
$tdatacallcenter_settings[".googleLikeFields"][] = "USERNAME";
$tdatacallcenter_settings[".googleLikeFields"][] = "COOKIE";
$tdatacallcenter_settings[".googleLikeFields"][] = "SEARCH";
$tdatacallcenter_settings[".googleLikeFields"][] = "TABLENAME";



$tdatacallcenter_settings[".tableType"] = "list";

$tdatacallcenter_settings[".printerPageOrientation"] = 0;
$tdatacallcenter_settings[".nPrinterPageScale"] = 100;

$tdatacallcenter_settings[".nPrinterSplitRecords"] = 40;

$tdatacallcenter_settings[".geocodingEnabled"] = false;






$tdatacallcenter_settings[".searchIsRequiredForFilters"] = true;

$tdatacallcenter_settings[".noRecordsFirstPage"] = true;



$tdatacallcenter_settings[".pageSize"] = 20;

$tdatacallcenter_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallcenter_settings[".strOrderBy"] = $tstrOrderBy;

$tdatacallcenter_settings[".orderindexes"] = array();


$tdatacallcenter_settings[".sqlHead"] = "SELECT ID,  	[TYPE],  	NAME,  	USERNAME,  	COOKIE,  	[SEARCH],  	TABLENAME";
$tdatacallcenter_settings[".sqlFrom"] = "FROM dbo.CallCenter_settings";
$tdatacallcenter_settings[".sqlWhereExpr"] = "";
$tdatacallcenter_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallcenter_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallcenter_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatacallcenter_settings[".highlightSearchResults"] = true;

$tableKeyscallcenter_settings = array();
$tableKeyscallcenter_settings[] = "ID";
$tdatacallcenter_settings[".Keys"] = $tableKeyscallcenter_settings;


$tdatacallcenter_settings[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatacallcenter_settings["ID"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "ID";
//	TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TYPE";
	$fdata["GoodName"] = "TYPE";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","TYPE");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "TYPE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[TYPE]";

	
	
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


	$tdatacallcenter_settings["TYPE"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "TYPE";
//	NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NAME";
	$fdata["GoodName"] = "NAME";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","NAME");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "NAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAME";

	
	
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


	$tdatacallcenter_settings["NAME"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "NAME";
//	USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USERNAME";
	$fdata["GoodName"] = "USERNAME";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","USERNAME");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "USERNAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERNAME";

	
	
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


	$tdatacallcenter_settings["USERNAME"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "USERNAME";
//	COOKIE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COOKIE";
	$fdata["GoodName"] = "COOKIE";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","COOKIE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "COOKIE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COOKIE";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatacallcenter_settings["COOKIE"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "COOKIE";
//	SEARCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SEARCH";
	$fdata["GoodName"] = "SEARCH";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","SEARCH");
	$fdata["FieldType"] = 203;

	
	
	
			

		$fdata["strField"] = "SEARCH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[SEARCH]";

	
	
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


	$tdatacallcenter_settings["SEARCH"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "SEARCH";
//	TABLENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TABLENAME";
	$fdata["GoodName"] = "TABLENAME";
	$fdata["ownerTable"] = "dbo.CallCenter_settings";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_settings","TABLENAME");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TABLENAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLENAME";

	
	
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


	$tdatacallcenter_settings["TABLENAME"] = $fdata;
		$tdatacallcenter_settings[".searchableFields"][] = "TABLENAME";


$tables_data["dbo.CallCenter_settings"]=&$tdatacallcenter_settings;
$field_labels["dbo_CallCenter_settings"] = &$fieldLabelscallcenter_settings;
$fieldToolTips["dbo_CallCenter_settings"] = &$fieldToolTipscallcenter_settings;
$placeHolders["dbo_CallCenter_settings"] = &$placeHolderscallcenter_settings;
$page_titles["dbo_CallCenter_settings"] = &$pageTitlescallcenter_settings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.CallCenter_settings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CallCenter_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callcenter_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	[TYPE],  	NAME,  	USERNAME,  	COOKIE,  	[SEARCH],  	TABLENAME";
$proto0["m_strFrom"] = "FROM dbo.CallCenter_settings";
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
	"m_strName" => "ID",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "dbo.CallCenter_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TYPE",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto8["m_sql"] = "[TYPE]";
$proto8["m_srcTableName"] = "dbo.CallCenter_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NAME",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto10["m_sql"] = "NAME";
$proto10["m_srcTableName"] = "dbo.CallCenter_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto12["m_sql"] = "USERNAME";
$proto12["m_srcTableName"] = "dbo.CallCenter_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "COOKIE",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto14["m_sql"] = "COOKIE";
$proto14["m_srcTableName"] = "dbo.CallCenter_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto16["m_sql"] = "[SEARCH]";
$proto16["m_srcTableName"] = "dbo.CallCenter_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLENAME",
	"m_strTable" => "dbo.CallCenter_settings",
	"m_srcTableName" => "dbo.CallCenter_settings"
));

$proto18["m_sql"] = "TABLENAME";
$proto18["m_srcTableName"] = "dbo.CallCenter_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.CallCenter_settings";
$proto21["m_srcTableName"] = "dbo.CallCenter_settings";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "TYPE";
$proto21["m_columns"][] = "NAME";
$proto21["m_columns"][] = "USERNAME";
$proto21["m_columns"][] = "COOKIE";
$proto21["m_columns"][] = "SEARCH";
$proto21["m_columns"][] = "TABLENAME";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.CallCenter_settings";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.CallCenter_settings";
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
$proto0["m_srcTableName"]="dbo.CallCenter_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callcenter_settings = createSqlQuery_callcenter_settings();


	
		;

							

$tdatacallcenter_settings[".sqlquery"] = $queryData_callcenter_settings;



$tableEvents["dbo.CallCenter_settings"] = new eventsBase;
$tdatacallcenter_settings[".hasEvents"] = false;

?>