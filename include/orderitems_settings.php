<?php
$tdataorderitems = array();
$tdataorderitems[".searchableFields"] = array();
$tdataorderitems[".ShortName"] = "orderitems";
$tdataorderitems[".OwnerID"] = "";
$tdataorderitems[".OriginalTable"] = "dbo.orderItems";


$tdataorderitems[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataorderitems[".originalPagesByType"] = $tdataorderitems[".pagesByType"];
$tdataorderitems[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataorderitems[".originalPages"] = $tdataorderitems[".pages"];
$tdataorderitems[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataorderitems[".originalDefaultPages"] = $tdataorderitems[".defaultPages"];

//	field labels
$fieldLabelsorderitems = array();
$fieldToolTipsorderitems = array();
$pageTitlesorderitems = array();
$placeHoldersorderitems = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsorderitems["Greek"] = array();
	$fieldToolTipsorderitems["Greek"] = array();
	$placeHoldersorderitems["Greek"] = array();
	$pageTitlesorderitems["Greek"] = array();
	$fieldLabelsorderitems["Greek"]["id"] = "Id";
	$fieldToolTipsorderitems["Greek"]["id"] = "";
	$placeHoldersorderitems["Greek"]["id"] = "";
	$fieldLabelsorderitems["Greek"]["callid"] = "Κλήση";
	$fieldToolTipsorderitems["Greek"]["callid"] = "";
	$placeHoldersorderitems["Greek"]["callid"] = "";
	$fieldLabelsorderitems["Greek"]["itemid"] = "Είδος";
	$fieldToolTipsorderitems["Greek"]["itemid"] = "";
	$placeHoldersorderitems["Greek"]["itemid"] = "";
	$fieldLabelsorderitems["Greek"]["qty"] = "Ποσ.";
	$fieldToolTipsorderitems["Greek"]["qty"] = "";
	$placeHoldersorderitems["Greek"]["qty"] = "";
	$fieldLabelsorderitems["Greek"]["unitPrice"] = "Τιμή";
	$fieldToolTipsorderitems["Greek"]["unitPrice"] = "";
	$placeHoldersorderitems["Greek"]["unitPrice"] = "";
	$fieldLabelsorderitems["Greek"]["totalPrice"] = "Σύνολο";
	$fieldToolTipsorderitems["Greek"]["totalPrice"] = "";
	$placeHoldersorderitems["Greek"]["totalPrice"] = "";
	$fieldLabelsorderitems["Greek"]["itemCode"] = "Κωδ. Είδους";
	$fieldToolTipsorderitems["Greek"]["itemCode"] = "";
	$placeHoldersorderitems["Greek"]["itemCode"] = "";
	$fieldLabelsorderitems["Greek"]["itemDescription"] = "Περιγραφή Είδους";
	$fieldToolTipsorderitems["Greek"]["itemDescription"] = "";
	$placeHoldersorderitems["Greek"]["itemDescription"] = "";
	$fieldLabelsorderitems["Greek"]["discountPcnt"] = "% Εκπτ.";
	$fieldToolTipsorderitems["Greek"]["discountPcnt"] = "";
	$placeHoldersorderitems["Greek"]["discountPcnt"] = "";
	$fieldLabelsorderitems["Greek"]["shippingCost"] = "Έξοδα";
	$fieldToolTipsorderitems["Greek"]["shippingCost"] = "";
	$placeHoldersorderitems["Greek"]["shippingCost"] = "";
	if (count($fieldToolTipsorderitems["Greek"]))
		$tdataorderitems[".isUseToolTips"] = true;
}


	$tdataorderitems[".NCSearch"] = true;



$tdataorderitems[".shortTableName"] = "orderitems";
$tdataorderitems[".nSecOptions"] = 0;

$tdataorderitems[".mainTableOwnerID"] = "";
$tdataorderitems[".entityType"] = 0;
$tdataorderitems[".connId"] = "CallCenter_at_10_41_2_31";


$tdataorderitems[".strOriginalTableName"] = "dbo.orderItems";

	



$tdataorderitems[".showAddInPopup"] = false;

$tdataorderitems[".showEditInPopup"] = false;

$tdataorderitems[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataorderitems[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataorderitems[".listAjax"] = false;
//	temporary
$tdataorderitems[".listAjax"] = false;

	$tdataorderitems[".audit"] = true;

	$tdataorderitems[".locking"] = false;


$pages = $tdataorderitems[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorderitems[".edit"] = true;
	$tdataorderitems[".afterEditAction"] = 0;
	$tdataorderitems[".closePopupAfterEdit"] = 1;
	$tdataorderitems[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataorderitems[".add"] = true;
$tdataorderitems[".afterAddAction"] = 0;
$tdataorderitems[".closePopupAfterAdd"] = 1;
$tdataorderitems[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataorderitems[".list"] = true;
}



$tdataorderitems[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataorderitems[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorderitems[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorderitems[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorderitems[".printFriendly"] = true;
}



$tdataorderitems[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorderitems[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorderitems[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorderitems[".isUseAjaxSuggest"] = false;

$tdataorderitems[".rowHighlite"] = true;



																																																																																																																																																																																																																	
		
																																																																																																																																																																

$tdataorderitems[".ajaxCodeSnippetAdded"] = false;

$tdataorderitems[".buttonsAdded"] = true;

$tdataorderitems[".addPageEvents"] = true;

// use timepicker for search panel
$tdataorderitems[".isUseTimeForSearch"] = false;


$tdataorderitems[".badgeColor"] = "00c2c5";


$tdataorderitems[".allSearchFields"] = array();
$tdataorderitems[".filterFields"] = array();
$tdataorderitems[".requiredSearchFields"] = array();

$tdataorderitems[".googleLikeFields"] = array();
$tdataorderitems[".googleLikeFields"][] = "id";
$tdataorderitems[".googleLikeFields"][] = "callid";
$tdataorderitems[".googleLikeFields"][] = "itemid";
$tdataorderitems[".googleLikeFields"][] = "qty";
$tdataorderitems[".googleLikeFields"][] = "unitPrice";
$tdataorderitems[".googleLikeFields"][] = "totalPrice";
$tdataorderitems[".googleLikeFields"][] = "itemCode";
$tdataorderitems[".googleLikeFields"][] = "itemDescription";
$tdataorderitems[".googleLikeFields"][] = "discountPcnt";
$tdataorderitems[".googleLikeFields"][] = "shippingCost";



$tdataorderitems[".tableType"] = "list";

$tdataorderitems[".printerPageOrientation"] = 0;
$tdataorderitems[".nPrinterPageScale"] = 100;

$tdataorderitems[".nPrinterSplitRecords"] = 40;

$tdataorderitems[".geocodingEnabled"] = false;






$tdataorderitems[".searchIsRequiredForFilters"] = true;

$tdataorderitems[".noRecordsFirstPage"] = true;



$tdataorderitems[".pageSize"] = 20;

$tdataorderitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorderitems[".strOrderBy"] = $tstrOrderBy;

$tdataorderitems[".orderindexes"] = array();


$tdataorderitems[".sqlHead"] = "SELECT id,  	callid,  	itemid,  	qty,  	unitPrice,  	totalPrice,  	itemCode,  	itemDescription,  	discountPcnt,  	shippingCost";
$tdataorderitems[".sqlFrom"] = "FROM dbo.orderItems";
$tdataorderitems[".sqlWhereExpr"] = "";
$tdataorderitems[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataorderitems[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorderitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorderitems[".arrGroupsPerPage"] = $arrGPP;

$tdataorderitems[".highlightSearchResults"] = true;

$tableKeysorderitems = array();
$tableKeysorderitems[] = "id";
$tdataorderitems[".Keys"] = $tableKeysorderitems;


$tdataorderitems[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","id");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataorderitems["id"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "callid";

	
	
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


	$tdataorderitems["callid"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "callid";
//	itemid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "itemid";
	$fdata["GoodName"] = "itemid";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","itemid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "itemid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemid";

	
	
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
	$edata["LookupTable"] = "dbo.itemSearch";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"qty", 'lookupF'=>"defaultQty");
	$edata["autoCompleteFields"][] = array('masterF'=>"unitPrice", 'lookupF'=>"unitPrice");
	$edata["autoCompleteFields"][] = array('masterF'=>"totalPrice", 'lookupF'=>"tempLineTotal");
	$edata["autoCompleteFields"][] = array('masterF'=>"discountPcnt", 'lookupF'=>"lineDiscount");
	$edata["autoCompleteFields"][] = array('masterF'=>"shippingCost", 'lookupF'=>"lineShippingCost");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "item";

				$edata["LookupWhere"] = "itemIsActive = 1";


	
	$edata["LookupOrderBy"] = "code";

	
	
	
	

	
	
	
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


	$tdataorderitems["itemid"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "itemid";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","qty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "qty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "blur" );
	$vdata["fieldViewEvents"] = $eventsData;

		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdataorderitems["qty"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "qty";
//	unitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unitPrice";
	$fdata["GoodName"] = "unitPrice";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","unitPrice");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "unitPrice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unitPrice";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "blur" );
	$vdata["fieldViewEvents"] = $eventsData;

		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdataorderitems["unitPrice"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "unitPrice";
//	totalPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "totalPrice";
	$fdata["GoodName"] = "totalPrice";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","totalPrice");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "totalPrice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalPrice";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "change" );
	$vdata["fieldViewEvents"] = $eventsData;

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


	$tdataorderitems["totalPrice"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "totalPrice";
//	itemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "itemCode";
	$fdata["GoodName"] = "itemCode";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","itemCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "itemCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemCode";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataorderitems["itemCode"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "itemCode";
//	itemDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "itemDescription";
	$fdata["GoodName"] = "itemDescription";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","itemDescription");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "itemDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemDescription";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdataorderitems["itemDescription"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "itemDescription";
//	discountPcnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "discountPcnt";
	$fdata["GoodName"] = "discountPcnt";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","discountPcnt");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "discountPcnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discountPcnt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "change" );
	$vdata["fieldViewEvents"] = $eventsData;

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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataorderitems["discountPcnt"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "discountPcnt";
//	shippingCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "shippingCost";
	$fdata["GoodName"] = "shippingCost";
	$fdata["ownerTable"] = "dbo.orderItems";
	$fdata["Label"] = GetFieldLabel("dbo_orderItems","shippingCost");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "shippingCost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shippingCost";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "change" );
	$vdata["fieldViewEvents"] = $eventsData;

		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "updateOrderTotals", "type" => "blur" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdataorderitems["shippingCost"] = $fdata;
		$tdataorderitems[".searchableFields"][] = "shippingCost";


$tables_data["dbo.orderItems"]=&$tdataorderitems;
$field_labels["dbo_orderItems"] = &$fieldLabelsorderitems;
$fieldToolTips["dbo_orderItems"] = &$fieldToolTipsorderitems;
$placeHolders["dbo_orderItems"] = &$placeHoldersorderitems;
$page_titles["dbo_orderItems"] = &$pageTitlesorderitems;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.orderItems"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.orderItems"] = array();



	
				$strOriginalDetailsTable="dbo.Items";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Items";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "items";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.orderItems"][0] = $masterParams;
				$masterTablesData["dbo.orderItems"][0]["masterKeys"] = array();
	$masterTablesData["dbo.orderItems"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.orderItems"][0]["detailKeys"] = array();
	$masterTablesData["dbo.orderItems"][0]["detailKeys"][]="itemid";
		
	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Calls";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "calls";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.orderItems"][1] = $masterParams;
				$masterTablesData["dbo.orderItems"][1]["masterKeys"] = array();
	$masterTablesData["dbo.orderItems"][1]["masterKeys"][]="id";
				$masterTablesData["dbo.orderItems"][1]["detailKeys"] = array();
	$masterTablesData["dbo.orderItems"][1]["detailKeys"][]="callid";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_orderitems()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	callid,  	itemid,  	qty,  	unitPrice,  	totalPrice,  	itemCode,  	itemDescription,  	discountPcnt,  	shippingCost";
$proto0["m_strFrom"] = "FROM dbo.orderItems";
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
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.orderItems";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto8["m_sql"] = "callid";
$proto8["m_srcTableName"] = "dbo.orderItems";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "itemid",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto10["m_sql"] = "itemid";
$proto10["m_srcTableName"] = "dbo.orderItems";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto12["m_sql"] = "qty";
$proto12["m_srcTableName"] = "dbo.orderItems";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "unitPrice",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto14["m_sql"] = "unitPrice";
$proto14["m_srcTableName"] = "dbo.orderItems";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "totalPrice",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto16["m_sql"] = "totalPrice";
$proto16["m_srcTableName"] = "dbo.orderItems";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "itemCode",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto18["m_sql"] = "itemCode";
$proto18["m_srcTableName"] = "dbo.orderItems";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "itemDescription",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto20["m_sql"] = "itemDescription";
$proto20["m_srcTableName"] = "dbo.orderItems";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "discountPcnt",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto22["m_sql"] = "discountPcnt";
$proto22["m_srcTableName"] = "dbo.orderItems";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "shippingCost",
	"m_strTable" => "dbo.orderItems",
	"m_srcTableName" => "dbo.orderItems"
));

$proto24["m_sql"] = "shippingCost";
$proto24["m_srcTableName"] = "dbo.orderItems";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.orderItems";
$proto27["m_srcTableName"] = "dbo.orderItems";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "callid";
$proto27["m_columns"][] = "itemid";
$proto27["m_columns"][] = "qty";
$proto27["m_columns"][] = "unitPrice";
$proto27["m_columns"][] = "totalPrice";
$proto27["m_columns"][] = "itemCode";
$proto27["m_columns"][] = "itemDescription";
$proto27["m_columns"][] = "discountPcnt";
$proto27["m_columns"][] = "shippingCost";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.orderItems";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.orderItems";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.orderItems";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_orderitems = createSqlQuery_orderitems();


	
		;

										

$tdataorderitems[".sqlquery"] = $queryData_orderitems;



include_once(getabspath("include/orderitems_events.php"));
$tableEvents["dbo.orderItems"] = new eventclass_orderitems;
$tdataorderitems[".hasEvents"] = true;

?>