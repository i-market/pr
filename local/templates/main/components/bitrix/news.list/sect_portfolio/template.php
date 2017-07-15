<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(0 < count($arResult['ITEMS'])):
?>
	<hr class="featurette-divider">
	
	<div class="container">
		<div class="table-responsive mt-5 mb-1">
			<table class="table table-striped table-bordered table-hover table-sm table-portfolio">
				<thead class="thead-inverse">
					<tr>
						<th class="text-center">Компания</th>
						<th class="text-center">Сфера деятельности</th>
						<th class="text-center">Виды PR поддержки</th>
						<th class="text-center">Рекомендации</th>
					</tr>
				</thead>
				
				<tbody>
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						
						<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<td>
								<?if($arItem['DISPLAY_PROPERTIES']['URL']['VALUE']):?>
									<a href="<?=$arItem['DISPLAY_PROPERTIES']['URL']['VALUE'];?>" target="_blank">
										<?=$arItem["NAME"]?>
									</a>
								<?else:?>
									<?=$arItem["NAME"]?>
								<?endif;?>
							</td>
							<td>
								<?if($arItem['DISPLAY_PROPERTIES']['SPHERE']['VALUE']['TEXT']):?>
									<?=htmlspecialchars_decode($arItem['DISPLAY_PROPERTIES']['SPHERE']['VALUE']['TEXT']);?>
								<?endif;?>
							</td>
							<td>
								<?if($arItem['PREVIEW_TEXT']):?>
									<?=htmlspecialchars_decode($arItem['PREVIEW_TEXT']);?>
								<?endif;?>
							</td>
							<td>
								<?if($arItem['DISPLAY_PROPERTIES']['RECOMMEND']['VALUE']['TEXT']):?>
									<?=htmlspecialchars_decode($arItem['DISPLAY_PROPERTIES']['RECOMMEND']['VALUE']['TEXT']);?>
								<?endif;?>
							</td>
						</tr>
					<?endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	
	<hr class="featurette-divider">
<?endif;?>