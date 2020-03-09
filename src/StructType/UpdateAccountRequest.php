<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAccountRequest StructType
 * @subpackage Structs
 */
class UpdateAccountRequest extends AbstractStructBase
{
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $Inactive;
    /**
     * The ParentAccountContextIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $ParentAccountContextIdentifier;
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
     * The AuthenticationToken
     * @var string
     */
    public $AuthenticationToken;
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
     * Constructor method for UpdateAccountRequest
     * @uses UpdateAccountRequest::setInactive()
     * @uses UpdateAccountRequest::setParentAccountContextIdentifier()
     * @uses UpdateAccountRequest::setContextIdentifier()
     * @uses UpdateAccountRequest::setAuthenticationToken()
     * @uses UpdateAccountRequest::setName()
     * @uses UpdateAccountRequest::setDisplayName()
     * @uses UpdateAccountRequest::setAccountGroup()
     * @param bool $inactive
     * @param string $parentAccountContextIdentifier
     * @param string $contextIdentifier
     * @param string $authenticationToken
     * @param string $name
     * @param string $displayName
     * @param string $accountGroup
     */
    public function __construct($inactive = null, $parentAccountContextIdentifier = null, $contextIdentifier = null, $authenticationToken = null, $name = null, $displayName = null, $accountGroup = null)
    {
        $this
            ->setInactive($inactive)
            ->setParentAccountContextIdentifier($parentAccountContextIdentifier)
            ->setContextIdentifier($contextIdentifier)
            ->setAuthenticationToken($authenticationToken)
            ->setName($name)
            ->setDisplayName($displayName)
            ->setAccountGroup($accountGroup);
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
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
     * Get ParentAccountContextIdentifier value
     * @return string
     */
    public function getParentAccountContextIdentifier()
    {
        return $this->ParentAccountContextIdentifier;
    }
    /**
     * Set ParentAccountContextIdentifier value
     * @param string $parentAccountContextIdentifier
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
     */
    public function setParentAccountContextIdentifier($parentAccountContextIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($parentAccountContextIdentifier) && !is_string($parentAccountContextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentAccountContextIdentifier, true), gettype($parentAccountContextIdentifier)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($parentAccountContextIdentifier) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $parentAccountContextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($parentAccountContextIdentifier, true)), __LINE__);
        }
        $this->ParentAccountContextIdentifier = $parentAccountContextIdentifier;
        return $this;
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
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
     * Get AuthenticationToken value
     * @return string|null
     */
    public function getAuthenticationToken()
    {
        return $this->AuthenticationToken;
    }
    /**
     * Set AuthenticationToken value
     * @param string $authenticationToken
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
     */
    public function setAuthenticationToken($authenticationToken = null)
    {
        // validation for constraint: string
        if (!is_null($authenticationToken) && !is_string($authenticationToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationToken, true), gettype($authenticationToken)), __LINE__);
        }
        $this->AuthenticationToken = $authenticationToken;
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
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
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountRequest
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
