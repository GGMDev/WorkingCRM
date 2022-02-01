
Runner.buttonEvents["pauseLunch"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='pauseLunch';if(!pageObj.buttonEventBefore['pauseLunch']){pageObj.buttonEventBefore['pauseLunch']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["apicallMode"]=proxy['agentApiUrl']+
proxy['userData']+"&function=external_pause&value=PAUSE";params["apiSetPauseReason"]=proxy['agentApiUrl']+
proxy['userData']+"&function=pause_code&value=LUNCH";return true;}}
if(!pageObj.buttonEventAfter['pauseLunch']){pageObj.buttonEventAfter['pauseLunch']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload(true);}}
$('a[id="pauseLunch"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="pauseLunch"+"_"+Runner.genId();var button_pauseLunch=new Runner.form.Button({id:this.id,btnName:"pauseLunch"});button_pauseLunch.init({args:[pageObj,proxy,pageid]});});};