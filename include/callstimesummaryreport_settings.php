<?php
$tdatacallstimesummaryreport = array();
$tdatacallstimesummaryreport[".searchableFields"] = array();
$tdatacallstimesummaryreport[".ShortName"] = "callstimesummaryreport";
$tdatacallstimesummaryreport[".OwnerID"] = "";
$tdatacallstimesummaryreport[".OriginalTable"] = "dbo.Calls";


$tdatacallstimesummaryreport[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacallstimesummaryreport[".originalPagesByType"] = $tdatacallstimesummaryreport[".pagesByType"];
$tdatacallstimesummaryreport[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacallstimesummaryreport[".originalPages"] = $tdatacallstimesummaryreport[".pages"];
$tdatacallstimesummaryreport[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacallstimesummaryreport[".originalDefaultPages"] = $tdatacallstimesummaryreport[".defaultPages"];

//	field labels
$fieldLabelscallstimesummaryreport = array();
$fieldToolTipscallstimesummaryreport = array();
$pageTitlescallstimesummaryreport = array();
$placeHolderscallstimesummaryreport = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelscallstimesummaryreport["Greek"] = array();
	$fieldToolTipscallstimesummaryreport["Greek"] = array();
	$placeHolderscallstimesummaryreport["Greek"] = array();
	$pageTitlescallstimesummaryreport["Greek"] = array();
	$fieldLabelscallstimesummaryreport["Greek"]["dialerCampaign"] = "Καμπάνια";
	$fieldToolTipscallstimesummaryreport["Greek"]["dialerCampaign"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["dialerCampaign"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["dialerList"] = "Λίστα";
	$fieldToolTipscallstimesummaryreport["Greek"]["dialerList"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["dialerList"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["callDate"] = "Ημερομηνία";
	$fieldToolTipscallstimesummaryreport["Greek"]["callDate"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["callDate"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["callResult"] = "Αποτέλεσμα";
	$fieldToolTipscallstimesummaryreport["Greek"]["callResult"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["callResult"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["forCount"] = "# Κλήσεων";
	$fieldToolTipscallstimesummaryreport["Greek"]["forCount"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["forCount"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["callAppsCount"] = "# Αιτήσεων";
	$fieldToolTipscallstimesummaryreport["Greek"]["callAppsCount"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["callAppsCount"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["talktime"] = "Διάρκεια Ομιλίας";
	$fieldToolTipscallstimesummaryreport["Greek"]["talktime"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["talktime"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["typingTime"] = "Διάρκεια Καταχώρησης";
	$fieldToolTipscallstimesummaryreport["Greek"]["typingTime"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["typingTime"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["totalCallTime"] = "Συνολική Διάρκεια";
	$fieldToolTipscallstimesummaryreport["Greek"]["totalCallTime"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["totalCallTime"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["callTimeBreak"] = "Ωριαίο Διάστημα";
	$fieldToolTipscallstimesummaryreport["Greek"]["callTimeBreak"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["callTimeBreak"] = "";
	$fieldLabelscallstimesummaryreport["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipscallstimesummaryreport["Greek"]["dialerAgent"] = "";
	$placeHolderscallstimesummaryreport["Greek"]["dialerAgent"] = "";
	$pageTitlescallstimesummaryreport["Greek"]["search"] = "Αναφορά Χρόνων Κλήσεων";
	if (count($fieldToolTipscallstimesummaryreport["Greek"]))
		$tdatacallstimesummaryreport[".isUseToolTips"] = true;
}


	$tdatacallstimesummaryreport[".NCSearch"] = true;



$tdatacallstimesummaryreport[".shortTableName"] = "callstimesummaryreport";
$tdatacallstimesummaryreport[".nSecOptions"] = 0;

$tdatacallstimesummaryreport[".mainTableOwnerID"] = "";
$tdatacallstimesummaryreport[".entityType"] = 2;
$tdatacallstimesummaryreport[".connId"] = "CallCenter_at_10_41_2_31";


$tdatacallstimesummaryreport[".strOriginalTableName"] = "dbo.Calls";

	



$tdatacallstimesummaryreport[".showAddInPopup"] = false;

$tdatacallstimesummaryreport[".showEditInPopup"] = false;

$tdatacallstimesummaryreport[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacallstimesummaryreport[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacallstimesummaryreport[".listAjax"] = false;
//	temporary
$tdatacallstimesummaryreport[".listAjax"] = false;

	$tdatacallstimesummaryreport[".audit"] = false;

	$tdatacallstimesummaryreport[".locking"] = false;


$pages = $tdatacallstimesummaryreport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallstimesummaryreport[".edit"] = true;
	$tdatacallstimesummaryreport[".afterEditAction"] = 1;
	$tdatacallstimesummaryreport[".closePopupAfterEdit"] = 1;
	$tdatacallstimesummaryreport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallstimesummaryreport[".add"] = true;
$tdatacallstimesummaryreport[".afterAddAction"] = 1;
$tdatacallstimesummaryreport[".closePopupAfterAdd"] = 1;
$tdatacallstimesummaryreport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallstimesummaryreport[".list"] = true;
}



$tdatacallstimesummaryreport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallstimesummaryreport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallstimesummaryreport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallstimesummaryreport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallstimesummaryreport[".printFriendly"] = true;
}



$tdatacallstimesummaryreport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallstimesummaryreport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallstimesummaryreport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallstimesummaryreport[".isUseAjaxSuggest"] = true;




																																																																																																																		

$tdatacallstimesummaryreport[".ajaxCodeSnippetAdded"] = false;

$tdatacallstimesummaryreport[".buttonsAdded"] = false;

$tdatacallstimesummaryreport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallstimesummaryreport[".isUseTimeForSearch"] = false;


$tdatacallstimesummaryreport[".badgeColor"] = "CD853F";


$tdatacallstimesummaryreport[".allSearchFields"] = array();
$tdatacallstimesummaryreport[".filterFields"] = array();
$tdatacallstimesummaryreport[".requiredSearchFields"] = array();




$tdatacallstimesummaryreport[".tableType"] = "report";

$tdatacallstimesummaryreport[".printerPageOrientation"] = 0;
$tdatacallstimesummaryreport[".nPrinterPageScale"] = 100;

$tdatacallstimesummaryreport[".nPrinterSplitRecords"] = 40;

$tdatacallstimesummaryreport[".geocodingEnabled"] = false;

//report settings
$tdatacallstimesummaryreport[".crossTabReport"] = true;

$tdatacallstimesummaryreport[".reportGroupFields"] = true;
$tdatacallstimesummaryreport[".pageSize"] = 5;
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
	$reportGroupFieldsList []= "callResult";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callResult";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "callTimeBreak";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "callTimeBreak";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "dialerAgent";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "dialerAgent";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 6;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
$tdatacallstimesummaryreport[".reportGroupFieldsData"] = $reportGroupFields;
$tdatacallstimesummaryreport[".reportGroupFieldsList"] = $reportGroupFieldsList;

$tdatacallstimesummaryreport[".reportHorizontalSummary"] = true;

$tdatacallstimesummaryreport[".isExistTotalFields"] = true;




$tdatacallstimesummaryreport[".repShowDet"] = true;

$tdatacallstimesummaryreport[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacallstimesummaryreport[".strOrderBy"] = $tstrOrderBy;

$tdatacallstimesummaryreport[".orderindexes"] = array();


$tdatacallstimesummaryreport[".sqlHead"] = "select format(callStart, 'dd/MM/yyyy') AS callDate  ,case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end as callTimeBreak  ,dialerCampaign  ,dialerList  ,case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end as callResult  ,talktime  ,typingTime  ,totalCallTime  ,1 as forCount  ,isnull(callAppsCount.appsCount,0) as callAppsCount  ,isnull(c.dialerAgent,'Άγνωστος') as dialerAgent";
$tdatacallstimesummaryreport[".sqlFrom"] = "from calls as c  left join callStatus as cs on cs.id = c.callStatusId  left join denialReason as dr on dr.id = c.callDenialReasonID  left join (select callid, count(1) as appsCount   		   from voltonApplications group by callid) as callAppsCount on callAppsCount.callid = c.id";
$tdatacallstimesummaryreport[".sqlWhereExpr"] = "";
$tdatacallstimesummaryreport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallstimesummaryreport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallstimesummaryreport[".arrGroupsPerPage"] = $arrGPP;

$tdatacallstimesummaryreport[".highlightSearchResults"] = true;

$tableKeyscallstimesummaryreport = array();
$tdatacallstimesummaryreport[".Keys"] = $tableKeyscallstimesummaryreport;


$tdatacallstimesummaryreport[".hideMobileList"] = array();




//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","callDate");
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


	$tdatacallstimesummaryreport["callDate"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "callDate";
//	callTimeBreak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callTimeBreak";
	$fdata["GoodName"] = "callTimeBreak";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","callTimeBreak");
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


	$tdatacallstimesummaryreport["callTimeBreak"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "callTimeBreak";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","dialerCampaign");
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
	$edata["LinkFieldType"] = 200;
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


	$tdatacallstimesummaryreport["dialerCampaign"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "dialerCampaign";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","dialerList");
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
	$edata["LinkFieldType"] = 200;
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


	$tdatacallstimesummaryreport["dialerList"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "dialerList";
//	callResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callResult";
	$fdata["GoodName"] = "callResult";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","callResult");
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


	$tdatacallstimesummaryreport["callResult"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "callResult";
//	talktime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "talktime";
	$fdata["GoodName"] = "talktime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","talktime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "talkTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "talktime";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "talktime";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacallstimesummaryreport["talktime"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "talktime";
//	typingTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "typingTime";
	$fdata["GoodName"] = "typingTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","typingTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "typingTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typingTime";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatacallstimesummaryreport["typingTime"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "typingTime";
//	totalCallTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "totalCallTime";
	$fdata["GoodName"] = "totalCallTime";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","totalCallTime");
	$fdata["FieldType"] = 3;

		// report field settings
			$fdata["isTotalAvg"] = true;
			$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "totalCallTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalCallTime";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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

	
	
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatacallstimesummaryreport["totalCallTime"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "totalCallTime";
//	forCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "forCount";
	$fdata["GoodName"] = "forCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","forCount");
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


	$tdatacallstimesummaryreport["forCount"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "forCount";
//	callAppsCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "callAppsCount";
	$fdata["GoodName"] = "callAppsCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","callAppsCount");
	$fdata["FieldType"] = 3;

		// report field settings
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


	$tdatacallstimesummaryreport["callAppsCount"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "callAppsCount";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("CallsTimeSummaryReport","dialerAgent");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isnull(c.dialerAgent,'Άγνωστος')";

	
	
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


	$tdatacallstimesummaryreport["dialerAgent"] = $fdata;
		$tdatacallstimesummaryreport[".searchableFields"][] = "dialerAgent";


$tables_data["CallsTimeSummaryReport"]=&$tdatacallstimesummaryreport;
$field_labels["CallsTimeSummaryReport"] = &$fieldLabelscallstimesummaryreport;
$fieldToolTips["CallsTimeSummaryReport"] = &$fieldToolTipscallstimesummaryreport;
$placeHolders["CallsTimeSummaryReport"] = &$placeHolderscallstimesummaryreport;
$page_titles["CallsTimeSummaryReport"] = &$pageTitlescallstimesummaryreport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["CallsTimeSummaryReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callstimesummaryreport()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "format(callStart, 'dd/MM/yyyy') AS callDate  ,case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end as callTimeBreak  ,dialerCampaign  ,dialerList  ,case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end as callResult  ,talktime  ,typingTime  ,totalCallTime  ,1 as forCount  ,isnull(callAppsCount.appsCount,0) as callAppsCount  ,isnull(c.dialerAgent,'Άγνωστος') as dialerAgent";
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
$proto6["m_srcTableName"] = "CallsTimeSummaryReport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end"
));

$proto10["m_sql"] = "case      when datepart(hour, callStart)>=0 and datepart(hour, callStart) <1 then '00:00 - 00:59'     when datepart(hour, callStart)>=1 and datepart(hour, callStart)<2 then '01:00 - 01:59'     when datepart(hour, callStart)>=2 and datepart(hour, callStart)<3 then '02:00 - 02:59'     when datepart(hour, callStart)>=3 and datepart(hour, callStart)<4 then '03:00 - 03:59'     when datepart(hour, callStart)>=4 and datepart(hour, callStart)<5 then '04:00 - 04:59'     when datepart(hour, callStart)>=5 and datepart(hour, callStart)<6 then '05:00 - 05:59'     when datepart(hour, callStart)>=6 and datepart(hour, callStart)<7 then '06:00 - 06:59'     when datepart(hour, callStart)>=7 and datepart(hour, callStart)<8 then '07:00 - 07:59'     when datepart(hour, callStart)>=8 and datepart(hour, callStart)<9 then '08:00 - 08:59'     when datepart(hour, callStart)>=9 and datepart(hour, callStart)<10 then '09:00 - 09:59'     when datepart(hour, callStart)>=10 and datepart(hour, callStart)<11 then '10:00 - 10:59'     when datepart(hour, callStart)>=11 and datepart(hour, callStart)<12 then '11:00 - 11:59'     when datepart(hour, callStart)>=12 and datepart(hour, callStart)<13 then '12:00 - 12:59'     when datepart(hour, callStart)>=13 and datepart(hour, callStart)<14 then '13:00 - 13:59'     when datepart(hour, callStart)>=14 and datepart(hour, callStart)<15 then '14:00 - 14:59'     when datepart(hour, callStart)>=15 and datepart(hour, callStart)<16 then '15:00 - 15:59'     when datepart(hour, callStart)>=16 and datepart(hour, callStart)<17 then '16:00 - 16:59'     when datepart(hour, callStart)>=17 and datepart(hour, callStart)<18 then '17:00 - 17:59'     when datepart(hour, callStart)>=18 and datepart(hour, callStart)<19 then '18:00 - 18:59'     when datepart(hour, callStart)>=19 and datepart(hour, callStart)<20 then '19:00 - 19:59'     when datepart(hour, callStart)>=20 and datepart(hour, callStart)<21 then '20:00 - 20:59'     when datepart(hour, callStart)>=21 and datepart(hour, callStart)<22 then '21:00 - 21:59'     when datepart(hour, callStart)>=22 and datepart(hour, callStart)<23 then '22:00 - 12:59'     when datepart(hour, callStart)>=23  then '23:00 - 23:59'    end";
$proto10["m_srcTableName"] = "CallsTimeSummaryReport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "callTimeBreak";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto12["m_sql"] = "dialerCampaign";
$proto12["m_srcTableName"] = "CallsTimeSummaryReport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto14["m_sql"] = "dialerList";
$proto14["m_srcTableName"] = "CallsTimeSummaryReport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end"
));

$proto16["m_sql"] = "case when dr.denialReason is null    then isnull(cs.status,'Άγνωστο')  else   isnull(cs.status,'Άγνωστο')+' / '+dr.denialReason  end";
$proto16["m_srcTableName"] = "CallsTimeSummaryReport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "callResult";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "talkTime",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto18["m_sql"] = "talktime";
$proto18["m_srcTableName"] = "CallsTimeSummaryReport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "typingTime",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto20["m_sql"] = "typingTime";
$proto20["m_srcTableName"] = "CallsTimeSummaryReport";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCallTime",
	"m_strTable" => "c",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto22["m_sql"] = "totalCallTime";
$proto22["m_srcTableName"] = "CallsTimeSummaryReport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto24["m_sql"] = "1";
$proto24["m_srcTableName"] = "CallsTimeSummaryReport";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "forCount";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "callAppsCount.appsCount"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "isnull(callAppsCount.appsCount,0)";
$proto26["m_srcTableName"] = "CallsTimeSummaryReport";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "callAppsCount";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.dialerAgent"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Άγνωστος'"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "isnull(c.dialerAgent,'Άγνωστος')";
$proto30["m_srcTableName"] = "CallsTimeSummaryReport";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "dialerAgent";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.Calls";
$proto35["m_srcTableName"] = "CallsTimeSummaryReport";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "contactId";
$proto35["m_columns"][] = "callStart";
$proto35["m_columns"][] = "callHangup";
$proto35["m_columns"][] = "callEnd";
$proto35["m_columns"][] = "talkTime";
$proto35["m_columns"][] = "typingTime";
$proto35["m_columns"][] = "totalCallTime";
$proto35["m_columns"][] = "tvchannel";
$proto35["m_columns"][] = "broadcast";
$proto35["m_columns"][] = "seller";
$proto35["m_columns"][] = "callStatusId";
$proto35["m_columns"][] = "callDenialReasonID";
$proto35["m_columns"][] = "callClassificationID";
$proto35["m_columns"][] = "callSubClassificationID";
$proto35["m_columns"][] = "remarks";
$proto35["m_columns"][] = "redialDate";
$proto35["m_columns"][] = "redialComments";
$proto35["m_columns"][] = "redialIsPrivate";
$proto35["m_columns"][] = "redialDone";
$proto35["m_columns"][] = "contactMethod";
$proto35["m_columns"][] = "courier";
$proto35["m_columns"][] = "deliveryComments";
$proto35["m_columns"][] = "courierDeliveryDate";
$proto35["m_columns"][] = "courierTimeFrom";
$proto35["m_columns"][] = "courierTimeTo";
$proto35["m_columns"][] = "dialerPhone";
$proto35["m_columns"][] = "dialerCallEpoch";
$proto35["m_columns"][] = "dialerCampaign";
$proto35["m_columns"][] = "dialerList";
$proto35["m_columns"][] = "dialerLeadID";
$proto35["m_columns"][] = "dialerAgent";
$proto35["m_columns"][] = "dialerRecording";
$proto35["m_columns"][] = "productFamilyId";
$proto35["m_columns"][] = "orderShipCompany";
$proto35["m_columns"][] = "orderInvoiceRequired";
$proto35["m_columns"][] = "callComments";
$proto35["m_columns"][] = "internalCommunication";
$proto35["m_columns"][] = "callGdprAcceptance";
$proto35["m_columns"][] = "callGdprRecordingAcceptance";
$proto35["m_columns"][] = "orderPaymentMethod";
$proto35["m_columns"][] = "contactName";
$proto35["m_columns"][] = "contactZipCode";
$proto35["m_columns"][] = "contactCity";
$proto35["m_columns"][] = "ContactArea";
$proto35["m_columns"][] = "contactGender";
$proto35["m_columns"][] = "contactAge";
$proto35["m_columns"][] = "crmUser";
$proto35["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "calls as c";
$proto34["m_alias"] = "c";
$proto34["m_srcTableName"] = "CallsTimeSummaryReport";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_LEFTJOIN";
			$proto39=array();
$proto39["m_strName"] = "dbo.callStatus";
$proto39["m_srcTableName"] = "CallsTimeSummaryReport";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "status";
$proto39["m_columns"][] = "isDenial";
$proto39["m_columns"][] = "displayOrder";
$proto39["m_columns"][] = "dialerStatus";
$proto39["m_columns"][] = "callClassificationId";
$proto39["m_columns"][] = "callSubClassificationId";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "left join callStatus as cs on cs.id = c.callStatusId";
$proto38["m_alias"] = "cs";
$proto38["m_srcTableName"] = "CallsTimeSummaryReport";
$proto40=array();
$proto40["m_sql"] = "cs.id = c.callStatusId";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cs",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= c.callStatusId";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.denialReason";
$proto43["m_srcTableName"] = "CallsTimeSummaryReport";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "denialReason";
$proto43["m_columns"][] = "displayOrder";
$proto43["m_columns"][] = "callStatusID";
$proto43["m_columns"][] = "dialerStatus";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "left join denialReason as dr on dr.id = c.callDenialReasonID";
$proto42["m_alias"] = "dr";
$proto42["m_srcTableName"] = "CallsTimeSummaryReport";
$proto44=array();
$proto44["m_sql"] = "dr.id = c.callDenialReasonID";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dr",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= c.callDenialReasonID";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_LEFTJOIN";
			$proto47=array();
$proto47["m_strHead"] = "select";
$proto47["m_strFieldList"] = "callid, count(1) as appsCount";
$proto47["m_strFrom"] = "from voltonApplications";
$proto47["m_strWhere"] = "";
$proto47["m_strOrderBy"] = "";
	
		;
			$proto47["cipherer"] = null;
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_where"] = $obj;
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto47["m_having"] = $obj;
$proto47["m_fieldlist"] = array();
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto53["m_sql"] = "callid";
$proto53["m_srcTableName"] = "CallsTimeSummaryReport";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto47["m_fieldlist"][]=$obj;
						$proto55=array();
			$proto56=array();
$proto56["m_functiontype"] = "SQLF_COUNT";
$proto56["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto56["m_arguments"][]=$obj;
$proto56["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto56);

$proto55["m_sql"] = "count(1)";
$proto55["m_srcTableName"] = "CallsTimeSummaryReport";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "appsCount";
$obj = new SQLFieldListItem($proto55);

$proto47["m_fieldlist"][]=$obj;
$proto47["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "dbo.voltonApplications";
$proto59["m_srcTableName"] = "CallsTimeSummaryReport";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "callid";
$proto59["m_columns"][] = "applicationStatusId";
$proto59["m_columns"][] = "applicationType";
$proto59["m_columns"][] = "applicantName";
$proto59["m_columns"][] = "applicantIdNumber";
$proto59["m_columns"][] = "applicantAddress";
$proto59["m_columns"][] = "applicantPostalCode";
$proto59["m_columns"][] = "applicantArea";
$proto59["m_columns"][] = "applicantCity";
$proto59["m_columns"][] = "applicantTaxRegistrationNumber";
$proto59["m_columns"][] = "applicantTaxOffice";
$proto59["m_columns"][] = "applicantEmail";
$proto59["m_columns"][] = "applicantProfession";
$proto59["m_columns"][] = "applicantKod";
$proto59["m_columns"][] = "applicantGemi";
$proto59["m_columns"][] = "applicantPhone";
$proto59["m_columns"][] = "applicantWorkPhone";
$proto59["m_columns"][] = "applicantMobile";
$proto59["m_columns"][] = "contactName";
$proto59["m_columns"][] = "contactPhone";
$proto59["m_columns"][] = "contactMobile";
$proto59["m_columns"][] = "contactEmail";
$proto59["m_columns"][] = "legalName";
$proto59["m_columns"][] = "legalIdNumber";
$proto59["m_columns"][] = "mailAddress";
$proto59["m_columns"][] = "mailPostalCode";
$proto59["m_columns"][] = "mailArea";
$proto59["m_columns"][] = "mailCity";
$proto59["m_columns"][] = "powerAddress";
$proto59["m_columns"][] = "powerOwnershipType";
$proto59["m_columns"][] = "powerPostalCode";
$proto59["m_columns"][] = "powerArea";
$proto59["m_columns"][] = "powerCity";
$proto59["m_columns"][] = "powerAgreedKw";
$proto59["m_columns"][] = "powerSupplyNumber";
$proto59["m_columns"][] = "powerMeterNumber";
$proto59["m_columns"][] = "powerCurrentSupplier";
$proto59["m_columns"][] = "powerCurrentDayMeter";
$proto59["m_columns"][] = "powerCurrentNightMeter";
$proto59["m_columns"][] = "powerActivationStatus";
$proto59["m_columns"][] = "voltonPlan";
$proto59["m_columns"][] = "voltonContractDuration";
$proto59["m_columns"][] = "voltonWarrantyAmount";
$proto59["m_columns"][] = "voltonWarrantyOnFirstBill";
$proto59["m_columns"][] = "voltonOther";
$proto59["m_columns"][] = "voltonComments";
$proto59["m_columns"][] = "voltonAutoPayment";
$proto59["m_columns"][] = "document1";
$proto59["m_columns"][] = "document2";
$proto59["m_columns"][] = "document3";
$proto59["m_columns"][] = "document4";
$proto59["m_columns"][] = "document5";
$proto59["m_columns"][] = "document6";
$proto59["m_columns"][] = "document7";
$proto59["m_columns"][] = "document8";
$proto59["m_columns"][] = "document9";
$proto59["m_columns"][] = "document10";
$proto59["m_columns"][] = "document11";
$proto59["m_columns"][] = "document12";
$proto59["m_columns"][] = "document13";
$proto59["m_columns"][] = "document14";
$proto59["m_columns"][] = "document15";
$proto59["m_columns"][] = "ngAddress";
$proto59["m_columns"][] = "ngPostalCode";
$proto59["m_columns"][] = "ngArea";
$proto59["m_columns"][] = "ngCity";
$proto59["m_columns"][] = "ngPressure";
$proto59["m_columns"][] = "ngHourlyCapacity";
$proto59["m_columns"][] = "ngHkasp";
$proto59["m_columns"][] = "ngMeterNumber";
$proto59["m_columns"][] = "ngMeterType";
$proto59["m_columns"][] = "ngCurrentMeterValue";
$proto59["m_columns"][] = "ngConnectionExists";
$proto59["m_columns"][] = "ngSupplyIsNew";
$proto59["m_columns"][] = "ngSupplyReactivation";
$proto59["m_columns"][] = "applicationAgentStatus";
$proto59["m_columns"][] = "applicationLastStatusDate";
$proto59["m_columns"][] = "applicationContactMethod";
$proto59["m_columns"][] = "applicationCourier";
$proto59["m_columns"][] = "applicationCourierDate";
$proto59["m_columns"][] = "applicationCourrierTimeFrom";
$proto59["m_columns"][] = "applicationCourierTimeTo";
$proto59["m_columns"][] = "applicationCourrierComments";
$proto59["m_columns"][] = "dialerAgent";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "voltonApplications";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "CallsTimeSummaryReport";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto47["m_fromlist"][]=$obj;
$proto47["m_groupby"] = array();
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto47["m_groupby"][]=$obj;
$proto47["m_orderby"] = array();
$proto47["m_srcTableName"]="CallsTimeSummaryReport";		
$obj = new SQLQuery($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "left join (select callid, count(1) as appsCount   		   from voltonApplications group by callid) as callAppsCount on callAppsCount.callid = c.id";
$proto46["m_alias"] = "callAppsCount";
$proto46["m_srcTableName"] = "CallsTimeSummaryReport";
$proto64=array();
$proto64["m_sql"] = "callAppsCount.callid = c.id";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "callAppsCount",
	"m_srcTableName" => "CallsTimeSummaryReport"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= c.id";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="CallsTimeSummaryReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callstimesummaryreport = createSqlQuery_callstimesummaryreport();


	
		;

											

$tdatacallstimesummaryreport[".sqlquery"] = $queryData_callstimesummaryreport;



$tableEvents["CallsTimeSummaryReport"] = new eventsBase;
$tdatacallstimesummaryreport[".hasEvents"] = false;

?>