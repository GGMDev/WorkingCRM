
Runner.buttonEvents["pauseManualCall"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='pauseManualCall';if(!pageObj.buttonEventBefore['pauseManualCall']){pageObj.buttonEventBefore['pauseManualCall']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["apicallMode"]=proxy['agentApiUrl']+
proxy['userData']+"&function=external_pause&value=PAUSE";params["apiSetPauseReason"]=proxy['agentApiUrl']+
proxy['userData']+"&function=pause_code&value=MANUAL";return true;}}
if(!pageObj.buttonEventAfter['pauseManualCall']){pageObj.buttonEventAfter['pauseManualCall']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.replace("manualcalls_add.php");}}
$('a[id="pauseManualCall"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="pauseManualCall"+"_"+Runner.genId();var button_pauseManualCall=new Runner.form.Button({id:this.id,btnName:"pauseManualCall"});button_pauseManualCall.init({args:[pageObj,proxy,pageid]});});};