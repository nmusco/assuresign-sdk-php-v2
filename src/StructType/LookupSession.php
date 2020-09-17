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
}
