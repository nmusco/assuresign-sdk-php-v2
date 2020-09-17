<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypedParameterItem StructType
 * @subpackage Structs
 */
class TypedParameterItem extends ParameterItemBase
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
     * The SystemName
     * @var string
     */
    public $SystemName;
    /**
     * Constructor method for TypedParameterItem
     * @uses TypedParameterItem::setDefaultValue()
     * @uses TypedParameterItem::setRegex()
     * @uses TypedParameterItem::setValidationMessage()
     * @uses TypedParameterItem::setSystemName()
     * @param string $defaultValue
     * @param string $regex
     * @param string $validationMessage
     * @param string $systemName
     */
    public function __construct($defaultValue = null, $regex = null, $validationMessage = null, $systemName = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setRegex($regex)
            ->setValidationMessage($validationMessage)
            ->setSystemName($systemName);
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
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterItem
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
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterItem
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
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterItem
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
     * Get SystemName value
     * @return string|null
     */
    public function getSystemName()
    {
        return $this->SystemName;
    }
    /**
     * Set SystemName value
     * @param string $systemName
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterItem
     */
    public function setSystemName($systemName = null)
    {
        // validation for constraint: string
        if (!is_null($systemName) && !is_string($systemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemName, true), gettype($systemName)), __LINE__);
        }
        $this->SystemName = $systemName;
        return $this;
    }
}
