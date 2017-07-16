<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

// Значения по умолчанию.
$arResult['TITLE'] = GetMessage("BLOCK_TITLE");
$arResult['PATH_TEXT'] = '';
$arResult['REQUIRE_ITEMS'] = '';
$arResult['SUCCESS_TEXT'] = GetMessage("FORM_SUCCESS_MSG");
$arResult['ERROR_TEXT'] = GetMessage("FORM_ERROR_MSG");
$arResult['BUTTON_TEXT'] = GetMessage("FORM_BUTTON_TEXT");

// Проверяем и выставляем выбранные параметры.
if($arParams['FEEDBACK_TITLE'])
	$arResult['TITLE'] = $arParams['FEEDBACK_TITLE'];

if($arParams['PATH_TO_INCLUDE'])
	$arResult['PATH_TEXT'] = $arParams['PATH_TO_INCLUDE'];

if(is_array($arParams['REQUIRE_INPUTS']))
	$arResult['REQUIRE_ITEMS'] = $arParams['REQUIRE_INPUTS'];

if($arParams['FEEDBACK_SUCCESS_TEXT'])
	$arResult['SUCCESS_TEXT'] = $arParams['FEEDBACK_SUCCESS_TEXT'];

if($arParams['FEEDBACK_BUTTON_TEXT'])
	$arResult['BUTTON_TEXT'] = $arParams['FEEDBACK_BUTTON_TEXT'];

// Подключаем шаблон
$this->IncludeComponentTemplate();
?>