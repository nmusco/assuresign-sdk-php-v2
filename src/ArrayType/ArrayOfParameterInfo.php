<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParameterInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfParameterInfo extends AbstractStructArrayBase
{
    /**
     * The ParameterInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ParameterInfo[]
     */
    public $ParameterInfo;
    /**
     * Constructor method for ArrayOfParameterInfo
     * @uses ArrayOfParameterInfo::setParameterInfo()
     * @param \Nmusco\AssureSign\v2\StructType\ParameterInfo[] $parameterInfo
     */
    public function __construct(array $parameterInfo = array())
    {
        $this
            ->setParameterInfo($parameterInfo);
    }
    /**
     * Get ParameterInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ParameterInfo[]|null
     */
    public function getParameterInfo()
    {
        return isset($this->ParameterInfo) ? $this->ParameterInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParameterInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParameterInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParameterInfoForArrayConstraintsFromSetParameterInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParameterInfoParameterInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfParameterInfoParameterInfoItem instanceof \Nmusco\AssureSign\v2\StructType\ParameterInfo) {
                $invalidValues[] = is_object($arrayOfParameterInfoParameterInfoItem) ? get_class($arrayOfParameterInfoParameterInfoItem) : sprintf('%s(%s)', gettype($arrayOfParameterInfoParameterInfoItem), var_export($arrayOfParameterInfoParameterInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParameterInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\ParameterInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ParameterInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ParameterInfo[] $parameterInfo
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo
     */
    public function setParameterInfo(array $parameterInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($parameterInfoArrayErrorMessage = self::validateParameterInfoForArrayConstraintsFromSetParameterInfo($parameterInfo))) {
            throw new \InvalidArgumentException($parameterInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($parameterInfo) || (is_array($parameterInfo) && empty($parameterInfo))) {
            unset($this->ParameterInfo);
        } else {
            $this->ParameterInfo = $parameterInfo;
        }
        return $this;
    }
    /**
     * Add item to ParameterInfo value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ParameterInfo $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo
     */
    public function addToParameterInfo(\Nmusco\AssureSign\v2\StructType\ParameterInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ParameterInfo) {
            throw new \InvalidArgumentException(sprintf('The ParameterInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\ParameterInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ParameterInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ParameterInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ParameterInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ParameterInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ParameterInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ParameterInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParameterInfo
     */
    public function getAttributeName()
    {
        return 'ParameterInfo';
    }
}
