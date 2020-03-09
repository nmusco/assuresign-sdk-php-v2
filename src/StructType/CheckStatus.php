<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckStatus StructType
 * @subpackage Structs
 */
class CheckStatus extends AbstractStructBase
{
    /**
     * The DocumentStatusChecks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck
     */
    public $DocumentStatusChecks;
    /**
     * Constructor method for CheckStatus
     * @uses CheckStatus::setDocumentStatusChecks()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck $documentStatusChecks
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck $documentStatusChecks = null)
    {
        $this
            ->setDocumentStatusChecks($documentStatusChecks);
    }
    /**
     * Get DocumentStatusChecks value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck|null
     */
    public function getDocumentStatusChecks()
    {
        return $this->DocumentStatusChecks;
    }
    /**
     * Set DocumentStatusChecks value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck $documentStatusChecks
     * @return \Nmusco\AssureSign\v2\StructType\CheckStatus
     */
    public function setDocumentStatusChecks(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck $documentStatusChecks = null)
    {
        $this->DocumentStatusChecks = $documentStatusChecks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CheckStatus
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
