<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatoryInfo StructType
 * @subpackage Structs
 */
class SignatoryInfo extends AbstractStructBase
{
    /**
     * The Signatory
     * @var string
     */
    public $Signatory;
    /**
     * The SignatureStyle
     * @var string
     */
    public $SignatureStyle;
    /**
     * The FirstNameParameterName
     * @var string
     */
    public $FirstNameParameterName;
    /**
     * The LastNameParameterName
     * @var string
     */
    public $LastNameParameterName;
    /**
     * The FullNameParameterName
     * @var string
     */
    public $FullNameParameterName;
    /**
     * The EmailAddressParameterName
     * @var string
     */
    public $EmailAddressParameterName;
    /**
     * The MobilePhoneParameterName
     * @var string
     */
    public $MobilePhoneParameterName;
    /**
     * The PasswordParameterName
     * @var string
     */
    public $PasswordParameterName;
    /**
     * The PasswordPromptParameterName
     * @var string
     */
    public $PasswordPromptParameterName;
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
     * The FullName
     * @var string
     */
    public $FullName;
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
     * The Password
     * @var string
     */
    public $Password;
    /**
     * Constructor method for SignatoryInfo
     * @uses SignatoryInfo::setSignatory()
     * @uses SignatoryInfo::setSignatureStyle()
     * @uses SignatoryInfo::setFirstNameParameterName()
     * @uses SignatoryInfo::setLastNameParameterName()
     * @uses SignatoryInfo::setFullNameParameterName()
     * @uses SignatoryInfo::setEmailAddressParameterName()
     * @uses SignatoryInfo::setMobilePhoneParameterName()
     * @uses SignatoryInfo::setPasswordParameterName()
     * @uses SignatoryInfo::setPasswordPromptParameterName()
     * @uses SignatoryInfo::setEmailAddress()
     * @uses SignatoryInfo::setMobilePhone()
     * @uses SignatoryInfo::setFullName()
     * @uses SignatoryInfo::setFirstName()
     * @uses SignatoryInfo::setLastName()
     * @uses SignatoryInfo::setPassword()
     * @param string $signatory
     * @param string $signatureStyle
     * @param string $firstNameParameterName
     * @param string $lastNameParameterName
     * @param string $fullNameParameterName
     * @param string $emailAddressParameterName
     * @param string $mobilePhoneParameterName
     * @param string $passwordParameterName
     * @param string $passwordPromptParameterName
     * @param string $emailAddress
     * @param string $mobilePhone
     * @param string $fullName
     * @param string $firstName
     * @param string $lastName
     * @param string $password
     */
    public function __construct($signatory = null, $signatureStyle = null, $firstNameParameterName = null, $lastNameParameterName = null, $fullNameParameterName = null, $emailAddressParameterName = null, $mobilePhoneParameterName = null, $passwordParameterName = null, $passwordPromptParameterName = null, $emailAddress = null, $mobilePhone = null, $fullName = null, $firstName = null, $lastName = null, $password = null)
    {
        $this
            ->setSignatory($signatory)
            ->setSignatureStyle($signatureStyle)
            ->setFirstNameParameterName($firstNameParameterName)
            ->setLastNameParameterName($lastNameParameterName)
            ->setFullNameParameterName($fullNameParameterName)
            ->setEmailAddressParameterName($emailAddressParameterName)
            ->setMobilePhoneParameterName($mobilePhoneParameterName)
            ->setPasswordParameterName($passwordParameterName)
            ->setPasswordPromptParameterName($passwordPromptParameterName)
            ->setEmailAddress($emailAddress)
            ->setMobilePhone($mobilePhone)
            ->setFullName($fullName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPassword($password);
    }
    /**
     * Get Signatory value
     * @return string|null
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    /**
     * Set Signatory value
     * @param string $signatory
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setSignatory($signatory = null)
    {
        // validation for constraint: string
        if (!is_null($signatory) && !is_string($signatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatory, true), gettype($signatory)), __LINE__);
        }
        $this->Signatory = $signatory;
        return $this;
    }
    /**
     * Get SignatureStyle value
     * @return string|null
     */
    public function getSignatureStyle()
    {
        return $this->SignatureStyle;
    }
    /**
     * Set SignatureStyle value
     * @param string $signatureStyle
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setSignatureStyle($signatureStyle = null)
    {
        // validation for constraint: string
        if (!is_null($signatureStyle) && !is_string($signatureStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureStyle, true), gettype($signatureStyle)), __LINE__);
        }
        $this->SignatureStyle = $signatureStyle;
        return $this;
    }
    /**
     * Get FirstNameParameterName value
     * @return string|null
     */
    public function getFirstNameParameterName()
    {
        return $this->FirstNameParameterName;
    }
    /**
     * Set FirstNameParameterName value
     * @param string $firstNameParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setFirstNameParameterName($firstNameParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($firstNameParameterName) && !is_string($firstNameParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstNameParameterName, true), gettype($firstNameParameterName)), __LINE__);
        }
        $this->FirstNameParameterName = $firstNameParameterName;
        return $this;
    }
    /**
     * Get LastNameParameterName value
     * @return string|null
     */
    public function getLastNameParameterName()
    {
        return $this->LastNameParameterName;
    }
    /**
     * Set LastNameParameterName value
     * @param string $lastNameParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setLastNameParameterName($lastNameParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($lastNameParameterName) && !is_string($lastNameParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastNameParameterName, true), gettype($lastNameParameterName)), __LINE__);
        }
        $this->LastNameParameterName = $lastNameParameterName;
        return $this;
    }
    /**
     * Get FullNameParameterName value
     * @return string|null
     */
    public function getFullNameParameterName()
    {
        return $this->FullNameParameterName;
    }
    /**
     * Set FullNameParameterName value
     * @param string $fullNameParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setFullNameParameterName($fullNameParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($fullNameParameterName) && !is_string($fullNameParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullNameParameterName, true), gettype($fullNameParameterName)), __LINE__);
        }
        $this->FullNameParameterName = $fullNameParameterName;
        return $this;
    }
    /**
     * Get EmailAddressParameterName value
     * @return string|null
     */
    public function getEmailAddressParameterName()
    {
        return $this->EmailAddressParameterName;
    }
    /**
     * Set EmailAddressParameterName value
     * @param string $emailAddressParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setEmailAddressParameterName($emailAddressParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddressParameterName) && !is_string($emailAddressParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddressParameterName, true), gettype($emailAddressParameterName)), __LINE__);
        }
        $this->EmailAddressParameterName = $emailAddressParameterName;
        return $this;
    }
    /**
     * Get MobilePhoneParameterName value
     * @return string|null
     */
    public function getMobilePhoneParameterName()
    {
        return $this->MobilePhoneParameterName;
    }
    /**
     * Set MobilePhoneParameterName value
     * @param string $mobilePhoneParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setMobilePhoneParameterName($mobilePhoneParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($mobilePhoneParameterName) && !is_string($mobilePhoneParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhoneParameterName, true), gettype($mobilePhoneParameterName)), __LINE__);
        }
        $this->MobilePhoneParameterName = $mobilePhoneParameterName;
        return $this;
    }
    /**
     * Get PasswordParameterName value
     * @return string|null
     */
    public function getPasswordParameterName()
    {
        return $this->PasswordParameterName;
    }
    /**
     * Set PasswordParameterName value
     * @param string $passwordParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setPasswordParameterName($passwordParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($passwordParameterName) && !is_string($passwordParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordParameterName, true), gettype($passwordParameterName)), __LINE__);
        }
        $this->PasswordParameterName = $passwordParameterName;
        return $this;
    }
    /**
     * Get PasswordPromptParameterName value
     * @return string|null
     */
    public function getPasswordPromptParameterName()
    {
        return $this->PasswordPromptParameterName;
    }
    /**
     * Set PasswordPromptParameterName value
     * @param string $passwordPromptParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setPasswordPromptParameterName($passwordPromptParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($passwordPromptParameterName) && !is_string($passwordPromptParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordPromptParameterName, true), gettype($passwordPromptParameterName)), __LINE__);
        }
        $this->PasswordPromptParameterName = $passwordPromptParameterName;
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
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
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryInfo
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
