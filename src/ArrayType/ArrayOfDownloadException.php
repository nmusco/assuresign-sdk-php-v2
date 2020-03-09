<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDownloadException ArrayType
 * @subpackage Arrays
 */
class ArrayOfDownloadException extends AbstractStructArrayBase
{
    /**
     * The DownloadException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DownloadException[]
     */
    public $DownloadException;
    /**
     * Constructor method for ArrayOfDownloadException
     * @uses ArrayOfDownloadException::setDownloadException()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadException[] $downloadException
     */
    public function __construct(array $downloadException = array())
    {
        $this
            ->setDownloadException($downloadException);
    }
    /**
     * Get DownloadException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DownloadException[]|null
     */
    public function getDownloadException()
    {
        return isset($this->DownloadException) ? $this->DownloadException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDownloadException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDownloadException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDownloadExceptionForArrayConstraintsFromSetDownloadException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDownloadExceptionDownloadExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDownloadExceptionDownloadExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\DownloadException) {
                $invalidValues[] = is_object($arrayOfDownloadExceptionDownloadExceptionItem) ? get_class($arrayOfDownloadExceptionDownloadExceptionItem) : sprintf('%s(%s)', gettype($arrayOfDownloadExceptionDownloadExceptionItem), var_export($arrayOfDownloadExceptionDownloadExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DownloadException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DownloadException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DownloadException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DownloadException[] $downloadException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException
     */
    public function setDownloadException(array $downloadException = array())
    {
        // validation for constraint: array
        if ('' !== ($downloadExceptionArrayErrorMessage = self::validateDownloadExceptionForArrayConstraintsFromSetDownloadException($downloadException))) {
            throw new \InvalidArgumentException($downloadExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($downloadException) || (is_array($downloadException) && empty($downloadException))) {
            unset($this->DownloadException);
        } else {
            $this->DownloadException = $downloadException;
        }
        return $this;
    }
    /**
     * Add item to DownloadException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DownloadException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException
     */
    public function addToDownloadException(\Nmusco\AssureSign\v2\StructType\DownloadException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DownloadException) {
            throw new \InvalidArgumentException(sprintf('The DownloadException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DownloadException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DownloadException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DownloadException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DownloadException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DownloadException
     */
    public function getAttributeName()
    {
        return 'DownloadException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadException
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
