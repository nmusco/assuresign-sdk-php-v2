<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewHistory StructType
 * @subpackage Structs
 */
class ViewHistory extends AbstractStructBase
{
    /**
     * The DocumentHistoryViews
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView
     */
    public $DocumentHistoryViews;
    /**
     * Constructor method for ViewHistory
     * @uses ViewHistory::setDocumentHistoryViews()
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView $documentHistoryViews
     */
    public function __construct(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView $documentHistoryViews = null)
    {
        $this
            ->setDocumentHistoryViews($documentHistoryViews);
    }
    /**
     * Get DocumentHistoryViews value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView|null
     */
    public function getDocumentHistoryViews()
    {
        return $this->DocumentHistoryViews;
    }
    /**
     * Set DocumentHistoryViews value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView $documentHistoryViews
     * @return \Nmusco\AssureSign\v2\StructType\ViewHistory
     */
    public function setDocumentHistoryViews(\Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView $documentHistoryViews = null)
    {
        $this->DocumentHistoryViews = $documentHistoryViews;
        return $this;
    }
}
