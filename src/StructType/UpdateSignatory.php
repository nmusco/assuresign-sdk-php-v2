<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSignatory StructType
 * @subpackage Structs
 */
class UpdateSignatory extends AbstractStructBase
{
    /**
     * The SignatoryUpdateRequests
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest
     */
    public $SignatoryUpdateRequests;
    /**
     * Constructor method for UpdateSignatory
     * @uses UpdateSignatory::setSignatoryUpdateRequests()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest $signatoryUpdateRequests
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest $signatoryUpdateRequests = null)
    {
        $this
            ->setSignatoryUpdateRequests($signatoryUpdateRequests);
    }
    /**
     * Get SignatoryUpdateRequests value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest|null
     */
    public function getSignatoryUpdateRequests()
    {
        return $this->SignatoryUpdateRequests;
    }
    /**
     * Set SignatoryUpdateRequests value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest $signatoryUpdateRequests
     * @return \Nmusco\AssureSign\v2\StructType\UpdateSignatory
     */
    public function setSignatoryUpdateRequests(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateRequest $signatoryUpdateRequests = null)
    {
        $this->SignatoryUpdateRequests = $signatoryUpdateRequests;
        return $this;
    }
}
