<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnvelopeDocumentStatus StructType
 * @subpackage Structs
 */
class EnvelopeDocumentStatus extends AbstractStructBase
{
    /**
     * The StatusDate
     * @var string
     */
    public $StatusDate;
    /**
     * The StatusType
     * @var string
     */
    public $StatusType;
    /**
     * The StatusDetails
     * @var string
     */
    public $StatusDetails;
    /**
     * Constructor method for EnvelopeDocumentStatus
     * @uses EnvelopeDocumentStatus::setStatusDate()
     * @uses EnvelopeDocumentStatus::setStatusType()
     * @uses EnvelopeDocumentStatus::setStatusDetails()
     * @param string $statusDate
     * @param string $statusType
     * @param string $statusDetails
     */
    public function __construct($statusDate = null, $statusType = null, $statusDetails = null)
    {
        $this
            ->setStatusDate($statusDate)
            ->setStatusType($statusType)
            ->setStatusDetails($statusDetails);
    }
    /**
     * Get StatusDate value
     * @return string|null
     */
    public function getStatusDate()
    {
        return $this->StatusDate;
    }
    /**
     * Set StatusDate value
     * @param string $statusDate
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus
     */
    public function setStatusDate($statusDate = null)
    {
        // validation for constraint: string
        if (!is_null($statusDate) && !is_string($statusDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDate, true), gettype($statusDate)), __LINE__);
        }
        $this->StatusDate = $statusDate;
        return $this;
    }
    /**
     * Get StatusType value
     * @return string|null
     */
    public function getStatusType()
    {
        return $this->StatusType;
    }
    /**
     * Set StatusType value
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeDocumentStatusType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeDocumentStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusType
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus
     */
    public function setStatusType($statusType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\EnvelopeDocumentStatusType::valueIsValid($statusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\EnvelopeDocumentStatusType', is_array($statusType) ? implode(', ', $statusType) : var_export($statusType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\EnvelopeDocumentStatusType::getValidValues())), __LINE__);
        }
        $this->StatusType = $statusType;
        return $this;
    }
    /**
     * Get StatusDetails value
     * @return string|null
     */
    public function getStatusDetails()
    {
        return $this->StatusDetails;
    }
    /**
     * Set StatusDetails value
     * @param string $statusDetails
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus
     */
    public function setStatusDetails($statusDetails = null)
    {
        // validation for constraint: string
        if (!is_null($statusDetails) && !is_string($statusDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDetails, true), gettype($statusDetails)), __LINE__);
        }
        $this->StatusDetails = $statusDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentStatus
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
