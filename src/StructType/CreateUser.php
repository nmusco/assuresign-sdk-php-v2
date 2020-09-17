<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUser StructType
 * @subpackage Structs
 */
class CreateUser extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateUserRequest
     */
    public $Request;
    /**
     * Constructor method for CreateUser
     * @uses CreateUser::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\CreateUserRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateUserRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\CreateUserRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\CreateUser
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\CreateUserRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
