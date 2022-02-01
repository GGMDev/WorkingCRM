
Runner.buttonEvents["manualCall"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='manualCall';if(!pageObj.buttonEventBefore['manualCall']){pageObj.buttonEventBefore['manualCall']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var ctrlDialerAgent=proxy['userData'];var ctrlPhoneNumber=Runner.getControl(pageid,'phoneNumber');params["apiManualDial"]=proxy['agentApiUrl']+
ctrlDialerAgent+"&function=external_dial&value="+
ctrlPhoneNumber.getValue()+"&phone_code=1&search=YES&preview=NO&focus=NO";return true;}}
if(!pageObj.buttonEventAfter['manualCall']){pageObj.buttonEventAfter['manualCall']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;$("#saveButton1").click();}}
$('a[id="manualCall"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="manualCall"+"_"+Runner.genId();var button_manualCall=new Runner.form.Button({id:this.id,btnName:"manualCall"});button_manualCall.init({args:[pageObj,proxy,pageid]});});};