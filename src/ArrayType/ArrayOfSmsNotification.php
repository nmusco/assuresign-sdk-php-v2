<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSmsNotification ArrayType
 * @subpackage Arrays
 */
class ArrayOfSmsNotification extends AbstractStructArrayBase
{
    /**
     * The SmsNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SmsNotification[]
     */
    public $SmsNotification;
    /**
     * Constructor method for ArrayOfSmsNotification
     * @uses ArrayOfSmsNotification::setSmsNotification()
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotification[] $smsNotification
     */
    public function __construct(array $smsNotification = array())
    {
        $this
            ->setSmsNotification($smsNotification);
    }
    /**
     * Get SmsNotification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification[]|null
     */
    public function getSmsNotification()
    {
        return isset($this->SmsNotification) ? $this->SmsNotification : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSmsNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmsNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSmsNotificationForArrayConstraintsFromSetSmsNotification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSmsNotificationSmsNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfSmsNotificationSmsNotificationItem instanceof \Nmusco\AssureSign\v2\StructType\SmsNotification) {
                $invalidValues[] = is_object($arrayOfSmsNotificationSmsNotificationItem) ? get_class($arrayOfSmsNotificationSmsNotificationItem) : sprintf('%s(%s)', gettype($arrayOfSmsNotificationSmsNotificationItem), var_export($arrayOfSmsNotificationSmsNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SmsNotification property can only contain items of type \Nmusco\AssureSign\v2\StructType\SmsNotification, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SmsNotification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotification[] $smsNotification
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification
     */
    public function setSmsNotification(array $smsNotification = array())
    {
        // validation for constraint: array
        if ('' !== ($smsNotificationArrayErrorMessage = self::validateSmsNotificationForArrayConstraintsFromSetSmsNotification($smsNotification))) {
            throw new \InvalidArgumentException($smsNotificationArrayErrorMessage, __LINE__);
        }
        if (is_null($smsNotification) || (is_array($smsNotification) && empty($smsNotification))) {
            unset($this->SmsNotification);
        } else {
            $this->SmsNotification = $smsNotification;
        }
        return $this;
    }
    /**
     * Add item to SmsNotification value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotification $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification
     */
    public function addToSmsNotification(\Nmusco\AssureSign\v2\StructType\SmsNotification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SmsNotification) {
            throw new \InvalidArgumentException(sprintf('The SmsNotification property can only contain items of type \Nmusco\AssureSign\v2\StructType\SmsNotification, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SmsNotification[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SmsNotification
     */
    public function getAttributeName()
    {
        return 'SmsNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification
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
