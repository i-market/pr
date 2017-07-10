<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul class="navbar-nav m-auto">
		<?
		foreach($arResult as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
				continue;
		?>
			<?if($arItem["SELECTED"]):?>
				<li class="nav-item">
		            <a class="nav-link active" href="<?=$arItem["LINK"]?>">
		           		<?=$arItem["TEXT"]?>
		            </a>
		        </li>
			<?else:?>
				<li class="nav-item">
		            <a class="nav-link" href="<?=$arItem["LINK"]?>">
		           		<?=$arItem["TEXT"]?>
		           	</a>
		        </li>
			<?endif?>
			
		<?endforeach?>
	</ul>
<?endif?>