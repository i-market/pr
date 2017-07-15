<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as $key => $arItem):
	$siteCntHttp = mb_substr_count($arItem['DISPLAY_PROPERTIES']['URL']['VALUE'], "http");
	$siteCntHttps = mb_substr_count($arItem['DISPLAY_PROPERTIES']['URL']['VALUE'], "https");

	if( (0 < $siteCntHttp) or (0 < $siteCntHttps) ):
	elseif($arItem['DISPLAY_PROPERTIES']['URL']['VALUE']):
		$arResult['ITEMS'][$key]['DISPLAY_PROPERTIES']['URL']['VALUE'] = 'http://'.$arItem['DISPLAY_PROPERTIES']['URL']['VALUE'];
	else:endif;
endforeach;
?>