<?php
require_once 'lib/nusoap.php';
$soap = new SoapClient('http://www.learnwebservices.com/services/hello?WSDL');
$response = $soap->SayHello(array(
    'HelloRequest' => array(
        'Name' => $_GET['name']
    )
));
echo $response->HelloResponse->Message;

