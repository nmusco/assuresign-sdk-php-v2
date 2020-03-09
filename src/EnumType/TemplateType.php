<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for TemplateType EnumType
 * @subpackage Enumerations
 */
class TemplateType
{
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'WorkflowOnly'
     * @return string 'WorkflowOnly'
     */
    const VALUE_WORKFLOW_ONLY = 'WorkflowOnly';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_WORKFLOW_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STANDARD,
            self::VALUE_WORKFLOW_ONLY,
        );
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
