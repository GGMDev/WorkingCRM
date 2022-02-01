<?php
$strTableName="agentTotalsPerDayAndStatus Report";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="agentTotalsPerDayAndStatus";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("agentTotalsPerDayAndStatus Report");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["agentTotalsPerDayAndStatus Report"];

$reportCaseSensitiveGroupFields = false;

?>