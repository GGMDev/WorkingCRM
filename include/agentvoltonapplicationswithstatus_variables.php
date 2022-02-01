<?php
$strTableName="agentVoltonApplicationsWithStatus";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="agentVoltonApplicationsWithStatus";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("agentVoltonApplicationsWithStatus");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["agentVoltonApplicationsWithStatus"];

$reportCaseSensitiveGroupFields = false;

?>