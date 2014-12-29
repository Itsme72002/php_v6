<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 3:11 PM
 */
require_once "Merchant_Type.php";
require_once "Credit.php";

class CaptureRequest {

    private $merchantRefId = '1A*';
    private $draftLocatorId = '12345678901';
    private $referenceNumber  = '111111111';
    private $systemTraceId = 0;
    private $paymentType = 'single';

    private $transactionTimestamp = '';
    private $transactionType = 'ecommerce';
    private $merchant;
    private $credit;

    private $authorizationCode;
    private $originalAmt;
    private $captureAmt;
    private $originalRefNum;


    function CaptureRequest(){
        date_default_timezone_set("MST");
        $this->transactionTimestamp = date("c");
        $this->merchant = new Merchant_Type();
        $this->credit = new Credit();
    }

    public function createRequest(){
        $captureArray = [
            'system-trace-id' => $this->systemTraceId,
            'merchant-ref-id' => $this->merchantRefId,
            'Merchant' => $this->merchant->getMerchantArray(),
            'TransactionType' => $this->transactionType,
            'TransactionTimestamp' => $this->transactionTimestamp,
            'PaymentType' => $this->paymentType,
            'DraftLocatorId' => $this->draftLocatorId,
            'ReferenceNumber' => $this->referenceNumber,
            'AuthorizationCode' => $this->authorizationCode,
            'OriginalAmount' => $this->originalAmt,
            'CaptureAmount' => $this->captureAmt,
            'OriginalReferenceNumber' => $this->originalRefNum,
            'Credit' => $this->credit->getCreditArray(),
        ];

        return $captureArray;
    }

    /**
     * @param mixed $authorizationCode
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param mixed $captureAmt
     */
    public function setCaptureAmt($captureAmt)
    {
        $this->captureAmt = $captureAmt;
    }

    /**
     * @return mixed
     */
    public function getCaptureAmt()
    {
        return $this->captureAmt;
    }

    /**
     * @param mixed $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return mixed
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param string $draftLocatorId
     */
    public function setDraftLocatorId($draftLocatorId)
    {
        $this->draftLocatorId = $draftLocatorId;
    }

    /**
     * @return string
     */
    public function getDraftLocatorId()
    {
        return $this->draftLocatorId;
    }

    /**
     * @param mixed $merchant
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * @return mixed
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param string $merchantRefId
     */
    public function setMerchantRefId($merchantRefId)
    {
        $this->merchantRefId = $merchantRefId;
    }

    /**
     * @return string
     */
    public function getMerchantRefId()
    {
        return $this->merchantRefId;
    }

    /**
     * @param mixed $originalAmt
     */
    public function setOriginalAmt($originalAmt)
    {
        $this->originalAmt = $originalAmt;
    }

    /**
     * @return mixed
     */
    public function getOriginalAmt()
    {
        return $this->originalAmt;
    }

    /**
     * @param mixed $originalRefNum
     */
    public function setOriginalRefNum($originalRefNum)
    {
        $this->originalRefNum = $originalRefNum;
    }

    /**
     * @return mixed
     */
    public function getOriginalRefNum()
    {
        return $this->originalRefNum;
    }

    /**
     * @param string $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $referenceNumber
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * @param int $systemTraceId
     */
    public function setSystemTraceId($systemTraceId)
    {
        $this->systemTraceId = $systemTraceId;
    }

    /**
     * @return int
     */
    public function getSystemTraceId()
    {
        return $this->systemTraceId;
    }


    /**
     * @param string $transactionTimestamp
     */
    public function setTransactionTimestamp($transactionTimestamp)
    {
        $this->transactionTimestamp = $transactionTimestamp;
    }

    /**
     * @return string
     */
    public function getTransactionTimestamp()
    {
        return $this->transactionTimestamp;
    }

    /**
     * @param string $transactionType
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }



} 