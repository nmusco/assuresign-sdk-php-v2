<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSignatoryResponse StructType
 * @subpackage Structs
 */
class UpdateSignatoryResponse extends AbstractStructBase
{
    /**
     * The SignatoryUpdateResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult
     */
    public $SignatoryUpdateResults;
    /**
     * Constructor method for UpdateSignatoryResponse
     * @uses UpdateSignatoryResponse::setSignatoryUpdateResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult $signatoryUpdateResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult $signatoryUpdateResults = null)
    {
        $this
            ->setSignatoryUpdateResults($signatoryUpdateResults);
    }
    /**
     * Get SignatoryUpdateResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult|null
     */
    public function getSignatoryUpdateResults()
    {
        return $this->SignatoryUpdateResults;
    }
    /**
     * Set SignatoryUpdateResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult $signatoryUpdateResults
     * @return \Nmusco\AssureSign\v2\StructType\UpdateSignatoryResponse
     */
    public function setSignatoryUpdateResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult $signatoryUpdateResults = null)
    {
        $this->SignatoryUpdateResults = $signatoryUpdateResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\UpdateSignatoryResponse
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
