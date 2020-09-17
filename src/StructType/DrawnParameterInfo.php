<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DrawnParameterInfo StructType
 * @subpackage Structs
 */
class DrawnParameterInfo extends ParameterInfo
{
    /**
     * The DefaultValue
     * @var string
     */
    public $DefaultValue;
    /**
     * Constructor method for DrawnParameterInfo
     * @uses DrawnParameterInfo::setDefaultValue()
     * @param string $defaultValue
     */
    public function __construct($defaultValue = null)
    {
        $this
            ->setDefaultValue($defaultValue);
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
     * @return \Nmusco\AssureSign\v2\StructType\DrawnParameterInfo
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
}
