<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentValuesException StructType
 * @subpackage Structs
 */
class DocumentValuesException extends AbstractStructBase
{
    /**
     * The Severity
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Severity;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for DocumentValuesException
     * @uses DocumentValuesException::setSeverity()
     * @uses DocumentValuesException::set_()
     * @param string $severity
     * @param string $_
     */
    public function __construct($severity = null, $_ = null)
    {
        $this
            ->setSeverity($severity)
            ->set_($_);
    }
    /**
     * Get Severity value
     * @return string
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \Nmusco\AssureSign\v2\EnumType\DocumentValuesExceptionSeverity::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\DocumentValuesExceptionSeverity::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severity
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\DocumentValuesExceptionSeverity::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\DocumentValuesExceptionSeverity', is_array($severity) ? implode(', ', $severity) : var_export($severity, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\DocumentValuesExceptionSeverity::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Nmusco\AssureSign\v2\StructType\DocumentValuesException
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
}
