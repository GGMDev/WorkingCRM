<?php
$strTableName="dbo.voltonApplicationsStatusView";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.voltonApplications";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.voltonApplicationsStatusView");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.voltonApplicationsStatusView"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>