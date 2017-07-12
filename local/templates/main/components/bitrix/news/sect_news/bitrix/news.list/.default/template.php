<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(0 < count($arResult['ITEMS'])):
	foreach($arResult['ITEMS'] as $key => $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<hr class="featurette-divider">
		
		<div class="row justify-content-md-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="col col-lg-8">
				<div class="card-blog">
					<?if($arItem['PREVIEW_PICTURE']['SRC']):?>
						<img 
							class="card-img" 
							src="<?=$arItem['PREVIEW_PICTURE']["SRC"];?>" 
							alt="<?=$arItem['NAME'];?>"
						/>
					<?else:?>
						<img 
							class="card-img" 
							src="<?=BLOG_IMG_EMPTY?>" 
							alt="<?=$arItem['NAME'];?>"
						/>
					<?endif;?>
					
					<div class="card-img-overlay">
						<h4 class="card-title-blog">
							<?if($arItem['DETAIL_TEXT']):?>
								<a class="blog-title" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
									<?=$arItem['NAME'];?>
								</a>
							<?else:?>
								<a class="blog-title" href="javascript:">
									<?=$arItem['NAME'];?>
								</a>
							<?endif;?>
						</h4>
					</div>
				</div>
				<div class="card-block">
					<p class="card-text">
						<?=$arItem['PREVIEW_TEXT'];?>
					</p>
					
					<?if($arItem['DETAIL_TEXT']):?>
						<p class="text-center">
							<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="btn btn-primary btn-md">
								<?=\Bitrix\Main\Localization\Loc::getMessage('BUTTON_TEXT_READ_DETAIL');?>
							</a>
						</p>
					<?endif;?>
				</div>
			</div>
		</div>
	<?endforeach;?>
	
	<div class="blog-pagination">
		<?=$arResult["NAV_STRING"];?>
	</div>
<?endif;?>