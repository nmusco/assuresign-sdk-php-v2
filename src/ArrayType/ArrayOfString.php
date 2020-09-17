<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString ArrayType
 * @subpackage Arrays
 */
class ArrayOfString extends AbstractStructArrayBase
{
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $Role;
    /**
     * Constructor method for ArrayOfString
     * @uses ArrayOfString::setRole()
     * @param string[] $role
     */
    public function __construct(array $role = array())
    {
        $this
            ->setRole($role);
    }
    /**
     * Get Role value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getRole()
    {
        return isset($this->Role) ? $this->Role : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoleForArrayConstraintsFromSetRole(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringRoleItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfStringRoleItem)) {
                $invalidValues[] = is_object($arrayOfStringRoleItem) ? get_class($arrayOfStringRoleItem) : sprintf('%s(%s)', gettype($arrayOfStringRoleItem), var_export($arrayOfStringRoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Role property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Role value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $role
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString
     */
    public function setRole(array $role = array())
    {
        // validation for constraint: array
        if ('' !== ($roleArrayErrorMessage = self::validateRoleForArrayConstraintsFromSetRole($role))) {
            throw new \InvalidArgumentException($roleArrayErrorMessage, __LINE__);
        }
        if (is_null($role) || (is_array($role) && empty($role))) {
            unset($this->Role);
        } else {
            $this->Role = $role;
        }
        return $this;
    }
    /**
     * Add item to Role value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString
     */
    public function addToRole($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Role property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Role[] = $item;
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
     * @return string Role
     */
    public function getAttributeName()
    {
        return 'Role';
    }
}
