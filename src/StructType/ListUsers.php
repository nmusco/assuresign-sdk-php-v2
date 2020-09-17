<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListUsers StructType
 * @subpackage Structs
 */
class ListUsers extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ListUsersRequest
     */
    public $Request;
    /**
     * Constructor method for ListUsers
     * @uses ListUsers::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\ListUsersRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ListUsersRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\ListUsersRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\ListUsers
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\ListUsersRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
