<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrittenJotBlockProperties StructType
 * @subpackage Structs
 */
class WrittenJotBlockProperties extends AbstractStructBase
{
    /**
     * The SignatureType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SignatureType;
    /**
     * The SignatureFontSize
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SignatureFontSize;
    /**
     * The InkColor
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $InkColor;
    /**
     * Constructor method for WrittenJotBlockProperties
     * @uses WrittenJotBlockProperties::setSignatureType()
     * @uses WrittenJotBlockProperties::setSignatureFontSize()
     * @uses WrittenJotBlockProperties::setInkColor()
     * @param string $signatureType
     * @param string $signatureFontSize
     * @param string $inkColor
     */
    public function __construct($signatureType = null, $signatureFontSize = null, $inkColor = null)
    {
        $this
            ->setSignatureType($signatureType)
            ->setSignatureFontSize($signatureFontSize)
            ->setInkColor($inkColor);
    }
    /**
     * Get SignatureType value
     * @return string
     */
    public function getSignatureType()
    {
        return $this->SignatureType;
    }
    /**
     * Set SignatureType value
     * @uses \Nmusco\AssureSign\v2\EnumType\SignatureType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\SignatureType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $signatureType
     * @return \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties
     */
    public function setSignatureType($signatureType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\SignatureType::valueIsValid($signatureType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\SignatureType', is_array($signatureType) ? implode(', ', $signatureType) : var_export($signatureType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\SignatureType::getValidValues())), __LINE__);
        }
        $this->SignatureType = $signatureType;
        return $this;
    }
    /**
     * Get SignatureFontSize value
     * @return string
     */
    public function getSignatureFontSize()
    {
        return $this->SignatureFontSize;
    }
    /**
     * Set SignatureFontSize value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $signatureFontSize
     * @return \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties
     */
    public function setSignatureFontSize($signatureFontSize = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::valueIsValid($signatureFontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType', is_array($signatureFontSize) ? implode(', ', $signatureFontSize) : var_export($signatureFontSize, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::getValidValues())), __LINE__);
        }
        $this->SignatureFontSize = $signatureFontSize;
        return $this;
    }
    /**
     * Get InkColor value
     * @return string
     */
    public function getInkColor()
    {
        return $this->InkColor;
    }
    /**
     * Set InkColor value
     * @uses \Nmusco\AssureSign\v2\EnumType\WrittenJotBlockInkColor::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\WrittenJotBlockInkColor::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inkColor
     * @return \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties
     */
    public function setInkColor($inkColor = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\WrittenJotBlockInkColor::valueIsValid($inkColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\WrittenJotBlockInkColor', is_array($inkColor) ? implode(', ', $inkColor) : var_export($inkColor, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\WrittenJotBlockInkColor::getValidValues())), __LINE__);
        }
        $this->InkColor = $inkColor;
        return $this;
    }
}
