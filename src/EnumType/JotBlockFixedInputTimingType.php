<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for JotBlockFixedInputTimingType EnumType
 * @subpackage Enumerations
 */
class JotBlockFixedInputTimingType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
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
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_ON_DOCUMENT_START
     * @uses self::VALUE_ON_DOCUMENT_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_ON_DOCUMENT_START,
            self::VALUE_ON_DOCUMENT_COMPLETE,
        );
    }
}
