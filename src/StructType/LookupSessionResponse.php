<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LookupSessionResponse StructType
 * @subpackage Structs
 */
class LookupSessionResponse extends AbstractStructBase
{
    /**
     * The SessionLookupResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult
     */
    public $SessionLookupResults;
    /**
     * Constructor method for LookupSessionResponse
     * @uses LookupSessionResponse::setSessionLookupResults()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult $sessionLookupResults
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult $sessionLookupResults = null)
    {
        $this
            ->setSessionLookupResults($sessionLookupResults);
    }
    /**
     * Get SessionLookupResults value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult|null
     */
    public function getSessionLookupResults()
    {
        return $this->SessionLookupResults;
    }
    /**
     * Set SessionLookupResults value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult $sessionLookupResults
     * @return \Nmusco\AssureSign\v2\StructType\LookupSessionResponse
     */
    public function setSessionLookupResults(\Nmusco\AssureSign\v2\ArrayType\ArrayOfSessionLookupResult $sessionLookupResults = null)
    {
        $this->SessionLookupResults = $sessionLookupResults;
        return $this;
    }
}
