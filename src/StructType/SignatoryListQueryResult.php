<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatoryListQueryResult StructType
 * @subpackage Structs
 */
class SignatoryListQueryResult extends AbstractStructBase
{
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
     * The Signatories
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem
     */
    public $Signatories;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException
     */
    public $Exceptions;
    /**
     * Constructor method for SignatoryListQueryResult
     * @uses SignatoryListQueryResult::setId()
     * @uses SignatoryListQueryResult::setSignatories()
     * @uses SignatoryListQueryResult::setExceptions()
     * @param string $id
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem $signatories
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException $exceptions
     */
    public function __construct($id = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem $signatories = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException $exceptions = null)
    {
        $this
            ->setId($id)
            ->setSignatories($signatories)
            ->setExceptions($exceptions);
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult
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
     * Get Signatories value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem|null
     */
    public function getSignatories()
    {
        return $this->Signatories;
    }
    /**
     * Set Signatories value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem $signatories
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult
     */
    public function setSignatories(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem $signatories = null)
    {
        $this->Signatories = $signatories;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException $exceptions = null)
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQueryResult
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
