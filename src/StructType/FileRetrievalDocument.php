<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileRetrievalDocument StructType
 * @subpackage Structs
 */
class FileRetrievalDocument extends Document
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
     * The UnderlyingFileMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
     */
    public $UnderlyingFileMetadata;
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
     * Constructor method for FileRetrievalDocument
     * @uses FileRetrievalDocument::setParseDocument()
     * @uses FileRetrievalDocument::setInitialPagesToParse()
     * @uses FileRetrievalDocument::setFinalPagesToParse()
     * @uses FileRetrievalDocument::setUnderlyingFileMetadata()
     * @uses FileRetrievalDocument::setJotBlocks()
     * @uses FileRetrievalDocument::setSignerAttachments()
     * @param bool $parseDocument
     * @param int $initialPagesToParse
     * @param int $finalPagesToParse
     * @param \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata $underlyingFileMetadata
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock $jotBlocks
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments
     */
    public function __construct($parseDocument = null, $initialPagesToParse = null, $finalPagesToParse = null, \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata $underlyingFileMetadata = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock $jotBlocks = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments = null)
    {
        $this
            ->setParseDocument($parseDocument)
            ->setInitialPagesToParse($initialPagesToParse)
            ->setFinalPagesToParse($finalPagesToParse)
            ->setUnderlyingFileMetadata($underlyingFileMetadata)
            ->setJotBlocks($jotBlocks)
            ->setSignerAttachments($signerAttachments);
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
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
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
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
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
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
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
     * Get UnderlyingFileMetadata value
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata|null
     */
    public function getUnderlyingFileMetadata()
    {
        return $this->UnderlyingFileMetadata;
    }
    /**
     * Set UnderlyingFileMetadata value
     * @param \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata $underlyingFileMetadata
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
     */
    public function setUnderlyingFileMetadata(\Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata $underlyingFileMetadata = null)
    {
        $this->UnderlyingFileMetadata = $underlyingFileMetadata;
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
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
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
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
     */
    public function setSignerAttachments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment $signerAttachments = null)
    {
        $this->SignerAttachments = $signerAttachments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument
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
