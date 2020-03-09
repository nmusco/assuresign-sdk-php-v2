<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListEnvelopeDocumentsResponse StructType
 * @subpackage Structs
 */
class ListEnvelopeDocumentsResponse extends AbstractStructBase
{
    /**
     * The ListEnvelopeDocumentsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResult
     */
    public $ListEnvelopeDocumentsResult;
    /**
     * Constructor method for ListEnvelopeDocumentsResponse
     * @uses ListEnvelopeDocumentsResponse::setListEnvelopeDocumentsResult()
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResult $listEnvelopeDocumentsResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResult $listEnvelopeDocumentsResult = null)
    {
        $this
            ->setListEnvelopeDocumentsResult($listEnvelopeDocumentsResult);
    }
    /**
     * Get ListEnvelopeDocumentsResult value
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResult|null
     */
    public function getListEnvelopeDocumentsResult()
    {
        return $this->ListEnvelopeDocumentsResult;
    }
    /**
     * Set ListEnvelopeDocumentsResult value
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResult $listEnvelopeDocumentsResult
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResponse
     */
    public function setListEnvelopeDocumentsResult(\Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResult $listEnvelopeDocumentsResult = null)
    {
        $this->ListEnvelopeDocumentsResult = $listEnvelopeDocumentsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResponse
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
