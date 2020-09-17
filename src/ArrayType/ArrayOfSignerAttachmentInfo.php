<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignerAttachmentInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignerAttachmentInfo extends AbstractStructArrayBase
{
    /**
     * The SignerAttachmentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo[]
     */
    public $SignerAttachmentInfo;
    /**
     * Constructor method for ArrayOfSignerAttachmentInfo
     * @uses ArrayOfSignerAttachmentInfo::setSignerAttachmentInfo()
     * @param \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo[] $signerAttachmentInfo
     */
    public function __construct(array $signerAttachmentInfo = array())
    {
        $this
            ->setSignerAttachmentInfo($signerAttachmentInfo);
    }
    /**
     * Get SignerAttachmentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo[]|null
     */
    public function getSignerAttachmentInfo()
    {
        return isset($this->SignerAttachmentInfo) ? $this->SignerAttachmentInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignerAttachmentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignerAttachmentInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignerAttachmentInfoForArrayConstraintsFromSetSignerAttachmentInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignerAttachmentInfoSignerAttachmentInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignerAttachmentInfoSignerAttachmentInfoItem instanceof \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo) {
                $invalidValues[] = is_object($arrayOfSignerAttachmentInfoSignerAttachmentInfoItem) ? get_class($arrayOfSignerAttachmentInfoSignerAttachmentInfoItem) : sprintf('%s(%s)', gettype($arrayOfSignerAttachmentInfoSignerAttachmentInfoItem), var_export($arrayOfSignerAttachmentInfoSignerAttachmentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignerAttachmentInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignerAttachmentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo[] $signerAttachmentInfo
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo
     */
    public function setSignerAttachmentInfo(array $signerAttachmentInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($signerAttachmentInfoArrayErrorMessage = self::validateSignerAttachmentInfoForArrayConstraintsFromSetSignerAttachmentInfo($signerAttachmentInfo))) {
            throw new \InvalidArgumentException($signerAttachmentInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($signerAttachmentInfo) || (is_array($signerAttachmentInfo) && empty($signerAttachmentInfo))) {
            unset($this->SignerAttachmentInfo);
        } else {
            $this->SignerAttachmentInfo = $signerAttachmentInfo;
        }
        return $this;
    }
    /**
     * Add item to SignerAttachmentInfo value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignerAttachmentInfo
     */
    public function addToSignerAttachmentInfo(\Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo) {
            throw new \InvalidArgumentException(sprintf('The SignerAttachmentInfo property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignerAttachmentInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignerAttachmentInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignerAttachmentInfo
     */
    public function getAttributeName()
    {
        return 'SignerAttachmentInfo';
    }
}
