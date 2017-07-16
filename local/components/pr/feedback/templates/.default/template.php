<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="container">
	<div class="jumbotron-contacts text-center">
		<div class="col-sm-12">
			<h1 class="text-center-header">
				<?=$arResult['TITLE'];?>
			</h1>
			
			<?if($arResult['PATH_TEXT']):?>
				<p class="lead">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => $arResult['PATH_TEXT']
						)
					);?>
				</p>
			<?endif;?>
		</div>
	</div>
</div>

<div class="container text-center col-sm-6 mb-5">
	<form id="feedback">
		<input type="hidden" name="mode" value="feedback" />
		<input type="hidden" name="noRbt" value="" />
		
		<div id="feedback-msg-success">
			<?=$arResult['SUCCESS_TEXT'];?>
		</div>
		
		<div id="feedback-msg-error">
			<?=$arResult['ERROR_TEXT'];?>
		</div>
		
		<div class="form-group row">
			<div class="col-12">
				<input type="text" name="userName" class="form-control<?if(in_array('NAME', $arResult['REQUIRE_ITEMS'])){?> required<?}?>" placeholder="<?=\Bitrix\Main\Localization\Loc::getMessage('USER_NAME');?>">
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-12">
				<input type="email" name="userEmail" class="form-control<?if(in_array('EMAIL', $arResult['REQUIRE_ITEMS'])){?> required<?}?>" placeholder="<?=\Bitrix\Main\Localization\Loc::getMessage('USER_EMAIL');?>">
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-12">
				<input type="tel" name="userPhone" class="form-control phone-mask<?if(in_array('PHONE', $arResult['REQUIRE_ITEMS'])){?> required<?}?>" placeholder="<?=\Bitrix\Main\Localization\Loc::getMessage('USER_PHONE');?>">
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-12">
				<textarea name="userText" class="form-control<?if(in_array('TEXT', $arResult['REQUIRE_ITEMS'])){?> required<?}?>" placeholder="<?=\Bitrix\Main\Localization\Loc::getMessage('USER_MESSAGE');?>" rows="5"></textarea>
			</div>
		</div>
		
		<div class="feedback-legal">
			Нажимая на кнопку "<?=$arResult['BUTTON_TEXT'];?>" Вы соглашаетесь на <a href="/legal/" target="_blank">обработку персональных данных</a>
		</div>
		
		<p>
			<button type="submit" class="btn btn-primary btn-md">
				<?=$arResult['BUTTON_TEXT'];?>
			</button>
		</p>
	</form>
</div>