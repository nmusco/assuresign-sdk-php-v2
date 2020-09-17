<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParameterItemBase StructType
 * @subpackage Structs
 */
class ParameterItemBase extends AbstractStructBase
{
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Required;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Prompt
     * @var string
     */
    public $Prompt;
    /**
     * The Tag
     * @var string
     */
    public $Tag;
    /**
     * Constructor method for ParameterItemBase
     * @uses ParameterItemBase::setRequired()
     * @uses ParameterItemBase::setName()
     * @uses ParameterItemBase::setPrompt()
     * @uses ParameterItemBase::setTag()
     * @param bool $required
     * @param string $name
     * @param string $prompt
     * @param string $tag
     */
    public function __construct($required = null, $name = null, $prompt = null, $tag = null)
    {
        $this
            ->setRequired($required)
            ->setName($name)
            ->setPrompt($prompt)
            ->setTag($tag);
    }
    /**
     * Get Required value
     * @return bool
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Nmusco\AssureSign\v2\StructType\ParameterItemBase
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
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
     * @return \Nmusco\AssureSign\v2\StructType\ParameterItemBase
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
     * Get Prompt value
     * @return string|null
     */
    public function getPrompt()
    {
        return $this->Prompt;
    }
    /**
     * Set Prompt value
     * @param string $prompt
     * @return \Nmusco\AssureSign\v2\StructType\ParameterItemBase
     */
    public function setPrompt($prompt = null)
    {
        // validation for constraint: string
        if (!is_null($prompt) && !is_string($prompt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prompt, true), gettype($prompt)), __LINE__);
        }
        $this->Prompt = $prompt;
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \Nmusco\AssureSign\v2\StructType\ParameterItemBase
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        $this->Tag = $tag;
        return $this;
    }
}
