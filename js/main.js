$( document).bind( 'pageinit',function(event){
  $('#expand').bind("tap", function(e){
  	$('#expand').css("display","none");
  	$("#priceInfo").css("display","block");
  	});//end tap
  $('#hide').bind("tap",function(e){
  	$('#priceInfo').css("display","none");
  	$('#expand').css("display","block");
  });
});// end pageinit