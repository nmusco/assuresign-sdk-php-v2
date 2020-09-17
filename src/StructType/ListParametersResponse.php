<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListParametersResponse StructType
 * @subpackage Structs
 */
class ListParametersResponse extends AbstractStructBase
{
    /**
     * The ParameterListQueryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult
     */
    public $ParameterListQueryResult;
    /**
     * Constructor method for ListParametersResponse
     * @uses ListParametersResponse::setParameterListQueryResult()
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult $parameterListQueryResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\ParameterListQueryResult $parameterListQueryResult = null)
    {
        $this
            ->setParameterListQueryResult($parameterListQueryResult);
    }
    /**
     * Get ParameterListQueryResult value
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult|null
     */
    public function getParameterListQueryResult()
    {
        return $this->ParameterListQueryResult;
    }
    /**
     * Set ParameterListQueryResult value
     * @param \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult $parameterListQueryResult
     * @return \Nmusco\AssureSign\v2\StructType\ListParametersResponse
     */
    public function setParameterListQueryResult(\Nmusco\AssureSign\v2\StructType\ParameterListQueryResult $parameterListQueryResult = null)
    {
        $this->ParameterListQueryResult = $parameterListQueryResult;
        return $this;
    }
}
