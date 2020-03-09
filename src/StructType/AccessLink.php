<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessLink StructType
 * @subpackage Structs
 */
class AccessLink extends Link
{
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DocumentType;
    /**
     * Constructor method for AccessLink
     * @uses AccessLink::setDocumentType()
     * @param string $documentType
     */
    public function __construct($documentType = null)
    {
        $this
            ->setDocumentType($documentType);
    }
    /**
     * Get DocumentType value
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @uses \Nmusco\AssureSign\v2\EnumType\LinkDocumentType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\LinkDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \Nmusco\AssureSign\v2\StructType\AccessLink
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\LinkDocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\LinkDocumentType', is_array($documentType) ? implode(', ', $documentType) : var_export($documentType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\LinkDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\AccessLink
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
