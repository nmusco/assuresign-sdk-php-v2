<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSigningLinksRequest StructType
 * @subpackage Structs
 */
class GetSigningLinksRequest extends AbstractStructBase
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
     * The IncludeOnlyCurrentSigners
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IncludeOnlyCurrentSigners;
    /**
     * The IsAuthenticated
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsAuthenticated;
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
     * The LinkExpirationDate
     * @var string
     */
    public $LinkExpirationDate;
    /**
     * The RedirectUrl
     * @var string
     */
    public $RedirectUrl;
    /**
     * Constructor method for GetSigningLinksRequest
     * @uses GetSigningLinksRequest::setContextIdentifier()
     * @uses GetSigningLinksRequest::setIncludeOnlyCurrentSigners()
     * @uses GetSigningLinksRequest::setIsAuthenticated()
     * @uses GetSigningLinksRequest::setEnvelopeId()
     * @uses GetSigningLinksRequest::setEnvelopeAuthToken()
     * @uses GetSigningLinksRequest::setDocumentId()
     * @uses GetSigningLinksRequest::setDocumentAuthToken()
     * @uses GetSigningLinksRequest::setLinkExpirationDate()
     * @uses GetSigningLinksRequest::setRedirectUrl()
     * @param string $contextIdentifier
     * @param bool $includeOnlyCurrentSigners
     * @param bool $isAuthenticated
     * @param string $envelopeId
     * @param string $envelopeAuthToken
     * @param string $documentId
     * @param string $documentAuthToken
     * @param string $linkExpirationDate
     * @param string $redirectUrl
     */
    public function __construct($contextIdentifier = null, $includeOnlyCurrentSigners = null, $isAuthenticated = null, $envelopeId = null, $envelopeAuthToken = null, $documentId = null, $documentAuthToken = null, $linkExpirationDate = null, $redirectUrl = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setIncludeOnlyCurrentSigners($includeOnlyCurrentSigners)
            ->setIsAuthenticated($isAuthenticated)
            ->setEnvelopeId($envelopeId)
            ->setEnvelopeAuthToken($envelopeAuthToken)
            ->setDocumentId($documentId)
            ->setDocumentAuthToken($documentAuthToken)
            ->setLinkExpirationDate($linkExpirationDate)
            ->setRedirectUrl($redirectUrl);
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
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
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
     * Get IncludeOnlyCurrentSigners value
     * @return bool
     */
    public function getIncludeOnlyCurrentSigners()
    {
        return $this->IncludeOnlyCurrentSigners;
    }
    /**
     * Set IncludeOnlyCurrentSigners value
     * @param bool $includeOnlyCurrentSigners
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
     */
    public function setIncludeOnlyCurrentSigners($includeOnlyCurrentSigners = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeOnlyCurrentSigners) && !is_bool($includeOnlyCurrentSigners)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeOnlyCurrentSigners, true), gettype($includeOnlyCurrentSigners)), __LINE__);
        }
        $this->IncludeOnlyCurrentSigners = $includeOnlyCurrentSigners;
        return $this;
    }
    /**
     * Get IsAuthenticated value
     * @return bool
     */
    public function getIsAuthenticated()
    {
        return $this->IsAuthenticated;
    }
    /**
     * Set IsAuthenticated value
     * @param bool $isAuthenticated
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
     */
    public function setIsAuthenticated($isAuthenticated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAuthenticated) && !is_bool($isAuthenticated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAuthenticated, true), gettype($isAuthenticated)), __LINE__);
        }
        $this->IsAuthenticated = $isAuthenticated;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
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
    /**
     * Get RedirectUrl value
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->RedirectUrl;
    }
    /**
     * Set RedirectUrl value
     * @param string $redirectUrl
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
     */
    public function setRedirectUrl($redirectUrl = null)
    {
        // validation for constraint: string
        if (!is_null($redirectUrl) && !is_string($redirectUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirectUrl, true), gettype($redirectUrl)), __LINE__);
        }
        $this->RedirectUrl = $redirectUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
