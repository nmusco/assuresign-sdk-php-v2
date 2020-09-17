<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAccount StructType
 * @subpackage Structs
 */
class CreateAccount extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateAccountRequest
     */
    public $Request;
    /**
     * Constructor method for CreateAccount
     * @uses CreateAccount::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccountRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateAccountRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccountRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccount
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\CreateAccountRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
