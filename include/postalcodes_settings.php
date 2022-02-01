<?php
$tdatapostalcodes = array();
$tdatapostalcodes[".searchableFields"] = array();
$tdatapostalcodes[".ShortName"] = "postalcodes";
$tdatapostalcodes[".OwnerID"] = "";
$tdatapostalcodes[".OriginalTable"] = "dbo.postalCodes";


$tdatapostalcodes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapostalcodes[".originalPagesByType"] = $tdatapostalcodes[".pagesByType"];
$tdatapostalcodes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapostalcodes[".originalPages"] = $tdatapostalcodes[".pages"];
$tdatapostalcodes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapostalcodes[".originalDefaultPages"] = $tdatapostalcodes[".defaultPages"];

//	field labels
$fieldLabelspostalcodes = array();
$fieldToolTipspostalcodes = array();
$pageTitlespostalcodes = array();
$placeHolderspostalcodes = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelspostalcodes["Greek"] = array();
	$fieldToolTipspostalcodes["Greek"] = array();
	$placeHolderspostalcodes["Greek"] = array();
	$pageTitlespostalcodes["Greek"] = array();
	$fieldLabelspostalcodes["Greek"]["postalCode"] = "Τ.Κ.";
	$fieldToolTipspostalcodes["Greek"]["postalCode"] = "";
	$placeHolderspostalcodes["Greek"]["postalCode"] = "";
	$fieldLabelspostalcodes["Greek"]["area"] = "Περιοχή";
	$fieldToolTipspostalcodes["Greek"]["area"] = "";
	$placeHolderspostalcodes["Greek"]["area"] = "";
	$fieldLabelspostalcodes["Greek"]["city"] = "Πόλη";
	$fieldToolTipspostalcodes["Greek"]["city"] = "";
	$placeHolderspostalcodes["Greek"]["city"] = "";
	$fieldLabelspostalcodes["Greek"]["region"] = "Νομός";
	$fieldToolTipspostalcodes["Greek"]["region"] = "";
	$placeHolderspostalcodes["Greek"]["region"] = "";
	if (count($fieldToolTipspostalcodes["Greek"]))
		$tdatapostalcodes[".isUseToolTips"] = true;
}


	$tdatapostalcodes[".NCSearch"] = true;



$tdatapostalcodes[".shortTableName"] = "postalcodes";
$tdatapostalcodes[".nSecOptions"] = 0;

$tdatapostalcodes[".mainTableOwnerID"] = "";
$tdatapostalcodes[".entityType"] = 0;
$tdatapostalcodes[".connId"] = "CallCenter_at_10_41_2_31";


$tdatapostalcodes[".strOriginalTableName"] = "dbo.postalCodes";

	



$tdatapostalcodes[".showAddInPopup"] = false;

$tdatapostalcodes[".showEditInPopup"] = false;

$tdatapostalcodes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapostalcodes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapostalcodes[".listAjax"] = false;
//	temporary
$tdatapostalcodes[".listAjax"] = false;

	$tdatapostalcodes[".audit"] = true;

	$tdatapostalcodes[".locking"] = false;


$pages = $tdatapostalcodes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostalcodes[".edit"] = true;
	$tdatapostalcodes[".afterEditAction"] = 0;
	$tdatapostalcodes[".closePopupAfterEdit"] = 1;
	$tdatapostalcodes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostalcodes[".add"] = true;
$tdatapostalcodes[".afterAddAction"] = 0;
$tdatapostalcodes[".closePopupAfterAdd"] = 1;
$tdatapostalcodes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostalcodes[".list"] = true;
}



$tdatapostalcodes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostalcodes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostalcodes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostalcodes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostalcodes[".printFriendly"] = true;
}



$tdatapostalcodes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostalcodes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostalcodes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostalcodes[".isUseAjaxSuggest"] = false;

$tdatapostalcodes[".rowHighlite"] = true;



																																																																																																																											

$tdatapostalcodes[".ajaxCodeSnippetAdded"] = false;

$tdatapostalcodes[".buttonsAdded"] = false;

$tdatapostalcodes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostalcodes[".isUseTimeForSearch"] = false;


$tdatapostalcodes[".badgeColor"] = "1E90FF";


$tdatapostalcodes[".allSearchFields"] = array();
$tdatapostalcodes[".filterFields"] = array();
$tdatapostalcodes[".requiredSearchFields"] = array();

$tdatapostalcodes[".googleLikeFields"] = array();
$tdatapostalcodes[".googleLikeFields"][] = "postalCode";
$tdatapostalcodes[".googleLikeFields"][] = "area";
$tdatapostalcodes[".googleLikeFields"][] = "city";
$tdatapostalcodes[".googleLikeFields"][] = "region";



$tdatapostalcodes[".tableType"] = "list";

$tdatapostalcodes[".printerPageOrientation"] = 0;
$tdatapostalcodes[".nPrinterPageScale"] = 100;

$tdatapostalcodes[".nPrinterSplitRecords"] = 40;

$tdatapostalcodes[".geocodingEnabled"] = false;






$tdatapostalcodes[".searchIsRequiredForFilters"] = true;

$tdatapostalcodes[".noRecordsFirstPage"] = true;



$tdatapostalcodes[".pageSize"] = 20;

$tdatapostalcodes[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY postalCode";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapostalcodes[".strOrderBy"] = $tstrOrderBy;

$tdatapostalcodes[".orderindexes"] = array();
	$tdatapostalcodes[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "postalCode");



$tdatapostalcodes[".sqlHead"] = "SELECT postalCode,  area,  city,  region";
$tdatapostalcodes[".sqlFrom"] = "FROM dbo.postalCodes";
$tdatapostalcodes[".sqlWhereExpr"] = "";
$tdatapostalcodes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostalcodes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostalcodes[".arrGroupsPerPage"] = $arrGPP;

$tdatapostalcodes[".highlightSearchResults"] = true;

$tableKeyspostalcodes = array();
$tableKeyspostalcodes[] = "postalCode";
$tdatapostalcodes[".Keys"] = $tableKeyspostalcodes;


$tdatapostalcodes[".hideMobileList"] = array();




//	postalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "postalCode";
	$fdata["GoodName"] = "postalCode";
	$fdata["ownerTable"] = "dbo.postalCodes";
	$fdata["Label"] = GetFieldLabel("dbo_postalCodes","postalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "postalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postalCode";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatapostalcodes["postalCode"] = $fdata;
		$tdatapostalcodes[".searchableFields"][] = "postalCode";
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "dbo.postalCodes";
	$fdata["Label"] = GetFieldLabel("dbo_postalCodes","area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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


	$tdatapostalcodes["area"] = $fdata;
		$tdatapostalcodes[".searchableFields"][] = "area";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "dbo.postalCodes";
	$fdata["Label"] = GetFieldLabel("dbo_postalCodes","city");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "city";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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


	$tdatapostalcodes["city"] = $fdata;
		$tdatapostalcodes[".searchableFields"][] = "city";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "dbo.postalCodes";
	$fdata["Label"] = GetFieldLabel("dbo_postalCodes","region");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";

	
	
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


	$tdatapostalcodes["region"] = $fdata;
		$tdatapostalcodes[".searchableFields"][] = "region";


$tables_data["dbo.postalCodes"]=&$tdatapostalcodes;
$field_labels["dbo_postalCodes"] = &$fieldLabelspostalcodes;
$fieldToolTips["dbo_postalCodes"] = &$fieldToolTipspostalcodes;
$placeHolders["dbo_postalCodes"] = &$placeHolderspostalcodes;
$page_titles["dbo_postalCodes"] = &$pageTitlespostalcodes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.postalCodes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.postalCodes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postalcodes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "postalCode,  area,  city,  region";
$proto0["m_strFrom"] = "FROM dbo.postalCodes";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY postalCode";
	
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
	"m_strName" => "postalCode",
	"m_strTable" => "dbo.postalCodes",
	"m_srcTableName" => "dbo.postalCodes"
));

$proto6["m_sql"] = "postalCode";
$proto6["m_srcTableName"] = "dbo.postalCodes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "dbo.postalCodes",
	"m_srcTableName" => "dbo.postalCodes"
));

$proto8["m_sql"] = "area";
$proto8["m_srcTableName"] = "dbo.postalCodes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "dbo.postalCodes",
	"m_srcTableName" => "dbo.postalCodes"
));

$proto10["m_sql"] = "city";
$proto10["m_srcTableName"] = "dbo.postalCodes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "dbo.postalCodes",
	"m_srcTableName" => "dbo.postalCodes"
));

$proto12["m_sql"] = "region";
$proto12["m_srcTableName"] = "dbo.postalCodes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.postalCodes";
$proto15["m_srcTableName"] = "dbo.postalCodes";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "postalCode";
$proto15["m_columns"][] = "area";
$proto15["m_columns"][] = "city";
$proto15["m_columns"][] = "region";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.postalCodes";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.postalCodes";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "postalCode",
	"m_strTable" => "dbo.postalCodes",
	"m_srcTableName" => "dbo.postalCodes"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.postalCodes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postalcodes = createSqlQuery_postalcodes();


	
		;

				

$tdatapostalcodes[".sqlquery"] = $queryData_postalcodes;



$tableEvents["dbo.postalCodes"] = new eventsBase;
$tdatapostalcodes[".hasEvents"] = false;

?>