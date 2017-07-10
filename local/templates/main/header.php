<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Bitrix\Main\Localization\Loc::loadMessages(__FILE__); // Для локализации
$assetInstance = Bitrix\Main\Page\Asset::getInstance(); // Для подключения js/css/string

$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-reboot.css');
$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-grid.css');
$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/custom.css');

$assetInstance->addString('<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>');
$assetInstance->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>');
$assetInstance->addString('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>');
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 col-xl-12">
					<nav class="navbar navbar-toggleable-md fixed-top bg-faded navbar-light">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-logo" href="/">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/header_title.php"
								)
							);?>
						</a>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"main_menu",
								Array(
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "",
									"DELAY" => "N",
									"MAX_LEVEL" => "1",
									"MENU_CACHE_GET_VARS" => array(""),
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "Y",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"ROOT_MENU_TYPE" => "top",
									"USE_EXT" => "N"
								)
							);?>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 ml-0 pl-0">
							<span class="navbar-text">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/include/header_phone.php"
									)
								);?>
							</span>
							<a class="navbar-brand" href="https://www.facebook.com/lada.shcherbakova" target="_blank">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/facebook.png">
							</a>
							<a class="navbar-brand" href="mailto:ladapr01@gmail.com">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/email.png">
							</a>  
						</div>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="container-fluid mtn-5">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"slider",
						Array(
							"ACTIVE_DATE_FORMAT" => "",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("", ""),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "Content",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "10",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => "",
							"PAGER_TITLE" => "",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("", ""),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "SORT",
							"SORT_BY2" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_ORDER2" => "ASC"
						)
					);?>
				</div>
			</div>
		</div>
	
						