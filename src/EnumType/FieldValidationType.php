<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldValidationType EnumType
 * @subpackage Enumerations
 */
class FieldValidationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Date_CurrentDatePrefill'
     * @return string 'Date_CurrentDatePrefill'
     */
    const VALUE_DATE_CURRENT_DATE_PREFILL = 'Date_CurrentDatePrefill';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'Alphanumeric_FirstNamePrefill'
     * @return string 'Alphanumeric_FirstNamePrefill'
     */
    const VALUE_ALPHANUMERIC_FIRST_NAME_PREFILL = 'Alphanumeric_FirstNamePrefill';
    /**
     * Constant for value 'Alphanumeric_LastNamePrefill'
     * @return string 'Alphanumeric_LastNamePrefill'
     */
    const VALUE_ALPHANUMERIC_LAST_NAME_PREFILL = 'Alphanumeric_LastNamePrefill';
    /**
     * Constant for value 'Alphanumeric_FullNamePrefill'
     * @return string 'Alphanumeric_FullNamePrefill'
     */
    const VALUE_ALPHANUMERIC_FULL_NAME_PREFILL = 'Alphanumeric_FullNamePrefill';
    /**
     * Constant for value 'Alphanumeric_EmailPrefill'
     * @return string 'Alphanumeric_EmailPrefill'
     */
    const VALUE_ALPHANUMERIC_EMAIL_PREFILL = 'Alphanumeric_EmailPrefill';
    /**
     * Constant for value 'Numeric'
     * @return string 'Numeric'
     */
    const VALUE_NUMERIC = 'Numeric';
    /**
     * Constant for value 'DateShort_CurrentDatePrefill'
     * @return string 'DateShort_CurrentDatePrefill'
     */
    const VALUE_DATE_SHORT_CURRENT_DATE_PREFILL = 'DateShort_CurrentDatePrefill';
    /**
     * Constant for value 'DateLong_CurrentDatePrefill'
     * @return string 'DateLong_CurrentDatePrefill'
     */
    const VALUE_DATE_LONG_CURRENT_DATE_PREFILL = 'DateLong_CurrentDatePrefill';
    /**
     * Constant for value 'TenDigitPhoneNumber'
     * @return string 'TenDigitPhoneNumber'
     */
    const VALUE_TEN_DIGIT_PHONE_NUMBER = 'TenDigitPhoneNumber';
    /**
     * Constant for value 'DateDDMMYYYY_CurrentDatePrefill'
     * @return string 'DateDDMMYYYY_CurrentDatePrefill'
     */
    const VALUE_DATE_DDMMYYYY_CURRENT_DATE_PREFILL = 'DateDDMMYYYY_CurrentDatePrefill';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DATE_CURRENT_DATE_PREFILL
     * @uses self::VALUE_DATE
     * @uses self::VALUE_ALPHANUMERIC_FIRST_NAME_PREFILL
     * @uses self::VALUE_ALPHANUMERIC_LAST_NAME_PREFILL
     * @uses self::VALUE_ALPHANUMERIC_FULL_NAME_PREFILL
     * @uses self::VALUE_ALPHANUMERIC_EMAIL_PREFILL
     * @uses self::VALUE_NUMERIC
     * @uses self::VALUE_DATE_SHORT_CURRENT_DATE_PREFILL
     * @uses self::VALUE_DATE_LONG_CURRENT_DATE_PREFILL
     * @uses self::VALUE_TEN_DIGIT_PHONE_NUMBER
     * @uses self::VALUE_DATE_DDMMYYYY_CURRENT_DATE_PREFILL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_NONE,
            self::VALUE_DATE_CURRENT_DATE_PREFILL,
            self::VALUE_DATE,
            self::VALUE_ALPHANUMERIC_FIRST_NAME_PREFILL,
            self::VALUE_ALPHANUMERIC_LAST_NAME_PREFILL,
            self::VALUE_ALPHANUMERIC_FULL_NAME_PREFILL,
            self::VALUE_ALPHANUMERIC_EMAIL_PREFILL,
            self::VALUE_NUMERIC,
            self::VALUE_DATE_SHORT_CURRENT_DATE_PREFILL,
            self::VALUE_DATE_LONG_CURRENT_DATE_PREFILL,
            self::VALUE_TEN_DIGIT_PHONE_NUMBER,
            self::VALUE_DATE_DDMMYYYY_CURRENT_DATE_PREFILL,
        );
    }
}
