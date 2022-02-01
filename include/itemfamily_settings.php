<?php
$tdataitemfamily = array();
$tdataitemfamily[".searchableFields"] = array();
$tdataitemfamily[".ShortName"] = "itemfamily";
$tdataitemfamily[".OwnerID"] = "";
$tdataitemfamily[".OriginalTable"] = "dbo.itemFamily";


$tdataitemfamily[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataitemfamily[".originalPagesByType"] = $tdataitemfamily[".pagesByType"];
$tdataitemfamily[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataitemfamily[".originalPages"] = $tdataitemfamily[".pages"];
$tdataitemfamily[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataitemfamily[".originalDefaultPages"] = $tdataitemfamily[".defaultPages"];

//	field labels
$fieldLabelsitemfamily = array();
$fieldToolTipsitemfamily = array();
$pageTitlesitemfamily = array();
$placeHoldersitemfamily = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitemfamily["Greek"] = array();
	$fieldToolTipsitemfamily["Greek"] = array();
	$placeHoldersitemfamily["Greek"] = array();
	$pageTitlesitemfamily["Greek"] = array();
	$fieldLabelsitemfamily["Greek"]["id"] = "Id";
	$fieldToolTipsitemfamily["Greek"]["id"] = "";
	$placeHoldersitemfamily["Greek"]["id"] = "";
	$fieldLabelsitemfamily["Greek"]["description"] = "Οικογένεια Είδους";
	$fieldToolTipsitemfamily["Greek"]["description"] = "";
	$placeHoldersitemfamily["Greek"]["description"] = "";
	$fieldLabelsitemfamily["Greek"]["displayOrder"] = "Σειρά Εμφάνισης";
	$fieldToolTipsitemfamily["Greek"]["displayOrder"] = "";
	$placeHoldersitemfamily["Greek"]["displayOrder"] = "";
	if (count($fieldToolTipsitemfamily["Greek"]))
		$tdataitemfamily[".isUseToolTips"] = true;
}


	$tdataitemfamily[".NCSearch"] = true;



$tdataitemfamily[".shortTableName"] = "itemfamily";
$tdataitemfamily[".nSecOptions"] = 0;

$tdataitemfamily[".mainTableOwnerID"] = "";
$tdataitemfamily[".entityType"] = 0;
$tdataitemfamily[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitemfamily[".strOriginalTableName"] = "dbo.itemFamily";

	



$tdataitemfamily[".showAddInPopup"] = false;

$tdataitemfamily[".showEditInPopup"] = false;

$tdataitemfamily[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitemfamily[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitemfamily[".listAjax"] = false;
//	temporary
$tdataitemfamily[".listAjax"] = false;

	$tdataitemfamily[".audit"] = true;

	$tdataitemfamily[".locking"] = false;


$pages = $tdataitemfamily[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitemfamily[".edit"] = true;
	$tdataitemfamily[".afterEditAction"] = 0;
	$tdataitemfamily[".closePopupAfterEdit"] = 1;
	$tdataitemfamily[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitemfamily[".add"] = true;
$tdataitemfamily[".afterAddAction"] = 0;
$tdataitemfamily[".closePopupAfterAdd"] = 1;
$tdataitemfamily[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitemfamily[".list"] = true;
}



$tdataitemfamily[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitemfamily[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitemfamily[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitemfamily[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitemfamily[".printFriendly"] = true;
}



$tdataitemfamily[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitemfamily[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitemfamily[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitemfamily[".isUseAjaxSuggest"] = false;

$tdataitemfamily[".rowHighlite"] = true;



																																																																																																																											

$tdataitemfamily[".ajaxCodeSnippetAdded"] = false;

$tdataitemfamily[".buttonsAdded"] = false;

$tdataitemfamily[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitemfamily[".isUseTimeForSearch"] = false;


$tdataitemfamily[".badgeColor"] = "6B8E23";


$tdataitemfamily[".allSearchFields"] = array();
$tdataitemfamily[".filterFields"] = array();
$tdataitemfamily[".requiredSearchFields"] = array();

$tdataitemfamily[".googleLikeFields"] = array();
$tdataitemfamily[".googleLikeFields"][] = "id";
$tdataitemfamily[".googleLikeFields"][] = "description";
$tdataitemfamily[".googleLikeFields"][] = "displayOrder";



$tdataitemfamily[".tableType"] = "list";

$tdataitemfamily[".printerPageOrientation"] = 0;
$tdataitemfamily[".nPrinterPageScale"] = 100;

$tdataitemfamily[".nPrinterSplitRecords"] = 40;

$tdataitemfamily[".geocodingEnabled"] = false;






$tdataitemfamily[".searchIsRequiredForFilters"] = true;

$tdataitemfamily[".noRecordsFirstPage"] = true;



$tdataitemfamily[".pageSize"] = 20;

$tdataitemfamily[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitemfamily[".strOrderBy"] = $tstrOrderBy;

$tdataitemfamily[".orderindexes"] = array();


$tdataitemfamily[".sqlHead"] = "SELECT id,  	description,  	displayOrder";
$tdataitemfamily[".sqlFrom"] = "FROM dbo.itemFamily";
$tdataitemfamily[".sqlWhereExpr"] = "";
$tdataitemfamily[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitemfamily[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitemfamily[".arrGroupsPerPage"] = $arrGPP;

$tdataitemfamily[".highlightSearchResults"] = true;

$tableKeysitemfamily = array();
$tableKeysitemfamily[] = "id";
$tdataitemfamily[".Keys"] = $tableKeysitemfamily;


$tdataitemfamily[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.itemFamily";
	$fdata["Label"] = GetFieldLabel("dbo_itemFamily","id");
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


	$tdataitemfamily["id"] = $fdata;
		$tdataitemfamily[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.itemFamily";
	$fdata["Label"] = GetFieldLabel("dbo_itemFamily","description");
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

		$edata["insertNull"] = true;

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataitemfamily["description"] = $fdata;
		$tdataitemfamily[".searchableFields"][] = "description";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.itemFamily";
	$fdata["Label"] = GetFieldLabel("dbo_itemFamily","displayOrder");
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


	$tdataitemfamily["displayOrder"] = $fdata;
		$tdataitemfamily[".searchableFields"][] = "displayOrder";


$tables_data["dbo.itemFamily"]=&$tdataitemfamily;
$field_labels["dbo_itemFamily"] = &$fieldLabelsitemfamily;
$fieldToolTips["dbo_itemFamily"] = &$fieldToolTipsitemfamily;
$placeHolders["dbo_itemFamily"] = &$placeHoldersitemfamily;
$page_titles["dbo_itemFamily"] = &$pageTitlesitemfamily;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.itemFamily"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.itemFamily"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itemfamily()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description,  	displayOrder";
$proto0["m_strFrom"] = "FROM dbo.itemFamily";
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
	"m_strTable" => "dbo.itemFamily",
	"m_srcTableName" => "dbo.itemFamily"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.itemFamily";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.itemFamily",
	"m_srcTableName" => "dbo.itemFamily"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "dbo.itemFamily";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.itemFamily",
	"m_srcTableName" => "dbo.itemFamily"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.itemFamily";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.itemFamily";
$proto13["m_srcTableName"] = "dbo.itemFamily";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "description";
$proto13["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.itemFamily";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.itemFamily";
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
$proto0["m_srcTableName"]="dbo.itemFamily";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itemfamily = createSqlQuery_itemfamily();


	
		;

			

$tdataitemfamily[".sqlquery"] = $queryData_itemfamily;



$tableEvents["dbo.itemFamily"] = new eventsBase;
$tdataitemfamily[".hasEvents"] = false;

?>