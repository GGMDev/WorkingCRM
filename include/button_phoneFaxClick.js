
Runner.buttonEvents["phoneFaxClick"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='phoneFaxClick';if(!pageObj.buttonEventBefore['phoneFaxClick']){pageObj.buttonEventBefore['phoneFaxClick']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var ctrlDialerAgent=Runner.getControl(pageid,'dialerAgent');var ctrlcallHangup=Runner.getControl(pageid,'callHangup');var ctrlcallStart=Runner.getControl(pageid,'callStart');var ctrlTalkTime=Runner.getControl(pageid,'talkTime');var ctrlCallStatus=Runner.getControl(pageid,'callStatusId');var ctrlCallClassificationID=Runner.getControl(pageid,'callClassificationID');var ctrlCallSubClassificationID=Runner.getControl(pageid,'callSubClassificationID');if(ctrlcallHangup.isEmpty()){alert('Δεν έχει προηγηθεί τερματισμός της κλήσης');return false;};if(ctrlCallSubClassificationID.getValue()==1002){ctrlCallStatus.setValue(7);}
if(ctrlCallSubClassificationID.getValue()==1003){ctrlCallStatus.setValue(17);}
if(ctrlCallSubClassificationID.getValue()==1004){ctrlCallStatus.setValue(27);}
if(ctrlCallSubClassificationID.getValue()==1005){ctrlCallStatus.setValue(37);}
params["apicallMode"]=proxy['agentApiUrl']+
ctrlDialerAgent.getValue()+"&function=external_status&value=Amfax";var ctrlPauseAfterCall=Runner.getControl(pageid,'pauseAfterCall');params["pauseMode"]=ctrlPauseAfterCall.getValue();params["apicallSetPause"]=proxy['agentApiUrl']+
ctrlDialerAgent.getValue()+"&function=external_pause&value=PAUSE";params["apiSetPauseReason"]=proxy['agentApiUrl']+
ctrlDialerAgent.getValue()+"&function=pause_code&value=MANUAL";return true;}}
if(!pageObj.buttonEventAfter['phoneFaxClick']){pageObj.buttonEventAfter['phoneFaxClick']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var ctrlcallStart=Runner.getControl(pageid,'callStart');var ctrlcallHangup=Runner.getControl(pageid,'callHangup');var ctrlcallEnd=Runner.getControl(pageid,'callEnd');var ctrltalkTime=Runner.getControl(pageid,'talkTime');var ctrltypingTime=Runner.getControl(pageid,'typingTime');var ctrltotalCallTime=Runner.getControl(pageid,'totalCallTime');if(ctrlcallEnd.isEmpty()){ctrlcallEnd.setValue(moment());ctrlcallEnd.makeReadonly();ctrltypingTime.setValue((ctrlcallEnd.getValue()-ctrlcallHangup.getValue())/1000);ctrltypingTime.makeReadonly();ctrltotalCallTime.setValue((ctrlcallEnd.getValue()-ctrlcallStart.getValue())/1000);ctrltotalCallTime.makeReadonly();}
$("#saveButton1").click();}}
$('a[id="phoneFaxClick"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="phoneFaxClick"+"_"+Runner.genId();var button_phoneFaxClick=new Runner.form.Button({id:this.id,btnName:"phoneFaxClick"});button_phoneFaxClick.init({args:[pageObj,proxy,pageid]});});};