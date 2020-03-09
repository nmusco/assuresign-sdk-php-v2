<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNotificationListQueryResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfNotificationListQueryResult extends AbstractStructArrayBase
{
    /**
     * The NotificationListQueryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult[]
     */
    public $NotificationListQueryResult;
    /**
     * Constructor method for ArrayOfNotificationListQueryResult
     * @uses ArrayOfNotificationListQueryResult::setNotificationListQueryResult()
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult[] $notificationListQueryResult
     */
    public function __construct(array $notificationListQueryResult = array())
    {
        $this
            ->setNotificationListQueryResult($notificationListQueryResult);
    }
    /**
     * Get NotificationListQueryResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult[]|null
     */
    public function getNotificationListQueryResult()
    {
        return isset($this->NotificationListQueryResult) ? $this->NotificationListQueryResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNotificationListQueryResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationListQueryResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationListQueryResultForArrayConstraintsFromSetNotificationListQueryResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNotificationListQueryResultNotificationListQueryResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfNotificationListQueryResultNotificationListQueryResultItem instanceof \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult) {
                $invalidValues[] = is_object($arrayOfNotificationListQueryResultNotificationListQueryResultItem) ? get_class($arrayOfNotificationListQueryResultNotificationListQueryResultItem) : sprintf('%s(%s)', gettype($arrayOfNotificationListQueryResultNotificationListQueryResultItem), var_export($arrayOfNotificationListQueryResultNotificationListQueryResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NotificationListQueryResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NotificationListQueryResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult[] $notificationListQueryResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult
     */
    public function setNotificationListQueryResult(array $notificationListQueryResult = array())
    {
        // validation for constraint: array
        if ('' !== ($notificationListQueryResultArrayErrorMessage = self::validateNotificationListQueryResultForArrayConstraintsFromSetNotificationListQueryResult($notificationListQueryResult))) {
            throw new \InvalidArgumentException($notificationListQueryResultArrayErrorMessage, __LINE__);
        }
        if (is_null($notificationListQueryResult) || (is_array($notificationListQueryResult) && empty($notificationListQueryResult))) {
            unset($this->NotificationListQueryResult);
        } else {
            $this->NotificationListQueryResult = $notificationListQueryResult;
        }
        return $this;
    }
    /**
     * Add item to NotificationListQueryResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult
     */
    public function addToNotificationListQueryResult(\Nmusco\AssureSign\v2\StructType\NotificationListQueryResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult) {
            throw new \InvalidArgumentException(sprintf('The NotificationListQueryResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NotificationListQueryResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationListQueryResult
     */
    public function getAttributeName()
    {
        return 'NotificationListQueryResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult
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
