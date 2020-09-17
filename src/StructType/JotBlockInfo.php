<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JotBlockInfo StructType
 * @subpackage Structs
 */
class JotBlockInfo extends AbstractStructBase
{
    /**
     * The SigningStep
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $SigningStep;
    /**
     * The SigningOrder
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $SigningOrder;
    /**
     * The FieldType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldType;
    /**
     * The InputType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $InputType;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Required;
    /**
     * The Certified
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Certified;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Height;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Width;
    /**
     * The PositionX
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $PositionX;
    /**
     * The PositionY
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $PositionY;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Page;
    /**
     * The FontSize
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FontSize;
    /**
     * The SignatureFontSize
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SignatureFontSize;
    /**
     * The SignatureType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SignatureType;
    /**
     * The FontBold
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FontBold;
    /**
     * The FontItalic
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FontItalic;
    /**
     * The FontUnderline
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FontUnderline;
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
     * The TypedFieldValidationType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $TypedFieldValidationType;
    /**
     * The TypedFieldOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo
     */
    public $TypedFieldOptions;
    /**
     * The FixedInputTimingType
     * @var string
     */
    public $FixedInputTimingType;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Instructions
     * @var string
     */
    public $Instructions;
    /**
     * The Border
     * @var string
     */
    public $Border;
    /**
     * The InkColor
     * @var string
     */
    public $InkColor;
    /**
     * The SourceGroup
     * @var string
     */
    public $SourceGroup;
    /**
     * The TypedData
     * @var string
     */
    public $TypedData;
    /**
     * The ParameterName
     * @var string
     */
    public $ParameterName;
    /**
     * The FontName
     * @var string
     */
    public $FontName;
    /**
     * The TypedFieldValidationName
     * @var string
     */
    public $TypedFieldValidationName;
    /**
     * The TypedFieldSignatoryInputType
     * @var string
     */
    public $TypedFieldSignatoryInputType;
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
     * The Signatory
     * @var string
     */
    public $Signatory;
    /**
     * The Value
     * @var string
     */
    public $Value;
    /**
     * Constructor method for JotBlockInfo
     * @uses JotBlockInfo::setSigningStep()
     * @uses JotBlockInfo::setSigningOrder()
     * @uses JotBlockInfo::setFieldType()
     * @uses JotBlockInfo::setInputType()
     * @uses JotBlockInfo::setRequired()
     * @uses JotBlockInfo::setCertified()
     * @uses JotBlockInfo::setHeight()
     * @uses JotBlockInfo::setWidth()
     * @uses JotBlockInfo::setPositionX()
     * @uses JotBlockInfo::setPositionY()
     * @uses JotBlockInfo::setPage()
     * @uses JotBlockInfo::setFontSize()
     * @uses JotBlockInfo::setSignatureFontSize()
     * @uses JotBlockInfo::setSignatureType()
     * @uses JotBlockInfo::setFontBold()
     * @uses JotBlockInfo::setFontItalic()
     * @uses JotBlockInfo::setFontUnderline()
     * @uses JotBlockInfo::setHorizontalAlignment()
     * @uses JotBlockInfo::setVerticalAlignment()
     * @uses JotBlockInfo::setWordWrap()
     * @uses JotBlockInfo::setTypedFieldValidationType()
     * @uses JotBlockInfo::setTypedFieldOptions()
     * @uses JotBlockInfo::setFixedInputTimingType()
     * @uses JotBlockInfo::setName()
     * @uses JotBlockInfo::setInstructions()
     * @uses JotBlockInfo::setBorder()
     * @uses JotBlockInfo::setInkColor()
     * @uses JotBlockInfo::setSourceGroup()
     * @uses JotBlockInfo::setTypedData()
     * @uses JotBlockInfo::setParameterName()
     * @uses JotBlockInfo::setFontName()
     * @uses JotBlockInfo::setTypedFieldValidationName()
     * @uses JotBlockInfo::setTypedFieldSignatoryInputType()
     * @uses JotBlockInfo::setRegex()
     * @uses JotBlockInfo::setValidationMessage()
     * @uses JotBlockInfo::setFormatterName()
     * @uses JotBlockInfo::setFormatterCode()
     * @uses JotBlockInfo::setSignatory()
     * @uses JotBlockInfo::setValue()
     * @param int $signingStep
     * @param int $signingOrder
     * @param string $fieldType
     * @param string $inputType
     * @param bool $required
     * @param bool $certified
     * @param float $height
     * @param float $width
     * @param float $positionX
     * @param float $positionY
     * @param int $page
     * @param string $fontSize
     * @param string $signatureFontSize
     * @param string $signatureType
     * @param bool $fontBold
     * @param bool $fontItalic
     * @param bool $fontUnderline
     * @param string $horizontalAlignment
     * @param string $verticalAlignment
     * @param bool $wordWrap
     * @param string $typedFieldValidationType
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo $typedFieldOptions
     * @param string $fixedInputTimingType
     * @param string $name
     * @param string $instructions
     * @param string $border
     * @param string $inkColor
     * @param string $sourceGroup
     * @param string $typedData
     * @param string $parameterName
     * @param string $fontName
     * @param string $typedFieldValidationName
     * @param string $typedFieldSignatoryInputType
     * @param string $regex
     * @param string $validationMessage
     * @param string $formatterName
     * @param string $formatterCode
     * @param string $signatory
     * @param string $value
     */
    public function __construct($signingStep = null, $signingOrder = null, $fieldType = null, $inputType = null, $required = null, $certified = null, $height = null, $width = null, $positionX = null, $positionY = null, $page = null, $fontSize = null, $signatureFontSize = null, $signatureType = null, $fontBold = null, $fontItalic = null, $fontUnderline = null, $horizontalAlignment = null, $verticalAlignment = null, $wordWrap = null, $typedFieldValidationType = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo $typedFieldOptions = null, $fixedInputTimingType = null, $name = null, $instructions = null, $border = null, $inkColor = null, $sourceGroup = null, $typedData = null, $parameterName = null, $fontName = null, $typedFieldValidationName = null, $typedFieldSignatoryInputType = null, $regex = null, $validationMessage = null, $formatterName = null, $formatterCode = null, $signatory = null, $value = null)
    {
        $this
            ->setSigningStep($signingStep)
            ->setSigningOrder($signingOrder)
            ->setFieldType($fieldType)
            ->setInputType($inputType)
            ->setRequired($required)
            ->setCertified($certified)
            ->setHeight($height)
            ->setWidth($width)
            ->setPositionX($positionX)
            ->setPositionY($positionY)
            ->setPage($page)
            ->setFontSize($fontSize)
            ->setSignatureFontSize($signatureFontSize)
            ->setSignatureType($signatureType)
            ->setFontBold($fontBold)
            ->setFontItalic($fontItalic)
            ->setFontUnderline($fontUnderline)
            ->setHorizontalAlignment($horizontalAlignment)
            ->setVerticalAlignment($verticalAlignment)
            ->setWordWrap($wordWrap)
            ->setTypedFieldValidationType($typedFieldValidationType)
            ->setTypedFieldOptions($typedFieldOptions)
            ->setFixedInputTimingType($fixedInputTimingType)
            ->setName($name)
            ->setInstructions($instructions)
            ->setBorder($border)
            ->setInkColor($inkColor)
            ->setSourceGroup($sourceGroup)
            ->setTypedData($typedData)
            ->setParameterName($parameterName)
            ->setFontName($fontName)
            ->setTypedFieldValidationName($typedFieldValidationName)
            ->setTypedFieldSignatoryInputType($typedFieldSignatoryInputType)
            ->setRegex($regex)
            ->setValidationMessage($validationMessage)
            ->setFormatterName($formatterName)
            ->setFormatterCode($formatterCode)
            ->setSignatory($signatory)
            ->setValue($value);
    }
    /**
     * Get SigningStep value
     * @return int
     */
    public function getSigningStep()
    {
        return $this->SigningStep;
    }
    /**
     * Set SigningStep value
     * @param int $signingStep
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setSigningStep($signingStep = null)
    {
        // validation for constraint: int
        if (!is_null($signingStep) && !(is_int($signingStep) || ctype_digit($signingStep))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signingStep, true), gettype($signingStep)), __LINE__);
        }
        $this->SigningStep = $signingStep;
        return $this;
    }
    /**
     * Get SigningOrder value
     * @return int
     */
    public function getSigningOrder()
    {
        return $this->SigningOrder;
    }
    /**
     * Set SigningOrder value
     * @param int $signingOrder
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setSigningOrder($signingOrder = null)
    {
        // validation for constraint: int
        if (!is_null($signingOrder) && !(is_int($signingOrder) || ctype_digit($signingOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signingOrder, true), gettype($signingOrder)), __LINE__);
        }
        $this->SigningOrder = $signingOrder;
        return $this;
    }
    /**
     * Get FieldType value
     * @return string
     */
    public function getFieldType()
    {
        return $this->FieldType;
    }
    /**
     * Set FieldType value
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fieldType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setFieldType($fieldType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FieldType::valueIsValid($fieldType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FieldType', is_array($fieldType) ? implode(', ', $fieldType) : var_export($fieldType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FieldType::getValidValues())), __LINE__);
        }
        $this->FieldType = $fieldType;
        return $this;
    }
    /**
     * Get InputType value
     * @return string
     */
    public function getInputType()
    {
        return $this->InputType;
    }
    /**
     * Set InputType value
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldInputType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldInputType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inputType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setInputType($inputType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FieldInputType::valueIsValid($inputType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FieldInputType', is_array($inputType) ? implode(', ', $inputType) : var_export($inputType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FieldInputType::getValidValues())), __LINE__);
        }
        $this->InputType = $inputType;
        return $this;
    }
    /**
     * Get Required value
     * @return bool
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Get Certified value
     * @return bool
     */
    public function getCertified()
    {
        return $this->Certified;
    }
    /**
     * Set Certified value
     * @param bool $certified
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setCertified($certified = null)
    {
        // validation for constraint: boolean
        if (!is_null($certified) && !is_bool($certified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($certified, true), gettype($certified)), __LINE__);
        }
        $this->Certified = $certified;
        return $this;
    }
    /**
     * Get Height value
     * @return float
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setHeight($height = null)
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return float
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setWidth($width = null)
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get PositionX value
     * @return float
     */
    public function getPositionX()
    {
        return $this->PositionX;
    }
    /**
     * Set PositionX value
     * @param float $positionX
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setPositionX($positionX = null)
    {
        // validation for constraint: float
        if (!is_null($positionX) && !(is_float($positionX) || is_numeric($positionX))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($positionX, true), gettype($positionX)), __LINE__);
        }
        $this->PositionX = $positionX;
        return $this;
    }
    /**
     * Get PositionY value
     * @return float
     */
    public function getPositionY()
    {
        return $this->PositionY;
    }
    /**
     * Set PositionY value
     * @param float $positionY
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setPositionY($positionY = null)
    {
        // validation for constraint: float
        if (!is_null($positionY) && !(is_float($positionY) || is_numeric($positionY))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($positionY, true), gettype($positionY)), __LINE__);
        }
        $this->PositionY = $positionY;
        return $this;
    }
    /**
     * Get Page value
     * @return int
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
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
     * @param string $fontSize
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setFontSize($fontSize = null)
    {
        // validation for constraint: string
        if (!is_null($fontSize) && !is_string($fontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fontSize, true), gettype($fontSize)), __LINE__);
        }
        $this->FontSize = $fontSize;
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
     * @param string $signatureFontSize
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setSignatureFontSize($signatureFontSize = null)
    {
        // validation for constraint: string
        if (!is_null($signatureFontSize) && !is_string($signatureFontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureFontSize, true), gettype($signatureFontSize)), __LINE__);
        }
        $this->SignatureFontSize = $signatureFontSize;
        return $this;
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * Get HorizontalAlignment value
     * @return string
     */
    public function getHorizontalAlignment()
    {
        return $this->HorizontalAlignment;
    }
    /**
     * Set HorizontalAlignment value
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldHorizontalAlignmentType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldHorizontalAlignmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $horizontalAlignment
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setHorizontalAlignment($horizontalAlignment = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FieldHorizontalAlignmentType::valueIsValid($horizontalAlignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FieldHorizontalAlignmentType', is_array($horizontalAlignment) ? implode(', ', $horizontalAlignment) : var_export($horizontalAlignment, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FieldHorizontalAlignmentType::getValidValues())), __LINE__);
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
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldVerticalAlignmentType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldVerticalAlignmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $verticalAlignment
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setVerticalAlignment($verticalAlignment = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FieldVerticalAlignmentType::valueIsValid($verticalAlignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FieldVerticalAlignmentType', is_array($verticalAlignment) ? implode(', ', $verticalAlignment) : var_export($verticalAlignment, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FieldVerticalAlignmentType::getValidValues())), __LINE__);
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * Get TypedFieldValidationType value
     * @return string
     */
    public function getTypedFieldValidationType()
    {
        return $this->TypedFieldValidationType;
    }
    /**
     * Set TypedFieldValidationType value
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldValidationType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldValidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $typedFieldValidationType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setTypedFieldValidationType($typedFieldValidationType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FieldValidationType::valueIsValid($typedFieldValidationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FieldValidationType', is_array($typedFieldValidationType) ? implode(', ', $typedFieldValidationType) : var_export($typedFieldValidationType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FieldValidationType::getValidValues())), __LINE__);
        }
        $this->TypedFieldValidationType = $typedFieldValidationType;
        return $this;
    }
    /**
     * Get TypedFieldOptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo|null
     */
    public function getTypedFieldOptions()
    {
        return $this->TypedFieldOptions;
    }
    /**
     * Set TypedFieldOptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo $typedFieldOptions
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setTypedFieldOptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfTypedOptionInfo $typedFieldOptions = null)
    {
        $this->TypedFieldOptions = $typedFieldOptions;
        return $this;
    }
    /**
     * Get FixedInputTimingType value
     * @return string|null
     */
    public function getFixedInputTimingType()
    {
        return $this->FixedInputTimingType;
    }
    /**
     * Set FixedInputTimingType value
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldFixedInputTimingType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FieldFixedInputTimingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fixedInputTimingType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setFixedInputTimingType($fixedInputTimingType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FieldFixedInputTimingType::valueIsValid($fixedInputTimingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FieldFixedInputTimingType', is_array($fixedInputTimingType) ? implode(', ', $fixedInputTimingType) : var_export($fixedInputTimingType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FieldFixedInputTimingType::getValidValues())), __LINE__);
        }
        $this->FixedInputTimingType = $fixedInputTimingType;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Instructions value
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }
    /**
     * Set Instructions value
     * @param string $instructions
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setInstructions($instructions = null)
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        $this->Instructions = $instructions;
        return $this;
    }
    /**
     * Get Border value
     * @return string|null
     */
    public function getBorder()
    {
        return $this->Border;
    }
    /**
     * Set Border value
     * @param string $border
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setBorder($border = null)
    {
        // validation for constraint: string
        if (!is_null($border) && !is_string($border)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($border, true), gettype($border)), __LINE__);
        }
        $this->Border = $border;
        return $this;
    }
    /**
     * Get InkColor value
     * @return string|null
     */
    public function getInkColor()
    {
        return $this->InkColor;
    }
    /**
     * Set InkColor value
     * @param string $inkColor
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setInkColor($inkColor = null)
    {
        // validation for constraint: string
        if (!is_null($inkColor) && !is_string($inkColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkColor, true), gettype($inkColor)), __LINE__);
        }
        $this->InkColor = $inkColor;
        return $this;
    }
    /**
     * Get SourceGroup value
     * @return string|null
     */
    public function getSourceGroup()
    {
        return $this->SourceGroup;
    }
    /**
     * Set SourceGroup value
     * @param string $sourceGroup
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setSourceGroup($sourceGroup = null)
    {
        // validation for constraint: string
        if (!is_null($sourceGroup) && !is_string($sourceGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceGroup, true), gettype($sourceGroup)), __LINE__);
        }
        $this->SourceGroup = $sourceGroup;
        return $this;
    }
    /**
     * Get TypedData value
     * @return string|null
     */
    public function getTypedData()
    {
        return $this->TypedData;
    }
    /**
     * Set TypedData value
     * @param string $typedData
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setTypedData($typedData = null)
    {
        // validation for constraint: string
        if (!is_null($typedData) && !is_string($typedData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typedData, true), gettype($typedData)), __LINE__);
        }
        $this->TypedData = $typedData;
        return $this;
    }
    /**
     * Get ParameterName value
     * @return string|null
     */
    public function getParameterName()
    {
        return $this->ParameterName;
    }
    /**
     * Set ParameterName value
     * @param string $parameterName
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setParameterName($parameterName = null)
    {
        // validation for constraint: string
        if (!is_null($parameterName) && !is_string($parameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameterName, true), gettype($parameterName)), __LINE__);
        }
        $this->ParameterName = $parameterName;
        return $this;
    }
    /**
     * Get FontName value
     * @return string|null
     */
    public function getFontName()
    {
        return $this->FontName;
    }
    /**
     * Set FontName value
     * @param string $fontName
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setFontName($fontName = null)
    {
        // validation for constraint: string
        if (!is_null($fontName) && !is_string($fontName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fontName, true), gettype($fontName)), __LINE__);
        }
        $this->FontName = $fontName;
        return $this;
    }
    /**
     * Get TypedFieldValidationName value
     * @return string|null
     */
    public function getTypedFieldValidationName()
    {
        return $this->TypedFieldValidationName;
    }
    /**
     * Set TypedFieldValidationName value
     * @param string $typedFieldValidationName
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setTypedFieldValidationName($typedFieldValidationName = null)
    {
        // validation for constraint: string
        if (!is_null($typedFieldValidationName) && !is_string($typedFieldValidationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typedFieldValidationName, true), gettype($typedFieldValidationName)), __LINE__);
        }
        $this->TypedFieldValidationName = $typedFieldValidationName;
        return $this;
    }
    /**
     * Get TypedFieldSignatoryInputType value
     * @return string|null
     */
    public function getTypedFieldSignatoryInputType()
    {
        return $this->TypedFieldSignatoryInputType;
    }
    /**
     * Set TypedFieldSignatoryInputType value
     * @uses \Nmusco\AssureSign\v2\EnumType\SignatoryInputType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\SignatoryInputType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $typedFieldSignatoryInputType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setTypedFieldSignatoryInputType($typedFieldSignatoryInputType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\SignatoryInputType::valueIsValid($typedFieldSignatoryInputType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\SignatoryInputType', is_array($typedFieldSignatoryInputType) ? implode(', ', $typedFieldSignatoryInputType) : var_export($typedFieldSignatoryInputType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\SignatoryInputType::getValidValues())), __LINE__);
        }
        $this->TypedFieldSignatoryInputType = $typedFieldSignatoryInputType;
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
    /**
     * Get Signatory value
     * @return string|null
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    /**
     * Set Signatory value
     * @param string $signatory
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
     */
    public function setSignatory($signatory = null)
    {
        // validation for constraint: string
        if (!is_null($signatory) && !is_string($signatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatory, true), gettype($signatory)), __LINE__);
        }
        $this->Signatory = $signatory;
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlockInfo
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
}
