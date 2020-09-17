<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentValues StructType
 * @subpackage Structs
 */
class GetDocumentValues extends AbstractStructBase
{
    /**
     * The DocumentValuesQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DocumentValuesQuery
     */
    public $DocumentValuesQuery;
    /**
     * Constructor method for GetDocumentValues
     * @uses GetDocumentValues::setDocumentValuesQuery()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesQuery $documentValuesQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DocumentValuesQuery $documentValuesQuery = null)
    {
        $this
            ->setDocumentValuesQuery($documentValuesQuery);
    }
    /**
     * Get DocumentValuesQuery value
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesQuery|null
     */
    public function getDocumentValuesQuery()
    {
        return $this->DocumentValuesQuery;
    }
    /**
     * Set DocumentValuesQuery value
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesQuery $documentValuesQuery
     * @return \Nmusco\AssureSign\v2\StructType\GetDocumentValues
     */
    public function setDocumentValuesQuery(\Nmusco\AssureSign\v2\StructType\DocumentValuesQuery $documentValuesQuery = null)
    {
        $this->DocumentValuesQuery = $documentValuesQuery;
        return $this;
    }
}
