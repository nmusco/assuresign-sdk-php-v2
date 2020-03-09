<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailNotification ArrayType
 * @subpackage Arrays
 */
class ArrayOfEmailNotification extends AbstractStructArrayBase
{
    /**
     * The EmailNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EmailNotification[]
     */
    public $EmailNotification;
    /**
     * Constructor method for ArrayOfEmailNotification
     * @uses ArrayOfEmailNotification::setEmailNotification()
     * @param \Nmusco\AssureSign\v2\StructType\EmailNotification[] $emailNotification
     */
    public function __construct(array $emailNotification = array())
    {
        $this
            ->setEmailNotification($emailNotification);
    }
    /**
     * Get EmailNotification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification[]|null
     */
    public function getEmailNotification()
    {
        return isset($this->EmailNotification) ? $this->EmailNotification : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailNotificationForArrayConstraintsFromSetEmailNotification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailNotificationEmailNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailNotificationEmailNotificationItem instanceof \Nmusco\AssureSign\v2\StructType\EmailNotification) {
                $invalidValues[] = is_object($arrayOfEmailNotificationEmailNotificationItem) ? get_class($arrayOfEmailNotificationEmailNotificationItem) : sprintf('%s(%s)', gettype($arrayOfEmailNotificationEmailNotificationItem), var_export($arrayOfEmailNotificationEmailNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailNotification property can only contain items of type \Nmusco\AssureSign\v2\StructType\EmailNotification, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailNotification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EmailNotification[] $emailNotification
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification
     */
    public function setEmailNotification(array $emailNotification = array())
    {
        // validation for constraint: array
        if ('' !== ($emailNotificationArrayErrorMessage = self::validateEmailNotificationForArrayConstraintsFromSetEmailNotification($emailNotification))) {
            throw new \InvalidArgumentException($emailNotificationArrayErrorMessage, __LINE__);
        }
        if (is_null($emailNotification) || (is_array($emailNotification) && empty($emailNotification))) {
            unset($this->EmailNotification);
        } else {
            $this->EmailNotification = $emailNotification;
        }
        return $this;
    }
    /**
     * Add item to EmailNotification value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EmailNotification $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification
     */
    public function addToEmailNotification(\Nmusco\AssureSign\v2\StructType\EmailNotification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EmailNotification) {
            throw new \InvalidArgumentException(sprintf('The EmailNotification property can only contain items of type \Nmusco\AssureSign\v2\StructType\EmailNotification, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailNotification[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailNotification
     */
    public function getAttributeName()
    {
        return 'EmailNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification
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
