<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSessionLookup ArrayType
 * @subpackage Arrays
 */
class ArrayOfSessionLookup extends AbstractStructArrayBase
{
    /**
     * The SessionLookup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SessionLookup[]
     */
    public $SessionLookup;
    /**
     * Constructor method for ArrayOfSessionLookup
     * @uses ArrayOfSessionLookup::setSessionLookup()
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookup[] $sessionLookup
     */
    public function __construct(array $sessionLookup = array())
    {
        $this
            ->setSessionLookup($sessionLookup);
    }
    /**
     * Get SessionLookup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookup[]|null
     */
    public function getSessionLookup()
    {
        return isset($this->SessionLookup) ? $this->SessionLookup : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSessionLookup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessionLookup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSessionLookupForArrayConstraintsFromSetSessionLookup(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSessionLookupSessionLookupItem) {
            // validation for constraint: itemType
            if (!$arrayOfSessionLookupSessionLookupItem instanceof \Nmusco\AssureSign\v2\StructType\SessionLookup) {
                $invalidValues[] = is_object($arrayOfSessionLookupSessionLookupItem) ? get_class($arrayOfSessionLookupSessionLookupItem) : sprintf('%s(%s)', gettype($arrayOfSessionLookupSessionLookupItem), var_export($arrayOfSessionLookupSessionLookupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SessionLookup property can only contain items of type \Nmusco\AssureSign\v2\StructType\SessionLookup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SessionLookup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookup[] $sessionLookup
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup
     */
    public function setSessionLookup(array $sessionLookup = array())
    {
        // validation for constraint: array
        if ('' !== ($sessionLookupArrayErrorMessage = self::validateSessionLookupForArrayConstraintsFromSetSessionLookup($sessionLookup))) {
            throw new \InvalidArgumentException($sessionLookupArrayErrorMessage, __LINE__);
        }
        if (is_null($sessionLookup) || (is_array($sessionLookup) && empty($sessionLookup))) {
            unset($this->SessionLookup);
        } else {
            $this->SessionLookup = $sessionLookup;
        }
        return $this;
    }
    /**
     * Add item to SessionLookup value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookup $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup
     */
    public function addToSessionLookup(\Nmusco\AssureSign\v2\StructType\SessionLookup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SessionLookup) {
            throw new \InvalidArgumentException(sprintf('The SessionLookup property can only contain items of type \Nmusco\AssureSign\v2\StructType\SessionLookup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SessionLookup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SessionLookup
     */
    public function getAttributeName()
    {
        return 'SessionLookup';
    }
}
