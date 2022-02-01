<?php
$tdatavoltonapplicationsbackofficeview = array();
$tdatavoltonapplicationsbackofficeview[".searchableFields"] = array();
$tdatavoltonapplicationsbackofficeview[".ShortName"] = "voltonapplicationsbackofficeview";
$tdatavoltonapplicationsbackofficeview[".OwnerID"] = "";
$tdatavoltonapplicationsbackofficeview[".OriginalTable"] = "dbo.voltonApplications";


$tdatavoltonapplicationsbackofficeview[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"voltonInDetailAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"volton_view_popup\",\"view\"]}" );
$tdatavoltonapplicationsbackofficeview[".originalPagesByType"] = $tdatavoltonapplicationsbackofficeview[".pagesByType"];
$tdatavoltonapplicationsbackofficeview[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"voltonInDetailAddList\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"volton_view_popup\",\"view\"]}" ) );
$tdatavoltonapplicationsbackofficeview[".originalPages"] = $tdatavoltonapplicationsbackofficeview[".pages"];
$tdatavoltonapplicationsbackofficeview[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"volton_view_popup\"}" );
$tdatavoltonapplicationsbackofficeview[".originalDefaultPages"] = $tdatavoltonapplicationsbackofficeview[".defaultPages"];

//	field labels
$fieldLabelsvoltonapplicationsbackofficeview = array();
$fieldToolTipsvoltonapplicationsbackofficeview = array();
$pageTitlesvoltonapplicationsbackofficeview = array();
$placeHoldersvoltonapplicationsbackofficeview = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"] = array();
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"] = array();
	$placeHoldersvoltonapplicationsbackofficeview["Greek"] = array();
	$pageTitlesvoltonapplicationsbackofficeview["Greek"] = array();
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["id"] = "Id";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["id"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["id"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["callid"] = "Callid";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["callid"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["callid"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantName"] = "Ονοματεπώνυμο/Επωνυμία";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantName"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantName"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantIdNumber"] = "ΑΔΤ/Αρ. Διαβ.";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantIdNumber"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantIdNumber"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantAddress"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantAddress"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantPostalCode"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantPostalCode"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantTaxRegistrationNumber"] = "ΑΦΜ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantTaxRegistrationNumber"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantTaxRegistrationNumber"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantTaxOffice"] = "ΔΟΥ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantTaxOffice"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantTaxOffice"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantEmail"] = "Email";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantEmail"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantEmail"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantProfession"] = "Επάγγελμα";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantProfession"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantProfession"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantKod"] = "ΚΟΔ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantKod"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantKod"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantGemi"] = "ΓΕΜΗ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantGemi"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantGemi"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["contactName"] = "Ονοματεπώνυμο";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["contactName"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["contactName"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["contactPhone"] = "Τηλέφωνο";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["contactPhone"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["contactPhone"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["contactMobile"] = "Κινητό";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["contactMobile"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["contactMobile"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["contactEmail"] = "Email";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["contactEmail"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["contactEmail"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantPhone"] = "Τηλ. Οικίας";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantPhone"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantPhone"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantMobile"] = "Κινητό";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantMobile"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantMobile"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["legalName"] = "Ονοματεπώνυμο";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["legalName"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["legalName"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["legalIdNumber"] = "ΑΔΤ/Αρ. Διαβ.";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["legalIdNumber"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["legalIdNumber"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["mailAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["mailAddress"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["mailAddress"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["mailPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["mailPostalCode"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["mailPostalCode"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerAddress"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerAddress"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerOwnershipType"] = "Ιδιοκτησία";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerOwnershipType"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerOwnershipType"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerPostalCode"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerPostalCode"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerAgreedKw"] = "Συμφωνημένη Ισχύς (Kw)";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerAgreedKw"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerAgreedKw"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerSupplyNumber"] = "Αρ. Παροχής";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerSupplyNumber"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerSupplyNumber"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerMeterNumber"] = "Αρ. Μετρητή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerMeterNumber"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerMeterNumber"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerCurrentSupplier"] = "Πάροχος";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerCurrentSupplier"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerCurrentSupplier"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerCurrentDayMeter"] = "Ένδειξη Ημερήσια";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerCurrentDayMeter"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerCurrentDayMeter"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerCurrentNightMeter"] = "Νυχτερινή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerCurrentNightMeter"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerCurrentNightMeter"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerActivationStatus"] = "Ενεργοποίηση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerActivationStatus"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerActivationStatus"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonPlan"] = "Πρόγραμμα Volton";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonPlan"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonPlan"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonContractDuration"] = "Διάρκεια";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonContractDuration"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonContractDuration"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonWarrantyAmount"] = "Ποσό Εγγύησης";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonWarrantyAmount"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonWarrantyAmount"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonWarrantyOnFirstBill"] = "Εγγύηση στον 1ο Λ/σμό";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonWarrantyOnFirstBill"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonWarrantyOnFirstBill"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonOther"] = "Άλλο";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonOther"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonOther"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonComments"] = "Παρατηρήσεις";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonComments"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonComments"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["voltonAutoPayment"] = "Πάγια Εντολή Μέσω Τραπεζικού Λογαριασμού";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["voltonAutoPayment"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["voltonAutoPayment"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationType"] = "Τύπος Αίτησης";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationType"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationType"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantWorkPhone"] = "Τηλ. Εργασίας";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantWorkPhone"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantWorkPhone"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document1"] = "Έγγραφο Ταυτοποίησης";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document1"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document1"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document2"] = "Ε2 ή Ε9 ή συμβόλαιο";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document2"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document2"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document3"] = "Φωτό Μετρητή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document3"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document3"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document4"] = "Document4";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document4"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document4"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document5"] = "Τελευταίος λογαριασμός ρεύματος";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document5"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document5"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document6"] = "Απόδ. Πληρωμής Τελ. Δόσης δ/νισμού";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document6"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document6"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document7"] = "Αντίγραφο παλιού λογαριασμού ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document7"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document7"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document8"] = "Υπεύθυνη δήλωση κομμένης παροχής";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document8"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document8"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document9"] = " φωτογραφία του ρολογιού";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document9"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document9"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document10"] = " Σύμβαση του ΔΕΔΔΗΕ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document10"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document10"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document11"] = "Προσφ. Μισθωτήριο ή 
Ιδιωτικό Συμφ. Μίσθωσης ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document11"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document11"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document12"] = "Υπ. Δήλωση Μετ/σης Ενεργής Παροχής";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document12"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document12"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document13"] = "Έναρξη ή πρόσφατη Απ.Ταμ.Μηχανής";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document13"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document13"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document14"] = "Προκαταβολή x€ * τ.μ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document14"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document14"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["document15"] = "Document15";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["document15"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["document15"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationStatusId"] = "Κατάσταση (BackOffice)";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationStatusId"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationStatusId"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantArea"] = "Περιοχή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantArea"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantArea"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicantCity"] = "Πόλη";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicantCity"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicantCity"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["mailArea"] = "Περιοχή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["mailArea"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["mailArea"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["mailCity"] = "Πόλη";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["mailCity"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["mailCity"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerArea"] = "Περιοχή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerArea"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerArea"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["powerCity"] = "Πόλη";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["powerCity"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["powerCity"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngAddress"] = "Διεύθυνση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngAddress"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngAddress"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngPostalCode"] = "ΤΚ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngPostalCode"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngPostalCode"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngArea"] = "Περιοχή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngArea"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngArea"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngCity"] = "Πόλη";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngCity"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngCity"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngPressure"] = "Πίεση Δικτύου - Χαμηλή Πίεση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngPressure"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngPressure"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngHourlyCapacity"] = "Δεσμ. ωριαία δυναμικότητα σημείου (kW/h)";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngHourlyCapacity"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngHourlyCapacity"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngHkasp"] = "ΗΚΑΣΠ";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngHkasp"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngHkasp"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngMeterNumber"] = "Αρ. Μετρητή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngMeterNumber"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngMeterNumber"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngMeterType"] = "Τύπος Μετρητή";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngMeterType"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngMeterType"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngCurrentMeterValue"] = "Τελευταία Ένδειξη";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngCurrentMeterValue"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngCurrentMeterValue"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngConnectionExists"] = "Υφίσταται Σύνδεση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngConnectionExists"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngConnectionExists"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngSupplyIsNew"] = "Πρώτη Τροφοδότηση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngSupplyIsNew"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngSupplyIsNew"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["ngSupplyReactivation"] = "Επανενεργοποίηση";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["ngSupplyReactivation"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["ngSupplyReactivation"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationAgentStatus"] = "Κατάσταση Αίτησης (Agent)";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationAgentStatus"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationAgentStatus"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationLastStatusDate"] = "Τελ. Ημ/νία Status";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationLastStatusDate"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationLastStatusDate"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationContactMethod"] = "Τρόπος Παραλαβής";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationContactMethod"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationContactMethod"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationCourier"] = "Courier";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationCourier"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationCourier"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationCourierDate"] = "Ημερομηνία Ραντεβού";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationCourierDate"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationCourierDate"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationCourrierTimeFrom"] = "Από";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationCourrierTimeFrom"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationCourrierTimeFrom"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationCourierTimeTo"] = "Έως";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationCourierTimeTo"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationCourierTimeTo"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationCourrierComments"] = "Σχόλια Courier";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationCourrierComments"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationCourrierComments"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["callPhone"] = "Τηλέφωνο Κλήσης";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["callPhone"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["callPhone"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["callDate"] = "Ημ/νία Κλήσης";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["callDate"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["callDate"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["agent"] = "Agent";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["agent"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["agent"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["applicationPhase"] = "Φάση Αίτησης";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["applicationPhase"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["applicationPhase"] = "";
	$fieldLabelsvoltonapplicationsbackofficeview["Greek"]["salesPhase"] = "Κατάσταση (Sales)";
	$fieldToolTipsvoltonapplicationsbackofficeview["Greek"]["salesPhase"] = "";
	$placeHoldersvoltonapplicationsbackofficeview["Greek"]["salesPhase"] = "";
	$pageTitlesvoltonapplicationsbackofficeview["Greek"]["add"] = "Καταχώρηση Αίτησης";
	$pageTitlesvoltonapplicationsbackofficeview["Greek"]["search"] = "Αιτήσεις Volton  - Αναζήτηση (Backoffice)";
	if (count($fieldToolTipsvoltonapplicationsbackofficeview["Greek"]))
		$tdatavoltonapplicationsbackofficeview[".isUseToolTips"] = true;
}


	$tdatavoltonapplicationsbackofficeview[".NCSearch"] = true;



$tdatavoltonapplicationsbackofficeview[".shortTableName"] = "voltonapplicationsbackofficeview";
$tdatavoltonapplicationsbackofficeview[".nSecOptions"] = 0;

$tdatavoltonapplicationsbackofficeview[".mainTableOwnerID"] = "";
$tdatavoltonapplicationsbackofficeview[".entityType"] = 1;
$tdatavoltonapplicationsbackofficeview[".connId"] = "CallCenter_at_10_41_2_31";


$tdatavoltonapplicationsbackofficeview[".strOriginalTableName"] = "dbo.voltonApplications";

	



$tdatavoltonapplicationsbackofficeview[".showAddInPopup"] = false;

$tdatavoltonapplicationsbackofficeview[".showEditInPopup"] = false;

$tdatavoltonapplicationsbackofficeview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoltonapplicationsbackofficeview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatavoltonapplicationsbackofficeview[".listAjax"] = true;
//	temporary
$tdatavoltonapplicationsbackofficeview[".listAjax"] = false;

	$tdatavoltonapplicationsbackofficeview[".audit"] = true;

	$tdatavoltonapplicationsbackofficeview[".locking"] = false;


$pages = $tdatavoltonapplicationsbackofficeview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavoltonapplicationsbackofficeview[".edit"] = true;
	$tdatavoltonapplicationsbackofficeview[".afterEditAction"] = 0;
	$tdatavoltonapplicationsbackofficeview[".closePopupAfterEdit"] = 1;
	$tdatavoltonapplicationsbackofficeview[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavoltonapplicationsbackofficeview[".add"] = true;
$tdatavoltonapplicationsbackofficeview[".afterAddAction"] = 0;
$tdatavoltonapplicationsbackofficeview[".closePopupAfterAdd"] = 1;
$tdatavoltonapplicationsbackofficeview[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatavoltonapplicationsbackofficeview[".list"] = true;
}



$tdatavoltonapplicationsbackofficeview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavoltonapplicationsbackofficeview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavoltonapplicationsbackofficeview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavoltonapplicationsbackofficeview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavoltonapplicationsbackofficeview[".printFriendly"] = true;
}



$tdatavoltonapplicationsbackofficeview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavoltonapplicationsbackofficeview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavoltonapplicationsbackofficeview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavoltonapplicationsbackofficeview[".isUseAjaxSuggest"] = false;

$tdatavoltonapplicationsbackofficeview[".rowHighlite"] = true;



																																																																				
		
																																																							

$tdatavoltonapplicationsbackofficeview[".ajaxCodeSnippetAdded"] = false;

$tdatavoltonapplicationsbackofficeview[".buttonsAdded"] = true;

$tdatavoltonapplicationsbackofficeview[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavoltonapplicationsbackofficeview[".isUseTimeForSearch"] = true;


$tdatavoltonapplicationsbackofficeview[".badgeColor"] = "B22222";


$tdatavoltonapplicationsbackofficeview[".allSearchFields"] = array();
$tdatavoltonapplicationsbackofficeview[".filterFields"] = array();
$tdatavoltonapplicationsbackofficeview[".requiredSearchFields"] = array();

$tdatavoltonapplicationsbackofficeview[".googleLikeFields"] = array();
$tdatavoltonapplicationsbackofficeview[".googleLikeFields"][] = "agent";
$tdatavoltonapplicationsbackofficeview[".googleLikeFields"][] = "callPhone";
$tdatavoltonapplicationsbackofficeview[".googleLikeFields"][] = "callDate";
$tdatavoltonapplicationsbackofficeview[".googleLikeFields"][] = "applicationPhase";
$tdatavoltonapplicationsbackofficeview[".googleLikeFields"][] = "salesPhase";



$tdatavoltonapplicationsbackofficeview[".tableType"] = "list";

$tdatavoltonapplicationsbackofficeview[".printerPageOrientation"] = 0;
$tdatavoltonapplicationsbackofficeview[".nPrinterPageScale"] = 100;

$tdatavoltonapplicationsbackofficeview[".nPrinterSplitRecords"] = 40;

$tdatavoltonapplicationsbackofficeview[".geocodingEnabled"] = false;





$tdatavoltonapplicationsbackofficeview[".isResizeColumns"] = true;

$tdatavoltonapplicationsbackofficeview[".searchIsRequiredForFilters"] = true;

$tdatavoltonapplicationsbackofficeview[".noRecordsFirstPage"] = true;



$tdatavoltonapplicationsbackofficeview[".pageSize"] = 20;

$tdatavoltonapplicationsbackofficeview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoltonapplicationsbackofficeview[".strOrderBy"] = $tstrOrderBy;

$tdatavoltonapplicationsbackofficeview[".orderindexes"] = array();


$tdatavoltonapplicationsbackofficeview[".sqlHead"] = "SELECT dbo.voltonApplications.id AS id,  dbo.voltonApplications.callid,  dbo.Calls.dialerAgent AS agent,  dbo.Calls.dialerPhone AS callPhone,  format(calls.callStart, 'dd/MM/yyyy') AS callDate,  dbo.voltonApplications.applicationStatusId,  dbo.voltonApplications.applicationStatusId AS applicationPhase,  dbo.voltonApplications.applicationStatusId AS salesPhase,  dbo.voltonApplications.applicationType,  dbo.voltonApplications.applicantName,  dbo.voltonApplications.applicantIdNumber,  dbo.voltonApplications.applicantAddress,  dbo.voltonApplications.applicantPostalCode,  dbo.voltonApplications.applicantArea,  dbo.voltonApplications.applicantCity,  dbo.voltonApplications.applicantTaxRegistrationNumber,  dbo.voltonApplications.applicantTaxOffice,  dbo.voltonApplications.applicantEmail,  dbo.voltonApplications.applicantProfession,  dbo.voltonApplications.applicantKod,  dbo.voltonApplications.applicantGemi,  dbo.voltonApplications.applicantPhone,  dbo.voltonApplications.applicantWorkPhone,  dbo.voltonApplications.applicantMobile,  dbo.voltonApplications.contactName,  dbo.voltonApplications.contactPhone,  dbo.voltonApplications.contactMobile,  dbo.voltonApplications.contactEmail,  dbo.voltonApplications.legalName,  dbo.voltonApplications.legalIdNumber,  dbo.voltonApplications.mailAddress,  dbo.voltonApplications.mailPostalCode,  dbo.voltonApplications.mailArea,  dbo.voltonApplications.mailCity,  dbo.voltonApplications.powerAddress,  dbo.voltonApplications.powerOwnershipType,  dbo.voltonApplications.powerPostalCode,  dbo.voltonApplications.powerArea,  dbo.voltonApplications.powerCity,  dbo.voltonApplications.powerAgreedKw,  dbo.voltonApplications.powerSupplyNumber,  dbo.voltonApplications.powerMeterNumber,  dbo.voltonApplications.powerCurrentSupplier,  dbo.voltonApplications.powerCurrentDayMeter,  dbo.voltonApplications.powerCurrentNightMeter,  dbo.voltonApplications.powerActivationStatus,  dbo.voltonApplications.voltonPlan,  dbo.voltonApplications.voltonContractDuration,  dbo.voltonApplications.voltonWarrantyAmount,  dbo.voltonApplications.voltonWarrantyOnFirstBill,  dbo.voltonApplications.voltonOther,  dbo.voltonApplications.voltonComments,  dbo.voltonApplications.voltonAutoPayment,  dbo.voltonApplications.document1,  dbo.voltonApplications.document2,  dbo.voltonApplications.document3,  dbo.voltonApplications.document4,  dbo.voltonApplications.document5,  dbo.voltonApplications.document6,  dbo.voltonApplications.document7,  dbo.voltonApplications.document8,  dbo.voltonApplications.document9,  dbo.voltonApplications.document10,  dbo.voltonApplications.document11,  dbo.voltonApplications.document12,  dbo.voltonApplications.document13,  dbo.voltonApplications.document14,  dbo.voltonApplications.document15,  dbo.voltonApplications.ngAddress,  dbo.voltonApplications.ngPostalCode,  dbo.voltonApplications.ngArea,  dbo.voltonApplications.ngCity,  dbo.voltonApplications.ngPressure,  dbo.voltonApplications.ngHourlyCapacity,  dbo.voltonApplications.ngHkasp,  dbo.voltonApplications.ngMeterNumber,  dbo.voltonApplications.ngMeterType,  dbo.voltonApplications.ngCurrentMeterValue,  dbo.voltonApplications.ngConnectionExists,  dbo.voltonApplications.ngSupplyIsNew,  dbo.voltonApplications.ngSupplyReactivation,  dbo.voltonApplications.applicationAgentStatus,  format(isnull(dbo.voltonApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy') as applicationLastStatusDate,  dbo.voltonApplications.applicationContactMethod,  dbo.voltonApplications.applicationCourier,  dbo.voltonApplications.applicationCourierDate,  dbo.voltonApplications.applicationCourrierTimeFrom,  dbo.voltonApplications.applicationCourierTimeTo,  dbo.voltonApplications.applicationCourrierComments";
$tdatavoltonapplicationsbackofficeview[".sqlFrom"] = "FROM dbo.voltonApplications  LEFT OUTER JOIN dbo.Calls ON dbo.voltonApplications.callid = dbo.Calls.id";
$tdatavoltonapplicationsbackofficeview[".sqlWhereExpr"] = "";
$tdatavoltonapplicationsbackofficeview[".sqlTail"] = "";

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
$tdatavoltonapplicationsbackofficeview[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoltonapplicationsbackofficeview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoltonapplicationsbackofficeview[".arrGroupsPerPage"] = $arrGPP;

$tdatavoltonapplicationsbackofficeview[".highlightSearchResults"] = true;

$tableKeysvoltonapplicationsbackofficeview = array();
$tableKeysvoltonapplicationsbackofficeview[] = "id";
$tdatavoltonapplicationsbackofficeview[".Keys"] = $tableKeysvoltonapplicationsbackofficeview;


$tdatavoltonapplicationsbackofficeview[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.id";

	
	
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


	$tdatavoltonapplicationsbackofficeview["id"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","callid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "callid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.callid";

	
	
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


	$tdatavoltonapplicationsbackofficeview["callid"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "callid";
//	agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agent";
	$fdata["GoodName"] = "agent";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","agent");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerAgent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Calls.dialerAgent";

	
	
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


	$tdatavoltonapplicationsbackofficeview["agent"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "agent";
//	callPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "callPhone";
	$fdata["GoodName"] = "callPhone";
	$fdata["ownerTable"] = "dbo.Calls";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","callPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dialerPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Calls.dialerPhone";

	
	
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


	
	



	
		$edata["insertNull"] = true;

	
	
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


	$tdatavoltonapplicationsbackofficeview["callPhone"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "callPhone";
//	callDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "callDate";
	$fdata["GoodName"] = "callDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","callDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "callStart";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(calls.callStart, 'dd/MM/yyyy')";

	
	
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


	$tdatavoltonapplicationsbackofficeview["callDate"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "callDate";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationStatusId";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationStatusId"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationStatusId";
//	applicationPhase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "applicationPhase";
	$fdata["GoodName"] = "applicationPhase";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationPhase");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationStatusId";

	
	
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

	

	
	$edata["LookupOrderBy"] = "statisticStatus";

	
	
	
	

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationPhase"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationPhase";
//	salesPhase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "salesPhase";
	$fdata["GoodName"] = "salesPhase";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","salesPhase");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationStatusId";

	
	
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
	$edata["DisplayField"] = "salesStatus";

	

	
	$edata["LookupOrderBy"] = "salesStatus";

	
	
	
	

	
	
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


	$tdatavoltonapplicationsbackofficeview["salesPhase"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "salesPhase";
//	applicationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicationType";
	$fdata["GoodName"] = "applicationType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationType";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationType"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationType";
//	applicantName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "applicantName";
	$fdata["GoodName"] = "applicantName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantName";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantName"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantName";
//	applicantIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicantIdNumber";
	$fdata["GoodName"] = "applicantIdNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantIdNumber";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantIdNumber"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantIdNumber";
//	applicantAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "applicantAddress";
	$fdata["GoodName"] = "applicantAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantAddress";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantAddress"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantAddress";
//	applicantPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "applicantPostalCode";
	$fdata["GoodName"] = "applicantPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantPostalCode";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantPostalCode"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantPostalCode";
//	applicantArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "applicantArea";
	$fdata["GoodName"] = "applicantArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantArea";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantArea"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantArea";
//	applicantCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "applicantCity";
	$fdata["GoodName"] = "applicantCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantCity";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantCity"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantCity";
//	applicantTaxRegistrationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "applicantTaxRegistrationNumber";
	$fdata["GoodName"] = "applicantTaxRegistrationNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantTaxRegistrationNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxRegistrationNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantTaxRegistrationNumber";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantTaxRegistrationNumber"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantTaxRegistrationNumber";
//	applicantTaxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "applicantTaxOffice";
	$fdata["GoodName"] = "applicantTaxOffice";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantTaxOffice");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantTaxOffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantTaxOffice";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantTaxOffice"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantTaxOffice";
//	applicantEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "applicantEmail";
	$fdata["GoodName"] = "applicantEmail";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantEmail";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantEmail"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantEmail";
//	applicantProfession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "applicantProfession";
	$fdata["GoodName"] = "applicantProfession";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantProfession");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantProfession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantProfession";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantProfession"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantProfession";
//	applicantKod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "applicantKod";
	$fdata["GoodName"] = "applicantKod";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantKod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantKod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantKod";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantKod"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantKod";
//	applicantGemi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "applicantGemi";
	$fdata["GoodName"] = "applicantGemi";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantGemi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantGemi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantGemi";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantGemi"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantGemi";
//	applicantPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "applicantPhone";
	$fdata["GoodName"] = "applicantPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantPhone";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantPhone"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantPhone";
//	applicantWorkPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "applicantWorkPhone";
	$fdata["GoodName"] = "applicantWorkPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantWorkPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantWorkPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantWorkPhone";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantWorkPhone"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantWorkPhone";
//	applicantMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "applicantMobile";
	$fdata["GoodName"] = "applicantMobile";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicantMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicantMobile";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicantMobile"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicantMobile";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","contactName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.contactName";

	
	
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


	$tdatavoltonapplicationsbackofficeview["contactName"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "contactName";
//	contactPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "contactPhone";
	$fdata["GoodName"] = "contactPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","contactPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.contactPhone";

	
	
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


	$tdatavoltonapplicationsbackofficeview["contactPhone"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "contactPhone";
//	contactMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "contactMobile";
	$fdata["GoodName"] = "contactMobile";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","contactMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.contactMobile";

	
	
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


	$tdatavoltonapplicationsbackofficeview["contactMobile"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "contactMobile";
//	contactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "contactEmail";
	$fdata["GoodName"] = "contactEmail";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","contactEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.contactEmail";

	
	
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


	$tdatavoltonapplicationsbackofficeview["contactEmail"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "contactEmail";
//	legalName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "legalName";
	$fdata["GoodName"] = "legalName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","legalName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "legalName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.legalName";

	
	
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


	$tdatavoltonapplicationsbackofficeview["legalName"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "legalName";
//	legalIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "legalIdNumber";
	$fdata["GoodName"] = "legalIdNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","legalIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "legalIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.legalIdNumber";

	
	
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


	$tdatavoltonapplicationsbackofficeview["legalIdNumber"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "legalIdNumber";
//	mailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "mailAddress";
	$fdata["GoodName"] = "mailAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","mailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.mailAddress";

	
	
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


	$tdatavoltonapplicationsbackofficeview["mailAddress"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "mailAddress";
//	mailPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "mailPostalCode";
	$fdata["GoodName"] = "mailPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","mailPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.mailPostalCode";

	
	
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


	$tdatavoltonapplicationsbackofficeview["mailPostalCode"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "mailPostalCode";
//	mailArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "mailArea";
	$fdata["GoodName"] = "mailArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","mailArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.mailArea";

	
	
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


	$tdatavoltonapplicationsbackofficeview["mailArea"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "mailArea";
//	mailCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mailCity";
	$fdata["GoodName"] = "mailCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","mailCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.mailCity";

	
	
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


	$tdatavoltonapplicationsbackofficeview["mailCity"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "mailCity";
//	powerAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "powerAddress";
	$fdata["GoodName"] = "powerAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerAddress";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerAddress"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerAddress";
//	powerOwnershipType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "powerOwnershipType";
	$fdata["GoodName"] = "powerOwnershipType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerOwnershipType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerOwnershipType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerOwnershipType";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerOwnershipType"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerOwnershipType";
//	powerPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "powerPostalCode";
	$fdata["GoodName"] = "powerPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerPostalCode";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerPostalCode"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerPostalCode";
//	powerArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "powerArea";
	$fdata["GoodName"] = "powerArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerArea";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerArea"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerArea";
//	powerCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "powerCity";
	$fdata["GoodName"] = "powerCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerCity";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerCity"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerCity";
//	powerAgreedKw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "powerAgreedKw";
	$fdata["GoodName"] = "powerAgreedKw";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerAgreedKw");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerAgreedKw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerAgreedKw";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerAgreedKw"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerAgreedKw";
//	powerSupplyNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "powerSupplyNumber";
	$fdata["GoodName"] = "powerSupplyNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerSupplyNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerSupplyNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerSupplyNumber";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerSupplyNumber"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerSupplyNumber";
//	powerMeterNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "powerMeterNumber";
	$fdata["GoodName"] = "powerMeterNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerMeterNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerMeterNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerMeterNumber";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerMeterNumber"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerMeterNumber";
//	powerCurrentSupplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "powerCurrentSupplier";
	$fdata["GoodName"] = "powerCurrentSupplier";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerCurrentSupplier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerCurrentSupplier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerCurrentSupplier";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerCurrentSupplier"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerCurrentSupplier";
//	powerCurrentDayMeter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "powerCurrentDayMeter";
	$fdata["GoodName"] = "powerCurrentDayMeter";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerCurrentDayMeter");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerCurrentDayMeter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerCurrentDayMeter";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerCurrentDayMeter"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerCurrentDayMeter";
//	powerCurrentNightMeter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "powerCurrentNightMeter";
	$fdata["GoodName"] = "powerCurrentNightMeter";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerCurrentNightMeter");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerCurrentNightMeter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerCurrentNightMeter";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerCurrentNightMeter"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerCurrentNightMeter";
//	powerActivationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "powerActivationStatus";
	$fdata["GoodName"] = "powerActivationStatus";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","powerActivationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerActivationStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.powerActivationStatus";

	
	
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


	$tdatavoltonapplicationsbackofficeview["powerActivationStatus"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "powerActivationStatus";
//	voltonPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "voltonPlan";
	$fdata["GoodName"] = "voltonPlan";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonPlan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonPlan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonPlan";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonPlan"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonPlan";
//	voltonContractDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "voltonContractDuration";
	$fdata["GoodName"] = "voltonContractDuration";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonContractDuration");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonContractDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonContractDuration";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonContractDuration"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonContractDuration";
//	voltonWarrantyAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "voltonWarrantyAmount";
	$fdata["GoodName"] = "voltonWarrantyAmount";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonWarrantyAmount");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "voltonWarrantyAmount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonWarrantyAmount";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonWarrantyAmount"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonWarrantyAmount";
//	voltonWarrantyOnFirstBill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "voltonWarrantyOnFirstBill";
	$fdata["GoodName"] = "voltonWarrantyOnFirstBill";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonWarrantyOnFirstBill");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonWarrantyOnFirstBill";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonWarrantyOnFirstBill";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonWarrantyOnFirstBill"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonWarrantyOnFirstBill";
//	voltonOther
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "voltonOther";
	$fdata["GoodName"] = "voltonOther";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonOther");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonOther";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonOther";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonOther"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonOther";
//	voltonComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "voltonComments";
	$fdata["GoodName"] = "voltonComments";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonComments");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "voltonComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonComments";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonComments"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonComments";
//	voltonAutoPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "voltonAutoPayment";
	$fdata["GoodName"] = "voltonAutoPayment";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","voltonAutoPayment");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonAutoPayment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.voltonAutoPayment";

	
	
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


	$tdatavoltonapplicationsbackofficeview["voltonAutoPayment"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "voltonAutoPayment";
//	document1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "document1";
	$fdata["GoodName"] = "document1";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document1";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document1"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document1";
//	document2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "document2";
	$fdata["GoodName"] = "document2";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document2");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document2";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document2"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document2";
//	document3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "document3";
	$fdata["GoodName"] = "document3";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document3");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document3";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document3"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document3";
//	document4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "document4";
	$fdata["GoodName"] = "document4";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document4");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document4";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document4"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document4";
//	document5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "document5";
	$fdata["GoodName"] = "document5";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document5");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document5";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document5"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document5";
//	document6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "document6";
	$fdata["GoodName"] = "document6";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document6");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document6";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document6"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document6";
//	document7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "document7";
	$fdata["GoodName"] = "document7";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document7");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document7";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document7"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document7";
//	document8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "document8";
	$fdata["GoodName"] = "document8";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document8");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document8";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document8"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document8";
//	document9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "document9";
	$fdata["GoodName"] = "document9";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document9");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document9";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document9"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document9";
//	document10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "document10";
	$fdata["GoodName"] = "document10";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document10");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document10";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document10"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document10";
//	document11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "document11";
	$fdata["GoodName"] = "document11";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document11");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document11";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document11";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document11"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document11";
//	document12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "document12";
	$fdata["GoodName"] = "document12";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document12");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document12";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document12";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document12"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document12";
//	document13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "document13";
	$fdata["GoodName"] = "document13";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document13");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document13";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document13";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document13"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document13";
//	document14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "document14";
	$fdata["GoodName"] = "document14";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document14");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document14";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document14";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document14"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document14";
//	document15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "document15";
	$fdata["GoodName"] = "document15";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","document15");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document15";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.document15";

	
	
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


	$tdatavoltonapplicationsbackofficeview["document15"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "document15";
//	ngAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "ngAddress";
	$fdata["GoodName"] = "ngAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngAddress";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngAddress"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngAddress";
//	ngPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "ngPostalCode";
	$fdata["GoodName"] = "ngPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngPostalCode";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngPostalCode"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngPostalCode";
//	ngArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "ngArea";
	$fdata["GoodName"] = "ngArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngArea";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngArea"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngArea";
//	ngCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "ngCity";
	$fdata["GoodName"] = "ngCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngCity";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngCity"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngCity";
//	ngPressure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "ngPressure";
	$fdata["GoodName"] = "ngPressure";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngPressure");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngPressure";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngPressure";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngPressure"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngPressure";
//	ngHourlyCapacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "ngHourlyCapacity";
	$fdata["GoodName"] = "ngHourlyCapacity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngHourlyCapacity");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngHourlyCapacity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngHourlyCapacity";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngHourlyCapacity"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngHourlyCapacity";
//	ngHkasp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "ngHkasp";
	$fdata["GoodName"] = "ngHkasp";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngHkasp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngHkasp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngHkasp";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngHkasp"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngHkasp";
//	ngMeterNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "ngMeterNumber";
	$fdata["GoodName"] = "ngMeterNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngMeterNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngMeterNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngMeterNumber";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngMeterNumber"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngMeterNumber";
//	ngMeterType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "ngMeterType";
	$fdata["GoodName"] = "ngMeterType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngMeterType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngMeterType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngMeterType";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngMeterType"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngMeterType";
//	ngCurrentMeterValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "ngCurrentMeterValue";
	$fdata["GoodName"] = "ngCurrentMeterValue";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngCurrentMeterValue");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngCurrentMeterValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngCurrentMeterValue";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngCurrentMeterValue"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngCurrentMeterValue";
//	ngConnectionExists
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "ngConnectionExists";
	$fdata["GoodName"] = "ngConnectionExists";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngConnectionExists");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngConnectionExists";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngConnectionExists";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngConnectionExists"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngConnectionExists";
//	ngSupplyIsNew
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "ngSupplyIsNew";
	$fdata["GoodName"] = "ngSupplyIsNew";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngSupplyIsNew");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngSupplyIsNew";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngSupplyIsNew";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngSupplyIsNew"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngSupplyIsNew";
//	ngSupplyReactivation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "ngSupplyReactivation";
	$fdata["GoodName"] = "ngSupplyReactivation";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","ngSupplyReactivation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngSupplyReactivation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.ngSupplyReactivation";

	
	
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


	$tdatavoltonapplicationsbackofficeview["ngSupplyReactivation"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "ngSupplyReactivation";
//	applicationAgentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "applicationAgentStatus";
	$fdata["GoodName"] = "applicationAgentStatus";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationAgentStatus");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationAgentStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationAgentStatus";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationAgentStatus"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationAgentStatus";
//	applicationLastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "applicationLastStatusDate";
	$fdata["GoodName"] = "applicationLastStatusDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationLastStatusDate");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "applicationLastStatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format(isnull(dbo.voltonApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy')";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationLastStatusDate"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationLastStatusDate";
//	applicationContactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "applicationContactMethod";
	$fdata["GoodName"] = "applicationContactMethod";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationContactMethod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationContactMethod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationContactMethod";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationContactMethod"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationContactMethod";
//	applicationCourier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "applicationCourier";
	$fdata["GoodName"] = "applicationCourier";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationCourier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationCourier";

	
	
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
	$edata["LookupValues"][] = "ACS";
	$edata["LookupValues"][] = "Γενική Ταχυδρομική";
	$edata["LookupValues"][] = "ΕΛΤΑ";

	
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


	$tdatavoltonapplicationsbackofficeview["applicationCourier"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationCourier";
//	applicationCourierDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "applicationCourierDate";
	$fdata["GoodName"] = "applicationCourierDate";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationCourierDate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "applicationCourierDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationCourierDate";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationCourierDate"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationCourierDate";
//	applicationCourrierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "applicationCourrierTimeFrom";
	$fdata["GoodName"] = "applicationCourrierTimeFrom";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationCourrierTimeFrom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourrierTimeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationCourrierTimeFrom";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationCourrierTimeFrom"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationCourrierTimeFrom";
//	applicationCourierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "applicationCourierTimeTo";
	$fdata["GoodName"] = "applicationCourierTimeTo";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationCourierTimeTo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourierTimeTo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationCourierTimeTo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationCourierTimeTo"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationCourierTimeTo";
//	applicationCourrierComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "applicationCourrierComments";
	$fdata["GoodName"] = "applicationCourrierComments";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplicationsBackofficeView","applicationCourrierComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourrierComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.voltonApplications.applicationCourrierComments";

	
	
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


	$tdatavoltonapplicationsbackofficeview["applicationCourrierComments"] = $fdata;
		$tdatavoltonapplicationsbackofficeview[".searchableFields"][] = "applicationCourrierComments";


$tables_data["dbo.voltonApplicationsBackofficeView"]=&$tdatavoltonapplicationsbackofficeview;
$field_labels["dbo_voltonApplicationsBackofficeView"] = &$fieldLabelsvoltonapplicationsbackofficeview;
$fieldToolTips["dbo_voltonApplicationsBackofficeView"] = &$fieldToolTipsvoltonapplicationsbackofficeview;
$placeHolders["dbo_voltonApplicationsBackofficeView"] = &$placeHoldersvoltonapplicationsbackofficeview;
$page_titles["dbo_voltonApplicationsBackofficeView"] = &$pageTitlesvoltonapplicationsbackofficeview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.voltonApplicationsBackofficeView"] = array();
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


		
	$detailsTablesData["dbo.voltonApplicationsBackofficeView"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.voltonApplicationsBackofficeView"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.voltonApplicationsBackofficeView"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.voltonApplicationsBackofficeView"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.voltonApplicationsBackofficeView"][$dIndex]["detailKeys"][]="parentId";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.voltonApplicationsBackofficeView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_voltonapplicationsbackofficeview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.voltonApplications.id AS id,  dbo.voltonApplications.callid,  dbo.Calls.dialerAgent AS agent,  dbo.Calls.dialerPhone AS callPhone,  format(calls.callStart, 'dd/MM/yyyy') AS callDate,  dbo.voltonApplications.applicationStatusId,  dbo.voltonApplications.applicationStatusId AS applicationPhase,  dbo.voltonApplications.applicationStatusId AS salesPhase,  dbo.voltonApplications.applicationType,  dbo.voltonApplications.applicantName,  dbo.voltonApplications.applicantIdNumber,  dbo.voltonApplications.applicantAddress,  dbo.voltonApplications.applicantPostalCode,  dbo.voltonApplications.applicantArea,  dbo.voltonApplications.applicantCity,  dbo.voltonApplications.applicantTaxRegistrationNumber,  dbo.voltonApplications.applicantTaxOffice,  dbo.voltonApplications.applicantEmail,  dbo.voltonApplications.applicantProfession,  dbo.voltonApplications.applicantKod,  dbo.voltonApplications.applicantGemi,  dbo.voltonApplications.applicantPhone,  dbo.voltonApplications.applicantWorkPhone,  dbo.voltonApplications.applicantMobile,  dbo.voltonApplications.contactName,  dbo.voltonApplications.contactPhone,  dbo.voltonApplications.contactMobile,  dbo.voltonApplications.contactEmail,  dbo.voltonApplications.legalName,  dbo.voltonApplications.legalIdNumber,  dbo.voltonApplications.mailAddress,  dbo.voltonApplications.mailPostalCode,  dbo.voltonApplications.mailArea,  dbo.voltonApplications.mailCity,  dbo.voltonApplications.powerAddress,  dbo.voltonApplications.powerOwnershipType,  dbo.voltonApplications.powerPostalCode,  dbo.voltonApplications.powerArea,  dbo.voltonApplications.powerCity,  dbo.voltonApplications.powerAgreedKw,  dbo.voltonApplications.powerSupplyNumber,  dbo.voltonApplications.powerMeterNumber,  dbo.voltonApplications.powerCurrentSupplier,  dbo.voltonApplications.powerCurrentDayMeter,  dbo.voltonApplications.powerCurrentNightMeter,  dbo.voltonApplications.powerActivationStatus,  dbo.voltonApplications.voltonPlan,  dbo.voltonApplications.voltonContractDuration,  dbo.voltonApplications.voltonWarrantyAmount,  dbo.voltonApplications.voltonWarrantyOnFirstBill,  dbo.voltonApplications.voltonOther,  dbo.voltonApplications.voltonComments,  dbo.voltonApplications.voltonAutoPayment,  dbo.voltonApplications.document1,  dbo.voltonApplications.document2,  dbo.voltonApplications.document3,  dbo.voltonApplications.document4,  dbo.voltonApplications.document5,  dbo.voltonApplications.document6,  dbo.voltonApplications.document7,  dbo.voltonApplications.document8,  dbo.voltonApplications.document9,  dbo.voltonApplications.document10,  dbo.voltonApplications.document11,  dbo.voltonApplications.document12,  dbo.voltonApplications.document13,  dbo.voltonApplications.document14,  dbo.voltonApplications.document15,  dbo.voltonApplications.ngAddress,  dbo.voltonApplications.ngPostalCode,  dbo.voltonApplications.ngArea,  dbo.voltonApplications.ngCity,  dbo.voltonApplications.ngPressure,  dbo.voltonApplications.ngHourlyCapacity,  dbo.voltonApplications.ngHkasp,  dbo.voltonApplications.ngMeterNumber,  dbo.voltonApplications.ngMeterType,  dbo.voltonApplications.ngCurrentMeterValue,  dbo.voltonApplications.ngConnectionExists,  dbo.voltonApplications.ngSupplyIsNew,  dbo.voltonApplications.ngSupplyReactivation,  dbo.voltonApplications.applicationAgentStatus,  format(isnull(dbo.voltonApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy') as applicationLastStatusDate,  dbo.voltonApplications.applicationContactMethod,  dbo.voltonApplications.applicationCourier,  dbo.voltonApplications.applicationCourierDate,  dbo.voltonApplications.applicationCourrierTimeFrom,  dbo.voltonApplications.applicationCourierTimeTo,  dbo.voltonApplications.applicationCourrierComments";
$proto0["m_strFrom"] = "FROM dbo.voltonApplications  LEFT OUTER JOIN dbo.Calls ON dbo.voltonApplications.callid = dbo.Calls.id";
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
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto6["m_sql"] = "dbo.voltonApplications.id";
$proto6["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "id";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto8["m_sql"] = "dbo.voltonApplications.callid";
$proto8["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto10["m_sql"] = "dbo.Calls.dialerAgent";
$proto10["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "agent";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerPhone",
	"m_strTable" => "dbo.Calls",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto12["m_sql"] = "dbo.Calls.dialerPhone";
$proto12["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "callPhone";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "calls.callStart"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "format(calls.callStart, 'dd/MM/yyyy')";
$proto14["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "callDate";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto18["m_sql"] = "dbo.voltonApplications.applicationStatusId";
$proto18["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto20["m_sql"] = "dbo.voltonApplications.applicationStatusId";
$proto20["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "applicationPhase";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto22["m_sql"] = "dbo.voltonApplications.applicationStatusId";
$proto22["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "salesPhase";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationType",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto24["m_sql"] = "dbo.voltonApplications.applicationType";
$proto24["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantName",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto26["m_sql"] = "dbo.voltonApplications.applicantName";
$proto26["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantIdNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto28["m_sql"] = "dbo.voltonApplications.applicantIdNumber";
$proto28["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto30["m_sql"] = "dbo.voltonApplications.applicantAddress";
$proto30["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto32["m_sql"] = "dbo.voltonApplications.applicantPostalCode";
$proto32["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto34["m_sql"] = "dbo.voltonApplications.applicantArea";
$proto34["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto36["m_sql"] = "dbo.voltonApplications.applicantCity";
$proto36["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxRegistrationNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto38["m_sql"] = "dbo.voltonApplications.applicantTaxRegistrationNumber";
$proto38["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxOffice",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto40["m_sql"] = "dbo.voltonApplications.applicantTaxOffice";
$proto40["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantEmail",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto42["m_sql"] = "dbo.voltonApplications.applicantEmail";
$proto42["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantProfession",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto44["m_sql"] = "dbo.voltonApplications.applicantProfession";
$proto44["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantKod",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto46["m_sql"] = "dbo.voltonApplications.applicantKod";
$proto46["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantGemi",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto48["m_sql"] = "dbo.voltonApplications.applicantGemi";
$proto48["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPhone",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto50["m_sql"] = "dbo.voltonApplications.applicantPhone";
$proto50["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantWorkPhone",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto52["m_sql"] = "dbo.voltonApplications.applicantWorkPhone";
$proto52["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantMobile",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto54["m_sql"] = "dbo.voltonApplications.applicantMobile";
$proto54["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto56["m_sql"] = "dbo.voltonApplications.contactName";
$proto56["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "contactPhone",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto58["m_sql"] = "dbo.voltonApplications.contactPhone";
$proto58["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "contactMobile",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto60["m_sql"] = "dbo.voltonApplications.contactMobile";
$proto60["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "contactEmail",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto62["m_sql"] = "dbo.voltonApplications.contactEmail";
$proto62["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "legalName",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto64["m_sql"] = "dbo.voltonApplications.legalName";
$proto64["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "legalIdNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto66["m_sql"] = "dbo.voltonApplications.legalIdNumber";
$proto66["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "mailAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto68["m_sql"] = "dbo.voltonApplications.mailAddress";
$proto68["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "mailPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto70["m_sql"] = "dbo.voltonApplications.mailPostalCode";
$proto70["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mailArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto72["m_sql"] = "dbo.voltonApplications.mailArea";
$proto72["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "mailCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto74["m_sql"] = "dbo.voltonApplications.mailCity";
$proto74["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "powerAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto76["m_sql"] = "dbo.voltonApplications.powerAddress";
$proto76["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "powerOwnershipType",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto78["m_sql"] = "dbo.voltonApplications.powerOwnershipType";
$proto78["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "powerPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto80["m_sql"] = "dbo.voltonApplications.powerPostalCode";
$proto80["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "powerArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto82["m_sql"] = "dbo.voltonApplications.powerArea";
$proto82["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto84["m_sql"] = "dbo.voltonApplications.powerCity";
$proto84["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "powerAgreedKw",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto86["m_sql"] = "dbo.voltonApplications.powerAgreedKw";
$proto86["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "powerSupplyNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto88["m_sql"] = "dbo.voltonApplications.powerSupplyNumber";
$proto88["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "powerMeterNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto90["m_sql"] = "dbo.voltonApplications.powerMeterNumber";
$proto90["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentSupplier",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto92["m_sql"] = "dbo.voltonApplications.powerCurrentSupplier";
$proto92["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentDayMeter",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto94["m_sql"] = "dbo.voltonApplications.powerCurrentDayMeter";
$proto94["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentNightMeter",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto96["m_sql"] = "dbo.voltonApplications.powerCurrentNightMeter";
$proto96["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "powerActivationStatus",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto98["m_sql"] = "dbo.voltonApplications.powerActivationStatus";
$proto98["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonPlan",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto100["m_sql"] = "dbo.voltonApplications.voltonPlan";
$proto100["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonContractDuration",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto102["m_sql"] = "dbo.voltonApplications.voltonContractDuration";
$proto102["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonWarrantyAmount",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto104["m_sql"] = "dbo.voltonApplications.voltonWarrantyAmount";
$proto104["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonWarrantyOnFirstBill",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto106["m_sql"] = "dbo.voltonApplications.voltonWarrantyOnFirstBill";
$proto106["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonOther",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto108["m_sql"] = "dbo.voltonApplications.voltonOther";
$proto108["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonComments",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto110["m_sql"] = "dbo.voltonApplications.voltonComments";
$proto110["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonAutoPayment",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto112["m_sql"] = "dbo.voltonApplications.voltonAutoPayment";
$proto112["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "document1",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto114["m_sql"] = "dbo.voltonApplications.document1";
$proto114["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "document2",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto116["m_sql"] = "dbo.voltonApplications.document2";
$proto116["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "document3",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto118["m_sql"] = "dbo.voltonApplications.document3";
$proto118["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "document4",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto120["m_sql"] = "dbo.voltonApplications.document4";
$proto120["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "document5",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto122["m_sql"] = "dbo.voltonApplications.document5";
$proto122["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "document6",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto124["m_sql"] = "dbo.voltonApplications.document6";
$proto124["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "document7",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto126["m_sql"] = "dbo.voltonApplications.document7";
$proto126["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "document8",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto128["m_sql"] = "dbo.voltonApplications.document8";
$proto128["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "document9",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto130["m_sql"] = "dbo.voltonApplications.document9";
$proto130["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "document10",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto132["m_sql"] = "dbo.voltonApplications.document10";
$proto132["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "document11",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto134["m_sql"] = "dbo.voltonApplications.document11";
$proto134["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "document12",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto136["m_sql"] = "dbo.voltonApplications.document12";
$proto136["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "document13",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto138["m_sql"] = "dbo.voltonApplications.document13";
$proto138["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "document14",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto140["m_sql"] = "dbo.voltonApplications.document14";
$proto140["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "document15",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto142["m_sql"] = "dbo.voltonApplications.document15";
$proto142["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "ngAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto144["m_sql"] = "dbo.voltonApplications.ngAddress";
$proto144["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "ngPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto146["m_sql"] = "dbo.voltonApplications.ngPostalCode";
$proto146["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "ngArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto148["m_sql"] = "dbo.voltonApplications.ngArea";
$proto148["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "ngCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto150["m_sql"] = "dbo.voltonApplications.ngCity";
$proto150["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "ngPressure",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto152["m_sql"] = "dbo.voltonApplications.ngPressure";
$proto152["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "ngHourlyCapacity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto154["m_sql"] = "dbo.voltonApplications.ngHourlyCapacity";
$proto154["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "ngHkasp",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto156["m_sql"] = "dbo.voltonApplications.ngHkasp";
$proto156["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "ngMeterNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto158["m_sql"] = "dbo.voltonApplications.ngMeterNumber";
$proto158["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "ngMeterType",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto160["m_sql"] = "dbo.voltonApplications.ngMeterType";
$proto160["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "ngCurrentMeterValue",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto162["m_sql"] = "dbo.voltonApplications.ngCurrentMeterValue";
$proto162["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "ngConnectionExists",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto164["m_sql"] = "dbo.voltonApplications.ngConnectionExists";
$proto164["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "ngSupplyIsNew",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto166["m_sql"] = "dbo.voltonApplications.ngSupplyIsNew";
$proto166["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "ngSupplyReactivation",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto168["m_sql"] = "dbo.voltonApplications.ngSupplyReactivation";
$proto168["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationAgentStatus",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto170["m_sql"] = "dbo.voltonApplications.applicationAgentStatus";
$proto170["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$proto173=array();
$proto173["m_functiontype"] = "SQLF_CUSTOM";
$proto173["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "isnull(dbo.voltonApplications.applicationLastStatusDate,calls.callStart)"
));

$proto173["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto173["m_arguments"][]=$obj;
$proto173["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto173);

$proto172["m_sql"] = "format(isnull(dbo.voltonApplications.applicationLastStatusDate,calls.callStart),'dd/MM/yyyy')";
$proto172["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "applicationLastStatusDate";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationContactMethod",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto176["m_sql"] = "dbo.voltonApplications.applicationContactMethod";
$proto176["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourier",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto178["m_sql"] = "dbo.voltonApplications.applicationCourier";
$proto178["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierDate",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto180["m_sql"] = "dbo.voltonApplications.applicationCourierDate";
$proto180["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourrierTimeFrom",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto182["m_sql"] = "dbo.voltonApplications.applicationCourrierTimeFrom";
$proto182["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeTo",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto184["m_sql"] = "dbo.voltonApplications.applicationCourierTimeTo";
$proto184["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourrierComments",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto186["m_sql"] = "dbo.voltonApplications.applicationCourrierComments";
$proto186["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto188=array();
$proto188["m_link"] = "SQLL_MAIN";
			$proto189=array();
$proto189["m_strName"] = "dbo.voltonApplications";
$proto189["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto189["m_columns"] = array();
$proto189["m_columns"][] = "id";
$proto189["m_columns"][] = "callid";
$proto189["m_columns"][] = "applicationStatusId";
$proto189["m_columns"][] = "applicationType";
$proto189["m_columns"][] = "applicantName";
$proto189["m_columns"][] = "applicantIdNumber";
$proto189["m_columns"][] = "applicantAddress";
$proto189["m_columns"][] = "applicantPostalCode";
$proto189["m_columns"][] = "applicantArea";
$proto189["m_columns"][] = "applicantCity";
$proto189["m_columns"][] = "applicantTaxRegistrationNumber";
$proto189["m_columns"][] = "applicantTaxOffice";
$proto189["m_columns"][] = "applicantEmail";
$proto189["m_columns"][] = "applicantProfession";
$proto189["m_columns"][] = "applicantKod";
$proto189["m_columns"][] = "applicantGemi";
$proto189["m_columns"][] = "applicantPhone";
$proto189["m_columns"][] = "applicantWorkPhone";
$proto189["m_columns"][] = "applicantMobile";
$proto189["m_columns"][] = "contactName";
$proto189["m_columns"][] = "contactPhone";
$proto189["m_columns"][] = "contactMobile";
$proto189["m_columns"][] = "contactEmail";
$proto189["m_columns"][] = "legalName";
$proto189["m_columns"][] = "legalIdNumber";
$proto189["m_columns"][] = "mailAddress";
$proto189["m_columns"][] = "mailPostalCode";
$proto189["m_columns"][] = "mailArea";
$proto189["m_columns"][] = "mailCity";
$proto189["m_columns"][] = "powerAddress";
$proto189["m_columns"][] = "powerOwnershipType";
$proto189["m_columns"][] = "powerPostalCode";
$proto189["m_columns"][] = "powerArea";
$proto189["m_columns"][] = "powerCity";
$proto189["m_columns"][] = "powerAgreedKw";
$proto189["m_columns"][] = "powerSupplyNumber";
$proto189["m_columns"][] = "powerMeterNumber";
$proto189["m_columns"][] = "powerCurrentSupplier";
$proto189["m_columns"][] = "powerCurrentDayMeter";
$proto189["m_columns"][] = "powerCurrentNightMeter";
$proto189["m_columns"][] = "powerActivationStatus";
$proto189["m_columns"][] = "voltonPlan";
$proto189["m_columns"][] = "voltonContractDuration";
$proto189["m_columns"][] = "voltonWarrantyAmount";
$proto189["m_columns"][] = "voltonWarrantyOnFirstBill";
$proto189["m_columns"][] = "voltonOther";
$proto189["m_columns"][] = "voltonComments";
$proto189["m_columns"][] = "voltonAutoPayment";
$proto189["m_columns"][] = "document1";
$proto189["m_columns"][] = "document2";
$proto189["m_columns"][] = "document3";
$proto189["m_columns"][] = "document4";
$proto189["m_columns"][] = "document5";
$proto189["m_columns"][] = "document6";
$proto189["m_columns"][] = "document7";
$proto189["m_columns"][] = "document8";
$proto189["m_columns"][] = "document9";
$proto189["m_columns"][] = "document10";
$proto189["m_columns"][] = "document11";
$proto189["m_columns"][] = "document12";
$proto189["m_columns"][] = "document13";
$proto189["m_columns"][] = "document14";
$proto189["m_columns"][] = "document15";
$proto189["m_columns"][] = "ngAddress";
$proto189["m_columns"][] = "ngPostalCode";
$proto189["m_columns"][] = "ngArea";
$proto189["m_columns"][] = "ngCity";
$proto189["m_columns"][] = "ngPressure";
$proto189["m_columns"][] = "ngHourlyCapacity";
$proto189["m_columns"][] = "ngHkasp";
$proto189["m_columns"][] = "ngMeterNumber";
$proto189["m_columns"][] = "ngMeterType";
$proto189["m_columns"][] = "ngCurrentMeterValue";
$proto189["m_columns"][] = "ngConnectionExists";
$proto189["m_columns"][] = "ngSupplyIsNew";
$proto189["m_columns"][] = "ngSupplyReactivation";
$proto189["m_columns"][] = "applicationAgentStatus";
$proto189["m_columns"][] = "applicationLastStatusDate";
$proto189["m_columns"][] = "applicationContactMethod";
$proto189["m_columns"][] = "applicationCourier";
$proto189["m_columns"][] = "applicationCourierDate";
$proto189["m_columns"][] = "applicationCourrierTimeFrom";
$proto189["m_columns"][] = "applicationCourierTimeTo";
$proto189["m_columns"][] = "applicationCourrierComments";
$proto189["m_columns"][] = "dialerAgent";
$proto189["m_columns"][] = "additionalServices";
$obj = new SQLTable($proto189);

$proto188["m_table"] = $obj;
$proto188["m_sql"] = "dbo.voltonApplications";
$proto188["m_alias"] = "";
$proto188["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto190=array();
$proto190["m_sql"] = "";
$proto190["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto190["m_column"]=$obj;
$proto190["m_contained"] = array();
$proto190["m_strCase"] = "";
$proto190["m_havingmode"] = false;
$proto190["m_inBrackets"] = false;
$proto190["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto190);

$proto188["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto188);

$proto0["m_fromlist"][]=$obj;
												$proto192=array();
$proto192["m_link"] = "SQLL_LEFTJOIN";
			$proto193=array();
$proto193["m_strName"] = "dbo.Calls";
$proto193["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto193["m_columns"] = array();
$proto193["m_columns"][] = "id";
$proto193["m_columns"][] = "contactId";
$proto193["m_columns"][] = "callStart";
$proto193["m_columns"][] = "callHangup";
$proto193["m_columns"][] = "callEnd";
$proto193["m_columns"][] = "talkTime";
$proto193["m_columns"][] = "typingTime";
$proto193["m_columns"][] = "totalCallTime";
$proto193["m_columns"][] = "tvchannel";
$proto193["m_columns"][] = "broadcast";
$proto193["m_columns"][] = "seller";
$proto193["m_columns"][] = "callStatusId";
$proto193["m_columns"][] = "callDenialReasonID";
$proto193["m_columns"][] = "callClassificationID";
$proto193["m_columns"][] = "callSubClassificationID";
$proto193["m_columns"][] = "remarks";
$proto193["m_columns"][] = "redialDate";
$proto193["m_columns"][] = "redialComments";
$proto193["m_columns"][] = "redialIsPrivate";
$proto193["m_columns"][] = "redialDone";
$proto193["m_columns"][] = "contactMethod";
$proto193["m_columns"][] = "courier";
$proto193["m_columns"][] = "deliveryComments";
$proto193["m_columns"][] = "courierDeliveryDate";
$proto193["m_columns"][] = "courierTimeFrom";
$proto193["m_columns"][] = "courierTimeTo";
$proto193["m_columns"][] = "dialerPhone";
$proto193["m_columns"][] = "dialerCallEpoch";
$proto193["m_columns"][] = "dialerCampaign";
$proto193["m_columns"][] = "dialerList";
$proto193["m_columns"][] = "dialerLeadID";
$proto193["m_columns"][] = "dialerAgent";
$proto193["m_columns"][] = "dialerRecording";
$proto193["m_columns"][] = "productFamilyId";
$proto193["m_columns"][] = "orderShipCompany";
$proto193["m_columns"][] = "orderInvoiceRequired";
$proto193["m_columns"][] = "callComments";
$proto193["m_columns"][] = "internalCommunication";
$proto193["m_columns"][] = "callGdprAcceptance";
$proto193["m_columns"][] = "callGdprRecordingAcceptance";
$proto193["m_columns"][] = "orderPaymentMethod";
$proto193["m_columns"][] = "contactName";
$proto193["m_columns"][] = "contactZipCode";
$proto193["m_columns"][] = "contactCity";
$proto193["m_columns"][] = "ContactArea";
$proto193["m_columns"][] = "contactGender";
$proto193["m_columns"][] = "contactAge";
$proto193["m_columns"][] = "crmUser";
$proto193["m_columns"][] = "pauseAfterCall";
$obj = new SQLTable($proto193);

$proto192["m_table"] = $obj;
$proto192["m_sql"] = "LEFT OUTER JOIN dbo.Calls ON dbo.voltonApplications.callid = dbo.Calls.id";
$proto192["m_alias"] = "";
$proto192["m_srcTableName"] = "dbo.voltonApplicationsBackofficeView";
$proto194=array();
$proto194["m_sql"] = "dbo.voltonApplications.callid = dbo.Calls.id";
$proto194["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplicationsBackofficeView"
));

$proto194["m_column"]=$obj;
$proto194["m_contained"] = array();
$proto194["m_strCase"] = "= dbo.Calls.id";
$proto194["m_havingmode"] = false;
$proto194["m_inBrackets"] = false;
$proto194["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto194);

$proto192["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto192);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.voltonApplicationsBackofficeView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voltonapplicationsbackofficeview = createSqlQuery_voltonapplicationsbackofficeview();


	
		;

																																																																																									

$tdatavoltonapplicationsbackofficeview[".sqlquery"] = $queryData_voltonapplicationsbackofficeview;



include_once(getabspath("include/voltonapplicationsbackofficeview_events.php"));
$tableEvents["dbo.voltonApplicationsBackofficeView"] = new eventclass_voltonapplicationsbackofficeview;
$tdatavoltonapplicationsbackofficeview[".hasEvents"] = true;

?>