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
require_once '/PWS_Soap_Objects/PWS_Client.php';
require_once '/PWS_Soap_Objects/AuthorizeRequest.php';
require_once '/Application.php';
require_once '/Transaction.php';
require_once '/Terminal.php';
require_once '/Merchant.php';
require_once '/Card.php';
require_once '/ApigeeObject.php';

class PWS_Apigee_Translator {
    private $username = 's.MID2.PAY.WS.NP';
    private $password = 'drUdR9fR';


    function translateRequest($transactionRequest){

        if(get_class($transactionRequest) == 'AuthorizeRequest'){
            return $this->translateAuthorize($transactionRequest);
        }elseif(get_class($transactionRequest) == 'CaptureRequest'){
            return $this->translateCapture($transactionRequest);
        }elseif(get_class($transactionRequest) == 'PurchaseRequest'){
            return $this->translatePurchase($transactionRequest);
        }elseif(get_class($transactionRequest) == 'CancelRequest'){
            return $this->translateCancel($transactionRequest);
        }
    }

        function translateAuthorize($authorizeRequest){
            $credentials = new Credentials();

            $transaction = new Transaction();
            $terminal = new Terminal();
            $merchant = new Merchant();
            $card = new Card();


            $merchantType = $authorizeRequest->getMerchant();
            $softwareType = $merchantType->getSoftware();
            $credit = $authorizeRequest->getCredit();
            $cardKeyed = $credit->getCardKeyed();
            $address = $credit->getCardHolderAddress();

            //make an Apigee Authorize request
            //Set Credential values
            $credentials->setAccountID($this->username);
            $credentials->setPassword($this->password);

            //Set Application Values
            $merchant->setMerchantID($merchantType->getMerchantId());
            $merchant->setMerchantName($merchantType->getMerchantName());

            //Set Merchant values
            $merchant->setNetworkRouting($merchantType->getNetworkRouting());
            $merchant->setCashierNumber('' . $merchantType->getCashierNumber());
            $merchant->setLaneNumber($merchantType->getLaneNumber());
            $merchant->setDivisionNumber($merchantType->getDivisionNumber());
            $merchant->setChainCode($merchantType->getChainCode());
            $merchant->setStoreNumber($merchantType->getStoreNumber());

            //Set Terminal Values
            $terminal->setTerminalID('' . $softwareType->getTerminalId());
            $terminal->setIPv4Address($softwareType->getIp4address());
            $terminal->setTerminalEnvironmentalCode($softwareType->getEntryMode());
            $terminal->setPinEntry($softwareType->getPinEntry());
            $terminal->setBalanceInquiry($softwareType->getBalanceEnquiry());
            $terminal->setHostAdjustment($softwareType->getHostAdjustment());
            $terminal->setDeviceType("Software");
            $terminal->setCardInputCode("ManualKeyed");
			$terminal->setEntryMode($softwareType->getEntryMode());

            //Set transaction values
            $transaction->setTransactionID($softwareType->getSequenceNumber());
            $transaction->setPaymentType($authorizeRequest->getPaymentType());
            $transaction->setReferenceNumber($authorizeRequest->getReferenceNumber());
            $transaction->setDraftLocatorId($authorizeRequest->getDraftLocatorId());
            $transaction->setClerkNumber(''. $merchantType->getClerkNumber());
            $transaction->setMarketCode($authorizeRequest->getTransactionType());
            $transaction->setTransactionTimestamp($authorizeRequest->getTransactionTimestamp());
            //$transaction->setTokenRequested($softwareType->getSequenceNumber());
            $transaction->setTransactionAmount($authorizeRequest->getTransactionAmt());
            $transaction->setSystemTraceID(''. $authorizeRequest->getSystemTraceId());

            //Set Address values
            $address = $credit->getCardHolderAddress();

            //Set Card values
            $card->setCardType($credit->getCardType());
            $card->setCardNumber($cardKeyed->getPrimaryActNumber());
            $expirationDate = explode("-", $cardKeyed->getExpirationDate());
            $expYear = $expirationDate[0];
            $expMonth = $expirationDate[1];
            $card->setExpirationMonth($expMonth);
            $card->setExpirationYear($expYear);

            $apigeeObject = new ApigeeObject($address, $card, $credentials, $merchant, $terminal, $transaction);

            $jsonObject = json_encode($apigeeObject);
            //$jsonObject2 = json_encode($transaction);
            //var_dump($transaction);

            return $jsonObject;

        }

    function translateCapture($captureRequest){
        $credentials = new Credentials();

        $transaction = new Transaction();
        $terminal = new Terminal();
        $merchant = new Merchant();
        $card = new Card();

        $merchantType = $captureRequest->getMerchant();
        $softwareType = $merchantType->getSoftware();
        $credit = $captureRequest->getCredit();
        $cardKeyed = $credit->getCardKeyed();
        $address = $credit->getCardHolderAddress();

        //make an Apigee Authorize request
        //Set Credential values
        $credentials->setAccountID($this->username);
        $credentials->setPassword($this->password);

        //Set Application Values
        $merchant->setMerchantID($merchantType->getMerchantId());
        $merchant->setMerchantName($merchantType->getMerchantName());

        //Set Merchant values
        $merchant->setNetworkRouting($merchantType->getNetworkRouting());
        $merchant->setCashierNumber('' . $merchantType->getCashierNumber());
        $merchant->setLaneNumber($merchantType->getLaneNumber());
        $merchant->setDivisionNumber($merchantType->getDivisionNumber());
        $merchant->setChainCode($merchantType->getChainCode());
        $merchant->setStoreNumber($merchantType->getStoreNumber());

        //Set Terminal Values
        $terminal->setTerminalID('' . $softwareType->getTerminalId());
        $terminal->setIPv4Address($softwareType->getIp4address());
        $terminal->setTerminalEnvironmentalCode($softwareType->getEntryMode());
        $terminal->setPinEntry($softwareType->getPinEntry());
        $terminal->setBalanceInquiry($softwareType->getBalanceEnquiry());
        $terminal->setHostAdjustment($softwareType->getHostAdjustment());
        $terminal->setDeviceType("Software");
        $terminal->setCardInputCode("ManualKeyed");
		$terminal->setEntryMode($softwareType->getEntryMode());

        //Set transaction values
        $transaction->setTransactionID($softwareType->getSequenceNumber());
        $transaction->setPaymentType($captureRequest->getPaymentType());
        $transaction->setReferenceNumber($captureRequest->getReferenceNumber());
        $transaction->setDraftLocatorId($captureRequest->getDraftLocatorId());
        $transaction->setClerkNumber(''. $merchantType->getClerkNumber());
        $transaction->setMarketCode($captureRequest->getTransactionType());
        $transaction->setTransactionTimestamp($captureRequest->getTransactionTimestamp());

        $transaction->setSystemTraceID(''. $captureRequest->getSystemTraceId());

        $transaction->setAuthorizationCode($captureRequest->getAuthorizationCode());
        $transaction->setOriginalReferenceNumber($captureRequest->getOriginalRefNum());
        $transaction->setCaptureAmount($captureRequest->getCaptureAmt());
        $transaction->setOriginalAuthorizedAmount($captureRequest->getOriginalAmt());

        //Set Address values
        $address = $credit->getCardHolderAddress();

        //Set Card values
        $card->setCardType($credit->getCardType());
        $card->setCardNumber($cardKeyed->getPrimaryActNumber());
        $expirationDate = explode("-", $cardKeyed->getExpirationDate());
        $expYear = $expirationDate[0];
        $expMonth = $expirationDate[1];
        $card->setExpirationMonth($expMonth);
        $card->setExpirationYear($expYear);

        $apigeeObject = new ApigeeObject($address, $card, $credentials, $merchant, $terminal, $transaction);

        $jsonObject = json_encode($apigeeObject);
        //$jsonObject2 = json_encode($transaction);
        //var_dump($transaction);

        return $jsonObject;

    }

    function translatePurchase($purchaseRequest){
        $credentials = new Credentials();

        $transaction = new Transaction();
        $terminal = new Terminal();
        $merchant = new Merchant();
        $card = new Card();

        $merchantType = $purchaseRequest->getMerchant();
        $softwareType = $merchantType->getSoftware();
        $credit = $purchaseRequest->getCredit();
        $cardKeyed = $credit->getCardKeyed();
        $address = $credit->getCardHolderAddress();

        //make an Apigee Authorize request
        //Set Credential values
        $credentials->setAccountID($this->username);
        $credentials->setPassword($this->password);

        //Set Application Values
        $merchant->setMerchantID($merchantType->getMerchantId());
        $merchant->setMerchantName($merchantType->getMerchantName());

        //Set Merchant values
        $merchant->setNetworkRouting($merchantType->getNetworkRouting());
        $merchant->setCashierNumber('' . $merchantType->getCashierNumber());
        $merchant->setLaneNumber($merchantType->getLaneNumber());
        $merchant->setDivisionNumber($merchantType->getDivisionNumber());
        $merchant->setChainCode($merchantType->getChainCode());
        $merchant->setStoreNumber($merchantType->getStoreNumber());

        //Set Terminal Values
        $terminal->setTerminalID('' . $softwareType->getTerminalId());
        $terminal->setIPv4Address($softwareType->getIp4address());
        $terminal->setTerminalEnvironmentalCode($softwareType->getEntryMode());
        $terminal->setPinEntry($softwareType->getPinEntry());
        $terminal->setBalanceInquiry($softwareType->getBalanceEnquiry());
        $terminal->setHostAdjustment($softwareType->getHostAdjustment());
        $terminal->setDeviceType("Software");
        $terminal->setCardInputCode("ManualKeyed");
		$terminal->setEntryMode($softwareType->getEntryMode());

        //Set transaction values
        $transaction->setTransactionID($softwareType->getSequenceNumber());
        $transaction->setPaymentType($purchaseRequest->getPaymentType());
        $transaction->setReferenceNumber($purchaseRequest->getReferenceNumber());
        $transaction->setDraftLocatorId($purchaseRequest->getDraftLocatorId());
        $transaction->setClerkNumber(''. $merchantType->getClerkNumber());
        $transaction->setMarketCode($purchaseRequest->getTransactionType());
        $transaction->setTransactionTimestamp($purchaseRequest->getTransactionTimestamp());
        $transaction->setTransactionAmount($purchaseRequest->getTransactionAmt());
        $transaction->setSystemTraceID(''. $purchaseRequest->getSystemTraceId());



        //Set Address values
        $address = $credit->getCardHolderAddress();

        //Set Card values
        $card->setCardType($credit->getCardType());
        $card->setCardNumber($cardKeyed->getPrimaryActNumber());
        $expirationDate = explode("-", $cardKeyed->getExpirationDate());
        $expYear = $expirationDate[0];
        $expMonth = $expirationDate[1];
        $card->setExpirationMonth($expMonth);
        $card->setExpirationYear($expYear);

        $apigeeObject = new ApigeeObject($address, $card, $credentials, $merchant, $terminal, $transaction);

        $jsonObject = json_encode($apigeeObject);
        //$jsonObject2 = json_encode($transaction);
        //var_dump($transaction);

        return $jsonObject;

    }


    function translateCancel($cancelRequest){
        $credentials = new Credentials();

        $transaction = new Transaction();
        $terminal = new Terminal();
        $merchant = new Merchant();
        $card = new Card();

        $merchantType = $cancelRequest->getMerchant();
        $softwareType = $merchantType->getSoftware();
        $credit = $cancelRequest->getCredit();
        $cardKeyed = $credit->getCardKeyed();
        $address = $credit->getCardHolderAddress();

        //make an Apigee Authorize request
        //Set Credential values
        $credentials->setAccountID($this->username);
        $credentials->setPassword($this->password);

        //Set Application Values
        $merchant->setMerchantID($merchantType->getMerchantId());
        $merchant->setMerchantName($merchantType->getMerchantName());

        //Set Merchant values
        $merchant->setNetworkRouting($merchantType->getNetworkRouting());
        $merchant->setCashierNumber('' . $merchantType->getCashierNumber());
        $merchant->setLaneNumber($merchantType->getLaneNumber());
        $merchant->setDivisionNumber($merchantType->getDivisionNumber());
        $merchant->setChainCode($merchantType->getChainCode());
        $merchant->setStoreNumber($merchantType->getStoreNumber());

        //Set Terminal Values
        $terminal->setTerminalID('' . $softwareType->getTerminalId());
        $terminal->setIPv4Address($softwareType->getIp4address());
        $terminal->setTerminalEnvironmentalCode($softwareType->getEntryMode());
        $terminal->setPinEntry($softwareType->getPinEntry());
        $terminal->setBalanceInquiry($softwareType->getBalanceEnquiry());
        $terminal->setHostAdjustment($softwareType->getHostAdjustment());
        $terminal->setDeviceType("Software");
        $terminal->setCardInputCode("ManualKeyed");
		$terminal->setEntryMode($softwareType->getEntryMode());

        //Set transaction values
        $transaction->setTransactionID($softwareType->getSequenceNumber());
        $transaction->setPaymentType($cancelRequest->getPaymentType());
        $transaction->setReferenceNumber($cancelRequest->getReferenceNumber());
        $transaction->setDraftLocatorId($cancelRequest->getDraftLocatorId());
        $transaction->setClerkNumber(''. $merchantType->getClerkNumber());
        $transaction->setMarketCode($cancelRequest->getTransactionType());
        $transaction->setTransactionTimestamp($cancelRequest->getTransactionTimestamp());

        $transaction->setSystemTraceID(''. $cancelRequest->getSystemTraceId());

        $transaction->setAuthorizationCode($cancelRequest->getAuthorizationCode());
        $transaction->setOriginalReferenceNumber($cancelRequest->getOriginalRefNum());
        $transaction->setReversalReason($cancelRequest->getReversalReason());
        $transaction->setOriginalAuthorizedAmount($cancelRequest->getOriginalAmt());
        $transaction->setReplacementAmount($cancelRequest->getReplacementAmount());
        $transaction->setOriginalTransactionTimestamp($cancelRequest->getOriginalTimestamp());
        $transaction->setOriginalSystemTraceId(''. $cancelRequest->getOriginalSystemTraceId());
        $transaction->setOriginalSequenceNumber($cancelRequest->getOriginalSequenceNumber());
        $transaction->setCancelType($cancelRequest->getCancelTransactionType());
        $transaction->setOriginalAuthCode($cancelRequest->getAuthorizationCode());
        //Set Address values
        $address = $credit->getCardHolderAddress();

        //Set Card values
        $card->setCardType($credit->getCardType());
        $card->setCardNumber($cardKeyed->getPrimaryActNumber());
        $expirationDate = explode("-", $cardKeyed->getExpirationDate());
        $expYear = $expirationDate[0];
        $expMonth = $expirationDate[1];
        $card->setExpirationMonth($expMonth);
        $card->setExpirationYear($expYear);

        $apigeeObject = new ApigeeObject($address, $card, $credentials, $merchant, $terminal, $transaction);

        $jsonObject = json_encode($apigeeObject);
        //$jsonObject2 = json_encode($transaction);
        //var_dump($transaction);

        return $jsonObject;

    }



} 