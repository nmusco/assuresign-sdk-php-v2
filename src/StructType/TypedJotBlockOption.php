<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypedJotBlockOption StructType
 * @subpackage Structs
 */
class TypedJotBlockOption extends AbstractStructBase
{
    /**
     * The GraphicRenderType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $GraphicRenderType;
    /**
     * The FieldRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\FieldRegion
     */
    public $FieldRegion;
    /**
     * The Text
     * @var string
     */
    public $Text;
    /**
     * The TextValue
     * @var string
     */
    public $TextValue;
    /**
     * Constructor method for TypedJotBlockOption
     * @uses TypedJotBlockOption::setGraphicRenderType()
     * @uses TypedJotBlockOption::setFieldRegion()
     * @uses TypedJotBlockOption::setText()
     * @uses TypedJotBlockOption::setTextValue()
     * @param string $graphicRenderType
     * @param \Nmusco\AssureSign\v2\StructType\FieldRegion $fieldRegion
     * @param string $text
     * @param string $textValue
     */
    public function __construct($graphicRenderType = null, \Nmusco\AssureSign\v2\StructType\FieldRegion $fieldRegion = null, $text = null, $textValue = null)
    {
        $this
            ->setGraphicRenderType($graphicRenderType)
            ->setFieldRegion($fieldRegion)
            ->setText($text)
            ->setTextValue($textValue);
    }
    /**
     * Get GraphicRenderType value
     * @return string
     */
    public function getGraphicRenderType()
    {
        return $this->GraphicRenderType;
    }
    /**
     * Set GraphicRenderType value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockGraphicRenderType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockGraphicRenderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $graphicRenderType
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption
     */
    public function setGraphicRenderType($graphicRenderType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockGraphicRenderType::valueIsValid($graphicRenderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockGraphicRenderType', is_array($graphicRenderType) ? implode(', ', $graphicRenderType) : var_export($graphicRenderType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockGraphicRenderType::getValidValues())), __LINE__);
        }
        $this->GraphicRenderType = $graphicRenderType;
        return $this;
    }
    /**
     * Get FieldRegion value
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegion|null
     */
    public function getFieldRegion()
    {
        return $this->FieldRegion;
    }
    /**
     * Set FieldRegion value
     * @param \Nmusco\AssureSign\v2\StructType\FieldRegion $fieldRegion
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption
     */
    public function setFieldRegion(\Nmusco\AssureSign\v2\StructType\FieldRegion $fieldRegion = null)
    {
        $this->FieldRegion = $fieldRegion;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get TextValue value
     * @return string|null
     */
    public function getTextValue()
    {
        return $this->TextValue;
    }
    /**
     * Set TextValue value
     * @param string $textValue
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption
     */
    public function setTextValue($textValue = null)
    {
        // validation for constraint: string
        if (!is_null($textValue) && !is_string($textValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textValue, true), gettype($textValue)), __LINE__);
        }
        $this->TextValue = $textValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockOption
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
