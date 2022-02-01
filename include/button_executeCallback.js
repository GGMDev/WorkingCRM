
Runner.buttonEvents["executeCallback"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='executeCallback';if(!pageObj.buttonEventBefore['executeCallback']){pageObj.buttonEventBefore['executeCallback']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var ctrlPhoneToCall=row.getFieldText("dialerPhone");var ctrlCallId=row.getFieldText("id");var ctrlDialerAgent=proxy['userData'];params["apiManualDial"]=proxy['agentApiUrl']+
ctrlDialerAgent+"&function=external_dial&value="+
ctrlPhoneToCall+"&phone_code=1&search=YES&preview=NO&focus=NO";params["idToUpdate"]=ctrlCallId;return true;}}
if(!pageObj.buttonEventAfter['executeCallback']){pageObj.buttonEventAfter['executeCallback']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="executeCallback"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="executeCallback"+"_"+Runner.genId();var button_executeCallback=new Runner.form.Button({id:this.id,btnName:"executeCallback"});button_executeCallback.init({args:[pageObj,proxy,pageid]});});};