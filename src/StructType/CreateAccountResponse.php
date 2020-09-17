<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAccountResponse StructType
 * @subpackage Structs
 */
class CreateAccountResponse extends AbstractStructBase
{
    /**
     * The CreateAccountResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\CreateAccountResult
     */
    public $CreateAccountResult;
    /**
     * Constructor method for CreateAccountResponse
     * @uses CreateAccountResponse::setCreateAccountResult()
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult = null)
    {
        $this
            ->setCreateAccountResult($createAccountResult);
    }
    /**
     * Get CreateAccountResult value
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountResult|null
     */
    public function getCreateAccountResult()
    {
        return $this->CreateAccountResult;
    }
    /**
     * Set CreateAccountResult value
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountResponse
     */
    public function setCreateAccountResult(\Nmusco\AssureSign\v2\StructType\CreateAccountResult $createAccountResult = null)
    {
        $this->CreateAccountResult = $createAccountResult;
        return $this;
    }
}
