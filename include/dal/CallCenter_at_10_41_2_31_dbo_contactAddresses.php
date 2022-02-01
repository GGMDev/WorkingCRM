<?php
$dalTablecontactAddresses = array();
$dalTablecontactAddresses["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecontactAddresses["contactId"] = array("type"=>3,"varname"=>"contactId", "name" => "contactId");
$dalTablecontactAddresses["street"] = array("type"=>200,"varname"=>"street", "name" => "street");
$dalTablecontactAddresses["postalCode"] = array("type"=>200,"varname"=>"postalCode", "name" => "postalCode");
$dalTablecontactAddresses["area"] = array("type"=>200,"varname"=>"area", "name" => "area");
$dalTablecontactAddresses["city"] = array("type"=>200,"varname"=>"city", "name" => "city");
$dalTablecontactAddresses["region"] = array("type"=>200,"varname"=>"region", "name" => "region");
$dalTablecontactAddresses["phone1"] = array("type"=>200,"varname"=>"phone1", "name" => "phone1");
$dalTablecontactAddresses["phone2"] = array("type"=>200,"varname"=>"phone2", "name" => "phone2");
	$dalTablecontactAddresses["id"]["key"]=true;
	$dalTablecontactAddresses["contactId"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_contactAddresses"] = &$dalTablecontactAddresses;
?>