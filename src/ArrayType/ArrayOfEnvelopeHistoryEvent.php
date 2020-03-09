<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnvelopeHistoryEvent ArrayType
 * @subpackage Arrays
 */
class ArrayOfEnvelopeHistoryEvent extends AbstractStructArrayBase
{
    /**
     * The EnvelopeHistoryEvent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent[]
     */
    public $EnvelopeHistoryEvent;
    /**
     * Constructor method for ArrayOfEnvelopeHistoryEvent
     * @uses ArrayOfEnvelopeHistoryEvent::setEnvelopeHistoryEvent()
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent[] $envelopeHistoryEvent
     */
    public function __construct(array $envelopeHistoryEvent = array())
    {
        $this
            ->setEnvelopeHistoryEvent($envelopeHistoryEvent);
    }
    /**
     * Get EnvelopeHistoryEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent[]|null
     */
    public function getEnvelopeHistoryEvent()
    {
        return isset($this->EnvelopeHistoryEvent) ? $this->EnvelopeHistoryEvent : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeHistoryEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeHistoryEvent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeHistoryEventForArrayConstraintsFromSetEnvelopeHistoryEvent(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEnvelopeHistoryEventEnvelopeHistoryEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnvelopeHistoryEventEnvelopeHistoryEventItem instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent) {
                $invalidValues[] = is_object($arrayOfEnvelopeHistoryEventEnvelopeHistoryEventItem) ? get_class($arrayOfEnvelopeHistoryEventEnvelopeHistoryEventItem) : sprintf('%s(%s)', gettype($arrayOfEnvelopeHistoryEventEnvelopeHistoryEventItem), var_export($arrayOfEnvelopeHistoryEventEnvelopeHistoryEventItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EnvelopeHistoryEvent property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EnvelopeHistoryEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent[] $envelopeHistoryEvent
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent
     */
    public function setEnvelopeHistoryEvent(array $envelopeHistoryEvent = array())
    {
        // validation for constraint: array
        if ('' !== ($envelopeHistoryEventArrayErrorMessage = self::validateEnvelopeHistoryEventForArrayConstraintsFromSetEnvelopeHistoryEvent($envelopeHistoryEvent))) {
            throw new \InvalidArgumentException($envelopeHistoryEventArrayErrorMessage, __LINE__);
        }
        if (is_null($envelopeHistoryEvent) || (is_array($envelopeHistoryEvent) && empty($envelopeHistoryEvent))) {
            unset($this->EnvelopeHistoryEvent);
        } else {
            $this->EnvelopeHistoryEvent = $envelopeHistoryEvent;
        }
        return $this;
    }
    /**
     * Add item to EnvelopeHistoryEvent value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent
     */
    public function addToEnvelopeHistoryEvent(\Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent) {
            throw new \InvalidArgumentException(sprintf('The EnvelopeHistoryEvent property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EnvelopeHistoryEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeHistoryEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnvelopeHistoryEvent
     */
    public function getAttributeName()
    {
        return 'EnvelopeHistoryEvent';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeHistoryEvent
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
