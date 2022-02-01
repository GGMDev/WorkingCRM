<?php
$tdatacouriercompanies = array();
$tdatacouriercompanies[".searchableFields"] = array();
$tdatacouriercompanies[".ShortName"] = "couriercompanies";
$tdatacouriercompanies[".OwnerID"] = "";
$tdatacouriercompanies[".OriginalTable"] = "dbo.courierCompanies";


$tdatacouriercompanies[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacouriercompanies[".originalPagesByType"] = $tdatacouriercompanies[".pagesByType"];
$tdatacouriercompanies[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacouriercompanies[".originalPages"] = $tdatacouriercompanies[".pages"];
$tdatacouriercompanies[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacouriercompanies[".originalDefaultPages"] = $tdatacouriercompanies[".defaultPages"];

//	field labels
$fieldLabelscouriercompanies = array();
$fieldToolTipscouriercompanies = array();
$pageTitlescouriercompanies = array();
$placeHolderscouriercompanies = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscouriercompanies["Greek"] = array();
	$fieldToolTipscouriercompanies["Greek"] = array();
	$placeHolderscouriercompanies["Greek"] = array();
	$pageTitlescouriercompanies["Greek"] = array();
	$fieldLabelscouriercompanies["Greek"]["courier"] = "Courier";
	$fieldToolTipscouriercompanies["Greek"]["courier"] = "";
	$placeHolderscouriercompanies["Greek"]["courier"] = "";
	if (count($fieldToolTipscouriercompanies["Greek"]))
		$tdatacouriercompanies[".isUseToolTips"] = true;
}


	$tdatacouriercompanies[".NCSearch"] = true;



$tdatacouriercompanies[".shortTableName"] = "couriercompanies";
$tdatacouriercompanies[".nSecOptions"] = 0;

$tdatacouriercompanies[".mainTableOwnerID"] = "";
$tdatacouriercompanies[".entityType"] = 0;
$tdatacouriercompanies[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacouriercompanies[".strOriginalTableName"] = "dbo.courierCompanies";

	



$tdatacouriercompanies[".showAddInPopup"] = false;

$tdatacouriercompanies[".showEditInPopup"] = false;

$tdatacouriercompanies[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacouriercompanies[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacouriercompanies[".listAjax"] = false;
//	temporary
$tdatacouriercompanies[".listAjax"] = false;

	$tdatacouriercompanies[".audit"] = false;

	$tdatacouriercompanies[".locking"] = false;


$pages = $tdatacouriercompanies[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacouriercompanies[".edit"] = true;
	$tdatacouriercompanies[".afterEditAction"] = 1;
	$tdatacouriercompanies[".closePopupAfterEdit"] = 1;
	$tdatacouriercompanies[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacouriercompanies[".add"] = true;
$tdatacouriercompanies[".afterAddAction"] = 1;
$tdatacouriercompanies[".closePopupAfterAdd"] = 1;
$tdatacouriercompanies[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacouriercompanies[".list"] = true;
}



$tdatacouriercompanies[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacouriercompanies[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacouriercompanies[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacouriercompanies[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacouriercompanies[".printFriendly"] = true;
}



$tdatacouriercompanies[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacouriercompanies[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacouriercompanies[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacouriercompanies[".isUseAjaxSuggest"] = false;

$tdatacouriercompanies[".rowHighlite"] = true;



																																																																																																																											

$tdatacouriercompanies[".ajaxCodeSnippetAdded"] = false;

$tdatacouriercompanies[".buttonsAdded"] = false;

$tdatacouriercompanies[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacouriercompanies[".isUseTimeForSearch"] = false;


$tdatacouriercompanies[".badgeColor"] = "DB7093";


$tdatacouriercompanies[".allSearchFields"] = array();
$tdatacouriercompanies[".filterFields"] = array();
$tdatacouriercompanies[".requiredSearchFields"] = array();

$tdatacouriercompanies[".googleLikeFields"] = array();
$tdatacouriercompanies[".googleLikeFields"][] = "courier";



$tdatacouriercompanies[".tableType"] = "list";

$tdatacouriercompanies[".printerPageOrientation"] = 0;
$tdatacouriercompanies[".nPrinterPageScale"] = 100;

$tdatacouriercompanies[".nPrinterSplitRecords"] = 40;

$tdatacouriercompanies[".geocodingEnabled"] = false;






$tdatacouriercompanies[".searchIsRequiredForFilters"] = true;

$tdatacouriercompanies[".noRecordsFirstPage"] = true;



$tdatacouriercompanies[".pageSize"] = 20;

$tdatacouriercompanies[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacouriercompanies[".strOrderBy"] = $tstrOrderBy;

$tdatacouriercompanies[".orderindexes"] = array();


$tdatacouriercompanies[".sqlHead"] = "SELECT courier";
$tdatacouriercompanies[".sqlFrom"] = "FROM dbo.courierCompanies";
$tdatacouriercompanies[".sqlWhereExpr"] = "";
$tdatacouriercompanies[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacouriercompanies[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacouriercompanies[".arrGroupsPerPage"] = $arrGPP;

$tdatacouriercompanies[".highlightSearchResults"] = true;

$tableKeyscouriercompanies = array();
$tableKeyscouriercompanies[] = "courier";
$tdatacouriercompanies[".Keys"] = $tableKeyscouriercompanies;


$tdatacouriercompanies[".hideMobileList"] = array();




//	courier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "courier";
	$fdata["GoodName"] = "courier";
	$fdata["ownerTable"] = "dbo.courierCompanies";
	$fdata["Label"] = GetFieldLabel("dbo_courierCompanies","courier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "courier";

	
	
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


	$tdatacouriercompanies["courier"] = $fdata;
		$tdatacouriercompanies[".searchableFields"][] = "courier";


$tables_data["dbo.courierCompanies"]=&$tdatacouriercompanies;
$field_labels["dbo_courierCompanies"] = &$fieldLabelscouriercompanies;
$fieldToolTips["dbo_courierCompanies"] = &$fieldToolTipscouriercompanies;
$placeHolders["dbo_courierCompanies"] = &$placeHolderscouriercompanies;
$page_titles["dbo_courierCompanies"] = &$pageTitlescouriercompanies;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.courierCompanies"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.courierCompanies"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_couriercompanies()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "courier";
$proto0["m_strFrom"] = "FROM dbo.courierCompanies";
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
	"m_strName" => "courier",
	"m_strTable" => "dbo.courierCompanies",
	"m_srcTableName" => "dbo.courierCompanies"
));

$proto6["m_sql"] = "courier";
$proto6["m_srcTableName"] = "dbo.courierCompanies";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.courierCompanies";
$proto9["m_srcTableName"] = "dbo.courierCompanies";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "courier";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.courierCompanies";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.courierCompanies";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.courierCompanies";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_couriercompanies = createSqlQuery_couriercompanies();


	
		;

	

$tdatacouriercompanies[".sqlquery"] = $queryData_couriercompanies;



$tableEvents["dbo.courierCompanies"] = new eventsBase;
$tdatacouriercompanies[".hasEvents"] = false;

?>