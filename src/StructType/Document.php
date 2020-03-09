<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * @subpackage Structs
 */
class Document extends AbstractStructBase
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
     * The Metadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\Metadata
     */
    public $Metadata;
    /**
     * The Template
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\Template
     */
    public $Template;
    /**
     * Constructor method for Document
     * @uses Document::setContextIdentifier()
     * @uses Document::setMetadata()
     * @uses Document::setTemplate()
     * @param string $contextIdentifier
     * @param \Nmusco\AssureSign\v2\StructType\Metadata $metadata
     * @param \Nmusco\AssureSign\v2\StructType\Template $template
     */
    public function __construct($contextIdentifier = null, \Nmusco\AssureSign\v2\StructType\Metadata $metadata = null, \Nmusco\AssureSign\v2\StructType\Template $template = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setMetadata($metadata)
            ->setTemplate($template);
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
     * @return \Nmusco\AssureSign\v2\StructType\Document
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
     * Get Metadata value
     * @return \Nmusco\AssureSign\v2\StructType\Metadata|null
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }
    /**
     * Set Metadata value
     * @param \Nmusco\AssureSign\v2\StructType\Metadata $metadata
     * @return \Nmusco\AssureSign\v2\StructType\Document
     */
    public function setMetadata(\Nmusco\AssureSign\v2\StructType\Metadata $metadata = null)
    {
        $this->Metadata = $metadata;
        return $this;
    }
    /**
     * Get Template value
     * @return \Nmusco\AssureSign\v2\StructType\Template|null
     */
    public function getTemplate()
    {
        return $this->Template;
    }
    /**
     * Set Template value
     * @param \Nmusco\AssureSign\v2\StructType\Template $template
     * @return \Nmusco\AssureSign\v2\StructType\Document
     */
    public function setTemplate(\Nmusco\AssureSign\v2\StructType\Template $template = null)
    {
        $this->Template = $template;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\Document
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
