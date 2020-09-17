<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLinkException ArrayType
 * @subpackage Arrays
 */
class ArrayOfLinkException extends AbstractStructArrayBase
{
    /**
     * The LinkException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\LinkException[]
     */
    public $LinkException;
    /**
     * Constructor method for ArrayOfLinkException
     * @uses ArrayOfLinkException::setLinkException()
     * @param \Nmusco\AssureSign\v2\StructType\LinkException[] $linkException
     */
    public function __construct(array $linkException = array())
    {
        $this
            ->setLinkException($linkException);
    }
    /**
     * Get LinkException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\LinkException[]|null
     */
    public function getLinkException()
    {
        return isset($this->LinkException) ? $this->LinkException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLinkException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLinkException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLinkExceptionForArrayConstraintsFromSetLinkException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLinkExceptionLinkExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfLinkExceptionLinkExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\LinkException) {
                $invalidValues[] = is_object($arrayOfLinkExceptionLinkExceptionItem) ? get_class($arrayOfLinkExceptionLinkExceptionItem) : sprintf('%s(%s)', gettype($arrayOfLinkExceptionLinkExceptionItem), var_export($arrayOfLinkExceptionLinkExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkException property can only contain items of type \Nmusco\AssureSign\v2\StructType\LinkException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LinkException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\LinkException[] $linkException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException
     */
    public function setLinkException(array $linkException = array())
    {
        // validation for constraint: array
        if ('' !== ($linkExceptionArrayErrorMessage = self::validateLinkExceptionForArrayConstraintsFromSetLinkException($linkException))) {
            throw new \InvalidArgumentException($linkExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($linkException) || (is_array($linkException) && empty($linkException))) {
            unset($this->LinkException);
        } else {
            $this->LinkException = $linkException;
        }
        return $this;
    }
    /**
     * Add item to LinkException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\LinkException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfLinkException
     */
    public function addToLinkException(\Nmusco\AssureSign\v2\StructType\LinkException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\LinkException) {
            throw new \InvalidArgumentException(sprintf('The LinkException property can only contain items of type \Nmusco\AssureSign\v2\StructType\LinkException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LinkException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\LinkException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\LinkException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\LinkException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\LinkException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\LinkException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LinkException
     */
    public function getAttributeName()
    {
        return 'LinkException';
    }
}
