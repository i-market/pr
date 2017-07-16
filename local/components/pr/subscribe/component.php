<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

// Значения по умолчанию.
$arResult['SUCCESS_TEXT'] = GetMessage("FORM_SUCCESS_MSG");
$arResult['ERROR_TEXT'] = GetMessage("FORM_ERROR_MSG");
$arResult['ALREADY_TEXT'] = GetMessage("FORM_ALREADY_MSG");
$arResult['BUTTON_TEXT'] = GetMessage("FORM_BUTTON_TEXT");

// Проверяем и выставляем выбранные параметры.
if($arParams['SUBSCRIBE_SUCCESS_TEXT'])
	$arResult['SUCCESS_TEXT'] = $arParams['SUBSCRIBE_SUCCESS_TEXT'];

if($arParams['SUBSCRIBE_ERROR_TEXT'])
	$arResult['ERROR_TEXT'] = $arParams['SUBSCRIBE_ERROR_TEXT'];

if($arParams['SUBSCRIBE_ALREADY_TEXT'])
	$arResult['ALREADY_TEXT'] = $arParams['SUBSCRIBE_ALREADY_TEXT'];

if($arParams['SUBSCRIBE_BUTTON_TEXT'])
	$arResult['BUTTON_TEXT'] = $arParams['SUBSCRIBE_BUTTON_TEXT'];

// Подключаем шаблон
$this->IncludeComponentTemplate();
?>