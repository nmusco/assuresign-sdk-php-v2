<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfValidateDocumentException ArrayType
 * @subpackage Arrays
 */
class ArrayOfValidateDocumentException extends AbstractStructArrayBase
{
    /**
     * The ValidateDocumentException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ValidateDocumentException[]
     */
    public $ValidateDocumentException;
    /**
     * Constructor method for ArrayOfValidateDocumentException
     * @uses ArrayOfValidateDocumentException::setValidateDocumentException()
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentException[] $validateDocumentException
     */
    public function __construct(array $validateDocumentException = array())
    {
        $this
            ->setValidateDocumentException($validateDocumentException);
    }
    /**
     * Get ValidateDocumentException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentException[]|null
     */
    public function getValidateDocumentException()
    {
        return isset($this->ValidateDocumentException) ? $this->ValidateDocumentException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setValidateDocumentException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidateDocumentException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidateDocumentExceptionForArrayConstraintsFromSetValidateDocumentException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfValidateDocumentExceptionValidateDocumentExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfValidateDocumentExceptionValidateDocumentExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\ValidateDocumentException) {
                $invalidValues[] = is_object($arrayOfValidateDocumentExceptionValidateDocumentExceptionItem) ? get_class($arrayOfValidateDocumentExceptionValidateDocumentExceptionItem) : sprintf('%s(%s)', gettype($arrayOfValidateDocumentExceptionValidateDocumentExceptionItem), var_export($arrayOfValidateDocumentExceptionValidateDocumentExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValidateDocumentException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ValidateDocumentException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ValidateDocumentException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentException[] $validateDocumentException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException
     */
    public function setValidateDocumentException(array $validateDocumentException = array())
    {
        // validation for constraint: array
        if ('' !== ($validateDocumentExceptionArrayErrorMessage = self::validateValidateDocumentExceptionForArrayConstraintsFromSetValidateDocumentException($validateDocumentException))) {
            throw new \InvalidArgumentException($validateDocumentExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($validateDocumentException) || (is_array($validateDocumentException) && empty($validateDocumentException))) {
            unset($this->ValidateDocumentException);
        } else {
            $this->ValidateDocumentException = $validateDocumentException;
        }
        return $this;
    }
    /**
     * Add item to ValidateDocumentException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocumentException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException
     */
    public function addToValidateDocumentException(\Nmusco\AssureSign\v2\StructType\ValidateDocumentException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ValidateDocumentException) {
            throw new \InvalidArgumentException(sprintf('The ValidateDocumentException property can only contain items of type \Nmusco\AssureSign\v2\StructType\ValidateDocumentException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValidateDocumentException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ValidateDocumentException
     */
    public function getAttributeName()
    {
        return 'ValidateDocumentException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfValidateDocumentException
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
