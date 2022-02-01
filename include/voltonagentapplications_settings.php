<?php
$tdatavoltonagentapplications = array();
$tdatavoltonagentapplications[".searchableFields"] = array();
$tdatavoltonagentapplications[".ShortName"] = "voltonagentapplications";
$tdatavoltonagentapplications[".OwnerID"] = "";
$tdatavoltonagentapplications[".OriginalTable"] = "dbo.voltonApplications";


$tdatavoltonagentapplications[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"voltonInDetailAddList\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"volton_view_popup\",\"view\"]}" );
$tdatavoltonagentapplications[".originalPagesByType"] = $tdatavoltonagentapplications[".pagesByType"];
$tdatavoltonagentapplications[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"voltonInDetailAddList\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"volton_view_popup\",\"view\"]}" ) );
$tdatavoltonagentapplications[".originalPages"] = $tdatavoltonagentapplications[".pages"];
$tdatavoltonagentapplications[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\",\"view\":\"volton_view_popup\"}" );
$tdatavoltonagentapplications[".originalDefaultPages"] = $tdatavoltonagentapplications[".defaultPages"];

//	field labels
$fieldLabelsvoltonagentapplications = array();
$fieldToolTipsvoltonagentapplications = array();
$pageTitlesvoltonagentapplications = array();
$placeHoldersvoltonagentapplications = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvoltonagentapplications["Greek"] = array();
	$fieldToolTipsvoltonagentapplications["Greek"] = array();
	$placeHoldersvoltonagentapplications["Greek"] = array();
	$pageTitlesvoltonagentapplications["Greek"] = array();
	$fieldLabelsvoltonagentapplications["Greek"]["id"] = "Id";
	$fieldToolTipsvoltonagentapplications["Greek"]["id"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["id"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["callid"] = "Callid";
	$fieldToolTipsvoltonagentapplications["Greek"]["callid"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["callid"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantName"] = "Ονοματεπώνυμο/Επωνυμία";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantName"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantName"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantIdNumber"] = "ΑΔΤ/Αρ. Διαβ.";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantIdNumber"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantIdNumber"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantAddress"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantAddress"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantPostalCode"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantPostalCode"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantTaxRegistrationNumber"] = "ΑΦΜ";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantTaxOffice"] = "ΔΟΥ";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantTaxOffice"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantTaxOffice"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantEmail"] = "Email";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantEmail"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantEmail"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantProfession"] = "Επάγγελμα";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantProfession"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantProfession"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantKod"] = "ΚΟΔ";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantKod"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantKod"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantGemi"] = "ΓΕΜΗ";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantGemi"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantGemi"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactName"] = "Ονοματεπώνυμο";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactName"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactName"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactPhone"] = "Τηλέφωνο";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactPhone"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactPhone"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactMobile"] = "Κινητό";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactMobile"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactMobile"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactEmail"] = "Email";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactEmail"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactEmail"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantPhone"] = "Τηλ. Οικίας";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantPhone"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantPhone"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantMobile"] = "Κινητό";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantMobile"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantMobile"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["legalName"] = "Ονοματεπώνυμο";
	$fieldToolTipsvoltonagentapplications["Greek"]["legalName"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["legalName"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["legalIdNumber"] = "ΑΔΤ/Αρ. Διαβ.";
	$fieldToolTipsvoltonagentapplications["Greek"]["legalIdNumber"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["legalIdNumber"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["mailAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonagentapplications["Greek"]["mailAddress"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["mailAddress"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["mailPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonagentapplications["Greek"]["mailPostalCode"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["mailPostalCode"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerAddress"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerAddress"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerOwnershipType"] = "Ιδιοκτησία";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerOwnershipType"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerOwnershipType"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerPostalCode"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerPostalCode"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerAgreedKw"] = "Συμφωνημένη Ισχύς (Kw)";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerAgreedKw"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerAgreedKw"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerSupplyNumber"] = "Αρ. Παροχής";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerSupplyNumber"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerSupplyNumber"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerMeterNumber"] = "Αρ. Μετρητή";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerMeterNumber"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerMeterNumber"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerCurrentSupplier"] = "Πάροχος";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerCurrentSupplier"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerCurrentSupplier"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerCurrentDayMeter"] = "Ένδειξη Ημερήσια";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerCurrentDayMeter"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerCurrentDayMeter"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerCurrentNightMeter"] = "Νυχτερινή";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerCurrentNightMeter"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerCurrentNightMeter"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerActivationStatus"] = "Ενεργοποίηση";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerActivationStatus"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerActivationStatus"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonPlan"] = "Πρόγραμμα Volton";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonPlan"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonPlan"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonContractDuration"] = "Διάρκεια";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonContractDuration"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonContractDuration"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonWarrantyAmount"] = "Ποσό Εγγύησης";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonWarrantyAmount"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonWarrantyAmount"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonWarrantyOnFirstBill"] = "Εγγύηση στον 1ο Λ/σμό";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonWarrantyOnFirstBill"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonWarrantyOnFirstBill"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonOther"] = "Άλλο";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonOther"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonOther"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonComments"] = "Παρατηρήσεις";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonComments"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonComments"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["voltonAutoPayment"] = "Πάγια Εντολή Μέσω Τραπεζικού Λογαριασμού";
	$fieldToolTipsvoltonagentapplications["Greek"]["voltonAutoPayment"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["voltonAutoPayment"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicationType"] = "Τύπος Αίτησης";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicationType"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicationType"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantWorkPhone"] = "Τηλ. Εργασίας";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantWorkPhone"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantWorkPhone"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document1"] = "Έγγραφο Ταυτοποίησης";
	$fieldToolTipsvoltonagentapplications["Greek"]["document1"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document1"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document2"] = "Ε2 ή Ε9 ή συμβόλαιο";
	$fieldToolTipsvoltonagentapplications["Greek"]["document2"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document2"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document3"] = "Φωτό Μετρητή";
	$fieldToolTipsvoltonagentapplications["Greek"]["document3"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document3"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document4"] = "Document4";
	$fieldToolTipsvoltonagentapplications["Greek"]["document4"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document4"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document5"] = "Τελευταίος λογαριασμός ρεύματος";
	$fieldToolTipsvoltonagentapplications["Greek"]["document5"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document5"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document6"] = "Απόδ. Πληρωμής Τελ. Δόσης δ/νισμού";
	$fieldToolTipsvoltonagentapplications["Greek"]["document6"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document6"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document7"] = "Αντίγραφο παλιού λογαριασμού ";
	$fieldToolTipsvoltonagentapplications["Greek"]["document7"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document7"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document8"] = "Υπεύθυνη δήλωση κομμένης παροχής";
	$fieldToolTipsvoltonagentapplications["Greek"]["document8"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document8"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document9"] = " φωτογραφία του ρολογιού";
	$fieldToolTipsvoltonagentapplications["Greek"]["document9"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document9"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document10"] = " Σύμβαση του ΔΕΔΔΗΕ";
	$fieldToolTipsvoltonagentapplications["Greek"]["document10"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document10"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document11"] = "Προσφ. Μισθωτήριο ή 
Ιδιωτικό Συμφ. Μίσθωσης ";
	$fieldToolTipsvoltonagentapplications["Greek"]["document11"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document11"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document12"] = "Υπ. Δήλωση Μετ/σης Ενεργής Παροχής";
	$fieldToolTipsvoltonagentapplications["Greek"]["document12"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document12"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document13"] = "Έναρξη ή πρόσφατη Απ.Ταμ.Μηχανής";
	$fieldToolTipsvoltonagentapplications["Greek"]["document13"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document13"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document14"] = "Προκαταβολή x€ * τ.μ";
	$fieldToolTipsvoltonagentapplications["Greek"]["document14"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document14"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["document15"] = "Document15";
	$fieldToolTipsvoltonagentapplications["Greek"]["document15"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["document15"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicationStatusId"] = "Κατάσταση Αίτησης (BackOffice)";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicationStatusId"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicationStatusId"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantArea"] = "Περιοχή";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantArea"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantArea"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicantCity"] = "Πόλη";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicantCity"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicantCity"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["mailArea"] = "Περιοχή";
	$fieldToolTipsvoltonagentapplications["Greek"]["mailArea"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["mailArea"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["mailCity"] = "Πόλη";
	$fieldToolTipsvoltonagentapplications["Greek"]["mailCity"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["mailCity"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerArea"] = "Περιοχή";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerArea"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerArea"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["powerCity"] = "Πόλη";
	$fieldToolTipsvoltonagentapplications["Greek"]["powerCity"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["powerCity"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngAddress"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngAddress"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngPostalCode"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngPostalCode"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngArea"] = "Περιοχή";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngArea"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngArea"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngCity"] = "Πόλη";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngCity"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngCity"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngPressure"] = "Πίεση Δικτύου - Χαμηλή Πίεση";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngPressure"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngPressure"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngHourlyCapacity"] = "Δεσμ. ωριαία δυναμικότητα σημείου (kW/h)";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngHourlyCapacity"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngHourlyCapacity"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngHkasp"] = "ΗΚΑΣΠ";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngHkasp"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngHkasp"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngMeterNumber"] = "Αρ. Μετρητή";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngMeterNumber"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngMeterNumber"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngMeterType"] = "Τύπος Μετρητή";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngMeterType"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngMeterType"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngCurrentMeterValue"] = "Τελευταία Ένδειξη";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngCurrentMeterValue"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngCurrentMeterValue"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngConnectionExists"] = "Υφίσταται Σύνδεση";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngConnectionExists"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngConnectionExists"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngSupplyIsNew"] = "Πρώτη Τροφοδότηση";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngSupplyIsNew"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngSupplyIsNew"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ngSupplyReactivation"] = "Επανενεργοποίηση";
	$fieldToolTipsvoltonagentapplications["Greek"]["ngSupplyReactivation"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ngSupplyReactivation"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicationAgentStatus"] = "Κατάσταση Αίτησης (Agent)";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicationAgentStatus"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicationAgentStatus"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["applicationLastStatusDate"] = "Τελ. Ημ/νία Status";
	$fieldToolTipsvoltonagentapplications["Greek"]["applicationLastStatusDate"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["applicationLastStatusDate"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["dialerList"] = "Dialer List";
	$fieldToolTipsvoltonagentapplications["Greek"]["dialerList"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["dialerList"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["dialerAgent"] = "Dialer Agent";
	$fieldToolTipsvoltonagentapplications["Greek"]["dialerAgent"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["dialerAgent"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["dialerRecording"] = "Dialer Recording";
	$fieldToolTipsvoltonagentapplications["Greek"]["dialerRecording"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["dialerRecording"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["orderShipCompany"] = "Order Ship Company";
	$fieldToolTipsvoltonagentapplications["Greek"]["orderShipCompany"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["orderShipCompany"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["orderInvoiceRequired"] = "Order Invoice Required";
	$fieldToolTipsvoltonagentapplications["Greek"]["orderInvoiceRequired"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["orderInvoiceRequired"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["callComments"] = "Call Comments";
	$fieldToolTipsvoltonagentapplications["Greek"]["callComments"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["callComments"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["internalCommunication"] = "Internal Communication";
	$fieldToolTipsvoltonagentapplications["Greek"]["internalCommunication"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["internalCommunication"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["callGdprAcceptance"] = "Call Gdpr Acceptance";
	$fieldToolTipsvoltonagentapplications["Greek"]["callGdprAcceptance"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["callGdprAcceptance"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["callGdprRecordingAcceptance"] = "Call Gdpr Recording Acceptance";
	$fieldToolTipsvoltonagentapplications["Greek"]["callGdprRecordingAcceptance"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["callGdprRecordingAcceptance"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["orderPaymentMethod"] = "Order Payment Method";
	$fieldToolTipsvoltonagentapplications["Greek"]["orderPaymentMethod"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["orderPaymentMethod"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["Expr2"] = "Expr2";
	$fieldToolTipsvoltonagentapplications["Greek"]["Expr2"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["Expr2"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactZipCode"] = "Contact Zip Code";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactZipCode"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactZipCode"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactCity"] = "Contact City";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactCity"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactCity"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["ContactArea"] = "Contact Area";
	$fieldToolTipsvoltonagentapplications["Greek"]["ContactArea"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["ContactArea"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactGender"] = "Contact Gender";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactGender"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactGender"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactAge"] = "Contact Age";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactAge"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactAge"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["crmUser"] = "Crm User";
	$fieldToolTipsvoltonagentapplications["Greek"]["crmUser"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["crmUser"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["pauseAfterCall"] = "Pause After Call";
	$fieldToolTipsvoltonagentapplications["Greek"]["pauseAfterCall"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["pauseAfterCall"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["dialerPhone"] = "Dialer Phone";
	$fieldToolTipsvoltonagentapplications["Greek"]["dialerPhone"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["dialerPhone"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["dialerCampaign"] = "Dialer Campaign";
	$fieldToolTipsvoltonagentapplications["Greek"]["dialerCampaign"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["dialerCampaign"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["productFamilyId"] = "Product Family Id";
	$fieldToolTipsvoltonagentapplications["Greek"]["productFamilyId"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["productFamilyId"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["contactMethod"] = "Contact Method";
	$fieldToolTipsvoltonagentapplications["Greek"]["contactMethod"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["contactMethod"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["courier"] = "Courier";
	$fieldToolTipsvoltonagentapplications["Greek"]["courier"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["courier"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["deliveryComments"] = "Delivery Comments";
	$fieldToolTipsvoltonagentapplications["Greek"]["deliveryComments"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["deliveryComments"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["courierDeliveryDate"] = "Courier Delivery Date";
	$fieldToolTipsvoltonagentapplications["Greek"]["courierDeliveryDate"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["courierDeliveryDate"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["courierTimeFrom"] = "Courier Time From";
	$fieldToolTipsvoltonagentapplications["Greek"]["courierTimeFrom"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["courierTimeFrom"] = "";
	$fieldLabelsvoltonagentapplications["Greek"]["courierTimeTo"] = "Courier Time To";
	$fieldToolTipsvoltonagentapplications["Greek"]["courierTimeTo"] = "";
	$placeHoldersvoltonagentapplications["Greek"]["courierTimeTo"] = "";
	if (count($fieldToolTipsvoltonagentapplications["Greek"]))
		$tdatavoltonagentapplications[".isUseToolTips"] = true;
}


	$tdatavoltonagentapplications[".NCSearch"] = true;



$tdatavoltonagentapplications[".shortTableName"] = "voltonagentapplications";
$tdatavoltonagentapplications[".nSecOptions"] = 0;

$tdatavoltonagentapplications[".mainTableOwnerID"] = "";
$tdatavoltonagentapplications[".entityType"] = 1;
$tdatavoltonagentapplications[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavoltonagentapplications[".strOriginalTableName"] = "dbo.voltonApplications";

	



$tdatavoltonagentapplications[".showAddInPopup"] = false;

$tdatavoltonagentapplications[".showEditInPopup"] = false;

$tdatavoltonagentapplications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoltonagentapplications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavoltonagentapplications[".listAjax"] = false;
//	temporary
$tdatavoltonagentapplications[".listAjax"] = false;

	$tdatavoltonagentapplications[".audit"] = true;

	$tdatavoltonagentapplications[".locking"] = false;


$pages = $tdatavoltonagentapplications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavoltonagentapplications[".edit"] = true;
	$tdatavoltonagentapplications[".afterEditAction"] = 0;
	$tdatavoltonagentapplications[".closePopupAfterEdit"] = 1;
	$tdatavoltonagentapplications[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavoltonagentapplications[".add"] = true;
$tdatavoltonagentapplications[".afterAddAction"] = 0;
$tdatavoltonagentapplications[".closePopupAfterAdd"] = 1;
$tdatavoltonagentapplications[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatavoltonagentapplications[".list"] = true;
}



$tdatavoltonagentapplications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavoltonagentapplications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavoltonagentapplications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavoltonagentapplications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavoltonagentapplications[".printFriendly"] = true;
}



$tdatavoltonagentapplications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavoltonagentapplications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavoltonagentapplications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavoltonagentapplications[".isUseAjaxSuggest"] = false;

$tdatavoltonagentapplications[".rowHighlite"] = true;



																																																																				
		
																																																							

$tdatavoltonagentapplications[".ajaxCodeSnippetAdded"] = false;

$tdatavoltonagentapplications[".buttonsAdded"] = true;

$tdatavoltonagentapplications[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavoltonagentapplications[".isUseTimeForSearch"] = false;


$tdatavoltonagentapplications[".badgeColor"] = "DC143C";


$tdatavoltonagentapplications[".allSearchFields"] = array();
$tdatavoltonagentapplications[".filterFields"] = array();
$tdatavoltonagentapplications[".requiredSearchFields"] = array();

$tdatavoltonagentapplications[".googleLikeFields"] = array();
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicationStatusId";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicationType";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantName";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantArea";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantCity";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantTaxRegistrationNumber";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantPhone";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantWorkPhone";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicantMobile";
$tdatavoltonagentapplications[".googleLikeFields"][] = "powerMeterNumber";
$tdatavoltonagentapplications[".googleLikeFields"][] = "powerCurrentSupplier";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngAddress";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngPostalCode";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngArea";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngCity";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngPressure";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngHourlyCapacity";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngHkasp";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngMeterNumber";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngMeterType";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngCurrentMeterValue";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngConnectionExists";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngSupplyIsNew";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ngSupplyReactivation";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicationAgentStatus";
$tdatavoltonagentapplications[".googleLikeFields"][] = "applicationLastStatusDate";
$tdatavoltonagentapplications[".googleLikeFields"][] = "dialerList";
$tdatavoltonagentapplications[".googleLikeFields"][] = "dialerAgent";
$tdatavoltonagentapplications[".googleLikeFields"][] = "dialerRecording";
$tdatavoltonagentapplications[".googleLikeFields"][] = "orderShipCompany";
$tdatavoltonagentapplications[".googleLikeFields"][] = "orderInvoiceRequired";
$tdatavoltonagentapplications[".googleLikeFields"][] = "callComments";
$tdatavoltonagentapplications[".googleLikeFields"][] = "internalCommunication";
$tdatavoltonagentapplications[".googleLikeFields"][] = "callGdprAcceptance";
$tdatavoltonagentapplications[".googleLikeFields"][] = "callGdprRecordingAcceptance";
$tdatavoltonagentapplications[".googleLikeFields"][] = "orderPaymentMethod";
$tdatavoltonagentapplications[".googleLikeFields"][] = "Expr2";
$tdatavoltonagentapplications[".googleLikeFields"][] = "contactZipCode";
$tdatavoltonagentapplications[".googleLikeFields"][] = "contactCity";
$tdatavoltonagentapplications[".googleLikeFields"][] = "ContactArea";
$tdatavoltonagentapplications[".googleLikeFields"][] = "contactGender";
$tdatavoltonagentapplications[".googleLikeFields"][] = "contactAge";
$tdatavoltonagentapplications[".googleLikeFields"][] = "crmUser";
$tdatavoltonagentapplications[".googleLikeFields"][] = "pauseAfterCall";
$tdatavoltonagentapplications[".googleLikeFields"][] = "dialerPhone";
$tdatavoltonagentapplications[".googleLikeFields"][] = "dialerCampaign";
$tdatavoltonagentapplications[".googleLikeFields"][] = "productFamilyId";
$tdatavoltonagentapplications[".googleLikeFields"][] = "contactMethod";
$tdatavoltonagentapplications[".googleLikeFields"][] = "courier";
$tdatavoltonagentapplications[".googleLikeFields"][] = "deliveryComments";
$tdatavoltonagentapplications[".googleLikeFields"][] = "courierDeliveryDate";
$tdatavoltonagentapplications[".googleLikeFields"][] = "courierTimeFrom";
$tdatavoltonagentapplications[".googleLikeFields"][] = "courierTimeTo";



$tdatavoltonagentapplications[".tableType"] = "list";

$tdatavoltonagentapplications[".printerPageOrientation"] = 0;
$tdatavoltonagentapplications[".nPrinterPageScale"] = 100;

$tdatavoltonagentapplications[".nPrinterSplitRecords"] = 40;

$tdatavoltonagentapplications[".geocodingEnabled"] = false;






$tdatavoltonagentapplications[".searchIsRequiredForFilters"] = true;

$tdatavoltonagentapplications[".noRecordsFirstPage"] = true;



$tdatavoltonagentapplications[".pageSize"] = 20;

$tdatavoltonagentapplications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoltonagentapplications[".strOrderBy"] = $tstrOrderBy;

$tdatavoltonagentapplications[".orderindexes"] = array();


$tdatavoltonagentapplications[".sqlHead"] = "SELECT va.id, va.callid, va.applicationStatusId, va.applicationType, va.applicantName, va.applicantIdNumber, va.applicantAddress, va.applicantPostalCode, va.applicantArea, va.applicantCity, va.applicantTaxRegistrationNumber,                            va.applicantTaxOffice, va.applicantEmail, va.applicantProfession, va.applicantKod, va.applicantGemi, va.applicantPhone, va.applicantWorkPhone, va.applicantMobile, va.contactName, va.contactPhone, va.contactMobile,                            va.contactEmail, va.legalName, va.legalIdNumber, va.mailAddress, va.mailPostalCode, va.mailArea, va.mailCity, va.powerAddress, va.powerOwnershipType, va.powerPostalCode, va.powerArea, va.powerCity,                            va.powerAgreedKw, va.powerSupplyNumber, va.powerMeterNumber, va.powerCurrentSupplier, va.powerCurrentDayMeter, va.powerCurrentNightMeter, va.powerActivationStatus, va.voltonPlan, va.voltonContractDuration,                            va.voltonWarrantyAmount, va.voltonWarrantyOnFirstBill, va.voltonOther, va.voltonComments, va.voltonAutoPayment, va.document1, va.document2, va.document3, va.document4, va.document5, va.document6, va.document7,                            va.document8, va.document9, va.document10, va.document11, va.document12, va.document13, va.document14, va.document15, va.ngAddress, va.ngPostalCode, va.ngArea, va.ngCity, va.ngPressure, va.ngHourlyCapacity,                            va.ngHkasp, va.ngMeterNumber, va.ngMeterType, va.ngCurrentMeterValue, va.ngConnectionExists, va.ngSupplyIsNew, va.ngSupplyReactivation, va.applicationAgentStatus, va.applicationLastStatusDate, c.dialerList,                            c.dialerAgent, c.dialerRecording, c.orderShipCompany, c.orderInvoiceRequired, c.callComments, c.internalCommunication, c.callGdprAcceptance, c.callGdprRecordingAcceptance, c.orderPaymentMethod, c.contactName AS Expr2,                            c.contactZipCode, c.contactCity, c.ContactArea, c.contactGender, c.contactAge, c.crmUser, c.pauseAfterCall, c.dialerPhone, c.dialerCampaign, c.productFamilyId, c.contactMethod, c.courier, c.deliveryComments,                            c.courierDeliveryDate, c.courierTimeFrom, c.courierTimeTo";
$tdatavoltonagentapplications[".sqlFrom"] = "FROM            dbo.voltonApplications AS va INNER JOIN                           dbo.Calls AS c ON c.id = va.callid";
$tdatavoltonagentapplications[".sqlWhereExpr"] = "(c.dialerAgent =':user.username')";
$tdatavoltonagentapplications[".sqlTail"] = "";

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
$tdatavoltonagentapplications[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoltonagentapplications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoltonagentapplications[".arrGroupsPerPage"] = $arrGPP;

$tdatavoltonagentapplications[".highlightSearchResults"] = true;

$tableKeysvoltonagentapplications = array();
$tableKeysvoltonagentapplications[] = "id";
$tdatavoltonagentapplications[".Keys"] = $tableKeysvoltonagentapplications;


$tdatavoltonagentapplications[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","id");
	$fdata["FieldType"] = 3;

	
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


	$tdatavoltonagentapplications["id"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.callid";

	
	
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


	$tdatavoltonagentapplications["callid"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "callid";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicationStatusId";

	
	
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "applicationStatusId_event", "type" => "change" );
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


	$tdatavoltonagentapplications["applicationStatusId"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicationStatusId";
//	applicationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "applicationType";
	$fdata["GoodName"] = "applicationType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicationType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicationType";

	
	
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
	$edata["LookupValues"][] = "Ιδιώτη";
	$edata["LookupValues"][] = "Εταιρίας";

	
	
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


	$tdatavoltonagentapplications["applicationType"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicationType";
//	applicantName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "applicantName";
	$fdata["GoodName"] = "applicantName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantName";

	
	
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


	$tdatavoltonagentapplications["applicantName"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantName";
//	applicantIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "applicantIdNumber";
	$fdata["GoodName"] = "applicantIdNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantIdNumber";

	
	
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


	$tdatavoltonagentapplications["applicantIdNumber"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantIdNumber";
//	applicantAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "applicantAddress";
	$fdata["GoodName"] = "applicantAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantAddress";

	
	
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


	$tdatavoltonagentapplications["applicantAddress"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantAddress";
//	applicantPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicantPostalCode";
	$fdata["GoodName"] = "applicantPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantPostalCode";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
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


	$tdatavoltonagentapplications["applicantPostalCode"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantPostalCode";
//	applicantArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicantArea";
	$fdata["GoodName"] = "applicantArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantArea";

	
	
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


	$tdatavoltonagentapplications["applicantArea"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantArea";
//	applicantCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "applicantCity";
	$fdata["GoodName"] = "applicantCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantCity";

	
	
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


	$tdatavoltonagentapplications["applicantCity"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantCity";
//	applicantTaxRegistrationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicantTaxRegistrationNumber";
	$fdata["GoodName"] = "applicantTaxRegistrationNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantTaxRegistrationNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxRegistrationNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantTaxRegistrationNumber";

	
	
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


	$tdatavoltonagentapplications["applicantTaxRegistrationNumber"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantTaxRegistrationNumber";
//	applicantTaxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "applicantTaxOffice";
	$fdata["GoodName"] = "applicantTaxOffice";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantTaxOffice");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxOffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantTaxOffice";

	
	
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


	$tdatavoltonagentapplications["applicantTaxOffice"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantTaxOffice";
//	applicantEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "applicantEmail";
	$fdata["GoodName"] = "applicantEmail";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantEmail";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatavoltonagentapplications["applicantEmail"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantEmail";
//	applicantProfession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "applicantProfession";
	$fdata["GoodName"] = "applicantProfession";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantProfession");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantProfession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantProfession";

	
	
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


	$tdatavoltonagentapplications["applicantProfession"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantProfession";
//	applicantKod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "applicantKod";
	$fdata["GoodName"] = "applicantKod";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantKod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantKod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantKod";

	
	
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


	$tdatavoltonagentapplications["applicantKod"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantKod";
//	applicantGemi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "applicantGemi";
	$fdata["GoodName"] = "applicantGemi";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantGemi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantGemi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantGemi";

	
	
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


	$tdatavoltonagentapplications["applicantGemi"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantGemi";
//	applicantPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "applicantPhone";
	$fdata["GoodName"] = "applicantPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantPhone";

	
	
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


	$tdatavoltonagentapplications["applicantPhone"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantPhone";
//	applicantWorkPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "applicantWorkPhone";
	$fdata["GoodName"] = "applicantWorkPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantWorkPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantWorkPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantWorkPhone";

	
	
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


	$tdatavoltonagentapplications["applicantWorkPhone"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantWorkPhone";
//	applicantMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "applicantMobile";
	$fdata["GoodName"] = "applicantMobile";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicantMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicantMobile";

	
	
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


	$tdatavoltonagentapplications["applicantMobile"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicantMobile";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.contactName";

	
	
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


	$tdatavoltonagentapplications["contactName"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactName";
//	contactPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "contactPhone";
	$fdata["GoodName"] = "contactPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.contactPhone";

	
	
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


	$tdatavoltonagentapplications["contactPhone"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactPhone";
//	contactMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "contactMobile";
	$fdata["GoodName"] = "contactMobile";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.contactMobile";

	
	
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


	$tdatavoltonagentapplications["contactMobile"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactMobile";
//	contactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "contactEmail";
	$fdata["GoodName"] = "contactEmail";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.contactEmail";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatavoltonagentapplications["contactEmail"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactEmail";
//	legalName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "legalName";
	$fdata["GoodName"] = "legalName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","legalName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "legalName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.legalName";

	
	
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


	$tdatavoltonagentapplications["legalName"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "legalName";
//	legalIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "legalIdNumber";
	$fdata["GoodName"] = "legalIdNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","legalIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "legalIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.legalIdNumber";

	
	
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


	$tdatavoltonagentapplications["legalIdNumber"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "legalIdNumber";
//	mailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "mailAddress";
	$fdata["GoodName"] = "mailAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","mailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.mailAddress";

	
	
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


	$tdatavoltonagentapplications["mailAddress"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "mailAddress";
//	mailPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "mailPostalCode";
	$fdata["GoodName"] = "mailPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","mailPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.mailPostalCode";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mailArea", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"mailCity", 'lookupF'=>"city");
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


	$tdatavoltonagentapplications["mailPostalCode"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "mailPostalCode";
//	mailArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "mailArea";
	$fdata["GoodName"] = "mailArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","mailArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.mailArea";

	
	
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


	$tdatavoltonagentapplications["mailArea"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "mailArea";
//	mailCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "mailCity";
	$fdata["GoodName"] = "mailCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","mailCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.mailCity";

	
	
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


	$tdatavoltonagentapplications["mailCity"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "mailCity";
//	powerAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "powerAddress";
	$fdata["GoodName"] = "powerAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerAddress";

	
	
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


	$tdatavoltonagentapplications["powerAddress"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerAddress";
//	powerOwnershipType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "powerOwnershipType";
	$fdata["GoodName"] = "powerOwnershipType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerOwnershipType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerOwnershipType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerOwnershipType";

	
	
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
	$edata["LookupValues"][] = "Α. Ιδιόχρηση";
	$edata["LookupValues"][] = "Β. Εκμίσθωση";

	
	
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


	$tdatavoltonagentapplications["powerOwnershipType"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerOwnershipType";
//	powerPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "powerPostalCode";
	$fdata["GoodName"] = "powerPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerPostalCode";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"powerArea", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"powerCity", 'lookupF'=>"city");
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


	$tdatavoltonagentapplications["powerPostalCode"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerPostalCode";
//	powerArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "powerArea";
	$fdata["GoodName"] = "powerArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerArea";

	
	
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


	$tdatavoltonagentapplications["powerArea"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerArea";
//	powerCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "powerCity";
	$fdata["GoodName"] = "powerCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerCity";

	
	
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


	$tdatavoltonagentapplications["powerCity"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerCity";
//	powerAgreedKw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "powerAgreedKw";
	$fdata["GoodName"] = "powerAgreedKw";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerAgreedKw");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerAgreedKw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerAgreedKw";

	
	
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


	$tdatavoltonagentapplications["powerAgreedKw"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerAgreedKw";
//	powerSupplyNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "powerSupplyNumber";
	$fdata["GoodName"] = "powerSupplyNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerSupplyNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerSupplyNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerSupplyNumber";

	
	
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


	$tdatavoltonagentapplications["powerSupplyNumber"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerSupplyNumber";
//	powerMeterNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "powerMeterNumber";
	$fdata["GoodName"] = "powerMeterNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerMeterNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerMeterNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerMeterNumber";

	
	
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


	$tdatavoltonagentapplications["powerMeterNumber"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerMeterNumber";
//	powerCurrentSupplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "powerCurrentSupplier";
	$fdata["GoodName"] = "powerCurrentSupplier";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerCurrentSupplier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerCurrentSupplier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerCurrentSupplier";

	
	
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
	$edata["LookupValues"][] = "ΔΕΗ";
	$edata["LookupValues"][] = "PROTERGIA";
	$edata["LookupValues"][] = "ENERGY";
	$edata["LookupValues"][] = "WATT & VOLT";

	
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


	$tdatavoltonagentapplications["powerCurrentSupplier"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerCurrentSupplier";
//	powerCurrentDayMeter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "powerCurrentDayMeter";
	$fdata["GoodName"] = "powerCurrentDayMeter";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerCurrentDayMeter");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerCurrentDayMeter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerCurrentDayMeter";

	
	
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


	$tdatavoltonagentapplications["powerCurrentDayMeter"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerCurrentDayMeter";
//	powerCurrentNightMeter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "powerCurrentNightMeter";
	$fdata["GoodName"] = "powerCurrentNightMeter";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerCurrentNightMeter");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerCurrentNightMeter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerCurrentNightMeter";

	
	
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


	$tdatavoltonagentapplications["powerCurrentNightMeter"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerCurrentNightMeter";
//	powerActivationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "powerActivationStatus";
	$fdata["GoodName"] = "powerActivationStatus";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","powerActivationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerActivationStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.powerActivationStatus";

	
	
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
	$edata["LookupValues"][] = "Πρώτη Ενεργοποίηση";
	$edata["LookupValues"][] = "Επανενεργοποίηση";

	
	
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


	$tdatavoltonagentapplications["powerActivationStatus"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "powerActivationStatus";
//	voltonPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "voltonPlan";
	$fdata["GoodName"] = "voltonPlan";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonPlan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonPlan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonPlan";

	
	
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
	$edata["LookupTable"] = "dbo.voltonPowerPlans";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"voltonContractDuration", 'lookupF'=>"planDuration");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "voltonPowerPlan";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "voltonPowerPlan";

	

	
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


	$tdatavoltonagentapplications["voltonPlan"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonPlan";
//	voltonContractDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "voltonContractDuration";
	$fdata["GoodName"] = "voltonContractDuration";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonContractDuration");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonContractDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonContractDuration";

	
	
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
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "36";

	
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


	$tdatavoltonagentapplications["voltonContractDuration"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonContractDuration";
//	voltonWarrantyAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "voltonWarrantyAmount";
	$fdata["GoodName"] = "voltonWarrantyAmount";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonWarrantyAmount");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "voltonWarrantyAmount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonWarrantyAmount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatavoltonagentapplications["voltonWarrantyAmount"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonWarrantyAmount";
//	voltonWarrantyOnFirstBill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "voltonWarrantyOnFirstBill";
	$fdata["GoodName"] = "voltonWarrantyOnFirstBill";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonWarrantyOnFirstBill");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonWarrantyOnFirstBill";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonWarrantyOnFirstBill";

	
	
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


	$tdatavoltonagentapplications["voltonWarrantyOnFirstBill"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonWarrantyOnFirstBill";
//	voltonOther
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "voltonOther";
	$fdata["GoodName"] = "voltonOther";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonOther");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonOther";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonOther";

	
	
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


	$tdatavoltonagentapplications["voltonOther"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonOther";
//	voltonComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "voltonComments";
	$fdata["GoodName"] = "voltonComments";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonComments");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "voltonComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonComments";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavoltonagentapplications["voltonComments"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonComments";
//	voltonAutoPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "voltonAutoPayment";
	$fdata["GoodName"] = "voltonAutoPayment";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","voltonAutoPayment");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonAutoPayment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.voltonAutoPayment";

	
	
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


	$tdatavoltonagentapplications["voltonAutoPayment"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "voltonAutoPayment";
//	document1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "document1";
	$fdata["GoodName"] = "document1";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document1";

	
	
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


	$tdatavoltonagentapplications["document1"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document1";
//	document2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "document2";
	$fdata["GoodName"] = "document2";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document2");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document2";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavoltonagentapplications["document2"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document2";
//	document3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "document3";
	$fdata["GoodName"] = "document3";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document3");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document3";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavoltonagentapplications["document3"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document3";
//	document4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "document4";
	$fdata["GoodName"] = "document4";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document4");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document4";

	
	
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


	$tdatavoltonagentapplications["document4"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document4";
//	document5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "document5";
	$fdata["GoodName"] = "document5";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document5");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document5";

	
	
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


	$tdatavoltonagentapplications["document5"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document5";
//	document6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "document6";
	$fdata["GoodName"] = "document6";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document6");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document6";

	
	
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


	$tdatavoltonagentapplications["document6"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document6";
//	document7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "document7";
	$fdata["GoodName"] = "document7";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document7");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document7";

	
	
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


	$tdatavoltonagentapplications["document7"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document7";
//	document8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "document8";
	$fdata["GoodName"] = "document8";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document8");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document8";

	
	
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


	$tdatavoltonagentapplications["document8"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document8";
//	document9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "document9";
	$fdata["GoodName"] = "document9";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document9");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document9";

	
	
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


	$tdatavoltonagentapplications["document9"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document9";
//	document10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "document10";
	$fdata["GoodName"] = "document10";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document10");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document10";

	
	
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


	$tdatavoltonagentapplications["document10"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document10";
//	document11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "document11";
	$fdata["GoodName"] = "document11";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document11");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document11";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document11";

	
	
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


	$tdatavoltonagentapplications["document11"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document11";
//	document12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "document12";
	$fdata["GoodName"] = "document12";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document12");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document12";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document12";

	
	
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


	$tdatavoltonagentapplications["document12"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document12";
//	document13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "document13";
	$fdata["GoodName"] = "document13";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document13");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document13";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document13";

	
	
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


	$tdatavoltonagentapplications["document13"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document13";
//	document14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "document14";
	$fdata["GoodName"] = "document14";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document14");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document14";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document14";

	
	
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


	$tdatavoltonagentapplications["document14"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document14";
//	document15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "document15";
	$fdata["GoodName"] = "document15";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","document15");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document15";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.document15";

	
	
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


	$tdatavoltonagentapplications["document15"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "document15";
//	ngAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "ngAddress";
	$fdata["GoodName"] = "ngAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngAddress";

	
	
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


	$tdatavoltonagentapplications["ngAddress"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngAddress";
//	ngPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "ngPostalCode";
	$fdata["GoodName"] = "ngPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngPostalCode";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"ngArea", 'lookupF'=>"area");
	$edata["autoCompleteFields"][] = array('masterF'=>"ngCity", 'lookupF'=>"city");
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


	$tdatavoltonagentapplications["ngPostalCode"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngPostalCode";
//	ngArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "ngArea";
	$fdata["GoodName"] = "ngArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngArea";

	
	
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


	$tdatavoltonagentapplications["ngArea"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngArea";
//	ngCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "ngCity";
	$fdata["GoodName"] = "ngCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngCity";

	
	
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


	$tdatavoltonagentapplications["ngCity"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngCity";
//	ngPressure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "ngPressure";
	$fdata["GoodName"] = "ngPressure";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngPressure");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngPressure";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngPressure";

	
	
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


	$tdatavoltonagentapplications["ngPressure"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngPressure";
//	ngHourlyCapacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "ngHourlyCapacity";
	$fdata["GoodName"] = "ngHourlyCapacity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngHourlyCapacity");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngHourlyCapacity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngHourlyCapacity";

	
	
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


	$tdatavoltonagentapplications["ngHourlyCapacity"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngHourlyCapacity";
//	ngHkasp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "ngHkasp";
	$fdata["GoodName"] = "ngHkasp";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngHkasp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngHkasp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngHkasp";

	
	
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


	$tdatavoltonagentapplications["ngHkasp"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngHkasp";
//	ngMeterNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "ngMeterNumber";
	$fdata["GoodName"] = "ngMeterNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngMeterNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngMeterNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngMeterNumber";

	
	
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


	$tdatavoltonagentapplications["ngMeterNumber"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngMeterNumber";
//	ngMeterType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "ngMeterType";
	$fdata["GoodName"] = "ngMeterType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngMeterType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngMeterType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngMeterType";

	
	
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


	$tdatavoltonagentapplications["ngMeterType"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngMeterType";
//	ngCurrentMeterValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "ngCurrentMeterValue";
	$fdata["GoodName"] = "ngCurrentMeterValue";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngCurrentMeterValue");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngCurrentMeterValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngCurrentMeterValue";

	
	
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


	$tdatavoltonagentapplications["ngCurrentMeterValue"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngCurrentMeterValue";
//	ngConnectionExists
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "ngConnectionExists";
	$fdata["GoodName"] = "ngConnectionExists";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngConnectionExists");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngConnectionExists";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngConnectionExists";

	
	
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


	$tdatavoltonagentapplications["ngConnectionExists"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngConnectionExists";
//	ngSupplyIsNew
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "ngSupplyIsNew";
	$fdata["GoodName"] = "ngSupplyIsNew";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngSupplyIsNew");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngSupplyIsNew";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngSupplyIsNew";

	
	
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


	$tdatavoltonagentapplications["ngSupplyIsNew"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngSupplyIsNew";
//	ngSupplyReactivation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "ngSupplyReactivation";
	$fdata["GoodName"] = "ngSupplyReactivation";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ngSupplyReactivation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngSupplyReactivation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.ngSupplyReactivation";

	
	
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


	$tdatavoltonagentapplications["ngSupplyReactivation"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ngSupplyReactivation";
//	applicationAgentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "applicationAgentStatus";
	$fdata["GoodName"] = "applicationAgentStatus";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicationAgentStatus");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationAgentStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicationAgentStatus";

	
	
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


	$tdatavoltonagentapplications["applicationAgentStatus"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicationAgentStatus";
//	applicationLastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "applicationLastStatusDate";
	$fdata["GoodName"] = "applicationLastStatusDate";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","applicationLastStatusDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicationLastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "va.applicationLastStatusDate";

	
	
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

		$edata["ShowTime"] = true;

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


	$tdatavoltonagentapplications["applicationLastStatusDate"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "applicationLastStatusDate";
//	dialerList
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "dialerList";
	$fdata["GoodName"] = "dialerList";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","dialerList");
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


	$tdatavoltonagentapplications["dialerList"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "dialerList";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","dialerAgent");
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


	$tdatavoltonagentapplications["dialerAgent"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "dialerAgent";
//	dialerRecording
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "dialerRecording";
	$fdata["GoodName"] = "dialerRecording";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","dialerRecording");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerRecording";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.dialerRecording";

	
	
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


	$tdatavoltonagentapplications["dialerRecording"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "dialerRecording";
//	orderShipCompany
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "orderShipCompany";
	$fdata["GoodName"] = "orderShipCompany";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","orderShipCompany");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "orderShipCompany";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.orderShipCompany";

	
	
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


	$tdatavoltonagentapplications["orderShipCompany"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "orderShipCompany";
//	orderInvoiceRequired
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "orderInvoiceRequired";
	$fdata["GoodName"] = "orderInvoiceRequired";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","orderInvoiceRequired");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "orderInvoiceRequired";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.orderInvoiceRequired";

	
	
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


	$tdatavoltonagentapplications["orderInvoiceRequired"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "orderInvoiceRequired";
//	callComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "callComments";
	$fdata["GoodName"] = "callComments";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","callComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "callComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.callComments";

	
	
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


	$tdatavoltonagentapplications["callComments"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "callComments";
//	internalCommunication
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "internalCommunication";
	$fdata["GoodName"] = "internalCommunication";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","internalCommunication");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "internalCommunication";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.internalCommunication";

	
	
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


	$tdatavoltonagentapplications["internalCommunication"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "internalCommunication";
//	callGdprAcceptance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "callGdprAcceptance";
	$fdata["GoodName"] = "callGdprAcceptance";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","callGdprAcceptance");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callGdprAcceptance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.callGdprAcceptance";

	
	
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


	$tdatavoltonagentapplications["callGdprAcceptance"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "callGdprAcceptance";
//	callGdprRecordingAcceptance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "callGdprRecordingAcceptance";
	$fdata["GoodName"] = "callGdprRecordingAcceptance";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","callGdprRecordingAcceptance");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callGdprRecordingAcceptance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.callGdprRecordingAcceptance";

	
	
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


	$tdatavoltonagentapplications["callGdprRecordingAcceptance"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "callGdprRecordingAcceptance";
//	orderPaymentMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "orderPaymentMethod";
	$fdata["GoodName"] = "orderPaymentMethod";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","orderPaymentMethod");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "orderPaymentMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.orderPaymentMethod";

	
	
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


	$tdatavoltonagentapplications["orderPaymentMethod"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "orderPaymentMethod";
//	Expr2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "Expr2";
	$fdata["GoodName"] = "Expr2";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","Expr2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.contactName";

	
	
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


	$tdatavoltonagentapplications["Expr2"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "Expr2";
//	contactZipCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "contactZipCode";
	$fdata["GoodName"] = "contactZipCode";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactZipCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactZipCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.contactZipCode";

	
	
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


	$tdatavoltonagentapplications["contactZipCode"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactZipCode";
//	contactCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "contactCity";
	$fdata["GoodName"] = "contactCity";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.contactCity";

	
	
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


	$tdatavoltonagentapplications["contactCity"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactCity";
//	ContactArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "ContactArea";
	$fdata["GoodName"] = "ContactArea";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","ContactArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ContactArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.ContactArea";

	
	
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


	$tdatavoltonagentapplications["ContactArea"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "ContactArea";
//	contactGender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "contactGender";
	$fdata["GoodName"] = "contactGender";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactGender");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contactGender";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.contactGender";

	
	
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


	$tdatavoltonagentapplications["contactGender"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactGender";
//	contactAge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "contactAge";
	$fdata["GoodName"] = "contactAge";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactAge");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contactAge";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.contactAge";

	
	
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


	$tdatavoltonagentapplications["contactAge"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactAge";
//	crmUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "crmUser";
	$fdata["GoodName"] = "crmUser";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","crmUser");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "crmUser";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.crmUser";

	
	
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


	$tdatavoltonagentapplications["crmUser"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "crmUser";
//	pauseAfterCall
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "pauseAfterCall";
	$fdata["GoodName"] = "pauseAfterCall";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","pauseAfterCall");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pauseAfterCall";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.pauseAfterCall";

	
	
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


	$tdatavoltonagentapplications["pauseAfterCall"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "pauseAfterCall";
//	dialerPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "dialerPhone";
	$fdata["GoodName"] = "dialerPhone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","dialerPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.dialerPhone";

	
	
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


	$tdatavoltonagentapplications["dialerPhone"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "dialerPhone";
//	dialerCampaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "dialerCampaign";
	$fdata["GoodName"] = "dialerCampaign";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","dialerCampaign");
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


	$tdatavoltonagentapplications["dialerCampaign"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "dialerCampaign";
//	productFamilyId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "productFamilyId";
	$fdata["GoodName"] = "productFamilyId";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","productFamilyId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "productFamilyId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.productFamilyId";

	
	
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


	$tdatavoltonagentapplications["productFamilyId"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "productFamilyId";
//	contactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "contactMethod";
	$fdata["GoodName"] = "contactMethod";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","contactMethod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.contactMethod";

	
	
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


	$tdatavoltonagentapplications["contactMethod"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "contactMethod";
//	courier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "courier";
	$fdata["GoodName"] = "courier";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","courier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.courier";

	
	
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


	$tdatavoltonagentapplications["courier"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "courier";
//	deliveryComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "deliveryComments";
	$fdata["GoodName"] = "deliveryComments";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","deliveryComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "deliveryComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.deliveryComments";

	
	
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


	$tdatavoltonagentapplications["deliveryComments"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "deliveryComments";
//	courierDeliveryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "courierDeliveryDate";
	$fdata["GoodName"] = "courierDeliveryDate";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","courierDeliveryDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "courierDeliveryDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.courierDeliveryDate";

	
	
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


	$tdatavoltonagentapplications["courierDeliveryDate"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "courierDeliveryDate";
//	courierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "courierTimeFrom";
	$fdata["GoodName"] = "courierTimeFrom";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","courierTimeFrom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courierTimeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.courierTimeFrom";

	
	
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


	$tdatavoltonagentapplications["courierTimeFrom"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "courierTimeFrom";
//	courierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "courierTimeTo";
	$fdata["GoodName"] = "courierTimeTo";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonAgentApplications","courierTimeTo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "courierTimeTo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.courierTimeTo";

	
	
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


	$tdatavoltonagentapplications["courierTimeTo"] = $fdata;
		$tdatavoltonagentapplications[".searchableFields"][] = "courierTimeTo";


$tables_data["dbo.voltonAgentApplications"]=&$tdatavoltonagentapplications;
$field_labels["dbo_voltonAgentApplications"] = &$fieldLabelsvoltonagentapplications;
$fieldToolTips["dbo_voltonAgentApplications"] = &$fieldToolTipsvoltonagentapplications;
$placeHolders["dbo_voltonAgentApplications"] = &$placeHoldersvoltonagentapplications;
$page_titles["dbo_voltonAgentApplications"] = &$pageTitlesvoltonagentapplications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.voltonAgentApplications"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dbo.voltonAgentApplications"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_voltonagentapplications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "va.id, va.callid, va.applicationStatusId, va.applicationType, va.applicantName, va.applicantIdNumber, va.applicantAddress, va.applicantPostalCode, va.applicantArea, va.applicantCity, va.applicantTaxRegistrationNumber,                            va.applicantTaxOffice, va.applicantEmail, va.applicantProfession, va.applicantKod, va.applicantGemi, va.applicantPhone, va.applicantWorkPhone, va.applicantMobile, va.contactName, va.contactPhone, va.contactMobile,                            va.contactEmail, va.legalName, va.legalIdNumber, va.mailAddress, va.mailPostalCode, va.mailArea, va.mailCity, va.powerAddress, va.powerOwnershipType, va.powerPostalCode, va.powerArea, va.powerCity,                            va.powerAgreedKw, va.powerSupplyNumber, va.powerMeterNumber, va.powerCurrentSupplier, va.powerCurrentDayMeter, va.powerCurrentNightMeter, va.powerActivationStatus, va.voltonPlan, va.voltonContractDuration,                            va.voltonWarrantyAmount, va.voltonWarrantyOnFirstBill, va.voltonOther, va.voltonComments, va.voltonAutoPayment, va.document1, va.document2, va.document3, va.document4, va.document5, va.document6, va.document7,                            va.document8, va.document9, va.document10, va.document11, va.document12, va.document13, va.document14, va.document15, va.ngAddress, va.ngPostalCode, va.ngArea, va.ngCity, va.ngPressure, va.ngHourlyCapacity,                            va.ngHkasp, va.ngMeterNumber, va.ngMeterType, va.ngCurrentMeterValue, va.ngConnectionExists, va.ngSupplyIsNew, va.ngSupplyReactivation, va.applicationAgentStatus, va.applicationLastStatusDate, c.dialerList,                            c.dialerAgent, c.dialerRecording, c.orderShipCompany, c.orderInvoiceRequired, c.callComments, c.internalCommunication, c.callGdprAcceptance, c.callGdprRecordingAcceptance, c.orderPaymentMethod, c.contactName AS Expr2,                            c.contactZipCode, c.contactCity, c.ContactArea, c.contactGender, c.contactAge, c.crmUser, c.pauseAfterCall, c.dialerPhone, c.dialerCampaign, c.productFamilyId, c.contactMethod, c.courier, c.deliveryComments,                            c.courierDeliveryDate, c.courierTimeFrom, c.courierTimeTo";
$proto0["m_strFrom"] = "FROM            dbo.voltonApplications AS va INNER JOIN                           dbo.Calls AS c ON c.id = va.callid";
$proto0["m_strWhere"] = "(c.dialerAgent =':user.username')";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "c.dialerAgent =':user.username'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
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
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto6["m_sql"] = "va.id";
$proto6["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto8["m_sql"] = "va.callid";
$proto8["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto10["m_sql"] = "va.applicationStatusId";
$proto10["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationType",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto12["m_sql"] = "va.applicationType";
$proto12["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantName",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto14["m_sql"] = "va.applicantName";
$proto14["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantIdNumber",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto16["m_sql"] = "va.applicantIdNumber";
$proto16["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantAddress",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto18["m_sql"] = "va.applicantAddress";
$proto18["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPostalCode",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto20["m_sql"] = "va.applicantPostalCode";
$proto20["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantArea",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto22["m_sql"] = "va.applicantArea";
$proto22["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantCity",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto24["m_sql"] = "va.applicantCity";
$proto24["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxRegistrationNumber",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto26["m_sql"] = "va.applicantTaxRegistrationNumber";
$proto26["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxOffice",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto28["m_sql"] = "va.applicantTaxOffice";
$proto28["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantEmail",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto30["m_sql"] = "va.applicantEmail";
$proto30["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantProfession",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto32["m_sql"] = "va.applicantProfession";
$proto32["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantKod",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto34["m_sql"] = "va.applicantKod";
$proto34["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantGemi",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto36["m_sql"] = "va.applicantGemi";
$proto36["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPhone",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto38["m_sql"] = "va.applicantPhone";
$proto38["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantWorkPhone",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto40["m_sql"] = "va.applicantWorkPhone";
$proto40["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantMobile",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto42["m_sql"] = "va.applicantMobile";
$proto42["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto44["m_sql"] = "va.contactName";
$proto44["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "contactPhone",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto46["m_sql"] = "va.contactPhone";
$proto46["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "contactMobile",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto48["m_sql"] = "va.contactMobile";
$proto48["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "contactEmail",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto50["m_sql"] = "va.contactEmail";
$proto50["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "legalName",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto52["m_sql"] = "va.legalName";
$proto52["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "legalIdNumber",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto54["m_sql"] = "va.legalIdNumber";
$proto54["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "mailAddress",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto56["m_sql"] = "va.mailAddress";
$proto56["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "mailPostalCode",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto58["m_sql"] = "va.mailPostalCode";
$proto58["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "mailArea",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto60["m_sql"] = "va.mailArea";
$proto60["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "mailCity",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto62["m_sql"] = "va.mailCity";
$proto62["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "powerAddress",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto64["m_sql"] = "va.powerAddress";
$proto64["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "powerOwnershipType",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto66["m_sql"] = "va.powerOwnershipType";
$proto66["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "powerPostalCode",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto68["m_sql"] = "va.powerPostalCode";
$proto68["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "powerArea",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto70["m_sql"] = "va.powerArea";
$proto70["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCity",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto72["m_sql"] = "va.powerCity";
$proto72["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "powerAgreedKw",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto74["m_sql"] = "va.powerAgreedKw";
$proto74["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "powerSupplyNumber",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto76["m_sql"] = "va.powerSupplyNumber";
$proto76["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "powerMeterNumber",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto78["m_sql"] = "va.powerMeterNumber";
$proto78["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentSupplier",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto80["m_sql"] = "va.powerCurrentSupplier";
$proto80["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentDayMeter",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto82["m_sql"] = "va.powerCurrentDayMeter";
$proto82["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentNightMeter",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto84["m_sql"] = "va.powerCurrentNightMeter";
$proto84["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "powerActivationStatus",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto86["m_sql"] = "va.powerActivationStatus";
$proto86["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonPlan",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto88["m_sql"] = "va.voltonPlan";
$proto88["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonContractDuration",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto90["m_sql"] = "va.voltonContractDuration";
$proto90["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonWarrantyAmount",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto92["m_sql"] = "va.voltonWarrantyAmount";
$proto92["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonWarrantyOnFirstBill",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto94["m_sql"] = "va.voltonWarrantyOnFirstBill";
$proto94["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonOther",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto96["m_sql"] = "va.voltonOther";
$proto96["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonComments",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto98["m_sql"] = "va.voltonComments";
$proto98["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonAutoPayment",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto100["m_sql"] = "va.voltonAutoPayment";
$proto100["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "document1",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto102["m_sql"] = "va.document1";
$proto102["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "document2",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto104["m_sql"] = "va.document2";
$proto104["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "document3",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto106["m_sql"] = "va.document3";
$proto106["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "document4",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto108["m_sql"] = "va.document4";
$proto108["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "document5",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto110["m_sql"] = "va.document5";
$proto110["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "document6",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto112["m_sql"] = "va.document6";
$proto112["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "document7",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto114["m_sql"] = "va.document7";
$proto114["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "document8",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto116["m_sql"] = "va.document8";
$proto116["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "document9",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto118["m_sql"] = "va.document9";
$proto118["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "document10",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto120["m_sql"] = "va.document10";
$proto120["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "document11",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto122["m_sql"] = "va.document11";
$proto122["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "document12",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto124["m_sql"] = "va.document12";
$proto124["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "document13",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto126["m_sql"] = "va.document13";
$proto126["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "document14",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto128["m_sql"] = "va.document14";
$proto128["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "document15",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto130["m_sql"] = "va.document15";
$proto130["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "ngAddress",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto132["m_sql"] = "va.ngAddress";
$proto132["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "ngPostalCode",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto134["m_sql"] = "va.ngPostalCode";
$proto134["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "ngArea",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto136["m_sql"] = "va.ngArea";
$proto136["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "ngCity",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto138["m_sql"] = "va.ngCity";
$proto138["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "ngPressure",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto140["m_sql"] = "va.ngPressure";
$proto140["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "ngHourlyCapacity",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto142["m_sql"] = "va.ngHourlyCapacity";
$proto142["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "ngHkasp",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto144["m_sql"] = "va.ngHkasp";
$proto144["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "ngMeterNumber",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto146["m_sql"] = "va.ngMeterNumber";
$proto146["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "ngMeterType",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto148["m_sql"] = "va.ngMeterType";
$proto148["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "ngCurrentMeterValue",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto150["m_sql"] = "va.ngCurrentMeterValue";
$proto150["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "ngConnectionExists",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto152["m_sql"] = "va.ngConnectionExists";
$proto152["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "ngSupplyIsNew",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto154["m_sql"] = "va.ngSupplyIsNew";
$proto154["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "ngSupplyReactivation",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto156["m_sql"] = "va.ngSupplyReactivation";
$proto156["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationAgentStatus",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto158["m_sql"] = "va.applicationAgentStatus";
$proto158["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationLastStatusDate",
	"m_strTable" => "va",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto160["m_sql"] = "va.applicationLastStatusDate";
$proto160["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerList",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto162["m_sql"] = "c.dialerList";
$proto162["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto164["m_sql"] = "c.dialerAgent";
$proto164["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerRecording",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto166["m_sql"] = "c.dialerRecording";
$proto166["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "orderShipCompany",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto168["m_sql"] = "c.orderShipCompany";
$proto168["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "orderInvoiceRequired",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto170["m_sql"] = "c.orderInvoiceRequired";
$proto170["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "callComments",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto172["m_sql"] = "c.callComments";
$proto172["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "internalCommunication",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto174["m_sql"] = "c.internalCommunication";
$proto174["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "callGdprAcceptance",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto176["m_sql"] = "c.callGdprAcceptance";
$proto176["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "callGdprRecordingAcceptance",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto178["m_sql"] = "c.callGdprRecordingAcceptance";
$proto178["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "orderPaymentMethod",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto180["m_sql"] = "c.orderPaymentMethod";
$proto180["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto182["m_sql"] = "c.contactName";
$proto182["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "Expr2";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "contactZipCode",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto184["m_sql"] = "c.contactZipCode";
$proto184["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "contactCity",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto186["m_sql"] = "c.contactCity";
$proto186["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactArea",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto188["m_sql"] = "c.ContactArea";
$proto188["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "contactGender",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto190["m_sql"] = "c.contactGender";
$proto190["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "contactAge",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto192["m_sql"] = "c.contactAge";
$proto192["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "crmUser",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto194["m_sql"] = "c.crmUser";
$proto194["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "pauseAfterCall",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto196["m_sql"] = "c.pauseAfterCall";
$proto196["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto198["m_sql"] = "c.dialerPhone";
$proto198["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerCampaign",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto200["m_sql"] = "c.dialerCampaign";
$proto200["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "productFamilyId",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto202["m_sql"] = "c.productFamilyId";
$proto202["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "contactMethod",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto204["m_sql"] = "c.contactMethod";
$proto204["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "courier",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto206["m_sql"] = "c.courier";
$proto206["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "deliveryComments",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto208["m_sql"] = "c.deliveryComments";
$proto208["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "courierDeliveryDate",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto210["m_sql"] = "c.courierDeliveryDate";
$proto210["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "courierTimeFrom",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto212["m_sql"] = "c.courierTimeFrom";
$proto212["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "courierTimeTo",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto214["m_sql"] = "c.courierTimeTo";
$proto214["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto216=array();
$proto216["m_link"] = "SQLL_MAIN";
			$proto217=array();
$proto217["m_strName"] = "dbo.voltonApplications";
$proto217["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto217["m_columns"] = array();
$proto217["m_columns"][] = "id";
$proto217["m_columns"][] = "callid";
$proto217["m_columns"][] = "applicationStatusId";
$proto217["m_columns"][] = "applicationType";
$proto217["m_columns"][] = "applicantName";
$proto217["m_columns"][] = "applicantIdNumber";
$proto217["m_columns"][] = "applicantAddress";
$proto217["m_columns"][] = "applicantPostalCode";
$proto217["m_columns"][] = "applicantArea";
$proto217["m_columns"][] = "applicantCity";
$proto217["m_columns"][] = "applicantTaxRegistrationNumber";
$proto217["m_columns"][] = "applicantTaxOffice";
$proto217["m_columns"][] = "applicantEmail";
$proto217["m_columns"][] = "applicantProfession";
$proto217["m_columns"][] = "applicantKod";
$proto217["m_columns"][] = "applicantGemi";
$proto217["m_columns"][] = "applicantPhone";
$proto217["m_columns"][] = "applicantWorkPhone";
$proto217["m_columns"][] = "applicantMobile";
$proto217["m_columns"][] = "contactName";
$proto217["m_columns"][] = "contactPhone";
$proto217["m_columns"][] = "contactMobile";
$proto217["m_columns"][] = "contactEmail";
$proto217["m_columns"][] = "legalName";
$proto217["m_columns"][] = "legalIdNumber";
$proto217["m_columns"][] = "mailAddress";
$proto217["m_columns"][] = "mailPostalCode";
$proto217["m_columns"][] = "mailArea";
$proto217["m_columns"][] = "mailCity";
$proto217["m_columns"][] = "powerAddress";
$proto217["m_columns"][] = "powerOwnershipType";
$proto217["m_columns"][] = "powerPostalCode";
$proto217["m_columns"][] = "powerArea";
$proto217["m_columns"][] = "powerCity";
$proto217["m_columns"][] = "powerAgreedKw";
$proto217["m_columns"][] = "powerSupplyNumber";
$proto217["m_columns"][] = "powerMeterNumber";
$proto217["m_columns"][] = "powerCurrentSupplier";
$proto217["m_columns"][] = "powerCurrentDayMeter";
$proto217["m_columns"][] = "powerCurrentNightMeter";
$proto217["m_columns"][] = "powerActivationStatus";
$proto217["m_columns"][] = "voltonPlan";
$proto217["m_columns"][] = "voltonContractDuration";
$proto217["m_columns"][] = "voltonWarrantyAmount";
$proto217["m_columns"][] = "voltonWarrantyOnFirstBill";
$proto217["m_columns"][] = "voltonOther";
$proto217["m_columns"][] = "voltonComments";
$proto217["m_columns"][] = "voltonAutoPayment";
$proto217["m_columns"][] = "document1";
$proto217["m_columns"][] = "document2";
$proto217["m_columns"][] = "document3";
$proto217["m_columns"][] = "document4";
$proto217["m_columns"][] = "document5";
$proto217["m_columns"][] = "document6";
$proto217["m_columns"][] = "document7";
$proto217["m_columns"][] = "document8";
$proto217["m_columns"][] = "document9";
$proto217["m_columns"][] = "document10";
$proto217["m_columns"][] = "document11";
$proto217["m_columns"][] = "document12";
$proto217["m_columns"][] = "document13";
$proto217["m_columns"][] = "document14";
$proto217["m_columns"][] = "document15";
$proto217["m_columns"][] = "ngAddress";
$proto217["m_columns"][] = "ngPostalCode";
$proto217["m_columns"][] = "ngArea";
$proto217["m_columns"][] = "ngCity";
$proto217["m_columns"][] = "ngPressure";
$proto217["m_columns"][] = "ngHourlyCapacity";
$proto217["m_columns"][] = "ngHkasp";
$proto217["m_columns"][] = "ngMeterNumber";
$proto217["m_columns"][] = "ngMeterType";
$proto217["m_columns"][] = "ngCurrentMeterValue";
$proto217["m_columns"][] = "ngConnectionExists";
$proto217["m_columns"][] = "ngSupplyIsNew";
$proto217["m_columns"][] = "ngSupplyReactivation";
$proto217["m_columns"][] = "applicationAgentStatus";
$proto217["m_columns"][] = "applicationLastStatusDate";
$proto217["m_columns"][] = "applicationContactMethod";
$proto217["m_columns"][] = "applicationCourier";
$proto217["m_columns"][] = "applicationCourierDate";
$proto217["m_columns"][] = "applicationCourrierTimeFrom";
$proto217["m_columns"][] = "applicationCourierTimeTo";
$proto217["m_columns"][] = "applicationCourrierComments";
$proto217["m_columns"][] = "dialerAgent";
$proto217["m_columns"][] = "additionalServices";
$obj = new SQLTable($proto217);

$proto216["m_table"] = $obj;
$proto216["m_sql"] = "dbo.voltonApplications AS va";
$proto216["m_alias"] = "va";
$proto216["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto218=array();
$proto218["m_sql"] = "";
$proto218["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto218["m_column"]=$obj;
$proto218["m_contained"] = array();
$proto218["m_strCase"] = "";
$proto218["m_havingmode"] = false;
$proto218["m_inBrackets"] = false;
$proto218["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto218);

$proto216["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto216);

$proto0["m_fromlist"][]=$obj;
												$proto220=array();
$proto220["m_link"] = "SQLL_INNERJOIN";
			$proto221=array();
$proto221["m_strName"] = "dbo.Calls";
$proto221["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto221["m_columns"] = array();
$proto221["m_columns"][] = "id";
$proto221["m_columns"][] = "contactId";
$proto221["m_columns"][] = "callStart";
$proto221["m_columns"][] = "callHangup";
$proto221["m_columns"][] = "callEnd";
$proto221["m_columns"][] = "talkTime";
$proto221["m_columns"][] = "typingTime";
$proto221["m_columns"][] = "totalCallTime";
$proto221["m_columns"][] = "tvchannel";
$proto221["m_columns"][] = "broadcast";
$proto221["m_columns"][] = "seller";
$proto221["m_columns"][] = "callStatusId";
$proto221["m_columns"][] = "callDenialReasonID";
$proto221["m_columns"][] = "callClassificationID";
$proto221["m_columns"][] = "callSubClassificationID";
$proto221["m_columns"][] = "remarks";
$proto221["m_columns"][] = "redialDate";
$proto221["m_columns"][] = "redialComments";
$proto221["m_columns"][] = "redialIsPrivate";
$proto221["m_columns"][] = "redialDone";
$proto221["m_columns"][] = "contactMethod";
$proto221["m_columns"][] = "courier";
$proto221["m_columns"][] = "deliveryComments";
$proto221["m_columns"][] = "courierDeliveryDate";
$proto221["m_columns"][] = "courierTimeFrom";
$proto221["m_columns"][] = "courierTimeTo";
$proto221["m_columns"][] = "dialerPhone";
$proto221["m_columns"][] = "dialerCallEpoch";
$proto221["m_columns"][] = "dialerCampaign";
$proto221["m_columns"][] = "dialerList";
$proto221["m_columns"][] = "dialerLeadID";
$proto221["m_columns"][] = "dialerAgent";
$proto221["m_columns"][] = "dialerRecording";
$proto221["m_columns"][] = "productFamilyId";
$proto221["m_columns"][] = "orderShipCompany";
$proto221["m_columns"][] = "orderInvoiceRequired";
$proto221["m_columns"][] = "callComments";
$proto221["m_columns"][] = "internalCommunication";
$proto221["m_columns"][] = "callGdprAcceptance";
$proto221["m_columns"][] = "callGdprRecordingAcceptance";
$proto221["m_columns"][] = "orderPaymentMethod";
$proto221["m_columns"][] = "contactName";
$proto221["m_columns"][] = "contactZipCode";
$proto221["m_columns"][] = "contactCity";
$proto221["m_columns"][] = "ContactArea";
$proto221["m_columns"][] = "contactGender";
$proto221["m_columns"][] = "contactAge";
$proto221["m_columns"][] = "crmUser";
$proto221["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto221);

$proto220["m_table"] = $obj;
$proto220["m_sql"] = "INNER JOIN                           dbo.Calls AS c ON c.id = va.callid";
$proto220["m_alias"] = "c";
$proto220["m_srcTableName"] = "dbo.voltonAgentApplications";
$proto222=array();
$proto222["m_sql"] = "c.id = va.callid";
$proto222["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.voltonAgentApplications"
));

$proto222["m_column"]=$obj;
$proto222["m_contained"] = array();
$proto222["m_strCase"] = "= va.callid";
$proto222["m_havingmode"] = false;
$proto222["m_inBrackets"] = false;
$proto222["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto222);

$proto220["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto220);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.voltonAgentApplications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voltonagentapplications = createSqlQuery_voltonagentapplications();


	
		;

																																																																																																									

$tdatavoltonagentapplications[".sqlquery"] = $queryData_voltonagentapplications;



include_once(getabspath("include/voltonagentapplications_events.php"));
$tableEvents["dbo.voltonAgentApplications"] = new eventclass_voltonagentapplications;
$tdatavoltonagentapplications[".hasEvents"] = true;

?>