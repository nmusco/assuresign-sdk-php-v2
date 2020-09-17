<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnvelopeAttachment ArrayType
 * @subpackage Arrays
 */
class ArrayOfEnvelopeAttachment extends AbstractStructArrayBase
{
    /**
     * The EnvelopeAttachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment[]
     */
    public $EnvelopeAttachment;
    /**
     * Constructor method for ArrayOfEnvelopeAttachment
     * @uses ArrayOfEnvelopeAttachment::setEnvelopeAttachment()
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment[] $envelopeAttachment
     */
    public function __construct(array $envelopeAttachment = array())
    {
        $this
            ->setEnvelopeAttachment($envelopeAttachment);
    }
    /**
     * Get EnvelopeAttachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment[]|null
     */
    public function getEnvelopeAttachment()
    {
        return isset($this->EnvelopeAttachment) ? $this->EnvelopeAttachment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeAttachment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeAttachmentForArrayConstraintsFromSetEnvelopeAttachment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEnvelopeAttachmentEnvelopeAttachmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnvelopeAttachmentEnvelopeAttachmentItem instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment) {
                $invalidValues[] = is_object($arrayOfEnvelopeAttachmentEnvelopeAttachmentItem) ? get_class($arrayOfEnvelopeAttachmentEnvelopeAttachmentItem) : sprintf('%s(%s)', gettype($arrayOfEnvelopeAttachmentEnvelopeAttachmentItem), var_export($arrayOfEnvelopeAttachmentEnvelopeAttachmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EnvelopeAttachment property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EnvelopeAttachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment[] $envelopeAttachment
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment
     */
    public function setEnvelopeAttachment(array $envelopeAttachment = array())
    {
        // validation for constraint: array
        if ('' !== ($envelopeAttachmentArrayErrorMessage = self::validateEnvelopeAttachmentForArrayConstraintsFromSetEnvelopeAttachment($envelopeAttachment))) {
            throw new \InvalidArgumentException($envelopeAttachmentArrayErrorMessage, __LINE__);
        }
        if (is_null($envelopeAttachment) || (is_array($envelopeAttachment) && empty($envelopeAttachment))) {
            unset($this->EnvelopeAttachment);
        } else {
            $this->EnvelopeAttachment = $envelopeAttachment;
        }
        return $this;
    }
    /**
     * Add item to EnvelopeAttachment value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment
     */
    public function addToEnvelopeAttachment(\Nmusco\AssureSign\v2\StructType\EnvelopeAttachment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment) {
            throw new \InvalidArgumentException(sprintf('The EnvelopeAttachment property can only contain items of type \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EnvelopeAttachment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeAttachment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnvelopeAttachment
     */
    public function getAttributeName()
    {
        return 'EnvelopeAttachment';
    }
}
