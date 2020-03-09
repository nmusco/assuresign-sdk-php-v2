<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnvelopeTemplate StructType
 * @subpackage Structs
 */
class EnvelopeTemplate extends AbstractStructBase
{
    /**
     * The EnvelopeTemplateId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $EnvelopeTemplateId;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CreatedDate;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ModifiedDate;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Tag
     * @var string
     */
    public $Tag;
    /**
     * Constructor method for EnvelopeTemplate
     * @uses EnvelopeTemplate::setEnvelopeTemplateId()
     * @uses EnvelopeTemplate::setCreatedDate()
     * @uses EnvelopeTemplate::setModifiedDate()
     * @uses EnvelopeTemplate::setName()
     * @uses EnvelopeTemplate::setDescription()
     * @uses EnvelopeTemplate::setTag()
     * @param string $envelopeTemplateId
     * @param string $createdDate
     * @param string $modifiedDate
     * @param string $name
     * @param string $description
     * @param string $tag
     */
    public function __construct($envelopeTemplateId = null, $createdDate = null, $modifiedDate = null, $name = null, $description = null, $tag = null)
    {
        $this
            ->setEnvelopeTemplateId($envelopeTemplateId)
            ->setCreatedDate($createdDate)
            ->setModifiedDate($modifiedDate)
            ->setName($name)
            ->setDescription($description)
            ->setTag($tag);
    }
    /**
     * Get EnvelopeTemplateId value
     * @return string
     */
    public function getEnvelopeTemplateId()
    {
        return $this->EnvelopeTemplateId;
    }
    /**
     * Set EnvelopeTemplateId value
     * @param string $envelopeTemplateId
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
     */
    public function setEnvelopeTemplateId($envelopeTemplateId = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeTemplateId) && !is_string($envelopeTemplateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeTemplateId, true), gettype($envelopeTemplateId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeTemplateId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeTemplateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeTemplateId, true)), __LINE__);
        }
        $this->EnvelopeTemplateId = $envelopeTemplateId;
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
     */
    public function setModifiedDate($modifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;
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
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate
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
