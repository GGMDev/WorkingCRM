<?php
$tdatacallsubclassifications = array();
$tdatacallsubclassifications[".searchableFields"] = array();
$tdatacallsubclassifications[".ShortName"] = "callsubclassifications";
$tdatacallsubclassifications[".OwnerID"] = "";
$tdatacallsubclassifications[".OriginalTable"] = "dbo.callSubClassifications";


$tdatacallsubclassifications[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacallsubclassifications[".originalPagesByType"] = $tdatacallsubclassifications[".pagesByType"];
$tdatacallsubclassifications[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacallsubclassifications[".originalPages"] = $tdatacallsubclassifications[".pages"];
$tdatacallsubclassifications[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacallsubclassifications[".originalDefaultPages"] = $tdatacallsubclassifications[".defaultPages"];

//	field labels
$fieldLabelscallsubclassifications = array();
$fieldToolTipscallsubclassifications = array();
$pageTitlescallsubclassifications = array();
$placeHolderscallsubclassifications = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallsubclassifications["Greek"] = array();
	$fieldToolTipscallsubclassifications["Greek"] = array();
	$placeHolderscallsubclassifications["Greek"] = array();
	$pageTitlescallsubclassifications["Greek"] = array();
	$fieldLabelscallsubclassifications["Greek"]["ID"] = "ID";
	$fieldToolTipscallsubclassifications["Greek"]["ID"] = "";
	$placeHolderscallsubclassifications["Greek"]["ID"] = "";
	$fieldLabelscallsubclassifications["Greek"]["classificationId"] = "Ομάδα Κλήσης";
	$fieldToolTipscallsubclassifications["Greek"]["classificationId"] = "";
	$placeHolderscallsubclassifications["Greek"]["classificationId"] = "";
	$fieldLabelscallsubclassifications["Greek"]["subClassification"] = "Τιμή Ομάδας Κλήσης";
	$fieldToolTipscallsubclassifications["Greek"]["subClassification"] = "";
	$placeHolderscallsubclassifications["Greek"]["subClassification"] = "";
	$fieldLabelscallsubclassifications["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipscallsubclassifications["Greek"]["displayOrder"] = "";
	$placeHolderscallsubclassifications["Greek"]["displayOrder"] = "";
	if (count($fieldToolTipscallsubclassifications["Greek"]))
		$tdatacallsubclassifications[".isUseToolTips"] = true;
}


	$tdatacallsubclassifications[".NCSearch"] = true;



$tdatacallsubclassifications[".shortTableName"] = "callsubclassifications";
$tdatacallsubclassifications[".nSecOptions"] = 0;

$tdatacallsubclassifications[".mainTableOwnerID"] = "";
$tdatacallsubclassifications[".entityType"] = 0;
$tdatacallsubclassifications[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallsubclassifications[".strOriginalTableName"] = "dbo.callSubClassifications";

	



$tdatacallsubclassifications[".showAddInPopup"] = false;

$tdatacallsubclassifications[".showEditInPopup"] = false;

$tdatacallsubclassifications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallsubclassifications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallsubclassifications[".listAjax"] = false;
//	temporary
$tdatacallsubclassifications[".listAjax"] = false;

	$tdatacallsubclassifications[".audit"] = true;

	$tdatacallsubclassifications[".locking"] = false;


$pages = $tdatacallsubclassifications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallsubclassifications[".edit"] = true;
	$tdatacallsubclassifications[".afterEditAction"] = 1;
	$tdatacallsubclassifications[".closePopupAfterEdit"] = 1;
	$tdatacallsubclassifications[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallsubclassifications[".add"] = true;
$tdatacallsubclassifications[".afterAddAction"] = 0;
$tdatacallsubclassifications[".closePopupAfterAdd"] = 1;
$tdatacallsubclassifications[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallsubclassifications[".list"] = true;
}



$tdatacallsubclassifications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallsubclassifications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallsubclassifications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallsubclassifications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallsubclassifications[".printFriendly"] = true;
}



$tdatacallsubclassifications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallsubclassifications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallsubclassifications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallsubclassifications[".isUseAjaxSuggest"] = false;

$tdatacallsubclassifications[".rowHighlite"] = true;



																																																																																																																											

$tdatacallsubclassifications[".ajaxCodeSnippetAdded"] = false;

$tdatacallsubclassifications[".buttonsAdded"] = false;

$tdatacallsubclassifications[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallsubclassifications[".isUseTimeForSearch"] = false;


$tdatacallsubclassifications[".badgeColor"] = "3cb371";


$tdatacallsubclassifications[".allSearchFields"] = array();
$tdatacallsubclassifications[".filterFields"] = array();
$tdatacallsubclassifications[".requiredSearchFields"] = array();

$tdatacallsubclassifications[".googleLikeFields"] = array();
$tdatacallsubclassifications[".googleLikeFields"][] = "ID";
$tdatacallsubclassifications[".googleLikeFields"][] = "classificationId";
$tdatacallsubclassifications[".googleLikeFields"][] = "subClassification";
$tdatacallsubclassifications[".googleLikeFields"][] = "displayOrder";



$tdatacallsubclassifications[".tableType"] = "list";

$tdatacallsubclassifications[".printerPageOrientation"] = 0;
$tdatacallsubclassifications[".nPrinterPageScale"] = 100;

$tdatacallsubclassifications[".nPrinterSplitRecords"] = 40;

$tdatacallsubclassifications[".geocodingEnabled"] = false;






$tdatacallsubclassifications[".searchIsRequiredForFilters"] = true;

$tdatacallsubclassifications[".noRecordsFirstPage"] = true;



$tdatacallsubclassifications[".pageSize"] = 20;

$tdatacallsubclassifications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallsubclassifications[".strOrderBy"] = $tstrOrderBy;

$tdatacallsubclassifications[".orderindexes"] = array();


$tdatacallsubclassifications[".sqlHead"] = "SELECT ID,  	classificationId,  	subClassification,  	displayOrder";
$tdatacallsubclassifications[".sqlFrom"] = "FROM dbo.callSubClassifications";
$tdatacallsubclassifications[".sqlWhereExpr"] = "";
$tdatacallsubclassifications[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallsubclassifications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallsubclassifications[".arrGroupsPerPage"] = $arrGPP;

$tdatacallsubclassifications[".highlightSearchResults"] = true;

$tableKeyscallsubclassifications = array();
$tableKeyscallsubclassifications[] = "ID";
$tdatacallsubclassifications[".Keys"] = $tableKeyscallsubclassifications;


$tdatacallsubclassifications[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dbo.callSubClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callSubClassifications","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatacallsubclassifications["ID"] = $fdata;
		$tdatacallsubclassifications[".searchableFields"][] = "ID";
//	classificationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "classificationId";
	$fdata["GoodName"] = "classificationId";
	$fdata["ownerTable"] = "dbo.callSubClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callSubClassifications","classificationId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "classificationId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "classificationId";

	
	
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
	$edata["LookupTable"] = "dbo.callClassifications";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "classification";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacallsubclassifications["classificationId"] = $fdata;
		$tdatacallsubclassifications[".searchableFields"][] = "classificationId";
//	subClassification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subClassification";
	$fdata["GoodName"] = "subClassification";
	$fdata["ownerTable"] = "dbo.callSubClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callSubClassifications","subClassification");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "subClassification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subClassification";

	
	
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


	$tdatacallsubclassifications["subClassification"] = $fdata;
		$tdatacallsubclassifications[".searchableFields"][] = "subClassification";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.callSubClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callSubClassifications","displayOrder");
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


	$tdatacallsubclassifications["displayOrder"] = $fdata;
		$tdatacallsubclassifications[".searchableFields"][] = "displayOrder";


$tables_data["dbo.callSubClassifications"]=&$tdatacallsubclassifications;
$field_labels["dbo_callSubClassifications"] = &$fieldLabelscallsubclassifications;
$fieldToolTips["dbo_callSubClassifications"] = &$fieldToolTipscallsubclassifications;
$placeHolders["dbo_callSubClassifications"] = &$placeHolderscallsubclassifications;
$page_titles["dbo_callSubClassifications"] = &$pageTitlescallsubclassifications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callSubClassifications"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callSubClassifications"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callsubclassifications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	classificationId,  	subClassification,  	displayOrder";
$proto0["m_strFrom"] = "FROM dbo.callSubClassifications";
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
	"m_strName" => "ID",
	"m_strTable" => "dbo.callSubClassifications",
	"m_srcTableName" => "dbo.callSubClassifications"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "dbo.callSubClassifications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "classificationId",
	"m_strTable" => "dbo.callSubClassifications",
	"m_srcTableName" => "dbo.callSubClassifications"
));

$proto8["m_sql"] = "classificationId";
$proto8["m_srcTableName"] = "dbo.callSubClassifications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subClassification",
	"m_strTable" => "dbo.callSubClassifications",
	"m_srcTableName" => "dbo.callSubClassifications"
));

$proto10["m_sql"] = "subClassification";
$proto10["m_srcTableName"] = "dbo.callSubClassifications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.callSubClassifications",
	"m_srcTableName" => "dbo.callSubClassifications"
));

$proto12["m_sql"] = "displayOrder";
$proto12["m_srcTableName"] = "dbo.callSubClassifications";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.callSubClassifications";
$proto15["m_srcTableName"] = "dbo.callSubClassifications";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "classificationId";
$proto15["m_columns"][] = "subClassification";
$proto15["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.callSubClassifications";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.callSubClassifications";
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
$proto0["m_srcTableName"]="dbo.callSubClassifications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callsubclassifications = createSqlQuery_callsubclassifications();


	
		;

				

$tdatacallsubclassifications[".sqlquery"] = $queryData_callsubclassifications;



$tableEvents["dbo.callSubClassifications"] = new eventsBase;
$tdatacallsubclassifications[".hasEvents"] = false;

?>