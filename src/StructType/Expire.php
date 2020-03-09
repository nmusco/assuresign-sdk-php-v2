<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Expire StructType
 * @subpackage Structs
 */
class Expire extends AbstractStructBase
{
    /**
     * The DocumentExpirations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration
     */
    public $DocumentExpirations;
    /**
     * Constructor method for Expire
     * @uses Expire::setDocumentExpirations()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations = null)
    {
        $this
            ->setDocumentExpirations($documentExpirations);
    }
    /**
     * Get DocumentExpirations value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration|null
     */
    public function getDocumentExpirations()
    {
        return $this->DocumentExpirations;
    }
    /**
     * Set DocumentExpirations value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations
     * @return \Nmusco\AssureSign\v2\StructType\Expire
     */
    public function setDocumentExpirations(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations = null)
    {
        $this->DocumentExpirations = $documentExpirations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\Expire
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
