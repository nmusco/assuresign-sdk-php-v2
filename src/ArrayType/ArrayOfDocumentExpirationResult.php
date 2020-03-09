<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentExpirationResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentExpirationResult extends AbstractStructArrayBase
{
    /**
     * The DocumentExpirationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult[]
     */
    public $DocumentExpirationResult;
    /**
     * Constructor method for ArrayOfDocumentExpirationResult
     * @uses ArrayOfDocumentExpirationResult::setDocumentExpirationResult()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult[] $documentExpirationResult
     */
    public function __construct(array $documentExpirationResult = array())
    {
        $this
            ->setDocumentExpirationResult($documentExpirationResult);
    }
    /**
     * Get DocumentExpirationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult[]|null
     */
    public function getDocumentExpirationResult()
    {
        return isset($this->DocumentExpirationResult) ? $this->DocumentExpirationResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentExpirationResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentExpirationResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentExpirationResultForArrayConstraintsFromSetDocumentExpirationResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentExpirationResultDocumentExpirationResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentExpirationResultDocumentExpirationResultItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult) {
                $invalidValues[] = is_object($arrayOfDocumentExpirationResultDocumentExpirationResultItem) ? get_class($arrayOfDocumentExpirationResultDocumentExpirationResultItem) : sprintf('%s(%s)', gettype($arrayOfDocumentExpirationResultDocumentExpirationResultItem), var_export($arrayOfDocumentExpirationResultDocumentExpirationResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentExpirationResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentExpirationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult[] $documentExpirationResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult
     */
    public function setDocumentExpirationResult(array $documentExpirationResult = array())
    {
        // validation for constraint: array
        if ('' !== ($documentExpirationResultArrayErrorMessage = self::validateDocumentExpirationResultForArrayConstraintsFromSetDocumentExpirationResult($documentExpirationResult))) {
            throw new \InvalidArgumentException($documentExpirationResultArrayErrorMessage, __LINE__);
        }
        if (is_null($documentExpirationResult) || (is_array($documentExpirationResult) && empty($documentExpirationResult))) {
            unset($this->DocumentExpirationResult);
        } else {
            $this->DocumentExpirationResult = $documentExpirationResult;
        }
        return $this;
    }
    /**
     * Add item to DocumentExpirationResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult
     */
    public function addToDocumentExpirationResult(\Nmusco\AssureSign\v2\StructType\DocumentExpirationResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult) {
            throw new \InvalidArgumentException(sprintf('The DocumentExpirationResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentExpirationResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpirationResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentExpirationResult
     */
    public function getAttributeName()
    {
        return 'DocumentExpirationResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpirationResult
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
