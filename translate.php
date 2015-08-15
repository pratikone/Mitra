
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</html> 

<?php 
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;

//$lncode='en';
$lncode='kn'; //kannada uncomment for translation

function translateToLocal( $languagecode, $text ){

	if($languagecode == 'en') //no conversion in case of english to english
		return $text;
		
        $tr = new TranslateClient();
 
        $resultTwo = $tr->setSource('en')->setTarget($languagecode)->translate($text);
        return $resultTwo;
}



?>