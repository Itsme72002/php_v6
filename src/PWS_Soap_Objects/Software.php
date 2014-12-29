<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 10:14 AM
 */

class Software {

    private $ip4address = '192.0.2.235';
    private $terminalId = 2;
    private $sequenceNumber = '123456';
    private $classification = 'unspecified';
    private $entryMode = 'manual';
    private $cardReader = 'unknown';
    private $pinEntry = 'unknown';
    private $balanceEnquiry = 'true';
    private $hostAdjustment = 'true';


    public function getSoftwareArray(){
        return array(

            'IPv4Address' => $this->ip4address,
            'TerminalID' => $this->terminalId,
            'SequenceNumber' => $this->sequenceNumber,
            'Classification' => $this->classification,
            'EntryMode' => $this->entryMode,
            'CardReader' => $this->cardReader,
            'PinEntry' => $this->pinEntry,
            'BalanceEnquiry' => $this->balanceEnquiry,
            'HostAdjustment' => $this->hostAdjustment,

        );
    }

    /**
     * @param mixed $balanceEnquiry
     */
    public function setBalanceEnquiry($balanceEnquiry)
    {
        $this->balanceEnquiry = $balanceEnquiry;
    }

    /**
     * @return mixed
     */
    public function getBalanceEnquiry()
    {
        return $this->balanceEnquiry;
    }

    /**
     * @param mixed $cardReader
     */
    public function setCardReader($cardReader)
    {
        $this->cardReader = $cardReader;
    }

    /**
     * @return mixed
     */
    public function getCardReader()
    {
        return $this->cardReader;
    }

    /**
     * @param mixed $classification
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @param mixed $entryMode
     */
    public function setEntryMode($entryMode)
    {
        $this->entryMode = $entryMode;
    }

    /**
     * @return mixed
     */
    public function getEntryMode()
    {
        return $this->entryMode;
    }

    /**
     * @param mixed $hostAdjustment
     */
    public function setHostAdjustment($hostAdjustment)
    {
        $this->hostAdjustment = $hostAdjustment;
    }

    /**
     * @return mixed
     */
    public function getHostAdjustment()
    {
        return $this->hostAdjustment;
    }

    /**
     * @param mixed $ip4address
     */
    public function setIp4address($ip4address)
    {
        $this->ip4address = $ip4address;
    }

    /**
     * @return mixed
     */
    public function getIp4address()
    {
        return $this->ip4address;
    }

    /**
     * @param mixed $pinEntry
     */
    public function setPinEntry($pinEntry)
    {
        $this->pinEntry = $pinEntry;
    }

    /**
     * @return mixed
     */
    public function getPinEntry()
    {
        return $this->pinEntry;
    }

    /**
     * @param mixed $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @return mixed
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param mixed $terminalId
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * @return mixed
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }


} 