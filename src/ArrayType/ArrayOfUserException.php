<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserException ArrayType
 * @subpackage Arrays
 */
class ArrayOfUserException extends AbstractStructArrayBase
{
    /**
     * The UserException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\UserException[]
     */
    public $UserException;
    /**
     * Constructor method for ArrayOfUserException
     * @uses ArrayOfUserException::setUserException()
     * @param \Nmusco\AssureSign\v2\StructType\UserException[] $userException
     */
    public function __construct(array $userException = array())
    {
        $this
            ->setUserException($userException);
    }
    /**
     * Get UserException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\UserException[]|null
     */
    public function getUserException()
    {
        return isset($this->UserException) ? $this->UserException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUserException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserExceptionForArrayConstraintsFromSetUserException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserExceptionUserExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserExceptionUserExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\UserException) {
                $invalidValues[] = is_object($arrayOfUserExceptionUserExceptionItem) ? get_class($arrayOfUserExceptionUserExceptionItem) : sprintf('%s(%s)', gettype($arrayOfUserExceptionUserExceptionItem), var_export($arrayOfUserExceptionUserExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserException property can only contain items of type \Nmusco\AssureSign\v2\StructType\UserException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\UserException[] $userException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
     */
    public function setUserException(array $userException = array())
    {
        // validation for constraint: array
        if ('' !== ($userExceptionArrayErrorMessage = self::validateUserExceptionForArrayConstraintsFromSetUserException($userException))) {
            throw new \InvalidArgumentException($userExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($userException) || (is_array($userException) && empty($userException))) {
            unset($this->UserException);
        } else {
            $this->UserException = $userException;
        }
        return $this;
    }
    /**
     * Add item to UserException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\UserException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
     */
    public function addToUserException(\Nmusco\AssureSign\v2\StructType\UserException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\UserException) {
            throw new \InvalidArgumentException(sprintf('The UserException property can only contain items of type \Nmusco\AssureSign\v2\StructType\UserException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\UserException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\UserException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\UserException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\UserException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\UserException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserException
     */
    public function getAttributeName()
    {
        return 'UserException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfUserException
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
