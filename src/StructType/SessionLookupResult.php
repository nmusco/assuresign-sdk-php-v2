<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionLookupResult StructType
 * @subpackage Structs
 */
class SessionLookupResult extends AbstractStructBase
{
    /**
     * The SessionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $SessionId;
    /**
     * The DocumentResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult
     */
    public $DocumentResults;
    /**
     * The CloseEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: q4:CloseEnvelopeResult
     * @var \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult
     */
    public $CloseEnvelopeResult;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException
     */
    public $Exceptions;
    /**
     * Constructor method for SessionLookupResult
     * @uses SessionLookupResult::setSessionId()
     * @uses SessionLookupResult::setDocumentResults()
     * @uses SessionLookupResult::setCloseEnvelopeResult()
     * @uses SessionLookupResult::setExceptions()
     * @param string $sessionId
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException $exceptions
     */
    public function __construct($sessionId = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults = null, \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException $exceptions = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setDocumentResults($documentResults)
            ->setCloseEnvelopeResult($closeEnvelopeResult)
            ->setExceptions($exceptions);
    }
    /**
     * Get SessionId value
     * @return string
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }
    /**
     * Set SessionId value
     * @param string $sessionId
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($sessionId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($sessionId, true)), __LINE__);
        }
        $this->SessionId = $sessionId;
        return $this;
    }
    /**
     * Get DocumentResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult|null
     */
    public function getDocumentResults()
    {
        return $this->DocumentResults;
    }
    /**
     * Set DocumentResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult
     */
    public function setDocumentResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults = null)
    {
        $this->DocumentResults = $documentResults;
        return $this;
    }
    /**
     * Get CloseEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult|null
     */
    public function getCloseEnvelopeResult()
    {
        return $this->CloseEnvelopeResult;
    }
    /**
     * Set CloseEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult
     */
    public function setCloseEnvelopeResult(\Nmusco\AssureSign\v2\StructType\CloseEnvelopeResult $closeEnvelopeResult = null)
    {
        $this->CloseEnvelopeResult = $closeEnvelopeResult;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
