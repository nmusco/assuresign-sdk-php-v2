<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignatoryItem ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignatoryItem extends AbstractStructArrayBase
{
    /**
     * The SignatoryItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryItem[]
     */
    public $SignatoryItem;
    /**
     * Constructor method for ArrayOfSignatoryItem
     * @uses ArrayOfSignatoryItem::setSignatoryItem()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryItem[] $signatoryItem
     */
    public function __construct(array $signatoryItem = array())
    {
        $this
            ->setSignatoryItem($signatoryItem);
    }
    /**
     * Get SignatoryItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem[]|null
     */
    public function getSignatoryItem()
    {
        return isset($this->SignatoryItem) ? $this->SignatoryItem : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignatoryItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatoryItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatoryItemForArrayConstraintsFromSetSignatoryItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignatoryItemSignatoryItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignatoryItemSignatoryItemItem instanceof \Nmusco\AssureSign\v2\StructType\SignatoryItem) {
                $invalidValues[] = is_object($arrayOfSignatoryItemSignatoryItemItem) ? get_class($arrayOfSignatoryItemSignatoryItemItem) : sprintf('%s(%s)', gettype($arrayOfSignatoryItemSignatoryItemItem), var_export($arrayOfSignatoryItemSignatoryItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatoryItem property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignatoryItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryItem[] $signatoryItem
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem
     */
    public function setSignatoryItem(array $signatoryItem = array())
    {
        // validation for constraint: array
        if ('' !== ($signatoryItemArrayErrorMessage = self::validateSignatoryItemForArrayConstraintsFromSetSignatoryItem($signatoryItem))) {
            throw new \InvalidArgumentException($signatoryItemArrayErrorMessage, __LINE__);
        }
        if (is_null($signatoryItem) || (is_array($signatoryItem) && empty($signatoryItem))) {
            unset($this->SignatoryItem);
        } else {
            $this->SignatoryItem = $signatoryItem;
        }
        return $this;
    }
    /**
     * Add item to SignatoryItem value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryItem $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem
     */
    public function addToSignatoryItem(\Nmusco\AssureSign\v2\StructType\SignatoryItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignatoryItem) {
            throw new \InvalidArgumentException(sprintf('The SignatoryItem property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatoryItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignatoryItem
     */
    public function getAttributeName()
    {
        return 'SignatoryItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryItem
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
