<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString1 ArrayType
 * @subpackage Arrays
 */
class ArrayOfString1 extends AbstractStructArrayBase
{
    /**
     * The AccountTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $AccountTemplate;
    /**
     * Constructor method for ArrayOfString1
     * @uses ArrayOfString1::setAccountTemplate()
     * @param string[] $accountTemplate
     */
    public function __construct(array $accountTemplate = array())
    {
        $this
            ->setAccountTemplate($accountTemplate);
    }
    /**
     * Get AccountTemplate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getAccountTemplate()
    {
        return isset($this->AccountTemplate) ? $this->AccountTemplate : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountTemplateForArrayConstraintsFromSetAccountTemplate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfString1AccountTemplateItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfString1AccountTemplateItem)) {
                $invalidValues[] = is_object($arrayOfString1AccountTemplateItem) ? get_class($arrayOfString1AccountTemplateItem) : sprintf('%s(%s)', gettype($arrayOfString1AccountTemplateItem), var_export($arrayOfString1AccountTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountTemplate property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccountTemplate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $accountTemplate
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1
     */
    public function setAccountTemplate(array $accountTemplate = array())
    {
        // validation for constraint: array
        if ('' !== ($accountTemplateArrayErrorMessage = self::validateAccountTemplateForArrayConstraintsFromSetAccountTemplate($accountTemplate))) {
            throw new \InvalidArgumentException($accountTemplateArrayErrorMessage, __LINE__);
        }
        if (is_null($accountTemplate) || (is_array($accountTemplate) && empty($accountTemplate))) {
            unset($this->AccountTemplate);
        } else {
            $this->AccountTemplate = $accountTemplate;
        }
        return $this;
    }
    /**
     * Add item to AccountTemplate value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfString1
     */
    public function addToAccountTemplate($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AccountTemplate property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountTemplate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccountTemplate
     */
    public function getAttributeName()
    {
        return 'AccountTemplate';
    }
}
