<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
if(0 < count($arResult['ITEMS'][0])):
	$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	($arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC']) ? $class = 'col-md-7' : $class = 'col-md-12';
?>

	<hr class="featurette-divider">
	<div class="container marketing" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID']);?>">
		<div class="col">
			<h2 class="text-center-header">
				<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['BLOCK_TITLE']['VALUE']?>
			</h2>
		</div>
		
		<div class="row featurette">
			<div class="<?=$class;?>">
				<?if($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['BOLD_TITLE']['VALUE']):?>
					<p class="lead">
						<b><?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['BOLD_TITLE']['VALUE'];?></b>
					<p>
				<?endif;?>
				
				<?if($arResult['ITEMS'][0]['PREVIEW_TEXT']):?>
					<p>
						<?=$arResult['ITEMS'][0]['PREVIEW_TEXT'];?>
					</p>
				<?endif;?>
			</div>
			
			<?if($arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC']):?>
				<div class="col-md-5">
					<img 
						class="featurette-image img-fluid mx-auto" 
						src="<?=$arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC'];?>" 
						alt="<?=$arResult['ITEMS'][0]['NAME'];?>"
					/>
				</div>
			<?endif;?>
		</div>
	</div>
<?endif;?>