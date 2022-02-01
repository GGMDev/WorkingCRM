<?php
$tdatadenialreason = array();
$tdatadenialreason[".searchableFields"] = array();
$tdatadenialreason[".ShortName"] = "denialreason";
$tdatadenialreason[".OwnerID"] = "";
$tdatadenialreason[".OriginalTable"] = "dbo.denialReason";


$tdatadenialreason[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadenialreason[".originalPagesByType"] = $tdatadenialreason[".pagesByType"];
$tdatadenialreason[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadenialreason[".originalPages"] = $tdatadenialreason[".pages"];
$tdatadenialreason[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatadenialreason[".originalDefaultPages"] = $tdatadenialreason[".defaultPages"];

//	field labels
$fieldLabelsdenialreason = array();
$fieldToolTipsdenialreason = array();
$pageTitlesdenialreason = array();
$placeHoldersdenialreason = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdenialreason["Greek"] = array();
	$fieldToolTipsdenialreason["Greek"] = array();
	$placeHoldersdenialreason["Greek"] = array();
	$pageTitlesdenialreason["Greek"] = array();
	$fieldLabelsdenialreason["Greek"]["id"] = "Id";
	$fieldToolTipsdenialreason["Greek"]["id"] = "";
	$placeHoldersdenialreason["Greek"]["id"] = "";
	$fieldLabelsdenialreason["Greek"]["denialReason"] = "Λόγος Άρνησης";
	$fieldToolTipsdenialreason["Greek"]["denialReason"] = "";
	$placeHoldersdenialreason["Greek"]["denialReason"] = "";
	$fieldLabelsdenialreason["Greek"]["displayOrder"] = "Σειρά Εμφάνισης";
	$fieldToolTipsdenialreason["Greek"]["displayOrder"] = "";
	$placeHoldersdenialreason["Greek"]["displayOrder"] = "";
	$fieldLabelsdenialreason["Greek"]["callStatusID"] = "Call Status ID";
	$fieldToolTipsdenialreason["Greek"]["callStatusID"] = "";
	$placeHoldersdenialreason["Greek"]["callStatusID"] = "";
	if (count($fieldToolTipsdenialreason["Greek"]))
		$tdatadenialreason[".isUseToolTips"] = true;
}


	$tdatadenialreason[".NCSearch"] = true;



$tdatadenialreason[".shortTableName"] = "denialreason";
$tdatadenialreason[".nSecOptions"] = 0;

$tdatadenialreason[".mainTableOwnerID"] = "";
$tdatadenialreason[".entityType"] = 0;
$tdatadenialreason[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadenialreason[".strOriginalTableName"] = "dbo.denialReason";

	



$tdatadenialreason[".showAddInPopup"] = false;

$tdatadenialreason[".showEditInPopup"] = false;

$tdatadenialreason[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadenialreason[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadenialreason[".listAjax"] = false;
//	temporary
$tdatadenialreason[".listAjax"] = false;

	$tdatadenialreason[".audit"] = true;

	$tdatadenialreason[".locking"] = false;


$pages = $tdatadenialreason[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadenialreason[".edit"] = true;
	$tdatadenialreason[".afterEditAction"] = 0;
	$tdatadenialreason[".closePopupAfterEdit"] = 1;
	$tdatadenialreason[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadenialreason[".add"] = true;
$tdatadenialreason[".afterAddAction"] = 0;
$tdatadenialreason[".closePopupAfterAdd"] = 1;
$tdatadenialreason[".afterAddActionDetTable"] = "dbo.Calls";
}

if( $pages[PAGE_LIST] ) {
	$tdatadenialreason[".list"] = true;
}



$tdatadenialreason[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadenialreason[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadenialreason[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadenialreason[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadenialreason[".printFriendly"] = true;
}



$tdatadenialreason[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadenialreason[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadenialreason[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadenialreason[".isUseAjaxSuggest"] = false;

$tdatadenialreason[".rowHighlite"] = true;



																																																																																																																											

$tdatadenialreason[".ajaxCodeSnippetAdded"] = false;

$tdatadenialreason[".buttonsAdded"] = false;

$tdatadenialreason[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadenialreason[".isUseTimeForSearch"] = false;


$tdatadenialreason[".badgeColor"] = "EDCA00";


$tdatadenialreason[".allSearchFields"] = array();
$tdatadenialreason[".filterFields"] = array();
$tdatadenialreason[".requiredSearchFields"] = array();

$tdatadenialreason[".googleLikeFields"] = array();
$tdatadenialreason[".googleLikeFields"][] = "id";
$tdatadenialreason[".googleLikeFields"][] = "denialReason";
$tdatadenialreason[".googleLikeFields"][] = "displayOrder";
$tdatadenialreason[".googleLikeFields"][] = "callStatusID";



$tdatadenialreason[".tableType"] = "list";

$tdatadenialreason[".printerPageOrientation"] = 0;
$tdatadenialreason[".nPrinterPageScale"] = 100;

$tdatadenialreason[".nPrinterSplitRecords"] = 40;

$tdatadenialreason[".geocodingEnabled"] = false;






$tdatadenialreason[".searchIsRequiredForFilters"] = true;

$tdatadenialreason[".noRecordsFirstPage"] = true;



$tdatadenialreason[".pageSize"] = 20;

$tdatadenialreason[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY displayOrder";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadenialreason[".strOrderBy"] = $tstrOrderBy;

$tdatadenialreason[".orderindexes"] = array();
	$tdatadenialreason[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "displayOrder");



$tdatadenialreason[".sqlHead"] = "SELECT id,  denialReason,  displayOrder,  callStatusID";
$tdatadenialreason[".sqlFrom"] = "FROM dbo.denialReason";
$tdatadenialreason[".sqlWhereExpr"] = "";
$tdatadenialreason[".sqlTail"] = "";

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
$tdatadenialreason[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadenialreason[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadenialreason[".arrGroupsPerPage"] = $arrGPP;

$tdatadenialreason[".highlightSearchResults"] = true;

$tableKeysdenialreason = array();
$tableKeysdenialreason[] = "id";
$tdatadenialreason[".Keys"] = $tableKeysdenialreason;


$tdatadenialreason[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.denialReason";
	$fdata["Label"] = GetFieldLabel("dbo_denialReason","id");
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


	$tdatadenialreason["id"] = $fdata;
		$tdatadenialreason[".searchableFields"][] = "id";
//	denialReason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "denialReason";
	$fdata["GoodName"] = "denialReason";
	$fdata["ownerTable"] = "dbo.denialReason";
	$fdata["Label"] = GetFieldLabel("dbo_denialReason","denialReason");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "denialReason";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "denialReason";

	
	
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


	$tdatadenialreason["denialReason"] = $fdata;
		$tdatadenialreason[".searchableFields"][] = "denialReason";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.denialReason";
	$fdata["Label"] = GetFieldLabel("dbo_denialReason","displayOrder");
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


	$tdatadenialreason["displayOrder"] = $fdata;
		$tdatadenialreason[".searchableFields"][] = "displayOrder";
//	callStatusID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callStatusID";
	$fdata["GoodName"] = "callStatusID";
	$fdata["ownerTable"] = "dbo.denialReason";
	$fdata["Label"] = GetFieldLabel("dbo_denialReason","callStatusID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callStatusID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callStatusID";

	
	
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
	$edata["LookupTable"] = "dbo.callStatusLookup";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lookupDisplay";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
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


	$tdatadenialreason["callStatusID"] = $fdata;
		$tdatadenialreason[".searchableFields"][] = "callStatusID";


$tables_data["dbo.denialReason"]=&$tdatadenialreason;
$field_labels["dbo_denialReason"] = &$fieldLabelsdenialreason;
$fieldToolTips["dbo_denialReason"] = &$fieldToolTipsdenialreason;
$placeHolders["dbo_denialReason"] = &$placeHoldersdenialreason;
$page_titles["dbo_denialReason"] = &$pageTitlesdenialreason;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.denialReason"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.denialReason"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_denialreason()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  denialReason,  displayOrder,  callStatusID";
$proto0["m_strFrom"] = "FROM dbo.denialReason";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY displayOrder";
	
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
	"m_strTable" => "dbo.denialReason",
	"m_srcTableName" => "dbo.denialReason"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.denialReason";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "denialReason",
	"m_strTable" => "dbo.denialReason",
	"m_srcTableName" => "dbo.denialReason"
));

$proto8["m_sql"] = "denialReason";
$proto8["m_srcTableName"] = "dbo.denialReason";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.denialReason",
	"m_srcTableName" => "dbo.denialReason"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.denialReason";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "callStatusID",
	"m_strTable" => "dbo.denialReason",
	"m_srcTableName" => "dbo.denialReason"
));

$proto12["m_sql"] = "callStatusID";
$proto12["m_srcTableName"] = "dbo.denialReason";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.denialReason";
$proto15["m_srcTableName"] = "dbo.denialReason";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "denialReason";
$proto15["m_columns"][] = "displayOrder";
$proto15["m_columns"][] = "callStatusID";
$proto15["m_columns"][] = "dialerStatus";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.denialReason";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.denialReason";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.denialReason",
	"m_srcTableName" => "dbo.denialReason"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.denialReason";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_denialreason = createSqlQuery_denialreason();


	
		;

				

$tdatadenialreason[".sqlquery"] = $queryData_denialreason;



$tableEvents["dbo.denialReason"] = new eventsBase;
$tdatadenialreason[".hasEvents"] = false;

?>