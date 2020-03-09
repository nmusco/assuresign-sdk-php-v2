<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JotBlock StructType
 * @subpackage Structs
 */
class JotBlock extends AbstractStructBase
{
    /**
     * The SigningStep
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
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
     * The Certified
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Certified;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Required;
    /**
     * The InputType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $InputType;
    /**
     * The FixedInputTimingType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FixedInputTimingType;
    /**
     * The Border
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Border;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Page;
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
     * The TypedProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties
     */
    public $TypedProperties;
    /**
     * The WrittenProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties
     */
    public $WrittenProperties;
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
     * The SignatoryEmail
     * @var string
     */
    public $SignatoryEmail;
    /**
     * The SignatoryEmailParameterName
     * @var string
     */
    public $SignatoryEmailParameterName;
    /**
     * The SignatoryMobilePhone
     * @var string
     */
    public $SignatoryMobilePhone;
    /**
     * The SignatoryMobilePhoneParameterName
     * @var string
     */
    public $SignatoryMobilePhoneParameterName;
    /**
     * The ParameterName
     * @var string
     */
    public $ParameterName;
    /**
     * The SourceGroup
     * @var string
     */
    public $SourceGroup;
    /**
     * Constructor method for JotBlock
     * @uses JotBlock::setSigningStep()
     * @uses JotBlock::setSigningOrder()
     * @uses JotBlock::setCertified()
     * @uses JotBlock::setRequired()
     * @uses JotBlock::setInputType()
     * @uses JotBlock::setFixedInputTimingType()
     * @uses JotBlock::setBorder()
     * @uses JotBlock::setPage()
     * @uses JotBlock::setPositionX()
     * @uses JotBlock::setPositionY()
     * @uses JotBlock::setHeight()
     * @uses JotBlock::setWidth()
     * @uses JotBlock::setTypedProperties()
     * @uses JotBlock::setWrittenProperties()
     * @uses JotBlock::setName()
     * @uses JotBlock::setInstructions()
     * @uses JotBlock::setSignatoryEmail()
     * @uses JotBlock::setSignatoryEmailParameterName()
     * @uses JotBlock::setSignatoryMobilePhone()
     * @uses JotBlock::setSignatoryMobilePhoneParameterName()
     * @uses JotBlock::setParameterName()
     * @uses JotBlock::setSourceGroup()
     * @param string $signingStep
     * @param int $signingOrder
     * @param bool $certified
     * @param bool $required
     * @param string $inputType
     * @param string $fixedInputTimingType
     * @param string $border
     * @param int $page
     * @param float $positionX
     * @param float $positionY
     * @param float $height
     * @param float $width
     * @param \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties $typedProperties
     * @param \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties $writtenProperties
     * @param string $name
     * @param string $instructions
     * @param string $signatoryEmail
     * @param string $signatoryEmailParameterName
     * @param string $signatoryMobilePhone
     * @param string $signatoryMobilePhoneParameterName
     * @param string $parameterName
     * @param string $sourceGroup
     */
    public function __construct($signingStep = null, $signingOrder = null, $certified = null, $required = null, $inputType = null, $fixedInputTimingType = null, $border = null, $page = null, $positionX = null, $positionY = null, $height = null, $width = null, \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties $typedProperties = null, \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties $writtenProperties = null, $name = null, $instructions = null, $signatoryEmail = null, $signatoryEmailParameterName = null, $signatoryMobilePhone = null, $signatoryMobilePhoneParameterName = null, $parameterName = null, $sourceGroup = null)
    {
        $this
            ->setSigningStep($signingStep)
            ->setSigningOrder($signingOrder)
            ->setCertified($certified)
            ->setRequired($required)
            ->setInputType($inputType)
            ->setFixedInputTimingType($fixedInputTimingType)
            ->setBorder($border)
            ->setPage($page)
            ->setPositionX($positionX)
            ->setPositionY($positionY)
            ->setHeight($height)
            ->setWidth($width)
            ->setTypedProperties($typedProperties)
            ->setWrittenProperties($writtenProperties)
            ->setName($name)
            ->setInstructions($instructions)
            ->setSignatoryEmail($signatoryEmail)
            ->setSignatoryEmailParameterName($signatoryEmailParameterName)
            ->setSignatoryMobilePhone($signatoryMobilePhone)
            ->setSignatoryMobilePhoneParameterName($signatoryMobilePhoneParameterName)
            ->setParameterName($parameterName)
            ->setSourceGroup($sourceGroup);
    }
    /**
     * Get SigningStep value
     * @return string
     */
    public function getSigningStep()
    {
        return $this->SigningStep;
    }
    /**
     * Set SigningStep value
     * @param string $signingStep
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setSigningStep($signingStep = null)
    {
        // validation for constraint: string
        if (!is_null($signingStep) && !is_string($signingStep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signingStep, true), gettype($signingStep)), __LINE__);
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * Get InputType value
     * @return string
     */
    public function getInputType()
    {
        return $this->InputType;
    }
    /**
     * Set InputType value
     * @uses \Nmusco\AssureSign\v2\EnumType\JotBlockInputType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\JotBlockInputType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inputType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setInputType($inputType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\JotBlockInputType::valueIsValid($inputType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\JotBlockInputType', is_array($inputType) ? implode(', ', $inputType) : var_export($inputType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\JotBlockInputType::getValidValues())), __LINE__);
        }
        $this->InputType = $inputType;
        return $this;
    }
    /**
     * Get FixedInputTimingType value
     * @return string
     */
    public function getFixedInputTimingType()
    {
        return $this->FixedInputTimingType;
    }
    /**
     * Set FixedInputTimingType value
     * @uses \Nmusco\AssureSign\v2\EnumType\JotBlockFixedInputTimingType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\JotBlockFixedInputTimingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fixedInputTimingType
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setFixedInputTimingType($fixedInputTimingType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\JotBlockFixedInputTimingType::valueIsValid($fixedInputTimingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\JotBlockFixedInputTimingType', is_array($fixedInputTimingType) ? implode(', ', $fixedInputTimingType) : var_export($fixedInputTimingType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\JotBlockFixedInputTimingType::getValidValues())), __LINE__);
        }
        $this->FixedInputTimingType = $fixedInputTimingType;
        return $this;
    }
    /**
     * Get Border value
     * @return string
     */
    public function getBorder()
    {
        return $this->Border;
    }
    /**
     * Set Border value
     * @uses \Nmusco\AssureSign\v2\EnumType\JotBlockBorderType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\JotBlockBorderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $border
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setBorder($border = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\JotBlockBorderType::valueIsValid($border)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\JotBlockBorderType', is_array($border) ? implode(', ', $border) : var_export($border, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\JotBlockBorderType::getValidValues())), __LINE__);
        }
        $this->Border = $border;
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * Get TypedProperties value
     * @return \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties|null
     */
    public function getTypedProperties()
    {
        return $this->TypedProperties;
    }
    /**
     * Set TypedProperties value
     * @param \Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties $typedProperties
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setTypedProperties(\Nmusco\AssureSign\v2\StructType\TypedJotBlockProperties $typedProperties = null)
    {
        $this->TypedProperties = $typedProperties;
        return $this;
    }
    /**
     * Get WrittenProperties value
     * @return \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties|null
     */
    public function getWrittenProperties()
    {
        return $this->WrittenProperties;
    }
    /**
     * Set WrittenProperties value
     * @param \Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties $writtenProperties
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setWrittenProperties(\Nmusco\AssureSign\v2\StructType\WrittenJotBlockProperties $writtenProperties = null)
    {
        $this->WrittenProperties = $writtenProperties;
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * Get SignatoryEmail value
     * @return string|null
     */
    public function getSignatoryEmail()
    {
        return $this->SignatoryEmail;
    }
    /**
     * Set SignatoryEmail value
     * @param string $signatoryEmail
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setSignatoryEmail($signatoryEmail = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryEmail) && !is_string($signatoryEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryEmail, true), gettype($signatoryEmail)), __LINE__);
        }
        $this->SignatoryEmail = $signatoryEmail;
        return $this;
    }
    /**
     * Get SignatoryEmailParameterName value
     * @return string|null
     */
    public function getSignatoryEmailParameterName()
    {
        return $this->SignatoryEmailParameterName;
    }
    /**
     * Set SignatoryEmailParameterName value
     * @param string $signatoryEmailParameterName
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setSignatoryEmailParameterName($signatoryEmailParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryEmailParameterName) && !is_string($signatoryEmailParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryEmailParameterName, true), gettype($signatoryEmailParameterName)), __LINE__);
        }
        $this->SignatoryEmailParameterName = $signatoryEmailParameterName;
        return $this;
    }
    /**
     * Get SignatoryMobilePhone value
     * @return string|null
     */
    public function getSignatoryMobilePhone()
    {
        return $this->SignatoryMobilePhone;
    }
    /**
     * Set SignatoryMobilePhone value
     * @param string $signatoryMobilePhone
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setSignatoryMobilePhone($signatoryMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryMobilePhone) && !is_string($signatoryMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryMobilePhone, true), gettype($signatoryMobilePhone)), __LINE__);
        }
        $this->SignatoryMobilePhone = $signatoryMobilePhone;
        return $this;
    }
    /**
     * Get SignatoryMobilePhoneParameterName value
     * @return string|null
     */
    public function getSignatoryMobilePhoneParameterName()
    {
        return $this->SignatoryMobilePhoneParameterName;
    }
    /**
     * Set SignatoryMobilePhoneParameterName value
     * @param string $signatoryMobilePhoneParameterName
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
     */
    public function setSignatoryMobilePhoneParameterName($signatoryMobilePhoneParameterName = null)
    {
        // validation for constraint: string
        if (!is_null($signatoryMobilePhoneParameterName) && !is_string($signatoryMobilePhoneParameterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatoryMobilePhoneParameterName, true), gettype($signatoryMobilePhoneParameterName)), __LINE__);
        }
        $this->SignatoryMobilePhoneParameterName = $signatoryMobilePhoneParameterName;
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\JotBlock
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
