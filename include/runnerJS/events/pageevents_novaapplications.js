
Runner.pages.PageSettings.addPageEvent('dbo.novaApplications',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){pageObj.addNewRecordsToBottom=true;});