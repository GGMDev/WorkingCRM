<?php
$tdataitemsalescategory = array();
$tdataitemsalescategory[".searchableFields"] = array();
$tdataitemsalescategory[".ShortName"] = "itemsalescategory";
$tdataitemsalescategory[".OwnerID"] = "";
$tdataitemsalescategory[".OriginalTable"] = "dbo.itemSalesCategory";


$tdataitemsalescategory[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataitemsalescategory[".originalPagesByType"] = $tdataitemsalescategory[".pagesByType"];
$tdataitemsalescategory[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataitemsalescategory[".originalPages"] = $tdataitemsalescategory[".pages"];
$tdataitemsalescategory[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataitemsalescategory[".originalDefaultPages"] = $tdataitemsalescategory[".defaultPages"];

//	field labels
$fieldLabelsitemsalescategory = array();
$fieldToolTipsitemsalescategory = array();
$pageTitlesitemsalescategory = array();
$placeHoldersitemsalescategory = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitemsalescategory["Greek"] = array();
	$fieldToolTipsitemsalescategory["Greek"] = array();
	$placeHoldersitemsalescategory["Greek"] = array();
	$pageTitlesitemsalescategory["Greek"] = array();
	$fieldLabelsitemsalescategory["Greek"]["id"] = "Id";
	$fieldToolTipsitemsalescategory["Greek"]["id"] = "";
	$placeHoldersitemsalescategory["Greek"]["id"] = "";
	$fieldLabelsitemsalescategory["Greek"]["description"] = "Κατηγορία Πωλήσεων";
	$fieldToolTipsitemsalescategory["Greek"]["description"] = "";
	$placeHoldersitemsalescategory["Greek"]["description"] = "";
	$fieldLabelsitemsalescategory["Greek"]["displayOrder"] = "Σειρά Εμφάνισης";
	$fieldToolTipsitemsalescategory["Greek"]["displayOrder"] = "";
	$placeHoldersitemsalescategory["Greek"]["displayOrder"] = "";
	if (count($fieldToolTipsitemsalescategory["Greek"]))
		$tdataitemsalescategory[".isUseToolTips"] = true;
}


	$tdataitemsalescategory[".NCSearch"] = true;



$tdataitemsalescategory[".shortTableName"] = "itemsalescategory";
$tdataitemsalescategory[".nSecOptions"] = 0;

$tdataitemsalescategory[".mainTableOwnerID"] = "";
$tdataitemsalescategory[".entityType"] = 0;
$tdataitemsalescategory[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitemsalescategory[".strOriginalTableName"] = "dbo.itemSalesCategory";

	



$tdataitemsalescategory[".showAddInPopup"] = false;

$tdataitemsalescategory[".showEditInPopup"] = false;

$tdataitemsalescategory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitemsalescategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitemsalescategory[".listAjax"] = false;
//	temporary
$tdataitemsalescategory[".listAjax"] = false;

	$tdataitemsalescategory[".audit"] = true;

	$tdataitemsalescategory[".locking"] = false;


$pages = $tdataitemsalescategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitemsalescategory[".edit"] = true;
	$tdataitemsalescategory[".afterEditAction"] = 0;
	$tdataitemsalescategory[".closePopupAfterEdit"] = 1;
	$tdataitemsalescategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitemsalescategory[".add"] = true;
$tdataitemsalescategory[".afterAddAction"] = 0;
$tdataitemsalescategory[".closePopupAfterAdd"] = 1;
$tdataitemsalescategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitemsalescategory[".list"] = true;
}



$tdataitemsalescategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitemsalescategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitemsalescategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitemsalescategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitemsalescategory[".printFriendly"] = true;
}



$tdataitemsalescategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitemsalescategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitemsalescategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitemsalescategory[".isUseAjaxSuggest"] = false;

$tdataitemsalescategory[".rowHighlite"] = true;



																																																																																																																											

$tdataitemsalescategory[".ajaxCodeSnippetAdded"] = false;

$tdataitemsalescategory[".buttonsAdded"] = false;

$tdataitemsalescategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitemsalescategory[".isUseTimeForSearch"] = false;


$tdataitemsalescategory[".badgeColor"] = "9ACD32";


$tdataitemsalescategory[".allSearchFields"] = array();
$tdataitemsalescategory[".filterFields"] = array();
$tdataitemsalescategory[".requiredSearchFields"] = array();

$tdataitemsalescategory[".googleLikeFields"] = array();
$tdataitemsalescategory[".googleLikeFields"][] = "id";
$tdataitemsalescategory[".googleLikeFields"][] = "description";
$tdataitemsalescategory[".googleLikeFields"][] = "displayOrder";



$tdataitemsalescategory[".tableType"] = "list";

$tdataitemsalescategory[".printerPageOrientation"] = 0;
$tdataitemsalescategory[".nPrinterPageScale"] = 100;

$tdataitemsalescategory[".nPrinterSplitRecords"] = 40;

$tdataitemsalescategory[".geocodingEnabled"] = false;






$tdataitemsalescategory[".searchIsRequiredForFilters"] = true;

$tdataitemsalescategory[".noRecordsFirstPage"] = true;



$tdataitemsalescategory[".pageSize"] = 20;

$tdataitemsalescategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitemsalescategory[".strOrderBy"] = $tstrOrderBy;

$tdataitemsalescategory[".orderindexes"] = array();


$tdataitemsalescategory[".sqlHead"] = "SELECT id,  	description,  	displayOrder";
$tdataitemsalescategory[".sqlFrom"] = "FROM dbo.itemSalesCategory";
$tdataitemsalescategory[".sqlWhereExpr"] = "";
$tdataitemsalescategory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitemsalescategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitemsalescategory[".arrGroupsPerPage"] = $arrGPP;

$tdataitemsalescategory[".highlightSearchResults"] = true;

$tableKeysitemsalescategory = array();
$tableKeysitemsalescategory[] = "id";
$tdataitemsalescategory[".Keys"] = $tableKeysitemsalescategory;


$tdataitemsalescategory[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.itemSalesCategory";
	$fdata["Label"] = GetFieldLabel("dbo_itemSalesCategory","id");
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


	$tdataitemsalescategory["id"] = $fdata;
		$tdataitemsalescategory[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.itemSalesCategory";
	$fdata["Label"] = GetFieldLabel("dbo_itemSalesCategory","description");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdataitemsalescategory["description"] = $fdata;
		$tdataitemsalescategory[".searchableFields"][] = "description";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.itemSalesCategory";
	$fdata["Label"] = GetFieldLabel("dbo_itemSalesCategory","displayOrder");
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


	$tdataitemsalescategory["displayOrder"] = $fdata;
		$tdataitemsalescategory[".searchableFields"][] = "displayOrder";


$tables_data["dbo.itemSalesCategory"]=&$tdataitemsalescategory;
$field_labels["dbo_itemSalesCategory"] = &$fieldLabelsitemsalescategory;
$fieldToolTips["dbo_itemSalesCategory"] = &$fieldToolTipsitemsalescategory;
$placeHolders["dbo_itemSalesCategory"] = &$placeHoldersitemsalescategory;
$page_titles["dbo_itemSalesCategory"] = &$pageTitlesitemsalescategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.itemSalesCategory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.itemSalesCategory"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itemsalescategory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description,  	displayOrder";
$proto0["m_strFrom"] = "FROM dbo.itemSalesCategory";
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
	"m_strTable" => "dbo.itemSalesCategory",
	"m_srcTableName" => "dbo.itemSalesCategory"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.itemSalesCategory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.itemSalesCategory",
	"m_srcTableName" => "dbo.itemSalesCategory"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "dbo.itemSalesCategory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.itemSalesCategory",
	"m_srcTableName" => "dbo.itemSalesCategory"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.itemSalesCategory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.itemSalesCategory";
$proto13["m_srcTableName"] = "dbo.itemSalesCategory";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "description";
$proto13["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.itemSalesCategory";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.itemSalesCategory";
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
$proto0["m_srcTableName"]="dbo.itemSalesCategory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itemsalescategory = createSqlQuery_itemsalescategory();


	
		;

			

$tdataitemsalescategory[".sqlquery"] = $queryData_itemsalescategory;



$tableEvents["dbo.itemSalesCategory"] = new eventsBase;
$tdataitemsalescategory[".hasEvents"] = false;

?>