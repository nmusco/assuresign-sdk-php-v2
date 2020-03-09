<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserTag ArrayType
 * @subpackage Arrays
 */
class ArrayOfUserTag extends AbstractStructArrayBase
{
    /**
     * The UserTag
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\UserTag[]
     */
    public $UserTag;
    /**
     * Constructor method for ArrayOfUserTag
     * @uses ArrayOfUserTag::setUserTag()
     * @param \Nmusco\AssureSign\v2\StructType\UserTag[] $userTag
     */
    public function __construct(array $userTag = array())
    {
        $this
            ->setUserTag($userTag);
    }
    /**
     * Get UserTag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\UserTag[]|null
     */
    public function getUserTag()
    {
        return isset($this->UserTag) ? $this->UserTag : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUserTag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserTag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserTagForArrayConstraintsFromSetUserTag(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserTagUserTagItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserTagUserTagItem instanceof \Nmusco\AssureSign\v2\StructType\UserTag) {
                $invalidValues[] = is_object($arrayOfUserTagUserTagItem) ? get_class($arrayOfUserTagUserTagItem) : sprintf('%s(%s)', gettype($arrayOfUserTagUserTagItem), var_export($arrayOfUserTagUserTagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserTag property can only contain items of type \Nmusco\AssureSign\v2\StructType\UserTag, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserTag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\UserTag[] $userTag
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag
     */
    public function setUserTag(array $userTag = array())
    {
        // validation for constraint: array
        if ('' !== ($userTagArrayErrorMessage = self::validateUserTagForArrayConstraintsFromSetUserTag($userTag))) {
            throw new \InvalidArgumentException($userTagArrayErrorMessage, __LINE__);
        }
        if (is_null($userTag) || (is_array($userTag) && empty($userTag))) {
            unset($this->UserTag);
        } else {
            $this->UserTag = $userTag;
        }
        return $this;
    }
    /**
     * Add item to UserTag value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\UserTag $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag
     */
    public function addToUserTag(\Nmusco\AssureSign\v2\StructType\UserTag $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\UserTag) {
            throw new \InvalidArgumentException(sprintf('The UserTag property can only contain items of type \Nmusco\AssureSign\v2\StructType\UserTag, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserTag[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\UserTag|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\UserTag|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\UserTag|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\UserTag|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\UserTag|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserTag
     */
    public function getAttributeName()
    {
        return 'UserTag';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserTag
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
