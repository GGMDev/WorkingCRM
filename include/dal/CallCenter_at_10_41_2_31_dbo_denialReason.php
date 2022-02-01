<?php
$dalTabledenialReason = array();
$dalTabledenialReason["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabledenialReason["denialReason"] = array("type"=>200,"varname"=>"denialReason", "name" => "denialReason");
$dalTabledenialReason["displayOrder"] = array("type"=>3,"varname"=>"displayOrder", "name" => "displayOrder");
$dalTabledenialReason["callStatusID"] = array("type"=>3,"varname"=>"callStatusID", "name" => "callStatusID");
$dalTabledenialReason["dialerStatus"] = array("type"=>200,"varname"=>"dialerStatus", "name" => "dialerStatus");
	$dalTabledenialReason["id"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_denialReason"] = &$dalTabledenialReason;
?>