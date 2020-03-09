<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadEnvelopeDocumentsRequest StructType
 * @subpackage Structs
 */
class DownloadEnvelopeDocumentsRequest extends AbstractStructBase
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
     * The EnvelopeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $EnvelopeId;
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
     * The MergeCompletedDocuments
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $MergeCompletedDocuments;
    /**
     * The EnvelopePassword
     * @var string
     */
    public $EnvelopePassword;
    /**
     * Constructor method for DownloadEnvelopeDocumentsRequest
     * @uses DownloadEnvelopeDocumentsRequest::setContextIdentifier()
     * @uses DownloadEnvelopeDocumentsRequest::setEnvelopeId()
     * @uses DownloadEnvelopeDocumentsRequest::setAuthToken()
     * @uses DownloadEnvelopeDocumentsRequest::setMergeCompletedDocuments()
     * @uses DownloadEnvelopeDocumentsRequest::setEnvelopePassword()
     * @param string $contextIdentifier
     * @param string $envelopeId
     * @param string $authToken
     * @param bool $mergeCompletedDocuments
     * @param string $envelopePassword
     */
    public function __construct($contextIdentifier = null, $envelopeId = null, $authToken = null, $mergeCompletedDocuments = null, $envelopePassword = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setEnvelopeId($envelopeId)
            ->setAuthToken($authToken)
            ->setMergeCompletedDocuments($mergeCompletedDocuments)
            ->setEnvelopePassword($envelopePassword);
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
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
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
     * Get EnvelopeId value
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->EnvelopeId;
    }
    /**
     * Set EnvelopeId value
     * @param string $envelopeId
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
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
     * Get MergeCompletedDocuments value
     * @return bool
     */
    public function getMergeCompletedDocuments()
    {
        return $this->MergeCompletedDocuments;
    }
    /**
     * Set MergeCompletedDocuments value
     * @param bool $mergeCompletedDocuments
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
     */
    public function setMergeCompletedDocuments($mergeCompletedDocuments = null)
    {
        // validation for constraint: boolean
        if (!is_null($mergeCompletedDocuments) && !is_bool($mergeCompletedDocuments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mergeCompletedDocuments, true), gettype($mergeCompletedDocuments)), __LINE__);
        }
        $this->MergeCompletedDocuments = $mergeCompletedDocuments;
        return $this;
    }
    /**
     * Get EnvelopePassword value
     * @return string|null
     */
    public function getEnvelopePassword()
    {
        return $this->EnvelopePassword;
    }
    /**
     * Set EnvelopePassword value
     * @param string $envelopePassword
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
     */
    public function setEnvelopePassword($envelopePassword = null)
    {
        // validation for constraint: string
        if (!is_null($envelopePassword) && !is_string($envelopePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopePassword, true), gettype($envelopePassword)), __LINE__);
        }
        $this->EnvelopePassword = $envelopePassword;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsRequest
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
