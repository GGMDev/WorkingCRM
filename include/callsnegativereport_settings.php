<?php
$tdatacallsnegativereport = array();
$tdatacallsnegativereport[".searchableFields"] = array();
$tdatacallsnegativereport[".ShortName"] = "callsnegativereport";
$tdatacallsnegativereport[".OwnerID"] = "";
$tdatacallsnegativereport[".OriginalTable"] = "dbo.agentApplicationStatus";


$tdatacallsnegativereport[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacallsnegativereport[".originalPagesByType"] = $tdatacallsnegativereport[".pagesByType"];
$tdatacallsnegativereport[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacallsnegativereport[".originalPages"] = $tdatacallsnegativereport[".pages"];
$tdatacallsnegativereport[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacallsnegativereport[".originalDefaultPages"] = $tdatacallsnegativereport[".defaultPages"];

//	field labels
$fieldLabelscallsnegativereport = array();
$fieldToolTipscallsnegativereport = array();
$pageTitlescallsnegativereport = array();
$placeHolderscallsnegativereport = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallsnegativereport["Greek"] = array();
	$fieldToolTipscallsnegativereport["Greek"] = array();
	$placeHolderscallsnegativereport["Greek"] = array();
	$pageTitlescallsnegativereport["Greek"] = array();
	$fieldLabelscallsnegativereport["Greek"]["callDate"] = "Ημερομηνία";
	$fieldToolTipscallsnegativereport["Greek"]["callDate"] = "";
	$placeHolderscallsnegativereport["Greek"]["callDate"] = "";
	$fieldLabelscallsnegativereport["Greek"]["talkTime"] = "Διάρκεια Ομιλίας";
	$fieldToolTipscallsnegativereport["Greek"]["talkTime"] = "";
	$placeHolderscallsnegativereport["Greek"]["talkTime"] = "";
	$fieldLabelscallsnegativereport["Greek"]["typingTime"] = "Διάρκεια Καταχώρησης";
	$fieldToolTipscallsnegativereport["Greek"]["typingTime"] = "";
	$placeHolderscallsnegativereport["Greek"]["typingTime"] = "";
	$fieldLabelscallsnegativereport["Greek"]["totalCallTime"] = "Συνολική Διάρκεια";
	$fieldToolTipscallsnegativereport["Greek"]["totalCallTime"] = "";
	$placeHolderscallsnegativereport["Greek"]["totalCallTime"] = "";
	$fieldLabelscallsnegativereport["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipscallsnegativereport["Greek"]["dialerCampaign"] = "";
	$placeHolderscallsnegativereport["Greek"]["dialerCampaign"] = "";
	$fieldLabelscallsnegativereport["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipscallsnegativereport["Greek"]["dialerList"] = "";
	$placeHolderscallsnegativereport["Greek"]["dialerList"] = "";
	$fieldLabelscallsnegativereport["Greek"]["forCount"] = "# Κλήσεων";
	$fieldToolTipscallsnegativereport["Greek"]["forCount"] = "";
	$placeHolderscallsnegativereport["Greek"]["forCount"] = "";
	$fieldLabelscallsnegativereport["Greek"]["callResult"] = "Αποτέλεσμα";
	$fieldToolTipscallsnegativereport["Greek"]["callResult"] = "";
	$placeHolderscallsnegativereport["Greek"]["callResult"] = "";
	$fieldLabelscallsnegativereport["Greek"]["callTimeBreak"] = "Διάστημα Κλήσης";
	$fieldToolTipscallsnegativereport["Greek"]["callTimeBreak"] = "";
	$placeHolderscallsnegativereport["Greek"]["callTimeBreak"] = "";
	$fieldLabelscallsnegativereport["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipscallsnegativereport["Greek"]["dialerAgent"] = "";
	$placeHolderscallsnegativereport["Greek"]["dialerAgent"] = "";
	$pageTitlescallsnegativereport["Greek"]["search"] = "Αναφορά Αρνητικών Κλήσεων";
	if (count($fieldToolTipscallsnegativereport["Greek"]))
		$tdatacallsnegativereport[".isUseToolTips"] = true;
}


	$tdatacallsnegativereport[".NCSearch"] = true;



$tdatacallsnegativereport[".shortTableName"] = "callsnegativereport";
$tdatacallsnegativereport[".nSecOptions"] = 0;

$tdatacallsnegativereport[".mainTableOwnerID"] = "";
$tdatacallsnegativereport[".entityType"] = 2;
$tdatacallsnegativereport[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallsnegativereport[".strOriginalTableName"] = "dbo.agentApplicationStatus";

	



$tdatacallsnegativereport[".showAddInPopup"] = false;

$tdatacallsnegativereport[".showEditInPopup"] = false;

$tdatacallsnegativereport[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallsnegativereport[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallsnegativereport[".listAjax"] = false;
//	temporary
$tdatacallsnegativereport[".listAjax"] = false;

	$tdatacallsnegativereport[".audit"] = false;

	$tdatacallsnegativereport[".locking"] = false;


$pages = $tdatacallsnegativereport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallsnegativereport[".edit"] = true;
	$tdatacallsnegativereport[".afterEditAction"] = 1;
	$tdatacallsnegativereport[".closePopupAfterEdit"] = 1;
	$tdatacallsnegativereport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallsnegativereport[".add"] = true;
$tdatacallsnegativereport[".afterAddAction"] = 1;
$tdatacallsnegativereport[".closePopupAfterAdd"] = 1;
$tdatacallsnegativereport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallsnegativereport[".list"] = true;
}



$tdatacallsnegativereport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallsnegativereport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallsnegativereport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallsnegativereport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallsnegativereport[".printFriendly"] = true;
}



$tdatacallsnegativereport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallsnegativereport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallsnegativereport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallsnegativereport[".isUseAjaxSuggest"] = false;




																																																																																																																											

$tdatacallsnegativereport[".ajaxCodeSnippetAdded"] = false;

$tdatacallsnegativereport[".buttonsAdded"] = false;

$tdatacallsnegativereport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallsnegativereport[".isUseTimeForSearch"] = false;


$tdatacallsnegativereport[".badgeColor"] = "9ACD32";


$tdatacallsnegativereport[".allSearchFields"] = array();
$tdatacallsnegativereport[".filterFields"] = array();
$tdatacallsnegativereport[".requiredSearchFields"] = array();




$tdatacallsnegativereport[".tableType"] = "report";

$tdatacallsnegativereport[".printerPageOrientation"] = 0;
$tdatacallsnegativereport[".nPrinterPageScale"] = 100;

$tdatacallsnegativereport[".nPrinterSplitRecords"] = 40;

$tdatacallsnegativereport[".geocodingEnabled"] = false;

//report settings
$tdatacallsnegativereport[".printReportLayout"] = 3;

$tdatacallsnegativereport[".reportPrintPartitionType"] = 1;
$tdatacallsnegativereport[".reportPrintGroupsPerPage"] = 3;
$tdatacallsnegativereport[".lowGroup"] = 5;



$tdatacallsnegativereport[".reportGroupFields"] = true;
$tdatacallsnegativereport[".pageSize"] = 5;
$tdatacallsnegativereport[".showGroupSummaryCount"] = true;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "dialerAgent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerAgent";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callDate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callDate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerCampaign";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerCampaign";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerList";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerList";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callResult";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callResult";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
$tdatacallsnegativereport[".reportGroupFieldsData"] = $reportGroupFields;
$tdatacallsnegativereport[".reportGroupFieldsList"] = $reportGroupFieldsList;


$tdatacallsnegativereport[".isExistTotalFields"] = true;



$tdatacallsnegativereport[".reportGlobalSummary"] = true;

$tdatacallsnegativereport[".repShowDet"] = true;

$tdatacallsnegativereport[".reportLayout"] = 3;

//end of report settings





$tdatacallsnegativereport[".searchIsRequiredForFilters"] = true;

$tdatacallsnegativereport[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallsnegativereport[".strOrderBy"] = $tstrOrderBy;

$tdatacallsnegativereport[".orderindexes"] = array();


$tdatacallsnegativereport[".sqlHead"] = "select format(callStart, 'dd/MM/yyyy') AS callDate  ,case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end as callTimeBreak,  c.talkTime,  c.typingTime,  c.totalCallTime,  c.dialerCampaign,  c.dialerList,  isnull(dialerAgent, 'Άγνωστος') AS dialerAgent,  coalesce(dr.denialReason, cs.status) AS callResult,  1 AS forCount";
$tdatacallsnegativereport[".sqlFrom"] = "FROM dbo.Calls AS c  LEFT OUTER JOIN dbo.callClassifications AS cc ON c.callClassificationID = cc.id  LEFT OUTER JOIN dbo.callSubClassifications AS csc ON c.callSubClassificationID = csc.ID  LEFT OUTER JOIN dbo.callStatus AS cs ON c.callStatusId = cs.id  LEFT OUTER JOIN dbo.denialReason AS dr ON c.callDenialReasonID = dr.id";
$tdatacallsnegativereport[".sqlWhereExpr"] = "(isDenial =1)";
$tdatacallsnegativereport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallsnegativereport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallsnegativereport[".arrGroupsPerPage"] = $arrGPP;

$tdatacallsnegativereport[".highlightSearchResults"] = true;

$tableKeyscallsnegativereport = array();
$tdatacallsnegativereport[".Keys"] = $tableKeyscallsnegativereport;


$tdatacallsnegativereport[".hideMobileList"] = array();




//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","callDate");
	$fdata["FieldType"] = 202;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(callStart, 'dd/MM/yyyy')";

	
	
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


	$tdatacallsnegativereport["callDate"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "callDate";
//	callTimeBreak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callTimeBreak";
	$fdata["GoodName"] = "callTimeBreak";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","callTimeBreak");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callTimeBreak";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end";

	
	
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


	$tdatacallsnegativereport["callTimeBreak"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "callTimeBreak";
//	talkTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "talkTime";
	$fdata["GoodName"] = "talkTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","talkTime");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "talkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.talkTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdatacallsnegativereport["talkTime"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "talkTime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","typingTime");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "typingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.typingTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "talkTime";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsnegativereport["typingTime"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","totalCallTime");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "totalCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.totalCallTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "talkTime";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallsnegativereport["totalCallTime"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "totalCallTime";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","dialerCampaign");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata["LookupTable"] = "dbo.campaignsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerCampaign";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerCampaign";

	

	
	$edata["LookupOrderBy"] = "dialerCampaign";

	
	
	
	

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.campaignsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerCampaign";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerCampaign";

	

	
	$edata["LookupOrderBy"] = "dialerCampaign";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.campaignsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerCampaign";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerCampaign";

	

	
	$edata["LookupOrderBy"] = "dialerCampaign";

	
	
	
	

	
	
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


	$fdata["isSeparate"] = true;




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


	$tdatacallsnegativereport["dialerCampaign"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","dialerList");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata["LookupTable"] = "dbo.listsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerList";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerList";

	

	
	$edata["LookupOrderBy"] = "dialerList";

	
	
	
	

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.listsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerList";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerList";

	

	
	$edata["LookupOrderBy"] = "dialerList";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.listsLastThreeMonths";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dialerList";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "dialerList";

	

	
	$edata["LookupOrderBy"] = "dialerList";

	
	
	
	

	
	
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


	$fdata["isSeparate"] = true;




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


	$tdatacallsnegativereport["dialerList"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "dialerList";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","dialerAgent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(dialerAgent, 'Άγνωστος')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata["LookupTable"] = "dbo.CallCenter_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.CallCenter_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.CallCenter_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
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


	$fdata["isSeparate"] = true;




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


	$tdatacallsnegativereport["dialerAgent"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "dialerAgent";
//	callResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "callResult";
	$fdata["GoodName"] = "callResult";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","callResult");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callResult";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coalesce(dr.denialReason, cs.status)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata["LookupTable"] = "dbo.callStatus";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdatacallsnegativereport["callResult"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "callResult";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("callsNegativeReport","forCount");
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


	$tdatacallsnegativereport["forCount"] = $fdata;
		$tdatacallsnegativereport[".searchableFields"][] = "forCount";


$tables_data["callsNegativeReport"]=&$tdatacallsnegativereport;
$field_labels["callsNegativeReport"] = &$fieldLabelscallsnegativereport;
$fieldToolTips["callsNegativeReport"] = &$fieldToolTipscallsnegativereport;
$placeHolders["callsNegativeReport"] = &$placeHolderscallsnegativereport;
$page_titles["callsNegativeReport"] = &$pageTitlescallsnegativereport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["callsNegativeReport"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["callsNegativeReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callsnegativereport()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "format(callStart, 'dd/MM/yyyy') AS callDate  ,case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end as callTimeBreak,  c.talkTime,  c.typingTime,  c.totalCallTime,  c.dialerCampaign,  c.dialerList,  isnull(dialerAgent, 'Άγνωστος') AS dialerAgent,  coalesce(dr.denialReason, cs.status) AS callResult,  1 AS forCount";
$proto0["m_strFrom"] = "FROM dbo.Calls AS c  LEFT OUTER JOIN dbo.callClassifications AS cc ON c.callClassificationID = cc.id  LEFT OUTER JOIN dbo.callSubClassifications AS csc ON c.callSubClassificationID = csc.ID  LEFT OUTER JOIN dbo.callStatus AS cs ON c.callStatusId = cs.id  LEFT OUTER JOIN dbo.denialReason AS dr ON c.callDenialReasonID = dr.id";
$proto0["m_strWhere"] = "(isDenial =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "isDenial =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "isDenial"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callStart"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "format(callStart, 'dd/MM/yyyy')";
$proto6["m_srcTableName"] = "callsNegativeReport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end"
));

$proto10["m_sql"] = "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end";
$proto10["m_srcTableName"] = "callsNegativeReport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "callTimeBreak";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto12["m_sql"] = "c.talkTime";
$proto12["m_srcTableName"] = "callsNegativeReport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto14["m_sql"] = "c.typingTime";
$proto14["m_srcTableName"] = "callsNegativeReport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto16["m_sql"] = "c.totalCallTime";
$proto16["m_srcTableName"] = "callsNegativeReport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto18["m_sql"] = "c.dialerCampaign";
$proto18["m_srcTableName"] = "callsNegativeReport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto20["m_sql"] = "c.dialerList";
$proto20["m_srcTableName"] = "callsNegativeReport";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "dialerAgent"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Άγνωστος'"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "isnull(dialerAgent, 'Άγνωστος')";
$proto22["m_srcTableName"] = "callsNegativeReport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "dialerAgent";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "dr.denialReason"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cs.status"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "coalesce(dr.denialReason, cs.status)";
$proto26["m_srcTableName"] = "callsNegativeReport";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "callResult";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto30["m_sql"] = "1";
$proto30["m_srcTableName"] = "callsNegativeReport";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.Calls";
$proto33["m_srcTableName"] = "callsNegativeReport";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "contactId";
$proto33["m_columns"][] = "callStart";
$proto33["m_columns"][] = "callHangup";
$proto33["m_columns"][] = "callEnd";
$proto33["m_columns"][] = "talkTime";
$proto33["m_columns"][] = "typingTime";
$proto33["m_columns"][] = "totalCallTime";
$proto33["m_columns"][] = "tvchannel";
$proto33["m_columns"][] = "broadcast";
$proto33["m_columns"][] = "seller";
$proto33["m_columns"][] = "callStatusId";
$proto33["m_columns"][] = "callDenialReasonID";
$proto33["m_columns"][] = "callClassificationID";
$proto33["m_columns"][] = "callSubClassificationID";
$proto33["m_columns"][] = "remarks";
$proto33["m_columns"][] = "redialDate";
$proto33["m_columns"][] = "redialComments";
$proto33["m_columns"][] = "redialIsPrivate";
$proto33["m_columns"][] = "redialDone";
$proto33["m_columns"][] = "contactMethod";
$proto33["m_columns"][] = "courier";
$proto33["m_columns"][] = "deliveryComments";
$proto33["m_columns"][] = "courierDeliveryDate";
$proto33["m_columns"][] = "courierTimeFrom";
$proto33["m_columns"][] = "courierTimeTo";
$proto33["m_columns"][] = "dialerPhone";
$proto33["m_columns"][] = "dialerCallEpoch";
$proto33["m_columns"][] = "dialerCampaign";
$proto33["m_columns"][] = "dialerList";
$proto33["m_columns"][] = "dialerLeadID";
$proto33["m_columns"][] = "dialerAgent";
$proto33["m_columns"][] = "dialerRecording";
$proto33["m_columns"][] = "productFamilyId";
$proto33["m_columns"][] = "orderShipCompany";
$proto33["m_columns"][] = "orderInvoiceRequired";
$proto33["m_columns"][] = "callComments";
$proto33["m_columns"][] = "internalCommunication";
$proto33["m_columns"][] = "callGdprAcceptance";
$proto33["m_columns"][] = "callGdprRecordingAcceptance";
$proto33["m_columns"][] = "orderPaymentMethod";
$proto33["m_columns"][] = "contactName";
$proto33["m_columns"][] = "contactZipCode";
$proto33["m_columns"][] = "contactCity";
$proto33["m_columns"][] = "ContactArea";
$proto33["m_columns"][] = "contactGender";
$proto33["m_columns"][] = "contactAge";
$proto33["m_columns"][] = "crmUser";
$proto33["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "dbo.Calls AS c";
$proto32["m_alias"] = "c";
$proto32["m_srcTableName"] = "callsNegativeReport";
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
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "dbo.callClassifications";
$proto37["m_srcTableName"] = "callsNegativeReport";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "classification";
$proto37["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN dbo.callClassifications AS cc ON c.callClassificationID = cc.id";
$proto36["m_alias"] = "cc";
$proto36["m_srcTableName"] = "callsNegativeReport";
$proto38=array();
$proto38["m_sql"] = "c.callClassificationID = cc.id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callClassificationID",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= cc.id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_LEFTJOIN";
			$proto41=array();
$proto41["m_strName"] = "dbo.callSubClassifications";
$proto41["m_srcTableName"] = "callsNegativeReport";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ID";
$proto41["m_columns"][] = "classificationId";
$proto41["m_columns"][] = "subClassification";
$proto41["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "LEFT OUTER JOIN dbo.callSubClassifications AS csc ON c.callSubClassificationID = csc.ID";
$proto40["m_alias"] = "csc";
$proto40["m_srcTableName"] = "callsNegativeReport";
$proto42=array();
$proto42["m_sql"] = "c.callSubClassificationID = csc.ID";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callSubClassificationID",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= csc.ID";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.callStatus";
$proto45["m_srcTableName"] = "callsNegativeReport";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "status";
$proto45["m_columns"][] = "isDenial";
$proto45["m_columns"][] = "displayOrder";
$proto45["m_columns"][] = "dialerStatus";
$proto45["m_columns"][] = "callClassificationId";
$proto45["m_columns"][] = "callSubClassificationId";
$proto45["m_columns"][] = "isPositive";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN dbo.callStatus AS cs ON c.callStatusId = cs.id";
$proto44["m_alias"] = "cs";
$proto44["m_srcTableName"] = "callsNegativeReport";
$proto46=array();
$proto46["m_sql"] = "c.callStatusId = cs.id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callStatusId",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= cs.id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_LEFTJOIN";
			$proto49=array();
$proto49["m_strName"] = "dbo.denialReason";
$proto49["m_srcTableName"] = "callsNegativeReport";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "denialReason";
$proto49["m_columns"][] = "displayOrder";
$proto49["m_columns"][] = "callStatusID";
$proto49["m_columns"][] = "dialerStatus";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LEFT OUTER JOIN dbo.denialReason AS dr ON c.callDenialReasonID = dr.id";
$proto48["m_alias"] = "dr";
$proto48["m_srcTableName"] = "callsNegativeReport";
$proto50=array();
$proto50["m_sql"] = "c.callDenialReasonID = dr.id";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callDenialReasonID",
	"m_strTable" => "c",
	"m_srcTableName" => "callsNegativeReport"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= dr.id";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="callsNegativeReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callsnegativereport = createSqlQuery_callsnegativereport();


	
		;

										

$tdatacallsnegativereport[".sqlquery"] = $queryData_callsnegativereport;



$tableEvents["callsNegativeReport"] = new eventsBase;
$tdatacallsnegativereport[".hasEvents"] = false;

?>