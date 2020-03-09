<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSignatoryUpdateResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfSignatoryUpdateResult extends AbstractStructArrayBase
{
    /**
     * The SignatoryUpdateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult[]
     */
    public $SignatoryUpdateResult;
    /**
     * Constructor method for ArrayOfSignatoryUpdateResult
     * @uses ArrayOfSignatoryUpdateResult::setSignatoryUpdateResult()
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult[] $signatoryUpdateResult
     */
    public function __construct(array $signatoryUpdateResult = array())
    {
        $this
            ->setSignatoryUpdateResult($signatoryUpdateResult);
    }
    /**
     * Get SignatoryUpdateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult[]|null
     */
    public function getSignatoryUpdateResult()
    {
        return isset($this->SignatoryUpdateResult) ? $this->SignatoryUpdateResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSignatoryUpdateResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatoryUpdateResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatoryUpdateResultForArrayConstraintsFromSetSignatoryUpdateResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSignatoryUpdateResultSignatoryUpdateResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSignatoryUpdateResultSignatoryUpdateResultItem instanceof \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult) {
                $invalidValues[] = is_object($arrayOfSignatoryUpdateResultSignatoryUpdateResultItem) ? get_class($arrayOfSignatoryUpdateResultSignatoryUpdateResultItem) : sprintf('%s(%s)', gettype($arrayOfSignatoryUpdateResultSignatoryUpdateResultItem), var_export($arrayOfSignatoryUpdateResultSignatoryUpdateResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatoryUpdateResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SignatoryUpdateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult[] $signatoryUpdateResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult
     */
    public function setSignatoryUpdateResult(array $signatoryUpdateResult = array())
    {
        // validation for constraint: array
        if ('' !== ($signatoryUpdateResultArrayErrorMessage = self::validateSignatoryUpdateResultForArrayConstraintsFromSetSignatoryUpdateResult($signatoryUpdateResult))) {
            throw new \InvalidArgumentException($signatoryUpdateResultArrayErrorMessage, __LINE__);
        }
        if (is_null($signatoryUpdateResult) || (is_array($signatoryUpdateResult) && empty($signatoryUpdateResult))) {
            unset($this->SignatoryUpdateResult);
        } else {
            $this->SignatoryUpdateResult = $signatoryUpdateResult;
        }
        return $this;
    }
    /**
     * Add item to SignatoryUpdateResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult
     */
    public function addToSignatoryUpdateResult(\Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult) {
            throw new \InvalidArgumentException(sprintf('The SignatoryUpdateResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatoryUpdateResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\SignatoryUpdateResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SignatoryUpdateResult
     */
    public function getAttributeName()
    {
        return 'SignatoryUpdateResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSignatoryUpdateResult
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
