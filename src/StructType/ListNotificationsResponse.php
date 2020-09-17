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
}
