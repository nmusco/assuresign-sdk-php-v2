<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Submit StructType
 * @subpackage Structs
 */
class Submit extends AbstractStructBase
{
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument
     */
    public $Documents;
    /**
     * Constructor method for Submit
     * @uses Submit::setDocuments()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\Submit
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument $documents = null)
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
     * @return \Nmusco\AssureSign\v2\StructType\Submit
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