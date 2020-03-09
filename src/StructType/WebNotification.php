<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebNotification StructType
 * @subpackage Structs
 */
class WebNotification extends Notification
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
     * The Attempts
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Attempts;
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
     * The Endpoint
     * @var string
     */
    public $Endpoint;
    /**
     * The NotificationDate
     * @var string
     */
    public $NotificationDate;
    /**
     * Constructor method for WebNotification
     * @uses WebNotification::setNotificationId()
     * @uses WebNotification::setTiming()
     * @uses WebNotification::setAttempts()
     * @uses WebNotification::setSigningStep()
     * @uses WebNotification::setDesignName()
     * @uses WebNotification::setEndpoint()
     * @uses WebNotification::setNotificationDate()
     * @param string $notificationId
     * @param string $timing
     * @param int $attempts
     * @param int $signingStep
     * @param string $designName
     * @param string $endpoint
     * @param string $notificationDate
     */
    public function __construct($notificationId = null, $timing = null, $attempts = null, $signingStep = null, $designName = null, $endpoint = null, $notificationDate = null)
    {
        $this
            ->setNotificationId($notificationId)
            ->setTiming($timing)
            ->setAttempts($attempts)
            ->setSigningStep($signingStep)
            ->setDesignName($designName)
            ->setEndpoint($endpoint)
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
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
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
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
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
     * Get Attempts value
     * @return int
     */
    public function getAttempts()
    {
        return $this->Attempts;
    }
    /**
     * Set Attempts value
     * @param int $attempts
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
     */
    public function setAttempts($attempts = null)
    {
        // validation for constraint: int
        if (!is_null($attempts) && !(is_int($attempts) || ctype_digit($attempts))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attempts, true), gettype($attempts)), __LINE__);
        }
        $this->Attempts = $attempts;
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
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
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
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
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
     * Get Endpoint value
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->Endpoint;
    }
    /**
     * Set Endpoint value
     * @param string $endpoint
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
     */
    public function setEndpoint($endpoint = null)
    {
        // validation for constraint: string
        if (!is_null($endpoint) && !is_string($endpoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endpoint, true), gettype($endpoint)), __LINE__);
        }
        $this->Endpoint = $endpoint;
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
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification
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
