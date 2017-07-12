<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if(0 < count($arResult['ITEMS'][0])):
	$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
	<div class="jumbotron" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID']);?>">
		<div class="container">
			<div class="col col-lg-12 col-md-7 col-sm-7">
				<?if($arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC']):?>
					<div class="col col-lg-12 col-md-7 col-sm-7 text-center">
						<img 
							src="<?=$arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC'];?>" 
							alt="<?=$arResult['ITEMS'][0]['NAME'];?>" 
							width="60" 
							height="60" 
							style="margin-bottom: 2rem"
						/>
					</div>
				<?endif;?>
				
				<?if($arResult['ITEMS'][0]['PREVIEW_TEXT']):?>
					<p class="text-center">
						<?=$arResult['ITEMS'][0]['PREVIEW_TEXT'];?>
					</p>
				<?endif;?>
				
				<?
					if(
					$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['URL_FOR_BUTTON']['VALUE']
					and
					$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['TEXT_FOR_BUTTON']['VALUE']
					):
				?>
					<p class="text-center">
						<a class="btn btn-primary btn-md" href="<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['URL_FOR_BUTTON']['VALUE'];?>" role="button">
							<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['TEXT_FOR_BUTTON']['VALUE'];?>
						</a>
					</p>
				<?endif;?>
			</div>
		</div>
	</div>
<?endif;?>