<?php
$tdatalistslastthreemonths = array();
$tdatalistslastthreemonths[".searchableFields"] = array();
$tdatalistslastthreemonths[".ShortName"] = "listslastthreemonths";
$tdatalistslastthreemonths[".OwnerID"] = "";
$tdatalistslastthreemonths[".OriginalTable"] = "dbo.listsLastThreeMonths";


$tdatalistslastthreemonths[".pagesByType"] = my_json_decode( "{}" );
$tdatalistslastthreemonths[".originalPagesByType"] = $tdatalistslastthreemonths[".pagesByType"];
$tdatalistslastthreemonths[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatalistslastthreemonths[".originalPages"] = $tdatalistslastthreemonths[".pages"];
$tdatalistslastthreemonths[".defaultPages"] = my_json_decode( "{}" );
$tdatalistslastthreemonths[".originalDefaultPages"] = $tdatalistslastthreemonths[".defaultPages"];

//	field labels
$fieldLabelslistslastthreemonths = array();
$fieldToolTipslistslastthreemonths = array();
$pageTitleslistslastthreemonths = array();
$placeHolderslistslastthreemonths = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelslistslastthreemonths["Greek"] = array();
	$fieldToolTipslistslastthreemonths["Greek"] = array();
	$placeHolderslistslastthreemonths["Greek"] = array();
	$pageTitleslistslastthreemonths["Greek"] = array();
	$fieldLabelslistslastthreemonths["Greek"]["dialerList"] = "Dialer List";
	$fieldToolTipslistslastthreemonths["Greek"]["dialerList"] = "";
	$placeHolderslistslastthreemonths["Greek"]["dialerList"] = "";
	if (count($fieldToolTipslistslastthreemonths["Greek"]))
		$tdatalistslastthreemonths[".isUseToolTips"] = true;
}


	$tdatalistslastthreemonths[".NCSearch"] = true;



$tdatalistslastthreemonths[".shortTableName"] = "listslastthreemonths";
$tdatalistslastthreemonths[".nSecOptions"] = 0;

$tdatalistslastthreemonths[".mainTableOwnerID"] = "";
$tdatalistslastthreemonths[".entityType"] = 0;
$tdatalistslastthreemonths[".connId"] = "CallCenter_at_10_41_2_31";


$tdatalistslastthreemonths[".strOriginalTableName"] = "dbo.listsLastThreeMonths";

	



$tdatalistslastthreemonths[".showAddInPopup"] = false;

$tdatalistslastthreemonths[".showEditInPopup"] = false;

$tdatalistslastthreemonths[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalistslastthreemonths[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalistslastthreemonths[".listAjax"] = false;
//	temporary
$tdatalistslastthreemonths[".listAjax"] = false;

	$tdatalistslastthreemonths[".audit"] = false;

	$tdatalistslastthreemonths[".locking"] = false;


$pages = $tdatalistslastthreemonths[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalistslastthreemonths[".edit"] = true;
	$tdatalistslastthreemonths[".afterEditAction"] = 1;
	$tdatalistslastthreemonths[".closePopupAfterEdit"] = 1;
	$tdatalistslastthreemonths[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalistslastthreemonths[".add"] = true;
$tdatalistslastthreemonths[".afterAddAction"] = 1;
$tdatalistslastthreemonths[".closePopupAfterAdd"] = 1;
$tdatalistslastthreemonths[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalistslastthreemonths[".list"] = true;
}



$tdatalistslastthreemonths[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalistslastthreemonths[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalistslastthreemonths[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalistslastthreemonths[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalistslastthreemonths[".printFriendly"] = true;
}



$tdatalistslastthreemonths[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalistslastthreemonths[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalistslastthreemonths[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalistslastthreemonths[".isUseAjaxSuggest"] = false;

$tdatalistslastthreemonths[".rowHighlite"] = true;



																																																																																																																											

$tdatalistslastthreemonths[".ajaxCodeSnippetAdded"] = false;

$tdatalistslastthreemonths[".buttonsAdded"] = false;

$tdatalistslastthreemonths[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalistslastthreemonths[".isUseTimeForSearch"] = false;


$tdatalistslastthreemonths[".badgeColor"] = "1E90FF";


$tdatalistslastthreemonths[".allSearchFields"] = array();
$tdatalistslastthreemonths[".filterFields"] = array();
$tdatalistslastthreemonths[".requiredSearchFields"] = array();

$tdatalistslastthreemonths[".googleLikeFields"] = array();
$tdatalistslastthreemonths[".googleLikeFields"][] = "dialerList";



$tdatalistslastthreemonths[".tableType"] = "list";

$tdatalistslastthreemonths[".printerPageOrientation"] = 0;
$tdatalistslastthreemonths[".nPrinterPageScale"] = 100;

$tdatalistslastthreemonths[".nPrinterSplitRecords"] = 40;

$tdatalistslastthreemonths[".geocodingEnabled"] = false;






$tdatalistslastthreemonths[".searchIsRequiredForFilters"] = true;

$tdatalistslastthreemonths[".noRecordsFirstPage"] = true;



$tdatalistslastthreemonths[".pageSize"] = 20;

$tdatalistslastthreemonths[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalistslastthreemonths[".strOrderBy"] = $tstrOrderBy;

$tdatalistslastthreemonths[".orderindexes"] = array();


$tdatalistslastthreemonths[".sqlHead"] = "SELECT dialerList";
$tdatalistslastthreemonths[".sqlFrom"] = "FROM dbo.listsLastThreeMonths";
$tdatalistslastthreemonths[".sqlWhereExpr"] = "";
$tdatalistslastthreemonths[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalistslastthreemonths[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistslastthreemonths[".arrGroupsPerPage"] = $arrGPP;

$tdatalistslastthreemonths[".highlightSearchResults"] = true;

$tableKeyslistslastthreemonths = array();
$tdatalistslastthreemonths[".Keys"] = $tableKeyslistslastthreemonths;


$tdatalistslastthreemonths[".hideMobileList"] = array();




//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.listsLastThreeMonths";
	$fdata["Label"] = GetFieldLabel("dbo_listsLastThreeMonths","dialerList");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerList";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatalistslastthreemonths["dialerList"] = $fdata;
		$tdatalistslastthreemonths[".searchableFields"][] = "dialerList";


$tables_data["dbo.listsLastThreeMonths"]=&$tdatalistslastthreemonths;
$field_labels["dbo_listsLastThreeMonths"] = &$fieldLabelslistslastthreemonths;
$fieldToolTips["dbo_listsLastThreeMonths"] = &$fieldToolTipslistslastthreemonths;
$placeHolders["dbo_listsLastThreeMonths"] = &$placeHolderslistslastthreemonths;
$page_titles["dbo_listsLastThreeMonths"] = &$pageTitleslistslastthreemonths;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.listsLastThreeMonths"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.listsLastThreeMonths"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_listslastthreemonths()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dialerList";
$proto0["m_strFrom"] = "FROM dbo.listsLastThreeMonths";
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
	"m_strName" => "dialerList",
	"m_strTable" => "dbo.listsLastThreeMonths",
	"m_srcTableName" => "dbo.listsLastThreeMonths"
));

$proto6["m_sql"] = "dialerList";
$proto6["m_srcTableName"] = "dbo.listsLastThreeMonths";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.listsLastThreeMonths";
$proto9["m_srcTableName"] = "dbo.listsLastThreeMonths";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "dialerList";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.listsLastThreeMonths";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.listsLastThreeMonths";
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
$proto0["m_srcTableName"]="dbo.listsLastThreeMonths";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_listslastthreemonths = createSqlQuery_listslastthreemonths();


	
		;

	

$tdatalistslastthreemonths[".sqlquery"] = $queryData_listslastthreemonths;



$tableEvents["dbo.listsLastThreeMonths"] = new eventsBase;
$tdatalistslastthreemonths[".hasEvents"] = false;

?>