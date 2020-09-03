<?php
/**
 * EstimationParametersV1NameBased
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
 * EstimationParametersV1NameBased Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationParametersV1NameBased implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationParametersV1_nameBased';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'pattern' => 'string',
        'segements' => 'string[]',
        'keywords' => 'string[]',
        'numWords' => 'string',
        'isIDN' => 'bool',
        'numDigits' => 'float',
        'numHyph' => 'float',
        'numChar' => 'float',
        'completelyNum' => 'float',
        'averageKeywordFrequency' => 'float',
        'averageKeywordPrice' => 'float',
        'averageLengthFrequency' => 'float',
        'averageLengthPrice' => 'float',
        'prefix' => 'string',
        'averagePrefixFrequency' => 'float',
        'averagePrefixPrice' => 'float',
        'suffix' => 'string',
        'averageSuffixFrequency' => 'float',
        'averageSuffixPrice' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'pattern' => null,
        'segements' => null,
        'keywords' => null,
        'numWords' => null,
        'isIDN' => null,
        'numDigits' => null,
        'numHyph' => null,
        'numChar' => null,
        'completelyNum' => null,
        'averageKeywordFrequency' => null,
        'averageKeywordPrice' => null,
        'averageLengthFrequency' => null,
        'averageLengthPrice' => null,
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
        'name' => 'name',
        'pattern' => 'pattern',
        'segements' => 'segements',
        'keywords' => 'keywords',
        'numWords' => 'numWords',
        'isIDN' => 'isIDN',
        'numDigits' => 'numDigits',
        'numHyph' => 'numHyph',
        'numChar' => 'numChar',
        'completelyNum' => 'completelyNum',
        'averageKeywordFrequency' => 'averageKeywordFrequency',
        'averageKeywordPrice' => 'averageKeywordPrice',
        'averageLengthFrequency' => 'averageLengthFrequency',
        'averageLengthPrice' => 'averageLengthPrice',
        'prefix' => 'prefix',
        'averagePrefixFrequency' => 'averagePrefixFrequency',
        'averagePrefixPrice' => 'averagePrefixPrice',
        'suffix' => 'suffix',
        'averageSuffixFrequency' => 'averageSuffixFrequency',
        'averageSuffixPrice' => 'averageSuffixPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'pattern' => 'setPattern',
        'segements' => 'setSegements',
        'keywords' => 'setKeywords',
        'numWords' => 'setNumWords',
        'isIDN' => 'setIsIDN',
        'numDigits' => 'setNumDigits',
        'numHyph' => 'setNumHyph',
        'numChar' => 'setNumChar',
        'completelyNum' => 'setCompletelyNum',
        'averageKeywordFrequency' => 'setAverageKeywordFrequency',
        'averageKeywordPrice' => 'setAverageKeywordPrice',
        'averageLengthFrequency' => 'setAverageLengthFrequency',
        'averageLengthPrice' => 'setAverageLengthPrice',
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
        'name' => 'getName',
        'pattern' => 'getPattern',
        'segements' => 'getSegements',
        'keywords' => 'getKeywords',
        'numWords' => 'getNumWords',
        'isIDN' => 'getIsIDN',
        'numDigits' => 'getNumDigits',
        'numHyph' => 'getNumHyph',
        'numChar' => 'getNumChar',
        'completelyNum' => 'getCompletelyNum',
        'averageKeywordFrequency' => 'getAverageKeywordFrequency',
        'averageKeywordPrice' => 'getAverageKeywordPrice',
        'averageLengthFrequency' => 'getAverageLengthFrequency',
        'averageLengthPrice' => 'getAverageLengthPrice',
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
        $this->container['name'] = isset($data['name']) ? $this->createData($data['name'], 'name')  : null;
        $this->container['pattern'] = isset($data['pattern']) ? $this->createData($data['pattern'], 'pattern')  : null;
        $this->container['segements'] = isset($data['segements']) ? $this->createData($data['segements'], 'segements')  : null;
        $this->container['keywords'] = isset($data['keywords']) ? $this->createData($data['keywords'], 'keywords')  : null;
        $this->container['numWords'] = isset($data['numWords']) ? $this->createData($data['numWords'], 'numWords')  : null;
        $this->container['isIDN'] = isset($data['isIDN']) ? $this->createData($data['isIDN'], 'isIDN')  : null;
        $this->container['numDigits'] = isset($data['numDigits']) ? $this->createData($data['numDigits'], 'numDigits')  : null;
        $this->container['numHyph'] = isset($data['numHyph']) ? $this->createData($data['numHyph'], 'numHyph')  : null;
        $this->container['numChar'] = isset($data['numChar']) ? $this->createData($data['numChar'], 'numChar')  : null;
        $this->container['completelyNum'] = isset($data['completelyNum']) ? $this->createData($data['completelyNum'], 'completelyNum')  : null;
        $this->container['averageKeywordFrequency'] = isset($data['averageKeywordFrequency']) ? $this->createData($data['averageKeywordFrequency'], 'averageKeywordFrequency')  : null;
        $this->container['averageKeywordPrice'] = isset($data['averageKeywordPrice']) ? $this->createData($data['averageKeywordPrice'], 'averageKeywordPrice')  : null;
        $this->container['averageLengthFrequency'] = isset($data['averageLengthFrequency']) ? $this->createData($data['averageLengthFrequency'], 'averageLengthFrequency')  : null;
        $this->container['averageLengthPrice'] = isset($data['averageLengthPrice']) ? $this->createData($data['averageLengthPrice'], 'averageLengthPrice')  : null;
        $this->container['prefix'] = isset($data['prefix']) ? $this->createData($data['prefix'], 'prefix')  : null;
        $this->container['averagePrefixFrequency'] = isset($data['averagePrefixFrequency']) ? $this->createData($data['averagePrefixFrequency'], 'averagePrefixFrequency')  : null;
        $this->container['averagePrefixPrice'] = isset($data['averagePrefixPrice']) ? $this->createData($data['averagePrefixPrice'], 'averagePrefixPrice')  : null;
        $this->container['suffix'] = isset($data['suffix']) ? $this->createData($data['suffix'], 'suffix')  : null;
        $this->container['averageSuffixFrequency'] = isset($data['averageSuffixFrequency']) ? $this->createData($data['averageSuffixFrequency'], 'averageSuffixFrequency')  : null;
        $this->container['averageSuffixPrice'] = isset($data['averageSuffixPrice']) ? $this->createData($data['averageSuffixPrice'], 'averageSuffixPrice')  : null;
    }

    /**
    *
    * @param mixed[] $data
    * @param string $property
    * @return mixed
    */
    public function createData($data = null, $property){
        if($data === null){
            return '';
        }
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        if(count($matches) > 0 && count($matches) < 3){
            try {
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            }catch(\Exception $ex){
                return $data;
            }
        }else if(count($matches) >= 3){
            $reflectionInstances = [];
            foreach($data as $d){
                try {
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType) );
                    $reflectionInstances[] = $reflection->newInstance($d);

                    return $reflectionInstances;
                } catch (\Exception $ex) {
                    return $data;
                }
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return string
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string $pattern pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets segements
     *
     * @return string[]
     */
    public function getSegements()
    {
        return $this->container['segements'];
    }

    /**
     * Sets segements
     *
     * @param string[] $segements segements
     *
     * @return $this
     */
    public function setSegements($segements)
    {
        $this->container['segements'] = $segements;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets numWords
     *
     * @return string
     */
    public function getNumWords()
    {
        return $this->container['numWords'];
    }

    /**
     * Sets numWords
     *
     * @param string $numWords numWords
     *
     * @return $this
     */
    public function setNumWords($numWords)
    {
        $this->container['numWords'] = $numWords;

        return $this;
    }

    /**
     * Gets isIDN
     *
     * @return bool
     */
    public function getIsIDN()
    {
        return $this->container['isIDN'];
    }

    /**
     * Sets isIDN
     *
     * @param bool $isIDN isIDN
     *
     * @return $this
     */
    public function setIsIDN($isIDN)
    {
        $this->container['isIDN'] = $isIDN;

        return $this;
    }

    /**
     * Gets numDigits
     *
     * @return float
     */
    public function getNumDigits()
    {
        return $this->container['numDigits'];
    }

    /**
     * Sets numDigits
     *
     * @param float $numDigits numDigits
     *
     * @return $this
     */
    public function setNumDigits($numDigits)
    {
        $this->container['numDigits'] = $numDigits;

        return $this;
    }

    /**
     * Gets numHyph
     *
     * @return float
     */
    public function getNumHyph()
    {
        return $this->container['numHyph'];
    }

    /**
     * Sets numHyph
     *
     * @param float $numHyph numHyph
     *
     * @return $this
     */
    public function setNumHyph($numHyph)
    {
        $this->container['numHyph'] = $numHyph;

        return $this;
    }

    /**
     * Gets numChar
     *
     * @return float
     */
    public function getNumChar()
    {
        return $this->container['numChar'];
    }

    /**
     * Sets numChar
     *
     * @param float $numChar numChar
     *
     * @return $this
     */
    public function setNumChar($numChar)
    {
        $this->container['numChar'] = $numChar;

        return $this;
    }

    /**
     * Gets completelyNum
     *
     * @return float
     */
    public function getCompletelyNum()
    {
        return $this->container['completelyNum'];
    }

    /**
     * Sets completelyNum
     *
     * @param float $completelyNum completelyNum
     *
     * @return $this
     */
    public function setCompletelyNum($completelyNum)
    {
        $this->container['completelyNum'] = $completelyNum;

        return $this;
    }

    /**
     * Gets averageKeywordFrequency
     *
     * @return float
     */
    public function getAverageKeywordFrequency()
    {
        return $this->container['averageKeywordFrequency'];
    }

    /**
     * Sets averageKeywordFrequency
     *
     * @param float $averageKeywordFrequency averageKeywordFrequency
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
     * @return float
     */
    public function getAverageKeywordPrice()
    {
        return $this->container['averageKeywordPrice'];
    }

    /**
     * Sets averageKeywordPrice
     *
     * @param float $averageKeywordPrice averageKeywordPrice
     *
     * @return $this
     */
    public function setAverageKeywordPrice($averageKeywordPrice)
    {
        $this->container['averageKeywordPrice'] = $averageKeywordPrice;

        return $this;
    }

    /**
     * Gets averageLengthFrequency
     *
     * @return float
     */
    public function getAverageLengthFrequency()
    {
        return $this->container['averageLengthFrequency'];
    }

    /**
     * Sets averageLengthFrequency
     *
     * @param float $averageLengthFrequency averageLengthFrequency
     *
     * @return $this
     */
    public function setAverageLengthFrequency($averageLengthFrequency)
    {
        $this->container['averageLengthFrequency'] = $averageLengthFrequency;

        return $this;
    }

    /**
     * Gets averageLengthPrice
     *
     * @return float
     */
    public function getAverageLengthPrice()
    {
        return $this->container['averageLengthPrice'];
    }

    /**
     * Sets averageLengthPrice
     *
     * @param float $averageLengthPrice averageLengthPrice
     *
     * @return $this
     */
    public function setAverageLengthPrice($averageLengthPrice)
    {
        $this->container['averageLengthPrice'] = $averageLengthPrice;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix prefix
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
     * @return float
     */
    public function getAveragePrefixFrequency()
    {
        return $this->container['averagePrefixFrequency'];
    }

    /**
     * Sets averagePrefixFrequency
     *
     * @param float $averagePrefixFrequency averagePrefixFrequency
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
     * @return float
     */
    public function getAveragePrefixPrice()
    {
        return $this->container['averagePrefixPrice'];
    }

    /**
     * Sets averagePrefixPrice
     *
     * @param float $averagePrefixPrice averagePrefixPrice
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
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix suffix
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
     * @return float
     */
    public function getAverageSuffixFrequency()
    {
        return $this->container['averageSuffixFrequency'];
    }

    /**
     * Sets averageSuffixFrequency
     *
     * @param float $averageSuffixFrequency averageSuffixFrequency
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
     * @return float
     */
    public function getAverageSuffixPrice()
    {
        return $this->container['averageSuffixPrice'];
    }

    /**
     * Sets averageSuffixPrice
     *
     * @param float $averageSuffixPrice averageSuffixPrice
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
        };
        return $container;
    }
}


