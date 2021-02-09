<?php
/**
 * ContactCaExtensions
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
 * ContactCaExtensions Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactCaExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactCaExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpr' => '\Domainrobot\Model\CiraCprConstants',
        'agreementVersion' => 'double',
        'originatingIp' => 'string',
        'officialRepresentative' => 'string',
        'trusteePercentage' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cpr' => null,
        'agreementVersion' => 'double',
        'originatingIp' => null,
        'officialRepresentative' => null,
        'trusteePercentage' => 'double'
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
        'cpr' => 'cpr',
        'agreementVersion' => 'agreementVersion',
        'originatingIp' => 'originatingIp',
        'officialRepresentative' => 'officialRepresentative',
        'trusteePercentage' => 'trusteePercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpr' => 'setCpr',
        'agreementVersion' => 'setAgreementVersion',
        'originatingIp' => 'setOriginatingIp',
        'officialRepresentative' => 'setOfficialRepresentative',
        'trusteePercentage' => 'setTrusteePercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpr' => 'getCpr',
        'agreementVersion' => 'getAgreementVersion',
        'originatingIp' => 'getOriginatingIp',
        'officialRepresentative' => 'getOfficialRepresentative',
        'trusteePercentage' => 'getTrusteePercentage'
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
        $this->container['cpr'] = isset($data['cpr']) ? $this->createData($data['cpr'], 'cpr')  : null;
        $this->container['agreementVersion'] = isset($data['agreementVersion']) ? $this->createData($data['agreementVersion'], 'agreementVersion')  : null;
        $this->container['originatingIp'] = isset($data['originatingIp']) ? $this->createData($data['originatingIp'], 'originatingIp')  : null;
        $this->container['officialRepresentative'] = isset($data['officialRepresentative']) ? $this->createData($data['officialRepresentative'], 'officialRepresentative')  : null;
        $this->container['trusteePercentage'] = isset($data['trusteePercentage']) ? $this->createData($data['trusteePercentage'], 'trusteePercentage')  : null;
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
     * Gets cpr
     *
     * @return \Domainrobot\Model\CiraCprConstants
     */
    public function getCpr()
    {
        return $this->container['cpr'];
    }

    /**
     * Sets cpr
     *
     * @param \Domainrobot\Model\CiraCprConstants $cpr The cira cpr.
     *
     * @return $this
     */
    public function setCpr($cpr)
    {
        $this->container['cpr'] = $cpr;

        return $this;
    }

    /**
     * Gets agreementVersion
     *
     * @return double
     */
    public function getAgreementVersion()
    {
        return $this->container['agreementVersion'];
    }

    /**
     * Sets agreementVersion
     *
     * @param double $agreementVersion The agreement version.
     *
     * @return $this
     */
    public function setAgreementVersion($agreementVersion)
    {
        $this->container['agreementVersion'] = $agreementVersion;

        return $this;
    }

    /**
     * Gets originatingIp
     *
     * @return string
     */
    public function getOriginatingIp()
    {
        return $this->container['originatingIp'];
    }

    /**
     * Sets originatingIp
     *
     * @param string $originatingIp The originating ip.
     *
     * @return $this
     */
    public function setOriginatingIp($originatingIp)
    {
        $this->container['originatingIp'] = $originatingIp;

        return $this;
    }

    /**
     * Gets officialRepresentative
     *
     * @return string
     */
    public function getOfficialRepresentative()
    {
        return $this->container['officialRepresentative'];
    }

    /**
     * Sets officialRepresentative
     *
     * @param string $officialRepresentative The official representative.
     *
     * @return $this
     */
    public function setOfficialRepresentative($officialRepresentative)
    {
        $this->container['officialRepresentative'] = $officialRepresentative;

        return $this;
    }

    /**
     * Gets trusteePercentage
     *
     * @return double
     */
    public function getTrusteePercentage()
    {
        return $this->container['trusteePercentage'];
    }

    /**
     * Sets trusteePercentage
     *
     * @param double $trusteePercentage The trustee percentage.
     *
     * @return $this
     */
    public function setTrusteePercentage($trusteePercentage)
    {
        $this->container['trusteePercentage'] = $trusteePercentage;

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


