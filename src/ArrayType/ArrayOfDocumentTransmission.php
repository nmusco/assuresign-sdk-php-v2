<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentTransmission ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentTransmission extends AbstractStructArrayBase
{
    /**
     * The DocumentTransmission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentTransmission[]
     */
    public $DocumentTransmission;
    /**
     * Constructor method for ArrayOfDocumentTransmission
     * @uses ArrayOfDocumentTransmission::setDocumentTransmission()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentTransmission[] $documentTransmission
     */
    public function __construct(array $documentTransmission = array())
    {
        $this
            ->setDocumentTransmission($documentTransmission);
    }
    /**
     * Get DocumentTransmission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission[]|null
     */
    public function getDocumentTransmission()
    {
        return isset($this->DocumentTransmission) ? $this->DocumentTransmission : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentTransmission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentTransmission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentTransmissionForArrayConstraintsFromSetDocumentTransmission(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentTransmissionDocumentTransmissionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentTransmissionDocumentTransmissionItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentTransmission) {
                $invalidValues[] = is_object($arrayOfDocumentTransmissionDocumentTransmissionItem) ? get_class($arrayOfDocumentTransmissionDocumentTransmissionItem) : sprintf('%s(%s)', gettype($arrayOfDocumentTransmissionDocumentTransmissionItem), var_export($arrayOfDocumentTransmissionDocumentTransmissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentTransmission property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentTransmission, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentTransmission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentTransmission[] $documentTransmission
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission
     */
    public function setDocumentTransmission(array $documentTransmission = array())
    {
        // validation for constraint: array
        if ('' !== ($documentTransmissionArrayErrorMessage = self::validateDocumentTransmissionForArrayConstraintsFromSetDocumentTransmission($documentTransmission))) {
            throw new \InvalidArgumentException($documentTransmissionArrayErrorMessage, __LINE__);
        }
        if (is_null($documentTransmission) || (is_array($documentTransmission) && empty($documentTransmission))) {
            unset($this->DocumentTransmission);
        } else {
            $this->DocumentTransmission = $documentTransmission;
        }
        return $this;
    }
    /**
     * Add item to DocumentTransmission value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentTransmission $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentTransmission
     */
    public function addToDocumentTransmission(\Nmusco\AssureSign\v2\StructType\DocumentTransmission $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentTransmission) {
            throw new \InvalidArgumentException(sprintf('The DocumentTransmission property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentTransmission, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentTransmission[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentTransmission
     */
    public function getAttributeName()
    {
        return 'DocumentTransmission';
    }
}
