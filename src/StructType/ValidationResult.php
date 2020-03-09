<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidationResult StructType
 * @subpackage Structs
 */
class ValidationResult extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Code;
    /**
     * The DocumentName
     * @var string
     */
    public $DocumentName;
    /**
     * The Originator
     * @var string
     */
    public $Originator;
    /**
     * The OriginatingCompany
     * @var string
     */
    public $OriginatingCompany;
    /**
     * The DateCompleted
     * @var string
     */
    public $DateCompleted;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ValidationResult
     * @uses ValidationResult::setCode()
     * @uses ValidationResult::setDocumentName()
     * @uses ValidationResult::setOriginator()
     * @uses ValidationResult::setOriginatingCompany()
     * @uses ValidationResult::setDateCompleted()
     * @uses ValidationResult::setDescription()
     * @param string $code
     * @param string $documentName
     * @param string $originator
     * @param string $originatingCompany
     * @param string $dateCompleted
     * @param string $description
     */
    public function __construct($code = null, $documentName = null, $originator = null, $originatingCompany = null, $dateCompleted = null, $description = null)
    {
        $this
            ->setCode($code)
            ->setDocumentName($documentName)
            ->setOriginator($originator)
            ->setOriginatingCompany($originatingCompany)
            ->setDateCompleted($dateCompleted)
            ->setDescription($description);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @uses \Nmusco\AssureSign\v2\EnumType\ResultCode::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\ResultCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $code
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public function setCode($code = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\ResultCode::valueIsValid($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\ResultCode', is_array($code) ? implode(', ', $code) : var_export($code, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\ResultCode::getValidValues())), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get DocumentName value
     * @return string|null
     */
    public function getDocumentName()
    {
        return $this->DocumentName;
    }
    /**
     * Set DocumentName value
     * @param string $documentName
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public function setDocumentName($documentName = null)
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentName, true), gettype($documentName)), __LINE__);
        }
        $this->DocumentName = $documentName;
        return $this;
    }
    /**
     * Get Originator value
     * @return string|null
     */
    public function getOriginator()
    {
        return $this->Originator;
    }
    /**
     * Set Originator value
     * @param string $originator
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public function setOriginator($originator = null)
    {
        // validation for constraint: string
        if (!is_null($originator) && !is_string($originator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originator, true), gettype($originator)), __LINE__);
        }
        $this->Originator = $originator;
        return $this;
    }
    /**
     * Get OriginatingCompany value
     * @return string|null
     */
    public function getOriginatingCompany()
    {
        return $this->OriginatingCompany;
    }
    /**
     * Set OriginatingCompany value
     * @param string $originatingCompany
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public function setOriginatingCompany($originatingCompany = null)
    {
        // validation for constraint: string
        if (!is_null($originatingCompany) && !is_string($originatingCompany)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originatingCompany, true), gettype($originatingCompany)), __LINE__);
        }
        $this->OriginatingCompany = $originatingCompany;
        return $this;
    }
    /**
     * Get DateCompleted value
     * @return string|null
     */
    public function getDateCompleted()
    {
        return $this->DateCompleted;
    }
    /**
     * Set DateCompleted value
     * @param string $dateCompleted
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public function setDateCompleted($dateCompleted = null)
    {
        // validation for constraint: string
        if (!is_null($dateCompleted) && !is_string($dateCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCompleted, true), gettype($dateCompleted)), __LINE__);
        }
        $this->DateCompleted = $dateCompleted;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult
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
