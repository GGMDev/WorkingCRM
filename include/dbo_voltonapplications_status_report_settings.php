<?php
$tdatadbo_voltonapplications_status_report = array();
$tdatadbo_voltonapplications_status_report[".searchableFields"] = array();
$tdatadbo_voltonapplications_status_report[".ShortName"] = "dbo_voltonapplications_status_report";
$tdatadbo_voltonapplications_status_report[".OwnerID"] = "";
$tdatadbo_voltonapplications_status_report[".OriginalTable"] = "dbo.voltonApplications";


$tdatadbo_voltonapplications_status_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatadbo_voltonapplications_status_report[".originalPagesByType"] = $tdatadbo_voltonapplications_status_report[".pagesByType"];
$tdatadbo_voltonapplications_status_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatadbo_voltonapplications_status_report[".originalPages"] = $tdatadbo_voltonapplications_status_report[".pages"];
$tdatadbo_voltonapplications_status_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatadbo_voltonapplications_status_report[".originalDefaultPages"] = $tdatadbo_voltonapplications_status_report[".defaultPages"];

//	field labels
$fieldLabelsdbo_voltonapplications_status_report = array();
$fieldToolTipsdbo_voltonapplications_status_report = array();
$pageTitlesdbo_voltonapplications_status_report = array();
$placeHoldersdbo_voltonapplications_status_report = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_voltonapplications_status_report["Greek"] = array();
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"] = array();
	$placeHoldersdbo_voltonapplications_status_report["Greek"] = array();
	$pageTitlesdbo_voltonapplications_status_report["Greek"] = array();
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["id"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["id"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["applicationStatusId"] = "Κατάσταση (Backoffice)";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["applicationStatusId"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["applicationStatusId"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["callphone"] = "Αριθμός Κλήσης";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["callphone"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["callphone"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["agent"] = "Agent";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["agent"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["agent"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["dialerCampaign"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["dialerCampaign"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["dialerList"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["dialerList"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["callDate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["callDate"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["callDate"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["agentApplicationStatus"] = "Κατάσταση (agent)";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["agentApplicationStatus"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["agentApplicationStatus"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["applicationPhaseStatusId"] = "Φάση (Backoffice)";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["applicationPhaseStatusId"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["applicationPhaseStatusId"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["lastStatusDate"] = "Ημ/νία Status";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["lastStatusDate"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["lastStatusDate"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["applicationAge"] = "Ηλικία Αίτησης";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["applicationAge"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["applicationAge"] = "";
	$fieldLabelsdbo_voltonapplications_status_report["Greek"]["forCount"] = "Πλήθος";
	$fieldToolTipsdbo_voltonapplications_status_report["Greek"]["forCount"] = "";
	$placeHoldersdbo_voltonapplications_status_report["Greek"]["forCount"] = "";
	if (count($fieldToolTipsdbo_voltonapplications_status_report["Greek"]))
		$tdatadbo_voltonapplications_status_report[".isUseToolTips"] = true;
}


	$tdatadbo_voltonapplications_status_report[".NCSearch"] = true;



$tdatadbo_voltonapplications_status_report[".shortTableName"] = "dbo_voltonapplications_status_report";
$tdatadbo_voltonapplications_status_report[".nSecOptions"] = 0;

$tdatadbo_voltonapplications_status_report[".mainTableOwnerID"] = "";
$tdatadbo_voltonapplications_status_report[".entityType"] = 2;
$tdatadbo_voltonapplications_status_report[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_voltonapplications_status_report[".strOriginalTableName"] = "dbo.voltonApplications";

	



$tdatadbo_voltonapplications_status_report[".showAddInPopup"] = false;

$tdatadbo_voltonapplications_status_report[".showEditInPopup"] = false;

$tdatadbo_voltonapplications_status_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_voltonapplications_status_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_voltonapplications_status_report[".listAjax"] = false;
//	temporary
$tdatadbo_voltonapplications_status_report[".listAjax"] = false;

	$tdatadbo_voltonapplications_status_report[".audit"] = false;

	$tdatadbo_voltonapplications_status_report[".locking"] = false;


$pages = $tdatadbo_voltonapplications_status_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_voltonapplications_status_report[".edit"] = true;
	$tdatadbo_voltonapplications_status_report[".afterEditAction"] = 1;
	$tdatadbo_voltonapplications_status_report[".closePopupAfterEdit"] = 1;
	$tdatadbo_voltonapplications_status_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_voltonapplications_status_report[".add"] = true;
$tdatadbo_voltonapplications_status_report[".afterAddAction"] = 1;
$tdatadbo_voltonapplications_status_report[".closePopupAfterAdd"] = 1;
$tdatadbo_voltonapplications_status_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_voltonapplications_status_report[".list"] = true;
}



$tdatadbo_voltonapplications_status_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_voltonapplications_status_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_voltonapplications_status_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_voltonapplications_status_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_voltonapplications_status_report[".printFriendly"] = true;
}



$tdatadbo_voltonapplications_status_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_voltonapplications_status_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_voltonapplications_status_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_voltonapplications_status_report[".isUseAjaxSuggest"] = true;




																																																																	
					
																																																							

$tdatadbo_voltonapplications_status_report[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_voltonapplications_status_report[".buttonsAdded"] = true;

$tdatadbo_voltonapplications_status_report[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadbo_voltonapplications_status_report[".isUseTimeForSearch"] = false;


$tdatadbo_voltonapplications_status_report[".badgeColor"] = "008B8B";


$tdatadbo_voltonapplications_status_report[".allSearchFields"] = array();
$tdatadbo_voltonapplications_status_report[".filterFields"] = array();
$tdatadbo_voltonapplications_status_report[".requiredSearchFields"] = array();




$tdatadbo_voltonapplications_status_report[".tableType"] = "report";

$tdatadbo_voltonapplications_status_report[".printerPageOrientation"] = 0;
$tdatadbo_voltonapplications_status_report[".nPrinterPageScale"] = 100;

$tdatadbo_voltonapplications_status_report[".nPrinterSplitRecords"] = 40;

$tdatadbo_voltonapplications_status_report[".geocodingEnabled"] = false;

//report settings
$tdatadbo_voltonapplications_status_report[".crossTabReport"] = true;

$tdatadbo_voltonapplications_status_report[".reportGroupFields"] = true;
$tdatadbo_voltonapplications_status_report[".pageSize"] = 5;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "agent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "agent";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "agentApplicationStatus";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "agentApplicationStatus";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "applicationStatusId";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "applicationStatusId";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "applicationPhaseStatusId";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "applicationPhaseStatusId";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerCampaign";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerCampaign";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerList";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerList";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 6;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callDate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callDate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 7;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "lastStatusDate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "lastStatusDate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 8;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
$tdatadbo_voltonapplications_status_report[".reportGroupFieldsData"] = $reportGroupFields;
$tdatadbo_voltonapplications_status_report[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdatadbo_voltonapplications_status_report[".reportHorizontalSummary"] = true;

$tdatadbo_voltonapplications_status_report[".isExistTotalFields"] = true;

$tdatadbo_voltonapplications_status_report[".reportVerticalSummary"] = true;



$tdatadbo_voltonapplications_status_report[".repShowDet"] = true;

$tdatadbo_voltonapplications_status_report[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_voltonapplications_status_report[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_voltonapplications_status_report[".orderindexes"] = array();


$tdatadbo_voltonapplications_status_report[".sqlHead"] = "select va.id as id,  c.dialerphone as callphone,  c.dialerAgent as agent,  c.dialerCampaign,  c.dialerList,  format(c.callstart,'dd/MM/yyyy') as callDate,  isnull(va.applicationAgentStatus,1) as agentApplicationStatus,  isnull(va.applicationStatusId,1) as applicationStatusId,  isnull(va.applicationStatusId,1) as applicationPhaseStatusId,  format(isnull(va.applicationLastStatusDate, c.callstart),'dd/MM/yyyy') as lastStatusDate,  datediff(day, c.callstart, isnull(va.applicationLastStatusDate, c.callstart)) as applicationAge,  1 as forCount";
$tdatadbo_voltonapplications_status_report[".sqlFrom"] = "from voltonApplications as va  left join calls as c on c.id=va.callid";
$tdatadbo_voltonapplications_status_report[".sqlWhereExpr"] = "";
$tdatadbo_voltonapplications_status_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_voltonapplications_status_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_voltonapplications_status_report[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_voltonapplications_status_report[".highlightSearchResults"] = true;

$tableKeysdbo_voltonapplications_status_report = array();
$tableKeysdbo_voltonapplications_status_report[] = "id";
$tdatadbo_voltonapplications_status_report[".Keys"] = $tableKeysdbo_voltonapplications_status_report;


$tdatadbo_voltonapplications_status_report[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["id"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "id";
//	callphone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callphone";
	$fdata["GoodName"] = "callphone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","callphone");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["callphone"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "callphone";
//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","agent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["agent"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "agent";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","dialerCampaign");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["dialerCampaign"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","dialerList");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["dialerList"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "dialerList";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","callDate");
	$fdata["FieldType"] = 202;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["callDate"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "callDate";
//	agentApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "agentApplicationStatus";
	$fdata["GoodName"] = "agentApplicationStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","agentApplicationStatus");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "agentApplicationStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(va.applicationAgentStatus,1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
		
	$edata["LinkField"] = "voltonApplicationStatusId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "agentApplicationStatus";

	

	
	$edata["LookupOrderBy"] = "voltonApplicationStatusId";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["agentApplicationStatus"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "agentApplicationStatus";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","applicationStatusId");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(va.applicationStatusId,1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "applicationStatusId_event", "type" => "click" );
	$vdata["fieldViewEvents"] = $eventsData;

		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "applicationAgentStatus_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.applicationStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["applicationStatusId"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "applicationStatusId";
//	applicationPhaseStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicationPhaseStatusId";
	$fdata["GoodName"] = "applicationPhaseStatusId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","applicationPhaseStatusId");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "applicationPhaseStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(va.applicationStatusId,1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["applicationPhaseStatusId"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "applicationPhaseStatusId";
//	lastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lastStatusDate";
	$fdata["GoodName"] = "lastStatusDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","lastStatusDate");
	$fdata["FieldType"] = 202;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "lastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(isnull(va.applicationLastStatusDate, c.callstart),'dd/MM/yyyy')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["lastStatusDate"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "lastStatusDate";
//	applicationAge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicationAge";
	$fdata["GoodName"] = "applicationAge";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","applicationAge");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "applicationAge";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datediff(day, c.callstart, isnull(va.applicationLastStatusDate, c.callstart))";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["applicationAge"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "applicationAge";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications_Status_Report","forCount");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadbo_voltonapplications_status_report["forCount"] = $fdata;
		$tdatadbo_voltonapplications_status_report[".searchableFields"][] = "forCount";


$tables_data["dbo.voltonApplications Status Report"]=&$tdatadbo_voltonapplications_status_report;
$field_labels["dbo_voltonApplications_Status_Report"] = &$fieldLabelsdbo_voltonapplications_status_report;
$fieldToolTips["dbo_voltonApplications_Status_Report"] = &$fieldToolTipsdbo_voltonapplications_status_report;
$placeHolders["dbo_voltonApplications_Status_Report"] = &$placeHoldersdbo_voltonapplications_status_report;
$page_titles["dbo_voltonApplications_Status_Report"] = &$pageTitlesdbo_voltonapplications_status_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["dbo.voltonApplications Status Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_voltonapplications_status_report()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "va.id as id,  c.dialerphone as callphone,  c.dialerAgent as agent,  c.dialerCampaign,  c.dialerList,  format(c.callstart,'dd/MM/yyyy') as callDate,  isnull(va.applicationAgentStatus,1) as agentApplicationStatus,  isnull(va.applicationStatusId,1) as applicationStatusId,  isnull(va.applicationStatusId,1) as applicationPhaseStatusId,  format(isnull(va.applicationLastStatusDate, c.callstart),'dd/MM/yyyy') as lastStatusDate,  datediff(day, c.callstart, isnull(va.applicationLastStatusDate, c.callstart)) as applicationAge,  1 as forCount";
$proto0["m_strFrom"] = "from voltonApplications as va  left join calls as c on c.id=va.callid";
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
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonApplications Status Report"
));

$proto6["m_sql"] = "va.id";
$proto6["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "id";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonApplications Status Report"
));

$proto8["m_sql"] = "c.dialerphone";
$proto8["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "callphone";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonApplications Status Report"
));

$proto10["m_sql"] = "c.dialerAgent";
$proto10["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "agent";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonApplications Status Report"
));

$proto12["m_sql"] = "c.dialerCampaign";
$proto12["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonApplications Status Report"
));

$proto14["m_sql"] = "c.dialerList";
$proto14["m_srcTableName"] = "dbo.voltonApplications Status Report";
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
$proto16["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "va.applicationAgentStatus"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "isnull(va.applicationAgentStatus,1)";
$proto20["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "agentApplicationStatus";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "va.applicationStatusId"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "isnull(va.applicationStatusId,1)";
$proto24["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "applicationStatusId";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "va.applicationStatusId"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "isnull(va.applicationStatusId,1)";
$proto28["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "applicationPhaseStatusId";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(va.applicationLastStatusDate, c.callstart)"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "format(isnull(va.applicationLastStatusDate, c.callstart),'dd/MM/yyyy')";
$proto32["m_srcTableName"] = "dbo.voltonApplications Status Report";
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
	"m_sql" => "isnull(va.applicationLastStatusDate, c.callstart)"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "datediff";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "datediff(day, c.callstart, isnull(va.applicationLastStatusDate, c.callstart))";
$proto36["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "applicationAge";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto41["m_sql"] = "1";
$proto41["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "dbo.voltonApplications";
$proto44["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id";
$proto44["m_columns"][] = "callid";
$proto44["m_columns"][] = "applicationStatusId";
$proto44["m_columns"][] = "applicationType";
$proto44["m_columns"][] = "applicantName";
$proto44["m_columns"][] = "applicantIdNumber";
$proto44["m_columns"][] = "applicantAddress";
$proto44["m_columns"][] = "applicantPostalCode";
$proto44["m_columns"][] = "applicantArea";
$proto44["m_columns"][] = "applicantCity";
$proto44["m_columns"][] = "applicantTaxRegistrationNumber";
$proto44["m_columns"][] = "applicantTaxOffice";
$proto44["m_columns"][] = "applicantEmail";
$proto44["m_columns"][] = "applicantProfession";
$proto44["m_columns"][] = "applicantKod";
$proto44["m_columns"][] = "applicantGemi";
$proto44["m_columns"][] = "applicantPhone";
$proto44["m_columns"][] = "applicantWorkPhone";
$proto44["m_columns"][] = "applicantMobile";
$proto44["m_columns"][] = "contactName";
$proto44["m_columns"][] = "contactPhone";
$proto44["m_columns"][] = "contactMobile";
$proto44["m_columns"][] = "contactEmail";
$proto44["m_columns"][] = "legalName";
$proto44["m_columns"][] = "legalIdNumber";
$proto44["m_columns"][] = "mailAddress";
$proto44["m_columns"][] = "mailPostalCode";
$proto44["m_columns"][] = "mailArea";
$proto44["m_columns"][] = "mailCity";
$proto44["m_columns"][] = "powerAddress";
$proto44["m_columns"][] = "powerOwnershipType";
$proto44["m_columns"][] = "powerPostalCode";
$proto44["m_columns"][] = "powerArea";
$proto44["m_columns"][] = "powerCity";
$proto44["m_columns"][] = "powerAgreedKw";
$proto44["m_columns"][] = "powerSupplyNumber";
$proto44["m_columns"][] = "powerMeterNumber";
$proto44["m_columns"][] = "powerCurrentSupplier";
$proto44["m_columns"][] = "powerCurrentDayMeter";
$proto44["m_columns"][] = "powerCurrentNightMeter";
$proto44["m_columns"][] = "powerActivationStatus";
$proto44["m_columns"][] = "voltonPlan";
$proto44["m_columns"][] = "voltonContractDuration";
$proto44["m_columns"][] = "voltonWarrantyAmount";
$proto44["m_columns"][] = "voltonWarrantyOnFirstBill";
$proto44["m_columns"][] = "voltonOther";
$proto44["m_columns"][] = "voltonComments";
$proto44["m_columns"][] = "voltonAutoPayment";
$proto44["m_columns"][] = "document1";
$proto44["m_columns"][] = "document2";
$proto44["m_columns"][] = "document3";
$proto44["m_columns"][] = "document4";
$proto44["m_columns"][] = "document5";
$proto44["m_columns"][] = "document6";
$proto44["m_columns"][] = "document7";
$proto44["m_columns"][] = "document8";
$proto44["m_columns"][] = "document9";
$proto44["m_columns"][] = "document10";
$proto44["m_columns"][] = "document11";
$proto44["m_columns"][] = "document12";
$proto44["m_columns"][] = "document13";
$proto44["m_columns"][] = "document14";
$proto44["m_columns"][] = "document15";
$proto44["m_columns"][] = "ngAddress";
$proto44["m_columns"][] = "ngPostalCode";
$proto44["m_columns"][] = "ngArea";
$proto44["m_columns"][] = "ngCity";
$proto44["m_columns"][] = "ngPressure";
$proto44["m_columns"][] = "ngHourlyCapacity";
$proto44["m_columns"][] = "ngHkasp";
$proto44["m_columns"][] = "ngMeterNumber";
$proto44["m_columns"][] = "ngMeterType";
$proto44["m_columns"][] = "ngCurrentMeterValue";
$proto44["m_columns"][] = "ngConnectionExists";
$proto44["m_columns"][] = "ngSupplyIsNew";
$proto44["m_columns"][] = "ngSupplyReactivation";
$proto44["m_columns"][] = "applicationAgentStatus";
$proto44["m_columns"][] = "applicationLastStatusDate";
$proto44["m_columns"][] = "applicationContactMethod";
$proto44["m_columns"][] = "applicationCourier";
$proto44["m_columns"][] = "applicationCourierDate";
$proto44["m_columns"][] = "applicationCourrierTimeFrom";
$proto44["m_columns"][] = "applicationCourierTimeTo";
$proto44["m_columns"][] = "applicationCourrierComments";
$proto44["m_columns"][] = "dialerAgent";
$proto44["m_columns"][] = "additionalServices";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "voltonApplications as va";
$proto43["m_alias"] = "va";
$proto43["m_srcTableName"] = "dbo.voltonApplications Status Report";
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
$proto48["m_srcTableName"] = "dbo.voltonApplications Status Report";
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
$proto47["m_sql"] = "left join calls as c on c.id=va.callid";
$proto47["m_alias"] = "c";
$proto47["m_srcTableName"] = "dbo.voltonApplications Status Report";
$proto49=array();
$proto49["m_sql"] = "c.id=va.callid";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonApplications Status Report"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "=va.callid";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.voltonApplications Status Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_voltonapplications_status_report = createSqlQuery_dbo_voltonapplications_status_report();


	
		;

												

$tdatadbo_voltonapplications_status_report[".sqlquery"] = $queryData_dbo_voltonapplications_status_report;



$tableEvents["dbo.voltonApplications Status Report"] = new eventsBase;
$tdatadbo_voltonapplications_status_report[".hasEvents"] = false;

?>