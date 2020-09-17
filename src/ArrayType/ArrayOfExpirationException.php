<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExpirationException ArrayType
 * @subpackage Arrays
 */
class ArrayOfExpirationException extends AbstractStructArrayBase
{
    /**
     * The ExpirationException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ExpirationException[]
     */
    public $ExpirationException;
    /**
     * Constructor method for ArrayOfExpirationException
     * @uses ArrayOfExpirationException::setExpirationException()
     * @param \Nmusco\AssureSign\v2\StructType\ExpirationException[] $expirationException
     */
    public function __construct(array $expirationException = array())
    {
        $this
            ->setExpirationException($expirationException);
    }
    /**
     * Get ExpirationException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ExpirationException[]|null
     */
    public function getExpirationException()
    {
        return isset($this->ExpirationException) ? $this->ExpirationException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setExpirationException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExpirationException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExpirationExceptionForArrayConstraintsFromSetExpirationException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExpirationExceptionExpirationExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfExpirationExceptionExpirationExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\ExpirationException) {
                $invalidValues[] = is_object($arrayOfExpirationExceptionExpirationExceptionItem) ? get_class($arrayOfExpirationExceptionExpirationExceptionItem) : sprintf('%s(%s)', gettype($arrayOfExpirationExceptionExpirationExceptionItem), var_export($arrayOfExpirationExceptionExpirationExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExpirationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ExpirationException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExpirationException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ExpirationException[] $expirationException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfExpirationException
     */
    public function setExpirationException(array $expirationException = array())
    {
        // validation for constraint: array
        if ('' !== ($expirationExceptionArrayErrorMessage = self::validateExpirationExceptionForArrayConstraintsFromSetExpirationException($expirationException))) {
            throw new \InvalidArgumentException($expirationExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($expirationException) || (is_array($expirationException) && empty($expirationException))) {
            unset($this->ExpirationException);
        } else {
            $this->ExpirationException = $expirationException;
        }
        return $this;
    }
    /**
     * Add item to ExpirationException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ExpirationException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfExpirationException
     */
    public function addToExpirationException(\Nmusco\AssureSign\v2\StructType\ExpirationException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ExpirationException) {
            throw new \InvalidArgumentException(sprintf('The ExpirationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ExpirationException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExpirationException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ExpirationException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ExpirationException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ExpirationException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ExpirationException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ExpirationException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExpirationException
     */
    public function getAttributeName()
    {
        return 'ExpirationException';
    }
}
