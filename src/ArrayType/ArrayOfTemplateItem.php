<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTemplateItem ArrayType
 * @subpackage Arrays
 */
class ArrayOfTemplateItem extends AbstractStructArrayBase
{
    /**
     * The TemplateItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TemplateItem[]
     */
    public $TemplateItem;
    /**
     * Constructor method for ArrayOfTemplateItem
     * @uses ArrayOfTemplateItem::setTemplateItem()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateItem[] $templateItem
     */
    public function __construct(array $templateItem = array())
    {
        $this
            ->setTemplateItem($templateItem);
    }
    /**
     * Get TemplateItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem[]|null
     */
    public function getTemplateItem()
    {
        return isset($this->TemplateItem) ? $this->TemplateItem : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplateItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplateItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplateItemForArrayConstraintsFromSetTemplateItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTemplateItemTemplateItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfTemplateItemTemplateItemItem instanceof \Nmusco\AssureSign\v2\StructType\TemplateItem) {
                $invalidValues[] = is_object($arrayOfTemplateItemTemplateItemItem) ? get_class($arrayOfTemplateItemTemplateItemItem) : sprintf('%s(%s)', gettype($arrayOfTemplateItemTemplateItemItem), var_export($arrayOfTemplateItemTemplateItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TemplateItem property can only contain items of type \Nmusco\AssureSign\v2\StructType\TemplateItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TemplateItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TemplateItem[] $templateItem
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem
     */
    public function setTemplateItem(array $templateItem = array())
    {
        // validation for constraint: array
        if ('' !== ($templateItemArrayErrorMessage = self::validateTemplateItemForArrayConstraintsFromSetTemplateItem($templateItem))) {
            throw new \InvalidArgumentException($templateItemArrayErrorMessage, __LINE__);
        }
        if (is_null($templateItem) || (is_array($templateItem) && empty($templateItem))) {
            unset($this->TemplateItem);
        } else {
            $this->TemplateItem = $templateItem;
        }
        return $this;
    }
    /**
     * Add item to TemplateItem value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TemplateItem $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem
     */
    public function addToTemplateItem(\Nmusco\AssureSign\v2\StructType\TemplateItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\TemplateItem) {
            throw new \InvalidArgumentException(sprintf('The TemplateItem property can only contain items of type \Nmusco\AssureSign\v2\StructType\TemplateItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TemplateItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TemplateItem
     */
    public function getAttributeName()
    {
        return 'TemplateItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem
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
