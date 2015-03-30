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