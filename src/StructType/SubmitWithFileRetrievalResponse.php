<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitWithFileRetrievalResponse StructType
 * @subpackage Structs
 */
class SubmitWithFileRetrievalResponse extends AbstractStructBase
{
    /**
     * The SubmitWithFileRetrievalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult
     */
    public $SubmitWithFileRetrievalResult;
    /**
     * Constructor method for SubmitWithFileRetrievalResponse
     * @uses SubmitWithFileRetrievalResponse::setSubmitWithFileRetrievalResult()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileRetrievalResult
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileRetrievalResult = null)
    {
        $this
            ->setSubmitWithFileRetrievalResult($submitWithFileRetrievalResult);
    }
    /**
     * Get SubmitWithFileRetrievalResult value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult|null
     */
    public function getSubmitWithFileRetrievalResult()
    {
        return $this->SubmitWithFileRetrievalResult;
    }
    /**
     * Set SubmitWithFileRetrievalResult value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileRetrievalResult
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrievalResponse
     */
    public function setSubmitWithFileRetrievalResult(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileRetrievalResult = null)
    {
        $this->SubmitWithFileRetrievalResult = $submitWithFileRetrievalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrievalResponse
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
