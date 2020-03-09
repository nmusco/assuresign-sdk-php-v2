<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckEnvelopeStatusResult StructType
 * @subpackage Structs
 */
class CheckEnvelopeStatusResult extends AbstractStructBase
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
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Status;
    /**
     * The History
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent
     */
    public $History;
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument
     */
    public $Documents;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
     */
    public $Exceptions;
    /**
     * Constructor method for CheckEnvelopeStatusResult
     * @uses CheckEnvelopeStatusResult::setEnvelopeId()
     * @uses CheckEnvelopeStatusResult::setStatus()
     * @uses CheckEnvelopeStatusResult::setHistory()
     * @uses CheckEnvelopeStatusResult::setDocuments()
     * @uses CheckEnvelopeStatusResult::setExceptions()
     * @param string $envelopeId
     * @param string $status
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent $history
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     */
    public function __construct($envelopeId = null, $status = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent $history = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this
            ->setEnvelopeId($envelopeId)
            ->setStatus($status)
            ->setHistory($history)
            ->setDocuments($documents)
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
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
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
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeStatusType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\EnvelopeStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\EnvelopeStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\EnvelopeStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get History value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent|null
     */
    public function getHistory()
    {
        return $this->History;
    }
    /**
     * Set History value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent $history
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
     */
    public function setHistory(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent $history = null)
    {
        $this->History = $history;
        return $this;
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents = null)
    {
        $this->Documents = $documents;
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
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResult
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
