<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldFixedInputTimingType EnumType
 * @subpackage Enumerations
 */
class FieldFixedInputTimingType extends AbstractStructEnumBase
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
}
