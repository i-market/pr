<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(0 < (count($arResult['ITEMS']))):
?>
	<hr class="featurette-divider">
	
	<div class="container">
		<?foreach($arResult['ITEMS'] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			
			$numItem = $key + 1;
			($numItem < 10) ? $numberService = '0'.$numItem : $numberService = $numItem;
			
			$class1 = 'col-md-12';
			
			if(($numItem % 2) != 0):
				if($arItem['PREVIEW_PICTURE']['SRC']):
					$class1 = 'col-md-7';
					$class2 = 'col-md-5';
				endif;
			else:
				if($arItem['PREVIEW_PICTURE']['SRC']):
					$class1 = 'col-md-7 push-md-5';
					$class2 = 'col-md-5 pull-md-7';
				endif;
			endif;
			?>
			
			<div class="row featurette" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="<?=$class1;?>">
					<div class="row">
						<div class="col-1 mr-3">
							<span class="badge badge-header"><?=$numberService;?></span>
						</div>
						
						<div class="col">
							<h2 class="text-center-header-service">
								<?=$arItem['NAME'];?>
							</h2>
						</div>
					</div>
					
					<?if($arItem['PREVIEW_TEXT']):?>
						<p>
							<?=$arItem['PREVIEW_TEXT'];?>
						</p>
					<?endif;?>
				</div>
				
				<?if($arItem['PREVIEW_PICTURE']['SRC']):?>
					<div class="<?=$class2;?>">
						<img 
							class="featurette-image img-fluid mx-auto" 
							src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" 
							alt="<?=$arItem['NAME'];?>"
						/>
					</div>
				<?endif;?>
			</div>
			
			<hr class="featurette-divider">
		<?endforeach;?>
	</div>
<?endif;?>