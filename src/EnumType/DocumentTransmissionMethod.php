<?php

namespace Nmusco\AssureSign\v2\EnumType;

/**
 * This class stands for DocumentTransmissionMethod EnumType
 * @subpackage Enumerations
 */
class DocumentTransmissionMethod
{
    /**
     * Constant for value 'Ftp'
     * @return string 'Ftp'
     */
    const VALUE_FTP = 'Ftp';
    /**
     * Constant for value 'Ftps'
     * @return string 'Ftps'
     */
    const VALUE_FTPS = 'Ftps';
    /**
     * Constant for value 'Sftp'
     * @return string 'Sftp'
     */
    const VALUE_SFTP = 'Sftp';
    /**
     * Constant for value 'Web'
     * @return string 'Web'
     */
    const VALUE_WEB = 'Web';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FTP
     * @uses self::VALUE_FTPS
     * @uses self::VALUE_SFTP
     * @uses self::VALUE_WEB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FTP,
            self::VALUE_FTPS,
            self::VALUE_SFTP,
            self::VALUE_WEB,
        );
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
