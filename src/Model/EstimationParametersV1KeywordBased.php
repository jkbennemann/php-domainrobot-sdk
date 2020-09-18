<?php
/**
 * EstimationParametersV1KeywordBased
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
 * EstimationParametersV1KeywordBased Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationParametersV1KeywordBased implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationParametersV1_keywordBased';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'word' => 'object',
        'version' => 'object',
        'segments' => 'null[]',
        'numWords' => 'object',
        'keywords' => 'null[]',
        'numKeywords' => 'object',
        'averageKeywordFrequency' => 'object',
        'averageKeywordPrice' => 'object',
        'prefix' => 'object',
        'averagePrefixFrequency' => 'object',
        'averagePrefixPrice' => 'object',
        'suffix' => 'object',
        'averageSuffixFrequency' => 'object',
        'averageSuffixPrice' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'word' => null,
        'version' => null,
        'segments' => null,
        'numWords' => null,
        'keywords' => null,
        'numKeywords' => null,
        'averageKeywordFrequency' => null,
        'averageKeywordPrice' => null,
        'prefix' => null,
        'averagePrefixFrequency' => null,
        'averagePrefixPrice' => null,
        'suffix' => null,
        'averageSuffixFrequency' => null,
        'averageSuffixPrice' => null
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
        'word' => 'word',
        'version' => 'version',
        'segments' => 'segments',
        'numWords' => 'numWords',
        'keywords' => 'keywords',
        'numKeywords' => 'numKeywords',
        'averageKeywordFrequency' => 'averageKeywordFrequency',
        'averageKeywordPrice' => 'averageKeywordPrice',
        'prefix' => 'prefix&quot;',
        'averagePrefixFrequency' => 'averagePrefixFrequency',
        'averagePrefixPrice' => 'averagePrefixPrice',
        'suffix' => 'suffix&quot;',
        'averageSuffixFrequency' => 'averageSuffixFrequency',
        'averageSuffixPrice' => 'averageSuffixPrice&quot;'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'word' => 'setWord',
        'version' => 'setVersion',
        'segments' => 'setSegments',
        'numWords' => 'setNumWords',
        'keywords' => 'setKeywords',
        'numKeywords' => 'setNumKeywords',
        'averageKeywordFrequency' => 'setAverageKeywordFrequency',
        'averageKeywordPrice' => 'setAverageKeywordPrice',
        'prefix' => 'setPrefix',
        'averagePrefixFrequency' => 'setAveragePrefixFrequency',
        'averagePrefixPrice' => 'setAveragePrefixPrice',
        'suffix' => 'setSuffix',
        'averageSuffixFrequency' => 'setAverageSuffixFrequency',
        'averageSuffixPrice' => 'setAverageSuffixPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'word' => 'getWord',
        'version' => 'getVersion',
        'segments' => 'getSegments',
        'numWords' => 'getNumWords',
        'keywords' => 'getKeywords',
        'numKeywords' => 'getNumKeywords',
        'averageKeywordFrequency' => 'getAverageKeywordFrequency',
        'averageKeywordPrice' => 'getAverageKeywordPrice',
        'prefix' => 'getPrefix',
        'averagePrefixFrequency' => 'getAveragePrefixFrequency',
        'averagePrefixPrice' => 'getAveragePrefixPrice',
        'suffix' => 'getSuffix',
        'averageSuffixFrequency' => 'getAverageSuffixFrequency',
        'averageSuffixPrice' => 'getAverageSuffixPrice'
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
        $this->container['word'] = isset($data['word']) ? $this->createData($data['word'], 'word')  : null;
        $this->container['version'] = isset($data['version']) ? $this->createData($data['version'], 'version')  : null;
        $this->container['segments'] = isset($data['segments']) ? $this->createData($data['segments'], 'segments')  : null;
        $this->container['numWords'] = isset($data['numWords']) ? $this->createData($data['numWords'], 'numWords')  : null;
        $this->container['keywords'] = isset($data['keywords']) ? $this->createData($data['keywords'], 'keywords')  : null;
        $this->container['numKeywords'] = isset($data['numKeywords']) ? $this->createData($data['numKeywords'], 'numKeywords')  : null;
        $this->container['averageKeywordFrequency'] = isset($data['averageKeywordFrequency']) ? $this->createData($data['averageKeywordFrequency'], 'averageKeywordFrequency')  : null;
        $this->container['averageKeywordPrice'] = isset($data['averageKeywordPrice']) ? $this->createData($data['averageKeywordPrice'], 'averageKeywordPrice')  : null;
        $this->container['prefix'] = isset($data['prefix']) ? $this->createData($data['prefix'], 'prefix')  : null;
        $this->container['averagePrefixFrequency'] = isset($data['averagePrefixFrequency']) ? $this->createData($data['averagePrefixFrequency'], 'averagePrefixFrequency')  : null;
        $this->container['averagePrefixPrice'] = isset($data['averagePrefixPrice']) ? $this->createData($data['averagePrefixPrice'], 'averagePrefixPrice')  : null;
        $this->container['suffix'] = isset($data['suffix']) ? $this->createData($data['suffix'], 'suffix')  : null;
        $this->container['averageSuffixFrequency'] = isset($data['averageSuffixFrequency']) ? $this->createData($data['averageSuffixFrequency'], 'averageSuffixFrequency')  : null;
        $this->container['averageSuffixPrice'] = isset($data['averageSuffixPrice']) ? $this->createData($data['averageSuffixPrice'], 'averageSuffixPrice')  : null;
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
     * Gets word
     *
     * @return object
     */
    public function getWord()
    {
        return $this->container['word'];
    }

    /**
     * Sets word
     *
     * @param object $word word
     *
     * @return $this
     */
    public function setWord($word)
    {
        $this->container['word'] = $word;

        return $this;
    }

    /**
     * Gets version
     *
     * @return object
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param object $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return null[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param null[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets numWords
     *
     * @return object
     */
    public function getNumWords()
    {
        return $this->container['numWords'];
    }

    /**
     * Sets numWords
     *
     * @param object $numWords numWords
     *
     * @return $this
     */
    public function setNumWords($numWords)
    {
        $this->container['numWords'] = $numWords;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return null[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param null[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets numKeywords
     *
     * @return object
     */
    public function getNumKeywords()
    {
        return $this->container['numKeywords'];
    }

    /**
     * Sets numKeywords
     *
     * @param object $numKeywords numKeywords
     *
     * @return $this
     */
    public function setNumKeywords($numKeywords)
    {
        $this->container['numKeywords'] = $numKeywords;

        return $this;
    }

    /**
     * Gets averageKeywordFrequency
     *
     * @return object
     */
    public function getAverageKeywordFrequency()
    {
        return $this->container['averageKeywordFrequency'];
    }

    /**
     * Sets averageKeywordFrequency
     *
     * @param object $averageKeywordFrequency averageKeywordFrequency
     *
     * @return $this
     */
    public function setAverageKeywordFrequency($averageKeywordFrequency)
    {
        $this->container['averageKeywordFrequency'] = $averageKeywordFrequency;

        return $this;
    }

    /**
     * Gets averageKeywordPrice
     *
     * @return object
     */
    public function getAverageKeywordPrice()
    {
        return $this->container['averageKeywordPrice'];
    }

    /**
     * Sets averageKeywordPrice
     *
     * @param object $averageKeywordPrice averageKeywordPrice
     *
     * @return $this
     */
    public function setAverageKeywordPrice($averageKeywordPrice)
    {
        $this->container['averageKeywordPrice'] = $averageKeywordPrice;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return object
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param object $prefix prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets averagePrefixFrequency
     *
     * @return object
     */
    public function getAveragePrefixFrequency()
    {
        return $this->container['averagePrefixFrequency'];
    }

    /**
     * Sets averagePrefixFrequency
     *
     * @param object $averagePrefixFrequency averagePrefixFrequency
     *
     * @return $this
     */
    public function setAveragePrefixFrequency($averagePrefixFrequency)
    {
        $this->container['averagePrefixFrequency'] = $averagePrefixFrequency;

        return $this;
    }

    /**
     * Gets averagePrefixPrice
     *
     * @return object
     */
    public function getAveragePrefixPrice()
    {
        return $this->container['averagePrefixPrice'];
    }

    /**
     * Sets averagePrefixPrice
     *
     * @param object $averagePrefixPrice averagePrefixPrice
     *
     * @return $this
     */
    public function setAveragePrefixPrice($averagePrefixPrice)
    {
        $this->container['averagePrefixPrice'] = $averagePrefixPrice;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return object
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param object $suffix suffix
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets averageSuffixFrequency
     *
     * @return object
     */
    public function getAverageSuffixFrequency()
    {
        return $this->container['averageSuffixFrequency'];
    }

    /**
     * Sets averageSuffixFrequency
     *
     * @param object $averageSuffixFrequency averageSuffixFrequency
     *
     * @return $this
     */
    public function setAverageSuffixFrequency($averageSuffixFrequency)
    {
        $this->container['averageSuffixFrequency'] = $averageSuffixFrequency;

        return $this;
    }

    /**
     * Gets averageSuffixPrice
     *
     * @return object
     */
    public function getAverageSuffixPrice()
    {
        return $this->container['averageSuffixPrice'];
    }

    /**
     * Sets averageSuffixPrice
     *
     * @param object $averageSuffixPrice averageSuffixPrice
     *
     * @return $this
     */
    public function setAverageSuffixPrice($averageSuffixPrice)
    {
        $this->container['averageSuffixPrice'] = $averageSuffixPrice;

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


