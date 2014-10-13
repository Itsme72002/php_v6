<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/5/14
 * Time: 12:58 PM
 */

namespace PWS_Json_Objects;

/**
 * Class TransmitJson
 * @package PWS_Json_Objects
 * This class is used to transmit the formatted JSON request to Apigee
 * and to also process the response.
 */
class TransmitJson {

    private $apiKey = "6iqeNITAN7m6I7GSaDGn67xhpvRPtfHQ";
    private $apigeeCreditUrl = "http://vantiv-nonprod-dev.apigee.net/v1/credit/";
    public $debugFlag = false;


    /**
     * @param $jsonObject
     * Sends an Authorize request to apigee and processes the response.
     * If debug flag is set, it will output the raw JSON objects.
     */
    function sendAuth($jsonObject){
        $url = $this->apigeeCreditUrl."authorization?sp=1";
        $content = $jsonObject;

        echo("</br>Sending Authorize request to apigee...</br>");


        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", "apiKey: " . $this->apiKey));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);
       //var_dump($json_response);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $transactionStatus = json_decode($json_response);
        echo "Apigee trans status: " . $transactionStatus->AuthorizeResponse->TransactionStatus;
        if ( $status != 200 ) {
            die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        curl_close($curl);
        if($this->debugFlag){
            echo("</br> JSON REQUEST: " . $jsonObject . "</br>");
            echo "</br> JSON RESPONSE: " . $json_response . "</br>";
        }

    }


    /**
     * @param $jsonObject
     * Sends a Capture request to apigee and processes the response.
     * If debug flag is set, it will output the raw JSON objects.
     */
    function sendCapture($jsonObject){
        $url = $this->apigeeCreditUrl."authorizationcompletion?sp=1";
        $content = $jsonObject;

        echo("</br>Sending Capture request to apigee...</br>");

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", "apiKey: " . $this->apiKey));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $transactionStatus = json_decode($json_response);

        echo "Apigee trans status: " . $transactionStatus->AuthorizationCompletionResponse->TransactionStatus. "</br>";
        if ( $status != 200 ) {
            die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        curl_close($curl);
        if($this->debugFlag){
            echo("</br> JSON REQUEST: " . $jsonObject . "</br>");
            echo "</br> JSON RESPONSE: " . $json_response . "</br>";
        }
    }

       /**
     * @param $jsonObject
     * Sends an Purchase(sale) request to apigee and processes the response.
     * If debug flag is set, it will output the raw JSON objects.
     */
    function sendPurchase($jsonObject){
        $url = $this->apigeeCreditUrl."sale?sp=1";
        $content = $jsonObject;

        echo("</br>Sending Purchase request to apigee...</br>");

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", "apiKey: " . $this->apiKey));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);
        $transactionStatus = json_decode($json_response);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        echo "Apigee trans status: " . $transactionStatus->SaleResponse->TransactionStatus. "</br>";

        if ( $status != 200 ) {
            die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        curl_close($curl);
        if($this->debugFlag){
            echo("</br> JSON REQUEST: " . $jsonObject . "</br>");
            echo "</br> JSON RESPONSE: " . $json_response . "</br>";
        }
    }


    /**
     * @param $jsonObject
     * Sends an Purchase(sale) request to apigee and processes the response.
     * If debug flag is set, it will output the raw JSON objects.
     */
    function sendCancel($jsonObject){
        $url = $this->apigeeCreditUrl."reversal?sp=1";
        $content = $jsonObject;

        echo("</br>Sending Cancel(reversal) request to apigee...</br>");

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", "apiKey: " . $this->apiKey));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);
        $transactionStatus = json_decode($json_response);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);


        //var_dump($transactionStatus);
        echo "Apigee trans status: " . $transactionStatus->ReverseResponse->TransactionStatus . "</br>";

        if ( $status != 200 ) {
            die("</br>Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        curl_close($curl);
        if($this->debugFlag){
            echo("</br> JSON REQUEST: " . $jsonObject . "</br>");
            echo "</br> JSON RESPONSE: " . $json_response . "</br>";
        }

    }

} 