<?php
/**
 * ErrorsEnum
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Numary\Ledger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ledger API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.9.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Numary\Ledger\Model;
use \Numary\Ledger\ObjectSerializer;

/**
 * ErrorsEnum Class Doc Comment
 *
 * @category Class
 * @package  Numary\Ledger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorsEnum
{
    /**
     * Possible values of this enum
     */
    public const INTERNAL = 'INTERNAL';

    public const INSUFFICIENT_FUND = 'INSUFFICIENT_FUND';

    public const VALIDATION = 'VALIDATION';

    public const CONFLICT = 'CONFLICT';

    public const NO_SCRIPT = 'NO_SCRIPT';

    public const COMPILATION_FAILED = 'COMPILATION_FAILED';

    public const METADATA_OVERRIDE = 'METADATA_OVERRIDE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INTERNAL,
            self::INSUFFICIENT_FUND,
            self::VALIDATION,
            self::CONFLICT,
            self::NO_SCRIPT,
            self::COMPILATION_FAILED,
            self::METADATA_OVERRIDE
        ];
    }
}


