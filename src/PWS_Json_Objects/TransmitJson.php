<?php
/**
Copyright (c) 2014 Vantiv, Inc. - All Rights Reserved.

Sample Code is for reference only and is solely intended to be used for educational purposes and is provided “AS IS” and “AS AVAILABLE” and without 
warranty. It is the responsibility of the developer to  develop and write its own code before successfully certifying their solution.  

This sample may not, in whole or in part, be copied, photocopied, reproduced, translated, or reduced to any electronic medium or machine-readable 
form without prior consent, in writing, from Vantiv, Inc.

Use, duplication or disclosure by the U.S. Government is subject to restrictions set forth in an executed license agreement and in subparagraph (c)(1) 
of the Commercial Computer Software-Restricted Rights Clause at FAR 52.227-19; subparagraph (c)(1)(ii) of the Rights in Technical Data and Computer 
Software clause at DFARS 252.227-7013, subparagraph (d) of the Commercial Computer Software--Licensing clause at NASA FAR supplement 16-52.227-86; 
or their equivalent.

Information in this sample code is subject to change without notice and does not represent a commitment on the part of Vantiv, Inc.  In addition to 
the foregoing, the Sample Code is subject to the terms and conditions set forth in the Vantiv Terms and Conditions of Use (http://www.apideveloper.vantiv.com) 
and the Vantiv Privacy Notice (http://www.vantiv.com/Privacy-Notice).
 */

namespace PWS_Json_Objects;

/**
 * Class TransmitJson
 * @package PWS_Json_Objects
 * This class is used to transmit the formatted JSON request to Apigee
 * and to also process the response.
 */
class TransmitJson {

    private $licenseid = '';//You can obtain a licenseid from the developer portal once you create an application. 
    private $apigeeCreditUrl = "https://apis.cert.vantiv.com/v1/credit/";
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
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", 'licenseid: ' . $this->licenseid));
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
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", 'licenseid: ' . $this->licenseid));
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
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", 'licenseid: ' . $this->licenseid));
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
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json", 'licenseid: ' . $this->licenseid));
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