<?php

namespace Nmusco\AssureSign\v2\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AuthenticateDownload
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\AuthenticateDownload $parameters
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateDownloadResponse|bool
     */
    public function AuthenticateDownload(\Nmusco\AssureSign\v2\StructType\AuthenticateDownload $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AuthenticateDownload($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitWithFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\SubmitWithFile $parameters
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFileResponse|bool
     */
    public function SubmitWithFile(\Nmusco\AssureSign\v2\StructType\SubmitWithFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitWithFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AsyncSubmitWithFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFile $parameters
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileResponse|bool
     */
    public function AsyncSubmitWithFile(\Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AsyncSubmitWithFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitWithFileRetrieval
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrieval $parameters
     * @return \Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrievalResponse|bool
     */
    public function SubmitWithFileRetrieval(\Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrieval $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitWithFileRetrieval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AsyncSubmitWithFileRetrieval
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrieval $parameters
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrievalResponse|bool
     */
    public function AsyncSubmitWithFileRetrieval(\Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrieval $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AsyncSubmitWithFileRetrieval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Submit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\Submit $parameters
     * @return \Nmusco\AssureSign\v2\StructType\SubmitResponse|bool
     */
    public function Submit(\Nmusco\AssureSign\v2\StructType\Submit $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Submit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AsyncSubmit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncSubmit $parameters
     * @return \Nmusco\AssureSign\v2\StructType\AsyncSubmitResponse|bool
     */
    public function AsyncSubmit(\Nmusco\AssureSign\v2\StructType\AsyncSubmit $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AsyncSubmit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named LookupSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\LookupSession $parameters
     * @return \Nmusco\AssureSign\v2\StructType\LookupSessionResponse|bool
     */
    public function LookupSession(\Nmusco\AssureSign\v2\StructType\LookupSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->LookupSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CheckStatus $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CheckStatusResponse|bool
     */
    public function CheckStatus(\Nmusco\AssureSign\v2\StructType\CheckStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ViewHistory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ViewHistory $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ViewHistoryResponse|bool
     */
    public function ViewHistory(\Nmusco\AssureSign\v2\StructType\ViewHistory $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ViewHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListSignatories
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListSignatories $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListSignatoriesResponse|bool
     */
    public function ListSignatories(\Nmusco\AssureSign\v2\StructType\ListSignatories $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListSignatories($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListTemplates $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListTemplatesResponse|bool
     */
    public function ListTemplates(\Nmusco\AssureSign\v2\StructType\ListTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListParameters $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListParametersResponse|bool
     */
    public function ListParameters(\Nmusco\AssureSign\v2\StructType\ListParameters $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListParameters($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RetrieveTemplateInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfo $parameters
     * @return \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfoResponse|bool
     */
    public function RetrieveTemplateInfo(\Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->RetrieveTemplateInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Expire
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\Expire $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ExpireResponse|bool
     */
    public function Expire(\Nmusco\AssureSign\v2\StructType\Expire $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Expire($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Cancel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\Cancel $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CancelResponse|bool
     */
    public function Cancel(\Nmusco\AssureSign\v2\StructType\Cancel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Cancel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListNotifications $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListNotificationsResponse|bool
     */
    public function ListNotifications(\Nmusco\AssureSign\v2\StructType\ListNotifications $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListNotifications($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ResendNotification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ResendNotification $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ResendNotificationResponse|bool
     */
    public function ResendNotification(\Nmusco\AssureSign\v2\StructType\ResendNotification $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ResendNotification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateSignatory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\UpdateSignatory $parameters
     * @return \Nmusco\AssureSign\v2\StructType\UpdateSignatoryResponse|bool
     */
    public function UpdateSignatory(\Nmusco\AssureSign\v2\StructType\UpdateSignatory $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateSignatory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDocumentValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\GetDocumentValues $parameters
     * @return \Nmusco\AssureSign\v2\StructType\GetDocumentValuesResponse|bool
     */
    public function GetDocumentValues(\Nmusco\AssureSign\v2\StructType\GetDocumentValues $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDocumentValues($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CreateEnvelope $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CreateEnvelopeResponse|bool
     */
    public function CreateEnvelope(\Nmusco\AssureSign\v2\StructType\CreateEnvelope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateEnvelope($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CloseEnvelope $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CloseEnvelopeResponse|bool
     */
    public function CloseEnvelope(\Nmusco\AssureSign\v2\StructType\CloseEnvelope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CloseEnvelope($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AsyncCloseEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelope $parameters
     * @return \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResponse|bool
     */
    public function AsyncCloseEnvelope(\Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AsyncCloseEnvelope($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CancelEnvelope $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CancelEnvelopeResponse|bool
     */
    public function CancelEnvelope(\Nmusco\AssureSign\v2\StructType\CancelEnvelope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelEnvelope($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListEnvelopeDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocuments $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResponse|bool
     */
    public function ListEnvelopeDocuments(\Nmusco\AssureSign\v2\StructType\ListEnvelopeDocuments $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListEnvelopeDocuments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckEnvelopeStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatus $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResponse|bool
     */
    public function CheckEnvelopeStatus(\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckEnvelopeStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DownloadEnvelopeDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocuments $parameters
     * @return \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResponse|bool
     */
    public function DownloadEnvelopeDocuments(\Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocuments $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DownloadEnvelopeDocuments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListEnvelopeTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplates $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResponse|bool
     */
    public function ListEnvelopeTemplates(\Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListEnvelopeTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteEnvelope $parameters
     * @return \Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResponse|bool
     */
    public function DeleteEnvelope(\Nmusco\AssureSign\v2\StructType\DeleteEnvelope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteEnvelope($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Download
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\Download $parameters
     * @return \Nmusco\AssureSign\v2\StructType\DownloadResponse|bool
     */
    public function Download(\Nmusco\AssureSign\v2\StructType\Download $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Download($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DownloadTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadTemplate $parameters
     * @return \Nmusco\AssureSign\v2\StructType\DownloadTemplateResponse|bool
     */
    public function DownloadTemplate(\Nmusco\AssureSign\v2\StructType\DownloadTemplate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DownloadTemplate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AuthenticateUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\AuthenticateUser $parameters
     * @return \Nmusco\AssureSign\v2\StructType\AuthenticateUserResponse|bool
     */
    public function AuthenticateUser(\Nmusco\AssureSign\v2\StructType\AuthenticateUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AuthenticateUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CreateUser $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CreateUserResponse|bool
     */
    public function CreateUser(\Nmusco\AssureSign\v2\StructType\CreateUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\GetUser $parameters
     * @return \Nmusco\AssureSign\v2\StructType\GetUserResponse|bool
     */
    public function GetUser(\Nmusco\AssureSign\v2\StructType\GetUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\UpdateUser $parameters
     * @return \Nmusco\AssureSign\v2\StructType\UpdateUserResponse|bool
     */
    public function UpdateUser(\Nmusco\AssureSign\v2\StructType\UpdateUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\DeleteUser $parameters
     * @return \Nmusco\AssureSign\v2\StructType\DeleteUserResponse|bool
     */
    public function DeleteUser(\Nmusco\AssureSign\v2\StructType\DeleteUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListUsers $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListUsersResponse|bool
     */
    public function ListUsers(\Nmusco\AssureSign\v2\StructType\ListUsers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Ping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\Ping $parameters
     * @return \Nmusco\AssureSign\v2\StructType\PingResponse|bool
     */
    public function Ping(\Nmusco\AssureSign\v2\StructType\Ping $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Ping($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ValidateDocument $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ValidateDocumentResponse|bool
     */
    public function ValidateDocument(\Nmusco\AssureSign\v2\StructType\ValidateDocument $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccessLink
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\GetAccessLink $parameters
     * @return \Nmusco\AssureSign\v2\StructType\GetAccessLinkResponse|bool
     */
    public function GetAccessLink(\Nmusco\AssureSign\v2\StructType\GetAccessLink $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAccessLink($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSigningLinks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\GetSigningLinks $parameters
     * @return \Nmusco\AssureSign\v2\StructType\GetSigningLinksResponse|bool
     */
    public function GetSigningLinks(\Nmusco\AssureSign\v2\StructType\GetSigningLinks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSigningLinks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\CreateAccount $parameters
     * @return \Nmusco\AssureSign\v2\StructType\CreateAccountResponse|bool
     */
    public function CreateAccount(\Nmusco\AssureSign\v2\StructType\CreateAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\GetAccount $parameters
     * @return \Nmusco\AssureSign\v2\StructType\GetAccountResponse|bool
     */
    public function GetAccount(\Nmusco\AssureSign\v2\StructType\GetAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\UpdateAccount $parameters
     * @return \Nmusco\AssureSign\v2\StructType\UpdateAccountResponse|bool
     */
    public function UpdateAccount(\Nmusco\AssureSign\v2\StructType\UpdateAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Nmusco\AssureSign\v2\StructType\ListAccounts $parameters
     * @return \Nmusco\AssureSign\v2\StructType\ListAccountsResponse|bool
     */
    public function ListAccounts(\Nmusco\AssureSign\v2\StructType\ListAccounts $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListAccounts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelopeResponse|\Nmusco\AssureSign\v2\StructType\AsyncSubmitResponse|\Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileResponse|\Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrievalResponse|\Nmusco\AssureSign\v2\StructType\AuthenticateDownloadResponse|\Nmusco\AssureSign\v2\StructType\AuthenticateUserResponse|\Nmusco\AssureSign\v2\StructType\CancelEnvelopeResponse|\Nmusco\AssureSign\v2\StructType\CancelResponse|\Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatusResponse|\Nmusco\AssureSign\v2\StructType\CheckStatusResponse|\Nmusco\AssureSign\v2\StructType\CloseEnvelopeResponse|\Nmusco\AssureSign\v2\StructType\CreateAccountResponse|\Nmusco\AssureSign\v2\StructType\CreateEnvelopeResponse|\Nmusco\AssureSign\v2\StructType\CreateUserResponse|\Nmusco\AssureSign\v2\StructType\DeleteEnvelopeResponse|\Nmusco\AssureSign\v2\StructType\DeleteUserResponse|\Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocumentsResponse|\Nmusco\AssureSign\v2\StructType\DownloadResponse|\Nmusco\AssureSign\v2\StructType\DownloadTemplateResponse|\Nmusco\AssureSign\v2\StructType\ExpireResponse|\Nmusco\AssureSign\v2\StructType\GetAccessLinkResponse|\Nmusco\AssureSign\v2\StructType\GetAccountResponse|\Nmusco\AssureSign\v2\StructType\GetDocumentValuesResponse|\Nmusco\AssureSign\v2\StructType\GetSigningLinksResponse|\Nmusco\AssureSign\v2\StructType\GetUserResponse|\Nmusco\AssureSign\v2\StructType\ListAccountsResponse|\Nmusco\AssureSign\v2\StructType\ListEnvelopeDocumentsResponse|\Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplatesResponse|\Nmusco\AssureSign\v2\StructType\ListNotificationsResponse|\Nmusco\AssureSign\v2\StructType\ListParametersResponse|\Nmusco\AssureSign\v2\StructType\ListSignatoriesResponse|\Nmusco\AssureSign\v2\StructType\ListTemplatesResponse|\Nmusco\AssureSign\v2\StructType\ListUsersResponse|\Nmusco\AssureSign\v2\StructType\LookupSessionResponse|\Nmusco\AssureSign\v2\StructType\PingResponse|\Nmusco\AssureSign\v2\StructType\ResendNotificationResponse|\Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfoResponse|\Nmusco\AssureSign\v2\StructType\SubmitResponse|\Nmusco\AssureSign\v2\StructType\SubmitWithFileResponse|\Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrievalResponse|\Nmusco\AssureSign\v2\StructType\UpdateAccountResponse|\Nmusco\AssureSign\v2\StructType\UpdateSignatoryResponse|\Nmusco\AssureSign\v2\StructType\UpdateUserResponse|\Nmusco\AssureSign\v2\StructType\ValidateDocumentResponse|\Nmusco\AssureSign\v2\StructType\ViewHistoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
