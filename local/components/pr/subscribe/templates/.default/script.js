$(document).ready(function(){
	$('#subscribe').on('submit', function(){
		var $form = $(this),
			$msgSuccess = $form.find('#subscribe-msg-success'),
			$msgError = $form.find('#subscribe-msg-error'),
			$msgAlready = $form.find('#subscribe-msg-already'),
			$email = $form.find('#subscribeEmail');
			valid = true;
		
		$email.removeClass('error');
		if(!$email.val()){
			$email.addClass('error');
			valid = false;
		}
			
		if(valid){
			$.ajax({
				url: '/local/ajax/ajax.php',
				method: 'POST',
				dataType: 'json',
				data: $form.serialize(),
				success: function(result){
					if(result.STATUS == 'OK'){
						$msgSuccess.show();
						$form[0].reset();
					}
					else if(result.STATUS == 'ALREADY'){
						$msgAlready.show();
					}
					else{
						$msgError.show();
					}
				}
			});
		}else{
			$msgSuccess.hide();
			$msgError.hide();
			$msgAlready.hide();
		}
		
		return false;
	});
});