<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("dbo.CallCenter_users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblCallCenter_at_10_41_2_31_dbo_agentApplicationStatus;
	var $tblCallCenter_at_10_41_2_31_dbo_applicationStatus;
	var $tblCallCenter_at_10_41_2_31_dbo_CallCenter_audit;
	var $tblCallCenter_at_10_41_2_31_dbo_CallCenter_settings;
	var $tblCallCenter_at_10_41_2_31_dbo_callcenter_uggroups;
	var $tblCallCenter_at_10_41_2_31_dbo_callcenter_ugmembers;
	var $tblCallCenter_at_10_41_2_31_dbo_callcenter_ugrights;
	var $tblCallCenter_at_10_41_2_31_dbo_CallCenter_users;
	var $tblCallCenter_at_10_41_2_31_dbo_callClassifications;
	var $tblCallCenter_at_10_41_2_31_dbo_Calls;
	var $tblCallCenter_at_10_41_2_31_dbo_callStatus;
	var $tblCallCenter_at_10_41_2_31_dbo_callSubClassifications;
	var $tblCallCenter_at_10_41_2_31_dbo_campaignsLastThreeMonths;
	var $tblCallCenter_at_10_41_2_31_dbo_contactAddresses;
	var $tblCallCenter_at_10_41_2_31_dbo_contactMethods;
	var $tblCallCenter_at_10_41_2_31_dbo_contacts;
	var $tblCallCenter_at_10_41_2_31_dbo_courierCompanies;
	var $tblCallCenter_at_10_41_2_31_dbo_denialReason;
	var $tblCallCenter_at_10_41_2_31_dbo_GGM_CallCenter_locking;
	var $tblCallCenter_at_10_41_2_31_dbo_internalComments;
	var $tblCallCenter_at_10_41_2_31_dbo_itemCustomer;
	var $tblCallCenter_at_10_41_2_31_dbo_itemFamily;
	var $tblCallCenter_at_10_41_2_31_dbo_Items;
	var $tblCallCenter_at_10_41_2_31_dbo_itemSalesCategory;
	var $tblCallCenter_at_10_41_2_31_dbo_itemSearch;
	var $tblCallCenter_at_10_41_2_31_dbo_listsLastThreeMonths;
	var $tblCallCenter_at_10_41_2_31_dbo_manualCalls;
	var $tblCallCenter_at_10_41_2_31_dbo_novaApplications;
	var $tblCallCenter_at_10_41_2_31_dbo_orderItems;
	var $tblCallCenter_at_10_41_2_31_dbo_phoneTypes;
	var $tblCallCenter_at_10_41_2_31_dbo_postalCodes;
	var $tblCallCenter_at_10_41_2_31_dbo_vAgentPerformanceReportWithApps;
	var $tblCallCenter_at_10_41_2_31_dbo_vAgentPerformanceReportWithAppsV2;
	var $tblCallCenter_at_10_41_2_31_dbo_vAgentPerformanceReportWithNovaAppsV3;
	var $tblCallCenter_at_10_41_2_31_dbo_voltonApplications;
	var $tblCallCenter_at_10_41_2_31_dbo_voltonPowerPlans;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "agentApplicationStatus", "varname" => "CallCenter_at_10_41_2_31_dbo_agentApplicationStatus", "altvarname" => "agentApplicationStatus", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "applicationStatus", "varname" => "CallCenter_at_10_41_2_31_dbo_applicationStatus", "altvarname" => "applicationStatus", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "CallCenter_audit", "varname" => "CallCenter_at_10_41_2_31_dbo_CallCenter_audit", "altvarname" => "CallCenter_audit", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "CallCenter_settings", "varname" => "CallCenter_at_10_41_2_31_dbo_CallCenter_settings", "altvarname" => "CallCenter_settings", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "callcenter_uggroups", "varname" => "CallCenter_at_10_41_2_31_dbo_callcenter_uggroups", "altvarname" => "callcenter_uggroups", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "callcenter_ugmembers", "varname" => "CallCenter_at_10_41_2_31_dbo_callcenter_ugmembers", "altvarname" => "callcenter_ugmembers", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "callcenter_ugrights", "varname" => "CallCenter_at_10_41_2_31_dbo_callcenter_ugrights", "altvarname" => "callcenter_ugrights", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "CallCenter_users", "varname" => "CallCenter_at_10_41_2_31_dbo_CallCenter_users", "altvarname" => "CallCenter_users", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "callClassifications", "varname" => "CallCenter_at_10_41_2_31_dbo_callClassifications", "altvarname" => "callClassifications", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "Calls", "varname" => "CallCenter_at_10_41_2_31_dbo_Calls", "altvarname" => "Calls", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "callStatus", "varname" => "CallCenter_at_10_41_2_31_dbo_callStatus", "altvarname" => "callStatus", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "callSubClassifications", "varname" => "CallCenter_at_10_41_2_31_dbo_callSubClassifications", "altvarname" => "callSubClassifications", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "campaignsLastThreeMonths", "varname" => "CallCenter_at_10_41_2_31_dbo_campaignsLastThreeMonths", "altvarname" => "campaignsLastThreeMonths", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "contactAddresses", "varname" => "CallCenter_at_10_41_2_31_dbo_contactAddresses", "altvarname" => "contactAddresses", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "contactMethods", "varname" => "CallCenter_at_10_41_2_31_dbo_contactMethods", "altvarname" => "contactMethods", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "contacts", "varname" => "CallCenter_at_10_41_2_31_dbo_contacts", "altvarname" => "contacts", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "courierCompanies", "varname" => "CallCenter_at_10_41_2_31_dbo_courierCompanies", "altvarname" => "courierCompanies", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "denialReason", "varname" => "CallCenter_at_10_41_2_31_dbo_denialReason", "altvarname" => "denialReason", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "GGM_CallCenter_locking", "varname" => "CallCenter_at_10_41_2_31_dbo_GGM_CallCenter_locking", "altvarname" => "GGM_CallCenter_locking", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "internalComments", "varname" => "CallCenter_at_10_41_2_31_dbo_internalComments", "altvarname" => "internalComments", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "itemCustomer", "varname" => "CallCenter_at_10_41_2_31_dbo_itemCustomer", "altvarname" => "itemCustomer", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "itemFamily", "varname" => "CallCenter_at_10_41_2_31_dbo_itemFamily", "altvarname" => "itemFamily", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "Items", "varname" => "CallCenter_at_10_41_2_31_dbo_Items", "altvarname" => "Items", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "itemSalesCategory", "varname" => "CallCenter_at_10_41_2_31_dbo_itemSalesCategory", "altvarname" => "itemSalesCategory", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "itemSearch", "varname" => "CallCenter_at_10_41_2_31_dbo_itemSearch", "altvarname" => "itemSearch", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "listsLastThreeMonths", "varname" => "CallCenter_at_10_41_2_31_dbo_listsLastThreeMonths", "altvarname" => "listsLastThreeMonths", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "manualCalls", "varname" => "CallCenter_at_10_41_2_31_dbo_manualCalls", "altvarname" => "manualCalls", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "novaApplications", "varname" => "CallCenter_at_10_41_2_31_dbo_novaApplications", "altvarname" => "novaApplications", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "orderItems", "varname" => "CallCenter_at_10_41_2_31_dbo_orderItems", "altvarname" => "orderItems", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "phoneTypes", "varname" => "CallCenter_at_10_41_2_31_dbo_phoneTypes", "altvarname" => "phoneTypes", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "postalCodes", "varname" => "CallCenter_at_10_41_2_31_dbo_postalCodes", "altvarname" => "postalCodes", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "vAgentPerformanceReportWithApps", "varname" => "CallCenter_at_10_41_2_31_dbo_vAgentPerformanceReportWithApps", "altvarname" => "vAgentPerformanceReportWithApps", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "vAgentPerformanceReportWithAppsV2", "varname" => "CallCenter_at_10_41_2_31_dbo_vAgentPerformanceReportWithAppsV2", "altvarname" => "vAgentPerformanceReportWithAppsV2", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "vAgentPerformanceReportWithNovaAppsV3", "varname" => "CallCenter_at_10_41_2_31_dbo_vAgentPerformanceReportWithNovaAppsV3", "altvarname" => "vAgentPerformanceReportWithNovaAppsV3", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "voltonApplications", "varname" => "CallCenter_at_10_41_2_31_dbo_voltonApplications", "altvarname" => "voltonApplications", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
		$this->lstTables[] = array("name" => "voltonPowerPlans", "varname" => "CallCenter_at_10_41_2_31_dbo_voltonPowerPlans", "altvarname" => "voltonPowerPlans", "connId" => "CallCenter_at_10_41_2_31", "schema" => "dbo", "connName" => "CallCenter at 10.41.2.31");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>