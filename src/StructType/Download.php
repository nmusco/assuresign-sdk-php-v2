<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Download StructType
 * @subpackage Structs
 */
class Download extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Nmusco\AssureSign\v2\StructType\DownloadRequest
     */
    public $Request;
    /**
     * Constructor method for Download
     * @uses Download::setRequest()
     * @param \Nmusco\AssureSign\v2\StructType\DownloadRequest $request
     */
    public function __construct(\Nmusco\AssureSign\v2\StructType\DownloadRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return \Nmusco\AssureSign\v2\StructType\DownloadRequest|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Nmusco\AssureSign\v2\StructType\DownloadRequest $request
     * @return \Nmusco\AssureSign\v2\StructType\Download
     */
    public function setRequest(\Nmusco\AssureSign\v2\StructType\DownloadRequest $request = null)
    {
        $this->Request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Nmusco\AssureSign\v2\StructType\Download
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
