<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResendNotificationResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfResendNotificationResult extends AbstractStructArrayBase
{
    /**
     * The ResendNotificationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ResendNotificationResult[]
     */
    public $ResendNotificationResult;
    /**
     * Constructor method for ArrayOfResendNotificationResult
     * @uses ArrayOfResendNotificationResult::setResendNotificationResult()
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationResult[] $resendNotificationResult
     */
    public function __construct(array $resendNotificationResult = array())
    {
        $this
            ->setResendNotificationResult($resendNotificationResult);
    }
    /**
     * Get ResendNotificationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResult[]|null
     */
    public function getResendNotificationResult()
    {
        return isset($this->ResendNotificationResult) ? $this->ResendNotificationResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResendNotificationResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResendNotificationResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResendNotificationResultForArrayConstraintsFromSetResendNotificationResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResendNotificationResultResendNotificationResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfResendNotificationResultResendNotificationResultItem instanceof \Nmusco\AssureSign\v2\StructType\ResendNotificationResult) {
                $invalidValues[] = is_object($arrayOfResendNotificationResultResendNotificationResultItem) ? get_class($arrayOfResendNotificationResultResendNotificationResultItem) : sprintf('%s(%s)', gettype($arrayOfResendNotificationResultResendNotificationResultItem), var_export($arrayOfResendNotificationResultResendNotificationResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResendNotificationResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\ResendNotificationResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ResendNotificationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationResult[] $resendNotificationResult
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult
     */
    public function setResendNotificationResult(array $resendNotificationResult = array())
    {
        // validation for constraint: array
        if ('' !== ($resendNotificationResultArrayErrorMessage = self::validateResendNotificationResultForArrayConstraintsFromSetResendNotificationResult($resendNotificationResult))) {
            throw new \InvalidArgumentException($resendNotificationResultArrayErrorMessage, __LINE__);
        }
        if (is_null($resendNotificationResult) || (is_array($resendNotificationResult) && empty($resendNotificationResult))) {
            unset($this->ResendNotificationResult);
        } else {
            $this->ResendNotificationResult = $resendNotificationResult;
        }
        return $this;
    }
    /**
     * Add item to ResendNotificationResult value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationResult $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationResult
     */
    public function addToResendNotificationResult(\Nmusco\AssureSign\v2\StructType\ResendNotificationResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ResendNotificationResult) {
            throw new \InvalidArgumentException(sprintf('The ResendNotificationResult property can only contain items of type \Nmusco\AssureSign\v2\StructType\ResendNotificationResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ResendNotificationResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ResendNotificationResult
     */
    public function getAttributeName()
    {
        return 'ResendNotificationResult';
    }
}
