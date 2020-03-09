<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationListQueryResult StructType
 * @subpackage Structs
 */
class NotificationListQueryResult extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The EmailNotifications
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification
     */
    public $EmailNotifications;
    /**
     * The SmsNotifications
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification
     */
    public $SmsNotifications;
    /**
     * The WebNotifications
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification
     */
    public $WebNotifications;
    /**
     * The DocumentTransmissions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission
     */
    public $DocumentTransmissions;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException
     */
    public $Exceptions;
    /**
     * Constructor method for NotificationListQueryResult
     * @uses NotificationListQueryResult::setId()
     * @uses NotificationListQueryResult::setEmailNotifications()
     * @uses NotificationListQueryResult::setSmsNotifications()
     * @uses NotificationListQueryResult::setWebNotifications()
     * @uses NotificationListQueryResult::setDocumentTransmissions()
     * @uses NotificationListQueryResult::setExceptions()
     * @param string $id
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification $emailNotifications
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification $smsNotifications
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification $webNotifications
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission $documentTransmissions
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException $exceptions
     */
    public function __construct($id = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification $emailNotifications = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification $smsNotifications = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification $webNotifications = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission $documentTransmissions = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException $exceptions = null)
    {
        $this
            ->setId($id)
            ->setEmailNotifications($emailNotifications)
            ->setSmsNotifications($smsNotifications)
            ->setWebNotifications($webNotifications)
            ->setDocumentTransmissions($documentTransmissions)
            ->setExceptions($exceptions);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get EmailNotifications value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification|null
     */
    public function getEmailNotifications()
    {
        return $this->EmailNotifications;
    }
    /**
     * Set EmailNotifications value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification $emailNotifications
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
     */
    public function setEmailNotifications(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEmailNotification $emailNotifications = null)
    {
        $this->EmailNotifications = $emailNotifications;
        return $this;
    }
    /**
     * Get SmsNotifications value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification|null
     */
    public function getSmsNotifications()
    {
        return $this->SmsNotifications;
    }
    /**
     * Set SmsNotifications value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification $smsNotifications
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
     */
    public function setSmsNotifications(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotification $smsNotifications = null)
    {
        $this->SmsNotifications = $smsNotifications;
        return $this;
    }
    /**
     * Get WebNotifications value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification|null
     */
    public function getWebNotifications()
    {
        return $this->WebNotifications;
    }
    /**
     * Set WebNotifications value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification $webNotifications
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
     */
    public function setWebNotifications(\Nmusco\AssureSign\v2\ArrayType\ArrayOfWebNotification $webNotifications = null)
    {
        $this->WebNotifications = $webNotifications;
        return $this;
    }
    /**
     * Get DocumentTransmissions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission|null
     */
    public function getDocumentTransmissions()
    {
        return $this->DocumentTransmissions;
    }
    /**
     * Set DocumentTransmissions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission $documentTransmissions
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
     */
    public function setDocumentTransmissions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission $documentTransmissions = null)
    {
        $this->DocumentTransmissions = $documentTransmissions;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfNotificationListException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\NotificationListQueryResult
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
