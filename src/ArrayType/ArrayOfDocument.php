<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocument ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocument extends AbstractStructArrayBase
{
    /**
     * The Document
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\Document[]
     */
    public $Document;
    /**
     * Constructor method for ArrayOfDocument
     * @uses ArrayOfDocument::setDocument()
     * @param \Nmusco\AssureSign\v2\StructType\Document[] $document
     */
    public function __construct(array $document = array())
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get Document value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\Document[]|null
     */
    public function getDocument()
    {
        return isset($this->Document) ? $this->Document : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentForArrayConstraintsFromSetDocument(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentDocumentItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentDocumentItem instanceof \Nmusco\AssureSign\v2\StructType\Document) {
                $invalidValues[] = is_object($arrayOfDocumentDocumentItem) ? get_class($arrayOfDocumentDocumentItem) : sprintf('%s(%s)', gettype($arrayOfDocumentDocumentItem), var_export($arrayOfDocumentDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Document property can only contain items of type \Nmusco\AssureSign\v2\StructType\Document, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Document value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\Document[] $document
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument
     */
    public function setDocument(array $document = array())
    {
        // validation for constraint: array
        if ('' !== ($documentArrayErrorMessage = self::validateDocumentForArrayConstraintsFromSetDocument($document))) {
            throw new \InvalidArgumentException($documentArrayErrorMessage, __LINE__);
        }
        if (is_null($document) || (is_array($document) && empty($document))) {
            unset($this->Document);
        } else {
            $this->Document = $document;
        }
        return $this;
    }
    /**
     * Add item to Document value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\Document $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocument
     */
    public function addToDocument(\Nmusco\AssureSign\v2\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The Document property can only contain items of type \Nmusco\AssureSign\v2\StructType\Document, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Document[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\Document|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\Document|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\Document|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\Document|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\Document|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Document
     */
    public function getAttributeName()
    {
        return 'Document';
    }
}
