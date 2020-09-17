<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeleteEnvelopeResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfDeleteEnvelopeResult extends AbstractStructArrayBase
{
    /**
     * The DeleteEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult[]
     */
    public $DeleteEnvelopeResult;
    /**
     * Constructor method for ArrayOfDeleteEnvelopeResult
     * @uses ArrayOfDeleteEnvelopeResult::setDeleteEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult[] $deleteEnvelopeResult
     */
    public function __construct(array $deleteEnvelopeResult = array())
    {
        $this
            ->setDeleteEnvelopeResult($deleteEnvelopeResult);
    }
    /**
     * Get DeleteEnvelopeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult[]|null
     */
    public function getDeleteEnvelopeResult()
    {
        return isset($this->DeleteEnvelopeResult) ? $this->DeleteEnvelopeResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDeleteEnvelopeResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteEnvelopeResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeleteEnvelopeResultForArrayConstraintsFromSetDeleteEnvelopeResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDeleteEnvelopeResultDeleteEnvelopeResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeleteEnvelopeResultDeleteEnvelopeResultItem instanceof \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult) {
                $invalidValues[] = is_object($arrayOfDeleteEnvelopeResultDeleteEnvelopeResultItem) ? get_class($arrayOfDeleteEnvelopeResultDeleteEnvelopeResultItem) : sprintf('%s(%s)', gettype($arrayOfDeleteEnvelopeResultDeleteEnvelopeResultItem), var_export($arrayOfDeleteEnvelopeResultDeleteEnvelopeResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeleteEnvelopeResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeleteEnvelopeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult[] $deleteEnvelopeResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult
     */
    public function setDeleteEnvelopeResult(array $deleteEnvelopeResult = array())
    {
        // validation for constraint: array
        if ('' !== ($deleteEnvelopeResultArrayErrorMessage = self::validateDeleteEnvelopeResultForArrayConstraintsFromSetDeleteEnvelopeResult($deleteEnvelopeResult))) {
            throw new \InvalidArgumentException($deleteEnvelopeResultArrayErrorMessage, __LINE__);
        }
        if (is_null($deleteEnvelopeResult) || (is_array($deleteEnvelopeResult) && empty($deleteEnvelopeResult))) {
            unset($this->DeleteEnvelopeResult);
        } else {
            $this->DeleteEnvelopeResult = $deleteEnvelopeResult;
        }
        return $this;
    }
    /**
     * Add item to DeleteEnvelopeResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult
     */
    public function addToDeleteEnvelopeResult(\Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult) {
            throw new \InvalidArgumentException(sprintf('The DeleteEnvelopeResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeleteEnvelopeResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeleteEnvelopeResult
     */
    public function getAttributeName()
    {
        return 'DeleteEnvelopeResult';
    }
}
