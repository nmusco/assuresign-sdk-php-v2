<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUser StructType
 * @subpackage Structs
 */
class GetUser extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\GetUserRequest
     */
    public $Request;
    /**
     * Constructor method for GetUser
     * @uses GetUser::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\GetUserRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\GetUserRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\GetUserRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\GetUserRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\GetUser
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\GetUserRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
