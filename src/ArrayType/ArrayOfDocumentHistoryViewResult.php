<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentHistoryViewResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentHistoryViewResult extends AbstractStructArrayBase
{
    /**
     * The DocumentHistoryViewResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult[]
     */
    public $DocumentHistoryViewResult;
    /**
     * Constructor method for ArrayOfDocumentHistoryViewResult
     * @uses ArrayOfDocumentHistoryViewResult::setDocumentHistoryViewResult()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult[] $documentHistoryViewResult
     */
    public function __construct(array $documentHistoryViewResult = array())
    {
        $this
            ->setDocumentHistoryViewResult($documentHistoryViewResult);
    }
    /**
     * Get DocumentHistoryViewResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult[]|null
     */
    public function getDocumentHistoryViewResult()
    {
        return isset($this->DocumentHistoryViewResult) ? $this->DocumentHistoryViewResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentHistoryViewResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentHistoryViewResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentHistoryViewResultForArrayConstraintsFromSetDocumentHistoryViewResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentHistoryViewResultDocumentHistoryViewResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentHistoryViewResultDocumentHistoryViewResultItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult) {
                $invalidValues[] = is_object($arrayOfDocumentHistoryViewResultDocumentHistoryViewResultItem) ? get_class($arrayOfDocumentHistoryViewResultDocumentHistoryViewResultItem) : sprintf('%s(%s)', gettype($arrayOfDocumentHistoryViewResultDocumentHistoryViewResultItem), var_export($arrayOfDocumentHistoryViewResultDocumentHistoryViewResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentHistoryViewResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentHistoryViewResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult[] $documentHistoryViewResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult
     */
    public function setDocumentHistoryViewResult(array $documentHistoryViewResult = array())
    {
        // validation for constraint: array
        if ('' !== ($documentHistoryViewResultArrayErrorMessage = self::validateDocumentHistoryViewResultForArrayConstraintsFromSetDocumentHistoryViewResult($documentHistoryViewResult))) {
            throw new \InvalidArgumentException($documentHistoryViewResultArrayErrorMessage, __LINE__);
        }
        if (is_null($documentHistoryViewResult) || (is_array($documentHistoryViewResult) && empty($documentHistoryViewResult))) {
            unset($this->DocumentHistoryViewResult);
        } else {
            $this->DocumentHistoryViewResult = $documentHistoryViewResult;
        }
        return $this;
    }
    /**
     * Add item to DocumentHistoryViewResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult
     */
    public function addToDocumentHistoryViewResult(\Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult) {
            throw new \InvalidArgumentException(sprintf('The DocumentHistoryViewResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentHistoryViewResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentHistoryViewResult
     */
    public function getAttributeName()
    {
        return 'DocumentHistoryViewResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryViewResult
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
