<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListEnvelopeTemplatesResult StructType
 * @subpackage Structs
 */
class ListEnvelopeTemplatesResult extends AbstractStructBase
{
    /**
     * The Templates
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate
     */
    public $Templates;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
     */
    public $Exceptions;
    /**
     * Constructor method for ListEnvelopeTemplatesResult
     * @uses ListEnvelopeTemplatesResult::setTemplates()
     * @uses ListEnvelopeTemplatesResult::setExceptions()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate $templates
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate $templates = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this
            ->setTemplates($templates)
            ->setExceptions($exceptions);
    }
    /**
     * Get Templates value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate|null
     */
    public function getTemplates()
    {
        return $this->Templates;
    }
    /**
     * Set Templates value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate $templates
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult
     */
    public function setTemplates(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate $templates = null)
    {
        $this->Templates = $templates;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
