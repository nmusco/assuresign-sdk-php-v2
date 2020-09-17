<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignatoryUpdateException ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignatoryUpdateException extends AbstractStructArrayBase
{
    /**
     * The SignatoryUpdateException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException[]
     */
    public $SignatoryUpdateException;
    /**
     * Constructor method for ArrayOfSignatoryUpdateException
     * @uses ArrayOfSignatoryUpdateException::setSignatoryUpdateException()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException[] $signatoryUpdateException
     */
    public function __construct(array $signatoryUpdateException = array())
    {
        $this
            ->setSignatoryUpdateException($signatoryUpdateException);
    }
    /**
     * Get SignatoryUpdateException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException[]|null
     */
    public function getSignatoryUpdateException()
    {
        return isset($this->SignatoryUpdateException) ? $this->SignatoryUpdateException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignatoryUpdateException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatoryUpdateException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatoryUpdateExceptionForArrayConstraintsFromSetSignatoryUpdateException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignatoryUpdateExceptionSignatoryUpdateExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignatoryUpdateExceptionSignatoryUpdateExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException) {
                $invalidValues[] = is_object($arrayOfSignatoryUpdateExceptionSignatoryUpdateExceptionItem) ? get_class($arrayOfSignatoryUpdateExceptionSignatoryUpdateExceptionItem) : sprintf('%s(%s)', gettype($arrayOfSignatoryUpdateExceptionSignatoryUpdateExceptionItem), var_export($arrayOfSignatoryUpdateExceptionSignatoryUpdateExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatoryUpdateException property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignatoryUpdateException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException[] $signatoryUpdateException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException
     */
    public function setSignatoryUpdateException(array $signatoryUpdateException = array())
    {
        // validation for constraint: array
        if ('' !== ($signatoryUpdateExceptionArrayErrorMessage = self::validateSignatoryUpdateExceptionForArrayConstraintsFromSetSignatoryUpdateException($signatoryUpdateException))) {
            throw new \InvalidArgumentException($signatoryUpdateExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($signatoryUpdateException) || (is_array($signatoryUpdateException) && empty($signatoryUpdateException))) {
            unset($this->SignatoryUpdateException);
        } else {
            $this->SignatoryUpdateException = $signatoryUpdateException;
        }
        return $this;
    }
    /**
     * Add item to SignatoryUpdateException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateException
     */
    public function addToSignatoryUpdateException(\Nmusco\AssureSign\v2\StructType\SignatoryUpdateException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException) {
            throw new \InvalidArgumentException(sprintf('The SignatoryUpdateException property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatoryUpdateException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignatoryUpdateException
     */
    public function getAttributeName()
    {
        return 'SignatoryUpdateException';
    }
}
