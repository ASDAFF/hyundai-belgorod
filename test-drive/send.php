<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$result=array();
CModule::IncludeModule('iblock');

$result=array();
if ($_POST)
{
	$city=$_POST['city'];
$dealer=$_POST['dealer'];
if ($city=='Липецк'){
	$dealer='-';
}

if ($city=='Липецк'){
	$SENDTO='infolip@hyundai-ringauto.ru, marketolog@hyundai-ringauto.ru';
}
if ($city=='Воронеж')
{
	if ($dealer=='Ринг Авто (левый берег)'){$SENDTO='zajavki@hyundai-ringauto.ru, marketolog@hyundai-ringauto.ru';}
	if ($dealer=='Ринг Авто (напротив сити-парка Град)'){$SENDTO='infosever@hyundai-ringauto.ru, marketolog@hyundai-ringauto.ru';}
	
}
//$SENDTO='zlojvirus@gmail.com';
$addarray = array(  					
  					"IBLOCK_ID"      => 69,
  					"PROPERTY_VALUES"=> array(
  						"mrorms"=>$_POST['mrOrms'],
  						"car"=>$_POST['car'],
  						"city"=>$city,
  						"dealer"=>$dealer,
  						"email"=>$_POST['email'],
  						"phone"=>$_POST['phone'],
  						"surname"=>$_POST['surname']  						
  					),
  					"NAME" => $_POST['name'],   					
  			);
			$el = new CIBlockElement;
  			if($id = $el->Add($addarray))
  			{
  				$cEvFields=array(
  						"mrorms"=>$_POST['mrOrms'],
  						"car"=>$_POST['car'],
  						"dealer"=>$dealer,
  						"city"=>$city,
  						"email"=>$_POST['email'],
  						"phone"=>$_POST['phone'],
  						"surname"=>$_POST['surname'],
  						"name"=>$_POST['name'],
  						"SENDTO"=>$SENDTO						
  				);
  				$CEvent = new CEvent; 
				if ($CEvent->SendImmediate('TESTDRIVE', array('s1'), $cEvFields))
				{
					$result['code']=1;
					$result['text']='Заявка успешно создана';

				}else
				{
					$result['code']=0;//техническая ошибка отправки сообщения
					$result['text']='техническая ошибка отправки сообщения';
				}
  			}else
  			{
  				$result['code']=0;//техническая ошибка записи
  				$result['text']='техническая ошибка записи';
  			}
		
		echo json_encode($result);
}


?>