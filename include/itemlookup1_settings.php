<?php
$tdataitemlookup1 = array();
$tdataitemlookup1[".searchableFields"] = array();
$tdataitemlookup1[".ShortName"] = "itemlookup1";
$tdataitemlookup1[".OwnerID"] = "";
$tdataitemlookup1[".OriginalTable"] = "dbo.Items";


$tdataitemlookup1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataitemlookup1[".originalPagesByType"] = $tdataitemlookup1[".pagesByType"];
$tdataitemlookup1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataitemlookup1[".originalPages"] = $tdataitemlookup1[".pages"];
$tdataitemlookup1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataitemlookup1[".originalDefaultPages"] = $tdataitemlookup1[".defaultPages"];

//	field labels
$fieldLabelsitemlookup1 = array();
$fieldToolTipsitemlookup1 = array();
$pageTitlesitemlookup1 = array();
$placeHoldersitemlookup1 = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitemlookup1["Greek"] = array();
	$fieldToolTipsitemlookup1["Greek"] = array();
	$placeHoldersitemlookup1["Greek"] = array();
	$pageTitlesitemlookup1["Greek"] = array();
	$fieldLabelsitemlookup1["Greek"]["id"] = "Id";
	$fieldToolTipsitemlookup1["Greek"]["id"] = "";
	$placeHoldersitemlookup1["Greek"]["id"] = "";
	$fieldLabelsitemlookup1["Greek"]["code"] = "Code";
	$fieldToolTipsitemlookup1["Greek"]["code"] = "";
	$placeHoldersitemlookup1["Greek"]["code"] = "";
	$fieldLabelsitemlookup1["Greek"]["description"] = "Description";
	$fieldToolTipsitemlookup1["Greek"]["description"] = "";
	$placeHoldersitemlookup1["Greek"]["description"] = "";
	$fieldLabelsitemlookup1["Greek"]["item"] = "Item";
	$fieldToolTipsitemlookup1["Greek"]["item"] = "";
	$placeHoldersitemlookup1["Greek"]["item"] = "";
	$fieldLabelsitemlookup1["Greek"]["unitPrice"] = "Unit Price";
	$fieldToolTipsitemlookup1["Greek"]["unitPrice"] = "";
	$placeHoldersitemlookup1["Greek"]["unitPrice"] = "";
	$fieldLabelsitemlookup1["Greek"]["lineDiscount"] = "Line Discount";
	$fieldToolTipsitemlookup1["Greek"]["lineDiscount"] = "";
	$placeHoldersitemlookup1["Greek"]["lineDiscount"] = "";
	$fieldLabelsitemlookup1["Greek"]["lineShippingCost"] = "Line Shipping Cost";
	$fieldToolTipsitemlookup1["Greek"]["lineShippingCost"] = "";
	$placeHoldersitemlookup1["Greek"]["lineShippingCost"] = "";
	$fieldLabelsitemlookup1["Greek"]["tempLineTotal"] = "Temp Line Total";
	$fieldToolTipsitemlookup1["Greek"]["tempLineTotal"] = "";
	$placeHoldersitemlookup1["Greek"]["tempLineTotal"] = "";
	$fieldLabelsitemlookup1["Greek"]["defaultQty"] = "Default Qty";
	$fieldToolTipsitemlookup1["Greek"]["defaultQty"] = "";
	$placeHoldersitemlookup1["Greek"]["defaultQty"] = "";
	$fieldLabelsitemlookup1["Greek"]["retailPrice"] = "Retail Price";
	$fieldToolTipsitemlookup1["Greek"]["retailPrice"] = "";
	$placeHoldersitemlookup1["Greek"]["retailPrice"] = "";
	$fieldLabelsitemlookup1["Greek"]["costPrice"] = "Cost Price";
	$fieldToolTipsitemlookup1["Greek"]["costPrice"] = "";
	$placeHoldersitemlookup1["Greek"]["costPrice"] = "";
	$fieldLabelsitemlookup1["Greek"]["itemDiscount"] = "Item Discount";
	$fieldToolTipsitemlookup1["Greek"]["itemDiscount"] = "";
	$placeHoldersitemlookup1["Greek"]["itemDiscount"] = "";
	$fieldLabelsitemlookup1["Greek"]["itemShippingCost"] = "Item Shipping Cost";
	$fieldToolTipsitemlookup1["Greek"]["itemShippingCost"] = "";
	$placeHoldersitemlookup1["Greek"]["itemShippingCost"] = "";
	$fieldLabelsitemlookup1["Greek"]["defaultSalesQty"] = "Default Sales Qty";
	$fieldToolTipsitemlookup1["Greek"]["defaultSalesQty"] = "";
	$placeHoldersitemlookup1["Greek"]["defaultSalesQty"] = "";
	$fieldLabelsitemlookup1["Greek"]["itemIsActive"] = "Item Is Active";
	$fieldToolTipsitemlookup1["Greek"]["itemIsActive"] = "";
	$placeHoldersitemlookup1["Greek"]["itemIsActive"] = "";
	if (count($fieldToolTipsitemlookup1["Greek"]))
		$tdataitemlookup1[".isUseToolTips"] = true;
}


	$tdataitemlookup1[".NCSearch"] = true;



$tdataitemlookup1[".shortTableName"] = "itemlookup1";
$tdataitemlookup1[".nSecOptions"] = 0;

$tdataitemlookup1[".mainTableOwnerID"] = "";
$tdataitemlookup1[".entityType"] = 1;
$tdataitemlookup1[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitemlookup1[".strOriginalTableName"] = "dbo.Items";

	



$tdataitemlookup1[".showAddInPopup"] = false;

$tdataitemlookup1[".showEditInPopup"] = false;

$tdataitemlookup1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitemlookup1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitemlookup1[".listAjax"] = false;
//	temporary
$tdataitemlookup1[".listAjax"] = false;

	$tdataitemlookup1[".audit"] = true;

	$tdataitemlookup1[".locking"] = false;


$pages = $tdataitemlookup1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitemlookup1[".edit"] = true;
	$tdataitemlookup1[".afterEditAction"] = 0;
	$tdataitemlookup1[".closePopupAfterEdit"] = 1;
	$tdataitemlookup1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitemlookup1[".add"] = true;
$tdataitemlookup1[".afterAddAction"] = 0;
$tdataitemlookup1[".closePopupAfterAdd"] = 1;
$tdataitemlookup1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitemlookup1[".list"] = true;
}



$tdataitemlookup1[".strSortControlSettingsJSON"] = "";

$tdataitemlookup1[".strClickActionJSON"] = "{\"fields\":{\"code\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"costPrice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"details\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"familyCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"groupCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"isPackage\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemCourierCost\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemVolume\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"itemWeight\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"photo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"details\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}},\"retailPrice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"salesCategory\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.orderItems\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"dbo.orderItems\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataitemlookup1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitemlookup1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitemlookup1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitemlookup1[".printFriendly"] = true;
}



$tdataitemlookup1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitemlookup1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitemlookup1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitemlookup1[".isUseAjaxSuggest"] = false;

$tdataitemlookup1[".rowHighlite"] = true;



																																																																																																																											

$tdataitemlookup1[".ajaxCodeSnippetAdded"] = false;

$tdataitemlookup1[".buttonsAdded"] = false;

$tdataitemlookup1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitemlookup1[".isUseTimeForSearch"] = false;


$tdataitemlookup1[".badgeColor"] = "D2AF80";


$tdataitemlookup1[".allSearchFields"] = array();
$tdataitemlookup1[".filterFields"] = array();
$tdataitemlookup1[".requiredSearchFields"] = array();

$tdataitemlookup1[".googleLikeFields"] = array();
$tdataitemlookup1[".googleLikeFields"][] = "code";
$tdataitemlookup1[".googleLikeFields"][] = "description";
$tdataitemlookup1[".googleLikeFields"][] = "item";
$tdataitemlookup1[".googleLikeFields"][] = "unitPrice";
$tdataitemlookup1[".googleLikeFields"][] = "lineDiscount";
$tdataitemlookup1[".googleLikeFields"][] = "lineShippingCost";
$tdataitemlookup1[".googleLikeFields"][] = "tempLineTotal";
$tdataitemlookup1[".googleLikeFields"][] = "defaultQty";
$tdataitemlookup1[".googleLikeFields"][] = "retailPrice";
$tdataitemlookup1[".googleLikeFields"][] = "costPrice";
$tdataitemlookup1[".googleLikeFields"][] = "itemDiscount";
$tdataitemlookup1[".googleLikeFields"][] = "itemShippingCost";
$tdataitemlookup1[".googleLikeFields"][] = "defaultSalesQty";
$tdataitemlookup1[".googleLikeFields"][] = "itemIsActive";



$tdataitemlookup1[".tableType"] = "list";

$tdataitemlookup1[".printerPageOrientation"] = 0;
$tdataitemlookup1[".nPrinterPageScale"] = 100;

$tdataitemlookup1[".nPrinterSplitRecords"] = 40;

$tdataitemlookup1[".geocodingEnabled"] = false;






$tdataitemlookup1[".searchIsRequiredForFilters"] = true;

$tdataitemlookup1[".noRecordsFirstPage"] = true;



$tdataitemlookup1[".pageSize"] = 20;

$tdataitemlookup1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitemlookup1[".strOrderBy"] = $tstrOrderBy;

$tdataitemlookup1[".orderindexes"] = array();


$tdataitemlookup1[".sqlHead"] = "SELECT id,  code,  description,  isnull(Code,'')+ ' - '+ isnull(description,'') AS item,  isnull(retailPrice, 0) AS unitPrice,  isnull(itemDiscount, 0) AS lineDiscount,  isnull(itemShippingCost, 0) AS lineShippingCost,  round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0) AS tempLineTotal,  isnull(defaultSalesQty, 1) AS defaultQty,  retailPrice,  costPrice,  itemDiscount,  itemShippingCost,  defaultSalesQty,  itemIsActive";
$tdataitemlookup1[".sqlFrom"] = "FROM dbo.Items";
$tdataitemlookup1[".sqlWhereExpr"] = "";
$tdataitemlookup1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitemlookup1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitemlookup1[".arrGroupsPerPage"] = $arrGPP;

$tdataitemlookup1[".highlightSearchResults"] = true;

$tableKeysitemlookup1 = array();
$tableKeysitemlookup1[] = "id";
$tdataitemlookup1[".Keys"] = $tableKeysitemlookup1;


$tdataitemlookup1[".hideMobileList"] = array();
		$tdataitemlookup1[".hideMobileList"][1] = array();
$tdataitemlookup1[".hideMobileList"][1]["id"] = true;
		$tdataitemlookup1[".hideMobileList"][5] = array();
$tdataitemlookup1[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","id");
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


	$tdataitemlookup1["id"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","code");
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


	$tdataitemlookup1["code"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "code";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","description");
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


	$tdataitemlookup1["description"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "description";
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup1","item");
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


	$tdataitemlookup1["item"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "item";
//	unitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unitPrice";
	$fdata["GoodName"] = "unitPrice";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup1","unitPrice");
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


	$tdataitemlookup1["unitPrice"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "unitPrice";
//	lineDiscount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lineDiscount";
	$fdata["GoodName"] = "lineDiscount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup1","lineDiscount");
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


	$tdataitemlookup1["lineDiscount"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "lineDiscount";
//	lineShippingCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lineShippingCost";
	$fdata["GoodName"] = "lineShippingCost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup1","lineShippingCost");
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


	$tdataitemlookup1["lineShippingCost"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "lineShippingCost";
//	tempLineTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tempLineTotal";
	$fdata["GoodName"] = "tempLineTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup1","tempLineTotal");
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


	$tdataitemlookup1["tempLineTotal"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "tempLineTotal";
//	defaultQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "defaultQty";
	$fdata["GoodName"] = "defaultQty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("itemLookup1","defaultQty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "defaultQty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(defaultSalesQty, 1)";

	
	
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


	$tdataitemlookup1["defaultQty"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "defaultQty";
//	retailPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "retailPrice";
	$fdata["GoodName"] = "retailPrice";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","retailPrice");
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


	$tdataitemlookup1["retailPrice"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "retailPrice";
//	costPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "costPrice";
	$fdata["GoodName"] = "costPrice";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","costPrice");
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


	$tdataitemlookup1["costPrice"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "costPrice";
//	itemDiscount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "itemDiscount";
	$fdata["GoodName"] = "itemDiscount";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","itemDiscount");
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


	$tdataitemlookup1["itemDiscount"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "itemDiscount";
//	itemShippingCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "itemShippingCost";
	$fdata["GoodName"] = "itemShippingCost";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","itemShippingCost");
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


	$tdataitemlookup1["itemShippingCost"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "itemShippingCost";
//	defaultSalesQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "defaultSalesQty";
	$fdata["GoodName"] = "defaultSalesQty";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","defaultSalesQty");
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


	$tdataitemlookup1["defaultSalesQty"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "defaultSalesQty";
//	itemIsActive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "itemIsActive";
	$fdata["GoodName"] = "itemIsActive";
	$fdata["ownerTable"] = "dbo.Items";
	$fdata["Label"] = GetFieldLabel("itemLookup1","itemIsActive");
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


	$tdataitemlookup1["itemIsActive"] = $fdata;
		$tdataitemlookup1[".searchableFields"][] = "itemIsActive";


$tables_data["itemLookup1"]=&$tdataitemlookup1;
$field_labels["itemLookup1"] = &$fieldLabelsitemlookup1;
$fieldToolTips["itemLookup1"] = &$fieldToolTipsitemlookup1;
$placeHolders["itemLookup1"] = &$placeHoldersitemlookup1;
$page_titles["itemLookup1"] = &$pageTitlesitemlookup1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["itemLookup1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["itemLookup1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itemlookup1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  code,  description,  isnull(Code,'')+ ' - '+ isnull(description,'') AS item,  isnull(retailPrice, 0) AS unitPrice,  isnull(itemDiscount, 0) AS lineDiscount,  isnull(itemShippingCost, 0) AS lineShippingCost,  round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0) AS tempLineTotal,  isnull(defaultSalesQty, 1) AS defaultQty,  retailPrice,  costPrice,  itemDiscount,  itemShippingCost,  defaultSalesQty,  itemIsActive";
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
	"m_srcTableName" => "itemLookup1"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "itemLookup1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "itemLookup1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "itemLookup1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(Code,'')+ ' - '+ isnull(description,'')"
));

$proto12["m_sql"] = "isnull(Code,'')+ ' - '+ isnull(description,'')";
$proto12["m_srcTableName"] = "itemLookup1";
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
$proto14["m_srcTableName"] = "itemLookup1";
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
$proto18["m_srcTableName"] = "itemLookup1";
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
$proto22["m_srcTableName"] = "itemLookup1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "lineShippingCost";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0)"
));

$proto26["m_sql"] = "round(isnull(defaultSalesQty,1) * isnull(retailPrice,0) - (isnull(defaultSalesQty,1) * isnull(retailPrice,0))*(isnull(itemDiscount,0)/100),2) + isnull(itemShippingCost,0)";
$proto26["m_srcTableName"] = "itemLookup1";
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

$proto28["m_sql"] = "isnull(defaultSalesQty, 1)";
$proto28["m_srcTableName"] = "itemLookup1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "defaultQty";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "retailPrice",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto32["m_sql"] = "retailPrice";
$proto32["m_srcTableName"] = "itemLookup1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "costPrice",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto34["m_sql"] = "costPrice";
$proto34["m_srcTableName"] = "itemLookup1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "itemDiscount",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto36["m_sql"] = "itemDiscount";
$proto36["m_srcTableName"] = "itemLookup1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "itemShippingCost",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto38["m_sql"] = "itemShippingCost";
$proto38["m_srcTableName"] = "itemLookup1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "defaultSalesQty",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto40["m_sql"] = "defaultSalesQty";
$proto40["m_srcTableName"] = "itemLookup1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "itemIsActive",
	"m_strTable" => "dbo.Items",
	"m_srcTableName" => "itemLookup1"
));

$proto42["m_sql"] = "itemIsActive";
$proto42["m_srcTableName"] = "itemLookup1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.Items";
$proto45["m_srcTableName"] = "itemLookup1";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "code";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "retailPrice";
$proto45["m_columns"][] = "costPrice";
$proto45["m_columns"][] = "details";
$proto45["m_columns"][] = "photo";
$proto45["m_columns"][] = "familyId";
$proto45["m_columns"][] = "itemCustomerId";
$proto45["m_columns"][] = "salesCategoryId";
$proto45["m_columns"][] = "isPackage";
$proto45["m_columns"][] = "itemWeight";
$proto45["m_columns"][] = "itemVolume";
$proto45["m_columns"][] = "itemCourierCost";
$proto45["m_columns"][] = "thumbnail";
$proto45["m_columns"][] = "salesComission";
$proto45["m_columns"][] = "itemDiscount";
$proto45["m_columns"][] = "itemShippingCost";
$proto45["m_columns"][] = "defaultSalesQty";
$proto45["m_columns"][] = "itemIsActive";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "dbo.Items";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "itemLookup1";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="itemLookup1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itemlookup1 = createSqlQuery_itemlookup1();


	
		;

															

$tdataitemlookup1[".sqlquery"] = $queryData_itemlookup1;



$tableEvents["itemLookup1"] = new eventsBase;
$tdataitemlookup1[".hasEvents"] = false;

?>