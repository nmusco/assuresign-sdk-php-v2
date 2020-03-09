<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignatoryUpdateRequest ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignatoryUpdateRequest extends AbstractStructArrayBase
{
    /**
     * The SignatoryUpdateRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest[]
     */
    public $SignatoryUpdateRequest;
    /**
     * Constructor method for ArrayOfSignatoryUpdateRequest
     * @uses ArrayOfSignatoryUpdateRequest::setSignatoryUpdateRequest()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest[] $signatoryUpdateRequest
     */
    public function __construct(array $signatoryUpdateRequest = array())
    {
        $this
            ->setSignatoryUpdateRequest($signatoryUpdateRequest);
    }
    /**
     * Get SignatoryUpdateRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest[]|null
     */
    public function getSignatoryUpdateRequest()
    {
        return isset($this->SignatoryUpdateRequest) ? $this->SignatoryUpdateRequest : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignatoryUpdateRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatoryUpdateRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatoryUpdateRequestForArrayConstraintsFromSetSignatoryUpdateRequest(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignatoryUpdateRequestSignatoryUpdateRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignatoryUpdateRequestSignatoryUpdateRequestItem instanceof \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest) {
                $invalidValues[] = is_object($arrayOfSignatoryUpdateRequestSignatoryUpdateRequestItem) ? get_class($arrayOfSignatoryUpdateRequestSignatoryUpdateRequestItem) : sprintf('%s(%s)', gettype($arrayOfSignatoryUpdateRequestSignatoryUpdateRequestItem), var_export($arrayOfSignatoryUpdateRequestSignatoryUpdateRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatoryUpdateRequest property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignatoryUpdateRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest[] $signatoryUpdateRequest
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest
     */
    public function setSignatoryUpdateRequest(array $signatoryUpdateRequest = array())
    {
        // validation for constraint: array
        if ('' !== ($signatoryUpdateRequestArrayErrorMessage = self::validateSignatoryUpdateRequestForArrayConstraintsFromSetSignatoryUpdateRequest($signatoryUpdateRequest))) {
            throw new \InvalidArgumentException($signatoryUpdateRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($signatoryUpdateRequest) || (is_array($signatoryUpdateRequest) && empty($signatoryUpdateRequest))) {
            unset($this->SignatoryUpdateRequest);
        } else {
            $this->SignatoryUpdateRequest = $signatoryUpdateRequest;
        }
        return $this;
    }
    /**
     * Add item to SignatoryUpdateRequest value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest
     */
    public function addToSignatoryUpdateRequest(\Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest) {
            throw new \InvalidArgumentException(sprintf('The SignatoryUpdateRequest property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatoryUpdateRequest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateRequest|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignatoryUpdateRequest
     */
    public function getAttributeName()
    {
        return 'SignatoryUpdateRequest';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest
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
