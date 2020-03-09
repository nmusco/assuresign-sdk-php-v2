<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Metadata StructType
 * @subpackage Structs
 */
class Metadata extends AbstractStructBase
{
    /**
     * The TermsAndConditions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TermsAndConditions
     */
    public $TermsAndConditions;
    /**
     * The UserName
     * @var string
     */
    public $UserName;
    /**
     * The DocumentName
     * @var string
     */
    public $DocumentName;
    /**
     * The OrderNumber
     * @var string
     */
    public $OrderNumber;
    /**
     * The Password
     * @var string
     */
    public $Password;
    /**
     * The ExpirationDate
     * @var string
     */
    public $ExpirationDate;
    /**
     * The Culture
     * @var string
     */
    public $Culture;
    /**
     * The SignatureDeviceSupportEnabled
     * @var bool
     */
    public $SignatureDeviceSupportEnabled;
    /**
     * The EnvelopeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $EnvelopeId;
    /**
     * Constructor method for Metadata
     * @uses Metadata::setTermsAndConditions()
     * @uses Metadata::setUserName()
     * @uses Metadata::setDocumentName()
     * @uses Metadata::setOrderNumber()
     * @uses Metadata::setPassword()
     * @uses Metadata::setExpirationDate()
     * @uses Metadata::setCulture()
     * @uses Metadata::setSignatureDeviceSupportEnabled()
     * @uses Metadata::setEnvelopeId()
     * @param \Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions
     * @param string $userName
     * @param string $documentName
     * @param string $orderNumber
     * @param string $password
     * @param string $expirationDate
     * @param string $culture
     * @param bool $signatureDeviceSupportEnabled
     * @param string $envelopeId
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions = null, $userName = null, $documentName = null, $orderNumber = null, $password = null, $expirationDate = null, $culture = null, $signatureDeviceSupportEnabled = null, $envelopeId = null)
    {
        $this
            ->setTermsAndConditions($termsAndConditions)
            ->setUserName($userName)
            ->setDocumentName($documentName)
            ->setOrderNumber($orderNumber)
            ->setPassword($password)
            ->setExpirationDate($expirationDate)
            ->setCulture($culture)
            ->setSignatureDeviceSupportEnabled($signatureDeviceSupportEnabled)
            ->setEnvelopeId($envelopeId);
    }
    /**
     * Get TermsAndConditions value
     * @return \Nmusco\AssureSign\v2\StructType\TermsAndConditions|null
     */
    public function getTermsAndConditions()
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param \Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setTermsAndConditions(\Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions = null)
    {
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get DocumentName value
     * @return string|null
     */
    public function getDocumentName()
    {
        return $this->DocumentName;
    }
    /**
     * Set DocumentName value
     * @param string $documentName
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setDocumentName($documentName = null)
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentName, true), gettype($documentName)), __LINE__);
        }
        $this->DocumentName = $documentName;
        return $this;
    }
    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param string $orderNumber
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
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
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
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
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get Culture value
     * @return string|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setCulture($culture = null)
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get SignatureDeviceSupportEnabled value
     * @return bool|null
     */
    public function getSignatureDeviceSupportEnabled()
    {
        return $this->SignatureDeviceSupportEnabled;
    }
    /**
     * Set SignatureDeviceSupportEnabled value
     * @param bool $signatureDeviceSupportEnabled
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setSignatureDeviceSupportEnabled($signatureDeviceSupportEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($signatureDeviceSupportEnabled) && !is_bool($signatureDeviceSupportEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signatureDeviceSupportEnabled, true), gettype($signatureDeviceSupportEnabled)), __LINE__);
        }
        $this->SignatureDeviceSupportEnabled = $signatureDeviceSupportEnabled;
        return $this;
    }
    /**
     * Get EnvelopeId value
     * @return string|null
     */
    public function getEnvelopeId()
    {
        return $this->EnvelopeId;
    }
    /**
     * Set EnvelopeId value
     * @param string $envelopeId
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public function setEnvelopeId($envelopeId = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeId) && !is_string($envelopeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeId, true), gettype($envelopeId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeId, true)), __LINE__);
        }
        $this->EnvelopeId = $envelopeId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\Metadata
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
