<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTemplateListException ArrayType
 * @subpackage Arrays
 */
class ArrayOfTemplateListException extends AbstractStructArrayBase
{
    /**
     * The TemplateListException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TemplateListException[]
     */
    public $TemplateListException;
    /**
     * Constructor method for ArrayOfTemplateListException
     * @uses ArrayOfTemplateListException::setTemplateListException()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListException[] $templateListException
     */
    public function __construct(array $templateListException = array())
    {
        $this
            ->setTemplateListException($templateListException);
    }
    /**
     * Get TemplateListException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListException[]|null
     */
    public function getTemplateListException()
    {
        return isset($this->TemplateListException) ? $this->TemplateListException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplateListException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplateListException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplateListExceptionForArrayConstraintsFromSetTemplateListException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTemplateListExceptionTemplateListExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTemplateListExceptionTemplateListExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\TemplateListException) {
                $invalidValues[] = is_object($arrayOfTemplateListExceptionTemplateListExceptionItem) ? get_class($arrayOfTemplateListExceptionTemplateListExceptionItem) : sprintf('%s(%s)', gettype($arrayOfTemplateListExceptionTemplateListExceptionItem), var_export($arrayOfTemplateListExceptionTemplateListExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TemplateListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\TemplateListException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TemplateListException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListException[] $templateListException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException
     */
    public function setTemplateListException(array $templateListException = array())
    {
        // validation for constraint: array
        if ('' !== ($templateListExceptionArrayErrorMessage = self::validateTemplateListExceptionForArrayConstraintsFromSetTemplateListException($templateListException))) {
            throw new \InvalidArgumentException($templateListExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($templateListException) || (is_array($templateListException) && empty($templateListException))) {
            unset($this->TemplateListException);
        } else {
            $this->TemplateListException = $templateListException;
        }
        return $this;
    }
    /**
     * Add item to TemplateListException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TemplateListException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateListException
     */
    public function addToTemplateListException(\Nmusco\AssureSign\v2\StructType\TemplateListException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\TemplateListException) {
            throw new \InvalidArgumentException(sprintf('The TemplateListException property can only contain items of type \Nmusco\AssureSign\v2\StructType\TemplateListException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TemplateListException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\TemplateListException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TemplateListException
     */
    public function getAttributeName()
    {
        return 'TemplateListException';
    }
}
