<?php
$tdatacontactmethods = array();
$tdatacontactmethods[".searchableFields"] = array();
$tdatacontactmethods[".ShortName"] = "contactmethods";
$tdatacontactmethods[".OwnerID"] = "";
$tdatacontactmethods[".OriginalTable"] = "dbo.contactMethods";


$tdatacontactmethods[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontactmethods[".originalPagesByType"] = $tdatacontactmethods[".pagesByType"];
$tdatacontactmethods[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontactmethods[".originalPages"] = $tdatacontactmethods[".pages"];
$tdatacontactmethods[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontactmethods[".originalDefaultPages"] = $tdatacontactmethods[".defaultPages"];

//	field labels
$fieldLabelscontactmethods = array();
$fieldToolTipscontactmethods = array();
$pageTitlescontactmethods = array();
$placeHolderscontactmethods = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscontactmethods["Greek"] = array();
	$fieldToolTipscontactmethods["Greek"] = array();
	$placeHolderscontactmethods["Greek"] = array();
	$pageTitlescontactmethods["Greek"] = array();
	$fieldLabelscontactmethods["Greek"]["id"] = "Id";
	$fieldToolTipscontactmethods["Greek"]["id"] = "";
	$placeHolderscontactmethods["Greek"]["id"] = "";
	$fieldLabelscontactmethods["Greek"]["Method"] = "Method";
	$fieldToolTipscontactmethods["Greek"]["Method"] = "";
	$placeHolderscontactmethods["Greek"]["Method"] = "";
	$fieldLabelscontactmethods["Greek"]["isCourier"] = "Is Courier";
	$fieldToolTipscontactmethods["Greek"]["isCourier"] = "";
	$placeHolderscontactmethods["Greek"]["isCourier"] = "";
	if (count($fieldToolTipscontactmethods["Greek"]))
		$tdatacontactmethods[".isUseToolTips"] = true;
}


	$tdatacontactmethods[".NCSearch"] = true;



$tdatacontactmethods[".shortTableName"] = "contactmethods";
$tdatacontactmethods[".nSecOptions"] = 0;

$tdatacontactmethods[".mainTableOwnerID"] = "";
$tdatacontactmethods[".entityType"] = 0;
$tdatacontactmethods[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacontactmethods[".strOriginalTableName"] = "dbo.contactMethods";

	



$tdatacontactmethods[".showAddInPopup"] = false;

$tdatacontactmethods[".showEditInPopup"] = false;

$tdatacontactmethods[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontactmethods[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontactmethods[".listAjax"] = false;
//	temporary
$tdatacontactmethods[".listAjax"] = false;

	$tdatacontactmethods[".audit"] = false;

	$tdatacontactmethods[".locking"] = false;


$pages = $tdatacontactmethods[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontactmethods[".edit"] = true;
	$tdatacontactmethods[".afterEditAction"] = 1;
	$tdatacontactmethods[".closePopupAfterEdit"] = 1;
	$tdatacontactmethods[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontactmethods[".add"] = true;
$tdatacontactmethods[".afterAddAction"] = 1;
$tdatacontactmethods[".closePopupAfterAdd"] = 1;
$tdatacontactmethods[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontactmethods[".list"] = true;
}



$tdatacontactmethods[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontactmethods[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontactmethods[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontactmethods[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontactmethods[".printFriendly"] = true;
}



$tdatacontactmethods[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontactmethods[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontactmethods[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontactmethods[".isUseAjaxSuggest"] = false;

$tdatacontactmethods[".rowHighlite"] = true;



																																																																																																																											

$tdatacontactmethods[".ajaxCodeSnippetAdded"] = false;

$tdatacontactmethods[".buttonsAdded"] = false;

$tdatacontactmethods[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontactmethods[".isUseTimeForSearch"] = false;


$tdatacontactmethods[".badgeColor"] = "EDCA00";


$tdatacontactmethods[".allSearchFields"] = array();
$tdatacontactmethods[".filterFields"] = array();
$tdatacontactmethods[".requiredSearchFields"] = array();

$tdatacontactmethods[".googleLikeFields"] = array();
$tdatacontactmethods[".googleLikeFields"][] = "id";
$tdatacontactmethods[".googleLikeFields"][] = "Method";
$tdatacontactmethods[".googleLikeFields"][] = "isCourier";



$tdatacontactmethods[".tableType"] = "list";

$tdatacontactmethods[".printerPageOrientation"] = 0;
$tdatacontactmethods[".nPrinterPageScale"] = 100;

$tdatacontactmethods[".nPrinterSplitRecords"] = 40;

$tdatacontactmethods[".geocodingEnabled"] = false;






$tdatacontactmethods[".searchIsRequiredForFilters"] = true;

$tdatacontactmethods[".noRecordsFirstPage"] = true;



$tdatacontactmethods[".pageSize"] = 20;

$tdatacontactmethods[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontactmethods[".strOrderBy"] = $tstrOrderBy;

$tdatacontactmethods[".orderindexes"] = array();


$tdatacontactmethods[".sqlHead"] = "SELECT id,  	Method,  	isCourier";
$tdatacontactmethods[".sqlFrom"] = "FROM dbo.contactMethods";
$tdatacontactmethods[".sqlWhereExpr"] = "";
$tdatacontactmethods[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontactmethods[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontactmethods[".arrGroupsPerPage"] = $arrGPP;

$tdatacontactmethods[".highlightSearchResults"] = true;

$tableKeyscontactmethods = array();
$tableKeyscontactmethods[] = "id";
$tdatacontactmethods[".Keys"] = $tableKeyscontactmethods;


$tdatacontactmethods[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.contactMethods";
	$fdata["Label"] = GetFieldLabel("dbo_contactMethods","id");
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


	$tdatacontactmethods["id"] = $fdata;
		$tdatacontactmethods[".searchableFields"][] = "id";
//	Method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Method";
	$fdata["GoodName"] = "Method";
	$fdata["ownerTable"] = "dbo.contactMethods";
	$fdata["Label"] = GetFieldLabel("dbo_contactMethods","Method");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Method";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Method";

	
	
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


	$tdatacontactmethods["Method"] = $fdata;
		$tdatacontactmethods[".searchableFields"][] = "Method";
//	isCourier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "isCourier";
	$fdata["GoodName"] = "isCourier";
	$fdata["ownerTable"] = "dbo.contactMethods";
	$fdata["Label"] = GetFieldLabel("dbo_contactMethods","isCourier");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isCourier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isCourier";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacontactmethods["isCourier"] = $fdata;
		$tdatacontactmethods[".searchableFields"][] = "isCourier";


$tables_data["dbo.contactMethods"]=&$tdatacontactmethods;
$field_labels["dbo_contactMethods"] = &$fieldLabelscontactmethods;
$fieldToolTips["dbo_contactMethods"] = &$fieldToolTipscontactmethods;
$placeHolders["dbo_contactMethods"] = &$placeHolderscontactmethods;
$page_titles["dbo_contactMethods"] = &$pageTitlescontactmethods;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.contactMethods"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.contactMethods"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contactmethods()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Method,  	isCourier";
$proto0["m_strFrom"] = "FROM dbo.contactMethods";
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
	"m_strTable" => "dbo.contactMethods",
	"m_srcTableName" => "dbo.contactMethods"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.contactMethods";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Method",
	"m_strTable" => "dbo.contactMethods",
	"m_srcTableName" => "dbo.contactMethods"
));

$proto8["m_sql"] = "Method";
$proto8["m_srcTableName"] = "dbo.contactMethods";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "isCourier",
	"m_strTable" => "dbo.contactMethods",
	"m_srcTableName" => "dbo.contactMethods"
));

$proto10["m_sql"] = "isCourier";
$proto10["m_srcTableName"] = "dbo.contactMethods";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.contactMethods";
$proto13["m_srcTableName"] = "dbo.contactMethods";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Method";
$proto13["m_columns"][] = "isCourier";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.contactMethods";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.contactMethods";
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
$proto0["m_srcTableName"]="dbo.contactMethods";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contactmethods = createSqlQuery_contactmethods();


	
		;

			

$tdatacontactmethods[".sqlquery"] = $queryData_contactmethods;



$tableEvents["dbo.contactMethods"] = new eventsBase;
$tdatacontactmethods[".hasEvents"] = false;

?>