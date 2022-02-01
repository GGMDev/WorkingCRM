<?php
$strTableName="dbo.voltonApplicationsBackofficeView";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.voltonApplications";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.voltonApplicationsBackofficeView");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.voltonApplicationsBackofficeView"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>