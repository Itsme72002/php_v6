<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 12:11 PM
 */

namespace PWS_Json_Objects;


class Merchant implements \JsonSerializable{

    private $MerchantID;
    private $MerchantName;
    private $NetworkRouting;
    private $CashierNumber;
    private $LaneNumber;
    private $DivisionNumber;
    private $ChainCode;
    private $StoreNumber;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @param mixed $MerchantId
     */
    public function setMerchantID($MerchantId)
    {
        $this->MerchantID = $MerchantId;
    }

    /**
     * @return mixed
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }

    /**
     * @param mixed $MerchantName
     */
    public function setMerchantName($MerchantName)
    {
        $this->MerchantName = $MerchantName;
    }

    /**
     * @return mixed
     */
    public function getMerchantName()
    {
        return $this->MerchantName;
    }



    /**
     * @param mixed $CashierNumber
     */
    public function setCashierNumber($CashierNumber)
    {
        $this->CashierNumber = $CashierNumber;
    }

    /**
     * @return mixed
     */
    public function getCashierNumber()
    {
        return $this->CashierNumber;
    }

    /**
     * @param mixed $ChainCode
     */
    public function setChainCode($ChainCode)
    {
        $this->ChainCode = $ChainCode;
    }

    /**
     * @return mixed
     */
    public function getChainCode()
    {
        return $this->ChainCode;
    }

    /**
     * @param mixed $DivisionNumber
     */
    public function setDivisionNumber($DivisionNumber)
    {
        $this->DivisionNumber = $DivisionNumber;
    }

    /**
     * @return mixed
     */
    public function getDivisionNumber()
    {
        return $this->DivisionNumber;
    }

    /**
     * @param mixed $LaneNumber
     */
    public function setLaneNumber($LaneNumber)
    {
        $this->LaneNumber = $LaneNumber;
    }

    /**
     * @return mixed
     */
    public function getLaneNumber()
    {
        return $this->LaneNumber;
    }

    /**
     * @param mixed $NetworkRouting
     */
    public function setNetworkRouting($NetworkRouting)
    {
        $this->NetworkRouting = $NetworkRouting;
    }

    /**
     * @return mixed
     */
    public function getNetworkRouting()
    {
        return $this->NetworkRouting;
    }

    /**
     * @param mixed $StoreNumber
     */
    public function setStoreNumber($StoreNumber)
    {
        $this->StoreNumber = $StoreNumber;
    }

    /**
     * @return mixed
     */
    public function getStoreNumber()
    {
        return $this->StoreNumber;
    }



} 