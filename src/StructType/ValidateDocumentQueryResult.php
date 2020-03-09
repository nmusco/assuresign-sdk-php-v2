<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDocumentQueryResult StructType
 * @subpackage Structs
 */
class ValidateDocumentQueryResult extends AbstractStructBase
{
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException
     */
    public $Exceptions;
    /**
     * The ValidationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\ValidationResult
     */
    public $ValidationResult;
    /**
     * Constructor method for ValidateDocumentQueryResult
     * @uses ValidateDocumentQueryResult::setExceptions()
     * @uses ValidateDocumentQueryResult::setValidationResult()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException $exceptions
     * @param \Nmusco\AssureSign\v2\StructType\ValidationResult $validationResult
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException $exceptions = null, \Nmusco\AssureSign\v2\StructType\ValidationResult $validationResult = null)
    {
        $this
            ->setExceptions($exceptions)
            ->setValidationResult($validationResult);
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get ValidationResult value
     * @return \Nmusco\AssureSign\v2\StructType\ValidationResult|null
     */
    public function getValidationResult()
    {
        return $this->ValidationResult;
    }
    /**
     * Set ValidationResult value
     * @param \Nmusco\AssureSign\v2\StructType\ValidationResult $validationResult
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult
     */
    public function setValidationResult(\Nmusco\AssureSign\v2\StructType\ValidationResult $validationResult = null)
    {
        $this->ValidationResult = $validationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentQueryResult
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
