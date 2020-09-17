<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSessionLookupResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfSessionLookupResult extends AbstractStructArrayBase
{
    /**
     * The SessionLookupResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SessionLookupResult[]
     */
    public $SessionLookupResult;
    /**
     * Constructor method for ArrayOfSessionLookupResult
     * @uses ArrayOfSessionLookupResult::setSessionLookupResult()
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookupResult[] $sessionLookupResult
     */
    public function __construct(array $sessionLookupResult = array())
    {
        $this
            ->setSessionLookupResult($sessionLookupResult);
    }
    /**
     * Get SessionLookupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult[]|null
     */
    public function getSessionLookupResult()
    {
        return isset($this->SessionLookupResult) ? $this->SessionLookupResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSessionLookupResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessionLookupResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSessionLookupResultForArrayConstraintsFromSetSessionLookupResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSessionLookupResultSessionLookupResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSessionLookupResultSessionLookupResultItem instanceof \Nmusco\AssureSign\v2\StructType\SessionLookupResult) {
                $invalidValues[] = is_object($arrayOfSessionLookupResultSessionLookupResultItem) ? get_class($arrayOfSessionLookupResultSessionLookupResultItem) : sprintf('%s(%s)', gettype($arrayOfSessionLookupResultSessionLookupResultItem), var_export($arrayOfSessionLookupResultSessionLookupResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SessionLookupResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\SessionLookupResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SessionLookupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookupResult[] $sessionLookupResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult
     */
    public function setSessionLookupResult(array $sessionLookupResult = array())
    {
        // validation for constraint: array
        if ('' !== ($sessionLookupResultArrayErrorMessage = self::validateSessionLookupResultForArrayConstraintsFromSetSessionLookupResult($sessionLookupResult))) {
            throw new \InvalidArgumentException($sessionLookupResultArrayErrorMessage, __LINE__);
        }
        if (is_null($sessionLookupResult) || (is_array($sessionLookupResult) && empty($sessionLookupResult))) {
            unset($this->SessionLookupResult);
        } else {
            $this->SessionLookupResult = $sessionLookupResult;
        }
        return $this;
    }
    /**
     * Add item to SessionLookupResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookupResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult
     */
    public function addToSessionLookupResult(\Nmusco\AssureSign\v2\StructType\SessionLookupResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SessionLookupResult) {
            throw new \InvalidArgumentException(sprintf('The SessionLookupResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\SessionLookupResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SessionLookupResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SessionLookupResult
     */
    public function getAttributeName()
    {
        return 'SessionLookupResult';
    }
}
