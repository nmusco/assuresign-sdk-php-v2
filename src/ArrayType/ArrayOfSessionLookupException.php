<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSessionLookupException ArrayType
 * @subpackage Arrays
 */
class ArrayOfSessionLookupException extends AbstractStructArrayBase
{
    /**
     * The SessionLookupException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SessionLookupException[]
     */
    public $SessionLookupException;
    /**
     * Constructor method for ArrayOfSessionLookupException
     * @uses ArrayOfSessionLookupException::setSessionLookupException()
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookupException[] $sessionLookupException
     */
    public function __construct(array $sessionLookupException = array())
    {
        $this
            ->setSessionLookupException($sessionLookupException);
    }
    /**
     * Get SessionLookupException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupException[]|null
     */
    public function getSessionLookupException()
    {
        return isset($this->SessionLookupException) ? $this->SessionLookupException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSessionLookupException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessionLookupException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSessionLookupExceptionForArrayConstraintsFromSetSessionLookupException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSessionLookupExceptionSessionLookupExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSessionLookupExceptionSessionLookupExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\SessionLookupException) {
                $invalidValues[] = is_object($arrayOfSessionLookupExceptionSessionLookupExceptionItem) ? get_class($arrayOfSessionLookupExceptionSessionLookupExceptionItem) : sprintf('%s(%s)', gettype($arrayOfSessionLookupExceptionSessionLookupExceptionItem), var_export($arrayOfSessionLookupExceptionSessionLookupExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SessionLookupException property can only contain items of type \Nmusco\AssureSign\v2\StructType\SessionLookupException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SessionLookupException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookupException[] $sessionLookupException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException
     */
    public function setSessionLookupException(array $sessionLookupException = array())
    {
        // validation for constraint: array
        if ('' !== ($sessionLookupExceptionArrayErrorMessage = self::validateSessionLookupExceptionForArrayConstraintsFromSetSessionLookupException($sessionLookupException))) {
            throw new \InvalidArgumentException($sessionLookupExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($sessionLookupException) || (is_array($sessionLookupException) && empty($sessionLookupException))) {
            unset($this->SessionLookupException);
        } else {
            $this->SessionLookupException = $sessionLookupException;
        }
        return $this;
    }
    /**
     * Add item to SessionLookupException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SessionLookupException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupException
     */
    public function addToSessionLookupException(\Nmusco\AssureSign\v2\StructType\SessionLookupException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SessionLookupException) {
            throw new \InvalidArgumentException(sprintf('The SessionLookupException property can only contain items of type \Nmusco\AssureSign\v2\StructType\SessionLookupException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SessionLookupException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SessionLookupException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SessionLookupException
     */
    public function getAttributeName()
    {
        return 'SessionLookupException';
    }
}
