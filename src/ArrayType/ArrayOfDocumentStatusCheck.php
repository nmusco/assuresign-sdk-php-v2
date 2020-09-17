<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentStatusCheck ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentStatusCheck extends AbstractStructArrayBase
{
    /**
     * The DocumentStatusCheck
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck[]
     */
    public $DocumentStatusCheck;
    /**
     * Constructor method for ArrayOfDocumentStatusCheck
     * @uses ArrayOfDocumentStatusCheck::setDocumentStatusCheck()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck[] $documentStatusCheck
     */
    public function __construct(array $documentStatusCheck = array())
    {
        $this
            ->setDocumentStatusCheck($documentStatusCheck);
    }
    /**
     * Get DocumentStatusCheck value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck[]|null
     */
    public function getDocumentStatusCheck()
    {
        return isset($this->DocumentStatusCheck) ? $this->DocumentStatusCheck : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentStatusCheck method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentStatusCheck method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentStatusCheckForArrayConstraintsFromSetDocumentStatusCheck(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentStatusCheckDocumentStatusCheckItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentStatusCheckDocumentStatusCheckItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck) {
                $invalidValues[] = is_object($arrayOfDocumentStatusCheckDocumentStatusCheckItem) ? get_class($arrayOfDocumentStatusCheckDocumentStatusCheckItem) : sprintf('%s(%s)', gettype($arrayOfDocumentStatusCheckDocumentStatusCheckItem), var_export($arrayOfDocumentStatusCheckDocumentStatusCheckItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentStatusCheck property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentStatusCheck value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck[] $documentStatusCheck
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck
     */
    public function setDocumentStatusCheck(array $documentStatusCheck = array())
    {
        // validation for constraint: array
        if ('' !== ($documentStatusCheckArrayErrorMessage = self::validateDocumentStatusCheckForArrayConstraintsFromSetDocumentStatusCheck($documentStatusCheck))) {
            throw new \InvalidArgumentException($documentStatusCheckArrayErrorMessage, __LINE__);
        }
        if (is_null($documentStatusCheck) || (is_array($documentStatusCheck) && empty($documentStatusCheck))) {
            unset($this->DocumentStatusCheck);
        } else {
            $this->DocumentStatusCheck = $documentStatusCheck;
        }
        return $this;
    }
    /**
     * Add item to DocumentStatusCheck value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentStatusCheck
     */
    public function addToDocumentStatusCheck(\Nmusco\AssureSign\v2\StructType\DocumentStatusCheck $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck) {
            throw new \InvalidArgumentException(sprintf('The DocumentStatusCheck property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentStatusCheck[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheck|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentStatusCheck
     */
    public function getAttributeName()
    {
        return 'DocumentStatusCheck';
    }
}
