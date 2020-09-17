<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendNotificationResponse StructType
 * @subpackage Structs
 */
class ResendNotificationResponse extends AbstractStructBase
{
    /**
     * The ResendResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult
     */
    public $ResendResults;
    /**
     * Constructor method for ResendNotificationResponse
     * @uses ResendNotificationResponse::setResendResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult $resendResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult $resendResults = null)
    {
        $this
            ->setResendResults($resendResults);
    }
    /**
     * Get ResendResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult|null
     */
    public function getResendResults()
    {
        return $this->ResendResults;
    }
    /**
     * Set ResendResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult $resendResults
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResponse
     */
    public function setResendResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult $resendResults = null)
    {
        $this->ResendResults = $resendResults;
        return $this;
    }
}
