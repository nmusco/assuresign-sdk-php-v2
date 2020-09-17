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
}
