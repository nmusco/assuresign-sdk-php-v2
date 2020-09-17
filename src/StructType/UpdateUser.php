<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUser StructType
 * @subpackage Structs
 */
class UpdateUser extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\UpdateUserRequest
     */
    public $Request;
    /**
     * Constructor method for UpdateUser
     * @uses UpdateUser::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\UpdateUserRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\UpdateUserRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\UpdateUserRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUser
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\UpdateUserRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
