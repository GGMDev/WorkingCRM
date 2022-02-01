<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/calls_events.php"));
$tableEvents["dbo.Calls"] = new eventclass_calls;
include_once(getabspath("include/dbo_voltonapplications_events.php"));
$tableEvents["dbo.voltonApplications"] = new eventclass_dbo_voltonapplications;
include_once(getabspath("include/orderitems_events.php"));
$tableEvents["dbo.orderItems"] = new eventclass_orderitems;
include_once(getabspath("include/novaapplications_events.php"));
$tableEvents["dbo.novaApplications"] = new eventclass_novaapplications;
include_once(getabspath("include/manualcalls_events.php"));
$tableEvents["dbo.manualCalls"] = new eventclass_manualcalls;
include_once(getabspath("include/callsforredial_events.php"));
$tableEvents["callsForRedial"] = new eventclass_callsforredial;
include_once(getabspath("include/upcomingcallsforredial_events.php"));
$tableEvents["upcomingCallsForRedial"] = new eventclass_upcomingcallsforredial;
include_once(getabspath("include/voltonagentapplications_events.php"));
$tableEvents["dbo.voltonAgentApplications"] = new eventclass_voltonagentapplications;
include_once(getabspath("include/callsbackofficeview_events.php"));
$tableEvents["dbo.CallsBackofficeView"] = new eventclass_callsbackofficeview;
include_once(getabspath("include/voltonapplicationsbackofficeview_events.php"));
$tableEvents["dbo.voltonApplicationsBackofficeView"] = new eventclass_voltonapplicationsbackofficeview;
include_once(getabspath("include/novaagentapplications_events.php"));
$tableEvents["dbo.novaAgentApplications"] = new eventclass_novaagentapplications;
include_once(getabspath("include/dbo_voltonapplicationsstatusview_events.php"));
$tableEvents["dbo.voltonApplicationsStatusView"] = new eventclass_dbo_voltonapplicationsstatusview;
include_once(getabspath("include/dbo_novaapplicationsstatusview_events.php"));
$tableEvents["dbo.novaApplicationsStatusView"] = new eventclass_dbo_novaapplicationsstatusview;
include_once(getabspath("include/callsagentview_events.php"));
$tableEvents["callsAgentView"] = new eventclass_callsagentview;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>