<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["dbo.contacts"] ) ) {
			$lookupTableLinks["dbo.contacts"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contacts"]["calls.contactId"] )) {
			$lookupTableLinks["dbo.contacts"]["calls.contactId"] = array();
		}
		$lookupTableLinks["dbo.contacts"]["calls.contactId"]["edit"] = array("table" => "dbo.Calls", "field" => "contactId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callStatus"] ) ) {
			$lookupTableLinks["dbo.callStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callStatus"]["calls.callStatusId"] )) {
			$lookupTableLinks["dbo.callStatus"]["calls.callStatusId"] = array();
		}
		$lookupTableLinks["dbo.callStatus"]["calls.callStatusId"]["edit"] = array("table" => "dbo.Calls", "field" => "callStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.denialReason"] ) ) {
			$lookupTableLinks["dbo.denialReason"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.denialReason"]["calls.callDenialReasonID"] )) {
			$lookupTableLinks["dbo.denialReason"]["calls.callDenialReasonID"] = array();
		}
		$lookupTableLinks["dbo.denialReason"]["calls.callDenialReasonID"]["edit"] = array("table" => "dbo.Calls", "field" => "callDenialReasonID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["calls.callClassificationID"] )) {
			$lookupTableLinks["dbo.callClassifications"]["calls.callClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["calls.callClassificationID"]["edit"] = array("table" => "dbo.Calls", "field" => "callClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["calls.callSubClassificationID"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["calls.callSubClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["calls.callSubClassificationID"]["edit"] = array("table" => "dbo.Calls", "field" => "callSubClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.courierCompanies"] ) ) {
			$lookupTableLinks["dbo.courierCompanies"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.courierCompanies"]["calls.courier"] )) {
			$lookupTableLinks["dbo.courierCompanies"]["calls.courier"] = array();
		}
		$lookupTableLinks["dbo.courierCompanies"]["calls.courier"]["edit"] = array("table" => "dbo.Calls", "field" => "courier", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["calls.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["calls.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["calls.dialerCampaign"]["search"] = array("table" => "dbo.Calls", "field" => "dialerCampaign", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["calls.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["calls.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["calls.dialerList"]["search"] = array("table" => "dbo.Calls", "field" => "dialerList", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["calls.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["calls.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["calls.dialerAgent"]["edit"] = array("table" => "dbo.Calls", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["calls.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["calls.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["calls.dialerAgent"]["search"] = array("table" => "dbo.Calls", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.itemFamily"] ) ) {
			$lookupTableLinks["dbo.itemFamily"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemFamily"]["calls.productFamilyId"] )) {
			$lookupTableLinks["dbo.itemFamily"]["calls.productFamilyId"] = array();
		}
		$lookupTableLinks["dbo.itemFamily"]["calls.productFamilyId"]["edit"] = array("table" => "dbo.Calls", "field" => "productFamilyId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemCustomer"] ) ) {
			$lookupTableLinks["dbo.itemCustomer"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemCustomer"]["calls.orderShipCompany"] )) {
			$lookupTableLinks["dbo.itemCustomer"]["calls.orderShipCompany"] = array();
		}
		$lookupTableLinks["dbo.itemCustomer"]["calls.orderShipCompany"]["edit"] = array("table" => "dbo.Calls", "field" => "orderShipCompany", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["calls.contactZipCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["calls.contactZipCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["calls.contactZipCode"]["edit"] = array("table" => "dbo.Calls", "field" => "contactZipCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callStatusLookup"] ) ) {
			$lookupTableLinks["dbo.callStatusLookup"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callStatusLookup"]["denialreason.callStatusID"] )) {
			$lookupTableLinks["dbo.callStatusLookup"]["denialreason.callStatusID"] = array();
		}
		$lookupTableLinks["dbo.callStatusLookup"]["denialreason.callStatusID"]["edit"] = array("table" => "dbo.denialReason", "field" => "callStatusID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["callstatus.callClassificationId"] )) {
			$lookupTableLinks["dbo.callClassifications"]["callstatus.callClassificationId"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["callstatus.callClassificationId"]["edit"] = array("table" => "dbo.callStatus", "field" => "callClassificationId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["callstatus.callSubClassificationId"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["callstatus.callSubClassificationId"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["callstatus.callSubClassificationId"]["edit"] = array("table" => "dbo.callStatus", "field" => "callSubClassificationId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplications.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplications.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplications.applicationStatusId"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.applicantPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.applicantPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.applicantPostalCode"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "applicantPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.mailPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.mailPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.mailPostalCode"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "mailPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.powerPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.powerPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.powerPostalCode"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "powerPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.voltonPowerPlans"] ) ) {
			$lookupTableLinks["dbo.voltonPowerPlans"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.voltonPowerPlans"]["dbo_voltonapplications.voltonPlan"] )) {
			$lookupTableLinks["dbo.voltonPowerPlans"]["dbo_voltonapplications.voltonPlan"] = array();
		}
		$lookupTableLinks["dbo.voltonPowerPlans"]["dbo_voltonapplications.voltonPlan"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "voltonPlan", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.ngPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.ngPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["dbo_voltonapplications.ngPostalCode"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "ngPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplications.applicationAgentStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplications.applicationAgentStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplications.applicationAgentStatus"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "applicationAgentStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["dbo_voltonapplications.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["dbo_voltonapplications.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["dbo_voltonapplications.applicationContactMethod"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "applicationContactMethod", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.courierCompanies"] ) ) {
			$lookupTableLinks["dbo.courierCompanies"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.courierCompanies"]["dbo_voltonapplications.applicationCourier"] )) {
			$lookupTableLinks["dbo.courierCompanies"]["dbo_voltonapplications.applicationCourier"] = array();
		}
		$lookupTableLinks["dbo.courierCompanies"]["dbo_voltonapplications.applicationCourier"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "applicationCourier", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["dbo_voltonapplications.additionalServices"] )) {
			$lookupTableLinks[""]["dbo_voltonapplications.additionalServices"] = array();
		}
		$lookupTableLinks[""]["dbo_voltonapplications.additionalServices"]["edit"] = array("table" => "dbo.voltonApplications", "field" => "additionalServices", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemFamily"] ) ) {
			$lookupTableLinks["dbo.itemFamily"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemFamily"]["items.familyId"] )) {
			$lookupTableLinks["dbo.itemFamily"]["items.familyId"] = array();
		}
		$lookupTableLinks["dbo.itemFamily"]["items.familyId"]["edit"] = array("table" => "dbo.Items", "field" => "familyId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemCustomer"] ) ) {
			$lookupTableLinks["dbo.itemCustomer"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemCustomer"]["items.itemCustomerId"] )) {
			$lookupTableLinks["dbo.itemCustomer"]["items.itemCustomerId"] = array();
		}
		$lookupTableLinks["dbo.itemCustomer"]["items.itemCustomerId"]["edit"] = array("table" => "dbo.Items", "field" => "itemCustomerId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemSalesCategory"] ) ) {
			$lookupTableLinks["dbo.itemSalesCategory"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemSalesCategory"]["items.salesCategoryId"] )) {
			$lookupTableLinks["dbo.itemSalesCategory"]["items.salesCategoryId"] = array();
		}
		$lookupTableLinks["dbo.itemSalesCategory"]["items.salesCategoryId"]["edit"] = array("table" => "dbo.Items", "field" => "salesCategoryId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemSearch"] ) ) {
			$lookupTableLinks["dbo.itemSearch"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemSearch"]["orderitems.itemid"] )) {
			$lookupTableLinks["dbo.itemSearch"]["orderitems.itemid"] = array();
		}
		$lookupTableLinks["dbo.itemSearch"]["orderitems.itemid"]["edit"] = array("table" => "dbo.orderItems", "field" => "itemid", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.phoneTypes"] ) ) {
			$lookupTableLinks["dbo.phoneTypes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone1Type"] )) {
			$lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone1Type"] = array();
		}
		$lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone1Type"]["edit"] = array("table" => "dbo.contacts", "field" => "phone1Type", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.phoneTypes"] ) ) {
			$lookupTableLinks["dbo.phoneTypes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone2Type"] )) {
			$lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone2Type"] = array();
		}
		$lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone2Type"]["edit"] = array("table" => "dbo.contacts", "field" => "phone2Type", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.phoneTypes"] ) ) {
			$lookupTableLinks["dbo.phoneTypes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone3Type"] )) {
			$lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone3Type"] = array();
		}
		$lookupTableLinks["dbo.phoneTypes"]["dbo_contacts.phone3Type"]["edit"] = array("table" => "dbo.contacts", "field" => "phone3Type", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["dbo_contacts.postalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["dbo_contacts.postalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["dbo_contacts.postalCode"]["edit"] = array("table" => "dbo.contacts", "field" => "postalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["callsubclassifications.classificationId"] )) {
			$lookupTableLinks["dbo.callClassifications"]["callsubclassifications.classificationId"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["callsubclassifications.classificationId"]["edit"] = array("table" => "dbo.callSubClassifications", "field" => "classificationId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contacts"] ) ) {
			$lookupTableLinks["dbo.contacts"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contacts"]["contactaddresses.contactId"] )) {
			$lookupTableLinks["dbo.contacts"]["contactaddresses.contactId"] = array();
		}
		$lookupTableLinks["dbo.contacts"]["contactaddresses.contactId"]["edit"] = array("table" => "dbo.contactAddresses", "field" => "contactId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["contactaddresses.postalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["contactaddresses.postalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["contactaddresses.postalCode"]["edit"] = array("table" => "dbo.contactAddresses", "field" => "postalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["dbo_callstatuslookup.callClassificationId"] )) {
			$lookupTableLinks["dbo.callClassifications"]["dbo_callstatuslookup.callClassificationId"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["dbo_callstatuslookup.callClassificationId"]["edit"] = array("table" => "dbo.callStatusLookup", "field" => "callClassificationId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["dbo_callstatuslookup.callSubClassificationId"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["dbo_callstatuslookup.callSubClassificationId"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["dbo_callstatuslookup.callSubClassificationId"]["edit"] = array("table" => "dbo.callStatusLookup", "field" => "callSubClassificationId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["novaapplications.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["novaapplications.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["novaapplications.applicationStatusId"]["edit"] = array("table" => "dbo.novaApplications", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["novaapplications.applicantPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["novaapplications.applicantPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["novaapplications.applicantPostalCode"]["edit"] = array("table" => "dbo.novaApplications", "field" => "applicantPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["novaapplications.portabilityActivationPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["novaapplications.portabilityActivationPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["novaapplications.portabilityActivationPostalCode"]["edit"] = array("table" => "dbo.novaApplications", "field" => "portabilityActivationPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["novaapplications.applicationAgentStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["novaapplications.applicationAgentStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["novaapplications.applicationAgentStatus"]["edit"] = array("table" => "dbo.novaApplications", "field" => "applicationAgentStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"]["edit"] = array("table" => "dbo.novaApplications", "field" => "applicationContactMethod", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"]["add"] = array("table" => "dbo.novaApplications", "field" => "applicationContactMethod", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["novaapplications.applicationContactMethod"]["search"] = array("table" => "dbo.novaApplications", "field" => "applicationContactMethod", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.courierCompanies"] ) ) {
			$lookupTableLinks["dbo.courierCompanies"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.courierCompanies"]["novaapplications.applicationCourier"] )) {
			$lookupTableLinks["dbo.courierCompanies"]["novaapplications.applicationCourier"] = array();
		}
		$lookupTableLinks["dbo.courierCompanies"]["novaapplications.applicationCourier"]["edit"] = array("table" => "dbo.novaApplications", "field" => "applicationCourier", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["agentapplicationstatus.voltonApplicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["agentapplicationstatus.voltonApplicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["agentapplicationstatus.voltonApplicationStatusId"]["edit"] = array("table" => "dbo.agentApplicationStatus", "field" => "voltonApplicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["agentapplicationstatus.novaApplicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["agentapplicationstatus.novaApplicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["agentapplicationstatus.novaApplicationStatusId"]["edit"] = array("table" => "dbo.agentApplicationStatus", "field" => "novaApplicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callcenter_uggroups"] ) ) {
			$lookupTableLinks["dbo.callcenter_uggroups"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callcenter_uggroups"]["dbo_callcenter_users.groupid"] )) {
			$lookupTableLinks["dbo.callcenter_uggroups"]["dbo_callcenter_users.groupid"] = array();
		}
		$lookupTableLinks["dbo.callcenter_uggroups"]["dbo_callcenter_users.groupid"]["edit"] = array("table" => "dbo.CallCenter_users", "field" => "groupid", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callcenter_uggroups"] ) ) {
			$lookupTableLinks["dbo.callcenter_uggroups"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callcenter_uggroups"]["callcenter_ugmembers.GroupID"] )) {
			$lookupTableLinks["dbo.callcenter_uggroups"]["callcenter_ugmembers.GroupID"] = array();
		}
		$lookupTableLinks["dbo.callcenter_uggroups"]["callcenter_ugmembers.GroupID"]["edit"] = array("table" => "dbo.callcenter_ugmembers", "field" => "GroupID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsforredial.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsforredial.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsforredial.dialerAgent"]["edit"] = array("table" => "callsForRedial", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsforredial.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsforredial.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsforredial.dialerAgent"]["search"] = array("table" => "callsForRedial", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["callsforredial.callClassificationID"] )) {
			$lookupTableLinks["dbo.callClassifications"]["callsforredial.callClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["callsforredial.callClassificationID"]["edit"] = array("table" => "callsForRedial", "field" => "callClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["callsforredial.callSubClassificationID"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["callsforredial.callSubClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["callsforredial.callSubClassificationID"]["edit"] = array("table" => "callsForRedial", "field" => "callSubClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["upcomingcallsforredial.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["upcomingcallsforredial.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["upcomingcallsforredial.dialerAgent"]["search"] = array("table" => "upcomingCallsForRedial", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["upcomingcallsforredial.callClassificationID"] )) {
			$lookupTableLinks["dbo.callClassifications"]["upcomingcallsforredial.callClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["upcomingcallsforredial.callClassificationID"]["edit"] = array("table" => "upcomingCallsForRedial", "field" => "callClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["upcomingcallsforredial.callSubClassificationID"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["upcomingcallsforredial.callSubClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["upcomingcallsforredial.callSubClassificationID"]["edit"] = array("table" => "upcomingCallsForRedial", "field" => "callSubClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["voltonagentapplications.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["voltonagentapplications.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["voltonagentapplications.applicationStatusId"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.applicantPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.applicantPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.applicantPostalCode"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "applicantPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.mailPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.mailPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.mailPostalCode"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "mailPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.powerPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.powerPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.powerPostalCode"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "powerPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.voltonPowerPlans"] ) ) {
			$lookupTableLinks["dbo.voltonPowerPlans"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.voltonPowerPlans"]["voltonagentapplications.voltonPlan"] )) {
			$lookupTableLinks["dbo.voltonPowerPlans"]["voltonagentapplications.voltonPlan"] = array();
		}
		$lookupTableLinks["dbo.voltonPowerPlans"]["voltonagentapplications.voltonPlan"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "voltonPlan", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.ngPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.ngPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonagentapplications.ngPostalCode"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "ngPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["voltonagentapplications.applicationAgentStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["voltonagentapplications.applicationAgentStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["voltonagentapplications.applicationAgentStatus"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "applicationAgentStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["voltonagentapplications.contactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["voltonagentapplications.contactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["voltonagentapplications.contactMethod"]["edit"] = array("table" => "dbo.voltonAgentApplications", "field" => "contactMethod", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contacts"] ) ) {
			$lookupTableLinks["dbo.contacts"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contacts"]["callsbackofficeview.contactId"] )) {
			$lookupTableLinks["dbo.contacts"]["callsbackofficeview.contactId"] = array();
		}
		$lookupTableLinks["dbo.contacts"]["callsbackofficeview.contactId"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "contactId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callStatus"] ) ) {
			$lookupTableLinks["dbo.callStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callStatus"]["callsbackofficeview.callStatusId"] )) {
			$lookupTableLinks["dbo.callStatus"]["callsbackofficeview.callStatusId"] = array();
		}
		$lookupTableLinks["dbo.callStatus"]["callsbackofficeview.callStatusId"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "callStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.denialReason"] ) ) {
			$lookupTableLinks["dbo.denialReason"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.denialReason"]["callsbackofficeview.callDenialReasonID"] )) {
			$lookupTableLinks["dbo.denialReason"]["callsbackofficeview.callDenialReasonID"] = array();
		}
		$lookupTableLinks["dbo.denialReason"]["callsbackofficeview.callDenialReasonID"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "callDenialReasonID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["callsbackofficeview.callClassificationID"] )) {
			$lookupTableLinks["dbo.callClassifications"]["callsbackofficeview.callClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["callsbackofficeview.callClassificationID"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "callClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["callsbackofficeview.callSubClassificationID"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["callsbackofficeview.callSubClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["callsbackofficeview.callSubClassificationID"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "callSubClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsbackofficeview.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsbackofficeview.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsbackofficeview.dialerCampaign"]["search"] = array("table" => "dbo.CallsBackofficeView", "field" => "dialerCampaign", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["callsbackofficeview.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["callsbackofficeview.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["callsbackofficeview.dialerList"]["search"] = array("table" => "dbo.CallsBackofficeView", "field" => "dialerList", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsbackofficeview.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsbackofficeview.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsbackofficeview.dialerAgent"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemFamily"] ) ) {
			$lookupTableLinks["dbo.itemFamily"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemFamily"]["callsbackofficeview.productFamilyId"] )) {
			$lookupTableLinks["dbo.itemFamily"]["callsbackofficeview.productFamilyId"] = array();
		}
		$lookupTableLinks["dbo.itemFamily"]["callsbackofficeview.productFamilyId"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "productFamilyId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemCustomer"] ) ) {
			$lookupTableLinks["dbo.itemCustomer"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemCustomer"]["callsbackofficeview.orderShipCompany"] )) {
			$lookupTableLinks["dbo.itemCustomer"]["callsbackofficeview.orderShipCompany"] = array();
		}
		$lookupTableLinks["dbo.itemCustomer"]["callsbackofficeview.orderShipCompany"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "orderShipCompany", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["callsbackofficeview.contactZipCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["callsbackofficeview.contactZipCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["callsbackofficeview.contactZipCode"]["edit"] = array("table" => "dbo.CallsBackofficeView", "field" => "contactZipCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["voltonapplicationsbackofficeview.agent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["voltonapplicationsbackofficeview.agent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["voltonapplicationsbackofficeview.agent"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "agent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.applicationStatusId"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.applicationPhase"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.applicationPhase"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.applicationPhase"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "applicationPhase", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.salesPhase"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.salesPhase"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["voltonapplicationsbackofficeview.salesPhase"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "salesPhase", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.applicantPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.applicantPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.applicantPostalCode"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "applicantPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.mailPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.mailPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.mailPostalCode"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "mailPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.powerPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.powerPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.powerPostalCode"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "powerPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.voltonPowerPlans"] ) ) {
			$lookupTableLinks["dbo.voltonPowerPlans"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.voltonPowerPlans"]["voltonapplicationsbackofficeview.voltonPlan"] )) {
			$lookupTableLinks["dbo.voltonPowerPlans"]["voltonapplicationsbackofficeview.voltonPlan"] = array();
		}
		$lookupTableLinks["dbo.voltonPowerPlans"]["voltonapplicationsbackofficeview.voltonPlan"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "voltonPlan", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.ngPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.ngPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["voltonapplicationsbackofficeview.ngPostalCode"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "ngPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["voltonapplicationsbackofficeview.applicationAgentStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["voltonapplicationsbackofficeview.applicationAgentStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["voltonapplicationsbackofficeview.applicationAgentStatus"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "applicationAgentStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["voltonapplicationsbackofficeview.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["voltonapplicationsbackofficeview.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["voltonapplicationsbackofficeview.applicationContactMethod"]["edit"] = array("table" => "dbo.voltonApplicationsBackofficeView", "field" => "applicationContactMethod", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.applicationStatusId"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.applicationPhase"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.applicationPhase"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.applicationPhase"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "applicationPhase", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.salesPhase"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.salesPhase"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["novaapplicationsbackofficeview.salesPhase"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "salesPhase", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["novaapplicationsbackofficeview.applicantPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["novaapplicationsbackofficeview.applicantPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["novaapplicationsbackofficeview.applicantPostalCode"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "applicantPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["novaapplicationsbackofficeview.portabilityActivationPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["novaapplicationsbackofficeview.portabilityActivationPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["novaapplicationsbackofficeview.portabilityActivationPostalCode"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "portabilityActivationPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["novaapplicationsbackofficeview.applicationAgentStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["novaapplicationsbackofficeview.applicationAgentStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["novaapplicationsbackofficeview.applicationAgentStatus"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "applicationAgentStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["novaapplicationsbackofficeview.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["novaapplicationsbackofficeview.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["novaapplicationsbackofficeview.applicationContactMethod"]["edit"] = array("table" => "dbo.novaApplicationsBackofficeView", "field" => "applicationContactMethod", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"]["search"] = array("table" => "callsNegativeReport", "field" => "dialerCampaign", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"]["add"] = array("table" => "callsNegativeReport", "field" => "dialerCampaign", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsnegativereport.dialerCampaign"]["edit"] = array("table" => "callsNegativeReport", "field" => "dialerCampaign", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"]["search"] = array("table" => "callsNegativeReport", "field" => "dialerList", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"]["add"] = array("table" => "callsNegativeReport", "field" => "dialerList", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["callsnegativereport.dialerList"]["edit"] = array("table" => "callsNegativeReport", "field" => "dialerList", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"]["search"] = array("table" => "callsNegativeReport", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"]["add"] = array("table" => "callsNegativeReport", "field" => "dialerAgent", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsnegativereport.dialerAgent"]["edit"] = array("table" => "callsNegativeReport", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callStatus"] ) ) {
			$lookupTableLinks["dbo.callStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callStatus"]["callsnegativereport.callResult"] )) {
			$lookupTableLinks["dbo.callStatus"]["callsnegativereport.callResult"] = array();
		}
		$lookupTableLinks["dbo.callStatus"]["callsnegativereport.callResult"]["search"] = array("table" => "callsNegativeReport", "field" => "callResult", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Calls"] ) ) {
			$lookupTableLinks["dbo.Calls"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Calls"]["novaagentapplications.callIdForDate"] )) {
			$lookupTableLinks["dbo.Calls"]["novaagentapplications.callIdForDate"] = array();
		}
		$lookupTableLinks["dbo.Calls"]["novaagentapplications.callIdForDate"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "callIdForDate", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["novaagentapplications.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["novaagentapplications.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["novaagentapplications.applicationStatusId"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["novaagentapplications.applicationAgentStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["novaagentapplications.applicationAgentStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["novaagentapplications.applicationAgentStatus"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "applicationAgentStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["novaagentapplications.applicantPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["novaagentapplications.applicantPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["novaagentapplications.applicantPostalCode"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "applicantPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["novaagentapplications.portabilityActivationPostalCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["novaagentapplications.portabilityActivationPostalCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["novaagentapplications.portabilityActivationPostalCode"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "portabilityActivationPostalCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.contactMethods"] ) ) {
			$lookupTableLinks["dbo.contactMethods"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contactMethods"]["novaagentapplications.applicationContactMethod"] )) {
			$lookupTableLinks["dbo.contactMethods"]["novaagentapplications.applicationContactMethod"] = array();
		}
		$lookupTableLinks["dbo.contactMethods"]["novaagentapplications.applicationContactMethod"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "applicationContactMethod", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.courierCompanies"] ) ) {
			$lookupTableLinks["dbo.courierCompanies"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.courierCompanies"]["novaagentapplications.applicationCourier"] )) {
			$lookupTableLinks["dbo.courierCompanies"]["novaagentapplications.applicationCourier"] = array();
		}
		$lookupTableLinks["dbo.courierCompanies"]["novaagentapplications.applicationCourier"]["edit"] = array("table" => "dbo.novaAgentApplications", "field" => "applicationCourier", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["dbo_voltonapplicationsstatusview.agent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["dbo_voltonapplicationsstatusview.agent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["dbo_voltonapplicationsstatusview.agent"]["edit"] = array("table" => "dbo.voltonApplicationsStatusView", "field" => "agent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplicationsstatusview.agentApplicationStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplicationsstatusview.agentApplicationStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplicationsstatusview.agentApplicationStatus"]["edit"] = array("table" => "dbo.voltonApplicationsStatusView", "field" => "agentApplicationStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplicationsstatusview.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplicationsstatusview.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplicationsstatusview.applicationStatusId"]["edit"] = array("table" => "dbo.voltonApplicationsStatusView", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplicationsstatusview.applicationPhaseStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplicationsstatusview.applicationPhaseStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplicationsstatusview.applicationPhaseStatusId"]["edit"] = array("table" => "dbo.voltonApplicationsStatusView", "field" => "applicationPhaseStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplications_status_report.agentApplicationStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplications_status_report.agentApplicationStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_voltonapplications_status_report.agentApplicationStatus"]["search"] = array("table" => "dbo.voltonApplications Status Report", "field" => "agentApplicationStatus", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplications_status_report.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplications_status_report.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["dbo_voltonapplications_status_report.applicationStatusId"]["search"] = array("table" => "dbo.voltonApplications Status Report", "field" => "applicationStatusId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"] ) ) {
			$lookupTableLinks["dbo.agentApplicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.agentApplicationStatus"]["dbo_novaapplicationsstatusview.agentApplicationStatus"] )) {
			$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_novaapplicationsstatusview.agentApplicationStatus"] = array();
		}
		$lookupTableLinks["dbo.agentApplicationStatus"]["dbo_novaapplicationsstatusview.agentApplicationStatus"]["edit"] = array("table" => "dbo.novaApplicationsStatusView", "field" => "agentApplicationStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["dbo_novaapplicationsstatusview.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["dbo_novaapplicationsstatusview.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["dbo_novaapplicationsstatusview.applicationStatusId"]["edit"] = array("table" => "dbo.novaApplicationsStatusView", "field" => "applicationStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["dbo_novaapplicationsstatusview.applicationPhaseStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["dbo_novaapplicationsstatusview.applicationPhaseStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["dbo_novaapplicationsstatusview.applicationPhaseStatusId"]["edit"] = array("table" => "dbo.novaApplicationsStatusView", "field" => "applicationPhaseStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.applicationStatus"] ) ) {
			$lookupTableLinks["dbo.applicationStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.applicationStatus"]["novaapplications_status_report.applicationStatusId"] )) {
			$lookupTableLinks["dbo.applicationStatus"]["novaapplications_status_report.applicationStatusId"] = array();
		}
		$lookupTableLinks["dbo.applicationStatus"]["novaapplications_status_report.applicationStatusId"]["search"] = array("table" => "dbo.novaApplications Status Report", "field" => "applicationStatusId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.contacts"] ) ) {
			$lookupTableLinks["dbo.contacts"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.contacts"]["callsagentview.contactId"] )) {
			$lookupTableLinks["dbo.contacts"]["callsagentview.contactId"] = array();
		}
		$lookupTableLinks["dbo.contacts"]["callsagentview.contactId"]["edit"] = array("table" => "callsAgentView", "field" => "contactId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callStatus"] ) ) {
			$lookupTableLinks["dbo.callStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callStatus"]["callsagentview.callStatusId"] )) {
			$lookupTableLinks["dbo.callStatus"]["callsagentview.callStatusId"] = array();
		}
		$lookupTableLinks["dbo.callStatus"]["callsagentview.callStatusId"]["edit"] = array("table" => "callsAgentView", "field" => "callStatusId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.denialReason"] ) ) {
			$lookupTableLinks["dbo.denialReason"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.denialReason"]["callsagentview.callDenialReasonID"] )) {
			$lookupTableLinks["dbo.denialReason"]["callsagentview.callDenialReasonID"] = array();
		}
		$lookupTableLinks["dbo.denialReason"]["callsagentview.callDenialReasonID"]["edit"] = array("table" => "callsAgentView", "field" => "callDenialReasonID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callClassifications"] ) ) {
			$lookupTableLinks["dbo.callClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callClassifications"]["callsagentview.callClassificationID"] )) {
			$lookupTableLinks["dbo.callClassifications"]["callsagentview.callClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callClassifications"]["callsagentview.callClassificationID"]["edit"] = array("table" => "callsAgentView", "field" => "callClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"] ) ) {
			$lookupTableLinks["dbo.callSubClassifications"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callSubClassifications"]["callsagentview.callSubClassificationID"] )) {
			$lookupTableLinks["dbo.callSubClassifications"]["callsagentview.callSubClassificationID"] = array();
		}
		$lookupTableLinks["dbo.callSubClassifications"]["callsagentview.callSubClassificationID"]["edit"] = array("table" => "callsAgentView", "field" => "callSubClassificationID", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.courierCompanies"] ) ) {
			$lookupTableLinks["dbo.courierCompanies"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.courierCompanies"]["callsagentview.courier"] )) {
			$lookupTableLinks["dbo.courierCompanies"]["callsagentview.courier"] = array();
		}
		$lookupTableLinks["dbo.courierCompanies"]["callsagentview.courier"]["edit"] = array("table" => "callsAgentView", "field" => "courier", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsagentview.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsagentview.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["callsagentview.dialerCampaign"]["search"] = array("table" => "callsAgentView", "field" => "dialerCampaign", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["callsagentview.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["callsagentview.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["callsagentview.dialerList"]["search"] = array("table" => "callsAgentView", "field" => "dialerList", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsagentview.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsagentview.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsagentview.dialerAgent"]["edit"] = array("table" => "callsAgentView", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["callsagentview.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["callsagentview.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["callsagentview.dialerAgent"]["search"] = array("table" => "callsAgentView", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.itemFamily"] ) ) {
			$lookupTableLinks["dbo.itemFamily"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemFamily"]["callsagentview.productFamilyId"] )) {
			$lookupTableLinks["dbo.itemFamily"]["callsagentview.productFamilyId"] = array();
		}
		$lookupTableLinks["dbo.itemFamily"]["callsagentview.productFamilyId"]["edit"] = array("table" => "callsAgentView", "field" => "productFamilyId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.itemCustomer"] ) ) {
			$lookupTableLinks["dbo.itemCustomer"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.itemCustomer"]["callsagentview.orderShipCompany"] )) {
			$lookupTableLinks["dbo.itemCustomer"]["callsagentview.orderShipCompany"] = array();
		}
		$lookupTableLinks["dbo.itemCustomer"]["callsagentview.orderShipCompany"]["edit"] = array("table" => "callsAgentView", "field" => "orderShipCompany", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.postalCodes"] ) ) {
			$lookupTableLinks["dbo.postalCodes"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.postalCodes"]["callsagentview.contactZipCode"] )) {
			$lookupTableLinks["dbo.postalCodes"]["callsagentview.contactZipCode"] = array();
		}
		$lookupTableLinks["dbo.postalCodes"]["callsagentview.contactZipCode"]["edit"] = array("table" => "callsAgentView", "field" => "contactZipCode", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereportwithapps.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereportwithapps.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereportwithapps.dialerAgent"]["edit"] = array("table" => "dbo.vAgentPerformanceReportWithApps", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["agent_performance_report.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["agent_performance_report.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["agent_performance_report.dialerAgent"]["search"] = array("table" => "Agent Performance Report", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereportwithappsv2.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereportwithappsv2.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereportwithappsv2.dialerAgent"]["edit"] = array("table" => "dbo.vAgentPerformanceReportWithAppsV2", "field" => "dialerAgent", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.callStatus"] ) ) {
			$lookupTableLinks["dbo.callStatus"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.callStatus"]["vagentperformancereportwithappsv2.callStatus"] )) {
			$lookupTableLinks["dbo.callStatus"]["vagentperformancereportwithappsv2.callStatus"] = array();
		}
		$lookupTableLinks["dbo.callStatus"]["vagentperformancereportwithappsv2.callStatus"]["edit"] = array("table" => "dbo.vAgentPerformanceReportWithAppsV2", "field" => "callStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.campaignsLastThreeMonths"]["vagentperformancereportwithappsv2.dialerCampaign"] )) {
			$lookupTableLinks["dbo.campaignsLastThreeMonths"]["vagentperformancereportwithappsv2.dialerCampaign"] = array();
		}
		$lookupTableLinks["dbo.campaignsLastThreeMonths"]["vagentperformancereportwithappsv2.dialerCampaign"]["edit"] = array("table" => "dbo.vAgentPerformanceReportWithAppsV2", "field" => "dialerCampaign", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"] ) ) {
			$lookupTableLinks["dbo.listsLastThreeMonths"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.listsLastThreeMonths"]["vagentperformancereportwithappsv2.dialerList"] )) {
			$lookupTableLinks["dbo.listsLastThreeMonths"]["vagentperformancereportwithappsv2.dialerList"] = array();
		}
		$lookupTableLinks["dbo.listsLastThreeMonths"]["vagentperformancereportwithappsv2.dialerList"]["edit"] = array("table" => "dbo.vAgentPerformanceReportWithAppsV2", "field" => "dialerList", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"] ) ) {
			$lookupTableLinks["dbo.CallCenter_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereport_v2.dialerAgent"] )) {
			$lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereport_v2.dialerAgent"] = array();
		}
		$lookupTableLinks["dbo.CallCenter_users"]["vagentperformancereport_v2.dialerAgent"]["search"] = array("table" => "vAgentPerformanceReport v2", "field" => "dialerAgent", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.vAgentPerformanceReportWithAppsV21"] ) ) {
			$lookupTableLinks["dbo.vAgentPerformanceReportWithAppsV21"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.vAgentPerformanceReportWithAppsV21"]["vagentperformancereport_v2.callStatus"] )) {
			$lookupTableLinks["dbo.vAgentPerformanceReportWithAppsV21"]["vagentperformancereport_v2.callStatus"] = array();
		}
		$lookupTableLinks["dbo.vAgentPerformanceReportWithAppsV21"]["vagentperformancereport_v2.callStatus"]["search"] = array("table" => "vAgentPerformanceReport v2", "field" => "callStatus", "page" => "search");
}

?>