<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSigningLink ArrayType
 * @subpackage Arrays
 */
class ArrayOfSigningLink extends AbstractStructArrayBase
{
    /**
     * The SigningLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SigningLink[]
     */
    public $SigningLink;
    /**
     * Constructor method for ArrayOfSigningLink
     * @uses ArrayOfSigningLink::setSigningLink()
     * @param \Nmusco\AssureSign\v2\StructType\SigningLink[] $signingLink
     */
    public function __construct(array $signingLink = array())
    {
        $this
            ->setSigningLink($signingLink);
    }
    /**
     * Get SigningLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SigningLink[]|null
     */
    public function getSigningLink()
    {
        return isset($this->SigningLink) ? $this->SigningLink : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSigningLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSigningLink method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSigningLinkForArrayConstraintsFromSetSigningLink(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSigningLinkSigningLinkItem) {
            // validation for constraint: itemType
            if (!$arrayOfSigningLinkSigningLinkItem instanceof \Nmusco\AssureSign\v2\StructType\SigningLink) {
                $invalidValues[] = is_object($arrayOfSigningLinkSigningLinkItem) ? get_class($arrayOfSigningLinkSigningLinkItem) : sprintf('%s(%s)', gettype($arrayOfSigningLinkSigningLinkItem), var_export($arrayOfSigningLinkSigningLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SigningLink property can only contain items of type \Nmusco\AssureSign\v2\StructType\SigningLink, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SigningLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SigningLink[] $signingLink
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSigningLink
     */
    public function setSigningLink(array $signingLink = array())
    {
        // validation for constraint: array
        if ('' !== ($signingLinkArrayErrorMessage = self::validateSigningLinkForArrayConstraintsFromSetSigningLink($signingLink))) {
            throw new \InvalidArgumentException($signingLinkArrayErrorMessage, __LINE__);
        }
        if (is_null($signingLink) || (is_array($signingLink) && empty($signingLink))) {
            unset($this->SigningLink);
        } else {
            $this->SigningLink = $signingLink;
        }
        return $this;
    }
    /**
     * Add item to SigningLink value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SigningLink $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSigningLink
     */
    public function addToSigningLink(\Nmusco\AssureSign\v2\StructType\SigningLink $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SigningLink) {
            throw new \InvalidArgumentException(sprintf('The SigningLink property can only contain items of type \Nmusco\AssureSign\v2\StructType\SigningLink, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SigningLink[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SigningLink|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SigningLink|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SigningLink|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SigningLink|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SigningLink|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SigningLink
     */
    public function getAttributeName()
    {
        return 'SigningLink';
    }
}
