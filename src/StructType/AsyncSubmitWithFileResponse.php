<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncSubmitWithFileResponse StructType
 * @subpackage Structs
 */
class AsyncSubmitWithFileResponse extends AbstractStructBase
{
    /**
     * The AsyncSubmitWithFileResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult
     */
    public $AsyncSubmitWithFileResult;
    /**
     * Constructor method for AsyncSubmitWithFileResponse
     * @uses AsyncSubmitWithFileResponse::setAsyncSubmitWithFileResult()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileResult = null)
    {
        $this
            ->setAsyncSubmitWithFileResult($asyncSubmitWithFileResult);
    }
    /**
     * Get AsyncSubmitWithFileResult value
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult|null
     */
    public function getAsyncSubmitWithFileResult()
    {
        return $this->AsyncSubmitWithFileResult;
    }
    /**
     * Set AsyncSubmitWithFileResult value
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileResult
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileResponse
     */
    public function setAsyncSubmitWithFileResult(\Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileResult = null)
    {
        $this->AsyncSubmitWithFileResult = $asyncSubmitWithFileResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileResponse
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
