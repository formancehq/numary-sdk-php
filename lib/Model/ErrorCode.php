<?php
/**
 * ErrorCode
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
 * The version of the OpenAPI document: v1.7.0-beta.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Numary\Ledger\Model;
use \Numary\Ledger\ObjectSerializer;

/**
 * ErrorCode Class Doc Comment
 *
 * @category Class
 * @package  Numary\Ledger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCode
{
    /**
     * Possible values of this enum
     */
    public const INTERNAL = 'INTERNAL';

    public const INSUFFICIENT_FUND = 'INSUFFICIENT_FUND';

    public const VALIDATION = 'VALIDATION';

    public const CONFLICT = 'CONFLICT';

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
            self::CONFLICT
        ];
    }
}


