<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypedJotBlockProperties StructType
 * @subpackage Structs
 */
class TypedJotBlockProperties extends AbstractStructBase
{
    /**
     * The FontSize
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FontSize;
    /**
     * The FontName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FontName;
    /**
     * The FontBold
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FontBold;
    /**
     * The FontUnderline
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FontUnderline;
    /**
     * The FontItalic
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FontItalic;
    /**
     * The HorizontalAlignment
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $HorizontalAlignment;
    /**
     * The VerticalAlignment
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $VerticalAlignment;
    /**
     * The WordWrap
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $WordWrap;
    /**
     * The ValidationType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ValidationType;
    /**
     * The SignatoryInputType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SignatoryInputType;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption
     */
    public $Options;
    /**
     * The Regex
     * @var string
     */
    public $Regex;
    /**
     * The ValidationMessage
     * @var string
     */
    public $ValidationMessage;
    /**
     * The FormatterName
     * @var string
     */
    public $FormatterName;
    /**
     * The FormatterCode
     * @var string
     */
    public $FormatterCode;
    /**
     * Constructor method for TypedJotBlockProperties
     * @uses TypedJotBlockProperties::setFontSize()
     * @uses TypedJotBlockProperties::setFontName()
     * @uses TypedJotBlockProperties::setFontBold()
     * @uses TypedJotBlockProperties::setFontUnderline()
     * @uses TypedJotBlockProperties::setFontItalic()
     * @uses TypedJotBlockProperties::setHorizontalAlignment()
     * @uses TypedJotBlockProperties::setVerticalAlignment()
     * @uses TypedJotBlockProperties::setWordWrap()
     * @uses TypedJotBlockProperties::setValidationType()
     * @uses TypedJotBlockProperties::setSignatoryInputType()
     * @uses TypedJotBlockProperties::setValue()
     * @uses TypedJotBlockProperties::setOptions()
     * @uses TypedJotBlockProperties::setRegex()
     * @uses TypedJotBlockProperties::setValidationMessage()
     * @uses TypedJotBlockProperties::setFormatterName()
     * @uses TypedJotBlockProperties::setFormatterCode()
     * @param string $fontSize
     * @param string $fontName
     * @param bool $fontBold
     * @param bool $fontUnderline
     * @param bool $fontItalic
     * @param string $horizontalAlignment
     * @param string $verticalAlignment
     * @param bool $wordWrap
     * @param string $validationType
     * @param string $signatoryInputType
     * @param string $value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption $options
     * @param string $regex
     * @param string $validationMessage
     * @param string $formatterName
     * @param string $formatterCode
     */
    public function __construct($fontSize = null, $fontName = null, $fontBold = null, $fontUnderline = null, $fontItalic = null, $horizontalAlignment = null, $verticalAlignment = null, $wordWrap = null, $validationType = null, $signatoryInputType = null, $value = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption $options = null, $regex = null, $validationMessage = null, $formatterName = null, $formatterCode = null)
    {
        $this
            ->setFontSize($fontSize)
            ->setFontName($fontName)
            ->setFontBold($fontBold)
            ->setFontUnderline($fontUnderline)
            ->setFontItalic($fontItalic)
            ->setHorizontalAlignment($horizontalAlignment)
            ->setVerticalAlignment($verticalAlignment)
            ->setWordWrap($wordWrap)
            ->setValidationType($validationType)
            ->setSignatoryInputType($signatoryInputType)
            ->setValue($value)
            ->setOptions($options)
            ->setRegex($regex)
            ->setValidationMessage($validationMessage)
            ->setFormatterName($formatterName)
            ->setFormatterCode($formatterCode);
    }
    /**
     * Get FontSize value
     * @return string
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    /**
     * Set FontSize value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fontSize
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFontSize($fontSize = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::valueIsValid($fontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType', is_array($fontSize) ? implode(', ', $fontSize) : var_export($fontSize, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontSizeType::getValidValues())), __LINE__);
        }
        $this->FontSize = $fontSize;
        return $this;
    }
    /**
     * Get FontName value
     * @return string
     */
    public function getFontName()
    {
        return $this->FontName;
    }
    /**
     * Set FontName value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontNameType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontNameType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fontName
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFontName($fontName = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontNameType::valueIsValid($fontName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontNameType', is_array($fontName) ? implode(', ', $fontName) : var_export($fontName, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockFontNameType::getValidValues())), __LINE__);
        }
        $this->FontName = $fontName;
        return $this;
    }
    /**
     * Get FontBold value
     * @return bool
     */
    public function getFontBold()
    {
        return $this->FontBold;
    }
    /**
     * Set FontBold value
     * @param bool $fontBold
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFontBold($fontBold = null)
    {
        // validation for constraint: boolean
        if (!is_null($fontBold) && !is_bool($fontBold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fontBold, true), gettype($fontBold)), __LINE__);
        }
        $this->FontBold = $fontBold;
        return $this;
    }
    /**
     * Get FontUnderline value
     * @return bool
     */
    public function getFontUnderline()
    {
        return $this->FontUnderline;
    }
    /**
     * Set FontUnderline value
     * @param bool $fontUnderline
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFontUnderline($fontUnderline = null)
    {
        // validation for constraint: boolean
        if (!is_null($fontUnderline) && !is_bool($fontUnderline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fontUnderline, true), gettype($fontUnderline)), __LINE__);
        }
        $this->FontUnderline = $fontUnderline;
        return $this;
    }
    /**
     * Get FontItalic value
     * @return bool
     */
    public function getFontItalic()
    {
        return $this->FontItalic;
    }
    /**
     * Set FontItalic value
     * @param bool $fontItalic
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFontItalic($fontItalic = null)
    {
        // validation for constraint: boolean
        if (!is_null($fontItalic) && !is_bool($fontItalic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fontItalic, true), gettype($fontItalic)), __LINE__);
        }
        $this->FontItalic = $fontItalic;
        return $this;
    }
    /**
     * Get HorizontalAlignment value
     * @return string
     */
    public function getHorizontalAlignment()
    {
        return $this->HorizontalAlignment;
    }
    /**
     * Set HorizontalAlignment value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockHorzAlignmentType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockHorzAlignmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $horizontalAlignment
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setHorizontalAlignment($horizontalAlignment = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockHorzAlignmentType::valueIsValid($horizontalAlignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockHorzAlignmentType', is_array($horizontalAlignment) ? implode(', ', $horizontalAlignment) : var_export($horizontalAlignment, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockHorzAlignmentType::getValidValues())), __LINE__);
        }
        $this->HorizontalAlignment = $horizontalAlignment;
        return $this;
    }
    /**
     * Get VerticalAlignment value
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->VerticalAlignment;
    }
    /**
     * Set VerticalAlignment value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockVertAlignmentType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockVertAlignmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $verticalAlignment
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setVerticalAlignment($verticalAlignment = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockVertAlignmentType::valueIsValid($verticalAlignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockVertAlignmentType', is_array($verticalAlignment) ? implode(', ', $verticalAlignment) : var_export($verticalAlignment, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockVertAlignmentType::getValidValues())), __LINE__);
        }
        $this->VerticalAlignment = $verticalAlignment;
        return $this;
    }
    /**
     * Get WordWrap value
     * @return bool
     */
    public function getWordWrap()
    {
        return $this->WordWrap;
    }
    /**
     * Set WordWrap value
     * @param bool $wordWrap
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setWordWrap($wordWrap = null)
    {
        // validation for constraint: boolean
        if (!is_null($wordWrap) && !is_bool($wordWrap)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wordWrap, true), gettype($wordWrap)), __LINE__);
        }
        $this->WordWrap = $wordWrap;
        return $this;
    }
    /**
     * Get ValidationType value
     * @return string
     */
    public function getValidationType()
    {
        return $this->ValidationType;
    }
    /**
     * Set ValidationType value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockValidationType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockValidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $validationType
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setValidationType($validationType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockValidationType::valueIsValid($validationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockValidationType', is_array($validationType) ? implode(', ', $validationType) : var_export($validationType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockValidationType::getValidValues())), __LINE__);
        }
        $this->ValidationType = $validationType;
        return $this;
    }
    /**
     * Get SignatoryInputType value
     * @return string
     */
    public function getSignatoryInputType()
    {
        return $this->SignatoryInputType;
    }
    /**
     * Set SignatoryInputType value
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockSignatoryInputType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\TypedJotBlockSignatoryInputType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $signatoryInputType
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setSignatoryInputType($signatoryInputType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\TypedJotBlockSignatoryInputType::valueIsValid($signatoryInputType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\TypedJotBlockSignatoryInputType', is_array($signatoryInputType) ? implode(', ', $signatoryInputType) : var_export($signatoryInputType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\TypedJotBlockSignatoryInputType::getValidValues())), __LINE__);
        }
        $this->SignatoryInputType = $signatoryInputType;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Options value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption $options
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setOptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedJotBlockOption $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get Regex value
     * @return string|null
     */
    public function getRegex()
    {
        return $this->Regex;
    }
    /**
     * Set Regex value
     * @param string $regex
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setRegex($regex = null)
    {
        // validation for constraint: string
        if (!is_null($regex) && !is_string($regex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regex, true), gettype($regex)), __LINE__);
        }
        $this->Regex = $regex;
        return $this;
    }
    /**
     * Get ValidationMessage value
     * @return string|null
     */
    public function getValidationMessage()
    {
        return $this->ValidationMessage;
    }
    /**
     * Set ValidationMessage value
     * @param string $validationMessage
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setValidationMessage($validationMessage = null)
    {
        // validation for constraint: string
        if (!is_null($validationMessage) && !is_string($validationMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validationMessage, true), gettype($validationMessage)), __LINE__);
        }
        $this->ValidationMessage = $validationMessage;
        return $this;
    }
    /**
     * Get FormatterName value
     * @return string|null
     */
    public function getFormatterName()
    {
        return $this->FormatterName;
    }
    /**
     * Set FormatterName value
     * @param string $formatterName
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFormatterName($formatterName = null)
    {
        // validation for constraint: string
        if (!is_null($formatterName) && !is_string($formatterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatterName, true), gettype($formatterName)), __LINE__);
        }
        $this->FormatterName = $formatterName;
        return $this;
    }
    /**
     * Get FormatterCode value
     * @return string|null
     */
    public function getFormatterCode()
    {
        return $this->FormatterCode;
    }
    /**
     * Set FormatterCode value
     * @param string $formatterCode
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public function setFormatterCode($formatterCode = null)
    {
        // validation for constraint: string
        if (!is_null($formatterCode) && !is_string($formatterCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatterCode, true), gettype($formatterCode)), __LINE__);
        }
        $this->FormatterCode = $formatterCode;
        return $this;
    }
}
