<?php
$tdatacallcenter_ugmembers = array();
$tdatacallcenter_ugmembers[".searchableFields"] = array();
$tdatacallcenter_ugmembers[".ShortName"] = "callcenter_ugmembers";
$tdatacallcenter_ugmembers[".OwnerID"] = "";
$tdatacallcenter_ugmembers[".OriginalTable"] = "dbo.callcenter_ugmembers";


$tdatacallcenter_ugmembers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacallcenter_ugmembers[".originalPagesByType"] = $tdatacallcenter_ugmembers[".pagesByType"];
$tdatacallcenter_ugmembers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacallcenter_ugmembers[".originalPages"] = $tdatacallcenter_ugmembers[".pages"];
$tdatacallcenter_ugmembers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacallcenter_ugmembers[".originalDefaultPages"] = $tdatacallcenter_ugmembers[".defaultPages"];

//	field labels
$fieldLabelscallcenter_ugmembers = array();
$fieldToolTipscallcenter_ugmembers = array();
$pageTitlescallcenter_ugmembers = array();
$placeHolderscallcenter_ugmembers = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallcenter_ugmembers["Greek"] = array();
	$fieldToolTipscallcenter_ugmembers["Greek"] = array();
	$placeHolderscallcenter_ugmembers["Greek"] = array();
	$pageTitlescallcenter_ugmembers["Greek"] = array();
	$fieldLabelscallcenter_ugmembers["Greek"]["UserName"] = "User Name";
	$fieldToolTipscallcenter_ugmembers["Greek"]["UserName"] = "";
	$placeHolderscallcenter_ugmembers["Greek"]["UserName"] = "";
	$fieldLabelscallcenter_ugmembers["Greek"]["GroupID"] = "Group ID";
	$fieldToolTipscallcenter_ugmembers["Greek"]["GroupID"] = "";
	$placeHolderscallcenter_ugmembers["Greek"]["GroupID"] = "";
	$fieldLabelscallcenter_ugmembers["Greek"]["numericGrpId"] = "Numeric Grp Id";
	$fieldToolTipscallcenter_ugmembers["Greek"]["numericGrpId"] = "";
	$placeHolderscallcenter_ugmembers["Greek"]["numericGrpId"] = "";
	if (count($fieldToolTipscallcenter_ugmembers["Greek"]))
		$tdatacallcenter_ugmembers[".isUseToolTips"] = true;
}


	$tdatacallcenter_ugmembers[".NCSearch"] = true;



$tdatacallcenter_ugmembers[".shortTableName"] = "callcenter_ugmembers";
$tdatacallcenter_ugmembers[".nSecOptions"] = 0;

$tdatacallcenter_ugmembers[".mainTableOwnerID"] = "";
$tdatacallcenter_ugmembers[".entityType"] = 0;
$tdatacallcenter_ugmembers[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallcenter_ugmembers[".strOriginalTableName"] = "dbo.callcenter_ugmembers";

	



$tdatacallcenter_ugmembers[".showAddInPopup"] = false;

$tdatacallcenter_ugmembers[".showEditInPopup"] = false;

$tdatacallcenter_ugmembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallcenter_ugmembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallcenter_ugmembers[".listAjax"] = false;
//	temporary
$tdatacallcenter_ugmembers[".listAjax"] = false;

	$tdatacallcenter_ugmembers[".audit"] = true;

	$tdatacallcenter_ugmembers[".locking"] = false;


$pages = $tdatacallcenter_ugmembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallcenter_ugmembers[".edit"] = true;
	$tdatacallcenter_ugmembers[".afterEditAction"] = 1;
	$tdatacallcenter_ugmembers[".closePopupAfterEdit"] = 1;
	$tdatacallcenter_ugmembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallcenter_ugmembers[".add"] = true;
$tdatacallcenter_ugmembers[".afterAddAction"] = 0;
$tdatacallcenter_ugmembers[".closePopupAfterAdd"] = 1;
$tdatacallcenter_ugmembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallcenter_ugmembers[".list"] = true;
}



$tdatacallcenter_ugmembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallcenter_ugmembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallcenter_ugmembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallcenter_ugmembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallcenter_ugmembers[".printFriendly"] = true;
}



$tdatacallcenter_ugmembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallcenter_ugmembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallcenter_ugmembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallcenter_ugmembers[".isUseAjaxSuggest"] = false;

$tdatacallcenter_ugmembers[".rowHighlite"] = true;



																																																																																																																											

$tdatacallcenter_ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdatacallcenter_ugmembers[".buttonsAdded"] = false;

$tdatacallcenter_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallcenter_ugmembers[".isUseTimeForSearch"] = false;


$tdatacallcenter_ugmembers[".badgeColor"] = "BC8F8F";


$tdatacallcenter_ugmembers[".allSearchFields"] = array();
$tdatacallcenter_ugmembers[".filterFields"] = array();
$tdatacallcenter_ugmembers[".requiredSearchFields"] = array();

$tdatacallcenter_ugmembers[".googleLikeFields"] = array();
$tdatacallcenter_ugmembers[".googleLikeFields"][] = "UserName";
$tdatacallcenter_ugmembers[".googleLikeFields"][] = "GroupID";
$tdatacallcenter_ugmembers[".googleLikeFields"][] = "numericGrpId";



$tdatacallcenter_ugmembers[".tableType"] = "list";

$tdatacallcenter_ugmembers[".printerPageOrientation"] = 0;
$tdatacallcenter_ugmembers[".nPrinterPageScale"] = 100;

$tdatacallcenter_ugmembers[".nPrinterSplitRecords"] = 40;

$tdatacallcenter_ugmembers[".geocodingEnabled"] = false;






$tdatacallcenter_ugmembers[".searchIsRequiredForFilters"] = true;

$tdatacallcenter_ugmembers[".noRecordsFirstPage"] = true;



$tdatacallcenter_ugmembers[".pageSize"] = 20;

$tdatacallcenter_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallcenter_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdatacallcenter_ugmembers[".orderindexes"] = array();


$tdatacallcenter_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID,    GroupID as numericGrpId";
$tdatacallcenter_ugmembers[".sqlFrom"] = "FROM dbo.callcenter_ugmembers";
$tdatacallcenter_ugmembers[".sqlWhereExpr"] = "";
$tdatacallcenter_ugmembers[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacallcenter_ugmembers[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallcenter_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallcenter_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdatacallcenter_ugmembers[".highlightSearchResults"] = true;

$tableKeyscallcenter_ugmembers = array();
$tableKeyscallcenter_ugmembers[] = "UserName";
$tableKeyscallcenter_ugmembers[] = "GroupID";
$tdatacallcenter_ugmembers[".Keys"] = $tableKeyscallcenter_ugmembers;


$tdatacallcenter_ugmembers[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dbo.callcenter_ugmembers";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugmembers","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UserName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatacallcenter_ugmembers["UserName"] = $fdata;
		$tdatacallcenter_ugmembers[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "dbo.callcenter_ugmembers";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugmembers","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.callcenter_uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";

	

	
	$edata["LookupOrderBy"] = "Label";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatacallcenter_ugmembers["GroupID"] = $fdata;
		$tdatacallcenter_ugmembers[".searchableFields"][] = "GroupID";
//	numericGrpId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numericGrpId";
	$fdata["GoodName"] = "numericGrpId";
	$fdata["ownerTable"] = "dbo.callcenter_ugmembers";
	$fdata["Label"] = GetFieldLabel("dbo_callcenter_ugmembers","numericGrpId");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatacallcenter_ugmembers["numericGrpId"] = $fdata;
		$tdatacallcenter_ugmembers[".searchableFields"][] = "numericGrpId";


$tables_data["dbo.callcenter_ugmembers"]=&$tdatacallcenter_ugmembers;
$field_labels["dbo_callcenter_ugmembers"] = &$fieldLabelscallcenter_ugmembers;
$fieldToolTips["dbo_callcenter_ugmembers"] = &$fieldToolTipscallcenter_ugmembers;
$placeHolders["dbo_callcenter_ugmembers"] = &$placeHolderscallcenter_ugmembers;
$page_titles["dbo_callcenter_ugmembers"] = &$pageTitlescallcenter_ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callcenter_ugmembers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callcenter_ugmembers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callcenter_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID,    GroupID as numericGrpId";
$proto0["m_strFrom"] = "FROM dbo.callcenter_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "dbo.callcenter_ugmembers",
	"m_srcTableName" => "dbo.callcenter_ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "dbo.callcenter_ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "dbo.callcenter_ugmembers",
	"m_srcTableName" => "dbo.callcenter_ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "dbo.callcenter_ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "dbo.callcenter_ugmembers",
	"m_srcTableName" => "dbo.callcenter_ugmembers"
));

$proto10["m_sql"] = "GroupID";
$proto10["m_srcTableName"] = "dbo.callcenter_ugmembers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "numericGrpId";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.callcenter_ugmembers";
$proto13["m_srcTableName"] = "dbo.callcenter_ugmembers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UserName";
$proto13["m_columns"][] = "GroupID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.callcenter_ugmembers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.callcenter_ugmembers";
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
$proto0["m_srcTableName"]="dbo.callcenter_ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callcenter_ugmembers = createSqlQuery_callcenter_ugmembers();


	
		;

			

$tdatacallcenter_ugmembers[".sqlquery"] = $queryData_callcenter_ugmembers;



$tableEvents["dbo.callcenter_ugmembers"] = new eventsBase;
$tdatacallcenter_ugmembers[".hasEvents"] = false;

?>