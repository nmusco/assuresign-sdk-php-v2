<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentValuesException ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentValuesException extends AbstractStructArrayBase
{
    /**
     * The DocumentValuesException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentValuesException[]
     */
    public $DocumentValuesException;
    /**
     * Constructor method for ArrayOfDocumentValuesException
     * @uses ArrayOfDocumentValuesException::setDocumentValuesException()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesException[] $documentValuesException
     */
    public function __construct(array $documentValuesException = array())
    {
        $this
            ->setDocumentValuesException($documentValuesException);
    }
    /**
     * Get DocumentValuesException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException[]|null
     */
    public function getDocumentValuesException()
    {
        return isset($this->DocumentValuesException) ? $this->DocumentValuesException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentValuesException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentValuesException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentValuesExceptionForArrayConstraintsFromSetDocumentValuesException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentValuesExceptionDocumentValuesExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentValuesExceptionDocumentValuesExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentValuesException) {
                $invalidValues[] = is_object($arrayOfDocumentValuesExceptionDocumentValuesExceptionItem) ? get_class($arrayOfDocumentValuesExceptionDocumentValuesExceptionItem) : sprintf('%s(%s)', gettype($arrayOfDocumentValuesExceptionDocumentValuesExceptionItem), var_export($arrayOfDocumentValuesExceptionDocumentValuesExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentValuesException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentValuesException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentValuesException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesException[] $documentValuesException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException
     */
    public function setDocumentValuesException(array $documentValuesException = array())
    {
        // validation for constraint: array
        if ('' !== ($documentValuesExceptionArrayErrorMessage = self::validateDocumentValuesExceptionForArrayConstraintsFromSetDocumentValuesException($documentValuesException))) {
            throw new \InvalidArgumentException($documentValuesExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($documentValuesException) || (is_array($documentValuesException) && empty($documentValuesException))) {
            unset($this->DocumentValuesException);
        } else {
            $this->DocumentValuesException = $documentValuesException;
        }
        return $this;
    }
    /**
     * Add item to DocumentValuesException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentValuesException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentValuesException
     */
    public function addToDocumentValuesException(\Nmusco\AssureSign\v2\StructType\DocumentValuesException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentValuesException) {
            throw new \InvalidArgumentException(sprintf('The DocumentValuesException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentValuesException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentValuesException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentValuesException
     */
    public function getAttributeName()
    {
        return 'DocumentValuesException';
    }
}
