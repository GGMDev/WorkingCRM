<?php
$tdatainternalcomments = array();
$tdatainternalcomments[".searchableFields"] = array();
$tdatainternalcomments[".ShortName"] = "internalcomments";
$tdatainternalcomments[".OwnerID"] = "";
$tdatainternalcomments[".OriginalTable"] = "dbo.internalComments";


$tdatainternalcomments[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdatainternalcomments[".originalPagesByType"] = $tdatainternalcomments[".pagesByType"];
$tdatainternalcomments[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdatainternalcomments[".originalPages"] = $tdatainternalcomments[".pages"];
$tdatainternalcomments[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdatainternalcomments[".originalDefaultPages"] = $tdatainternalcomments[".defaultPages"];

//	field labels
$fieldLabelsinternalcomments = array();
$fieldToolTipsinternalcomments = array();
$pageTitlesinternalcomments = array();
$placeHoldersinternalcomments = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsinternalcomments["Greek"] = array();
	$fieldToolTipsinternalcomments["Greek"] = array();
	$placeHoldersinternalcomments["Greek"] = array();
	$pageTitlesinternalcomments["Greek"] = array();
	$fieldLabelsinternalcomments["Greek"]["id"] = "Id";
	$fieldToolTipsinternalcomments["Greek"]["id"] = "";
	$placeHoldersinternalcomments["Greek"]["id"] = "";
	$fieldLabelsinternalcomments["Greek"]["parentId"] = "Parent Id";
	$fieldToolTipsinternalcomments["Greek"]["parentId"] = "";
	$placeHoldersinternalcomments["Greek"]["parentId"] = "";
	$fieldLabelsinternalcomments["Greek"]["entryDate"] = "Entry Date";
	$fieldToolTipsinternalcomments["Greek"]["entryDate"] = "";
	$placeHoldersinternalcomments["Greek"]["entryDate"] = "";
	$fieldLabelsinternalcomments["Greek"]["comment"] = "Comment";
	$fieldToolTipsinternalcomments["Greek"]["comment"] = "";
	$placeHoldersinternalcomments["Greek"]["comment"] = "";
	$fieldLabelsinternalcomments["Greek"]["entryUser"] = "Entry User";
	$fieldToolTipsinternalcomments["Greek"]["entryUser"] = "";
	$placeHoldersinternalcomments["Greek"]["entryUser"] = "";
	if (count($fieldToolTipsinternalcomments["Greek"]))
		$tdatainternalcomments[".isUseToolTips"] = true;
}


	$tdatainternalcomments[".NCSearch"] = true;



$tdatainternalcomments[".shortTableName"] = "internalcomments";
$tdatainternalcomments[".nSecOptions"] = 0;

$tdatainternalcomments[".mainTableOwnerID"] = "";
$tdatainternalcomments[".entityType"] = 0;
$tdatainternalcomments[".connId"] = "CallCenter_at_10_41_2_31";


$tdatainternalcomments[".strOriginalTableName"] = "dbo.internalComments";

	



$tdatainternalcomments[".showAddInPopup"] = false;

$tdatainternalcomments[".showEditInPopup"] = false;

$tdatainternalcomments[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainternalcomments[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainternalcomments[".listAjax"] = false;
//	temporary
$tdatainternalcomments[".listAjax"] = false;

	$tdatainternalcomments[".audit"] = true;

	$tdatainternalcomments[".locking"] = false;


$pages = $tdatainternalcomments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainternalcomments[".edit"] = true;
	$tdatainternalcomments[".afterEditAction"] = 1;
	$tdatainternalcomments[".closePopupAfterEdit"] = 1;
	$tdatainternalcomments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainternalcomments[".add"] = true;
$tdatainternalcomments[".afterAddAction"] = 0;
$tdatainternalcomments[".closePopupAfterAdd"] = 1;
$tdatainternalcomments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainternalcomments[".list"] = true;
}



$tdatainternalcomments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainternalcomments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainternalcomments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainternalcomments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainternalcomments[".printFriendly"] = true;
}



$tdatainternalcomments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainternalcomments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainternalcomments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainternalcomments[".isUseAjaxSuggest"] = false;

$tdatainternalcomments[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													

$tdatainternalcomments[".ajaxCodeSnippetAdded"] = false;

$tdatainternalcomments[".buttonsAdded"] = false;

$tdatainternalcomments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainternalcomments[".isUseTimeForSearch"] = false;


$tdatainternalcomments[".badgeColor"] = "1e90ff";


$tdatainternalcomments[".allSearchFields"] = array();
$tdatainternalcomments[".filterFields"] = array();
$tdatainternalcomments[".requiredSearchFields"] = array();

$tdatainternalcomments[".googleLikeFields"] = array();
$tdatainternalcomments[".googleLikeFields"][] = "id";
$tdatainternalcomments[".googleLikeFields"][] = "parentId";
$tdatainternalcomments[".googleLikeFields"][] = "entryUser";
$tdatainternalcomments[".googleLikeFields"][] = "entryDate";
$tdatainternalcomments[".googleLikeFields"][] = "comment";



$tdatainternalcomments[".tableType"] = "list";

$tdatainternalcomments[".printerPageOrientation"] = 0;
$tdatainternalcomments[".nPrinterPageScale"] = 100;

$tdatainternalcomments[".nPrinterSplitRecords"] = 40;

$tdatainternalcomments[".geocodingEnabled"] = false;






$tdatainternalcomments[".searchIsRequiredForFilters"] = true;

$tdatainternalcomments[".noRecordsFirstPage"] = true;



$tdatainternalcomments[".pageSize"] = 20;

$tdatainternalcomments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainternalcomments[".strOrderBy"] = $tstrOrderBy;

$tdatainternalcomments[".orderindexes"] = array();


$tdatainternalcomments[".sqlHead"] = "SELECT id,  	parentId,  	entryUser,  	entryDate,  	[comment]";
$tdatainternalcomments[".sqlFrom"] = "FROM dbo.internalComments";
$tdatainternalcomments[".sqlWhereExpr"] = "";
$tdatainternalcomments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainternalcomments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainternalcomments[".arrGroupsPerPage"] = $arrGPP;

$tdatainternalcomments[".highlightSearchResults"] = true;

$tableKeysinternalcomments = array();
$tableKeysinternalcomments[] = "id";
$tdatainternalcomments[".Keys"] = $tableKeysinternalcomments;


$tdatainternalcomments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.internalComments";
	$fdata["Label"] = GetFieldLabel("dbo_internalComments","id");
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


	$tdatainternalcomments["id"] = $fdata;
		$tdatainternalcomments[".searchableFields"][] = "id";
//	parentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "parentId";
	$fdata["GoodName"] = "parentId";
	$fdata["ownerTable"] = "dbo.internalComments";
	$fdata["Label"] = GetFieldLabel("dbo_internalComments","parentId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "parentId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parentId";

	
	
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


	$tdatainternalcomments["parentId"] = $fdata;
		$tdatainternalcomments[".searchableFields"][] = "parentId";
//	entryUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUser";
	$fdata["GoodName"] = "entryUser";
	$fdata["ownerTable"] = "dbo.internalComments";
	$fdata["Label"] = GetFieldLabel("dbo_internalComments","entryUser");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "entryUser";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryUser";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatainternalcomments["entryUser"] = $fdata;
		$tdatainternalcomments[".searchableFields"][] = "entryUser";
//	entryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryDate";
	$fdata["GoodName"] = "entryDate";
	$fdata["ownerTable"] = "dbo.internalComments";
	$fdata["Label"] = GetFieldLabel("dbo_internalComments","entryDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "entryDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryDate";

	
	
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

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatainternalcomments["entryDate"] = $fdata;
		$tdatainternalcomments[".searchableFields"][] = "entryDate";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "dbo.internalComments";
	$fdata["Label"] = GetFieldLabel("dbo_internalComments","comment");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "comment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[comment]";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 60;
			$edata["nCols"] = 200;

	
	
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


	$tdatainternalcomments["comment"] = $fdata;
		$tdatainternalcomments[".searchableFields"][] = "comment";


$tables_data["dbo.internalComments"]=&$tdatainternalcomments;
$field_labels["dbo_internalComments"] = &$fieldLabelsinternalcomments;
$fieldToolTips["dbo_internalComments"] = &$fieldToolTipsinternalcomments;
$placeHolders["dbo_internalComments"] = &$placeHoldersinternalcomments;
$page_titles["dbo_internalComments"] = &$pageTitlesinternalcomments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.internalComments"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.internalComments"] = array();



	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Calls";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "calls";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.internalComments"][0] = $masterParams;
				$masterTablesData["dbo.internalComments"][0]["masterKeys"] = array();
	$masterTablesData["dbo.internalComments"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.internalComments"][0]["detailKeys"] = array();
	$masterTablesData["dbo.internalComments"][0]["detailKeys"][]="parentId";
		
	
				$strOriginalDetailsTable="dbo.voltonApplications";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.voltonApplications";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dbo_voltonapplications";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.internalComments"][1] = $masterParams;
				$masterTablesData["dbo.internalComments"][1]["masterKeys"] = array();
	$masterTablesData["dbo.internalComments"][1]["masterKeys"][]="id";
				$masterTablesData["dbo.internalComments"][1]["detailKeys"] = array();
	$masterTablesData["dbo.internalComments"][1]["detailKeys"][]="parentId";
		
	
				$strOriginalDetailsTable="dbo.novaApplications";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.novaApplications";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "novaapplications";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.internalComments"][2] = $masterParams;
				$masterTablesData["dbo.internalComments"][2]["masterKeys"] = array();
	$masterTablesData["dbo.internalComments"][2]["masterKeys"][]="id";
				$masterTablesData["dbo.internalComments"][2]["detailKeys"] = array();
	$masterTablesData["dbo.internalComments"][2]["detailKeys"][]="parentId";
		
	
				$strOriginalDetailsTable="dbo.voltonApplications";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.voltonApplicationsBackofficeView";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "voltonapplicationsbackofficeview";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.internalComments"][3] = $masterParams;
				$masterTablesData["dbo.internalComments"][3]["masterKeys"] = array();
	$masterTablesData["dbo.internalComments"][3]["masterKeys"][]="id";
				$masterTablesData["dbo.internalComments"][3]["detailKeys"] = array();
	$masterTablesData["dbo.internalComments"][3]["detailKeys"][]="parentId";
		
	
				$strOriginalDetailsTable="dbo.novaApplications";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.novaApplicationsBackofficeView";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "novaapplicationsbackofficeview";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.internalComments"][4] = $masterParams;
				$masterTablesData["dbo.internalComments"][4]["masterKeys"] = array();
	$masterTablesData["dbo.internalComments"][4]["masterKeys"][]="id";
				$masterTablesData["dbo.internalComments"][4]["detailKeys"] = array();
	$masterTablesData["dbo.internalComments"][4]["detailKeys"][]="parentId";
		
	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.CallsBackofficeView";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "callsbackofficeview";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.internalComments"][5] = $masterParams;
				$masterTablesData["dbo.internalComments"][5]["masterKeys"] = array();
	$masterTablesData["dbo.internalComments"][5]["masterKeys"][]="id";
				$masterTablesData["dbo.internalComments"][5]["detailKeys"] = array();
	$masterTablesData["dbo.internalComments"][5]["detailKeys"][]="parentId";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_internalcomments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	parentId,  	entryUser,  	entryDate,  	[comment]";
$proto0["m_strFrom"] = "FROM dbo.internalComments";
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
	"m_strTable" => "dbo.internalComments",
	"m_srcTableName" => "dbo.internalComments"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.internalComments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "parentId",
	"m_strTable" => "dbo.internalComments",
	"m_srcTableName" => "dbo.internalComments"
));

$proto8["m_sql"] = "parentId";
$proto8["m_srcTableName"] = "dbo.internalComments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUser",
	"m_strTable" => "dbo.internalComments",
	"m_srcTableName" => "dbo.internalComments"
));

$proto10["m_sql"] = "entryUser";
$proto10["m_srcTableName"] = "dbo.internalComments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryDate",
	"m_strTable" => "dbo.internalComments",
	"m_srcTableName" => "dbo.internalComments"
));

$proto12["m_sql"] = "entryDate";
$proto12["m_srcTableName"] = "dbo.internalComments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "dbo.internalComments",
	"m_srcTableName" => "dbo.internalComments"
));

$proto14["m_sql"] = "[comment]";
$proto14["m_srcTableName"] = "dbo.internalComments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.internalComments";
$proto17["m_srcTableName"] = "dbo.internalComments";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "parentId";
$proto17["m_columns"][] = "entryUser";
$proto17["m_columns"][] = "entryDate";
$proto17["m_columns"][] = "comment";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.internalComments";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.internalComments";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.internalComments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_internalcomments = createSqlQuery_internalcomments();


	
		;

					

$tdatainternalcomments[".sqlquery"] = $queryData_internalcomments;



$tableEvents["dbo.internalComments"] = new eventsBase;
$tdatainternalcomments[".hasEvents"] = false;

?>