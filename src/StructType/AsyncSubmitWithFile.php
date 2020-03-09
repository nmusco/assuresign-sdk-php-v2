<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncSubmitWithFile StructType
 * @subpackage Structs
 */
class AsyncSubmitWithFile extends AbstractStructBase
{
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument
     */
    public $Documents;
    /**
     * Constructor method for AsyncSubmitWithFile
     * @uses AsyncSubmitWithFile::setDocuments()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFile
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFile
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
