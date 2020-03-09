<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for EnvelopeDocumentStatusType EnumType
 * @subpackage Enumerations
 */
class EnvelopeDocumentStatusType
{
    /**
     * Constant for value 'Created'
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'SigningStepInProgress'
     * @return string 'SigningStepInProgress'
     */
    const VALUE_SIGNING_STEP_IN_PROGRESS = 'SigningStepInProgress';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Expired'
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
    /**
     * Constant for value 'Declined'
     * @return string 'Declined'
     */
    const VALUE_DECLINED = 'Declined';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'SignerAuthenticationFailed'
     * @return string 'SignerAuthenticationFailed'
     */
    const VALUE_SIGNER_AUTHENTICATION_FAILED = 'SignerAuthenticationFailed';
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
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_SIGNING_STEP_IN_PROGRESS
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_SIGNER_AUTHENTICATION_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATED,
            self::VALUE_SIGNING_STEP_IN_PROGRESS,
            self::VALUE_COMPLETED,
            self::VALUE_EXPIRED,
            self::VALUE_DECLINED,
            self::VALUE_CANCELLED,
            self::VALUE_SIGNER_AUTHENTICATION_FAILED,
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
