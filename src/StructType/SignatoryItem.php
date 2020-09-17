<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatoryItem StructType
 * @subpackage Structs
 */
class SignatoryItem extends AbstractStructBase
{
    /**
     * The SignatoryId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $SignatoryId;
    /**
     * The SignatoryAuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $SignatoryAuthToken;
    /**
     * The FirstName
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * @var string
     */
    public $LastName;
    /**
     * The FullName
     * @var string
     */
    public $FullName;
    /**
     * The EmailAddress
     * @var string
     */
    public $EmailAddress;
    /**
     * The MobilePhone
     * @var string
     */
    public $MobilePhone;
    /**
     * Constructor method for SignatoryItem
     * @uses SignatoryItem::setSignatoryId()
     * @uses SignatoryItem::setSignatoryAuthToken()
     * @uses SignatoryItem::setFirstName()
     * @uses SignatoryItem::setLastName()
     * @uses SignatoryItem::setFullName()
     * @uses SignatoryItem::setEmailAddress()
     * @uses SignatoryItem::setMobilePhone()
     * @param string $signatoryId
     * @param string $signatoryAuthToken
     * @param string $firstName
     * @param string $lastName
     * @param string $fullName
     * @param string $emailAddress
     * @param string $mobilePhone
     */
    public function __construct($signatoryId = null, $signatoryAuthToken = null, $firstName = null, $lastName = null, $fullName = null, $emailAddress = null, $mobilePhone = null)
    {
        $this
            ->setSignatoryId($signatoryId)
            ->setSignatoryAuthToken($signatoryAuthToken)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setFullName($fullName)
            ->setEmailAddress($emailAddress)
            ->setMobilePhone($mobilePhone);
    }
    /**
     * Get SignatoryId value
     * @return string
     */
    public function getSignatoryId()
    {
        return $this->SignatoryId;
    }
    /**
     * Set SignatoryId value
     * @param string $signatoryId
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
     */
    public function setSignatoryId($signatoryId = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryId) && !is_string($signatoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryId, true), gettype($signatoryId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($signatoryId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $signatoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($signatoryId, true)), __LINE__);
        }
        $this->SignatoryId = $signatoryId;
        return $this;
    }
    /**
     * Get SignatoryAuthToken value
     * @return string
     */
    public function getSignatoryAuthToken()
    {
        return $this->SignatoryAuthToken;
    }
    /**
     * Set SignatoryAuthToken value
     * @param string $signatoryAuthToken
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
     */
    public function setSignatoryAuthToken($signatoryAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryAuthToken) && !is_string($signatoryAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryAuthToken, true), gettype($signatoryAuthToken)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($signatoryAuthToken) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $signatoryAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($signatoryAuthToken, true)), __LINE__);
        }
        $this->SignatoryAuthToken = $signatoryAuthToken;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryItem
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
}
