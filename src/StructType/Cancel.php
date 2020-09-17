<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cancel StructType
 * @subpackage Structs
 */
class Cancel extends AbstractStructBase
{
    /**
     * The DocumentCancellations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation
     */
    public $DocumentCancellations;
    /**
     * Constructor method for Cancel
     * @uses Cancel::setDocumentCancellations()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation $documentCancellations
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation $documentCancellations = null)
    {
        $this
            ->setDocumentCancellations($documentCancellations);
    }
    /**
     * Get DocumentCancellations value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation|null
     */
    public function getDocumentCancellations()
    {
        return $this->DocumentCancellations;
    }
    /**
     * Set DocumentCancellations value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation $documentCancellations
     * @return \Nmusco\AssureSign\v2\StructType\Cancel
     */
    public function setDocumentCancellations(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentCancellation $documentCancellations = null)
    {
        $this->DocumentCancellations = $documentCancellations;
        return $this;
    }
}
