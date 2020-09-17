<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnvelopeStatusType EnumType
 * @subpackage Enumerations
 */
class EnvelopeStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Created'
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'InProgress'
     * @return string 'InProgress'
     */
    const VALUE_IN_PROGRESS = 'InProgress';
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
     * Constant for value 'Staled'
     * @return string 'Staled'
     */
    const VALUE_STALED = 'Staled';
    /**
     * Constant for value 'SignerAuthenticationFailed'
     * @return string 'SignerAuthenticationFailed'
     */
    const VALUE_SIGNER_AUTHENTICATION_FAILED = 'SignerAuthenticationFailed';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_IN_PROGRESS
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_STALED
     * @uses self::VALUE_SIGNER_AUTHENTICATION_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATED,
            self::VALUE_IN_PROGRESS,
            self::VALUE_COMPLETED,
            self::VALUE_EXPIRED,
            self::VALUE_DECLINED,
            self::VALUE_CANCELLED,
            self::VALUE_STALED,
            self::VALUE_SIGNER_AUTHENTICATION_FAILED,
        );
    }
}
