<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckStatusResponse StructType
 * @subpackage Structs
 */
class CheckStatusResponse extends AbstractStructBase
{
    /**
     * The DocumentStatusCheckResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult
     */
    public $DocumentStatusCheckResults;
    /**
     * Constructor method for CheckStatusResponse
     * @uses CheckStatusResponse::setDocumentStatusCheckResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults = null)
    {
        $this
            ->setDocumentStatusCheckResults($documentStatusCheckResults);
    }
    /**
     * Get DocumentStatusCheckResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult|null
     */
    public function getDocumentStatusCheckResults()
    {
        return $this->DocumentStatusCheckResults;
    }
    /**
     * Set DocumentStatusCheckResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults
     * @return \Nmusco\AssureSign\v2\StructType\CheckStatusResponse
     */
    public function setDocumentStatusCheckResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult $documentStatusCheckResults = null)
    {
        $this->DocumentStatusCheckResults = $documentStatusCheckResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CheckStatusResponse
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
