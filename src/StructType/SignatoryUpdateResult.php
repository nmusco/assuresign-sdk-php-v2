<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatoryUpdateResult StructType
 * @subpackage Structs
 */
class SignatoryUpdateResult extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException
     */
    public $Exceptions;
    /**
     * The SignatoryId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $SignatoryId;
    /**
     * The SignatoryEmail
     * @var string
     */
    public $SignatoryEmail;
    /**
     * The SignatoryMobilePhone
     * @var string
     */
    public $SignatoryMobilePhone;
    /**
     * Constructor method for SignatoryUpdateResult
     * @uses SignatoryUpdateResult::setId()
     * @uses SignatoryUpdateResult::setSuccess()
     * @uses SignatoryUpdateResult::setExceptions()
     * @uses SignatoryUpdateResult::setSignatoryId()
     * @uses SignatoryUpdateResult::setSignatoryEmail()
     * @uses SignatoryUpdateResult::setSignatoryMobilePhone()
     * @param string $id
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException $exceptions
     * @param string $signatoryId
     * @param string $signatoryEmail
     * @param string $signatoryMobilePhone
     */
    public function __construct($id = null, $success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException $exceptions = null, $signatoryId = null, $signatoryEmail = null, $signatoryMobilePhone = null)
    {
        $this
            ->setId($id)
            ->setSuccess($success)
            ->setExceptions($exceptions)
            ->setSignatoryId($signatoryId)
            ->setSignatoryEmail($signatoryEmail)
            ->setSignatoryMobilePhone($signatoryMobilePhone);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Success value
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get SignatoryId value
     * @return string|null
     */
    public function getSignatoryId()
    {
        return $this->SignatoryId;
    }
    /**
     * Set SignatoryId value
     * @param string $signatoryId
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
     */
    public function setSignatoryId($signatoryId = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryId) && !is_string($signatoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryId, true), gettype($signatoryId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($signatoryId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $signatoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($signatoryId, true)), __LINE__);
        }
        $this->SignatoryId = $signatoryId;
        return $this;
    }
    /**
     * Get SignatoryEmail value
     * @return string|null
     */
    public function getSignatoryEmail()
    {
        return $this->SignatoryEmail;
    }
    /**
     * Set SignatoryEmail value
     * @param string $signatoryEmail
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
     */
    public function setSignatoryEmail($signatoryEmail = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryEmail) && !is_string($signatoryEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryEmail, true), gettype($signatoryEmail)), __LINE__);
        }
        $this->SignatoryEmail = $signatoryEmail;
        return $this;
    }
    /**
     * Get SignatoryMobilePhone value
     * @return string|null
     */
    public function getSignatoryMobilePhone()
    {
        return $this->SignatoryMobilePhone;
    }
    /**
     * Set SignatoryMobilePhone value
     * @param string $signatoryMobilePhone
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
     */
    public function setSignatoryMobilePhone($signatoryMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryMobilePhone) && !is_string($signatoryMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryMobilePhone, true), gettype($signatoryMobilePhone)), __LINE__);
        }
        $this->SignatoryMobilePhone = $signatoryMobilePhone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult
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
