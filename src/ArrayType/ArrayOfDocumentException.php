<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentException ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentException extends AbstractStructArrayBase
{
    /**
     * The DocumentException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentException[]
     */
    public $DocumentException;
    /**
     * Constructor method for ArrayOfDocumentException
     * @uses ArrayOfDocumentException::setDocumentException()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentException[] $documentException
     */
    public function __construct(array $documentException = array())
    {
        $this
            ->setDocumentException($documentException);
    }
    /**
     * Get DocumentException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentException[]|null
     */
    public function getDocumentException()
    {
        return isset($this->DocumentException) ? $this->DocumentException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentExceptionForArrayConstraintsFromSetDocumentException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentExceptionDocumentExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentExceptionDocumentExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentException) {
                $invalidValues[] = is_object($arrayOfDocumentExceptionDocumentExceptionItem) ? get_class($arrayOfDocumentExceptionDocumentExceptionItem) : sprintf('%s(%s)', gettype($arrayOfDocumentExceptionDocumentExceptionItem), var_export($arrayOfDocumentExceptionDocumentExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentException[] $documentException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException
     */
    public function setDocumentException(array $documentException = array())
    {
        // validation for constraint: array
        if ('' !== ($documentExceptionArrayErrorMessage = self::validateDocumentExceptionForArrayConstraintsFromSetDocumentException($documentException))) {
            throw new \InvalidArgumentException($documentExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($documentException) || (is_array($documentException) && empty($documentException))) {
            unset($this->DocumentException);
        } else {
            $this->DocumentException = $documentException;
        }
        return $this;
    }
    /**
     * Add item to DocumentException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentException
     */
    public function addToDocumentException(\Nmusco\AssureSign\v2\StructType\DocumentException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentException) {
            throw new \InvalidArgumentException(sprintf('The DocumentException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentException
     */
    public function getAttributeName()
    {
        return 'DocumentException';
    }
}
