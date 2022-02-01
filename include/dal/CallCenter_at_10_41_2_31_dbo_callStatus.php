<?php
$dalTablecallStatus = array();
$dalTablecallStatus["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecallStatus["status"] = array("type"=>200,"varname"=>"status", "name" => "status");
$dalTablecallStatus["isDenial"] = array("type"=>3,"varname"=>"isDenial", "name" => "isDenial");
$dalTablecallStatus["displayOrder"] = array("type"=>3,"varname"=>"displayOrder", "name" => "displayOrder");
$dalTablecallStatus["dialerStatus"] = array("type"=>200,"varname"=>"dialerStatus", "name" => "dialerStatus");
$dalTablecallStatus["callClassificationId"] = array("type"=>3,"varname"=>"callClassificationId", "name" => "callClassificationId");
$dalTablecallStatus["callSubClassificationId"] = array("type"=>3,"varname"=>"callSubClassificationId", "name" => "callSubClassificationId");
$dalTablecallStatus["isPositive"] = array("type"=>3,"varname"=>"isPositive", "name" => "isPositive");
	$dalTablecallStatus["id"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_callStatus"] = &$dalTablecallStatus;
?>