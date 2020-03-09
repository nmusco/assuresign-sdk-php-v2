<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnvelopeAttachment StructType
 * @subpackage Structs
 */
class EnvelopeAttachment extends AbstractStructBase
{
    /**
     * The FileData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileData;
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
     * The Extension
     * @var string
     */
    public $Extension;
    /**
     * Constructor method for EnvelopeAttachment
     * @uses EnvelopeAttachment::setFileData()
     * @uses EnvelopeAttachment::setName()
     * @uses EnvelopeAttachment::setDescription()
     * @uses EnvelopeAttachment::setExtension()
     * @param string $fileData
     * @param string $name
     * @param string $description
     * @param string $extension
     */
    public function __construct($fileData = null, $name = null, $description = null, $extension = null)
    {
        $this
            ->setFileData($fileData)
            ->setName($name)
            ->setDescription($description)
            ->setExtension($extension);
    }
    /**
     * Get FileData value
     * @return string|null
     */
    public function getFileData()
    {
        return $this->FileData;
    }
    /**
     * Set FileData value
     * @param string $fileData
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment
     */
    public function setFileData($fileData = null)
    {
        // validation for constraint: string
        if (!is_null($fileData) && !is_string($fileData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileData, true), gettype($fileData)), __LINE__);
        }
        $this->FileData = $fileData;
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
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment
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
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment
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
     * Get Extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param string $extension
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment
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
