<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypedOptionInfo StructType
 * @subpackage Structs
 */
class TypedOptionInfo extends AbstractStructBase
{
    /**
     * The FieldRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\FieldRegionInfo
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
     * The GraphicRenderType
     * @var string
     */
    public $GraphicRenderType;
    /**
     * Constructor method for TypedOptionInfo
     * @uses TypedOptionInfo::setFieldRegion()
     * @uses TypedOptionInfo::setText()
     * @uses TypedOptionInfo::setTextValue()
     * @uses TypedOptionInfo::setGraphicRenderType()
     * @param \Nmusco\AssureSign\v2\StructType\FieldRegionInfo $fieldRegion
     * @param string $text
     * @param string $textValue
     * @param string $graphicRenderType
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\FieldRegionInfo $fieldRegion = null, $text = null, $textValue = null, $graphicRenderType = null)
    {
        $this
            ->setFieldRegion($fieldRegion)
            ->setText($text)
            ->setTextValue($textValue)
            ->setGraphicRenderType($graphicRenderType);
    }
    /**
     * Get FieldRegion value
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegionInfo|null
     */
    public function getFieldRegion()
    {
        return $this->FieldRegion;
    }
    /**
     * Set FieldRegion value
     * @param \Nmusco\AssureSign\v2\StructType\FieldRegionInfo $fieldRegion
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo
     */
    public function setFieldRegion(\Nmusco\AssureSign\v2\StructType\FieldRegionInfo $fieldRegion = null)
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
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo
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
     * Get GraphicRenderType value
     * @return string|null
     */
    public function getGraphicRenderType()
    {
        return $this->GraphicRenderType;
    }
    /**
     * Set GraphicRenderType value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedOptionGraphicRenderType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedOptionGraphicRenderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $graphicRenderType
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo
     */
    public function setGraphicRenderType($graphicRenderType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedOptionGraphicRenderType::valueIsValid($graphicRenderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedOptionGraphicRenderType', is_array($graphicRenderType) ? implode(', ', $graphicRenderType) : var_export($graphicRenderType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedOptionGraphicRenderType::getValidValues())), __LINE__);
        }
        $this->GraphicRenderType = $graphicRenderType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\TypedOptionInfo
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
