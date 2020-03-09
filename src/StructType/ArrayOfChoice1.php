<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice1 StructType
 * @subpackage Structs
 */
class ArrayOfChoice1 extends AbstractStructBase
{
    /**
     * The TypedParameterItem
     * Meta information extracted from the WSDL
     * - choice: TypedParameterItem | DrawnParameterItem
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TypedParameterItem
     */
    public $TypedParameterItem;
    /**
     * The DrawnParameterItem
     * Meta information extracted from the WSDL
     * - choice: TypedParameterItem | DrawnParameterItem
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DrawnParameterItem
     */
    public $DrawnParameterItem;
    /**
     * Constructor method for ArrayOfChoice1
     * @uses ArrayOfChoice1::setTypedParameterItem()
     * @uses ArrayOfChoice1::setDrawnParameterItem()
     * @param \Nmusco\AssureSign\v2\StructType\TypedParameterItem $typedParameterItem
     * @param \Nmusco\AssureSign\v2\StructType\DrawnParameterItem $drawnParameterItem
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TypedParameterItem $typedParameterItem = null, \Nmusco\AssureSign\v2\StructType\DrawnParameterItem $drawnParameterItem = null)
    {
        $this
            ->setTypedParameterItem($typedParameterItem)
            ->setDrawnParameterItem($drawnParameterItem);
    }
    /**
     * Get TypedParameterItem value
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterItem
     */
    public function getTypedParameterItem()
    {
        return isset($this->TypedParameterItem) ? $this->TypedParameterItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTypedParameterItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTypedParameterItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTypedParameterItemForChoiceConstraintsFromSetTypedParameterItem($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DrawnParameterItem',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property TypedParameterItem can\'t be set as the property %s is already set. Only one property must be set among these properties: TypedParameterItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set TypedParameterItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TypedParameterItem $typedParameterItem
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1
     */
    public function setTypedParameterItem(\Nmusco\AssureSign\v2\StructType\TypedParameterItem $typedParameterItem = null)
    {
        // validation for constraint: choice(TypedParameterItem, DrawnParameterItem)
        if ('' !== ($typedParameterItemChoiceErrorMessage = self::validateTypedParameterItemForChoiceConstraintsFromSetTypedParameterItem($typedParameterItem))) {
            throw new \InvalidArgumentException($typedParameterItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($typedParameterItem) || (is_array($typedParameterItem) && empty($typedParameterItem))) {
            unset($this->TypedParameterItem);
        } else {
            $this->TypedParameterItem = $typedParameterItem;
        }
        return $this;
    }
    /**
     * Get DrawnParameterItem value
     * @return \Nmusco\AssureSign\v2\StructType\DrawnParameterItem
     */
    public function getDrawnParameterItem()
    {
        return isset($this->DrawnParameterItem) ? $this->DrawnParameterItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDrawnParameterItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDrawnParameterItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDrawnParameterItemForChoiceConstraintsFromSetDrawnParameterItem($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TypedParameterItem',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DrawnParameterItem can\'t be set as the property %s is already set. Only one property must be set among these properties: DrawnParameterItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DrawnParameterItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DrawnParameterItem $drawnParameterItem
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1
     */
    public function setDrawnParameterItem(\Nmusco\AssureSign\v2\StructType\DrawnParameterItem $drawnParameterItem = null)
    {
        // validation for constraint: choice(TypedParameterItem, DrawnParameterItem)
        if ('' !== ($drawnParameterItemChoiceErrorMessage = self::validateDrawnParameterItemForChoiceConstraintsFromSetDrawnParameterItem($drawnParameterItem))) {
            throw new \InvalidArgumentException($drawnParameterItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($drawnParameterItem) || (is_array($drawnParameterItem) && empty($drawnParameterItem))) {
            unset($this->DrawnParameterItem);
        } else {
            $this->DrawnParameterItem = $drawnParameterItem;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1
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
