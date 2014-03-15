function onDeviceReady(){ 
	$(document).ready(function(){
              alert("i\'m working");        
                                       });
                      
}
/** Called when browser load this page*/ 
function init(){
document.addEventListener("deviceready", onDeviceReady, false); }
