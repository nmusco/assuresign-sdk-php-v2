<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentStatusCheckResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentStatusCheckResult extends AbstractStructArrayBase
{
    /**
     * The DocumentStatusCheckResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult[]
     */
    public $DocumentStatusCheckResult;
    /**
     * Constructor method for ArrayOfDocumentStatusCheckResult
     * @uses ArrayOfDocumentStatusCheckResult::setDocumentStatusCheckResult()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult[] $documentStatusCheckResult
     */
    public function __construct(array $documentStatusCheckResult = array())
    {
        $this
            ->setDocumentStatusCheckResult($documentStatusCheckResult);
    }
    /**
     * Get DocumentStatusCheckResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult[]|null
     */
    public function getDocumentStatusCheckResult()
    {
        return isset($this->DocumentStatusCheckResult) ? $this->DocumentStatusCheckResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentStatusCheckResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentStatusCheckResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentStatusCheckResultForArrayConstraintsFromSetDocumentStatusCheckResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentStatusCheckResultDocumentStatusCheckResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentStatusCheckResultDocumentStatusCheckResultItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult) {
                $invalidValues[] = is_object($arrayOfDocumentStatusCheckResultDocumentStatusCheckResultItem) ? get_class($arrayOfDocumentStatusCheckResultDocumentStatusCheckResultItem) : sprintf('%s(%s)', gettype($arrayOfDocumentStatusCheckResultDocumentStatusCheckResultItem), var_export($arrayOfDocumentStatusCheckResultDocumentStatusCheckResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentStatusCheckResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentStatusCheckResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult[] $documentStatusCheckResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult
     */
    public function setDocumentStatusCheckResult(array $documentStatusCheckResult = array())
    {
        // validation for constraint: array
        if ('' !== ($documentStatusCheckResultArrayErrorMessage = self::validateDocumentStatusCheckResultForArrayConstraintsFromSetDocumentStatusCheckResult($documentStatusCheckResult))) {
            throw new \InvalidArgumentException($documentStatusCheckResultArrayErrorMessage, __LINE__);
        }
        if (is_null($documentStatusCheckResult) || (is_array($documentStatusCheckResult) && empty($documentStatusCheckResult))) {
            unset($this->DocumentStatusCheckResult);
        } else {
            $this->DocumentStatusCheckResult = $documentStatusCheckResult;
        }
        return $this;
    }
    /**
     * Add item to DocumentStatusCheckResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult
     */
    public function addToDocumentStatusCheckResult(\Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult) {
            throw new \InvalidArgumentException(sprintf('The DocumentStatusCheckResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentStatusCheckResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentStatusCheckResult
     */
    public function getAttributeName()
    {
        return 'DocumentStatusCheckResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheckResult
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
