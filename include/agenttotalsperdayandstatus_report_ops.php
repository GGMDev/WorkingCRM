<?php
$topsagenttotalsperdayandstatus_report = array();
		$topsagenttotalsperdayandstatus_report["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT        CASE WHEN c.dialerAgent = '' THEN 'Δεν Καταχωρήθηκε' ELSE isnull(c.dialerAgent, 'Δεν Καταχωρήθηκε') END AS agent, 
format(c.callStart, 'dd/MM/yyyy') AS callDate, 
c.dialerCampaign, 
c.dialerList, 
cs.status AS callStatus, COUNT(1) AS callsCount, 
SUM(c.talkTime) AS totalTalkTime, 
SUM(c.typingTime) AS totalTypingTime, 
SUM(c.totalCallTime) AS totalCallTime
FROM            dbo.Calls AS c LEFT OUTER JOIN
                         dbo.callStatus AS cs ON c.callStatusId = cs.id
GROUP BY CASE WHEN c.dialerAgent = '' THEN 'Δεν Καταχωρήθηκε' ELSE isnull(c.dialerAgent, 'Δεν Καταχωρήθηκε') END, format(c.callStart, 'dd/MM/yyyy'), c.dialerCampaign, c.dialerList, cs.id, cs.status
"
	);
		$tables_data["agentTotalsPerDayAndStatus Report"][".operations"] = &$topsagenttotalsperdayandstatus_report;
?>