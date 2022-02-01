<?php
$tdatadbo_callstatuslookup = array();
$tdatadbo_callstatuslookup[".searchableFields"] = array();
$tdatadbo_callstatuslookup[".ShortName"] = "dbo_callstatuslookup";
$tdatadbo_callstatuslookup[".OwnerID"] = "";
$tdatadbo_callstatuslookup[".OriginalTable"] = "dbo.callStatus";


$tdatadbo_callstatuslookup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadbo_callstatuslookup[".originalPagesByType"] = $tdatadbo_callstatuslookup[".pagesByType"];
$tdatadbo_callstatuslookup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadbo_callstatuslookup[".originalPages"] = $tdatadbo_callstatuslookup[".pages"];
$tdatadbo_callstatuslookup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatadbo_callstatuslookup[".originalDefaultPages"] = $tdatadbo_callstatuslookup[".defaultPages"];

//	field labels
$fieldLabelsdbo_callstatuslookup = array();
$fieldToolTipsdbo_callstatuslookup = array();
$pageTitlesdbo_callstatuslookup = array();
$placeHoldersdbo_callstatuslookup = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_callstatuslookup["Greek"] = array();
	$fieldToolTipsdbo_callstatuslookup["Greek"] = array();
	$placeHoldersdbo_callstatuslookup["Greek"] = array();
	$pageTitlesdbo_callstatuslookup["Greek"] = array();
	$fieldLabelsdbo_callstatuslookup["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["id"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["id"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["status"] = "Status";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["status"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["status"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["isDenial"] = "Is Denial";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["isDenial"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["isDenial"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["displayOrder"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["displayOrder"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["dialerStatus"] = "Dialer Status";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["dialerStatus"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["dialerStatus"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["callClassificationId"] = "Call Classification Id";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["callClassificationId"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["callClassificationId"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["callSubClassificationId"] = "Call Sub Classification Id";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["callSubClassificationId"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["callSubClassificationId"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["classification"] = "Classification";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["classification"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["classification"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["subClassification"] = "Sub Classification";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["subClassification"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["subClassification"] = "";
	$fieldLabelsdbo_callstatuslookup["Greek"]["lookupDisplay"] = "Lookup Display";
	$fieldToolTipsdbo_callstatuslookup["Greek"]["lookupDisplay"] = "";
	$placeHoldersdbo_callstatuslookup["Greek"]["lookupDisplay"] = "";
	if (count($fieldToolTipsdbo_callstatuslookup["Greek"]))
		$tdatadbo_callstatuslookup[".isUseToolTips"] = true;
}


	$tdatadbo_callstatuslookup[".NCSearch"] = true;



$tdatadbo_callstatuslookup[".shortTableName"] = "dbo_callstatuslookup";
$tdatadbo_callstatuslookup[".nSecOptions"] = 0;

$tdatadbo_callstatuslookup[".mainTableOwnerID"] = "";
$tdatadbo_callstatuslookup[".entityType"] = 1;
$tdatadbo_callstatuslookup[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_callstatuslookup[".strOriginalTableName"] = "dbo.callStatus";

	



$tdatadbo_callstatuslookup[".showAddInPopup"] = false;

$tdatadbo_callstatuslookup[".showEditInPopup"] = false;

$tdatadbo_callstatuslookup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_callstatuslookup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_callstatuslookup[".listAjax"] = false;
//	temporary
$tdatadbo_callstatuslookup[".listAjax"] = false;

	$tdatadbo_callstatuslookup[".audit"] = true;

	$tdatadbo_callstatuslookup[".locking"] = false;


$pages = $tdatadbo_callstatuslookup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_callstatuslookup[".edit"] = true;
	$tdatadbo_callstatuslookup[".afterEditAction"] = 0;
	$tdatadbo_callstatuslookup[".closePopupAfterEdit"] = 1;
	$tdatadbo_callstatuslookup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_callstatuslookup[".add"] = true;
$tdatadbo_callstatuslookup[".afterAddAction"] = 0;
$tdatadbo_callstatuslookup[".closePopupAfterAdd"] = 1;
$tdatadbo_callstatuslookup[".afterAddActionDetTable"] = "dbo.Calls";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_callstatuslookup[".list"] = true;
}



$tdatadbo_callstatuslookup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_callstatuslookup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_callstatuslookup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_callstatuslookup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_callstatuslookup[".printFriendly"] = true;
}



$tdatadbo_callstatuslookup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_callstatuslookup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_callstatuslookup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_callstatuslookup[".isUseAjaxSuggest"] = false;

$tdatadbo_callstatuslookup[".rowHighlite"] = true;



																																																																																																																											

$tdatadbo_callstatuslookup[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_callstatuslookup[".buttonsAdded"] = false;

$tdatadbo_callstatuslookup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_callstatuslookup[".isUseTimeForSearch"] = false;


$tdatadbo_callstatuslookup[".badgeColor"] = "2F4F4F";


$tdatadbo_callstatuslookup[".allSearchFields"] = array();
$tdatadbo_callstatuslookup[".filterFields"] = array();
$tdatadbo_callstatuslookup[".requiredSearchFields"] = array();

$tdatadbo_callstatuslookup[".googleLikeFields"] = array();
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "id";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "status";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "isDenial";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "displayOrder";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "dialerStatus";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "callClassificationId";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "callSubClassificationId";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "classification";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "subClassification";
$tdatadbo_callstatuslookup[".googleLikeFields"][] = "lookupDisplay";



$tdatadbo_callstatuslookup[".tableType"] = "list";

$tdatadbo_callstatuslookup[".printerPageOrientation"] = 0;
$tdatadbo_callstatuslookup[".nPrinterPageScale"] = 100;

$tdatadbo_callstatuslookup[".nPrinterSplitRecords"] = 40;

$tdatadbo_callstatuslookup[".geocodingEnabled"] = false;






$tdatadbo_callstatuslookup[".searchIsRequiredForFilters"] = true;

$tdatadbo_callstatuslookup[".noRecordsFirstPage"] = true;



$tdatadbo_callstatuslookup[".pageSize"] = 20;

$tdatadbo_callstatuslookup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_callstatuslookup[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_callstatuslookup[".orderindexes"] = array();


$tdatadbo_callstatuslookup[".sqlHead"] = "SELECT dbo.callStatus.id,  dbo.callStatus.status,  dbo.callStatus.isDenial,  dbo.callStatus.displayOrder,  dbo.callStatus.dialerStatus,  dbo.callStatus.callClassificationId,  dbo.callStatus.callSubClassificationId,  dbo.callClassifications.classification,  dbo.callSubClassifications.subClassification,  convert(varchar,callstatus.id)+'/'+  callClassifications.classification+'/'+  callSubClassifications.subClassification+'/'+  status AS lookupDisplay";
$tdatadbo_callstatuslookup[".sqlFrom"] = "FROM dbo.callStatus  INNER JOIN dbo.callClassifications ON dbo.callStatus.callClassificationId = dbo.callClassifications.id  INNER JOIN dbo.callSubClassifications ON dbo.callStatus.callSubClassificationId = dbo.callSubClassifications.ID";
$tdatadbo_callstatuslookup[".sqlWhereExpr"] = "";
$tdatadbo_callstatuslookup[".sqlTail"] = "";

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
$tdatadbo_callstatuslookup[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_callstatuslookup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_callstatuslookup[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_callstatuslookup[".highlightSearchResults"] = true;

$tableKeysdbo_callstatuslookup = array();
$tableKeysdbo_callstatuslookup[] = "id";
$tdatadbo_callstatuslookup[".Keys"] = $tableKeysdbo_callstatuslookup;


$tdatadbo_callstatuslookup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.id";

	
	
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


	$tdatadbo_callstatuslookup["id"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.status";

	
	
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


	$tdatadbo_callstatuslookup["status"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "status";
//	isDenial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "isDenial";
	$fdata["GoodName"] = "isDenial";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","isDenial");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "isDenial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.isDenial";

	
	
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


	$tdatadbo_callstatuslookup["isDenial"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "isDenial";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","displayOrder");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "displayOrder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.displayOrder";

	
	
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


	$tdatadbo_callstatuslookup["displayOrder"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "displayOrder";
//	dialerStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dialerStatus";
	$fdata["GoodName"] = "dialerStatus";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","dialerStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.dialerStatus";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatadbo_callstatuslookup["dialerStatus"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "dialerStatus";
//	callClassificationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "callClassificationId";
	$fdata["GoodName"] = "callClassificationId";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","callClassificationId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callClassificationId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.callClassificationId";

	
	
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
	$edata["DependentLookups"][] = "callSubClassificationId";

	
	
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


	$tdatadbo_callstatuslookup["callClassificationId"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "callClassificationId";
//	callSubClassificationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "callSubClassificationId";
	$fdata["GoodName"] = "callSubClassificationId";
	$fdata["ownerTable"] = "dbo.callStatus";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","callSubClassificationId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callSubClassificationId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callStatus.callSubClassificationId";

	
	
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
	$edata["categoryFields"][] = array( "main" => "callClassificationId", "lookup" => "classificationId" );

	
	

	
	
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


	$tdatadbo_callstatuslookup["callSubClassificationId"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "callSubClassificationId";
//	classification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "classification";
	$fdata["GoodName"] = "classification";
	$fdata["ownerTable"] = "dbo.callClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","classification");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "classification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callClassifications.classification";

	
	
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


	$tdatadbo_callstatuslookup["classification"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "classification";
//	subClassification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "subClassification";
	$fdata["GoodName"] = "subClassification";
	$fdata["ownerTable"] = "dbo.callSubClassifications";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","subClassification");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "subClassification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.callSubClassifications.subClassification";

	
	
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


	$tdatadbo_callstatuslookup["subClassification"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "subClassification";
//	lookupDisplay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lookupDisplay";
	$fdata["GoodName"] = "lookupDisplay";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_callStatusLookup","lookupDisplay");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "lookupDisplay";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "convert(varchar,callstatus.id)+'/'+  callClassifications.classification+'/'+  callSubClassifications.subClassification+'/'+  status";

	
	
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


	$tdatadbo_callstatuslookup["lookupDisplay"] = $fdata;
		$tdatadbo_callstatuslookup[".searchableFields"][] = "lookupDisplay";


$tables_data["dbo.callStatusLookup"]=&$tdatadbo_callstatuslookup;
$field_labels["dbo_callStatusLookup"] = &$fieldLabelsdbo_callstatuslookup;
$fieldToolTips["dbo_callStatusLookup"] = &$fieldToolTipsdbo_callstatuslookup;
$placeHolders["dbo_callStatusLookup"] = &$placeHoldersdbo_callstatuslookup;
$page_titles["dbo_callStatusLookup"] = &$pageTitlesdbo_callstatuslookup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.callStatusLookup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.callStatusLookup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_callstatuslookup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.callStatus.id,  dbo.callStatus.status,  dbo.callStatus.isDenial,  dbo.callStatus.displayOrder,  dbo.callStatus.dialerStatus,  dbo.callStatus.callClassificationId,  dbo.callStatus.callSubClassificationId,  dbo.callClassifications.classification,  dbo.callSubClassifications.subClassification,  convert(varchar,callstatus.id)+'/'+  callClassifications.classification+'/'+  callSubClassifications.subClassification+'/'+  status AS lookupDisplay";
$proto0["m_strFrom"] = "FROM dbo.callStatus  INNER JOIN dbo.callClassifications ON dbo.callStatus.callClassificationId = dbo.callClassifications.id  INNER JOIN dbo.callSubClassifications ON dbo.callStatus.callSubClassificationId = dbo.callSubClassifications.ID";
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
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto6["m_sql"] = "dbo.callStatus.id";
$proto6["m_srcTableName"] = "dbo.callStatusLookup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto8["m_sql"] = "dbo.callStatus.status";
$proto8["m_srcTableName"] = "dbo.callStatusLookup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "isDenial",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto10["m_sql"] = "dbo.callStatus.isDenial";
$proto10["m_srcTableName"] = "dbo.callStatusLookup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto12["m_sql"] = "dbo.callStatus.displayOrder";
$proto12["m_srcTableName"] = "dbo.callStatusLookup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerStatus",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto14["m_sql"] = "dbo.callStatus.dialerStatus";
$proto14["m_srcTableName"] = "dbo.callStatusLookup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "callClassificationId",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto16["m_sql"] = "dbo.callStatus.callClassificationId";
$proto16["m_srcTableName"] = "dbo.callStatusLookup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "callSubClassificationId",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto18["m_sql"] = "dbo.callStatus.callSubClassificationId";
$proto18["m_srcTableName"] = "dbo.callStatusLookup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "classification",
	"m_strTable" => "dbo.callClassifications",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto20["m_sql"] = "dbo.callClassifications.classification";
$proto20["m_srcTableName"] = "dbo.callStatusLookup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "subClassification",
	"m_strTable" => "dbo.callSubClassifications",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto22["m_sql"] = "dbo.callSubClassifications.subClassification";
$proto22["m_srcTableName"] = "dbo.callStatusLookup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "convert(varchar,callstatus.id)+'/'+  callClassifications.classification+'/'+  callSubClassifications.subClassification+'/'+  status"
));

$proto24["m_sql"] = "convert(varchar,callstatus.id)+'/'+  callClassifications.classification+'/'+  callSubClassifications.subClassification+'/'+  status";
$proto24["m_srcTableName"] = "dbo.callStatusLookup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "lookupDisplay";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.callStatus";
$proto27["m_srcTableName"] = "dbo.callStatusLookup";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "isDenial";
$proto27["m_columns"][] = "displayOrder";
$proto27["m_columns"][] = "dialerStatus";
$proto27["m_columns"][] = "callClassificationId";
$proto27["m_columns"][] = "callSubClassificationId";
$proto27["m_columns"][] = "isPositive";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.callStatus";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.callStatusLookup";
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
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.callClassifications";
$proto31["m_srcTableName"] = "dbo.callStatusLookup";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "classification";
$proto31["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN dbo.callClassifications ON dbo.callStatus.callClassificationId = dbo.callClassifications.id";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dbo.callStatusLookup";
$proto32=array();
$proto32["m_sql"] = "dbo.callStatus.callClassificationId = dbo.callClassifications.id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callClassificationId",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= dbo.callClassifications.id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.callSubClassifications";
$proto35["m_srcTableName"] = "dbo.callStatusLookup";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ID";
$proto35["m_columns"][] = "classificationId";
$proto35["m_columns"][] = "subClassification";
$proto35["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN dbo.callSubClassifications ON dbo.callStatus.callSubClassificationId = dbo.callSubClassifications.ID";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "dbo.callStatusLookup";
$proto36=array();
$proto36["m_sql"] = "dbo.callStatus.callSubClassificationId = dbo.callSubClassifications.ID";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callSubClassificationId",
	"m_strTable" => "dbo.callStatus",
	"m_srcTableName" => "dbo.callStatusLookup"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= dbo.callSubClassifications.ID";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.callStatusLookup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_callstatuslookup = createSqlQuery_dbo_callstatuslookup();


	
		;

										

$tdatadbo_callstatuslookup[".sqlquery"] = $queryData_dbo_callstatuslookup;



$tableEvents["dbo.callStatusLookup"] = new eventsBase;
$tdatadbo_callstatuslookup[".hasEvents"] = false;

?>