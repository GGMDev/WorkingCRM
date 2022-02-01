
Runner.buttonEvents["Active"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Active';if(!pageObj.buttonEventBefore['Active']){pageObj.buttonEventBefore['Active']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["apicallMode"]=proxy['agentApiUrl']+
proxy['userData']+"&function=external_pause&value=RESUME";return true;}}
if(!pageObj.buttonEventAfter['Active']){pageObj.buttonEventAfter['Active']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload(true);}}
$('a[id="Active"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Active"+"_"+Runner.genId();var button_Active=new Runner.form.Button({id:this.id,btnName:"Active"});button_Active.init({args:[pageObj,proxy,pageid]});});};