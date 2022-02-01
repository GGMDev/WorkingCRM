<?php
$tdatavagentperformancereportwithappsv21 = array();
$tdatavagentperformancereportwithappsv21[".searchableFields"] = array();
$tdatavagentperformancereportwithappsv21[".ShortName"] = "vagentperformancereportwithappsv21";
$tdatavagentperformancereportwithappsv21[".OwnerID"] = "";
$tdatavagentperformancereportwithappsv21[".OriginalTable"] = "dbo.vAgentPerformanceReportWithAppsV2";


$tdatavagentperformancereportwithappsv21[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavagentperformancereportwithappsv21[".originalPagesByType"] = $tdatavagentperformancereportwithappsv21[".pagesByType"];
$tdatavagentperformancereportwithappsv21[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavagentperformancereportwithappsv21[".originalPages"] = $tdatavagentperformancereportwithappsv21[".pages"];
$tdatavagentperformancereportwithappsv21[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavagentperformancereportwithappsv21[".originalDefaultPages"] = $tdatavagentperformancereportwithappsv21[".defaultPages"];

//	field labels
$fieldLabelsvagentperformancereportwithappsv21 = array();
$fieldToolTipsvagentperformancereportwithappsv21 = array();
$pageTitlesvagentperformancereportwithappsv21 = array();
$placeHoldersvagentperformancereportwithappsv21 = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvagentperformancereportwithappsv21["Greek"] = array();
	$fieldToolTipsvagentperformancereportwithappsv21["Greek"] = array();
	$placeHoldersvagentperformancereportwithappsv21["Greek"] = array();
	$pageTitlesvagentperformancereportwithappsv21["Greek"] = array();
	$fieldLabelsvagentperformancereportwithappsv21["Greek"]["callStatus"] = "Call Status";
	$fieldToolTipsvagentperformancereportwithappsv21["Greek"]["callStatus"] = "";
	$placeHoldersvagentperformancereportwithappsv21["Greek"]["callStatus"] = "";
	if (count($fieldToolTipsvagentperformancereportwithappsv21["Greek"]))
		$tdatavagentperformancereportwithappsv21[".isUseToolTips"] = true;
}


	$tdatavagentperformancereportwithappsv21[".NCSearch"] = true;



$tdatavagentperformancereportwithappsv21[".shortTableName"] = "vagentperformancereportwithappsv21";
$tdatavagentperformancereportwithappsv21[".nSecOptions"] = 0;

$tdatavagentperformancereportwithappsv21[".mainTableOwnerID"] = "";
$tdatavagentperformancereportwithappsv21[".entityType"] = 1;
$tdatavagentperformancereportwithappsv21[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavagentperformancereportwithappsv21[".strOriginalTableName"] = "dbo.vAgentPerformanceReportWithAppsV2";

	



$tdatavagentperformancereportwithappsv21[".showAddInPopup"] = false;

$tdatavagentperformancereportwithappsv21[".showEditInPopup"] = false;

$tdatavagentperformancereportwithappsv21[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavagentperformancereportwithappsv21[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavagentperformancereportwithappsv21[".listAjax"] = false;
//	temporary
$tdatavagentperformancereportwithappsv21[".listAjax"] = false;

	$tdatavagentperformancereportwithappsv21[".audit"] = false;

	$tdatavagentperformancereportwithappsv21[".locking"] = false;


$pages = $tdatavagentperformancereportwithappsv21[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavagentperformancereportwithappsv21[".edit"] = true;
	$tdatavagentperformancereportwithappsv21[".afterEditAction"] = 1;
	$tdatavagentperformancereportwithappsv21[".closePopupAfterEdit"] = 1;
	$tdatavagentperformancereportwithappsv21[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavagentperformancereportwithappsv21[".add"] = true;
$tdatavagentperformancereportwithappsv21[".afterAddAction"] = 1;
$tdatavagentperformancereportwithappsv21[".closePopupAfterAdd"] = 1;
$tdatavagentperformancereportwithappsv21[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavagentperformancereportwithappsv21[".list"] = true;
}



$tdatavagentperformancereportwithappsv21[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavagentperformancereportwithappsv21[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavagentperformancereportwithappsv21[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavagentperformancereportwithappsv21[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavagentperformancereportwithappsv21[".printFriendly"] = true;
}



$tdatavagentperformancereportwithappsv21[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavagentperformancereportwithappsv21[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavagentperformancereportwithappsv21[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavagentperformancereportwithappsv21[".isUseAjaxSuggest"] = true;

$tdatavagentperformancereportwithappsv21[".rowHighlite"] = true;



																																																																																																																											

$tdatavagentperformancereportwithappsv21[".ajaxCodeSnippetAdded"] = false;

$tdatavagentperformancereportwithappsv21[".buttonsAdded"] = false;

$tdatavagentperformancereportwithappsv21[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavagentperformancereportwithappsv21[".isUseTimeForSearch"] = false;


$tdatavagentperformancereportwithappsv21[".badgeColor"] = "5F9EA0";


$tdatavagentperformancereportwithappsv21[".allSearchFields"] = array();
$tdatavagentperformancereportwithappsv21[".filterFields"] = array();
$tdatavagentperformancereportwithappsv21[".requiredSearchFields"] = array();

$tdatavagentperformancereportwithappsv21[".googleLikeFields"] = array();
$tdatavagentperformancereportwithappsv21[".googleLikeFields"][] = "callStatus";



$tdatavagentperformancereportwithappsv21[".tableType"] = "list";

$tdatavagentperformancereportwithappsv21[".printerPageOrientation"] = 0;
$tdatavagentperformancereportwithappsv21[".nPrinterPageScale"] = 100;

$tdatavagentperformancereportwithappsv21[".nPrinterSplitRecords"] = 40;

$tdatavagentperformancereportwithappsv21[".geocodingEnabled"] = false;










$tdatavagentperformancereportwithappsv21[".pageSize"] = 20;

$tdatavagentperformancereportwithappsv21[".warnLeavingPages"] = true;



$tstrOrderBy = "order by callStatus";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavagentperformancereportwithappsv21[".strOrderBy"] = $tstrOrderBy;

$tdatavagentperformancereportwithappsv21[".orderindexes"] = array();
	$tdatavagentperformancereportwithappsv21[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "callStatus");



$tdatavagentperformancereportwithappsv21[".sqlHead"] = "SELECT distinct callStatus";
$tdatavagentperformancereportwithappsv21[".sqlFrom"] = "FROM dbo.vAgentPerformanceReportWithAppsV2";
$tdatavagentperformancereportwithappsv21[".sqlWhereExpr"] = "";
$tdatavagentperformancereportwithappsv21[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavagentperformancereportwithappsv21[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavagentperformancereportwithappsv21[".arrGroupsPerPage"] = $arrGPP;

$tdatavagentperformancereportwithappsv21[".highlightSearchResults"] = true;

$tableKeysvagentperformancereportwithappsv21 = array();
$tdatavagentperformancereportwithappsv21[".Keys"] = $tableKeysvagentperformancereportwithappsv21;


$tdatavagentperformancereportwithappsv21[".hideMobileList"] = array();




//	callStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callStatus";
	$fdata["GoodName"] = "callStatus";
	$fdata["ownerTable"] = "dbo.vAgentPerformanceReportWithAppsV2";
	$fdata["Label"] = GetFieldLabel("dbo_vAgentPerformanceReportWithAppsV21","callStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "callStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callStatus";

	
	
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


	$tdatavagentperformancereportwithappsv21["callStatus"] = $fdata;
		$tdatavagentperformancereportwithappsv21[".searchableFields"][] = "callStatus";


$tables_data["dbo.vAgentPerformanceReportWithAppsV21"]=&$tdatavagentperformancereportwithappsv21;
$field_labels["dbo_vAgentPerformanceReportWithAppsV21"] = &$fieldLabelsvagentperformancereportwithappsv21;
$fieldToolTips["dbo_vAgentPerformanceReportWithAppsV21"] = &$fieldToolTipsvagentperformancereportwithappsv21;
$placeHolders["dbo_vAgentPerformanceReportWithAppsV21"] = &$placeHoldersvagentperformancereportwithappsv21;
$page_titles["dbo_vAgentPerformanceReportWithAppsV21"] = &$pageTitlesvagentperformancereportwithappsv21;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.vAgentPerformanceReportWithAppsV21"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vAgentPerformanceReportWithAppsV21"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vagentperformancereportwithappsv21()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT distinct";
$proto0["m_strFieldList"] = "callStatus";
$proto0["m_strFrom"] = "FROM dbo.vAgentPerformanceReportWithAppsV2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by callStatus";
	
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
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV21"
));

$proto6["m_sql"] = "callStatus";
$proto6["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV21";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto9["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV21";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "callid";
$proto9["m_columns"][] = "dialerAgent";
$proto9["m_columns"][] = "dialerPhone";
$proto9["m_columns"][] = "calldate";
$proto9["m_columns"][] = "denialReason";
$proto9["m_columns"][] = "isPositive";
$proto9["m_columns"][] = "callStatus";
$proto9["m_columns"][] = "dialerCampaign";
$proto9["m_columns"][] = "dialerList";
$proto9["m_columns"][] = "talkTime";
$proto9["m_columns"][] = "typingTime";
$proto9["m_columns"][] = "totalCallTime";
$proto9["m_columns"][] = "novaTotalApps";
$proto9["m_columns"][] = "voltonTotalApps";
$proto9["m_columns"][] = "vsalesStatus";
$proto9["m_columns"][] = "vStatusCount";
$proto9["m_columns"][] = "nSalesStatus";
$proto9["m_columns"][] = "nStatusCount";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.vAgentPerformanceReportWithAppsV2";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.vAgentPerformanceReportWithAppsV21";
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
												$proto12=array();
						$obj = new SQLField(array(
	"m_strName" => "callStatus",
	"m_strTable" => "dbo.vAgentPerformanceReportWithAppsV2",
	"m_srcTableName" => "dbo.vAgentPerformanceReportWithAppsV21"
));

$proto12["m_column"]=$obj;
$proto12["m_bAsc"] = 1;
$proto12["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto12);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.vAgentPerformanceReportWithAppsV21";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vagentperformancereportwithappsv21 = createSqlQuery_vagentperformancereportwithappsv21();


	
		;

	

$tdatavagentperformancereportwithappsv21[".sqlquery"] = $queryData_vagentperformancereportwithappsv21;



$tableEvents["dbo.vAgentPerformanceReportWithAppsV21"] = new eventsBase;
$tdatavagentperformancereportwithappsv21[".hasEvents"] = false;

?>