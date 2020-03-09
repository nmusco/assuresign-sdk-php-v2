<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLinkResult StructType
 * @subpackage Structs
 */
class GetAccessLinkResult extends AbstractStructBase
{
    /**
     * The Link
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AccessLink
     */
    public $Link;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException
     */
    public $Exceptions;
    /**
     * The EnvelopeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $EnvelopeId;
    /**
     * The DocumentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $DocumentId;
    /**
     * Constructor method for GetAccessLinkResult
     * @uses GetAccessLinkResult::setLink()
     * @uses GetAccessLinkResult::setExceptions()
     * @uses GetAccessLinkResult::setEnvelopeId()
     * @uses GetAccessLinkResult::setDocumentId()
     * @param \Nmusco\AssureSign\v2\StructType\AccessLink $link
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException $exceptions
     * @param string $envelopeId
     * @param string $documentId
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AccessLink $link = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException $exceptions = null, $envelopeId = null, $documentId = null)
    {
        $this
            ->setLink($link)
            ->setExceptions($exceptions)
            ->setEnvelopeId($envelopeId)
            ->setDocumentId($documentId);
    }
    /**
     * Get Link value
     * @return \Nmusco\AssureSign\v2\StructType\AccessLink|null
     */
    public function getLink()
    {
        return $this->Link;
    }
    /**
     * Set Link value
     * @param \Nmusco\AssureSign\v2\StructType\AccessLink $link
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult
     */
    public function setLink(\Nmusco\AssureSign\v2\StructType\AccessLink $link = null)
    {
        $this->Link = $link;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResult
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
