<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeleteEnvelopeRequest ArrayType
 * @subpackage Arrays
 */
class ArrayOfDeleteEnvelopeRequest extends AbstractStructArrayBase
{
    /**
     * The DeleteEnvelopeRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest[]
     */
    public $DeleteEnvelopeRequest;
    /**
     * Constructor method for ArrayOfDeleteEnvelopeRequest
     * @uses ArrayOfDeleteEnvelopeRequest::setDeleteEnvelopeRequest()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest[] $deleteEnvelopeRequest
     */
    public function __construct(array $deleteEnvelopeRequest = array())
    {
        $this
            ->setDeleteEnvelopeRequest($deleteEnvelopeRequest);
    }
    /**
     * Get DeleteEnvelopeRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest[]|null
     */
    public function getDeleteEnvelopeRequest()
    {
        return isset($this->DeleteEnvelopeRequest) ? $this->DeleteEnvelopeRequest : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDeleteEnvelopeRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteEnvelopeRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeleteEnvelopeRequestForArrayConstraintsFromSetDeleteEnvelopeRequest(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDeleteEnvelopeRequestDeleteEnvelopeRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeleteEnvelopeRequestDeleteEnvelopeRequestItem instanceof \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest) {
                $invalidValues[] = is_object($arrayOfDeleteEnvelopeRequestDeleteEnvelopeRequestItem) ? get_class($arrayOfDeleteEnvelopeRequestDeleteEnvelopeRequestItem) : sprintf('%s(%s)', gettype($arrayOfDeleteEnvelopeRequestDeleteEnvelopeRequestItem), var_export($arrayOfDeleteEnvelopeRequestDeleteEnvelopeRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeleteEnvelopeRequest property can only contain items of type \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeleteEnvelopeRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest[] $deleteEnvelopeRequest
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest
     */
    public function setDeleteEnvelopeRequest(array $deleteEnvelopeRequest = array())
    {
        // validation for constraint: array
        if ('' !== ($deleteEnvelopeRequestArrayErrorMessage = self::validateDeleteEnvelopeRequestForArrayConstraintsFromSetDeleteEnvelopeRequest($deleteEnvelopeRequest))) {
            throw new \InvalidArgumentException($deleteEnvelopeRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($deleteEnvelopeRequest) || (is_array($deleteEnvelopeRequest) && empty($deleteEnvelopeRequest))) {
            unset($this->DeleteEnvelopeRequest);
        } else {
            $this->DeleteEnvelopeRequest = $deleteEnvelopeRequest;
        }
        return $this;
    }
    /**
     * Add item to DeleteEnvelopeRequest value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeRequest
     */
    public function addToDeleteEnvelopeRequest(\Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest) {
            throw new \InvalidArgumentException(sprintf('The DeleteEnvelopeRequest property can only contain items of type \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeleteEnvelopeRequest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeRequest|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeleteEnvelopeRequest
     */
    public function getAttributeName()
    {
        return 'DeleteEnvelopeRequest';
    }
}
