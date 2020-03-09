<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentExpiration ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentExpiration extends AbstractStructArrayBase
{
    /**
     * The DocumentExpiration
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentExpiration[]
     */
    public $DocumentExpiration;
    /**
     * Constructor method for ArrayOfDocumentExpiration
     * @uses ArrayOfDocumentExpiration::setDocumentExpiration()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentExpiration[] $documentExpiration
     */
    public function __construct(array $documentExpiration = array())
    {
        $this
            ->setDocumentExpiration($documentExpiration);
    }
    /**
     * Get DocumentExpiration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpiration[]|null
     */
    public function getDocumentExpiration()
    {
        return isset($this->DocumentExpiration) ? $this->DocumentExpiration : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentExpiration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentExpiration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentExpirationForArrayConstraintsFromSetDocumentExpiration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentExpirationDocumentExpirationItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentExpirationDocumentExpirationItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentExpiration) {
                $invalidValues[] = is_object($arrayOfDocumentExpirationDocumentExpirationItem) ? get_class($arrayOfDocumentExpirationDocumentExpirationItem) : sprintf('%s(%s)', gettype($arrayOfDocumentExpirationDocumentExpirationItem), var_export($arrayOfDocumentExpirationDocumentExpirationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentExpiration property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentExpiration, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentExpiration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentExpiration[] $documentExpiration
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration
     */
    public function setDocumentExpiration(array $documentExpiration = array())
    {
        // validation for constraint: array
        if ('' !== ($documentExpirationArrayErrorMessage = self::validateDocumentExpirationForArrayConstraintsFromSetDocumentExpiration($documentExpiration))) {
            throw new \InvalidArgumentException($documentExpirationArrayErrorMessage, __LINE__);
        }
        if (is_null($documentExpiration) || (is_array($documentExpiration) && empty($documentExpiration))) {
            unset($this->DocumentExpiration);
        } else {
            $this->DocumentExpiration = $documentExpiration;
        }
        return $this;
    }
    /**
     * Add item to DocumentExpiration value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentExpiration $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration
     */
    public function addToDocumentExpiration(\Nmusco\AssureSign\v2\StructType\DocumentExpiration $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentExpiration) {
            throw new \InvalidArgumentException(sprintf('The DocumentExpiration property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentExpiration, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentExpiration[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpiration|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpiration|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpiration|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpiration|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentExpiration|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentExpiration
     */
    public function getAttributeName()
    {
        return 'DocumentExpiration';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration
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
