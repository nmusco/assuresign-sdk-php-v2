<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParameterListException ArrayType
 * @subpackage Arrays
 */
class ArrayOfParameterListException extends AbstractStructArrayBase
{
    /**
     * The ParameterListException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ParameterListException[]
     */
    public $ParameterListException;
    /**
     * Constructor method for ArrayOfParameterListException
     * @uses ArrayOfParameterListException::setParameterListException()
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListException[] $parameterListException
     */
    public function __construct(array $parameterListException = array())
    {
        $this
            ->setParameterListException($parameterListException);
    }
    /**
     * Get ParameterListException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListException[]|null
     */
    public function getParameterListException()
    {
        return isset($this->ParameterListException) ? $this->ParameterListException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParameterListException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParameterListException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParameterListExceptionForArrayConstraintsFromSetParameterListException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParameterListExceptionParameterListExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfParameterListExceptionParameterListExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\ParameterListException) {
                $invalidValues[] = is_object($arrayOfParameterListExceptionParameterListExceptionItem) ? get_class($arrayOfParameterListExceptionParameterListExceptionItem) : sprintf('%s(%s)', gettype($arrayOfParameterListExceptionParameterListExceptionItem), var_export($arrayOfParameterListExceptionParameterListExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParameterListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ParameterListException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ParameterListException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListException[] $parameterListException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException
     */
    public function setParameterListException(array $parameterListException = array())
    {
        // validation for constraint: array
        if ('' !== ($parameterListExceptionArrayErrorMessage = self::validateParameterListExceptionForArrayConstraintsFromSetParameterListException($parameterListException))) {
            throw new \InvalidArgumentException($parameterListExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($parameterListException) || (is_array($parameterListException) && empty($parameterListException))) {
            unset($this->ParameterListException);
        } else {
            $this->ParameterListException = $parameterListException;
        }
        return $this;
    }
    /**
     * Add item to ParameterListException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException
     */
    public function addToParameterListException(\Nmusco\AssureSign\v2\StructType\ParameterListException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ParameterListException) {
            throw new \InvalidArgumentException(sprintf('The ParameterListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ParameterListException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ParameterListException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParameterListException
     */
    public function getAttributeName()
    {
        return 'ParameterListException';
    }
}
