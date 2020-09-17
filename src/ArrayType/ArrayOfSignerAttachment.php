<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignerAttachment ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignerAttachment extends AbstractStructArrayBase
{
    /**
     * The SignerAttachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignerAttachment[]
     */
    public $SignerAttachment;
    /**
     * Constructor method for ArrayOfSignerAttachment
     * @uses ArrayOfSignerAttachment::setSignerAttachment()
     * @param \Nmusco\AssureSign\v2\StructType\SignerAttachment[] $signerAttachment
     */
    public function __construct(array $signerAttachment = array())
    {
        $this
            ->setSignerAttachment($signerAttachment);
    }
    /**
     * Get SignerAttachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment[]|null
     */
    public function getSignerAttachment()
    {
        return isset($this->SignerAttachment) ? $this->SignerAttachment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignerAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignerAttachment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignerAttachmentForArrayConstraintsFromSetSignerAttachment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignerAttachmentSignerAttachmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignerAttachmentSignerAttachmentItem instanceof \Nmusco\AssureSign\v2\StructType\SignerAttachment) {
                $invalidValues[] = is_object($arrayOfSignerAttachmentSignerAttachmentItem) ? get_class($arrayOfSignerAttachmentSignerAttachmentItem) : sprintf('%s(%s)', gettype($arrayOfSignerAttachmentSignerAttachmentItem), var_export($arrayOfSignerAttachmentSignerAttachmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignerAttachment property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignerAttachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignerAttachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignerAttachment[] $signerAttachment
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment
     */
    public function setSignerAttachment(array $signerAttachment = array())
    {
        // validation for constraint: array
        if ('' !== ($signerAttachmentArrayErrorMessage = self::validateSignerAttachmentForArrayConstraintsFromSetSignerAttachment($signerAttachment))) {
            throw new \InvalidArgumentException($signerAttachmentArrayErrorMessage, __LINE__);
        }
        if (is_null($signerAttachment) || (is_array($signerAttachment) && empty($signerAttachment))) {
            unset($this->SignerAttachment);
        } else {
            $this->SignerAttachment = $signerAttachment;
        }
        return $this;
    }
    /**
     * Add item to SignerAttachment value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignerAttachment $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachment
     */
    public function addToSignerAttachment(\Nmusco\AssureSign\v2\StructType\SignerAttachment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignerAttachment) {
            throw new \InvalidArgumentException(sprintf('The SignerAttachment property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignerAttachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignerAttachment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignerAttachment
     */
    public function getAttributeName()
    {
        return 'SignerAttachment';
    }
}
