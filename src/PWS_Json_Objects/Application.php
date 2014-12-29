<?php
/**
 * Created by PhpStorm.
 * User: N13811A
 * Date: 9/4/14
 * Time: 12:11 PM
 */

namespace PWS_Json_Objects;


class Application implements \JsonSerializable{
    private $ApplicationID;
    private $ApplicationName;

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @param mixed $ApplicationID
     */
    public function setApplicationID($ApplicationID)
    {
        $this->ApplicationID = $ApplicationID;
    }

    /**
     * @return mixed
     */
    public function getApplicationID()
    {
        return $this->ApplicationID;
    }

    /**
     * @param mixed $ApplicationName
     */
    public function setApplicationName($ApplicationName)
    {
        $this->ApplicationName = $ApplicationName;
    }

    /**
     * @return mixed
     */
    public function getApplicationName()
    {
        return $this->ApplicationName;
    }


} 