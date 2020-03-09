<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadTemplateResult StructType
 * @subpackage Structs
 */
class DownloadTemplateResult extends AbstractStructBase
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
     * The FileData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileData;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException
     */
    public $Exceptions;
    /**
     * Constructor method for DownloadTemplateResult
     * @uses DownloadTemplateResult::setTemplateId()
     * @uses DownloadTemplateResult::setFileData()
     * @uses DownloadTemplateResult::setExceptions()
     * @param string $templateId
     * @param string $fileData
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException $exceptions
     */
    public function __construct($templateId = null, $fileData = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException $exceptions = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setFileData($fileData)
            ->setExceptions($exceptions);
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
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult
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
     * Get FileData value
     * @return string|null
     */
    public function getFileData()
    {
        return $this->FileData;
    }
    /**
     * Set FileData value
     * @param string $fileData
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult
     */
    public function setFileData($fileData = null)
    {
        // validation for constraint: string
        if (!is_null($fileData) && !is_string($fileData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileData, true), gettype($fileData)), __LINE__);
        }
        $this->FileData = $fileData;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResult
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
