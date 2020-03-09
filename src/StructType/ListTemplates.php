<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTemplates StructType
 * @subpackage Structs
 */
class ListTemplates extends AbstractStructBase
{
    /**
     * The TemplateListQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TemplateListQuery
     */
    public $TemplateListQuery;
    /**
     * Constructor method for ListTemplates
     * @uses ListTemplates::setTemplateListQuery()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListQuery $templateListQuery
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TemplateListQuery $templateListQuery = null)
    {
        $this
            ->setTemplateListQuery($templateListQuery);
    }
    /**
     * Get TemplateListQuery value
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListQuery|null
     */
    public function getTemplateListQuery()
    {
        return $this->TemplateListQuery;
    }
    /**
     * Set TemplateListQuery value
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListQuery $templateListQuery
     * @return \Nmusco\AssureSign\v2\StructType\ListTemplates
     */
    public function setTemplateListQuery(\Nmusco\AssureSign\v2\StructType\TemplateListQuery $templateListQuery = null)
    {
        $this->TemplateListQuery = $templateListQuery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ListTemplates
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
