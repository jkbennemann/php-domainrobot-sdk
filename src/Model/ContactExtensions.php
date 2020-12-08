<?php
/**
 * ContactExtensions
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
 * ContactExtensions Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aero' => '\Domainrobot\Model\ContactAeroExtensions',
        'au' => '\Domainrobot\Model\ContactAuExtensions',
        'cat' => '\Domainrobot\Model\ContactCatExtensions',
        'jobs' => '\Domainrobot\Model\ContactJobsExtensions',
        'it' => '\Domainrobot\Model\ContactItExtensions',
        'jp' => '\Domainrobot\Model\ContactJpExtensions',
        'xxx' => '\Domainrobot\Model\ContactXxxExtensions',
        'hk' => '\Domainrobot\Model\ContactHkExtensions',
        'bank' => '\Domainrobot\Model\ContactBankExtensions',
        'swiss' => '\Domainrobot\Model\ContactSwissExtensions',
        'ru' => '\Domainrobot\Model\ContactRuExtensions',
        'uk' => '\Domainrobot\Model\ContactUkExtensions',
        'ca' => '\Domainrobot\Model\ContactCaExtensions',
        'ro' => '\Domainrobot\Model\ContactRoExtensions',
        'barcelona' => '\Domainrobot\Model\ContactBarcelonaExtensions',
        'general' => '\Domainrobot\Model\ContactGeneralExtensions',
        'nz' => '\Domainrobot\Model\ContactNzExtensions',
        'sport' => '\Domainrobot\Model\ContactSportExtensions',
        'luxe' => '\Domainrobot\Model\ContactLuxeExtensions',
        'madrid' => '\Domainrobot\Model\ContactMadridExtensions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aero' => null,
        'au' => null,
        'cat' => null,
        'jobs' => null,
        'it' => null,
        'jp' => null,
        'xxx' => null,
        'hk' => null,
        'bank' => null,
        'swiss' => null,
        'ru' => null,
        'uk' => null,
        'ca' => null,
        'ro' => null,
        'barcelona' => null,
        'general' => null,
        'nz' => null,
        'sport' => null,
        'luxe' => null,
        'madrid' => null
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
        'aero' => 'aero',
        'au' => 'au',
        'cat' => 'cat',
        'jobs' => 'jobs',
        'it' => 'it',
        'jp' => 'jp',
        'xxx' => 'xxx',
        'hk' => 'hk',
        'bank' => 'bank',
        'swiss' => 'swiss',
        'ru' => 'ru',
        'uk' => 'uk',
        'ca' => 'ca',
        'ro' => 'ro',
        'barcelona' => 'barcelona',
        'general' => 'general',
        'nz' => 'nz',
        'sport' => 'sport',
        'luxe' => 'luxe',
        'madrid' => 'madrid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aero' => 'setAero',
        'au' => 'setAu',
        'cat' => 'setCat',
        'jobs' => 'setJobs',
        'it' => 'setIt',
        'jp' => 'setJp',
        'xxx' => 'setXxx',
        'hk' => 'setHk',
        'bank' => 'setBank',
        'swiss' => 'setSwiss',
        'ru' => 'setRu',
        'uk' => 'setUk',
        'ca' => 'setCa',
        'ro' => 'setRo',
        'barcelona' => 'setBarcelona',
        'general' => 'setGeneral',
        'nz' => 'setNz',
        'sport' => 'setSport',
        'luxe' => 'setLuxe',
        'madrid' => 'setMadrid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aero' => 'getAero',
        'au' => 'getAu',
        'cat' => 'getCat',
        'jobs' => 'getJobs',
        'it' => 'getIt',
        'jp' => 'getJp',
        'xxx' => 'getXxx',
        'hk' => 'getHk',
        'bank' => 'getBank',
        'swiss' => 'getSwiss',
        'ru' => 'getRu',
        'uk' => 'getUk',
        'ca' => 'getCa',
        'ro' => 'getRo',
        'barcelona' => 'getBarcelona',
        'general' => 'getGeneral',
        'nz' => 'getNz',
        'sport' => 'getSport',
        'luxe' => 'getLuxe',
        'madrid' => 'getMadrid'
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
        $this->container['aero'] = isset($data['aero']) ? $this->createData($data['aero'], 'aero')  : null;
        $this->container['au'] = isset($data['au']) ? $this->createData($data['au'], 'au')  : null;
        $this->container['cat'] = isset($data['cat']) ? $this->createData($data['cat'], 'cat')  : null;
        $this->container['jobs'] = isset($data['jobs']) ? $this->createData($data['jobs'], 'jobs')  : null;
        $this->container['it'] = isset($data['it']) ? $this->createData($data['it'], 'it')  : null;
        $this->container['jp'] = isset($data['jp']) ? $this->createData($data['jp'], 'jp')  : null;
        $this->container['xxx'] = isset($data['xxx']) ? $this->createData($data['xxx'], 'xxx')  : null;
        $this->container['hk'] = isset($data['hk']) ? $this->createData($data['hk'], 'hk')  : null;
        $this->container['bank'] = isset($data['bank']) ? $this->createData($data['bank'], 'bank')  : null;
        $this->container['swiss'] = isset($data['swiss']) ? $this->createData($data['swiss'], 'swiss')  : null;
        $this->container['ru'] = isset($data['ru']) ? $this->createData($data['ru'], 'ru')  : null;
        $this->container['uk'] = isset($data['uk']) ? $this->createData($data['uk'], 'uk')  : null;
        $this->container['ca'] = isset($data['ca']) ? $this->createData($data['ca'], 'ca')  : null;
        $this->container['ro'] = isset($data['ro']) ? $this->createData($data['ro'], 'ro')  : null;
        $this->container['barcelona'] = isset($data['barcelona']) ? $this->createData($data['barcelona'], 'barcelona')  : null;
        $this->container['general'] = isset($data['general']) ? $this->createData($data['general'], 'general')  : null;
        $this->container['nz'] = isset($data['nz']) ? $this->createData($data['nz'], 'nz')  : null;
        $this->container['sport'] = isset($data['sport']) ? $this->createData($data['sport'], 'sport')  : null;
        $this->container['luxe'] = isset($data['luxe']) ? $this->createData($data['luxe'], 'luxe')  : null;
        $this->container['madrid'] = isset($data['madrid']) ? $this->createData($data['madrid'], 'madrid')  : null;
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
     * Gets aero
     *
     * @return \Domainrobot\Model\ContactAeroExtensions
     */
    public function getAero()
    {
        return $this->container['aero'];
    }

    /**
     * Sets aero
     *
     * @param \Domainrobot\Model\ContactAeroExtensions $aero The .aero contact extensions.
     *
     * @return $this
     */
    public function setAero($aero)
    {
        $this->container['aero'] = $aero;

        return $this;
    }

    /**
     * Gets au
     *
     * @return \Domainrobot\Model\ContactAuExtensions
     */
    public function getAu()
    {
        return $this->container['au'];
    }

    /**
     * Sets au
     *
     * @param \Domainrobot\Model\ContactAuExtensions $au The .au contact extensions.
     *
     * @return $this
     */
    public function setAu($au)
    {
        $this->container['au'] = $au;

        return $this;
    }

    /**
     * Gets cat
     *
     * @return \Domainrobot\Model\ContactCatExtensions
     */
    public function getCat()
    {
        return $this->container['cat'];
    }

    /**
     * Sets cat
     *
     * @param \Domainrobot\Model\ContactCatExtensions $cat The .cat contact extensions.
     *
     * @return $this
     */
    public function setCat($cat)
    {
        $this->container['cat'] = $cat;

        return $this;
    }

    /**
     * Gets jobs
     *
     * @return \Domainrobot\Model\ContactJobsExtensions
     */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
     * Sets jobs
     *
     * @param \Domainrobot\Model\ContactJobsExtensions $jobs The .jobs contact extensions.
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;

        return $this;
    }

    /**
     * Gets it
     *
     * @return \Domainrobot\Model\ContactItExtensions
     */
    public function getIt()
    {
        return $this->container['it'];
    }

    /**
     * Sets it
     *
     * @param \Domainrobot\Model\ContactItExtensions $it The .it contact extensions.
     *
     * @return $this
     */
    public function setIt($it)
    {
        $this->container['it'] = $it;

        return $this;
    }

    /**
     * Gets jp
     *
     * @return \Domainrobot\Model\ContactJpExtensions
     */
    public function getJp()
    {
        return $this->container['jp'];
    }

    /**
     * Sets jp
     *
     * @param \Domainrobot\Model\ContactJpExtensions $jp The .jp contact extensions.
     *
     * @return $this
     */
    public function setJp($jp)
    {
        $this->container['jp'] = $jp;

        return $this;
    }

    /**
     * Gets xxx
     *
     * @return \Domainrobot\Model\ContactXxxExtensions
     */
    public function getXxx()
    {
        return $this->container['xxx'];
    }

    /**
     * Sets xxx
     *
     * @param \Domainrobot\Model\ContactXxxExtensions $xxx The .xxx contact extensions.
     *
     * @return $this
     */
    public function setXxx($xxx)
    {
        $this->container['xxx'] = $xxx;

        return $this;
    }

    /**
     * Gets hk
     *
     * @return \Domainrobot\Model\ContactHkExtensions
     */
    public function getHk()
    {
        return $this->container['hk'];
    }

    /**
     * Sets hk
     *
     * @param \Domainrobot\Model\ContactHkExtensions $hk The .hk contact extensions.
     *
     * @return $this
     */
    public function setHk($hk)
    {
        $this->container['hk'] = $hk;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return \Domainrobot\Model\ContactBankExtensions
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param \Domainrobot\Model\ContactBankExtensions $bank The .bank contact extensions.
     *
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets swiss
     *
     * @return \Domainrobot\Model\ContactSwissExtensions
     */
    public function getSwiss()
    {
        return $this->container['swiss'];
    }

    /**
     * Sets swiss
     *
     * @param \Domainrobot\Model\ContactSwissExtensions $swiss The .swiss contact extensions.
     *
     * @return $this
     */
    public function setSwiss($swiss)
    {
        $this->container['swiss'] = $swiss;

        return $this;
    }

    /**
     * Gets ru
     *
     * @return \Domainrobot\Model\ContactRuExtensions
     */
    public function getRu()
    {
        return $this->container['ru'];
    }

    /**
     * Sets ru
     *
     * @param \Domainrobot\Model\ContactRuExtensions $ru The .ru contact extensions.
     *
     * @return $this
     */
    public function setRu($ru)
    {
        $this->container['ru'] = $ru;

        return $this;
    }

    /**
     * Gets uk
     *
     * @return \Domainrobot\Model\ContactUkExtensions
     */
    public function getUk()
    {
        return $this->container['uk'];
    }

    /**
     * Sets uk
     *
     * @param \Domainrobot\Model\ContactUkExtensions $uk The .uk contact extensions.
     *
     * @return $this
     */
    public function setUk($uk)
    {
        $this->container['uk'] = $uk;

        return $this;
    }

    /**
     * Gets ca
     *
     * @return \Domainrobot\Model\ContactCaExtensions
     */
    public function getCa()
    {
        return $this->container['ca'];
    }

    /**
     * Sets ca
     *
     * @param \Domainrobot\Model\ContactCaExtensions $ca The .ca contact extensions.
     *
     * @return $this
     */
    public function setCa($ca)
    {
        $this->container['ca'] = $ca;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return \Domainrobot\Model\ContactRoExtensions
     */
    public function getRo()
    {
        return $this->container['ro'];
    }

    /**
     * Sets ro
     *
     * @param \Domainrobot\Model\ContactRoExtensions $ro The .ro contact extensions.
     *
     * @return $this
     */
    public function setRo($ro)
    {
        $this->container['ro'] = $ro;

        return $this;
    }

    /**
     * Gets barcelona
     *
     * @return \Domainrobot\Model\ContactBarcelonaExtensions
     */
    public function getBarcelona()
    {
        return $this->container['barcelona'];
    }

    /**
     * Sets barcelona
     *
     * @param \Domainrobot\Model\ContactBarcelonaExtensions $barcelona The .barcelona contact extensions.
     *
     * @return $this
     */
    public function setBarcelona($barcelona)
    {
        $this->container['barcelona'] = $barcelona;

        return $this;
    }

    /**
     * Gets general
     *
     * @return \Domainrobot\Model\ContactGeneralExtensions
     */
    public function getGeneral()
    {
        return $this->container['general'];
    }

    /**
     * Sets general
     *
     * @param \Domainrobot\Model\ContactGeneralExtensions $general The general contact extensions.
     *
     * @return $this
     */
    public function setGeneral($general)
    {
        $this->container['general'] = $general;

        return $this;
    }

    /**
     * Gets nz
     *
     * @return \Domainrobot\Model\ContactNzExtensions
     */
    public function getNz()
    {
        return $this->container['nz'];
    }

    /**
     * Sets nz
     *
     * @param \Domainrobot\Model\ContactNzExtensions $nz The .nz contact extensions
     *
     * @return $this
     */
    public function setNz($nz)
    {
        $this->container['nz'] = $nz;

        return $this;
    }

    /**
     * Gets sport
     *
     * @return \Domainrobot\Model\ContactSportExtensions
     */
    public function getSport()
    {
        return $this->container['sport'];
    }

    /**
     * Sets sport
     *
     * @param \Domainrobot\Model\ContactSportExtensions $sport The .sport contact extensions.
     *
     * @return $this
     */
    public function setSport($sport)
    {
        $this->container['sport'] = $sport;

        return $this;
    }

    /**
     * Gets luxe
     *
     * @return \Domainrobot\Model\ContactLuxeExtensions
     */
    public function getLuxe()
    {
        return $this->container['luxe'];
    }

    /**
     * Sets luxe
     *
     * @param \Domainrobot\Model\ContactLuxeExtensions $luxe The .luxe contact extensions.
     *
     * @return $this
     */
    public function setLuxe($luxe)
    {
        $this->container['luxe'] = $luxe;

        return $this;
    }

    /**
     * Gets madrid
     *
     * @return \Domainrobot\Model\ContactMadridExtensions
     */
    public function getMadrid()
    {
        return $this->container['madrid'];
    }

    /**
     * Sets madrid
     *
     * @param \Domainrobot\Model\ContactMadridExtensions $madrid The .madrid contact extensions.
     *
     * @return $this
     */
    public function setMadrid($madrid)
    {
        $this->container['madrid'] = $madrid;

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

