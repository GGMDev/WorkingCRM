
Runner.buttonEvents["pauseEmail"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='pauseEmail';if(!pageObj.buttonEventBefore['pauseEmail']){pageObj.buttonEventBefore['pauseEmail']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;$result["resultApicallMode"]=file_get_contents($params["apicallMode"]);sleep(1);$result["resultApiSetPauseReason"]=file_get_contents($params["apiSetPauseReason"]);}}
if(!pageObj.buttonEventAfter['pauseEmail']){pageObj.buttonEventAfter['pauseEmail']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload(true);}}
$('a[id="pauseEmail"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="pauseEmail"+"_"+Runner.genId();var button_pauseEmail=new Runner.form.Button({id:this.id,btnName:"pauseEmail"});button_pauseEmail.init({args:[pageObj,proxy,pageid]});});};