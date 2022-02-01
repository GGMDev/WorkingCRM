<?php
$tdataitemcustomer = array();
$tdataitemcustomer[".searchableFields"] = array();
$tdataitemcustomer[".ShortName"] = "itemcustomer";
$tdataitemcustomer[".OwnerID"] = "";
$tdataitemcustomer[".OriginalTable"] = "dbo.itemCustomer";


$tdataitemcustomer[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataitemcustomer[".originalPagesByType"] = $tdataitemcustomer[".pagesByType"];
$tdataitemcustomer[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataitemcustomer[".originalPages"] = $tdataitemcustomer[".pages"];
$tdataitemcustomer[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataitemcustomer[".originalDefaultPages"] = $tdataitemcustomer[".defaultPages"];

//	field labels
$fieldLabelsitemcustomer = array();
$fieldToolTipsitemcustomer = array();
$pageTitlesitemcustomer = array();
$placeHoldersitemcustomer = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitemcustomer["Greek"] = array();
	$fieldToolTipsitemcustomer["Greek"] = array();
	$placeHoldersitemcustomer["Greek"] = array();
	$pageTitlesitemcustomer["Greek"] = array();
	$fieldLabelsitemcustomer["Greek"]["id"] = "Id";
	$fieldToolTipsitemcustomer["Greek"]["id"] = "";
	$placeHoldersitemcustomer["Greek"]["id"] = "";
	$fieldLabelsitemcustomer["Greek"]["description"] = "Description";
	$fieldToolTipsitemcustomer["Greek"]["description"] = "";
	$placeHoldersitemcustomer["Greek"]["description"] = "";
	$fieldLabelsitemcustomer["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipsitemcustomer["Greek"]["displayOrder"] = "";
	$placeHoldersitemcustomer["Greek"]["displayOrder"] = "";
	$fieldLabelsitemcustomer["Greek"]["masterComission"] = "Master Comission";
	$fieldToolTipsitemcustomer["Greek"]["masterComission"] = "";
	$placeHoldersitemcustomer["Greek"]["masterComission"] = "";
	if (count($fieldToolTipsitemcustomer["Greek"]))
		$tdataitemcustomer[".isUseToolTips"] = true;
}


	$tdataitemcustomer[".NCSearch"] = true;



$tdataitemcustomer[".shortTableName"] = "itemcustomer";
$tdataitemcustomer[".nSecOptions"] = 0;

$tdataitemcustomer[".mainTableOwnerID"] = "";
$tdataitemcustomer[".entityType"] = 0;
$tdataitemcustomer[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitemcustomer[".strOriginalTableName"] = "dbo.itemCustomer";

	



$tdataitemcustomer[".showAddInPopup"] = false;

$tdataitemcustomer[".showEditInPopup"] = false;

$tdataitemcustomer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitemcustomer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitemcustomer[".listAjax"] = false;
//	temporary
$tdataitemcustomer[".listAjax"] = false;

	$tdataitemcustomer[".audit"] = true;

	$tdataitemcustomer[".locking"] = false;


$pages = $tdataitemcustomer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitemcustomer[".edit"] = true;
	$tdataitemcustomer[".afterEditAction"] = 0;
	$tdataitemcustomer[".closePopupAfterEdit"] = 1;
	$tdataitemcustomer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitemcustomer[".add"] = true;
$tdataitemcustomer[".afterAddAction"] = 0;
$tdataitemcustomer[".closePopupAfterAdd"] = 1;
$tdataitemcustomer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitemcustomer[".list"] = true;
}



$tdataitemcustomer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitemcustomer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitemcustomer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitemcustomer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitemcustomer[".printFriendly"] = true;
}



$tdataitemcustomer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitemcustomer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitemcustomer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitemcustomer[".isUseAjaxSuggest"] = false;

$tdataitemcustomer[".rowHighlite"] = true;



																																																																																																																											

$tdataitemcustomer[".ajaxCodeSnippetAdded"] = false;

$tdataitemcustomer[".buttonsAdded"] = false;

$tdataitemcustomer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitemcustomer[".isUseTimeForSearch"] = false;


$tdataitemcustomer[".badgeColor"] = "CFAE83";


$tdataitemcustomer[".allSearchFields"] = array();
$tdataitemcustomer[".filterFields"] = array();
$tdataitemcustomer[".requiredSearchFields"] = array();

$tdataitemcustomer[".googleLikeFields"] = array();
$tdataitemcustomer[".googleLikeFields"][] = "id";
$tdataitemcustomer[".googleLikeFields"][] = "description";
$tdataitemcustomer[".googleLikeFields"][] = "displayOrder";
$tdataitemcustomer[".googleLikeFields"][] = "masterComission";



$tdataitemcustomer[".tableType"] = "list";

$tdataitemcustomer[".printerPageOrientation"] = 0;
$tdataitemcustomer[".nPrinterPageScale"] = 100;

$tdataitemcustomer[".nPrinterSplitRecords"] = 40;

$tdataitemcustomer[".geocodingEnabled"] = false;






$tdataitemcustomer[".searchIsRequiredForFilters"] = true;

$tdataitemcustomer[".noRecordsFirstPage"] = true;



$tdataitemcustomer[".pageSize"] = 20;

$tdataitemcustomer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitemcustomer[".strOrderBy"] = $tstrOrderBy;

$tdataitemcustomer[".orderindexes"] = array();


$tdataitemcustomer[".sqlHead"] = "SELECT id,  	description,  	displayOrder,  	masterComission";
$tdataitemcustomer[".sqlFrom"] = "FROM dbo.itemCustomer";
$tdataitemcustomer[".sqlWhereExpr"] = "";
$tdataitemcustomer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitemcustomer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitemcustomer[".arrGroupsPerPage"] = $arrGPP;

$tdataitemcustomer[".highlightSearchResults"] = true;

$tableKeysitemcustomer = array();
$tableKeysitemcustomer[] = "id";
$tdataitemcustomer[".Keys"] = $tableKeysitemcustomer;


$tdataitemcustomer[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.itemCustomer";
	$fdata["Label"] = GetFieldLabel("dbo_itemCustomer","id");
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


	$tdataitemcustomer["id"] = $fdata;
		$tdataitemcustomer[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.itemCustomer";
	$fdata["Label"] = GetFieldLabel("dbo_itemCustomer","description");
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


	$tdataitemcustomer["description"] = $fdata;
		$tdataitemcustomer[".searchableFields"][] = "description";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.itemCustomer";
	$fdata["Label"] = GetFieldLabel("dbo_itemCustomer","displayOrder");
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


	$tdataitemcustomer["displayOrder"] = $fdata;
		$tdataitemcustomer[".searchableFields"][] = "displayOrder";
//	masterComission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "masterComission";
	$fdata["GoodName"] = "masterComission";
	$fdata["ownerTable"] = "dbo.itemCustomer";
	$fdata["Label"] = GetFieldLabel("dbo_itemCustomer","masterComission");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "masterComission";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "masterComission";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitemcustomer["masterComission"] = $fdata;
		$tdataitemcustomer[".searchableFields"][] = "masterComission";


$tables_data["dbo.itemCustomer"]=&$tdataitemcustomer;
$field_labels["dbo_itemCustomer"] = &$fieldLabelsitemcustomer;
$fieldToolTips["dbo_itemCustomer"] = &$fieldToolTipsitemcustomer;
$placeHolders["dbo_itemCustomer"] = &$placeHoldersitemcustomer;
$page_titles["dbo_itemCustomer"] = &$pageTitlesitemcustomer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.itemCustomer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.itemCustomer"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itemcustomer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description,  	displayOrder,  	masterComission";
$proto0["m_strFrom"] = "FROM dbo.itemCustomer";
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
	"m_strTable" => "dbo.itemCustomer",
	"m_srcTableName" => "dbo.itemCustomer"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.itemCustomer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.itemCustomer",
	"m_srcTableName" => "dbo.itemCustomer"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "dbo.itemCustomer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.itemCustomer",
	"m_srcTableName" => "dbo.itemCustomer"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.itemCustomer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "masterComission",
	"m_strTable" => "dbo.itemCustomer",
	"m_srcTableName" => "dbo.itemCustomer"
));

$proto12["m_sql"] = "masterComission";
$proto12["m_srcTableName"] = "dbo.itemCustomer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.itemCustomer";
$proto15["m_srcTableName"] = "dbo.itemCustomer";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "description";
$proto15["m_columns"][] = "displayOrder";
$proto15["m_columns"][] = "masterComission";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.itemCustomer";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.itemCustomer";
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
$proto0["m_srcTableName"]="dbo.itemCustomer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itemcustomer = createSqlQuery_itemcustomer();


	
		;

				

$tdataitemcustomer[".sqlquery"] = $queryData_itemcustomer;



$tableEvents["dbo.itemCustomer"] = new eventsBase;
$tdataitemcustomer[".hasEvents"] = false;

?>