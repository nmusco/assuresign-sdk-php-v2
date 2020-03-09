<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHistoryViewException ArrayType
 * @subpackage Arrays
 */
class ArrayOfHistoryViewException extends AbstractStructArrayBase
{
    /**
     * The HistoryViewException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\HistoryViewException[]
     */
    public $HistoryViewException;
    /**
     * Constructor method for ArrayOfHistoryViewException
     * @uses ArrayOfHistoryViewException::setHistoryViewException()
     * @param \Nmusco\AssureSign\v2\StructType\HistoryViewException[] $historyViewException
     */
    public function __construct(array $historyViewException = array())
    {
        $this
            ->setHistoryViewException($historyViewException);
    }
    /**
     * Get HistoryViewException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\HistoryViewException[]|null
     */
    public function getHistoryViewException()
    {
        return isset($this->HistoryViewException) ? $this->HistoryViewException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setHistoryViewException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHistoryViewException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHistoryViewExceptionForArrayConstraintsFromSetHistoryViewException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfHistoryViewExceptionHistoryViewExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfHistoryViewExceptionHistoryViewExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\HistoryViewException) {
                $invalidValues[] = is_object($arrayOfHistoryViewExceptionHistoryViewExceptionItem) ? get_class($arrayOfHistoryViewExceptionHistoryViewExceptionItem) : sprintf('%s(%s)', gettype($arrayOfHistoryViewExceptionHistoryViewExceptionItem), var_export($arrayOfHistoryViewExceptionHistoryViewExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HistoryViewException property can only contain items of type \Nmusco\AssureSign\v2\StructType\HistoryViewException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set HistoryViewException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\HistoryViewException[] $historyViewException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException
     */
    public function setHistoryViewException(array $historyViewException = array())
    {
        // validation for constraint: array
        if ('' !== ($historyViewExceptionArrayErrorMessage = self::validateHistoryViewExceptionForArrayConstraintsFromSetHistoryViewException($historyViewException))) {
            throw new \InvalidArgumentException($historyViewExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($historyViewException) || (is_array($historyViewException) && empty($historyViewException))) {
            unset($this->HistoryViewException);
        } else {
            $this->HistoryViewException = $historyViewException;
        }
        return $this;
    }
    /**
     * Add item to HistoryViewException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\HistoryViewException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException
     */
    public function addToHistoryViewException(\Nmusco\AssureSign\v2\StructType\HistoryViewException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\HistoryViewException) {
            throw new \InvalidArgumentException(sprintf('The HistoryViewException property can only contain items of type \Nmusco\AssureSign\v2\StructType\HistoryViewException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->HistoryViewException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\HistoryViewException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\HistoryViewException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\HistoryViewException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\HistoryViewException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\HistoryViewException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string HistoryViewException
     */
    public function getAttributeName()
    {
        return 'HistoryViewException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException
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
