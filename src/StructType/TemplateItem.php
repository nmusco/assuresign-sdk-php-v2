<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateItem StructType
 * @subpackage Structs
 */
class TemplateItem extends AbstractStructBase
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
     * The CreationDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CreationDate;
    /**
     * The ImmediatePresentment
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ImmediatePresentment;
    /**
     * The PasswordRequired
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $PasswordRequired;
    /**
     * The DocumentTemplateType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DocumentTemplateType;
    /**
     * The SignatureDeviceSupportEnabled
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SignatureDeviceSupportEnabled;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ModifiedDate;
    /**
     * The PageCount
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $PageCount;
    /**
     * The TermsAndConditions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TermsAndConditions
     */
    public $TermsAndConditions;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Tag
     * @var string
     */
    public $Tag;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Accessibility
     * @var string
     */
    public $Accessibility;
    /**
     * The Owner
     * @var string
     */
    public $Owner;
    /**
     * The Culture
     * @var string
     */
    public $Culture;
    /**
     * Constructor method for TemplateItem
     * @uses TemplateItem::setId()
     * @uses TemplateItem::setCreationDate()
     * @uses TemplateItem::setImmediatePresentment()
     * @uses TemplateItem::setPasswordRequired()
     * @uses TemplateItem::setDocumentTemplateType()
     * @uses TemplateItem::setSignatureDeviceSupportEnabled()
     * @uses TemplateItem::setModifiedDate()
     * @uses TemplateItem::setPageCount()
     * @uses TemplateItem::setTermsAndConditions()
     * @uses TemplateItem::setName()
     * @uses TemplateItem::setTag()
     * @uses TemplateItem::setDescription()
     * @uses TemplateItem::setAccessibility()
     * @uses TemplateItem::setOwner()
     * @uses TemplateItem::setCulture()
     * @param string $id
     * @param string $creationDate
     * @param bool $immediatePresentment
     * @param bool $passwordRequired
     * @param string $documentTemplateType
     * @param bool $signatureDeviceSupportEnabled
     * @param string $modifiedDate
     * @param int $pageCount
     * @param \Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions
     * @param string $name
     * @param string $tag
     * @param string $description
     * @param string $accessibility
     * @param string $owner
     * @param string $culture
     */
    public function __construct($id = null, $creationDate = null, $immediatePresentment = null, $passwordRequired = null, $documentTemplateType = null, $signatureDeviceSupportEnabled = null, $modifiedDate = null, $pageCount = null, \Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions = null, $name = null, $tag = null, $description = null, $accessibility = null, $owner = null, $culture = null)
    {
        $this
            ->setId($id)
            ->setCreationDate($creationDate)
            ->setImmediatePresentment($immediatePresentment)
            ->setPasswordRequired($passwordRequired)
            ->setDocumentTemplateType($documentTemplateType)
            ->setSignatureDeviceSupportEnabled($signatureDeviceSupportEnabled)
            ->setModifiedDate($modifiedDate)
            ->setPageCount($pageCount)
            ->setTermsAndConditions($termsAndConditions)
            ->setName($name)
            ->setTag($tag)
            ->setDescription($description)
            ->setAccessibility($accessibility)
            ->setOwner($owner)
            ->setCulture($culture);
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
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
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
     * Get CreationDate value
     * @return string
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get ImmediatePresentment value
     * @return bool
     */
    public function getImmediatePresentment()
    {
        return $this->ImmediatePresentment;
    }
    /**
     * Set ImmediatePresentment value
     * @param bool $immediatePresentment
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setImmediatePresentment($immediatePresentment = null)
    {
        // validation for constraint: boolean
        if (!is_null($immediatePresentment) && !is_bool($immediatePresentment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePresentment, true), gettype($immediatePresentment)), __LINE__);
        }
        $this->ImmediatePresentment = $immediatePresentment;
        return $this;
    }
    /**
     * Get PasswordRequired value
     * @return bool
     */
    public function getPasswordRequired()
    {
        return $this->PasswordRequired;
    }
    /**
     * Set PasswordRequired value
     * @param bool $passwordRequired
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setPasswordRequired($passwordRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($passwordRequired) && !is_bool($passwordRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passwordRequired, true), gettype($passwordRequired)), __LINE__);
        }
        $this->PasswordRequired = $passwordRequired;
        return $this;
    }
    /**
     * Get DocumentTemplateType value
     * @return string
     */
    public function getDocumentTemplateType()
    {
        return $this->DocumentTemplateType;
    }
    /**
     * Set DocumentTemplateType value
     * @uses \Nmusco\AssureSign\v2\EnumType\DocumentTemplateType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\DocumentTemplateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentTemplateType
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setDocumentTemplateType($documentTemplateType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\DocumentTemplateType::valueIsValid($documentTemplateType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\DocumentTemplateType', is_array($documentTemplateType) ? implode(', ', $documentTemplateType) : var_export($documentTemplateType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\DocumentTemplateType::getValidValues())), __LINE__);
        }
        $this->DocumentTemplateType = $documentTemplateType;
        return $this;
    }
    /**
     * Get SignatureDeviceSupportEnabled value
     * @return bool
     */
    public function getSignatureDeviceSupportEnabled()
    {
        return $this->SignatureDeviceSupportEnabled;
    }
    /**
     * Set SignatureDeviceSupportEnabled value
     * @param bool $signatureDeviceSupportEnabled
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
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
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setModifiedDate($modifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;
        return $this;
    }
    /**
     * Get PageCount value
     * @return int
     */
    public function getPageCount()
    {
        return $this->PageCount;
    }
    /**
     * Set PageCount value
     * @param int $pageCount
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setPageCount($pageCount = null)
    {
        // validation for constraint: int
        if (!is_null($pageCount) && !(is_int($pageCount) || ctype_digit($pageCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageCount, true), gettype($pageCount)), __LINE__);
        }
        $this->PageCount = $pageCount;
        return $this;
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
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setTermsAndConditions(\Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions = null)
    {
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        $this->Tag = $tag;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @param string $accessibility
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setAccessibility($accessibility = null)
    {
        // validation for constraint: string
        if (!is_null($accessibility) && !is_string($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessibility, true), gettype($accessibility)), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get Owner value
     * @return string|null
     */
    public function getOwner()
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param string $owner
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
     */
    public function setOwner($owner = null)
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->Owner = $owner;
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
     * @return \Nmusco\AssureSign\v2\StructType\TemplateItem
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
}
