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
	private $PartialApprovalCode;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    public function setSystemTraceID($SystemTraceId)
    {
        $this->SystemTraceID = $SystemTraceId;
    }
    public function getSystemTraceID()
    {
        return $this->SystemTraceID;
    }

    public function setAuthorizationCode($AuthorizationCode)
    {
        $this->AuthorizationCode = $AuthorizationCode;
    }
    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }

    public function setCancelType($CancelType)
    {
        $this->CancelType = $CancelType;
    }
    public function getCancelType()
    {
        return $this->CancelType;
    }

    public function setCaptureAmount($CaptureAmount)
    {
        $this->CaptureAmount = $CaptureAmount;
    }
    public function getCaptureAmount()
    {
        return $this->CaptureAmount;
    }

    public function setCashBackAmount($CashBackAmount)
    {
        $this->CashBackAmount = $CashBackAmount;
    }
    public function getCashBackAmount()
    {
        return $this->CashBackAmount;
    }

    public function setClerkNumber($ClerkNumber)
    {
        $this->ClerkNumber = $ClerkNumber;
    }
    public function getClerkNumber()
    {
        return $this->ClerkNumber;
    }

    public function setConvenienceFee($ConvenienceFee)
    {
        $this->ConvenienceFee = $ConvenienceFee;
    }
    public function getConvenienceFee()
    {
        return $this->ConvenienceFee;
    }

    public function setDraftLocatorId($DraftLocatorId)
    {
        $this->DraftLocatorId = $DraftLocatorId;
    }
    public function getDraftLocatorId()
    {
        return $this->DraftLocatorId;
    }

    public function setMarketCode($MarketCode)
    {
        $this->MarketCode = $MarketCode;
    }
    public function getMarketCode()
    {
        return $this->MarketCode;
    }

    public function setNetworkResponseCode($NetworkResponseCode)
    {
        $this->NetworkResponseCode = $NetworkResponseCode;
    }
    public function getNetworkResponseCode()
    {
        return $this->NetworkResponseCode;
    }

    public function setOriginalAuthorizedAmount($OriginalAmount)
    {
        $this->OriginalAuthorizedAmount = $OriginalAmount;
    }
    public function getOriginalAuthorizedAmount()
    {
        return $this->OriginalAuthorizedAmount;
    }

    public function setOriginalAuthCode($OriginalAuthCode)
    {
        $this->OriginalAuthCode = $OriginalAuthCode;
    }
    public function getOriginalAuthCode()
    {
        return $this->OriginalAuthCode;
    }

    public function setOriginalReferenceNumber($OriginalReferenceNumber)
    {
        $this->OriginalReferenceNumber = $OriginalReferenceNumber;
    }
    public function getOriginalReferenceNumber()
    {
        return $this->OriginalReferenceNumber;
    }

    public function setOriginalSequenceNumber($OriginalSequenceNumber)
    {
        $this->OriginalSequenceNumber = $OriginalSequenceNumber;
    }
    public function getOriginalSequenceNumber()
    {
        return $this->OriginalSequenceNumber;
    }

    public function setOriginalSystemTraceId($OriginalSystemTraceId)
    {
        $this->OriginalSystemTraceId = $OriginalSystemTraceId;
    }
    public function getOriginalSystemTraceId()
    {
        return $this->OriginalSystemTraceId;
    }

    public function setOriginalTransactionTimestamp($OriginalTransactionTimestamp)
    {
        $this->OriginalTransactionTimestamp = $OriginalTransactionTimestamp;
    }
    public function getOriginalTransactionTimestamp()
    {
        return $this->OriginalTransactionTimestamp;
    }

    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;
    }
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    public function setPurchaseOrder($PurchaseOrder)
    {
        $this->PurchaseOrder = $PurchaseOrder;
    }
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }

    public function setReferenceNumber($ReferenceNumber)
    {
        $this->ReferenceNumber = $ReferenceNumber;
    }
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    public function setReplacementAmount($ReplacementAmount)
    {
        $this->ReplacementAmount = $ReplacementAmount;
    }
    public function getReplacementAmount()
    {
        return $this->ReplacementAmount;
    }

    public function setReversalReason($ReversalReason)
    {
        $this->ReversalReason = $ReversalReason;
    }
    public function getReversalReason()
    {
        return $this->ReversalReason;
    }

    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;
    }
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    public function setTaxExempt($TaxExempt)
    {
        $this->TaxExempt = $TaxExempt;
    }
    public function getTaxExempt()
    {
        return $this->TaxExempt;
    }

    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
    }
    public function getTaxable()
    {
        return $this->Taxable;
    }

    public function setTipAmount($TipAmount)
    {
        $this->TipAmount = $TipAmount;
    }
    public function getTipAmount()
    {
        return $this->TipAmount;
    }

    public function setTokenRequested($TokenRequested)
    {
        $this->TokenRequested = $TokenRequested;
    }
    public function getTokenRequested()
    {
        return $this->TokenRequested;
    }

    public function setTransactionAmount($TransactionAmount)
    {
        $this->TransactionAmount = $TransactionAmount;
    }
    public function getTransactionAmount()
    {
        return $this->TransactionAmount;
    }

    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;
    }
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    public function setTransactionTimestamp($TransactionTimestamp)
    {
        $this->TransactionTimestamp = $TransactionTimestamp;
    }
    public function getTransactionTimestamp()
    {
        return $this->TransactionTimestamp;
    }

    public function setPartialApprovalCode($PartialApprovalCode)
    {
        $this->PartialApprovalCode = $PartialApprovalCode;
    }
    public function getPartialApprovalCode()
    {
        return $this->PartialApprovalCode;
    }

} 