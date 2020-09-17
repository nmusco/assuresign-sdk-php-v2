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
}
