<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAccountsResult StructType
 * @subpackage Structs
 */
class ListAccountsResult extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Accounts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount
     */
    public $Accounts;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException
     */
    public $Exceptions;
    /**
     * Constructor method for ListAccountsResult
     * @uses ListAccountsResult::setSuccess()
     * @uses ListAccountsResult::setAccounts()
     * @uses ListAccountsResult::setExceptions()
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount $accounts
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions
     */
    public function __construct($success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount $accounts = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions = null)
    {
        $this
            ->setSuccess($success)
            ->setAccounts($accounts)
            ->setExceptions($exceptions);
    }
    /**
     * Get Success value
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResult
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Accounts value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount|null
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }
    /**
     * Set Accounts value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount $accounts
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResult
     */
    public function setAccounts(\Nmusco\AssureSign\v2\ArrayType\ArrayOfAccount $accounts = null)
    {
        $this->Accounts = $accounts;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
