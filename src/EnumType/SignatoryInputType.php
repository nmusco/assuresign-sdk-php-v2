<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for SignatoryInputType EnumType
 * @subpackage Enumerations
 */
class SignatoryInputType
{
    /**
     * Constant for value 'FreeText'
     * @return string 'FreeText'
     */
    const VALUE_FREE_TEXT = 'FreeText';
    /**
     * Constant for value 'Prefill'
     * @return string 'Prefill'
     */
    const VALUE_PREFILL = 'Prefill';
    /**
     * Constant for value 'MultipleChoiceText'
     * @return string 'MultipleChoiceText'
     */
    const VALUE_MULTIPLE_CHOICE_TEXT = 'MultipleChoiceText';
    /**
     * Constant for value 'MultipleChoiceGraphic'
     * @return string 'MultipleChoiceGraphic'
     */
    const VALUE_MULTIPLE_CHOICE_GRAPHIC = 'MultipleChoiceGraphic';
    /**
     * Constant for value 'Timestamp'
     * @return string 'Timestamp'
     */
    const VALUE_TIMESTAMP = 'Timestamp';
    /**
     * Constant for value 'CustomValidation'
     * @return string 'CustomValidation'
     */
    const VALUE_CUSTOM_VALIDATION = 'CustomValidation';
    /**
     * Constant for value 'MultipleChoiceRadio'
     * @return string 'MultipleChoiceRadio'
     */
    const VALUE_MULTIPLE_CHOICE_RADIO = 'MultipleChoiceRadio';
    /**
     * Constant for value 'MultipleChoiceCheckbox'
     * @return string 'MultipleChoiceCheckbox'
     */
    const VALUE_MULTIPLE_CHOICE_CHECKBOX = 'MultipleChoiceCheckbox';
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
     * @uses self::VALUE_FREE_TEXT
     * @uses self::VALUE_PREFILL
     * @uses self::VALUE_MULTIPLE_CHOICE_TEXT
     * @uses self::VALUE_MULTIPLE_CHOICE_GRAPHIC
     * @uses self::VALUE_TIMESTAMP
     * @uses self::VALUE_CUSTOM_VALIDATION
     * @uses self::VALUE_MULTIPLE_CHOICE_RADIO
     * @uses self::VALUE_MULTIPLE_CHOICE_CHECKBOX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FREE_TEXT,
            self::VALUE_PREFILL,
            self::VALUE_MULTIPLE_CHOICE_TEXT,
            self::VALUE_MULTIPLE_CHOICE_GRAPHIC,
            self::VALUE_TIMESTAMP,
            self::VALUE_CUSTOM_VALIDATION,
            self::VALUE_MULTIPLE_CHOICE_RADIO,
            self::VALUE_MULTIPLE_CHOICE_CHECKBOX,
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
