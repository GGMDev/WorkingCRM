<?php
$dalTableorderItems = array();
$dalTableorderItems["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableorderItems["callid"] = array("type"=>3,"varname"=>"callid", "name" => "callid");
$dalTableorderItems["itemid"] = array("type"=>3,"varname"=>"itemid", "name" => "itemid");
$dalTableorderItems["qty"] = array("type"=>3,"varname"=>"qty", "name" => "qty");
$dalTableorderItems["unitPrice"] = array("type"=>14,"varname"=>"unitPrice", "name" => "unitPrice");
$dalTableorderItems["totalPrice"] = array("type"=>14,"varname"=>"totalPrice", "name" => "totalPrice");
$dalTableorderItems["itemCode"] = array("type"=>200,"varname"=>"itemCode", "name" => "itemCode");
$dalTableorderItems["itemDescription"] = array("type"=>200,"varname"=>"itemDescription", "name" => "itemDescription");
$dalTableorderItems["discountPcnt"] = array("type"=>14,"varname"=>"discountPcnt", "name" => "discountPcnt");
$dalTableorderItems["shippingCost"] = array("type"=>14,"varname"=>"shippingCost", "name" => "shippingCost");
	$dalTableorderItems["id"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_orderItems"] = &$dalTableorderItems;
?>