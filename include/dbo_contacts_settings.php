<?php
$tdatadbo_contacts = array();
$tdatadbo_contacts[".searchableFields"] = array();
$tdatadbo_contacts[".ShortName"] = "dbo_contacts";
$tdatadbo_contacts[".OwnerID"] = "";
$tdatadbo_contacts[".OriginalTable"] = "dbo.contacts";


$tdatadbo_contacts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatadbo_contacts[".originalPagesByType"] = $tdatadbo_contacts[".pagesByType"];
$tdatadbo_contacts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatadbo_contacts[".originalPages"] = $tdatadbo_contacts[".pages"];
$tdatadbo_contacts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatadbo_contacts[".originalDefaultPages"] = $tdatadbo_contacts[".defaultPages"];

//	field labels
$fieldLabelsdbo_contacts = array();
$fieldToolTipsdbo_contacts = array();
$pageTitlesdbo_contacts = array();
$placeHoldersdbo_contacts = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_contacts["Greek"] = array();
	$fieldToolTipsdbo_contacts["Greek"] = array();
	$placeHoldersdbo_contacts["Greek"] = array();
	$pageTitlesdbo_contacts["Greek"] = array();
	$fieldLabelsdbo_contacts["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_contacts["Greek"]["id"] = "";
	$placeHoldersdbo_contacts["Greek"]["id"] = "";
	$fieldLabelsdbo_contacts["Greek"]["code"] = "Κωδικός";
	$fieldToolTipsdbo_contacts["Greek"]["code"] = "";
	$placeHoldersdbo_contacts["Greek"]["code"] = "";
	$fieldLabelsdbo_contacts["Greek"]["firstName"] = "Όνομα";
	$fieldToolTipsdbo_contacts["Greek"]["firstName"] = "";
	$placeHoldersdbo_contacts["Greek"]["firstName"] = "";
	$fieldLabelsdbo_contacts["Greek"]["lastName"] = "Επώνυμο";
	$fieldToolTipsdbo_contacts["Greek"]["lastName"] = "";
	$placeHoldersdbo_contacts["Greek"]["lastName"] = "";
	$fieldLabelsdbo_contacts["Greek"]["phone1"] = "Τηλ.1";
	$fieldToolTipsdbo_contacts["Greek"]["phone1"] = "";
	$placeHoldersdbo_contacts["Greek"]["phone1"] = "";
	$fieldLabelsdbo_contacts["Greek"]["phone1Type"] = "Τύπος Τηλ.1";
	$fieldToolTipsdbo_contacts["Greek"]["phone1Type"] = "";
	$placeHoldersdbo_contacts["Greek"]["phone1Type"] = "";
	$fieldLabelsdbo_contacts["Greek"]["phone2"] = "Phone2";
	$fieldToolTipsdbo_contacts["Greek"]["phone2"] = "";
	$placeHoldersdbo_contacts["Greek"]["phone2"] = "";
	$fieldLabelsdbo_contacts["Greek"]["phone2Type"] = "Τύπος Τηλ.2";
	$fieldToolTipsdbo_contacts["Greek"]["phone2Type"] = "";
	$placeHoldersdbo_contacts["Greek"]["phone2Type"] = "";
	$fieldLabelsdbo_contacts["Greek"]["phone3"] = "Phone3";
	$fieldToolTipsdbo_contacts["Greek"]["phone3"] = "";
	$placeHoldersdbo_contacts["Greek"]["phone3"] = "";
	$fieldLabelsdbo_contacts["Greek"]["phone3Type"] = "Τύπος Τηλ.3";
	$fieldToolTipsdbo_contacts["Greek"]["phone3Type"] = "";
	$placeHoldersdbo_contacts["Greek"]["phone3Type"] = "";
	$fieldLabelsdbo_contacts["Greek"]["mobile1"] = "Mobile1";
	$fieldToolTipsdbo_contacts["Greek"]["mobile1"] = "";
	$placeHoldersdbo_contacts["Greek"]["mobile1"] = "";
	$fieldLabelsdbo_contacts["Greek"]["mobile2"] = "Mobile2";
	$fieldToolTipsdbo_contacts["Greek"]["mobile2"] = "";
	$placeHoldersdbo_contacts["Greek"]["mobile2"] = "";
	$fieldLabelsdbo_contacts["Greek"]["address"] = "Διεύθυνση";
	$fieldToolTipsdbo_contacts["Greek"]["address"] = "";
	$placeHoldersdbo_contacts["Greek"]["address"] = "";
	$fieldLabelsdbo_contacts["Greek"]["postalCode"] = "ΤΚ";
	$fieldToolTipsdbo_contacts["Greek"]["postalCode"] = "";
	$placeHoldersdbo_contacts["Greek"]["postalCode"] = "";
	$fieldLabelsdbo_contacts["Greek"]["dateInserted"] = "Ημ/νία Δημιουργίας";
	$fieldToolTipsdbo_contacts["Greek"]["dateInserted"] = "";
	$placeHoldersdbo_contacts["Greek"]["dateInserted"] = "";
	$fieldLabelsdbo_contacts["Greek"]["noCall"] = "Απαγόρευση Κλήσεων";
	$fieldToolTipsdbo_contacts["Greek"]["noCall"] = "";
	$placeHoldersdbo_contacts["Greek"]["noCall"] = "";
	$fieldLabelsdbo_contacts["Greek"]["noCallDate"] = "Ημ/νία Απαγόρευσης";
	$fieldToolTipsdbo_contacts["Greek"]["noCallDate"] = "";
	$placeHoldersdbo_contacts["Greek"]["noCallDate"] = "";
	$fieldLabelsdbo_contacts["Greek"]["comments"] = "Παρατηρήσεις";
	$fieldToolTipsdbo_contacts["Greek"]["comments"] = "";
	$placeHoldersdbo_contacts["Greek"]["comments"] = "";
	$fieldLabelsdbo_contacts["Greek"]["agentMessage"] = "Μήνυμα για Agent";
	$fieldToolTipsdbo_contacts["Greek"]["agentMessage"] = "";
	$placeHoldersdbo_contacts["Greek"]["agentMessage"] = "";
	$fieldLabelsdbo_contacts["Greek"]["isCompany"] = "Είναι Εταιρία";
	$fieldToolTipsdbo_contacts["Greek"]["isCompany"] = "";
	$placeHoldersdbo_contacts["Greek"]["isCompany"] = "";
	$fieldLabelsdbo_contacts["Greek"]["name"] = "Επωνυμία";
	$fieldToolTipsdbo_contacts["Greek"]["name"] = "";
	$placeHoldersdbo_contacts["Greek"]["name"] = "";
	$fieldLabelsdbo_contacts["Greek"]["referenceCode"] = "Κωδ. Αναφοράς Τρίτου";
	$fieldToolTipsdbo_contacts["Greek"]["referenceCode"] = "";
	$placeHoldersdbo_contacts["Greek"]["referenceCode"] = "";
	$fieldLabelsdbo_contacts["Greek"]["area"] = "Περιοχή";
	$fieldToolTipsdbo_contacts["Greek"]["area"] = "";
	$placeHoldersdbo_contacts["Greek"]["area"] = "";
	$fieldLabelsdbo_contacts["Greek"]["city"] = "Πόλη";
	$fieldToolTipsdbo_contacts["Greek"]["city"] = "";
	$placeHoldersdbo_contacts["Greek"]["city"] = "";
	$fieldLabelsdbo_contacts["Greek"]["region"] = "Νομός";
	$fieldToolTipsdbo_contacts["Greek"]["region"] = "";
	$placeHoldersdbo_contacts["Greek"]["region"] = "";
	$fieldLabelsdbo_contacts["Greek"]["vatNumber"] = "ΑΦΜ";
	$fieldToolTipsdbo_contacts["Greek"]["vatNumber"] = "";
	$placeHoldersdbo_contacts["Greek"]["vatNumber"] = "";
	$fieldLabelsdbo_contacts["Greek"]["taxOffice"] = "ΔΟΥ";
	$fieldToolTipsdbo_contacts["Greek"]["taxOffice"] = "";
	$placeHoldersdbo_contacts["Greek"]["taxOffice"] = "";
	$fieldLabelsdbo_contacts["Greek"]["externalRefCode"] = "External Ref Code";
	$fieldToolTipsdbo_contacts["Greek"]["externalRefCode"] = "";
	$placeHoldersdbo_contacts["Greek"]["externalRefCode"] = "";
	if (count($fieldToolTipsdbo_contacts["Greek"]))
		$tdatadbo_contacts[".isUseToolTips"] = true;
}


	$tdatadbo_contacts[".NCSearch"] = true;



$tdatadbo_contacts[".shortTableName"] = "dbo_contacts";
$tdatadbo_contacts[".nSecOptions"] = 0;

$tdatadbo_contacts[".mainTableOwnerID"] = "";
$tdatadbo_contacts[".entityType"] = 0;
$tdatadbo_contacts[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_contacts[".strOriginalTableName"] = "dbo.contacts";

	



$tdatadbo_contacts[".showAddInPopup"] = false;

$tdatadbo_contacts[".showEditInPopup"] = false;

$tdatadbo_contacts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_contacts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_contacts[".listAjax"] = false;
//	temporary
$tdatadbo_contacts[".listAjax"] = false;

	$tdatadbo_contacts[".audit"] = true;

	$tdatadbo_contacts[".locking"] = false;


$pages = $tdatadbo_contacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_contacts[".edit"] = true;
	$tdatadbo_contacts[".afterEditAction"] = 0;
	$tdatadbo_contacts[".closePopupAfterEdit"] = 1;
	$tdatadbo_contacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_contacts[".add"] = true;
$tdatadbo_contacts[".afterAddAction"] = 0;
$tdatadbo_contacts[".closePopupAfterAdd"] = 1;
$tdatadbo_contacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_contacts[".list"] = true;
}



$tdatadbo_contacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_contacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_contacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_contacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_contacts[".printFriendly"] = true;
}



$tdatadbo_contacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_contacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_contacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_contacts[".isUseAjaxSuggest"] = false;

$tdatadbo_contacts[".rowHighlite"] = true;



																																																																																																																											

$tdatadbo_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_contacts[".buttonsAdded"] = false;

$tdatadbo_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_contacts[".isUseTimeForSearch"] = false;


$tdatadbo_contacts[".badgeColor"] = "1e90ff";


$tdatadbo_contacts[".allSearchFields"] = array();
$tdatadbo_contacts[".filterFields"] = array();
$tdatadbo_contacts[".requiredSearchFields"] = array();

$tdatadbo_contacts[".googleLikeFields"] = array();
$tdatadbo_contacts[".googleLikeFields"][] = "id";
$tdatadbo_contacts[".googleLikeFields"][] = "code";
$tdatadbo_contacts[".googleLikeFields"][] = "firstName";
$tdatadbo_contacts[".googleLikeFields"][] = "lastName";
$tdatadbo_contacts[".googleLikeFields"][] = "phone1";
$tdatadbo_contacts[".googleLikeFields"][] = "phone1Type";
$tdatadbo_contacts[".googleLikeFields"][] = "phone2";
$tdatadbo_contacts[".googleLikeFields"][] = "phone2Type";
$tdatadbo_contacts[".googleLikeFields"][] = "phone3";
$tdatadbo_contacts[".googleLikeFields"][] = "phone3Type";
$tdatadbo_contacts[".googleLikeFields"][] = "mobile1";
$tdatadbo_contacts[".googleLikeFields"][] = "mobile2";
$tdatadbo_contacts[".googleLikeFields"][] = "address";
$tdatadbo_contacts[".googleLikeFields"][] = "postalCode";
$tdatadbo_contacts[".googleLikeFields"][] = "dateInserted";
$tdatadbo_contacts[".googleLikeFields"][] = "noCall";
$tdatadbo_contacts[".googleLikeFields"][] = "noCallDate";
$tdatadbo_contacts[".googleLikeFields"][] = "comments";
$tdatadbo_contacts[".googleLikeFields"][] = "agentMessage";
$tdatadbo_contacts[".googleLikeFields"][] = "isCompany";
$tdatadbo_contacts[".googleLikeFields"][] = "name";
$tdatadbo_contacts[".googleLikeFields"][] = "referenceCode";
$tdatadbo_contacts[".googleLikeFields"][] = "area";
$tdatadbo_contacts[".googleLikeFields"][] = "city";
$tdatadbo_contacts[".googleLikeFields"][] = "region";
$tdatadbo_contacts[".googleLikeFields"][] = "vatNumber";
$tdatadbo_contacts[".googleLikeFields"][] = "taxOffice";
$tdatadbo_contacts[".googleLikeFields"][] = "externalRefCode";



$tdatadbo_contacts[".tableType"] = "list";

$tdatadbo_contacts[".printerPageOrientation"] = 0;
$tdatadbo_contacts[".nPrinterPageScale"] = 100;

$tdatadbo_contacts[".nPrinterSplitRecords"] = 40;

$tdatadbo_contacts[".geocodingEnabled"] = false;






$tdatadbo_contacts[".searchIsRequiredForFilters"] = true;

$tdatadbo_contacts[".noRecordsFirstPage"] = true;



$tdatadbo_contacts[".pageSize"] = 20;

$tdatadbo_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_contacts[".orderindexes"] = array();


$tdatadbo_contacts[".sqlHead"] = "SELECT id,  	code,  	firstName,  	lastName,  	phone1,  	phone1Type,  	phone2,  	phone2Type,  	phone3,  	phone3Type,  	mobile1,  	mobile2,  	address,  	postalCode,  	dateInserted,  	noCall,  	noCallDate,  	comments,  	agentMessage,  	isCompany,  	name,  	referenceCode,  	area,  	city,  	region,  	vatNumber,  	taxOffice,  	externalRefCode";
$tdatadbo_contacts[".sqlFrom"] = "FROM dbo.contacts";
$tdatadbo_contacts[".sqlWhereExpr"] = "";
$tdatadbo_contacts[".sqlTail"] = "";

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
$tdatadbo_contacts[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_contacts[".highlightSearchResults"] = true;

$tableKeysdbo_contacts = array();
$tableKeysdbo_contacts[] = "id";
$tdatadbo_contacts[".Keys"] = $tableKeysdbo_contacts;


$tdatadbo_contacts[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","id");
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


	$tdatadbo_contacts["id"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","code");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code";

	
	
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


	$tdatadbo_contacts["code"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "code";
//	firstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "firstName";
	$fdata["GoodName"] = "firstName";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","firstName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "firstName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstName";

	
	
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


	$tdatadbo_contacts["firstName"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "firstName";
//	lastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lastName";
	$fdata["GoodName"] = "lastName";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","lastName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "lastName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastName";

	
	
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


	$tdatadbo_contacts["lastName"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "lastName";
//	phone1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "phone1";
	$fdata["GoodName"] = "phone1";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","phone1");
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


	$tdatadbo_contacts["phone1"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "phone1";
//	phone1Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "phone1Type";
	$fdata["GoodName"] = "phone1Type";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","phone1Type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "phone1Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone1Type";

	
	
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
	$edata["LookupTable"] = "dbo.phoneTypes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "phoneType";

	

	
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


	$tdatadbo_contacts["phone1Type"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "phone1Type";
//	phone2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "phone2";
	$fdata["GoodName"] = "phone2";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","phone2");
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


	$tdatadbo_contacts["phone2"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "phone2";
//	phone2Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "phone2Type";
	$fdata["GoodName"] = "phone2Type";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","phone2Type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "phone2Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone2Type";

	
	
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
	$edata["LookupTable"] = "dbo.phoneTypes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "phoneType";

	

	
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


	$tdatadbo_contacts["phone2Type"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "phone2Type";
//	phone3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "phone3";
	$fdata["GoodName"] = "phone3";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","phone3");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phone3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone3";

	
	
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


	$tdatadbo_contacts["phone3"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "phone3";
//	phone3Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone3Type";
	$fdata["GoodName"] = "phone3Type";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","phone3Type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "phone3Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone3Type";

	
	
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
	$edata["LookupTable"] = "dbo.phoneTypes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "phoneType";

	

	
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


	$tdatadbo_contacts["phone3Type"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "phone3Type";
//	mobile1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mobile1";
	$fdata["GoodName"] = "mobile1";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","mobile1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mobile1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile1";

	
	
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


	$tdatadbo_contacts["mobile1"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "mobile1";
//	mobile2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mobile2";
	$fdata["GoodName"] = "mobile2";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","mobile2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mobile2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile2";

	
	
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


	$tdatadbo_contacts["mobile2"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "mobile2";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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


	$tdatadbo_contacts["address"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "address";
//	postalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "postalCode";
	$fdata["GoodName"] = "postalCode";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","postalCode");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"area", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"city", 'lookupF'=>"city");
	$edata["autoCompleteFields"][] = array('masterF'=>"region", 'lookupF'=>"region");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "postalCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "postalCode";

	

	
	$edata["LookupOrderBy"] = "postalCode";

	
	
	
	

	
	
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


	$tdatadbo_contacts["postalCode"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "postalCode";
//	dateInserted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dateInserted";
	$fdata["GoodName"] = "dateInserted";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","dateInserted");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "dateInserted";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateInserted";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadbo_contacts["dateInserted"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "dateInserted";
//	noCall
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "noCall";
	$fdata["GoodName"] = "noCall";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","noCall");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "noCall";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noCall";

	
	
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


	$tdatadbo_contacts["noCall"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "noCall";
//	noCallDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "noCallDate";
	$fdata["GoodName"] = "noCallDate";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","noCallDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "noCallDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noCallDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadbo_contacts["noCallDate"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "noCallDate";
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","comments");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "comments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatadbo_contacts["comments"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "comments";
//	agentMessage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "agentMessage";
	$fdata["GoodName"] = "agentMessage";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","agentMessage");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agentMessage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agentMessage";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadbo_contacts["agentMessage"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "agentMessage";
//	isCompany
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "isCompany";
	$fdata["GoodName"] = "isCompany";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","isCompany");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isCompany";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isCompany";

	
	
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


	$tdatadbo_contacts["isCompany"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "isCompany";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadbo_contacts["name"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "name";
//	referenceCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "referenceCode";
	$fdata["GoodName"] = "referenceCode";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","referenceCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "referenceCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referenceCode";

	
	
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


	$tdatadbo_contacts["referenceCode"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "referenceCode";
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","area");
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


	$tdatadbo_contacts["area"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "area";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","city");
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


	$tdatadbo_contacts["city"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "city";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","region");
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


	$tdatadbo_contacts["region"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "region";
//	vatNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "vatNumber";
	$fdata["GoodName"] = "vatNumber";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","vatNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "vatNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vatNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatadbo_contacts["vatNumber"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "vatNumber";
//	taxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "taxOffice";
	$fdata["GoodName"] = "taxOffice";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","taxOffice");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "taxOffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taxOffice";

	
	
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


	$tdatadbo_contacts["taxOffice"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "taxOffice";
//	externalRefCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "externalRefCode";
	$fdata["GoodName"] = "externalRefCode";
	$fdata["ownerTable"] = "dbo.contacts";
	$fdata["Label"] = GetFieldLabel("dbo_contacts","externalRefCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "externalRefCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "externalRefCode";

	
	
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


	$tdatadbo_contacts["externalRefCode"] = $fdata;
		$tdatadbo_contacts[".searchableFields"][] = "externalRefCode";


$tables_data["dbo.contacts"]=&$tdatadbo_contacts;
$field_labels["dbo_contacts"] = &$fieldLabelsdbo_contacts;
$fieldToolTips["dbo_contacts"] = &$fieldToolTipsdbo_contacts;
$placeHolders["dbo_contacts"] = &$placeHoldersdbo_contacts;
$page_titles["dbo_contacts"] = &$pageTitlesdbo_contacts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.contacts"] = array();
//	dbo.contactAddresses
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.contactAddresses";
		$detailsParam["dOriginalTable"] = "dbo.contactAddresses";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contactaddresses";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_contactAddresses");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.contacts"][$dIndex]["detailKeys"][]="contactId";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.contacts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	firstName,  	lastName,  	phone1,  	phone1Type,  	phone2,  	phone2Type,  	phone3,  	phone3Type,  	mobile1,  	mobile2,  	address,  	postalCode,  	dateInserted,  	noCall,  	noCallDate,  	comments,  	agentMessage,  	isCompany,  	name,  	referenceCode,  	area,  	city,  	region,  	vatNumber,  	taxOffice,  	externalRefCode";
$proto0["m_strFrom"] = "FROM dbo.contacts";
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
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "dbo.contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "firstName",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto10["m_sql"] = "firstName";
$proto10["m_srcTableName"] = "dbo.contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lastName",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto12["m_sql"] = "lastName";
$proto12["m_srcTableName"] = "dbo.contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "phone1",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto14["m_sql"] = "phone1";
$proto14["m_srcTableName"] = "dbo.contacts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "phone1Type",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto16["m_sql"] = "phone1Type";
$proto16["m_srcTableName"] = "dbo.contacts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "phone2",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto18["m_sql"] = "phone2";
$proto18["m_srcTableName"] = "dbo.contacts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "phone2Type",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto20["m_sql"] = "phone2Type";
$proto20["m_srcTableName"] = "dbo.contacts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "phone3",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto22["m_sql"] = "phone3";
$proto22["m_srcTableName"] = "dbo.contacts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "phone3Type",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto24["m_sql"] = "phone3Type";
$proto24["m_srcTableName"] = "dbo.contacts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile1",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto26["m_sql"] = "mobile1";
$proto26["m_srcTableName"] = "dbo.contacts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile2",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto28["m_sql"] = "mobile2";
$proto28["m_srcTableName"] = "dbo.contacts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto30["m_sql"] = "address";
$proto30["m_srcTableName"] = "dbo.contacts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "postalCode",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto32["m_sql"] = "postalCode";
$proto32["m_srcTableName"] = "dbo.contacts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "dateInserted",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto34["m_sql"] = "dateInserted";
$proto34["m_srcTableName"] = "dbo.contacts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "noCall",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto36["m_sql"] = "noCall";
$proto36["m_srcTableName"] = "dbo.contacts";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "noCallDate",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto38["m_sql"] = "noCallDate";
$proto38["m_srcTableName"] = "dbo.contacts";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto40["m_sql"] = "comments";
$proto40["m_srcTableName"] = "dbo.contacts";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "agentMessage",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto42["m_sql"] = "agentMessage";
$proto42["m_srcTableName"] = "dbo.contacts";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "isCompany",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto44["m_sql"] = "isCompany";
$proto44["m_srcTableName"] = "dbo.contacts";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto46["m_sql"] = "name";
$proto46["m_srcTableName"] = "dbo.contacts";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "referenceCode",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto48["m_sql"] = "referenceCode";
$proto48["m_srcTableName"] = "dbo.contacts";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto50["m_sql"] = "area";
$proto50["m_srcTableName"] = "dbo.contacts";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto52["m_sql"] = "city";
$proto52["m_srcTableName"] = "dbo.contacts";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto54["m_sql"] = "region";
$proto54["m_srcTableName"] = "dbo.contacts";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "vatNumber",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto56["m_sql"] = "vatNumber";
$proto56["m_srcTableName"] = "dbo.contacts";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "taxOffice",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto58["m_sql"] = "taxOffice";
$proto58["m_srcTableName"] = "dbo.contacts";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "externalRefCode",
	"m_strTable" => "dbo.contacts",
	"m_srcTableName" => "dbo.contacts"
));

$proto60["m_sql"] = "externalRefCode";
$proto60["m_srcTableName"] = "dbo.contacts";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "dbo.contacts";
$proto63["m_srcTableName"] = "dbo.contacts";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id";
$proto63["m_columns"][] = "code";
$proto63["m_columns"][] = "firstName";
$proto63["m_columns"][] = "lastName";
$proto63["m_columns"][] = "phone1";
$proto63["m_columns"][] = "phone1Type";
$proto63["m_columns"][] = "phone2";
$proto63["m_columns"][] = "phone2Type";
$proto63["m_columns"][] = "phone3";
$proto63["m_columns"][] = "phone3Type";
$proto63["m_columns"][] = "mobile1";
$proto63["m_columns"][] = "mobile2";
$proto63["m_columns"][] = "address";
$proto63["m_columns"][] = "postalCode";
$proto63["m_columns"][] = "dateInserted";
$proto63["m_columns"][] = "noCall";
$proto63["m_columns"][] = "noCallDate";
$proto63["m_columns"][] = "comments";
$proto63["m_columns"][] = "agentMessage";
$proto63["m_columns"][] = "isCompany";
$proto63["m_columns"][] = "name";
$proto63["m_columns"][] = "referenceCode";
$proto63["m_columns"][] = "area";
$proto63["m_columns"][] = "city";
$proto63["m_columns"][] = "region";
$proto63["m_columns"][] = "vatNumber";
$proto63["m_columns"][] = "taxOffice";
$proto63["m_columns"][] = "externalRefCode";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "dbo.contacts";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "dbo.contacts";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_contacts = createSqlQuery_dbo_contacts();


	
		;

																												

$tdatadbo_contacts[".sqlquery"] = $queryData_dbo_contacts;



$tableEvents["dbo.contacts"] = new eventsBase;
$tdatadbo_contacts[".hasEvents"] = false;

?>