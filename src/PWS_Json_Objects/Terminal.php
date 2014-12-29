<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 12:11 PM
 */

namespace PWS_Json_Objects;


class Terminal implements \JsonSerializable{

    private $TerminalID;

    // Optional
    private $IPv4Address;
    private $IPv6Address;
    private $TerminalEnvironmentalCode;
    private $CardInputCode;

    private $PinEntry;
    private $BalanceInquiry;
    private $HostAdjustment;
    private $DeviceType;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @param mixed $DeviceType
     */
    public function setDeviceType($DeviceType)
    {
        $this->DeviceType = $DeviceType;
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }


    /**
     * @param mixed $BalanceInquiry
     */
    public function setBalanceInquiry($BalanceInquiry)
    {
        $this->BalanceInquiry = $BalanceInquiry;
    }

    /**
     * @return mixed
     */
    public function getBalanceInquiry()
    {
        return $this->BalanceInquiry;
    }

    /**
     * @param mixed $CardInputCode
     */
    public function setCardInputCode($CardInputCode)
    {
        $this->CardInputCode = $CardInputCode;
    }

    /**
     * @return mixed
     */
    public function getCardInputCode()
    {
        return $this->CardInputCode;
    }

    /**
     * @param mixed $CardReader
     */
    public function setCardReader($CardReader)
    {
        $this->CardReader = $CardReader;
    }

    /**
     * @return mixed
     */
    public function getCardReader()
    {
        return $this->CardReader;
    }

    /**
     * @param mixed $EntryMode
     */
    public function setEntryMode($EntryMode)
    {
        $this->EntryMode = $EntryMode;
    }

    /**
     * @return mixed
     */
    public function getEntryMode()
    {
        return $this->EntryMode;
    }

    /**
     * @param mixed $HostAdjustment
     */
    public function setHostAdjustment($HostAdjustment)
    {
        $this->HostAdjustment = $HostAdjustment;
    }

    /**
     * @return mixed
     */
    public function getHostAdjustment()
    {
        return $this->HostAdjustment;
    }

    /**
     * @param mixed $IPv4Address
     */
    public function setIPv4Address($IPv4Address)
    {
        $this->IPv4Address = $IPv4Address;
    }

    /**
     * @return mixed
     */
    public function getIPv4Address()
    {
        return $this->IPv4Address;
    }

    /**
     * @param mixed $IPv6Address
     */
    public function setIPv6Address($IPv6Address)
    {
        $this->IPv6Address = $IPv6Address;
    }

    /**
     * @return mixed
     */
    public function getIPv6Address()
    {
        return $this->IPv6Address;
    }

    /**
     * @param mixed $PinEntry
     */
    public function setPinEntry($PinEntry)
    {
        $this->PinEntry = $PinEntry;
    }

    /**
     * @return mixed
     */
    public function getPinEntry()
    {
        return $this->PinEntry;
    }

    /**
     * @param mixed $TerminalCapabilityCode
     */
    public function setTerminalEnvironmentalCode($TerminalCapabilityCode)
    {
        $this->TerminalEnvironmentalCode = $TerminalCapabilityCode;
    }

    /**
     * @return mixed
     */
    public function getTerminalEnvironmentalCode()
    {
        return $this->TerminalEnvironmentalCode;
    }

    /**
     * @param mixed $TerminalID
     */
    public function setTerminalID($TerminalID)
    {
        $this->TerminalID = $TerminalID;
    }

    /**
     * @return mixed
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }



} 