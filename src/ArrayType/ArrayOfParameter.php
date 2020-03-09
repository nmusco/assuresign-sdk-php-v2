<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParameter ArrayType
 * @subpackage Arrays
 */
class ArrayOfParameter extends AbstractStructArrayBase
{
    /**
     * The Parameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\Parameter[]
     */
    public $Parameter;
    /**
     * Constructor method for ArrayOfParameter
     * @uses ArrayOfParameter::setParameter()
     * @param \Nmusco\AssureSign\v2\StructType\Parameter[] $parameter
     */
    public function __construct(array $parameter = array())
    {
        $this
            ->setParameter($parameter);
    }
    /**
     * Get Parameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\Parameter[]|null
     */
    public function getParameter()
    {
        return isset($this->Parameter) ? $this->Parameter : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParameter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParameterForArrayConstraintsFromSetParameter(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParameterParameterItem) {
            // validation for constraint: itemType
            if (!$arrayOfParameterParameterItem instanceof \Nmusco\AssureSign\v2\StructType\Parameter) {
                $invalidValues[] = is_object($arrayOfParameterParameterItem) ? get_class($arrayOfParameterParameterItem) : sprintf('%s(%s)', gettype($arrayOfParameterParameterItem), var_export($arrayOfParameterParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Parameter property can only contain items of type \Nmusco\AssureSign\v2\StructType\Parameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Parameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\Parameter[] $parameter
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameter
     */
    public function setParameter(array $parameter = array())
    {
        // validation for constraint: array
        if ('' !== ($parameterArrayErrorMessage = self::validateParameterForArrayConstraintsFromSetParameter($parameter))) {
            throw new \InvalidArgumentException($parameterArrayErrorMessage, __LINE__);
        }
        if (is_null($parameter) || (is_array($parameter) && empty($parameter))) {
            unset($this->Parameter);
        } else {
            $this->Parameter = $parameter;
        }
        return $this;
    }
    /**
     * Add item to Parameter value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\Parameter $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameter
     */
    public function addToParameter(\Nmusco\AssureSign\v2\StructType\Parameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\Parameter) {
            throw new \InvalidArgumentException(sprintf('The Parameter property can only contain items of type \Nmusco\AssureSign\v2\StructType\Parameter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Parameter[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\Parameter|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\Parameter|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\Parameter|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\Parameter|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\Parameter|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Parameter
     */
    public function getAttributeName()
    {
        return 'Parameter';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameter
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
