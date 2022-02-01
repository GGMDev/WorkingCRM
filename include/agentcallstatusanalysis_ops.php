<?php
$topsagentcallstatusanalysis = array();
		$topsagentcallstatusanalysis["selectList"] = array(
		"subtype" => "sql",
		"sql" => "select *
from 
(
  select agent, callDate, dialerCampaign, dialerList, callStatus, callsCount
  from vAgentPerformanceTotalsPerDayStatus
) src
pivot
(
  sum(callsCount)
  for callStatus in ([Αδύνατη Επικοινωνία],[Άμεση Άρνηση],[Απαντήθηκε],[Αρνητικό],[Δεν απαντά],[Επανάκληση (Ραντεβού)],[Θετικό - Εκκρεμότητα],[Θετικό - Ολοκληρώθηκε],[Τηλεφωνητής/Fax])
) piv
order by 1, 2, 3, 4"
	);
		$tables_data["AgentCallStatusAnalysis"][".operations"] = &$topsagentcallstatusanalysis;
?>