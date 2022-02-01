<?php
$tdataapplicationstatus = array();
$tdataapplicationstatus[".searchableFields"] = array();
$tdataapplicationstatus[".ShortName"] = "applicationstatus";
$tdataapplicationstatus[".OwnerID"] = "";
$tdataapplicationstatus[".OriginalTable"] = "dbo.applicationStatus";


$tdataapplicationstatus[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataapplicationstatus[".originalPagesByType"] = $tdataapplicationstatus[".pagesByType"];
$tdataapplicationstatus[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataapplicationstatus[".originalPages"] = $tdataapplicationstatus[".pages"];
$tdataapplicationstatus[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataapplicationstatus[".originalDefaultPages"] = $tdataapplicationstatus[".defaultPages"];

//	field labels
$fieldLabelsapplicationstatus = array();
$fieldToolTipsapplicationstatus = array();
$pageTitlesapplicationstatus = array();
$placeHoldersapplicationstatus = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsapplicationstatus["Greek"] = array();
	$fieldToolTipsapplicationstatus["Greek"] = array();
	$placeHoldersapplicationstatus["Greek"] = array();
	$pageTitlesapplicationstatus["Greek"] = array();
	$fieldLabelsapplicationstatus["Greek"]["id"] = "Id";
	$fieldToolTipsapplicationstatus["Greek"]["id"] = "";
	$placeHoldersapplicationstatus["Greek"]["id"] = "";
	$fieldLabelsapplicationstatus["Greek"]["statusDescription"] = "Κατάσταση Αίτησης";
	$fieldToolTipsapplicationstatus["Greek"]["statusDescription"] = "";
	$placeHoldersapplicationstatus["Greek"]["statusDescription"] = "";
	$fieldLabelsapplicationstatus["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipsapplicationstatus["Greek"]["displayOrder"] = "";
	$placeHoldersapplicationstatus["Greek"]["displayOrder"] = "";
	$fieldLabelsapplicationstatus["Greek"]["statisticStatus"] = "Φάση Αίτησης (Backoffice)";
	$fieldToolTipsapplicationstatus["Greek"]["statisticStatus"] = "";
	$placeHoldersapplicationstatus["Greek"]["statisticStatus"] = "";
	$fieldLabelsapplicationstatus["Greek"]["salesStatus"] = "Κατάσταση Αίτησης (Sales)";
	$fieldToolTipsapplicationstatus["Greek"]["salesStatus"] = "";
	$placeHoldersapplicationstatus["Greek"]["salesStatus"] = "";
	$fieldLabelsapplicationstatus["Greek"]["statusIsFor"] = "Αφορά";
	$fieldToolTipsapplicationstatus["Greek"]["statusIsFor"] = "";
	$placeHoldersapplicationstatus["Greek"]["statusIsFor"] = "";
	if (count($fieldToolTipsapplicationstatus["Greek"]))
		$tdataapplicationstatus[".isUseToolTips"] = true;
}


	$tdataapplicationstatus[".NCSearch"] = true;



$tdataapplicationstatus[".shortTableName"] = "applicationstatus";
$tdataapplicationstatus[".nSecOptions"] = 0;

$tdataapplicationstatus[".mainTableOwnerID"] = "";
$tdataapplicationstatus[".entityType"] = 0;
$tdataapplicationstatus[".connId"] = "CallCenter_at_10_41_2_31";


$tdataapplicationstatus[".strOriginalTableName"] = "dbo.applicationStatus";

	



$tdataapplicationstatus[".showAddInPopup"] = false;

$tdataapplicationstatus[".showEditInPopup"] = false;

$tdataapplicationstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapplicationstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapplicationstatus[".listAjax"] = false;
//	temporary
$tdataapplicationstatus[".listAjax"] = false;

	$tdataapplicationstatus[".audit"] = true;

	$tdataapplicationstatus[".locking"] = false;


$pages = $tdataapplicationstatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataapplicationstatus[".edit"] = true;
	$tdataapplicationstatus[".afterEditAction"] = 1;
	$tdataapplicationstatus[".closePopupAfterEdit"] = 1;
	$tdataapplicationstatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataapplicationstatus[".add"] = true;
$tdataapplicationstatus[".afterAddAction"] = 0;
$tdataapplicationstatus[".closePopupAfterAdd"] = 1;
$tdataapplicationstatus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataapplicationstatus[".list"] = true;
}



$tdataapplicationstatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataapplicationstatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataapplicationstatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataapplicationstatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataapplicationstatus[".printFriendly"] = true;
}



$tdataapplicationstatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataapplicationstatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataapplicationstatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataapplicationstatus[".isUseAjaxSuggest"] = false;

$tdataapplicationstatus[".rowHighlite"] = true;



																																																																																																																											

$tdataapplicationstatus[".ajaxCodeSnippetAdded"] = false;

$tdataapplicationstatus[".buttonsAdded"] = false;

$tdataapplicationstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapplicationstatus[".isUseTimeForSearch"] = false;


$tdataapplicationstatus[".badgeColor"] = "4682B4";


$tdataapplicationstatus[".allSearchFields"] = array();
$tdataapplicationstatus[".filterFields"] = array();
$tdataapplicationstatus[".requiredSearchFields"] = array();

$tdataapplicationstatus[".googleLikeFields"] = array();
$tdataapplicationstatus[".googleLikeFields"][] = "id";
$tdataapplicationstatus[".googleLikeFields"][] = "statusDescription";
$tdataapplicationstatus[".googleLikeFields"][] = "displayOrder";
$tdataapplicationstatus[".googleLikeFields"][] = "statisticStatus";
$tdataapplicationstatus[".googleLikeFields"][] = "salesStatus";
$tdataapplicationstatus[".googleLikeFields"][] = "statusIsFor";



$tdataapplicationstatus[".tableType"] = "list";

$tdataapplicationstatus[".printerPageOrientation"] = 0;
$tdataapplicationstatus[".nPrinterPageScale"] = 100;

$tdataapplicationstatus[".nPrinterSplitRecords"] = 40;

$tdataapplicationstatus[".geocodingEnabled"] = false;





$tdataapplicationstatus[".isResizeColumns"] = true;

$tdataapplicationstatus[".searchIsRequiredForFilters"] = true;

$tdataapplicationstatus[".noRecordsFirstPage"] = true;



$tdataapplicationstatus[".pageSize"] = 20;

$tdataapplicationstatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapplicationstatus[".strOrderBy"] = $tstrOrderBy;

$tdataapplicationstatus[".orderindexes"] = array();


$tdataapplicationstatus[".sqlHead"] = "SELECT id,  	statusDescription,  	displayOrder,  	statisticStatus,  	salesStatus,  	statusIsFor";
$tdataapplicationstatus[".sqlFrom"] = "FROM dbo.applicationStatus";
$tdataapplicationstatus[".sqlWhereExpr"] = "";
$tdataapplicationstatus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapplicationstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapplicationstatus[".arrGroupsPerPage"] = $arrGPP;

$tdataapplicationstatus[".highlightSearchResults"] = true;

$tableKeysapplicationstatus = array();
$tableKeysapplicationstatus[] = "id";
$tdataapplicationstatus[".Keys"] = $tableKeysapplicationstatus;


$tdataapplicationstatus[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.applicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_applicationStatus","id");
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


	$tdataapplicationstatus["id"] = $fdata;
		$tdataapplicationstatus[".searchableFields"][] = "id";
//	statusDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "statusDescription";
	$fdata["GoodName"] = "statusDescription";
	$fdata["ownerTable"] = "dbo.applicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_applicationStatus","statusDescription");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "statusDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusDescription";

	
	
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


	$tdataapplicationstatus["statusDescription"] = $fdata;
		$tdataapplicationstatus[".searchableFields"][] = "statusDescription";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.applicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_applicationStatus","displayOrder");
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


	$tdataapplicationstatus["displayOrder"] = $fdata;
		$tdataapplicationstatus[".searchableFields"][] = "displayOrder";
//	statisticStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "statisticStatus";
	$fdata["GoodName"] = "statisticStatus";
	$fdata["ownerTable"] = "dbo.applicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_applicationStatus","statisticStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "statisticStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statisticStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Επεξεργασία Από Πωλήσεις";
	$edata["LookupValues"][] = "Προς Επιβεβαίωση";
	$edata["LookupValues"][] = "Σε Εξέλιξη";
	$edata["LookupValues"][] = "Ολοκληρώθηκε";
	$edata["LookupValues"][] = "Ακυρώθηκε";

	
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


	$tdataapplicationstatus["statisticStatus"] = $fdata;
		$tdataapplicationstatus[".searchableFields"][] = "statisticStatus";
//	salesStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "salesStatus";
	$fdata["GoodName"] = "salesStatus";
	$fdata["ownerTable"] = "dbo.applicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_applicationStatus","salesStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "salesStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salesStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Sales - Εκκρεμότητα Agent";
	$edata["LookupValues"][] = "Sales - Προς Επεξεργασία";
	$edata["LookupValues"][] = "Sales - Ακυρώθηκε";
	$edata["LookupValues"][] = "Sales - Προς Επιβεβαίωση";

	
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


	$tdataapplicationstatus["salesStatus"] = $fdata;
		$tdataapplicationstatus[".searchableFields"][] = "salesStatus";
//	statusIsFor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "statusIsFor";
	$fdata["GoodName"] = "statusIsFor";
	$fdata["ownerTable"] = "dbo.applicationStatus";
	$fdata["Label"] = GetFieldLabel("dbo_applicationStatus","statusIsFor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "statusIsFor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusIsFor";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Agents";
	$edata["LookupValues"][] = "Supervisors";
	$edata["LookupValues"][] = "BackOffice";

		$edata["Multiselect"] = true;

	
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


	$tdataapplicationstatus["statusIsFor"] = $fdata;
		$tdataapplicationstatus[".searchableFields"][] = "statusIsFor";


$tables_data["dbo.applicationStatus"]=&$tdataapplicationstatus;
$field_labels["dbo_applicationStatus"] = &$fieldLabelsapplicationstatus;
$fieldToolTips["dbo_applicationStatus"] = &$fieldToolTipsapplicationstatus;
$placeHolders["dbo_applicationStatus"] = &$placeHoldersapplicationstatus;
$page_titles["dbo_applicationStatus"] = &$pageTitlesapplicationstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.applicationStatus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.applicationStatus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_applicationstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	statusDescription,  	displayOrder,  	statisticStatus,  	salesStatus,  	statusIsFor";
$proto0["m_strFrom"] = "FROM dbo.applicationStatus";
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
	"m_strTable" => "dbo.applicationStatus",
	"m_srcTableName" => "dbo.applicationStatus"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.applicationStatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "statusDescription",
	"m_strTable" => "dbo.applicationStatus",
	"m_srcTableName" => "dbo.applicationStatus"
));

$proto8["m_sql"] = "statusDescription";
$proto8["m_srcTableName"] = "dbo.applicationStatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.applicationStatus",
	"m_srcTableName" => "dbo.applicationStatus"
));

$proto10["m_sql"] = "displayOrder";
$proto10["m_srcTableName"] = "dbo.applicationStatus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "statisticStatus",
	"m_strTable" => "dbo.applicationStatus",
	"m_srcTableName" => "dbo.applicationStatus"
));

$proto12["m_sql"] = "statisticStatus";
$proto12["m_srcTableName"] = "dbo.applicationStatus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "salesStatus",
	"m_strTable" => "dbo.applicationStatus",
	"m_srcTableName" => "dbo.applicationStatus"
));

$proto14["m_sql"] = "salesStatus";
$proto14["m_srcTableName"] = "dbo.applicationStatus";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "statusIsFor",
	"m_strTable" => "dbo.applicationStatus",
	"m_srcTableName" => "dbo.applicationStatus"
));

$proto16["m_sql"] = "statusIsFor";
$proto16["m_srcTableName"] = "dbo.applicationStatus";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.applicationStatus";
$proto19["m_srcTableName"] = "dbo.applicationStatus";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "statusDescription";
$proto19["m_columns"][] = "displayOrder";
$proto19["m_columns"][] = "statisticStatus";
$proto19["m_columns"][] = "salesStatus";
$proto19["m_columns"][] = "statusIsFor";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.applicationStatus";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.applicationStatus";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.applicationStatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_applicationstatus = createSqlQuery_applicationstatus();


	
		;

						

$tdataapplicationstatus[".sqlquery"] = $queryData_applicationstatus;



$tableEvents["dbo.applicationStatus"] = new eventsBase;
$tdataapplicationstatus[".hasEvents"] = false;

?>