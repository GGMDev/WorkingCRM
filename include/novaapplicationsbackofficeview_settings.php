<?php
$tdatanovaapplicationsbackofficeview = array();
$tdatanovaapplicationsbackofficeview[".searchableFields"] = array();
$tdatanovaapplicationsbackofficeview[".ShortName"] = "novaapplicationsbackofficeview";
$tdatanovaapplicationsbackofficeview[".OwnerID"] = "";
$tdatanovaapplicationsbackofficeview[".OriginalTable"] = "dbo.novaApplications";


$tdatanovaapplicationsbackofficeview[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanovaapplicationsbackofficeview[".originalPagesByType"] = $tdatanovaapplicationsbackofficeview[".pagesByType"];
$tdatanovaapplicationsbackofficeview[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanovaapplicationsbackofficeview[".originalPages"] = $tdatanovaapplicationsbackofficeview[".pages"];
$tdatanovaapplicationsbackofficeview[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanovaapplicationsbackofficeview[".originalDefaultPages"] = $tdatanovaapplicationsbackofficeview[".defaultPages"];

//	field labels
$fieldLabelsnovaapplicationsbackofficeview = array();
$fieldToolTipsnovaapplicationsbackofficeview = array();
$pageTitlesnovaapplicationsbackofficeview = array();
$placeHoldersnovaapplicationsbackofficeview = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsnovaapplicationsbackofficeview["Greek"] = array();
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"] = array();
	$placeHoldersnovaapplicationsbackofficeview["Greek"] = array();
	$pageTitlesnovaapplicationsbackofficeview["Greek"] = array();
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["callid"] = "Callid";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["callid"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["callid"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationType"] = "Η Αίτηση Αφορά";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationType"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationType"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantName"] = "Επώνυμο/Επωνυμία";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantName"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantName"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantFirstName"] = "Όνομα";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantFirstName"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantFirstName"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantBirthdate"] = "Ημ/νία Γέννησης";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantBirthdate"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantBirthdate"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantProfession"] = "Επάγγελμα";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantProfession"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantProfession"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantIdNumber"] = "ΑΔΤ / Διαβατηρίου";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantIdNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantIdNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantAddress"] = "Διεύθυνση";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantAddress"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantAddress"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantPostalCode"] = "Ταχ. Κωδ.";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantPostalCode"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantPostalCode"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantArea"] = "Περιοχή";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantArea"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantArea"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantCity"] = "Πόλη";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantCity"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantCity"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantTaxRegistrationNumber"] = "ΑΦΜ";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantTaxRegistrationNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantTaxRegistrationNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantTaxOffice"] = "ΔΟΥ";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantTaxOffice"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantTaxOffice"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantPhone"] = "Σταθερό Τηλ.";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantPhone"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantPhone"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantMobile"] = "Κινητό";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantMobile"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantMobile"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicantEmail"] = "Email";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicantEmail"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicantEmail"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["standAloneProgram"] = "StandAlone";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["standAloneProgram"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["standAloneProgram"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["doublePlayProgram"] = "Double Play";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["doublePlayProgram"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["doublePlayProgram"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["triplePlayProgram"] = "Triple Play";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["triplePlayProgram"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["triplePlayProgram"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["triplePlayProgramType"] = "3Play Πρόγραμμα";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["triplePlayProgramType"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["triplePlayProgramType"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceInternet"] = "Internet Έως";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceInternet"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceInternet"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceInternetSpeed"] = "Ταχύτητα";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceInternetSpeed"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceInternetSpeed"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceInternationalCalls"] = "Nova Διεθνείς Κλήσεις";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceInternationalCalls"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceInternationalCalls"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceStaticIp"] = "Static IP";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceStaticIp"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceStaticIp"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceStaticBlock8Ip"] = "Block 8 static IPs";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceStaticBlock8Ip"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceStaticBlock8Ip"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceSecondLine"] = "Δεύτερη Γραμμή";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceSecondLine"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceSecondLine"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceLandLine1000Minutes"] = "1000' Προς Σταθερά ";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceLandLine1000Minutes"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceLandLine1000Minutes"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceEquipment"] = "Εξοπλισμός";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceEquipment"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceEquipment"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceEquipmentInstallation"] = "Εγκατάσταση Εξοπλισμού ";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceEquipmentInstallation"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceEquipmentInstallation"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityIsNewLine"] = "Νέα Γραμμή / Φορητότητα";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityIsNewLine"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityIsNewLine"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityOldNumber"] = "Υφιστάμενος Αριθμός";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityOldNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityOldNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityOldOwner"] = "Υφιστάμενος Κάτοχος";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityOldOwner"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityOldOwner"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityActivationAddress"] = "Διεύθυνση";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityActivationAddress"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityActivationAddress"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityActivationPostalCode"] = "Ταχ. Κωδ.";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityActivationPostalCode"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityActivationPostalCode"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityActivationArea"] = "Περιοχή";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityActivationArea"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityActivationArea"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityActivationCity"] = "Πόλη";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityActivationCity"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityActivationCity"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityPstnIsdn"] = "Τύπος Γραμμής";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityPstnIsdn"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityPstnIsdn"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityLine1PhoneNumber"] = "Αρ. Κύριας Γραμμής";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityLine1PhoneNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityLine1PhoneNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityLine2PhoneNumber"] = "Αρ. 2ης Γραμμής";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityLine2PhoneNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityLine2PhoneNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityLine3PhoneNumber"] = "Αρ. 3ης Γραμμής";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityLine3PhoneNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityLine3PhoneNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityLine4PhoneNumber"] = "Αρ. 4ης Γραμμής";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityLine4PhoneNumber"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityLine4PhoneNumber"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityUsername1"] = "Επιθυμητό username 1";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityUsername1"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityUsername1"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["portabilityusername2"] = "Επιθυμητό username 2";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["portabilityusername2"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["portabilityusername2"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentIdPassport"] = "Ταυτότητα/Διαβατήριο";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentIdPassport"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentIdPassport"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentIdPassportPreviousOwner"] = "ΑΔΤ/Διαβατήριο Πρ. Κατόχου";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentIdPassportPreviousOwner"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentIdPassportPreviousOwner"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentLastBill"] = "Τελευταίος Λογαριασμός";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentLastBill"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentLastBill"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentAddressValidation"] = "Λογαριασμός ΔΕΚΟ";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentAddressValidation"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentAddressValidation"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentDeathCertificate"] = "Ληξιαρχική Πράξη Θανάτου";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentDeathCertificate"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentDeathCertificate"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentAuthorization"] = "Εξουσιοδότηση";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentAuthorization"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentAuthorization"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentOther"] = "Άλλο";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentOther"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentOther"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["documentOtherType"] = "Άλλο Έγγραφο";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["documentOtherType"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["documentOtherType"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["id"] = "Id";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["id"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["id"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["ProgramSpeed"] = "Ταχύτητα 2/3Play";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["ProgramSpeed"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["ProgramSpeed"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationAgentStatus"] = "Κατάσταση (Agent)";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationAgentStatus"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationAgentStatus"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationContactMethod"] = "Τρόπος Παραλαβής";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationContactMethod"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationContactMethod"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationCourier"] = "Courier";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationCourier"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationCourier"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationCourierDate"] = "Ημερομηνία Ραντεβού";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationCourierDate"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationCourierDate"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationCourierTimeFrom"] = "Courier Από";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationCourierTimeFrom"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationCourierTimeFrom"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationCourierTimeTo"] = "Courier Έως";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationCourierTimeTo"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationCourierTimeTo"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationCourierComments"] = "Courier Σχόλια";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationCourierComments"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationCourierComments"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["adittionalServiceMobileNoLimit"] = "Mobile No Limit";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["adittionalServiceMobileNoLimit"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["adittionalServiceMobileNoLimit"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceEONMultiScreen"] = "EON Multi Screen";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceEONMultiScreen"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceEONMultiScreen"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceNovaMultiroom"] = "Nova Multiroom";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceNovaMultiroom"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceNovaMultiroom"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["additionalServiceAdultPack"] = "Adult Pack";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["additionalServiceAdultPack"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["additionalServiceAdultPack"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationStatusId"] = "Κατάσταση (Β.Office)";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationStatusId"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationStatusId"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationPhase"] = "Φάση Αίτησης (B.Office)";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationPhase"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationPhase"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["salesPhase"] = "Φάση Αίτησης (Sales)";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["salesPhase"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["salesPhase"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["callDate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["callDate"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["callDate"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["callPhone"] = "Τηλέφωνο Κλήσης";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["callPhone"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["callPhone"] = "";
	$fieldLabelsnovaapplicationsbackofficeview["Greek"]["applicationLastStatusDate"] = "Ημ/νία Τελ. Status";
	$fieldToolTipsnovaapplicationsbackofficeview["Greek"]["applicationLastStatusDate"] = "";
	$placeHoldersnovaapplicationsbackofficeview["Greek"]["applicationLastStatusDate"] = "";
	$pageTitlesnovaapplicationsbackofficeview["Greek"]["search"] = "Αιτήσεις Nova (Backoffice) - Αναζήτηση";
	$pageTitlesnovaapplicationsbackofficeview["Greek"]["view"] = "Προβολή Αίτησης Nova (Backoffice)";
	$pageTitlesnovaapplicationsbackofficeview["Greek"]["add"] = "Αίτηση Nova - Εισαγωγή (backoffice)";
	$pageTitlesnovaapplicationsbackofficeview["Greek"]["edit"] = "Αίτηση Nova - Μεταβολή (backoffice)";
	if (count($fieldToolTipsnovaapplicationsbackofficeview["Greek"]))
		$tdatanovaapplicationsbackofficeview[".isUseToolTips"] = true;
}


	$tdatanovaapplicationsbackofficeview[".NCSearch"] = true;



$tdatanovaapplicationsbackofficeview[".shortTableName"] = "novaapplicationsbackofficeview";
$tdatanovaapplicationsbackofficeview[".nSecOptions"] = 0;

$tdatanovaapplicationsbackofficeview[".mainTableOwnerID"] = "";
$tdatanovaapplicationsbackofficeview[".entityType"] = 1;
$tdatanovaapplicationsbackofficeview[".connId"] = "CallCenter_at_10_41_2_31";


$tdatanovaapplicationsbackofficeview[".strOriginalTableName"] = "dbo.novaApplications";

	



$tdatanovaapplicationsbackofficeview[".showAddInPopup"] = false;

$tdatanovaapplicationsbackofficeview[".showEditInPopup"] = false;

$tdatanovaapplicationsbackofficeview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanovaapplicationsbackofficeview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanovaapplicationsbackofficeview[".listAjax"] = false;
//	temporary
$tdatanovaapplicationsbackofficeview[".listAjax"] = false;

	$tdatanovaapplicationsbackofficeview[".audit"] = true;

	$tdatanovaapplicationsbackofficeview[".locking"] = false;


$pages = $tdatanovaapplicationsbackofficeview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanovaapplicationsbackofficeview[".edit"] = true;
	$tdatanovaapplicationsbackofficeview[".afterEditAction"] = 1;
	$tdatanovaapplicationsbackofficeview[".closePopupAfterEdit"] = 1;
	$tdatanovaapplicationsbackofficeview[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatanovaapplicationsbackofficeview[".add"] = true;
$tdatanovaapplicationsbackofficeview[".afterAddAction"] = 0;
$tdatanovaapplicationsbackofficeview[".closePopupAfterAdd"] = 1;
$tdatanovaapplicationsbackofficeview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanovaapplicationsbackofficeview[".list"] = true;
}



$tdatanovaapplicationsbackofficeview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanovaapplicationsbackofficeview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanovaapplicationsbackofficeview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanovaapplicationsbackofficeview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanovaapplicationsbackofficeview[".printFriendly"] = true;
}



$tdatanovaapplicationsbackofficeview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanovaapplicationsbackofficeview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanovaapplicationsbackofficeview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanovaapplicationsbackofficeview[".isUseAjaxSuggest"] = false;

$tdatanovaapplicationsbackofficeview[".rowHighlite"] = true;



																																																																																																																											

$tdatanovaapplicationsbackofficeview[".ajaxCodeSnippetAdded"] = false;

$tdatanovaapplicationsbackofficeview[".buttonsAdded"] = false;

$tdatanovaapplicationsbackofficeview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanovaapplicationsbackofficeview[".isUseTimeForSearch"] = false;


$tdatanovaapplicationsbackofficeview[".badgeColor"] = "E8926F";


$tdatanovaapplicationsbackofficeview[".allSearchFields"] = array();
$tdatanovaapplicationsbackofficeview[".filterFields"] = array();
$tdatanovaapplicationsbackofficeview[".requiredSearchFields"] = array();

$tdatanovaapplicationsbackofficeview[".googleLikeFields"] = array();
$tdatanovaapplicationsbackofficeview[".googleLikeFields"][] = "callDate";
$tdatanovaapplicationsbackofficeview[".googleLikeFields"][] = "callPhone";
$tdatanovaapplicationsbackofficeview[".googleLikeFields"][] = "applicationLastStatusDate";



$tdatanovaapplicationsbackofficeview[".tableType"] = "list";

$tdatanovaapplicationsbackofficeview[".printerPageOrientation"] = 0;
$tdatanovaapplicationsbackofficeview[".nPrinterPageScale"] = 100;

$tdatanovaapplicationsbackofficeview[".nPrinterSplitRecords"] = 40;

$tdatanovaapplicationsbackofficeview[".geocodingEnabled"] = false;






$tdatanovaapplicationsbackofficeview[".searchIsRequiredForFilters"] = true;

$tdatanovaapplicationsbackofficeview[".noRecordsFirstPage"] = true;



$tdatanovaapplicationsbackofficeview[".pageSize"] = 20;

$tdatanovaapplicationsbackofficeview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanovaapplicationsbackofficeview[".strOrderBy"] = $tstrOrderBy;

$tdatanovaapplicationsbackofficeview[".orderindexes"] = array();


$tdatanovaapplicationsbackofficeview[".sqlHead"] = "SELECT novaApplications.id,  callid,  format(calls.callstart, 'dd/MM/yyyy') AS callDate,  calls.dialerPhone as callPhone,  applicationStatusId,  applicationStatusId as applicationPhase,  applicationStatusId as salesPhase,  applicationType,  applicantName,  applicantFirstName,  applicantBirthdate,  applicantProfession,  applicantIdNumber,  applicantAddress,  applicantPostalCode,  applicantArea,  applicantCity,  applicantTaxRegistrationNumber,  applicantTaxOffice,  applicantPhone,  applicantMobile,  applicantEmail,  standAloneProgram,  doublePlayProgram,  ProgramSpeed,  triplePlayProgram,  triplePlayProgramType,  additionalServiceInternet,  additionalServiceInternetSpeed,  additionalServiceInternationalCalls,  additionalServiceStaticIp,  additionalServiceStaticBlock8Ip,  additionalServiceSecondLine,  additionalServiceLandLine1000Minutes,  additionalServiceEquipment,  additionalServiceEquipmentInstallation,  adittionalServiceMobileNoLimit,  additionalServiceEONMultiScreen,  additionalServiceNovaMultiroom,  additionalServiceAdultPack,  portabilityIsNewLine,  portabilityOldNumber,  portabilityOldOwner,  portabilityActivationAddress,  portabilityActivationPostalCode,  portabilityActivationArea,  portabilityActivationCity,  portabilityPstnIsdn,  portabilityLine1PhoneNumber,  portabilityLine2PhoneNumber,  portabilityLine3PhoneNumber,  portabilityLine4PhoneNumber,  portabilityUsername1,  portabilityusername2,  documentIdPassport,  documentIdPassportPreviousOwner,  documentLastBill,  documentAddressValidation,  documentDeathCertificate,  documentAuthorization,  documentOther,  documentOtherType,  applicationAgentStatus,  format(isnull(novaApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy') as applicationLastStatusDate,  applicationContactMethod,  applicationCourier,  applicationCourierDate,  applicationCourierTimeFrom,  applicationCourierTimeTo,  applicationCourierComments";
$tdatanovaapplicationsbackofficeview[".sqlFrom"] = "FROM dbo.novaApplications  LEFT OUTER JOIN dbo.Calls ON novaApplications.callid = dbo.Calls.id";
$tdatanovaapplicationsbackofficeview[".sqlWhereExpr"] = "";
$tdatanovaapplicationsbackofficeview[".sqlTail"] = "";

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
$tdatanovaapplicationsbackofficeview[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanovaapplicationsbackofficeview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanovaapplicationsbackofficeview[".arrGroupsPerPage"] = $arrGPP;

$tdatanovaapplicationsbackofficeview[".highlightSearchResults"] = true;

$tableKeysnovaapplicationsbackofficeview = array();
$tableKeysnovaapplicationsbackofficeview[] = "id";
$tdatanovaapplicationsbackofficeview[".Keys"] = $tableKeysnovaapplicationsbackofficeview;


$tdatanovaapplicationsbackofficeview[".hideMobileList"] = array();
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1] = array();
$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceInternet"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceInternetSpeed"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceInternationalCalls"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceStaticIp"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceStaticBlock8Ip"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceSecondLine"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceLandLine1000Minutes"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceEquipment"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["additionalServiceEquipmentInstallation"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityOldOwner"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityActivationAddress"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityActivationPostalCode"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityActivationArea"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityActivationCity"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityLine1PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityLine2PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityLine3PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityLine4PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityUsername1"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["portabilityusername2"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentIdPassport"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentIdPassportPreviousOwner"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentLastBill"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentAddressValidation"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentDeathCertificate"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentAuthorization"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentOther"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][1]["documentOtherType"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5] = array();
$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceInternet"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceInternetSpeed"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceInternationalCalls"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceStaticIp"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceStaticBlock8Ip"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceSecondLine"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceLandLine1000Minutes"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceEquipment"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["additionalServiceEquipmentInstallation"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityOldOwner"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityActivationAddress"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityActivationPostalCode"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityActivationArea"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityActivationCity"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityLine1PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityLine2PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityLine3PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityLine4PhoneNumber"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityUsername1"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["portabilityusername2"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentIdPassport"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentIdPassportPreviousOwner"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentLastBill"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentAddressValidation"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentDeathCertificate"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentAuthorization"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentOther"] = true;
		$tdatanovaapplicationsbackofficeview[".hideMobileList"][5]["documentOtherType"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "novaApplications.id";

	
	
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


	$tdatanovaapplicationsbackofficeview["id"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","callid");
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


	$tdatanovaapplicationsbackofficeview["callid"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "callid";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","callDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(calls.callstart, 'dd/MM/yyyy')";

	
	
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


	$tdatanovaapplicationsbackofficeview["callDate"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "callDate";
//	callPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callPhone";
	$fdata["GoodName"] = "callPhone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","callPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calls.dialerPhone";

	
	
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


	$tdatanovaapplicationsbackofficeview["callPhone"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "callPhone";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationStatusId");
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


	$tdatanovaapplicationsbackofficeview["applicationStatusId"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationStatusId";
//	applicationPhase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "applicationPhase";
	$fdata["GoodName"] = "applicationPhase";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationPhase");
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statisticStatus";

	

	
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


	$tdatanovaapplicationsbackofficeview["applicationPhase"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationPhase";
//	salesPhase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "salesPhase";
	$fdata["GoodName"] = "salesPhase";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","salesPhase");
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "salesStatus";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatanovaapplicationsbackofficeview["salesPhase"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "salesPhase";
//	applicationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicationType";
	$fdata["GoodName"] = "applicationType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationType");
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


	$tdatanovaapplicationsbackofficeview["applicationType"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationType";
//	applicantName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicantName";
	$fdata["GoodName"] = "applicantName";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantName");
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


	$tdatanovaapplicationsbackofficeview["applicantName"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantName";
//	applicantFirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "applicantFirstName";
	$fdata["GoodName"] = "applicantFirstName";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantFirstName");
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


	$tdatanovaapplicationsbackofficeview["applicantFirstName"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantFirstName";
//	applicantBirthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicantBirthdate";
	$fdata["GoodName"] = "applicantBirthdate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantBirthdate");
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


	$tdatanovaapplicationsbackofficeview["applicantBirthdate"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantBirthdate";
//	applicantProfession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "applicantProfession";
	$fdata["GoodName"] = "applicantProfession";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantProfession");
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


	$tdatanovaapplicationsbackofficeview["applicantProfession"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantProfession";
//	applicantIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "applicantIdNumber";
	$fdata["GoodName"] = "applicantIdNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantIdNumber");
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


	$tdatanovaapplicationsbackofficeview["applicantIdNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantIdNumber";
//	applicantAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "applicantAddress";
	$fdata["GoodName"] = "applicantAddress";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantAddress");
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


	$tdatanovaapplicationsbackofficeview["applicantAddress"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantAddress";
//	applicantPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "applicantPostalCode";
	$fdata["GoodName"] = "applicantPostalCode";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantPostalCode");
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


	$tdatanovaapplicationsbackofficeview["applicantPostalCode"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantPostalCode";
//	applicantArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "applicantArea";
	$fdata["GoodName"] = "applicantArea";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantArea");
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


	$tdatanovaapplicationsbackofficeview["applicantArea"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantArea";
//	applicantCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "applicantCity";
	$fdata["GoodName"] = "applicantCity";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantCity");
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


	$tdatanovaapplicationsbackofficeview["applicantCity"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantCity";
//	applicantTaxRegistrationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "applicantTaxRegistrationNumber";
	$fdata["GoodName"] = "applicantTaxRegistrationNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantTaxRegistrationNumber");
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


	$tdatanovaapplicationsbackofficeview["applicantTaxRegistrationNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantTaxRegistrationNumber";
//	applicantTaxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "applicantTaxOffice";
	$fdata["GoodName"] = "applicantTaxOffice";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantTaxOffice");
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


	$tdatanovaapplicationsbackofficeview["applicantTaxOffice"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantTaxOffice";
//	applicantPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "applicantPhone";
	$fdata["GoodName"] = "applicantPhone";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantPhone");
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


	$tdatanovaapplicationsbackofficeview["applicantPhone"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantPhone";
//	applicantMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "applicantMobile";
	$fdata["GoodName"] = "applicantMobile";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantMobile");
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


	$tdatanovaapplicationsbackofficeview["applicantMobile"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantMobile";
//	applicantEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "applicantEmail";
	$fdata["GoodName"] = "applicantEmail";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicantEmail");
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


	$tdatanovaapplicationsbackofficeview["applicantEmail"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicantEmail";
//	standAloneProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "standAloneProgram";
	$fdata["GoodName"] = "standAloneProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","standAloneProgram");
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
	$edata["LookupValues"][] = "Nova family pack";
	$edata["LookupValues"][] = "nova cinema pack";
	$edata["LookupValues"][] = "nova sports pack";
	$edata["LookupValues"][] = "nova full pack";

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


	$tdatanovaapplicationsbackofficeview["standAloneProgram"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "standAloneProgram";
//	doublePlayProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "doublePlayProgram";
	$fdata["GoodName"] = "doublePlayProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","doublePlayProgram");
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
	$edata["LookupValues"][] = "nova 2play+";

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


	$tdatanovaapplicationsbackofficeview["doublePlayProgram"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "doublePlayProgram";
//	ProgramSpeed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ProgramSpeed";
	$fdata["GoodName"] = "ProgramSpeed";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","ProgramSpeed");
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


	$tdatanovaapplicationsbackofficeview["ProgramSpeed"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "ProgramSpeed";
//	triplePlayProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "triplePlayProgram";
	$fdata["GoodName"] = "triplePlayProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","triplePlayProgram");
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
	$edata["LookupValues"][] = "nova 3play";
	$edata["LookupValues"][] = "nova 3play+";

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


	$tdatanovaapplicationsbackofficeview["triplePlayProgram"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "triplePlayProgram";
//	triplePlayProgramType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "triplePlayProgramType";
	$fdata["GoodName"] = "triplePlayProgramType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","triplePlayProgramType");
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
	$edata["LookupValues"][] = "family";
	$edata["LookupValues"][] = "cinema";
	$edata["LookupValues"][] = "sports";
	$edata["LookupValues"][] = "full";

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


	$tdatanovaapplicationsbackofficeview["triplePlayProgramType"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "triplePlayProgramType";
//	additionalServiceInternet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "additionalServiceInternet";
	$fdata["GoodName"] = "additionalServiceInternet";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceInternet");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceInternet"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceInternet";
//	additionalServiceInternetSpeed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "additionalServiceInternetSpeed";
	$fdata["GoodName"] = "additionalServiceInternetSpeed";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceInternetSpeed");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceInternetSpeed"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceInternetSpeed";
//	additionalServiceInternationalCalls
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "additionalServiceInternationalCalls";
	$fdata["GoodName"] = "additionalServiceInternationalCalls";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceInternationalCalls");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceInternationalCalls"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceInternationalCalls";
//	additionalServiceStaticIp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "additionalServiceStaticIp";
	$fdata["GoodName"] = "additionalServiceStaticIp";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceStaticIp");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceStaticIp"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceStaticIp";
//	additionalServiceStaticBlock8Ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "additionalServiceStaticBlock8Ip";
	$fdata["GoodName"] = "additionalServiceStaticBlock8Ip";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceStaticBlock8Ip");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceStaticBlock8Ip"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceStaticBlock8Ip";
//	additionalServiceSecondLine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "additionalServiceSecondLine";
	$fdata["GoodName"] = "additionalServiceSecondLine";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceSecondLine");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceSecondLine"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceSecondLine";
//	additionalServiceLandLine1000Minutes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "additionalServiceLandLine1000Minutes";
	$fdata["GoodName"] = "additionalServiceLandLine1000Minutes";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceLandLine1000Minutes");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceLandLine1000Minutes"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceLandLine1000Minutes";
//	additionalServiceEquipment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "additionalServiceEquipment";
	$fdata["GoodName"] = "additionalServiceEquipment";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceEquipment");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceEquipment"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceEquipment";
//	additionalServiceEquipmentInstallation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "additionalServiceEquipmentInstallation";
	$fdata["GoodName"] = "additionalServiceEquipmentInstallation";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceEquipmentInstallation");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceEquipmentInstallation"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceEquipmentInstallation";
//	adittionalServiceMobileNoLimit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "adittionalServiceMobileNoLimit";
	$fdata["GoodName"] = "adittionalServiceMobileNoLimit";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","adittionalServiceMobileNoLimit");
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


	$tdatanovaapplicationsbackofficeview["adittionalServiceMobileNoLimit"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "adittionalServiceMobileNoLimit";
//	additionalServiceEONMultiScreen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "additionalServiceEONMultiScreen";
	$fdata["GoodName"] = "additionalServiceEONMultiScreen";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceEONMultiScreen");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceEONMultiScreen"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceEONMultiScreen";
//	additionalServiceNovaMultiroom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "additionalServiceNovaMultiroom";
	$fdata["GoodName"] = "additionalServiceNovaMultiroom";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceNovaMultiroom");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceNovaMultiroom"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceNovaMultiroom";
//	additionalServiceAdultPack
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "additionalServiceAdultPack";
	$fdata["GoodName"] = "additionalServiceAdultPack";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","additionalServiceAdultPack");
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


	$tdatanovaapplicationsbackofficeview["additionalServiceAdultPack"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "additionalServiceAdultPack";
//	portabilityIsNewLine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "portabilityIsNewLine";
	$fdata["GoodName"] = "portabilityIsNewLine";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityIsNewLine");
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


	$tdatanovaapplicationsbackofficeview["portabilityIsNewLine"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityIsNewLine";
//	portabilityOldNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "portabilityOldNumber";
	$fdata["GoodName"] = "portabilityOldNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityOldNumber");
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


	$tdatanovaapplicationsbackofficeview["portabilityOldNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityOldNumber";
//	portabilityOldOwner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "portabilityOldOwner";
	$fdata["GoodName"] = "portabilityOldOwner";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityOldOwner");
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


	$tdatanovaapplicationsbackofficeview["portabilityOldOwner"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityOldOwner";
//	portabilityActivationAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "portabilityActivationAddress";
	$fdata["GoodName"] = "portabilityActivationAddress";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityActivationAddress");
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


	$tdatanovaapplicationsbackofficeview["portabilityActivationAddress"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityActivationAddress";
//	portabilityActivationPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "portabilityActivationPostalCode";
	$fdata["GoodName"] = "portabilityActivationPostalCode";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityActivationPostalCode");
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


	$tdatanovaapplicationsbackofficeview["portabilityActivationPostalCode"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityActivationPostalCode";
//	portabilityActivationArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "portabilityActivationArea";
	$fdata["GoodName"] = "portabilityActivationArea";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityActivationArea");
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


	$tdatanovaapplicationsbackofficeview["portabilityActivationArea"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityActivationArea";
//	portabilityActivationCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "portabilityActivationCity";
	$fdata["GoodName"] = "portabilityActivationCity";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityActivationCity");
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


	$tdatanovaapplicationsbackofficeview["portabilityActivationCity"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityActivationCity";
//	portabilityPstnIsdn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "portabilityPstnIsdn";
	$fdata["GoodName"] = "portabilityPstnIsdn";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityPstnIsdn");
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


	$tdatanovaapplicationsbackofficeview["portabilityPstnIsdn"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityPstnIsdn";
//	portabilityLine1PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "portabilityLine1PhoneNumber";
	$fdata["GoodName"] = "portabilityLine1PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityLine1PhoneNumber");
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


	$tdatanovaapplicationsbackofficeview["portabilityLine1PhoneNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityLine1PhoneNumber";
//	portabilityLine2PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "portabilityLine2PhoneNumber";
	$fdata["GoodName"] = "portabilityLine2PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityLine2PhoneNumber");
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


	$tdatanovaapplicationsbackofficeview["portabilityLine2PhoneNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityLine2PhoneNumber";
//	portabilityLine3PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "portabilityLine3PhoneNumber";
	$fdata["GoodName"] = "portabilityLine3PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityLine3PhoneNumber");
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


	$tdatanovaapplicationsbackofficeview["portabilityLine3PhoneNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityLine3PhoneNumber";
//	portabilityLine4PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "portabilityLine4PhoneNumber";
	$fdata["GoodName"] = "portabilityLine4PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityLine4PhoneNumber");
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


	$tdatanovaapplicationsbackofficeview["portabilityLine4PhoneNumber"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityLine4PhoneNumber";
//	portabilityUsername1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "portabilityUsername1";
	$fdata["GoodName"] = "portabilityUsername1";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityUsername1");
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


	$tdatanovaapplicationsbackofficeview["portabilityUsername1"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityUsername1";
//	portabilityusername2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "portabilityusername2";
	$fdata["GoodName"] = "portabilityusername2";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","portabilityusername2");
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


	$tdatanovaapplicationsbackofficeview["portabilityusername2"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "portabilityusername2";
//	documentIdPassport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "documentIdPassport";
	$fdata["GoodName"] = "documentIdPassport";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentIdPassport");
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


	$tdatanovaapplicationsbackofficeview["documentIdPassport"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentIdPassport";
//	documentIdPassportPreviousOwner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "documentIdPassportPreviousOwner";
	$fdata["GoodName"] = "documentIdPassportPreviousOwner";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentIdPassportPreviousOwner");
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


	$tdatanovaapplicationsbackofficeview["documentIdPassportPreviousOwner"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentIdPassportPreviousOwner";
//	documentLastBill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "documentLastBill";
	$fdata["GoodName"] = "documentLastBill";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentLastBill");
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


	$tdatanovaapplicationsbackofficeview["documentLastBill"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentLastBill";
//	documentAddressValidation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "documentAddressValidation";
	$fdata["GoodName"] = "documentAddressValidation";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentAddressValidation");
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


	$tdatanovaapplicationsbackofficeview["documentAddressValidation"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentAddressValidation";
//	documentDeathCertificate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "documentDeathCertificate";
	$fdata["GoodName"] = "documentDeathCertificate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentDeathCertificate");
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


	$tdatanovaapplicationsbackofficeview["documentDeathCertificate"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentDeathCertificate";
//	documentAuthorization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "documentAuthorization";
	$fdata["GoodName"] = "documentAuthorization";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentAuthorization");
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


	$tdatanovaapplicationsbackofficeview["documentAuthorization"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentAuthorization";
//	documentOther
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "documentOther";
	$fdata["GoodName"] = "documentOther";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentOther");
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


	$tdatanovaapplicationsbackofficeview["documentOther"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentOther";
//	documentOtherType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "documentOtherType";
	$fdata["GoodName"] = "documentOtherType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","documentOtherType");
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


	$tdatanovaapplicationsbackofficeview["documentOtherType"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "documentOtherType";
//	applicationAgentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "applicationAgentStatus";
	$fdata["GoodName"] = "applicationAgentStatus";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationAgentStatus");
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
		$edata["autoCompleteFields"][] = array('masterF'=>"applicationStatusId", 'lookupF'=>"applicationStatusId");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "agentApplicationStatus";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
	
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


	$tdatanovaapplicationsbackofficeview["applicationAgentStatus"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationAgentStatus";
//	applicationLastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "applicationLastStatusDate";
	$fdata["GoodName"] = "applicationLastStatusDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationLastStatusDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicationLastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(isnull(novaApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy')";

	
	
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


	$tdatanovaapplicationsbackofficeview["applicationLastStatusDate"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationLastStatusDate";
//	applicationContactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "applicationContactMethod";
	$fdata["GoodName"] = "applicationContactMethod";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationContactMethod");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.contactMethods";
			$edata["autoCompleteFieldsOnEdit"] = 1;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanovaapplicationsbackofficeview["applicationContactMethod"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationContactMethod";
//	applicationCourier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "applicationCourier";
	$fdata["GoodName"] = "applicationCourier";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationCourier");
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


	$tdatanovaapplicationsbackofficeview["applicationCourier"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationCourier";
//	applicationCourierDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "applicationCourierDate";
	$fdata["GoodName"] = "applicationCourierDate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationCourierDate");
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


	$tdatanovaapplicationsbackofficeview["applicationCourierDate"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationCourierDate";
//	applicationCourierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "applicationCourierTimeFrom";
	$fdata["GoodName"] = "applicationCourierTimeFrom";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationCourierTimeFrom");
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


	$tdatanovaapplicationsbackofficeview["applicationCourierTimeFrom"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationCourierTimeFrom";
//	applicationCourierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "applicationCourierTimeTo";
	$fdata["GoodName"] = "applicationCourierTimeTo";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationCourierTimeTo");
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


	$tdatanovaapplicationsbackofficeview["applicationCourierTimeTo"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationCourierTimeTo";
//	applicationCourierComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "applicationCourierComments";
	$fdata["GoodName"] = "applicationCourierComments";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaApplicationsBackofficeView","applicationCourierComments");
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


	$tdatanovaapplicationsbackofficeview["applicationCourierComments"] = $fdata;
		$tdatanovaapplicationsbackofficeview[".searchableFields"][] = "applicationCourierComments";


$tables_data["dbo.novaApplicationsBackofficeView"]=&$tdatanovaapplicationsbackofficeview;
$field_labels["dbo_novaApplicationsBackofficeView"] = &$fieldLabelsnovaapplicationsbackofficeview;
$fieldToolTips["dbo_novaApplicationsBackofficeView"] = &$fieldToolTipsnovaapplicationsbackofficeview;
$placeHolders["dbo_novaApplicationsBackofficeView"] = &$placeHoldersnovaapplicationsbackofficeview;
$page_titles["dbo_novaApplicationsBackofficeView"] = &$pageTitlesnovaapplicationsbackofficeview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.novaApplicationsBackofficeView"] = array();
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


		
	$detailsTablesData["dbo.novaApplicationsBackofficeView"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.novaApplicationsBackofficeView"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.novaApplicationsBackofficeView"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.novaApplicationsBackofficeView"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.novaApplicationsBackofficeView"][$dIndex]["detailKeys"][]="parentId";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.novaApplicationsBackofficeView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_novaapplicationsbackofficeview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "novaApplications.id,  callid,  format(calls.callstart, 'dd/MM/yyyy') AS callDate,  calls.dialerPhone as callPhone,  applicationStatusId,  applicationStatusId as applicationPhase,  applicationStatusId as salesPhase,  applicationType,  applicantName,  applicantFirstName,  applicantBirthdate,  applicantProfession,  applicantIdNumber,  applicantAddress,  applicantPostalCode,  applicantArea,  applicantCity,  applicantTaxRegistrationNumber,  applicantTaxOffice,  applicantPhone,  applicantMobile,  applicantEmail,  standAloneProgram,  doublePlayProgram,  ProgramSpeed,  triplePlayProgram,  triplePlayProgramType,  additionalServiceInternet,  additionalServiceInternetSpeed,  additionalServiceInternationalCalls,  additionalServiceStaticIp,  additionalServiceStaticBlock8Ip,  additionalServiceSecondLine,  additionalServiceLandLine1000Minutes,  additionalServiceEquipment,  additionalServiceEquipmentInstallation,  adittionalServiceMobileNoLimit,  additionalServiceEONMultiScreen,  additionalServiceNovaMultiroom,  additionalServiceAdultPack,  portabilityIsNewLine,  portabilityOldNumber,  portabilityOldOwner,  portabilityActivationAddress,  portabilityActivationPostalCode,  portabilityActivationArea,  portabilityActivationCity,  portabilityPstnIsdn,  portabilityLine1PhoneNumber,  portabilityLine2PhoneNumber,  portabilityLine3PhoneNumber,  portabilityLine4PhoneNumber,  portabilityUsername1,  portabilityusername2,  documentIdPassport,  documentIdPassportPreviousOwner,  documentLastBill,  documentAddressValidation,  documentDeathCertificate,  documentAuthorization,  documentOther,  documentOtherType,  applicationAgentStatus,  format(isnull(novaApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy') as applicationLastStatusDate,  applicationContactMethod,  applicationCourier,  applicationCourierDate,  applicationCourierTimeFrom,  applicationCourierTimeTo,  applicationCourierComments";
$proto0["m_strFrom"] = "FROM dbo.novaApplications  LEFT OUTER JOIN dbo.Calls ON novaApplications.callid = dbo.Calls.id";
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
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto6["m_sql"] = "novaApplications.id";
$proto6["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto8["m_sql"] = "callid";
$proto8["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "calls.callstart"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "format(calls.callstart, 'dd/MM/yyyy')";
$proto10["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto14["m_sql"] = "calls.dialerPhone";
$proto14["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "callPhone";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto16["m_sql"] = "applicationStatusId";
$proto16["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto18["m_sql"] = "applicationStatusId";
$proto18["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "applicationPhase";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto20["m_sql"] = "applicationStatusId";
$proto20["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "salesPhase";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationType",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto22["m_sql"] = "applicationType";
$proto22["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantName",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto24["m_sql"] = "applicantName";
$proto24["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantFirstName",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto26["m_sql"] = "applicantFirstName";
$proto26["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantBirthdate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto28["m_sql"] = "applicantBirthdate";
$proto28["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantProfession",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto30["m_sql"] = "applicantProfession";
$proto30["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantIdNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto32["m_sql"] = "applicantIdNumber";
$proto32["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantAddress",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto34["m_sql"] = "applicantAddress";
$proto34["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPostalCode",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto36["m_sql"] = "applicantPostalCode";
$proto36["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantArea",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto38["m_sql"] = "applicantArea";
$proto38["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantCity",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto40["m_sql"] = "applicantCity";
$proto40["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxRegistrationNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto42["m_sql"] = "applicantTaxRegistrationNumber";
$proto42["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxOffice",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto44["m_sql"] = "applicantTaxOffice";
$proto44["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPhone",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto46["m_sql"] = "applicantPhone";
$proto46["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantMobile",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto48["m_sql"] = "applicantMobile";
$proto48["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantEmail",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto50["m_sql"] = "applicantEmail";
$proto50["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "standAloneProgram",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto52["m_sql"] = "standAloneProgram";
$proto52["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "doublePlayProgram",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto54["m_sql"] = "doublePlayProgram";
$proto54["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramSpeed",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto56["m_sql"] = "ProgramSpeed";
$proto56["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "triplePlayProgram",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto58["m_sql"] = "triplePlayProgram";
$proto58["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "triplePlayProgramType",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto60["m_sql"] = "triplePlayProgramType";
$proto60["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternet",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto62["m_sql"] = "additionalServiceInternet";
$proto62["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternetSpeed",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto64["m_sql"] = "additionalServiceInternetSpeed";
$proto64["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternationalCalls",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto66["m_sql"] = "additionalServiceInternationalCalls";
$proto66["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceStaticIp",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto68["m_sql"] = "additionalServiceStaticIp";
$proto68["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceStaticBlock8Ip",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto70["m_sql"] = "additionalServiceStaticBlock8Ip";
$proto70["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceSecondLine",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto72["m_sql"] = "additionalServiceSecondLine";
$proto72["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceLandLine1000Minutes",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto74["m_sql"] = "additionalServiceLandLine1000Minutes";
$proto74["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEquipment",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto76["m_sql"] = "additionalServiceEquipment";
$proto76["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEquipmentInstallation",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto78["m_sql"] = "additionalServiceEquipmentInstallation";
$proto78["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "adittionalServiceMobileNoLimit",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto80["m_sql"] = "adittionalServiceMobileNoLimit";
$proto80["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEONMultiScreen",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto82["m_sql"] = "additionalServiceEONMultiScreen";
$proto82["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceNovaMultiroom",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto84["m_sql"] = "additionalServiceNovaMultiroom";
$proto84["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceAdultPack",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto86["m_sql"] = "additionalServiceAdultPack";
$proto86["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityIsNewLine",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto88["m_sql"] = "portabilityIsNewLine";
$proto88["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityOldNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto90["m_sql"] = "portabilityOldNumber";
$proto90["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityOldOwner",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto92["m_sql"] = "portabilityOldOwner";
$proto92["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationAddress",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto94["m_sql"] = "portabilityActivationAddress";
$proto94["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationPostalCode",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto96["m_sql"] = "portabilityActivationPostalCode";
$proto96["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationArea",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto98["m_sql"] = "portabilityActivationArea";
$proto98["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationCity",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto100["m_sql"] = "portabilityActivationCity";
$proto100["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityPstnIsdn",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto102["m_sql"] = "portabilityPstnIsdn";
$proto102["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine1PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto104["m_sql"] = "portabilityLine1PhoneNumber";
$proto104["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine2PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto106["m_sql"] = "portabilityLine2PhoneNumber";
$proto106["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine3PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto108["m_sql"] = "portabilityLine3PhoneNumber";
$proto108["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine4PhoneNumber",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto110["m_sql"] = "portabilityLine4PhoneNumber";
$proto110["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityUsername1",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto112["m_sql"] = "portabilityUsername1";
$proto112["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityusername2",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto114["m_sql"] = "portabilityusername2";
$proto114["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "documentIdPassport",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto116["m_sql"] = "documentIdPassport";
$proto116["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "documentIdPassportPreviousOwner",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto118["m_sql"] = "documentIdPassportPreviousOwner";
$proto118["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "documentLastBill",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto120["m_sql"] = "documentLastBill";
$proto120["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "documentAddressValidation",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto122["m_sql"] = "documentAddressValidation";
$proto122["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "documentDeathCertificate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto124["m_sql"] = "documentDeathCertificate";
$proto124["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "documentAuthorization",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto126["m_sql"] = "documentAuthorization";
$proto126["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "documentOther",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto128["m_sql"] = "documentOther";
$proto128["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "documentOtherType",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto130["m_sql"] = "documentOtherType";
$proto130["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationAgentStatus",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto132["m_sql"] = "applicationAgentStatus";
$proto132["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$proto135=array();
$proto135["m_functiontype"] = "SQLF_CUSTOM";
$proto135["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(novaApplications.applicationLastStatusDate,calls.callStart)"
));

$proto135["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto135["m_arguments"][]=$obj;
$proto135["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto135);

$proto134["m_sql"] = "format(isnull(novaApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy')";
$proto134["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "applicationLastStatusDate";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationContactMethod",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto138["m_sql"] = "applicationContactMethod";
$proto138["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourier",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto140["m_sql"] = "applicationCourier";
$proto140["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierDate",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto142["m_sql"] = "applicationCourierDate";
$proto142["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeFrom",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto144["m_sql"] = "applicationCourierTimeFrom";
$proto144["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeTo",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto146["m_sql"] = "applicationCourierTimeTo";
$proto146["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierComments",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto148["m_sql"] = "applicationCourierComments";
$proto148["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto150=array();
$proto150["m_link"] = "SQLL_MAIN";
			$proto151=array();
$proto151["m_strName"] = "dbo.novaApplications";
$proto151["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto151["m_columns"] = array();
$proto151["m_columns"][] = "id";
$proto151["m_columns"][] = "callid";
$proto151["m_columns"][] = "applicationStatusId";
$proto151["m_columns"][] = "applicationType";
$proto151["m_columns"][] = "applicantName";
$proto151["m_columns"][] = "applicantFirstName";
$proto151["m_columns"][] = "applicantBirthdate";
$proto151["m_columns"][] = "applicantProfession";
$proto151["m_columns"][] = "applicantIdNumber";
$proto151["m_columns"][] = "applicantAddress";
$proto151["m_columns"][] = "applicantPostalCode";
$proto151["m_columns"][] = "applicantArea";
$proto151["m_columns"][] = "applicantCity";
$proto151["m_columns"][] = "applicantTaxRegistrationNumber";
$proto151["m_columns"][] = "applicantTaxOffice";
$proto151["m_columns"][] = "applicantPhone";
$proto151["m_columns"][] = "applicantMobile";
$proto151["m_columns"][] = "applicantEmail";
$proto151["m_columns"][] = "standAloneProgram";
$proto151["m_columns"][] = "doublePlayProgram";
$proto151["m_columns"][] = "ProgramSpeed";
$proto151["m_columns"][] = "triplePlayProgram";
$proto151["m_columns"][] = "triplePlayProgramType";
$proto151["m_columns"][] = "additionalServiceInternet";
$proto151["m_columns"][] = "additionalServiceInternetSpeed";
$proto151["m_columns"][] = "additionalServiceInternationalCalls";
$proto151["m_columns"][] = "additionalServiceStaticIp";
$proto151["m_columns"][] = "additionalServiceStaticBlock8Ip";
$proto151["m_columns"][] = "additionalServiceSecondLine";
$proto151["m_columns"][] = "additionalServiceLandLine1000Minutes";
$proto151["m_columns"][] = "additionalServiceEquipment";
$proto151["m_columns"][] = "additionalServiceEquipmentInstallation";
$proto151["m_columns"][] = "portabilityIsNewLine";
$proto151["m_columns"][] = "portabilityOldNumber";
$proto151["m_columns"][] = "portabilityOldOwner";
$proto151["m_columns"][] = "portabilityActivationAddress";
$proto151["m_columns"][] = "portabilityActivationPostalCode";
$proto151["m_columns"][] = "portabilityActivationArea";
$proto151["m_columns"][] = "portabilityActivationCity";
$proto151["m_columns"][] = "portabilityPstnIsdn";
$proto151["m_columns"][] = "portabilityLine1PhoneNumber";
$proto151["m_columns"][] = "portabilityLine2PhoneNumber";
$proto151["m_columns"][] = "portabilityLine3PhoneNumber";
$proto151["m_columns"][] = "portabilityLine4PhoneNumber";
$proto151["m_columns"][] = "portabilityUsername1";
$proto151["m_columns"][] = "portabilityusername2";
$proto151["m_columns"][] = "documentIdPassport";
$proto151["m_columns"][] = "documentIdPassportPreviousOwner";
$proto151["m_columns"][] = "documentLastBill";
$proto151["m_columns"][] = "documentAddressValidation";
$proto151["m_columns"][] = "documentDeathCertificate";
$proto151["m_columns"][] = "documentAuthorization";
$proto151["m_columns"][] = "documentOther";
$proto151["m_columns"][] = "documentOtherType";
$proto151["m_columns"][] = "applicationAgentStatus";
$proto151["m_columns"][] = "applicationLastStatusDate";
$proto151["m_columns"][] = "applicationContactMethod";
$proto151["m_columns"][] = "applicationCourier";
$proto151["m_columns"][] = "applicationCourierDate";
$proto151["m_columns"][] = "applicationCourierTimeFrom";
$proto151["m_columns"][] = "applicationCourierTimeTo";
$proto151["m_columns"][] = "applicationCourierComments";
$proto151["m_columns"][] = "dialerAgent";
$proto151["m_columns"][] = "adittionalServiceMobileNoLimit";
$proto151["m_columns"][] = "additionalServiceEONMultiScreen";
$proto151["m_columns"][] = "additionalServiceNovaMultiroom";
$proto151["m_columns"][] = "additionalServiceAdultPack";
$obj = new SQLTable($proto151);

$proto150["m_table"] = $obj;
$proto150["m_sql"] = "dbo.novaApplications";
$proto150["m_alias"] = "";
$proto150["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto152=array();
$proto152["m_sql"] = "";
$proto152["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto152["m_column"]=$obj;
$proto152["m_contained"] = array();
$proto152["m_strCase"] = "";
$proto152["m_havingmode"] = false;
$proto152["m_inBrackets"] = false;
$proto152["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto152);

$proto150["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto150);

$proto0["m_fromlist"][]=$obj;
												$proto154=array();
$proto154["m_link"] = "SQLL_LEFTJOIN";
			$proto155=array();
$proto155["m_strName"] = "dbo.Calls";
$proto155["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto155["m_columns"] = array();
$proto155["m_columns"][] = "id";
$proto155["m_columns"][] = "contactId";
$proto155["m_columns"][] = "callStart";
$proto155["m_columns"][] = "callHangup";
$proto155["m_columns"][] = "callEnd";
$proto155["m_columns"][] = "talkTime";
$proto155["m_columns"][] = "typingTime";
$proto155["m_columns"][] = "totalCallTime";
$proto155["m_columns"][] = "tvchannel";
$proto155["m_columns"][] = "broadcast";
$proto155["m_columns"][] = "seller";
$proto155["m_columns"][] = "callStatusId";
$proto155["m_columns"][] = "callDenialReasonID";
$proto155["m_columns"][] = "callClassificationID";
$proto155["m_columns"][] = "callSubClassificationID";
$proto155["m_columns"][] = "remarks";
$proto155["m_columns"][] = "redialDate";
$proto155["m_columns"][] = "redialComments";
$proto155["m_columns"][] = "redialIsPrivate";
$proto155["m_columns"][] = "redialDone";
$proto155["m_columns"][] = "contactMethod";
$proto155["m_columns"][] = "courier";
$proto155["m_columns"][] = "deliveryComments";
$proto155["m_columns"][] = "courierDeliveryDate";
$proto155["m_columns"][] = "courierTimeFrom";
$proto155["m_columns"][] = "courierTimeTo";
$proto155["m_columns"][] = "dialerPhone";
$proto155["m_columns"][] = "dialerCallEpoch";
$proto155["m_columns"][] = "dialerCampaign";
$proto155["m_columns"][] = "dialerList";
$proto155["m_columns"][] = "dialerLeadID";
$proto155["m_columns"][] = "dialerAgent";
$proto155["m_columns"][] = "dialerRecording";
$proto155["m_columns"][] = "productFamilyId";
$proto155["m_columns"][] = "orderShipCompany";
$proto155["m_columns"][] = "orderInvoiceRequired";
$proto155["m_columns"][] = "callComments";
$proto155["m_columns"][] = "internalCommunication";
$proto155["m_columns"][] = "callGdprAcceptance";
$proto155["m_columns"][] = "callGdprRecordingAcceptance";
$proto155["m_columns"][] = "orderPaymentMethod";
$proto155["m_columns"][] = "contactName";
$proto155["m_columns"][] = "contactZipCode";
$proto155["m_columns"][] = "contactCity";
$proto155["m_columns"][] = "ContactArea";
$proto155["m_columns"][] = "contactGender";
$proto155["m_columns"][] = "contactAge";
$proto155["m_columns"][] = "crmUser";
$proto155["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto155);

$proto154["m_table"] = $obj;
$proto154["m_sql"] = "LEFT OUTER JOIN dbo.Calls ON novaApplications.callid = dbo.Calls.id";
$proto154["m_alias"] = "";
$proto154["m_srcTableName"] = "dbo.novaApplicationsBackofficeView";
$proto156=array();
$proto156["m_sql"] = "novaApplications.callid = dbo.Calls.id";
$proto156["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.novaApplications",
	"m_srcTableName" => "dbo.novaApplicationsBackofficeView"
));

$proto156["m_column"]=$obj;
$proto156["m_contained"] = array();
$proto156["m_strCase"] = "= dbo.Calls.id";
$proto156["m_havingmode"] = false;
$proto156["m_inBrackets"] = false;
$proto156["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto156);

$proto154["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto154);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.novaApplicationsBackofficeView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_novaapplicationsbackofficeview = createSqlQuery_novaapplicationsbackofficeview();


	
		;

																																																																						

$tdatanovaapplicationsbackofficeview[".sqlquery"] = $queryData_novaapplicationsbackofficeview;



$tableEvents["dbo.novaApplicationsBackofficeView"] = new eventsBase;
$tdatanovaapplicationsbackofficeview[".hasEvents"] = false;

?>