<?php
$strTableName="dbo.campaignsLastThreeMonths";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.campaignsLastThreeMonths";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.campaignsLastThreeMonths");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.campaignsLastThreeMonths"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>