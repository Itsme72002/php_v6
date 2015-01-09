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
    private $licenseid = '572d606c967f412cb8d840e38fb48010$$#$$MphfoMed030iGRXOd6pBhDzGQnzEMmz7$$#$$2015-11-26$$#$$dev_key$$#$$SHA512withRSA$$#$$RSA$$#$$1$$#$$52BC72E18D55CC77AE2DE3C27C0AFE6C0FCE3E3E6C1638EE824E5DB7775ADBBB616D82127D46DF9272D6A39ABC6BA8AD6797000A52F769C982B5360C06CED1FFA8FABA0DEA70E1CD77DC4DAF912E81319538857CAABE16DB6C412AF478BC059B29232337AE09020069B96E741982FB5E6BC053E98FE7C33789288CAA6A9883C0D2380DD1812FCF2681A8B31545B97DD0736EB3ECBD9329F144CDB93C35780559DB6219604ADB3F5A8DC57E06CFD715FFCECD3CB65DE7BFDA065D4DB3BDC84B7E0FD66116C71AC41E0B875BA18C742A8ECE9E690AC37457DD43845F5C64EA00BF7B585A6FCF75A0F398026CD79C74C3C946C11BAFD1404997917C5592B91E8415';
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