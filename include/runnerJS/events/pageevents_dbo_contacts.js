
Runner.pages.PageSettings.addPageEvent('dbo.contacts',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var agentStatusApiCallUrl='N/A';var agentStatusReply='N/A';var agentStatus='N/A';var pauseCode='N/A';var pauseReason='N/A';var x=setInterval(function(){agentStatusApiCallUrl='http://10.41.2.204/vicidial/non_agent_api.php?source=crm&user=tsikasapi&pass=ggm'+'&function=agent_status&agent_user='+
proxy['userData'];agentStatusReply=httpGet(agentStatusApiCallUrl);if(agentStatusReply.substring(0,5)=='ERROR'){agentStatus=agentStatusReply}
else
{agentStatus=agentStatusReply.substring(0,nthIndex(agentStatusReply,'|',1));pauseCode=agentStatusReply.substring(nthIndex(agentStatusReply,'|',8)+1,nthIndex(agentStatusReply,'|',9));if(pauseCode!==''){agentStatus=agentStatus+' ('+pauseCode+')'};pauseReason=agentStatusReply.substring(nthIndex(agentStatusReply,'|',9)+1,nthIndex(agentStatusReply,'|',10));if(pauseReason!==''){agentStatus=agentStatus+' - '+pauseReason};};pageObj.findItem('agentStatus').text(agentStatus);},1000);});