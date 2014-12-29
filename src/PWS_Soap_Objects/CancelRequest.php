<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 4:37 PM
 */

class CancelRequest {

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
    private $originalRefNum;
    private $cancelTransactionType = 'authorize';
    private $reversalReason = 'CUSTOMER_CANCELED_TRANSACTION';
    private $replacementAmount;
    private $originalTimestamp;
    private $originalSystemTraceId= 0;
    private $originalSequenceNumber;


    function CancelRequest(){
        date_default_timezone_set("MST");
        $this->transactionTimestamp = date("c");
        $this->merchant = new Merchant_Type();
        $this->credit = new Credit();
    }

    public function createRequest(){
        $cancelArray = [
            'system-trace-id' => $this->systemTraceId,
            'merchant-ref-id' => $this->merchantRefId,
            'Merchant' => $this->merchant->getMerchantArray(),
            'TransactionType' => $this->transactionType,
            'TransactionTimestamp' => $this->transactionTimestamp,
            'PaymentType' => $this->paymentType,
            'DraftLocatorId' => $this->draftLocatorId,
            'ReferenceNumber' => $this->referenceNumber,
            'OriginalAuthCode' => $this->authorizationCode,
            'OriginalAmount' => $this->originalAmt,
            'OriginalTransactionTimestamp' => $this->originalTimestamp,
            'OriginalSystemTraceId' => $this->originalSystemTraceId,
            'OriginalReferenceNumber' => $this->originalRefNum,
            'ReversalReason' => $this->reversalReason,
            'OriginalSequenceNumber' => $this->originalSequenceNumber,
            'Credit' => $this->credit->getCreditArray(),
            'CancelType' => $this->cancelTransactionType,
        ];

        return $cancelArray;
    }

    public function setPrimaryAccountNumber($pan){
        $this->credit->setPrimaryAccountNumber($pan);
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
     * @param string $cancelTransactionType
     */
    public function setCancelTransactionType($cancelTransactionType)
    {
        $this->cancelTransactionType = $cancelTransactionType;
    }

    /**
     * @return string
     */
    public function getCancelTransactionType()
    {
        return $this->cancelTransactionType;
    }


    /**
     * @param \Credit $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return \Credit
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
     * @param \Merchant $merchant
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * @return \Merchant
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
     * @param mixed $originalTimestamp
     */
    public function setOriginalTimestamp($originalTimestamp)
    {
        $this->originalTimestamp = $originalTimestamp;
    }

    /**
     * @return mixed
     */
    public function getOriginalTimestamp()
    {
        return $this->originalTimestamp;
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
     * @param mixed $replacementAmount
     */
    public function setReplacementAmount($replacementAmount)
    {
        $this->replacementAmount = $replacementAmount;
    }

    /**
     * @return mixed
     */
    public function getReplacementAmount()
    {
        return $this->replacementAmount;
    }

    /**
     * @param string $reversalReason
     */
    public function setReversalReason($reversalReason)
    {
        $this->reversalReason = $reversalReason;
    }

    /**
     * @return string
     */
    public function getReversalReason()
    {
        return $this->reversalReason;
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
     * @param bool|string $transactionTimestamp
     */
    public function setTransactionTimestamp($transactionTimestamp)
    {
        $this->transactionTimestamp = $transactionTimestamp;
    }

    /**
     * @return bool|string
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

    /**
     * @param mixed $originalReferenceNumber
     */
    public function setOriginalReferenceNumber($originalReferenceNumber)
    {
        $this->originalReferenceNumber = $originalReferenceNumber;
    }

    /**
     * @return mixed
     */
    public function getOriginalReferenceNumber()
    {
        return $this->originalReferenceNumber;
    }

    /**
     * @param mixed $originalSequenceNumber
     */
    public function setOriginalSequenceNumber($originalSequenceNumber)
    {
        $this->originalSequenceNumber = $originalSequenceNumber;
    }

    /**
     * @return mixed
     */
    public function getOriginalSequenceNumber()
    {
        return $this->originalSequenceNumber;
    }

    /**
     * @param mixed $originalSystemTraceId
     */
    public function setOriginalSystemTraceId($originalSystemTraceId)
    {
        $this->originalSystemTraceId = $originalSystemTraceId;
    }

    /**
     * @return mixed
     */
    public function getOriginalSystemTraceId()
    {
        return $this->originalSystemTraceId;
    }


} 