<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	
	foreach($arResult['ITEMS'] as $key => $arItem):
		$imgResize = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>750, 'height'=>265), BX_RESIZE_IMAGE_EXACT, false);
		$arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $imgResize['src'];
		
		$tmpPreviewText = mb_substr($arItem["PREVIEW_TEXT"], 0, 450, 'UTF-8');
		$findProbel = mb_strripos($tmpPreviewText, ' ', 0, 'UTF-8');
									
		if(!$findProbel)
		{
			$numStartSearch = 450;
			$addSymbols = '';
		}
		else
		{
			$numStartSearch = $findProbel;
			$addSymbols = '...';
		}

		$arResult['ITEMS'][$key]['PREVIEW_TEXT'] = mb_substr($tmpPreviewText, 0, $numStartSearch, 'UTF-8') . $addSymbols;
	endforeach;
?>