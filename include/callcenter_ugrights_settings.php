<?php
$tdatacallcenter_ugrights = array();
$tdatacallcenter_ugrights[".searchableFields"] = array();
$tdatacallcenter_ugrights[".ShortName"] = "callcenter_ugrights";
$tdatacallcenter_ugrights[".OwnerID"] = "";
$tdatacallcenter_ugrights[".OriginalTable"] = "dbo.callcenter_ugrights";


$tdatacallcenter_ugrights[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacallcenter_ugrights[".originalPagesByType"] = $tdatacallcenter_ugrights[".pagesByType"];
$tdatacallcenter_ugrights[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacallcenter_ugrights[".originalPages"] = $tdatacallcenter_ugrights[".pages"];
$tdatacallcenter_ugrights[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacallcenter_ugrights[".originalDefaultPages"] = $tdatacallcenter_ugrights[".defaultPages"];

//	field labels
$fieldLabelscallcenter_ugrights = array();
$fieldToolTipscallcenter_ugrights = array();
$pageTitlescallcenter_ugrights = array();
$placeHolderscallcenter_ugrights = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallcenter_ugrights["Greek"] = array();
	$fieldToolTipscallcenter_ugrights["Greek"] = array();
	$placeHolderscallcenter_ugrights["Greek"] = array();
	$pageTitlescallcenter_ugrights["Greek"] = array();
	$fieldLabelscallcenter_ugrights["Greek"]["TableName"] = "Table Name";
	$fieldToolTipscallcenter_ugrights["Greek"]["TableName"] = "";
	$placeHolderscallcenter_ugrights["Greek"]["TableName"] = "";
	$fieldLabelscallcenter_ugrights["Greek"]["GroupID"] = "Group ID";
	$fieldToolTipscallcenter_ugrights["Greek"]["GroupID"] = "";
	$placeHolderscallcenter_ugrights["Greek"]["GroupID"] = "";
	$fieldLabelscallcenter_ugrights["Greek"]["AccessMask"] = "Access Mask";
	$fieldToolTipscallcenter_ugrights["Greek"]["AccessMask"] = "";
	$placeHolderscallcenter_ugrights["Greek"]["AccessMask"] = "";
	$fieldLabelscallcenter_ugrights["Greek"]["Page"] = "Page";
	$fieldToolTipscallcenter_ugrights["Greek"]["Page"] = "";
	$placeHolderscallcenter_ugrights["Greek"]["Page"] = "";
	if (count($fieldToolTipscallcenter_ugrights["Greek"]))
		$tdatacallcenter_ugrights[".isUseToolTips"] = true;
}


	$tdatacallcenter_ugrights[".NCSearch"] = true;



$tdatacallcenter_ugrights[".shortTableName"] = "callcenter_ugrights";
$tdatacallcenter_ugrights[".nSecOptions"] = 0;

$tdatacallcenter_ugrights[".mainTableOwnerID"] = "";
$tdatacallcenter_ugrights[".entityType"] = 1;
$tdatacallcenter_ugrights[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallcenter_ugrights[".strOriginalTableName"] = "dbo.callcenter_ugrights";

	



$tdatacallcenter_ugrights[".showAddInPopup"] = false;

$tdatacallcenter_ugrights[".showEditInPopup"] = false;

$tdatacallcenter_ugrights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallcenter_ugrights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallcenter_ugrights[".listAjax"] = false;
//	temporary
$tdatacallcenter_ugrights[".listAjax"] = false;

	$tdatacallcenter_ugrights[".audit"] = true;

	$tdatacallcenter_ugrights[".locking"] = false;


$pages = $tdatacallcenter_ugrights[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallcenter_ugrights[".edit"] = true;
	$tdatacallcenter_ugrights[".afterEditAction"] = 1;
	$tdatacallcenter_ugrights[".closePopupAfterEdit"] = 1;
	$tdatacallcenter_ugrights[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallcenter_ugrights[".add"] = true;
$tdatacallcenter_ugrights[".afterAddAction"] = 1;
$tdatacallcenter_ugrights[".closePopupAfterAdd"] = 1;
$tdatacallcenter_ugrights[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallcenter_ugrights[".list"] = true;
}



$tdatacallcenter_ugrights[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallcenter_ugrights[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallcenter_ugrights[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallcenter_ugrights[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallcenter_ugrights[".printFriendly"] = true;
}



$tdatacallcenter_ugrights[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallcenter_ugrights[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallcenter_ugrights[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallcenter_ugrights[".isUseAjaxSuggest"] = false;

$tdatacallcenter_ugrights[".rowHighlite"] = true;



																																																																																																																											

$tdatacallcenter_ugrights[".ajaxCodeSnippetAdded"] = false;

$tdatacallcenter_ugrights[".buttonsAdded"] = false;

$tdatacallcenter_ugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallcenter_ugrights[".isUseTimeForSearch"] = false;


$tdatacallcenter_ugrights[".badgeColor"] = "6B8E23";


$tdatacallcenter_ugrights[".allSearchFields"] = array();
$tdatacallcenter_ugrights[".filterFields"] = array();
$tdatacallcenter_ugrights[".requiredSearchFields"] = array();

$tdatacallcenter_ugrights[".googleLikeFields"] = array();
$tdatacallcenter_ugrights[".googleLikeFields"][] = "TableName";
$tdatacallcenter_ugrights[".googleLikeFields"][] = "GroupID";
$tdatacallcenter_ugrights[".googleLikeFields"][] = "AccessMask";
$tdatacallcenter_ugrights[".googleLikeFields"][] = "Page";



$tdatacallcenter_ugrights[".tableType"] = "list";

$tdatacallcenter_ugrights[".printerPageOrientation"] = 0;
$tdatacallcenter_ugrights[".nPrinterPageScale"] = 100;

$tdatacallcenter_ugrights[".nPrinterSplitRecords"] = 40;

$tdatacallcenter_ugrights[".geocodingEnabled"] = false;






$tdatacallcenter_ugrights[".searchIsRequiredForFilters"] = true;

$tdatacallcenter_ugrights[".noRecordsFirstPage"] = true;



$tdatacallcenter_ugrights[".pageSize"] = 20;

$tdatacallcenter_ugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallcenter_ugrights[".strOrderBy"] = $tstrOrderBy;

$tdatacallcenter_ugrights[".orderindexes"] = array();


$tdatacallcenter_ugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask,  	Page";
$tdatacallcenter_ugrights[".sqlFrom"] = "FROM dbo.callcenter_ugrights";
$tdatacallcenter_ugrights[".sqlWhereExpr"] = "";
$tdatacallcenter_ugrights[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallcenter_ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallcenter_ugrights[".arrGroupsPerPage"] = $arrGPP;

$tdatacallcenter_ugrights[".highlightSearchResults"] = true;

$tableKeyscallcenter_ugrights = array();
$tableKeyscallcenter_ugrights[] = "TableName";
$tableKeyscallcenter_ugrights[] = "GroupID";
$tdatacallcenter_ugrights[".Keys"] = $tableKeyscallcenter_ugrights;


$tdatacallcenter_ugrights[".hideMobileList"] = array();




//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "dbo.callcenter_ugrights";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugrights","TableName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TableName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatacallcenter_ugrights["TableName"] = $fdata;
		$tdatacallcenter_ugrights[".searchableFields"][] = "TableName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "dbo.callcenter_ugrights";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugrights","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "GroupID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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


	$tdatacallcenter_ugrights["GroupID"] = $fdata;
		$tdatacallcenter_ugrights[".searchableFields"][] = "GroupID";
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "dbo.callcenter_ugrights";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugrights","AccessMask");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AccessMask";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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


	$tdatacallcenter_ugrights["AccessMask"] = $fdata;
		$tdatacallcenter_ugrights[".searchableFields"][] = "AccessMask";
//	Page
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Page";
	$fdata["GoodName"] = "Page";
	$fdata["ownerTable"] = "dbo.callcenter_ugrights";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugrights","Page");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Page";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Page";

	
	
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


	$tdatacallcenter_ugrights["Page"] = $fdata;
		$tdatacallcenter_ugrights[".searchableFields"][] = "Page";


$tables_data["dbo.callcenter_ugrights"]=&$tdatacallcenter_ugrights;
$field_labels["dbo_callcenter_ugrights"] = &$fieldLabelscallcenter_ugrights;
$fieldToolTips["dbo_callcenter_ugrights"] = &$fieldToolTipscallcenter_ugrights;
$placeHolders["dbo_callcenter_ugrights"] = &$placeHolderscallcenter_ugrights;
$page_titles["dbo_callcenter_ugrights"] = &$pageTitlescallcenter_ugrights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callcenter_ugrights"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callcenter_ugrights"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callcenter_ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask,  	Page";
$proto0["m_strFrom"] = "FROM dbo.callcenter_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "dbo.callcenter_ugrights",
	"m_srcTableName" => "dbo.callcenter_ugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "dbo.callcenter_ugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "dbo.callcenter_ugrights",
	"m_srcTableName" => "dbo.callcenter_ugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "dbo.callcenter_ugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "dbo.callcenter_ugrights",
	"m_srcTableName" => "dbo.callcenter_ugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "dbo.callcenter_ugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Page",
	"m_strTable" => "dbo.callcenter_ugrights",
	"m_srcTableName" => "dbo.callcenter_ugrights"
));

$proto12["m_sql"] = "Page";
$proto12["m_srcTableName"] = "dbo.callcenter_ugrights";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.callcenter_ugrights";
$proto15["m_srcTableName"] = "dbo.callcenter_ugrights";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TableName";
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "AccessMask";
$proto15["m_columns"][] = "Page";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.callcenter_ugrights";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.callcenter_ugrights";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.callcenter_ugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callcenter_ugrights = createSqlQuery_callcenter_ugrights();


	
		;

				

$tdatacallcenter_ugrights[".sqlquery"] = $queryData_callcenter_ugrights;



$tableEvents["dbo.callcenter_ugrights"] = new eventsBase;
$tdatacallcenter_ugrights[".hasEvents"] = false;

?>