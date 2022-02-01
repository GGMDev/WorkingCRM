<?php
$tdatadbo_novaapplicationsstatusview = array();
$tdatadbo_novaapplicationsstatusview[".searchableFields"] = array();
$tdatadbo_novaapplicationsstatusview[".ShortName"] = "dbo_novaapplicationsstatusview";
$tdatadbo_novaapplicationsstatusview[".OwnerID"] = "";
$tdatadbo_novaapplicationsstatusview[".OriginalTable"] = "dbo.novaApplications";


$tdatadbo_novaapplicationsstatusview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_novaapplicationsstatusview[".originalPagesByType"] = $tdatadbo_novaapplicationsstatusview[".pagesByType"];
$tdatadbo_novaapplicationsstatusview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_novaapplicationsstatusview[".originalPages"] = $tdatadbo_novaapplicationsstatusview[".pages"];
$tdatadbo_novaapplicationsstatusview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_novaapplicationsstatusview[".originalDefaultPages"] = $tdatadbo_novaapplicationsstatusview[".defaultPages"];

//	field labels
$fieldLabelsdbo_novaapplicationsstatusview = array();
$fieldToolTipsdbo_novaapplicationsstatusview = array();
$pageTitlesdbo_novaapplicationsstatusview = array();
$placeHoldersdbo_novaapplicationsstatusview = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"] = array();
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"] = array();
	$placeHoldersdbo_novaapplicationsstatusview["Greek"] = array();
	$pageTitlesdbo_novaapplicationsstatusview["Greek"] = array();
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["applicationStatusId"] = "Κατάσταση (Backoffice)";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["applicationStatusId"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["applicationStatusId"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["id"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["id"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["callphone"] = "Τηλέφωνο Κλήσης";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["callphone"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["callphone"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["agent"] = "Agent";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["agent"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["agent"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["dialerCampaign"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["dialerCampaign"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["dialerList"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["dialerList"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["callDate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["callDate"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["callDate"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["agentApplicationStatus"] = "Κατάσταση (Agent)";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["agentApplicationStatus"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["applicationPhaseStatusId"] = "Φάση Αίτησης";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["applicationPhaseStatusId"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["applicationPhaseStatusId"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["lastStatusDate"] = "Ημερομηνία Status";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["lastStatusDate"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["lastStatusDate"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["applicationAge"] = "Ηλικία Αίτησης";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["applicationAge"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["applicationAge"] = "";
	$fieldLabelsdbo_novaapplicationsstatusview["Greek"]["forCount"] = "Πλήθος";
	$fieldToolTipsdbo_novaapplicationsstatusview["Greek"]["forCount"] = "";
	$placeHoldersdbo_novaapplicationsstatusview["Greek"]["forCount"] = "";
	$pageTitlesdbo_novaapplicationsstatusview["Greek"]["search"] = "Κριτήρια Αναφοράς (Αιτήσεις Nova)";
	if (count($fieldToolTipsdbo_novaapplicationsstatusview["Greek"]))
		$tdatadbo_novaapplicationsstatusview[".isUseToolTips"] = true;
}


	$tdatadbo_novaapplicationsstatusview[".NCSearch"] = true;



$tdatadbo_novaapplicationsstatusview[".shortTableName"] = "dbo_novaapplicationsstatusview";
$tdatadbo_novaapplicationsstatusview[".nSecOptions"] = 0;

$tdatadbo_novaapplicationsstatusview[".mainTableOwnerID"] = "";
$tdatadbo_novaapplicationsstatusview[".entityType"] = 1;
$tdatadbo_novaapplicationsstatusview[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_novaapplicationsstatusview[".strOriginalTableName"] = "dbo.novaApplications";

	



$tdatadbo_novaapplicationsstatusview[".showAddInPopup"] = false;

$tdatadbo_novaapplicationsstatusview[".showEditInPopup"] = false;

$tdatadbo_novaapplicationsstatusview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_novaapplicationsstatusview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatadbo_novaapplicationsstatusview[".listAjax"] = true;
//	temporary
$tdatadbo_novaapplicationsstatusview[".listAjax"] = false;

	$tdatadbo_novaapplicationsstatusview[".audit"] = true;

	$tdatadbo_novaapplicationsstatusview[".locking"] = false;


$pages = $tdatadbo_novaapplicationsstatusview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_novaapplicationsstatusview[".edit"] = true;
	$tdatadbo_novaapplicationsstatusview[".afterEditAction"] = 1;
	$tdatadbo_novaapplicationsstatusview[".closePopupAfterEdit"] = 1;
	$tdatadbo_novaapplicationsstatusview[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_novaapplicationsstatusview[".add"] = true;
$tdatadbo_novaapplicationsstatusview[".afterAddAction"] = 0;
$tdatadbo_novaapplicationsstatusview[".closePopupAfterAdd"] = 1;
$tdatadbo_novaapplicationsstatusview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_novaapplicationsstatusview[".list"] = true;
}



$tdatadbo_novaapplicationsstatusview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_novaapplicationsstatusview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_novaapplicationsstatusview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_novaapplicationsstatusview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_novaapplicationsstatusview[".printFriendly"] = true;
}



$tdatadbo_novaapplicationsstatusview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_novaapplicationsstatusview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_novaapplicationsstatusview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_novaapplicationsstatusview[".isUseAjaxSuggest"] = false;

$tdatadbo_novaapplicationsstatusview[".rowHighlite"] = true;



																																																																																																																											

$tdatadbo_novaapplicationsstatusview[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_novaapplicationsstatusview[".buttonsAdded"] = false;

$tdatadbo_novaapplicationsstatusview[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadbo_novaapplicationsstatusview[".isUseTimeForSearch"] = false;


$tdatadbo_novaapplicationsstatusview[".badgeColor"] = "4169E1";


$tdatadbo_novaapplicationsstatusview[".allSearchFields"] = array();
$tdatadbo_novaapplicationsstatusview[".filterFields"] = array();
$tdatadbo_novaapplicationsstatusview[".requiredSearchFields"] = array();




$tdatadbo_novaapplicationsstatusview[".tableType"] = "list";

$tdatadbo_novaapplicationsstatusview[".printerPageOrientation"] = 0;
$tdatadbo_novaapplicationsstatusview[".nPrinterPageScale"] = 100;

$tdatadbo_novaapplicationsstatusview[".nPrinterSplitRecords"] = 40;

$tdatadbo_novaapplicationsstatusview[".geocodingEnabled"] = false;





$tdatadbo_novaapplicationsstatusview[".isResizeColumns"] = true;

$tdatadbo_novaapplicationsstatusview[".searchIsRequiredForFilters"] = true;

$tdatadbo_novaapplicationsstatusview[".noRecordsFirstPage"] = true;



$tdatadbo_novaapplicationsstatusview[".pageSize"] = 20;

$tdatadbo_novaapplicationsstatusview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_novaapplicationsstatusview[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_novaapplicationsstatusview[".orderindexes"] = array();


$tdatadbo_novaapplicationsstatusview[".sqlHead"] = "select na.id as id,  c.dialerphone as callphone,  c.dialerAgent as agent,  c.dialerCampaign,  c.dialerList,  format(c.callstart,'dd/MM/yyyy') as callDate,  isnull(na.applicationAgentStatus,1) as agentApplicationStatus,  isnull(na.applicationStatusId,1) as applicationStatusId,  isnull(na.applicationStatusId,1) as applicationPhaseStatusId,  format(isnull(na.applicationLastStatusDate, c.callstart),'dd/MM/yyyy') as lastStatusDate,  datediff(day, c.callstart, isnull(na.applicationLastStatusDate, c.callstart)) as applicationAge,  1 as forCount";
$tdatadbo_novaapplicationsstatusview[".sqlFrom"] = "from novaApplications as na  left join calls as c on c.id=na.callid";
$tdatadbo_novaapplicationsstatusview[".sqlWhereExpr"] = "";
$tdatadbo_novaapplicationsstatusview[".sqlTail"] = "";

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
$tdatadbo_novaapplicationsstatusview[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_novaapplicationsstatusview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_novaapplicationsstatusview[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_novaapplicationsstatusview[".highlightSearchResults"] = true;

$tableKeysdbo_novaapplicationsstatusview = array();
$tableKeysdbo_novaapplicationsstatusview[] = "id";
$tdatadbo_novaapplicationsstatusview[".Keys"] = $tableKeysdbo_novaapplicationsstatusview;


$tdatadbo_novaapplicationsstatusview[".hideMobileList"] = array();
		$tdatadbo_novaapplicationsstatusview[".hideMobileList"][1] = array();
$tdatadbo_novaapplicationsstatusview[".hideMobileList"][1]["forCount"] = true;
		$tdatadbo_novaapplicationsstatusview[".hideMobileList"][5] = array();
$tdatadbo_novaapplicationsstatusview[".hideMobileList"][5]["forCount"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.id";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatadbo_novaapplicationsstatusview["id"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "id";
//	callphone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callphone";
	$fdata["GoodName"] = "callphone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","callphone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.dialerphone";

	
	
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


	$tdatadbo_novaapplicationsstatusview["callphone"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "callphone";
//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","agent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.dialerAgent";

	
	
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


	$tdatadbo_novaapplicationsstatusview["agent"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "agent";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","dialerCampaign");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerCampaign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.dialerCampaign";

	
	
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


	$tdatadbo_novaapplicationsstatusview["dialerCampaign"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","dialerList");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerList";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.dialerList";

	
	
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


	$tdatadbo_novaapplicationsstatusview["dialerList"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "dialerList";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","callDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(c.callstart,'dd/MM/yyyy')";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

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


	$tdatadbo_novaapplicationsstatusview["callDate"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "callDate";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","agentApplicationStatus");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agentApplicationStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(na.applicationAgentStatus,1)";

	
	
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
	$edata["LookupTable"] = "dbo.agentApplicationStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "novaApplicationStatusId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "agentApplicationStatus";

	

	
	$edata["LookupOrderBy"] = "novaApplicationStatusId";

	
	
	
	

	
	
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


	$tdatadbo_novaapplicationsstatusview["agentApplicationStatus"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "agentApplicationStatus";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","applicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(na.applicationStatusId,1)";

	
	
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
	$edata["LookupTable"] = "dbo.applicationStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusDescription";

	

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatadbo_novaapplicationsstatusview["applicationStatusId"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "applicationStatusId";
//	applicationPhaseStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicationPhaseStatusId";
	$fdata["GoodName"] = "applicationPhaseStatusId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","applicationPhaseStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationPhaseStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(na.applicationStatusId,1)";

	
	
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
	$edata["LookupTable"] = "dbo.applicationStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statisticStatus";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
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


	$tdatadbo_novaapplicationsstatusview["applicationPhaseStatusId"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "applicationPhaseStatusId";
//	lastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lastStatusDate";
	$fdata["GoodName"] = "lastStatusDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","lastStatusDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(isnull(na.applicationLastStatusDate, c.callstart),'dd/MM/yyyy')";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

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


	$tdatadbo_novaapplicationsstatusview["lastStatusDate"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "lastStatusDate";
//	applicationAge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicationAge";
	$fdata["GoodName"] = "applicationAge";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","applicationAge");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationAge";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datediff(day, c.callstart, isnull(na.applicationLastStatusDate, c.callstart))";

	
	
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


	$tdatadbo_novaapplicationsstatusview["applicationAge"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "applicationAge";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsStatusView","forCount");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "forCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1";

	
	
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


	$tdatadbo_novaapplicationsstatusview["forCount"] = $fdata;
		$tdatadbo_novaapplicationsstatusview[".searchableFields"][] = "forCount";


$tables_data["dbo.novaApplicationsStatusView"]=&$tdatadbo_novaapplicationsstatusview;
$field_labels["dbo_novaApplicationsStatusView"] = &$fieldLabelsdbo_novaapplicationsstatusview;
$fieldToolTips["dbo_novaApplicationsStatusView"] = &$fieldToolTipsdbo_novaapplicationsstatusview;
$placeHolders["dbo_novaApplicationsStatusView"] = &$placeHoldersdbo_novaapplicationsstatusview;
$page_titles["dbo_novaApplicationsStatusView"] = &$pageTitlesdbo_novaapplicationsstatusview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.novaApplicationsStatusView"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.novaApplicationsStatusView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_novaapplicationsstatusview()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "na.id as id,  c.dialerphone as callphone,  c.dialerAgent as agent,  c.dialerCampaign,  c.dialerList,  format(c.callstart,'dd/MM/yyyy') as callDate,  isnull(na.applicationAgentStatus,1) as agentApplicationStatus,  isnull(na.applicationStatusId,1) as applicationStatusId,  isnull(na.applicationStatusId,1) as applicationPhaseStatusId,  format(isnull(na.applicationLastStatusDate, c.callstart),'dd/MM/yyyy') as lastStatusDate,  datediff(day, c.callstart, isnull(na.applicationLastStatusDate, c.callstart)) as applicationAge,  1 as forCount";
$proto0["m_strFrom"] = "from novaApplications as na  left join calls as c on c.id=na.callid";
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
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaApplicationsStatusView"
));

$proto6["m_sql"] = "na.id";
$proto6["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "id";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.novaApplicationsStatusView"
));

$proto8["m_sql"] = "c.dialerphone";
$proto8["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "callphone";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.novaApplicationsStatusView"
));

$proto10["m_sql"] = "c.dialerAgent";
$proto10["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "agent";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.novaApplicationsStatusView"
));

$proto12["m_sql"] = "c.dialerCampaign";
$proto12["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.novaApplicationsStatusView"
));

$proto14["m_sql"] = "c.dialerList";
$proto14["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.callstart"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "format(c.callstart,'dd/MM/yyyy')";
$proto16["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "na.applicationAgentStatus"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "isnull(na.applicationAgentStatus,1)";
$proto20["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "agentApplicationStatus";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "na.applicationStatusId"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "isnull(na.applicationStatusId,1)";
$proto24["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "applicationStatusId";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "na.applicationStatusId"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "isnull(na.applicationStatusId,1)";
$proto28["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "applicationPhaseStatusId";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(na.applicationLastStatusDate, c.callstart)"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "format(isnull(na.applicationLastStatusDate, c.callstart),'dd/MM/yyyy')";
$proto32["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "lastStatusDate";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.callstart"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(na.applicationLastStatusDate, c.callstart)"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "datediff";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "datediff(day, c.callstart, isnull(na.applicationLastStatusDate, c.callstart))";
$proto36["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "applicationAge";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto41["m_sql"] = "1";
$proto41["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "dbo.novaApplications";
$proto44["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id";
$proto44["m_columns"][] = "callid";
$proto44["m_columns"][] = "applicationStatusId";
$proto44["m_columns"][] = "applicationType";
$proto44["m_columns"][] = "applicantName";
$proto44["m_columns"][] = "applicantFirstName";
$proto44["m_columns"][] = "applicantBirthdate";
$proto44["m_columns"][] = "applicantProfession";
$proto44["m_columns"][] = "applicantIdNumber";
$proto44["m_columns"][] = "applicantAddress";
$proto44["m_columns"][] = "applicantPostalCode";
$proto44["m_columns"][] = "applicantArea";
$proto44["m_columns"][] = "applicantCity";
$proto44["m_columns"][] = "applicantTaxRegistrationNumber";
$proto44["m_columns"][] = "applicantTaxOffice";
$proto44["m_columns"][] = "applicantPhone";
$proto44["m_columns"][] = "applicantMobile";
$proto44["m_columns"][] = "applicantEmail";
$proto44["m_columns"][] = "standAloneProgram";
$proto44["m_columns"][] = "doublePlayProgram";
$proto44["m_columns"][] = "ProgramSpeed";
$proto44["m_columns"][] = "triplePlayProgram";
$proto44["m_columns"][] = "triplePlayProgramType";
$proto44["m_columns"][] = "additionalServiceInternet";
$proto44["m_columns"][] = "additionalServiceInternetSpeed";
$proto44["m_columns"][] = "additionalServiceInternationalCalls";
$proto44["m_columns"][] = "additionalServiceStaticIp";
$proto44["m_columns"][] = "additionalServiceStaticBlock8Ip";
$proto44["m_columns"][] = "additionalServiceSecondLine";
$proto44["m_columns"][] = "additionalServiceLandLine1000Minutes";
$proto44["m_columns"][] = "additionalServiceEquipment";
$proto44["m_columns"][] = "additionalServiceEquipmentInstallation";
$proto44["m_columns"][] = "portabilityIsNewLine";
$proto44["m_columns"][] = "portabilityOldNumber";
$proto44["m_columns"][] = "portabilityOldOwner";
$proto44["m_columns"][] = "portabilityActivationAddress";
$proto44["m_columns"][] = "portabilityActivationPostalCode";
$proto44["m_columns"][] = "portabilityActivationArea";
$proto44["m_columns"][] = "portabilityActivationCity";
$proto44["m_columns"][] = "portabilityPstnIsdn";
$proto44["m_columns"][] = "portabilityLine1PhoneNumber";
$proto44["m_columns"][] = "portabilityLine2PhoneNumber";
$proto44["m_columns"][] = "portabilityLine3PhoneNumber";
$proto44["m_columns"][] = "portabilityLine4PhoneNumber";
$proto44["m_columns"][] = "portabilityUsername1";
$proto44["m_columns"][] = "portabilityusername2";
$proto44["m_columns"][] = "documentIdPassport";
$proto44["m_columns"][] = "documentIdPassportPreviousOwner";
$proto44["m_columns"][] = "documentLastBill";
$proto44["m_columns"][] = "documentAddressValidation";
$proto44["m_columns"][] = "documentDeathCertificate";
$proto44["m_columns"][] = "documentAuthorization";
$proto44["m_columns"][] = "documentOther";
$proto44["m_columns"][] = "documentOtherType";
$proto44["m_columns"][] = "applicationAgentStatus";
$proto44["m_columns"][] = "applicationLastStatusDate";
$proto44["m_columns"][] = "applicationContactMethod";
$proto44["m_columns"][] = "applicationCourier";
$proto44["m_columns"][] = "applicationCourierDate";
$proto44["m_columns"][] = "applicationCourierTimeFrom";
$proto44["m_columns"][] = "applicationCourierTimeTo";
$proto44["m_columns"][] = "applicationCourierComments";
$proto44["m_columns"][] = "dialerAgent";
$proto44["m_columns"][] = "adittionalServiceMobileNoLimit";
$proto44["m_columns"][] = "additionalServiceEONMultiScreen";
$proto44["m_columns"][] = "additionalServiceNovaMultiroom";
$proto44["m_columns"][] = "additionalServiceAdultPack";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "novaApplications as na";
$proto43["m_alias"] = "na";
$proto43["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_LEFTJOIN";
			$proto48=array();
$proto48["m_strName"] = "dbo.Calls";
$proto48["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "id";
$proto48["m_columns"][] = "contactId";
$proto48["m_columns"][] = "callStart";
$proto48["m_columns"][] = "callHangup";
$proto48["m_columns"][] = "callEnd";
$proto48["m_columns"][] = "talkTime";
$proto48["m_columns"][] = "typingTime";
$proto48["m_columns"][] = "totalCallTime";
$proto48["m_columns"][] = "tvchannel";
$proto48["m_columns"][] = "broadcast";
$proto48["m_columns"][] = "seller";
$proto48["m_columns"][] = "callStatusId";
$proto48["m_columns"][] = "callDenialReasonID";
$proto48["m_columns"][] = "callClassificationID";
$proto48["m_columns"][] = "callSubClassificationID";
$proto48["m_columns"][] = "remarks";
$proto48["m_columns"][] = "redialDate";
$proto48["m_columns"][] = "redialComments";
$proto48["m_columns"][] = "redialIsPrivate";
$proto48["m_columns"][] = "redialDone";
$proto48["m_columns"][] = "contactMethod";
$proto48["m_columns"][] = "courier";
$proto48["m_columns"][] = "deliveryComments";
$proto48["m_columns"][] = "courierDeliveryDate";
$proto48["m_columns"][] = "courierTimeFrom";
$proto48["m_columns"][] = "courierTimeTo";
$proto48["m_columns"][] = "dialerPhone";
$proto48["m_columns"][] = "dialerCallEpoch";
$proto48["m_columns"][] = "dialerCampaign";
$proto48["m_columns"][] = "dialerList";
$proto48["m_columns"][] = "dialerLeadID";
$proto48["m_columns"][] = "dialerAgent";
$proto48["m_columns"][] = "dialerRecording";
$proto48["m_columns"][] = "productFamilyId";
$proto48["m_columns"][] = "orderShipCompany";
$proto48["m_columns"][] = "orderInvoiceRequired";
$proto48["m_columns"][] = "callComments";
$proto48["m_columns"][] = "internalCommunication";
$proto48["m_columns"][] = "callGdprAcceptance";
$proto48["m_columns"][] = "callGdprRecordingAcceptance";
$proto48["m_columns"][] = "orderPaymentMethod";
$proto48["m_columns"][] = "contactName";
$proto48["m_columns"][] = "contactZipCode";
$proto48["m_columns"][] = "contactCity";
$proto48["m_columns"][] = "ContactArea";
$proto48["m_columns"][] = "contactGender";
$proto48["m_columns"][] = "contactAge";
$proto48["m_columns"][] = "crmUser";
$proto48["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "left join calls as c on c.id=na.callid";
$proto47["m_alias"] = "c";
$proto47["m_srcTableName"] = "dbo.novaApplicationsStatusView";
$proto49=array();
$proto49["m_sql"] = "c.id=na.callid";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.novaApplicationsStatusView"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "=na.callid";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.novaApplicationsStatusView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_novaapplicationsstatusview = createSqlQuery_dbo_novaapplicationsstatusview();


	
		;

												

$tdatadbo_novaapplicationsstatusview[".sqlquery"] = $queryData_dbo_novaapplicationsstatusview;



include_once(getabspath("include/dbo_novaapplicationsstatusview_events.php"));
$tableEvents["dbo.novaApplicationsStatusView"] = new eventclass_dbo_novaapplicationsstatusview;
$tdatadbo_novaapplicationsstatusview[".hasEvents"] = true;

?>