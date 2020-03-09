<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignatoryListException ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignatoryListException extends AbstractStructArrayBase
{
    /**
     * The SignatoryListException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryListException[]
     */
    public $SignatoryListException;
    /**
     * Constructor method for ArrayOfSignatoryListException
     * @uses ArrayOfSignatoryListException::setSignatoryListException()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListException[] $signatoryListException
     */
    public function __construct(array $signatoryListException = array())
    {
        $this
            ->setSignatoryListException($signatoryListException);
    }
    /**
     * Get SignatoryListException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListException[]|null
     */
    public function getSignatoryListException()
    {
        return isset($this->SignatoryListException) ? $this->SignatoryListException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignatoryListException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatoryListException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatoryListExceptionForArrayConstraintsFromSetSignatoryListException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignatoryListExceptionSignatoryListExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignatoryListExceptionSignatoryListExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\SignatoryListException) {
                $invalidValues[] = is_object($arrayOfSignatoryListExceptionSignatoryListExceptionItem) ? get_class($arrayOfSignatoryListExceptionSignatoryListExceptionItem) : sprintf('%s(%s)', gettype($arrayOfSignatoryListExceptionSignatoryListExceptionItem), var_export($arrayOfSignatoryListExceptionSignatoryListExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatoryListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryListException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignatoryListException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListException[] $signatoryListException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException
     */
    public function setSignatoryListException(array $signatoryListException = array())
    {
        // validation for constraint: array
        if ('' !== ($signatoryListExceptionArrayErrorMessage = self::validateSignatoryListExceptionForArrayConstraintsFromSetSignatoryListException($signatoryListException))) {
            throw new \InvalidArgumentException($signatoryListExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($signatoryListException) || (is_array($signatoryListException) && empty($signatoryListException))) {
            unset($this->SignatoryListException);
        } else {
            $this->SignatoryListException = $signatoryListException;
        }
        return $this;
    }
    /**
     * Add item to SignatoryListException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException
     */
    public function addToSignatoryListException(\Nmusco\AssureSign\v2\StructType\SignatoryListException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignatoryListException) {
            throw new \InvalidArgumentException(sprintf('The SignatoryListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryListException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatoryListException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignatoryListException
     */
    public function getAttributeName()
    {
        return 'SignatoryListException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryListException
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
