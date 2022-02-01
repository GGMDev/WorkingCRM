<?php
$tdatadbo_phonetypes = array();
$tdatadbo_phonetypes[".searchableFields"] = array();
$tdatadbo_phonetypes[".ShortName"] = "dbo_phonetypes";
$tdatadbo_phonetypes[".OwnerID"] = "";
$tdatadbo_phonetypes[".OriginalTable"] = "dbo.phoneTypes";


$tdatadbo_phonetypes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_phonetypes[".originalPagesByType"] = $tdatadbo_phonetypes[".pagesByType"];
$tdatadbo_phonetypes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_phonetypes[".originalPages"] = $tdatadbo_phonetypes[".pages"];
$tdatadbo_phonetypes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_phonetypes[".originalDefaultPages"] = $tdatadbo_phonetypes[".defaultPages"];

//	field labels
$fieldLabelsdbo_phonetypes = array();
$fieldToolTipsdbo_phonetypes = array();
$pageTitlesdbo_phonetypes = array();
$placeHoldersdbo_phonetypes = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_phonetypes["Greek"] = array();
	$fieldToolTipsdbo_phonetypes["Greek"] = array();
	$placeHoldersdbo_phonetypes["Greek"] = array();
	$pageTitlesdbo_phonetypes["Greek"] = array();
	$fieldLabelsdbo_phonetypes["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_phonetypes["Greek"]["id"] = "";
	$placeHoldersdbo_phonetypes["Greek"]["id"] = "";
	$fieldLabelsdbo_phonetypes["Greek"]["phoneType"] = "Phone Type";
	$fieldToolTipsdbo_phonetypes["Greek"]["phoneType"] = "";
	$placeHoldersdbo_phonetypes["Greek"]["phoneType"] = "";
	$fieldLabelsdbo_phonetypes["Greek"]["dialerDnc"] = "Dialer Dnc";
	$fieldToolTipsdbo_phonetypes["Greek"]["dialerDnc"] = "";
	$placeHoldersdbo_phonetypes["Greek"]["dialerDnc"] = "";
	if (count($fieldToolTipsdbo_phonetypes["Greek"]))
		$tdatadbo_phonetypes[".isUseToolTips"] = true;
}


	$tdatadbo_phonetypes[".NCSearch"] = true;



$tdatadbo_phonetypes[".shortTableName"] = "dbo_phonetypes";
$tdatadbo_phonetypes[".nSecOptions"] = 0;

$tdatadbo_phonetypes[".mainTableOwnerID"] = "";
$tdatadbo_phonetypes[".entityType"] = 0;
$tdatadbo_phonetypes[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_phonetypes[".strOriginalTableName"] = "dbo.phoneTypes";

	



$tdatadbo_phonetypes[".showAddInPopup"] = false;

$tdatadbo_phonetypes[".showEditInPopup"] = false;

$tdatadbo_phonetypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_phonetypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_phonetypes[".listAjax"] = false;
//	temporary
$tdatadbo_phonetypes[".listAjax"] = false;

	$tdatadbo_phonetypes[".audit"] = true;

	$tdatadbo_phonetypes[".locking"] = false;


$pages = $tdatadbo_phonetypes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_phonetypes[".edit"] = true;
	$tdatadbo_phonetypes[".afterEditAction"] = 0;
	$tdatadbo_phonetypes[".closePopupAfterEdit"] = 1;
	$tdatadbo_phonetypes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_phonetypes[".add"] = true;
$tdatadbo_phonetypes[".afterAddAction"] = 0;
$tdatadbo_phonetypes[".closePopupAfterAdd"] = 1;
$tdatadbo_phonetypes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_phonetypes[".list"] = true;
}



$tdatadbo_phonetypes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_phonetypes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_phonetypes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_phonetypes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_phonetypes[".printFriendly"] = true;
}



$tdatadbo_phonetypes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_phonetypes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_phonetypes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_phonetypes[".isUseAjaxSuggest"] = false;

$tdatadbo_phonetypes[".rowHighlite"] = true;



																																																																																																																											

$tdatadbo_phonetypes[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_phonetypes[".buttonsAdded"] = false;

$tdatadbo_phonetypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_phonetypes[".isUseTimeForSearch"] = false;


$tdatadbo_phonetypes[".badgeColor"] = "6DA5C8";


$tdatadbo_phonetypes[".allSearchFields"] = array();
$tdatadbo_phonetypes[".filterFields"] = array();
$tdatadbo_phonetypes[".requiredSearchFields"] = array();

$tdatadbo_phonetypes[".googleLikeFields"] = array();
$tdatadbo_phonetypes[".googleLikeFields"][] = "id";
$tdatadbo_phonetypes[".googleLikeFields"][] = "phoneType";
$tdatadbo_phonetypes[".googleLikeFields"][] = "dialerDnc";



$tdatadbo_phonetypes[".tableType"] = "list";

$tdatadbo_phonetypes[".printerPageOrientation"] = 0;
$tdatadbo_phonetypes[".nPrinterPageScale"] = 100;

$tdatadbo_phonetypes[".nPrinterSplitRecords"] = 40;

$tdatadbo_phonetypes[".geocodingEnabled"] = false;






$tdatadbo_phonetypes[".searchIsRequiredForFilters"] = true;

$tdatadbo_phonetypes[".noRecordsFirstPage"] = true;



$tdatadbo_phonetypes[".pageSize"] = 20;

$tdatadbo_phonetypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_phonetypes[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_phonetypes[".orderindexes"] = array();


$tdatadbo_phonetypes[".sqlHead"] = "SELECT id,  	phoneType,  	dialerDnc";
$tdatadbo_phonetypes[".sqlFrom"] = "FROM dbo.phoneTypes";
$tdatadbo_phonetypes[".sqlWhereExpr"] = "";
$tdatadbo_phonetypes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_phonetypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_phonetypes[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_phonetypes[".highlightSearchResults"] = true;

$tableKeysdbo_phonetypes = array();
$tableKeysdbo_phonetypes[] = "id";
$tdatadbo_phonetypes[".Keys"] = $tableKeysdbo_phonetypes;


$tdatadbo_phonetypes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.phoneTypes";
	$fdata["Label"] = GetFieldLabel("dbo_phoneTypes","id");
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


	$tdatadbo_phonetypes["id"] = $fdata;
		$tdatadbo_phonetypes[".searchableFields"][] = "id";
//	phoneType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "phoneType";
	$fdata["GoodName"] = "phoneType";
	$fdata["ownerTable"] = "dbo.phoneTypes";
	$fdata["Label"] = GetFieldLabel("dbo_phoneTypes","phoneType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phoneType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phoneType";

	
	
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


	$tdatadbo_phonetypes["phoneType"] = $fdata;
		$tdatadbo_phonetypes[".searchableFields"][] = "phoneType";
//	dialerDnc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerDnc";
	$fdata["GoodName"] = "dialerDnc";
	$fdata["ownerTable"] = "dbo.phoneTypes";
	$fdata["Label"] = GetFieldLabel("dbo_phoneTypes","dialerDnc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dialerDnc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerDnc";

	
	
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


	$tdatadbo_phonetypes["dialerDnc"] = $fdata;
		$tdatadbo_phonetypes[".searchableFields"][] = "dialerDnc";


$tables_data["dbo.phoneTypes"]=&$tdatadbo_phonetypes;
$field_labels["dbo_phoneTypes"] = &$fieldLabelsdbo_phonetypes;
$fieldToolTips["dbo_phoneTypes"] = &$fieldToolTipsdbo_phonetypes;
$placeHolders["dbo_phoneTypes"] = &$placeHoldersdbo_phonetypes;
$page_titles["dbo_phoneTypes"] = &$pageTitlesdbo_phonetypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.phoneTypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.phoneTypes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_phonetypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	phoneType,  	dialerDnc";
$proto0["m_strFrom"] = "FROM dbo.phoneTypes";
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
	"m_strTable" => "dbo.phoneTypes",
	"m_srcTableName" => "dbo.phoneTypes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.phoneTypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "phoneType",
	"m_strTable" => "dbo.phoneTypes",
	"m_srcTableName" => "dbo.phoneTypes"
));

$proto8["m_sql"] = "phoneType";
$proto8["m_srcTableName"] = "dbo.phoneTypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerDnc",
	"m_strTable" => "dbo.phoneTypes",
	"m_srcTableName" => "dbo.phoneTypes"
));

$proto10["m_sql"] = "dialerDnc";
$proto10["m_srcTableName"] = "dbo.phoneTypes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.phoneTypes";
$proto13["m_srcTableName"] = "dbo.phoneTypes";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "phoneType";
$proto13["m_columns"][] = "dialerDnc";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.phoneTypes";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.phoneTypes";
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
$proto0["m_srcTableName"]="dbo.phoneTypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_phonetypes = createSqlQuery_dbo_phonetypes();


	
		;

			

$tdatadbo_phonetypes[".sqlquery"] = $queryData_dbo_phonetypes;



$tableEvents["dbo.phoneTypes"] = new eventsBase;
$tdatadbo_phonetypes[".hasEvents"] = false;

?>