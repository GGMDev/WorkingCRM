
Runner.buttonEvents["pauseBackoffice"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='pauseBackoffice';if(!pageObj.buttonEventBefore['pauseBackoffice']){pageObj.buttonEventBefore['pauseBackoffice']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["apicallMode"]=proxy['agentApiUrl']+
proxy['userData']+"&function=external_pause&value=PAUSE";params["apiSetPauseReason"]=proxy['agentApiUrl']+
proxy['userData']+"&function=pause_code&value=BACKOF";return true;}}
if(!pageObj.buttonEventAfter['pauseBackoffice']){pageObj.buttonEventAfter['pauseBackoffice']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload(true);}}
$('a[id="pauseBackoffice"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="pauseBackoffice"+"_"+Runner.genId();var button_pauseBackoffice=new Runner.form.Button({id:this.id,btnName:"pauseBackoffice"});button_pauseBackoffice.init({args:[pageObj,proxy,pageid]});});};