<?php
$tdatamanualcalls = array();
$tdatamanualcalls[".searchableFields"] = array();
$tdatamanualcalls[".ShortName"] = "manualcalls";
$tdatamanualcalls[".OwnerID"] = "";
$tdatamanualcalls[".OriginalTable"] = "dbo.manualCalls";


$tdatamanualcalls[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamanualcalls[".originalPagesByType"] = $tdatamanualcalls[".pagesByType"];
$tdatamanualcalls[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamanualcalls[".originalPages"] = $tdatamanualcalls[".pages"];
$tdatamanualcalls[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamanualcalls[".originalDefaultPages"] = $tdatamanualcalls[".defaultPages"];

//	field labels
$fieldLabelsmanualcalls = array();
$fieldToolTipsmanualcalls = array();
$pageTitlesmanualcalls = array();
$placeHoldersmanualcalls = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsmanualcalls["Greek"] = array();
	$fieldToolTipsmanualcalls["Greek"] = array();
	$placeHoldersmanualcalls["Greek"] = array();
	$pageTitlesmanualcalls["Greek"] = array();
	$fieldLabelsmanualcalls["Greek"]["id"] = "Id";
	$fieldToolTipsmanualcalls["Greek"]["id"] = "";
	$placeHoldersmanualcalls["Greek"]["id"] = "";
	$fieldLabelsmanualcalls["Greek"]["phoneNumber"] = "Αριθμός για Κλήση";
	$fieldToolTipsmanualcalls["Greek"]["phoneNumber"] = "";
	$placeHoldersmanualcalls["Greek"]["phoneNumber"] = "";
	$fieldLabelsmanualcalls["Greek"]["timeStamp"] = "TimeStamp";
	$fieldToolTipsmanualcalls["Greek"]["timeStamp"] = "";
	$placeHoldersmanualcalls["Greek"]["timeStamp"] = "";
	if (count($fieldToolTipsmanualcalls["Greek"]))
		$tdatamanualcalls[".isUseToolTips"] = true;
}


	$tdatamanualcalls[".NCSearch"] = true;



$tdatamanualcalls[".shortTableName"] = "manualcalls";
$tdatamanualcalls[".nSecOptions"] = 0;

$tdatamanualcalls[".mainTableOwnerID"] = "";
$tdatamanualcalls[".entityType"] = 0;
$tdatamanualcalls[".connId"] = "CallCenter_at_10_41_2_31";


$tdatamanualcalls[".strOriginalTableName"] = "dbo.manualCalls";

	



$tdatamanualcalls[".showAddInPopup"] = false;

$tdatamanualcalls[".showEditInPopup"] = false;

$tdatamanualcalls[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamanualcalls[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamanualcalls[".listAjax"] = false;
//	temporary
$tdatamanualcalls[".listAjax"] = false;

	$tdatamanualcalls[".audit"] = false;

	$tdatamanualcalls[".locking"] = false;


$pages = $tdatamanualcalls[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamanualcalls[".edit"] = true;
	$tdatamanualcalls[".afterEditAction"] = 1;
	$tdatamanualcalls[".closePopupAfterEdit"] = 1;
	$tdatamanualcalls[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamanualcalls[".add"] = true;
$tdatamanualcalls[".afterAddAction"] = 0;
$tdatamanualcalls[".closePopupAfterAdd"] = 1;
$tdatamanualcalls[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamanualcalls[".list"] = true;
}



$tdatamanualcalls[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamanualcalls[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamanualcalls[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamanualcalls[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamanualcalls[".printFriendly"] = true;
}



$tdatamanualcalls[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamanualcalls[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamanualcalls[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamanualcalls[".isUseAjaxSuggest"] = false;

$tdatamanualcalls[".rowHighlite"] = true;



																																																																																																																											

$tdatamanualcalls[".ajaxCodeSnippetAdded"] = false;

$tdatamanualcalls[".buttonsAdded"] = false;

$tdatamanualcalls[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamanualcalls[".isUseTimeForSearch"] = false;


$tdatamanualcalls[".badgeColor"] = "DB7093";


$tdatamanualcalls[".allSearchFields"] = array();
$tdatamanualcalls[".filterFields"] = array();
$tdatamanualcalls[".requiredSearchFields"] = array();

$tdatamanualcalls[".googleLikeFields"] = array();
$tdatamanualcalls[".googleLikeFields"][] = "id";
$tdatamanualcalls[".googleLikeFields"][] = "phoneNumber";
$tdatamanualcalls[".googleLikeFields"][] = "timeStamp";



$tdatamanualcalls[".tableType"] = "list";

$tdatamanualcalls[".printerPageOrientation"] = 0;
$tdatamanualcalls[".nPrinterPageScale"] = 100;

$tdatamanualcalls[".nPrinterSplitRecords"] = 40;

$tdatamanualcalls[".geocodingEnabled"] = false;






$tdatamanualcalls[".searchIsRequiredForFilters"] = true;

$tdatamanualcalls[".noRecordsFirstPage"] = true;



$tdatamanualcalls[".pageSize"] = 20;

$tdatamanualcalls[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamanualcalls[".strOrderBy"] = $tstrOrderBy;

$tdatamanualcalls[".orderindexes"] = array();


$tdatamanualcalls[".sqlHead"] = "SELECT id,  	phoneNumber,  	[timeStamp]";
$tdatamanualcalls[".sqlFrom"] = "FROM dbo.manualCalls";
$tdatamanualcalls[".sqlWhereExpr"] = "";
$tdatamanualcalls[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamanualcalls[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamanualcalls[".arrGroupsPerPage"] = $arrGPP;

$tdatamanualcalls[".highlightSearchResults"] = true;

$tableKeysmanualcalls = array();
$tableKeysmanualcalls[] = "id";
$tdatamanualcalls[".Keys"] = $tableKeysmanualcalls;


$tdatamanualcalls[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.manualCalls";
	$fdata["Label"] = GetFieldLabel("dbo_manualCalls","id");
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


	$tdatamanualcalls["id"] = $fdata;
		$tdatamanualcalls[".searchableFields"][] = "id";
//	phoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "phoneNumber";
	$fdata["GoodName"] = "phoneNumber";
	$fdata["ownerTable"] = "dbo.manualCalls";
	$fdata["Label"] = GetFieldLabel("dbo_manualCalls","phoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phoneNumber";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatamanualcalls["phoneNumber"] = $fdata;
		$tdatamanualcalls[".searchableFields"][] = "phoneNumber";
//	timeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "timeStamp";
	$fdata["GoodName"] = "timeStamp";
	$fdata["ownerTable"] = "dbo.manualCalls";
	$fdata["Label"] = GetFieldLabel("dbo_manualCalls","timeStamp");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "timeStamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[timeStamp]";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatamanualcalls["timeStamp"] = $fdata;
		$tdatamanualcalls[".searchableFields"][] = "timeStamp";


$tables_data["dbo.manualCalls"]=&$tdatamanualcalls;
$field_labels["dbo_manualCalls"] = &$fieldLabelsmanualcalls;
$fieldToolTips["dbo_manualCalls"] = &$fieldToolTipsmanualcalls;
$placeHolders["dbo_manualCalls"] = &$placeHoldersmanualcalls;
$page_titles["dbo_manualCalls"] = &$pageTitlesmanualcalls;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.manualCalls"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.manualCalls"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_manualcalls()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	phoneNumber,  	[timeStamp]";
$proto0["m_strFrom"] = "FROM dbo.manualCalls";
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
	"m_strTable" => "dbo.manualCalls",
	"m_srcTableName" => "dbo.manualCalls"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.manualCalls";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "phoneNumber",
	"m_strTable" => "dbo.manualCalls",
	"m_srcTableName" => "dbo.manualCalls"
));

$proto8["m_sql"] = "phoneNumber";
$proto8["m_srcTableName"] = "dbo.manualCalls";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "timeStamp",
	"m_strTable" => "dbo.manualCalls",
	"m_srcTableName" => "dbo.manualCalls"
));

$proto10["m_sql"] = "[timeStamp]";
$proto10["m_srcTableName"] = "dbo.manualCalls";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.manualCalls";
$proto13["m_srcTableName"] = "dbo.manualCalls";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "phoneNumber";
$proto13["m_columns"][] = "timeStamp";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.manualCalls";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.manualCalls";
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
$proto0["m_srcTableName"]="dbo.manualCalls";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_manualcalls = createSqlQuery_manualcalls();


	
		;

			

$tdatamanualcalls[".sqlquery"] = $queryData_manualcalls;



include_once(getabspath("include/manualcalls_events.php"));
$tableEvents["dbo.manualCalls"] = new eventclass_manualcalls;
$tdatamanualcalls[".hasEvents"] = true;

?>