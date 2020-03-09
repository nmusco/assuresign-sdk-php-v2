<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListNotifications StructType
 * @subpackage Structs
 */
class ListNotifications extends AbstractStructBase
{
    /**
     * The NotificationQueries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery
     */
    public $NotificationQueries;
    /**
     * Constructor method for ListNotifications
     * @uses ListNotifications::setNotificationQueries()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery $notificationQueries
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery $notificationQueries = null)
    {
        $this
            ->setNotificationQueries($notificationQueries);
    }
    /**
     * Get NotificationQueries value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery|null
     */
    public function getNotificationQueries()
    {
        return $this->NotificationQueries;
    }
    /**
     * Set NotificationQueries value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery $notificationQueries
     * @return \Nmusco\AssureSign\v2\StructType\ListNotifications
     */
    public function setNotificationQueries(\Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQuery $notificationQueries = null)
    {
        $this->NotificationQueries = $notificationQueries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListNotifications
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
