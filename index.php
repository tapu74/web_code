<?php

require 'facebook.php';

//create first instance 
$facebook=new Facebook(array {
'appId' => '574839005886478',
'secret' => 'b758921446b4bcf228f8a7e63e5bbc5e',
'cookie' => true
}
);

$session=$facebook->getSession();

if(!empty($session))
{
try {

$uid=$facebook->getUser();
$user=$facebook->api('/me');
}

catch (Exception $e) {}
}


echo "Hello";

?>
