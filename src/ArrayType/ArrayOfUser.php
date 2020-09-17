<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUser ArrayType
 * @subpackage Arrays
 */
class ArrayOfUser extends AbstractStructArrayBase
{
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\User[]
     */
    public $User;
    /**
     * Constructor method for ArrayOfUser
     * @uses ArrayOfUser::setUser()
     * @param \Nmusco\AssureSign\v2\StructType\User[] $user
     */
    public function __construct(array $user = array())
    {
        $this
            ->setUser($user);
    }
    /**
     * Get User value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\User[]|null
     */
    public function getUser()
    {
        return isset($this->User) ? $this->User : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserForArrayConstraintsFromSetUser(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserUserItem instanceof \Nmusco\AssureSign\v2\StructType\User) {
                $invalidValues[] = is_object($arrayOfUserUserItem) ? get_class($arrayOfUserUserItem) : sprintf('%s(%s)', gettype($arrayOfUserUserItem), var_export($arrayOfUserUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The User property can only contain items of type \Nmusco\AssureSign\v2\StructType\User, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set User value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\User[] $user
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser
     */
    public function setUser(array $user = array())
    {
        // validation for constraint: array
        if ('' !== ($userArrayErrorMessage = self::validateUserForArrayConstraintsFromSetUser($user))) {
            throw new \InvalidArgumentException($userArrayErrorMessage, __LINE__);
        }
        if (is_null($user) || (is_array($user) && empty($user))) {
            unset($this->User);
        } else {
            $this->User = $user;
        }
        return $this;
    }
    /**
     * Add item to User value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\User $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUser
     */
    public function addToUser(\Nmusco\AssureSign\v2\StructType\User $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\User) {
            throw new \InvalidArgumentException(sprintf('The User property can only contain items of type \Nmusco\AssureSign\v2\StructType\User, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->User[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\User|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\User|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\User|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\User|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\User|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string User
     */
    public function getAttributeName()
    {
        return 'User';
    }
}
