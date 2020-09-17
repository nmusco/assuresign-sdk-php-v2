<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmsNotificationRecipient StructType
 * @subpackage Structs
 */
class SmsNotificationRecipient extends AbstractStructBase
{
    /**
     * The IsSignatory
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsSignatory;
    /**
     * The MobilePhone
     * @var string
     */
    public $MobilePhone;
    /**
     * The FullName
     * @var string
     */
    public $FullName;
    /**
     * Constructor method for SmsNotificationRecipient
     * @uses SmsNotificationRecipient::setIsSignatory()
     * @uses SmsNotificationRecipient::setMobilePhone()
     * @uses SmsNotificationRecipient::setFullName()
     * @param bool $isSignatory
     * @param string $mobilePhone
     * @param string $fullName
     */
    public function __construct($isSignatory = null, $mobilePhone = null, $fullName = null)
    {
        $this
            ->setIsSignatory($isSignatory)
            ->setMobilePhone($mobilePhone)
            ->setFullName($fullName);
    }
    /**
     * Get IsSignatory value
     * @return bool
     */
    public function getIsSignatory()
    {
        return $this->IsSignatory;
    }
    /**
     * Set IsSignatory value
     * @param bool $isSignatory
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient
     */
    public function setIsSignatory($isSignatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSignatory) && !is_bool($isSignatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSignatory, true), gettype($isSignatory)), __LINE__);
        }
        $this->IsSignatory = $isSignatory;
        return $this;
    }
    /**
     * Get MobilePhone value
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }
    /**
     * Set MobilePhone value
     * @param string $mobilePhone
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient
     */
    public function setMobilePhone($mobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        $this->MobilePhone = $mobilePhone;
        return $this;
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotificationRecipient
     */
    public function setFullName($fullName = null)
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->FullName = $fullName;
        return $this;
    }
}
