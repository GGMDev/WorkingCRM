<?php
$strTableName="dbo.vAgentPerformanceReport";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.vAgentPerformanceReport";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.vAgentPerformanceReport");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.vAgentPerformanceReport"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>