<?php
$tdataitems = array();
$tdataitems[".searchableFields"] = array();
$tdataitems[".ShortName"] = "items";
$tdataitems[".OwnerID"] = "";
$tdataitems[".OriginalTable"] = "dbo.Items";


$tdataitems[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataitems[".originalPagesByType"] = $tdataitems[".pagesByType"];
$tdataitems[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataitems[".originalPages"] = $tdataitems[".pages"];
$tdataitems[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataitems[".originalDefaultPages"] = $tdataitems[".defaultPages"];

//	field labels
$fieldLabelsitems = array();
$fieldToolTipsitems = array();
$pageTitlesitems = array();
$placeHoldersitems = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitems["Greek"] = array();
	$fieldToolTipsitems["Greek"] = array();
	$placeHoldersitems["Greek"] = array();
	$pageTitlesitems["Greek"] = array();
	$fieldLabelsitems["Greek"]["id"] = "Id";
	$fieldToolTipsitems["Greek"]["id"] = "";
	$placeHoldersitems["Greek"]["id"] = "";
	$fieldLabelsitems["Greek"]["code"] = "Κωδικός";
	$fieldToolTipsitems["Greek"]["code"] = "";
	$placeHoldersitems["Greek"]["code"] = "";
	$fieldLabelsitems["Greek"]["description"] = "Περιγραφή";
	$fieldToolTipsitems["Greek"]["description"] = "";
	$placeHoldersitems["Greek"]["description"] = "";
	$fieldLabelsitems["Greek"]["retailPrice"] = "Λιανική Τιμή";
	$fieldToolTipsitems["Greek"]["retailPrice"] = "";
	$placeHoldersitems["Greek"]["retailPrice"] = "";
	$fieldLabelsitems["Greek"]["costPrice"] = "Κόστος Κτήσης";
	$fieldToolTipsitems["Greek"]["costPrice"] = "";
	$placeHoldersitems["Greek"]["costPrice"] = "";
	$fieldLabelsitems["Greek"]["details"] = "Πληροφορίες Είδους";
	$fieldToolTipsitems["Greek"]["details"] = "Πληροφορίες Είδους";
	$placeHoldersitems["Greek"]["details"] = "";
	$fieldLabelsitems["Greek"]["photo"] = "Φωτογραφία";
	$fieldToolTipsitems["Greek"]["photo"] = "";
	$placeHoldersitems["Greek"]["photo"] = "";
	$fieldLabelsitems["Greek"]["isPackage"] = "Είναι Σετ";
	$fieldToolTipsitems["Greek"]["isPackage"] = "";
	$placeHoldersitems["Greek"]["isPackage"] = "";
	$fieldLabelsitems["Greek"]["itemWeight"] = "Βάρος";
	$fieldToolTipsitems["Greek"]["itemWeight"] = "";
	$placeHoldersitems["Greek"]["itemWeight"] = "";
	$fieldLabelsitems["Greek"]["itemVolume"] = "Όγκος";
	$fieldToolTipsitems["Greek"]["itemVolume"] = "";
	$placeHoldersitems["Greek"]["itemVolume"] = "";
	$fieldLabelsitems["Greek"]["itemCourierCost"] = "Κόστος Αποστολής";
	$fieldToolTipsitems["Greek"]["itemCourierCost"] = "";
	$placeHoldersitems["Greek"]["itemCourierCost"] = "";
	$fieldLabelsitems["Greek"]["thumbnail"] = "Thumbnail";
	$fieldToolTipsitems["Greek"]["thumbnail"] = "";
	$placeHoldersitems["Greek"]["thumbnail"] = "";
	$fieldLabelsitems["Greek"]["familyId"] = "Οικογένεια";
	$fieldToolTipsitems["Greek"]["familyId"] = "";
	$placeHoldersitems["Greek"]["familyId"] = "";
	$fieldLabelsitems["Greek"]["salesCategoryId"] = "Κατηγορία Πωλήσεων";
	$fieldToolTipsitems["Greek"]["salesCategoryId"] = "";
	$placeHoldersitems["Greek"]["salesCategoryId"] = "";
	$fieldLabelsitems["Greek"]["itemCustomerId"] = "Πώληση για Πελάτη";
	$fieldToolTipsitems["Greek"]["itemCustomerId"] = "";
	$placeHoldersitems["Greek"]["itemCustomerId"] = "";
	$fieldLabelsitems["Greek"]["salesComission"] = "Προμήθεια Πωλήσεων";
	$fieldToolTipsitems["Greek"]["salesComission"] = "";
	$placeHoldersitems["Greek"]["salesComission"] = "";
	$fieldLabelsitems["Greek"]["itemDiscount"] = "% Έκπτωση";
	$fieldToolTipsitems["Greek"]["itemDiscount"] = "";
	$placeHoldersitems["Greek"]["itemDiscount"] = "";
	$fieldLabelsitems["Greek"]["itemShippingCost"] = "Έξοδα Αποστολής";
	$fieldToolTipsitems["Greek"]["itemShippingCost"] = "";
	$placeHoldersitems["Greek"]["itemShippingCost"] = "";
	$fieldLabelsitems["Greek"]["defaultSalesQty"] = "Ποσότητα Πώλησης";
	$fieldToolTipsitems["Greek"]["defaultSalesQty"] = "";
	$placeHoldersitems["Greek"]["defaultSalesQty"] = "";
	$fieldLabelsitems["Greek"]["itemIsActive"] = "Ενεργό";
	$fieldToolTipsitems["Greek"]["itemIsActive"] = "";
	$placeHoldersitems["Greek"]["itemIsActive"] = "";
	if (count($fieldToolTipsitems["Greek"]))
		$tdataitems[".isUseToolTips"] = true;
}


	$tdataitems[".NCSearch"] = true;



$tdataitems[".shortTableName"] = "items";
$tdataitems[".nSecOptions"] = 0;

$tdataitems[".mainTableOwnerID"] = "";
$tdataitems[".entityType"] = 0;
$tdataitems[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitems[".strOriginalTableName"] = "dbo.Items";

	



$tdataitems[".showAddInPopup"] = false;

$tdataitems[".showEditInPopup"] = false;

$tdataitems[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitems[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitems[".listAjax"] = false;
//	temporary
$tdataitems[".listAjax"] = false;

	$tdataitems[".audit"] = true;

	$tdataitems[".locking"] = false;


$pages = $tdataitems[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitems[".edit"] = true;
	$tdataitems[".afterEditAction"] = 0;
	$tdataitems[".closePopupAfterEdit"] = 1;
	$tdataitems[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitems[".add"] = true;
$tdataitems[".afterAddAction"] = 0;
$tdataitems[".closePopupAfterAdd"] = 1;
$tdataitems[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitems[".list"] = true;
}



$tdataitems[".strSortControlSettingsJSON"] = "";

$tdataitems[".strClickActionJSON"] = "{\"fields\":{\"code\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"costPrice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"details\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"familyCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"groupCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"isPackage\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemCourierCost\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemVolume\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemWeight\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"photo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"details\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"retailPrice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"salesCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataitems[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitems[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitems[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitems[".printFriendly"] = true;
}



$tdataitems[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitems[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitems[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitems[".isUseAjaxSuggest"] = false;

$tdataitems[".rowHighlite"] = true;



																																																																																																																											

$tdataitems[".ajaxCodeSnippetAdded"] = false;

$tdataitems[".buttonsAdded"] = false;

$tdataitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitems[".isUseTimeForSearch"] = false;


$tdataitems[".badgeColor"] = "0eb82c";


$tdataitems[".allSearchFields"] = array();
$tdataitems[".filterFields"] = array();
$tdataitems[".requiredSearchFields"] = array();

$tdataitems[".googleLikeFields"] = array();
$tdataitems[".googleLikeFields"][] = "code";
$tdataitems[".googleLikeFields"][] = "description";
$tdataitems[".googleLikeFields"][] = "retailPrice";
$tdataitems[".googleLikeFields"][] = "costPrice";
$tdataitems[".googleLikeFields"][] = "familyId";
$tdataitems[".googleLikeFields"][] = "itemCustomerId";
$tdataitems[".googleLikeFields"][] = "salesCategoryId";
$tdataitems[".googleLikeFields"][] = "itemWeight";
$tdataitems[".googleLikeFields"][] = "itemVolume";
$tdataitems[".googleLikeFields"][] = "itemCourierCost";
$tdataitems[".googleLikeFields"][] = "salesComission";
$tdataitems[".googleLikeFields"][] = "itemDiscount";
$tdataitems[".googleLikeFields"][] = "itemShippingCost";
$tdataitems[".googleLikeFields"][] = "defaultSalesQty";
$tdataitems[".googleLikeFields"][] = "itemIsActive";



$tdataitems[".tableType"] = "list";

$tdataitems[".printerPageOrientation"] = 0;
$tdataitems[".nPrinterPageScale"] = 100;

$tdataitems[".nPrinterSplitRecords"] = 40;

$tdataitems[".geocodingEnabled"] = false;






$tdataitems[".searchIsRequiredForFilters"] = true;

$tdataitems[".noRecordsFirstPage"] = true;



$tdataitems[".pageSize"] = 20;

$tdataitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitems[".strOrderBy"] = $tstrOrderBy;

$tdataitems[".orderindexes"] = array();


$tdataitems[".sqlHead"] = "SELECT id,  	code,  	description,  	retailPrice,  	costPrice,  	details,  	photo,  	familyId,  	itemCustomerId,  	salesCategoryId,  	isPackage,  	itemWeight,  	itemVolume,  	itemCourierCost,  	thumbnail,  	salesComission,  	itemDiscount,  	itemShippingCost,  	defaultSalesQty,  	itemIsActive";
$tdataitems[".sqlFrom"] = "FROM dbo.Items";
$tdataitems[".sqlWhereExpr"] = "";
$tdataitems[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitems[".arrGroupsPerPage"] = $arrGPP;

$tdataitems[".highlightSearchResults"] = true;

$tableKeysitems = array();
$tableKeysitems[] = "id";
$tdataitems[".Keys"] = $tableKeysitems;


$tdataitems[".hideMobileList"] = array();
		$tdataitems[".hideMobileList"][1] = array();
$tdataitems[".hideMobileList"][1]["id"] = true;
		$tdataitems[".hideMobileList"][1]["details"] = true;
		$tdataitems[".hideMobileList"][1]["photo"] = true;
		$tdataitems[".hideMobileList"][1]["isPackage"] = true;
		$tdataitems[".hideMobileList"][1]["itemWeight"] = true;
		$tdataitems[".hideMobileList"][1]["itemVolume"] = true;
		$tdataitems[".hideMobileList"][1]["itemCourierCost"] = true;
		$tdataitems[".hideMobileList"][5] = array();
$tdataitems[".hideMobileList"][5]["id"] = true;
		$tdataitems[".hideMobileList"][5]["details"] = true;
		$tdataitems[".hideMobileList"][5]["photo"] = true;
		$tdataitems[".hideMobileList"][5]["isPackage"] = true;
		$tdataitems[".hideMobileList"][5]["itemWeight"] = true;
		$tdataitems[".hideMobileList"][5]["itemVolume"] = true;
		$tdataitems[".hideMobileList"][5]["itemCourierCost"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","id");
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


	$tdataitems["id"] = $fdata;
		$tdataitems[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","code");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataitems["code"] = $fdata;
		$tdataitems[".searchableFields"][] = "code";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","description");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 50;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

		$edata["insertNull"] = true;

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataitems["description"] = $fdata;
		$tdataitems[".searchableFields"][] = "description";
//	retailPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "retailPrice";
	$fdata["GoodName"] = "retailPrice";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","retailPrice");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "retailPrice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "retailPrice";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["retailPrice"] = $fdata;
		$tdataitems[".searchableFields"][] = "retailPrice";
//	costPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "costPrice";
	$fdata["GoodName"] = "costPrice";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","costPrice");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "costPrice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costPrice";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["costPrice"] = $fdata;
		$tdataitems[".searchableFields"][] = "costPrice";
//	details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "details";
	$fdata["GoodName"] = "details";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","details");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "details";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "details";

	
	
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


	$tdataitems["details"] = $fdata;
		$tdataitems[".searchableFields"][] = "details";
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","photo");
	$fdata["FieldType"] = 205;

	
	
	
			

		$fdata["strField"] = "photo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "photo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 0;
	$vdata["ThumbHeight"] = 0;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
		
	$vdata["imageBorder"] = 0;
	$vdata["imageFullWidth"] = 0;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "thumbnail";
			$edata["ThumbnailSize"] = 100;

			
	
	
	
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


	$tdataitems["photo"] = $fdata;
	//	familyId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "familyId";
	$fdata["GoodName"] = "familyId";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","familyId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "familyId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "familyId";

	
	
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
	$edata["LookupTable"] = "dbo.itemFamily";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";

	

	
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


	$tdataitems["familyId"] = $fdata;
		$tdataitems[".searchableFields"][] = "familyId";
//	itemCustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "itemCustomerId";
	$fdata["GoodName"] = "itemCustomerId";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemCustomerId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "itemCustomerId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemCustomerId";

	
	
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
	$edata["LookupTable"] = "dbo.itemCustomer";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"salesComission", 'lookupF'=>"masterComission");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";

	

	
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


	$tdataitems["itemCustomerId"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemCustomerId";
//	salesCategoryId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "salesCategoryId";
	$fdata["GoodName"] = "salesCategoryId";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","salesCategoryId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "salesCategoryId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salesCategoryId";

	
	
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
	$edata["LookupTable"] = "dbo.itemSalesCategory";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";

	

	
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


	$tdataitems["salesCategoryId"] = $fdata;
		$tdataitems[".searchableFields"][] = "salesCategoryId";
//	isPackage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "isPackage";
	$fdata["GoodName"] = "isPackage";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","isPackage");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isPackage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isPackage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
			$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataitems["isPackage"] = $fdata;
		$tdataitems[".searchableFields"][] = "isPackage";
//	itemWeight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "itemWeight";
	$fdata["GoodName"] = "itemWeight";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemWeight");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "itemWeight";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemWeight";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["itemWeight"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemWeight";
//	itemVolume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "itemVolume";
	$fdata["GoodName"] = "itemVolume";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemVolume");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "itemVolume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemVolume";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["itemVolume"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemVolume";
//	itemCourierCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "itemCourierCost";
	$fdata["GoodName"] = "itemCourierCost";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemCourierCost");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "itemCourierCost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemCourierCost";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["itemCourierCost"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemCourierCost";
//	thumbnail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "thumbnail";
	$fdata["GoodName"] = "thumbnail";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","thumbnail");
	$fdata["FieldType"] = 205;

	
	
	
			

		$fdata["strField"] = "thumbnail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "thumbnail";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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


	$tdataitems["thumbnail"] = $fdata;
	//	salesComission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "salesComission";
	$fdata["GoodName"] = "salesComission";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","salesComission");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "salesComission";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salesComission";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["salesComission"] = $fdata;
		$tdataitems[".searchableFields"][] = "salesComission";
//	itemDiscount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "itemDiscount";
	$fdata["GoodName"] = "itemDiscount";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemDiscount");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "itemDiscount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemDiscount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["itemDiscount"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemDiscount";
//	itemShippingCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "itemShippingCost";
	$fdata["GoodName"] = "itemShippingCost";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemShippingCost");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "itemShippingCost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemShippingCost";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataitems["itemShippingCost"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemShippingCost";
//	defaultSalesQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "defaultSalesQty";
	$fdata["GoodName"] = "defaultSalesQty";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","defaultSalesQty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "defaultSalesQty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "defaultSalesQty";

	
	
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


	$tdataitems["defaultSalesQty"] = $fdata;
		$tdataitems[".searchableFields"][] = "defaultSalesQty";
//	itemIsActive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "itemIsActive";
	$fdata["GoodName"] = "itemIsActive";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("dbo_Items","itemIsActive");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "itemIsActive";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemIsActive";

	
	
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


	$tdataitems["itemIsActive"] = $fdata;
		$tdataitems[".searchableFields"][] = "itemIsActive";


$tables_data["dbo.Items"]=&$tdataitems;
$field_labels["dbo_Items"] = &$fieldLabelsitems;
$fieldToolTips["dbo_Items"] = &$fieldToolTipsitems;
$placeHolders["dbo_Items"] = &$placeHoldersitems;
$page_titles["dbo_Items"] = &$pageTitlesitems;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Items"] = array();
//	dbo.orderItems
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.orderItems";
		$detailsParam["dOriginalTable"] = "dbo.orderItems";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "orderitems";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_orderItems");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Items"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Items"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Items"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.Items"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Items"][$dIndex]["detailKeys"][]="itemid";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Items"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	description,  	retailPrice,  	costPrice,  	details,  	photo,  	familyId,  	itemCustomerId,  	salesCategoryId,  	isPackage,  	itemWeight,  	itemVolume,  	itemCourierCost,  	thumbnail,  	salesComission,  	itemDiscount,  	itemShippingCost,  	defaultSalesQty,  	itemIsActive";
$proto0["m_strFrom"] = "FROM dbo.Items";
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
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.Items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "dbo.Items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.Items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "retailPrice",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto12["m_sql"] = "retailPrice";
$proto12["m_srcTableName"] = "dbo.Items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "costPrice",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto14["m_sql"] = "costPrice";
$proto14["m_srcTableName"] = "dbo.Items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "details",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto16["m_sql"] = "details";
$proto16["m_srcTableName"] = "dbo.Items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto18["m_sql"] = "photo";
$proto18["m_srcTableName"] = "dbo.Items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "familyId",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto20["m_sql"] = "familyId";
$proto20["m_srcTableName"] = "dbo.Items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "itemCustomerId",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto22["m_sql"] = "itemCustomerId";
$proto22["m_srcTableName"] = "dbo.Items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "salesCategoryId",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto24["m_sql"] = "salesCategoryId";
$proto24["m_srcTableName"] = "dbo.Items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "isPackage",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto26["m_sql"] = "isPackage";
$proto26["m_srcTableName"] = "dbo.Items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "itemWeight",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto28["m_sql"] = "itemWeight";
$proto28["m_srcTableName"] = "dbo.Items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "itemVolume",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto30["m_sql"] = "itemVolume";
$proto30["m_srcTableName"] = "dbo.Items";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "itemCourierCost",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto32["m_sql"] = "itemCourierCost";
$proto32["m_srcTableName"] = "dbo.Items";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "thumbnail",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto34["m_sql"] = "thumbnail";
$proto34["m_srcTableName"] = "dbo.Items";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "salesComission",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto36["m_sql"] = "salesComission";
$proto36["m_srcTableName"] = "dbo.Items";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "itemDiscount",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto38["m_sql"] = "itemDiscount";
$proto38["m_srcTableName"] = "dbo.Items";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "itemShippingCost",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto40["m_sql"] = "itemShippingCost";
$proto40["m_srcTableName"] = "dbo.Items";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "defaultSalesQty",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto42["m_sql"] = "defaultSalesQty";
$proto42["m_srcTableName"] = "dbo.Items";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "itemIsActive",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "dbo.Items"
));

$proto44["m_sql"] = "itemIsActive";
$proto44["m_srcTableName"] = "dbo.Items";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "dbo.Items";
$proto47["m_srcTableName"] = "dbo.Items";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "code";
$proto47["m_columns"][] = "description";
$proto47["m_columns"][] = "retailPrice";
$proto47["m_columns"][] = "costPrice";
$proto47["m_columns"][] = "details";
$proto47["m_columns"][] = "photo";
$proto47["m_columns"][] = "familyId";
$proto47["m_columns"][] = "itemCustomerId";
$proto47["m_columns"][] = "salesCategoryId";
$proto47["m_columns"][] = "isPackage";
$proto47["m_columns"][] = "itemWeight";
$proto47["m_columns"][] = "itemVolume";
$proto47["m_columns"][] = "itemCourierCost";
$proto47["m_columns"][] = "thumbnail";
$proto47["m_columns"][] = "salesComission";
$proto47["m_columns"][] = "itemDiscount";
$proto47["m_columns"][] = "itemShippingCost";
$proto47["m_columns"][] = "defaultSalesQty";
$proto47["m_columns"][] = "itemIsActive";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "dbo.Items";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "dbo.Items";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_items = createSqlQuery_items();


	
		;

																				

$tdataitems[".sqlquery"] = $queryData_items;



$tableEvents["dbo.Items"] = new eventsBase;
$tdataitems[".hasEvents"] = false;

?>