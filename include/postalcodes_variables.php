<?php
$strTableName="dbo.postalCodes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.postalCodes";

$gstrOrderBy="ORDER BY postalCode";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.postalCodes");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.postalCodes"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>