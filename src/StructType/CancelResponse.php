<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelResponse StructType
 * @subpackage Structs
 */
class CancelResponse extends AbstractStructBase
{
    /**
     * The DocumentCancellationResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult
     */
    public $DocumentCancellationResults;
    /**
     * Constructor method for CancelResponse
     * @uses CancelResponse::setDocumentCancellationResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults = null)
    {
        $this
            ->setDocumentCancellationResults($documentCancellationResults);
    }
    /**
     * Get DocumentCancellationResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult|null
     */
    public function getDocumentCancellationResults()
    {
        return $this->DocumentCancellationResults;
    }
    /**
     * Set DocumentCancellationResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults
     * @return \Nmusco\AssureSign\v2\StructType\CancelResponse
     */
    public function setDocumentCancellationResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult $documentCancellationResults = null)
    {
        $this->DocumentCancellationResults = $documentCancellationResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CancelResponse
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
