<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendNotificationRequest StructType
 * @subpackage Structs
 */
class ResendNotificationRequest extends AbstractStructBase
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
     * The EmailNotification
     * Meta information extracted from the WSDL
     * - choice: EmailNotification | SmsNotification | WebNotification | DocumentTransmission
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\EmailNotification
     */
    public $EmailNotification;
    /**
     * The SmsNotification
     * Meta information extracted from the WSDL
     * - choice: EmailNotification | SmsNotification | WebNotification | DocumentTransmission
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\SmsNotification
     */
    public $SmsNotification;
    /**
     * The WebNotification
     * Meta information extracted from the WSDL
     * - choice: EmailNotification | SmsNotification | WebNotification | DocumentTransmission
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\WebNotification
     */
    public $WebNotification;
    /**
     * The DocumentTransmission
     * Meta information extracted from the WSDL
     * - choice: EmailNotification | SmsNotification | WebNotification | DocumentTransmission
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DocumentTransmission
     */
    public $DocumentTransmission;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $Id;
    /**
     * The AuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $AuthToken;
    /**
     * The EnvelopeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $EnvelopeId;
    /**
     * The EnvelopeAuthToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $EnvelopeAuthToken;
    /**
     * Constructor method for ResendNotificationRequest
     * @uses ResendNotificationRequest::setContextIdentifier()
     * @uses ResendNotificationRequest::setEmailNotification()
     * @uses ResendNotificationRequest::setSmsNotification()
     * @uses ResendNotificationRequest::setWebNotification()
     * @uses ResendNotificationRequest::setDocumentTransmission()
     * @uses ResendNotificationRequest::setId()
     * @uses ResendNotificationRequest::setAuthToken()
     * @uses ResendNotificationRequest::setEnvelopeId()
     * @uses ResendNotificationRequest::setEnvelopeAuthToken()
     * @param string $contextIdentifier
     * @param \Nmusco\AssureSign\v2\StructType\EmailNotification $emailNotification
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotification $smsNotification
     * @param \Nmusco\AssureSign\v2\StructType\WebNotification $webNotification
     * @param \Nmusco\AssureSign\v2\StructType\DocumentTransmission $documentTransmission
     * @param string $id
     * @param string $authToken
     * @param string $envelopeId
     * @param string $envelopeAuthToken
     */
    public function __construct($contextIdentifier = null, \Nmusco\AssureSign\v2\StructType\EmailNotification $emailNotification = null, \Nmusco\AssureSign\v2\StructType\SmsNotification $smsNotification = null, \Nmusco\AssureSign\v2\StructType\WebNotification $webNotification = null, \Nmusco\AssureSign\v2\StructType\DocumentTransmission $documentTransmission = null, $id = null, $authToken = null, $envelopeId = null, $envelopeAuthToken = null)
    {
        $this
            ->setContextIdentifier($contextIdentifier)
            ->setEmailNotification($emailNotification)
            ->setSmsNotification($smsNotification)
            ->setWebNotification($webNotification)
            ->setDocumentTransmission($documentTransmission)
            ->setId($id)
            ->setAuthToken($authToken)
            ->setEnvelopeId($envelopeId)
            ->setEnvelopeAuthToken($envelopeAuthToken);
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
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
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
     * Get EmailNotification value
     * @return \Nmusco\AssureSign\v2\StructType\EmailNotification|null
     */
    public function getEmailNotification()
    {
        return isset($this->EmailNotification) ? $this->EmailNotification : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmailNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailNotification method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmailNotificationForChoiceConstraintsFromSetEmailNotification($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SmsNotification',
            'WebNotification',
            'DocumentTransmission',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property EmailNotification can\'t be set as the property %s is already set. Only one property must be set among these properties: EmailNotification, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set EmailNotification value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\EmailNotification $emailNotification
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setEmailNotification(\Nmusco\AssureSign\v2\StructType\EmailNotification $emailNotification = null)
    {
        // validation for constraint: choice(EmailNotification, SmsNotification, WebNotification, DocumentTransmission)
        if ('' !== ($emailNotificationChoiceErrorMessage = self::validateEmailNotificationForChoiceConstraintsFromSetEmailNotification($emailNotification))) {
            throw new \InvalidArgumentException($emailNotificationChoiceErrorMessage, __LINE__);
        }
        if (is_null($emailNotification) || (is_array($emailNotification) && empty($emailNotification))) {
            unset($this->EmailNotification);
        } else {
            $this->EmailNotification = $emailNotification;
        }
        return $this;
    }
    /**
     * Get SmsNotification value
     * @return \Nmusco\AssureSign\v2\StructType\SmsNotification|null
     */
    public function getSmsNotification()
    {
        return isset($this->SmsNotification) ? $this->SmsNotification : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSmsNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmsNotification method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSmsNotificationForChoiceConstraintsFromSetSmsNotification($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'EmailNotification',
            'WebNotification',
            'DocumentTransmission',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SmsNotification can\'t be set as the property %s is already set. Only one property must be set among these properties: SmsNotification, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SmsNotification value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\SmsNotification $smsNotification
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setSmsNotification(\Nmusco\AssureSign\v2\StructType\SmsNotification $smsNotification = null)
    {
        // validation for constraint: choice(EmailNotification, SmsNotification, WebNotification, DocumentTransmission)
        if ('' !== ($smsNotificationChoiceErrorMessage = self::validateSmsNotificationForChoiceConstraintsFromSetSmsNotification($smsNotification))) {
            throw new \InvalidArgumentException($smsNotificationChoiceErrorMessage, __LINE__);
        }
        if (is_null($smsNotification) || (is_array($smsNotification) && empty($smsNotification))) {
            unset($this->SmsNotification);
        } else {
            $this->SmsNotification = $smsNotification;
        }
        return $this;
    }
    /**
     * Get WebNotification value
     * @return \Nmusco\AssureSign\v2\StructType\WebNotification|null
     */
    public function getWebNotification()
    {
        return isset($this->WebNotification) ? $this->WebNotification : null;
    }
    /**
     * This method is responsible for validating the value passed to the setWebNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWebNotification method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateWebNotificationForChoiceConstraintsFromSetWebNotification($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'EmailNotification',
            'SmsNotification',
            'DocumentTransmission',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property WebNotification can\'t be set as the property %s is already set. Only one property must be set among these properties: WebNotification, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set WebNotification value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\WebNotification $webNotification
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setWebNotification(\Nmusco\AssureSign\v2\StructType\WebNotification $webNotification = null)
    {
        // validation for constraint: choice(EmailNotification, SmsNotification, WebNotification, DocumentTransmission)
        if ('' !== ($webNotificationChoiceErrorMessage = self::validateWebNotificationForChoiceConstraintsFromSetWebNotification($webNotification))) {
            throw new \InvalidArgumentException($webNotificationChoiceErrorMessage, __LINE__);
        }
        if (is_null($webNotification) || (is_array($webNotification) && empty($webNotification))) {
            unset($this->WebNotification);
        } else {
            $this->WebNotification = $webNotification;
        }
        return $this;
    }
    /**
     * Get DocumentTransmission value
     * @return \Nmusco\AssureSign\v2\StructType\DocumentTransmission|null
     */
    public function getDocumentTransmission()
    {
        return isset($this->DocumentTransmission) ? $this->DocumentTransmission : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDocumentTransmission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentTransmission method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDocumentTransmissionForChoiceConstraintsFromSetDocumentTransmission($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'EmailNotification',
            'SmsNotification',
            'WebNotification',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DocumentTransmission can\'t be set as the property %s is already set. Only one property must be set among these properties: DocumentTransmission, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DocumentTransmission value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentTransmission $documentTransmission
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setDocumentTransmission(\Nmusco\AssureSign\v2\StructType\DocumentTransmission $documentTransmission = null)
    {
        // validation for constraint: choice(EmailNotification, SmsNotification, WebNotification, DocumentTransmission)
        if ('' !== ($documentTransmissionChoiceErrorMessage = self::validateDocumentTransmissionForChoiceConstraintsFromSetDocumentTransmission($documentTransmission))) {
            throw new \InvalidArgumentException($documentTransmissionChoiceErrorMessage, __LINE__);
        }
        if (is_null($documentTransmission) || (is_array($documentTransmission) && empty($documentTransmission))) {
            unset($this->DocumentTransmission);
        } else {
            $this->DocumentTransmission = $documentTransmission;
        }
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get AuthToken value
     * @return string|null
     */
    public function getAuthToken()
    {
        return $this->AuthToken;
    }
    /**
     * Set AuthToken value
     * @param string $authToken
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setAuthToken($authToken = null)
    {
        // validation for constraint: string
        if (!is_null($authToken) && !is_string($authToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authToken, true), gettype($authToken)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($authToken) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $authToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($authToken, true)), __LINE__);
        }
        $this->AuthToken = $authToken;
        return $this;
    }
    /**
     * Get EnvelopeId value
     * @return string|null
     */
    public function getEnvelopeId()
    {
        return $this->EnvelopeId;
    }
    /**
     * Set EnvelopeId value
     * @param string $envelopeId
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
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
     * Get EnvelopeAuthToken value
     * @return string|null
     */
    public function getEnvelopeAuthToken()
    {
        return $this->EnvelopeAuthToken;
    }
    /**
     * Set EnvelopeAuthToken value
     * @param string $envelopeAuthToken
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
     */
    public function setEnvelopeAuthToken($envelopeAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeAuthToken) && !is_string($envelopeAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeAuthToken, true), gettype($envelopeAuthToken)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($envelopeAuthToken) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $envelopeAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', var_export($envelopeAuthToken, true)), __LINE__);
        }
        $this->EnvelopeAuthToken = $envelopeAuthToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationRequest
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
