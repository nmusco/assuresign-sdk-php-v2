<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account StructType
 * @subpackage Structs
 */
class Account extends AbstractStructBase
{
    /**
     * The ContextIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $ContextIdentifier;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Inactive;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The DisplayName
     * @var string
     */
    public $DisplayName;
    /**
     * The AccountGroup
     * @var string
     */
    public $AccountGroup;
    /**
     * Constructor method for Account
     * @uses Account::setContextIdentifier()
     * @uses Account::setInactive()
     * @uses Account::setName()
     * @uses Account::setDisplayName()
     * @uses Account::setAccountGroup()
     * @param string $contextIdentifier
     * @param bool $inactive
     * @param string $name
     * @param string $displayName
     * @param string $accountGroup
     */
    public function __construct($contextIdentifier = null, $inactive = null, $name = null, $displayName = null, $accountGroup = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setInactive($inactive)
            ->setName($name)
            ->setDisplayName($displayName)
            ->setAccountGroup($accountGroup);
    }
    /**
     * Get ContextIdentifier value
     * @return string
     */
    public function getContextIdentifier()
    {
        return $this->ContextIdentifier;
    }
    /**
     * Set ContextIdentifier value
     * @param string $contextIdentifier
     * @return \Nmusco\AssureSign\v2\StructType\Account
     */
    public function setContextIdentifier($contextIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($contextIdentifier) && !is_string($contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextIdentifier, true), gettype($contextIdentifier)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($contextIdentifier) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($contextIdentifier, true)), __LINE__);
        }
        $this->ContextIdentifier = $contextIdentifier;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \Nmusco\AssureSign\v2\StructType\Account
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Nmusco\AssureSign\v2\StructType\Account
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Nmusco\AssureSign\v2\StructType\Account
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get AccountGroup value
     * @return string|null
     */
    public function getAccountGroup()
    {
        return $this->AccountGroup;
    }
    /**
     * Set AccountGroup value
     * @param string $accountGroup
     * @return \Nmusco\AssureSign\v2\StructType\Account
     */
    public function setAccountGroup($accountGroup = null)
    {
        // validation for constraint: string
        if (!is_null($accountGroup) && !is_string($accountGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountGroup, true), gettype($accountGroup)), __LINE__);
        }
        $this->AccountGroup = $accountGroup;
        return $this;
    }
}
