<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDocumentQuery StructType
 * @subpackage Structs
 */
class ValidateDocumentQuery extends AbstractStructBase
{
    /**
     * The FileDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\FileDocument
     */
    public $FileDocument;
    /**
     * Constructor method for ValidateDocumentQuery
     * @uses ValidateDocumentQuery::setFileDocument()
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument = null)
    {
        $this
            ->setFileDocument($fileDocument);
    }
    /**
     * Get FileDocument value
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function getFileDocument()
    {
        return $this->FileDocument;
    }
    /**
     * Set FileDocument value
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery
     */
    public function setFileDocument(\Nmusco\AssureSign\v2\StructType\FileDocument $fileDocument = null)
    {
        $this->FileDocument = $fileDocument;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQuery
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
