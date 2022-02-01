
Runner.buttonEvents["pauseReport"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='pauseReport';if(!pageObj.buttonEventBefore['pauseReport']){pageObj.buttonEventBefore['pauseReport']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["apicallMode"]=proxy['agentApiUrl']+
proxy['userData']+"&function=external_pause&value=PAUSE";params["apiSetPauseReason"]=proxy['agentApiUrl']+
proxy['userData']+"&function=pause_code&value=REPORT";return true;}}
if(!pageObj.buttonEventAfter['pauseReport']){pageObj.buttonEventAfter['pauseReport']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload(true);}}
$('a[id="pauseReport"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="pauseReport"+"_"+Runner.genId();var button_pauseReport=new Runner.form.Button({id:this.id,btnName:"pauseReport"});button_pauseReport.init({args:[pageObj,proxy,pageid]});});};