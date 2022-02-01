<?php
$tdatavfullcallstatuses = array();
$tdatavfullcallstatuses[".searchableFields"] = array();
$tdatavfullcallstatuses[".ShortName"] = "vfullcallstatuses";
$tdatavfullcallstatuses[".OwnerID"] = "";
$tdatavfullcallstatuses[".OriginalTable"] = "dbo.vFullCallStatuses";


$tdatavfullcallstatuses[".pagesByType"] = my_json_decode( "{}" );
$tdatavfullcallstatuses[".originalPagesByType"] = $tdatavfullcallstatuses[".pagesByType"];
$tdatavfullcallstatuses[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatavfullcallstatuses[".originalPages"] = $tdatavfullcallstatuses[".pages"];
$tdatavfullcallstatuses[".defaultPages"] = my_json_decode( "{}" );
$tdatavfullcallstatuses[".originalDefaultPages"] = $tdatavfullcallstatuses[".defaultPages"];

//	field labels
$fieldLabelsvfullcallstatuses = array();
$fieldToolTipsvfullcallstatuses = array();
$pageTitlesvfullcallstatuses = array();
$placeHoldersvfullcallstatuses = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvfullcallstatuses["Greek"] = array();
	$fieldToolTipsvfullcallstatuses["Greek"] = array();
	$placeHoldersvfullcallstatuses["Greek"] = array();
	$pageTitlesvfullcallstatuses["Greek"] = array();
	$fieldLabelsvfullcallstatuses["Greek"]["id"] = "Id";
	$fieldToolTipsvfullcallstatuses["Greek"]["id"] = "";
	$placeHoldersvfullcallstatuses["Greek"]["id"] = "";
	$fieldLabelsvfullcallstatuses["Greek"]["fullCallStatus"] = "Full Call Status";
	$fieldToolTipsvfullcallstatuses["Greek"]["fullCallStatus"] = "";
	$placeHoldersvfullcallstatuses["Greek"]["fullCallStatus"] = "";
	if (count($fieldToolTipsvfullcallstatuses["Greek"]))
		$tdatavfullcallstatuses[".isUseToolTips"] = true;
}


	$tdatavfullcallstatuses[".NCSearch"] = true;



$tdatavfullcallstatuses[".shortTableName"] = "vfullcallstatuses";
$tdatavfullcallstatuses[".nSecOptions"] = 0;

$tdatavfullcallstatuses[".mainTableOwnerID"] = "";
$tdatavfullcallstatuses[".entityType"] = 0;
$tdatavfullcallstatuses[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavfullcallstatuses[".strOriginalTableName"] = "dbo.vFullCallStatuses";

	



$tdatavfullcallstatuses[".showAddInPopup"] = false;

$tdatavfullcallstatuses[".showEditInPopup"] = false;

$tdatavfullcallstatuses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavfullcallstatuses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavfullcallstatuses[".listAjax"] = false;
//	temporary
$tdatavfullcallstatuses[".listAjax"] = false;

	$tdatavfullcallstatuses[".audit"] = false;

	$tdatavfullcallstatuses[".locking"] = false;


$pages = $tdatavfullcallstatuses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavfullcallstatuses[".edit"] = true;
	$tdatavfullcallstatuses[".afterEditAction"] = 1;
	$tdatavfullcallstatuses[".closePopupAfterEdit"] = 1;
	$tdatavfullcallstatuses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavfullcallstatuses[".add"] = true;
$tdatavfullcallstatuses[".afterAddAction"] = 1;
$tdatavfullcallstatuses[".closePopupAfterAdd"] = 1;
$tdatavfullcallstatuses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavfullcallstatuses[".list"] = true;
}



$tdatavfullcallstatuses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavfullcallstatuses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavfullcallstatuses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavfullcallstatuses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavfullcallstatuses[".printFriendly"] = true;
}



$tdatavfullcallstatuses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavfullcallstatuses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavfullcallstatuses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavfullcallstatuses[".isUseAjaxSuggest"] = true;

$tdatavfullcallstatuses[".rowHighlite"] = true;



																																																																																																																											

$tdatavfullcallstatuses[".ajaxCodeSnippetAdded"] = false;

$tdatavfullcallstatuses[".buttonsAdded"] = false;

$tdatavfullcallstatuses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavfullcallstatuses[".isUseTimeForSearch"] = false;


$tdatavfullcallstatuses[".badgeColor"] = "DB7093";


$tdatavfullcallstatuses[".allSearchFields"] = array();
$tdatavfullcallstatuses[".filterFields"] = array();
$tdatavfullcallstatuses[".requiredSearchFields"] = array();

$tdatavfullcallstatuses[".googleLikeFields"] = array();
$tdatavfullcallstatuses[".googleLikeFields"][] = "id";
$tdatavfullcallstatuses[".googleLikeFields"][] = "fullCallStatus";



$tdatavfullcallstatuses[".tableType"] = "list";

$tdatavfullcallstatuses[".printerPageOrientation"] = 0;
$tdatavfullcallstatuses[".nPrinterPageScale"] = 100;

$tdatavfullcallstatuses[".nPrinterSplitRecords"] = 40;

$tdatavfullcallstatuses[".geocodingEnabled"] = false;










$tdatavfullcallstatuses[".pageSize"] = 20;

$tdatavfullcallstatuses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavfullcallstatuses[".strOrderBy"] = $tstrOrderBy;

$tdatavfullcallstatuses[".orderindexes"] = array();


$tdatavfullcallstatuses[".sqlHead"] = "SELECT id,  	fullCallStatus";
$tdatavfullcallstatuses[".sqlFrom"] = "FROM dbo.vFullCallStatuses";
$tdatavfullcallstatuses[".sqlWhereExpr"] = "";
$tdatavfullcallstatuses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavfullcallstatuses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavfullcallstatuses[".arrGroupsPerPage"] = $arrGPP;

$tdatavfullcallstatuses[".highlightSearchResults"] = true;

$tableKeysvfullcallstatuses = array();
$tdatavfullcallstatuses[".Keys"] = $tableKeysvfullcallstatuses;


$tdatavfullcallstatuses[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.vFullCallStatuses";
	$fdata["Label"] = GetFieldLabel("dbo_vFullCallStatuses","id");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatavfullcallstatuses["id"] = $fdata;
		$tdatavfullcallstatuses[".searchableFields"][] = "id";
//	fullCallStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullCallStatus";
	$fdata["GoodName"] = "fullCallStatus";
	$fdata["ownerTable"] = "dbo.vFullCallStatuses";
	$fdata["Label"] = GetFieldLabel("dbo_vFullCallStatuses","fullCallStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fullCallStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullCallStatus";

	
	
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
			$edata["EditParams"].= " maxlength=158";

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


	$tdatavfullcallstatuses["fullCallStatus"] = $fdata;
		$tdatavfullcallstatuses[".searchableFields"][] = "fullCallStatus";


$tables_data["dbo.vFullCallStatuses"]=&$tdatavfullcallstatuses;
$field_labels["dbo_vFullCallStatuses"] = &$fieldLabelsvfullcallstatuses;
$fieldToolTips["dbo_vFullCallStatuses"] = &$fieldToolTipsvfullcallstatuses;
$placeHolders["dbo_vFullCallStatuses"] = &$placeHoldersvfullcallstatuses;
$page_titles["dbo_vFullCallStatuses"] = &$pageTitlesvfullcallstatuses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.vFullCallStatuses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.vFullCallStatuses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vfullcallstatuses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fullCallStatus";
$proto0["m_strFrom"] = "FROM dbo.vFullCallStatuses";
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
	"m_strTable" => "dbo.vFullCallStatuses",
	"m_srcTableName" => "dbo.vFullCallStatuses"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.vFullCallStatuses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullCallStatus",
	"m_strTable" => "dbo.vFullCallStatuses",
	"m_srcTableName" => "dbo.vFullCallStatuses"
));

$proto8["m_sql"] = "fullCallStatus";
$proto8["m_srcTableName"] = "dbo.vFullCallStatuses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.vFullCallStatuses";
$proto11["m_srcTableName"] = "dbo.vFullCallStatuses";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "fullCallStatus";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.vFullCallStatuses";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.vFullCallStatuses";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.vFullCallStatuses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vfullcallstatuses = createSqlQuery_vfullcallstatuses();


	
		;

		

$tdatavfullcallstatuses[".sqlquery"] = $queryData_vfullcallstatuses;



$tableEvents["dbo.vFullCallStatuses"] = new eventsBase;
$tdatavfullcallstatuses[".hasEvents"] = false;

?>