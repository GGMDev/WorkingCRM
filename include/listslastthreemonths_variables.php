<?php
$strTableName="dbo.listsLastThreeMonths";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.listsLastThreeMonths";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dbo.listsLastThreeMonths");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dbo.listsLastThreeMonths"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>