<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	
	if($arResult['ITEMS'][0]['PREVIEW_PICTURE']['ID']):
		$imgResize = CFile::ResizeImageGet($arResult['ITEMS'][0]['PREVIEW_PICTURE']['ID'], array('width'=>60, 'height'=>60), BX_RESIZE_IMAGE_EXACT, false);
		$arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC'] = $imgResize['src'];
	endif;
?>