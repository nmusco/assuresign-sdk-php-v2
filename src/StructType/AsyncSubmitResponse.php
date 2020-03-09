<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncSubmitResponse StructType
 * @subpackage Structs
 */
class AsyncSubmitResponse extends AbstractStructBase
{
    /**
     * The AsyncSubmitResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult
     */
    public $AsyncSubmitResult;
    /**
     * Constructor method for AsyncSubmitResponse
     * @uses AsyncSubmitResponse::setAsyncSubmitResult()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitResult = null)
    {
        $this
            ->setAsyncSubmitResult($asyncSubmitResult);
    }
    /**
     * Get AsyncSubmitResult value
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult|null
     */
    public function getAsyncSubmitResult()
    {
        return $this->AsyncSubmitResult;
    }
    /**
     * Set AsyncSubmitResult value
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitResult
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitResponse
     */
    public function setAsyncSubmitResult(\Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitResult = null)
    {
        $this->AsyncSubmitResult = $asyncSubmitResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitResponse
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
