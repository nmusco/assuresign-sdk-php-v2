<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentTransmission StructType
 * @subpackage Structs
 */
class DocumentTransmission extends Notification
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
     * The TransmissionMethod
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $TransmissionMethod;
    /**
     * The Attempts
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Attempts;
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
     * Constructor method for DocumentTransmission
     * @uses DocumentTransmission::setNotificationId()
     * @uses DocumentTransmission::setTransmissionMethod()
     * @uses DocumentTransmission::setAttempts()
     * @uses DocumentTransmission::setDesignName()
     * @uses DocumentTransmission::setEndpoint()
     * @uses DocumentTransmission::setNotificationDate()
     * @param string $notificationId
     * @param string $transmissionMethod
     * @param int $attempts
     * @param string $designName
     * @param string $endpoint
     * @param string $notificationDate
     */
    public function __construct($notificationId = null, $transmissionMethod = null, $attempts = null, $designName = null, $endpoint = null, $notificationDate = null)
    {
        $this
            ->setNotificationId($notificationId)
            ->setTransmissionMethod($transmissionMethod)
            ->setAttempts($attempts)
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission
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
     * Get TransmissionMethod value
     * @return string
     */
    public function getTransmissionMethod()
    {
        return $this->TransmissionMethod;
    }
    /**
     * Set TransmissionMethod value
     * @uses \Nmusco\AssureSign\v2\EnumType\DocumentTransmissionMethod::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\DocumentTransmissionMethod::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transmissionMethod
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission
     */
    public function setTransmissionMethod($transmissionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\DocumentTransmissionMethod::valueIsValid($transmissionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\DocumentTransmissionMethod', is_array($transmissionMethod) ? implode(', ', $transmissionMethod) : var_export($transmissionMethod, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\DocumentTransmissionMethod::getValidValues())), __LINE__);
        }
        $this->TransmissionMethod = $transmissionMethod;
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission
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
