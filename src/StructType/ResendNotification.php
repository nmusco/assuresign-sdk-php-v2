<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendNotification StructType
 * @subpackage Structs
 */
class ResendNotification extends AbstractStructBase
{
    /**
     * The ResendRequests
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest
     */
    public $ResendRequests;
    /**
     * Constructor method for ResendNotification
     * @uses ResendNotification::setResendRequests()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest $resendRequests
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest $resendRequests = null)
    {
        $this
            ->setResendRequests($resendRequests);
    }
    /**
     * Get ResendRequests value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest|null
     */
    public function getResendRequests()
    {
        return $this->ResendRequests;
    }
    /**
     * Set ResendRequests value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest $resendRequests
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotification
     */
    public function setResendRequests(\Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest $resendRequests = null)
    {
        $this->ResendRequests = $resendRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotification
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
