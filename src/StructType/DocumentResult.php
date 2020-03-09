<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentResult StructType
 * @subpackage Structs
 */
class DocumentResult extends AbstractStructBase
{
    /**
     * The Metadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public $Metadata;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException
     */
    public $Exceptions;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $Id;
    /**
     * The AuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $AuthToken;
    /**
     * Constructor method for DocumentResult
     * @uses DocumentResult::setMetadata()
     * @uses DocumentResult::setExceptions()
     * @uses DocumentResult::setId()
     * @uses DocumentResult::setAuthToken()
     * @param \Nmusco\AssureSign\v2\StructType\Metadata $metadata
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException $exceptions
     * @param string $id
     * @param string $authToken
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\Metadata $metadata = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException $exceptions = null, $id = null, $authToken = null)
    {
        $this
            ->setMetadata($metadata)
            ->setExceptions($exceptions)
            ->setId($id)
            ->setAuthToken($authToken);
    }
    /**
     * Get Metadata value
     * @return \Nmusco\AssureSign\v2\StructType\Metadata|null
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }
    /**
     * Set Metadata value
     * @param \Nmusco\AssureSign\v2\StructType\Metadata $metadata
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult
     */
    public function setMetadata(\Nmusco\AssureSign\v2\StructType\Metadata $metadata = null)
    {
        $this->Metadata = $metadata;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult
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
     * @return string|null
     */
    public function getAuthToken()
    {
        return $this->AuthToken;
    }
    /**
     * Set AuthToken value
     * @param string $authToken
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult
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
