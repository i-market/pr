<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if(0 < count($arResult['ITEMS'])):
	$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
	<hr class="featurette-divider">
	<div class="mt-5 mb-5">
		<div class="container">
			<div class="row">
				<div id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID']);?>">
					<div class="page-title">
						<h1><?=$arResult['ITEMS'][0]['NAME'];?></h1>
					</div>
					
					<?if($arResult['ITEMS'][0]['PREVIEW_TEXT']):?>
						<div class="legal-content">
							<?=$arResult['ITEMS'][0]['PREVIEW_TEXT'];?>
						</div>
					<?endif;?>
				</div>
			</div>
		</div>
	</div>
<?endif;?>