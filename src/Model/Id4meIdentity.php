<?php
/**
 * Id4meIdentity
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

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * Id4meIdentity Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Id4meIdentity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Id4meIdentity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'agent' => '\Domainrobot\Model\Id4MeAgent',
        'verifyExpire' => '\DateTime',
        'addons' => '\Domainrobot\Model\Configuration',
        'magicLink' => 'string',
        'claims' => '\Domainrobot\Model\Claims',
        'showClaims' => 'bool',
        'resetUrl' => 'string',
        'resetUrlExpire' => '\DateTime',
        'name' => 'string',
        'status' => '\Domainrobot\Model\IdentityStatus',
        'language' => 'string',
        'record' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'owner' => null,
        'updater' => null,
        'agent' => null,
        'verifyExpire' => 'date-time',
        'addons' => null,
        'magicLink' => null,
        'claims' => null,
        'showClaims' => null,
        'resetUrl' => null,
        'resetUrlExpire' => 'date-time',
        'name' => null,
        'status' => null,
        'language' => null,
        'record' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created' => 'created',
        'updated' => 'updated',
        'owner' => 'owner',
        'updater' => 'updater',
        'agent' => 'agent',
        'verifyExpire' => 'verifyExpire',
        'addons' => 'addons',
        'magicLink' => 'magicLink',
        'claims' => 'claims',
        'showClaims' => 'showClaims',
        'resetUrl' => 'resetUrl',
        'resetUrlExpire' => 'resetUrlExpire',
        'name' => 'name',
        'status' => 'status',
        'language' => 'language',
        'record' => 'record'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'agent' => 'setAgent',
        'verifyExpire' => 'setVerifyExpire',
        'addons' => 'setAddons',
        'magicLink' => 'setMagicLink',
        'claims' => 'setClaims',
        'showClaims' => 'setShowClaims',
        'resetUrl' => 'setResetUrl',
        'resetUrlExpire' => 'setResetUrlExpire',
        'name' => 'setName',
        'status' => 'setStatus',
        'language' => 'setLanguage',
        'record' => 'setRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'agent' => 'getAgent',
        'verifyExpire' => 'getVerifyExpire',
        'addons' => 'getAddons',
        'magicLink' => 'getMagicLink',
        'claims' => 'getClaims',
        'showClaims' => 'getShowClaims',
        'resetUrl' => 'getResetUrl',
        'resetUrlExpire' => 'getResetUrlExpire',
        'name' => 'getName',
        'status' => 'getStatus',
        'language' => 'getLanguage',
        'record' => 'getRecord'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['updated'] = isset($data['updated']) ? $this->createData($data['updated'], 'updated')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['agent'] = isset($data['agent']) ? $this->createData($data['agent'], 'agent')  : null;
        $this->container['verifyExpire'] = isset($data['verifyExpire']) ? $this->createData($data['verifyExpire'], 'verifyExpire')  : null;
        $this->container['addons'] = isset($data['addons']) ? $this->createData($data['addons'], 'addons')  : null;
        $this->container['magicLink'] = isset($data['magicLink']) ? $this->createData($data['magicLink'], 'magicLink')  : null;
        $this->container['claims'] = isset($data['claims']) ? $this->createData($data['claims'], 'claims')  : null;
        $this->container['showClaims'] = isset($data['showClaims']) ? $this->createData($data['showClaims'], 'showClaims')  : null;
        $this->container['resetUrl'] = isset($data['resetUrl']) ? $this->createData($data['resetUrl'], 'resetUrl')  : null;
        $this->container['resetUrlExpire'] = isset($data['resetUrlExpire']) ? $this->createData($data['resetUrlExpire'], 'resetUrlExpire')  : null;
        $this->container['name'] = isset($data['name']) ? $this->createData($data['name'], 'name')  : null;
        $this->container['status'] = isset($data['status']) ? $this->createData($data['status'], 'status')  : null;
        $this->container['language'] = isset($data['language']) ? $this->createData($data['language'], 'language')  : null;
        $this->container['record'] = isset($data['record']) ? $this->createData($data['record'], 'record')  : null;
    }

    /**
     * create data according to types;
     * non object types will just be returend as is:
     * object types will return an instance of themselves or and array of instances
     *
     * @param mixed[] $data
     * @param string $property
     * @return mixed
     */
    public function createData($data = null, $property)
    {
        if ($data === null) {
            return '';
        }
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        // handle object types
        if (count($matches) > 0 && count($matches) < 3) {
            try {
                if (!is_array($data)) {
                    return $data;
                }
                
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            } catch (\Exception $ex) {
                return $data;
            }
        } elseif (count($matches) >= 3) {
            // Object[]
            // arrays of objects have to be handled differently
            $reflectionInstances = [];
            foreach($data as $d){
                try {
                    if(!is_array($d)){
                        $reflectionInstances[] = $d;
                        continue;
                    }
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType) );
                    $reflectionInstances[] = $reflection->newInstance($d);                   
                } catch (\Exception $ex) {
                    return $d;
                }

                return $reflectionInstances;
            }
        }

        return $data;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['agent'] === null) {
            $invalidProperties[] = "'agent' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the 
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The created date.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated The updated date.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Domainrobot\Model\BasicUser $owner The owner of the object.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets updater
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
     * Sets updater
     *
     * @param \Domainrobot\Model\BasicUser $updater The updater of the object.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \Domainrobot\Model\Id4MeAgent
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \Domainrobot\Model\Id4MeAgent $agent The ID4ME agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets verifyExpire
     *
     * @return \DateTime
     */
    public function getVerifyExpire()
    {
        return $this->container['verifyExpire'];
    }

    /**
     * Sets verifyExpire
     *
     * @param \DateTime $verifyExpire Expiration of verification
     *
     * @return $this
     */
    public function setVerifyExpire($verifyExpire)
    {
        $this->container['verifyExpire'] = $verifyExpire;

        return $this;
    }

    /**
     * Gets addons
     *
     * @return \Domainrobot\Model\Configuration
     */
    public function getAddons()
    {
        return $this->container['addons'];
    }

    /**
     * Sets addons
     *
     * @param \Domainrobot\Model\Configuration $addons Additional information
     *
     * @return $this
     */
    public function setAddons($addons)
    {
        $this->container['addons'] = $addons;

        return $this;
    }

    /**
     * Gets magicLink
     *
     * @return string
     */
    public function getMagicLink()
    {
        return $this->container['magicLink'];
    }

    /**
     * Sets magicLink
     *
     * @param string $magicLink The generated magic link
     *
     * @return $this
     */
    public function setMagicLink($magicLink)
    {
        $this->container['magicLink'] = $magicLink;

        return $this;
    }

    /**
     * Gets claims
     *
     * @return \Domainrobot\Model\Claims
     */
    public function getClaims()
    {
        return $this->container['claims'];
    }

    /**
     * Sets claims
     *
     * @param \Domainrobot\Model\Claims $claims The initial claims
     *
     * @return $this
     */
    public function setClaims($claims)
    {
        $this->container['claims'] = $claims;

        return $this;
    }

    /**
     * Gets showClaims
     *
     * @return bool
     */
    public function getShowClaims()
    {
        return $this->container['showClaims'];
    }

    /**
     * Sets showClaims
     *
     * @param bool $showClaims Enables showing claims.
     *
     * @return $this
     */
    public function setShowClaims($showClaims)
    {
        $this->container['showClaims'] = $showClaims;

        return $this;
    }

    /**
     * Gets resetUrl
     *
     * @return string
     */
    public function getResetUrl()
    {
        return $this->container['resetUrl'];
    }

    /**
     * Sets resetUrl
     *
     * @param string $resetUrl Url to redirect to passwort reset
     *
     * @return $this
     */
    public function setResetUrl($resetUrl)
    {
        $this->container['resetUrl'] = $resetUrl;

        return $this;
    }

    /**
     * Gets resetUrlExpire
     *
     * @return \DateTime
     */
    public function getResetUrlExpire()
    {
        return $this->container['resetUrlExpire'];
    }

    /**
     * Sets resetUrlExpire
     *
     * @param \DateTime $resetUrlExpire time when reset url expire
     *
     * @return $this
     */
    public function setResetUrlExpire($resetUrlExpire)
    {
        $this->container['resetUrlExpire'] = $resetUrlExpire;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Fully qualified domain name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Domainrobot\Model\IdentityStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Domainrobot\Model\IdentityStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets record
     *
     * @return string[]
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param string[] $record DNS text records
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;

        $cleanContainer = [];
        foreach ($container as $key => &$value) {
            if (!$retrieveAllValues && empty($value)) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray();
                }else{
                    if(get_class($value) === "DateTime"){
                        $value = $value->format("Y-m-d\TH:i:s");
                    }else{
                        $value = (array) $value;
                    }
                }
            }
            if (is_array($value)) {
                foreach ($value as &$v) {
                    if (gettype($v) === "object") {
                        $v = $v->toArray();
                    }
                }
            }
            $cleanContainer[self::$attributeMap[$key]] = $value;
        };
        return $cleanContainer;
    }
}


