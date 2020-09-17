<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileDocument StructType
 * @subpackage Structs
 */
class FileDocument extends Document
{
    /**
     * The ParseDocument
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ParseDocument;
    /**
     * The InitialPagesToParse
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $InitialPagesToParse;
    /**
     * The FinalPagesToParse
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $FinalPagesToParse;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FileType;
    /**
     * The UnderlyingFile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\UnderlyingFile
     */
    public $UnderlyingFile;
    /**
     * The JotBlocks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock
     */
    public $JotBlocks;
    /**
     * The SignerAttachments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment
     */
    public $SignerAttachments;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Data;
    /**
     * Constructor method for FileDocument
     * @uses FileDocument::setParseDocument()
     * @uses FileDocument::setInitialPagesToParse()
     * @uses FileDocument::setFinalPagesToParse()
     * @uses FileDocument::setFileType()
     * @uses FileDocument::setUnderlyingFile()
     * @uses FileDocument::setJotBlocks()
     * @uses FileDocument::setSignerAttachments()
     * @uses FileDocument::setData()
     * @param bool $parseDocument
     * @param int $initialPagesToParse
     * @param int $finalPagesToParse
     * @param string $fileType
     * @param \Nmusco\AssureSign\v2\StructType\UnderlyingFile $underlyingFile
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock $jotBlocks
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments
     * @param string $data
     */
    public function __construct($parseDocument = null, $initialPagesToParse = null, $finalPagesToParse = null, $fileType = null, \Nmusco\AssureSign\v2\StructType\UnderlyingFile $underlyingFile = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock $jotBlocks = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments = null, $data = null)
    {
        $this
            ->setParseDocument($parseDocument)
            ->setInitialPagesToParse($initialPagesToParse)
            ->setFinalPagesToParse($finalPagesToParse)
            ->setFileType($fileType)
            ->setUnderlyingFile($underlyingFile)
            ->setJotBlocks($jotBlocks)
            ->setSignerAttachments($signerAttachments)
            ->setData($data);
    }
    /**
     * Get ParseDocument value
     * @return bool
     */
    public function getParseDocument()
    {
        return $this->ParseDocument;
    }
    /**
     * Set ParseDocument value
     * @param bool $parseDocument
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public function setParseDocument($parseDocument = null)
    {
        // validation for constraint: boolean
        if (!is_null($parseDocument) && !is_bool($parseDocument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($parseDocument, true), gettype($parseDocument)), __LINE__);
        }
        $this->ParseDocument = $parseDocument;
        return $this;
    }
    /**
     * Get InitialPagesToParse value
     * @return int
     */
    public function getInitialPagesToParse()
    {
        return $this->InitialPagesToParse;
    }
    /**
     * Set InitialPagesToParse value
     * @param int $initialPagesToParse
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public function setInitialPagesToParse($initialPagesToParse = null)
    {
        // validation for constraint: int
        if (!is_null($initialPagesToParse) && !(is_int($initialPagesToParse) || ctype_digit($initialPagesToParse))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($initialPagesToParse, true), gettype($initialPagesToParse)), __LINE__);
        }
        $this->InitialPagesToParse = $initialPagesToParse;
        return $this;
    }
    /**
     * Get FinalPagesToParse value
     * @return int
     */
    public function getFinalPagesToParse()
    {
        return $this->FinalPagesToParse;
    }
    /**
     * Set FinalPagesToParse value
     * @param int $finalPagesToParse
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public function setFinalPagesToParse($finalPagesToParse = null)
    {
        // validation for constraint: int
        if (!is_null($finalPagesToParse) && !(is_int($finalPagesToParse) || ctype_digit($finalPagesToParse))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finalPagesToParse, true), gettype($finalPagesToParse)), __LINE__);
        }
        $this->FinalPagesToParse = $finalPagesToParse;
        return $this;
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
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
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
     * Get UnderlyingFile value
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFile|null
     */
    public function getUnderlyingFile()
    {
        return $this->UnderlyingFile;
    }
    /**
     * Set UnderlyingFile value
     * @param \Nmusco\AssureSign\v2\StructType\UnderlyingFile $underlyingFile
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public function setUnderlyingFile(\Nmusco\AssureSign\v2\StructType\UnderlyingFile $underlyingFile = null)
    {
        $this->UnderlyingFile = $underlyingFile;
        return $this;
    }
    /**
     * Get JotBlocks value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock|null
     */
    public function getJotBlocks()
    {
        return $this->JotBlocks;
    }
    /**
     * Set JotBlocks value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock $jotBlocks
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public function setJotBlocks(\Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock $jotBlocks = null)
    {
        $this->JotBlocks = $jotBlocks;
        return $this;
    }
    /**
     * Get SignerAttachments value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment|null
     */
    public function getSignerAttachments()
    {
        return $this->SignerAttachments;
    }
    /**
     * Set SignerAttachments value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public function setSignerAttachments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments = null)
    {
        $this->SignerAttachments = $signerAttachments;
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
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument
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
