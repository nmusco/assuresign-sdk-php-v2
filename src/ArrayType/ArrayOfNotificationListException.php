<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNotificationListException ArrayType
 * @subpackage Arrays
 */
class ArrayOfNotificationListException extends AbstractStructArrayBase
{
    /**
     * The NotificationListException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\NotificationListException[]
     */
    public $NotificationListException;
    /**
     * Constructor method for ArrayOfNotificationListException
     * @uses ArrayOfNotificationListException::setNotificationListException()
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListException[] $notificationListException
     */
    public function __construct(array $notificationListException = array())
    {
        $this
            ->setNotificationListException($notificationListException);
    }
    /**
     * Get NotificationListException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListException[]|null
     */
    public function getNotificationListException()
    {
        return isset($this->NotificationListException) ? $this->NotificationListException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNotificationListException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationListException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationListExceptionForArrayConstraintsFromSetNotificationListException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNotificationListExceptionNotificationListExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfNotificationListExceptionNotificationListExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\NotificationListException) {
                $invalidValues[] = is_object($arrayOfNotificationListExceptionNotificationListExceptionItem) ? get_class($arrayOfNotificationListExceptionNotificationListExceptionItem) : sprintf('%s(%s)', gettype($arrayOfNotificationListExceptionNotificationListExceptionItem), var_export($arrayOfNotificationListExceptionNotificationListExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NotificationListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\NotificationListException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NotificationListException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListException[] $notificationListException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException
     */
    public function setNotificationListException(array $notificationListException = array())
    {
        // validation for constraint: array
        if ('' !== ($notificationListExceptionArrayErrorMessage = self::validateNotificationListExceptionForArrayConstraintsFromSetNotificationListException($notificationListException))) {
            throw new \InvalidArgumentException($notificationListExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($notificationListException) || (is_array($notificationListException) && empty($notificationListException))) {
            unset($this->NotificationListException);
        } else {
            $this->NotificationListException = $notificationListException;
        }
        return $this;
    }
    /**
     * Add item to NotificationListException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException
     */
    public function addToNotificationListException(\Nmusco\AssureSign\v2\StructType\NotificationListException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\NotificationListException) {
            throw new \InvalidArgumentException(sprintf('The NotificationListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\NotificationListException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NotificationListException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationListException
     */
    public function getAttributeName()
    {
        return 'NotificationListException';
    }
}
