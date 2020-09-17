<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSigningLinks StructType
 * @subpackage Structs
 */
class GetSigningLinks extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest
     */
    public $Request;
    /**
     * Constructor method for GetSigningLinks
     * @uses GetSigningLinks::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinks
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\GetSigningLinksRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
