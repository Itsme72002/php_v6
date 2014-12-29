<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 10:49 AM
 */
require_once "CardKeyed.php";
require_once "Address.php";
class Credit {

    private $cardHolderAddress;
    private $partialApprovalCode = 'not_supported';
    private $cardType = 'visa';
    private $cardKeyed;

    function Credit(){
        $this->cardHolderAddress = new Address();
        $this->cardHolderAddress->setBillingAddressLine1('100');
        $this->cardHolderAddress->setBillingCity('Cincinnati');
        $this->cardHolderAddress->setBillingState('OH');
        $this->cardHolderAddress->setBillingZipCode('33606');

        $this->cardKeyed = new CardKeyed();
    }

    function setPrimaryAccountNumber($pan){
        $this->cardKeyed->setPrimaryActNumber($pan);
    }
    function getCreditArray(){
        return array(

            'CardholderAddress' => $this->cardHolderAddress->getAddressArray(),
            'PartialApprovalCode' => $this->partialApprovalCode,
            'CardType' => $this->cardType,
            'CardKeyed' => $this->cardKeyed->getCardKeyedArray(),
        );
    }

    /**
     * @param mixed $cardHolderAddress
     */
    public function setCardHolderAddress($cardHolderAddress)
    {
        $this->cardHolderAddress = $cardHolderAddress;
    }

    /**
     * @return mixed
     */
    public function getCardHolderAddress()
    {
        return $this->cardHolderAddress;
    }

    /**
     * @param mixed $cardKeyed
     */
    public function setCardKeyed($cardKeyed)
    {
        $this->cardKeyed = $cardKeyed;
    }

    /**
     * @return mixed
     */
    public function getCardKeyed()
    {
        return $this->cardKeyed;
    }

    /**
     * @param mixed $cardType
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param mixed $partialApprovalCode
     */
    public function setPartialApprovalCode($partialApprovalCode)
    {
        $this->partialApprovalCode = $partialApprovalCode;
    }

    /**
     * @return mixed
     */
    public function getPartialApprovalCode()
    {
        return $this->partialApprovalCode;
    }




} 