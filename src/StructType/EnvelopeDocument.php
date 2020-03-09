<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnvelopeDocument StructType
 * @subpackage Structs
 */
class EnvelopeDocument extends AbstractStructBase
{
    /**
     * The DocumentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $DocumentId;
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
     * The CompletedDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile
     */
    public $CompletedDocument;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus
     */
    public $Status;
    /**
     * The History
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent
     */
    public $History;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The OrderId
     * @var string
     */
    public $OrderId;
    /**
     * Constructor method for EnvelopeDocument
     * @uses EnvelopeDocument::setDocumentId()
     * @uses EnvelopeDocument::setAuthToken()
     * @uses EnvelopeDocument::setCompletedDocument()
     * @uses EnvelopeDocument::setStatus()
     * @uses EnvelopeDocument::setHistory()
     * @uses EnvelopeDocument::setName()
     * @uses EnvelopeDocument::setOrderId()
     * @param string $documentId
     * @param string $authToken
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completedDocument
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus $status
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent $history
     * @param string $name
     * @param string $orderId
     */
    public function __construct($documentId = null, $authToken = null, \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completedDocument = null, \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus $status = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent $history = null, $name = null, $orderId = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setAuthToken($authToken)
            ->setCompletedDocument($completedDocument)
            ->setStatus($status)
            ->setHistory($history)
            ->setName($name)
            ->setOrderId($orderId);
    }
    /**
     * Get DocumentId value
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
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
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
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
     * Get CompletedDocument value
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile|null
     */
    public function getCompletedDocument()
    {
        return $this->CompletedDocument;
    }
    /**
     * Set CompletedDocument value
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completedDocument
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
     */
    public function setCompletedDocument(\Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completedDocument = null)
    {
        $this->CompletedDocument = $completedDocument;
        return $this;
    }
    /**
     * Get Status value
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus $status
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
     */
    public function setStatus(\Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get History value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent|null
     */
    public function getHistory()
    {
        return $this->History;
    }
    /**
     * Set History value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent $history
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
     */
    public function setHistory(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent $history = null)
    {
        $this->History = $history;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get OrderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param string $orderId
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument
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
