<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnvelopeDocumentHistoryEvent ArrayType
 * @subpackage Arrays
 */
class ArrayOfEnvelopeDocumentHistoryEvent extends AbstractStructArrayBase
{
    /**
     * The EnvelopeDocumentHistoryEvent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent[]
     */
    public $EnvelopeDocumentHistoryEvent;
    /**
     * Constructor method for ArrayOfEnvelopeDocumentHistoryEvent
     * @uses ArrayOfEnvelopeDocumentHistoryEvent::setEnvelopeDocumentHistoryEvent()
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent[] $envelopeDocumentHistoryEvent
     */
    public function __construct(array $envelopeDocumentHistoryEvent = array())
    {
        $this
            ->setEnvelopeDocumentHistoryEvent($envelopeDocumentHistoryEvent);
    }
    /**
     * Get EnvelopeDocumentHistoryEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent[]|null
     */
    public function getEnvelopeDocumentHistoryEvent()
    {
        return isset($this->EnvelopeDocumentHistoryEvent) ? $this->EnvelopeDocumentHistoryEvent : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeDocumentHistoryEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeDocumentHistoryEvent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeDocumentHistoryEventForArrayConstraintsFromSetEnvelopeDocumentHistoryEvent(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEnvelopeDocumentHistoryEventEnvelopeDocumentHistoryEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnvelopeDocumentHistoryEventEnvelopeDocumentHistoryEventItem instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent) {
                $invalidValues[] = is_object($arrayOfEnvelopeDocumentHistoryEventEnvelopeDocumentHistoryEventItem) ? get_class($arrayOfEnvelopeDocumentHistoryEventEnvelopeDocumentHistoryEventItem) : sprintf('%s(%s)', gettype($arrayOfEnvelopeDocumentHistoryEventEnvelopeDocumentHistoryEventItem), var_export($arrayOfEnvelopeDocumentHistoryEventEnvelopeDocumentHistoryEventItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EnvelopeDocumentHistoryEvent property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EnvelopeDocumentHistoryEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent[] $envelopeDocumentHistoryEvent
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent
     */
    public function setEnvelopeDocumentHistoryEvent(array $envelopeDocumentHistoryEvent = array())
    {
        // validation for constraint: array
        if ('' !== ($envelopeDocumentHistoryEventArrayErrorMessage = self::validateEnvelopeDocumentHistoryEventForArrayConstraintsFromSetEnvelopeDocumentHistoryEvent($envelopeDocumentHistoryEvent))) {
            throw new \InvalidArgumentException($envelopeDocumentHistoryEventArrayErrorMessage, __LINE__);
        }
        if (is_null($envelopeDocumentHistoryEvent) || (is_array($envelopeDocumentHistoryEvent) && empty($envelopeDocumentHistoryEvent))) {
            unset($this->EnvelopeDocumentHistoryEvent);
        } else {
            $this->EnvelopeDocumentHistoryEvent = $envelopeDocumentHistoryEvent;
        }
        return $this;
    }
    /**
     * Add item to EnvelopeDocumentHistoryEvent value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent
     */
    public function addToEnvelopeDocumentHistoryEvent(\Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent) {
            throw new \InvalidArgumentException(sprintf('The EnvelopeDocumentHistoryEvent property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EnvelopeDocumentHistoryEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentHistoryEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnvelopeDocumentHistoryEvent
     */
    public function getAttributeName()
    {
        return 'EnvelopeDocumentHistoryEvent';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocumentHistoryEvent
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
