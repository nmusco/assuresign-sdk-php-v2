<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Expire StructType
 * @subpackage Structs
 */
class Expire extends AbstractStructBase
{
    /**
     * The DocumentExpirations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration
     */
    public $DocumentExpirations;
    /**
     * Constructor method for Expire
     * @uses Expire::setDocumentExpirations()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations = null)
    {
        $this
            ->setDocumentExpirations($documentExpirations);
    }
    /**
     * Get DocumentExpirations value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration|null
     */
    public function getDocumentExpirations()
    {
        return $this->DocumentExpirations;
    }
    /**
     * Set DocumentExpirations value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations
     * @return \Nmusco\AssureSign\v2\StructType\Expire
     */
    public function setDocumentExpirations(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentExpiration $documentExpirations = null)
    {
        $this->DocumentExpirations = $documentExpirations;
        return $this;
    }
}
