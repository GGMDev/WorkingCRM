<?php
$tdatadbo_callclassifications = array();
$tdatadbo_callclassifications[".searchableFields"] = array();
$tdatadbo_callclassifications[".ShortName"] = "dbo_callclassifications";
$tdatadbo_callclassifications[".OwnerID"] = "";
$tdatadbo_callclassifications[".OriginalTable"] = "dbo.callClassifications";


$tdatadbo_callclassifications[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadbo_callclassifications[".originalPagesByType"] = $tdatadbo_callclassifications[".pagesByType"];
$tdatadbo_callclassifications[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadbo_callclassifications[".originalPages"] = $tdatadbo_callclassifications[".pages"];
$tdatadbo_callclassifications[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadbo_callclassifications[".originalDefaultPages"] = $tdatadbo_callclassifications[".defaultPages"];

//	field labels
$fieldLabelsdbo_callclassifications = array();
$fieldToolTipsdbo_callclassifications = array();
$pageTitlesdbo_callclassifications = array();
$placeHoldersdbo_callclassifications = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_callclassifications["Greek"] = array();
	$fieldToolTipsdbo_callclassifications["Greek"] = array();
	$placeHoldersdbo_callclassifications["Greek"] = array();
	$pageTitlesdbo_callclassifications["Greek"] = array();
	$fieldLabelsdbo_callclassifications["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_callclassifications["Greek"]["id"] = "";
	$placeHoldersdbo_callclassifications["Greek"]["id"] = "";
	$fieldLabelsdbo_callclassifications["Greek"]["classification"] = "Ομάδα Κλήσης";
	$fieldToolTipsdbo_callclassifications["Greek"]["classification"] = "";
	$placeHoldersdbo_callclassifications["Greek"]["classification"] = "";
	$fieldLabelsdbo_callclassifications["Greek"]["displayOrder"] = "Σειρά Εμφάνισης";
	$fieldToolTipsdbo_callclassifications["Greek"]["displayOrder"] = "";
	$placeHoldersdbo_callclassifications["Greek"]["displayOrder"] = "";
	if (count($fieldToolTipsdbo_callclassifications["Greek"]))
		$tdatadbo_callclassifications[".isUseToolTips"] = true;
}


	$tdatadbo_callclassifications[".NCSearch"] = true;



$tdatadbo_callclassifications[".shortTableName"] = "dbo_callclassifications";
$tdatadbo_callclassifications[".nSecOptions"] = 0;

$tdatadbo_callclassifications[".mainTableOwnerID"] = "";
$tdatadbo_callclassifications[".entityType"] = 0;
$tdatadbo_callclassifications[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_callclassifications[".strOriginalTableName"] = "dbo.callClassifications";

	



$tdatadbo_callclassifications[".showAddInPopup"] = false;

$tdatadbo_callclassifications[".showEditInPopup"] = false;

$tdatadbo_callclassifications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_callclassifications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_callclassifications[".listAjax"] = false;
//	temporary
$tdatadbo_callclassifications[".listAjax"] = false;

	$tdatadbo_callclassifications[".audit"] = true;

	$tdatadbo_callclassifications[".locking"] = false;


$pages = $tdatadbo_callclassifications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_callclassifications[".edit"] = true;
	$tdatadbo_callclassifications[".afterEditAction"] = 1;
	$tdatadbo_callclassifications[".closePopupAfterEdit"] = 1;
	$tdatadbo_callclassifications[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_callclassifications[".add"] = true;
$tdatadbo_callclassifications[".afterAddAction"] = 0;
$tdatadbo_callclassifications[".closePopupAfterAdd"] = 1;
$tdatadbo_callclassifications[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_callclassifications[".list"] = true;
}



$tdatadbo_callclassifications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_callclassifications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_callclassifications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_callclassifications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_callclassifications[".printFriendly"] = true;
}



$tdatadbo_callclassifications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_callclassifications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_callclassifications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_callclassifications[".isUseAjaxSuggest"] = false;

$tdatadbo_callclassifications[".rowHighlite"] = true;



																																																																																																																											

$tdatadbo_callclassifications[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_callclassifications[".buttonsAdded"] = false;

$tdatadbo_callclassifications[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_callclassifications[".isUseTimeForSearch"] = false;


$tdatadbo_callclassifications[".badgeColor"] = "778899";


$tdatadbo_callclassifications[".allSearchFields"] = array();
$tdatadbo_callclassifications[".filterFields"] = array();
$tdatadbo_callclassifications[".requiredSearchFields"] = array();

$tdatadbo_callclassifications[".googleLikeFields"] = array();
$tdatadbo_callclassifications[".googleLikeFields"][] = "id";
$tdatadbo_callclassifications[".googleLikeFields"][] = "classification";
$tdatadbo_callclassifications[".googleLikeFields"][] = "displayOrder";



$tdatadbo_callclassifications[".tableType"] = "list";

$tdatadbo_callclassifications[".printerPageOrientation"] = 0;
$tdatadbo_callclassifications[".nPrinterPageScale"] = 100;

$tdatadbo_callclassifications[".nPrinterSplitRecords"] = 40;

$tdatadbo_callclassifications[".geocodingEnabled"] = false;






$tdatadbo_callclassifications[".searchIsRequiredForFilters"] = true;

$tdatadbo_callclassifications[".noRecordsFirstPage"] = true;



$tdatadbo_callclassifications[".pageSize"] = 20;

$tdatadbo_callclassifications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_callclassifications[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_callclassifications[".orderindexes"] = array();


$tdatadbo_callclassifications[".sqlHead"] = "SELECT id,  	classification,  	displayOrder";
$tdatadbo_callclassifications[".sqlFrom"] = "FROM dbo.callClassifications";
$tdatadbo_callclassifications[".sqlWhereExpr"] = "";
$tdatadbo_callclassifications[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_callclassifications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_callclassifications[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_callclassifications[".highlightSearchResults"] = true;

$tableKeysdbo_callclassifications = array();
$tableKeysdbo_callclassifications[] = "id";
$tdatadbo_callclassifications[".Keys"] = $tableKeysdbo_callclassifications;


$tdatadbo_callclassifications[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.callClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callClassifications","id");
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


	$tdatadbo_callclassifications["id"] = $fdata;
		$tdatadbo_callclassifications[".searchableFields"][] = "id";
//	classification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "classification";
	$fdata["GoodName"] = "classification";
	$fdata["ownerTable"] = "dbo.callClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callClassifications","classification");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "classification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "classification";

	
	
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


	$tdatadbo_callclassifications["classification"] = $fdata;
		$tdatadbo_callclassifications[".searchableFields"][] = "classification";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.callClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callClassifications","displayOrder");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "displayOrder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayOrder";

	
	
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


	$tdatadbo_callclassifications["displayOrder"] = $fdata;
		$tdatadbo_callclassifications[".searchableFields"][] = "displayOrder";


$tables_data["dbo.callClassifications"]=&$tdatadbo_callclassifications;
$field_labels["dbo_callClassifications"] = &$fieldLabelsdbo_callclassifications;
$fieldToolTips["dbo_callClassifications"] = &$fieldToolTipsdbo_callclassifications;
$placeHolders["dbo_callClassifications"] = &$placeHoldersdbo_callclassifications;
$page_titles["dbo_callClassifications"] = &$pageTitlesdbo_callclassifications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callClassifications"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callClassifications"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_callclassifications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	classification,  	displayOrder";
$proto0["m_strFrom"] = "FROM dbo.callClassifications";
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
	"m_strTable" => "dbo.callClassifications",
	"m_srcTableName" => "dbo.callClassifications"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.callClassifications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "classification",
	"m_strTable" => "dbo.callClassifications",
	"m_srcTableName" => "dbo.callClassifications"
));

$proto8["m_sql"] = "classification";
$proto8["m_srcTableName"] = "dbo.callClassifications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.callClassifications",
	"m_srcTableName" => "dbo.callClassifications"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.callClassifications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.callClassifications";
$proto13["m_srcTableName"] = "dbo.callClassifications";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "classification";
$proto13["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.callClassifications";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.callClassifications";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.callClassifications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_callclassifications = createSqlQuery_dbo_callclassifications();


	
		;

			

$tdatadbo_callclassifications[".sqlquery"] = $queryData_dbo_callclassifications;



$tableEvents["dbo.callClassifications"] = new eventsBase;
$tdatadbo_callclassifications[".hasEvents"] = false;

?>