<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJotBlockInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfJotBlockInfo extends AbstractStructArrayBase
{
    /**
     * The JotBlockInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\JotBlockInfo[]
     */
    public $JotBlockInfo;
    /**
     * Constructor method for ArrayOfJotBlockInfo
     * @uses ArrayOfJotBlockInfo::setJotBlockInfo()
     * @param \Nmusco\AssureSign\v2\StructType\JotBlockInfo[] $jotBlockInfo
     */
    public function __construct(array $jotBlockInfo = array())
    {
        $this
            ->setJotBlockInfo($jotBlockInfo);
    }
    /**
     * Get JotBlockInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo[]|null
     */
    public function getJotBlockInfo()
    {
        return isset($this->JotBlockInfo) ? $this->JotBlockInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setJotBlockInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJotBlockInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJotBlockInfoForArrayConstraintsFromSetJotBlockInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJotBlockInfoJotBlockInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfJotBlockInfoJotBlockInfoItem instanceof \Nmusco\AssureSign\v2\StructType\JotBlockInfo) {
                $invalidValues[] = is_object($arrayOfJotBlockInfoJotBlockInfoItem) ? get_class($arrayOfJotBlockInfoJotBlockInfoItem) : sprintf('%s(%s)', gettype($arrayOfJotBlockInfoJotBlockInfoItem), var_export($arrayOfJotBlockInfoJotBlockInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JotBlockInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\JotBlockInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set JotBlockInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\JotBlockInfo[] $jotBlockInfo
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo
     */
    public function setJotBlockInfo(array $jotBlockInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($jotBlockInfoArrayErrorMessage = self::validateJotBlockInfoForArrayConstraintsFromSetJotBlockInfo($jotBlockInfo))) {
            throw new \InvalidArgumentException($jotBlockInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($jotBlockInfo) || (is_array($jotBlockInfo) && empty($jotBlockInfo))) {
            unset($this->JotBlockInfo);
        } else {
            $this->JotBlockInfo = $jotBlockInfo;
        }
        return $this;
    }
    /**
     * Add item to JotBlockInfo value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\JotBlockInfo $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo
     */
    public function addToJotBlockInfo(\Nmusco\AssureSign\v2\StructType\JotBlockInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\JotBlockInfo) {
            throw new \InvalidArgumentException(sprintf('The JotBlockInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\JotBlockInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JotBlockInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string JotBlockInfo
     */
    public function getAttributeName()
    {
        return 'JotBlockInfo';
    }
}
