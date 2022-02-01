
Runner.buttonEvents["pauseWC"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='pauseWC';if(!pageObj.buttonEventBefore['pauseWC']){pageObj.buttonEventBefore['pauseWC']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["apicallMode"]=proxy['agentApiUrl']+
proxy['userData']+"&function=external_pause&value=PAUSE";params["apiSetPauseReason"]=proxy['agentApiUrl']+
proxy['userData']+"&function=pause_code&value=WC";return true;}}
if(!pageObj.buttonEventAfter['pauseWC']){pageObj.buttonEventAfter['pauseWC']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload(true);}}
$('a[id="pauseWC"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="pauseWC"+"_"+Runner.genId();var button_pauseWC=new Runner.form.Button({id:this.id,btnName:"pauseWC"});button_pauseWC.init({args:[pageObj,proxy,pageid]});});};