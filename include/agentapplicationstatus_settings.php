<?php
$tdataagentapplicationstatus = array();
$tdataagentapplicationstatus[".searchableFields"] = array();
$tdataagentapplicationstatus[".ShortName"] = "agentapplicationstatus";
$tdataagentapplicationstatus[".OwnerID"] = "";
$tdataagentapplicationstatus[".OriginalTable"] = "dbo.agentApplicationStatus";


$tdataagentapplicationstatus[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataagentapplicationstatus[".originalPagesByType"] = $tdataagentapplicationstatus[".pagesByType"];
$tdataagentapplicationstatus[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataagentapplicationstatus[".originalPages"] = $tdataagentapplicationstatus[".pages"];
$tdataagentapplicationstatus[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataagentapplicationstatus[".originalDefaultPages"] = $tdataagentapplicationstatus[".defaultPages"];

//	field labels
$fieldLabelsagentapplicationstatus = array();
$fieldToolTipsagentapplicationstatus = array();
$pageTitlesagentapplicationstatus = array();
$placeHoldersagentapplicationstatus = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagentapplicationstatus["Greek"] = array();
	$fieldToolTipsagentapplicationstatus["Greek"] = array();
	$placeHoldersagentapplicationstatus["Greek"] = array();
	$pageTitlesagentapplicationstatus["Greek"] = array();
	$fieldLabelsagentapplicationstatus["Greek"]["id"] = "Id";
	$fieldToolTipsagentapplicationstatus["Greek"]["id"] = "";
	$placeHoldersagentapplicationstatus["Greek"]["id"] = "";
	$fieldLabelsagentapplicationstatus["Greek"]["agentApplicationStatus"] = "Κατάσταση Αίτησης (Agent)";
	$fieldToolTipsagentapplicationstatus["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersagentapplicationstatus["Greek"]["agentApplicationStatus"] = "";
	$fieldLabelsagentapplicationstatus["Greek"]["voltonApplicationStatusId"] = "Κατάσταση Αίτησης Volton";
	$fieldToolTipsagentapplicationstatus["Greek"]["voltonApplicationStatusId"] = "";
	$placeHoldersagentapplicationstatus["Greek"]["voltonApplicationStatusId"] = "";
	$fieldLabelsagentapplicationstatus["Greek"]["novaApplicationStatusId"] = "Κατάσταση Αίτησης Nova";
	$fieldToolTipsagentapplicationstatus["Greek"]["novaApplicationStatusId"] = "";
	$placeHoldersagentapplicationstatus["Greek"]["novaApplicationStatusId"] = "";
	if (count($fieldToolTipsagentapplicationstatus["Greek"]))
		$tdataagentapplicationstatus[".isUseToolTips"] = true;
}


	$tdataagentapplicationstatus[".NCSearch"] = true;



$tdataagentapplicationstatus[".shortTableName"] = "agentapplicationstatus";
$tdataagentapplicationstatus[".nSecOptions"] = 0;

$tdataagentapplicationstatus[".mainTableOwnerID"] = "";
$tdataagentapplicationstatus[".entityType"] = 0;
$tdataagentapplicationstatus[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagentapplicationstatus[".strOriginalTableName"] = "dbo.agentApplicationStatus";

	



$tdataagentapplicationstatus[".showAddInPopup"] = false;

$tdataagentapplicationstatus[".showEditInPopup"] = false;

$tdataagentapplicationstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagentapplicationstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagentapplicationstatus[".listAjax"] = false;
//	temporary
$tdataagentapplicationstatus[".listAjax"] = false;

	$tdataagentapplicationstatus[".audit"] = true;

	$tdataagentapplicationstatus[".locking"] = false;


$pages = $tdataagentapplicationstatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagentapplicationstatus[".edit"] = true;
	$tdataagentapplicationstatus[".afterEditAction"] = 1;
	$tdataagentapplicationstatus[".closePopupAfterEdit"] = 1;
	$tdataagentapplicationstatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagentapplicationstatus[".add"] = true;
$tdataagentapplicationstatus[".afterAddAction"] = 0;
$tdataagentapplicationstatus[".closePopupAfterAdd"] = 1;
$tdataagentapplicationstatus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagentapplicationstatus[".list"] = true;
}



$tdataagentapplicationstatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagentapplicationstatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagentapplicationstatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagentapplicationstatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagentapplicationstatus[".printFriendly"] = true;
}



$tdataagentapplicationstatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagentapplicationstatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagentapplicationstatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagentapplicationstatus[".isUseAjaxSuggest"] = false;

$tdataagentapplicationstatus[".rowHighlite"] = true;



																																																																																																																											

$tdataagentapplicationstatus[".ajaxCodeSnippetAdded"] = false;

$tdataagentapplicationstatus[".buttonsAdded"] = false;

$tdataagentapplicationstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagentapplicationstatus[".isUseTimeForSearch"] = false;


$tdataagentapplicationstatus[".badgeColor"] = "8FBC8B";


$tdataagentapplicationstatus[".allSearchFields"] = array();
$tdataagentapplicationstatus[".filterFields"] = array();
$tdataagentapplicationstatus[".requiredSearchFields"] = array();

$tdataagentapplicationstatus[".googleLikeFields"] = array();
$tdataagentapplicationstatus[".googleLikeFields"][] = "id";
$tdataagentapplicationstatus[".googleLikeFields"][] = "agentApplicationStatus";
$tdataagentapplicationstatus[".googleLikeFields"][] = "voltonApplicationStatusId";
$tdataagentapplicationstatus[".googleLikeFields"][] = "novaApplicationStatusId";



$tdataagentapplicationstatus[".tableType"] = "list";

$tdataagentapplicationstatus[".printerPageOrientation"] = 0;
$tdataagentapplicationstatus[".nPrinterPageScale"] = 100;

$tdataagentapplicationstatus[".nPrinterSplitRecords"] = 40;

$tdataagentapplicationstatus[".geocodingEnabled"] = false;






$tdataagentapplicationstatus[".searchIsRequiredForFilters"] = true;

$tdataagentapplicationstatus[".noRecordsFirstPage"] = true;



$tdataagentapplicationstatus[".pageSize"] = 20;

$tdataagentapplicationstatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagentapplicationstatus[".strOrderBy"] = $tstrOrderBy;

$tdataagentapplicationstatus[".orderindexes"] = array();


$tdataagentapplicationstatus[".sqlHead"] = "SELECT id,  	agentApplicationStatus,  	voltonApplicationStatusId,  	novaApplicationStatusId";
$tdataagentapplicationstatus[".sqlFrom"] = "FROM dbo.agentApplicationStatus";
$tdataagentapplicationstatus[".sqlWhereExpr"] = "";
$tdataagentapplicationstatus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagentapplicationstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagentapplicationstatus[".arrGroupsPerPage"] = $arrGPP;

$tdataagentapplicationstatus[".highlightSearchResults"] = true;

$tableKeysagentapplicationstatus = array();
$tableKeysagentapplicationstatus[] = "id";
$tdataagentapplicationstatus[".Keys"] = $tableKeysagentapplicationstatus;


$tdataagentapplicationstatus[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus","id");
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


	$tdataagentapplicationstatus["id"] = $fdata;
		$tdataagentapplicationstatus[".searchableFields"][] = "id";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus","agentApplicationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agentApplicationStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agentApplicationStatus";

	
	
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


	$tdataagentapplicationstatus["agentApplicationStatus"] = $fdata;
		$tdataagentapplicationstatus[".searchableFields"][] = "agentApplicationStatus";
//	voltonApplicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "voltonApplicationStatusId";
	$fdata["GoodName"] = "voltonApplicationStatusId";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus","voltonApplicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonApplicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonApplicationStatusId";

	
	
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
	$edata["LookupTable"] = "dbo.applicationStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusDescription";

	

	
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


	$tdataagentapplicationstatus["voltonApplicationStatusId"] = $fdata;
		$tdataagentapplicationstatus[".searchableFields"][] = "voltonApplicationStatusId";
//	novaApplicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "novaApplicationStatusId";
	$fdata["GoodName"] = "novaApplicationStatusId";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus","novaApplicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "novaApplicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "novaApplicationStatusId";

	
	
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
	$edata["LookupTable"] = "dbo.applicationStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusDescription";

	

	
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


	$tdataagentapplicationstatus["novaApplicationStatusId"] = $fdata;
		$tdataagentapplicationstatus[".searchableFields"][] = "novaApplicationStatusId";


$tables_data["dbo.agentApplicationStatus"]=&$tdataagentapplicationstatus;
$field_labels["dbo_agentApplicationStatus"] = &$fieldLabelsagentapplicationstatus;
$fieldToolTips["dbo_agentApplicationStatus"] = &$fieldToolTipsagentapplicationstatus;
$placeHolders["dbo_agentApplicationStatus"] = &$placeHoldersagentapplicationstatus;
$page_titles["dbo_agentApplicationStatus"] = &$pageTitlesagentapplicationstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.agentApplicationStatus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.agentApplicationStatus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_agentapplicationstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	agentApplicationStatus,  	voltonApplicationStatusId,  	novaApplicationStatusId";
$proto0["m_strFrom"] = "FROM dbo.agentApplicationStatus";
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
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.agentApplicationStatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "agentApplicationStatus",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus"
));

$proto8["m_sql"] = "agentApplicationStatus";
$proto8["m_srcTableName"] = "dbo.agentApplicationStatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonApplicationStatusId",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus"
));

$proto10["m_sql"] = "voltonApplicationStatusId";
$proto10["m_srcTableName"] = "dbo.agentApplicationStatus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "novaApplicationStatusId",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus"
));

$proto12["m_sql"] = "novaApplicationStatusId";
$proto12["m_srcTableName"] = "dbo.agentApplicationStatus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.agentApplicationStatus";
$proto15["m_srcTableName"] = "dbo.agentApplicationStatus";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "agentApplicationStatus";
$proto15["m_columns"][] = "voltonApplicationStatusId";
$proto15["m_columns"][] = "novaApplicationStatusId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.agentApplicationStatus";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.agentApplicationStatus";
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
$proto0["m_srcTableName"]="dbo.agentApplicationStatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agentapplicationstatus = createSqlQuery_agentapplicationstatus();


	
		;

				

$tdataagentapplicationstatus[".sqlquery"] = $queryData_agentapplicationstatus;



$tableEvents["dbo.agentApplicationStatus"] = new eventsBase;
$tdataagentapplicationstatus[".hasEvents"] = false;

?>