<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewHistoryResponse StructType
 * @subpackage Structs
 */
class ViewHistoryResponse extends AbstractStructBase
{
    /**
     * The DocumentHistoryViewResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult
     */
    public $DocumentHistoryViewResults;
    /**
     * Constructor method for ViewHistoryResponse
     * @uses ViewHistoryResponse::setDocumentHistoryViewResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults = null)
    {
        $this
            ->setDocumentHistoryViewResults($documentHistoryViewResults);
    }
    /**
     * Get DocumentHistoryViewResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult|null
     */
    public function getDocumentHistoryViewResults()
    {
        return $this->DocumentHistoryViewResults;
    }
    /**
     * Set DocumentHistoryViewResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults
     * @return \Nmusco\AssureSign\v2\StructType\ViewHistoryResponse
     */
    public function setDocumentHistoryViewResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult $documentHistoryViewResults = null)
    {
        $this->DocumentHistoryViewResults = $documentHistoryViewResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ViewHistoryResponse
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
