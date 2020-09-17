<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnvelopeWorkflowType EnumType
 * @subpackage Enumerations
 */
class EnvelopeWorkflowType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sequential'
     * @return string 'Sequential'
     */
    const VALUE_SEQUENTIAL = 'Sequential';
    /**
     * Constant for value 'Parallel'
     * @return string 'Parallel'
     */
    const VALUE_PARALLEL = 'Parallel';
    /**
     * Return allowed values
     * @uses self::VALUE_SEQUENTIAL
     * @uses self::VALUE_PARALLEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SEQUENTIAL,
            self::VALUE_PARALLEL,
        );
    }
}
