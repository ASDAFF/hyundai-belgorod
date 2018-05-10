<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	CModule::IncludeModule("iblock");

	$xml_url='http://turbodealer.ru/export/205456_avito.xml';
	$iblock=16;
	$log=array();

	$iterator=0;
	$result = CIBlockElement::GetList(array("ID"=>"ASC"), array('IBLOCK_ID' => $iblock));//удаляем все что было
    while($element = $result->Fetch()){
        CIBlockElement::Delete($element['ID']);
        $iterator++;
    }
    $log[]="Удалено старых элементов: ".$iterator;
	$xml = file_get_contents($xml_url);
	if (!$xml){$log[]="Ошибка: не могу получить XML файл";}
	$xml = new SimpleXMLElement($xml);	
	$xml=(array)$xml;
	foreach($xml["Ad"] as $node){
		$item=(array)$node;
		$PROP = array();
		$PROP["vin"]=$item["VIN"];//вин
		$PROP["MILEAGE"]=$item["Kilometrage"];//пробег км.
		$PROP["COLOR"]=$item["Color"];
		$PROP["PHONE"]=$item["ContactPhone"];
		$PROP["FUEL_TYPE"]=$item["FuelType"];
		$PROP["GRAR_TYPE"]=$item["DriveType"];
		$PROP["TRANSMISS"]=$item["Transmission"];
		$PROP["CAPACITY"]=$item["EngineSize"];
		$PROP["POWER"]=$item["Power"];
		$PROP["STREET"]=$item["Street"];	
		$PROP["YEAR"]=$item["Year"];
		$PROP["MODEL"]=$item["Model"];
		$PROP["MARK"]=$item["Make"];
		$PROP["DOORS"]=$item["Doors"];//количество дверей
		$PROP["CUZOV"]=$item["BodyType"];
		$PROP["NEW_PRICE"]=$item["Price"];
		$PROP["description"]=$item["Description"];
			
		if ($item["Owners"]==1){$owners=58;}
		if ($item["Owners"]==2){$owners=59;}
		if ($item["Owners"]==3){$owners=60;}
		if ($item["Owners"]>3){$owners=61;}
		if ($owners){$PROP["COUNT_USER"]=$owners;}		
		$images=(array)$item["Images"];
		$PROP["SLIDER"]=array();
		foreach ($images["Image"] as &$image) {
			$image=(array)$image;
			$PROP["SLIDER"][]=$image["@attributes"]["url"];
		}
		$ADD=array(
			"NAME"=>implode(" ",array($PROP["MARK"], $PROP["MODEL"])),
			"CODE"=>$PROP["vin"],
			"PROPERTY_VALUES"=>$PROP,
			"ACTIVE"=>"Y",
			"IBLOCK_ID"=>$iblock,
			"DETAIL_TEXT"=>$item["Description"]
		);
		
		$el = new CIBlockElement;
  		if($id = $el->Add($ADD)){}
  		


	}	
?>