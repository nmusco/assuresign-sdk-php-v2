<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentResult extends AbstractStructArrayBase
{
    /**
     * The DocumentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentResult[]
     */
    public $DocumentResult;
    /**
     * Constructor method for ArrayOfDocumentResult
     * @uses ArrayOfDocumentResult::setDocumentResult()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentResult[] $documentResult
     */
    public function __construct(array $documentResult = array())
    {
        $this
            ->setDocumentResult($documentResult);
    }
    /**
     * Get DocumentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult[]|null
     */
    public function getDocumentResult()
    {
        return isset($this->DocumentResult) ? $this->DocumentResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentResultForArrayConstraintsFromSetDocumentResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentResultDocumentResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentResultDocumentResultItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentResult) {
                $invalidValues[] = is_object($arrayOfDocumentResultDocumentResultItem) ? get_class($arrayOfDocumentResultDocumentResultItem) : sprintf('%s(%s)', gettype($arrayOfDocumentResultDocumentResultItem), var_export($arrayOfDocumentResultDocumentResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentResult[] $documentResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult
     */
    public function setDocumentResult(array $documentResult = array())
    {
        // validation for constraint: array
        if ('' !== ($documentResultArrayErrorMessage = self::validateDocumentResultForArrayConstraintsFromSetDocumentResult($documentResult))) {
            throw new \InvalidArgumentException($documentResultArrayErrorMessage, __LINE__);
        }
        if (is_null($documentResult) || (is_array($documentResult) && empty($documentResult))) {
            unset($this->DocumentResult);
        } else {
            $this->DocumentResult = $documentResult;
        }
        return $this;
    }
    /**
     * Add item to DocumentResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult
     */
    public function addToDocumentResult(\Nmusco\AssureSign\v2\StructType\DocumentResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentResult) {
            throw new \InvalidArgumentException(sprintf('The DocumentResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentResult
     */
    public function getAttributeName()
    {
        return 'DocumentResult';
    }
}
