<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentStatusCheckResult StructType
 * @subpackage Structs
 */
class DocumentStatusCheckResult extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException
     */
    public $Exceptions;
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
     * Constructor method for DocumentStatusCheckResult
     * @uses DocumentStatusCheckResult::setId()
     * @uses DocumentStatusCheckResult::setExceptions()
     * @uses DocumentStatusCheckResult::setStatusDate()
     * @uses DocumentStatusCheckResult::setStatusType()
     * @uses DocumentStatusCheckResult::setStatusDetails()
     * @param string $id
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException $exceptions
     * @param string $statusDate
     * @param string $statusType
     * @param string $statusDetails
     */
    public function __construct($id = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException $exceptions = null, $statusDate = null, $statusType = null, $statusDetails = null)
    {
        $this
            ->setId($id)
            ->setExceptions($exceptions)
            ->setStatusDate($statusDate)
            ->setStatusType($statusType)
            ->setStatusDetails($statusDetails);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfStatusCheckException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult
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
     * @uses \Nmusco\AssureSign\v2\EnumType\StatusCheckStatusType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\StatusCheckStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusType
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult
     */
    public function setStatusType($statusType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\StatusCheckStatusType::valueIsValid($statusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\StatusCheckStatusType', is_array($statusType) ? implode(', ', $statusType) : var_export($statusType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\StatusCheckStatusType::getValidValues())), __LINE__);
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentStatusCheckResult
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
}
