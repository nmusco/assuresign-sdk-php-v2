<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnvelopeDocument ArrayType
 * @subpackage Arrays
 */
class ArrayOfEnvelopeDocument extends AbstractStructArrayBase
{
    /**
     * The EnvelopeDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeDocument[]
     */
    public $EnvelopeDocument;
    /**
     * Constructor method for ArrayOfEnvelopeDocument
     * @uses ArrayOfEnvelopeDocument::setEnvelopeDocument()
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocument[] $envelopeDocument
     */
    public function __construct(array $envelopeDocument = array())
    {
        $this
            ->setEnvelopeDocument($envelopeDocument);
    }
    /**
     * Get EnvelopeDocument value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument[]|null
     */
    public function getEnvelopeDocument()
    {
        return isset($this->EnvelopeDocument) ? $this->EnvelopeDocument : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeDocumentForArrayConstraintsFromSetEnvelopeDocument(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEnvelopeDocumentEnvelopeDocumentItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnvelopeDocumentEnvelopeDocumentItem instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeDocument) {
                $invalidValues[] = is_object($arrayOfEnvelopeDocumentEnvelopeDocumentItem) ? get_class($arrayOfEnvelopeDocumentEnvelopeDocumentItem) : sprintf('%s(%s)', gettype($arrayOfEnvelopeDocumentEnvelopeDocumentItem), var_export($arrayOfEnvelopeDocumentEnvelopeDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EnvelopeDocument property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EnvelopeDocument value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocument[] $envelopeDocument
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument
     */
    public function setEnvelopeDocument(array $envelopeDocument = array())
    {
        // validation for constraint: array
        if ('' !== ($envelopeDocumentArrayErrorMessage = self::validateEnvelopeDocumentForArrayConstraintsFromSetEnvelopeDocument($envelopeDocument))) {
            throw new \InvalidArgumentException($envelopeDocumentArrayErrorMessage, __LINE__);
        }
        if (is_null($envelopeDocument) || (is_array($envelopeDocument) && empty($envelopeDocument))) {
            unset($this->EnvelopeDocument);
        } else {
            $this->EnvelopeDocument = $envelopeDocument;
        }
        return $this;
    }
    /**
     * Add item to EnvelopeDocument value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocument $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument
     */
    public function addToEnvelopeDocument(\Nmusco\AssureSign\v2\StructType\EnvelopeDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeDocument) {
            throw new \InvalidArgumentException(sprintf('The EnvelopeDocument property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EnvelopeDocument[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocument|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnvelopeDocument
     */
    public function getAttributeName()
    {
        return 'EnvelopeDocument';
    }
}
