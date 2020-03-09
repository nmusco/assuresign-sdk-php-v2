<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSmsNotificationRecipient ArrayType
 * @subpackage Arrays
 */
class ArrayOfSmsNotificationRecipient extends AbstractStructArrayBase
{
    /**
     * The SmsNotificationRecipient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient[]
     */
    public $SmsNotificationRecipient;
    /**
     * Constructor method for ArrayOfSmsNotificationRecipient
     * @uses ArrayOfSmsNotificationRecipient::setSmsNotificationRecipient()
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient[] $smsNotificationRecipient
     */
    public function __construct(array $smsNotificationRecipient = array())
    {
        $this
            ->setSmsNotificationRecipient($smsNotificationRecipient);
    }
    /**
     * Get SmsNotificationRecipient value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient[]|null
     */
    public function getSmsNotificationRecipient()
    {
        return isset($this->SmsNotificationRecipient) ? $this->SmsNotificationRecipient : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSmsNotificationRecipient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmsNotificationRecipient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSmsNotificationRecipientForArrayConstraintsFromSetSmsNotificationRecipient(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSmsNotificationRecipientSmsNotificationRecipientItem) {
            // validation for constraint: itemType
            if (!$arrayOfSmsNotificationRecipientSmsNotificationRecipientItem instanceof \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient) {
                $invalidValues[] = is_object($arrayOfSmsNotificationRecipientSmsNotificationRecipientItem) ? get_class($arrayOfSmsNotificationRecipientSmsNotificationRecipientItem) : sprintf('%s(%s)', gettype($arrayOfSmsNotificationRecipientSmsNotificationRecipientItem), var_export($arrayOfSmsNotificationRecipientSmsNotificationRecipientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SmsNotificationRecipient property can only contain items of type \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SmsNotificationRecipient value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient[] $smsNotificationRecipient
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient
     */
    public function setSmsNotificationRecipient(array $smsNotificationRecipient = array())
    {
        // validation for constraint: array
        if ('' !== ($smsNotificationRecipientArrayErrorMessage = self::validateSmsNotificationRecipientForArrayConstraintsFromSetSmsNotificationRecipient($smsNotificationRecipient))) {
            throw new \InvalidArgumentException($smsNotificationRecipientArrayErrorMessage, __LINE__);
        }
        if (is_null($smsNotificationRecipient) || (is_array($smsNotificationRecipient) && empty($smsNotificationRecipient))) {
            unset($this->SmsNotificationRecipient);
        } else {
            $this->SmsNotificationRecipient = $smsNotificationRecipient;
        }
        return $this;
    }
    /**
     * Add item to SmsNotificationRecipient value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient
     */
    public function addToSmsNotificationRecipient(\Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient) {
            throw new \InvalidArgumentException(sprintf('The SmsNotificationRecipient property can only contain items of type \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SmsNotificationRecipient[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SmsNotificationRecipient
     */
    public function getAttributeName()
    {
        return 'SmsNotificationRecipient';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient
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
