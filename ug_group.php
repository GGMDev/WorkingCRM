<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "dbo.Calls";
$nonAdminTablesArr[] = "dbo.denialReason";
$nonAdminTablesArr[] = "dbo.callStatus";
$nonAdminTablesArr[] = "dbo.CallCenter_audit";
$nonAdminTablesArr[] = "dbo.voltonApplications";
$nonAdminTablesArr[] = "dbo.Items";
$nonAdminTablesArr[] = "dbo.orderItems";
$nonAdminTablesArr[] = "dbo.postalCodes";
$nonAdminTablesArr[] = "dbo.itemFamily";
$nonAdminTablesArr[] = "dbo.itemSalesCategory";
$nonAdminTablesArr[] = "dbo.itemCustomer";
$nonAdminTablesArr[] = "dbo.contacts";
$nonAdminTablesArr[] = "dbo.phoneTypes";
$nonAdminTablesArr[] = "dbo.callClassifications";
$nonAdminTablesArr[] = "dbo.callSubClassifications";
$nonAdminTablesArr[] = "dbo.contactAddresses";
$nonAdminTablesArr[] = "itemLookup";
$nonAdminTablesArr[] = "dbo.CallCenter_settings";
$nonAdminTablesArr[] = "dbo.internalComments";
$nonAdminTablesArr[] = "dbo.callStatusLookup";
$nonAdminTablesArr[] = "dbo.applicationStatus";
$nonAdminTablesArr[] = "dbo.novaApplications";
$nonAdminTablesArr[] = "dbo.voltonPowerPlans";
$nonAdminTablesArr[] = "dbo.agentApplicationStatus";
$nonAdminTablesArr[] = "dbo.CallCenter_users";
$nonAdminTablesArr[] = "dbo.callcenter_ugmembers";
$nonAdminTablesArr[] = "dbo.callcenter_uggroups";
$nonAdminTablesArr[] = "dbo.callcenter_ugrights";
$nonAdminTablesArr[] = "itemLookup1";
$nonAdminTablesArr[] = "dbo.itemSearch";
$nonAdminTablesArr[] = "dbo.manualCalls";
$nonAdminTablesArr[] = "callsForRedial";
$nonAdminTablesArr[] = "upcomingCallsForRedial";
$nonAdminTablesArr[] = "dbo.voltonAgentApplications";
$nonAdminTablesArr[] = "dbo.CallsBackofficeView";
$nonAdminTablesArr[] = "dbo.voltonApplicationsBackofficeView";
$nonAdminTablesArr[] = "dbo.novaApplicationsBackofficeView";
$nonAdminTablesArr[] = "callsNegativeReport";
$nonAdminTablesArr[] = "dbo.campaignsLastThreeMonths";
$nonAdminTablesArr[] = "dbo.listsLastThreeMonths";
$nonAdminTablesArr[] = "dbo.courierCompanies";
$nonAdminTablesArr[] = "dbo.novaAgentApplications";
$nonAdminTablesArr[] = "dbo.contactMethods";
$nonAdminTablesArr[] = "dbo.voltonApplicationsStatusView";
$nonAdminTablesArr[] = "dbo.voltonApplications Status Report";
$nonAdminTablesArr[] = "dbo.novaApplicationsStatusView";
$nonAdminTablesArr[] = "dbo.novaApplications Status Report";
$nonAdminTablesArr[] = "callsAgentView";
$nonAdminTablesArr[] = "dbo.vAgentPerformanceReportWithApps";
$nonAdminTablesArr[] = "Agent Performance Report";
$nonAdminTablesArr[] = "dbo.vAgentPerformanceReportWithAppsV2";
$nonAdminTablesArr[] = "vAgentPerformanceReport v2";
$nonAdminTablesArr[] = "dbo.vAgentPerformanceReportWithAppsV21";
$nonAdminTablesArr[] = "Agent Performance Dashboard";
$nonAdminTablesArr[] = "dbo.vAgentPerformanceReportWithNovaAppsV3";
$nonAdminTablesArr[] = "dbo.vAgentPerformanceReportWithNovaAppsV3 Report";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "dbo.callcenter_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "dbo.callcenter_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "dbo.callcenter_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "dbo.callcenter_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}