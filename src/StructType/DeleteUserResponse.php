<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserResponse StructType
 * @subpackage Structs
 */
class DeleteUserResponse extends AbstractStructBase
{
    /**
     * The DeleteUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DeleteUserResult
     */
    public $DeleteUserResult;
    /**
     * Constructor method for DeleteUserResponse
     * @uses DeleteUserResponse::setDeleteUserResult()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult = null)
    {
        $this
            ->setDeleteUserResult($deleteUserResult);
    }
    /**
     * Get DeleteUserResult value
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResult|null
     */
    public function getDeleteUserResult()
    {
        return $this->DeleteUserResult;
    }
    /**
     * Set DeleteUserResult value
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResponse
     */
    public function setDeleteUserResult(\Nmusco\AssureSign\v2\StructType\DeleteUserResult $deleteUserResult = null)
    {
        $this->DeleteUserResult = $deleteUserResult;
        return $this;
    }
}
