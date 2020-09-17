<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateListQueryResult StructType
 * @subpackage Structs
 */
class TemplateListQueryResult extends AbstractStructBase
{
    /**
     * The Templates
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem
     */
    public $Templates;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException
     */
    public $Exceptions;
    /**
     * Constructor method for TemplateListQueryResult
     * @uses TemplateListQueryResult::setTemplates()
     * @uses TemplateListQueryResult::setExceptions()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem $templates
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException $exceptions
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem $templates = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException $exceptions = null)
    {
        $this
            ->setTemplates($templates)
            ->setExceptions($exceptions);
    }
    /**
     * Get Templates value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem|null
     */
    public function getTemplates()
    {
        return $this->Templates;
    }
    /**
     * Set Templates value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem $templates
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListQueryResult
     */
    public function setTemplates(\Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateItem $templates = null)
    {
        $this->Templates = $templates;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
