<?php
$tdatacontactaddresses = array();
$tdatacontactaddresses[".searchableFields"] = array();
$tdatacontactaddresses[".ShortName"] = "contactaddresses";
$tdatacontactaddresses[".OwnerID"] = "";
$tdatacontactaddresses[".OriginalTable"] = "dbo.contactAddresses";


$tdatacontactaddresses[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacontactaddresses[".originalPagesByType"] = $tdatacontactaddresses[".pagesByType"];
$tdatacontactaddresses[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacontactaddresses[".originalPages"] = $tdatacontactaddresses[".pages"];
$tdatacontactaddresses[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacontactaddresses[".originalDefaultPages"] = $tdatacontactaddresses[".defaultPages"];

//	field labels
$fieldLabelscontactaddresses = array();
$fieldToolTipscontactaddresses = array();
$pageTitlescontactaddresses = array();
$placeHolderscontactaddresses = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscontactaddresses["Greek"] = array();
	$fieldToolTipscontactaddresses["Greek"] = array();
	$placeHolderscontactaddresses["Greek"] = array();
	$pageTitlescontactaddresses["Greek"] = array();
	$fieldLabelscontactaddresses["Greek"]["id"] = "Id";
	$fieldToolTipscontactaddresses["Greek"]["id"] = "";
	$placeHolderscontactaddresses["Greek"]["id"] = "";
	$fieldLabelscontactaddresses["Greek"]["contactId"] = "Επαφή";
	$fieldToolTipscontactaddresses["Greek"]["contactId"] = "";
	$placeHolderscontactaddresses["Greek"]["contactId"] = "";
	$fieldLabelscontactaddresses["Greek"]["street"] = "Διεύθυνση";
	$fieldToolTipscontactaddresses["Greek"]["street"] = "";
	$placeHolderscontactaddresses["Greek"]["street"] = "";
	$fieldLabelscontactaddresses["Greek"]["area"] = "Περιοχή";
	$fieldToolTipscontactaddresses["Greek"]["area"] = "";
	$placeHolderscontactaddresses["Greek"]["area"] = "";
	$fieldLabelscontactaddresses["Greek"]["city"] = "Πόλη";
	$fieldToolTipscontactaddresses["Greek"]["city"] = "";
	$placeHolderscontactaddresses["Greek"]["city"] = "";
	$fieldLabelscontactaddresses["Greek"]["region"] = "Νομός";
	$fieldToolTipscontactaddresses["Greek"]["region"] = "";
	$placeHolderscontactaddresses["Greek"]["region"] = "";
	$fieldLabelscontactaddresses["Greek"]["phone1"] = "Τηλ. 1";
	$fieldToolTipscontactaddresses["Greek"]["phone1"] = "";
	$placeHolderscontactaddresses["Greek"]["phone1"] = "";
	$fieldLabelscontactaddresses["Greek"]["phone2"] = "Τηλ. 2";
	$fieldToolTipscontactaddresses["Greek"]["phone2"] = "";
	$placeHolderscontactaddresses["Greek"]["phone2"] = "";
	$fieldLabelscontactaddresses["Greek"]["postalCode"] = "ΤΚ";
	$fieldToolTipscontactaddresses["Greek"]["postalCode"] = "";
	$placeHolderscontactaddresses["Greek"]["postalCode"] = "";
	if (count($fieldToolTipscontactaddresses["Greek"]))
		$tdatacontactaddresses[".isUseToolTips"] = true;
}


	$tdatacontactaddresses[".NCSearch"] = true;



$tdatacontactaddresses[".shortTableName"] = "contactaddresses";
$tdatacontactaddresses[".nSecOptions"] = 0;

$tdatacontactaddresses[".mainTableOwnerID"] = "";
$tdatacontactaddresses[".entityType"] = 0;
$tdatacontactaddresses[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacontactaddresses[".strOriginalTableName"] = "dbo.contactAddresses";

	



$tdatacontactaddresses[".showAddInPopup"] = false;

$tdatacontactaddresses[".showEditInPopup"] = false;

$tdatacontactaddresses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontactaddresses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontactaddresses[".listAjax"] = false;
//	temporary
$tdatacontactaddresses[".listAjax"] = false;

	$tdatacontactaddresses[".audit"] = true;

	$tdatacontactaddresses[".locking"] = false;


$pages = $tdatacontactaddresses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontactaddresses[".edit"] = true;
	$tdatacontactaddresses[".afterEditAction"] = 1;
	$tdatacontactaddresses[".closePopupAfterEdit"] = 1;
	$tdatacontactaddresses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontactaddresses[".add"] = true;
$tdatacontactaddresses[".afterAddAction"] = 0;
$tdatacontactaddresses[".closePopupAfterAdd"] = 1;
$tdatacontactaddresses[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontactaddresses[".list"] = true;
}



$tdatacontactaddresses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontactaddresses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontactaddresses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontactaddresses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontactaddresses[".printFriendly"] = true;
}



$tdatacontactaddresses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontactaddresses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontactaddresses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontactaddresses[".isUseAjaxSuggest"] = false;

$tdatacontactaddresses[".rowHighlite"] = true;



																																																																																																																																																																																																																																																						

$tdatacontactaddresses[".ajaxCodeSnippetAdded"] = false;

$tdatacontactaddresses[".buttonsAdded"] = false;

$tdatacontactaddresses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontactaddresses[".isUseTimeForSearch"] = false;


$tdatacontactaddresses[".badgeColor"] = "1e90ff";


$tdatacontactaddresses[".allSearchFields"] = array();
$tdatacontactaddresses[".filterFields"] = array();
$tdatacontactaddresses[".requiredSearchFields"] = array();

$tdatacontactaddresses[".googleLikeFields"] = array();
$tdatacontactaddresses[".googleLikeFields"][] = "id";
$tdatacontactaddresses[".googleLikeFields"][] = "contactId";
$tdatacontactaddresses[".googleLikeFields"][] = "street";
$tdatacontactaddresses[".googleLikeFields"][] = "postalCode";
$tdatacontactaddresses[".googleLikeFields"][] = "area";
$tdatacontactaddresses[".googleLikeFields"][] = "city";
$tdatacontactaddresses[".googleLikeFields"][] = "region";
$tdatacontactaddresses[".googleLikeFields"][] = "phone1";
$tdatacontactaddresses[".googleLikeFields"][] = "phone2";



$tdatacontactaddresses[".tableType"] = "list";

$tdatacontactaddresses[".printerPageOrientation"] = 0;
$tdatacontactaddresses[".nPrinterPageScale"] = 100;

$tdatacontactaddresses[".nPrinterSplitRecords"] = 40;

$tdatacontactaddresses[".geocodingEnabled"] = false;






$tdatacontactaddresses[".searchIsRequiredForFilters"] = true;

$tdatacontactaddresses[".noRecordsFirstPage"] = true;



$tdatacontactaddresses[".pageSize"] = 20;

$tdatacontactaddresses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontactaddresses[".strOrderBy"] = $tstrOrderBy;

$tdatacontactaddresses[".orderindexes"] = array();


$tdatacontactaddresses[".sqlHead"] = "SELECT id,  	contactId,  	street,  	postalCode,  	area,  	city,  	region,  	phone1,  	phone2";
$tdatacontactaddresses[".sqlFrom"] = "FROM dbo.contactAddresses";
$tdatacontactaddresses[".sqlWhereExpr"] = "";
$tdatacontactaddresses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontactaddresses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontactaddresses[".arrGroupsPerPage"] = $arrGPP;

$tdatacontactaddresses[".highlightSearchResults"] = true;

$tableKeyscontactaddresses = array();
$tableKeyscontactaddresses[] = "id";
$tableKeyscontactaddresses[] = "contactId";
$tdatacontactaddresses[".Keys"] = $tableKeyscontactaddresses;


$tdatacontactaddresses[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","id");
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


	$tdatacontactaddresses["id"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "id";
//	contactId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contactId";
	$fdata["GoodName"] = "contactId";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","contactId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contactId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactId";

	
	
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
	$edata["LookupTable"] = "dbo.contacts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lastName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatacontactaddresses["contactId"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "contactId";
//	street
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "street";
	$fdata["GoodName"] = "street";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","street");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "street";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "street";

	
	
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


	$tdatacontactaddresses["street"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "street";
//	postalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "postalCode";
	$fdata["GoodName"] = "postalCode";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","postalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "postalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postalCode";

	
	
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
	$edata["LookupTable"] = "dbo.postalCodes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"area", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"city", 'lookupF'=>"city");
	$edata["autoCompleteFields"][] = array('masterF'=>"region", 'lookupF'=>"region");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "postalCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "postalCode";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatacontactaddresses["postalCode"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "postalCode";
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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


	$tdatacontactaddresses["area"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "area";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","city");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "city";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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


	$tdatacontactaddresses["city"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "city";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","region");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";

	
	
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


	$tdatacontactaddresses["region"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "region";
//	phone1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "phone1";
	$fdata["GoodName"] = "phone1";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","phone1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phone1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone1";

	
	
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


	$tdatacontactaddresses["phone1"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "phone1";
//	phone2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "phone2";
	$fdata["GoodName"] = "phone2";
	$fdata["ownerTable"] = "dbo.contactAddresses";
	$fdata["Label"] = GetFieldLabel("dbo_contactAddresses","phone2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phone2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone2";

	
	
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


	$tdatacontactaddresses["phone2"] = $fdata;
		$tdatacontactaddresses[".searchableFields"][] = "phone2";


$tables_data["dbo.contactAddresses"]=&$tdatacontactaddresses;
$field_labels["dbo_contactAddresses"] = &$fieldLabelscontactaddresses;
$fieldToolTips["dbo_contactAddresses"] = &$fieldToolTipscontactaddresses;
$placeHolders["dbo_contactAddresses"] = &$placeHolderscontactaddresses;
$page_titles["dbo_contactAddresses"] = &$pageTitlescontactaddresses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.contactAddresses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.contactAddresses"] = array();



	
				$strOriginalDetailsTable="dbo.contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dbo_contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.contactAddresses"][0] = $masterParams;
				$masterTablesData["dbo.contactAddresses"][0]["masterKeys"] = array();
	$masterTablesData["dbo.contactAddresses"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.contactAddresses"][0]["detailKeys"] = array();
	$masterTablesData["dbo.contactAddresses"][0]["detailKeys"][]="contactId";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contactaddresses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	contactId,  	street,  	postalCode,  	area,  	city,  	region,  	phone1,  	phone2";
$proto0["m_strFrom"] = "FROM dbo.contactAddresses";
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
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.contactAddresses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contactId",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto8["m_sql"] = "contactId";
$proto8["m_srcTableName"] = "dbo.contactAddresses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "street",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto10["m_sql"] = "street";
$proto10["m_srcTableName"] = "dbo.contactAddresses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "postalCode",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto12["m_sql"] = "postalCode";
$proto12["m_srcTableName"] = "dbo.contactAddresses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto14["m_sql"] = "area";
$proto14["m_srcTableName"] = "dbo.contactAddresses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto16["m_sql"] = "city";
$proto16["m_srcTableName"] = "dbo.contactAddresses";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto18["m_sql"] = "region";
$proto18["m_srcTableName"] = "dbo.contactAddresses";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "phone1",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto20["m_sql"] = "phone1";
$proto20["m_srcTableName"] = "dbo.contactAddresses";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "phone2",
	"m_strTable" => "dbo.contactAddresses",
	"m_srcTableName" => "dbo.contactAddresses"
));

$proto22["m_sql"] = "phone2";
$proto22["m_srcTableName"] = "dbo.contactAddresses";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.contactAddresses";
$proto25["m_srcTableName"] = "dbo.contactAddresses";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "contactId";
$proto25["m_columns"][] = "street";
$proto25["m_columns"][] = "postalCode";
$proto25["m_columns"][] = "area";
$proto25["m_columns"][] = "city";
$proto25["m_columns"][] = "region";
$proto25["m_columns"][] = "phone1";
$proto25["m_columns"][] = "phone2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.contactAddresses";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.contactAddresses";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.contactAddresses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contactaddresses = createSqlQuery_contactaddresses();


	
		;

									

$tdatacontactaddresses[".sqlquery"] = $queryData_contactaddresses;



$tableEvents["dbo.contactAddresses"] = new eventsBase;
$tdatacontactaddresses[".hasEvents"] = false;

?>