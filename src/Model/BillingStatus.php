<?php
/**
 * BillingStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;
use \Domainrobot\ObjectSerializer;

/**
 * BillingStatus Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingStatus
{
    /**
     * Possible values of this enum
     */
    const ADD = 'ADD';
    const REMOVE = 'REMOVE';
    const UPDATE = 'UPDATE';
    const IGNORE = 'IGNORE';
    const CUSTOMER_CHANGED = 'CUSTOMER_CHANGED';
    const USER_CHANGED = 'USER_CHANGED';
    const ACTIVE = 'ACTIVE';
    const CANCELED = 'CANCELED';
    const CANCELED_EXPIRE = 'CANCELED_EXPIRE';
    const RESTORE = 'RESTORE';
    const AUTODELETE = 'AUTODELETE';
    const REMOVED = 'REMOVED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADD,
            self::REMOVE,
            self::UPDATE,
            self::IGNORE,
            self::CUSTOMER_CHANGED,
            self::USER_CHANGED,
            self::ACTIVE,
            self::CANCELED,
            self::CANCELED_EXPIRE,
            self::RESTORE,
            self::AUTODELETE,
            self::REMOVED,
        ];
    }
}


