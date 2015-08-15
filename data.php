
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</html> 

<?php 
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;


function translateToLocal( $lncode, $text ){

        $tr = new TranslateClient();
 
        $resultTwo = $tr->setSource('en')->setTarget($lncode)->translate($text);
        return $resultTwo;
}



?>