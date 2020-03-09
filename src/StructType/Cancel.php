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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\Cancel
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
