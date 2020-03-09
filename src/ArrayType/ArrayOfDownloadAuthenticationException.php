<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDownloadAuthenticationException ArrayType
 * @subpackage Arrays
 */
class ArrayOfDownloadAuthenticationException extends AbstractStructArrayBase
{
    /**
     * The DownloadAuthenticationException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException[]
     */
    public $DownloadAuthenticationException;
    /**
     * Constructor method for ArrayOfDownloadAuthenticationException
     * @uses ArrayOfDownloadAuthenticationException::setDownloadAuthenticationException()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException[] $downloadAuthenticationException
     */
    public function __construct(array $downloadAuthenticationException = array())
    {
        $this
            ->setDownloadAuthenticationException($downloadAuthenticationException);
    }
    /**
     * Get DownloadAuthenticationException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException[]|null
     */
    public function getDownloadAuthenticationException()
    {
        return isset($this->DownloadAuthenticationException) ? $this->DownloadAuthenticationException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDownloadAuthenticationException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDownloadAuthenticationException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDownloadAuthenticationExceptionForArrayConstraintsFromSetDownloadAuthenticationException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDownloadAuthenticationExceptionDownloadAuthenticationExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDownloadAuthenticationExceptionDownloadAuthenticationExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException) {
                $invalidValues[] = is_object($arrayOfDownloadAuthenticationExceptionDownloadAuthenticationExceptionItem) ? get_class($arrayOfDownloadAuthenticationExceptionDownloadAuthenticationExceptionItem) : sprintf('%s(%s)', gettype($arrayOfDownloadAuthenticationExceptionDownloadAuthenticationExceptionItem), var_export($arrayOfDownloadAuthenticationExceptionDownloadAuthenticationExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DownloadAuthenticationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DownloadAuthenticationException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException[] $downloadAuthenticationException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadAuthenticationException
     */
    public function setDownloadAuthenticationException(array $downloadAuthenticationException = array())
    {
        // validation for constraint: array
        if ('' !== ($downloadAuthenticationExceptionArrayErrorMessage = self::validateDownloadAuthenticationExceptionForArrayConstraintsFromSetDownloadAuthenticationException($downloadAuthenticationException))) {
            throw new \InvalidArgumentException($downloadAuthenticationExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($downloadAuthenticationException) || (is_array($downloadAuthenticationException) && empty($downloadAuthenticationException))) {
            unset($this->DownloadAuthenticationException);
        } else {
            $this->DownloadAuthenticationException = $downloadAuthenticationException;
        }
        return $this;
    }
    /**
     * Add item to DownloadAuthenticationException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadAuthenticationException
     */
    public function addToDownloadAuthenticationException(\Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException) {
            throw new \InvalidArgumentException(sprintf('The DownloadAuthenticationException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DownloadAuthenticationException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DownloadAuthenticationException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DownloadAuthenticationException
     */
    public function getAttributeName()
    {
        return 'DownloadAuthenticationException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadAuthenticationException
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
