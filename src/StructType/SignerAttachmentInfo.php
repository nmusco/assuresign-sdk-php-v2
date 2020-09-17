<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignerAttachmentInfo StructType
 * @subpackage Structs
 */
class SignerAttachmentInfo extends AbstractStructBase
{
    /**
     * The SigningStep
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
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
     * The Signatory
     * @var string
     */
    public $Signatory;
    /**
     * Constructor method for SignerAttachmentInfo
     * @uses SignerAttachmentInfo::setSigningStep()
     * @uses SignerAttachmentInfo::setRequired()
     * @uses SignerAttachmentInfo::setAllowMultiple()
     * @uses SignerAttachmentInfo::setLabel()
     * @uses SignerAttachmentInfo::setInstructions()
     * @uses SignerAttachmentInfo::setSignatory()
     * @param int $signingStep
     * @param bool $required
     * @param bool $allowMultiple
     * @param string $label
     * @param string $instructions
     * @param string $signatory
     */
    public function __construct($signingStep = null, $required = null, $allowMultiple = null, $label = null, $instructions = null, $signatory = null)
    {
        $this
            ->setSigningStep($signingStep)
            ->setRequired($required)
            ->setAllowMultiple($allowMultiple)
            ->setLabel($label)
            ->setInstructions($instructions)
            ->setSignatory($signatory);
    }
    /**
     * Get SigningStep value
     * @return int
     */
    public function getSigningStep()
    {
        return $this->SigningStep;
    }
    /**
     * Set SigningStep value
     * @param int $signingStep
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo
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
}
