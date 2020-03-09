<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveTemplateInfoResponse StructType
 * @subpackage Structs
 */
class RetrieveTemplateInfoResponse extends AbstractStructBase
{
    /**
     * The RetrieveTemplateInfoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult
     */
    public $RetrieveTemplateInfoResult;
    /**
     * Constructor method for RetrieveTemplateInfoResponse
     * @uses RetrieveTemplateInfoResponse::setRetrieveTemplateInfoResult()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult $retrieveTemplateInfoResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult $retrieveTemplateInfoResult = null)
    {
        $this
            ->setRetrieveTemplateInfoResult($retrieveTemplateInfoResult);
    }
    /**
     * Get RetrieveTemplateInfoResult value
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult|null
     */
    public function getRetrieveTemplateInfoResult()
    {
        return $this->RetrieveTemplateInfoResult;
    }
    /**
     * Set RetrieveTemplateInfoResult value
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult $retrieveTemplateInfoResult
     * @return \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfoResponse
     */
    public function setRetrieveTemplateInfoResult(\Nmusco\AssureSign\v2\StructType\TemplateInfoQueryResult $retrieveTemplateInfoResult = null)
    {
        $this->RetrieveTemplateInfoResult = $retrieveTemplateInfoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfoResponse
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
