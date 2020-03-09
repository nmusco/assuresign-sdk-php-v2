<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCancellationException ArrayType
 * @subpackage Arrays
 */
class ArrayOfCancellationException extends AbstractStructArrayBase
{
    /**
     * The CancellationException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\CancellationException[]
     */
    public $CancellationException;
    /**
     * Constructor method for ArrayOfCancellationException
     * @uses ArrayOfCancellationException::setCancellationException()
     * @param \Nmusco\AssureSign\v2\StructType\CancellationException[] $cancellationException
     */
    public function __construct(array $cancellationException = array())
    {
        $this
            ->setCancellationException($cancellationException);
    }
    /**
     * Get CancellationException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\CancellationException[]|null
     */
    public function getCancellationException()
    {
        return isset($this->CancellationException) ? $this->CancellationException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCancellationException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancellationException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancellationExceptionForArrayConstraintsFromSetCancellationException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCancellationExceptionCancellationExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfCancellationExceptionCancellationExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\CancellationException) {
                $invalidValues[] = is_object($arrayOfCancellationExceptionCancellationExceptionItem) ? get_class($arrayOfCancellationExceptionCancellationExceptionItem) : sprintf('%s(%s)', gettype($arrayOfCancellationExceptionCancellationExceptionItem), var_export($arrayOfCancellationExceptionCancellationExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CancellationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\CancellationException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CancellationException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\CancellationException[] $cancellationException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfCancellationException
     */
    public function setCancellationException(array $cancellationException = array())
    {
        // validation for constraint: array
        if ('' !== ($cancellationExceptionArrayErrorMessage = self::validateCancellationExceptionForArrayConstraintsFromSetCancellationException($cancellationException))) {
            throw new \InvalidArgumentException($cancellationExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($cancellationException) || (is_array($cancellationException) && empty($cancellationException))) {
            unset($this->CancellationException);
        } else {
            $this->CancellationException = $cancellationException;
        }
        return $this;
    }
    /**
     * Add item to CancellationException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\CancellationException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfCancellationException
     */
    public function addToCancellationException(\Nmusco\AssureSign\v2\StructType\CancellationException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\CancellationException) {
            throw new \InvalidArgumentException(sprintf('The CancellationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\CancellationException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CancellationException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\CancellationException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\CancellationException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\CancellationException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\CancellationException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\CancellationException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CancellationException
     */
    public function getAttributeName()
    {
        return 'CancellationException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfCancellationException
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
