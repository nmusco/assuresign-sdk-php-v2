<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAccountException ArrayType
 * @subpackage Arrays
 */
class ArrayOfAccountException extends AbstractStructArrayBase
{
    /**
     * The AccountException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\AccountException[]
     */
    public $AccountException;
    /**
     * Constructor method for ArrayOfAccountException
     * @uses ArrayOfAccountException::setAccountException()
     * @param \Nmusco\AssureSign\v2\StructType\AccountException[] $accountException
     */
    public function __construct(array $accountException = array())
    {
        $this
            ->setAccountException($accountException);
    }
    /**
     * Get AccountException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\AccountException[]|null
     */
    public function getAccountException()
    {
        return isset($this->AccountException) ? $this->AccountException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountExceptionForArrayConstraintsFromSetAccountException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAccountExceptionAccountExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfAccountExceptionAccountExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\AccountException) {
                $invalidValues[] = is_object($arrayOfAccountExceptionAccountExceptionItem) ? get_class($arrayOfAccountExceptionAccountExceptionItem) : sprintf('%s(%s)', gettype($arrayOfAccountExceptionAccountExceptionItem), var_export($arrayOfAccountExceptionAccountExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountException property can only contain items of type \Nmusco\AssureSign\v2\StructType\AccountException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccountException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\AccountException[] $accountException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException
     */
    public function setAccountException(array $accountException = array())
    {
        // validation for constraint: array
        if ('' !== ($accountExceptionArrayErrorMessage = self::validateAccountExceptionForArrayConstraintsFromSetAccountException($accountException))) {
            throw new \InvalidArgumentException($accountExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($accountException) || (is_array($accountException) && empty($accountException))) {
            unset($this->AccountException);
        } else {
            $this->AccountException = $accountException;
        }
        return $this;
    }
    /**
     * Add item to AccountException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\AccountException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException
     */
    public function addToAccountException(\Nmusco\AssureSign\v2\StructType\AccountException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\AccountException) {
            throw new \InvalidArgumentException(sprintf('The AccountException property can only contain items of type \Nmusco\AssureSign\v2\StructType\AccountException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\AccountException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\AccountException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\AccountException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\AccountException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\AccountException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccountException
     */
    public function getAttributeName()
    {
        return 'AccountException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException
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
