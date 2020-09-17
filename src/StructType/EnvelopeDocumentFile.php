<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnvelopeDocumentFile StructType
 * @subpackage Structs
 */
class EnvelopeDocumentFile extends AbstractStructBase
{
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Data;
    /**
     * Constructor method for EnvelopeDocumentFile
     * @uses EnvelopeDocumentFile::setData()
     * @param string $data
     */
    public function __construct($data = null)
    {
        $this
            ->setData($data);
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
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile
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
