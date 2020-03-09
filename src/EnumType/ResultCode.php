<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for ResultCode EnumType
 * @subpackage Enumerations
 */
class ResultCode
{
    /**
     * Constant for value 'CAN'
     * @return string 'CAN'
     */
    const VALUE_CAN = 'CAN';
    /**
     * Constant for value 'COI'
     * @return string 'COI'
     */
    const VALUE_COI = 'COI';
    /**
     * Constant for value 'COV'
     * @return string 'COV'
     */
    const VALUE_COV = 'COV';
    /**
     * Constant for value 'CPT'
     * @return string 'CPT'
     */
    const VALUE_CPT = 'CPT';
    /**
     * Constant for value 'DCN'
     * @return string 'DCN'
     */
    const VALUE_DCN = 'DCN';
    /**
     * Constant for value 'DFI'
     * @return string 'DFI'
     */
    const VALUE_DFI = 'DFI';
    /**
     * Constant for value 'EGA'
     * @return string 'EGA'
     */
    const VALUE_EGA = 'EGA';
    /**
     * Constant for value 'ERL'
     * @return string 'ERL'
     */
    const VALUE_ERL = 'ERL';
    /**
     * Constant for value 'EXP'
     * @return string 'EXP'
     */
    const VALUE_EXP = 'EXP';
    /**
     * Constant for value 'INC'
     * @return string 'INC'
     */
    const VALUE_INC = 'INC';
    /**
     * Constant for value 'NMD'
     * @return string 'NMD'
     */
    const VALUE_NMD = 'NMD';
    /**
     * Constant for value 'NAS'
     * @return string 'NAS'
     */
    const VALUE_NAS = 'NAS';
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
     * @uses self::VALUE_CAN
     * @uses self::VALUE_COI
     * @uses self::VALUE_COV
     * @uses self::VALUE_CPT
     * @uses self::VALUE_DCN
     * @uses self::VALUE_DFI
     * @uses self::VALUE_EGA
     * @uses self::VALUE_ERL
     * @uses self::VALUE_EXP
     * @uses self::VALUE_INC
     * @uses self::VALUE_NMD
     * @uses self::VALUE_NAS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CAN,
            self::VALUE_COI,
            self::VALUE_COV,
            self::VALUE_CPT,
            self::VALUE_DCN,
            self::VALUE_DFI,
            self::VALUE_EGA,
            self::VALUE_ERL,
            self::VALUE_EXP,
            self::VALUE_INC,
            self::VALUE_NMD,
            self::VALUE_NAS,
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
