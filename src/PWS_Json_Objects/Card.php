<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 12:12 PM
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