<?
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Mail\Event;
use Bitrix\Main\Application;

\Bitrix\Main\Loader::includeModule('iblock');

$request = Application::getInstance()->getContext()->getRequest();

switch($request->get('mode')):
	case 'feedback':
		$noRobot = $request->getPost('noRbt');
		if($noRobot):
			exit(json_encode(Array(
	            'STATUS' => 'ERROR',
	            'MESSAGE' => 'Проверка на робота не пройдена!'
	        )));
		endif;
		
		$userName = $request->getPost('userName');
		$userEmail = $request->getPost('userEmail');
		$userPhone = $request->getPost('userPhone');
		$userText = $request->getPost('userText');
		
		$el = new CIBlockElement;
		$PROPS = array();
		$PROPS['USER_NAME'] = $userName;
		$PROPS['USER_EMAIL'] = $userEmail;
		$PROPS['USER_PHONE'] = $userPhone;
		
		$arLoadProductArray = Array(
			'IBLOCK_ID' 	  => IB_FEEDBACK,
			'ACTIVE'          => 'Y',
			'NAME'			  => 'Заявка '.date('d.m.Y H:i:s'),
			'PREVIEW_TEXT'    => $userText,
			'PROPERTY_VALUES' => $PROPS
		);
		
		if($el->Add($arLoadProductArray)):
			Event::send(array( 
			    'EVENT_NAME' => 'FEEDBACK_FORM', 
			    'LID' => SITE_ID, 
			    'C_FIELDS' => array( 
			        'NAME' => $userName,
			        'EMAIL' => $userEmail,
			        'PHONE' => $userPhone,
			        'TEXT' => $userText
			    ), 
			));
			
			exit(json_encode(Array(
	            'STATUS' => 'OK'
	        )));
		else:
			exit(json_encode(Array(
	            'STATUS' => 'ERROR',
	            'MESSAGE' => $el->LAST_ERROR
	        )));
		endif;
	break;
endswitch;
?>