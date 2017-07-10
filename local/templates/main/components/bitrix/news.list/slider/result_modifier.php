<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

	foreach($arResult['ITEMS'] as $key => $arItem):
		$imgResize = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>1920, 'height'=>500), BX_RESIZE_IMAGE_EXACT, false);
		$arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $imgResize['src'];
	endforeach;
?>