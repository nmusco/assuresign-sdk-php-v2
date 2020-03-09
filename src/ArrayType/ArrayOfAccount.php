<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAccount ArrayType
 * @subpackage Arrays
 */
class ArrayOfAccount extends AbstractStructArrayBase
{
    /**
     * The Account
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\Account[]
     */
    public $Account;
    /**
     * Constructor method for ArrayOfAccount
     * @uses ArrayOfAccount::setAccount()
     * @param \Nmusco\AssureSign\v2\StructType\Account[] $account
     */
    public function __construct(array $account = array())
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get Account value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\Account[]|null
     */
    public function getAccount()
    {
        return isset($this->Account) ? $this->Account : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountForArrayConstraintsFromSetAccount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAccountAccountItem) {
            // validation for constraint: itemType
            if (!$arrayOfAccountAccountItem instanceof \Nmusco\AssureSign\v2\StructType\Account) {
                $invalidValues[] = is_object($arrayOfAccountAccountItem) ? get_class($arrayOfAccountAccountItem) : sprintf('%s(%s)', gettype($arrayOfAccountAccountItem), var_export($arrayOfAccountAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Account property can only contain items of type \Nmusco\AssureSign\v2\StructType\Account, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Account value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\Account[] $account
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount
     */
    public function setAccount(array $account = array())
    {
        // validation for constraint: array
        if ('' !== ($accountArrayErrorMessage = self::validateAccountForArrayConstraintsFromSetAccount($account))) {
            throw new \InvalidArgumentException($accountArrayErrorMessage, __LINE__);
        }
        if (is_null($account) || (is_array($account) && empty($account))) {
            unset($this->Account);
        } else {
            $this->Account = $account;
        }
        return $this;
    }
    /**
     * Add item to Account value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\Account $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount
     */
    public function addToAccount(\Nmusco\AssureSign\v2\StructType\Account $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\Account) {
            throw new \InvalidArgumentException(sprintf('The Account property can only contain items of type \Nmusco\AssureSign\v2\StructType\Account, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Account[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\Account|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\Account|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\Account|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\Account|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\Account|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Account
     */
    public function getAttributeName()
    {
        return 'Account';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount
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
