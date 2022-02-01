<?php
$strTableName="dbo.vAgentPerformanceReportWithNovaAppsV3";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.vAgentPerformanceReportWithNovaAppsV3";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.vAgentPerformanceReportWithNovaAppsV3");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.vAgentPerformanceReportWithNovaAppsV3"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>