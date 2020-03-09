<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadResult StructType
 * @subpackage Structs
 */
class DownloadResult extends AbstractStructBase
{
    /**
     * The DocumentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $DocumentId;
    /**
     * The DownloadType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DownloadType;
    /**
     * The FileData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileData;
    /**
     * The CompletionReportData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompletionReportData;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException
     */
    public $Exceptions;
    /**
     * Constructor method for DownloadResult
     * @uses DownloadResult::setDocumentId()
     * @uses DownloadResult::setDownloadType()
     * @uses DownloadResult::setFileData()
     * @uses DownloadResult::setCompletionReportData()
     * @uses DownloadResult::setExceptions()
     * @param string $documentId
     * @param string $downloadType
     * @param string $fileData
     * @param string $completionReportData
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException $exceptions
     */
    public function __construct($documentId = null, $downloadType = null, $fileData = null, $completionReportData = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException $exceptions = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setDownloadType($downloadType)
            ->setFileData($fileData)
            ->setCompletionReportData($completionReportData)
            ->setExceptions($exceptions);
    }
    /**
     * Get DocumentId value
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($documentId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($documentId, true)), __LINE__);
        }
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get DownloadType value
     * @return string
     */
    public function getDownloadType()
    {
        return $this->DownloadType;
    }
    /**
     * Set DownloadType value
     * @uses \Nmusco\AssureSign\v2\EnumType\DownloadType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\DownloadType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $downloadType
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult
     */
    public function setDownloadType($downloadType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\DownloadType::valueIsValid($downloadType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\DownloadType', is_array($downloadType) ? implode(', ', $downloadType) : var_export($downloadType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\DownloadType::getValidValues())), __LINE__);
        }
        $this->DownloadType = $downloadType;
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
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult
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
     * Get CompletionReportData value
     * @return string|null
     */
    public function getCompletionReportData()
    {
        return $this->CompletionReportData;
    }
    /**
     * Set CompletionReportData value
     * @param string $completionReportData
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult
     */
    public function setCompletionReportData($completionReportData = null)
    {
        // validation for constraint: string
        if (!is_null($completionReportData) && !is_string($completionReportData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completionReportData, true), gettype($completionReportData)), __LINE__);
        }
        $this->CompletionReportData = $completionReportData;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException $exceptions = null)
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
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResult
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
