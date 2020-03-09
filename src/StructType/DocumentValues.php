<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentValues StructType
 * @subpackage Structs
 */
class DocumentValues extends AbstractStructBase
{
    /**
     * The JotBlocks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo
     */
    public $JotBlocks;
    /**
     * The Parameters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo
     */
    public $Parameters;
    /**
     * Constructor method for DocumentValues
     * @uses DocumentValues::setJotBlocks()
     * @uses DocumentValues::setParameters()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo $parameters
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo $parameters = null)
    {
        $this
            ->setJotBlocks($jotBlocks)
            ->setParameters($parameters);
    }
    /**
     * Get JotBlocks value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo|null
     */
    public function getJotBlocks()
    {
        return $this->JotBlocks;
    }
    /**
     * Set JotBlocks value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValues
     */
    public function setJotBlocks(\Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlockInfo $jotBlocks = null)
    {
        $this->JotBlocks = $jotBlocks;
        return $this;
    }
    /**
     * Get Parameters value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo|null
     */
    public function getParameters()
    {
        return $this->Parameters;
    }
    /**
     * Set Parameters value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo $parameters
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValues
     */
    public function setParameters(\Nmusco\AssureSign\v2\ArrayType\ArrayOfParameterInfo $parameters = null)
    {
        $this->Parameters = $parameters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValues
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
