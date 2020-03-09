<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AsyncSubmitWithFileRetrievalResponse StructType
 * @subpackage Structs
 */
class AsyncSubmitWithFileRetrievalResponse extends AbstractStructBase
{
    /**
     * The AsyncSubmitWithFileRetrievalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult
     */
    public $AsyncSubmitWithFileRetrievalResult;
    /**
     * Constructor method for AsyncSubmitWithFileRetrievalResponse
     * @uses AsyncSubmitWithFileRetrievalResponse::setAsyncSubmitWithFileRetrievalResult()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileRetrievalResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileRetrievalResult = null)
    {
        $this
            ->setAsyncSubmitWithFileRetrievalResult($asyncSubmitWithFileRetrievalResult);
    }
    /**
     * Get AsyncSubmitWithFileRetrievalResult value
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult|null
     */
    public function getAsyncSubmitWithFileRetrievalResult()
    {
        return $this->AsyncSubmitWithFileRetrievalResult;
    }
    /**
     * Set AsyncSubmitWithFileRetrievalResult value
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileRetrievalResult
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrievalResponse
     */
    public function setAsyncSubmitWithFileRetrievalResult(\Nmusco\AssureSign\v2\StructType\AsyncSubmissionResult $asyncSubmitWithFileRetrievalResult = null)
    {
        $this->AsyncSubmitWithFileRetrievalResult = $asyncSubmitWithFileRetrievalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrievalResponse
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
