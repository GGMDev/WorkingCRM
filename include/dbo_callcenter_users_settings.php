<?php
$tdatadbo_callcenter_users = array();
$tdatadbo_callcenter_users[".searchableFields"] = array();
$tdatadbo_callcenter_users[".ShortName"] = "dbo_callcenter_users";
$tdatadbo_callcenter_users[".OwnerID"] = "";
$tdatadbo_callcenter_users[".OriginalTable"] = "dbo.CallCenter_users";


$tdatadbo_callcenter_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadbo_callcenter_users[".originalPagesByType"] = $tdatadbo_callcenter_users[".pagesByType"];
$tdatadbo_callcenter_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadbo_callcenter_users[".originalPages"] = $tdatadbo_callcenter_users[".pages"];
$tdatadbo_callcenter_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadbo_callcenter_users[".originalDefaultPages"] = $tdatadbo_callcenter_users[".defaultPages"];

//	field labels
$fieldLabelsdbo_callcenter_users = array();
$fieldToolTipsdbo_callcenter_users = array();
$pageTitlesdbo_callcenter_users = array();
$placeHoldersdbo_callcenter_users = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_callcenter_users["Greek"] = array();
	$fieldToolTipsdbo_callcenter_users["Greek"] = array();
	$placeHoldersdbo_callcenter_users["Greek"] = array();
	$pageTitlesdbo_callcenter_users["Greek"] = array();
	$fieldLabelsdbo_callcenter_users["Greek"]["ID"] = "ID";
	$fieldToolTipsdbo_callcenter_users["Greek"]["ID"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["ID"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["username"] = "Username";
	$fieldToolTipsdbo_callcenter_users["Greek"]["username"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["username"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["password"] = "Password";
	$fieldToolTipsdbo_callcenter_users["Greek"]["password"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["password"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["email"] = "Email";
	$fieldToolTipsdbo_callcenter_users["Greek"]["email"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["email"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["fullname"] = "Fullname";
	$fieldToolTipsdbo_callcenter_users["Greek"]["fullname"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["fullname"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["groupid"] = "Groupid";
	$fieldToolTipsdbo_callcenter_users["Greek"]["groupid"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["groupid"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["active"] = "Active";
	$fieldToolTipsdbo_callcenter_users["Greek"]["active"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["active"] = "";
	$fieldLabelsdbo_callcenter_users["Greek"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsdbo_callcenter_users["Greek"]["ext_security_id"] = "";
	$placeHoldersdbo_callcenter_users["Greek"]["ext_security_id"] = "";
	if (count($fieldToolTipsdbo_callcenter_users["Greek"]))
		$tdatadbo_callcenter_users[".isUseToolTips"] = true;
}


	$tdatadbo_callcenter_users[".NCSearch"] = true;



$tdatadbo_callcenter_users[".shortTableName"] = "dbo_callcenter_users";
$tdatadbo_callcenter_users[".nSecOptions"] = 0;

$tdatadbo_callcenter_users[".mainTableOwnerID"] = "";
$tdatadbo_callcenter_users[".entityType"] = 0;
$tdatadbo_callcenter_users[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_callcenter_users[".strOriginalTableName"] = "dbo.CallCenter_users";

	



$tdatadbo_callcenter_users[".showAddInPopup"] = false;

$tdatadbo_callcenter_users[".showEditInPopup"] = false;

$tdatadbo_callcenter_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_callcenter_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_callcenter_users[".listAjax"] = false;
//	temporary
$tdatadbo_callcenter_users[".listAjax"] = false;

	$tdatadbo_callcenter_users[".audit"] = true;

	$tdatadbo_callcenter_users[".locking"] = false;


$pages = $tdatadbo_callcenter_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_callcenter_users[".edit"] = true;
	$tdatadbo_callcenter_users[".afterEditAction"] = 1;
	$tdatadbo_callcenter_users[".closePopupAfterEdit"] = 1;
	$tdatadbo_callcenter_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_callcenter_users[".add"] = true;
$tdatadbo_callcenter_users[".afterAddAction"] = 0;
$tdatadbo_callcenter_users[".closePopupAfterAdd"] = 1;
$tdatadbo_callcenter_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_callcenter_users[".list"] = true;
}



$tdatadbo_callcenter_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_callcenter_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_callcenter_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_callcenter_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_callcenter_users[".printFriendly"] = true;
}



$tdatadbo_callcenter_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_callcenter_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_callcenter_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_callcenter_users[".isUseAjaxSuggest"] = false;

$tdatadbo_callcenter_users[".rowHighlite"] = true;



																																																																																																																											

$tdatadbo_callcenter_users[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_callcenter_users[".buttonsAdded"] = false;

$tdatadbo_callcenter_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_callcenter_users[".isUseTimeForSearch"] = false;


$tdatadbo_callcenter_users[".badgeColor"] = "2F4F4F";


$tdatadbo_callcenter_users[".allSearchFields"] = array();
$tdatadbo_callcenter_users[".filterFields"] = array();
$tdatadbo_callcenter_users[".requiredSearchFields"] = array();

$tdatadbo_callcenter_users[".googleLikeFields"] = array();
$tdatadbo_callcenter_users[".googleLikeFields"][] = "ID";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "username";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "password";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "email";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "fullname";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "groupid";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "active";
$tdatadbo_callcenter_users[".googleLikeFields"][] = "ext_security_id";



$tdatadbo_callcenter_users[".tableType"] = "list";

$tdatadbo_callcenter_users[".printerPageOrientation"] = 0;
$tdatadbo_callcenter_users[".nPrinterPageScale"] = 100;

$tdatadbo_callcenter_users[".nPrinterSplitRecords"] = 40;

$tdatadbo_callcenter_users[".geocodingEnabled"] = false;






$tdatadbo_callcenter_users[".searchIsRequiredForFilters"] = true;

$tdatadbo_callcenter_users[".noRecordsFirstPage"] = true;



$tdatadbo_callcenter_users[".pageSize"] = 20;

$tdatadbo_callcenter_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_callcenter_users[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_callcenter_users[".orderindexes"] = array();


$tdatadbo_callcenter_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdatadbo_callcenter_users[".sqlFrom"] = "FROM dbo.CallCenter_users";
$tdatadbo_callcenter_users[".sqlWhereExpr"] = "";
$tdatadbo_callcenter_users[".sqlTail"] = "";

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
$tdatadbo_callcenter_users[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_callcenter_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_callcenter_users[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_callcenter_users[".highlightSearchResults"] = true;

$tableKeysdbo_callcenter_users = array();
$tableKeysdbo_callcenter_users[] = "ID";
$tdatadbo_callcenter_users[".Keys"] = $tableKeysdbo_callcenter_users;


$tdatadbo_callcenter_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatadbo_callcenter_users["ID"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadbo_callcenter_users["username"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadbo_callcenter_users["password"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadbo_callcenter_users["email"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadbo_callcenter_users["fullname"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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
	$edata["LookupTable"] = "dbo.callcenter_uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Label";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatadbo_callcenter_users["groupid"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","active");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatadbo_callcenter_users["active"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "dbo.CallCenter_users";
	$fdata["Label"] = GetFieldLabel("dbo_CallCenter_users","ext_security_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadbo_callcenter_users["ext_security_id"] = $fdata;
		$tdatadbo_callcenter_users[".searchableFields"][] = "ext_security_id";


$tables_data["dbo.CallCenter_users"]=&$tdatadbo_callcenter_users;
$field_labels["dbo_CallCenter_users"] = &$fieldLabelsdbo_callcenter_users;
$fieldToolTips["dbo_CallCenter_users"] = &$fieldToolTipsdbo_callcenter_users;
$placeHolders["dbo_CallCenter_users"] = &$placeHoldersdbo_callcenter_users;
$page_titles["dbo_CallCenter_users"] = &$pageTitlesdbo_callcenter_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.CallCenter_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CallCenter_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_callcenter_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM dbo.CallCenter_users";
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
	"m_strName" => "ID",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "dbo.CallCenter_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "dbo.CallCenter_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "dbo.CallCenter_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "dbo.CallCenter_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "dbo.CallCenter_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "dbo.CallCenter_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "dbo.CallCenter_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "dbo.CallCenter_users",
	"m_srcTableName" => "dbo.CallCenter_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "dbo.CallCenter_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.CallCenter_users";
$proto23["m_srcTableName"] = "dbo.CallCenter_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.CallCenter_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.CallCenter_users";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.CallCenter_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_callcenter_users = createSqlQuery_dbo_callcenter_users();


	
		;

								

$tdatadbo_callcenter_users[".sqlquery"] = $queryData_dbo_callcenter_users;



$tableEvents["dbo.CallCenter_users"] = new eventsBase;
$tdatadbo_callcenter_users[".hasEvents"] = false;

?>