<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for FieldFixedInputTimingType EnumType
 * @subpackage Enumerations
 */
class FieldFixedInputTimingType
{
    /**
     * Constant for value 'OnDocumentStart'
     * @return string 'OnDocumentStart'
     */
    const VALUE_ON_DOCUMENT_START = 'OnDocumentStart';
    /**
     * Constant for value 'OnDocumentComplete'
     * @return string 'OnDocumentComplete'
     */
    const VALUE_ON_DOCUMENT_COMPLETE = 'OnDocumentComplete';
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
     * @uses self::VALUE_ON_DOCUMENT_START
     * @uses self::VALUE_ON_DOCUMENT_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ON_DOCUMENT_START,
            self::VALUE_ON_DOCUMENT_COMPLETE,
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
