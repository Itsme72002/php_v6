<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 10:55 AM
 */

class CardKeyed {

    private $primaryActNumber = '4388110000000001';
    private $expirationDate = '2014-12';
    private $cardSecurityCode = '382';



    function getCardKeyedArray(){
        return array(
            'PrimaryAccountNumber' => $this->primaryActNumber,
            'ExpirationDate' => $this->expirationDate,
            'CardSecurityCode' => $this->cardSecurityCode,
        );
    }
    /**
     * @param mixed $cardSecurityCode
     */
    public function setCardSecurityCode($cardSecurityCode)
    {
        $this->cardSecurityCode = $cardSecurityCode;
    }

    /**
     * @return mixed
     */
    public function getCardSecurityCode()
    {
        return $this->cardSecurityCode;
    }

    /**
     * @param mixed $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param mixed $primaryActNumber
     */
    public function setPrimaryActNumber($primaryActNumber)
    {
        $this->primaryActNumber = $primaryActNumber;
    }

    /**
     * @return mixed
     */
    public function getPrimaryActNumber()
    {
        return $this->primaryActNumber;
    }


} 