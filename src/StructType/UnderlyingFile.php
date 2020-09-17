<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnderlyingFile StructType
 * @subpackage Structs
 */
class UnderlyingFile extends AbstractStructBase
{
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FileType;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Data;
    /**
     * Constructor method for UnderlyingFile
     * @uses UnderlyingFile::setFileType()
     * @uses UnderlyingFile::setData()
     * @param string $fileType
     * @param string $data
     */
    public function __construct($fileType = null, $data = null)
    {
        $this
            ->setFileType($fileType)
            ->setData($data);
    }
    /**
     * Get FileType value
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @uses \Nmusco\AssureSign\v2\EnumType\SupportedFileType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\SupportedFileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fileType
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFile
     */
    public function setFileType($fileType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\SupportedFileType::valueIsValid($fileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\SupportedFileType', is_array($fileType) ? implode(', ', $fileType) : var_export($fileType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\SupportedFileType::getValidValues())), __LINE__);
        }
        $this->FileType = $fileType;
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFile
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        return $this;
    }
}
