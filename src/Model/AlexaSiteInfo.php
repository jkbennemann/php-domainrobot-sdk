<?php
/**
 * AlexaSiteInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Service Pricer API
 *
 * The documentation for the internal price estimation API.<br> Every request expects the following headers:<ul><li>Content-Type: application/json</li><li>Accept: application/json</li></ul>
 *
 * OpenAPI spec version: 1.2.0
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
 * AlexaSiteInfo Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlexaSiteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlexaSiteInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sitesLinkingIn' => 'int',
        'rank' => 'int',
        'loadingTime' => 'string',
        'adultContent' => 'string',
        'siteLanguage' => 'string',
        'siteData' => '\Domainrobot\Model\AlexaSiteInfoSiteData',
        'highestRankedIncountry' => '\Domainrobot\Model\AlexaSiteInfoHighestRankedIncountry',
        'pageViewsPerDay' => '\Domainrobot\Model\AlexaSiteInfoPageViewsPerDay'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sitesLinkingIn' => null,
        'rank' => null,
        'loadingTime' => null,
        'adultContent' => null,
        'siteLanguage' => null,
        'siteData' => null,
        'highestRankedIncountry' => null,
        'pageViewsPerDay' => null
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
        'sitesLinkingIn' => 'sitesLinkingIn',
        'rank' => 'rank',
        'loadingTime' => 'loadingTime',
        'adultContent' => 'adultContent',
        'siteLanguage' => 'siteLanguage',
        'siteData' => 'siteData',
        'highestRankedIncountry' => 'highestRankedIncountry',
        'pageViewsPerDay' => 'pageViewsPerDay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sitesLinkingIn' => 'setSitesLinkingIn',
        'rank' => 'setRank',
        'loadingTime' => 'setLoadingTime',
        'adultContent' => 'setAdultContent',
        'siteLanguage' => 'setSiteLanguage',
        'siteData' => 'setSiteData',
        'highestRankedIncountry' => 'setHighestRankedIncountry',
        'pageViewsPerDay' => 'setPageViewsPerDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sitesLinkingIn' => 'getSitesLinkingIn',
        'rank' => 'getRank',
        'loadingTime' => 'getLoadingTime',
        'adultContent' => 'getAdultContent',
        'siteLanguage' => 'getSiteLanguage',
        'siteData' => 'getSiteData',
        'highestRankedIncountry' => 'getHighestRankedIncountry',
        'pageViewsPerDay' => 'getPageViewsPerDay'
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
        $this->container['sitesLinkingIn'] = isset($data['sitesLinkingIn']) ? $this->createData($data['sitesLinkingIn'], 'sitesLinkingIn')  : null;
        $this->container['rank'] = isset($data['rank']) ? $this->createData($data['rank'], 'rank')  : null;
        $this->container['loadingTime'] = isset($data['loadingTime']) ? $this->createData($data['loadingTime'], 'loadingTime')  : null;
        $this->container['adultContent'] = isset($data['adultContent']) ? $this->createData($data['adultContent'], 'adultContent')  : null;
        $this->container['siteLanguage'] = isset($data['siteLanguage']) ? $this->createData($data['siteLanguage'], 'siteLanguage')  : null;
        $this->container['siteData'] = isset($data['siteData']) ? $this->createData($data['siteData'], 'siteData')  : null;
        $this->container['highestRankedIncountry'] = isset($data['highestRankedIncountry']) ? $this->createData($data['highestRankedIncountry'], 'highestRankedIncountry')  : null;
        $this->container['pageViewsPerDay'] = isset($data['pageViewsPerDay']) ? $this->createData($data['pageViewsPerDay'], 'pageViewsPerDay')  : null;
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
     * Gets sitesLinkingIn
     *
     * @return int
     */
    public function getSitesLinkingIn()
    {
        return $this->container['sitesLinkingIn'];
    }

    /**
     * Sets sitesLinkingIn
     *
     * @param int $sitesLinkingIn sitesLinkingIn
     *
     * @return $this
     */
    public function setSitesLinkingIn($sitesLinkingIn)
    {
        $this->container['sitesLinkingIn'] = $sitesLinkingIn;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets loadingTime
     *
     * @return string
     */
    public function getLoadingTime()
    {
        return $this->container['loadingTime'];
    }

    /**
     * Sets loadingTime
     *
     * @param string $loadingTime loadingTime
     *
     * @return $this
     */
    public function setLoadingTime($loadingTime)
    {
        $this->container['loadingTime'] = $loadingTime;

        return $this;
    }

    /**
     * Gets adultContent
     *
     * @return string
     */
    public function getAdultContent()
    {
        return $this->container['adultContent'];
    }

    /**
     * Sets adultContent
     *
     * @param string $adultContent adultContent
     *
     * @return $this
     */
    public function setAdultContent($adultContent)
    {
        $this->container['adultContent'] = $adultContent;

        return $this;
    }

    /**
     * Gets siteLanguage
     *
     * @return string
     */
    public function getSiteLanguage()
    {
        return $this->container['siteLanguage'];
    }

    /**
     * Sets siteLanguage
     *
     * @param string $siteLanguage siteLanguage
     *
     * @return $this
     */
    public function setSiteLanguage($siteLanguage)
    {
        $this->container['siteLanguage'] = $siteLanguage;

        return $this;
    }

    /**
     * Gets siteData
     *
     * @return \Domainrobot\Model\AlexaSiteInfoSiteData
     */
    public function getSiteData()
    {
        return $this->container['siteData'];
    }

    /**
     * Sets siteData
     *
     * @param \Domainrobot\Model\AlexaSiteInfoSiteData $siteData siteData
     *
     * @return $this
     */
    public function setSiteData($siteData)
    {
        $this->container['siteData'] = $siteData;

        return $this;
    }

    /**
     * Gets highestRankedIncountry
     *
     * @return \Domainrobot\Model\AlexaSiteInfoHighestRankedIncountry
     */
    public function getHighestRankedIncountry()
    {
        return $this->container['highestRankedIncountry'];
    }

    /**
     * Sets highestRankedIncountry
     *
     * @param \Domainrobot\Model\AlexaSiteInfoHighestRankedIncountry $highestRankedIncountry highestRankedIncountry
     *
     * @return $this
     */
    public function setHighestRankedIncountry($highestRankedIncountry)
    {
        $this->container['highestRankedIncountry'] = $highestRankedIncountry;

        return $this;
    }

    /**
     * Gets pageViewsPerDay
     *
     * @return \Domainrobot\Model\AlexaSiteInfoPageViewsPerDay
     */
    public function getPageViewsPerDay()
    {
        return $this->container['pageViewsPerDay'];
    }

    /**
     * Sets pageViewsPerDay
     *
     * @param \Domainrobot\Model\AlexaSiteInfoPageViewsPerDay $pageViewsPerDay pageViewsPerDay
     *
     * @return $this
     */
    public function setPageViewsPerDay($pageViewsPerDay)
    {
        $this->container['pageViewsPerDay'] = $pageViewsPerDay;

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


