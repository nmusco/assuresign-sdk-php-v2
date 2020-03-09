<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for FileRetrievalMethod EnumType
 * @subpackage Enumerations
 */
class FileRetrievalMethod
{
    /**
     * Constant for value 'BasicHttp'
     * @return string 'BasicHttp'
     */
    const VALUE_BASIC_HTTP = 'BasicHttp';
    /**
     * Constant for value 'SalesforceApi'
     * @return string 'SalesforceApi'
     */
    const VALUE_SALESFORCE_API = 'SalesforceApi';
    /**
     * Constant for value 'Sftp'
     * @return string 'Sftp'
     */
    const VALUE_SFTP = 'Sftp';
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
     * @uses self::VALUE_BASIC_HTTP
     * @uses self::VALUE_SALESFORCE_API
     * @uses self::VALUE_SFTP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BASIC_HTTP,
            self::VALUE_SALESFORCE_API,
            self::VALUE_SFTP,
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
