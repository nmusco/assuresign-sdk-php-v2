<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentCancellationResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentCancellationResult extends AbstractStructArrayBase
{
    /**
     * The DocumentCancellationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult[]
     */
    public $DocumentCancellationResult;
    /**
     * Constructor method for ArrayOfDocumentCancellationResult
     * @uses ArrayOfDocumentCancellationResult::setDocumentCancellationResult()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult[] $documentCancellationResult
     */
    public function __construct(array $documentCancellationResult = array())
    {
        $this
            ->setDocumentCancellationResult($documentCancellationResult);
    }
    /**
     * Get DocumentCancellationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult[]|null
     */
    public function getDocumentCancellationResult()
    {
        return isset($this->DocumentCancellationResult) ? $this->DocumentCancellationResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentCancellationResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentCancellationResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentCancellationResultForArrayConstraintsFromSetDocumentCancellationResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentCancellationResultDocumentCancellationResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentCancellationResultDocumentCancellationResultItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult) {
                $invalidValues[] = is_object($arrayOfDocumentCancellationResultDocumentCancellationResultItem) ? get_class($arrayOfDocumentCancellationResultDocumentCancellationResultItem) : sprintf('%s(%s)', gettype($arrayOfDocumentCancellationResultDocumentCancellationResultItem), var_export($arrayOfDocumentCancellationResultDocumentCancellationResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentCancellationResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentCancellationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult[] $documentCancellationResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult
     */
    public function setDocumentCancellationResult(array $documentCancellationResult = array())
    {
        // validation for constraint: array
        if ('' !== ($documentCancellationResultArrayErrorMessage = self::validateDocumentCancellationResultForArrayConstraintsFromSetDocumentCancellationResult($documentCancellationResult))) {
            throw new \InvalidArgumentException($documentCancellationResultArrayErrorMessage, __LINE__);
        }
        if (is_null($documentCancellationResult) || (is_array($documentCancellationResult) && empty($documentCancellationResult))) {
            unset($this->DocumentCancellationResult);
        } else {
            $this->DocumentCancellationResult = $documentCancellationResult;
        }
        return $this;
    }
    /**
     * Add item to DocumentCancellationResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellationResult
     */
    public function addToDocumentCancellationResult(\Nmusco\AssureSign\v2\StructType\DocumentCancellationResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult) {
            throw new \InvalidArgumentException(sprintf('The DocumentCancellationResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentCancellationResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellationResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentCancellationResult
     */
    public function getAttributeName()
    {
        return 'DocumentCancellationResult';
    }
}
