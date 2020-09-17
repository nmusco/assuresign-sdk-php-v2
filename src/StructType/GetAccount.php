<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccount StructType
 * @subpackage Structs
 */
class GetAccount extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetAccountRequest
     */
    public $Request;
    /**
     * Constructor method for GetAccount
     * @uses GetAccount::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\GetAccountRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetAccountRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\GetAccountRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\GetAccount
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\GetAccountRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
