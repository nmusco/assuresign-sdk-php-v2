<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateInfo StructType
 * @subpackage Structs
 */
class TemplateInfo extends AbstractStructBase
{
    /**
     * The Metadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TemplateMetadata
     */
    public $Metadata;
    /**
     * The JotBlocks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo
     */
    public $JotBlocks;
    /**
     * The SignerAttachments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo
     */
    public $SignerAttachments;
    /**
     * The Parameters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2
     */
    public $Parameters;
    /**
     * The Signatories
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo
     */
    public $Signatories;
    /**
     * The TermsAndConditions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TermsAndConditions
     */
    public $TermsAndConditions;
    /**
     * Constructor method for TemplateInfo
     * @uses TemplateInfo::setMetadata()
     * @uses TemplateInfo::setJotBlocks()
     * @uses TemplateInfo::setSignerAttachments()
     * @uses TemplateInfo::setParameters()
     * @uses TemplateInfo::setSignatories()
     * @uses TemplateInfo::setTermsAndConditions()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateMetadata $metadata
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo $signerAttachments
     * @param \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2 $parameters
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo $signatories
     * @param \Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TemplateMetadata $metadata = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo $signerAttachments = null, \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2 $parameters = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo $signatories = null, \Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions = null)
    {
        $this
            ->setMetadata($metadata)
            ->setJotBlocks($jotBlocks)
            ->setSignerAttachments($signerAttachments)
            ->setParameters($parameters)
            ->setSignatories($signatories)
            ->setTermsAndConditions($termsAndConditions);
    }
    /**
     * Get Metadata value
     * @return \Nmusco\AssureSign\v2\StructType\TemplateMetadata|null
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }
    /**
     * Set Metadata value
     * @param \Nmusco\AssureSign\v2\StructType\TemplateMetadata $metadata
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public function setMetadata(\Nmusco\AssureSign\v2\StructType\TemplateMetadata $metadata = null)
    {
        $this->Metadata = $metadata;
        return $this;
    }
    /**
     * Get JotBlocks value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo|null
     */
    public function getJotBlocks()
    {
        return $this->JotBlocks;
    }
    /**
     * Set JotBlocks value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public function setJotBlocks(\Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks = null)
    {
        $this->JotBlocks = $jotBlocks;
        return $this;
    }
    /**
     * Get SignerAttachments value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo|null
     */
    public function getSignerAttachments()
    {
        return $this->SignerAttachments;
    }
    /**
     * Set SignerAttachments value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo $signerAttachments
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public function setSignerAttachments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo $signerAttachments = null)
    {
        $this->SignerAttachments = $signerAttachments;
        return $this;
    }
    /**
     * Get Parameters value
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2|null
     */
    public function getParameters()
    {
        return $this->Parameters;
    }
    /**
     * Set Parameters value
     * @param \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2 $parameters
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public function setParameters(\Nmusco\AssureSign\v2\StructType\ArrayOfChoice2 $parameters = null)
    {
        $this->Parameters = $parameters;
        return $this;
    }
    /**
     * Get Signatories value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo|null
     */
    public function getSignatories()
    {
        return $this->Signatories;
    }
    /**
     * Set Signatories value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo $signatories
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public function setSignatories(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryInfo $signatories = null)
    {
        $this->Signatories = $signatories;
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
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public function setTermsAndConditions(\Nmusco\AssureSign\v2\StructType\TermsAndConditions $termsAndConditions = null)
    {
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo
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
