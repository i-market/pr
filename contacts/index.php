<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты и цены");
?><?$APPLICATION->IncludeComponent(
	"pr:feedback",
	"",
	Array(
		"FEEDBACK_BUTTON_TEXT" => "Отправить",
		"FEEDBACK_SUCCESS_TEXT" => "Спасибо, ваше сообщение отправлено!",
		"FEEDBACK_TITLE" => "Стоимость работ",
		"PATH_TO_INCLUDE" => "/include/feedback_text.php",
		"REQUIRE_INPUTS" => array("NAME","PHONE")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>