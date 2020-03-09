<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LookupSession StructType
 * @subpackage Structs
 */
class LookupSession extends AbstractStructBase
{
    /**
     * The SessionLookups
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup
     */
    public $SessionLookups;
    /**
     * Constructor method for LookupSession
     * @uses LookupSession::setSessionLookups()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup $sessionLookups
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup $sessionLookups = null)
    {
        $this
            ->setSessionLookups($sessionLookups);
    }
    /**
     * Get SessionLookups value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup|null
     */
    public function getSessionLookups()
    {
        return $this->SessionLookups;
    }
    /**
     * Set SessionLookups value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup $sessionLookups
     * @return \Nmusco\AssureSign\v2\StructType\LookupSession
     */
    public function setSessionLookups(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookup $sessionLookups = null)
    {
        $this->SessionLookups = $sessionLookups;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\LookupSession
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
