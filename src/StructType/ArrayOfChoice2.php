<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice2 StructType
 * @subpackage Structs
 */
class ArrayOfChoice2 extends AbstractStructBase
{
    /**
     * The TypedParameterInfo
     * Meta information extracted from the WSDL
     * - choice: TypedParameterInfo | DrawnParameterInfo
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\TypedParameterInfo
     */
    public $TypedParameterInfo;
    /**
     * The DrawnParameterInfo
     * Meta information extracted from the WSDL
     * - choice: TypedParameterInfo | DrawnParameterInfo
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DrawnParameterInfo
     */
    public $DrawnParameterInfo;
    /**
     * Constructor method for ArrayOfChoice2
     * @uses ArrayOfChoice2::setTypedParameterInfo()
     * @uses ArrayOfChoice2::setDrawnParameterInfo()
     * @param \Nmusco\AssureSign\v2\StructType\TypedParameterInfo $typedParameterInfo
     * @param \Nmusco\AssureSign\v2\StructType\DrawnParameterInfo $drawnParameterInfo
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\TypedParameterInfo $typedParameterInfo = null, \Nmusco\AssureSign\v2\StructType\DrawnParameterInfo $drawnParameterInfo = null)
    {
        $this
            ->setTypedParameterInfo($typedParameterInfo)
            ->setDrawnParameterInfo($drawnParameterInfo);
    }
    /**
     * Get TypedParameterInfo value
     * @return \Nmusco\AssureSign\v2\StructType\TypedParameterInfo
     */
    public function getTypedParameterInfo()
    {
        return isset($this->TypedParameterInfo) ? $this->TypedParameterInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTypedParameterInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTypedParameterInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTypedParameterInfoForChoiceConstraintsFromSetTypedParameterInfo($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DrawnParameterInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property TypedParameterInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: TypedParameterInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set TypedParameterInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\TypedParameterInfo $typedParameterInfo
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2
     */
    public function setTypedParameterInfo(\Nmusco\AssureSign\v2\StructType\TypedParameterInfo $typedParameterInfo = null)
    {
        // validation for constraint: choice(TypedParameterInfo, DrawnParameterInfo)
        if ('' !== ($typedParameterInfoChoiceErrorMessage = self::validateTypedParameterInfoForChoiceConstraintsFromSetTypedParameterInfo($typedParameterInfo))) {
            throw new \InvalidArgumentException($typedParameterInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($typedParameterInfo) || (is_array($typedParameterInfo) && empty($typedParameterInfo))) {
            unset($this->TypedParameterInfo);
        } else {
            $this->TypedParameterInfo = $typedParameterInfo;
        }
        return $this;
    }
    /**
     * Get DrawnParameterInfo value
     * @return \Nmusco\AssureSign\v2\StructType\DrawnParameterInfo
     */
    public function getDrawnParameterInfo()
    {
        return isset($this->DrawnParameterInfo) ? $this->DrawnParameterInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDrawnParameterInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDrawnParameterInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDrawnParameterInfoForChoiceConstraintsFromSetDrawnParameterInfo($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TypedParameterInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DrawnParameterInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: DrawnParameterInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DrawnParameterInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DrawnParameterInfo $drawnParameterInfo
     * @return \Nmusco\AssureSign\v2\StructType\ArrayOfChoice2
     */
    public function setDrawnParameterInfo(\Nmusco\AssureSign\v2\StructType\DrawnParameterInfo $drawnParameterInfo = null)
    {
        // validation for constraint: choice(TypedParameterInfo, DrawnParameterInfo)
        if ('' !== ($drawnParameterInfoChoiceErrorMessage = self::validateDrawnParameterInfoForChoiceConstraintsFromSetDrawnParameterInfo($drawnParameterInfo))) {
            throw new \InvalidArgumentException($drawnParameterInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($drawnParameterInfo) || (is_array($drawnParameterInfo) && empty($drawnParameterInfo))) {
            unset($this->DrawnParameterInfo);
        } else {
            $this->DrawnParameterInfo = $drawnParameterInfo;
        }
        return $this;
    }
}
