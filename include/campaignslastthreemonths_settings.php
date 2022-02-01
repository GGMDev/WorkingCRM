<?php
$tdatacampaignslastthreemonths = array();
$tdatacampaignslastthreemonths[".searchableFields"] = array();
$tdatacampaignslastthreemonths[".ShortName"] = "campaignslastthreemonths";
$tdatacampaignslastthreemonths[".OwnerID"] = "";
$tdatacampaignslastthreemonths[".OriginalTable"] = "dbo.campaignsLastThreeMonths";


$tdatacampaignslastthreemonths[".pagesByType"] = my_json_decode( "{}" );
$tdatacampaignslastthreemonths[".originalPagesByType"] = $tdatacampaignslastthreemonths[".pagesByType"];
$tdatacampaignslastthreemonths[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacampaignslastthreemonths[".originalPages"] = $tdatacampaignslastthreemonths[".pages"];
$tdatacampaignslastthreemonths[".defaultPages"] = my_json_decode( "{}" );
$tdatacampaignslastthreemonths[".originalDefaultPages"] = $tdatacampaignslastthreemonths[".defaultPages"];

//	field labels
$fieldLabelscampaignslastthreemonths = array();
$fieldToolTipscampaignslastthreemonths = array();
$pageTitlescampaignslastthreemonths = array();
$placeHolderscampaignslastthreemonths = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscampaignslastthreemonths["Greek"] = array();
	$fieldToolTipscampaignslastthreemonths["Greek"] = array();
	$placeHolderscampaignslastthreemonths["Greek"] = array();
	$pageTitlescampaignslastthreemonths["Greek"] = array();
	$fieldLabelscampaignslastthreemonths["Greek"]["dialerCampaign"] = "Dialer Campaign";
	$fieldToolTipscampaignslastthreemonths["Greek"]["dialerCampaign"] = "";
	$placeHolderscampaignslastthreemonths["Greek"]["dialerCampaign"] = "";
	if (count($fieldToolTipscampaignslastthreemonths["Greek"]))
		$tdatacampaignslastthreemonths[".isUseToolTips"] = true;
}


	$tdatacampaignslastthreemonths[".NCSearch"] = true;



$tdatacampaignslastthreemonths[".shortTableName"] = "campaignslastthreemonths";
$tdatacampaignslastthreemonths[".nSecOptions"] = 0;

$tdatacampaignslastthreemonths[".mainTableOwnerID"] = "";
$tdatacampaignslastthreemonths[".entityType"] = 0;
$tdatacampaignslastthreemonths[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacampaignslastthreemonths[".strOriginalTableName"] = "dbo.campaignsLastThreeMonths";

	



$tdatacampaignslastthreemonths[".showAddInPopup"] = false;

$tdatacampaignslastthreemonths[".showEditInPopup"] = false;

$tdatacampaignslastthreemonths[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacampaignslastthreemonths[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacampaignslastthreemonths[".listAjax"] = false;
//	temporary
$tdatacampaignslastthreemonths[".listAjax"] = false;

	$tdatacampaignslastthreemonths[".audit"] = false;

	$tdatacampaignslastthreemonths[".locking"] = false;


$pages = $tdatacampaignslastthreemonths[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacampaignslastthreemonths[".edit"] = true;
	$tdatacampaignslastthreemonths[".afterEditAction"] = 1;
	$tdatacampaignslastthreemonths[".closePopupAfterEdit"] = 1;
	$tdatacampaignslastthreemonths[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacampaignslastthreemonths[".add"] = true;
$tdatacampaignslastthreemonths[".afterAddAction"] = 1;
$tdatacampaignslastthreemonths[".closePopupAfterAdd"] = 1;
$tdatacampaignslastthreemonths[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacampaignslastthreemonths[".list"] = true;
}



$tdatacampaignslastthreemonths[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacampaignslastthreemonths[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacampaignslastthreemonths[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacampaignslastthreemonths[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacampaignslastthreemonths[".printFriendly"] = true;
}



$tdatacampaignslastthreemonths[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacampaignslastthreemonths[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacampaignslastthreemonths[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacampaignslastthreemonths[".isUseAjaxSuggest"] = false;

$tdatacampaignslastthreemonths[".rowHighlite"] = true;



																																																																																																																											

$tdatacampaignslastthreemonths[".ajaxCodeSnippetAdded"] = false;

$tdatacampaignslastthreemonths[".buttonsAdded"] = false;

$tdatacampaignslastthreemonths[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacampaignslastthreemonths[".isUseTimeForSearch"] = false;


$tdatacampaignslastthreemonths[".badgeColor"] = "778899";


$tdatacampaignslastthreemonths[".allSearchFields"] = array();
$tdatacampaignslastthreemonths[".filterFields"] = array();
$tdatacampaignslastthreemonths[".requiredSearchFields"] = array();

$tdatacampaignslastthreemonths[".googleLikeFields"] = array();
$tdatacampaignslastthreemonths[".googleLikeFields"][] = "dialerCampaign";



$tdatacampaignslastthreemonths[".tableType"] = "list";

$tdatacampaignslastthreemonths[".printerPageOrientation"] = 0;
$tdatacampaignslastthreemonths[".nPrinterPageScale"] = 100;

$tdatacampaignslastthreemonths[".nPrinterSplitRecords"] = 40;

$tdatacampaignslastthreemonths[".geocodingEnabled"] = false;






$tdatacampaignslastthreemonths[".searchIsRequiredForFilters"] = true;

$tdatacampaignslastthreemonths[".noRecordsFirstPage"] = true;



$tdatacampaignslastthreemonths[".pageSize"] = 20;

$tdatacampaignslastthreemonths[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacampaignslastthreemonths[".strOrderBy"] = $tstrOrderBy;

$tdatacampaignslastthreemonths[".orderindexes"] = array();


$tdatacampaignslastthreemonths[".sqlHead"] = "SELECT dialerCampaign";
$tdatacampaignslastthreemonths[".sqlFrom"] = "FROM dbo.campaignsLastThreeMonths";
$tdatacampaignslastthreemonths[".sqlWhereExpr"] = "";
$tdatacampaignslastthreemonths[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacampaignslastthreemonths[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacampaignslastthreemonths[".arrGroupsPerPage"] = $arrGPP;

$tdatacampaignslastthreemonths[".highlightSearchResults"] = true;

$tableKeyscampaignslastthreemonths = array();
$tdatacampaignslastthreemonths[".Keys"] = $tableKeyscampaignslastthreemonths;


$tdatacampaignslastthreemonths[".hideMobileList"] = array();




//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.campaignsLastThreeMonths";
	$fdata["Label"] = GetFieldLabel("dbo_campaignsLastThreeMonths","dialerCampaign");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerCampaign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerCampaign";

	
	
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


	$tdatacampaignslastthreemonths["dialerCampaign"] = $fdata;
		$tdatacampaignslastthreemonths[".searchableFields"][] = "dialerCampaign";


$tables_data["dbo.campaignsLastThreeMonths"]=&$tdatacampaignslastthreemonths;
$field_labels["dbo_campaignsLastThreeMonths"] = &$fieldLabelscampaignslastthreemonths;
$fieldToolTips["dbo_campaignsLastThreeMonths"] = &$fieldToolTipscampaignslastthreemonths;
$placeHolders["dbo_campaignsLastThreeMonths"] = &$placeHolderscampaignslastthreemonths;
$page_titles["dbo_campaignsLastThreeMonths"] = &$pageTitlescampaignslastthreemonths;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.campaignsLastThreeMonths"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.campaignsLastThreeMonths"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_campaignslastthreemonths()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dialerCampaign";
$proto0["m_strFrom"] = "FROM dbo.campaignsLastThreeMonths";
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
	"m_strName" => "dialerCampaign",
	"m_strTable" => "dbo.campaignsLastThreeMonths",
	"m_srcTableName" => "dbo.campaignsLastThreeMonths"
));

$proto6["m_sql"] = "dialerCampaign";
$proto6["m_srcTableName"] = "dbo.campaignsLastThreeMonths";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.campaignsLastThreeMonths";
$proto9["m_srcTableName"] = "dbo.campaignsLastThreeMonths";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "dialerCampaign";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.campaignsLastThreeMonths";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.campaignsLastThreeMonths";
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
$proto0["m_srcTableName"]="dbo.campaignsLastThreeMonths";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_campaignslastthreemonths = createSqlQuery_campaignslastthreemonths();


	
		;

	

$tdatacampaignslastthreemonths[".sqlquery"] = $queryData_campaignslastthreemonths;



$tableEvents["dbo.campaignsLastThreeMonths"] = new eventsBase;
$tdatacampaignslastthreemonths[".hasEvents"] = false;

?>