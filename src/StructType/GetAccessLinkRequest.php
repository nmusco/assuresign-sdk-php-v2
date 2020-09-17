<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLinkRequest StructType
 * @subpackage Structs
 */
class GetAccessLinkRequest extends AbstractStructBase
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
     * The DocumentType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DocumentType;
    /**
     * The EnvelopeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $EnvelopeId;
    /**
     * The EnvelopeAuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $EnvelopeAuthToken;
    /**
     * The DocumentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $DocumentId;
    /**
     * The DocumentAuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $DocumentAuthToken;
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
     * The LinkExpirationDate
     * @var string
     */
    public $LinkExpirationDate;
    /**
     * Constructor method for GetAccessLinkRequest
     * @uses GetAccessLinkRequest::setContextIdentifier()
     * @uses GetAccessLinkRequest::setDocumentType()
     * @uses GetAccessLinkRequest::setEnvelopeId()
     * @uses GetAccessLinkRequest::setEnvelopeAuthToken()
     * @uses GetAccessLinkRequest::setDocumentId()
     * @uses GetAccessLinkRequest::setDocumentAuthToken()
     * @uses GetAccessLinkRequest::setSignatoryId()
     * @uses GetAccessLinkRequest::setSignatoryEmail()
     * @uses GetAccessLinkRequest::setSignatoryMobilePhone()
     * @uses GetAccessLinkRequest::setLinkExpirationDate()
     * @param string $contextIdentifier
     * @param string $documentType
     * @param string $envelopeId
     * @param string $envelopeAuthToken
     * @param string $documentId
     * @param string $documentAuthToken
     * @param string $signatoryId
     * @param string $signatoryEmail
     * @param string $signatoryMobilePhone
     * @param string $linkExpirationDate
     */
    public function __construct($contextIdentifier = null, $documentType = null, $envelopeId = null, $envelopeAuthToken = null, $documentId = null, $documentAuthToken = null, $signatoryId = null, $signatoryEmail = null, $signatoryMobilePhone = null, $linkExpirationDate = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setDocumentType($documentType)
            ->setEnvelopeId($envelopeId)
            ->setEnvelopeAuthToken($envelopeAuthToken)
            ->setDocumentId($documentId)
            ->setDocumentAuthToken($documentAuthToken)
            ->setSignatoryId($signatoryId)
            ->setSignatoryEmail($signatoryEmail)
            ->setSignatoryMobilePhone($signatoryMobilePhone)
            ->setLinkExpirationDate($linkExpirationDate);
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
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
     * Get DocumentType value
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @uses \Nmusco\AssureSign\v2\EnumType\LinkDocumentType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\LinkDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\LinkDocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\LinkDocumentType', is_array($documentType) ? implode(', ', $documentType) : var_export($documentType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\LinkDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get EnvelopeId value
     * @return string|null
     */
    public function getEnvelopeId()
    {
        return $this->EnvelopeId;
    }
    /**
     * Set EnvelopeId value
     * @param string $envelopeId
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public function setEnvelopeId($envelopeId = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeId) && !is_string($envelopeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeId, true), gettype($envelopeId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeId, true)), __LINE__);
        }
        $this->EnvelopeId = $envelopeId;
        return $this;
    }
    /**
     * Get EnvelopeAuthToken value
     * @return string|null
     */
    public function getEnvelopeAuthToken()
    {
        return $this->EnvelopeAuthToken;
    }
    /**
     * Set EnvelopeAuthToken value
     * @param string $envelopeAuthToken
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public function setEnvelopeAuthToken($envelopeAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeAuthToken) && !is_string($envelopeAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeAuthToken, true), gettype($envelopeAuthToken)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeAuthToken) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeAuthToken, true)), __LINE__);
        }
        $this->EnvelopeAuthToken = $envelopeAuthToken;
        return $this;
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($documentId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($documentId, true)), __LINE__);
        }
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get DocumentAuthToken value
     * @return string|null
     */
    public function getDocumentAuthToken()
    {
        return $this->DocumentAuthToken;
    }
    /**
     * Set DocumentAuthToken value
     * @param string $documentAuthToken
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public function setDocumentAuthToken($documentAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($documentAuthToken) && !is_string($documentAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentAuthToken, true), gettype($documentAuthToken)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($documentAuthToken) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $documentAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($documentAuthToken, true)), __LINE__);
        }
        $this->DocumentAuthToken = $documentAuthToken;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
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
    /**
     * Get LinkExpirationDate value
     * @return string|null
     */
    public function getLinkExpirationDate()
    {
        return $this->LinkExpirationDate;
    }
    /**
     * Set LinkExpirationDate value
     * @param string $linkExpirationDate
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public function setLinkExpirationDate($linkExpirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($linkExpirationDate) && !is_string($linkExpirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkExpirationDate, true), gettype($linkExpirationDate)), __LINE__);
        }
        $this->LinkExpirationDate = $linkExpirationDate;
        return $this;
    }
}
