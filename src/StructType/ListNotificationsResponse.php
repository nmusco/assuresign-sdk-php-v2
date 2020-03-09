<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListNotificationsResponse StructType
 * @subpackage Structs
 */
class ListNotificationsResponse extends AbstractStructBase
{
    /**
     * The NotificationQueryResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult
     */
    public $NotificationQueryResults;
    /**
     * Constructor method for ListNotificationsResponse
     * @uses ListNotificationsResponse::setNotificationQueryResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult $notificationQueryResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult $notificationQueryResults = null)
    {
        $this
            ->setNotificationQueryResults($notificationQueryResults);
    }
    /**
     * Get NotificationQueryResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult|null
     */
    public function getNotificationQueryResults()
    {
        return $this->NotificationQueryResults;
    }
    /**
     * Set NotificationQueryResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult $notificationQueryResults
     * @return \Nmusco\AssureSign\v2\StructType\ListNotificationsResponse
     */
    public function setNotificationQueryResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListQueryResult $notificationQueryResults = null)
    {
        $this->NotificationQueryResults = $notificationQueryResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListNotificationsResponse
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
