<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailNotificationRecipient StructType
 * @subpackage Structs
 */
class EmailNotificationRecipient extends AbstractStructBase
{
    /**
     * The IsSignatory
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsSignatory;
    /**
     * The EmailAddress
     * @var string
     */
    public $EmailAddress;
    /**
     * The FullName
     * @var string
     */
    public $FullName;
    /**
     * Constructor method for EmailNotificationRecipient
     * @uses EmailNotificationRecipient::setIsSignatory()
     * @uses EmailNotificationRecipient::setEmailAddress()
     * @uses EmailNotificationRecipient::setFullName()
     * @param bool $isSignatory
     * @param string $emailAddress
     * @param string $fullName
     */
    public function __construct($isSignatory = null, $emailAddress = null, $fullName = null)
    {
        $this
            ->setIsSignatory($isSignatory)
            ->setEmailAddress($emailAddress)
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
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotificationRecipient
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
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotificationRecipient
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
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
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotificationRecipient
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
