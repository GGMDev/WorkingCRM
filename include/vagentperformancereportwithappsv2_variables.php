<?php
$strTableName="dbo.vAgentPerformanceReportWithAppsV2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.vAgentPerformanceReportWithAppsV2";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.vAgentPerformanceReportWithAppsV2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.vAgentPerformanceReportWithAppsV2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>