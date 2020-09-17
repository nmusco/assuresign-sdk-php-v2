<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.assuresign.net/Services/DocumentNOW/v2/documentnow.svc?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.assuresign.net/Services/DocumentNOW/v2/documentnow.svc?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Nmusco\AssureSign\v2\ClassMap::get(),
);
/**
 * Samples for Service ServiceType
 */
$service = new \Nmusco\AssureSign\v2\ServiceType\Service($options);
/**
 * Sample call for AuthenticateDownload operation/method
 */
if ($service->AuthenticateDownload(new \Nmusco\AssureSign\v2\StructType\AuthenticateDownload()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for SubmitWithFile operation/method
 */
if ($service->SubmitWithFile(new \Nmusco\AssureSign\v2\StructType\SubmitWithFile()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for AsyncSubmitWithFile operation/method
 */
if ($service->AsyncSubmitWithFile(new \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFile()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for SubmitWithFileRetrieval operation/method
 */
if ($service->SubmitWithFileRetrieval(new \Nmusco\AssureSign\v2\StructType\SubmitWithFileRetrieval()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for AsyncSubmitWithFileRetrieval operation/method
 */
if ($service->AsyncSubmitWithFileRetrieval(new \Nmusco\AssureSign\v2\StructType\AsyncSubmitWithFileRetrieval()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for Submit operation/method
 */
if ($service->Submit(new \Nmusco\AssureSign\v2\StructType\Submit()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for AsyncSubmit operation/method
 */
if ($service->AsyncSubmit(new \Nmusco\AssureSign\v2\StructType\AsyncSubmit()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for LookupSession operation/method
 */
if ($service->LookupSession(new \Nmusco\AssureSign\v2\StructType\LookupSession()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CheckStatus operation/method
 */
if ($service->CheckStatus(new \Nmusco\AssureSign\v2\StructType\CheckStatus()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ViewHistory operation/method
 */
if ($service->ViewHistory(new \Nmusco\AssureSign\v2\StructType\ViewHistory()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListSignatories operation/method
 */
if ($service->ListSignatories(new \Nmusco\AssureSign\v2\StructType\ListSignatories()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListTemplates operation/method
 */
if ($service->ListTemplates(new \Nmusco\AssureSign\v2\StructType\ListTemplates()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListParameters operation/method
 */
if ($service->ListParameters(new \Nmusco\AssureSign\v2\StructType\ListParameters()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for RetrieveTemplateInfo operation/method
 */
if ($service->RetrieveTemplateInfo(new \Nmusco\AssureSign\v2\StructType\RetrieveTemplateInfo()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for Expire operation/method
 */
if ($service->Expire(new \Nmusco\AssureSign\v2\StructType\Expire()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for Cancel operation/method
 */
if ($service->Cancel(new \Nmusco\AssureSign\v2\StructType\Cancel()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListNotifications operation/method
 */
if ($service->ListNotifications(new \Nmusco\AssureSign\v2\StructType\ListNotifications()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ResendNotification operation/method
 */
if ($service->ResendNotification(new \Nmusco\AssureSign\v2\StructType\ResendNotification()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for UpdateSignatory operation/method
 */
if ($service->UpdateSignatory(new \Nmusco\AssureSign\v2\StructType\UpdateSignatory()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for GetDocumentValues operation/method
 */
if ($service->GetDocumentValues(new \Nmusco\AssureSign\v2\StructType\GetDocumentValues()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CreateEnvelope operation/method
 */
if ($service->CreateEnvelope(new \Nmusco\AssureSign\v2\StructType\CreateEnvelope()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CloseEnvelope operation/method
 */
if ($service->CloseEnvelope(new \Nmusco\AssureSign\v2\StructType\CloseEnvelope()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for AsyncCloseEnvelope operation/method
 */
if ($service->AsyncCloseEnvelope(new \Nmusco\AssureSign\v2\StructType\AsyncCloseEnvelope()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CancelEnvelope operation/method
 */
if ($service->CancelEnvelope(new \Nmusco\AssureSign\v2\StructType\CancelEnvelope()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListEnvelopeDocuments operation/method
 */
if ($service->ListEnvelopeDocuments(new \Nmusco\AssureSign\v2\StructType\ListEnvelopeDocuments()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CheckEnvelopeStatus operation/method
 */
if ($service->CheckEnvelopeStatus(new \Nmusco\AssureSign\v2\StructType\CheckEnvelopeStatus()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for DownloadEnvelopeDocuments operation/method
 */
if ($service->DownloadEnvelopeDocuments(new \Nmusco\AssureSign\v2\StructType\DownloadEnvelopeDocuments()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListEnvelopeTemplates operation/method
 */
if ($service->ListEnvelopeTemplates(new \Nmusco\AssureSign\v2\StructType\ListEnvelopeTemplates()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for DeleteEnvelope operation/method
 */
if ($service->DeleteEnvelope(new \Nmusco\AssureSign\v2\StructType\DeleteEnvelope()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for Download operation/method
 */
if ($service->Download(new \Nmusco\AssureSign\v2\StructType\Download()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for DownloadTemplate operation/method
 */
if ($service->DownloadTemplate(new \Nmusco\AssureSign\v2\StructType\DownloadTemplate()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for AuthenticateUser operation/method
 */
if ($service->AuthenticateUser(new \Nmusco\AssureSign\v2\StructType\AuthenticateUser()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CreateUser operation/method
 */
if ($service->CreateUser(new \Nmusco\AssureSign\v2\StructType\CreateUser()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for GetUser operation/method
 */
if ($service->GetUser(new \Nmusco\AssureSign\v2\StructType\GetUser()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for UpdateUser operation/method
 */
if ($service->UpdateUser(new \Nmusco\AssureSign\v2\StructType\UpdateUser()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for DeleteUser operation/method
 */
if ($service->DeleteUser(new \Nmusco\AssureSign\v2\StructType\DeleteUser()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListUsers operation/method
 */
if ($service->ListUsers(new \Nmusco\AssureSign\v2\StructType\ListUsers()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for Ping operation/method
 */
if ($service->Ping(new \Nmusco\AssureSign\v2\StructType\Ping()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ValidateDocument operation/method
 */
if ($service->ValidateDocument(new \Nmusco\AssureSign\v2\StructType\ValidateDocument()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for GetAccessLink operation/method
 */
if ($service->GetAccessLink(new \Nmusco\AssureSign\v2\StructType\GetAccessLink()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for GetSigningLinks operation/method
 */
if ($service->GetSigningLinks(new \Nmusco\AssureSign\v2\StructType\GetSigningLinks()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for CreateAccount operation/method
 */
if ($service->CreateAccount(new \Nmusco\AssureSign\v2\StructType\CreateAccount()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for GetAccount operation/method
 */
if ($service->GetAccount(new \Nmusco\AssureSign\v2\StructType\GetAccount()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for UpdateAccount operation/method
 */
if ($service->UpdateAccount(new \Nmusco\AssureSign\v2\StructType\UpdateAccount()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for ListAccounts operation/method
 */
if ($service->ListAccounts(new \Nmusco\AssureSign\v2\StructType\ListAccounts()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
