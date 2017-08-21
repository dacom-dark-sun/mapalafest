$(document).ready(function(){

	$('#paymentCardRadio').change(function(){
		if($(this).is(":checked")) {

			$('#paymentBitcoin').hide();
			$('#paymentCard').show();
			
		}
	});

	$('#paymentBitcoinRadio').change(function(){
		if($(this).is(":checked")) {

			$('#paymentCard').hide();
			$('#paymentBitcoin').show();

		}
	});


});


function copy(selector){
  var $temp = $("<div>");
  $("body").prepend($temp);
  $temp.attr("contenteditable", true)
       .html($(selector).html()).select()
       .on("focus", function() { document.execCommand('selectAll',false,null) })
       .focus();
  document.execCommand("copy");
  $temp.remove();
}
