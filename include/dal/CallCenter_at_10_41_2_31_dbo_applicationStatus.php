<?php
$dalTableapplicationStatus = array();
$dalTableapplicationStatus["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableapplicationStatus["statusDescription"] = array("type"=>200,"varname"=>"statusDescription", "name" => "statusDescription");
$dalTableapplicationStatus["displayOrder"] = array("type"=>3,"varname"=>"displayOrder", "name" => "displayOrder");
$dalTableapplicationStatus["statisticStatus"] = array("type"=>200,"varname"=>"statisticStatus", "name" => "statisticStatus");
$dalTableapplicationStatus["salesStatus"] = array("type"=>200,"varname"=>"salesStatus", "name" => "salesStatus");
$dalTableapplicationStatus["statusIsFor"] = array("type"=>200,"varname"=>"statusIsFor", "name" => "statusIsFor");
	$dalTableapplicationStatus["id"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_applicationStatus"] = &$dalTableapplicationStatus;
?>