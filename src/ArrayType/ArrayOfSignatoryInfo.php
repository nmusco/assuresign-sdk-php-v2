<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignatoryInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignatoryInfo extends AbstractStructArrayBase
{
    /**
     * The SignatoryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryInfo[]
     */
    public $SignatoryInfo;
    /**
     * Constructor method for ArrayOfSignatoryInfo
     * @uses ArrayOfSignatoryInfo::setSignatoryInfo()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryInfo[] $signatoryInfo
     */
    public function __construct(array $signatoryInfo = array())
    {
        $this
            ->setSignatoryInfo($signatoryInfo);
    }
    /**
     * Get SignatoryInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo[]|null
     */
    public function getSignatoryInfo()
    {
        return isset($this->SignatoryInfo) ? $this->SignatoryInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignatoryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatoryInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatoryInfoForArrayConstraintsFromSetSignatoryInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignatoryInfoSignatoryInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignatoryInfoSignatoryInfoItem instanceof \Nmusco\AssureSign\v2\StructType\SignatoryInfo) {
                $invalidValues[] = is_object($arrayOfSignatoryInfoSignatoryInfoItem) ? get_class($arrayOfSignatoryInfoSignatoryInfoItem) : sprintf('%s(%s)', gettype($arrayOfSignatoryInfoSignatoryInfoItem), var_export($arrayOfSignatoryInfoSignatoryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatoryInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignatoryInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryInfo[] $signatoryInfo
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo
     */
    public function setSignatoryInfo(array $signatoryInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($signatoryInfoArrayErrorMessage = self::validateSignatoryInfoForArrayConstraintsFromSetSignatoryInfo($signatoryInfo))) {
            throw new \InvalidArgumentException($signatoryInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($signatoryInfo) || (is_array($signatoryInfo) && empty($signatoryInfo))) {
            unset($this->SignatoryInfo);
        } else {
            $this->SignatoryInfo = $signatoryInfo;
        }
        return $this;
    }
    /**
     * Add item to SignatoryInfo value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryInfo $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo
     */
    public function addToSignatoryInfo(\Nmusco\AssureSign\v2\StructType\SignatoryInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignatoryInfo) {
            throw new \InvalidArgumentException(sprintf('The SignatoryInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatoryInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignatoryInfo
     */
    public function getAttributeName()
    {
        return 'SignatoryInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo
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
