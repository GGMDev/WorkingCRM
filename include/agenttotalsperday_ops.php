<?php
$topsagenttotalsperday = array();
		$topsagenttotalsperday["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT      
  CASE WHEN dialerAgent = '' THEN 'Δεν Καταχωρήθηκε' ELSE isnull(dialerAgent, 'Δεν Καταχωρήθηκε') END AS agent, 
  format(callStart, 'dd/MM/yyyy') AS callDate,
  COUNT(1) AS agentDayTotalCalls,
  isNull(SUM(talkTime),0) AS agentDayTotalTalkTime,
 isNull( SUM(typingTime),0) AS agentDayTotalTypingTime,
 isNull( SUM(totalCallTime),0) AS agentDayTotalCallTime
FROM            dbo.Calls
GROUP BY
 CASE WHEN dialerAgent = '' THEN 'Δεν Καταχωρήθηκε' ELSE isnull(dialerAgent, 'Δεν Καταχωρήθηκε') END,
 format(callStart, 'dd/MM/yyyy')
"
	);
		$tables_data["agentTotalsPerDay"][".operations"] = &$topsagenttotalsperday;
?>