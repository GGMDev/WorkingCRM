<?php
$topsagentvoltonapplicationswithstatus = array();
		$topsagentvoltonapplicationswithstatus["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT       
 va.callid,
 c.dialerAgent,
 format(c.callStart, 'dd/MM/yyyy') AS callDate,
 format(ISNULL(va.applicationLastStatusDate, c.callStart), 'dd/MM/yyyy') AS lastStatusDate,
 ISNULL(ast.statusDescription, 'NA - Εκκρεμότητα Agent') AS backOfficeStatus,
 ISNULL(ast.statisticStatus, 'NA -Εκκρεμότητα Agent') AS backOfficeStatisticsStatus,
 aast.agentApplicationStatus
FROM            dbo.voltonApplications AS va 
 LEFT OUTER JOIN dbo.applicationStatus AS ast ON ast.id = va.applicationStatusId
 LEFT OUTER JOIN dbo.agentApplicationStatus AS aast ON aast.id = va.applicationAgentStatus
 LEFT OUTER JOIN dbo.Calls AS c ON c.id = va.callid
"
	);
		$tables_data["agentVoltonApplicationsWithStatus"][".operations"] = &$topsagentvoltonapplicationswithstatus;
?>