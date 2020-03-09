<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWebNotification ArrayType
 * @subpackage Arrays
 */
class ArrayOfWebNotification extends AbstractStructArrayBase
{
    /**
     * The WebNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\WebNotification[]
     */
    public $WebNotification;
    /**
     * Constructor method for ArrayOfWebNotification
     * @uses ArrayOfWebNotification::setWebNotification()
     * @param \Nmusco\AssureSign\v2\StructType\WebNotification[] $webNotification
     */
    public function __construct(array $webNotification = array())
    {
        $this
            ->setWebNotification($webNotification);
    }
    /**
     * Get WebNotification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification[]|null
     */
    public function getWebNotification()
    {
        return isset($this->WebNotification) ? $this->WebNotification : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWebNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWebNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWebNotificationForArrayConstraintsFromSetWebNotification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWebNotificationWebNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfWebNotificationWebNotificationItem instanceof \Nmusco\AssureSign\v2\StructType\WebNotification) {
                $invalidValues[] = is_object($arrayOfWebNotificationWebNotificationItem) ? get_class($arrayOfWebNotificationWebNotificationItem) : sprintf('%s(%s)', gettype($arrayOfWebNotificationWebNotificationItem), var_export($arrayOfWebNotificationWebNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WebNotification property can only contain items of type \Nmusco\AssureSign\v2\StructType\WebNotification, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WebNotification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\WebNotification[] $webNotification
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification
     */
    public function setWebNotification(array $webNotification = array())
    {
        // validation for constraint: array
        if ('' !== ($webNotificationArrayErrorMessage = self::validateWebNotificationForArrayConstraintsFromSetWebNotification($webNotification))) {
            throw new \InvalidArgumentException($webNotificationArrayErrorMessage, __LINE__);
        }
        if (is_null($webNotification) || (is_array($webNotification) && empty($webNotification))) {
            unset($this->WebNotification);
        } else {
            $this->WebNotification = $webNotification;
        }
        return $this;
    }
    /**
     * Add item to WebNotification value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\WebNotification $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification
     */
    public function addToWebNotification(\Nmusco\AssureSign\v2\StructType\WebNotification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\WebNotification) {
            throw new \InvalidArgumentException(sprintf('The WebNotification property can only contain items of type \Nmusco\AssureSign\v2\StructType\WebNotification, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WebNotification[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WebNotification
     */
    public function getAttributeName()
    {
        return 'WebNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification
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
