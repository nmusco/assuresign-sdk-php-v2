<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJotBlock ArrayType
 * @subpackage Arrays
 */
class ArrayOfJotBlock extends AbstractStructArrayBase
{
    /**
     * The JotBlock
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\JotBlock[]
     */
    public $JotBlock;
    /**
     * Constructor method for ArrayOfJotBlock
     * @uses ArrayOfJotBlock::setJotBlock()
     * @param \Nmusco\AssureSign\v2\StructType\JotBlock[] $jotBlock
     */
    public function __construct(array $jotBlock = array())
    {
        $this
            ->setJotBlock($jotBlock);
    }
    /**
     * Get JotBlock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock[]|null
     */
    public function getJotBlock()
    {
        return isset($this->JotBlock) ? $this->JotBlock : null;
    }
    /**
     * This method is responsible for validating the values passed to the setJotBlock method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJotBlock method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJotBlockForArrayConstraintsFromSetJotBlock(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJotBlockJotBlockItem) {
            // validation for constraint: itemType
            if (!$arrayOfJotBlockJotBlockItem instanceof \Nmusco\AssureSign\v2\StructType\JotBlock) {
                $invalidValues[] = is_object($arrayOfJotBlockJotBlockItem) ? get_class($arrayOfJotBlockJotBlockItem) : sprintf('%s(%s)', gettype($arrayOfJotBlockJotBlockItem), var_export($arrayOfJotBlockJotBlockItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JotBlock property can only contain items of type \Nmusco\AssureSign\v2\StructType\JotBlock, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set JotBlock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\JotBlock[] $jotBlock
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock
     */
    public function setJotBlock(array $jotBlock = array())
    {
        // validation for constraint: array
        if ('' !== ($jotBlockArrayErrorMessage = self::validateJotBlockForArrayConstraintsFromSetJotBlock($jotBlock))) {
            throw new \InvalidArgumentException($jotBlockArrayErrorMessage, __LINE__);
        }
        if (is_null($jotBlock) || (is_array($jotBlock) && empty($jotBlock))) {
            unset($this->JotBlock);
        } else {
            $this->JotBlock = $jotBlock;
        }
        return $this;
    }
    /**
     * Add item to JotBlock value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\JotBlock $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfJotBlock
     */
    public function addToJotBlock(\Nmusco\AssureSign\v2\StructType\JotBlock $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\JotBlock) {
            throw new \InvalidArgumentException(sprintf('The JotBlock property can only contain items of type \Nmusco\AssureSign\v2\StructType\JotBlock, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JotBlock[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string JotBlock
     */
    public function getAttributeName()
    {
        return 'JotBlock';
    }
}
