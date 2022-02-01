<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


		$this->events["BeforeProcessMenu"]=true;



//	onscreen events
		$this->events["_global__snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		$_SESSION["UserName"] = $data["username"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu(&$pageObject)
{

		$agentApiUrl = "http://10.41.2.204/agc/api.php?source=crm&user=tsikasapi&pass=ggm&agent_user=";
$pageObject->setProxyValue('agentApiUrl',$agentApiUrl);

$userData = Security::getUserName();
$pageObject->setProxyValue('userData',$userData);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event__global__snippet(&$params)
	{
	// Put your code here.
echo '<IFRAME SRC="http://10.41.2.204/vicidial/non_agent_api.php?source=crm&user=tsikasapi&pass=ggm&function=agent_status&agent_user=tsikasuser&stage=csv" WIDTH=200 HEIGHT=68>
</IFRAME>';
	;
}




}
?>
