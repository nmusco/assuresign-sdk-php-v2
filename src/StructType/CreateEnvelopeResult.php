<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEnvelopeResult StructType
 * @subpackage Structs
 */
class CreateEnvelopeResult extends AbstractStructBase
{
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
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ExpirationDate;
    /**
     * The StaleDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $StaleDate;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
     */
    public $Exceptions;
    /**
     * Constructor method for CreateEnvelopeResult
     * @uses CreateEnvelopeResult::setEnvelopeId()
     * @uses CreateEnvelopeResult::setAuthToken()
     * @uses CreateEnvelopeResult::setExpirationDate()
     * @uses CreateEnvelopeResult::setStaleDate()
     * @uses CreateEnvelopeResult::setExceptions()
     * @param string $envelopeId
     * @param string $authToken
     * @param string $expirationDate
     * @param string $staleDate
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     */
    public function __construct($envelopeId = null, $authToken = null, $expirationDate = null, $staleDate = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this
            ->setEnvelopeId($envelopeId)
            ->setAuthToken($authToken)
            ->setExpirationDate($expirationDate)
            ->setStaleDate($staleDate)
            ->setExceptions($exceptions);
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult
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
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult
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
     * Get ExpirationDate value
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get StaleDate value
     * @return string
     */
    public function getStaleDate()
    {
        return $this->StaleDate;
    }
    /**
     * Set StaleDate value
     * @param string $staleDate
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult
     */
    public function setStaleDate($staleDate = null)
    {
        // validation for constraint: string
        if (!is_null($staleDate) && !is_string($staleDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($staleDate, true), gettype($staleDate)), __LINE__);
        }
        $this->StaleDate = $staleDate;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
