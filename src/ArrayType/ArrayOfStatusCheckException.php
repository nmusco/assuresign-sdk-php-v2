<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStatusCheckException ArrayType
 * @subpackage Arrays
 */
class ArrayOfStatusCheckException extends AbstractStructArrayBase
{
    /**
     * The StatusCheckException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\StatusCheckException[]
     */
    public $StatusCheckException;
    /**
     * Constructor method for ArrayOfStatusCheckException
     * @uses ArrayOfStatusCheckException::setStatusCheckException()
     * @param \Nmusco\AssureSign\v2\StructType\StatusCheckException[] $statusCheckException
     */
    public function __construct(array $statusCheckException = array())
    {
        $this
            ->setStatusCheckException($statusCheckException);
    }
    /**
     * Get StatusCheckException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\StatusCheckException[]|null
     */
    public function getStatusCheckException()
    {
        return isset($this->StatusCheckException) ? $this->StatusCheckException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStatusCheckException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusCheckException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusCheckExceptionForArrayConstraintsFromSetStatusCheckException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStatusCheckExceptionStatusCheckExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfStatusCheckExceptionStatusCheckExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\StatusCheckException) {
                $invalidValues[] = is_object($arrayOfStatusCheckExceptionStatusCheckExceptionItem) ? get_class($arrayOfStatusCheckExceptionStatusCheckExceptionItem) : sprintf('%s(%s)', gettype($arrayOfStatusCheckExceptionStatusCheckExceptionItem), var_export($arrayOfStatusCheckExceptionStatusCheckExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StatusCheckException property can only contain items of type \Nmusco\AssureSign\v2\StructType\StatusCheckException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StatusCheckException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\StatusCheckException[] $statusCheckException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException
     */
    public function setStatusCheckException(array $statusCheckException = array())
    {
        // validation for constraint: array
        if ('' !== ($statusCheckExceptionArrayErrorMessage = self::validateStatusCheckExceptionForArrayConstraintsFromSetStatusCheckException($statusCheckException))) {
            throw new \InvalidArgumentException($statusCheckExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($statusCheckException) || (is_array($statusCheckException) && empty($statusCheckException))) {
            unset($this->StatusCheckException);
        } else {
            $this->StatusCheckException = $statusCheckException;
        }
        return $this;
    }
    /**
     * Add item to StatusCheckException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\StatusCheckException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException
     */
    public function addToStatusCheckException(\Nmusco\AssureSign\v2\StructType\StatusCheckException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\StatusCheckException) {
            throw new \InvalidArgumentException(sprintf('The StatusCheckException property can only contain items of type \Nmusco\AssureSign\v2\StructType\StatusCheckException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StatusCheckException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\StatusCheckException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\StatusCheckException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\StatusCheckException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\StatusCheckException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\StatusCheckException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StatusCheckException
     */
    public function getAttributeName()
    {
        return 'StatusCheckException';
    }
}
