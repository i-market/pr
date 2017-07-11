<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

	foreach($arResult['ITEMS'] as $key => $arItem):
		$imgResize = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>60, 'height'=>60), BX_RESIZE_IMAGE_EXACT, false);
		$arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $imgResize['src'];
	endforeach;
?>