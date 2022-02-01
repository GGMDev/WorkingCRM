<?php
$strTableName="agentPerformanceReport";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Calls";

$gstrOrderBy="order by 
isnull(perStatus.dialerAgent,'Άγνωστος'),perStatus.callDate,
perStatus.status";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("agentPerformanceReport");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["agentPerformanceReport"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>