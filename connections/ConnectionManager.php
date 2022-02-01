<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "CallCenter_at_10_41_2_31" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "CallCenter_at_10_41_2_31" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->byId( "CallCenter_at_10_41_2_31" );
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->byId( "CallCenter_at_10_41_2_31" );
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "CallCenter_at_10_41_2_31" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->byId( "CallCenter_at_10_41_2_31" );
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 2;
		$data["connId"] = "CallCenter_at_10_41_2_31";
		$data["connName"] = "CallCenter at 10.41.2.31";
		$data["connStringType"] = "mssql";
		$data["connectionString"] = "mssql;10.41.2.31;sa;2wsx!QAZ;CallCenter"; //currently unused

		$this->_connectionsIdByName["CallCenter at 10.41.2.31"] = "CallCenter_at_10_41_2_31";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "sa";
		$data["ODBCPWD"] = "2wsx!QAZ";
		$data["leftWrap"] = "[";
		$data["rightWrap"] = "]";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
$host="10.41.2.31";
$user="sa";
$pwd="2wsx!QAZ";
$dbname="CallCenter";
$ODBCString = "Provider=SQLOLEDB;Server=10.41.2.31;Uid=sa;Pwd=2wsx!QAZ;Database=CallCenter";
$data["connInfo"][0] = $host;
$data["connInfo"][1] = $user;
$data["connInfo"][2] = $pwd;
$data["connInfo"][3] = $dbname;
$data["ODBCString"] = $ODBCString;
;
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";
		$data["EncryptInfo"]["slqserverkey"] = "";
		$data["EncryptInfo"]["slqservercert"] = "";

		$connectionsData["CallCenter_at_10_41_2_31"] = $data;
		$this->_connectionsData = &$connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["dbo.Calls"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.denialReason"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callStatus"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.CallCenter_audit"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.voltonApplications"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.Items"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.orderItems"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.postalCodes"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.itemFamily"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.itemSalesCategory"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.itemCustomer"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.contacts"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.phoneTypes"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callClassifications"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callSubClassifications"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.contactAddresses"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["itemLookup"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.CallCenter_settings"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.internalComments"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callStatusLookup"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.applicationStatus"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.novaApplications"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.voltonPowerPlans"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.agentApplicationStatus"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.CallCenter_users"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callcenter_ugmembers"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callcenter_uggroups"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.callcenter_ugrights"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["itemLookup1"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.itemSearch"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.manualCalls"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["callsForRedial"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["upcomingCallsForRedial"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.voltonAgentApplications"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.CallsBackofficeView"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.voltonApplicationsBackofficeView"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.novaApplicationsBackofficeView"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["callsNegativeReport"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.campaignsLastThreeMonths"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.listsLastThreeMonths"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.courierCompanies"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.novaAgentApplications"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.contactMethods"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.voltonApplicationsStatusView"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.voltonApplications Status Report"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.novaApplicationsStatusView"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.novaApplications Status Report"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["callsAgentView"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["admin_rights"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["admin_members"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["admin_users"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.vAgentPerformanceReportWithApps"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["Agent Performance Report"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.vAgentPerformanceReportWithAppsV2"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["vAgentPerformanceReport v2"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.vAgentPerformanceReportWithAppsV21"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.vAgentPerformanceReportWithNovaAppsV3"] = "CallCenter_at_10_41_2_31";
		$connectionsIds["dbo.vAgentPerformanceReportWithNovaAppsV3 Report"] = "CallCenter_at_10_41_2_31";
		$this->_tablesConnectionIds = &$connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>