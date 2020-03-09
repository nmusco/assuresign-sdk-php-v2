<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypedParameterInfo StructType
 * @subpackage Structs
 */
class TypedParameterInfo extends ParameterInfo
{
    /**
     * The DefaultValue
     * @var string
     */
    public $DefaultValue;
    /**
     * The Regex
     * @var string
     */
    public $Regex;
    /**
     * The ValidationMessage
     * @var string
     */
    public $ValidationMessage;
    /**
     * Constructor method for TypedParameterInfo
     * @uses TypedParameterInfo::setDefaultValue()
     * @uses TypedParameterInfo::setRegex()
     * @uses TypedParameterInfo::setValidationMessage()
     * @param string $defaultValue
     * @param string $regex
     * @param string $validationMessage
     */
    public function __construct($defaultValue = null, $regex = null, $validationMessage = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setRegex($regex)
            ->setValidationMessage($validationMessage);
    }
    /**
     * Get DefaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param string $defaultValue
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterInfo
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->DefaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get Regex value
     * @return string|null
     */
    public function getRegex()
    {
        return $this->Regex;
    }
    /**
     * Set Regex value
     * @param string $regex
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterInfo
     */
    public function setRegex($regex = null)
    {
        // validation for constraint: string
        if (!is_null($regex) && !is_string($regex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regex, true), gettype($regex)), __LINE__);
        }
        $this->Regex = $regex;
        return $this;
    }
    /**
     * Get ValidationMessage value
     * @return string|null
     */
    public function getValidationMessage()
    {
        return $this->ValidationMessage;
    }
    /**
     * Set ValidationMessage value
     * @param string $validationMessage
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterInfo
     */
    public function setValidationMessage($validationMessage = null)
    {
        // validation for constraint: string
        if (!is_null($validationMessage) && !is_string($validationMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validationMessage, true), gettype($validationMessage)), __LINE__);
        }
        $this->ValidationMessage = $validationMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterInfo
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
