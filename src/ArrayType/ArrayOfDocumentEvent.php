<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentEvent ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentEvent extends AbstractStructArrayBase
{
    /**
     * The DocumentEvent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentEvent[]
     */
    public $DocumentEvent;
    /**
     * Constructor method for ArrayOfDocumentEvent
     * @uses ArrayOfDocumentEvent::setDocumentEvent()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentEvent[] $documentEvent
     */
    public function __construct(array $documentEvent = array())
    {
        $this
            ->setDocumentEvent($documentEvent);
    }
    /**
     * Get DocumentEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent[]|null
     */
    public function getDocumentEvent()
    {
        return isset($this->DocumentEvent) ? $this->DocumentEvent : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentEvent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentEventForArrayConstraintsFromSetDocumentEvent(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentEventDocumentEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentEventDocumentEventItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentEvent) {
                $invalidValues[] = is_object($arrayOfDocumentEventDocumentEventItem) ? get_class($arrayOfDocumentEventDocumentEventItem) : sprintf('%s(%s)', gettype($arrayOfDocumentEventDocumentEventItem), var_export($arrayOfDocumentEventDocumentEventItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentEvent property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentEvent[] $documentEvent
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent
     */
    public function setDocumentEvent(array $documentEvent = array())
    {
        // validation for constraint: array
        if ('' !== ($documentEventArrayErrorMessage = self::validateDocumentEventForArrayConstraintsFromSetDocumentEvent($documentEvent))) {
            throw new \InvalidArgumentException($documentEventArrayErrorMessage, __LINE__);
        }
        if (is_null($documentEvent) || (is_array($documentEvent) && empty($documentEvent))) {
            unset($this->DocumentEvent);
        } else {
            $this->DocumentEvent = $documentEvent;
        }
        return $this;
    }
    /**
     * Add item to DocumentEvent value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentEvent $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent
     */
    public function addToDocumentEvent(\Nmusco\AssureSign\v2\StructType\DocumentEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentEvent) {
            throw new \InvalidArgumentException(sprintf('The DocumentEvent property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentEvent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentEvent
     */
    public function getAttributeName()
    {
        return 'DocumentEvent';
    }
}
