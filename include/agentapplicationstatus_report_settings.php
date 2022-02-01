<?php
$tdataagentapplicationstatus_report = array();
$tdataagentapplicationstatus_report[".searchableFields"] = array();
$tdataagentapplicationstatus_report[".ShortName"] = "agentapplicationstatus_report";
$tdataagentapplicationstatus_report[".OwnerID"] = "";
$tdataagentapplicationstatus_report[".OriginalTable"] = "dbo.agentApplicationStatus";


$tdataagentapplicationstatus_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataagentapplicationstatus_report[".originalPagesByType"] = $tdataagentapplicationstatus_report[".pagesByType"];
$tdataagentapplicationstatus_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataagentapplicationstatus_report[".originalPages"] = $tdataagentapplicationstatus_report[".pages"];
$tdataagentapplicationstatus_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataagentapplicationstatus_report[".originalDefaultPages"] = $tdataagentapplicationstatus_report[".defaultPages"];

//	field labels
$fieldLabelsagentapplicationstatus_report = array();
$fieldToolTipsagentapplicationstatus_report = array();
$pageTitlesagentapplicationstatus_report = array();
$placeHoldersagentapplicationstatus_report = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagentapplicationstatus_report["Greek"] = array();
	$fieldToolTipsagentapplicationstatus_report["Greek"] = array();
	$placeHoldersagentapplicationstatus_report["Greek"] = array();
	$pageTitlesagentapplicationstatus_report["Greek"] = array();
	$fieldLabelsagentapplicationstatus_report["Greek"]["id"] = "Id";
	$fieldToolTipsagentapplicationstatus_report["Greek"]["id"] = "";
	$placeHoldersagentapplicationstatus_report["Greek"]["id"] = "";
	$fieldLabelsagentapplicationstatus_report["Greek"]["agentApplicationStatus"] = "Agent Application Status";
	$fieldToolTipsagentapplicationstatus_report["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersagentapplicationstatus_report["Greek"]["agentApplicationStatus"] = "";
	$fieldLabelsagentapplicationstatus_report["Greek"]["voltonApplicationStatusId"] = "Volton Application Status Id";
	$fieldToolTipsagentapplicationstatus_report["Greek"]["voltonApplicationStatusId"] = "";
	$placeHoldersagentapplicationstatus_report["Greek"]["voltonApplicationStatusId"] = "";
	$fieldLabelsagentapplicationstatus_report["Greek"]["novaApplicationStatusId"] = "Nova Application Status Id";
	$fieldToolTipsagentapplicationstatus_report["Greek"]["novaApplicationStatusId"] = "";
	$placeHoldersagentapplicationstatus_report["Greek"]["novaApplicationStatusId"] = "";
	if (count($fieldToolTipsagentapplicationstatus_report["Greek"]))
		$tdataagentapplicationstatus_report[".isUseToolTips"] = true;
}


	$tdataagentapplicationstatus_report[".NCSearch"] = true;



$tdataagentapplicationstatus_report[".shortTableName"] = "agentapplicationstatus_report";
$tdataagentapplicationstatus_report[".nSecOptions"] = 0;

$tdataagentapplicationstatus_report[".mainTableOwnerID"] = "";
$tdataagentapplicationstatus_report[".entityType"] = 2;
$tdataagentapplicationstatus_report[".connId"] = "CallCenter_at_10_41_2_31";


$tdataagentapplicationstatus_report[".strOriginalTableName"] = "dbo.agentApplicationStatus";

	



$tdataagentapplicationstatus_report[".showAddInPopup"] = false;

$tdataagentapplicationstatus_report[".showEditInPopup"] = false;

$tdataagentapplicationstatus_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagentapplicationstatus_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagentapplicationstatus_report[".listAjax"] = false;
//	temporary
$tdataagentapplicationstatus_report[".listAjax"] = false;

	$tdataagentapplicationstatus_report[".audit"] = false;

	$tdataagentapplicationstatus_report[".locking"] = false;


$pages = $tdataagentapplicationstatus_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataagentapplicationstatus_report[".edit"] = true;
	$tdataagentapplicationstatus_report[".afterEditAction"] = 1;
	$tdataagentapplicationstatus_report[".closePopupAfterEdit"] = 1;
	$tdataagentapplicationstatus_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataagentapplicationstatus_report[".add"] = true;
$tdataagentapplicationstatus_report[".afterAddAction"] = 1;
$tdataagentapplicationstatus_report[".closePopupAfterAdd"] = 1;
$tdataagentapplicationstatus_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataagentapplicationstatus_report[".list"] = true;
}



$tdataagentapplicationstatus_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataagentapplicationstatus_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataagentapplicationstatus_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataagentapplicationstatus_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataagentapplicationstatus_report[".printFriendly"] = true;
}



$tdataagentapplicationstatus_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataagentapplicationstatus_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataagentapplicationstatus_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataagentapplicationstatus_report[".isUseAjaxSuggest"] = false;




																																																																																																																								

$tdataagentapplicationstatus_report[".ajaxCodeSnippetAdded"] = false;

$tdataagentapplicationstatus_report[".buttonsAdded"] = false;

$tdataagentapplicationstatus_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagentapplicationstatus_report[".isUseTimeForSearch"] = false;


$tdataagentapplicationstatus_report[".badgeColor"] = "00C2C5";


$tdataagentapplicationstatus_report[".allSearchFields"] = array();
$tdataagentapplicationstatus_report[".filterFields"] = array();
$tdataagentapplicationstatus_report[".requiredSearchFields"] = array();

$tdataagentapplicationstatus_report[".googleLikeFields"] = array();
$tdataagentapplicationstatus_report[".googleLikeFields"][] = "id";
$tdataagentapplicationstatus_report[".googleLikeFields"][] = "agentApplicationStatus";
$tdataagentapplicationstatus_report[".googleLikeFields"][] = "voltonApplicationStatusId";
$tdataagentapplicationstatus_report[".googleLikeFields"][] = "novaApplicationStatusId";



$tdataagentapplicationstatus_report[".tableType"] = "report";

$tdataagentapplicationstatus_report[".printerPageOrientation"] = 0;
$tdataagentapplicationstatus_report[".nPrinterPageScale"] = 100;

$tdataagentapplicationstatus_report[".nPrinterSplitRecords"] = 40;

$tdataagentapplicationstatus_report[".geocodingEnabled"] = false;

//report settings
$tdataagentapplicationstatus_report[".printReportLayout"] = 6;

$tdataagentapplicationstatus_report[".reportPrintPartitionType"] = 1;
$tdataagentapplicationstatus_report[".reportPrintGroupsPerPage"] = 40;
$tdataagentapplicationstatus_report[".lowGroup"] = 0;



$tdataagentapplicationstatus_report[".pageSize"] = 20;






$tdataagentapplicationstatus_report[".repShowDet"] = true;

$tdataagentapplicationstatus_report[".reportLayout"] = 6;

//end of report settings





$tdataagentapplicationstatus_report[".searchIsRequiredForFilters"] = true;

$tdataagentapplicationstatus_report[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagentapplicationstatus_report[".strOrderBy"] = $tstrOrderBy;

$tdataagentapplicationstatus_report[".orderindexes"] = array();


$tdataagentapplicationstatus_report[".sqlHead"] = "SELECT id,  	agentApplicationStatus,  	voltonApplicationStatusId,  	novaApplicationStatusId";
$tdataagentapplicationstatus_report[".sqlFrom"] = "FROM dbo.agentApplicationStatus";
$tdataagentapplicationstatus_report[".sqlWhereExpr"] = "";
$tdataagentapplicationstatus_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagentapplicationstatus_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagentapplicationstatus_report[".arrGroupsPerPage"] = $arrGPP;

$tdataagentapplicationstatus_report[".highlightSearchResults"] = true;

$tableKeysagentapplicationstatus_report = array();
$tableKeysagentapplicationstatus_report[] = "id";
$tdataagentapplicationstatus_report[".Keys"] = $tableKeysagentapplicationstatus_report;


$tdataagentapplicationstatus_report[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus_Report","id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagentapplicationstatus_report["id"] = $fdata;
		$tdataagentapplicationstatus_report[".searchableFields"][] = "id";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus_Report","agentApplicationStatus");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagentapplicationstatus_report["agentApplicationStatus"] = $fdata;
		$tdataagentapplicationstatus_report[".searchableFields"][] = "agentApplicationStatus";
//	voltonApplicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "voltonApplicationStatusId";
	$fdata["GoodName"] = "voltonApplicationStatusId";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus_Report","voltonApplicationStatusId");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagentapplicationstatus_report["voltonApplicationStatusId"] = $fdata;
		$tdataagentapplicationstatus_report[".searchableFields"][] = "voltonApplicationStatusId";
//	novaApplicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "novaApplicationStatusId";
	$fdata["GoodName"] = "novaApplicationStatusId";
	$fdata["ownerTable"] = "dbo.agentApplicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_agentApplicationStatus_Report","novaApplicationStatusId");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataagentapplicationstatus_report["novaApplicationStatusId"] = $fdata;
		$tdataagentapplicationstatus_report[".searchableFields"][] = "novaApplicationStatusId";


$tables_data["dbo.agentApplicationStatus Report"]=&$tdataagentapplicationstatus_report;
$field_labels["dbo_agentApplicationStatus_Report"] = &$fieldLabelsagentapplicationstatus_report;
$fieldToolTips["dbo_agentApplicationStatus_Report"] = &$fieldToolTipsagentapplicationstatus_report;
$placeHolders["dbo_agentApplicationStatus_Report"] = &$placeHoldersagentapplicationstatus_report;
$page_titles["dbo_agentApplicationStatus_Report"] = &$pageTitlesagentapplicationstatus_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.agentApplicationStatus Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.agentApplicationStatus Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_agentapplicationstatus_report()
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
	"m_srcTableName" => "dbo.agentApplicationStatus Report"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.agentApplicationStatus Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "agentApplicationStatus",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus Report"
));

$proto8["m_sql"] = "agentApplicationStatus";
$proto8["m_srcTableName"] = "dbo.agentApplicationStatus Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonApplicationStatusId",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus Report"
));

$proto10["m_sql"] = "voltonApplicationStatusId";
$proto10["m_srcTableName"] = "dbo.agentApplicationStatus Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "novaApplicationStatusId",
	"m_strTable" => "dbo.agentApplicationStatus",
	"m_srcTableName" => "dbo.agentApplicationStatus Report"
));

$proto12["m_sql"] = "novaApplicationStatusId";
$proto12["m_srcTableName"] = "dbo.agentApplicationStatus Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.agentApplicationStatus";
$proto15["m_srcTableName"] = "dbo.agentApplicationStatus Report";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "agentApplicationStatus";
$proto15["m_columns"][] = "voltonApplicationStatusId";
$proto15["m_columns"][] = "novaApplicationStatusId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.agentApplicationStatus";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.agentApplicationStatus Report";
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
$proto0["m_srcTableName"]="dbo.agentApplicationStatus Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agentapplicationstatus_report = createSqlQuery_agentapplicationstatus_report();


	
		;

				

$tdataagentapplicationstatus_report[".sqlquery"] = $queryData_agentapplicationstatus_report;



$tableEvents["dbo.agentApplicationStatus Report"] = new eventsBase;
$tdataagentapplicationstatus_report[".hasEvents"] = false;

?>