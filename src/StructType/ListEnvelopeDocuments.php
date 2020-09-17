<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListEnvelopeDocuments StructType
 * @subpackage Structs
 */
class ListEnvelopeDocuments extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsRequest
     */
    public $Request;
    /**
     * Constructor method for ListEnvelopeDocuments
     * @uses ListEnvelopeDocuments::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocuments
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
}
