<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_manualcalls  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["AfterAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		$agentApiUrl = "http://10.41.2.204/agc/api.php?source=crm&user=tsikasapi&pass=ggm&agent_user=";
$pageObject->setProxyValue('agentApiUrl',$agentApiUrl);

$userData = Security::getUserName();
$pageObject->setProxyValue('userData',$userData);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		$agentApiUrl = "http://10.41.2.204/agc/api.php?source=crm&user=tsikasapi&pass=ggm&agent_user=";
$pageObject->setProxyValue('agentApiUrl',$agentApiUrl);

$userData = Security::getUserName();
$pageObject->setProxyValue('userData',$userData);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
header("Location: menu.php");
exit();


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>