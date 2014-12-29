<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 10:10 AM
 */
require_once "/Software.php";
class Merchant_Type {

    private $merchantId = '4445000865113';
    private $networkRouting = 'QQ';
    private $merchantName = 'ABCDEF';
    private $clerkNumber = 1234;
    private $cashierNumber = 12345678;
    private $laneNumber = '123';
    private $divisionNumber = '000';
    private $chainCode = '70110';
    private $storeNumber = '00000001';
    private $software;


    function Merchant_Type(){
        $this->software = new Software();
    }

    function getMerchantArray(){
        return array(
            'MerchantId' => $this->merchantId,
            'NetworkRouting' => $this->networkRouting,
            'MerchantName' => $this->merchantName,
            'ClerkNumber' => $this->clerkNumber,
            'CashierNumber' => $this->cashierNumber,
            'LaneNumber' => $this->laneNumber,
            'DivisionNumber' => $this->divisionNumber,
            'ChainCode' => $this->chainCode,
            'StoreNumber' => $this->storeNumber,
            'Software' => $this->software->getSoftwareArray()
        );
    }


    /**
     * @param mixed $cashierNumber
     */
    public function setCashierNumber($cashierNumber)
    {
        $this->cashierNumber = $cashierNumber;
    }

    /**
     * @return mixed
     */
    public function getCashierNumber()
    {
        return $this->cashierNumber;
    }

    /**
     * @param mixed $chainCode
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;
    }

    /**
     * @return mixed
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * @param mixed $divisionNumber
     */
    public function setDivisionNumber($divisionNumber)
    {
        $this->divisionNumber = $divisionNumber;
    }

    /**
     * @return mixed
     */
    public function getDivisionNumber()
    {
        return $this->divisionNumber;
    }

    /**
     * @param mixed $clerkNumber
     */
    public function setClerkNumber($clerkNumber)
    {
        $this->clerkNumber = $clerkNumber;
    }

    /**
     * @return mixed
     */
    public function getClerkNumber()
    {
        return $this->clerkNumber;
    }

    /**
     * @param mixed $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param mixed $laneNumber
     */
    public function setLaneNumber($laneNumber)
    {
        $this->laneNumber = $laneNumber;
    }

    /**
     * @return mixed
     */
    public function getLaneNumber()
    {
        return $this->laneNumber;
    }

    /**
     * @param mixed $merchantName
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    }

    /**
     * @return mixed
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @param mixed $networkRouting
     */
    public function setNetworkRouting($networkRouting)
    {
        $this->networkRouting = $networkRouting;
    }

    /**
     * @return mixed
     */
    public function getNetworkRouting()
    {
        return $this->networkRouting;
    }

    /**
     * @param mixed $storeNumber
     */
    public function setStoreNumber($storeNumber)
    {
        $this->storeNumber = $storeNumber;
    }

    /**
     * @return mixed
     */
    public function getStoreNumber()
    {
        return $this->storeNumber;
    }

    /**
     * @param \Software $software
     */
    public function setSoftware($software)
    {
        $this->software = $software;
    }

    /**
     * @return \Software
     */
    public function getSoftware()
    {
        return $this->software;
    }





} 