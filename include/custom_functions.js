var orderDetailsTable = 'dbo.orderItems';

function setOrderTotal( value, pageObj ) {
  //    update totals if the 'totals' element is inserted into the master page
   pageObj.findItem('orderTotal').text( parseFloat(value).toFixed(2) );
  //    update totals if the 'totals' element is inserted into the details page
  var detailsPage = pageObj.getDetailsPage(orderDetailsTable);
   detailsPage.findItem('orderTotal').text( parseFloat(value).toFixed(2) );
}
 
function updateOrderTotal( pageObj ) {
  var detailsPage = pageObj.getDetailsPage(orderDetailsTable);
  if( !detailsPage )
      return;
  var records = detailsPage.getAllRecords();
 
  // actual calculation. Multiply Quantity by UnitPrice and sum the results.
  // total = sum( Quantity * UnitPrice )
  var total = 0;
   records.forEach( function( r ) {
	total +=
           ( parseFloat( r.getFieldValue('totalPrice') ) ); // *
           // ( parseFloat( r.getFieldValue('UnitPrice') ) || 0 );
   });
 
   setOrderTotal( total, pageObj );
}


function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}



function nthIndex(str, pat, n){
    var L= str.length, i= -1;
    while(n-- && i++<L){
        i= str.indexOf(pat, i);
        if (i < 0) break;
    }
    return i;
}



function getAgentStatus (agent) {

var agentStatusApiCallUrl = 'N/A';
var agentStatusReply = 'N/A';
var agentStatus='N/A';
var pauseCode = 'N/A';
var pauseReason='N/A';

agentStatusApiCallUrl =  'http://10.41.2.204/vicidial/non_agent_api.php?source=crm&user=tsikasapi&pass=ggm'+
								 '&function=agent_status&agent_user='+
								 agent;

agentStatusReply = httpGet(agentStatusApiCallUrl);
agentStatus=agentStatusReply.substring(0, nthIndex(agentStatusReply,'|',1));
pauseReason=agentStatusReply.substring(nthIndex(agentStatusReply,'|',9)+1, nthIndex(agentStatusReply,'|',10));
if (pauseReason!=='')
		pauseReason='('+pauseReason+')';
		
pauseCode=agentStatusReply.substring(nthIndex(agentStatusReply,'|',8)+1, nthIndex(agentStatusReply,'|',9));


 if (agentStatus.substring(0,5)=='ERROR') 
		agentStatus = 'ΑΠΟΣΥΝΔΕΣΗ ΑΠΟ DIALER';
 else 
	if (pauseReason=='(DIAL)')
		  agentStatus = 'ΚΑΛΕΙΤΑΙ ΑΡΙΘΜΟΣ ΤΗΛΕΦΩΝΟΥ';
	else
		if (pauseReason=='(DISPO)')
			  agentStatus = 'ΣΕ ΑΝΑΜΟΝΗ ΑΠΟΤΕΛΕΣΜΑΤΟΣ ΚΛΗΣΗΣ (DISPO)';
	else 
		if (agentStatus=='READY')  
			  agentStatus='ΕΝΕΡΓΟΣ';
	else
		if (agentStatus=='PAUSED') 
				{
					if (pauseCode=='') pauseCode='ΑΝΑΜΟΝΗ ΓΙΑ ΛΟΓΟ';
					agentStatus='ΣΕ ΠΑΥΣΗ'+'->'+pauseCode+' '+pauseReason;
				}
		else 
			if (agentStatus=='INCALL') 
					agentStatus='ΣΕ ΚΛΗΣΗ';
 return agentStatus;
}