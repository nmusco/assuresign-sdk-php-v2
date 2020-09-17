<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SupportedFileType EnumType
 * @subpackage Enumerations
 */
class SupportedFileType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'DOC'
     * @return string 'DOC'
     */
    const VALUE_DOC = 'DOC';
    /**
     * Constant for value 'DOCX'
     * @return string 'DOCX'
     */
    const VALUE_DOCX = 'DOCX';
    /**
     * Constant for value 'RTF'
     * @return string 'RTF'
     */
    const VALUE_RTF = 'RTF';
    /**
     * Constant for value 'HTML'
     * @return string 'HTML'
     */
    const VALUE_HTML = 'HTML';
    /**
     * Constant for value 'HTM'
     * @return string 'HTM'
     */
    const VALUE_HTM = 'HTM';
    /**
     * Constant for value 'ODT'
     * @return string 'ODT'
     */
    const VALUE_ODT = 'ODT';
    /**
     * Constant for value 'TIFF'
     * @return string 'TIFF'
     */
    const VALUE_TIFF = 'TIFF';
    /**
     * Constant for value 'TIF'
     * @return string 'TIF'
     */
    const VALUE_TIF = 'TIF';
    /**
     * Return allowed values
     * @uses self::VALUE_PDF
     * @uses self::VALUE_DOC
     * @uses self::VALUE_DOCX
     * @uses self::VALUE_RTF
     * @uses self::VALUE_HTML
     * @uses self::VALUE_HTM
     * @uses self::VALUE_ODT
     * @uses self::VALUE_TIFF
     * @uses self::VALUE_TIF
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PDF,
            self::VALUE_DOC,
            self::VALUE_DOCX,
            self::VALUE_RTF,
            self::VALUE_HTML,
            self::VALUE_HTM,
            self::VALUE_ODT,
            self::VALUE_TIFF,
            self::VALUE_TIF,
        );
    }
}
