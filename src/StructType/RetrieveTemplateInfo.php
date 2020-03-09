<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveTemplateInfo StructType
 * @subpackage Structs
 */
class RetrieveTemplateInfo extends AbstractStructBase
{
    /**
     * The TemplateInfoQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TemplateInfoQuery
     */
    public $TemplateInfoQuery;
    /**
     * Constructor method for RetrieveTemplateInfo
     * @uses RetrieveTemplateInfo::setTemplateInfoQuery()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoQuery $templateInfoQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TemplateInfoQuery $templateInfoQuery = null)
    {
        $this
            ->setTemplateInfoQuery($templateInfoQuery);
    }
    /**
     * Get TemplateInfoQuery value
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoQuery|null
     */
    public function getTemplateInfoQuery()
    {
        return $this->TemplateInfoQuery;
    }
    /**
     * Set TemplateInfoQuery value
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoQuery $templateInfoQuery
     * @return \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfo
     */
    public function setTemplateInfoQuery(\Nmusco\AssureSign\v2\StructType\TemplateInfoQuery $templateInfoQuery = null)
    {
        $this->TemplateInfoQuery = $templateInfoQuery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfo
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
