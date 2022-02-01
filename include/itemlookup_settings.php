<?php
$tdataitemlookup = array();
$tdataitemlookup[".searchableFields"] = array();
$tdataitemlookup[".ShortName"] = "itemlookup";
$tdataitemlookup[".OwnerID"] = "";
$tdataitemlookup[".OriginalTable"] = "dbo.Items";


$tdataitemlookup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataitemlookup[".originalPagesByType"] = $tdataitemlookup[".pagesByType"];
$tdataitemlookup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataitemlookup[".originalPages"] = $tdataitemlookup[".pages"];
$tdataitemlookup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataitemlookup[".originalDefaultPages"] = $tdataitemlookup[".defaultPages"];

//	field labels
$fieldLabelsitemlookup = array();
$fieldToolTipsitemlookup = array();
$pageTitlesitemlookup = array();
$placeHoldersitemlookup = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitemlookup["Greek"] = array();
	$fieldToolTipsitemlookup["Greek"] = array();
	$placeHoldersitemlookup["Greek"] = array();
	$pageTitlesitemlookup["Greek"] = array();
	$fieldLabelsitemlookup["Greek"]["id"] = "Id";
	$fieldToolTipsitemlookup["Greek"]["id"] = "";
	$placeHoldersitemlookup["Greek"]["id"] = "";
	$fieldLabelsitemlookup["Greek"]["code"] = "Κωδικός";
	$fieldToolTipsitemlookup["Greek"]["code"] = "";
	$placeHoldersitemlookup["Greek"]["code"] = "";
	$fieldLabelsitemlookup["Greek"]["description"] = "Περιγραφή";
	$fieldToolTipsitemlookup["Greek"]["description"] = "";
	$placeHoldersitemlookup["Greek"]["description"] = "";
	$fieldLabelsitemlookup["Greek"]["tempLineTotal"] = "Σύνολο";
	$fieldToolTipsitemlookup["Greek"]["tempLineTotal"] = "";
	$placeHoldersitemlookup["Greek"]["tempLineTotal"] = "";
	$fieldLabelsitemlookup["Greek"]["defaultQty"] = "Ποσότητα";
	$fieldToolTipsitemlookup["Greek"]["defaultQty"] = "";
	$placeHoldersitemlookup["Greek"]["defaultQty"] = "";
	$fieldLabelsitemlookup["Greek"]["unitPrice"] = "Unit Price";
	$fieldToolTipsitemlookup["Greek"]["unitPrice"] = "";
	$placeHoldersitemlookup["Greek"]["unitPrice"] = "";
	$fieldLabelsitemlookup["Greek"]["lineDiscount"] = "Line Discount";
	$fieldToolTipsitemlookup["Greek"]["lineDiscount"] = "";
	$placeHoldersitemlookup["Greek"]["lineDiscount"] = "";
	$fieldLabelsitemlookup["Greek"]["lineShippingCost"] = "Line Shipping Cost";
	$fieldToolTipsitemlookup["Greek"]["lineShippingCost"] = "";
	$placeHoldersitemlookup["Greek"]["lineShippingCost"] = "";
	$fieldLabelsitemlookup["Greek"]["item"] = "Item";
	$fieldToolTipsitemlookup["Greek"]["item"] = "";
	$placeHoldersitemlookup["Greek"]["item"] = "";
	if (count($fieldToolTipsitemlookup["Greek"]))
		$tdataitemlookup[".isUseToolTips"] = true;
}


	$tdataitemlookup[".NCSearch"] = true;



$tdataitemlookup[".shortTableName"] = "itemlookup";
$tdataitemlookup[".nSecOptions"] = 0;

$tdataitemlookup[".mainTableOwnerID"] = "";
$tdataitemlookup[".entityType"] = 1;
$tdataitemlookup[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitemlookup[".strOriginalTableName"] = "dbo.Items";

	



$tdataitemlookup[".showAddInPopup"] = false;

$tdataitemlookup[".showEditInPopup"] = false;

$tdataitemlookup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitemlookup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitemlookup[".listAjax"] = false;
//	temporary
$tdataitemlookup[".listAjax"] = false;

	$tdataitemlookup[".audit"] = true;

	$tdataitemlookup[".locking"] = false;


$pages = $tdataitemlookup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitemlookup[".edit"] = true;
	$tdataitemlookup[".afterEditAction"] = 0;
	$tdataitemlookup[".closePopupAfterEdit"] = 1;
	$tdataitemlookup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitemlookup[".add"] = true;
$tdataitemlookup[".afterAddAction"] = 0;
$tdataitemlookup[".closePopupAfterAdd"] = 1;
$tdataitemlookup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitemlookup[".list"] = true;
}



$tdataitemlookup[".strSortControlSettingsJSON"] = "";

$tdataitemlookup[".strClickActionJSON"] = "{\"fields\":{\"code\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"costPrice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"details\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"familyCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"groupCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"isPackage\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemCourierCost\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemVolume\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemWeight\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"photo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"details\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"retailPrice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"salesCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataitemlookup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitemlookup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitemlookup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitemlookup[".printFriendly"] = true;
}



$tdataitemlookup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitemlookup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitemlookup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitemlookup[".isUseAjaxSuggest"] = false;

$tdataitemlookup[".rowHighlite"] = true;



																																																																																																																											

$tdataitemlookup[".ajaxCodeSnippetAdded"] = false;

$tdataitemlookup[".buttonsAdded"] = false;

$tdataitemlookup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitemlookup[".isUseTimeForSearch"] = false;


$tdataitemlookup[".badgeColor"] = "4682B4";


$tdataitemlookup[".allSearchFields"] = array();
$tdataitemlookup[".filterFields"] = array();
$tdataitemlookup[".requiredSearchFields"] = array();

$tdataitemlookup[".googleLikeFields"] = array();
$tdataitemlookup[".googleLikeFields"][] = "code";
$tdataitemlookup[".googleLikeFields"][] = "description";
$tdataitemlookup[".googleLikeFields"][] = "item";
$tdataitemlookup[".googleLikeFields"][] = "unitPrice";
$tdataitemlookup[".googleLikeFields"][] = "lineDiscount";
$tdataitemlookup[".googleLikeFields"][] = "lineShippingCost";
$tdataitemlookup[".googleLikeFields"][] = "tempLineTotal";
$tdataitemlookup[".googleLikeFields"][] = "defaultQty";



$tdataitemlookup[".tableType"] = "list";

$tdataitemlookup[".printerPageOrientation"] = 0;
$tdataitemlookup[".nPrinterPageScale"] = 100;

$tdataitemlookup[".nPrinterSplitRecords"] = 40;

$tdataitemlookup[".geocodingEnabled"] = false;






$tdataitemlookup[".searchIsRequiredForFilters"] = true;

$tdataitemlookup[".noRecordsFirstPage"] = true;



$tdataitemlookup[".pageSize"] = 20;

$tdataitemlookup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitemlookup[".strOrderBy"] = $tstrOrderBy;

$tdataitemlookup[".orderindexes"] = array();


$tdataitemlookup[".sqlHead"] = "SELECT id,  code,  description,  isnull(Code,'')+ ' - '+ isnull(description,'') AS item,  isnull(retailPrice, 0) AS unitPrice,  isnull(itemDiscount, 0) AS lineDiscount,  isnull(itemShippingCost, 0) AS lineShippingCost,  round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0) AS tempLineTotal,  isnull(defaultSalesQty,1) AS defaultQty";
$tdataitemlookup[".sqlFrom"] = "FROM dbo.Items";
$tdataitemlookup[".sqlWhereExpr"] = "";
$tdataitemlookup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitemlookup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitemlookup[".arrGroupsPerPage"] = $arrGPP;

$tdataitemlookup[".highlightSearchResults"] = true;

$tableKeysitemlookup = array();
$tableKeysitemlookup[] = "id";
$tdataitemlookup[".Keys"] = $tableKeysitemlookup;


$tdataitemlookup[".hideMobileList"] = array();
		$tdataitemlookup[".hideMobileList"][1] = array();
$tdataitemlookup[".hideMobileList"][1]["id"] = true;
		$tdataitemlookup[".hideMobileList"][5] = array();
$tdataitemlookup[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup","id");
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


	$tdataitemlookup["id"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup","code");
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


	$tdataitemlookup["code"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "code";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup","description");
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


	$tdataitemlookup["description"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "description";
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup","item");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "item";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(Code,'')+ ' - '+ isnull(description,'')";

	
	
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


	$tdataitemlookup["item"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "item";
//	unitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unitPrice";
	$fdata["GoodName"] = "unitPrice";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup","unitPrice");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "unitPrice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(retailPrice, 0)";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataitemlookup["unitPrice"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "unitPrice";
//	lineDiscount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lineDiscount";
	$fdata["GoodName"] = "lineDiscount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup","lineDiscount");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "lineDiscount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(itemDiscount, 0)";

	
	
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


	$tdataitemlookup["lineDiscount"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "lineDiscount";
//	lineShippingCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lineShippingCost";
	$fdata["GoodName"] = "lineShippingCost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup","lineShippingCost");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "lineShippingCost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(itemShippingCost, 0)";

	
	
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


	$tdataitemlookup["lineShippingCost"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "lineShippingCost";
//	tempLineTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tempLineTotal";
	$fdata["GoodName"] = "tempLineTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup","tempLineTotal");
	$fdata["FieldType"] = 131;

	
	
	
			

		$fdata["strField"] = "retailPrice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0)";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

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


	$tdataitemlookup["tempLineTotal"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "tempLineTotal";
//	defaultQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "defaultQty";
	$fdata["GoodName"] = "defaultQty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup","defaultQty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "defaultQty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(defaultSalesQty,1)";

	
	
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


	$tdataitemlookup["defaultQty"] = $fdata;
		$tdataitemlookup[".searchableFields"][] = "defaultQty";


$tables_data["itemLookup"]=&$tdataitemlookup;
$field_labels["itemLookup"] = &$fieldLabelsitemlookup;
$fieldToolTips["itemLookup"] = &$fieldToolTipsitemlookup;
$placeHolders["itemLookup"] = &$placeHoldersitemlookup;
$page_titles["itemLookup"] = &$pageTitlesitemlookup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["itemLookup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["itemLookup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itemlookup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  code,  description,  isnull(Code,'')+ ' - '+ isnull(description,'') AS item,  isnull(retailPrice, 0) AS unitPrice,  isnull(itemDiscount, 0) AS lineDiscount,  isnull(itemShippingCost, 0) AS lineShippingCost,  round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0) AS tempLineTotal,  isnull(defaultSalesQty,1) AS defaultQty";
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
	"m_srcTableName" => "itemLookup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "itemLookup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "itemLookup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "itemLookup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(Code,'')+ ' - '+ isnull(description,'')"
));

$proto12["m_sql"] = "isnull(Code,'')+ ' - '+ isnull(description,'')";
$proto12["m_srcTableName"] = "itemLookup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "item";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "retailPrice"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "isnull(retailPrice, 0)";
$proto14["m_srcTableName"] = "itemLookup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "unitPrice";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "itemDiscount"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "isnull(itemDiscount, 0)";
$proto18["m_srcTableName"] = "itemLookup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "lineDiscount";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "itemShippingCost"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "isnull(itemShippingCost, 0)";
$proto22["m_srcTableName"] = "itemLookup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "lineShippingCost";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0)"
));

$proto26["m_sql"] = "round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0)";
$proto26["m_srcTableName"] = "itemLookup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "tempLineTotal";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "defaultSalesQty"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "isnull(defaultSalesQty,1)";
$proto28["m_srcTableName"] = "itemLookup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "defaultQty";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.Items";
$proto33["m_srcTableName"] = "itemLookup";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "code";
$proto33["m_columns"][] = "description";
$proto33["m_columns"][] = "retailPrice";
$proto33["m_columns"][] = "costPrice";
$proto33["m_columns"][] = "details";
$proto33["m_columns"][] = "photo";
$proto33["m_columns"][] = "familyId";
$proto33["m_columns"][] = "itemCustomerId";
$proto33["m_columns"][] = "salesCategoryId";
$proto33["m_columns"][] = "isPackage";
$proto33["m_columns"][] = "itemWeight";
$proto33["m_columns"][] = "itemVolume";
$proto33["m_columns"][] = "itemCourierCost";
$proto33["m_columns"][] = "thumbnail";
$proto33["m_columns"][] = "salesComission";
$proto33["m_columns"][] = "itemDiscount";
$proto33["m_columns"][] = "itemShippingCost";
$proto33["m_columns"][] = "defaultSalesQty";
$proto33["m_columns"][] = "itemIsActive";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "dbo.Items";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "itemLookup";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="itemLookup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itemlookup = createSqlQuery_itemlookup();


	
		;

									

$tdataitemlookup[".sqlquery"] = $queryData_itemlookup;



$tableEvents["itemLookup"] = new eventsBase;
$tdataitemlookup[".hasEvents"] = false;

?>