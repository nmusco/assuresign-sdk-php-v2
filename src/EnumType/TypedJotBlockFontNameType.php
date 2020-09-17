<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TypedJotBlockFontNameType EnumType
 * @subpackage Enumerations
 */
class TypedJotBlockFontNameType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'CourierNew'
     * @return string 'CourierNew'
     */
    const VALUE_COURIER_NEW = 'CourierNew';
    /**
     * Constant for value 'Arial'
     * @return string 'Arial'
     */
    const VALUE_ARIAL = 'Arial';
    /**
     * Constant for value 'TimesNewRoman'
     * @return string 'TimesNewRoman'
     */
    const VALUE_TIMES_NEW_ROMAN = 'TimesNewRoman';
    /**
     * Constant for value 'BradleyHandITC'
     * @return string 'BradleyHandITC'
     */
    const VALUE_BRADLEY_HAND_ITC = 'BradleyHandITC';
    /**
     * Constant for value 'BrushScriptBT'
     * @return string 'BrushScriptBT'
     */
    const VALUE_BRUSH_SCRIPT_BT = 'BrushScriptBT';
    /**
     * Constant for value 'MyHandwriting'
     * @return string 'MyHandwriting'
     */
    const VALUE_MY_HANDWRITING = 'MyHandwriting';
    /**
     * Constant for value 'Otto'
     * @return string 'Otto'
     */
    const VALUE_OTTO = 'Otto';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_COURIER_NEW
     * @uses self::VALUE_ARIAL
     * @uses self::VALUE_TIMES_NEW_ROMAN
     * @uses self::VALUE_BRADLEY_HAND_ITC
     * @uses self::VALUE_BRUSH_SCRIPT_BT
     * @uses self::VALUE_MY_HANDWRITING
     * @uses self::VALUE_OTTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_COURIER_NEW,
            self::VALUE_ARIAL,
            self::VALUE_TIMES_NEW_ROMAN,
            self::VALUE_BRADLEY_HAND_ITC,
            self::VALUE_BRUSH_SCRIPT_BT,
            self::VALUE_MY_HANDWRITING,
            self::VALUE_OTTO,
        );
    }
}
