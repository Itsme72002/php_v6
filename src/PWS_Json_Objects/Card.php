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


class Card implements \JsonSerializable{
    private $CardType;
    private $CardNumber;
    private $ExpirationMonth;
    private $ExpirationYear;
    private $Track1Data;
    private $Track2Data;
    private $EncryptedTrack1Data;
    private $EncryptedTrack2Data;
    private $EncryptedFormat;
    private $CardDataKeySerialNumber;
    private $TokenID;
    private $TokenValue;
    private $CVV;
    private $CardholderName;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @param mixed $CardType
     */
    public function setCardType($CardType)
    {
        $this->CardType = $CardType;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->CardType;
    }



    /**
     * @param mixed $CVV
     */
    public function setCVV($CVV)
    {
        $this->CVV = $CVV;
    }

    /**
     * @return mixed
     */
    public function getCVV()
    {
        return $this->CVV;
    }

    /**
     * @param mixed $CardDataKeySerialNumber
     */
    public function setCardDataKeySerialNumber($CardDataKeySerialNumber)
    {
        $this->CardDataKeySerialNumber = $CardDataKeySerialNumber;
    }

    /**
     * @return mixed
     */
    public function getCardDataKeySerialNumber()
    {
        return $this->CardDataKeySerialNumber;
    }

    /**
     * @param mixed $CardNumber
     */
    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param mixed $CardholderName
     */
    public function setCardholderName($CardholderName)
    {
        $this->CardholderName = $CardholderName;
    }

    /**
     * @return mixed
     */
    public function getCardholderName()
    {
        return $this->CardholderName;
    }

    /**
     * @param mixed $EncryptedFormat
     */
    public function setEncryptedFormat($EncryptedFormat)
    {
        $this->EncryptedFormat = $EncryptedFormat;
    }

    /**
     * @return mixed
     */
    public function getEncryptedFormat()
    {
        return $this->EncryptedFormat;
    }

    /**
     * @param mixed $EncryptedTrack1Data
     */
    public function setEncryptedTrack1Data($EncryptedTrack1Data)
    {
        $this->EncryptedTrack1Data = $EncryptedTrack1Data;
    }

    /**
     * @return mixed
     */
    public function getEncryptedTrack1Data()
    {
        return $this->EncryptedTrack1Data;
    }

    /**
     * @param mixed $EncryptedTrack2Data
     */
    public function setEncryptedTrack2Data($EncryptedTrack2Data)
    {
        $this->EncryptedTrack2Data = $EncryptedTrack2Data;
    }

    /**
     * @return mixed
     */
    public function getEncryptedTrack2Data()
    {
        return $this->EncryptedTrack2Data;
    }

    /**
     * @param mixed $ExpirationMonth
     */
    public function setExpirationMonth($ExpirationMonth)
    {
        $this->ExpirationMonth = $ExpirationMonth;
    }

    /**
     * @return mixed
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }

    /**
     * @param mixed $ExpirationYear
     */
    public function setExpirationYear($ExpirationYear)
    {
        $this->ExpirationYear = $ExpirationYear;
    }

    /**
     * @return mixed
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }

    /**
     * @param mixed $TokenID
     */
    public function setTokenID($TokenID)
    {
        $this->TokenID = $TokenID;
    }

    /**
     * @return mixed
     */
    public function getTokenID()
    {
        return $this->TokenID;
    }

    /**
     * @param mixed $TokenValue
     */
    public function setTokenValue($TokenValue)
    {
        $this->TokenValue = $TokenValue;
    }

    /**
     * @return mixed
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }

    /**
     * @param mixed $Track1Data
     */
    public function setTrack1Data($Track1Data)
    {
        $this->Track1Data = $Track1Data;
    }

    /**
     * @return mixed
     */
    public function getTrack1Data()
    {
        return $this->Track1Data;
    }

    /**
     * @param mixed $Track2Data
     */
    public function setTrack2Data($Track2Data)
    {
        $this->Track2Data = $Track2Data;
    }

    /**
     * @return mixed
     */
    public function getTrack2Data()
    {
        return $this->Track2Data;
    }



} 