<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatoryUpdateRequest StructType
 * @subpackage Structs
 */
class SignatoryUpdateRequest extends AbstractStructBase
{
    /**
     * The ContextIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $ContextIdentifier;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The AuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $AuthToken;
    /**
     * The ResendLastEmail
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ResendLastEmail;
    /**
     * The ResendLastSms
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ResendLastSms;
    /**
     * The UpdatedSignatoryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public $UpdatedSignatoryInfo;
    /**
     * The SignatoryId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $SignatoryId;
    /**
     * The SignatoryEmail
     * @var string
     */
    public $SignatoryEmail;
    /**
     * The SignatoryMobilePhone
     * @var string
     */
    public $SignatoryMobilePhone;
    /**
     * Constructor method for SignatoryUpdateRequest
     * @uses SignatoryUpdateRequest::setContextIdentifier()
     * @uses SignatoryUpdateRequest::setId()
     * @uses SignatoryUpdateRequest::setAuthToken()
     * @uses SignatoryUpdateRequest::setResendLastEmail()
     * @uses SignatoryUpdateRequest::setResendLastSms()
     * @uses SignatoryUpdateRequest::setUpdatedSignatoryInfo()
     * @uses SignatoryUpdateRequest::setSignatoryId()
     * @uses SignatoryUpdateRequest::setSignatoryEmail()
     * @uses SignatoryUpdateRequest::setSignatoryMobilePhone()
     * @param string $contextIdentifier
     * @param string $id
     * @param string $authToken
     * @param bool $resendLastEmail
     * @param bool $resendLastSms
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryInfo $updatedSignatoryInfo
     * @param string $signatoryId
     * @param string $signatoryEmail
     * @param string $signatoryMobilePhone
     */
    public function __construct($contextIdentifier = null, $id = null, $authToken = null, $resendLastEmail = null, $resendLastSms = null, \Nmusco\AssureSign\v2\StructType\SignatoryInfo $updatedSignatoryInfo = null, $signatoryId = null, $signatoryEmail = null, $signatoryMobilePhone = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setId($id)
            ->setAuthToken($authToken)
            ->setResendLastEmail($resendLastEmail)
            ->setResendLastSms($resendLastSms)
            ->setUpdatedSignatoryInfo($updatedSignatoryInfo)
            ->setSignatoryId($signatoryId)
            ->setSignatoryEmail($signatoryEmail)
            ->setSignatoryMobilePhone($signatoryMobilePhone);
    }
    /**
     * Get ContextIdentifier value
     * @return string
     */
    public function getContextIdentifier()
    {
        return $this->ContextIdentifier;
    }
    /**
     * Set ContextIdentifier value
     * @param string $contextIdentifier
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setContextIdentifier($contextIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($contextIdentifier) && !is_string($contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextIdentifier, true), gettype($contextIdentifier)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($contextIdentifier) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($contextIdentifier, true)), __LINE__);
        }
        $this->ContextIdentifier = $contextIdentifier;
        return $this;
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get AuthToken value
     * @return string
     */
    public function getAuthToken()
    {
        return $this->AuthToken;
    }
    /**
     * Set AuthToken value
     * @param string $authToken
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setAuthToken($authToken = null)
    {
        // validation for constraint: string
        if (!is_null($authToken) && !is_string($authToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authToken, true), gettype($authToken)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($authToken) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $authToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($authToken, true)), __LINE__);
        }
        $this->AuthToken = $authToken;
        return $this;
    }
    /**
     * Get ResendLastEmail value
     * @return bool
     */
    public function getResendLastEmail()
    {
        return $this->ResendLastEmail;
    }
    /**
     * Set ResendLastEmail value
     * @param bool $resendLastEmail
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setResendLastEmail($resendLastEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($resendLastEmail) && !is_bool($resendLastEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resendLastEmail, true), gettype($resendLastEmail)), __LINE__);
        }
        $this->ResendLastEmail = $resendLastEmail;
        return $this;
    }
    /**
     * Get ResendLastSms value
     * @return bool
     */
    public function getResendLastSms()
    {
        return $this->ResendLastSms;
    }
    /**
     * Set ResendLastSms value
     * @param bool $resendLastSms
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setResendLastSms($resendLastSms = null)
    {
        // validation for constraint: boolean
        if (!is_null($resendLastSms) && !is_bool($resendLastSms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resendLastSms, true), gettype($resendLastSms)), __LINE__);
        }
        $this->ResendLastSms = $resendLastSms;
        return $this;
    }
    /**
     * Get UpdatedSignatoryInfo value
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo|null
     */
    public function getUpdatedSignatoryInfo()
    {
        return $this->UpdatedSignatoryInfo;
    }
    /**
     * Set UpdatedSignatoryInfo value
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryInfo $updatedSignatoryInfo
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setUpdatedSignatoryInfo(\Nmusco\AssureSign\v2\StructType\SignatoryInfo $updatedSignatoryInfo = null)
    {
        $this->UpdatedSignatoryInfo = $updatedSignatoryInfo;
        return $this;
    }
    /**
     * Get SignatoryId value
     * @return string|null
     */
    public function getSignatoryId()
    {
        return $this->SignatoryId;
    }
    /**
     * Set SignatoryId value
     * @param string $signatoryId
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setSignatoryId($signatoryId = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryId) && !is_string($signatoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryId, true), gettype($signatoryId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($signatoryId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $signatoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($signatoryId, true)), __LINE__);
        }
        $this->SignatoryId = $signatoryId;
        return $this;
    }
    /**
     * Get SignatoryEmail value
     * @return string|null
     */
    public function getSignatoryEmail()
    {
        return $this->SignatoryEmail;
    }
    /**
     * Set SignatoryEmail value
     * @param string $signatoryEmail
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setSignatoryEmail($signatoryEmail = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryEmail) && !is_string($signatoryEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryEmail, true), gettype($signatoryEmail)), __LINE__);
        }
        $this->SignatoryEmail = $signatoryEmail;
        return $this;
    }
    /**
     * Get SignatoryMobilePhone value
     * @return string|null
     */
    public function getSignatoryMobilePhone()
    {
        return $this->SignatoryMobilePhone;
    }
    /**
     * Set SignatoryMobilePhone value
     * @param string $signatoryMobilePhone
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest
     */
    public function setSignatoryMobilePhone($signatoryMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryMobilePhone) && !is_string($signatoryMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryMobilePhone, true), gettype($signatoryMobilePhone)), __LINE__);
        }
        $this->SignatoryMobilePhone = $signatoryMobilePhone;
        return $this;
    }
}
