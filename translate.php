<?php 
require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\TranslateClient;
if(isset($_SESSION['lang'])){
	$lncode = $_SESSION['lang'];
}
function translateToLocal( $languagecode, $text ){

	if($languagecode == 'en') //no conversion in case of english to english
		return $text;
		
        $tr = new TranslateClient();
 
        $resultTwo = $tr->setSource('en')->setTarget($languagecode)->translate($text);
        return $resultTwo;
}



?>