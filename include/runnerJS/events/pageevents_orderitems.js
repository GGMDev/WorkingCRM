
Runner.pages.PageSettings.addPageEvent('dbo.orderItems',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){pageObj.addNewRecordsToBottom=true;pageObj.updateTotals=function(){var masterPage=pageObj.getMasterPage();if(masterPage)
updateOrderTotal(masterPage);}
pageObj.updateTotals();});Runner.pages.fieldsEvents["updateOrderTotals"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'updateOrderTotals',btnName:'updateOrderTotals'}),before=function(){var ctrlPrice=Runner.getControl(pageid,'unitPrice');var ctrlqty=Runner.getControl(pageid,'qty');var ctrlunitPrice=Runner.getControl(pageid,'unitPrice');var ctrldiscountPcnt=Runner.getControl(pageid,'discountPcnt');var ctrlshippingCost=Runner.getControl(pageid,'shippingCost');var ctrltotalPrice=Runner.getControl(pageid,'totalPrice');var totalLineValue=Number(ctrlunitPrice.getValue())*Number(ctrlqty.getValue());var discountLineValue=totalLineValue*(Number(ctrldiscountPcnt.getValue())/100.0);var payableLineValue=Number(totalLineValue)-Number(discountLineValue)+Number(ctrlshippingCost.getValue());ctrlTotal.setValue(Number(payableLineValue));if(pageObj.updateTotals){pageObj.updateTotals();}
return false;},after=function(result){ctrl.setValue(result["upper"]);},submit=function(){params["table"]="dbo.orderItems";params["field"]=ctrl.fieldName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"updateOrderTotals",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),masterTable:pageObj.masterTable,fieldsData:JSON.stringify(fieldsData)};$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};