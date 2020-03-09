<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnvelopeTemplate ArrayType
 * @subpackage Arrays
 */
class ArrayOfEnvelopeTemplate extends AbstractStructArrayBase
{
    /**
     * The EnvelopeTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate[]
     */
    public $EnvelopeTemplate;
    /**
     * Constructor method for ArrayOfEnvelopeTemplate
     * @uses ArrayOfEnvelopeTemplate::setEnvelopeTemplate()
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate[] $envelopeTemplate
     */
    public function __construct(array $envelopeTemplate = array())
    {
        $this
            ->setEnvelopeTemplate($envelopeTemplate);
    }
    /**
     * Get EnvelopeTemplate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate[]|null
     */
    public function getEnvelopeTemplate()
    {
        return isset($this->EnvelopeTemplate) ? $this->EnvelopeTemplate : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeTemplateForArrayConstraintsFromSetEnvelopeTemplate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEnvelopeTemplateEnvelopeTemplateItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnvelopeTemplateEnvelopeTemplateItem instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate) {
                $invalidValues[] = is_object($arrayOfEnvelopeTemplateEnvelopeTemplateItem) ? get_class($arrayOfEnvelopeTemplateEnvelopeTemplateItem) : sprintf('%s(%s)', gettype($arrayOfEnvelopeTemplateEnvelopeTemplateItem), var_export($arrayOfEnvelopeTemplateEnvelopeTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EnvelopeTemplate property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EnvelopeTemplate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate[] $envelopeTemplate
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate
     */
    public function setEnvelopeTemplate(array $envelopeTemplate = array())
    {
        // validation for constraint: array
        if ('' !== ($envelopeTemplateArrayErrorMessage = self::validateEnvelopeTemplateForArrayConstraintsFromSetEnvelopeTemplate($envelopeTemplate))) {
            throw new \InvalidArgumentException($envelopeTemplateArrayErrorMessage, __LINE__);
        }
        if (is_null($envelopeTemplate) || (is_array($envelopeTemplate) && empty($envelopeTemplate))) {
            unset($this->EnvelopeTemplate);
        } else {
            $this->EnvelopeTemplate = $envelopeTemplate;
        }
        return $this;
    }
    /**
     * Add item to EnvelopeTemplate value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate
     */
    public function addToEnvelopeTemplate(\Nmusco\AssureSign\v2\StructType\EnvelopeTemplate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate) {
            throw new \InvalidArgumentException(sprintf('The EnvelopeTemplate property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EnvelopeTemplate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeTemplate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnvelopeTemplate
     */
    public function getAttributeName()
    {
        return 'EnvelopeTemplate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeTemplate
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
