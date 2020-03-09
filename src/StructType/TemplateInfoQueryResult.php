<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateInfoQueryResult StructType
 * @subpackage Structs
 */
class TemplateInfoQueryResult extends AbstractStructBase
{
    /**
     * The TemplateId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $TemplateId;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException
     */
    public $Exceptions;
    /**
     * The TemplateInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TemplateInfo
     */
    public $TemplateInfo;
    /**
     * Constructor method for TemplateInfoQueryResult
     * @uses TemplateInfoQueryResult::setTemplateId()
     * @uses TemplateInfoQueryResult::setExceptions()
     * @uses TemplateInfoQueryResult::setTemplateInfo()
     * @param string $templateId
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException $exceptions
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfo $templateInfo
     */
    public function __construct($templateId = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException $exceptions = null, \Nmusco\AssureSign\v2\StructType\TemplateInfo $templateInfo = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setExceptions($exceptions)
            ->setTemplateInfo($templateInfo);
    }
    /**
     * Get TemplateId value
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }
    /**
     * Set TemplateId value
     * @param string $templateId
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult
     */
    public function setTemplateId($templateId = null)
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($templateId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($templateId, true)), __LINE__);
        }
        $this->TemplateId = $templateId;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get TemplateInfo value
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfo|null
     */
    public function getTemplateInfo()
    {
        return $this->TemplateInfo;
    }
    /**
     * Set TemplateInfo value
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfo $templateInfo
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult
     */
    public function setTemplateInfo(\Nmusco\AssureSign\v2\StructType\TemplateInfo $templateInfo = null)
    {
        $this->TemplateInfo = $templateInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult
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
