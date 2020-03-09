<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountResult StructType
 * @subpackage Structs
 */
class GetAccountResult extends AbstractStructBase
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
     * The Success
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Success;
    /**
     * The Roles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfString
     */
    public $Roles;
    /**
     * The AccountTemplates
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1
     */
    public $AccountTemplates;
    /**
     * The AccountGroups
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2
     */
    public $AccountGroups;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException
     */
    public $Exceptions;
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
     * Constructor method for GetAccountResult
     * @uses GetAccountResult::setContextIdentifier()
     * @uses GetAccountResult::setInactive()
     * @uses GetAccountResult::setSuccess()
     * @uses GetAccountResult::setRoles()
     * @uses GetAccountResult::setAccountTemplates()
     * @uses GetAccountResult::setAccountGroups()
     * @uses GetAccountResult::setExceptions()
     * @uses GetAccountResult::setName()
     * @uses GetAccountResult::setDisplayName()
     * @uses GetAccountResult::setAccountGroup()
     * @param string $contextIdentifier
     * @param bool $inactive
     * @param bool $success
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfString $roles
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1 $accountTemplates
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2 $accountGroups
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions
     * @param string $name
     * @param string $displayName
     * @param string $accountGroup
     */
    public function __construct($contextIdentifier = null, $inactive = null, $success = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfString $roles = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1 $accountTemplates = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2 $accountGroups = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions = null, $name = null, $displayName = null, $accountGroup = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setInactive($inactive)
            ->setSuccess($success)
            ->setRoles($roles)
            ->setAccountTemplates($accountTemplates)
            ->setAccountGroups($accountGroups)
            ->setExceptions($exceptions)
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
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
     * Get Roles value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString|null
     */
    public function getRoles()
    {
        return $this->Roles;
    }
    /**
     * Set Roles value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfString $roles
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
     */
    public function setRoles(\Nmusco\AssureSign\v2\ArrayType\ArrayOfString $roles = null)
    {
        $this->Roles = $roles;
        return $this;
    }
    /**
     * Get AccountTemplates value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1|null
     */
    public function getAccountTemplates()
    {
        return $this->AccountTemplates;
    }
    /**
     * Set AccountTemplates value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1 $accountTemplates
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
     */
    public function setAccountTemplates(\Nmusco\AssureSign\v2\ArrayType\ArrayOfString1 $accountTemplates = null)
    {
        $this->AccountTemplates = $accountTemplates;
        return $this;
    }
    /**
     * Get AccountGroups value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2|null
     */
    public function getAccountGroups()
    {
        return $this->AccountGroups;
    }
    /**
     * Set AccountGroups value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfString2 $accountGroups
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
     */
    public function setAccountGroups(\Nmusco\AssureSign\v2\ArrayType\ArrayOfString2 $accountGroups = null)
    {
        $this->AccountGroups = $accountGroups;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfAccountException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
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
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResult
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
