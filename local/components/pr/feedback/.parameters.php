<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"FEEDBACK_TITLE" => Array(
			"NAME" => GetMessage("PROP_FEEDBACK_TITLE"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_FEEDBACK_TITLE_DEFAULT"), 
		),
		"PATH_TO_INCLUDE" => Array(
			"NAME" => GetMessage("PROP_PATH_TO_INCLUDE"), 
			"PARENT" => "BASE",
			"TYPE" => "FILE",
			"FD_EXT" => "php",
			"FD_UPLOAD" => true,
		),
		"REQUIRE_INPUTS" => Array(
			"NAME" => GetMessage("PROP_REQUIRE_INPUTS"), 
			"PARENT" => "BASE",
			"TYPE" => "LIST",
			"VALUES" => Array(
				"NAME"  => GetMessage("PROP_REQUIRE_INPUT_NAME_VAL"),
				"EMAIL" => GetMessage("PROP_REQUIRE_INPUT_EMAIL_VAL"),
				"PHONE" => GetMessage("PROP_REQUIRE_INPUT_PHONE_VAL"),
				"TEXT" => GetMessage("PROP_REQUIRE_INPUT_TEXT_VAL"),
			),
			"ADDITIONAL_VALUES" => "N",
			"MULTIPLE" => "Y",
			"SIZE" => 4,
		),
		"FEEDBACK_SUCCESS_TEXT" => Array(
			"NAME" => GetMessage("PROP_FEEDBACK_SUCCESS_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_FEEDBACK_SUCCESS_TEXT_DEFAULT"), 
		),
		"FEEDBACK_ERROR_TEXT" => Array(
			"NAME" => GetMessage("PROP_FEEDBACK_ERROR_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_FEEDBACK_ERROR_TEXT_DEFAULT"), 
		),
		"FEEDBACK_BUTTON_TEXT" => Array(
			"NAME" => GetMessage("PROP_FEEDBACK_BUTTON_TEXT"), 
			"PARENT" => "BASE",
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("PROP_FEEDBACK_BUTTON_TEXT_DEFAUL"), 
		),
	)
);


?>