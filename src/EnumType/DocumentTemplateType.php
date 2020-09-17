<?php

namespace Nmusco\AssureSign\v2\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentTemplateType EnumType
 * @subpackage Enumerations
 */
class DocumentTemplateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'WorkflowOnly'
     * @return string 'WorkflowOnly'
     */
    const VALUE_WORKFLOW_ONLY = 'WorkflowOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_WORKFLOW_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STANDARD,
            self::VALUE_WORKFLOW_ONLY,
        );
    }
}
