<?php
$tdataagentapplicationstatus1 = array();
$tdataagentapplicationstatus1[".searchableFields"] = array();
$tdataagentapplicationstatus1[".ShortName"] = "agentapplicationstatus1";
$tdataagentapplicationstatus1[".OwnerID"] = "";
$tdataagentapplicationstatus1[".OriginalTable"] = "dbo.agentApplicationStatus";


$tdataagentapplicationstatus1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataagentapplicationstatus1[".originalPagesByType"] = $tdataagentapplicationstatus1[".pagesByType"];
$tdataagentapplicationstatus1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataagentapplicationstatus1[".originalPages"] = $tdataagentapplicationstatus1[".pages"];
$tdataagentapplicationstatus1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataagentapplicationstatus1[".originalDefaultPages"] = $tdataagentapplicationstatus1[".defaultPages"];

//	field labels
$fieldLabelsagentapplicationstatus1 = array();
$fieldToolTipsagentapplicationstatus1 = array();
$pageTitlesagentapplicationstatus1 = array();
$placeHoldersagentapplicationstatus1 = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagentapplicationstatus1["Greek"] = array();
	$fieldToolTipsagentapplicationstatus1["Greek"] = array();
	$placeHoldersagentapplicationstatus1["Greek"] = array();
	$pageTitlesagentapplicationstatus1["Greek"] = array();
	$fieldLabelsagentapplicationstatus1["Greek"]["id"] = "Id";
	$fieldToolTipsagentapplicationstatus1["Greek"]["id"] = "";
	$placeHoldersagentapplicationstatus1["Greek"]["id"] = "";
	$fieldLabelsagentapplicationstatus1["Greek"]["agentApplicationStatus"] = "Agent Application Status";
	$fieldToolTipsagentapplicationstatus1["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersagentapplicationstatus1["Greek"]["agentApplicationStatus"] = "";
	$fieldLabelsagentapplicationstatus1["Greek"]["voltonApplicationStatusId"] = "Volton Application Status Id";
	$fieldToolTipsagentapplicationstatus1["Greek"]["voltonApplicationStatusId"] = "";
	$placeHoldersagentapplicationstatus1["Greek"]["voltonApplicationStatusId"] = "";
	$fieldLabelsagentapplicationstatus1["Greek"]["novaApplicationStatusId"] = "Nova Application Status Id";
	$fieldToolTipsagentapplicationstatus1["Greek"]["novaApplicationStatusId"] = "";
	$placeHoldersagentapplicationstatus1["Greek"]["novaApplicationStatusId"] = "";
	if (count($fieldToolTipsagentapplicationstatus1["Greek"]))
		$tdataagentapplicationstatus1[".isUseToolTips"] = true;
}


	$tdataagentapplicationstatus1[".NCSearch"] = true;



$tdataagentapplicationstatus1[".shortTableName"] = "agentapplicationstatus1";
$tdataagentapplicationstatus1[".nSecOptions"] = 0;

$tdataagentapplicationstatus1[".mainTableOwnerID"] = "";
$tdataagentapplicationstatus1[".entityType"] = 1;
$tdataagentapplicationstatus1[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagentapplicationstatus1[".strOriginalTableName"] = "dbo.agentApplicationStatus";

	



$tdataagentapplicationstatus1[".showAddInPopup"] = false;

$tdataagentapplicationstatus1[".showEditInPopup"] = false;

$tdataagentapplicationstatus1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagentapplicationstatus1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagentapplicationstatus1[".listAjax"] = false;
//	temporary
$tdataagentapplicationstatus1[".listAjax"] = false;

	$tdataagentapplicationstatus1[".audit"] = false;

	$tdataagentapplicationstatus1[".locking"] = false;


$pages = $tdataagentapplicationstatus1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagentapplicationstatus1[".edit"] = true;
	$tdataagentapplicationstatus1[".afterEditAction"] = 1;
	$tdataagentapplicationstatus1[".closePopupAfterEdit"] = 1;
	$tdataagentapplicationstatus1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagentapplicationstatus1[".add"] = true;
$tdataagentapplicationstatus1[".afterAddAction"] = 1;
$tdataagentapplicationstatus1[".closePopupAfterAdd"] = 1;
$tdataagentapplicationstatus1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagentapplicationstatus1[".list"] = true;
}



$tdataagentapplicationstatus1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagentapplicationstatus1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagentapplicationstatus1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagentapplicationstatus1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagentapplicationstatus1[".printFriendly"] = true;
}



$tdataagentapplicationstatus1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagentapplicationstatus1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagentapplicationstatus1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagentapplicationstatus1[".isUseAjaxSuggest"] = true;

$tdataagentapplicationstatus1[".rowHighlite"] = true;



																																																																																																																		

$tdataagentapplicationstatus1[".ajaxCodeSnippetAdded"] = false;

$tdataagentapplicationstatus1[".buttonsAdded"] = false;

$tdataagentapplicationstatus1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagentapplicationstatus1[".isUseTimeForSearch"] = false;


$tdataagentapplicationstatus1[".badgeColor"] = "EDCA00";


$tdataagentapplicationstatus1[".allSearchFields"] = array();
$tdataagentapplicationstatus1[".filterFields"] = array();
$tdataagentapplicationstatus1[".requiredSearchFields"] = array();

$tdataagentapplicationstatus1[".googleLikeFields"] = array();
$tdataagentapplicationstatus1[".googleLikeFields"][] = "id";
$tdataagentapplicationstatus1[".googleLikeFields"][] = "agentApplicationStatus";
$tdataagentapplicationstatus1[".googleLikeFields"][] = "voltonApplicationStatusId";
$tdataagentapplicationstatus1[".googleLikeFields"][] = "novaApplicationStatusId";



$tdataagentapplicationstatus1[".tableType"] = "list";

$tdataagentapplicationstatus1[".printerPageOrientation"] = 0;
$tdataagentapplicationstatus1[".nPrinterPageScale"] = 100;

$tdataagentapplicationstatus1[".nPrinterSplitRecords"] = 40;

$tdataagentapplicationstatus1[".geocodingEnabled"] = false;










$tdataagentapplicationstatus1[".pageSize"] = 20;

$tdataagentapplicationstatus1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagentapplicationstatus1[".strOrderBy"] = $tstrOrderBy;

$tdataagentapplicationstatus1[".orderindexes"] = array();


$tdataagentapplicationstatus1[".sqlHead"] = "SELECT id,  	agentApplicationStatus,  	voltonApplicationStatusId,  	novaApplicationStatusId";
$tdataagentapplicationstatus1[".sqlFrom"] = "FROM dbo.agentApplicationStatus";
$tdataagentapplicationstatus1[".sqlWhereExpr"] = "";
$tdataagentapplicationstatus1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagentapplicationstatus1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagentapplicationstatus1[".arrGroupsPerPage"] = $arrGPP;

$tdataagentapplicationstatus1[".highlightSearchResults"] = true;

$tableKeysagentapplicationstatus1 = array();
$tableKeysagentapplicationstatus1[] = "id";
$tdataagentapplicationstatus1[".Keys"] = $tableKeysagentapplicationstatus1;


$tdataagentapplicationstatus1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus1","id");
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


	$tdataagentapplicationstatus1["id"] = $fdata;
		$tdataagentapplicationstatus1[".searchableFields"][] = "id";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus1","agentApplicationStatus");
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


	$tdataagentapplicationstatus1["agentApplicationStatus"] = $fdata;
		$tdataagentapplicationstatus1[".searchableFields"][] = "agentApplicationStatus";
//	voltonApplicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "voltonApplicationStatusId";
	$fdata["GoodName"] = "voltonApplicationStatusId";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus1","voltonApplicationStatusId");
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


	$tdataagentapplicationstatus1["voltonApplicationStatusId"] = $fdata;
		$tdataagentapplicationstatus1[".searchableFields"][] = "voltonApplicationStatusId";
//	novaApplicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "novaApplicationStatusId";
	$fdata["GoodName"] = "novaApplicationStatusId";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus1","novaApplicationStatusId");
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


	$tdataagentapplicationstatus1["novaApplicationStatusId"] = $fdata;
		$tdataagentapplicationstatus1[".searchableFields"][] = "novaApplicationStatusId";


$tables_data["dbo.agentApplicationStatus1"]=&$tdataagentapplicationstatus1;
$field_labels["dbo_agentApplicationStatus1"] = &$fieldLabelsagentapplicationstatus1;
$fieldToolTips["dbo_agentApplicationStatus1"] = &$fieldToolTipsagentapplicationstatus1;
$placeHolders["dbo_agentApplicationStatus1"] = &$placeHoldersagentapplicationstatus1;
$page_titles["dbo_agentApplicationStatus1"] = &$pageTitlesagentapplicationstatus1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.agentApplicationStatus1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.agentApplicationStatus1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_agentapplicationstatus1()
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
	"m_srcTableName" => "dbo.agentApplicationStatus1"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.agentApplicationStatus1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "agentApplicationStatus",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus1"
));

$proto8["m_sql"] = "agentApplicationStatus";
$proto8["m_srcTableName"] = "dbo.agentApplicationStatus1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonApplicationStatusId",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus1"
));

$proto10["m_sql"] = "voltonApplicationStatusId";
$proto10["m_srcTableName"] = "dbo.agentApplicationStatus1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "novaApplicationStatusId",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus1"
));

$proto12["m_sql"] = "novaApplicationStatusId";
$proto12["m_srcTableName"] = "dbo.agentApplicationStatus1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.agentApplicationStatus";
$proto15["m_srcTableName"] = "dbo.agentApplicationStatus1";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "agentApplicationStatus";
$proto15["m_columns"][] = "voltonApplicationStatusId";
$proto15["m_columns"][] = "novaApplicationStatusId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.agentApplicationStatus";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.agentApplicationStatus1";
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
$proto0["m_srcTableName"]="dbo.agentApplicationStatus1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agentapplicationstatus1 = createSqlQuery_agentapplicationstatus1();


	
		;

				

$tdataagentapplicationstatus1[".sqlquery"] = $queryData_agentapplicationstatus1;



$tableEvents["dbo.agentApplicationStatus1"] = new eventsBase;
$tdataagentapplicationstatus1[".hasEvents"] = false;

?>