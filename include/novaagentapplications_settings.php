<?php
$tdatanovaagentapplications = array();
$tdatanovaagentapplications[".searchableFields"] = array();
$tdatanovaagentapplications[".ShortName"] = "novaagentapplications";
$tdatanovaagentapplications[".OwnerID"] = "";
$tdatanovaagentapplications[".OriginalTable"] = "dbo.novaApplications";


$tdatanovaagentapplications[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanovaagentapplications[".originalPagesByType"] = $tdatanovaagentapplications[".pagesByType"];
$tdatanovaagentapplications[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"novaInlineAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanovaagentapplications[".originalPages"] = $tdatanovaagentapplications[".pages"];
$tdatanovaagentapplications[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanovaagentapplications[".originalDefaultPages"] = $tdatanovaagentapplications[".defaultPages"];

//	field labels
$fieldLabelsnovaagentapplications = array();
$fieldToolTipsnovaagentapplications = array();
$pageTitlesnovaagentapplications = array();
$placeHoldersnovaagentapplications = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsnovaagentapplications["Greek"] = array();
	$fieldToolTipsnovaagentapplications["Greek"] = array();
	$placeHoldersnovaagentapplications["Greek"] = array();
	$pageTitlesnovaagentapplications["Greek"] = array();
	$fieldLabelsnovaagentapplications["Greek"]["callid"] = "Callid";
	$fieldToolTipsnovaagentapplications["Greek"]["callid"] = "";
	$placeHoldersnovaagentapplications["Greek"]["callid"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationStatusId"] = "Κατάσταση Αίτησης";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationStatusId"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationStatusId"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationType"] = "Η Αίτηση Αφορά";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationType"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationType"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantName"] = "Επώνυμο/Επωνυμία";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantName"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantName"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantFirstName"] = "Όνομα";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantFirstName"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantFirstName"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantBirthdate"] = "Ημ/νία Γέννησης";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantBirthdate"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantBirthdate"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantProfession"] = "Επάγγελμα";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantProfession"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantProfession"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantIdNumber"] = "ΑΔΤ / Διαβατηρίου";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantIdNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantIdNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantAddress"] = "Διεύθυνση";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantAddress"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantAddress"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantPostalCode"] = "Ταχ. Κωδ.";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantPostalCode"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantPostalCode"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantArea"] = "Περιοχή";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantArea"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantArea"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantCity"] = "Πόλη";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantCity"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantCity"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantTaxRegistrationNumber"] = "ΑΦΜ";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantTaxOffice"] = "ΔΟΥ";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantTaxOffice"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantTaxOffice"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantPhone"] = "Σταθερό Τηλ.";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantPhone"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantPhone"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantMobile"] = "Κινητό";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantMobile"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantMobile"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicantEmail"] = "Email";
	$fieldToolTipsnovaagentapplications["Greek"]["applicantEmail"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicantEmail"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["standAloneProgram"] = "Πρόγραμμα StandAlone";
	$fieldToolTipsnovaagentapplications["Greek"]["standAloneProgram"] = "";
	$placeHoldersnovaagentapplications["Greek"]["standAloneProgram"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["doublePlayProgram"] = "Double Play";
	$fieldToolTipsnovaagentapplications["Greek"]["doublePlayProgram"] = "";
	$placeHoldersnovaagentapplications["Greek"]["doublePlayProgram"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["triplePlayProgram"] = "Triple Play";
	$fieldToolTipsnovaagentapplications["Greek"]["triplePlayProgram"] = "";
	$placeHoldersnovaagentapplications["Greek"]["triplePlayProgram"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["triplePlayProgramType"] = "3Play Πρόγραμμα";
	$fieldToolTipsnovaagentapplications["Greek"]["triplePlayProgramType"] = "";
	$placeHoldersnovaagentapplications["Greek"]["triplePlayProgramType"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceInternet"] = "Internet Έως";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceInternet"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceInternet"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceInternetSpeed"] = "Ταχύτητα Πρόσθετης Υπηρεσίας Internet";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceInternetSpeed"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceInternetSpeed"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceInternationalCalls"] = "Nova Διεθνείς Κλήσεις";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceInternationalCalls"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceInternationalCalls"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceStaticIp"] = "Static IP";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceStaticIp"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceStaticIp"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceStaticBlock8Ip"] = "Block 8 static IPs";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceStaticBlock8Ip"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceStaticBlock8Ip"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceSecondLine"] = "Δεύτερη Γραμμή";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceSecondLine"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceSecondLine"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceLandLine1000Minutes"] = "1000' Προς Σταθερά ";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceLandLine1000Minutes"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceLandLine1000Minutes"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceEquipment"] = "Εξοπλισμός";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceEquipment"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceEquipment"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["additionalServiceEquipmentInstallation"] = "Εγκατάσταση Εξοπλισμού ";
	$fieldToolTipsnovaagentapplications["Greek"]["additionalServiceEquipmentInstallation"] = "";
	$placeHoldersnovaagentapplications["Greek"]["additionalServiceEquipmentInstallation"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityIsNewLine"] = "Νέα Γραμμή / Φορητότητα";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityIsNewLine"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityIsNewLine"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityOldNumber"] = "Υφιστάμενος Αριθμός";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityOldNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityOldNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityOldOwner"] = "Υφιστάμενος Κάτοχος";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityOldOwner"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityOldOwner"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityActivationAddress"] = "Διεύθυνση";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityActivationAddress"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityActivationAddress"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityActivationPostalCode"] = "Ταχ. Κωδ.";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityActivationPostalCode"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityActivationPostalCode"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityActivationArea"] = "Περιοχή ";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityActivationArea"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityActivationArea"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityActivationCity"] = "Πόλη";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityActivationCity"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityActivationCity"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityPstnIsdn"] = "Τύπος Γραμμής";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityPstnIsdn"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityPstnIsdn"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityLine1PhoneNumber"] = "Αρ. Κύριας Γραμμής";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityLine1PhoneNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityLine1PhoneNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityLine2PhoneNumber"] = "Αρ. 2ης Γραμμής";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityLine2PhoneNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityLine2PhoneNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityLine3PhoneNumber"] = "Αρ. 3ης Γραμμής";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityLine3PhoneNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityLine3PhoneNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityLine4PhoneNumber"] = "Αρ. 4ης Γραμμής";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityLine4PhoneNumber"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityLine4PhoneNumber"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityUsername1"] = "Επιθυμητό username 1";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityUsername1"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityUsername1"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["portabilityusername2"] = "Επιθυμητό username 2";
	$fieldToolTipsnovaagentapplications["Greek"]["portabilityusername2"] = "";
	$placeHoldersnovaagentapplications["Greek"]["portabilityusername2"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentIdPassport"] = "Ταυτότητα/Διαβατήριο";
	$fieldToolTipsnovaagentapplications["Greek"]["documentIdPassport"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentIdPassport"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentIdPassportPreviousOwner"] = "ΑΔΤ/Διαβατήριο Πρ. Κατόχου";
	$fieldToolTipsnovaagentapplications["Greek"]["documentIdPassportPreviousOwner"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentIdPassportPreviousOwner"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentLastBill"] = "Τελευταίος Λογαριασμός";
	$fieldToolTipsnovaagentapplications["Greek"]["documentLastBill"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentLastBill"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentAddressValidation"] = "Λογαριασμός ΔΕΚΟ";
	$fieldToolTipsnovaagentapplications["Greek"]["documentAddressValidation"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentAddressValidation"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentDeathCertificate"] = "Ληξιαρχική Πράξη Θανάτου";
	$fieldToolTipsnovaagentapplications["Greek"]["documentDeathCertificate"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentDeathCertificate"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentAuthorization"] = "Εξουσιοδότηση";
	$fieldToolTipsnovaagentapplications["Greek"]["documentAuthorization"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentAuthorization"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentOther"] = "Άλλο";
	$fieldToolTipsnovaagentapplications["Greek"]["documentOther"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentOther"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["documentOtherType"] = "Άλλο Έγγραφο";
	$fieldToolTipsnovaagentapplications["Greek"]["documentOtherType"] = "";
	$placeHoldersnovaagentapplications["Greek"]["documentOtherType"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["id"] = "Id";
	$fieldToolTipsnovaagentapplications["Greek"]["id"] = "";
	$placeHoldersnovaagentapplications["Greek"]["id"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["ProgramSpeed"] = "Ταχύτητα 2/3Play";
	$fieldToolTipsnovaagentapplications["Greek"]["ProgramSpeed"] = "";
	$placeHoldersnovaagentapplications["Greek"]["ProgramSpeed"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationAgentStatus"] = "Κατάσταση Αίτησης (Agent)";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationAgentStatus"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationAgentStatus"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationContactMethod"] = "Τρόπος Παραλαβής";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationContactMethod"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationContactMethod"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationCourier"] = "Courier";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationCourier"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationCourier"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationCourierDate"] = "Ημερομηνία Ραντεβού";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationCourierDate"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationCourierDate"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationCourierTimeFrom"] = "Application Courier Time From";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationCourierTimeFrom"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationCourierTimeFrom"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationCourierTimeTo"] = "Application Courier Time To";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationCourierTimeTo"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationCourierTimeTo"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["applicationCourierComments"] = "Σχόλια για Courier";
	$fieldToolTipsnovaagentapplications["Greek"]["applicationCourierComments"] = "";
	$placeHoldersnovaagentapplications["Greek"]["applicationCourierComments"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsnovaagentapplications["Greek"]["dialerAgent"] = "";
	$placeHoldersnovaagentapplications["Greek"]["dialerAgent"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["lastStatusDate"] = "Last Status Date";
	$fieldToolTipsnovaagentapplications["Greek"]["lastStatusDate"] = "";
	$placeHoldersnovaagentapplications["Greek"]["lastStatusDate"] = "";
	$fieldLabelsnovaagentapplications["Greek"]["callIdForDate"] = "Call Id For Date";
	$fieldToolTipsnovaagentapplications["Greek"]["callIdForDate"] = "";
	$placeHoldersnovaagentapplications["Greek"]["callIdForDate"] = "";
	$pageTitlesnovaagentapplications["Greek"]["view"] = "Προβολή Αίτησης Nova (Agent)";
	if (count($fieldToolTipsnovaagentapplications["Greek"]))
		$tdatanovaagentapplications[".isUseToolTips"] = true;
}


	$tdatanovaagentapplications[".NCSearch"] = true;



$tdatanovaagentapplications[".shortTableName"] = "novaagentapplications";
$tdatanovaagentapplications[".nSecOptions"] = 0;

$tdatanovaagentapplications[".mainTableOwnerID"] = "";
$tdatanovaagentapplications[".entityType"] = 1;
$tdatanovaagentapplications[".connId"] = "CallCenter_at_10_41_2_31";


$tdatanovaagentapplications[".strOriginalTableName"] = "dbo.novaApplications";

	



$tdatanovaagentapplications[".showAddInPopup"] = false;

$tdatanovaagentapplications[".showEditInPopup"] = false;

$tdatanovaagentapplications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanovaagentapplications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanovaagentapplications[".listAjax"] = false;
//	temporary
$tdatanovaagentapplications[".listAjax"] = false;

	$tdatanovaagentapplications[".audit"] = true;

	$tdatanovaagentapplications[".locking"] = false;


$pages = $tdatanovaagentapplications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanovaagentapplications[".edit"] = true;
	$tdatanovaagentapplications[".afterEditAction"] = 1;
	$tdatanovaagentapplications[".closePopupAfterEdit"] = 1;
	$tdatanovaagentapplications[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatanovaagentapplications[".add"] = true;
$tdatanovaagentapplications[".afterAddAction"] = 0;
$tdatanovaagentapplications[".closePopupAfterAdd"] = 1;
$tdatanovaagentapplications[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanovaagentapplications[".list"] = true;
}



$tdatanovaagentapplications[".strSortControlSettingsJSON"] = "";

$tdatanovaagentapplications[".strClickActionJSON"] = "{\"fields\":{\"ProgramSpeed\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceEquipment\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceEquipmentInstallation\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceInternationalCalls\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceInternet\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceInternetSpeed\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceLandLine1000Minutes\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceSecondLine\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceStaticBlock8Ip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"additionalServiceStaticIp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantAddress\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantArea\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantBirthdate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantCity\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantEmail\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantFirstName\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantIdNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantMobile\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantName\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantPhone\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantPostalCode\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantProfession\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantTaxOffice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicantTaxRegistrationNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationAgentStatus\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationContactMethod\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationCourier\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationCourierComments\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationCourierDate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationCourierTimeFrom\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationCourierTimeTo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationLastStatusDate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationStatusId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"applicationType\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"callid\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dialerAgent\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentAddressValidation\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentAuthorization\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentDeathCertificate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentIdPassport\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentIdPassportPreviousOwner\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentLastBill\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentOther\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documentOtherType\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"doublePlayProgram\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityActivationAddress\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityActivationArea\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityActivationCity\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityActivationPostalCode\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityIsNewLine\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityLine1PhoneNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityLine2PhoneNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityLine3PhoneNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityLine4PhoneNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityOldNumber\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityOldOwner\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityPstnIsdn\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityUsername1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"portabilityusername2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"standAloneProgram\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"triplePlayProgram\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"triplePlayProgramType\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatanovaagentapplications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanovaagentapplications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanovaagentapplications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanovaagentapplications[".printFriendly"] = true;
}



$tdatanovaagentapplications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanovaagentapplications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanovaagentapplications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanovaagentapplications[".isUseAjaxSuggest"] = false;

$tdatanovaagentapplications[".rowHighlite"] = true;



																																																																																																																											

$tdatanovaagentapplications[".ajaxCodeSnippetAdded"] = false;

$tdatanovaagentapplications[".buttonsAdded"] = false;

$tdatanovaagentapplications[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanovaagentapplications[".isUseTimeForSearch"] = false;


$tdatanovaagentapplications[".badgeColor"] = "EDCA00";


$tdatanovaagentapplications[".allSearchFields"] = array();
$tdatanovaagentapplications[".filterFields"] = array();
$tdatanovaagentapplications[".requiredSearchFields"] = array();

$tdatanovaagentapplications[".googleLikeFields"] = array();
$tdatanovaagentapplications[".googleLikeFields"][] = "callIdForDate";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationStatusId";
$tdatanovaagentapplications[".googleLikeFields"][] = "lastStatusDate";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationAgentStatus";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationType";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantName";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantIdNumber";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantAddress";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantPostalCode";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantArea";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantCity";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantTaxRegistrationNumber";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantPhone";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantMobile";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicantEmail";
$tdatanovaagentapplications[".googleLikeFields"][] = "portabilityOldNumber";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationContactMethod";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationCourier";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationCourierDate";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationCourierTimeFrom";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationCourierTimeTo";
$tdatanovaagentapplications[".googleLikeFields"][] = "applicationCourierComments";
$tdatanovaagentapplications[".googleLikeFields"][] = "dialerAgent";



$tdatanovaagentapplications[".tableType"] = "list";

$tdatanovaagentapplications[".printerPageOrientation"] = 0;
$tdatanovaagentapplications[".nPrinterPageScale"] = 100;

$tdatanovaagentapplications[".nPrinterSplitRecords"] = 40;

$tdatanovaagentapplications[".geocodingEnabled"] = false;






$tdatanovaagentapplications[".searchIsRequiredForFilters"] = true;

$tdatanovaagentapplications[".noRecordsFirstPage"] = true;



$tdatanovaagentapplications[".pageSize"] = 20;

$tdatanovaagentapplications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanovaagentapplications[".strOrderBy"] = $tstrOrderBy;

$tdatanovaagentapplications[".orderindexes"] = array();


$tdatanovaagentapplications[".sqlHead"] = "SELECT na.id,  na.callid,  na.callid callIdForDate,  --format(c.callStart, 'dd/MM/yyyy') as callDate,  na.applicationStatusId,  format(na.applicationLastStatusDate, 'dd/MM/yyyy') as lastStatusDate,  na.applicationAgentStatus,  na.applicationType,  na.applicantName,  na.applicantFirstName,  na.applicantBirthdate,  na.applicantProfession,  na.applicantIdNumber,  na.applicantAddress,  na.applicantPostalCode,  na.applicantArea,  na.applicantCity,  na.applicantTaxRegistrationNumber,  na.applicantTaxOffice,  na.applicantPhone,  na.applicantMobile,  na.applicantEmail,  na.standAloneProgram,  na.doublePlayProgram,  na.ProgramSpeed,  na.triplePlayProgram,  na.triplePlayProgramType,  na.additionalServiceInternet,  na.additionalServiceInternetSpeed,  na.additionalServiceInternationalCalls,  na.additionalServiceStaticIp,  na.additionalServiceStaticBlock8Ip,  na.additionalServiceSecondLine,  na.additionalServiceLandLine1000Minutes,  na.additionalServiceEquipment,  na.additionalServiceEquipmentInstallation,  na.portabilityIsNewLine,  na.portabilityOldNumber,  na.portabilityOldOwner,  na.portabilityActivationAddress,  na.portabilityActivationPostalCode,  na.portabilityActivationArea,  na.portabilityActivationCity,  na.portabilityPstnIsdn,  na.portabilityLine1PhoneNumber,  na.portabilityLine2PhoneNumber,  na.portabilityLine3PhoneNumber,  na.portabilityLine4PhoneNumber,  na.portabilityUsername1,  na.portabilityusername2,  na.documentIdPassport,  na.documentIdPassportPreviousOwner,  na.documentLastBill,  na.documentAddressValidation,  na.documentDeathCertificate,  na.documentAuthorization,  na.documentOther,  na.documentOtherType,  na.applicationContactMethod,  na.applicationCourier,  na.applicationCourierDate,  na.applicationCourierTimeFrom,  na.applicationCourierTimeTo,  na.applicationCourierComments,  na.dialerAgent";
$tdatanovaagentapplications[".sqlFrom"] = "FROM dbo.novaApplications AS na";
$tdatanovaagentapplications[".sqlWhereExpr"] = "(na.dialerAgent =':user.username')";
$tdatanovaagentapplications[".sqlTail"] = "";

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
$tdatanovaagentapplications[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanovaagentapplications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanovaagentapplications[".arrGroupsPerPage"] = $arrGPP;

$tdatanovaagentapplications[".highlightSearchResults"] = true;

$tableKeysnovaagentapplications = array();
$tableKeysnovaagentapplications[] = "id";
$tdatanovaagentapplications[".Keys"] = $tableKeysnovaagentapplications;


$tdatanovaagentapplications[".hideMobileList"] = array();
		$tdatanovaagentapplications[".hideMobileList"][1] = array();
$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceInternet"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceInternetSpeed"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceInternationalCalls"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceStaticIp"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceStaticBlock8Ip"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceSecondLine"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceLandLine1000Minutes"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceEquipment"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["additionalServiceEquipmentInstallation"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityOldOwner"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityActivationAddress"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityActivationPostalCode"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityActivationArea"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityActivationCity"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityLine1PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityLine2PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityLine3PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityLine4PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityUsername1"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["portabilityusername2"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentIdPassport"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentIdPassportPreviousOwner"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentLastBill"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentAddressValidation"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentDeathCertificate"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentAuthorization"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentOther"] = true;
		$tdatanovaagentapplications[".hideMobileList"][1]["documentOtherType"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5] = array();
$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceInternet"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceInternetSpeed"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceInternationalCalls"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceStaticIp"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceStaticBlock8Ip"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceSecondLine"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceLandLine1000Minutes"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceEquipment"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["additionalServiceEquipmentInstallation"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityOldOwner"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityActivationAddress"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityActivationPostalCode"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityActivationArea"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityActivationCity"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityLine1PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityLine2PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityLine3PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityLine4PhoneNumber"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityUsername1"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["portabilityusername2"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentIdPassport"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentIdPassportPreviousOwner"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentLastBill"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentAddressValidation"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentDeathCertificate"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentAuthorization"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentOther"] = true;
		$tdatanovaagentapplications[".hideMobileList"][5]["documentOtherType"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","id");
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


	$tdatanovaagentapplications["id"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.callid";

	
	
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


	$tdatanovaagentapplications["callid"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "callid";
//	callIdForDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "callIdForDate";
	$fdata["GoodName"] = "callIdForDate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","callIdForDate");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.callid";

	
	
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
	$edata["LookupTable"] = "dbo.Calls";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "format(callStart,'dd/MM/yyyy')";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatanovaagentapplications["callIdForDate"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "callIdForDate";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationStatusId";

	
	
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


	$tdatanovaagentapplications["applicationStatusId"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationStatusId";
//	lastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lastStatusDate";
	$fdata["GoodName"] = "lastStatusDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","lastStatusDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(na.applicationLastStatusDate, 'dd/MM/yyyy')";

	
	
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


	$tdatanovaagentapplications["lastStatusDate"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "lastStatusDate";
//	applicationAgentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "applicationAgentStatus";
	$fdata["GoodName"] = "applicationAgentStatus";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationAgentStatus");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationAgentStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationAgentStatus";

	
	
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


	$tdatanovaagentapplications["applicationAgentStatus"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationAgentStatus";
//	applicationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "applicationType";
	$fdata["GoodName"] = "applicationType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationType";

	
	
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


	$tdatanovaagentapplications["applicationType"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationType";
//	applicantName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicantName";
	$fdata["GoodName"] = "applicantName";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantName";

	
	
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


	$tdatanovaagentapplications["applicantName"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantName";
//	applicantFirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicantFirstName";
	$fdata["GoodName"] = "applicantFirstName";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantFirstName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantFirstName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantFirstName";

	
	
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


	$tdatanovaagentapplications["applicantFirstName"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantFirstName";
//	applicantBirthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "applicantBirthdate";
	$fdata["GoodName"] = "applicantBirthdate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantBirthdate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicantBirthdate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantBirthdate";

	
	
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


	$tdatanovaagentapplications["applicantBirthdate"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantBirthdate";
//	applicantProfession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicantProfession";
	$fdata["GoodName"] = "applicantProfession";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantProfession");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantProfession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantProfession";

	
	
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


	$tdatanovaagentapplications["applicantProfession"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantProfession";
//	applicantIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "applicantIdNumber";
	$fdata["GoodName"] = "applicantIdNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantIdNumber";

	
	
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


	$tdatanovaagentapplications["applicantIdNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantIdNumber";
//	applicantAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "applicantAddress";
	$fdata["GoodName"] = "applicantAddress";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantAddress";

	
	
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


	$tdatanovaagentapplications["applicantAddress"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantAddress";
//	applicantPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "applicantPostalCode";
	$fdata["GoodName"] = "applicantPostalCode";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantPostalCode";

	
	
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


	$tdatanovaagentapplications["applicantPostalCode"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantPostalCode";
//	applicantArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "applicantArea";
	$fdata["GoodName"] = "applicantArea";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantArea";

	
	
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


	$tdatanovaagentapplications["applicantArea"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantArea";
//	applicantCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "applicantCity";
	$fdata["GoodName"] = "applicantCity";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantCity";

	
	
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


	$tdatanovaagentapplications["applicantCity"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantCity";
//	applicantTaxRegistrationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "applicantTaxRegistrationNumber";
	$fdata["GoodName"] = "applicantTaxRegistrationNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantTaxRegistrationNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxRegistrationNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantTaxRegistrationNumber";

	
	
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


	$tdatanovaagentapplications["applicantTaxRegistrationNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantTaxRegistrationNumber";
//	applicantTaxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "applicantTaxOffice";
	$fdata["GoodName"] = "applicantTaxOffice";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantTaxOffice");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxOffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantTaxOffice";

	
	
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


	$tdatanovaagentapplications["applicantTaxOffice"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantTaxOffice";
//	applicantPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "applicantPhone";
	$fdata["GoodName"] = "applicantPhone";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantPhone";

	
	
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


	$tdatanovaagentapplications["applicantPhone"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantPhone";
//	applicantMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "applicantMobile";
	$fdata["GoodName"] = "applicantMobile";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantMobile";

	
	
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


	$tdatanovaagentapplications["applicantMobile"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantMobile";
//	applicantEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "applicantEmail";
	$fdata["GoodName"] = "applicantEmail";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicantEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicantEmail";

	
	
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


	$tdatanovaagentapplications["applicantEmail"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicantEmail";
//	standAloneProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "standAloneProgram";
	$fdata["GoodName"] = "standAloneProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","standAloneProgram");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "standAloneProgram";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.standAloneProgram";

	
	
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


	$tdatanovaagentapplications["standAloneProgram"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "standAloneProgram";
//	doublePlayProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "doublePlayProgram";
	$fdata["GoodName"] = "doublePlayProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","doublePlayProgram");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "doublePlayProgram";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.doublePlayProgram";

	
	
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


	$tdatanovaagentapplications["doublePlayProgram"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "doublePlayProgram";
//	ProgramSpeed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ProgramSpeed";
	$fdata["GoodName"] = "ProgramSpeed";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","ProgramSpeed");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ProgramSpeed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.ProgramSpeed";

	
	
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


	$tdatanovaagentapplications["ProgramSpeed"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "ProgramSpeed";
//	triplePlayProgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "triplePlayProgram";
	$fdata["GoodName"] = "triplePlayProgram";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","triplePlayProgram");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "triplePlayProgram";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.triplePlayProgram";

	
	
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


	$tdatanovaagentapplications["triplePlayProgram"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "triplePlayProgram";
//	triplePlayProgramType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "triplePlayProgramType";
	$fdata["GoodName"] = "triplePlayProgramType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","triplePlayProgramType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "triplePlayProgramType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.triplePlayProgramType";

	
	
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


	$tdatanovaagentapplications["triplePlayProgramType"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "triplePlayProgramType";
//	additionalServiceInternet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "additionalServiceInternet";
	$fdata["GoodName"] = "additionalServiceInternet";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceInternet");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceInternet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceInternet";

	
	
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


	$tdatanovaagentapplications["additionalServiceInternet"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceInternet";
//	additionalServiceInternetSpeed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "additionalServiceInternetSpeed";
	$fdata["GoodName"] = "additionalServiceInternetSpeed";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceInternetSpeed");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceInternetSpeed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceInternetSpeed";

	
	
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


	$tdatanovaagentapplications["additionalServiceInternetSpeed"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceInternetSpeed";
//	additionalServiceInternationalCalls
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "additionalServiceInternationalCalls";
	$fdata["GoodName"] = "additionalServiceInternationalCalls";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceInternationalCalls");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceInternationalCalls";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceInternationalCalls";

	
	
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


	$tdatanovaagentapplications["additionalServiceInternationalCalls"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceInternationalCalls";
//	additionalServiceStaticIp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "additionalServiceStaticIp";
	$fdata["GoodName"] = "additionalServiceStaticIp";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceStaticIp");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceStaticIp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceStaticIp";

	
	
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


	$tdatanovaagentapplications["additionalServiceStaticIp"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceStaticIp";
//	additionalServiceStaticBlock8Ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "additionalServiceStaticBlock8Ip";
	$fdata["GoodName"] = "additionalServiceStaticBlock8Ip";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceStaticBlock8Ip");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceStaticBlock8Ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceStaticBlock8Ip";

	
	
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


	$tdatanovaagentapplications["additionalServiceStaticBlock8Ip"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceStaticBlock8Ip";
//	additionalServiceSecondLine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "additionalServiceSecondLine";
	$fdata["GoodName"] = "additionalServiceSecondLine";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceSecondLine");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceSecondLine";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceSecondLine";

	
	
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


	$tdatanovaagentapplications["additionalServiceSecondLine"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceSecondLine";
//	additionalServiceLandLine1000Minutes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "additionalServiceLandLine1000Minutes";
	$fdata["GoodName"] = "additionalServiceLandLine1000Minutes";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceLandLine1000Minutes");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceLandLine1000Minutes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceLandLine1000Minutes";

	
	
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


	$tdatanovaagentapplications["additionalServiceLandLine1000Minutes"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceLandLine1000Minutes";
//	additionalServiceEquipment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "additionalServiceEquipment";
	$fdata["GoodName"] = "additionalServiceEquipment";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceEquipment");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceEquipment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceEquipment";

	
	
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


	$tdatanovaagentapplications["additionalServiceEquipment"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceEquipment";
//	additionalServiceEquipmentInstallation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "additionalServiceEquipmentInstallation";
	$fdata["GoodName"] = "additionalServiceEquipmentInstallation";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","additionalServiceEquipmentInstallation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServiceEquipmentInstallation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.additionalServiceEquipmentInstallation";

	
	
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


	$tdatanovaagentapplications["additionalServiceEquipmentInstallation"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "additionalServiceEquipmentInstallation";
//	portabilityIsNewLine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "portabilityIsNewLine";
	$fdata["GoodName"] = "portabilityIsNewLine";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityIsNewLine");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "portabilityIsNewLine";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityIsNewLine";

	
	
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


	$tdatanovaagentapplications["portabilityIsNewLine"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityIsNewLine";
//	portabilityOldNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "portabilityOldNumber";
	$fdata["GoodName"] = "portabilityOldNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityOldNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityOldNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityOldNumber";

	
	
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


	$tdatanovaagentapplications["portabilityOldNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityOldNumber";
//	portabilityOldOwner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "portabilityOldOwner";
	$fdata["GoodName"] = "portabilityOldOwner";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityOldOwner");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityOldOwner";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityOldOwner";

	
	
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


	$tdatanovaagentapplications["portabilityOldOwner"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityOldOwner";
//	portabilityActivationAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "portabilityActivationAddress";
	$fdata["GoodName"] = "portabilityActivationAddress";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityActivationAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityActivationAddress";

	
	
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


	$tdatanovaagentapplications["portabilityActivationAddress"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityActivationAddress";
//	portabilityActivationPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "portabilityActivationPostalCode";
	$fdata["GoodName"] = "portabilityActivationPostalCode";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityActivationPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityActivationPostalCode";

	
	
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


	$tdatanovaagentapplications["portabilityActivationPostalCode"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityActivationPostalCode";
//	portabilityActivationArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "portabilityActivationArea";
	$fdata["GoodName"] = "portabilityActivationArea";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityActivationArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityActivationArea";

	
	
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


	$tdatanovaagentapplications["portabilityActivationArea"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityActivationArea";
//	portabilityActivationCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "portabilityActivationCity";
	$fdata["GoodName"] = "portabilityActivationCity";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityActivationCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityActivationCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityActivationCity";

	
	
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


	$tdatanovaagentapplications["portabilityActivationCity"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityActivationCity";
//	portabilityPstnIsdn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "portabilityPstnIsdn";
	$fdata["GoodName"] = "portabilityPstnIsdn";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityPstnIsdn");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "portabilityPstnIsdn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityPstnIsdn";

	
	
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


	$tdatanovaagentapplications["portabilityPstnIsdn"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityPstnIsdn";
//	portabilityLine1PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "portabilityLine1PhoneNumber";
	$fdata["GoodName"] = "portabilityLine1PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityLine1PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine1PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityLine1PhoneNumber";

	
	
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


	$tdatanovaagentapplications["portabilityLine1PhoneNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityLine1PhoneNumber";
//	portabilityLine2PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "portabilityLine2PhoneNumber";
	$fdata["GoodName"] = "portabilityLine2PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityLine2PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine2PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityLine2PhoneNumber";

	
	
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


	$tdatanovaagentapplications["portabilityLine2PhoneNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityLine2PhoneNumber";
//	portabilityLine3PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "portabilityLine3PhoneNumber";
	$fdata["GoodName"] = "portabilityLine3PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityLine3PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine3PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityLine3PhoneNumber";

	
	
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


	$tdatanovaagentapplications["portabilityLine3PhoneNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityLine3PhoneNumber";
//	portabilityLine4PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "portabilityLine4PhoneNumber";
	$fdata["GoodName"] = "portabilityLine4PhoneNumber";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityLine4PhoneNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityLine4PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityLine4PhoneNumber";

	
	
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


	$tdatanovaagentapplications["portabilityLine4PhoneNumber"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityLine4PhoneNumber";
//	portabilityUsername1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "portabilityUsername1";
	$fdata["GoodName"] = "portabilityUsername1";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityUsername1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityUsername1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityUsername1";

	
	
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


	$tdatanovaagentapplications["portabilityUsername1"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityUsername1";
//	portabilityusername2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "portabilityusername2";
	$fdata["GoodName"] = "portabilityusername2";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","portabilityusername2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "portabilityusername2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.portabilityusername2";

	
	
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


	$tdatanovaagentapplications["portabilityusername2"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "portabilityusername2";
//	documentIdPassport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "documentIdPassport";
	$fdata["GoodName"] = "documentIdPassport";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentIdPassport");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentIdPassport";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentIdPassport";

	
	
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


	$tdatanovaagentapplications["documentIdPassport"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentIdPassport";
//	documentIdPassportPreviousOwner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "documentIdPassportPreviousOwner";
	$fdata["GoodName"] = "documentIdPassportPreviousOwner";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentIdPassportPreviousOwner");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentIdPassportPreviousOwner";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentIdPassportPreviousOwner";

	
	
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


	$tdatanovaagentapplications["documentIdPassportPreviousOwner"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentIdPassportPreviousOwner";
//	documentLastBill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "documentLastBill";
	$fdata["GoodName"] = "documentLastBill";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentLastBill");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentLastBill";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentLastBill";

	
	
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


	$tdatanovaagentapplications["documentLastBill"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentLastBill";
//	documentAddressValidation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "documentAddressValidation";
	$fdata["GoodName"] = "documentAddressValidation";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentAddressValidation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentAddressValidation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentAddressValidation";

	
	
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


	$tdatanovaagentapplications["documentAddressValidation"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentAddressValidation";
//	documentDeathCertificate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "documentDeathCertificate";
	$fdata["GoodName"] = "documentDeathCertificate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentDeathCertificate");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentDeathCertificate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentDeathCertificate";

	
	
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


	$tdatanovaagentapplications["documentDeathCertificate"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentDeathCertificate";
//	documentAuthorization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "documentAuthorization";
	$fdata["GoodName"] = "documentAuthorization";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentAuthorization");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentAuthorization";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentAuthorization";

	
	
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


	$tdatanovaagentapplications["documentAuthorization"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentAuthorization";
//	documentOther
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "documentOther";
	$fdata["GoodName"] = "documentOther";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentOther");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documentOther";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentOther";

	
	
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


	$tdatanovaagentapplications["documentOther"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentOther";
//	documentOtherType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "documentOtherType";
	$fdata["GoodName"] = "documentOtherType";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","documentOtherType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "documentOtherType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.documentOtherType";

	
	
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


	$tdatanovaagentapplications["documentOtherType"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "documentOtherType";
//	applicationContactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "applicationContactMethod";
	$fdata["GoodName"] = "applicationContactMethod";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationContactMethod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationContactMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationContactMethod";

	
	
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


	$tdatanovaagentapplications["applicationContactMethod"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationContactMethod";
//	applicationCourier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "applicationCourier";
	$fdata["GoodName"] = "applicationCourier";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationCourier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationCourier";

	
	
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


	$tdatanovaagentapplications["applicationCourier"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationCourier";
//	applicationCourierDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "applicationCourierDate";
	$fdata["GoodName"] = "applicationCourierDate";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationCourierDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicationCourierDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationCourierDate";

	
	
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


	$tdatanovaagentapplications["applicationCourierDate"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationCourierDate";
//	applicationCourierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "applicationCourierTimeFrom";
	$fdata["GoodName"] = "applicationCourierTimeFrom";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationCourierTimeFrom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierTimeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationCourierTimeFrom";

	
	
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


	$tdatanovaagentapplications["applicationCourierTimeFrom"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationCourierTimeFrom";
//	applicationCourierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "applicationCourierTimeTo";
	$fdata["GoodName"] = "applicationCourierTimeTo";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationCourierTimeTo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierTimeTo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationCourierTimeTo";

	
	
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


	$tdatanovaagentapplications["applicationCourierTimeTo"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationCourierTimeTo";
//	applicationCourierComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "applicationCourierComments";
	$fdata["GoodName"] = "applicationCourierComments";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","applicationCourierComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.applicationCourierComments";

	
	
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


	$tdatanovaagentapplications["applicationCourierComments"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "applicationCourierComments";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.novaApplications";
	$fdata["Label"] = GetFieldLabel("dbo_novaAgentApplications","dialerAgent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "na.dialerAgent";

	
	
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


	$tdatanovaagentapplications["dialerAgent"] = $fdata;
		$tdatanovaagentapplications[".searchableFields"][] = "dialerAgent";


$tables_data["dbo.novaAgentApplications"]=&$tdatanovaagentapplications;
$field_labels["dbo_novaAgentApplications"] = &$fieldLabelsnovaagentapplications;
$fieldToolTips["dbo_novaAgentApplications"] = &$fieldToolTipsnovaagentapplications;
$placeHolders["dbo_novaAgentApplications"] = &$placeHoldersnovaagentapplications;
$page_titles["dbo_novaAgentApplications"] = &$pageTitlesnovaagentapplications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.novaAgentApplications"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.novaAgentApplications"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_novaagentapplications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "na.id,  na.callid,  na.callid callIdForDate,  --format(c.callStart, 'dd/MM/yyyy') as callDate,  na.applicationStatusId,  format(na.applicationLastStatusDate, 'dd/MM/yyyy') as lastStatusDate,  na.applicationAgentStatus,  na.applicationType,  na.applicantName,  na.applicantFirstName,  na.applicantBirthdate,  na.applicantProfession,  na.applicantIdNumber,  na.applicantAddress,  na.applicantPostalCode,  na.applicantArea,  na.applicantCity,  na.applicantTaxRegistrationNumber,  na.applicantTaxOffice,  na.applicantPhone,  na.applicantMobile,  na.applicantEmail,  na.standAloneProgram,  na.doublePlayProgram,  na.ProgramSpeed,  na.triplePlayProgram,  na.triplePlayProgramType,  na.additionalServiceInternet,  na.additionalServiceInternetSpeed,  na.additionalServiceInternationalCalls,  na.additionalServiceStaticIp,  na.additionalServiceStaticBlock8Ip,  na.additionalServiceSecondLine,  na.additionalServiceLandLine1000Minutes,  na.additionalServiceEquipment,  na.additionalServiceEquipmentInstallation,  na.portabilityIsNewLine,  na.portabilityOldNumber,  na.portabilityOldOwner,  na.portabilityActivationAddress,  na.portabilityActivationPostalCode,  na.portabilityActivationArea,  na.portabilityActivationCity,  na.portabilityPstnIsdn,  na.portabilityLine1PhoneNumber,  na.portabilityLine2PhoneNumber,  na.portabilityLine3PhoneNumber,  na.portabilityLine4PhoneNumber,  na.portabilityUsername1,  na.portabilityusername2,  na.documentIdPassport,  na.documentIdPassportPreviousOwner,  na.documentLastBill,  na.documentAddressValidation,  na.documentDeathCertificate,  na.documentAuthorization,  na.documentOther,  na.documentOtherType,  na.applicationContactMethod,  na.applicationCourier,  na.applicationCourierDate,  na.applicationCourierTimeFrom,  na.applicationCourierTimeTo,  na.applicationCourierComments,  na.dialerAgent";
$proto0["m_strFrom"] = "FROM dbo.novaApplications AS na";
$proto0["m_strWhere"] = "(na.dialerAgent =':user.username')";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "na.dialerAgent =':user.username'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=':user.username'";
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
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto6["m_sql"] = "na.id";
$proto6["m_srcTableName"] = "dbo.novaAgentApplications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto8["m_sql"] = "na.callid";
$proto8["m_srcTableName"] = "dbo.novaAgentApplications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto10["m_sql"] = "na.callid";
$proto10["m_srcTableName"] = "dbo.novaAgentApplications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "callIdForDate";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto12["m_sql"] = "na.applicationStatusId";
$proto12["m_srcTableName"] = "dbo.novaAgentApplications";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "na.applicationLastStatusDate"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "format(na.applicationLastStatusDate, 'dd/MM/yyyy')";
$proto14["m_srcTableName"] = "dbo.novaAgentApplications";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "lastStatusDate";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationAgentStatus",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto18["m_sql"] = "na.applicationAgentStatus";
$proto18["m_srcTableName"] = "dbo.novaAgentApplications";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationType",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto20["m_sql"] = "na.applicationType";
$proto20["m_srcTableName"] = "dbo.novaAgentApplications";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantName",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto22["m_sql"] = "na.applicantName";
$proto22["m_srcTableName"] = "dbo.novaAgentApplications";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantFirstName",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto24["m_sql"] = "na.applicantFirstName";
$proto24["m_srcTableName"] = "dbo.novaAgentApplications";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantBirthdate",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto26["m_sql"] = "na.applicantBirthdate";
$proto26["m_srcTableName"] = "dbo.novaAgentApplications";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantProfession",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto28["m_sql"] = "na.applicantProfession";
$proto28["m_srcTableName"] = "dbo.novaAgentApplications";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantIdNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto30["m_sql"] = "na.applicantIdNumber";
$proto30["m_srcTableName"] = "dbo.novaAgentApplications";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantAddress",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto32["m_sql"] = "na.applicantAddress";
$proto32["m_srcTableName"] = "dbo.novaAgentApplications";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPostalCode",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto34["m_sql"] = "na.applicantPostalCode";
$proto34["m_srcTableName"] = "dbo.novaAgentApplications";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantArea",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto36["m_sql"] = "na.applicantArea";
$proto36["m_srcTableName"] = "dbo.novaAgentApplications";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantCity",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto38["m_sql"] = "na.applicantCity";
$proto38["m_srcTableName"] = "dbo.novaAgentApplications";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxRegistrationNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto40["m_sql"] = "na.applicantTaxRegistrationNumber";
$proto40["m_srcTableName"] = "dbo.novaAgentApplications";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxOffice",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto42["m_sql"] = "na.applicantTaxOffice";
$proto42["m_srcTableName"] = "dbo.novaAgentApplications";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPhone",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto44["m_sql"] = "na.applicantPhone";
$proto44["m_srcTableName"] = "dbo.novaAgentApplications";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantMobile",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto46["m_sql"] = "na.applicantMobile";
$proto46["m_srcTableName"] = "dbo.novaAgentApplications";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantEmail",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto48["m_sql"] = "na.applicantEmail";
$proto48["m_srcTableName"] = "dbo.novaAgentApplications";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "standAloneProgram",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto50["m_sql"] = "na.standAloneProgram";
$proto50["m_srcTableName"] = "dbo.novaAgentApplications";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "doublePlayProgram",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto52["m_sql"] = "na.doublePlayProgram";
$proto52["m_srcTableName"] = "dbo.novaAgentApplications";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramSpeed",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto54["m_sql"] = "na.ProgramSpeed";
$proto54["m_srcTableName"] = "dbo.novaAgentApplications";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "triplePlayProgram",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto56["m_sql"] = "na.triplePlayProgram";
$proto56["m_srcTableName"] = "dbo.novaAgentApplications";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "triplePlayProgramType",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto58["m_sql"] = "na.triplePlayProgramType";
$proto58["m_srcTableName"] = "dbo.novaAgentApplications";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternet",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto60["m_sql"] = "na.additionalServiceInternet";
$proto60["m_srcTableName"] = "dbo.novaAgentApplications";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternetSpeed",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto62["m_sql"] = "na.additionalServiceInternetSpeed";
$proto62["m_srcTableName"] = "dbo.novaAgentApplications";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceInternationalCalls",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto64["m_sql"] = "na.additionalServiceInternationalCalls";
$proto64["m_srcTableName"] = "dbo.novaAgentApplications";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceStaticIp",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto66["m_sql"] = "na.additionalServiceStaticIp";
$proto66["m_srcTableName"] = "dbo.novaAgentApplications";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceStaticBlock8Ip",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto68["m_sql"] = "na.additionalServiceStaticBlock8Ip";
$proto68["m_srcTableName"] = "dbo.novaAgentApplications";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceSecondLine",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto70["m_sql"] = "na.additionalServiceSecondLine";
$proto70["m_srcTableName"] = "dbo.novaAgentApplications";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceLandLine1000Minutes",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto72["m_sql"] = "na.additionalServiceLandLine1000Minutes";
$proto72["m_srcTableName"] = "dbo.novaAgentApplications";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEquipment",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto74["m_sql"] = "na.additionalServiceEquipment";
$proto74["m_srcTableName"] = "dbo.novaAgentApplications";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServiceEquipmentInstallation",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto76["m_sql"] = "na.additionalServiceEquipmentInstallation";
$proto76["m_srcTableName"] = "dbo.novaAgentApplications";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityIsNewLine",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto78["m_sql"] = "na.portabilityIsNewLine";
$proto78["m_srcTableName"] = "dbo.novaAgentApplications";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityOldNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto80["m_sql"] = "na.portabilityOldNumber";
$proto80["m_srcTableName"] = "dbo.novaAgentApplications";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityOldOwner",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto82["m_sql"] = "na.portabilityOldOwner";
$proto82["m_srcTableName"] = "dbo.novaAgentApplications";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationAddress",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto84["m_sql"] = "na.portabilityActivationAddress";
$proto84["m_srcTableName"] = "dbo.novaAgentApplications";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationPostalCode",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto86["m_sql"] = "na.portabilityActivationPostalCode";
$proto86["m_srcTableName"] = "dbo.novaAgentApplications";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationArea",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto88["m_sql"] = "na.portabilityActivationArea";
$proto88["m_srcTableName"] = "dbo.novaAgentApplications";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityActivationCity",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto90["m_sql"] = "na.portabilityActivationCity";
$proto90["m_srcTableName"] = "dbo.novaAgentApplications";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityPstnIsdn",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto92["m_sql"] = "na.portabilityPstnIsdn";
$proto92["m_srcTableName"] = "dbo.novaAgentApplications";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine1PhoneNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto94["m_sql"] = "na.portabilityLine1PhoneNumber";
$proto94["m_srcTableName"] = "dbo.novaAgentApplications";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine2PhoneNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto96["m_sql"] = "na.portabilityLine2PhoneNumber";
$proto96["m_srcTableName"] = "dbo.novaAgentApplications";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine3PhoneNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto98["m_sql"] = "na.portabilityLine3PhoneNumber";
$proto98["m_srcTableName"] = "dbo.novaAgentApplications";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityLine4PhoneNumber",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto100["m_sql"] = "na.portabilityLine4PhoneNumber";
$proto100["m_srcTableName"] = "dbo.novaAgentApplications";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityUsername1",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto102["m_sql"] = "na.portabilityUsername1";
$proto102["m_srcTableName"] = "dbo.novaAgentApplications";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "portabilityusername2",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto104["m_sql"] = "na.portabilityusername2";
$proto104["m_srcTableName"] = "dbo.novaAgentApplications";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "documentIdPassport",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto106["m_sql"] = "na.documentIdPassport";
$proto106["m_srcTableName"] = "dbo.novaAgentApplications";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "documentIdPassportPreviousOwner",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto108["m_sql"] = "na.documentIdPassportPreviousOwner";
$proto108["m_srcTableName"] = "dbo.novaAgentApplications";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "documentLastBill",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto110["m_sql"] = "na.documentLastBill";
$proto110["m_srcTableName"] = "dbo.novaAgentApplications";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "documentAddressValidation",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto112["m_sql"] = "na.documentAddressValidation";
$proto112["m_srcTableName"] = "dbo.novaAgentApplications";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "documentDeathCertificate",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto114["m_sql"] = "na.documentDeathCertificate";
$proto114["m_srcTableName"] = "dbo.novaAgentApplications";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "documentAuthorization",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto116["m_sql"] = "na.documentAuthorization";
$proto116["m_srcTableName"] = "dbo.novaAgentApplications";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "documentOther",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto118["m_sql"] = "na.documentOther";
$proto118["m_srcTableName"] = "dbo.novaAgentApplications";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "documentOtherType",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto120["m_sql"] = "na.documentOtherType";
$proto120["m_srcTableName"] = "dbo.novaAgentApplications";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationContactMethod",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto122["m_sql"] = "na.applicationContactMethod";
$proto122["m_srcTableName"] = "dbo.novaAgentApplications";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourier",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto124["m_sql"] = "na.applicationCourier";
$proto124["m_srcTableName"] = "dbo.novaAgentApplications";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierDate",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto126["m_sql"] = "na.applicationCourierDate";
$proto126["m_srcTableName"] = "dbo.novaAgentApplications";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeFrom",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto128["m_sql"] = "na.applicationCourierTimeFrom";
$proto128["m_srcTableName"] = "dbo.novaAgentApplications";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeTo",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto130["m_sql"] = "na.applicationCourierTimeTo";
$proto130["m_srcTableName"] = "dbo.novaAgentApplications";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierComments",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto132["m_sql"] = "na.applicationCourierComments";
$proto132["m_srcTableName"] = "dbo.novaAgentApplications";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "na",
	"m_srcTableName" => "dbo.novaAgentApplications"
));

$proto134["m_sql"] = "na.dialerAgent";
$proto134["m_srcTableName"] = "dbo.novaAgentApplications";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto136=array();
$proto136["m_link"] = "SQLL_MAIN";
			$proto137=array();
$proto137["m_strName"] = "dbo.novaApplications";
$proto137["m_srcTableName"] = "dbo.novaAgentApplications";
$proto137["m_columns"] = array();
$proto137["m_columns"][] = "id";
$proto137["m_columns"][] = "callid";
$proto137["m_columns"][] = "applicationStatusId";
$proto137["m_columns"][] = "applicationType";
$proto137["m_columns"][] = "applicantName";
$proto137["m_columns"][] = "applicantFirstName";
$proto137["m_columns"][] = "applicantBirthdate";
$proto137["m_columns"][] = "applicantProfession";
$proto137["m_columns"][] = "applicantIdNumber";
$proto137["m_columns"][] = "applicantAddress";
$proto137["m_columns"][] = "applicantPostalCode";
$proto137["m_columns"][] = "applicantArea";
$proto137["m_columns"][] = "applicantCity";
$proto137["m_columns"][] = "applicantTaxRegistrationNumber";
$proto137["m_columns"][] = "applicantTaxOffice";
$proto137["m_columns"][] = "applicantPhone";
$proto137["m_columns"][] = "applicantMobile";
$proto137["m_columns"][] = "applicantEmail";
$proto137["m_columns"][] = "standAloneProgram";
$proto137["m_columns"][] = "doublePlayProgram";
$proto137["m_columns"][] = "ProgramSpeed";
$proto137["m_columns"][] = "triplePlayProgram";
$proto137["m_columns"][] = "triplePlayProgramType";
$proto137["m_columns"][] = "additionalServiceInternet";
$proto137["m_columns"][] = "additionalServiceInternetSpeed";
$proto137["m_columns"][] = "additionalServiceInternationalCalls";
$proto137["m_columns"][] = "additionalServiceStaticIp";
$proto137["m_columns"][] = "additionalServiceStaticBlock8Ip";
$proto137["m_columns"][] = "additionalServiceSecondLine";
$proto137["m_columns"][] = "additionalServiceLandLine1000Minutes";
$proto137["m_columns"][] = "additionalServiceEquipment";
$proto137["m_columns"][] = "additionalServiceEquipmentInstallation";
$proto137["m_columns"][] = "portabilityIsNewLine";
$proto137["m_columns"][] = "portabilityOldNumber";
$proto137["m_columns"][] = "portabilityOldOwner";
$proto137["m_columns"][] = "portabilityActivationAddress";
$proto137["m_columns"][] = "portabilityActivationPostalCode";
$proto137["m_columns"][] = "portabilityActivationArea";
$proto137["m_columns"][] = "portabilityActivationCity";
$proto137["m_columns"][] = "portabilityPstnIsdn";
$proto137["m_columns"][] = "portabilityLine1PhoneNumber";
$proto137["m_columns"][] = "portabilityLine2PhoneNumber";
$proto137["m_columns"][] = "portabilityLine3PhoneNumber";
$proto137["m_columns"][] = "portabilityLine4PhoneNumber";
$proto137["m_columns"][] = "portabilityUsername1";
$proto137["m_columns"][] = "portabilityusername2";
$proto137["m_columns"][] = "documentIdPassport";
$proto137["m_columns"][] = "documentIdPassportPreviousOwner";
$proto137["m_columns"][] = "documentLastBill";
$proto137["m_columns"][] = "documentAddressValidation";
$proto137["m_columns"][] = "documentDeathCertificate";
$proto137["m_columns"][] = "documentAuthorization";
$proto137["m_columns"][] = "documentOther";
$proto137["m_columns"][] = "documentOtherType";
$proto137["m_columns"][] = "applicationAgentStatus";
$proto137["m_columns"][] = "applicationLastStatusDate";
$proto137["m_columns"][] = "applicationContactMethod";
$proto137["m_columns"][] = "applicationCourier";
$proto137["m_columns"][] = "applicationCourierDate";
$proto137["m_columns"][] = "applicationCourierTimeFrom";
$proto137["m_columns"][] = "applicationCourierTimeTo";
$proto137["m_columns"][] = "applicationCourierComments";
$proto137["m_columns"][] = "dialerAgent";
$proto137["m_columns"][] = "adittionalServiceMobileNoLimit";
$proto137["m_columns"][] = "additionalServiceEONMultiScreen";
$proto137["m_columns"][] = "additionalServiceNovaMultiroom";
$proto137["m_columns"][] = "additionalServiceAdultPack";
$obj = new SQLTable($proto137);

$proto136["m_table"] = $obj;
$proto136["m_sql"] = "dbo.novaApplications AS na";
$proto136["m_alias"] = "na";
$proto136["m_srcTableName"] = "dbo.novaAgentApplications";
$proto138=array();
$proto138["m_sql"] = "";
$proto138["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto138["m_column"]=$obj;
$proto138["m_contained"] = array();
$proto138["m_strCase"] = "";
$proto138["m_havingmode"] = false;
$proto138["m_inBrackets"] = false;
$proto138["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto138);

$proto136["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto136);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.novaAgentApplications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_novaagentapplications = createSqlQuery_novaagentapplications();


	
		;

																																																																

$tdatanovaagentapplications[".sqlquery"] = $queryData_novaagentapplications;



include_once(getabspath("include/novaagentapplications_events.php"));
$tableEvents["dbo.novaAgentApplications"] = new eventclass_novaagentapplications;
$tdatanovaagentapplications[".hasEvents"] = true;

?>