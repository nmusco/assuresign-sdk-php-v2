<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFileRetrievalDocument ArrayType
 * @subpackage Arrays
 */
class ArrayOfFileRetrievalDocument extends AbstractStructArrayBase
{
    /**
     * The FileRetrievalDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument[]
     */
    public $FileRetrievalDocument;
    /**
     * Constructor method for ArrayOfFileRetrievalDocument
     * @uses ArrayOfFileRetrievalDocument::setFileRetrievalDocument()
     * @param \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument[] $fileRetrievalDocument
     */
    public function __construct(array $fileRetrievalDocument = array())
    {
        $this
            ->setFileRetrievalDocument($fileRetrievalDocument);
    }
    /**
     * Get FileRetrievalDocument value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument[]|null
     */
    public function getFileRetrievalDocument()
    {
        return isset($this->FileRetrievalDocument) ? $this->FileRetrievalDocument : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFileRetrievalDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileRetrievalDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileRetrievalDocumentForArrayConstraintsFromSetFileRetrievalDocument(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFileRetrievalDocumentFileRetrievalDocumentItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileRetrievalDocumentFileRetrievalDocumentItem instanceof \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument) {
                $invalidValues[] = is_object($arrayOfFileRetrievalDocumentFileRetrievalDocumentItem) ? get_class($arrayOfFileRetrievalDocumentFileRetrievalDocumentItem) : sprintf('%s(%s)', gettype($arrayOfFileRetrievalDocumentFileRetrievalDocumentItem), var_export($arrayOfFileRetrievalDocumentFileRetrievalDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FileRetrievalDocument property can only contain items of type \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FileRetrievalDocument value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument[] $fileRetrievalDocument
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument
     */
    public function setFileRetrievalDocument(array $fileRetrievalDocument = array())
    {
        // validation for constraint: array
        if ('' !== ($fileRetrievalDocumentArrayErrorMessage = self::validateFileRetrievalDocumentForArrayConstraintsFromSetFileRetrievalDocument($fileRetrievalDocument))) {
            throw new \InvalidArgumentException($fileRetrievalDocumentArrayErrorMessage, __LINE__);
        }
        if (is_null($fileRetrievalDocument) || (is_array($fileRetrievalDocument) && empty($fileRetrievalDocument))) {
            unset($this->FileRetrievalDocument);
        } else {
            $this->FileRetrievalDocument = $fileRetrievalDocument;
        }
        return $this;
    }
    /**
     * Add item to FileRetrievalDocument value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfFileRetrievalDocument
     */
    public function addToFileRetrievalDocument(\Nmusco\AssureSign\v2\StructType\FileRetrievalDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument) {
            throw new \InvalidArgumentException(sprintf('The FileRetrievalDocument property can only contain items of type \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FileRetrievalDocument[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalDocument|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileRetrievalDocument
     */
    public function getAttributeName()
    {
        return 'FileRetrievalDocument';
    }
}
