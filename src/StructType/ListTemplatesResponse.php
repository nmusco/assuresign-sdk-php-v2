<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTemplatesResponse StructType
 * @subpackage Structs
 */
class ListTemplatesResponse extends AbstractStructBase
{
    /**
     * The TemplateListQueryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TemplateListQueryResult
     */
    public $TemplateListQueryResult;
    /**
     * Constructor method for ListTemplatesResponse
     * @uses ListTemplatesResponse::setTemplateListQueryResult()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListQueryResult $templateListQueryResult
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TemplateListQueryResult $templateListQueryResult = null)
    {
        $this
            ->setTemplateListQueryResult($templateListQueryResult);
    }
    /**
     * Get TemplateListQueryResult value
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListQueryResult|null
     */
    public function getTemplateListQueryResult()
    {
        return $this->TemplateListQueryResult;
    }
    /**
     * Set TemplateListQueryResult value
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListQueryResult $templateListQueryResult
     * @return \Nmusco\AssureSign\v2\StructType\ListTemplatesResponse
     */
    public function setTemplateListQueryResult(\Nmusco\AssureSign\v2\StructType\TemplateListQueryResult $templateListQueryResult = null)
    {
        $this->TemplateListQueryResult = $templateListQueryResult;
        return $this;
    }
}
