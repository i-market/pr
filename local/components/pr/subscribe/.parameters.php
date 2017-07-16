<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"SUBSCRIBE_SUCCESS_TEXT" => Array(
			"NAME" => GetMessage("PROP_SUBSCRIBE_SUCCESS_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_SUBSCRIBE_SUCCESS_TEXT_DEFAULT"), 
		),
		"SUBSCRIBE_ERROR_TEXT" => Array(
			"NAME" => GetMessage("PROP_SUBSCRIBE_ERROR_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_SUBSCRIBE_ERROR_TEXT_DEFAULT"), 
		),
		"SUBSCRIBE_ALREADY_TEXT" => Array(
			"NAME" => GetMessage("PROP_SUBSCRIBE_ALREADY_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_SUBSCRIBE_ALREADY_TEXT_DEFAULT"), 
		),
		"SUBSCRIBE_BUTTON_TEXT" => Array(
			"NAME" => GetMessage("PROP_SUBSCRIBE_BUTTON_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_SUBSCRIBE_BUTTON_TEXT_DEFAUL"), 
		),
	)
);


?>