<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUser StructType
 * @subpackage Structs
 */
class DeleteUser extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DeleteUserRequest
     */
    public $Request;
    /**
     * Constructor method for DeleteUser
     * @uses DeleteUser::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUserRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DeleteUserRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUserRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUser
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\DeleteUserRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
