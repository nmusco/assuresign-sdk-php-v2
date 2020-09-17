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
}
