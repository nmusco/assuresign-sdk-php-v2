<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentEvent StructType
 * @subpackage Structs
 */
class DocumentEvent extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Date;
    /**
     * The Details
     * @var string
     */
    public $Details;
    /**
     * Constructor method for DocumentEvent
     * @uses DocumentEvent::setDate()
     * @uses DocumentEvent::setDetails()
     * @param string $date
     * @param string $details
     */
    public function __construct($date = null, $details = null)
    {
        $this
            ->setDate($date)
            ->setDetails($details);
    }
    /**
     * Get Date value
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param string $details
     * @return \Nmusco\AssureSign\v2\StructType\DocumentEvent
     */
    public function setDetails($details = null)
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        $this->Details = $details;
        return $this;
    }
}
