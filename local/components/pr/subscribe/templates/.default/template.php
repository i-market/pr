<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<form id="subscribe" class="form-inline mt-4">
	<input type="hidden" name="mode" value="subscribe" />
	<input type="hidden" name="noRbt" value="" />
	
	<div id="subscribe-msg-success">
		<?=$arResult['SUCCESS_TEXT'];?>
	</div>
	
	<div id="subscribe-msg-error">
		<?=$arResult['ERROR_TEXT'];?>
	</div>
	
	<div id="subscribe-msg-already">
		<?=$arResult['ALREADY_TEXT'];?>
	</div>
	
	<label class="sr-only" for="inlineFormInput">Email</label>
	<input name="subscribeEmail" type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="subscribeEmail" placeholder="Email">
	
	<div class="subscribe-legal">
		Нажимая на кнопку "<?=$arResult['BUTTON_TEXT'];?>" Вы соглашаетесь на <a href="/legal/" target="_blank">обработку персональных данных</a>
	</div>
		
	<button type="submit" class="btn btn-primary mt-2"><?=$arResult['BUTTON_TEXT'];?></button>
</form>