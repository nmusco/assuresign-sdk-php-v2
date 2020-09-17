<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLink StructType
 * @subpackage Structs
 */
class GetAccessLink extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest
     */
    public $Request;
    /**
     * Constructor method for GetAccessLink
     * @uses GetAccessLink::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLink
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\GetAccessLinkRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
