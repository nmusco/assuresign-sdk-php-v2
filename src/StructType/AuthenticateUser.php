<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticateUser StructType
 * @subpackage Structs
 */
class AuthenticateUser extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AuthenticateUserRequest
     */
    public $Request;
    /**
     * Constructor method for AuthenticateUser
     * @uses AuthenticateUser::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\AuthenticateUserRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AuthenticateUserRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\AuthenticateUserRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUser
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\AuthenticateUserRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
