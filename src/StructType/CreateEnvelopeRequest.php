<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEnvelopeRequest StructType
 * @subpackage Structs
 */
class CreateEnvelopeRequest extends AbstractStructBase
{
    /**
     * The ContextIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $ContextIdentifier;
    /**
     * The EnvelopeTemplateId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * - use: required
     * @var string
     */
    public $EnvelopeTemplateId;
    /**
     * The WorkflowType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $WorkflowType;
    /**
     * The DeclineBehavior
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DeclineBehavior;
    /**
     * The ViewBehavior
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ViewBehavior;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment
     */
    public $Attachments;
    /**
     * The UserName
     * @var string
     */
    public $UserName;
    /**
     * The EnvelopeName
     * @var string
     */
    public $EnvelopeName;
    /**
     * The EnvelopeOrderNumber
     * @var string
     */
    public $EnvelopeOrderNumber;
    /**
     * The RedirectUrl
     * @var string
     */
    public $RedirectUrl;
    /**
     * The EnvelopePassword
     * @var string
     */
    public $EnvelopePassword;
    /**
     * The ExpirationDate
     * @var string
     */
    public $ExpirationDate;
    /**
     * Constructor method for CreateEnvelopeRequest
     * @uses CreateEnvelopeRequest::setContextIdentifier()
     * @uses CreateEnvelopeRequest::setEnvelopeTemplateId()
     * @uses CreateEnvelopeRequest::setWorkflowType()
     * @uses CreateEnvelopeRequest::setDeclineBehavior()
     * @uses CreateEnvelopeRequest::setViewBehavior()
     * @uses CreateEnvelopeRequest::setAttachments()
     * @uses CreateEnvelopeRequest::setUserName()
     * @uses CreateEnvelopeRequest::setEnvelopeName()
     * @uses CreateEnvelopeRequest::setEnvelopeOrderNumber()
     * @uses CreateEnvelopeRequest::setRedirectUrl()
     * @uses CreateEnvelopeRequest::setEnvelopePassword()
     * @uses CreateEnvelopeRequest::setExpirationDate()
     * @param string $contextIdentifier
     * @param string $envelopeTemplateId
     * @param string $workflowType
     * @param string $declineBehavior
     * @param string $viewBehavior
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment $attachments
     * @param string $userName
     * @param string $envelopeName
     * @param string $envelopeOrderNumber
     * @param string $redirectUrl
     * @param string $envelopePassword
     * @param string $expirationDate
     */
    public function __construct($contextIdentifier = null, $envelopeTemplateId = null, $workflowType = null, $declineBehavior = null, $viewBehavior = null, \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment $attachments = null, $userName = null, $envelopeName = null, $envelopeOrderNumber = null, $redirectUrl = null, $envelopePassword = null, $expirationDate = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setEnvelopeTemplateId($envelopeTemplateId)
            ->setWorkflowType($workflowType)
            ->setDeclineBehavior($declineBehavior)
            ->setViewBehavior($viewBehavior)
            ->setAttachments($attachments)
            ->setUserName($userName)
            ->setEnvelopeName($envelopeName)
            ->setEnvelopeOrderNumber($envelopeOrderNumber)
            ->setRedirectUrl($redirectUrl)
            ->setEnvelopePassword($envelopePassword)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get ContextIdentifier value
     * @return string
     */
    public function getContextIdentifier()
    {
        return $this->ContextIdentifier;
    }
    /**
     * Set ContextIdentifier value
     * @param string $contextIdentifier
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setContextIdentifier($contextIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($contextIdentifier) && !is_string($contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextIdentifier, true), gettype($contextIdentifier)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($contextIdentifier) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $contextIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($contextIdentifier, true)), __LINE__);
        }
        $this->ContextIdentifier = $contextIdentifier;
        return $this;
    }
    /**
     * Get EnvelopeTemplateId value
     * @return string
     */
    public function getEnvelopeTemplateId()
    {
        return $this->EnvelopeTemplateId;
    }
    /**
     * Set EnvelopeTemplateId value
     * @param string $envelopeTemplateId
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setEnvelopeTemplateId($envelopeTemplateId = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeTemplateId) && !is_string($envelopeTemplateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeTemplateId, true), gettype($envelopeTemplateId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeTemplateId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeTemplateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeTemplateId, true)), __LINE__);
        }
        $this->EnvelopeTemplateId = $envelopeTemplateId;
        return $this;
    }
    /**
     * Get WorkflowType value
     * @return string
     */
    public function getWorkflowType()
    {
        return $this->WorkflowType;
    }
    /**
     * Set WorkflowType value
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeWorkflowType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeWorkflowType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $workflowType
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setWorkflowType($workflowType = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\EnvelopeWorkflowType::valueIsValid($workflowType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\EnvelopeWorkflowType', is_array($workflowType) ? implode(', ', $workflowType) : var_export($workflowType, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\EnvelopeWorkflowType::getValidValues())), __LINE__);
        }
        $this->WorkflowType = $workflowType;
        return $this;
    }
    /**
     * Get DeclineBehavior value
     * @return string
     */
    public function getDeclineBehavior()
    {
        return $this->DeclineBehavior;
    }
    /**
     * Set DeclineBehavior value
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeDeclineBehaviorType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeDeclineBehaviorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $declineBehavior
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setDeclineBehavior($declineBehavior = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\EnvelopeDeclineBehaviorType::valueIsValid($declineBehavior)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\EnvelopeDeclineBehaviorType', is_array($declineBehavior) ? implode(', ', $declineBehavior) : var_export($declineBehavior, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\EnvelopeDeclineBehaviorType::getValidValues())), __LINE__);
        }
        $this->DeclineBehavior = $declineBehavior;
        return $this;
    }
    /**
     * Get ViewBehavior value
     * @return string
     */
    public function getViewBehavior()
    {
        return $this->ViewBehavior;
    }
    /**
     * Set ViewBehavior value
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeViewBehaviorType::valueIsValid()
     * @uses \Nmusco\AssureSign\v2\EnumType\EnvelopeViewBehaviorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $viewBehavior
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setViewBehavior($viewBehavior = null)
    {
        // validation for constraint: enumeration
        if (!\Nmusco\AssureSign\v2\EnumType\EnvelopeViewBehaviorType::valueIsValid($viewBehavior)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Nmusco\AssureSign\v2\EnumType\EnvelopeViewBehaviorType', is_array($viewBehavior) ? implode(', ', $viewBehavior) : var_export($viewBehavior, true), implode(', ', \Nmusco\AssureSign\v2\EnumType\EnvelopeViewBehaviorType::getValidValues())), __LINE__);
        }
        $this->ViewBehavior = $viewBehavior;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment $attachments
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setAttachments(\Nmusco\AssureSign\v2\ArrayType\ArrayOfEnvelopeAttachment $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get EnvelopeName value
     * @return string|null
     */
    public function getEnvelopeName()
    {
        return $this->EnvelopeName;
    }
    /**
     * Set EnvelopeName value
     * @param string $envelopeName
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setEnvelopeName($envelopeName = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeName) && !is_string($envelopeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeName, true), gettype($envelopeName)), __LINE__);
        }
        $this->EnvelopeName = $envelopeName;
        return $this;
    }
    /**
     * Get EnvelopeOrderNumber value
     * @return string|null
     */
    public function getEnvelopeOrderNumber()
    {
        return $this->EnvelopeOrderNumber;
    }
    /**
     * Set EnvelopeOrderNumber value
     * @param string $envelopeOrderNumber
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setEnvelopeOrderNumber($envelopeOrderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeOrderNumber) && !is_string($envelopeOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeOrderNumber, true), gettype($envelopeOrderNumber)), __LINE__);
        }
        $this->EnvelopeOrderNumber = $envelopeOrderNumber;
        return $this;
    }
    /**
     * Get RedirectUrl value
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->RedirectUrl;
    }
    /**
     * Set RedirectUrl value
     * @param string $redirectUrl
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setRedirectUrl($redirectUrl = null)
    {
        // validation for constraint: string
        if (!is_null($redirectUrl) && !is_string($redirectUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirectUrl, true), gettype($redirectUrl)), __LINE__);
        }
        $this->RedirectUrl = $redirectUrl;
        return $this;
    }
    /**
     * Get EnvelopePassword value
     * @return string|null
     */
    public function getEnvelopePassword()
    {
        return $this->EnvelopePassword;
    }
    /**
     * Set EnvelopePassword value
     * @param string $envelopePassword
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setEnvelopePassword($envelopePassword = null)
    {
        // validation for constraint: string
        if (!is_null($envelopePassword) && !is_string($envelopePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopePassword, true), gettype($envelopePassword)), __LINE__);
        }
        $this->EnvelopePassword = $envelopePassword;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeRequest
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
