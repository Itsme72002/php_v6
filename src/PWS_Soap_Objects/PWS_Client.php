<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 10:07 AM
 */

class PWS_Client {
    private $username = 's.MID2.PAY.WS.NP';
    private $password = 'drUdR9fR';
    private $securityNs = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    private $url = "Resources/PWS V6-cert.wsdl";
    private $soapClient;


    function PWS_Client(){
        $this->setupClient();
    }

    /**
     * This function sets up the PWS soap client and inserts the proper header
     * information into it.
     */
    public function setupClient(){
        echo('Setting up soap client...');
        $this->soapClient = new SoapClient($this->url, array('trace' => 1));
        $header_part = '
        <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
            <wsse:UsernameToken>
                <wsse:Username>' . $this->username . '</wsse:Username>
                <wsse:Password>' . $this->password . '</wsse:Password>
            </wsse:UsernameToken>
        </wsse:Security>';


        $soap_var_header = new SoapVar( $header_part, XSD_ANYXML, null, null, null );
        $soap_header = new SoapHeader( $this->securityNs, 'wsse', $soap_var_header );
        $this->soapClient->__setSoapHeaders($soap_header);
        echo('Done</br>');
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $securityNs
     */
    public function setSecurityNs($securityNs)
    {
        $this->securityNs = $securityNs;
    }

    /**
     * @return string
     */
    public function getSecurityNs()
    {
        return $this->securityNs;
    }

    /**
     * @param mixed $soapClient
     */
    public function setSoapClient($soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @return mixed
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }



} 