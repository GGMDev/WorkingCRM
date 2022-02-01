<?php
$tdatacallcenter_uggroups = array();
$tdatacallcenter_uggroups[".searchableFields"] = array();
$tdatacallcenter_uggroups[".ShortName"] = "callcenter_uggroups";
$tdatacallcenter_uggroups[".OwnerID"] = "";
$tdatacallcenter_uggroups[".OriginalTable"] = "dbo.callcenter_uggroups";


$tdatacallcenter_uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"view\":[\"view\"]}" );
$tdatacallcenter_uggroups[".originalPagesByType"] = $tdatacallcenter_uggroups[".pagesByType"];
$tdatacallcenter_uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"view\":[\"view\"]}" ) );
$tdatacallcenter_uggroups[".originalPages"] = $tdatacallcenter_uggroups[".pages"];
$tdatacallcenter_uggroups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"view\":\"view\"}" );
$tdatacallcenter_uggroups[".originalDefaultPages"] = $tdatacallcenter_uggroups[".defaultPages"];

//	field labels
$fieldLabelscallcenter_uggroups = array();
$fieldToolTipscallcenter_uggroups = array();
$pageTitlescallcenter_uggroups = array();
$placeHolderscallcenter_uggroups = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallcenter_uggroups["Greek"] = array();
	$fieldToolTipscallcenter_uggroups["Greek"] = array();
	$placeHolderscallcenter_uggroups["Greek"] = array();
	$pageTitlescallcenter_uggroups["Greek"] = array();
	$fieldLabelscallcenter_uggroups["Greek"]["GroupID"] = "Group ID";
	$fieldToolTipscallcenter_uggroups["Greek"]["GroupID"] = "";
	$placeHolderscallcenter_uggroups["Greek"]["GroupID"] = "";
	$fieldLabelscallcenter_uggroups["Greek"]["Label"] = "Label";
	$fieldToolTipscallcenter_uggroups["Greek"]["Label"] = "";
	$placeHolderscallcenter_uggroups["Greek"]["Label"] = "";
	if (count($fieldToolTipscallcenter_uggroups["Greek"]))
		$tdatacallcenter_uggroups[".isUseToolTips"] = true;
}


	$tdatacallcenter_uggroups[".NCSearch"] = true;



$tdatacallcenter_uggroups[".shortTableName"] = "callcenter_uggroups";
$tdatacallcenter_uggroups[".nSecOptions"] = 0;

$tdatacallcenter_uggroups[".mainTableOwnerID"] = "";
$tdatacallcenter_uggroups[".entityType"] = 0;
$tdatacallcenter_uggroups[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallcenter_uggroups[".strOriginalTableName"] = "dbo.callcenter_uggroups";

	



$tdatacallcenter_uggroups[".showAddInPopup"] = false;

$tdatacallcenter_uggroups[".showEditInPopup"] = false;

$tdatacallcenter_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallcenter_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallcenter_uggroups[".listAjax"] = false;
//	temporary
$tdatacallcenter_uggroups[".listAjax"] = false;

	$tdatacallcenter_uggroups[".audit"] = true;

	$tdatacallcenter_uggroups[".locking"] = false;


$pages = $tdatacallcenter_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallcenter_uggroups[".edit"] = true;
	$tdatacallcenter_uggroups[".afterEditAction"] = 1;
	$tdatacallcenter_uggroups[".closePopupAfterEdit"] = 1;
	$tdatacallcenter_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallcenter_uggroups[".add"] = true;
$tdatacallcenter_uggroups[".afterAddAction"] = 0;
$tdatacallcenter_uggroups[".closePopupAfterAdd"] = 1;
$tdatacallcenter_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallcenter_uggroups[".list"] = true;
}



$tdatacallcenter_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallcenter_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallcenter_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallcenter_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallcenter_uggroups[".printFriendly"] = true;
}



$tdatacallcenter_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallcenter_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallcenter_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallcenter_uggroups[".isUseAjaxSuggest"] = false;

$tdatacallcenter_uggroups[".rowHighlite"] = true;



																																																																																																																											

$tdatacallcenter_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatacallcenter_uggroups[".buttonsAdded"] = false;

$tdatacallcenter_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallcenter_uggroups[".isUseTimeForSearch"] = false;


$tdatacallcenter_uggroups[".badgeColor"] = "7B68EE";


$tdatacallcenter_uggroups[".allSearchFields"] = array();
$tdatacallcenter_uggroups[".filterFields"] = array();
$tdatacallcenter_uggroups[".requiredSearchFields"] = array();

$tdatacallcenter_uggroups[".googleLikeFields"] = array();
$tdatacallcenter_uggroups[".googleLikeFields"][] = "GroupID";
$tdatacallcenter_uggroups[".googleLikeFields"][] = "Label";



$tdatacallcenter_uggroups[".tableType"] = "list";

$tdatacallcenter_uggroups[".printerPageOrientation"] = 0;
$tdatacallcenter_uggroups[".nPrinterPageScale"] = 100;

$tdatacallcenter_uggroups[".nPrinterSplitRecords"] = 40;

$tdatacallcenter_uggroups[".geocodingEnabled"] = false;






$tdatacallcenter_uggroups[".searchIsRequiredForFilters"] = true;

$tdatacallcenter_uggroups[".noRecordsFirstPage"] = true;



$tdatacallcenter_uggroups[".pageSize"] = 20;

$tdatacallcenter_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallcenter_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatacallcenter_uggroups[".orderindexes"] = array();


$tdatacallcenter_uggroups[".sqlHead"] = "SELECT GroupID,  	[Label]";
$tdatacallcenter_uggroups[".sqlFrom"] = "FROM dbo.callcenter_uggroups";
$tdatacallcenter_uggroups[".sqlWhereExpr"] = "";
$tdatacallcenter_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallcenter_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallcenter_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatacallcenter_uggroups[".highlightSearchResults"] = true;

$tableKeyscallcenter_uggroups = array();
$tableKeyscallcenter_uggroups[] = "GroupID";
$tdatacallcenter_uggroups[".Keys"] = $tableKeyscallcenter_uggroups;


$tdatacallcenter_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "dbo.callcenter_uggroups";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatacallcenter_uggroups["GroupID"] = $fdata;
		$tdatacallcenter_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "dbo.callcenter_uggroups";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_uggroups","Label");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Label";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Label]";

	
	
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


	$tdatacallcenter_uggroups["Label"] = $fdata;
		$tdatacallcenter_uggroups[".searchableFields"][] = "Label";


$tables_data["dbo.callcenter_uggroups"]=&$tdatacallcenter_uggroups;
$field_labels["dbo_callcenter_uggroups"] = &$fieldLabelscallcenter_uggroups;
$fieldToolTips["dbo_callcenter_uggroups"] = &$fieldToolTipscallcenter_uggroups;
$placeHolders["dbo_callcenter_uggroups"] = &$placeHolderscallcenter_uggroups;
$page_titles["dbo_callcenter_uggroups"] = &$pageTitlescallcenter_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callcenter_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callcenter_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callcenter_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	[Label]";
$proto0["m_strFrom"] = "FROM dbo.callcenter_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "dbo.callcenter_uggroups",
	"m_srcTableName" => "dbo.callcenter_uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "dbo.callcenter_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "dbo.callcenter_uggroups",
	"m_srcTableName" => "dbo.callcenter_uggroups"
));

$proto8["m_sql"] = "[Label]";
$proto8["m_srcTableName"] = "dbo.callcenter_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.callcenter_uggroups";
$proto11["m_srcTableName"] = "dbo.callcenter_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.callcenter_uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.callcenter_uggroups";
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
$proto0["m_srcTableName"]="dbo.callcenter_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callcenter_uggroups = createSqlQuery_callcenter_uggroups();


	
		;

		

$tdatacallcenter_uggroups[".sqlquery"] = $queryData_callcenter_uggroups;



$tableEvents["dbo.callcenter_uggroups"] = new eventsBase;
$tdatacallcenter_uggroups[".hasEvents"] = false;

?>