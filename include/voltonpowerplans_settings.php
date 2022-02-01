<?php
$tdatavoltonpowerplans = array();
$tdatavoltonpowerplans[".searchableFields"] = array();
$tdatavoltonpowerplans[".ShortName"] = "voltonpowerplans";
$tdatavoltonpowerplans[".OwnerID"] = "";
$tdatavoltonpowerplans[".OriginalTable"] = "dbo.voltonPowerPlans";


$tdatavoltonpowerplans[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavoltonpowerplans[".originalPagesByType"] = $tdatavoltonpowerplans[".pagesByType"];
$tdatavoltonpowerplans[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavoltonpowerplans[".originalPages"] = $tdatavoltonpowerplans[".pages"];
$tdatavoltonpowerplans[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavoltonpowerplans[".originalDefaultPages"] = $tdatavoltonpowerplans[".defaultPages"];

//	field labels
$fieldLabelsvoltonpowerplans = array();
$fieldToolTipsvoltonpowerplans = array();
$pageTitlesvoltonpowerplans = array();
$placeHoldersvoltonpowerplans = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvoltonpowerplans["Greek"] = array();
	$fieldToolTipsvoltonpowerplans["Greek"] = array();
	$placeHoldersvoltonpowerplans["Greek"] = array();
	$pageTitlesvoltonpowerplans["Greek"] = array();
	$fieldLabelsvoltonpowerplans["Greek"]["id"] = "Id";
	$fieldToolTipsvoltonpowerplans["Greek"]["id"] = "";
	$placeHoldersvoltonpowerplans["Greek"]["id"] = "";
	$fieldLabelsvoltonpowerplans["Greek"]["voltonPowerPlan"] = "Volton Power Plan";
	$fieldToolTipsvoltonpowerplans["Greek"]["voltonPowerPlan"] = "";
	$placeHoldersvoltonpowerplans["Greek"]["voltonPowerPlan"] = "";
	$fieldLabelsvoltonpowerplans["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipsvoltonpowerplans["Greek"]["displayOrder"] = "";
	$placeHoldersvoltonpowerplans["Greek"]["displayOrder"] = "";
	$fieldLabelsvoltonpowerplans["Greek"]["planDuration"] = "Plan Duration";
	$fieldToolTipsvoltonpowerplans["Greek"]["planDuration"] = "";
	$placeHoldersvoltonpowerplans["Greek"]["planDuration"] = "";
	if (count($fieldToolTipsvoltonpowerplans["Greek"]))
		$tdatavoltonpowerplans[".isUseToolTips"] = true;
}


	$tdatavoltonpowerplans[".NCSearch"] = true;



$tdatavoltonpowerplans[".shortTableName"] = "voltonpowerplans";
$tdatavoltonpowerplans[".nSecOptions"] = 0;

$tdatavoltonpowerplans[".mainTableOwnerID"] = "";
$tdatavoltonpowerplans[".entityType"] = 0;
$tdatavoltonpowerplans[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavoltonpowerplans[".strOriginalTableName"] = "dbo.voltonPowerPlans";

	



$tdatavoltonpowerplans[".showAddInPopup"] = false;

$tdatavoltonpowerplans[".showEditInPopup"] = false;

$tdatavoltonpowerplans[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoltonpowerplans[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavoltonpowerplans[".listAjax"] = false;
//	temporary
$tdatavoltonpowerplans[".listAjax"] = false;

	$tdatavoltonpowerplans[".audit"] = true;

	$tdatavoltonpowerplans[".locking"] = false;


$pages = $tdatavoltonpowerplans[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavoltonpowerplans[".edit"] = true;
	$tdatavoltonpowerplans[".afterEditAction"] = 1;
	$tdatavoltonpowerplans[".closePopupAfterEdit"] = 1;
	$tdatavoltonpowerplans[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavoltonpowerplans[".add"] = true;
$tdatavoltonpowerplans[".afterAddAction"] = 0;
$tdatavoltonpowerplans[".closePopupAfterAdd"] = 1;
$tdatavoltonpowerplans[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavoltonpowerplans[".list"] = true;
}



$tdatavoltonpowerplans[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavoltonpowerplans[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavoltonpowerplans[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavoltonpowerplans[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavoltonpowerplans[".printFriendly"] = true;
}



$tdatavoltonpowerplans[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavoltonpowerplans[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavoltonpowerplans[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavoltonpowerplans[".isUseAjaxSuggest"] = false;

$tdatavoltonpowerplans[".rowHighlite"] = true;



																																																																																																																											

$tdatavoltonpowerplans[".ajaxCodeSnippetAdded"] = false;

$tdatavoltonpowerplans[".buttonsAdded"] = false;

$tdatavoltonpowerplans[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavoltonpowerplans[".isUseTimeForSearch"] = false;


$tdatavoltonpowerplans[".badgeColor"] = "4169E1";


$tdatavoltonpowerplans[".allSearchFields"] = array();
$tdatavoltonpowerplans[".filterFields"] = array();
$tdatavoltonpowerplans[".requiredSearchFields"] = array();

$tdatavoltonpowerplans[".googleLikeFields"] = array();
$tdatavoltonpowerplans[".googleLikeFields"][] = "id";
$tdatavoltonpowerplans[".googleLikeFields"][] = "voltonPowerPlan";
$tdatavoltonpowerplans[".googleLikeFields"][] = "displayOrder";
$tdatavoltonpowerplans[".googleLikeFields"][] = "planDuration";



$tdatavoltonpowerplans[".tableType"] = "list";

$tdatavoltonpowerplans[".printerPageOrientation"] = 0;
$tdatavoltonpowerplans[".nPrinterPageScale"] = 100;

$tdatavoltonpowerplans[".nPrinterSplitRecords"] = 40;

$tdatavoltonpowerplans[".geocodingEnabled"] = false;






$tdatavoltonpowerplans[".searchIsRequiredForFilters"] = true;

$tdatavoltonpowerplans[".noRecordsFirstPage"] = true;



$tdatavoltonpowerplans[".pageSize"] = 20;

$tdatavoltonpowerplans[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoltonpowerplans[".strOrderBy"] = $tstrOrderBy;

$tdatavoltonpowerplans[".orderindexes"] = array();


$tdatavoltonpowerplans[".sqlHead"] = "SELECT id,  	voltonPowerPlan,  	displayOrder,  	planDuration";
$tdatavoltonpowerplans[".sqlFrom"] = "FROM dbo.voltonPowerPlans";
$tdatavoltonpowerplans[".sqlWhereExpr"] = "";
$tdatavoltonpowerplans[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoltonpowerplans[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoltonpowerplans[".arrGroupsPerPage"] = $arrGPP;

$tdatavoltonpowerplans[".highlightSearchResults"] = true;

$tableKeysvoltonpowerplans = array();
$tableKeysvoltonpowerplans[] = "id";
$tdatavoltonpowerplans[".Keys"] = $tableKeysvoltonpowerplans;


$tdatavoltonpowerplans[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.voltonPowerPlans";
	$fdata["Label"] = GetFieldLabel("dbo_voltonPowerPlans","id");
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


	$tdatavoltonpowerplans["id"] = $fdata;
		$tdatavoltonpowerplans[".searchableFields"][] = "id";
//	voltonPowerPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "voltonPowerPlan";
	$fdata["GoodName"] = "voltonPowerPlan";
	$fdata["ownerTable"] = "dbo.voltonPowerPlans";
	$fdata["Label"] = GetFieldLabel("dbo_voltonPowerPlans","voltonPowerPlan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonPowerPlan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonPowerPlan";

	
	
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


	$tdatavoltonpowerplans["voltonPowerPlan"] = $fdata;
		$tdatavoltonpowerplans[".searchableFields"][] = "voltonPowerPlan";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.voltonPowerPlans";
	$fdata["Label"] = GetFieldLabel("dbo_voltonPowerPlans","displayOrder");
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


	$tdatavoltonpowerplans["displayOrder"] = $fdata;
		$tdatavoltonpowerplans[".searchableFields"][] = "displayOrder";
//	planDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "planDuration";
	$fdata["GoodName"] = "planDuration";
	$fdata["ownerTable"] = "dbo.voltonPowerPlans";
	$fdata["Label"] = GetFieldLabel("dbo_voltonPowerPlans","planDuration");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "planDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planDuration";

	
	
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


	$tdatavoltonpowerplans["planDuration"] = $fdata;
		$tdatavoltonpowerplans[".searchableFields"][] = "planDuration";


$tables_data["dbo.voltonPowerPlans"]=&$tdatavoltonpowerplans;
$field_labels["dbo_voltonPowerPlans"] = &$fieldLabelsvoltonpowerplans;
$fieldToolTips["dbo_voltonPowerPlans"] = &$fieldToolTipsvoltonpowerplans;
$placeHolders["dbo_voltonPowerPlans"] = &$placeHoldersvoltonpowerplans;
$page_titles["dbo_voltonPowerPlans"] = &$pageTitlesvoltonpowerplans;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.voltonPowerPlans"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.voltonPowerPlans"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_voltonpowerplans()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	voltonPowerPlan,  	displayOrder,  	planDuration";
$proto0["m_strFrom"] = "FROM dbo.voltonPowerPlans";
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
	"m_strTable" => "dbo.voltonPowerPlans",
	"m_srcTableName" => "dbo.voltonPowerPlans"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.voltonPowerPlans";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonPowerPlan",
	"m_strTable" => "dbo.voltonPowerPlans",
	"m_srcTableName" => "dbo.voltonPowerPlans"
));

$proto8["m_sql"] = "voltonPowerPlan";
$proto8["m_srcTableName"] = "dbo.voltonPowerPlans";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.voltonPowerPlans",
	"m_srcTableName" => "dbo.voltonPowerPlans"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.voltonPowerPlans";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "planDuration",
	"m_strTable" => "dbo.voltonPowerPlans",
	"m_srcTableName" => "dbo.voltonPowerPlans"
));

$proto12["m_sql"] = "planDuration";
$proto12["m_srcTableName"] = "dbo.voltonPowerPlans";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.voltonPowerPlans";
$proto15["m_srcTableName"] = "dbo.voltonPowerPlans";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "voltonPowerPlan";
$proto15["m_columns"][] = "displayOrder";
$proto15["m_columns"][] = "planDuration";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.voltonPowerPlans";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.voltonPowerPlans";
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
$proto0["m_srcTableName"]="dbo.voltonPowerPlans";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voltonpowerplans = createSqlQuery_voltonpowerplans();


	
		;

				

$tdatavoltonpowerplans[".sqlquery"] = $queryData_voltonpowerplans;



$tableEvents["dbo.voltonPowerPlans"] = new eventsBase;
$tdatavoltonpowerplans[".hasEvents"] = false;

?>