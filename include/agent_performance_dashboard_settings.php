<?php
require_once(getabspath("classes/cipherer.php"));



$tdataagent_performance_dashboard = array();
$tdataagent_performance_dashboard[".ShortName"] = "agent_performance_dashboard";

$tdataagent_performance_dashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdataagent_performance_dashboard[".originalPagesByType"] = $tdataagent_performance_dashboard[".pagesByType"];
$tdataagent_performance_dashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdataagent_performance_dashboard[".originalPages"] = $tdataagent_performance_dashboard[".pages"];
$tdataagent_performance_dashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdataagent_performance_dashboard[".originalDefaultPages"] = $tdataagent_performance_dashboard[".defaultPages"];


//	field labels
$fieldLabelsagent_performance_dashboard = array();
$pageTitlesagent_performance_dashboard = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsagent_performance_dashboard["Greek"] = array();
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_dialerAgent"] = "Dialer Agent";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_dialerPhone"] = "Dialer Phone";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_calldate"] = "Ημερομηνία";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_callStatus"] = "Κατάσταση";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_denialReason"] = "Denial Reason";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_dialerCampaign"] = "Καμπάνια";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_dialerList"] = "Λίστα";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_talkTime"] = "Talk Time";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_typingTime"] = "Typing Time";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_totalCallTime"] = "Total Call Time";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_vTotalApps"] = "Volton Σύνολο";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_vPending"] = "Volton Εκκρεμότητα";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_vConfirmed"] = "Volton επιβεβαίωση";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_vCanceled"] = "Volton Ακύρωση";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_nTotalApps"] = "Nova Σύνολο ";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_nPending"] = "Nova Εκκρεμότητα";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_nConfirmed"] = "Nova Επιβεβαίωση";
	$fieldLabelsagent_performance_dashboard["Greek"]["Agent_Performance_Report_nCanceled"] = "Nova Ακύρωση";
}

//	search fields
$tdataagent_performance_dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"calldate" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_calldate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"callStatus" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_callStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"dialerCampaign" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_dialerCampaign"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"dialerList" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_dialerList"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"dialerAgent" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_dialerAgent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"dialerPhone" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_dialerPhone"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"denialReason" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_denialReason"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"talkTime" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_talkTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"typingTime" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_typingTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"totalCallTime" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_totalCallTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"vTotalApps" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_vTotalApps"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"vPending" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_vPending"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"vConfirmed" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_vConfirmed"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"vCanceled" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_vCanceled"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"nTotalApps" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_nTotalApps"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"nPending" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_nPending"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"nConfirmed" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_nConfirmed"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Agent Performance Report", "field"=>"nCanceled" );
$tdataagent_performance_dashboard[".searchFields"]["Agent_Performance_Report_nCanceled"] = $dashField;

// all search fields
$tdataagent_performance_dashboard[".allSearchFields"] = array();
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_calldate";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_callStatus";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_dialerCampaign";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_dialerList";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_dialerAgent";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_dialerPhone";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_denialReason";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_talkTime";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_typingTime";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_totalCallTime";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_vTotalApps";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_vPending";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_vConfirmed";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_vCanceled";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_nTotalApps";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_nPending";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_nConfirmed";
$tdataagent_performance_dashboard[".allSearchFields"][] = "Agent_Performance_Report_nCanceled";

// good like search fields
$tdataagent_performance_dashboard[".googleLikeFields"] = array();

$tdataagent_performance_dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "agent_performance_report_search", "table" => "Agent Performance Report",
		 "pageName" => "search","type" => 4);
	$dbelement["cellName"] = "cell_0_1";

			$dbelement["width"] = 800;
		$dbelement["height"] = 400;


	$tdataagent_performance_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "agent_performance_report_report", "table" => "Agent Performance Report",
		 "pageName" => "","type" => 2);
	$dbelement["cellName"] = "cell_0_0";

		$dbelement["reload"] = 5;
		

	$tdataagent_performance_dashboard[".dashElements"][] = $dbelement;

$tdataagent_performance_dashboard[".shortTableName"] = "agent_performance_dashboard";
$tdataagent_performance_dashboard[".entityType"] = 4;



$tableEvents["Agent Performance Dashboard"] = new eventsBase;
$tdataagent_performance_dashboard[".hasEvents"] = false;


$tdataagent_performance_dashboard[".tableType"] = "dashboard";


																																				
$tdataagent_performance_dashboard[".addPageEvents"] = false;

$tdataagent_performance_dashboard[".isUseAjaxSuggest"] = true;

$tables_data["Agent Performance Dashboard"]=&$tdataagent_performance_dashboard;
$field_labels["Agent_Performance_Dashboard"] = &$fieldLabelsagent_performance_dashboard;
$page_titles["Agent_Performance_Dashboard"] = &$pageTitlesagent_performance_dashboard;

?>