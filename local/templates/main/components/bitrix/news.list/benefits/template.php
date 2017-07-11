<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="container marketing">
	<div class="row">
		<div class="card-deck">
			<?foreach($arResult['ITEMS'] as $key => $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if($arItem['PREVIEW_PICTURE']['SRC']):?>
						<img 
							class="card-img-top" 
							src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" 
							alt="<?=$arItem['PREVIEW_TEXT']?>" 
							width="60" 
							height="60"
						/>
					<?endif;?>
					
					<?if($arItem['PREVIEW_TEXT']):?>
						<p class="text-center">
							<?=$arItem['PREVIEW_TEXT']?>
						</p>
					<?endif;?>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>