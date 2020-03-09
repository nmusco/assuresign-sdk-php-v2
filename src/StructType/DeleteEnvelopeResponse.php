<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteEnvelopeResponse StructType
 * @subpackage Structs
 */
class DeleteEnvelopeResponse extends AbstractStructBase
{
    /**
     * The DeleteEnvelopeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult
     */
    public $DeleteEnvelopeResult;
    /**
     * Constructor method for DeleteEnvelopeResponse
     * @uses DeleteEnvelopeResponse::setDeleteEnvelopeResult()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult $deleteEnvelopeResult
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult $deleteEnvelopeResult = null)
    {
        $this
            ->setDeleteEnvelopeResult($deleteEnvelopeResult);
    }
    /**
     * Get DeleteEnvelopeResult value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult|null
     */
    public function getDeleteEnvelopeResult()
    {
        return $this->DeleteEnvelopeResult;
    }
    /**
     * Set DeleteEnvelopeResult value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult $deleteEnvelopeResult
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResponse
     */
    public function setDeleteEnvelopeResult(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDeleteEnvelopeResult $deleteEnvelopeResult = null)
    {
        $this->DeleteEnvelopeResult = $deleteEnvelopeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResponse
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
