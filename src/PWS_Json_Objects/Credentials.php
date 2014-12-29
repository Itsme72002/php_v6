<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 12:10 PM
 */

namespace PWS_Json_Objects;


class Credentials implements \JsonSerializable{
    private $AccountID;
    private $Password;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @param mixed $AccountID
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;
    }

    /**
     * @return mixed
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }


} 