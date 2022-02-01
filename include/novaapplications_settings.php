<?php
$tdatanovaapplications = array();
$tdatanovaapplications[".searchableFields"] = array();
$tdatanovaapplications[".ShortName"] = "novaapplications";
$tdatanovaapplications[".OwnerID"] = "";
$tdatanovaapplications[".OriginalTable"] = "dbo.novaApplications";


$tdatanovaapplications[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanovaapplications[".originalPagesByType"] = $tdatanovaapplications[".pagesByType"];
$tdatanovaapplications[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanovaapplications[".originalPages"] = $tdatanovaapplications[".pages"];
$tdatanovaapplications[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanovaapplications[".originalDefaultPages"] = $tdatanovaapplications[".defaultPages"];

//	field labels
$fieldLabelsnovaapplications = array();
$fieldToolTipsnovaapplications = array();
$pageTitlesnovaapplications = array();
$placeHoldersnovaapplications = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsnovaapplications["Greek"] = array();
	$fieldToolTipsnovaapplications["Greek"] = array();
	$placeHoldersnovaapplications["Greek"] = array();
	$pageTitlesnovaapplications["Greek"] = array();
	$fieldLabelsnovaapplications["Greek"]["callid"] = "Callid";
	$fieldToolTipsnovaapplications["Greek"]["callid"] = "";
	$placeHoldersnovaapplications["Greek"]["callid"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationStatusId"] = "Κατάσταση Αίτησης";
	$fieldToolTipsnovaapplications["Greek"]["applicationStatusId"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationStatusId"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationType"] = "Η Αίτηση Αφορά";
	$fieldToolTipsnovaapplications["Greek"]["applicationType"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationType"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantName"] = "Επώνυμο/Επωνυμία";
	$fieldToolTipsnovaapplications["Greek"]["applicantName"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantName"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantFirstName"] = "Όνομα";
	$fieldToolTipsnovaapplications["Greek"]["applicantFirstName"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantFirstName"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantBirthdate"] = "Ημ/νία Γέννησης";
	$fieldToolTipsnovaapplications["Greek"]["applicantBirthdate"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantBirthdate"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantProfession"] = "Επάγγελμα";
	$fieldToolTipsnovaapplications["Greek"]["applicantProfession"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantProfession"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantIdNumber"] = "ΑΔΤ / Διαβατηρίου";
	$fieldToolTipsnovaapplications["Greek"]["applicantIdNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantIdNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantAddress"] = "Διεύθυνση";
	$fieldToolTipsnovaapplications["Greek"]["applicantAddress"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantAddress"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantPostalCode"] = "Ταχ. Κωδ.";
	$fieldToolTipsnovaapplications["Greek"]["applicantPostalCode"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantPostalCode"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantArea"] = "Περιοχή";
	$fieldToolTipsnovaapplications["Greek"]["applicantArea"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantArea"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantCity"] = "Πόλη";
	$fieldToolTipsnovaapplications["Greek"]["applicantCity"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantCity"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantTaxRegistrationNumber"] = "ΑΦΜ";
	$fieldToolTipsnovaapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantTaxOffice"] = "ΔΟΥ";
	$fieldToolTipsnovaapplications["Greek"]["applicantTaxOffice"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantTaxOffice"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantPhone"] = "Σταθερό Τηλ.";
	$fieldToolTipsnovaapplications["Greek"]["applicantPhone"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantPhone"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantMobile"] = "Κινητό";
	$fieldToolTipsnovaapplications["Greek"]["applicantMobile"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantMobile"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicantEmail"] = "Email";
	$fieldToolTipsnovaapplications["Greek"]["applicantEmail"] = "";
	$placeHoldersnovaapplications["Greek"]["applicantEmail"] = "";
	$fieldLabelsnovaapplications["Greek"]["standAloneProgram"] = "Πρόγραμμα StandAlone";
	$fieldToolTipsnovaapplications["Greek"]["standAloneProgram"] = "";
	$placeHoldersnovaapplications["Greek"]["standAloneProgram"] = "";
	$fieldLabelsnovaapplications["Greek"]["doublePlayProgram"] = "Double Play";
	$fieldToolTipsnovaapplications["Greek"]["doublePlayProgram"] = "";
	$placeHoldersnovaapplications["Greek"]["doublePlayProgram"] = "";
	$fieldLabelsnovaapplications["Greek"]["triplePlayProgram"] = "Triple Play";
	$fieldToolTipsnovaapplications["Greek"]["triplePlayProgram"] = "";
	$placeHoldersnovaapplications["Greek"]["triplePlayProgram"] = "";
	$fieldLabelsnovaapplications["Greek"]["triplePlayProgramType"] = "3Play Πρόγραμμα";
	$fieldToolTipsnovaapplications["Greek"]["triplePlayProgramType"] = "";
	$placeHoldersnovaapplications["Greek"]["triplePlayProgramType"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceInternet"] = "Internet Έως";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceInternet"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceInternet"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceInternetSpeed"] = "Ταχύτητα Πρόσθετης Υπηρεσίας Internet";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceInternetSpeed"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceInternetSpeed"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceInternationalCalls"] = "Nova Διεθνείς Κλήσεις";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceInternationalCalls"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceInternationalCalls"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceStaticIp"] = "Static IP";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceStaticIp"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceStaticIp"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceStaticBlock8Ip"] = "Block 8 static IPs";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceStaticBlock8Ip"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceStaticBlock8Ip"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceSecondLine"] = "Δεύτερη Γραμμή";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceSecondLine"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceSecondLine"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceLandLine1000Minutes"] = "1000' Προς Σταθερά ";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceLandLine1000Minutes"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceLandLine1000Minutes"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceEquipment"] = "Εξοπλισμός";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceEquipment"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceEquipment"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceEquipmentInstallation"] = "Εγκατάσταση Εξοπλισμού ";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceEquipmentInstallation"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceEquipmentInstallation"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityIsNewLine"] = "Νέα Γραμμή / Φορητότητα";
	$fieldToolTipsnovaapplications["Greek"]["portabilityIsNewLine"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityIsNewLine"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityOldNumber"] = "Υφιστάμενος Αριθμός";
	$fieldToolTipsnovaapplications["Greek"]["portabilityOldNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityOldNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityOldOwner"] = "Υφιστάμενος Κάτοχος";
	$fieldToolTipsnovaapplications["Greek"]["portabilityOldOwner"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityOldOwner"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityActivationAddress"] = "Διεύθυνση";
	$fieldToolTipsnovaapplications["Greek"]["portabilityActivationAddress"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityActivationAddress"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityActivationPostalCode"] = "Ταχ. Κωδ.";
	$fieldToolTipsnovaapplications["Greek"]["portabilityActivationPostalCode"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityActivationPostalCode"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityActivationArea"] = "Περιοχή";
	$fieldToolTipsnovaapplications["Greek"]["portabilityActivationArea"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityActivationArea"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityActivationCity"] = "Πόλη";
	$fieldToolTipsnovaapplications["Greek"]["portabilityActivationCity"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityActivationCity"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityPstnIsdn"] = "Τύπος Γραμμής";
	$fieldToolTipsnovaapplications["Greek"]["portabilityPstnIsdn"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityPstnIsdn"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityLine1PhoneNumber"] = "Αρ. Κύριας Γραμμής";
	$fieldToolTipsnovaapplications["Greek"]["portabilityLine1PhoneNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityLine1PhoneNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityLine2PhoneNumber"] = "Αρ. 2ης Γραμμής";
	$fieldToolTipsnovaapplications["Greek"]["portabilityLine2PhoneNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityLine2PhoneNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityLine3PhoneNumber"] = "Αρ. 3ης Γραμμής";
	$fieldToolTipsnovaapplications["Greek"]["portabilityLine3PhoneNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityLine3PhoneNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityLine4PhoneNumber"] = "Αρ. 4ης Γραμμής";
	$fieldToolTipsnovaapplications["Greek"]["portabilityLine4PhoneNumber"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityLine4PhoneNumber"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityUsername1"] = "Επιθυμητό username 1";
	$fieldToolTipsnovaapplications["Greek"]["portabilityUsername1"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityUsername1"] = "";
	$fieldLabelsnovaapplications["Greek"]["portabilityusername2"] = "Επιθυμητό username 2";
	$fieldToolTipsnovaapplications["Greek"]["portabilityusername2"] = "";
	$placeHoldersnovaapplications["Greek"]["portabilityusername2"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentIdPassport"] = "Ταυτότητα/Διαβατήριο";
	$fieldToolTipsnovaapplications["Greek"]["documentIdPassport"] = "";
	$placeHoldersnovaapplications["Greek"]["documentIdPassport"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentIdPassportPreviousOwner"] = "ΑΔΤ/Διαβατήριο Πρ. Κατόχου";
	$fieldToolTipsnovaapplications["Greek"]["documentIdPassportPreviousOwner"] = "";
	$placeHoldersnovaapplications["Greek"]["documentIdPassportPreviousOwner"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentLastBill"] = "Τελευταίος Λογαριασμός";
	$fieldToolTipsnovaapplications["Greek"]["documentLastBill"] = "";
	$placeHoldersnovaapplications["Greek"]["documentLastBill"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentAddressValidation"] = "Λογαριασμός ΔΕΚΟ";
	$fieldToolTipsnovaapplications["Greek"]["documentAddressValidation"] = "";
	$placeHoldersnovaapplications["Greek"]["documentAddressValidation"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentDeathCertificate"] = "Ληξιαρχική Πράξη Θανάτου";
	$fieldToolTipsnovaapplications["Greek"]["documentDeathCertificate"] = "";
	$placeHoldersnovaapplications["Greek"]["documentDeathCertificate"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentAuthorization"] = "Εξουσιοδότηση";
	$fieldToolTipsnovaapplications["Greek"]["documentAuthorization"] = "";
	$placeHoldersnovaapplications["Greek"]["documentAuthorization"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentOther"] = "Άλλο";
	$fieldToolTipsnovaapplications["Greek"]["documentOther"] = "";
	$placeHoldersnovaapplications["Greek"]["documentOther"] = "";
	$fieldLabelsnovaapplications["Greek"]["documentOtherType"] = "Άλλο Έγγραφο";
	$fieldToolTipsnovaapplications["Greek"]["documentOtherType"] = "";
	$placeHoldersnovaapplications["Greek"]["documentOtherType"] = "";
	$fieldLabelsnovaapplications["Greek"]["id"] = "Id";
	$fieldToolTipsnovaapplications["Greek"]["id"] = "";
	$placeHoldersnovaapplications["Greek"]["id"] = "";
	$fieldLabelsnovaapplications["Greek"]["ProgramSpeed"] = "Ταχύτητα 2/3Play";
	$fieldToolTipsnovaapplications["Greek"]["ProgramSpeed"] = "";
	$placeHoldersnovaapplications["Greek"]["ProgramSpeed"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationAgentStatus"] = "Κατάσταση Αίτησης (Agent)";
	$fieldToolTipsnovaapplications["Greek"]["applicationAgentStatus"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationAgentStatus"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationLastStatusDate"] = "Application Last Status Date";
	$fieldToolTipsnovaapplications["Greek"]["applicationLastStatusDate"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationLastStatusDate"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationContactMethod"] = "Τρόπος Παραλαβής";
	$fieldToolTipsnovaapplications["Greek"]["applicationContactMethod"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationContactMethod"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationCourier"] = "Courier";
	$fieldToolTipsnovaapplications["Greek"]["applicationCourier"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationCourier"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationCourierDate"] = "Ημερομηνία Ραντεβού";
	$fieldToolTipsnovaapplications["Greek"]["applicationCourierDate"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationCourierDate"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationCourierTimeFrom"] = "Application Courier Time From";
	$fieldToolTipsnovaapplications["Greek"]["applicationCourierTimeFrom"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationCourierTimeFrom"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationCourierTimeTo"] = "Application Courier Time To";
	$fieldToolTipsnovaapplications["Greek"]["applicationCourierTimeTo"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationCourierTimeTo"] = "";
	$fieldLabelsnovaapplications["Greek"]["applicationCourierComments"] = "Σχόλια για Courier";
	$fieldToolTipsnovaapplications["Greek"]["applicationCourierComments"] = "";
	$placeHoldersnovaapplications["Greek"]["applicationCourierComments"] = "";
	$fieldLabelsnovaapplications["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsnovaapplications["Greek"]["dialerAgent"] = "";
	$placeHoldersnovaapplications["Greek"]["dialerAgent"] = "";
	$fieldLabelsnovaapplications["Greek"]["adittionalServiceMobileNoLimit"] = "Mobile No Limit";
	$fieldToolTipsnovaapplications["Greek"]["adittionalServiceMobileNoLimit"] = "";
	$placeHoldersnovaapplications["Greek"]["adittionalServiceMobileNoLimit"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceEONMultiScreen"] = "EON Multi Screen";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceEONMultiScreen"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceEONMultiScreen"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceNovaMultiroom"] = "Nova Multiroom";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceNovaMultiroom"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceNovaMultiroom"] = "";
	$fieldLabelsnovaapplications["Greek"]["additionalServiceAdultPack"] = "Adult Pack";
	$fieldToolTipsnovaapplications["Greek"]["additionalServiceAdultPack"] = "";
	$placeHoldersnovaapplications["Greek"]["additionalServiceAdultPack"] = "";
	if (count($fieldToolTipsnovaapplications["Greek"]))
		$tdatanovaapplications[".isUseToolTips"] = true;
}


	$tdatanovaapplications[".NCSearch"] = true;



$tdatanovaapplications[".shortTableName"] = "novaapplications";
$tdatanovaapplications[".nSecOptions"] = 0;

$tdatanovaapplications[".mainTableOwnerID"] = "";
$tdatanovaapplications[".entityType"] = 0;
$tdatanovaapplications[".connId"] = "CallCenter_at_10_41_2_31";


$tdatanovaapplications[".strOriginalTableName"] = "dbo.novaApplications";

	



$tdatanovaapplications[".showAddInPopup"] = false;

$tdatanovaapplications[".showEditInPopup"] = false;

$tdatanovaapplications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanovaapplications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanovaapplications[".listAjax"] = false;
//	temporary
$tdatanovaapplications[".listAjax"] = false;

	$tdatanovaapplications[".audit"] = true;

	$tdatanovaapplications[".locking"] = false;


$pages = $tdatanovaapplications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanovaapplications[".edit"] = true;
	$tdatanovaapplications[".afterEditAction"] = 1;
	$tdatanovaapplications[".closePopupAfterEdit"] = 1;
	$tdatanovaapplications[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatanovaapplications[".add"] = true;
$tdatanovaapplications[".afterAddAction"] = 0;
$tdatanovaapplications[".closePopupAfterAdd"] = 1;
$tdatanovaapplications[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanovaapplications[".list"] = true;
}



$tdatanovaapplications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanovaapplications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanovaapplications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanovaapplications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanovaapplications[".printFriendly"] = true;
}



$tdatanovaapplications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanovaapplications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanovaapplications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanovaapplications[".isUseAjaxSuggest"] = false;

$tdatanovaapplications[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																	

$tdatanovaapplications[".ajaxCodeSnippetAdded"] = false;

$tdatanovaapplications[".buttonsAdded"] = false;

$tdatanovaapplications[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanovaapplications[".isUseTimeForSearch"] = false;


$tdatanovaapplications[".badgeColor"] = "b22222";


$tdatanovaapplications[".allSearchFields"] = array();
$tdatanovaapplications[".filterFields"] = array();
$tdatanovaapplications[".requiredSearchFields"] = array();

$tdatanovaapplications[".googleLikeFields"] = array();
$tdatanovaapplications[".googleLikeFields"][] = "applicationStatusId";
$tdatanovaapplications[".googleLikeFields"][] = "applicationType";
$tdatanovaapplications[".googleLikeFields"][] = "applicantName";
$tdatanovaapplications[".googleLikeFields"][] = "applicantIdNumber";
$tdatanovaapplications[".googleLikeFields"][] = "applicantAddress";
$tdatanovaapplications[".googleLikeFields"][] = "applicantPostalCode";
$tdatanovaapplications[".googleLikeFields"][] = "applicantArea";
$tdatanovaapplications[".googleLikeFields"][] = "applicantCity";
$tdatanovaapplications[".googleLikeFields"][] = "applicantTaxRegistrationNumber";
$tdatanovaapplications[".googleLikeFields"][] = "applicantPhone";
$tdatanovaapplications[".googleLikeFields"][] = "applicantMobile";
$tdatanovaapplications[".googleLikeFields"][] = "applicantEmail";
$tdatanovaapplications[".googleLikeFields"][] = "portabilityOldNumber";
$tdatanovaapplications[".googleLikeFields"][] = "applicationAgentStatus";
$tdatanovaapplications[".googleLikeFields"][] = "applicationLastStatusDate";
$tdatanovaapplications[".googleLikeFields"][] = "applicationContactMethod";
$tdatanovaapplications[".googleLikeFields"][] = "applicationCourier";
$tdatanovaapplications[".googleLikeFields"][] = "applicationCourierDate";
$tdatanovaapplications[".googleLikeFields"][] = "applicationCourierTimeFrom";
$tdatanovaapplications[".googleLikeFields"][] = "applicationCourierTimeTo";
$tdatanovaapplications[".googleLikeFields"][] = "applicationCourierComments";
$tdatanovaapplications[".googleLikeFields"][] = "dialerAgent";
$tdatanovaapplications[".googleLikeFields"][] = "adittionalServiceMobileNoLimit";
$tdatanovaapplications[".googleLikeFields"][] = "additionalServiceEONMultiScreen";
$tdatanovaapplications[".googleLikeFields"][] = "additionalServiceNovaMultiroom";
$tdatanovaapplications[".googleLikeFields"][] = "additionalServiceAdultPack";



$tdatanovaapplications[".tableType"] = "list";

$tdatanovaapplications[".printerPageOrientation"] = 0;
$tdatanovaapplications[".nPrinterPageScale"] = 100;

$tdatanovaapplications[".nPrinterSplitRecords"] = 40;

$tdatanovaapplications[".geocodingEnabled"] = false;






$tdatanovaapplications[".searchIsRequiredForFilters"] = true;

$tdatanovaapplications[".noRecordsFirstPage"] = true;



$tdatanovaapplications[".pageSize"] = 20;

$tdatanovaapplications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanovaapplications[".strOrderBy"] = $tstrOrderBy;

$tdatanovaapplications[".orderindexes"] = array();


$tdatanovaapplications[".sqlHead"] = "SELECT id,  	callid,  	applicationStatusId,  	applicationType,  	applicantName,  	applicantFirstName,  	applicantBirthdate,  	applicantProfession,  	applicantIdNumber,  	applicantAddress,  	applicantPostalCode,  	applicantArea,  	applicantCity,  	applicantTaxRegistrationNumber,  	applicantTaxOffice,  	applicantPhone,  	applicantMobile,  	applicantEmail,  	standAloneProgram,  	doublePlayProgram,  	ProgramSpeed,  	triplePlayProgram,  	triplePlayProgramType,  	additionalServiceInternet,  	additionalServiceInternetSpeed,  	additionalServiceInternationalCalls,  	additionalServiceStaticIp,  	additionalServiceStaticBlock8Ip,  	additionalServiceSecondLine,  	additionalServiceLandLine1000Minutes,  	additionalServiceEquipment,  	additionalServiceEquipmentInstallation,  	portabilityIsNewLine,  	portabilityOldNumber,  	portabilityOldOwner,  	portabilityActivationAddress,  	portabilityActivationPostalCode,  	portabilityActivationArea,  	portabilityActivationCity,  	portabilityPstnIsdn,  	portabilityLine1PhoneNumber,  	portabilityLine2PhoneNumber,  	portabilityLine3PhoneNumber,  	portabilityLine4PhoneNumber,  	portabilityUsername1,  	portabilityusername2,  	documentIdPassport,  	documentIdPassportPreviousOwner,  	documentLastBill,  	documentAddressValidation,  	documentDeathCertificate,  	documentAuthorization,  	documentOther,  	documentOtherType,  	applicationAgentStatus,  	applicationLastStatusDate,  	applicationContactMethod,  	applicationCourier,  	applicationCourierDate,  	applicationCourierTimeFrom,  	applicationCourierTimeTo,  	applicationCourierComments,  	dialerAgent,  	adittionalServiceMobileNoLimit,  	additionalServiceEONMultiScreen,  	additionalServiceNovaMultiroom,  	additionalServiceAdultPack";
$tdatanovaapplications[".sqlFrom"] = "FROM dbo.novaApplications";
$tdatanovaapplications[".sqlWhereExpr"] = "";
$tdatanovaapplications[".sqlTail"] = "";

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
$tdatanovaapplications[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanovaapplications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanovaapplications[".arrGroupsPerPage"] = $arrGPP;

$tdatanovaapplications[".highlightSearchResults"] = true;

$tableKeysnovaapplications = array();
$tableKeysnovaapplications[] = "id";
$tdatanovaapplications[".Keys"] = $tableKeysnovaapplications;


$tdatanovaapplications[".hideMobileList"] = array();
		$tdatanovaapplications[".hideMobileList"][1] = array();
$tdatanovaapplications[".hideMobileList"][1]["additionalServiceInternet"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceInternetSpeed"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceInternationalCalls"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceStaticIp"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceStaticBlock8Ip"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceSecondLine"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceLandLine1000Minutes"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceEquipment"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["additionalServiceEquipmentInstallation"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityOldOwner"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityActivationAddress"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityActivationPostalCode"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityActivationArea"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityActivationCity"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityLine1PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityLine2PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityLine3PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityLine4PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityUsername1"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["portabilityusername2"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentIdPassport"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentIdPassportPreviousOwner"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentLastBill"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentAddressValidation"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentDeathCertificate"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentAuthorization"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentOther"] = true;
		$tdatanovaapplications[".hideMobileList"][1]["documentOtherType"] = true;
		$tdatanovaapplications[".hideMobileList"][5] = array();
$tdatanovaapplications[".hideMobileList"][5]["additionalServiceInternet"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceInternetSpeed"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceInternationalCalls"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceStaticIp"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceStaticBlock8Ip"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceSecondLine"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceLandLine1000Minutes"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceEquipment"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["additionalServiceEquipmentInstallation"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityOldOwner"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityActivationAddress"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityActivationPostalCode"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityActivationArea"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityActivationCity"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityLine1PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityLine2PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityLine3PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityLine4PhoneNumber"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityUsername1"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["portabilityusername2"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentIdPassport"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentIdPassportPreviousOwner"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentLastBill"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentAddressValidation"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentDeathCertificate"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentAuthorization"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentOther"] = true;
		$tdatanovaapplications[".hideMobileList"][5]["documentOtherType"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","id");
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


	$tdatanovaapplications["id"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","callid");
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


	$tdatanovaapplications["callid"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "callid";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationStatusId";

	
	
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


	$tdatanovaapplications["applicationStatusId"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationStatusId";
//	applicationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "applicationType";
	$fdata["GoodName"] = "applicationType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationType";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ΙΔΙΩΤΗ";
	$edata["LookupValues"][] = "ΕΤΑΙΡΙΑ";

	
	
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


	$tdatanovaapplications["applicationType"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationType";
//	applicantName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "applicantName";
	$fdata["GoodName"] = "applicantName";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantName"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantName";
//	applicantFirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "applicantFirstName";
	$fdata["GoodName"] = "applicantFirstName";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantFirstName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantFirstName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantFirstName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantFirstName"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantFirstName";
//	applicantBirthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "applicantBirthdate";
	$fdata["GoodName"] = "applicantBirthdate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantBirthdate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicantBirthdate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantBirthdate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 0;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatanovaapplications["applicantBirthdate"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantBirthdate";
//	applicantProfession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicantProfession";
	$fdata["GoodName"] = "applicantProfession";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantProfession");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantProfession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantProfession";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantProfession"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantProfession";
//	applicantIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicantIdNumber";
	$fdata["GoodName"] = "applicantIdNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantIdNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["applicantIdNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantIdNumber";
//	applicantAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "applicantAddress";
	$fdata["GoodName"] = "applicantAddress";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantAddress";

	
	
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


	$tdatanovaapplications["applicantAddress"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantAddress";
//	applicantPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicantPostalCode";
	$fdata["GoodName"] = "applicantPostalCode";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantPostalCode";

	
	
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
	$edata["LookupTable"] = "dbo.postalCodes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"applicantArea", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"applicantCity", 'lookupF'=>"city");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "postalCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "postalCode";

	

	
	$edata["LookupOrderBy"] = "postalCode";

	
	
	
	

	
	
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


	$tdatanovaapplications["applicantPostalCode"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantPostalCode";
//	applicantArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "applicantArea";
	$fdata["GoodName"] = "applicantArea";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantArea";

	
	
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


	$tdatanovaapplications["applicantArea"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantArea";
//	applicantCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "applicantCity";
	$fdata["GoodName"] = "applicantCity";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantCity";

	
	
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


	$tdatanovaapplications["applicantCity"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantCity";
//	applicantTaxRegistrationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "applicantTaxRegistrationNumber";
	$fdata["GoodName"] = "applicantTaxRegistrationNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantTaxRegistrationNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxRegistrationNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantTaxRegistrationNumber";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantTaxRegistrationNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantTaxRegistrationNumber";
//	applicantTaxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "applicantTaxOffice";
	$fdata["GoodName"] = "applicantTaxOffice";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantTaxOffice");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxOffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantTaxOffice";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantTaxOffice"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantTaxOffice";
//	applicantPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "applicantPhone";
	$fdata["GoodName"] = "applicantPhone";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantPhone";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantPhone"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantPhone";
//	applicantMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "applicantMobile";
	$fdata["GoodName"] = "applicantMobile";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantMobile";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["applicantMobile"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantMobile";
//	applicantEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "applicantEmail";
	$fdata["GoodName"] = "applicantEmail";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicantEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantEmail";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["applicantEmail"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicantEmail";
//	standAloneProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "standAloneProgram";
	$fdata["GoodName"] = "standAloneProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","standAloneProgram");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "standAloneProgram";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "standAloneProgram";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 160;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "EON";
	$edata["LookupValues"][] = "EON+";

		$edata["Multiselect"] = true;

	
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


	$tdatanovaapplications["standAloneProgram"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "standAloneProgram";
//	doublePlayProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "doublePlayProgram";
	$fdata["GoodName"] = "doublePlayProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","doublePlayProgram");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "doublePlayProgram";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doublePlayProgram";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "nova 2play";

		$edata["Multiselect"] = true;

	
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


	$tdatanovaapplications["doublePlayProgram"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "doublePlayProgram";
//	ProgramSpeed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ProgramSpeed";
	$fdata["GoodName"] = "ProgramSpeed";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","ProgramSpeed");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ProgramSpeed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProgramSpeed";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "24 mbps";
	$edata["LookupValues"][] = "50 mbps";
	$edata["LookupValues"][] = "100 mbps";

	
	
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


	$tdatanovaapplications["ProgramSpeed"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "ProgramSpeed";
//	triplePlayProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "triplePlayProgram";
	$fdata["GoodName"] = "triplePlayProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","triplePlayProgram");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "triplePlayProgram";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "triplePlayProgram";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "EON";
	$edata["LookupValues"][] = "EON+";

		$edata["Multiselect"] = true;

	
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


	$tdatanovaapplications["triplePlayProgram"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "triplePlayProgram";
//	triplePlayProgramType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "triplePlayProgramType";
	$fdata["GoodName"] = "triplePlayProgramType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","triplePlayProgramType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "triplePlayProgramType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "triplePlayProgramType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 160;

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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["triplePlayProgramType"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "triplePlayProgramType";
//	additionalServiceInternet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "additionalServiceInternet";
	$fdata["GoodName"] = "additionalServiceInternet";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceInternet");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceInternet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceInternet";

	
	
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


	$tdatanovaapplications["additionalServiceInternet"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceInternet";
//	additionalServiceInternetSpeed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "additionalServiceInternetSpeed";
	$fdata["GoodName"] = "additionalServiceInternetSpeed";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceInternetSpeed");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceInternetSpeed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceInternetSpeed";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "24 mbps";
	$edata["LookupValues"][] = "50 mbps";
	$edata["LookupValues"][] = "100 mbps";

	
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


	$tdatanovaapplications["additionalServiceInternetSpeed"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceInternetSpeed";
//	additionalServiceInternationalCalls
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "additionalServiceInternationalCalls";
	$fdata["GoodName"] = "additionalServiceInternationalCalls";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceInternationalCalls");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceInternationalCalls";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceInternationalCalls";

	
	
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


	$tdatanovaapplications["additionalServiceInternationalCalls"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceInternationalCalls";
//	additionalServiceStaticIp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "additionalServiceStaticIp";
	$fdata["GoodName"] = "additionalServiceStaticIp";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceStaticIp");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceStaticIp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceStaticIp";

	
	
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


	$tdatanovaapplications["additionalServiceStaticIp"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceStaticIp";
//	additionalServiceStaticBlock8Ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "additionalServiceStaticBlock8Ip";
	$fdata["GoodName"] = "additionalServiceStaticBlock8Ip";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceStaticBlock8Ip");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceStaticBlock8Ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceStaticBlock8Ip";

	
	
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


	$tdatanovaapplications["additionalServiceStaticBlock8Ip"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceStaticBlock8Ip";
//	additionalServiceSecondLine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "additionalServiceSecondLine";
	$fdata["GoodName"] = "additionalServiceSecondLine";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceSecondLine");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceSecondLine";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceSecondLine";

	
	
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


	$tdatanovaapplications["additionalServiceSecondLine"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceSecondLine";
//	additionalServiceLandLine1000Minutes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "additionalServiceLandLine1000Minutes";
	$fdata["GoodName"] = "additionalServiceLandLine1000Minutes";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceLandLine1000Minutes");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceLandLine1000Minutes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceLandLine1000Minutes";

	
	
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


	$tdatanovaapplications["additionalServiceLandLine1000Minutes"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceLandLine1000Minutes";
//	additionalServiceEquipment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "additionalServiceEquipment";
	$fdata["GoodName"] = "additionalServiceEquipment";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceEquipment");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceEquipment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceEquipment";

	
	
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


	$tdatanovaapplications["additionalServiceEquipment"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceEquipment";
//	additionalServiceEquipmentInstallation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "additionalServiceEquipmentInstallation";
	$fdata["GoodName"] = "additionalServiceEquipmentInstallation";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceEquipmentInstallation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceEquipmentInstallation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceEquipmentInstallation";

	
	
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


	$tdatanovaapplications["additionalServiceEquipmentInstallation"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceEquipmentInstallation";
//	portabilityIsNewLine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "portabilityIsNewLine";
	$fdata["GoodName"] = "portabilityIsNewLine";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityIsNewLine");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "portabilityIsNewLine";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityIsNewLine";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Φορητότητα";
	$edata["LookupValues"][] = "Νέα Γραμμή";

	
	
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


	$tdatanovaapplications["portabilityIsNewLine"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityIsNewLine";
//	portabilityOldNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "portabilityOldNumber";
	$fdata["GoodName"] = "portabilityOldNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityOldNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityOldNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityOldNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["portabilityOldNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityOldNumber";
//	portabilityOldOwner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "portabilityOldOwner";
	$fdata["GoodName"] = "portabilityOldOwner";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityOldOwner");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityOldOwner";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityOldOwner";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["portabilityOldOwner"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityOldOwner";
//	portabilityActivationAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "portabilityActivationAddress";
	$fdata["GoodName"] = "portabilityActivationAddress";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityActivationAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityActivationAddress";

	
	
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


	$tdatanovaapplications["portabilityActivationAddress"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityActivationAddress";
//	portabilityActivationPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "portabilityActivationPostalCode";
	$fdata["GoodName"] = "portabilityActivationPostalCode";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityActivationPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityActivationPostalCode";

	
	
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
	$edata["LookupTable"] = "dbo.postalCodes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"portabilityActivationArea", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"portabilityActivationCity", 'lookupF'=>"city");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "postalCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "postalCode";

	

	
	$edata["LookupOrderBy"] = "postalCode";

	
	
	
	

	
	
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


	$tdatanovaapplications["portabilityActivationPostalCode"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityActivationPostalCode";
//	portabilityActivationArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "portabilityActivationArea";
	$fdata["GoodName"] = "portabilityActivationArea";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityActivationArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityActivationArea";

	
	
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


	$tdatanovaapplications["portabilityActivationArea"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityActivationArea";
//	portabilityActivationCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "portabilityActivationCity";
	$fdata["GoodName"] = "portabilityActivationCity";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityActivationCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityActivationCity";

	
	
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


	$tdatanovaapplications["portabilityActivationCity"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityActivationCity";
//	portabilityPstnIsdn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "portabilityPstnIsdn";
	$fdata["GoodName"] = "portabilityPstnIsdn";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityPstnIsdn");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "portabilityPstnIsdn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityPstnIsdn";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PSTN";
	$edata["LookupValues"][] = "ISDN";

	
	
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


	$tdatanovaapplications["portabilityPstnIsdn"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityPstnIsdn";
//	portabilityLine1PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "portabilityLine1PhoneNumber";
	$fdata["GoodName"] = "portabilityLine1PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityLine1PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine1PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityLine1PhoneNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["portabilityLine1PhoneNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityLine1PhoneNumber";
//	portabilityLine2PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "portabilityLine2PhoneNumber";
	$fdata["GoodName"] = "portabilityLine2PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityLine2PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine2PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityLine2PhoneNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["portabilityLine2PhoneNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityLine2PhoneNumber";
//	portabilityLine3PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "portabilityLine3PhoneNumber";
	$fdata["GoodName"] = "portabilityLine3PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityLine3PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine3PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityLine3PhoneNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["portabilityLine3PhoneNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityLine3PhoneNumber";
//	portabilityLine4PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "portabilityLine4PhoneNumber";
	$fdata["GoodName"] = "portabilityLine4PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityLine4PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine4PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityLine4PhoneNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatanovaapplications["portabilityLine4PhoneNumber"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityLine4PhoneNumber";
//	portabilityUsername1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "portabilityUsername1";
	$fdata["GoodName"] = "portabilityUsername1";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityUsername1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityUsername1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityUsername1";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["portabilityUsername1"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityUsername1";
//	portabilityusername2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "portabilityusername2";
	$fdata["GoodName"] = "portabilityusername2";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","portabilityusername2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityusername2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "portabilityusername2";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["portabilityusername2"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "portabilityusername2";
//	documentIdPassport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "documentIdPassport";
	$fdata["GoodName"] = "documentIdPassport";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentIdPassport");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentIdPassport";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentIdPassport";

	
	
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


	$tdatanovaapplications["documentIdPassport"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentIdPassport";
//	documentIdPassportPreviousOwner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "documentIdPassportPreviousOwner";
	$fdata["GoodName"] = "documentIdPassportPreviousOwner";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentIdPassportPreviousOwner");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentIdPassportPreviousOwner";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentIdPassportPreviousOwner";

	
	
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


	$tdatanovaapplications["documentIdPassportPreviousOwner"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentIdPassportPreviousOwner";
//	documentLastBill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "documentLastBill";
	$fdata["GoodName"] = "documentLastBill";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentLastBill");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentLastBill";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentLastBill";

	
	
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


	$tdatanovaapplications["documentLastBill"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentLastBill";
//	documentAddressValidation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "documentAddressValidation";
	$fdata["GoodName"] = "documentAddressValidation";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentAddressValidation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentAddressValidation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentAddressValidation";

	
	
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


	$tdatanovaapplications["documentAddressValidation"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentAddressValidation";
//	documentDeathCertificate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "documentDeathCertificate";
	$fdata["GoodName"] = "documentDeathCertificate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentDeathCertificate");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentDeathCertificate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentDeathCertificate";

	
	
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


	$tdatanovaapplications["documentDeathCertificate"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentDeathCertificate";
//	documentAuthorization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "documentAuthorization";
	$fdata["GoodName"] = "documentAuthorization";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentAuthorization");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentAuthorization";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentAuthorization";

	
	
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


	$tdatanovaapplications["documentAuthorization"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentAuthorization";
//	documentOther
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "documentOther";
	$fdata["GoodName"] = "documentOther";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentOther");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentOther";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentOther";

	
	
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


	$tdatanovaapplications["documentOther"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentOther";
//	documentOtherType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "documentOtherType";
	$fdata["GoodName"] = "documentOtherType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","documentOtherType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "documentOtherType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentOtherType";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["documentOtherType"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "documentOtherType";
//	applicationAgentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "applicationAgentStatus";
	$fdata["GoodName"] = "applicationAgentStatus";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationAgentStatus");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationAgentStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationAgentStatus";

	
	
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "agentApplicationStatus";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatanovaapplications["applicationAgentStatus"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationAgentStatus";
//	applicationLastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "applicationLastStatusDate";
	$fdata["GoodName"] = "applicationLastStatusDate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationLastStatusDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicationLastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationLastStatusDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatanovaapplications["applicationLastStatusDate"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationLastStatusDate";
//	applicationContactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "applicationContactMethod";
	$fdata["GoodName"] = "applicationContactMethod";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationContactMethod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationContactMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationContactMethod";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
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

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.contactMethods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Method";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Method";

	

	
	$edata["LookupOrderBy"] = "Method";

	
	
	
	

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.contactMethods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Method";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Method";

	

	
	$edata["LookupOrderBy"] = "Method";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.contactMethods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Method";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Method";

	

	
	$edata["LookupOrderBy"] = "Method";

	
	
	
	

	
	
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


	$tdatanovaapplications["applicationContactMethod"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationContactMethod";
//	applicationCourier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "applicationCourier";
	$fdata["GoodName"] = "applicationCourier";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationCourier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourier";

	
	
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
	$edata["LookupTable"] = "dbo.courierCompanies";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "courier";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "courier";

	

	
	$edata["LookupOrderBy"] = "courier";

	
	
	
	

	
	
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


	$tdatanovaapplications["applicationCourier"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationCourier";
//	applicationCourierDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "applicationCourierDate";
	$fdata["GoodName"] = "applicationCourierDate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationCourierDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicationCourierDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourierDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatanovaapplications["applicationCourierDate"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationCourierDate";
//	applicationCourierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "applicationCourierTimeFrom";
	$fdata["GoodName"] = "applicationCourierTimeFrom";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationCourierTimeFrom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierTimeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourierTimeFrom";

	
	
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
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


	$tdatanovaapplications["applicationCourierTimeFrom"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationCourierTimeFrom";
//	applicationCourierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "applicationCourierTimeTo";
	$fdata["GoodName"] = "applicationCourierTimeTo";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationCourierTimeTo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierTimeTo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourierTimeTo";

	
	
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


		$edata["strEditMask"] = "99:99";

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
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


	$tdatanovaapplications["applicationCourierTimeTo"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationCourierTimeTo";
//	applicationCourierComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "applicationCourierComments";
	$fdata["GoodName"] = "applicationCourierComments";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","applicationCourierComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourierComments";

	
	
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


	$tdatanovaapplications["applicationCourierComments"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "applicationCourierComments";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","dialerAgent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dialerAgent";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatanovaapplications["dialerAgent"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "dialerAgent";
//	adittionalServiceMobileNoLimit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "adittionalServiceMobileNoLimit";
	$fdata["GoodName"] = "adittionalServiceMobileNoLimit";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","adittionalServiceMobileNoLimit");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "adittionalServiceMobileNoLimit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adittionalServiceMobileNoLimit";

	
	
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


	$tdatanovaapplications["adittionalServiceMobileNoLimit"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "adittionalServiceMobileNoLimit";
//	additionalServiceEONMultiScreen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "additionalServiceEONMultiScreen";
	$fdata["GoodName"] = "additionalServiceEONMultiScreen";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceEONMultiScreen");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceEONMultiScreen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceEONMultiScreen";

	
	
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


	$tdatanovaapplications["additionalServiceEONMultiScreen"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceEONMultiScreen";
//	additionalServiceNovaMultiroom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "additionalServiceNovaMultiroom";
	$fdata["GoodName"] = "additionalServiceNovaMultiroom";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceNovaMultiroom");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceNovaMultiroom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceNovaMultiroom";

	
	
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


	$tdatanovaapplications["additionalServiceNovaMultiroom"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceNovaMultiroom";
//	additionalServiceAdultPack
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "additionalServiceAdultPack";
	$fdata["GoodName"] = "additionalServiceAdultPack";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplications","additionalServiceAdultPack");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceAdultPack";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServiceAdultPack";

	
	
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


	$tdatanovaapplications["additionalServiceAdultPack"] = $fdata;
		$tdatanovaapplications[".searchableFields"][] = "additionalServiceAdultPack";


$tables_data["dbo.novaApplications"]=&$tdatanovaapplications;
$field_labels["dbo_novaApplications"] = &$fieldLabelsnovaapplications;
$fieldToolTips["dbo_novaApplications"] = &$fieldToolTipsnovaapplications;
$placeHolders["dbo_novaApplications"] = &$placeHoldersnovaapplications;
$page_titles["dbo_novaApplications"] = &$pageTitlesnovaapplications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.novaApplications"] = array();
//	dbo.internalComments
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.internalComments";
		$detailsParam["dOriginalTable"] = "dbo.internalComments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "internalcomments";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_internalComments");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.novaApplications"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.novaApplications"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.novaApplications"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.novaApplications"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.novaApplications"][$dIndex]["detailKeys"][]="parentId";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.novaApplications"] = array();



	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Calls";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "calls";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.novaApplications"][0] = $masterParams;
				$masterTablesData["dbo.novaApplications"][0]["masterKeys"] = array();
	$masterTablesData["dbo.novaApplications"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.novaApplications"][0]["masterKeys"][]="dialerAgent";
				$masterTablesData["dbo.novaApplications"][0]["detailKeys"] = array();
	$masterTablesData["dbo.novaApplications"][0]["detailKeys"][]="callid";
				$masterTablesData["dbo.novaApplications"][0]["detailKeys"][]="dialerAgent";
		
	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.CallsBackofficeView";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "callsbackofficeview";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.novaApplications"][1] = $masterParams;
				$masterTablesData["dbo.novaApplications"][1]["masterKeys"] = array();
	$masterTablesData["dbo.novaApplications"][1]["masterKeys"][]="id";
				$masterTablesData["dbo.novaApplications"][1]["detailKeys"] = array();
	$masterTablesData["dbo.novaApplications"][1]["detailKeys"][]="callid";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_novaapplications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	callid,  	applicationStatusId,  	applicationType,  	applicantName,  	applicantFirstName,  	applicantBirthdate,  	applicantProfession,  	applicantIdNumber,  	applicantAddress,  	applicantPostalCode,  	applicantArea,  	applicantCity,  	applicantTaxRegistrationNumber,  	applicantTaxOffice,  	applicantPhone,  	applicantMobile,  	applicantEmail,  	standAloneProgram,  	doublePlayProgram,  	ProgramSpeed,  	triplePlayProgram,  	triplePlayProgramType,  	additionalServiceInternet,  	additionalServiceInternetSpeed,  	additionalServiceInternationalCalls,  	additionalServiceStaticIp,  	additionalServiceStaticBlock8Ip,  	additionalServiceSecondLine,  	additionalServiceLandLine1000Minutes,  	additionalServiceEquipment,  	additionalServiceEquipmentInstallation,  	portabilityIsNewLine,  	portabilityOldNumber,  	portabilityOldOwner,  	portabilityActivationAddress,  	portabilityActivationPostalCode,  	portabilityActivationArea,  	portabilityActivationCity,  	portabilityPstnIsdn,  	portabilityLine1PhoneNumber,  	portabilityLine2PhoneNumber,  	portabilityLine3PhoneNumber,  	portabilityLine4PhoneNumber,  	portabilityUsername1,  	portabilityusername2,  	documentIdPassport,  	documentIdPassportPreviousOwner,  	documentLastBill,  	documentAddressValidation,  	documentDeathCertificate,  	documentAuthorization,  	documentOther,  	documentOtherType,  	applicationAgentStatus,  	applicationLastStatusDate,  	applicationContactMethod,  	applicationCourier,  	applicationCourierDate,  	applicationCourierTimeFrom,  	applicationCourierTimeTo,  	applicationCourierComments,  	dialerAgent,  	adittionalServiceMobileNoLimit,  	additionalServiceEONMultiScreen,  	additionalServiceNovaMultiroom,  	additionalServiceAdultPack";
$proto0["m_strFrom"] = "FROM dbo.novaApplications";
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
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.novaApplications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto8["m_sql"] = "callid";
$proto8["m_srcTableName"] = "dbo.novaApplications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto10["m_sql"] = "applicationStatusId";
$proto10["m_srcTableName"] = "dbo.novaApplications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationType",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto12["m_sql"] = "applicationType";
$proto12["m_srcTableName"] = "dbo.novaApplications";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantName",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto14["m_sql"] = "applicantName";
$proto14["m_srcTableName"] = "dbo.novaApplications";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantFirstName",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto16["m_sql"] = "applicantFirstName";
$proto16["m_srcTableName"] = "dbo.novaApplications";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantBirthdate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto18["m_sql"] = "applicantBirthdate";
$proto18["m_srcTableName"] = "dbo.novaApplications";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantProfession",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto20["m_sql"] = "applicantProfession";
$proto20["m_srcTableName"] = "dbo.novaApplications";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantIdNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto22["m_sql"] = "applicantIdNumber";
$proto22["m_srcTableName"] = "dbo.novaApplications";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantAddress",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto24["m_sql"] = "applicantAddress";
$proto24["m_srcTableName"] = "dbo.novaApplications";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPostalCode",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto26["m_sql"] = "applicantPostalCode";
$proto26["m_srcTableName"] = "dbo.novaApplications";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantArea",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto28["m_sql"] = "applicantArea";
$proto28["m_srcTableName"] = "dbo.novaApplications";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantCity",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto30["m_sql"] = "applicantCity";
$proto30["m_srcTableName"] = "dbo.novaApplications";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxRegistrationNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto32["m_sql"] = "applicantTaxRegistrationNumber";
$proto32["m_srcTableName"] = "dbo.novaApplications";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxOffice",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto34["m_sql"] = "applicantTaxOffice";
$proto34["m_srcTableName"] = "dbo.novaApplications";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPhone",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto36["m_sql"] = "applicantPhone";
$proto36["m_srcTableName"] = "dbo.novaApplications";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantMobile",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto38["m_sql"] = "applicantMobile";
$proto38["m_srcTableName"] = "dbo.novaApplications";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantEmail",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto40["m_sql"] = "applicantEmail";
$proto40["m_srcTableName"] = "dbo.novaApplications";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "standAloneProgram",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto42["m_sql"] = "standAloneProgram";
$proto42["m_srcTableName"] = "dbo.novaApplications";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "doublePlayProgram",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto44["m_sql"] = "doublePlayProgram";
$proto44["m_srcTableName"] = "dbo.novaApplications";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramSpeed",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto46["m_sql"] = "ProgramSpeed";
$proto46["m_srcTableName"] = "dbo.novaApplications";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "triplePlayProgram",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto48["m_sql"] = "triplePlayProgram";
$proto48["m_srcTableName"] = "dbo.novaApplications";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "triplePlayProgramType",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto50["m_sql"] = "triplePlayProgramType";
$proto50["m_srcTableName"] = "dbo.novaApplications";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternet",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto52["m_sql"] = "additionalServiceInternet";
$proto52["m_srcTableName"] = "dbo.novaApplications";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternetSpeed",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto54["m_sql"] = "additionalServiceInternetSpeed";
$proto54["m_srcTableName"] = "dbo.novaApplications";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternationalCalls",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto56["m_sql"] = "additionalServiceInternationalCalls";
$proto56["m_srcTableName"] = "dbo.novaApplications";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceStaticIp",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto58["m_sql"] = "additionalServiceStaticIp";
$proto58["m_srcTableName"] = "dbo.novaApplications";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceStaticBlock8Ip",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto60["m_sql"] = "additionalServiceStaticBlock8Ip";
$proto60["m_srcTableName"] = "dbo.novaApplications";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceSecondLine",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto62["m_sql"] = "additionalServiceSecondLine";
$proto62["m_srcTableName"] = "dbo.novaApplications";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceLandLine1000Minutes",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto64["m_sql"] = "additionalServiceLandLine1000Minutes";
$proto64["m_srcTableName"] = "dbo.novaApplications";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEquipment",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto66["m_sql"] = "additionalServiceEquipment";
$proto66["m_srcTableName"] = "dbo.novaApplications";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEquipmentInstallation",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto68["m_sql"] = "additionalServiceEquipmentInstallation";
$proto68["m_srcTableName"] = "dbo.novaApplications";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityIsNewLine",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto70["m_sql"] = "portabilityIsNewLine";
$proto70["m_srcTableName"] = "dbo.novaApplications";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityOldNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto72["m_sql"] = "portabilityOldNumber";
$proto72["m_srcTableName"] = "dbo.novaApplications";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityOldOwner",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto74["m_sql"] = "portabilityOldOwner";
$proto74["m_srcTableName"] = "dbo.novaApplications";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationAddress",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto76["m_sql"] = "portabilityActivationAddress";
$proto76["m_srcTableName"] = "dbo.novaApplications";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationPostalCode",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto78["m_sql"] = "portabilityActivationPostalCode";
$proto78["m_srcTableName"] = "dbo.novaApplications";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationArea",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto80["m_sql"] = "portabilityActivationArea";
$proto80["m_srcTableName"] = "dbo.novaApplications";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationCity",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto82["m_sql"] = "portabilityActivationCity";
$proto82["m_srcTableName"] = "dbo.novaApplications";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityPstnIsdn",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto84["m_sql"] = "portabilityPstnIsdn";
$proto84["m_srcTableName"] = "dbo.novaApplications";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine1PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto86["m_sql"] = "portabilityLine1PhoneNumber";
$proto86["m_srcTableName"] = "dbo.novaApplications";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine2PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto88["m_sql"] = "portabilityLine2PhoneNumber";
$proto88["m_srcTableName"] = "dbo.novaApplications";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine3PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto90["m_sql"] = "portabilityLine3PhoneNumber";
$proto90["m_srcTableName"] = "dbo.novaApplications";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine4PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto92["m_sql"] = "portabilityLine4PhoneNumber";
$proto92["m_srcTableName"] = "dbo.novaApplications";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityUsername1",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto94["m_sql"] = "portabilityUsername1";
$proto94["m_srcTableName"] = "dbo.novaApplications";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityusername2",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto96["m_sql"] = "portabilityusername2";
$proto96["m_srcTableName"] = "dbo.novaApplications";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "documentIdPassport",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto98["m_sql"] = "documentIdPassport";
$proto98["m_srcTableName"] = "dbo.novaApplications";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "documentIdPassportPreviousOwner",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto100["m_sql"] = "documentIdPassportPreviousOwner";
$proto100["m_srcTableName"] = "dbo.novaApplications";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "documentLastBill",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto102["m_sql"] = "documentLastBill";
$proto102["m_srcTableName"] = "dbo.novaApplications";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "documentAddressValidation",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto104["m_sql"] = "documentAddressValidation";
$proto104["m_srcTableName"] = "dbo.novaApplications";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "documentDeathCertificate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto106["m_sql"] = "documentDeathCertificate";
$proto106["m_srcTableName"] = "dbo.novaApplications";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "documentAuthorization",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto108["m_sql"] = "documentAuthorization";
$proto108["m_srcTableName"] = "dbo.novaApplications";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "documentOther",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto110["m_sql"] = "documentOther";
$proto110["m_srcTableName"] = "dbo.novaApplications";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "documentOtherType",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto112["m_sql"] = "documentOtherType";
$proto112["m_srcTableName"] = "dbo.novaApplications";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationAgentStatus",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto114["m_sql"] = "applicationAgentStatus";
$proto114["m_srcTableName"] = "dbo.novaApplications";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationLastStatusDate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto116["m_sql"] = "applicationLastStatusDate";
$proto116["m_srcTableName"] = "dbo.novaApplications";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationContactMethod",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto118["m_sql"] = "applicationContactMethod";
$proto118["m_srcTableName"] = "dbo.novaApplications";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourier",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto120["m_sql"] = "applicationCourier";
$proto120["m_srcTableName"] = "dbo.novaApplications";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierDate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto122["m_sql"] = "applicationCourierDate";
$proto122["m_srcTableName"] = "dbo.novaApplications";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeFrom",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto124["m_sql"] = "applicationCourierTimeFrom";
$proto124["m_srcTableName"] = "dbo.novaApplications";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeTo",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto126["m_sql"] = "applicationCourierTimeTo";
$proto126["m_srcTableName"] = "dbo.novaApplications";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierComments",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto128["m_sql"] = "applicationCourierComments";
$proto128["m_srcTableName"] = "dbo.novaApplications";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto130["m_sql"] = "dialerAgent";
$proto130["m_srcTableName"] = "dbo.novaApplications";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "adittionalServiceMobileNoLimit",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto132["m_sql"] = "adittionalServiceMobileNoLimit";
$proto132["m_srcTableName"] = "dbo.novaApplications";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEONMultiScreen",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto134["m_sql"] = "additionalServiceEONMultiScreen";
$proto134["m_srcTableName"] = "dbo.novaApplications";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceNovaMultiroom",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto136["m_sql"] = "additionalServiceNovaMultiroom";
$proto136["m_srcTableName"] = "dbo.novaApplications";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceAdultPack",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplications"
));

$proto138["m_sql"] = "additionalServiceAdultPack";
$proto138["m_srcTableName"] = "dbo.novaApplications";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto140=array();
$proto140["m_link"] = "SQLL_MAIN";
			$proto141=array();
$proto141["m_strName"] = "dbo.novaApplications";
$proto141["m_srcTableName"] = "dbo.novaApplications";
$proto141["m_columns"] = array();
$proto141["m_columns"][] = "id";
$proto141["m_columns"][] = "callid";
$proto141["m_columns"][] = "applicationStatusId";
$proto141["m_columns"][] = "applicationType";
$proto141["m_columns"][] = "applicantName";
$proto141["m_columns"][] = "applicantFirstName";
$proto141["m_columns"][] = "applicantBirthdate";
$proto141["m_columns"][] = "applicantProfession";
$proto141["m_columns"][] = "applicantIdNumber";
$proto141["m_columns"][] = "applicantAddress";
$proto141["m_columns"][] = "applicantPostalCode";
$proto141["m_columns"][] = "applicantArea";
$proto141["m_columns"][] = "applicantCity";
$proto141["m_columns"][] = "applicantTaxRegistrationNumber";
$proto141["m_columns"][] = "applicantTaxOffice";
$proto141["m_columns"][] = "applicantPhone";
$proto141["m_columns"][] = "applicantMobile";
$proto141["m_columns"][] = "applicantEmail";
$proto141["m_columns"][] = "standAloneProgram";
$proto141["m_columns"][] = "doublePlayProgram";
$proto141["m_columns"][] = "ProgramSpeed";
$proto141["m_columns"][] = "triplePlayProgram";
$proto141["m_columns"][] = "triplePlayProgramType";
$proto141["m_columns"][] = "additionalServiceInternet";
$proto141["m_columns"][] = "additionalServiceInternetSpeed";
$proto141["m_columns"][] = "additionalServiceInternationalCalls";
$proto141["m_columns"][] = "additionalServiceStaticIp";
$proto141["m_columns"][] = "additionalServiceStaticBlock8Ip";
$proto141["m_columns"][] = "additionalServiceSecondLine";
$proto141["m_columns"][] = "additionalServiceLandLine1000Minutes";
$proto141["m_columns"][] = "additionalServiceEquipment";
$proto141["m_columns"][] = "additionalServiceEquipmentInstallation";
$proto141["m_columns"][] = "portabilityIsNewLine";
$proto141["m_columns"][] = "portabilityOldNumber";
$proto141["m_columns"][] = "portabilityOldOwner";
$proto141["m_columns"][] = "portabilityActivationAddress";
$proto141["m_columns"][] = "portabilityActivationPostalCode";
$proto141["m_columns"][] = "portabilityActivationArea";
$proto141["m_columns"][] = "portabilityActivationCity";
$proto141["m_columns"][] = "portabilityPstnIsdn";
$proto141["m_columns"][] = "portabilityLine1PhoneNumber";
$proto141["m_columns"][] = "portabilityLine2PhoneNumber";
$proto141["m_columns"][] = "portabilityLine3PhoneNumber";
$proto141["m_columns"][] = "portabilityLine4PhoneNumber";
$proto141["m_columns"][] = "portabilityUsername1";
$proto141["m_columns"][] = "portabilityusername2";
$proto141["m_columns"][] = "documentIdPassport";
$proto141["m_columns"][] = "documentIdPassportPreviousOwner";
$proto141["m_columns"][] = "documentLastBill";
$proto141["m_columns"][] = "documentAddressValidation";
$proto141["m_columns"][] = "documentDeathCertificate";
$proto141["m_columns"][] = "documentAuthorization";
$proto141["m_columns"][] = "documentOther";
$proto141["m_columns"][] = "documentOtherType";
$proto141["m_columns"][] = "applicationAgentStatus";
$proto141["m_columns"][] = "applicationLastStatusDate";
$proto141["m_columns"][] = "applicationContactMethod";
$proto141["m_columns"][] = "applicationCourier";
$proto141["m_columns"][] = "applicationCourierDate";
$proto141["m_columns"][] = "applicationCourierTimeFrom";
$proto141["m_columns"][] = "applicationCourierTimeTo";
$proto141["m_columns"][] = "applicationCourierComments";
$proto141["m_columns"][] = "dialerAgent";
$proto141["m_columns"][] = "adittionalServiceMobileNoLimit";
$proto141["m_columns"][] = "additionalServiceEONMultiScreen";
$proto141["m_columns"][] = "additionalServiceNovaMultiroom";
$proto141["m_columns"][] = "additionalServiceAdultPack";
$obj = new SQLTable($proto141);

$proto140["m_table"] = $obj;
$proto140["m_sql"] = "dbo.novaApplications";
$proto140["m_alias"] = "";
$proto140["m_srcTableName"] = "dbo.novaApplications";
$proto142=array();
$proto142["m_sql"] = "";
$proto142["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto142["m_column"]=$obj;
$proto142["m_contained"] = array();
$proto142["m_strCase"] = "";
$proto142["m_havingmode"] = false;
$proto142["m_inBrackets"] = false;
$proto142["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto142);

$proto140["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto140);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.novaApplications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_novaapplications = createSqlQuery_novaapplications();


	
		;

																																																																			

$tdatanovaapplications[".sqlquery"] = $queryData_novaapplications;



include_once(getabspath("include/novaapplications_events.php"));
$tableEvents["dbo.novaApplications"] = new eventclass_novaapplications;
$tdatanovaapplications[".hasEvents"] = true;

?>