$(document).ready(function(){
	$('#feedback').on('submit', function(){
		var $form = $(this),
			$msgSuccess = $form.find('#feedback-msg-success'),
			$msgError = $form.find('#feedback-msg-error'),
			valid = true;
		
		$msgSuccess.hide();
		$msgError.hide();
		$form.find('.required').removeClass('error');
		$form.find('.required').each(function(){
			if(!$(this).val()){
				$(this).addClass('error');
				valid = false;
			}
		});
			
		if(valid){
			$.ajax({
				url: '/local/ajax/ajax.php',
				method: 'POST',
				dataType: 'json',
				data: $form.serialize(),
				success: function(result){
					console.log(result);
					if(result.STATUS == 'OK'){
						$msgSuccess.show();
						$form[0].reset();
					}else{
						$msgError.show();
					}
				}
			});
		}
		
		return false;
	});
});