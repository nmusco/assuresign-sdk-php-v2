<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentCancellation ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentCancellation extends AbstractStructArrayBase
{
    /**
     * The DocumentCancellation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentCancellation[]
     */
    public $DocumentCancellation;
    /**
     * Constructor method for ArrayOfDocumentCancellation
     * @uses ArrayOfDocumentCancellation::setDocumentCancellation()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentCancellation[] $documentCancellation
     */
    public function __construct(array $documentCancellation = array())
    {
        $this
            ->setDocumentCancellation($documentCancellation);
    }
    /**
     * Get DocumentCancellation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellation[]|null
     */
    public function getDocumentCancellation()
    {
        return isset($this->DocumentCancellation) ? $this->DocumentCancellation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentCancellation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentCancellation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentCancellationForArrayConstraintsFromSetDocumentCancellation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentCancellationDocumentCancellationItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentCancellationDocumentCancellationItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentCancellation) {
                $invalidValues[] = is_object($arrayOfDocumentCancellationDocumentCancellationItem) ? get_class($arrayOfDocumentCancellationDocumentCancellationItem) : sprintf('%s(%s)', gettype($arrayOfDocumentCancellationDocumentCancellationItem), var_export($arrayOfDocumentCancellationDocumentCancellationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentCancellation property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentCancellation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentCancellation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentCancellation[] $documentCancellation
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation
     */
    public function setDocumentCancellation(array $documentCancellation = array())
    {
        // validation for constraint: array
        if ('' !== ($documentCancellationArrayErrorMessage = self::validateDocumentCancellationForArrayConstraintsFromSetDocumentCancellation($documentCancellation))) {
            throw new \InvalidArgumentException($documentCancellationArrayErrorMessage, __LINE__);
        }
        if (is_null($documentCancellation) || (is_array($documentCancellation) && empty($documentCancellation))) {
            unset($this->DocumentCancellation);
        } else {
            $this->DocumentCancellation = $documentCancellation;
        }
        return $this;
    }
    /**
     * Add item to DocumentCancellation value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentCancellation $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation
     */
    public function addToDocumentCancellation(\Nmusco\AssureSign\v2\StructType\DocumentCancellation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentCancellation) {
            throw new \InvalidArgumentException(sprintf('The DocumentCancellation property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentCancellation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentCancellation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentCancellation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentCancellation
     */
    public function getAttributeName()
    {
        return 'DocumentCancellation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation
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
