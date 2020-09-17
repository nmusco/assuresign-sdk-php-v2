<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResendNotificationRequest ArrayType
 * @subpackage Arrays
 */
class ArrayOfResendNotificationRequest extends AbstractStructArrayBase
{
    /**
     * The ResendNotificationRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest[]
     */
    public $ResendNotificationRequest;
    /**
     * Constructor method for ArrayOfResendNotificationRequest
     * @uses ArrayOfResendNotificationRequest::setResendNotificationRequest()
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest[] $resendNotificationRequest
     */
    public function __construct(array $resendNotificationRequest = array())
    {
        $this
            ->setResendNotificationRequest($resendNotificationRequest);
    }
    /**
     * Get ResendNotificationRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest[]|null
     */
    public function getResendNotificationRequest()
    {
        return isset($this->ResendNotificationRequest) ? $this->ResendNotificationRequest : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResendNotificationRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResendNotificationRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResendNotificationRequestForArrayConstraintsFromSetResendNotificationRequest(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResendNotificationRequestResendNotificationRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfResendNotificationRequestResendNotificationRequestItem instanceof \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest) {
                $invalidValues[] = is_object($arrayOfResendNotificationRequestResendNotificationRequestItem) ? get_class($arrayOfResendNotificationRequestResendNotificationRequestItem) : sprintf('%s(%s)', gettype($arrayOfResendNotificationRequestResendNotificationRequestItem), var_export($arrayOfResendNotificationRequestResendNotificationRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResendNotificationRequest property can only contain items of type \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ResendNotificationRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest[] $resendNotificationRequest
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest
     */
    public function setResendNotificationRequest(array $resendNotificationRequest = array())
    {
        // validation for constraint: array
        if ('' !== ($resendNotificationRequestArrayErrorMessage = self::validateResendNotificationRequestForArrayConstraintsFromSetResendNotificationRequest($resendNotificationRequest))) {
            throw new \InvalidArgumentException($resendNotificationRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($resendNotificationRequest) || (is_array($resendNotificationRequest) && empty($resendNotificationRequest))) {
            unset($this->ResendNotificationRequest);
        } else {
            $this->ResendNotificationRequest = $resendNotificationRequest;
        }
        return $this;
    }
    /**
     * Add item to ResendNotificationRequest value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfResendNotificationRequest
     */
    public function addToResendNotificationRequest(\Nmusco\AssureSign\v2\StructType\ResendNotificationRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest) {
            throw new \InvalidArgumentException(sprintf('The ResendNotificationRequest property can only contain items of type \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ResendNotificationRequest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ResendNotificationRequest
     */
    public function getAttributeName()
    {
        return 'ResendNotificationRequest';
    }
}
