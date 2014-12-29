<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 10:27 AM
 */
require_once "Merchant_Type.php";
require_once "Credit.php";

class AuthorizeRequest {

    private $merchantRefId = '1A*';
    private $draftLocatorId = '12345678901';
    private $referenceNumber  = '111111111';
    private $paymentType = 'single';
    private $systemTraceId = 0;
    private $transactionAmt = '5.00';
    private $transactionTimestamp = '';
    private $transactionType = 'ecommerce';
    private $merchant;
    private $credit;


    function AuthorizeRequest(){
        date_default_timezone_set("MST");
        $this->transactionTimestamp = date("c");
        $this->merchant = new Merchant_Type();
        $this->credit = new Credit();
    }

    public function createRequest(){
        $authorizeArray = [
            'system-trace-id' => $this->systemTraceId,
            'merchant-ref-id' => $this->merchantRefId,
            'Merchant' => $this->merchant->getMerchantArray(),
            'TransactionType' => $this->transactionType,
            'TransactionTimestamp' => $this->transactionTimestamp,
            'PaymentType' => $this->paymentType,
            'DraftLocatorId' => $this->draftLocatorId,
            'ReferenceNumber' => $this->referenceNumber,
            'TransactionAmount' => $this->transactionAmt,
            'Credit' => $this->credit->getCreditArray(),
        ];

        return $authorizeArray;
    }

    public function setPrimaryAccountNumber($pan){
        $this->credit->setPrimaryAccountNumber($pan);
    }
    public function getSequenceNumber(){
        return $this->merchant->getSoftware()->getSequenceNumber();
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
     * @param string $systemTraceId
     */
    public function setSystemTraceId($systemTraceId)
    {
        $this->systemTraceId = $systemTraceId;
    }

    /**
     * @return string
     */
    public function getSystemTraceId()
    {
        return $this->systemTraceId;
    }

    /**
     * @param string $transactionAmt
     */
    public function setTransactionAmt($transactionAmt)
    {
        $this->transactionAmt = $transactionAmt;
    }

    /**
     * @return string
     */
    public function getTransactionAmt()
    {
        return $this->transactionAmt;
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