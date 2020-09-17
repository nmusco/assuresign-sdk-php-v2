<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentValuesQueryResult StructType
 * @subpackage Structs
 */
class DocumentValuesQueryResult extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException
     */
    public $Exceptions;
    /**
     * The DocumentValues
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DocumentValues
     */
    public $DocumentValues;
    /**
     * Constructor method for DocumentValuesQueryResult
     * @uses DocumentValuesQueryResult::setId()
     * @uses DocumentValuesQueryResult::setExceptions()
     * @uses DocumentValuesQueryResult::setDocumentValues()
     * @param string $id
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException $exceptions
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValues $documentValues
     */
    public function __construct($id = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException $exceptions = null, \Nmusco\AssureSign\v2\StructType\DocumentValues $documentValues = null)
    {
        $this
            ->setId($id)
            ->setExceptions($exceptions)
            ->setDocumentValues($documentValues);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get DocumentValues value
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValues|null
     */
    public function getDocumentValues()
    {
        return $this->DocumentValues;
    }
    /**
     * Set DocumentValues value
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValues $documentValues
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesQueryResult
     */
    public function setDocumentValues(\Nmusco\AssureSign\v2\StructType\DocumentValues $documentValues = null)
    {
        $this->DocumentValues = $documentValues;
        return $this;
    }
}
