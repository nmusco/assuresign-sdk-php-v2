<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListUsersResponse StructType
 * @subpackage Structs
 */
class ListUsersResponse extends AbstractStructBase
{
    /**
     * The ListUsersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ListUsersResult
     */
    public $ListUsersResult;
    /**
     * Constructor method for ListUsersResponse
     * @uses ListUsersResponse::setListUsersResult()
     * @param \Nmusco\AssureSign\v2\StructType\ListUsersResult $listUsersResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ListUsersResult $listUsersResult = null)
    {
        $this
            ->setListUsersResult($listUsersResult);
    }
    /**
     * Get ListUsersResult value
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResult|null
     */
    public function getListUsersResult()
    {
        return $this->ListUsersResult;
    }
    /**
     * Set ListUsersResult value
     * @param \Nmusco\AssureSign\v2\StructType\ListUsersResult $listUsersResult
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResponse
     */
    public function setListUsersResult(\Nmusco\AssureSign\v2\StructType\ListUsersResult $listUsersResult = null)
    {
        $this->ListUsersResult = $listUsersResult;
        return $this;
    }
}
