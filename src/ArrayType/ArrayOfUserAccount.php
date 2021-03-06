<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserAccount ArrayType
 * @subpackage Arrays
 */
class ArrayOfUserAccount extends AbstractStructArrayBase
{
    /**
     * The UserAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\UserAccount[]
     */
    public $UserAccount;
    /**
     * Constructor method for ArrayOfUserAccount
     * @uses ArrayOfUserAccount::setUserAccount()
     * @param \Nmusco\AssureSign\v2\StructType\UserAccount[] $userAccount
     */
    public function __construct(array $userAccount = array())
    {
        $this
            ->setUserAccount($userAccount);
    }
    /**
     * Get UserAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\UserAccount[]|null
     */
    public function getUserAccount()
    {
        return isset($this->UserAccount) ? $this->UserAccount : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUserAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserAccountForArrayConstraintsFromSetUserAccount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserAccountUserAccountItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserAccountUserAccountItem instanceof \Nmusco\AssureSign\v2\StructType\UserAccount) {
                $invalidValues[] = is_object($arrayOfUserAccountUserAccountItem) ? get_class($arrayOfUserAccountUserAccountItem) : sprintf('%s(%s)', gettype($arrayOfUserAccountUserAccountItem), var_export($arrayOfUserAccountUserAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserAccount property can only contain items of type \Nmusco\AssureSign\v2\StructType\UserAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\UserAccount[] $userAccount
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount
     */
    public function setUserAccount(array $userAccount = array())
    {
        // validation for constraint: array
        if ('' !== ($userAccountArrayErrorMessage = self::validateUserAccountForArrayConstraintsFromSetUserAccount($userAccount))) {
            throw new \InvalidArgumentException($userAccountArrayErrorMessage, __LINE__);
        }
        if (is_null($userAccount) || (is_array($userAccount) && empty($userAccount))) {
            unset($this->UserAccount);
        } else {
            $this->UserAccount = $userAccount;
        }
        return $this;
    }
    /**
     * Add item to UserAccount value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\UserAccount $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserAccount
     */
    public function addToUserAccount(\Nmusco\AssureSign\v2\StructType\UserAccount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\UserAccount) {
            throw new \InvalidArgumentException(sprintf('The UserAccount property can only contain items of type \Nmusco\AssureSign\v2\StructType\UserAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserAccount[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\UserAccount|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\UserAccount|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\UserAccount|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\UserAccount|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\UserAccount|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserAccount
     */
    public function getAttributeName()
    {
        return 'UserAccount';
    }
}
