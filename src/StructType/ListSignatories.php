<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSignatories StructType
 * @subpackage Structs
 */
class ListSignatories extends AbstractStructBase
{
    /**
     * The SignatoryListQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryListQuery
     */
    public $SignatoryListQuery;
    /**
     * Constructor method for ListSignatories
     * @uses ListSignatories::setSignatoryListQuery()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery = null)
    {
        $this
            ->setSignatoryListQuery($signatoryListQuery);
    }
    /**
     * Get SignatoryListQuery value
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryListQuery|null
     */
    public function getSignatoryListQuery()
    {
        return $this->SignatoryListQuery;
    }
    /**
     * Set SignatoryListQuery value
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatories
     */
    public function setSignatoryListQuery(\Nmusco\AssureSign\v2\StructType\SignatoryListQuery $signatoryListQuery = null)
    {
        $this->SignatoryListQuery = $signatoryListQuery;
        return $this;
    }
}
