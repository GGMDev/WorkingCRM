
Runner.buttonEvents["updateOrderTotals1"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='updateOrderTotals1';if(!pageObj.buttonEventBefore['updateOrderTotals1']){pageObj.buttonEventBefore['updateOrderTotals1']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;if(pageObj.updateTotals){pageObj.updateTotals();}
return false;}}
if(!pageObj.buttonEventAfter['updateOrderTotals1']){pageObj.buttonEventAfter['updateOrderTotals1']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);}}
$('a[id="updateOrderTotals1"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="updateOrderTotals1"+"_"+Runner.genId();var button_updateOrderTotals1=new Runner.form.Button({id:this.id,btnName:"updateOrderTotals1"});button_updateOrderTotals1.init({args:[pageObj,proxy,pageid]});});};