<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
	Bitrix\Main\Localization\Loc::loadMessages(__FILE__); // Локализация
?>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<span class="header-footer">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/footer_title.php"
								)
							);?>
						</span>
						
						<p class="text-footer">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/footer_text.php"
								)
							);?>
						</p>
					</div>
					<div class="col">
						<ul class="flex-column">
							<span class="header-footer">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/include/footer_menu_title.php"
									)
								);?>
							</span>
							
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"bottom_menu",
								Array(
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "",
									"DELAY" => "N",
									"MAX_LEVEL" => "1",
									"MENU_CACHE_GET_VARS" => array(""),
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "Y",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"ROOT_MENU_TYPE" => "bottom",
									"USE_EXT" => "N"
								)
							);?>
						</ul>
					</div>
					<div class="col">
						<span class="header-footer">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/footer_subscribe_title.php"
								)
							);?>
						</span>
						
						<form class="form-inline mt-4">
							<label class="sr-only" for="inlineFormInput">Email</label>
							<input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Email">
							<button type="submit" class="btn btn-primary mt-2">Подписаться</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>