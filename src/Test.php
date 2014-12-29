<?php
require_once "PWS_Soap_Objects/AuthorizeRequest.php";
require_once "PWS_Soap_Objects/CaptureRequest.php";
require_once "PWS_Soap_Objects/PurchaseRequest.php";
require_once "PWS_Soap_Objects/CancelRequest.php";
require_once "PWS_Soap_Objects/PWS_Client.php";
require_once "PWS_Json_Objects/PWS_Apigee_Translator.php";
require_once "PWS_Json_Objects/TransmitJson.php";
//Flag for outputting raw soap request for debugging
$debugFlag = false;
$sendToApigee = true;

//***Sets up the client with correct headers***//
$pwsClient = new PWS_Client();
$soap_client = $pwsClient->getSoapClient();
//********************************************//

//**************Sends an echo test**************//
    date_default_timezone_set("MST");
    $echoString = 'This is my echo test: ' . date('c');
    $echoTest = array('Test' => $echoString);
    try {
        echo("Sending echo test...");
        $soapResponse = $soap_client->Echo($echoTest);
    } catch (SoapFault $e) {
        echo "Error: {$e->faultstring}</br>";
    }
    $echoResponse = $soapResponse->Response;
    if($echoResponse = $echoString){
        echo 'Successful echo</br>';
    }

if($debugFlag){
    echo "</br>REQUEST:</br>" . htmlentities($soap_client->__getLastRequest()) . "</br>";
    echo "</br>RESPONSE: </br>" . htmlentities($soap_client->__getLastResponse()) . "</br>";
}
//********************************************//


//************Send an Authorize request************//
echo "</br>****************Authorize testing****************</br>";
$auth = new AuthorizeRequest();
$authArray = $auth->createRequest();


$translator = new \PWS_Json_Objects\PWS_Apigee_Translator();
if($sendToApigee){
    $jsonObject = $translator->translateRequest($auth);
    $sendJson = new \PWS_Json_Objects\TransmitJson();
    $sendJson->sendAuth($jsonObject);
}


echo("</br>Sending Authorize Soap Request to PWS...</br>");
try {
    $soapResponse = $soap_client->Authorize($authArray);
    echo $soapResponse->TransactionStatus . "</br>";
    $authCode = $soapResponse->AuthorizationCode;
}catch (SoapFault $e) {
    echo "Error: $e->faultstring</br>";
}

//This will output the raw xml request and response if the debug flag is true
if($debugFlag){
    echo "REQUEST:</br>" . htmlentities($soap_client->__getLastRequest()) . "</br>";
    echo "RESPONSE: </br>" . htmlentities($soap_client->__getLastResponse()) . "</br>";
}

echo "</br>****************Authorize testing complete****************</br>";
//*************************************************//

//*****************Send a Capture******************//
echo "</br>****************Capture testing****************</br>";
$capture = new CaptureRequest();
$capture->setAuthorizationCode($authCode);
$capture->setOriginalAmt($auth->getTransactionAmt());
$capture->setOriginalRefNum($auth->getReferenceNumber());
$capture->setCaptureAmt($auth->getTransactionAmt());
$captureArray = $capture->createRequest();

if($sendToApigee){
    $jsonObject = $translator->translateRequest($capture);
    $sendJson = new \PWS_Json_Objects\TransmitJson();
    $sendJson->sendCapture($jsonObject);
}

try{
    echo '</br>Sending Capture to PWS for previous authorize </br>';
    $soapResponse = $soap_client->Capture($captureArray);
    echo $soapResponse->TransactionStatus . "</br>";
}catch (SoapFault $e) {
    echo "Error: $e->faultstring</br>";
}

//This will output the raw xml request and response if the debug flag is true
if($debugFlag){
    echo "REQUEST:</br>" . htmlentities($soap_client->__getLastRequest()) . "</br>";
    echo "RESPONSE: </br>" . htmlentities($soap_client->__getLastResponse()) . "</br>";
}
echo "</br>****************Capture testing complete****************</br>";
//*************************************************//


//************Send an Purchase request************//
echo "</br>****************Purchase testing****************</br>";
$purchase = new PurchaseRequest();
$purchaseArray = $auth->createRequest();


if($sendToApigee){
    $jsonObject = $translator->translateRequest($purchase);
    $sendJson = new \PWS_Json_Objects\TransmitJson();
    $sendJson->sendPurchase($jsonObject);
}

try {
    echo("</br>Sending Purchase Request to PWS...</br>");
    $soapResponse = $soap_client->Purchase($purchaseArray);
    echo $soapResponse->TransactionStatus . "</br>";

}catch (SoapFault $e) {
    echo "Error: $e->faultstring</br>";
}

//This will output the raw xml request and response if the debug flag is true
if($debugFlag){
    echo "REQUEST:</br>" . htmlentities($soap_client->__getLastRequest()) . "</br>";
    echo "RESPONSE: </br>" . htmlentities($soap_client->__getLastResponse()) . "</br>";
}
echo "</br>****************Purchase testing complete****************</br>";
//*************************************************//


//*****************Send an Authorize then a Cancel request****************//
echo "</br>****************Cancel(auth) testing****************</br>";
$auth = new AuthorizeRequest();
$auth->setTransactionAmt('47.00');
$auth->setPrimaryAccountNumber('4445222299990007');
$authArray = $auth->createRequest();
echo("</br>Sending Authorize Request to PWS...</br>");
try {
    $soapResponse = $soap_client->Authorize($authArray);
    echo $soapResponse->TransactionStatus . "</br>";
    $authCode = $soapResponse->AuthorizationCode;
}catch (SoapFault $e) {
    echo "Error: $e->faultstring</br>";
}

$cancel = new CancelRequest();
$cancel->setAuthorizationCode($authCode);
$cancel->setOriginalAmt($auth->getTransactionAmt());
$cancel->setOriginalRefNum($auth->getReferenceNumber());
$cancel->setOriginalTimestamp($auth->getTransactionTimestamp());
$cancel->setOriginalSequenceNumber($auth->getSequenceNumber());
$cancel->setCancelTransactionType('authorize');
$cancel->setOriginalSystemTraceId($auth->getSystemTraceId());
$cancel->setReplacementAmount('0.00');
$cancel->setPrimaryAccountNumber('4445222299990007');
$cancel->getMerchant()->getSoftware()->setTerminalId(1);
$cancelArray = $cancel->createRequest();

if($sendToApigee){
    $jsonObject = $translator->translateRequest($cancel);
    $sendJson = new \PWS_Json_Objects\TransmitJson();
    $sendJson->sendCancel($jsonObject);
}

try{
    echo 'Sending Cancel to PWS for previous authorize </br>';
    $soapResponse = $soap_client->Cancel($cancelArray);
    echo $soapResponse->TransactionStatus . "</br>";
}catch (SoapFault $e) {
    echo "Error: $e->faultstring</br>";
}
//This will output the raw xml request and response if the debug flag is true
if($debugFlag){
    echo "REQUEST:</br>" . htmlentities($soap_client->__getLastRequest()) . "</br>";
    echo "RESPONSE: </br>" . htmlentities($soap_client->__getLastResponse()) . "</br>";
}

echo "</br>****************Cancel testing complete****************</br>";
//*************************************************//

echo "</br></br></br></br>"
?>