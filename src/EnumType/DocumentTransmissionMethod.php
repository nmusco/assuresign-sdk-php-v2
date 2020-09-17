<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentTransmissionMethod EnumType
 * @subpackage Enumerations
 */
class DocumentTransmissionMethod extends AbstractStructEnumBase
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
}
