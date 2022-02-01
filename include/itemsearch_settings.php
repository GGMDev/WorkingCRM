<?php
$tdataitemsearch = array();
$tdataitemsearch[".searchableFields"] = array();
$tdataitemsearch[".ShortName"] = "itemsearch";
$tdataitemsearch[".OwnerID"] = "";
$tdataitemsearch[".OriginalTable"] = "dbo.itemSearch";


$tdataitemsearch[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataitemsearch[".originalPagesByType"] = $tdataitemsearch[".pagesByType"];
$tdataitemsearch[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataitemsearch[".originalPages"] = $tdataitemsearch[".pages"];
$tdataitemsearch[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataitemsearch[".originalDefaultPages"] = $tdataitemsearch[".defaultPages"];

//	field labels
$fieldLabelsitemsearch = array();
$fieldToolTipsitemsearch = array();
$pageTitlesitemsearch = array();
$placeHoldersitemsearch = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsitemsearch["Greek"] = array();
	$fieldToolTipsitemsearch["Greek"] = array();
	$placeHoldersitemsearch["Greek"] = array();
	$pageTitlesitemsearch["Greek"] = array();
	$fieldLabelsitemsearch["Greek"]["id"] = "Id";
	$fieldToolTipsitemsearch["Greek"]["id"] = "";
	$placeHoldersitemsearch["Greek"]["id"] = "";
	$fieldLabelsitemsearch["Greek"]["code"] = "Code";
	$fieldToolTipsitemsearch["Greek"]["code"] = "";
	$placeHoldersitemsearch["Greek"]["code"] = "";
	$fieldLabelsitemsearch["Greek"]["description"] = "Description";
	$fieldToolTipsitemsearch["Greek"]["description"] = "";
	$placeHoldersitemsearch["Greek"]["description"] = "";
	$fieldLabelsitemsearch["Greek"]["item"] = "Item";
	$fieldToolTipsitemsearch["Greek"]["item"] = "";
	$placeHoldersitemsearch["Greek"]["item"] = "";
	$fieldLabelsitemsearch["Greek"]["unitPrice"] = "Unit Price";
	$fieldToolTipsitemsearch["Greek"]["unitPrice"] = "";
	$placeHoldersitemsearch["Greek"]["unitPrice"] = "";
	$fieldLabelsitemsearch["Greek"]["lineDiscount"] = "Line Discount";
	$fieldToolTipsitemsearch["Greek"]["lineDiscount"] = "";
	$placeHoldersitemsearch["Greek"]["lineDiscount"] = "";
	$fieldLabelsitemsearch["Greek"]["lineShippingCost"] = "Line Shipping Cost";
	$fieldToolTipsitemsearch["Greek"]["lineShippingCost"] = "";
	$placeHoldersitemsearch["Greek"]["lineShippingCost"] = "";
	$fieldLabelsitemsearch["Greek"]["tempLineTotal"] = "Temp Line Total";
	$fieldToolTipsitemsearch["Greek"]["tempLineTotal"] = "";
	$placeHoldersitemsearch["Greek"]["tempLineTotal"] = "";
	$fieldLabelsitemsearch["Greek"]["defaultQty"] = "Default Qty";
	$fieldToolTipsitemsearch["Greek"]["defaultQty"] = "";
	$placeHoldersitemsearch["Greek"]["defaultQty"] = "";
	$fieldLabelsitemsearch["Greek"]["itemIsActive"] = "Item Is Active";
	$fieldToolTipsitemsearch["Greek"]["itemIsActive"] = "";
	$placeHoldersitemsearch["Greek"]["itemIsActive"] = "";
	if (count($fieldToolTipsitemsearch["Greek"]))
		$tdataitemsearch[".isUseToolTips"] = true;
}


	$tdataitemsearch[".NCSearch"] = true;



$tdataitemsearch[".shortTableName"] = "itemsearch";
$tdataitemsearch[".nSecOptions"] = 0;

$tdataitemsearch[".mainTableOwnerID"] = "";
$tdataitemsearch[".entityType"] = 0;
$tdataitemsearch[".connId"] = "CallCenter_at_10_41_2_31";


$tdataitemsearch[".strOriginalTableName"] = "dbo.itemSearch";

	



$tdataitemsearch[".showAddInPopup"] = false;

$tdataitemsearch[".showEditInPopup"] = false;

$tdataitemsearch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitemsearch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitemsearch[".listAjax"] = false;
//	temporary
$tdataitemsearch[".listAjax"] = false;

	$tdataitemsearch[".audit"] = true;

	$tdataitemsearch[".locking"] = false;


$pages = $tdataitemsearch[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitemsearch[".edit"] = true;
	$tdataitemsearch[".afterEditAction"] = 1;
	$tdataitemsearch[".closePopupAfterEdit"] = 1;
	$tdataitemsearch[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitemsearch[".add"] = true;
$tdataitemsearch[".afterAddAction"] = 1;
$tdataitemsearch[".closePopupAfterAdd"] = 1;
$tdataitemsearch[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitemsearch[".list"] = true;
}



$tdataitemsearch[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitemsearch[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitemsearch[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitemsearch[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitemsearch[".printFriendly"] = true;
}



$tdataitemsearch[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitemsearch[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitemsearch[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitemsearch[".isUseAjaxSuggest"] = false;

$tdataitemsearch[".rowHighlite"] = true;



																																																																																																																											

$tdataitemsearch[".ajaxCodeSnippetAdded"] = false;

$tdataitemsearch[".buttonsAdded"] = false;

$tdataitemsearch[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitemsearch[".isUseTimeForSearch"] = false;


$tdataitemsearch[".badgeColor"] = "3CB371";


$tdataitemsearch[".allSearchFields"] = array();
$tdataitemsearch[".filterFields"] = array();
$tdataitemsearch[".requiredSearchFields"] = array();

$tdataitemsearch[".googleLikeFields"] = array();
$tdataitemsearch[".googleLikeFields"][] = "id";
$tdataitemsearch[".googleLikeFields"][] = "code";
$tdataitemsearch[".googleLikeFields"][] = "description";
$tdataitemsearch[".googleLikeFields"][] = "item";
$tdataitemsearch[".googleLikeFields"][] = "unitPrice";
$tdataitemsearch[".googleLikeFields"][] = "lineDiscount";
$tdataitemsearch[".googleLikeFields"][] = "lineShippingCost";
$tdataitemsearch[".googleLikeFields"][] = "defaultQty";
$tdataitemsearch[".googleLikeFields"][] = "tempLineTotal";
$tdataitemsearch[".googleLikeFields"][] = "itemIsActive";



$tdataitemsearch[".tableType"] = "list";

$tdataitemsearch[".printerPageOrientation"] = 0;
$tdataitemsearch[".nPrinterPageScale"] = 100;

$tdataitemsearch[".nPrinterSplitRecords"] = 40;

$tdataitemsearch[".geocodingEnabled"] = false;






$tdataitemsearch[".searchIsRequiredForFilters"] = true;

$tdataitemsearch[".noRecordsFirstPage"] = true;



$tdataitemsearch[".pageSize"] = 20;

$tdataitemsearch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitemsearch[".strOrderBy"] = $tstrOrderBy;

$tdataitemsearch[".orderindexes"] = array();


$tdataitemsearch[".sqlHead"] = "SELECT id,  	code,  	description,  	item,  	unitPrice,  	lineDiscount,  	lineShippingCost,  	defaultQty,  	tempLineTotal,  	itemIsActive";
$tdataitemsearch[".sqlFrom"] = "FROM dbo.itemSearch";
$tdataitemsearch[".sqlWhereExpr"] = "";
$tdataitemsearch[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitemsearch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitemsearch[".arrGroupsPerPage"] = $arrGPP;

$tdataitemsearch[".highlightSearchResults"] = true;

$tableKeysitemsearch = array();
$tdataitemsearch[".Keys"] = $tableKeysitemsearch;


$tdataitemsearch[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","id");
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


	$tdataitemsearch["id"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","code");
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


	$tdataitemsearch["code"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "code";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","description");
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataitemsearch["description"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "description";
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","item");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "item";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item";

	
	
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
			$edata["EditParams"].= " maxlength=223";

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


	$tdataitemsearch["item"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "item";
//	unitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unitPrice";
	$fdata["GoodName"] = "unitPrice";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","unitPrice");
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


	$tdataitemsearch["unitPrice"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "unitPrice";
//	lineDiscount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lineDiscount";
	$fdata["GoodName"] = "lineDiscount";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","lineDiscount");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "lineDiscount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineDiscount";

	
	
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


	$tdataitemsearch["lineDiscount"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "lineDiscount";
//	lineShippingCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lineShippingCost";
	$fdata["GoodName"] = "lineShippingCost";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","lineShippingCost");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "lineShippingCost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineShippingCost";

	
	
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


	$tdataitemsearch["lineShippingCost"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "lineShippingCost";
//	defaultQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "defaultQty";
	$fdata["GoodName"] = "defaultQty";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","defaultQty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "defaultQty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "defaultQty";

	
	
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


	$tdataitemsearch["defaultQty"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "defaultQty";
//	tempLineTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tempLineTotal";
	$fdata["GoodName"] = "tempLineTotal";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","tempLineTotal");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "tempLineTotal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tempLineTotal";

	
	
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


	$tdataitemsearch["tempLineTotal"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "tempLineTotal";
//	itemIsActive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "itemIsActive";
	$fdata["GoodName"] = "itemIsActive";
	$fdata["ownerTable"] = "dbo.itemSearch";
	$fdata["Label"] = GetFieldLabel("dbo_itemSearch","itemIsActive");
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


	$tdataitemsearch["itemIsActive"] = $fdata;
		$tdataitemsearch[".searchableFields"][] = "itemIsActive";


$tables_data["dbo.itemSearch"]=&$tdataitemsearch;
$field_labels["dbo_itemSearch"] = &$fieldLabelsitemsearch;
$fieldToolTips["dbo_itemSearch"] = &$fieldToolTipsitemsearch;
$placeHolders["dbo_itemSearch"] = &$placeHoldersitemsearch;
$page_titles["dbo_itemSearch"] = &$pageTitlesitemsearch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.itemSearch"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.itemSearch"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itemsearch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	description,  	item,  	unitPrice,  	lineDiscount,  	lineShippingCost,  	defaultQty,  	tempLineTotal,  	itemIsActive";
$proto0["m_strFrom"] = "FROM dbo.itemSearch";
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
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.itemSearch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "dbo.itemSearch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.itemSearch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto12["m_sql"] = "item";
$proto12["m_srcTableName"] = "dbo.itemSearch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "unitPrice",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto14["m_sql"] = "unitPrice";
$proto14["m_srcTableName"] = "dbo.itemSearch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "lineDiscount",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto16["m_sql"] = "lineDiscount";
$proto16["m_srcTableName"] = "dbo.itemSearch";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "lineShippingCost",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto18["m_sql"] = "lineShippingCost";
$proto18["m_srcTableName"] = "dbo.itemSearch";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "defaultQty",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto20["m_sql"] = "defaultQty";
$proto20["m_srcTableName"] = "dbo.itemSearch";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tempLineTotal",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto22["m_sql"] = "tempLineTotal";
$proto22["m_srcTableName"] = "dbo.itemSearch";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "itemIsActive",
	"m_strTable" => "dbo.itemSearch",
	"m_srcTableName" => "dbo.itemSearch"
));

$proto24["m_sql"] = "itemIsActive";
$proto24["m_srcTableName"] = "dbo.itemSearch";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.itemSearch";
$proto27["m_srcTableName"] = "dbo.itemSearch";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "code";
$proto27["m_columns"][] = "description";
$proto27["m_columns"][] = "item";
$proto27["m_columns"][] = "unitPrice";
$proto27["m_columns"][] = "lineDiscount";
$proto27["m_columns"][] = "lineShippingCost";
$proto27["m_columns"][] = "defaultQty";
$proto27["m_columns"][] = "tempLineTotal";
$proto27["m_columns"][] = "itemIsActive";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.itemSearch";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.itemSearch";
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
$proto0["m_srcTableName"]="dbo.itemSearch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itemsearch = createSqlQuery_itemsearch();


	
		;

										

$tdataitemsearch[".sqlquery"] = $queryData_itemsearch;



$tableEvents["dbo.itemSearch"] = new eventsBase;
$tdataitemsearch[".hasEvents"] = false;

?>