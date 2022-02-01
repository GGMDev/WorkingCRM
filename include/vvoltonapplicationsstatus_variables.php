<?php
$strTableName="dbo.vVoltonApplicationsStatus";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.vVoltonApplicationsStatus";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.vVoltonApplicationsStatus");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.vVoltonApplicationsStatus"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>