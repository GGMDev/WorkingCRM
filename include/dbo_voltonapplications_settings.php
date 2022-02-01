<?php
$tdatadbo_voltonapplications = array();
$tdatadbo_voltonapplications[".searchableFields"] = array();
$tdatadbo_voltonapplications[".ShortName"] = "dbo_voltonapplications";
$tdatadbo_voltonapplications[".OwnerID"] = "";
$tdatadbo_voltonapplications[".OriginalTable"] = "dbo.voltonApplications";


$tdatadbo_voltonapplications[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"voltonInDetailAddList\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"volton_view_popup\",\"view\"]}" );
$tdatadbo_voltonapplications[".originalPagesByType"] = $tdatadbo_voltonapplications[".pagesByType"];
$tdatadbo_voltonapplications[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"voltonInDetailAddList\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"volton_view_popup\",\"view\"]}" ) );
$tdatadbo_voltonapplications[".originalPages"] = $tdatadbo_voltonapplications[".pages"];
$tdatadbo_voltonapplications[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\",\"view\":\"volton_view_popup\"}" );
$tdatadbo_voltonapplications[".originalDefaultPages"] = $tdatadbo_voltonapplications[".defaultPages"];

//	field labels
$fieldLabelsdbo_voltonapplications = array();
$fieldToolTipsdbo_voltonapplications = array();
$pageTitlesdbo_voltonapplications = array();
$placeHoldersdbo_voltonapplications = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsdbo_voltonapplications["Greek"] = array();
	$fieldToolTipsdbo_voltonapplications["Greek"] = array();
	$placeHoldersdbo_voltonapplications["Greek"] = array();
	$pageTitlesdbo_voltonapplications["Greek"] = array();
	$fieldLabelsdbo_voltonapplications["Greek"]["id"] = "Id";
	$fieldToolTipsdbo_voltonapplications["Greek"]["id"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["id"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["callid"] = "Callid";
	$fieldToolTipsdbo_voltonapplications["Greek"]["callid"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["callid"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantName"] = "Ονοματεπώνυμο/Επωνυμία";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantName"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantName"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantIdNumber"] = "ΑΔΤ/Αρ. Διαβ.";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantIdNumber"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantIdNumber"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantAddress"] = "Διεύθυνση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantAddress"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantAddress"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantPostalCode"] = "ΤΚ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantPostalCode"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantPostalCode"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantTaxRegistrationNumber"] = "ΑΦΜ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantTaxRegistrationNumber"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantTaxOffice"] = "ΔΟΥ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantTaxOffice"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantTaxOffice"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantEmail"] = "Email";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantEmail"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantEmail"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantProfession"] = "Επάγγελμα";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantProfession"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantProfession"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantKod"] = "ΚΟΔ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantKod"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantKod"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantGemi"] = "ΓΕΜΗ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantGemi"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantGemi"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["contactName"] = "Ονοματεπώνυμο";
	$fieldToolTipsdbo_voltonapplications["Greek"]["contactName"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["contactName"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["contactPhone"] = "Τηλέφωνο";
	$fieldToolTipsdbo_voltonapplications["Greek"]["contactPhone"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["contactPhone"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["contactMobile"] = "Κινητό";
	$fieldToolTipsdbo_voltonapplications["Greek"]["contactMobile"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["contactMobile"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["contactEmail"] = "Email";
	$fieldToolTipsdbo_voltonapplications["Greek"]["contactEmail"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["contactEmail"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantPhone"] = "Τηλ. Οικίας";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantPhone"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantPhone"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantMobile"] = "Κινητό";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantMobile"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantMobile"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["legalName"] = "Ονοματεπώνυμο";
	$fieldToolTipsdbo_voltonapplications["Greek"]["legalName"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["legalName"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["legalIdNumber"] = "ΑΔΤ/Αρ. Διαβ.";
	$fieldToolTipsdbo_voltonapplications["Greek"]["legalIdNumber"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["legalIdNumber"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["mailAddress"] = "Διεύθυνση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["mailAddress"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["mailAddress"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["mailPostalCode"] = "ΤΚ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["mailPostalCode"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["mailPostalCode"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerAddress"] = "Διεύθυνση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerAddress"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerAddress"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerOwnershipType"] = "Ιδιοκτησία";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerOwnershipType"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerOwnershipType"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerPostalCode"] = "ΤΚ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerPostalCode"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerPostalCode"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerAgreedKw"] = "Συμφωνημένη Ισχύς (Kw)";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerAgreedKw"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerAgreedKw"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerSupplyNumber"] = "Αρ. Παροχής";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerSupplyNumber"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerSupplyNumber"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerMeterNumber"] = "Αρ. Μετρητή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerMeterNumber"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerMeterNumber"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerCurrentSupplier"] = "Πάροχος";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerCurrentSupplier"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerCurrentSupplier"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerCurrentDayMeter"] = "Ένδειξη Ημερήσια";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerCurrentDayMeter"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerCurrentDayMeter"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerCurrentNightMeter"] = "Νυχτερινή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerCurrentNightMeter"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerCurrentNightMeter"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerActivationStatus"] = "Ενεργοποίηση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerActivationStatus"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerActivationStatus"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonPlan"] = "Πρόγραμμα Volton";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonPlan"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonPlan"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonContractDuration"] = "Διάρκεια";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonContractDuration"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonContractDuration"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonWarrantyAmount"] = "Ποσό Εγγύησης";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonWarrantyAmount"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonWarrantyAmount"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonWarrantyOnFirstBill"] = "Εγγύηση στον 1ο Λ/σμό";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonWarrantyOnFirstBill"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonWarrantyOnFirstBill"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonOther"] = "Άλλο";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonOther"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonOther"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonComments"] = "Παρατηρήσεις";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonComments"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonComments"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["voltonAutoPayment"] = "Πάγια Εντολή Μέσω Τραπεζικού Λογαριασμού";
	$fieldToolTipsdbo_voltonapplications["Greek"]["voltonAutoPayment"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["voltonAutoPayment"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationType"] = "Τύπος Αίτησης";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationType"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationType"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantWorkPhone"] = "Τηλ. Εργασίας";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantWorkPhone"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantWorkPhone"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document1"] = "Έγγραφο Ταυτοποίησης";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document1"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document1"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document2"] = "Ε2 ή Ε9 ή συμβόλαιο";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document2"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document2"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document3"] = "Φωτό Μετρητή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document3"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document3"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document4"] = "Document4";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document4"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document4"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document5"] = "Τελευταίος λογαριασμός ρεύματος";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document5"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document5"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document6"] = "Απόδ. Πληρωμής Τελ. Δόσης δ/νισμού";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document6"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document6"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document7"] = "Αντίγραφο παλιού λογαριασμού ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document7"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document7"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document8"] = "Υπεύθυνη δήλωση κομμένης παροχής";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document8"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document8"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document9"] = " φωτογραφία του ρολογιού";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document9"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document9"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document10"] = " Σύμβαση του ΔΕΔΔΗΕ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document10"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document10"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document11"] = "Προσφ. Μισθωτήριο ή 
Ιδιωτικό Συμφ. Μίσθωσης ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document11"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document11"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document12"] = "Υπ. Δήλωση Μετ/σης Ενεργής Παροχής";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document12"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document12"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document13"] = "Έναρξη ή πρόσφατη Απ.Ταμ.Μηχανής";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document13"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document13"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document14"] = "Προκαταβολή x€ * τ.μ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document14"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document14"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["document15"] = "Document15";
	$fieldToolTipsdbo_voltonapplications["Greek"]["document15"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["document15"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationStatusId"] = "Κατάσταση Αίτησης (BackOffice)";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationStatusId"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationStatusId"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantArea"] = "Περιοχή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantArea"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantArea"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicantCity"] = "Πόλη";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicantCity"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicantCity"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["mailArea"] = "Περιοχή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["mailArea"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["mailArea"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["mailCity"] = "Πόλη";
	$fieldToolTipsdbo_voltonapplications["Greek"]["mailCity"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["mailCity"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerArea"] = "Περιοχή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerArea"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerArea"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["powerCity"] = "Πόλη";
	$fieldToolTipsdbo_voltonapplications["Greek"]["powerCity"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["powerCity"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngAddress"] = "Διεύθυνση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngAddress"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngAddress"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngPostalCode"] = "ΤΚ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngPostalCode"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngPostalCode"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngArea"] = "Περιοχή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngArea"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngArea"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngCity"] = "Πόλη";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngCity"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngCity"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngPressure"] = "Πίεση Δικτύου - Χαμηλή Πίεση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngPressure"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngPressure"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngHourlyCapacity"] = "Δεσμ. ωριαία δυναμικότητα σημείου (kW/h)";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngHourlyCapacity"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngHourlyCapacity"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngHkasp"] = "ΗΚΑΣΠ";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngHkasp"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngHkasp"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngMeterNumber"] = "Αρ. Μετρητή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngMeterNumber"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngMeterNumber"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngMeterType"] = "Τύπος Μετρητή";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngMeterType"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngMeterType"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngCurrentMeterValue"] = "Τελευταία Ένδειξη";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngCurrentMeterValue"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngCurrentMeterValue"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngConnectionExists"] = "Υφίσταται Σύνδεση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngConnectionExists"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngConnectionExists"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngSupplyIsNew"] = "Πρώτη Τροφοδότηση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngSupplyIsNew"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngSupplyIsNew"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["ngSupplyReactivation"] = "Επανενεργοποίηση";
	$fieldToolTipsdbo_voltonapplications["Greek"]["ngSupplyReactivation"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["ngSupplyReactivation"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationAgentStatus"] = "Κατάσταση Αίτησης (Agent)";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationAgentStatus"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationAgentStatus"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationLastStatusDate"] = "Τελ. Ημ/νία Status";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationLastStatusDate"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationLastStatusDate"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationContactMethod"] = "Τρόπος Παραλαβής";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationContactMethod"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationContactMethod"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationCourier"] = "Courier";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationCourier"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationCourier"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationCourierDate"] = "Ημερομηνία Ραντεβού";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationCourierDate"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationCourierDate"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationCourrierTimeFrom"] = "Από/Έως";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationCourrierTimeFrom"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationCourrierTimeFrom"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationCourierTimeTo"] = "Application Courier Time To";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationCourierTimeTo"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationCourierTimeTo"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["applicationCourrierComments"] = "Σχόλια Courier";
	$fieldToolTipsdbo_voltonapplications["Greek"]["applicationCourrierComments"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["applicationCourrierComments"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["dialerAgent"] = "Agent";
	$fieldToolTipsdbo_voltonapplications["Greek"]["dialerAgent"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["dialerAgent"] = "";
	$fieldLabelsdbo_voltonapplications["Greek"]["additionalServices"] = "Additional Services";
	$fieldToolTipsdbo_voltonapplications["Greek"]["additionalServices"] = "";
	$placeHoldersdbo_voltonapplications["Greek"]["additionalServices"] = "";
	$pageTitlesdbo_voltonapplications["Greek"]["volton_view_popup"] = "Αρ. Αίτησης: {%id}";
	$pageTitlesdbo_voltonapplications["Greek"]["add"] = "Νέα Αίτηση";
	if (count($fieldToolTipsdbo_voltonapplications["Greek"]))
		$tdatadbo_voltonapplications[".isUseToolTips"] = true;
}


	$tdatadbo_voltonapplications[".NCSearch"] = true;



$tdatadbo_voltonapplications[".shortTableName"] = "dbo_voltonapplications";
$tdatadbo_voltonapplications[".nSecOptions"] = 0;

$tdatadbo_voltonapplications[".mainTableOwnerID"] = "";
$tdatadbo_voltonapplications[".entityType"] = 0;
$tdatadbo_voltonapplications[".connId"] = "CallCenter_at_10_41_2_31";


$tdatadbo_voltonapplications[".strOriginalTableName"] = "dbo.voltonApplications";

	



$tdatadbo_voltonapplications[".showAddInPopup"] = false;

$tdatadbo_voltonapplications[".showEditInPopup"] = false;

$tdatadbo_voltonapplications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadbo_voltonapplications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadbo_voltonapplications[".listAjax"] = false;
//	temporary
$tdatadbo_voltonapplications[".listAjax"] = false;

	$tdatadbo_voltonapplications[".audit"] = true;

	$tdatadbo_voltonapplications[".locking"] = false;


$pages = $tdatadbo_voltonapplications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_voltonapplications[".edit"] = true;
	$tdatadbo_voltonapplications[".afterEditAction"] = 0;
	$tdatadbo_voltonapplications[".closePopupAfterEdit"] = 1;
	$tdatadbo_voltonapplications[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_voltonapplications[".add"] = true;
$tdatadbo_voltonapplications[".afterAddAction"] = 0;
$tdatadbo_voltonapplications[".closePopupAfterAdd"] = 1;
$tdatadbo_voltonapplications[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_voltonapplications[".list"] = true;
}



$tdatadbo_voltonapplications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_voltonapplications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_voltonapplications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_voltonapplications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_voltonapplications[".printFriendly"] = true;
}



$tdatadbo_voltonapplications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_voltonapplications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_voltonapplications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_voltonapplications[".isUseAjaxSuggest"] = false;

$tdatadbo_voltonapplications[".rowHighlite"] = true;



																																																																																																																																																																																															
											
																																																																																																																																																																									

$tdatadbo_voltonapplications[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_voltonapplications[".buttonsAdded"] = true;

$tdatadbo_voltonapplications[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadbo_voltonapplications[".isUseTimeForSearch"] = false;


$tdatadbo_voltonapplications[".badgeColor"] = "0080ff";


$tdatadbo_voltonapplications[".allSearchFields"] = array();
$tdatadbo_voltonapplications[".filterFields"] = array();
$tdatadbo_voltonapplications[".requiredSearchFields"] = array();

$tdatadbo_voltonapplications[".googleLikeFields"] = array();
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationStatusId";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationType";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantName";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantArea";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantCity";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantTaxRegistrationNumber";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantPhone";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantWorkPhone";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicantMobile";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "powerMeterNumber";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "powerCurrentSupplier";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngAddress";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngPostalCode";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngArea";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngCity";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngPressure";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngHourlyCapacity";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngHkasp";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngMeterNumber";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngMeterType";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngCurrentMeterValue";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngConnectionExists";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngSupplyIsNew";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "ngSupplyReactivation";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationAgentStatus";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationLastStatusDate";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationContactMethod";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationCourier";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationCourierDate";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationCourrierTimeFrom";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationCourierTimeTo";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "applicationCourrierComments";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "dialerAgent";
$tdatadbo_voltonapplications[".googleLikeFields"][] = "additionalServices";



$tdatadbo_voltonapplications[".tableType"] = "list";

$tdatadbo_voltonapplications[".printerPageOrientation"] = 0;
$tdatadbo_voltonapplications[".nPrinterPageScale"] = 100;

$tdatadbo_voltonapplications[".nPrinterSplitRecords"] = 40;

$tdatadbo_voltonapplications[".geocodingEnabled"] = false;






$tdatadbo_voltonapplications[".searchIsRequiredForFilters"] = true;

$tdatadbo_voltonapplications[".noRecordsFirstPage"] = true;



$tdatadbo_voltonapplications[".pageSize"] = 20;

$tdatadbo_voltonapplications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadbo_voltonapplications[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_voltonapplications[".orderindexes"] = array();


$tdatadbo_voltonapplications[".sqlHead"] = "SELECT id,  	callid,  	applicationStatusId,  	applicationType,  	applicantName,  	applicantIdNumber,  	applicantAddress,  	applicantPostalCode,  	applicantArea,  	applicantCity,  	applicantTaxRegistrationNumber,  	applicantTaxOffice,  	applicantEmail,  	applicantProfession,  	applicantKod,  	applicantGemi,  	applicantPhone,  	applicantWorkPhone,  	applicantMobile,  	contactName,  	contactPhone,  	contactMobile,  	contactEmail,  	legalName,  	legalIdNumber,  	mailAddress,  	mailPostalCode,  	mailArea,  	mailCity,  	powerAddress,  	powerOwnershipType,  	powerPostalCode,  	powerArea,  	powerCity,  	powerAgreedKw,  	powerSupplyNumber,  	powerMeterNumber,  	powerCurrentSupplier,  	powerCurrentDayMeter,  	powerCurrentNightMeter,  	powerActivationStatus,  	voltonPlan,  	voltonContractDuration,  	voltonWarrantyAmount,  	voltonWarrantyOnFirstBill,  	voltonOther,  	voltonComments,  	voltonAutoPayment,  	document1,  	document2,  	document3,  	document4,  	document5,  	document6,  	document7,  	document8,  	document9,  	document10,  	document11,  	document12,  	document13,  	document14,  	document15,  	ngAddress,  	ngPostalCode,  	ngArea,  	ngCity,  	ngPressure,  	ngHourlyCapacity,  	ngHkasp,  	ngMeterNumber,  	ngMeterType,  	ngCurrentMeterValue,  	ngConnectionExists,  	ngSupplyIsNew,  	ngSupplyReactivation,  	applicationAgentStatus,  	applicationLastStatusDate,  	applicationContactMethod,  	applicationCourier,  	applicationCourierDate,  	applicationCourrierTimeFrom,  	applicationCourierTimeTo,  	applicationCourrierComments,  	dialerAgent,  	additionalServices";
$tdatadbo_voltonapplications[".sqlFrom"] = "FROM dbo.voltonApplications";
$tdatadbo_voltonapplications[".sqlWhereExpr"] = "";
$tdatadbo_voltonapplications[".sqlTail"] = "";

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
$tdatadbo_voltonapplications[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_voltonapplications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_voltonapplications[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_voltonapplications[".highlightSearchResults"] = true;

$tableKeysdbo_voltonapplications = array();
$tableKeysdbo_voltonapplications[] = "id";
$tdatadbo_voltonapplications[".Keys"] = $tableKeysdbo_voltonapplications;


$tdatadbo_voltonapplications[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","id");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["id"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "id";
//	callid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "callid";
	$fdata["GoodName"] = "callid";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","callid");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["callid"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "callid";
//	applicationStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "applicationStatusId";
	$fdata["GoodName"] = "applicationStatusId";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationStatusId");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "applicationStatusId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationStatusId";

	
	
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


	$tdatadbo_voltonapplications["applicationStatusId"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationStatusId";
//	applicationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "applicationType";
	$fdata["GoodName"] = "applicationType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationType");
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


	$tdatadbo_voltonapplications["applicationType"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationType";
//	applicantName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "applicantName";
	$fdata["GoodName"] = "applicantName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantName");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["applicantName"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantName";
//	applicantIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "applicantIdNumber";
	$fdata["GoodName"] = "applicantIdNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantIdNumber");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["applicantIdNumber"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantIdNumber";
//	applicantAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "applicantAddress";
	$fdata["GoodName"] = "applicantAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantAddress");
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


	$tdatadbo_voltonapplications["applicantAddress"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantAddress";
//	applicantPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "applicantPostalCode";
	$fdata["GoodName"] = "applicantPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantPostalCode");
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


	$tdatadbo_voltonapplications["applicantPostalCode"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantPostalCode";
//	applicantArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "applicantArea";
	$fdata["GoodName"] = "applicantArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantArea");
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


	$tdatadbo_voltonapplications["applicantArea"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantArea";
//	applicantCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "applicantCity";
	$fdata["GoodName"] = "applicantCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantCity");
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


	$tdatadbo_voltonapplications["applicantCity"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantCity";
//	applicantTaxRegistrationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "applicantTaxRegistrationNumber";
	$fdata["GoodName"] = "applicantTaxRegistrationNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantTaxRegistrationNumber");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["applicantTaxRegistrationNumber"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantTaxRegistrationNumber";
//	applicantTaxOffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "applicantTaxOffice";
	$fdata["GoodName"] = "applicantTaxOffice";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantTaxOffice");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["applicantTaxOffice"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantTaxOffice";
//	applicantEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "applicantEmail";
	$fdata["GoodName"] = "applicantEmail";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantEmail");
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


	$tdatadbo_voltonapplications["applicantEmail"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantEmail";
//	applicantProfession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "applicantProfession";
	$fdata["GoodName"] = "applicantProfession";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantProfession");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["applicantProfession"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantProfession";
//	applicantKod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "applicantKod";
	$fdata["GoodName"] = "applicantKod";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantKod");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantKod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantKod";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["applicantKod"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantKod";
//	applicantGemi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "applicantGemi";
	$fdata["GoodName"] = "applicantGemi";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantGemi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantGemi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantGemi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["applicantGemi"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantGemi";
//	applicantPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "applicantPhone";
	$fdata["GoodName"] = "applicantPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantPhone");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadbo_voltonapplications["applicantPhone"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantPhone";
//	applicantWorkPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "applicantWorkPhone";
	$fdata["GoodName"] = "applicantWorkPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantWorkPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicantWorkPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicantWorkPhone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["applicantWorkPhone"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantWorkPhone";
//	applicantMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "applicantMobile";
	$fdata["GoodName"] = "applicantMobile";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicantMobile");
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


	$tdatadbo_voltonapplications["applicantMobile"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicantMobile";
//	contactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "contactName";
	$fdata["GoodName"] = "contactName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","contactName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["contactName"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "contactName";
//	contactPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "contactPhone";
	$fdata["GoodName"] = "contactPhone";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","contactPhone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactPhone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["contactPhone"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "contactPhone";
//	contactMobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "contactMobile";
	$fdata["GoodName"] = "contactMobile";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","contactMobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactMobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactMobile";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["contactMobile"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "contactMobile";
//	contactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "contactEmail";
	$fdata["GoodName"] = "contactEmail";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","contactEmail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contactEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contactEmail";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["contactEmail"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "contactEmail";
//	legalName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "legalName";
	$fdata["GoodName"] = "legalName";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","legalName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "legalName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legalName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["legalName"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "legalName";
//	legalIdNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "legalIdNumber";
	$fdata["GoodName"] = "legalIdNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","legalIdNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "legalIdNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legalIdNumber";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["legalIdNumber"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "legalIdNumber";
//	mailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "mailAddress";
	$fdata["GoodName"] = "mailAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","mailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailAddress";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["mailAddress"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "mailAddress";
//	mailPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "mailPostalCode";
	$fdata["GoodName"] = "mailPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","mailPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailPostalCode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["mailPostalCode"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "mailPostalCode";
//	mailArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "mailArea";
	$fdata["GoodName"] = "mailArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","mailArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailArea";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["mailArea"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "mailArea";
//	mailCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "mailCity";
	$fdata["GoodName"] = "mailCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","mailCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mailCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailCity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["mailCity"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "mailCity";
//	powerAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "powerAddress";
	$fdata["GoodName"] = "powerAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerAddress";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerAddress"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerAddress";
//	powerOwnershipType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "powerOwnershipType";
	$fdata["GoodName"] = "powerOwnershipType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerOwnershipType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerOwnershipType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerOwnershipType";

	
	
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


	$tdatadbo_voltonapplications["powerOwnershipType"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerOwnershipType";
//	powerPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "powerPostalCode";
	$fdata["GoodName"] = "powerPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerPostalCode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerPostalCode"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerPostalCode";
//	powerArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "powerArea";
	$fdata["GoodName"] = "powerArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerArea";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerArea"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerArea";
//	powerCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "powerCity";
	$fdata["GoodName"] = "powerCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerCity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerCity"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerCity";
//	powerAgreedKw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "powerAgreedKw";
	$fdata["GoodName"] = "powerAgreedKw";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerAgreedKw");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerAgreedKw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerAgreedKw";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerAgreedKw"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerAgreedKw";
//	powerSupplyNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "powerSupplyNumber";
	$fdata["GoodName"] = "powerSupplyNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerSupplyNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerSupplyNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerSupplyNumber";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerSupplyNumber"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerSupplyNumber";
//	powerMeterNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "powerMeterNumber";
	$fdata["GoodName"] = "powerMeterNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerMeterNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerMeterNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerMeterNumber";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerMeterNumber"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerMeterNumber";
//	powerCurrentSupplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "powerCurrentSupplier";
	$fdata["GoodName"] = "powerCurrentSupplier";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerCurrentSupplier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerCurrentSupplier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerCurrentSupplier";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerCurrentSupplier"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerCurrentSupplier";
//	powerCurrentDayMeter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "powerCurrentDayMeter";
	$fdata["GoodName"] = "powerCurrentDayMeter";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerCurrentDayMeter");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerCurrentDayMeter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerCurrentDayMeter";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerCurrentDayMeter"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerCurrentDayMeter";
//	powerCurrentNightMeter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "powerCurrentNightMeter";
	$fdata["GoodName"] = "powerCurrentNightMeter";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerCurrentNightMeter");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "powerCurrentNightMeter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerCurrentNightMeter";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["powerCurrentNightMeter"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerCurrentNightMeter";
//	powerActivationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "powerActivationStatus";
	$fdata["GoodName"] = "powerActivationStatus";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","powerActivationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "powerActivationStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "powerActivationStatus";

	
	
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


	$tdatadbo_voltonapplications["powerActivationStatus"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "powerActivationStatus";
//	voltonPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "voltonPlan";
	$fdata["GoodName"] = "voltonPlan";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonPlan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonPlan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonPlan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["voltonPlan"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonPlan";
//	voltonContractDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "voltonContractDuration";
	$fdata["GoodName"] = "voltonContractDuration";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonContractDuration");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonContractDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonContractDuration";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["voltonContractDuration"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonContractDuration";
//	voltonWarrantyAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "voltonWarrantyAmount";
	$fdata["GoodName"] = "voltonWarrantyAmount";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonWarrantyAmount");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "voltonWarrantyAmount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonWarrantyAmount";

	
	
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


	$tdatadbo_voltonapplications["voltonWarrantyAmount"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonWarrantyAmount";
//	voltonWarrantyOnFirstBill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "voltonWarrantyOnFirstBill";
	$fdata["GoodName"] = "voltonWarrantyOnFirstBill";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonWarrantyOnFirstBill");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonWarrantyOnFirstBill";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonWarrantyOnFirstBill";

	
	
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


	$tdatadbo_voltonapplications["voltonWarrantyOnFirstBill"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonWarrantyOnFirstBill";
//	voltonOther
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "voltonOther";
	$fdata["GoodName"] = "voltonOther";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonOther");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "voltonOther";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonOther";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["voltonOther"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonOther";
//	voltonComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "voltonComments";
	$fdata["GoodName"] = "voltonComments";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonComments");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "voltonComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonComments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["voltonComments"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonComments";
//	voltonAutoPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "voltonAutoPayment";
	$fdata["GoodName"] = "voltonAutoPayment";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","voltonAutoPayment");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "voltonAutoPayment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voltonAutoPayment";

	
	
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


	$tdatadbo_voltonapplications["voltonAutoPayment"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "voltonAutoPayment";
//	document1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "document1";
	$fdata["GoodName"] = "document1";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document1";

	
	
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


	$tdatadbo_voltonapplications["document1"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document1";
//	document2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "document2";
	$fdata["GoodName"] = "document2";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document2");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document2";

	
	
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


	$tdatadbo_voltonapplications["document2"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document2";
//	document3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "document3";
	$fdata["GoodName"] = "document3";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document3");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document3";

	
	
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


	$tdatadbo_voltonapplications["document3"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document3";
//	document4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "document4";
	$fdata["GoodName"] = "document4";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document4");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document4";

	
	
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


	$tdatadbo_voltonapplications["document4"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document4";
//	document5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "document5";
	$fdata["GoodName"] = "document5";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document5");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document5";

	
	
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


	$tdatadbo_voltonapplications["document5"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document5";
//	document6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "document6";
	$fdata["GoodName"] = "document6";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document6");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document6";

	
	
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


	$tdatadbo_voltonapplications["document6"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document6";
//	document7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "document7";
	$fdata["GoodName"] = "document7";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document7");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document7";

	
	
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


	$tdatadbo_voltonapplications["document7"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document7";
//	document8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "document8";
	$fdata["GoodName"] = "document8";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document8");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document8";

	
	
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


	$tdatadbo_voltonapplications["document8"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document8";
//	document9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "document9";
	$fdata["GoodName"] = "document9";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document9");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document9";

	
	
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


	$tdatadbo_voltonapplications["document9"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document9";
//	document10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "document10";
	$fdata["GoodName"] = "document10";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document10");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document10";

	
	
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


	$tdatadbo_voltonapplications["document10"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document10";
//	document11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "document11";
	$fdata["GoodName"] = "document11";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document11");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document11";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document11";

	
	
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


	$tdatadbo_voltonapplications["document11"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document11";
//	document12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "document12";
	$fdata["GoodName"] = "document12";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document12");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document12";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document12";

	
	
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


	$tdatadbo_voltonapplications["document12"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document12";
//	document13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "document13";
	$fdata["GoodName"] = "document13";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document13");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document13";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document13";

	
	
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


	$tdatadbo_voltonapplications["document13"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document13";
//	document14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "document14";
	$fdata["GoodName"] = "document14";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document14");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document14";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document14";

	
	
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


	$tdatadbo_voltonapplications["document14"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document14";
//	document15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "document15";
	$fdata["GoodName"] = "document15";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","document15");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "document15";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document15";

	
	
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


	$tdatadbo_voltonapplications["document15"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "document15";
//	ngAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "ngAddress";
	$fdata["GoodName"] = "ngAddress";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngAddress");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngAddress";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngAddress"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngAddress";
//	ngPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "ngPostalCode";
	$fdata["GoodName"] = "ngPostalCode";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngPostalCode");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngPostalCode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngPostalCode"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngPostalCode";
//	ngArea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "ngArea";
	$fdata["GoodName"] = "ngArea";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngArea");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngArea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngArea";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngArea"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngArea";
//	ngCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "ngCity";
	$fdata["GoodName"] = "ngCity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngCity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngCity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngCity"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngCity";
//	ngPressure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "ngPressure";
	$fdata["GoodName"] = "ngPressure";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngPressure");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngPressure";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngPressure";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngPressure"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngPressure";
//	ngHourlyCapacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "ngHourlyCapacity";
	$fdata["GoodName"] = "ngHourlyCapacity";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngHourlyCapacity");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngHourlyCapacity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngHourlyCapacity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngHourlyCapacity"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngHourlyCapacity";
//	ngHkasp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "ngHkasp";
	$fdata["GoodName"] = "ngHkasp";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngHkasp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngHkasp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngHkasp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngHkasp"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngHkasp";
//	ngMeterNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "ngMeterNumber";
	$fdata["GoodName"] = "ngMeterNumber";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngMeterNumber");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngMeterNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngMeterNumber";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngMeterNumber"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngMeterNumber";
//	ngMeterType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "ngMeterType";
	$fdata["GoodName"] = "ngMeterType";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngMeterType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ngMeterType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngMeterType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngMeterType"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngMeterType";
//	ngCurrentMeterValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "ngCurrentMeterValue";
	$fdata["GoodName"] = "ngCurrentMeterValue";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngCurrentMeterValue");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngCurrentMeterValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngCurrentMeterValue";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["ngCurrentMeterValue"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngCurrentMeterValue";
//	ngConnectionExists
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "ngConnectionExists";
	$fdata["GoodName"] = "ngConnectionExists";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngConnectionExists");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngConnectionExists";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngConnectionExists";

	
	
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


	$tdatadbo_voltonapplications["ngConnectionExists"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngConnectionExists";
//	ngSupplyIsNew
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "ngSupplyIsNew";
	$fdata["GoodName"] = "ngSupplyIsNew";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngSupplyIsNew");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngSupplyIsNew";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngSupplyIsNew";

	
	
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


	$tdatadbo_voltonapplications["ngSupplyIsNew"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngSupplyIsNew";
//	ngSupplyReactivation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "ngSupplyReactivation";
	$fdata["GoodName"] = "ngSupplyReactivation";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","ngSupplyReactivation");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ngSupplyReactivation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ngSupplyReactivation";

	
	
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


	$tdatadbo_voltonapplications["ngSupplyReactivation"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "ngSupplyReactivation";
//	applicationAgentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "applicationAgentStatus";
	$fdata["GoodName"] = "applicationAgentStatus";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationAgentStatus");
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


	$tdatadbo_voltonapplications["applicationAgentStatus"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationAgentStatus";
//	applicationLastStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "applicationLastStatusDate";
	$fdata["GoodName"] = "applicationLastStatusDate";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationLastStatusDate");
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


	$tdatadbo_voltonapplications["applicationLastStatusDate"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationLastStatusDate";
//	applicationContactMethod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "applicationContactMethod";
	$fdata["GoodName"] = "applicationContactMethod";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationContactMethod");
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


	$tdatadbo_voltonapplications["applicationContactMethod"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationContactMethod";
//	applicationCourier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "applicationCourier";
	$fdata["GoodName"] = "applicationCourier";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationCourier");
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


	$tdatadbo_voltonapplications["applicationCourier"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationCourier";
//	applicationCourierDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "applicationCourierDate";
	$fdata["GoodName"] = "applicationCourierDate";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationCourierDate");
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


	$tdatadbo_voltonapplications["applicationCourierDate"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationCourierDate";
//	applicationCourrierTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "applicationCourrierTimeFrom";
	$fdata["GoodName"] = "applicationCourrierTimeFrom";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationCourrierTimeFrom");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourrierTimeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourrierTimeFrom";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["applicationCourrierTimeFrom"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationCourrierTimeFrom";
//	applicationCourierTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "applicationCourierTimeTo";
	$fdata["GoodName"] = "applicationCourierTimeTo";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationCourierTimeTo");
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


	$tdatadbo_voltonapplications["applicationCourierTimeTo"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationCourierTimeTo";
//	applicationCourrierComments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "applicationCourrierComments";
	$fdata["GoodName"] = "applicationCourrierComments";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","applicationCourrierComments");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "applicationCourrierComments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicationCourrierComments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatadbo_voltonapplications["applicationCourrierComments"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "applicationCourrierComments";
//	dialerAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "dialerAgent";
	$fdata["GoodName"] = "dialerAgent";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","dialerAgent");
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


	$tdatadbo_voltonapplications["dialerAgent"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "dialerAgent";
//	additionalServices
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "additionalServices";
	$fdata["GoodName"] = "additionalServices";
	$fdata["ownerTable"] = "dbo.voltonApplications";
	$fdata["Label"] = GetFieldLabel("dbo_voltonApplications","additionalServices");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "additionalServices";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "additionalServices";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "additionalService";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
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


	$tdatadbo_voltonapplications["additionalServices"] = $fdata;
		$tdatadbo_voltonapplications[".searchableFields"][] = "additionalServices";


$tables_data["dbo.voltonApplications"]=&$tdatadbo_voltonapplications;
$field_labels["dbo_voltonApplications"] = &$fieldLabelsdbo_voltonapplications;
$fieldToolTips["dbo_voltonApplications"] = &$fieldToolTipsdbo_voltonapplications;
$placeHolders["dbo_voltonApplications"] = &$placeHoldersdbo_voltonapplications;
$page_titles["dbo_voltonApplications"] = &$pageTitlesdbo_voltonapplications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.voltonApplications"] = array();
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


		
	$detailsTablesData["dbo.voltonApplications"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.voltonApplications"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.voltonApplications"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.voltonApplications"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.voltonApplications"][$dIndex]["detailKeys"][]="parentId";

// tables which are master tables for current table (detail)
$masterTablesData["dbo.voltonApplications"] = array();



	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Calls";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "calls";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.voltonApplications"][0] = $masterParams;
				$masterTablesData["dbo.voltonApplications"][0]["masterKeys"] = array();
	$masterTablesData["dbo.voltonApplications"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.voltonApplications"][0]["masterKeys"][]="dialerAgent";
				$masterTablesData["dbo.voltonApplications"][0]["detailKeys"] = array();
	$masterTablesData["dbo.voltonApplications"][0]["detailKeys"][]="callid";
				$masterTablesData["dbo.voltonApplications"][0]["detailKeys"][]="dialerAgent";
		
	
				$strOriginalDetailsTable="dbo.Calls";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.CallsBackofficeView";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "callsbackofficeview";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.voltonApplications"][1] = $masterParams;
				$masterTablesData["dbo.voltonApplications"][1]["masterKeys"] = array();
	$masterTablesData["dbo.voltonApplications"][1]["masterKeys"][]="id";
				$masterTablesData["dbo.voltonApplications"][1]["detailKeys"] = array();
	$masterTablesData["dbo.voltonApplications"][1]["detailKeys"][]="callid";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_voltonapplications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	callid,  	applicationStatusId,  	applicationType,  	applicantName,  	applicantIdNumber,  	applicantAddress,  	applicantPostalCode,  	applicantArea,  	applicantCity,  	applicantTaxRegistrationNumber,  	applicantTaxOffice,  	applicantEmail,  	applicantProfession,  	applicantKod,  	applicantGemi,  	applicantPhone,  	applicantWorkPhone,  	applicantMobile,  	contactName,  	contactPhone,  	contactMobile,  	contactEmail,  	legalName,  	legalIdNumber,  	mailAddress,  	mailPostalCode,  	mailArea,  	mailCity,  	powerAddress,  	powerOwnershipType,  	powerPostalCode,  	powerArea,  	powerCity,  	powerAgreedKw,  	powerSupplyNumber,  	powerMeterNumber,  	powerCurrentSupplier,  	powerCurrentDayMeter,  	powerCurrentNightMeter,  	powerActivationStatus,  	voltonPlan,  	voltonContractDuration,  	voltonWarrantyAmount,  	voltonWarrantyOnFirstBill,  	voltonOther,  	voltonComments,  	voltonAutoPayment,  	document1,  	document2,  	document3,  	document4,  	document5,  	document6,  	document7,  	document8,  	document9,  	document10,  	document11,  	document12,  	document13,  	document14,  	document15,  	ngAddress,  	ngPostalCode,  	ngArea,  	ngCity,  	ngPressure,  	ngHourlyCapacity,  	ngHkasp,  	ngMeterNumber,  	ngMeterType,  	ngCurrentMeterValue,  	ngConnectionExists,  	ngSupplyIsNew,  	ngSupplyReactivation,  	applicationAgentStatus,  	applicationLastStatusDate,  	applicationContactMethod,  	applicationCourier,  	applicationCourierDate,  	applicationCourrierTimeFrom,  	applicationCourierTimeTo,  	applicationCourrierComments,  	dialerAgent,  	additionalServices";
$proto0["m_strFrom"] = "FROM dbo.voltonApplications";
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
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.voltonApplications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "callid",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto8["m_sql"] = "callid";
$proto8["m_srcTableName"] = "dbo.voltonApplications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationStatusId",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto10["m_sql"] = "applicationStatusId";
$proto10["m_srcTableName"] = "dbo.voltonApplications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationType",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto12["m_sql"] = "applicationType";
$proto12["m_srcTableName"] = "dbo.voltonApplications";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantName",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto14["m_sql"] = "applicantName";
$proto14["m_srcTableName"] = "dbo.voltonApplications";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantIdNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto16["m_sql"] = "applicantIdNumber";
$proto16["m_srcTableName"] = "dbo.voltonApplications";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto18["m_sql"] = "applicantAddress";
$proto18["m_srcTableName"] = "dbo.voltonApplications";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto20["m_sql"] = "applicantPostalCode";
$proto20["m_srcTableName"] = "dbo.voltonApplications";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto22["m_sql"] = "applicantArea";
$proto22["m_srcTableName"] = "dbo.voltonApplications";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto24["m_sql"] = "applicantCity";
$proto24["m_srcTableName"] = "dbo.voltonApplications";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxRegistrationNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto26["m_sql"] = "applicantTaxRegistrationNumber";
$proto26["m_srcTableName"] = "dbo.voltonApplications";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantTaxOffice",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto28["m_sql"] = "applicantTaxOffice";
$proto28["m_srcTableName"] = "dbo.voltonApplications";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantEmail",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto30["m_sql"] = "applicantEmail";
$proto30["m_srcTableName"] = "dbo.voltonApplications";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantProfession",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto32["m_sql"] = "applicantProfession";
$proto32["m_srcTableName"] = "dbo.voltonApplications";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantKod",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto34["m_sql"] = "applicantKod";
$proto34["m_srcTableName"] = "dbo.voltonApplications";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantGemi",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto36["m_sql"] = "applicantGemi";
$proto36["m_srcTableName"] = "dbo.voltonApplications";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantPhone",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto38["m_sql"] = "applicantPhone";
$proto38["m_srcTableName"] = "dbo.voltonApplications";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantWorkPhone",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto40["m_sql"] = "applicantWorkPhone";
$proto40["m_srcTableName"] = "dbo.voltonApplications";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "applicantMobile",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto42["m_sql"] = "applicantMobile";
$proto42["m_srcTableName"] = "dbo.voltonApplications";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "contactName",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto44["m_sql"] = "contactName";
$proto44["m_srcTableName"] = "dbo.voltonApplications";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "contactPhone",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto46["m_sql"] = "contactPhone";
$proto46["m_srcTableName"] = "dbo.voltonApplications";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "contactMobile",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto48["m_sql"] = "contactMobile";
$proto48["m_srcTableName"] = "dbo.voltonApplications";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "contactEmail",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto50["m_sql"] = "contactEmail";
$proto50["m_srcTableName"] = "dbo.voltonApplications";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "legalName",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto52["m_sql"] = "legalName";
$proto52["m_srcTableName"] = "dbo.voltonApplications";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "legalIdNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto54["m_sql"] = "legalIdNumber";
$proto54["m_srcTableName"] = "dbo.voltonApplications";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "mailAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto56["m_sql"] = "mailAddress";
$proto56["m_srcTableName"] = "dbo.voltonApplications";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "mailPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto58["m_sql"] = "mailPostalCode";
$proto58["m_srcTableName"] = "dbo.voltonApplications";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "mailArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto60["m_sql"] = "mailArea";
$proto60["m_srcTableName"] = "dbo.voltonApplications";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "mailCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto62["m_sql"] = "mailCity";
$proto62["m_srcTableName"] = "dbo.voltonApplications";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "powerAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto64["m_sql"] = "powerAddress";
$proto64["m_srcTableName"] = "dbo.voltonApplications";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "powerOwnershipType",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto66["m_sql"] = "powerOwnershipType";
$proto66["m_srcTableName"] = "dbo.voltonApplications";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "powerPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto68["m_sql"] = "powerPostalCode";
$proto68["m_srcTableName"] = "dbo.voltonApplications";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "powerArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto70["m_sql"] = "powerArea";
$proto70["m_srcTableName"] = "dbo.voltonApplications";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto72["m_sql"] = "powerCity";
$proto72["m_srcTableName"] = "dbo.voltonApplications";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "powerAgreedKw",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto74["m_sql"] = "powerAgreedKw";
$proto74["m_srcTableName"] = "dbo.voltonApplications";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "powerSupplyNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto76["m_sql"] = "powerSupplyNumber";
$proto76["m_srcTableName"] = "dbo.voltonApplications";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "powerMeterNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto78["m_sql"] = "powerMeterNumber";
$proto78["m_srcTableName"] = "dbo.voltonApplications";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentSupplier",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto80["m_sql"] = "powerCurrentSupplier";
$proto80["m_srcTableName"] = "dbo.voltonApplications";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentDayMeter",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto82["m_sql"] = "powerCurrentDayMeter";
$proto82["m_srcTableName"] = "dbo.voltonApplications";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "powerCurrentNightMeter",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto84["m_sql"] = "powerCurrentNightMeter";
$proto84["m_srcTableName"] = "dbo.voltonApplications";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "powerActivationStatus",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto86["m_sql"] = "powerActivationStatus";
$proto86["m_srcTableName"] = "dbo.voltonApplications";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonPlan",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto88["m_sql"] = "voltonPlan";
$proto88["m_srcTableName"] = "dbo.voltonApplications";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonContractDuration",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto90["m_sql"] = "voltonContractDuration";
$proto90["m_srcTableName"] = "dbo.voltonApplications";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonWarrantyAmount",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto92["m_sql"] = "voltonWarrantyAmount";
$proto92["m_srcTableName"] = "dbo.voltonApplications";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonWarrantyOnFirstBill",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto94["m_sql"] = "voltonWarrantyOnFirstBill";
$proto94["m_srcTableName"] = "dbo.voltonApplications";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonOther",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto96["m_sql"] = "voltonOther";
$proto96["m_srcTableName"] = "dbo.voltonApplications";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonComments",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto98["m_sql"] = "voltonComments";
$proto98["m_srcTableName"] = "dbo.voltonApplications";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "voltonAutoPayment",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto100["m_sql"] = "voltonAutoPayment";
$proto100["m_srcTableName"] = "dbo.voltonApplications";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "document1",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto102["m_sql"] = "document1";
$proto102["m_srcTableName"] = "dbo.voltonApplications";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "document2",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto104["m_sql"] = "document2";
$proto104["m_srcTableName"] = "dbo.voltonApplications";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "document3",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto106["m_sql"] = "document3";
$proto106["m_srcTableName"] = "dbo.voltonApplications";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "document4",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto108["m_sql"] = "document4";
$proto108["m_srcTableName"] = "dbo.voltonApplications";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "document5",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto110["m_sql"] = "document5";
$proto110["m_srcTableName"] = "dbo.voltonApplications";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "document6",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto112["m_sql"] = "document6";
$proto112["m_srcTableName"] = "dbo.voltonApplications";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "document7",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto114["m_sql"] = "document7";
$proto114["m_srcTableName"] = "dbo.voltonApplications";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "document8",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto116["m_sql"] = "document8";
$proto116["m_srcTableName"] = "dbo.voltonApplications";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "document9",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto118["m_sql"] = "document9";
$proto118["m_srcTableName"] = "dbo.voltonApplications";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "document10",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto120["m_sql"] = "document10";
$proto120["m_srcTableName"] = "dbo.voltonApplications";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "document11",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto122["m_sql"] = "document11";
$proto122["m_srcTableName"] = "dbo.voltonApplications";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "document12",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto124["m_sql"] = "document12";
$proto124["m_srcTableName"] = "dbo.voltonApplications";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "document13",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto126["m_sql"] = "document13";
$proto126["m_srcTableName"] = "dbo.voltonApplications";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "document14",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto128["m_sql"] = "document14";
$proto128["m_srcTableName"] = "dbo.voltonApplications";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "document15",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto130["m_sql"] = "document15";
$proto130["m_srcTableName"] = "dbo.voltonApplications";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "ngAddress",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto132["m_sql"] = "ngAddress";
$proto132["m_srcTableName"] = "dbo.voltonApplications";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "ngPostalCode",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto134["m_sql"] = "ngPostalCode";
$proto134["m_srcTableName"] = "dbo.voltonApplications";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "ngArea",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto136["m_sql"] = "ngArea";
$proto136["m_srcTableName"] = "dbo.voltonApplications";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "ngCity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto138["m_sql"] = "ngCity";
$proto138["m_srcTableName"] = "dbo.voltonApplications";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "ngPressure",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto140["m_sql"] = "ngPressure";
$proto140["m_srcTableName"] = "dbo.voltonApplications";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "ngHourlyCapacity",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto142["m_sql"] = "ngHourlyCapacity";
$proto142["m_srcTableName"] = "dbo.voltonApplications";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "ngHkasp",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto144["m_sql"] = "ngHkasp";
$proto144["m_srcTableName"] = "dbo.voltonApplications";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "ngMeterNumber",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto146["m_sql"] = "ngMeterNumber";
$proto146["m_srcTableName"] = "dbo.voltonApplications";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "ngMeterType",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto148["m_sql"] = "ngMeterType";
$proto148["m_srcTableName"] = "dbo.voltonApplications";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "ngCurrentMeterValue",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto150["m_sql"] = "ngCurrentMeterValue";
$proto150["m_srcTableName"] = "dbo.voltonApplications";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "ngConnectionExists",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto152["m_sql"] = "ngConnectionExists";
$proto152["m_srcTableName"] = "dbo.voltonApplications";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "ngSupplyIsNew",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto154["m_sql"] = "ngSupplyIsNew";
$proto154["m_srcTableName"] = "dbo.voltonApplications";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "ngSupplyReactivation",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto156["m_sql"] = "ngSupplyReactivation";
$proto156["m_srcTableName"] = "dbo.voltonApplications";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationAgentStatus",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto158["m_sql"] = "applicationAgentStatus";
$proto158["m_srcTableName"] = "dbo.voltonApplications";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationLastStatusDate",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto160["m_sql"] = "applicationLastStatusDate";
$proto160["m_srcTableName"] = "dbo.voltonApplications";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationContactMethod",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto162["m_sql"] = "applicationContactMethod";
$proto162["m_srcTableName"] = "dbo.voltonApplications";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourier",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto164["m_sql"] = "applicationCourier";
$proto164["m_srcTableName"] = "dbo.voltonApplications";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierDate",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto166["m_sql"] = "applicationCourierDate";
$proto166["m_srcTableName"] = "dbo.voltonApplications";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourrierTimeFrom",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto168["m_sql"] = "applicationCourrierTimeFrom";
$proto168["m_srcTableName"] = "dbo.voltonApplications";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourierTimeTo",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto170["m_sql"] = "applicationCourierTimeTo";
$proto170["m_srcTableName"] = "dbo.voltonApplications";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "applicationCourrierComments",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto172["m_sql"] = "applicationCourrierComments";
$proto172["m_srcTableName"] = "dbo.voltonApplications";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "dialerAgent",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto174["m_sql"] = "dialerAgent";
$proto174["m_srcTableName"] = "dbo.voltonApplications";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "additionalServices",
	"m_strTable" => "dbo.voltonApplications",
	"m_srcTableName" => "dbo.voltonApplications"
));

$proto176["m_sql"] = "additionalServices";
$proto176["m_srcTableName"] = "dbo.voltonApplications";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto178=array();
$proto178["m_link"] = "SQLL_MAIN";
			$proto179=array();
$proto179["m_strName"] = "dbo.voltonApplications";
$proto179["m_srcTableName"] = "dbo.voltonApplications";
$proto179["m_columns"] = array();
$proto179["m_columns"][] = "id";
$proto179["m_columns"][] = "callid";
$proto179["m_columns"][] = "applicationStatusId";
$proto179["m_columns"][] = "applicationType";
$proto179["m_columns"][] = "applicantName";
$proto179["m_columns"][] = "applicantIdNumber";
$proto179["m_columns"][] = "applicantAddress";
$proto179["m_columns"][] = "applicantPostalCode";
$proto179["m_columns"][] = "applicantArea";
$proto179["m_columns"][] = "applicantCity";
$proto179["m_columns"][] = "applicantTaxRegistrationNumber";
$proto179["m_columns"][] = "applicantTaxOffice";
$proto179["m_columns"][] = "applicantEmail";
$proto179["m_columns"][] = "applicantProfession";
$proto179["m_columns"][] = "applicantKod";
$proto179["m_columns"][] = "applicantGemi";
$proto179["m_columns"][] = "applicantPhone";
$proto179["m_columns"][] = "applicantWorkPhone";
$proto179["m_columns"][] = "applicantMobile";
$proto179["m_columns"][] = "contactName";
$proto179["m_columns"][] = "contactPhone";
$proto179["m_columns"][] = "contactMobile";
$proto179["m_columns"][] = "contactEmail";
$proto179["m_columns"][] = "legalName";
$proto179["m_columns"][] = "legalIdNumber";
$proto179["m_columns"][] = "mailAddress";
$proto179["m_columns"][] = "mailPostalCode";
$proto179["m_columns"][] = "mailArea";
$proto179["m_columns"][] = "mailCity";
$proto179["m_columns"][] = "powerAddress";
$proto179["m_columns"][] = "powerOwnershipType";
$proto179["m_columns"][] = "powerPostalCode";
$proto179["m_columns"][] = "powerArea";
$proto179["m_columns"][] = "powerCity";
$proto179["m_columns"][] = "powerAgreedKw";
$proto179["m_columns"][] = "powerSupplyNumber";
$proto179["m_columns"][] = "powerMeterNumber";
$proto179["m_columns"][] = "powerCurrentSupplier";
$proto179["m_columns"][] = "powerCurrentDayMeter";
$proto179["m_columns"][] = "powerCurrentNightMeter";
$proto179["m_columns"][] = "powerActivationStatus";
$proto179["m_columns"][] = "voltonPlan";
$proto179["m_columns"][] = "voltonContractDuration";
$proto179["m_columns"][] = "voltonWarrantyAmount";
$proto179["m_columns"][] = "voltonWarrantyOnFirstBill";
$proto179["m_columns"][] = "voltonOther";
$proto179["m_columns"][] = "voltonComments";
$proto179["m_columns"][] = "voltonAutoPayment";
$proto179["m_columns"][] = "document1";
$proto179["m_columns"][] = "document2";
$proto179["m_columns"][] = "document3";
$proto179["m_columns"][] = "document4";
$proto179["m_columns"][] = "document5";
$proto179["m_columns"][] = "document6";
$proto179["m_columns"][] = "document7";
$proto179["m_columns"][] = "document8";
$proto179["m_columns"][] = "document9";
$proto179["m_columns"][] = "document10";
$proto179["m_columns"][] = "document11";
$proto179["m_columns"][] = "document12";
$proto179["m_columns"][] = "document13";
$proto179["m_columns"][] = "document14";
$proto179["m_columns"][] = "document15";
$proto179["m_columns"][] = "ngAddress";
$proto179["m_columns"][] = "ngPostalCode";
$proto179["m_columns"][] = "ngArea";
$proto179["m_columns"][] = "ngCity";
$proto179["m_columns"][] = "ngPressure";
$proto179["m_columns"][] = "ngHourlyCapacity";
$proto179["m_columns"][] = "ngHkasp";
$proto179["m_columns"][] = "ngMeterNumber";
$proto179["m_columns"][] = "ngMeterType";
$proto179["m_columns"][] = "ngCurrentMeterValue";
$proto179["m_columns"][] = "ngConnectionExists";
$proto179["m_columns"][] = "ngSupplyIsNew";
$proto179["m_columns"][] = "ngSupplyReactivation";
$proto179["m_columns"][] = "applicationAgentStatus";
$proto179["m_columns"][] = "applicationLastStatusDate";
$proto179["m_columns"][] = "applicationContactMethod";
$proto179["m_columns"][] = "applicationCourier";
$proto179["m_columns"][] = "applicationCourierDate";
$proto179["m_columns"][] = "applicationCourrierTimeFrom";
$proto179["m_columns"][] = "applicationCourierTimeTo";
$proto179["m_columns"][] = "applicationCourrierComments";
$proto179["m_columns"][] = "dialerAgent";
$proto179["m_columns"][] = "additionalServices";
$obj = new SQLTable($proto179);

$proto178["m_table"] = $obj;
$proto178["m_sql"] = "dbo.voltonApplications";
$proto178["m_alias"] = "";
$proto178["m_srcTableName"] = "dbo.voltonApplications";
$proto180=array();
$proto180["m_sql"] = "";
$proto180["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto180["m_column"]=$obj;
$proto180["m_contained"] = array();
$proto180["m_strCase"] = "";
$proto180["m_havingmode"] = false;
$proto180["m_inBrackets"] = false;
$proto180["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto180);

$proto178["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto178);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.voltonApplications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_voltonapplications = createSqlQuery_dbo_voltonapplications();


	
		;

																																																																																						

$tdatadbo_voltonapplications[".sqlquery"] = $queryData_dbo_voltonapplications;



include_once(getabspath("include/dbo_voltonapplications_events.php"));
$tableEvents["dbo.voltonApplications"] = new eventclass_dbo_voltonapplications;
$tdatadbo_voltonapplications[".hasEvents"] = true;

?>