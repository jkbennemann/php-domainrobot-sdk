<?php
/**
 * DomainStudioSourceSuggestion
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
 * DomainStudioSourceSuggestion Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainStudioSourceSuggestion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainStudioSourceSuggestion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'services' => '\Domainrobot\Model\DomainEnvelopeSearchService[]',
        'onlyAvailable' => 'bool',
        'language' => 'string',
        'max' => 'int',
        'maxSldLength' => 'int',
        'useDash' => 'bool',
        'useNumber' => 'bool',
        'useIdn' => 'bool',
        'tlds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'services' => null,
        'onlyAvailable' => null,
        'language' => null,
        'max' => 'int32',
        'maxSldLength' => 'int32',
        'useDash' => null,
        'useNumber' => null,
        'useIdn' => null,
        'tlds' => null
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
        'services' => 'services',
        'onlyAvailable' => 'onlyAvailable',
        'language' => 'language',
        'max' => 'max',
        'maxSldLength' => 'maxSldLength',
        'useDash' => 'useDash',
        'useNumber' => 'useNumber',
        'useIdn' => 'useIdn',
        'tlds' => 'tlds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'services' => 'setServices',
        'onlyAvailable' => 'setOnlyAvailable',
        'language' => 'setLanguage',
        'max' => 'setMax',
        'maxSldLength' => 'setMaxSldLength',
        'useDash' => 'setUseDash',
        'useNumber' => 'setUseNumber',
        'useIdn' => 'setUseIdn',
        'tlds' => 'setTlds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'services' => 'getServices',
        'onlyAvailable' => 'getOnlyAvailable',
        'language' => 'getLanguage',
        'max' => 'getMax',
        'maxSldLength' => 'getMaxSldLength',
        'useDash' => 'getUseDash',
        'useNumber' => 'getUseNumber',
        'useIdn' => 'getUseIdn',
        'tlds' => 'getTlds'
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
        $this->container['services'] = isset($data['services']) ? $this->createData($data['services'], 'services')  : null;
        $this->container['onlyAvailable'] = isset($data['onlyAvailable']) ? $this->createData($data['onlyAvailable'], 'onlyAvailable')  : null;
        $this->container['language'] = isset($data['language']) ? $this->createData($data['language'], 'language')  : null;
        $this->container['max'] = isset($data['max']) ? $this->createData($data['max'], 'max')  : null;
        $this->container['maxSldLength'] = isset($data['maxSldLength']) ? $this->createData($data['maxSldLength'], 'maxSldLength')  : null;
        $this->container['useDash'] = isset($data['useDash']) ? $this->createData($data['useDash'], 'useDash')  : null;
        $this->container['useNumber'] = isset($data['useNumber']) ? $this->createData($data['useNumber'], 'useNumber')  : null;
        $this->container['useIdn'] = isset($data['useIdn']) ? $this->createData($data['useIdn'], 'useIdn')  : null;
        $this->container['tlds'] = isset($data['tlds']) ? $this->createData($data['tlds'], 'tlds')  : null;
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
            }

            return $reflectionInstances;
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
     * Gets services
     *
     * @return \Domainrobot\Model\DomainEnvelopeSearchService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Domainrobot\Model\DomainEnvelopeSearchService[] $services The services to fetch extra data from for this source
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets onlyAvailable
     *
     * @return bool
     */
    public function getOnlyAvailable()
    {
        return $this->container['onlyAvailable'];
    }

    /**
     * Sets onlyAvailable
     *
     * @param bool $onlyAvailable Defines whether to return only free domain names when service WHOIS is used for a source.
     *
     * @return $this
     */
    public function setOnlyAvailable($onlyAvailable)
    {
        $this->container['onlyAvailable'] = $onlyAvailable;

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
     * @param string $language Suggestion language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int $max Maximum fetched suggested domains
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets maxSldLength
     *
     * @return int
     */
    public function getMaxSldLength()
    {
        return $this->container['maxSldLength'];
    }

    /**
     * Sets maxSldLength
     *
     * @param int $maxSldLength Maximum sld length for suggested domains
     *
     * @return $this
     */
    public function setMaxSldLength($maxSldLength)
    {
        $this->container['maxSldLength'] = $maxSldLength;

        return $this;
    }

    /**
     * Gets useDash
     *
     * @return bool
     */
    public function getUseDash()
    {
        return $this->container['useDash'];
    }

    /**
     * Sets useDash
     *
     * @param bool $useDash Suggested domains with dash
     *
     * @return $this
     */
    public function setUseDash($useDash)
    {
        $this->container['useDash'] = $useDash;

        return $this;
    }

    /**
     * Gets useNumber
     *
     * @return bool
     */
    public function getUseNumber()
    {
        return $this->container['useNumber'];
    }

    /**
     * Sets useNumber
     *
     * @param bool $useNumber Suggested domains with numbers
     *
     * @return $this
     */
    public function setUseNumber($useNumber)
    {
        $this->container['useNumber'] = $useNumber;

        return $this;
    }

    /**
     * Gets useIdn
     *
     * @return bool
     */
    public function getUseIdn()
    {
        return $this->container['useIdn'];
    }

    /**
     * Sets useIdn
     *
     * @param bool $useIdn Suggested domains with idn
     *
     * @return $this
     */
    public function setUseIdn($useIdn)
    {
        $this->container['useIdn'] = $useIdn;

        return $this;
    }

    /**
     * Gets tlds
     *
     * @return string[]
     */
    public function getTlds()
    {
        return $this->container['tlds'];
    }

    /**
     * Sets tlds
     *
     * @param string[] $tlds Selected tlds
     *
     * @return $this
     */
    public function setTlds($tlds)
    {
        $this->container['tlds'] = $tlds;

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
            if (
                $retrieveAllValues === false && 
                empty($value) === true &&
                $value !== false &&
                $value !== '' &&
                $value !== 0 &&
                $value !== '0'
            ) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray($retrieveAllValues);
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
                        $v = $v->toArray($retrieveAllValues);
                    }
                }
            }
            $cleanContainer[self::$attributeMap[$key]] = $value;
        };
        return $cleanContainer;
    }
}


