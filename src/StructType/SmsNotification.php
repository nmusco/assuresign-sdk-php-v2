<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmsNotification StructType
 * @subpackage Structs
 */
class SmsNotification extends Notification
{
    /**
     * The NotificationId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $NotificationId;
    /**
     * The Timing
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Timing;
    /**
     * The Recipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient
     */
    public $Recipients;
    /**
     * The SigningStep
     * @var int
     */
    public $SigningStep;
    /**
     * The DesignName
     * @var string
     */
    public $DesignName;
    /**
     * The DesignSet
     * @var string
     */
    public $DesignSet;
    /**
     * The Body
     * @var string
     */
    public $Body;
    /**
     * The NotificationDate
     * @var string
     */
    public $NotificationDate;
    /**
     * Constructor method for SmsNotification
     * @uses SmsNotification::setNotificationId()
     * @uses SmsNotification::setTiming()
     * @uses SmsNotification::setRecipients()
     * @uses SmsNotification::setSigningStep()
     * @uses SmsNotification::setDesignName()
     * @uses SmsNotification::setDesignSet()
     * @uses SmsNotification::setBody()
     * @uses SmsNotification::setNotificationDate()
     * @param string $notificationId
     * @param string $timing
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient $recipients
     * @param int $signingStep
     * @param string $designName
     * @param string $designSet
     * @param string $body
     * @param string $notificationDate
     */
    public function __construct($notificationId = null, $timing = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient $recipients = null, $signingStep = null, $designName = null, $designSet = null, $body = null, $notificationDate = null)
    {
        $this
            ->setNotificationId($notificationId)
            ->setTiming($timing)
            ->setRecipients($recipients)
            ->setSigningStep($signingStep)
            ->setDesignName($designName)
            ->setDesignSet($designSet)
            ->setBody($body)
            ->setNotificationDate($notificationDate);
    }
    /**
     * Get NotificationId value
     * @return string
     */
    public function getNotificationId()
    {
        return $this->NotificationId;
    }
    /**
     * Set NotificationId value
     * @param string $notificationId
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setNotificationId($notificationId = null)
    {
        // validation for constraint: string
        if (!is_null($notificationId) && !is_string($notificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationId, true), gettype($notificationId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($notificationId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $notificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($notificationId, true)), __LINE__);
        }
        $this->NotificationId = $notificationId;
        return $this;
    }
    /**
     * Get Timing value
     * @return string
     */
    public function getTiming()
    {
        return $this->Timing;
    }
    /**
     * Set Timing value
     * @uses \Nmusco\AssureSign\v2\EnumType\NotificationTimingType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\NotificationTimingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $timing
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setTiming($timing = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\NotificationTimingType::valueIsValid($timing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\NotificationTimingType', is_array($timing) ? implode(', ', $timing) : var_export($timing, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\NotificationTimingType::getValidValues())), __LINE__);
        }
        $this->Timing = $timing;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient $recipients
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setRecipients(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSmsNotificationRecipient $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Get SigningStep value
     * @return int|null
     */
    public function getSigningStep()
    {
        return $this->SigningStep;
    }
    /**
     * Set SigningStep value
     * @param int $signingStep
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setSigningStep($signingStep = null)
    {
        // validation for constraint: int
        if (!is_null($signingStep) && !(is_int($signingStep) || ctype_digit($signingStep))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signingStep, true), gettype($signingStep)), __LINE__);
        }
        $this->SigningStep = $signingStep;
        return $this;
    }
    /**
     * Get DesignName value
     * @return string|null
     */
    public function getDesignName()
    {
        return $this->DesignName;
    }
    /**
     * Set DesignName value
     * @param string $designName
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setDesignName($designName = null)
    {
        // validation for constraint: string
        if (!is_null($designName) && !is_string($designName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($designName, true), gettype($designName)), __LINE__);
        }
        $this->DesignName = $designName;
        return $this;
    }
    /**
     * Get DesignSet value
     * @return string|null
     */
    public function getDesignSet()
    {
        return $this->DesignSet;
    }
    /**
     * Set DesignSet value
     * @param string $designSet
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setDesignSet($designSet = null)
    {
        // validation for constraint: string
        if (!is_null($designSet) && !is_string($designSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($designSet, true), gettype($designSet)), __LINE__);
        }
        $this->DesignSet = $designSet;
        return $this;
    }
    /**
     * Get Body value
     * @return string|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param string $body
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->Body = $body;
        return $this;
    }
    /**
     * Get NotificationDate value
     * @return string|null
     */
    public function getNotificationDate()
    {
        return $this->NotificationDate;
    }
    /**
     * Set NotificationDate value
     * @param string $notificationDate
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public function setNotificationDate($notificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($notificationDate) && !is_string($notificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationDate, true), gettype($notificationDate)), __LINE__);
        }
        $this->NotificationDate = $notificationDate;
        return $this;
    }
}
