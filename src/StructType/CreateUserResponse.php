<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUserResponse StructType
 * @subpackage Structs
 */
class CreateUserResponse extends AbstractStructBase
{
    /**
     * The CreateUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateUserResult
     */
    public $CreateUserResult;
    /**
     * Constructor method for CreateUserResponse
     * @uses CreateUserResponse::setCreateUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult = null)
    {
        $this
            ->setCreateUserResult($createUserResult);
    }
    /**
     * Get CreateUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserResult|null
     */
    public function getCreateUserResult()
    {
        return $this->CreateUserResult;
    }
    /**
     * Set CreateUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserResponse
     */
    public function setCreateUserResult(\Nmusco\AssureSign\v2\StructType\CreateUserResult $createUserResult = null)
    {
        $this->CreateUserResult = $createUserResult;
        return $this;
    }
}
