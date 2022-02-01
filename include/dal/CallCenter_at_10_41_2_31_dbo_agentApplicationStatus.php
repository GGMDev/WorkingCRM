<?php
$dalTableagentApplicationStatus = array();
$dalTableagentApplicationStatus["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableagentApplicationStatus["agentApplicationStatus"] = array("type"=>200,"varname"=>"agentApplicationStatus", "name" => "agentApplicationStatus");
$dalTableagentApplicationStatus["voltonApplicationStatusId"] = array("type"=>3,"varname"=>"voltonApplicationStatusId", "name" => "voltonApplicationStatusId");
$dalTableagentApplicationStatus["novaApplicationStatusId"] = array("type"=>3,"varname"=>"novaApplicationStatusId", "name" => "novaApplicationStatusId");
	$dalTableagentApplicationStatus["id"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_agentApplicationStatus"] = &$dalTableagentApplicationStatus;
?>