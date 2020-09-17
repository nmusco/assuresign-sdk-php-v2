<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FileRetrievalMethod EnumType
 * @subpackage Enumerations
 */
class FileRetrievalMethod extends AbstractStructEnumBase
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
}
