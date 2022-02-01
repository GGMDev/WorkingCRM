<?php
$tdataapplicationsadditionalservices = array();
$tdataapplicationsadditionalservices[".searchableFields"] = array();
$tdataapplicationsadditionalservices[".ShortName"] = "applicationsadditionalservices";
$tdataapplicationsadditionalservices[".OwnerID"] = "";
$tdataapplicationsadditionalservices[".OriginalTable"] = "dbo.applicationsAdditionalServices";


$tdataapplicationsadditionalservices[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataapplicationsadditionalservices[".originalPagesByType"] = $tdataapplicationsadditionalservices[".pagesByType"];
$tdataapplicationsadditionalservices[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataapplicationsadditionalservices[".originalPages"] = $tdataapplicationsadditionalservices[".pages"];
$tdataapplicationsadditionalservices[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataapplicationsadditionalservices[".originalDefaultPages"] = $tdataapplicationsadditionalservices[".defaultPages"];

//	field labels
$fieldLabelsapplicationsadditionalservices = array();
$fieldToolTipsapplicationsadditionalservices = array();
$pageTitlesapplicationsadditionalservices = array();
$placeHoldersapplicationsadditionalservices = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsapplicationsadditionalservices["Greek"] = array();
	$fieldToolTipsapplicationsadditionalservices["Greek"] = array();
	$placeHoldersapplicationsadditionalservices["Greek"] = array();
	$pageTitlesapplicationsadditionalservices["Greek"] = array();
	$fieldLabelsapplicationsadditionalservices["Greek"]["id"] = "Id";
	$fieldToolTipsapplicationsadditionalservices["Greek"]["id"] = "";
	$placeHoldersapplicationsadditionalservices["Greek"]["id"] = "";
	$fieldLabelsapplicationsadditionalservices["Greek"]["additionalService"] = "Additional Service";
	$fieldToolTipsapplicationsadditionalservices["Greek"]["additionalService"] = "";
	$placeHoldersapplicationsadditionalservices["Greek"]["additionalService"] = "";
	$fieldLabelsapplicationsadditionalservices["Greek"]["additionalServiceClassification"] = "Additional Service Classification";
	$fieldToolTipsapplicationsadditionalservices["Greek"]["additionalServiceClassification"] = "";
	$placeHoldersapplicationsadditionalservices["Greek"]["additionalServiceClassification"] = "";
	$fieldLabelsapplicationsadditionalservices["Greek"]["additionalServiceSubClassification"] = "Additional Service Sub Classification";
	$fieldToolTipsapplicationsadditionalservices["Greek"]["additionalServiceSubClassification"] = "";
	$placeHoldersapplicationsadditionalservices["Greek"]["additionalServiceSubClassification"] = "";
	if (count($fieldToolTipsapplicationsadditionalservices["Greek"]))
		$tdataapplicationsadditionalservices[".isUseToolTips"] = true;
}


	$tdataapplicationsadditionalservices[".NCSearch"] = true;



$tdataapplicationsadditionalservices[".shortTableName"] = "applicationsadditionalservices";
$tdataapplicationsadditionalservices[".nSecOptions"] = 0;

$tdataapplicationsadditionalservices[".mainTableOwnerID"] = "";
$tdataapplicationsadditionalservices[".entityType"] = 0;
$tdataapplicationsadditionalservices[".connId"] = "CallCenter_at_10_41_2_31";


$tdataapplicationsadditionalservices[".strOriginalTableName"] = "dbo.applicationsAdditionalServices";

	



$tdataapplicationsadditionalservices[".showAddInPopup"] = false;

$tdataapplicationsadditionalservices[".showEditInPopup"] = false;

$tdataapplicationsadditionalservices[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapplicationsadditionalservices[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapplicationsadditionalservices[".listAjax"] = false;
//	temporary
$tdataapplicationsadditionalservices[".listAjax"] = false;

	$tdataapplicationsadditionalservices[".audit"] = false;

	$tdataapplicationsadditionalservices[".locking"] = false;


$pages = $tdataapplicationsadditionalservices[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataapplicationsadditionalservices[".edit"] = true;
	$tdataapplicationsadditionalservices[".afterEditAction"] = 1;
	$tdataapplicationsadditionalservices[".closePopupAfterEdit"] = 1;
	$tdataapplicationsadditionalservices[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataapplicationsadditionalservices[".add"] = true;
$tdataapplicationsadditionalservices[".afterAddAction"] = 1;
$tdataapplicationsadditionalservices[".closePopupAfterAdd"] = 1;
$tdataapplicationsadditionalservices[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataapplicationsadditionalservices[".list"] = true;
}



$tdataapplicationsadditionalservices[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataapplicationsadditionalservices[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataapplicationsadditionalservices[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataapplicationsadditionalservices[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataapplicationsadditionalservices[".printFriendly"] = true;
}



$tdataapplicationsadditionalservices[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataapplicationsadditionalservices[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataapplicationsadditionalservices[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataapplicationsadditionalservices[".isUseAjaxSuggest"] = true;

$tdataapplicationsadditionalservices[".rowHighlite"] = true;



																																																																																																																								

$tdataapplicationsadditionalservices[".ajaxCodeSnippetAdded"] = false;

$tdataapplicationsadditionalservices[".buttonsAdded"] = false;

$tdataapplicationsadditionalservices[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapplicationsadditionalservices[".isUseTimeForSearch"] = false;


$tdataapplicationsadditionalservices[".badgeColor"] = "9ACD32";


$tdataapplicationsadditionalservices[".allSearchFields"] = array();
$tdataapplicationsadditionalservices[".filterFields"] = array();
$tdataapplicationsadditionalservices[".requiredSearchFields"] = array();

$tdataapplicationsadditionalservices[".googleLikeFields"] = array();
$tdataapplicationsadditionalservices[".googleLikeFields"][] = "id";
$tdataapplicationsadditionalservices[".googleLikeFields"][] = "additionalService";
$tdataapplicationsadditionalservices[".googleLikeFields"][] = "additionalServiceClassification";
$tdataapplicationsadditionalservices[".googleLikeFields"][] = "additionalServiceSubClassification";



$tdataapplicationsadditionalservices[".tableType"] = "list";

$tdataapplicationsadditionalservices[".printerPageOrientation"] = 0;
$tdataapplicationsadditionalservices[".nPrinterPageScale"] = 100;

$tdataapplicationsadditionalservices[".nPrinterSplitRecords"] = 40;

$tdataapplicationsadditionalservices[".geocodingEnabled"] = false;










$tdataapplicationsadditionalservices[".pageSize"] = 20;

$tdataapplicationsadditionalservices[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapplicationsadditionalservices[".strOrderBy"] = $tstrOrderBy;

$tdataapplicationsadditionalservices[".orderindexes"] = array();


$tdataapplicationsadditionalservices[".sqlHead"] = "SELECT id,  	additionalService,  	additionalServiceClassification,  	additionalServiceSubClassification";
$tdataapplicationsadditionalservices[".sqlFrom"] = "FROM dbo.applicationsAdditionalServices";
$tdataapplicationsadditionalservices[".sqlWhereExpr"] = "";
$tdataapplicationsadditionalservices[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapplicationsadditionalservices[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapplicationsadditionalservices[".arrGroupsPerPage"] = $arrGPP;

$tdataapplicationsadditionalservices[".highlightSearchResults"] = true;

$tableKeysapplicationsadditionalservices = array();
$tableKeysapplicationsadditionalservices[] = "id";
$tdataapplicationsadditionalservices[".Keys"] = $tableKeysapplicationsadditionalservices;


$tdataapplicationsadditionalservices[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.applicationsAdditionalServices";
	$fdata["Label"] = GetFieldLabel("dbo_applicationsAdditionalServices","id");
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


	$tdataapplicationsadditionalservices["id"] = $fdata;
		$tdataapplicationsadditionalservices[".searchableFields"][] = "id";
//	additionalService
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "additionalService";
	$fdata["GoodName"] = "additionalService";
	$fdata["ownerTable"] = "dbo.applicationsAdditionalServices";
	$fdata["Label"] = GetFieldLabel("dbo_applicationsAdditionalServices","additionalService");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "additionalService";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalService";

	
	
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


	$tdataapplicationsadditionalservices["additionalService"] = $fdata;
		$tdataapplicationsadditionalservices[".searchableFields"][] = "additionalService";
//	additionalServiceClassification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "additionalServiceClassification";
	$fdata["GoodName"] = "additionalServiceClassification";
	$fdata["ownerTable"] = "dbo.applicationsAdditionalServices";
	$fdata["Label"] = GetFieldLabel("dbo_applicationsAdditionalServices","additionalServiceClassification");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceClassification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceClassification";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "additionalServiceSubClassification";

	
	
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


	$tdataapplicationsadditionalservices["additionalServiceClassification"] = $fdata;
		$tdataapplicationsadditionalservices[".searchableFields"][] = "additionalServiceClassification";
//	additionalServiceSubClassification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "additionalServiceSubClassification";
	$fdata["GoodName"] = "additionalServiceSubClassification";
	$fdata["ownerTable"] = "dbo.applicationsAdditionalServices";
	$fdata["Label"] = GetFieldLabel("dbo_applicationsAdditionalServices","additionalServiceSubClassification");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceSubClassification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceSubClassification";

	
	
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
	$edata["LookupTable"] = "dbo.callSubClassifications";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subClassification";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "additionalServiceClassification", "lookup" => "classificationId" );

	
	

	
	
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


	$tdataapplicationsadditionalservices["additionalServiceSubClassification"] = $fdata;
		$tdataapplicationsadditionalservices[".searchableFields"][] = "additionalServiceSubClassification";


$tables_data["dbo.applicationsAdditionalServices"]=&$tdataapplicationsadditionalservices;
$field_labels["dbo_applicationsAdditionalServices"] = &$fieldLabelsapplicationsadditionalservices;
$fieldToolTips["dbo_applicationsAdditionalServices"] = &$fieldToolTipsapplicationsadditionalservices;
$placeHolders["dbo_applicationsAdditionalServices"] = &$placeHoldersapplicationsadditionalservices;
$page_titles["dbo_applicationsAdditionalServices"] = &$pageTitlesapplicationsadditionalservices;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.applicationsAdditionalServices"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.applicationsAdditionalServices"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_applicationsadditionalservices()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	additionalService,  	additionalServiceClassification,  	additionalServiceSubClassification";
$proto0["m_strFrom"] = "FROM dbo.applicationsAdditionalServices";
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
	"m_strTable" => "dbo.applicationsAdditionalServices",
	"m_srcTableName" => "dbo.applicationsAdditionalServices"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.applicationsAdditionalServices";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalService",
	"m_strTable" => "dbo.applicationsAdditionalServices",
	"m_srcTableName" => "dbo.applicationsAdditionalServices"
));

$proto8["m_sql"] = "additionalService";
$proto8["m_srcTableName"] = "dbo.applicationsAdditionalServices";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceClassification",
	"m_strTable" => "dbo.applicationsAdditionalServices",
	"m_srcTableName" => "dbo.applicationsAdditionalServices"
));

$proto10["m_sql"] = "additionalServiceClassification";
$proto10["m_srcTableName"] = "dbo.applicationsAdditionalServices";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceSubClassification",
	"m_strTable" => "dbo.applicationsAdditionalServices",
	"m_srcTableName" => "dbo.applicationsAdditionalServices"
));

$proto12["m_sql"] = "additionalServiceSubClassification";
$proto12["m_srcTableName"] = "dbo.applicationsAdditionalServices";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.applicationsAdditionalServices";
$proto15["m_srcTableName"] = "dbo.applicationsAdditionalServices";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "additionalService";
$proto15["m_columns"][] = "additionalServiceClassification";
$proto15["m_columns"][] = "additionalServiceSubClassification";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.applicationsAdditionalServices";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.applicationsAdditionalServices";
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
$proto0["m_srcTableName"]="dbo.applicationsAdditionalServices";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_applicationsadditionalservices = createSqlQuery_applicationsadditionalservices();


	
		;

				

$tdataapplicationsadditionalservices[".sqlquery"] = $queryData_applicationsadditionalservices;



$tableEvents["dbo.applicationsAdditionalServices"] = new eventsBase;
$tdataapplicationsadditionalservices[".hasEvents"] = false;

?>