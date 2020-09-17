<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticateUserResponse StructType
 * @subpackage Structs
 */
class AuthenticateUserResponse extends AbstractStructBase
{
    /**
     * The AuthenticateUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult
     */
    public $AuthenticateUserResult;
    /**
     * Constructor method for AuthenticateUserResponse
     * @uses AuthenticateUserResponse::setAuthenticateUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult $authenticateUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\AuthenticateUserResult $authenticateUserResult = null)
    {
        $this
            ->setAuthenticateUserResult($authenticateUserResult);
    }
    /**
     * Get AuthenticateUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult|null
     */
    public function getAuthenticateUserResult()
    {
        return $this->AuthenticateUserResult;
    }
    /**
     * Set AuthenticateUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\AuthenticateUserResult $authenticateUserResult
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResponse
     */
    public function setAuthenticateUserResult(\Nmusco\AssureSign\v2\StructType\AuthenticateUserResult $authenticateUserResult = null)
    {
        $this->AuthenticateUserResult = $authenticateUserResult;
        return $this;
    }
}
