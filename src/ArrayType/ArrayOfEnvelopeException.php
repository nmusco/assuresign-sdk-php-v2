<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnvelopeException ArrayType
 * @subpackage Arrays
 */
class ArrayOfEnvelopeException extends AbstractStructArrayBase
{
    /**
     * The EnvelopeException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeException[]
     */
    public $EnvelopeException;
    /**
     * Constructor method for ArrayOfEnvelopeException
     * @uses ArrayOfEnvelopeException::setEnvelopeException()
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeException[] $envelopeException
     */
    public function __construct(array $envelopeException = array())
    {
        $this
            ->setEnvelopeException($envelopeException);
    }
    /**
     * Get EnvelopeException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeException[]|null
     */
    public function getEnvelopeException()
    {
        return isset($this->EnvelopeException) ? $this->EnvelopeException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeExceptionForArrayConstraintsFromSetEnvelopeException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEnvelopeExceptionEnvelopeExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnvelopeExceptionEnvelopeExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeException) {
                $invalidValues[] = is_object($arrayOfEnvelopeExceptionEnvelopeExceptionItem) ? get_class($arrayOfEnvelopeExceptionEnvelopeExceptionItem) : sprintf('%s(%s)', gettype($arrayOfEnvelopeExceptionEnvelopeExceptionItem), var_export($arrayOfEnvelopeExceptionEnvelopeExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EnvelopeException property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EnvelopeException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeException[] $envelopeException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
     */
    public function setEnvelopeException(array $envelopeException = array())
    {
        // validation for constraint: array
        if ('' !== ($envelopeExceptionArrayErrorMessage = self::validateEnvelopeExceptionForArrayConstraintsFromSetEnvelopeException($envelopeException))) {
            throw new \InvalidArgumentException($envelopeExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($envelopeException) || (is_array($envelopeException) && empty($envelopeException))) {
            unset($this->EnvelopeException);
        } else {
            $this->EnvelopeException = $envelopeException;
        }
        return $this;
    }
    /**
     * Add item to EnvelopeException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
     */
    public function addToEnvelopeException(\Nmusco\AssureSign\v2\StructType\EnvelopeException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeException) {
            throw new \InvalidArgumentException(sprintf('The EnvelopeException property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EnvelopeException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnvelopeException
     */
    public function getAttributeName()
    {
        return 'EnvelopeException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
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
