<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnderlyingFileMetadata StructType
 * @subpackage Structs
 */
class UnderlyingFileMetadata extends AbstractStructBase
{
    /**
     * The RetrievalMethod
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $RetrievalMethod;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FileType;
    /**
     * The RequiresAuthentication
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RequiresAuthentication;
    /**
     * The Credential
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential
     */
    public $Credential;
    /**
     * The Url
     * @var string
     */
    public $Url;
    /**
     * Constructor method for UnderlyingFileMetadata
     * @uses UnderlyingFileMetadata::setRetrievalMethod()
     * @uses UnderlyingFileMetadata::setFileType()
     * @uses UnderlyingFileMetadata::setRequiresAuthentication()
     * @uses UnderlyingFileMetadata::setCredential()
     * @uses UnderlyingFileMetadata::setUrl()
     * @param string $retrievalMethod
     * @param string $fileType
     * @param bool $requiresAuthentication
     * @param \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential $credential
     * @param string $url
     */
    public function __construct($retrievalMethod = null, $fileType = null, $requiresAuthentication = null, \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential $credential = null, $url = null)
    {
        $this
            ->setRetrievalMethod($retrievalMethod)
            ->setFileType($fileType)
            ->setRequiresAuthentication($requiresAuthentication)
            ->setCredential($credential)
            ->setUrl($url);
    }
    /**
     * Get RetrievalMethod value
     * @return string
     */
    public function getRetrievalMethod()
    {
        return $this->RetrievalMethod;
    }
    /**
     * Set RetrievalMethod value
     * @uses \Nmusco\AssureSign\v2\EnumType\FileRetrievalMethod::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\FileRetrievalMethod::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $retrievalMethod
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
     */
    public function setRetrievalMethod($retrievalMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\FileRetrievalMethod::valueIsValid($retrievalMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\FileRetrievalMethod', is_array($retrievalMethod) ? implode(', ', $retrievalMethod) : var_export($retrievalMethod, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\FileRetrievalMethod::getValidValues())), __LINE__);
        }
        $this->RetrievalMethod = $retrievalMethod;
        return $this;
    }
    /**
     * Get FileType value
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @uses \Nmusco\AssureSign\v2\EnumType\SupportedFileType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\SupportedFileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fileType
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
     */
    public function setFileType($fileType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\SupportedFileType::valueIsValid($fileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\SupportedFileType', is_array($fileType) ? implode(', ', $fileType) : var_export($fileType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\SupportedFileType::getValidValues())), __LINE__);
        }
        $this->FileType = $fileType;
        return $this;
    }
    /**
     * Get RequiresAuthentication value
     * @return bool
     */
    public function getRequiresAuthentication()
    {
        return $this->RequiresAuthentication;
    }
    /**
     * Set RequiresAuthentication value
     * @param bool $requiresAuthentication
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
     */
    public function setRequiresAuthentication($requiresAuthentication = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiresAuthentication) && !is_bool($requiresAuthentication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresAuthentication, true), gettype($requiresAuthentication)), __LINE__);
        }
        $this->RequiresAuthentication = $requiresAuthentication;
        return $this;
    }
    /**
     * Get Credential value
     * @return \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential|null
     */
    public function getCredential()
    {
        return $this->Credential;
    }
    /**
     * Set Credential value
     * @param \Nmusco\AssureSign\v2\StructType\FileRetrievalCredential $credential
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
     */
    public function setCredential(\Nmusco\AssureSign\v2\StructType\FileRetrievalCredential $credential = null)
    {
        $this->Credential = $credential;
        return $this;
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->Url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\UnderlyingFileMetadata
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
