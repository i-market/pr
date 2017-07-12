<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<hr class="featurette-divider">

<div class="container">
	<div class="row">
		<div class="col-sm-12 blog-main mb-3">
			<div class="blog-post">
				<h2 class="text-center-header-blog">
					<?=$arResult["NAME"];?>
				</h2>
				
				<?if($arResult["DISPLAY_ACTIVE_FROM"]):?>
            		<p class="blog-post-meta"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></p>
            	<?endif;?>
				
				<?if($arResult["DETAIL_TEXT"]):?>
					<p>
						<?=$arResult["DETAIL_TEXT"];?>
					</p>
				<?endif;?>
				
				<p>
					<a href="<?=$arResult["LIST_PAGE_URL"];?>">
						<?=\Bitrix\Main\Localization\Loc::getMessage('BUTTON_TEXT_RETURN_TO_BLOG');?>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>