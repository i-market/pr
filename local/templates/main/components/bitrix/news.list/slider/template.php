<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?for($i = 0; $i < count($arResult["ITEMS"]); $i++):?>
			<li data-target="#carouselIndicators" data-slide-to="<?=$i?>"<?if($i == 0){?> class="active"<?}?>></li>
		<?endfor;?>
	</ol>
	
	<div class="carousel-inner" role="listbox">
		<?foreach($arResult['ITEMS'] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			
			if(!$arItem['PREVIEW_PICTURE']['SRC']) continue;
			?>
			<div class="carousel-item<?if($key == 0){?> active<?}?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<img 
					class="d-block" 
					src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" 
					alt="<?=$arItem['NAME']?>"
				/>
				
				<div class="carousel-caption d-sm-inline-block">
					<p class="col-sm-4"><?=$arItem['NAME']?></p>
				</div>
			</div>
		<?endforeach;?>
	</div>
				
	<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Назад</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Вперед</span>
	</a>
</div>