<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResendNotificationException ArrayType
 * @subpackage Arrays
 */
class ArrayOfResendNotificationException extends AbstractStructArrayBase
{
    /**
     * The ResendNotificationException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ResendNotificationException[]
     */
    public $ResendNotificationException;
    /**
     * Constructor method for ArrayOfResendNotificationException
     * @uses ArrayOfResendNotificationException::setResendNotificationException()
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationException[] $resendNotificationException
     */
    public function __construct(array $resendNotificationException = array())
    {
        $this
            ->setResendNotificationException($resendNotificationException);
    }
    /**
     * Get ResendNotificationException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationException[]|null
     */
    public function getResendNotificationException()
    {
        return isset($this->ResendNotificationException) ? $this->ResendNotificationException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResendNotificationException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResendNotificationException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResendNotificationExceptionForArrayConstraintsFromSetResendNotificationException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResendNotificationExceptionResendNotificationExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfResendNotificationExceptionResendNotificationExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\ResendNotificationException) {
                $invalidValues[] = is_object($arrayOfResendNotificationExceptionResendNotificationExceptionItem) ? get_class($arrayOfResendNotificationExceptionResendNotificationExceptionItem) : sprintf('%s(%s)', gettype($arrayOfResendNotificationExceptionResendNotificationExceptionItem), var_export($arrayOfResendNotificationExceptionResendNotificationExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResendNotificationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ResendNotificationException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ResendNotificationException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationException[] $resendNotificationException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationException
     */
    public function setResendNotificationException(array $resendNotificationException = array())
    {
        // validation for constraint: array
        if ('' !== ($resendNotificationExceptionArrayErrorMessage = self::validateResendNotificationExceptionForArrayConstraintsFromSetResendNotificationException($resendNotificationException))) {
            throw new \InvalidArgumentException($resendNotificationExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($resendNotificationException) || (is_array($resendNotificationException) && empty($resendNotificationException))) {
            unset($this->ResendNotificationException);
        } else {
            $this->ResendNotificationException = $resendNotificationException;
        }
        return $this;
    }
    /**
     * Add item to ResendNotificationException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationException
     */
    public function addToResendNotificationException(\Nmusco\AssureSign\v2\StructType\ResendNotificationException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ResendNotificationException) {
            throw new \InvalidArgumentException(sprintf('The ResendNotificationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ResendNotificationException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ResendNotificationException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ResendNotificationException
     */
    public function getAttributeName()
    {
        return 'ResendNotificationException';
    }
}
