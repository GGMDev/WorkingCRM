<?php
$dalTableItems = array();
$dalTableItems["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableItems["code"] = array("type"=>200,"varname"=>"code", "name" => "code");
$dalTableItems["description"] = array("type"=>200,"varname"=>"description", "name" => "description");
$dalTableItems["retailPrice"] = array("type"=>14,"varname"=>"retailPrice", "name" => "retailPrice");
$dalTableItems["costPrice"] = array("type"=>14,"varname"=>"costPrice", "name" => "costPrice");
$dalTableItems["details"] = array("type"=>201,"varname"=>"details", "name" => "details");
$dalTableItems["photo"] = array("type"=>205,"varname"=>"photo", "name" => "photo");
$dalTableItems["familyId"] = array("type"=>3,"varname"=>"familyId", "name" => "familyId");
$dalTableItems["itemCustomerId"] = array("type"=>3,"varname"=>"itemCustomerId", "name" => "itemCustomerId");
$dalTableItems["salesCategoryId"] = array("type"=>3,"varname"=>"salesCategoryId", "name" => "salesCategoryId");
$dalTableItems["isPackage"] = array("type"=>3,"varname"=>"isPackage", "name" => "isPackage");
$dalTableItems["itemWeight"] = array("type"=>14,"varname"=>"itemWeight", "name" => "itemWeight");
$dalTableItems["itemVolume"] = array("type"=>14,"varname"=>"itemVolume", "name" => "itemVolume");
$dalTableItems["itemCourierCost"] = array("type"=>14,"varname"=>"itemCourierCost", "name" => "itemCourierCost");
$dalTableItems["thumbnail"] = array("type"=>205,"varname"=>"thumbnail", "name" => "thumbnail");
$dalTableItems["salesComission"] = array("type"=>14,"varname"=>"salesComission", "name" => "salesComission");
$dalTableItems["itemDiscount"] = array("type"=>14,"varname"=>"itemDiscount", "name" => "itemDiscount");
$dalTableItems["itemShippingCost"] = array("type"=>14,"varname"=>"itemShippingCost", "name" => "itemShippingCost");
$dalTableItems["defaultSalesQty"] = array("type"=>3,"varname"=>"defaultSalesQty", "name" => "defaultSalesQty");
$dalTableItems["itemIsActive"] = array("type"=>3,"varname"=>"itemIsActive", "name" => "itemIsActive");
	$dalTableItems["id"]["key"]=true;

$dal_info["CallCenter_at_10_41_2_31_dbo_Items"] = &$dalTableItems;
?>