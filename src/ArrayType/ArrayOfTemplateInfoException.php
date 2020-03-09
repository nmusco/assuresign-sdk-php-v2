<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTemplateInfoException ArrayType
 * @subpackage Arrays
 */
class ArrayOfTemplateInfoException extends AbstractStructArrayBase
{
    /**
     * The TemplateInfoException
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TemplateInfoException[]
     */
    public $TemplateInfoException;
    /**
     * Constructor method for ArrayOfTemplateInfoException
     * @uses ArrayOfTemplateInfoException::setTemplateInfoException()
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoException[] $templateInfoException
     */
    public function __construct(array $templateInfoException = array())
    {
        $this
            ->setTemplateInfoException($templateInfoException);
    }
    /**
     * Get TemplateInfoException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoException[]|null
     */
    public function getTemplateInfoException()
    {
        return isset($this->TemplateInfoException) ? $this->TemplateInfoException : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplateInfoException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplateInfoException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplateInfoExceptionForArrayConstraintsFromSetTemplateInfoException(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTemplateInfoExceptionTemplateInfoExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTemplateInfoExceptionTemplateInfoExceptionItem instanceof \Nmusco\AssureSign\v2\StructType\TemplateInfoException) {
                $invalidValues[] = is_object($arrayOfTemplateInfoExceptionTemplateInfoExceptionItem) ? get_class($arrayOfTemplateInfoExceptionTemplateInfoExceptionItem) : sprintf('%s(%s)', gettype($arrayOfTemplateInfoExceptionTemplateInfoExceptionItem), var_export($arrayOfTemplateInfoExceptionTemplateInfoExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TemplateInfoException property can only contain items of type \Nmusco\AssureSign\v2\StructType\TemplateInfoException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TemplateInfoException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoException[] $templateInfoException
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException
     */
    public function setTemplateInfoException(array $templateInfoException = array())
    {
        // validation for constraint: array
        if ('' !== ($templateInfoExceptionArrayErrorMessage = self::validateTemplateInfoExceptionForArrayConstraintsFromSetTemplateInfoException($templateInfoException))) {
            throw new \InvalidArgumentException($templateInfoExceptionArrayErrorMessage, __LINE__);
        }
        if (is_null($templateInfoException) || (is_array($templateInfoException) && empty($templateInfoException))) {
            unset($this->TemplateInfoException);
        } else {
            $this->TemplateInfoException = $templateInfoException;
        }
        return $this;
    }
    /**
     * Add item to TemplateInfoException value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TemplateInfoException $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException
     */
    public function addToTemplateInfoException(\Nmusco\AssureSign\v2\StructType\TemplateInfoException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\TemplateInfoException) {
            throw new \InvalidArgumentException(sprintf('The TemplateInfoException property can only contain items of type \Nmusco\AssureSign\v2\StructType\TemplateInfoException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TemplateInfoException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\TemplateInfoException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TemplateInfoException
     */
    public function getAttributeName()
    {
        return 'TemplateInfoException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTemplateInfoException
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
