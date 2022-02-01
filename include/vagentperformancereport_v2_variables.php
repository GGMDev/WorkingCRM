<?php
$strTableName="vAgentPerformanceReport v2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.vAgentPerformanceReportWithAppsV2";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vAgentPerformanceReport v2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vAgentPerformanceReport v2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>