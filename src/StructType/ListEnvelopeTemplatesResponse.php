<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListEnvelopeTemplatesResponse StructType
 * @subpackage Structs
 */
class ListEnvelopeTemplatesResponse extends AbstractStructBase
{
    /**
     * The ListEnvelopeTemplatesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult
     */
    public $ListEnvelopeTemplatesResult;
    /**
     * Constructor method for ListEnvelopeTemplatesResponse
     * @uses ListEnvelopeTemplatesResponse::setListEnvelopeTemplatesResult()
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult $listEnvelopeTemplatesResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult $listEnvelopeTemplatesResult = null)
    {
        $this
            ->setListEnvelopeTemplatesResult($listEnvelopeTemplatesResult);
    }
    /**
     * Get ListEnvelopeTemplatesResult value
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult|null
     */
    public function getListEnvelopeTemplatesResult()
    {
        return $this->ListEnvelopeTemplatesResult;
    }
    /**
     * Set ListEnvelopeTemplatesResult value
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult $listEnvelopeTemplatesResult
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResponse
     */
    public function setListEnvelopeTemplatesResult(\Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult $listEnvelopeTemplatesResult = null)
    {
        $this->ListEnvelopeTemplatesResult = $listEnvelopeTemplatesResult;
        return $this;
    }
}
