<?php
$strTableName="dbo.vAgentPerformanceReportWithAppsV21";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.vAgentPerformanceReportWithAppsV2";

$gstrOrderBy="order by callStatus";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.vAgentPerformanceReportWithAppsV21");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.vAgentPerformanceReportWithAppsV21"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>