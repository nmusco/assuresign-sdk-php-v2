<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitWithFileResponse StructType
 * @subpackage Structs
 */
class SubmitWithFileResponse extends AbstractStructBase
{
    /**
     * The SubmitWithFileResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult
     */
    public $SubmitWithFileResult;
    /**
     * Constructor method for SubmitWithFileResponse
     * @uses SubmitWithFileResponse::setSubmitWithFileResult()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileResult
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileResult = null)
    {
        $this
            ->setSubmitWithFileResult($submitWithFileResult);
    }
    /**
     * Get SubmitWithFileResult value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult|null
     */
    public function getSubmitWithFileResult()
    {
        return $this->SubmitWithFileResult;
    }
    /**
     * Set SubmitWithFileResult value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileResult
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFileResponse
     */
    public function setSubmitWithFileResult(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentResult $submitWithFileResult = null)
    {
        $this->SubmitWithFileResult = $submitWithFileResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFileResponse
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
