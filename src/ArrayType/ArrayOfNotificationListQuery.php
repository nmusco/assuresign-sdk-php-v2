<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNotificationListQuery ArrayType
 * @subpackage Arrays
 */
class ArrayOfNotificationListQuery extends AbstractStructArrayBase
{
    /**
     * The NotificationListQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\NotificationListQuery[]
     */
    public $NotificationListQuery;
    /**
     * Constructor method for ArrayOfNotificationListQuery
     * @uses ArrayOfNotificationListQuery::setNotificationListQuery()
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListQuery[] $notificationListQuery
     */
    public function __construct(array $notificationListQuery = array())
    {
        $this
            ->setNotificationListQuery($notificationListQuery);
    }
    /**
     * Get NotificationListQuery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQuery[]|null
     */
    public function getNotificationListQuery()
    {
        return isset($this->NotificationListQuery) ? $this->NotificationListQuery : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNotificationListQuery method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationListQuery method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationListQueryForArrayConstraintsFromSetNotificationListQuery(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNotificationListQueryNotificationListQueryItem) {
            // validation for constraint: itemType
            if (!$arrayOfNotificationListQueryNotificationListQueryItem instanceof \Nmusco\AssureSign\v2\StructType\NotificationListQuery) {
                $invalidValues[] = is_object($arrayOfNotificationListQueryNotificationListQueryItem) ? get_class($arrayOfNotificationListQueryNotificationListQueryItem) : sprintf('%s(%s)', gettype($arrayOfNotificationListQueryNotificationListQueryItem), var_export($arrayOfNotificationListQueryNotificationListQueryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NotificationListQuery property can only contain items of type \Nmusco\AssureSign\v2\StructType\NotificationListQuery, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NotificationListQuery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListQuery[] $notificationListQuery
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery
     */
    public function setNotificationListQuery(array $notificationListQuery = array())
    {
        // validation for constraint: array
        if ('' !== ($notificationListQueryArrayErrorMessage = self::validateNotificationListQueryForArrayConstraintsFromSetNotificationListQuery($notificationListQuery))) {
            throw new \InvalidArgumentException($notificationListQueryArrayErrorMessage, __LINE__);
        }
        if (is_null($notificationListQuery) || (is_array($notificationListQuery) && empty($notificationListQuery))) {
            unset($this->NotificationListQuery);
        } else {
            $this->NotificationListQuery = $notificationListQuery;
        }
        return $this;
    }
    /**
     * Add item to NotificationListQuery value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListQuery $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery
     */
    public function addToNotificationListQuery(\Nmusco\AssureSign\v2\StructType\NotificationListQuery $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\NotificationListQuery) {
            throw new \InvalidArgumentException(sprintf('The NotificationListQuery property can only contain items of type \Nmusco\AssureSign\v2\StructType\NotificationListQuery, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NotificationListQuery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQuery|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQuery|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQuery|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQuery|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQuery|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationListQuery
     */
    public function getAttributeName()
    {
        return 'NotificationListQuery';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery
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
