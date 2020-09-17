<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignerAttachment StructType
 * @subpackage Structs
 */
class SignerAttachment extends AbstractStructBase
{
    /**
     * The SigningStep
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SigningStep;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Required;
    /**
     * The AllowMultiple
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AllowMultiple;
    /**
     * The Label
     * @var string
     */
    public $Label;
    /**
     * The Instructions
     * @var string
     */
    public $Instructions;
    /**
     * The SignatoryEmail
     * @var string
     */
    public $SignatoryEmail;
    /**
     * The SignatoryEmailParameterName
     * @var string
     */
    public $SignatoryEmailParameterName;
    /**
     * The SignatoryMobilePhone
     * @var string
     */
    public $SignatoryMobilePhone;
    /**
     * The SignatoryMobilePhoneParameterName
     * @var string
     */
    public $SignatoryMobilePhoneParameterName;
    /**
     * Constructor method for SignerAttachment
     * @uses SignerAttachment::setSigningStep()
     * @uses SignerAttachment::setRequired()
     * @uses SignerAttachment::setAllowMultiple()
     * @uses SignerAttachment::setLabel()
     * @uses SignerAttachment::setInstructions()
     * @uses SignerAttachment::setSignatoryEmail()
     * @uses SignerAttachment::setSignatoryEmailParameterName()
     * @uses SignerAttachment::setSignatoryMobilePhone()
     * @uses SignerAttachment::setSignatoryMobilePhoneParameterName()
     * @param string $signingStep
     * @param bool $required
     * @param bool $allowMultiple
     * @param string $label
     * @param string $instructions
     * @param string $signatoryEmail
     * @param string $signatoryEmailParameterName
     * @param string $signatoryMobilePhone
     * @param string $signatoryMobilePhoneParameterName
     */
    public function __construct($signingStep = null, $required = null, $allowMultiple = null, $label = null, $instructions = null, $signatoryEmail = null, $signatoryEmailParameterName = null, $signatoryMobilePhone = null, $signatoryMobilePhoneParameterName = null)
    {
        $this
            ->setSigningStep($signingStep)
            ->setRequired($required)
            ->setAllowMultiple($allowMultiple)
            ->setLabel($label)
            ->setInstructions($instructions)
            ->setSignatoryEmail($signatoryEmail)
            ->setSignatoryEmailParameterName($signatoryEmailParameterName)
            ->setSignatoryMobilePhone($signatoryMobilePhone)
            ->setSignatoryMobilePhoneParameterName($signatoryMobilePhoneParameterName);
    }
    /**
     * Get SigningStep value
     * @return string
     */
    public function getSigningStep()
    {
        return $this->SigningStep;
    }
    /**
     * Set SigningStep value
     * @param string $signingStep
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setSigningStep($signingStep = null)
    {
        // validation for constraint: string
        if (!is_null($signingStep) && !is_string($signingStep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signingStep, true), gettype($signingStep)), __LINE__);
        }
        $this->SigningStep = $signingStep;
        return $this;
    }
    /**
     * Get Required value
     * @return bool
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Get AllowMultiple value
     * @return bool
     */
    public function getAllowMultiple()
    {
        return $this->AllowMultiple;
    }
    /**
     * Set AllowMultiple value
     * @param bool $allowMultiple
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setAllowMultiple($allowMultiple = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowMultiple) && !is_bool($allowMultiple)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowMultiple, true), gettype($allowMultiple)), __LINE__);
        }
        $this->AllowMultiple = $allowMultiple;
        return $this;
    }
    /**
     * Get Label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->Label = $label;
        return $this;
    }
    /**
     * Get Instructions value
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }
    /**
     * Set Instructions value
     * @param string $instructions
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setInstructions($instructions = null)
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        $this->Instructions = $instructions;
        return $this;
    }
    /**
     * Get SignatoryEmail value
     * @return string|null
     */
    public function getSignatoryEmail()
    {
        return $this->SignatoryEmail;
    }
    /**
     * Set SignatoryEmail value
     * @param string $signatoryEmail
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setSignatoryEmail($signatoryEmail = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryEmail) && !is_string($signatoryEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryEmail, true), gettype($signatoryEmail)), __LINE__);
        }
        $this->SignatoryEmail = $signatoryEmail;
        return $this;
    }
    /**
     * Get SignatoryEmailParameterName value
     * @return string|null
     */
    public function getSignatoryEmailParameterName()
    {
        return $this->SignatoryEmailParameterName;
    }
    /**
     * Set SignatoryEmailParameterName value
     * @param string $signatoryEmailParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setSignatoryEmailParameterName($signatoryEmailParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryEmailParameterName) && !is_string($signatoryEmailParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryEmailParameterName, true), gettype($signatoryEmailParameterName)), __LINE__);
        }
        $this->SignatoryEmailParameterName = $signatoryEmailParameterName;
        return $this;
    }
    /**
     * Get SignatoryMobilePhone value
     * @return string|null
     */
    public function getSignatoryMobilePhone()
    {
        return $this->SignatoryMobilePhone;
    }
    /**
     * Set SignatoryMobilePhone value
     * @param string $signatoryMobilePhone
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setSignatoryMobilePhone($signatoryMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryMobilePhone) && !is_string($signatoryMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryMobilePhone, true), gettype($signatoryMobilePhone)), __LINE__);
        }
        $this->SignatoryMobilePhone = $signatoryMobilePhone;
        return $this;
    }
    /**
     * Get SignatoryMobilePhoneParameterName value
     * @return string|null
     */
    public function getSignatoryMobilePhoneParameterName()
    {
        return $this->SignatoryMobilePhoneParameterName;
    }
    /**
     * Set SignatoryMobilePhoneParameterName value
     * @param string $signatoryMobilePhoneParameterName
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment
     */
    public function setSignatoryMobilePhoneParameterName($signatoryMobilePhoneParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryMobilePhoneParameterName) && !is_string($signatoryMobilePhoneParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryMobilePhoneParameterName, true), gettype($signatoryMobilePhoneParameterName)), __LINE__);
        }
        $this->SignatoryMobilePhoneParameterName = $signatoryMobilePhoneParameterName;
        return $this;
    }
}
