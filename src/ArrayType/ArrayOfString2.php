<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString2 ArrayType
 * @subpackage Arrays
 */
class ArrayOfString2 extends AbstractStructArrayBase
{
    /**
     * The AccountGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $AccountGroup;
    /**
     * Constructor method for ArrayOfString2
     * @uses ArrayOfString2::setAccountGroup()
     * @param string[] $accountGroup
     */
    public function __construct(array $accountGroup = array())
    {
        $this
            ->setAccountGroup($accountGroup);
    }
    /**
     * Get AccountGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getAccountGroup()
    {
        return isset($this->AccountGroup) ? $this->AccountGroup : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountGroupForArrayConstraintsFromSetAccountGroup(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfString2AccountGroupItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfString2AccountGroupItem)) {
                $invalidValues[] = is_object($arrayOfString2AccountGroupItem) ? get_class($arrayOfString2AccountGroupItem) : sprintf('%s(%s)', gettype($arrayOfString2AccountGroupItem), var_export($arrayOfString2AccountGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountGroup property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccountGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $accountGroup
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2
     */
    public function setAccountGroup(array $accountGroup = array())
    {
        // validation for constraint: array
        if ('' !== ($accountGroupArrayErrorMessage = self::validateAccountGroupForArrayConstraintsFromSetAccountGroup($accountGroup))) {
            throw new \InvalidArgumentException($accountGroupArrayErrorMessage, __LINE__);
        }
        if (is_null($accountGroup) || (is_array($accountGroup) && empty($accountGroup))) {
            unset($this->AccountGroup);
        } else {
            $this->AccountGroup = $accountGroup;
        }
        return $this;
    }
    /**
     * Add item to AccountGroup value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2
     */
    public function addToAccountGroup($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AccountGroup property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccountGroup
     */
    public function getAttributeName()
    {
        return 'AccountGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2
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
