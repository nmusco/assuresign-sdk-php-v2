<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TermsAndConditions StructType
 * @subpackage Structs
 */
class TermsAndConditions extends AbstractStructBase
{
    /**
     * The AdditionalComplianceStatement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalComplianceStatement;
    /**
     * The AdditionalAgreementStatement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalAgreementStatement;
    /**
     * The AdditionalExtendedDisclosures
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalExtendedDisclosures;
    /**
     * Constructor method for TermsAndConditions
     * @uses TermsAndConditions::setAdditionalComplianceStatement()
     * @uses TermsAndConditions::setAdditionalAgreementStatement()
     * @uses TermsAndConditions::setAdditionalExtendedDisclosures()
     * @param string $additionalComplianceStatement
     * @param string $additionalAgreementStatement
     * @param string $additionalExtendedDisclosures
     */
    public function __construct($additionalComplianceStatement = null, $additionalAgreementStatement = null, $additionalExtendedDisclosures = null)
    {
        $this
            ->setAdditionalComplianceStatement($additionalComplianceStatement)
            ->setAdditionalAgreementStatement($additionalAgreementStatement)
            ->setAdditionalExtendedDisclosures($additionalExtendedDisclosures);
    }
    /**
     * Get AdditionalComplianceStatement value
     * @return string|null
     */
    public function getAdditionalComplianceStatement()
    {
        return $this->AdditionalComplianceStatement;
    }
    /**
     * Set AdditionalComplianceStatement value
     * @param string $additionalComplianceStatement
     * @return \Nmusco\AssureSign\v2\StructType\TermsAndConditions
     */
    public function setAdditionalComplianceStatement($additionalComplianceStatement = null)
    {
        // validation for constraint: string
        if (!is_null($additionalComplianceStatement) && !is_string($additionalComplianceStatement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalComplianceStatement, true), gettype($additionalComplianceStatement)), __LINE__);
        }
        $this->AdditionalComplianceStatement = $additionalComplianceStatement;
        return $this;
    }
    /**
     * Get AdditionalAgreementStatement value
     * @return string|null
     */
    public function getAdditionalAgreementStatement()
    {
        return $this->AdditionalAgreementStatement;
    }
    /**
     * Set AdditionalAgreementStatement value
     * @param string $additionalAgreementStatement
     * @return \Nmusco\AssureSign\v2\StructType\TermsAndConditions
     */
    public function setAdditionalAgreementStatement($additionalAgreementStatement = null)
    {
        // validation for constraint: string
        if (!is_null($additionalAgreementStatement) && !is_string($additionalAgreementStatement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalAgreementStatement, true), gettype($additionalAgreementStatement)), __LINE__);
        }
        $this->AdditionalAgreementStatement = $additionalAgreementStatement;
        return $this;
    }
    /**
     * Get AdditionalExtendedDisclosures value
     * @return string|null
     */
    public function getAdditionalExtendedDisclosures()
    {
        return $this->AdditionalExtendedDisclosures;
    }
    /**
     * Set AdditionalExtendedDisclosures value
     * @param string $additionalExtendedDisclosures
     * @return \Nmusco\AssureSign\v2\StructType\TermsAndConditions
     */
    public function setAdditionalExtendedDisclosures($additionalExtendedDisclosures = null)
    {
        // validation for constraint: string
        if (!is_null($additionalExtendedDisclosures) && !is_string($additionalExtendedDisclosures)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalExtendedDisclosures, true), gettype($additionalExtendedDisclosures)), __LINE__);
        }
        $this->AdditionalExtendedDisclosures = $additionalExtendedDisclosures;
        return $this;
    }
}
