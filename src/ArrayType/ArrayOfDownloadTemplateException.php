<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDownloadTemplateException ArrayType
 * @subpackage Arrays
 */
class ArrayOfDownloadTemplateException extends AbstractStructArrayBase
{
    /**
     * The DownloadTemplateException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DownloadTemplateException[]
     */
    public $DownloadTemplateException;
    /**
     * Constructor method for ArrayOfDownloadTemplateException
     * @uses ArrayOfDownloadTemplateException::setDownloadTemplateException()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadTemplateException[] $downloadTemplateException
     */
    public function __construct(array $downloadTemplateException = array())
    {
        $this
            ->setDownloadTemplateException($downloadTemplateException);
    }
    /**
     * Get DownloadTemplateException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateException[]|null
     */
    public function getDownloadTemplateException()
    {
        return isset($this->DownloadTemplateException) ? $this->DownloadTemplateException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDownloadTemplateException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDownloadTemplateException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDownloadTemplateExceptionForArrayConstraintsFromSetDownloadTemplateException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDownloadTemplateExceptionDownloadTemplateExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDownloadTemplateExceptionDownloadTemplateExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\DownloadTemplateException) {
                $invalidValues[] = is_object($arrayOfDownloadTemplateExceptionDownloadTemplateExceptionItem) ? get_class($arrayOfDownloadTemplateExceptionDownloadTemplateExceptionItem) : sprintf('%s(%s)', gettype($arrayOfDownloadTemplateExceptionDownloadTemplateExceptionItem), var_export($arrayOfDownloadTemplateExceptionDownloadTemplateExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DownloadTemplateException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DownloadTemplateException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DownloadTemplateException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DownloadTemplateException[] $downloadTemplateException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException
     */
    public function setDownloadTemplateException(array $downloadTemplateException = array())
    {
        // validation for constraint: array
        if ('' !== ($downloadTemplateExceptionArrayErrorMessage = self::validateDownloadTemplateExceptionForArrayConstraintsFromSetDownloadTemplateException($downloadTemplateException))) {
            throw new \InvalidArgumentException($downloadTemplateExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($downloadTemplateException) || (is_array($downloadTemplateException) && empty($downloadTemplateException))) {
            unset($this->DownloadTemplateException);
        } else {
            $this->DownloadTemplateException = $downloadTemplateException;
        }
        return $this;
    }
    /**
     * Add item to DownloadTemplateException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DownloadTemplateException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDownloadTemplateException
     */
    public function addToDownloadTemplateException(\Nmusco\AssureSign\v2\StructType\DownloadTemplateException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DownloadTemplateException) {
            throw new \InvalidArgumentException(sprintf('The DownloadTemplateException property can only contain items of type \Nmusco\AssureSign\v2\StructType\DownloadTemplateException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DownloadTemplateException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DownloadTemplateException
     */
    public function getAttributeName()
    {
        return 'DownloadTemplateException';
    }
}
