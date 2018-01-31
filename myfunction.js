function selecttype(val) {
	
	if(val==4){
  $('.influencer').removeClass('hidden');
	} 
	else{
		$('.influencer').addClass('hidden');
	}
	
}
function selectdonationtype(val) {
	
if(val==1 || val==2 || val==4){
  $('.weight').removeClass('hidden');
  $('.money').addClass('hidden');
  $('.money').removeClass('form-control');
	} 
	else{
		$('.money').removeClass('hidden');
		$('.weight').addClass('hidden');
		$('.weight').removeClass('form-control');
	}
	
}
