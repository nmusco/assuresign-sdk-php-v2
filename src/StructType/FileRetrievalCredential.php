<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileRetrievalCredential StructType
 * @subpackage Structs
 */
class FileRetrievalCredential extends AbstractStructBase
{
    /**
     * The Username
     * @var string
     */
    public $Username;
    /**
     * The Password
     * @var string
     */
    public $Password;
    /**
     * The Domain
     * @var string
     */
    public $Domain;
    /**
     * Constructor method for FileRetrievalCredential
     * @uses FileRetrievalCredential::setUsername()
     * @uses FileRetrievalCredential::setPassword()
     * @uses FileRetrievalCredential::setDomain()
     * @param string $username
     * @param string $password
     * @param string $domain
     */
    public function __construct($username = null, $password = null, $domain = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setDomain($domain);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param string $domain
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
