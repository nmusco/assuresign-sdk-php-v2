<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadEnvelopeDocumentsResult StructType
 * @subpackage Structs
 */
class DownloadEnvelopeDocumentsResult extends AbstractStructBase
{
    /**
     * The EnvelopeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $EnvelopeId;
    /**
     * The MergedDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile
     */
    public $MergedDocument;
    /**
     * The CompletionReport
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile
     */
    public $CompletionReport;
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument
     */
    public $Documents;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException
     */
    public $Exceptions;
    /**
     * Constructor method for DownloadEnvelopeDocumentsResult
     * @uses DownloadEnvelopeDocumentsResult::setEnvelopeId()
     * @uses DownloadEnvelopeDocumentsResult::setMergedDocument()
     * @uses DownloadEnvelopeDocumentsResult::setCompletionReport()
     * @uses DownloadEnvelopeDocumentsResult::setDocuments()
     * @uses DownloadEnvelopeDocumentsResult::setExceptions()
     * @param string $envelopeId
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $mergedDocument
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completionReport
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     */
    public function __construct($envelopeId = null, \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $mergedDocument = null, \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completionReport = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this
            ->setEnvelopeId($envelopeId)
            ->setMergedDocument($mergedDocument)
            ->setCompletionReport($completionReport)
            ->setDocuments($documents)
            ->setExceptions($exceptions);
    }
    /**
     * Get EnvelopeId value
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->EnvelopeId;
    }
    /**
     * Set EnvelopeId value
     * @param string $envelopeId
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult
     */
    public function setEnvelopeId($envelopeId = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeId) && !is_string($envelopeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeId, true), gettype($envelopeId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeId, true)), __LINE__);
        }
        $this->EnvelopeId = $envelopeId;
        return $this;
    }
    /**
     * Get MergedDocument value
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile|null
     */
    public function getMergedDocument()
    {
        return $this->MergedDocument;
    }
    /**
     * Set MergedDocument value
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $mergedDocument
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult
     */
    public function setMergedDocument(\Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $mergedDocument = null)
    {
        $this->MergedDocument = $mergedDocument;
        return $this;
    }
    /**
     * Get CompletionReport value
     * @return \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile|null
     */
    public function getCompletionReport()
    {
        return $this->CompletionReport;
    }
    /**
     * Set CompletionReport value
     * @param \Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completionReport
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult
     */
    public function setCompletionReport(\Nmusco\AssureSign\v2\StructType\EnvelopeDocumentFile $completionReport = null)
    {
        $this->CompletionReport = $completionReport;
        return $this;
    }
    /**
     * Get Documents value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult
     */
    public function setDocuments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeDocument $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResult
     */
    public function setExceptions(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeException $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
}
