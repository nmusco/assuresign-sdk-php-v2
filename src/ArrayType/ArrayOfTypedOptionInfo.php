<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTypedOptionInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfTypedOptionInfo extends AbstractStructArrayBase
{
    /**
     * The TypedOptionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TypedOptionInfo[]
     */
    public $TypedOptionInfo;
    /**
     * Constructor method for ArrayOfTypedOptionInfo
     * @uses ArrayOfTypedOptionInfo::setTypedOptionInfo()
     * @param \Nmusco\AssureSign\v2\StructType\TypedOptionInfo[] $typedOptionInfo
     */
    public function __construct(array $typedOptionInfo = array())
    {
        $this
            ->setTypedOptionInfo($typedOptionInfo);
    }
    /**
     * Get TypedOptionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo[]|null
     */
    public function getTypedOptionInfo()
    {
        return isset($this->TypedOptionInfo) ? $this->TypedOptionInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTypedOptionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTypedOptionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTypedOptionInfoForArrayConstraintsFromSetTypedOptionInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTypedOptionInfoTypedOptionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTypedOptionInfoTypedOptionInfoItem instanceof \Nmusco\AssureSign\v2\StructType\TypedOptionInfo) {
                $invalidValues[] = is_object($arrayOfTypedOptionInfoTypedOptionInfoItem) ? get_class($arrayOfTypedOptionInfoTypedOptionInfoItem) : sprintf('%s(%s)', gettype($arrayOfTypedOptionInfoTypedOptionInfoItem), var_export($arrayOfTypedOptionInfoTypedOptionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TypedOptionInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\TypedOptionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TypedOptionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TypedOptionInfo[] $typedOptionInfo
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo
     */
    public function setTypedOptionInfo(array $typedOptionInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($typedOptionInfoArrayErrorMessage = self::validateTypedOptionInfoForArrayConstraintsFromSetTypedOptionInfo($typedOptionInfo))) {
            throw new \InvalidArgumentException($typedOptionInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($typedOptionInfo) || (is_array($typedOptionInfo) && empty($typedOptionInfo))) {
            unset($this->TypedOptionInfo);
        } else {
            $this->TypedOptionInfo = $typedOptionInfo;
        }
        return $this;
    }
    /**
     * Add item to TypedOptionInfo value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TypedOptionInfo $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo
     */
    public function addToTypedOptionInfo(\Nmusco\AssureSign\v2\StructType\TypedOptionInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\TypedOptionInfo) {
            throw new \InvalidArgumentException(sprintf('The TypedOptionInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\TypedOptionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TypedOptionInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TypedOptionInfo
     */
    public function getAttributeName()
    {
        return 'TypedOptionInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo
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
