<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitResponse StructType
 * @subpackage Structs
 */
class SubmitResponse extends AbstractStructBase
{
    /**
     * The DocumentResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult
     */
    public $DocumentResults;
    /**
     * Constructor method for SubmitResponse
     * @uses SubmitResponse::setDocumentResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults = null)
    {
        $this
            ->setDocumentResults($documentResults);
    }
    /**
     * Get DocumentResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult|null
     */
    public function getDocumentResults()
    {
        return $this->DocumentResults;
    }
    /**
     * Set DocumentResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults
     * @return \Nmusco\AssureSign\v2\StructType\SubmitResponse
     */
    public function setDocumentResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $documentResults = null)
    {
        $this->DocumentResults = $documentResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\SubmitResponse
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
