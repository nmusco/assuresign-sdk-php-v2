<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTypedJotBlockOption ArrayType
 * @subpackage Arrays
 */
class ArrayOfTypedJotBlockOption extends AbstractStructArrayBase
{
    /**
     * The TypedJotBlockOption
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption[]
     */
    public $TypedJotBlockOption;
    /**
     * Constructor method for ArrayOfTypedJotBlockOption
     * @uses ArrayOfTypedJotBlockOption::setTypedJotBlockOption()
     * @param \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption[] $typedJotBlockOption
     */
    public function __construct(array $typedJotBlockOption = array())
    {
        $this
            ->setTypedJotBlockOption($typedJotBlockOption);
    }
    /**
     * Get TypedJotBlockOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption[]|null
     */
    public function getTypedJotBlockOption()
    {
        return isset($this->TypedJotBlockOption) ? $this->TypedJotBlockOption : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTypedJotBlockOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTypedJotBlockOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTypedJotBlockOptionForArrayConstraintsFromSetTypedJotBlockOption(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTypedJotBlockOptionTypedJotBlockOptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTypedJotBlockOptionTypedJotBlockOptionItem instanceof \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption) {
                $invalidValues[] = is_object($arrayOfTypedJotBlockOptionTypedJotBlockOptionItem) ? get_class($arrayOfTypedJotBlockOptionTypedJotBlockOptionItem) : sprintf('%s(%s)', gettype($arrayOfTypedJotBlockOptionTypedJotBlockOptionItem), var_export($arrayOfTypedJotBlockOptionTypedJotBlockOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TypedJotBlockOption property can only contain items of type \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TypedJotBlockOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption[] $typedJotBlockOption
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption
     */
    public function setTypedJotBlockOption(array $typedJotBlockOption = array())
    {
        // validation for constraint: array
        if ('' !== ($typedJotBlockOptionArrayErrorMessage = self::validateTypedJotBlockOptionForArrayConstraintsFromSetTypedJotBlockOption($typedJotBlockOption))) {
            throw new \InvalidArgumentException($typedJotBlockOptionArrayErrorMessage, __LINE__);
        }
        if (is_null($typedJotBlockOption) || (is_array($typedJotBlockOption) && empty($typedJotBlockOption))) {
            unset($this->TypedJotBlockOption);
        } else {
            $this->TypedJotBlockOption = $typedJotBlockOption;
        }
        return $this;
    }
    /**
     * Add item to TypedJotBlockOption value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption
     */
    public function addToTypedJotBlockOption(\Nmusco\AssureSign\v2\StructType\TypedJotBlockOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption) {
            throw new \InvalidArgumentException(sprintf('The TypedJotBlockOption property can only contain items of type \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TypedJotBlockOption[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TypedJotBlockOption
     */
    public function getAttributeName()
    {
        return 'TypedJotBlockOption';
    }
}
