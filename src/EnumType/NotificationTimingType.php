<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationTimingType EnumType
 * @subpackage Enumerations
 */
class NotificationTimingType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SigningStep_Started'
     * @return string 'SigningStep_Started'
     */
    const VALUE_SIGNING_STEP_STARTED = 'SigningStep_Started';
    /**
     * Constant for value 'SigningStep_Completed'
     * @return string 'SigningStep_Completed'
     */
    const VALUE_SIGNING_STEP_COMPLETED = 'SigningStep_Completed';
    /**
     * Constant for value 'Document_Started'
     * @return string 'Document_Started'
     */
    const VALUE_DOCUMENT_STARTED = 'Document_Started';
    /**
     * Constant for value 'Document_Completed'
     * @return string 'Document_Completed'
     */
    const VALUE_DOCUMENT_COMPLETED = 'Document_Completed';
    /**
     * Constant for value 'Document_ExpirationWarning'
     * @return string 'Document_ExpirationWarning'
     */
    const VALUE_DOCUMENT_EXPIRATION_WARNING = 'Document_ExpirationWarning';
    /**
     * Constant for value 'Document_Expired'
     * @return string 'Document_Expired'
     */
    const VALUE_DOCUMENT_EXPIRED = 'Document_Expired';
    /**
     * Constant for value 'SigningStep_LandingPageVisited'
     * @return string 'SigningStep_LandingPageVisited'
     */
    const VALUE_SIGNING_STEP_LANDING_PAGE_VISITED = 'SigningStep_LandingPageVisited';
    /**
     * Constant for value 'Document_Cancelled'
     * @return string 'Document_Cancelled'
     */
    const VALUE_DOCUMENT_CANCELLED = 'Document_Cancelled';
    /**
     * Constant for value 'Document_Declined'
     * @return string 'Document_Declined'
     */
    const VALUE_DOCUMENT_DECLINED = 'Document_Declined';
    /**
     * Constant for value 'Envelope_Closure'
     * @return string 'Envelope_Closure'
     */
    const VALUE_ENVELOPE_CLOSURE = 'Envelope_Closure';
    /**
     * Constant for value 'Envelope_PreExpire'
     * @return string 'Envelope_PreExpire'
     */
    const VALUE_ENVELOPE_PRE_EXPIRE = 'Envelope_PreExpire';
    /**
     * Constant for value 'Envelope_Expire'
     * @return string 'Envelope_Expire'
     */
    const VALUE_ENVELOPE_EXPIRE = 'Envelope_Expire';
    /**
     * Constant for value 'Envelope_Complete'
     * @return string 'Envelope_Complete'
     */
    const VALUE_ENVELOPE_COMPLETE = 'Envelope_Complete';
    /**
     * Constant for value 'Envelope_Cancel'
     * @return string 'Envelope_Cancel'
     */
    const VALUE_ENVELOPE_CANCEL = 'Envelope_Cancel';
    /**
     * Constant for value 'Envelope_Decline'
     * @return string 'Envelope_Decline'
     */
    const VALUE_ENVELOPE_DECLINE = 'Envelope_Decline';
    /**
     * Constant for value 'Document_SignerFeedback'
     * @return string 'Document_SignerFeedback'
     */
    const VALUE_DOCUMENT_SIGNER_FEEDBACK = 'Document_SignerFeedback';
    /**
     * Constant for value 'Envelope_SignerFeedback'
     * @return string 'Envelope_SignerFeedback'
     */
    const VALUE_ENVELOPE_SIGNER_FEEDBACK = 'Envelope_SignerFeedback';
    /**
     * Constant for value 'Document_SignerAuthFailure'
     * @return string 'Document_SignerAuthFailure'
     */
    const VALUE_DOCUMENT_SIGNER_AUTH_FAILURE = 'Document_SignerAuthFailure';
    /**
     * Constant for value 'Envelope_SignerAuthFailure'
     * @return string 'Envelope_SignerAuthFailure'
     */
    const VALUE_ENVELOPE_SIGNER_AUTH_FAILURE = 'Envelope_SignerAuthFailure';
    /**
     * Constant for value 'Document_SignerKbaStart'
     * @return string 'Document_SignerKbaStart'
     */
    const VALUE_DOCUMENT_SIGNER_KBA_START = 'Document_SignerKbaStart';
    /**
     * Constant for value 'Envelope_SignerKbaStart'
     * @return string 'Envelope_SignerKbaStart'
     */
    const VALUE_ENVELOPE_SIGNER_KBA_START = 'Envelope_SignerKbaStart';
    /**
     * Constant for value 'Document_SignerKbaComplete'
     * @return string 'Document_SignerKbaComplete'
     */
    const VALUE_DOCUMENT_SIGNER_KBA_COMPLETE = 'Document_SignerKbaComplete';
    /**
     * Constant for value 'Envelope_SignerKbaComplete'
     * @return string 'Envelope_SignerKbaComplete'
     */
    const VALUE_ENVELOPE_SIGNER_KBA_COMPLETE = 'Envelope_SignerKbaComplete';
    /**
     * Return allowed values
     * @uses self::VALUE_SIGNING_STEP_STARTED
     * @uses self::VALUE_SIGNING_STEP_COMPLETED
     * @uses self::VALUE_DOCUMENT_STARTED
     * @uses self::VALUE_DOCUMENT_COMPLETED
     * @uses self::VALUE_DOCUMENT_EXPIRATION_WARNING
     * @uses self::VALUE_DOCUMENT_EXPIRED
     * @uses self::VALUE_SIGNING_STEP_LANDING_PAGE_VISITED
     * @uses self::VALUE_DOCUMENT_CANCELLED
     * @uses self::VALUE_DOCUMENT_DECLINED
     * @uses self::VALUE_ENVELOPE_CLOSURE
     * @uses self::VALUE_ENVELOPE_PRE_EXPIRE
     * @uses self::VALUE_ENVELOPE_EXPIRE
     * @uses self::VALUE_ENVELOPE_COMPLETE
     * @uses self::VALUE_ENVELOPE_CANCEL
     * @uses self::VALUE_ENVELOPE_DECLINE
     * @uses self::VALUE_DOCUMENT_SIGNER_FEEDBACK
     * @uses self::VALUE_ENVELOPE_SIGNER_FEEDBACK
     * @uses self::VALUE_DOCUMENT_SIGNER_AUTH_FAILURE
     * @uses self::VALUE_ENVELOPE_SIGNER_AUTH_FAILURE
     * @uses self::VALUE_DOCUMENT_SIGNER_KBA_START
     * @uses self::VALUE_ENVELOPE_SIGNER_KBA_START
     * @uses self::VALUE_DOCUMENT_SIGNER_KBA_COMPLETE
     * @uses self::VALUE_ENVELOPE_SIGNER_KBA_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGNING_STEP_STARTED,
            self::VALUE_SIGNING_STEP_COMPLETED,
            self::VALUE_DOCUMENT_STARTED,
            self::VALUE_DOCUMENT_COMPLETED,
            self::VALUE_DOCUMENT_EXPIRATION_WARNING,
            self::VALUE_DOCUMENT_EXPIRED,
            self::VALUE_SIGNING_STEP_LANDING_PAGE_VISITED,
            self::VALUE_DOCUMENT_CANCELLED,
            self::VALUE_DOCUMENT_DECLINED,
            self::VALUE_ENVELOPE_CLOSURE,
            self::VALUE_ENVELOPE_PRE_EXPIRE,
            self::VALUE_ENVELOPE_EXPIRE,
            self::VALUE_ENVELOPE_COMPLETE,
            self::VALUE_ENVELOPE_CANCEL,
            self::VALUE_ENVELOPE_DECLINE,
            self::VALUE_DOCUMENT_SIGNER_FEEDBACK,
            self::VALUE_ENVELOPE_SIGNER_FEEDBACK,
            self::VALUE_DOCUMENT_SIGNER_AUTH_FAILURE,
            self::VALUE_ENVELOPE_SIGNER_AUTH_FAILURE,
            self::VALUE_DOCUMENT_SIGNER_KBA_START,
            self::VALUE_ENVELOPE_SIGNER_KBA_START,
            self::VALUE_DOCUMENT_SIGNER_KBA_COMPLETE,
            self::VALUE_ENVELOPE_SIGNER_KBA_COMPLETE,
        );
    }
}
