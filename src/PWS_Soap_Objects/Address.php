<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/3/14
 * Time: 10:52 AM
 */

class Address implements \JsonSerializable{

    private $BillingAddressLine1 = '100';
    private $BillingCity = 'Cincinnati';
    private $BillingState = 'OH';
    private $BillingZipcode = '33606';
    private $CountryCode = 'US';

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    function getAddressArray(){
        return array(

            'AddressLine' => $this->BillingAddressLine1,
            'City' => $this->BillingCity,
            'State' => $this->BillingState,
            'PostalCode' => $this->BillingZipCode,
            'CountryCode' => $this->CountryCode,

        );
    }
    /**
     * @param mixed $addressLine
     */
    public function setBillingAddressLine1($addressLine)
    {
        $this->BillingAddressLine1 = $addressLine;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressLine1()
    {
        return $this->BillingAddressLine1;
    }

    /**
     * @param mixed $city
     */
    public function setBillingCity($city)
    {
        $this->BillingCity = $city;
    }

    /**
     * @return mixed
     */
    public function getBillingCity()
    {
        return $this->BillingCity;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setBillingZipCode($postalCode)
    {
        $this->BillingZipCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getBillingZipCode()
    {
        return $this->BillingZipCode;
    }

    /**
     * @param mixed $state
     */
    public function setBillingState($state)
    {
        $this->BillingState = $state;
    }

    /**
     * @return mixed
     */
    public function getBillingState()
    {
        return $this->BillingState;
    }



} 