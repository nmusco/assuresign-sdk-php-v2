<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentHistoryViewResult StructType
 * @subpackage Structs
 */
class DocumentHistoryViewResult extends AbstractStructBase
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
     * The Events
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent
     */
    public $Events;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException
     */
    public $Exceptions;
    /**
     * Constructor method for DocumentHistoryViewResult
     * @uses DocumentHistoryViewResult::setId()
     * @uses DocumentHistoryViewResult::setEvents()
     * @uses DocumentHistoryViewResult::setExceptions()
     * @param string $id
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent $events
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException $exceptions
     */
    public function __construct($id = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent $events = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException $exceptions = null)
    {
        $this
            ->setId($id)
            ->setEvents($events)
            ->setExceptions($exceptions);
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
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult
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
     * Get Events value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent|null
     */
    public function getEvents()
    {
        return $this->Events;
    }
    /**
     * Set Events value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent $events
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult
     */
    public function setEvents(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentEvent $events = null)
    {
        $this->Events = $events;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfHistoryViewException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryViewResult
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
