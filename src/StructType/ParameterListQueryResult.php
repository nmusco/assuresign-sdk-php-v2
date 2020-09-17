<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParameterListQueryResult StructType
 * @subpackage Structs
 */
class ParameterListQueryResult extends AbstractStructBase
{
    /**
     * The TemplateId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $TemplateId;
    /**
     * The Parameters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1
     */
    public $Parameters;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException
     */
    public $Exceptions;
    /**
     * Constructor method for ParameterListQueryResult
     * @uses ParameterListQueryResult::setTemplateId()
     * @uses ParameterListQueryResult::setParameters()
     * @uses ParameterListQueryResult::setExceptions()
     * @param string $templateId
     * @param \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1 $parameters
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException $exceptions
     */
    public function __construct($templateId = null, \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1 $parameters = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException $exceptions = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setParameters($parameters)
            ->setExceptions($exceptions);
    }
    /**
     * Get TemplateId value
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }
    /**
     * Set TemplateId value
     * @param string $templateId
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult
     */
    public function setTemplateId($templateId = null)
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($templateId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($templateId, true)), __LINE__);
        }
        $this->TemplateId = $templateId;
        return $this;
    }
    /**
     * Get Parameters value
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1|null
     */
    public function getParameters()
    {
        return $this->Parameters;
    }
    /**
     * Set Parameters value
     * @param \Nmusco\AssureSign\v2\StructType\ArrayOfChoice1 $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult
     */
    public function setParameters(\Nmusco\AssureSign\v2\StructType\ArrayOfChoice1 $parameters = null)
    {
        $this->Parameters = $parameters;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\ParameterListQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterListException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
