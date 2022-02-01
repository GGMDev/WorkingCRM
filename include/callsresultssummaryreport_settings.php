<?php
$tdatacallsresultssummaryreport = array();
$tdatacallsresultssummaryreport[".searchableFields"] = array();
$tdatacallsresultssummaryreport[".ShortName"] = "callsresultssummaryreport";
$tdatacallsresultssummaryreport[".OwnerID"] = "";
$tdatacallsresultssummaryreport[".OriginalTable"] = "dbo.Calls";


$tdatacallsresultssummaryreport[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacallsresultssummaryreport[".originalPagesByType"] = $tdatacallsresultssummaryreport[".pagesByType"];
$tdatacallsresultssummaryreport[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacallsresultssummaryreport[".originalPages"] = $tdatacallsresultssummaryreport[".pages"];
$tdatacallsresultssummaryreport[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacallsresultssummaryreport[".originalDefaultPages"] = $tdatacallsresultssummaryreport[".defaultPages"];

//	field labels
$fieldLabelscallsresultssummaryreport = array();
$fieldToolTipscallsresultssummaryreport = array();
$pageTitlescallsresultssummaryreport = array();
$placeHolderscallsresultssummaryreport = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallsresultssummaryreport["Greek"] = array();
	$fieldToolTipscallsresultssummaryreport["Greek"] = array();
	$placeHolderscallsresultssummaryreport["Greek"] = array();
	$pageTitlescallsresultssummaryreport["Greek"] = array();
	$fieldLabelscallsresultssummaryreport["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipscallsresultssummaryreport["Greek"]["dialerCampaign"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["dialerCampaign"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipscallsresultssummaryreport["Greek"]["dialerList"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["dialerList"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipscallsresultssummaryreport["Greek"]["dialerAgent"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["dialerAgent"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["callDate"] = "Ημερομηνία";
	$fieldToolTipscallsresultssummaryreport["Greek"]["callDate"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["callDate"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["callResult"] = "Αποτέλεσμα";
	$fieldToolTipscallsresultssummaryreport["Greek"]["callResult"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["callResult"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["forCount"] = "# Κλήσεων";
	$fieldToolTipscallsresultssummaryreport["Greek"]["forCount"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["forCount"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["callAppsCount"] = "# Αιτήσεων";
	$fieldToolTipscallsresultssummaryreport["Greek"]["callAppsCount"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["callAppsCount"] = "";
	$fieldLabelscallsresultssummaryreport["Greek"]["callTimeBreak"] = "Διάστημα Κλήσης";
	$fieldToolTipscallsresultssummaryreport["Greek"]["callTimeBreak"] = "";
	$placeHolderscallsresultssummaryreport["Greek"]["callTimeBreak"] = "";
	$pageTitlescallsresultssummaryreport["Greek"]["search"] = "Αναφορά Αποτελεσμάτων Κλήσεων";
	if (count($fieldToolTipscallsresultssummaryreport["Greek"]))
		$tdatacallsresultssummaryreport[".isUseToolTips"] = true;
}


	$tdatacallsresultssummaryreport[".NCSearch"] = true;



$tdatacallsresultssummaryreport[".shortTableName"] = "callsresultssummaryreport";
$tdatacallsresultssummaryreport[".nSecOptions"] = 0;

$tdatacallsresultssummaryreport[".mainTableOwnerID"] = "";
$tdatacallsresultssummaryreport[".entityType"] = 2;
$tdatacallsresultssummaryreport[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallsresultssummaryreport[".strOriginalTableName"] = "dbo.Calls";

	



$tdatacallsresultssummaryreport[".showAddInPopup"] = false;

$tdatacallsresultssummaryreport[".showEditInPopup"] = false;

$tdatacallsresultssummaryreport[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallsresultssummaryreport[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallsresultssummaryreport[".listAjax"] = false;
//	temporary
$tdatacallsresultssummaryreport[".listAjax"] = false;

	$tdatacallsresultssummaryreport[".audit"] = false;

	$tdatacallsresultssummaryreport[".locking"] = false;


$pages = $tdatacallsresultssummaryreport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallsresultssummaryreport[".edit"] = true;
	$tdatacallsresultssummaryreport[".afterEditAction"] = 1;
	$tdatacallsresultssummaryreport[".closePopupAfterEdit"] = 1;
	$tdatacallsresultssummaryreport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallsresultssummaryreport[".add"] = true;
$tdatacallsresultssummaryreport[".afterAddAction"] = 1;
$tdatacallsresultssummaryreport[".closePopupAfterAdd"] = 1;
$tdatacallsresultssummaryreport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallsresultssummaryreport[".list"] = true;
}



$tdatacallsresultssummaryreport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallsresultssummaryreport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallsresultssummaryreport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallsresultssummaryreport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallsresultssummaryreport[".printFriendly"] = true;
}



$tdatacallsresultssummaryreport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallsresultssummaryreport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallsresultssummaryreport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallsresultssummaryreport[".isUseAjaxSuggest"] = true;




																																																																																																																		

$tdatacallsresultssummaryreport[".ajaxCodeSnippetAdded"] = false;

$tdatacallsresultssummaryreport[".buttonsAdded"] = false;

$tdatacallsresultssummaryreport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallsresultssummaryreport[".isUseTimeForSearch"] = false;


$tdatacallsresultssummaryreport[".badgeColor"] = "BC8F8F";


$tdatacallsresultssummaryreport[".allSearchFields"] = array();
$tdatacallsresultssummaryreport[".filterFields"] = array();
$tdatacallsresultssummaryreport[".requiredSearchFields"] = array();




$tdatacallsresultssummaryreport[".tableType"] = "report";

$tdatacallsresultssummaryreport[".printerPageOrientation"] = 0;
$tdatacallsresultssummaryreport[".nPrinterPageScale"] = 100;

$tdatacallsresultssummaryreport[".nPrinterSplitRecords"] = 40;

$tdatacallsresultssummaryreport[".geocodingEnabled"] = false;

//report settings
$tdatacallsresultssummaryreport[".crossTabReport"] = true;

$tdatacallsresultssummaryreport[".reportGroupFields"] = true;
$tdatacallsresultssummaryreport[".pageSize"] = 5;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "callDate";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callDate";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerCampaign";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerCampaign";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerList";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerList";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerAgent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerAgent";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
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
$tdatacallsresultssummaryreport[".reportGroupFieldsData"] = $reportGroupFields;
$tdatacallsresultssummaryreport[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdatacallsresultssummaryreport[".reportHorizontalSummary"] = true;

$tdatacallsresultssummaryreport[".isExistTotalFields"] = true;




$tdatacallsresultssummaryreport[".repShowDet"] = true;

$tdatacallsresultssummaryreport[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallsresultssummaryreport[".strOrderBy"] = $tstrOrderBy;

$tdatacallsresultssummaryreport[".orderindexes"] = array();


$tdatacallsresultssummaryreport[".sqlHead"] = "select format(callStart, 'dd/MM/yyyy') AS callDate  ,case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end as callTimeBreak  ,dialerCampaign  ,dialerList  ,isnull(dialerAgent,'Άγνωστος') as dialerAgent    ,case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end as callResult  ,1 as forCount  ,isnull(callAppsCount.appsCount,0) as callAppsCount";
$tdatacallsresultssummaryreport[".sqlFrom"] = "from calls as c  left join callStatus as cs on cs.id = c.callStatusId  left join denialReason as dr on dr.id = c.callDenialReasonID  left join (select callid, count(1) as appsCount   		   from voltonApplications group by callid) as callAppsCount on callAppsCount.callid = c.id";
$tdatacallsresultssummaryreport[".sqlWhereExpr"] = "";
$tdatacallsresultssummaryreport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallsresultssummaryreport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallsresultssummaryreport[".arrGroupsPerPage"] = $arrGPP;

$tdatacallsresultssummaryreport[".highlightSearchResults"] = true;

$tableKeyscallsresultssummaryreport = array();
$tdatacallsresultssummaryreport[".Keys"] = $tableKeyscallsresultssummaryreport;


$tdatacallsresultssummaryreport[".hideMobileList"] = array();




//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","callDate");
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


	$tdatacallsresultssummaryreport["callDate"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "callDate";
//	callTimeBreak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callTimeBreak";
	$fdata["GoodName"] = "callTimeBreak";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","callTimeBreak");
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


	$tdatacallsresultssummaryreport["callTimeBreak"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "callTimeBreak";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","dialerCampaign");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "dialerCampaign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerCampaign";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["rprint"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dialerCampaign";

	

	
	$edata["LookupOrderBy"] = "dialerCampaign";

	
	
	
	

	
	
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


	$tdatacallsresultssummaryreport["dialerCampaign"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","dialerList");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "dialerList";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerList";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["rprint"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dialerList";

	

	
	$edata["LookupOrderBy"] = "dialerList";

	
	
	
	

	
	
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


	$tdatacallsresultssummaryreport["dialerList"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "dialerList";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","dialerAgent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(dialerAgent,'Άγνωστος')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["rprint"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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
	$edata["DisplayField"] = "username+' '+isnull(fullname,'')";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
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


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatacallsresultssummaryreport["dialerAgent"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "dialerAgent";
//	callResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "callResult";
	$fdata["GoodName"] = "callResult";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","callResult");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "callResult";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end";

	
	
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


	$tdatacallsresultssummaryreport["callResult"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "callResult";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","forCount");
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


	$tdatacallsresultssummaryreport["forCount"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "forCount";
//	callAppsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "callAppsCount";
	$fdata["GoodName"] = "callAppsCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsResultsSummaryReport","callAppsCount");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "callAppsCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(callAppsCount.appsCount,0)";

	
	
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


	$tdatacallsresultssummaryreport["callAppsCount"] = $fdata;
		$tdatacallsresultssummaryreport[".searchableFields"][] = "callAppsCount";


$tables_data["CallsResultsSummaryReport"]=&$tdatacallsresultssummaryreport;
$field_labels["CallsResultsSummaryReport"] = &$fieldLabelscallsresultssummaryreport;
$fieldToolTips["CallsResultsSummaryReport"] = &$fieldToolTipscallsresultssummaryreport;
$placeHolders["CallsResultsSummaryReport"] = &$placeHolderscallsresultssummaryreport;
$page_titles["CallsResultsSummaryReport"] = &$pageTitlescallsresultssummaryreport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["CallsResultsSummaryReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callsresultssummaryreport()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "format(callStart, 'dd/MM/yyyy') AS callDate  ,case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end as callTimeBreak  ,dialerCampaign  ,dialerList  ,isnull(dialerAgent,'Άγνωστος') as dialerAgent    ,case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end as callResult  ,1 as forCount  ,isnull(callAppsCount.appsCount,0) as callAppsCount";
$proto0["m_strFrom"] = "from calls as c  left join callStatus as cs on cs.id = c.callStatusId  left join denialReason as dr on dr.id = c.callDenialReasonID  left join (select callid, count(1) as appsCount   		   from voltonApplications group by callid) as callAppsCount on callAppsCount.callid = c.id";
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
$proto6["m_srcTableName"] = "CallsResultsSummaryReport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end"
));

$proto10["m_sql"] = "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end";
$proto10["m_srcTableName"] = "CallsResultsSummaryReport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "callTimeBreak";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto12["m_sql"] = "dialerCampaign";
$proto12["m_srcTableName"] = "CallsResultsSummaryReport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto14["m_sql"] = "dialerList";
$proto14["m_srcTableName"] = "CallsResultsSummaryReport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "dialerAgent"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Άγνωστος'"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "isnull(dialerAgent,'Άγνωστος')";
$proto16["m_srcTableName"] = "CallsResultsSummaryReport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "dialerAgent";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end"
));

$proto20["m_sql"] = "case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end";
$proto20["m_srcTableName"] = "CallsResultsSummaryReport";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "callResult";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto22["m_sql"] = "1";
$proto22["m_srcTableName"] = "CallsResultsSummaryReport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callAppsCount.appsCount"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "isnull(callAppsCount.appsCount,0)";
$proto24["m_srcTableName"] = "CallsResultsSummaryReport";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "callAppsCount";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Calls";
$proto29["m_srcTableName"] = "CallsResultsSummaryReport";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "contactId";
$proto29["m_columns"][] = "callStart";
$proto29["m_columns"][] = "callHangup";
$proto29["m_columns"][] = "callEnd";
$proto29["m_columns"][] = "talkTime";
$proto29["m_columns"][] = "typingTime";
$proto29["m_columns"][] = "totalCallTime";
$proto29["m_columns"][] = "tvchannel";
$proto29["m_columns"][] = "broadcast";
$proto29["m_columns"][] = "seller";
$proto29["m_columns"][] = "callStatusId";
$proto29["m_columns"][] = "callDenialReasonID";
$proto29["m_columns"][] = "callClassificationID";
$proto29["m_columns"][] = "callSubClassificationID";
$proto29["m_columns"][] = "remarks";
$proto29["m_columns"][] = "redialDate";
$proto29["m_columns"][] = "redialComments";
$proto29["m_columns"][] = "redialIsPrivate";
$proto29["m_columns"][] = "redialDone";
$proto29["m_columns"][] = "contactMethod";
$proto29["m_columns"][] = "courier";
$proto29["m_columns"][] = "deliveryComments";
$proto29["m_columns"][] = "courierDeliveryDate";
$proto29["m_columns"][] = "courierTimeFrom";
$proto29["m_columns"][] = "courierTimeTo";
$proto29["m_columns"][] = "dialerPhone";
$proto29["m_columns"][] = "dialerCallEpoch";
$proto29["m_columns"][] = "dialerCampaign";
$proto29["m_columns"][] = "dialerList";
$proto29["m_columns"][] = "dialerLeadID";
$proto29["m_columns"][] = "dialerAgent";
$proto29["m_columns"][] = "dialerRecording";
$proto29["m_columns"][] = "productFamilyId";
$proto29["m_columns"][] = "orderShipCompany";
$proto29["m_columns"][] = "orderInvoiceRequired";
$proto29["m_columns"][] = "callComments";
$proto29["m_columns"][] = "internalCommunication";
$proto29["m_columns"][] = "callGdprAcceptance";
$proto29["m_columns"][] = "callGdprRecordingAcceptance";
$proto29["m_columns"][] = "orderPaymentMethod";
$proto29["m_columns"][] = "contactName";
$proto29["m_columns"][] = "contactZipCode";
$proto29["m_columns"][] = "contactCity";
$proto29["m_columns"][] = "ContactArea";
$proto29["m_columns"][] = "contactGender";
$proto29["m_columns"][] = "contactAge";
$proto29["m_columns"][] = "crmUser";
$proto29["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "calls as c";
$proto28["m_alias"] = "c";
$proto28["m_srcTableName"] = "CallsResultsSummaryReport";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.callStatus";
$proto33["m_srcTableName"] = "CallsResultsSummaryReport";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "status";
$proto33["m_columns"][] = "isDenial";
$proto33["m_columns"][] = "displayOrder";
$proto33["m_columns"][] = "dialerStatus";
$proto33["m_columns"][] = "callClassificationId";
$proto33["m_columns"][] = "callSubClassificationId";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "left join callStatus as cs on cs.id = c.callStatusId";
$proto32["m_alias"] = "cs";
$proto32["m_srcTableName"] = "CallsResultsSummaryReport";
$proto34=array();
$proto34["m_sql"] = "cs.id = c.callStatusId";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cs",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= c.callStatusId";
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
$proto37["m_strName"] = "dbo.denialReason";
$proto37["m_srcTableName"] = "CallsResultsSummaryReport";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "denialReason";
$proto37["m_columns"][] = "displayOrder";
$proto37["m_columns"][] = "callStatusID";
$proto37["m_columns"][] = "dialerStatus";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "left join denialReason as dr on dr.id = c.callDenialReasonID";
$proto36["m_alias"] = "dr";
$proto36["m_srcTableName"] = "CallsResultsSummaryReport";
$proto38=array();
$proto38["m_sql"] = "dr.id = c.callDenialReasonID";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dr",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= c.callDenialReasonID";
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
$proto41["m_strHead"] = "select";
$proto41["m_strFieldList"] = "callid, count(1) as appsCount";
$proto41["m_strFrom"] = "from voltonApplications";
$proto41["m_strWhere"] = "";
$proto41["m_strOrderBy"] = "";
	
		;
			$proto41["cipherer"] = null;
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_where"] = $obj;
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

$proto41["m_having"] = $obj;
$proto41["m_fieldlist"] = array();
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto47["m_sql"] = "callid";
$proto47["m_srcTableName"] = "CallsResultsSummaryReport";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto41["m_fieldlist"][]=$obj;
						$proto49=array();
			$proto50=array();
$proto50["m_functiontype"] = "SQLF_COUNT";
$proto50["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto50["m_arguments"][]=$obj;
$proto50["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto50);

$proto49["m_sql"] = "count(1)";
$proto49["m_srcTableName"] = "CallsResultsSummaryReport";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "appsCount";
$obj = new SQLFieldListItem($proto49);

$proto41["m_fieldlist"][]=$obj;
$proto41["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.voltonApplications";
$proto53["m_srcTableName"] = "CallsResultsSummaryReport";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "callid";
$proto53["m_columns"][] = "applicationStatusId";
$proto53["m_columns"][] = "applicationType";
$proto53["m_columns"][] = "applicantName";
$proto53["m_columns"][] = "applicantIdNumber";
$proto53["m_columns"][] = "applicantAddress";
$proto53["m_columns"][] = "applicantPostalCode";
$proto53["m_columns"][] = "applicantArea";
$proto53["m_columns"][] = "applicantCity";
$proto53["m_columns"][] = "applicantTaxRegistrationNumber";
$proto53["m_columns"][] = "applicantTaxOffice";
$proto53["m_columns"][] = "applicantEmail";
$proto53["m_columns"][] = "applicantProfession";
$proto53["m_columns"][] = "applicantKod";
$proto53["m_columns"][] = "applicantGemi";
$proto53["m_columns"][] = "applicantPhone";
$proto53["m_columns"][] = "applicantWorkPhone";
$proto53["m_columns"][] = "applicantMobile";
$proto53["m_columns"][] = "contactName";
$proto53["m_columns"][] = "contactPhone";
$proto53["m_columns"][] = "contactMobile";
$proto53["m_columns"][] = "contactEmail";
$proto53["m_columns"][] = "legalName";
$proto53["m_columns"][] = "legalIdNumber";
$proto53["m_columns"][] = "mailAddress";
$proto53["m_columns"][] = "mailPostalCode";
$proto53["m_columns"][] = "mailArea";
$proto53["m_columns"][] = "mailCity";
$proto53["m_columns"][] = "powerAddress";
$proto53["m_columns"][] = "powerOwnershipType";
$proto53["m_columns"][] = "powerPostalCode";
$proto53["m_columns"][] = "powerArea";
$proto53["m_columns"][] = "powerCity";
$proto53["m_columns"][] = "powerAgreedKw";
$proto53["m_columns"][] = "powerSupplyNumber";
$proto53["m_columns"][] = "powerMeterNumber";
$proto53["m_columns"][] = "powerCurrentSupplier";
$proto53["m_columns"][] = "powerCurrentDayMeter";
$proto53["m_columns"][] = "powerCurrentNightMeter";
$proto53["m_columns"][] = "powerActivationStatus";
$proto53["m_columns"][] = "voltonPlan";
$proto53["m_columns"][] = "voltonContractDuration";
$proto53["m_columns"][] = "voltonWarrantyAmount";
$proto53["m_columns"][] = "voltonWarrantyOnFirstBill";
$proto53["m_columns"][] = "voltonOther";
$proto53["m_columns"][] = "voltonComments";
$proto53["m_columns"][] = "voltonAutoPayment";
$proto53["m_columns"][] = "document1";
$proto53["m_columns"][] = "document2";
$proto53["m_columns"][] = "document3";
$proto53["m_columns"][] = "document4";
$proto53["m_columns"][] = "document5";
$proto53["m_columns"][] = "document6";
$proto53["m_columns"][] = "document7";
$proto53["m_columns"][] = "document8";
$proto53["m_columns"][] = "document9";
$proto53["m_columns"][] = "document10";
$proto53["m_columns"][] = "document11";
$proto53["m_columns"][] = "document12";
$proto53["m_columns"][] = "document13";
$proto53["m_columns"][] = "document14";
$proto53["m_columns"][] = "document15";
$proto53["m_columns"][] = "ngAddress";
$proto53["m_columns"][] = "ngPostalCode";
$proto53["m_columns"][] = "ngArea";
$proto53["m_columns"][] = "ngCity";
$proto53["m_columns"][] = "ngPressure";
$proto53["m_columns"][] = "ngHourlyCapacity";
$proto53["m_columns"][] = "ngHkasp";
$proto53["m_columns"][] = "ngMeterNumber";
$proto53["m_columns"][] = "ngMeterType";
$proto53["m_columns"][] = "ngCurrentMeterValue";
$proto53["m_columns"][] = "ngConnectionExists";
$proto53["m_columns"][] = "ngSupplyIsNew";
$proto53["m_columns"][] = "ngSupplyReactivation";
$proto53["m_columns"][] = "applicationAgentStatus";
$proto53["m_columns"][] = "applicationLastStatusDate";
$proto53["m_columns"][] = "applicationContactMethod";
$proto53["m_columns"][] = "applicationCourier";
$proto53["m_columns"][] = "applicationCourierDate";
$proto53["m_columns"][] = "applicationCourrierTimeFrom";
$proto53["m_columns"][] = "applicationCourierTimeTo";
$proto53["m_columns"][] = "applicationCourrierComments";
$proto53["m_columns"][] = "dialerAgent";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "voltonApplications";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "CallsResultsSummaryReport";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto41["m_fromlist"][]=$obj;
$proto41["m_groupby"] = array();
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto41["m_groupby"][]=$obj;
$proto41["m_orderby"] = array();
$proto41["m_srcTableName"]="CallsResultsSummaryReport";		
$obj = new SQLQuery($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "left join (select callid, count(1) as appsCount   		   from voltonApplications group by callid) as callAppsCount on callAppsCount.callid = c.id";
$proto40["m_alias"] = "callAppsCount";
$proto40["m_srcTableName"] = "CallsResultsSummaryReport";
$proto58=array();
$proto58["m_sql"] = "callAppsCount.callid = c.id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "callAppsCount",
	"m_srcTableName" => "CallsResultsSummaryReport"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= c.id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="CallsResultsSummaryReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callsresultssummaryreport = createSqlQuery_callsresultssummaryreport();


	
		;

								

$tdatacallsresultssummaryreport[".sqlquery"] = $queryData_callsresultssummaryreport;



$tableEvents["CallsResultsSummaryReport"] = new eventsBase;
$tdatacallsresultssummaryreport[".hasEvents"] = false;

?>