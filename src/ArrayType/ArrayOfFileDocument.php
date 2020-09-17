<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFileDocument ArrayType
 * @subpackage Arrays
 */
class ArrayOfFileDocument extends AbstractStructArrayBase
{
    /**
     * The FileDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\FileDocument[]
     */
    public $FileDocument;
    /**
     * Constructor method for ArrayOfFileDocument
     * @uses ArrayOfFileDocument::setFileDocument()
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument[] $fileDocument
     */
    public function __construct(array $fileDocument = array())
    {
        $this
            ->setFileDocument($fileDocument);
    }
    /**
     * Get FileDocument value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument[]|null
     */
    public function getFileDocument()
    {
        return isset($this->FileDocument) ? $this->FileDocument : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFileDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileDocumentForArrayConstraintsFromSetFileDocument(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFileDocumentFileDocumentItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileDocumentFileDocumentItem instanceof \Nmusco\AssureSign\v2\StructType\FileDocument) {
                $invalidValues[] = is_object($arrayOfFileDocumentFileDocumentItem) ? get_class($arrayOfFileDocumentFileDocumentItem) : sprintf('%s(%s)', gettype($arrayOfFileDocumentFileDocumentItem), var_export($arrayOfFileDocumentFileDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FileDocument property can only contain items of type \Nmusco\AssureSign\v2\StructType\FileDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FileDocument value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument[] $fileDocument
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument
     */
    public function setFileDocument(array $fileDocument = array())
    {
        // validation for constraint: array
        if ('' !== ($fileDocumentArrayErrorMessage = self::validateFileDocumentForArrayConstraintsFromSetFileDocument($fileDocument))) {
            throw new \InvalidArgumentException($fileDocumentArrayErrorMessage, __LINE__);
        }
        if (is_null($fileDocument) || (is_array($fileDocument) && empty($fileDocument))) {
            unset($this->FileDocument);
        } else {
            $this->FileDocument = $fileDocument;
        }
        return $this;
    }
    /**
     * Add item to FileDocument value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\FileDocument $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileDocument
     */
    public function addToFileDocument(\Nmusco\AssureSign\v2\StructType\FileDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\FileDocument) {
            throw new \InvalidArgumentException(sprintf('The FileDocument property can only contain items of type \Nmusco\AssureSign\v2\StructType\FileDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FileDocument[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\FileDocument|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileDocument
     */
    public function getAttributeName()
    {
        return 'FileDocument';
    }
}
