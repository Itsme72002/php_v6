<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 12:11 PM
 */

namespace PWS_Json_Objects;


class Transaction implements \JsonSerializable{

    private $TransactionID;
    private $TransactionAmount;
    private $MarketCode;
    private $TransactionTimestamp;
    private $ClerkNumber;
    // Optional-Conditional
    private $CancelType;
    private $PaymentType;
    private $ReferenceNumber;
    private $DraftLocatorId;
    private $AuthorizationCode;
    private $OriginalAuthorizedAmount;
    private $CaptureAmount;
    private $CashBackAmount;
    private $OriginalTransactionTimestamp;
    private $OriginalSystemTraceId;
    private $OriginalSequenceNumber;
    private $OriginalAuthCode;
    private $NetworkResponseCode;
    private $ReversalReason;
    private $ReplacementAmount;
    private $OriginalReferenceNumber;
    private $TipAmount;
    private $ConvenienceFee;
    private $TaxExempt;
    private $Taxable;
    private $TaxAmount;
    private $PurchaseOrder;
    private $TokenRequested;
    private $SystemTraceID;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @param mixed $SystemTraceId
     */
    public function setSystemTraceID($SystemTraceId)
    {
        $this->SystemTraceID = $SystemTraceId;
    }

    /**
     * @return mixed
     */
    public function getSystemTraceID()
    {
        return $this->SystemTraceID;
    }



    /**
     * @param mixed $AuthorizationCode
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
        $this->AuthorizationCode = $AuthorizationCode;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }

    /**
     * @param mixed $CancelType
     */
    public function setCancelType($CancelType)
    {
        $this->CancelType = $CancelType;
    }

    /**
     * @return mixed
     */
    public function getCancelType()
    {
        return $this->CancelType;
    }

    /**
     * @param mixed $CaptureAmount
     */
    public function setCaptureAmount($CaptureAmount)
    {
        $this->CaptureAmount = $CaptureAmount;
    }

    /**
     * @return mixed
     */
    public function getCaptureAmount()
    {
        return $this->CaptureAmount;
    }

    /**
     * @param mixed $CashBackAmount
     */
    public function setCashBackAmount($CashBackAmount)
    {
        $this->CashBackAmount = $CashBackAmount;
    }

    /**
     * @return mixed
     */
    public function getCashBackAmount()
    {
        return $this->CashBackAmount;
    }

    /**
     * @param mixed $ClerkNumber
     */
    public function setClerkNumber($ClerkNumber)
    {
        $this->ClerkNumber = $ClerkNumber;
    }

    /**
     * @return mixed
     */
    public function getClerkNumber()
    {
        return $this->ClerkNumber;
    }

    /**
     * @param mixed $ConvenienceFee
     */
    public function setConvenienceFee($ConvenienceFee)
    {
        $this->ConvenienceFee = $ConvenienceFee;
    }

    /**
     * @return mixed
     */
    public function getConvenienceFee()
    {
        return $this->ConvenienceFee;
    }

    /**
     * @param mixed $DraftLocatorId
     */
    public function setDraftLocatorId($DraftLocatorId)
    {
        $this->DraftLocatorId = $DraftLocatorId;
    }

    /**
     * @return mixed
     */
    public function getDraftLocatorId()
    {
        return $this->DraftLocatorId;
    }

    /**
     * @param mixed $MarketCode
     */
    public function setMarketCode($MarketCode)
    {
        $this->MarketCode = $MarketCode;
    }

    /**
     * @return mixed
     */
    public function getMarketCode()
    {
        return $this->MarketCode;
    }

    /**
     * @param mixed $NetworkResponseCode
     */
    public function setNetworkResponseCode($NetworkResponseCode)
    {
        $this->NetworkResponseCode = $NetworkResponseCode;
    }

    /**
     * @return mixed
     */
    public function getNetworkResponseCode()
    {
        return $this->NetworkResponseCode;
    }

    /**
     * @param mixed $OriginalAmount
     */
    public function setOriginalAuthorizedAmount($OriginalAmount)
    {
        $this->OriginalAuthorizedAmount = $OriginalAmount;
    }

    /**
     * @return mixed
     */
    public function getOriginalAuthorizedAmount()
    {
        return $this->OriginalAuthorizedAmount;
    }

    /**
     * @param mixed $OriginalAuthCode
     */
    public function setOriginalAuthCode($OriginalAuthCode)
    {
        $this->OriginalAuthCode = $OriginalAuthCode;
    }

    /**
     * @return mixed
     */
    public function getOriginalAuthCode()
    {
        return $this->OriginalAuthCode;
    }

    /**
     * @param mixed $OriginalReferenceNumber
     */
    public function setOriginalReferenceNumber($OriginalReferenceNumber)
    {
        $this->OriginalReferenceNumber = $OriginalReferenceNumber;
    }

    /**
     * @return mixed
     */
    public function getOriginalReferenceNumber()
    {
        return $this->OriginalReferenceNumber;
    }

    /**
     * @param mixed $OriginalSequenceNumber
     */
    public function setOriginalSequenceNumber($OriginalSequenceNumber)
    {
        $this->OriginalSequenceNumber = $OriginalSequenceNumber;
    }

    /**
     * @return mixed
     */
    public function getOriginalSequenceNumber()
    {
        return $this->OriginalSequenceNumber;
    }

    /**
     * @param mixed $OriginalSystemTraceId
     */
    public function setOriginalSystemTraceId($OriginalSystemTraceId)
    {
        $this->OriginalSystemTraceId = $OriginalSystemTraceId;
    }

    /**
     * @return mixed
     */
    public function getOriginalSystemTraceId()
    {
        return $this->OriginalSystemTraceId;
    }

    /**
     * @param mixed $OriginalTransactionTimestamp
     */
    public function setOriginalTransactionTimestamp($OriginalTransactionTimestamp)
    {
        $this->OriginalTransactionTimestamp = $OriginalTransactionTimestamp;
    }

    /**
     * @return mixed
     */
    public function getOriginalTransactionTimestamp()
    {
        return $this->OriginalTransactionTimestamp;
    }

    /**
     * @param mixed $PaymentType
     */
    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param mixed $PurchaseOrder
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
        $this->PurchaseOrder = $PurchaseOrder;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }

    /**
     * @param mixed $ReferenceNumber
     */
    public function setReferenceNumber($ReferenceNumber)
    {
        $this->ReferenceNumber = $ReferenceNumber;
    }

    /**
     * @return mixed
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    /**
     * @param mixed $ReplacementAmount
     */
    public function setReplacementAmount($ReplacementAmount)
    {
        $this->ReplacementAmount = $ReplacementAmount;
    }

    /**
     * @return mixed
     */
    public function getReplacementAmount()
    {
        return $this->ReplacementAmount;
    }

    /**
     * @param mixed $ReversalReason
     */
    public function setReversalReason($ReversalReason)
    {
        $this->ReversalReason = $ReversalReason;
    }

    /**
     * @return mixed
     */
    public function getReversalReason()
    {
        return $this->ReversalReason;
    }

    /**
     * @param mixed $TaxAmount
     */
    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * @param mixed $TaxExempt
     */
    public function setTaxExempt($TaxExempt)
    {
        $this->TaxExempt = $TaxExempt;
    }

    /**
     * @return mixed
     */
    public function getTaxExempt()
    {
        return $this->TaxExempt;
    }

    /**
     * @param mixed $Taxable
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
    }

    /**
     * @return mixed
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * @param mixed $TipAmount
     */
    public function setTipAmount($TipAmount)
    {
        $this->TipAmount = $TipAmount;
    }

    /**
     * @return mixed
     */
    public function getTipAmount()
    {
        return $this->TipAmount;
    }

    /**
     * @param mixed $TokenRequested
     */
    public function setTokenRequested($TokenRequested)
    {
        $this->TokenRequested = $TokenRequested;
    }

    /**
     * @return mixed
     */
    public function getTokenRequested()
    {
        return $this->TokenRequested;
    }

    /**
     * @param mixed $TransactionAmount
     */
    public function setTransactionAmount($TransactionAmount)
    {
        $this->TransactionAmount = $TransactionAmount;
    }

    /**
     * @return mixed
     */
    public function getTransactionAmount()
    {
        return $this->TransactionAmount;
    }

    /**
     * @param mixed $TransactionID
     */
    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;
    }

    /**
     * @return mixed
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * @param mixed $TransactionTimestamp
     */
    public function setTransactionTimestamp($TransactionTimestamp)
    {
        $this->TransactionTimestamp = $TransactionTimestamp;
    }

    /**
     * @return mixed
     */
    public function getTransactionTimestamp()
    {
        return $this->TransactionTimestamp;
    }


} 