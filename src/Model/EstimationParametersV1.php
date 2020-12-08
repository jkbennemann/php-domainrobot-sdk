<?php
/**
 * EstimationParametersV1
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
 * EstimationParametersV1 Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationParametersV1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationParametersV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nameBased' => '\Domainrobot\Model\EstimationParametersV1NameBased',
        'keywordBased' => '\Domainrobot\Model\EstimationParametersV1KeywordBased',
        'tldBased' => '\Domainrobot\Model\EstimationParametersV1TldBased',
        'pagerank' => '\Domainrobot\Model\EstimationParametersV1Pagerank',
        'language' => '\Domainrobot\Model\EstimationParametersV1Language',
        'wikipediaPageview' => '\Domainrobot\Model\EstimationParametersV1WikipediaPageview'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nameBased' => null,
        'keywordBased' => null,
        'tldBased' => null,
        'pagerank' => null,
        'language' => null,
        'wikipediaPageview' => null
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
        'nameBased' => 'nameBased',
        'keywordBased' => 'keywordBased',
        'tldBased' => 'tldBased',
        'pagerank' => 'pagerank',
        'language' => 'language',
        'wikipediaPageview' => 'wikipediaPageview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nameBased' => 'setNameBased',
        'keywordBased' => 'setKeywordBased',
        'tldBased' => 'setTldBased',
        'pagerank' => 'setPagerank',
        'language' => 'setLanguage',
        'wikipediaPageview' => 'setWikipediaPageview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nameBased' => 'getNameBased',
        'keywordBased' => 'getKeywordBased',
        'tldBased' => 'getTldBased',
        'pagerank' => 'getPagerank',
        'language' => 'getLanguage',
        'wikipediaPageview' => 'getWikipediaPageview'
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
        $this->container['nameBased'] = isset($data['nameBased']) ? $this->createData($data['nameBased'], 'nameBased')  : null;
        $this->container['keywordBased'] = isset($data['keywordBased']) ? $this->createData($data['keywordBased'], 'keywordBased')  : null;
        $this->container['tldBased'] = isset($data['tldBased']) ? $this->createData($data['tldBased'], 'tldBased')  : null;
        $this->container['pagerank'] = isset($data['pagerank']) ? $this->createData($data['pagerank'], 'pagerank')  : null;
        $this->container['language'] = isset($data['language']) ? $this->createData($data['language'], 'language')  : null;
        $this->container['wikipediaPageview'] = isset($data['wikipediaPageview']) ? $this->createData($data['wikipediaPageview'], 'wikipediaPageview')  : null;
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
     * Gets nameBased
     *
     * @return \Domainrobot\Model\EstimationParametersV1NameBased
     */
    public function getNameBased()
    {
        return $this->container['nameBased'];
    }

    /**
     * Sets nameBased
     *
     * @param \Domainrobot\Model\EstimationParametersV1NameBased $nameBased nameBased
     *
     * @return $this
     */
    public function setNameBased($nameBased)
    {
        $this->container['nameBased'] = $nameBased;

        return $this;
    }

    /**
     * Gets keywordBased
     *
     * @return \Domainrobot\Model\EstimationParametersV1KeywordBased
     */
    public function getKeywordBased()
    {
        return $this->container['keywordBased'];
    }

    /**
     * Sets keywordBased
     *
     * @param \Domainrobot\Model\EstimationParametersV1KeywordBased $keywordBased keywordBased
     *
     * @return $this
     */
    public function setKeywordBased($keywordBased)
    {
        $this->container['keywordBased'] = $keywordBased;

        return $this;
    }

    /**
     * Gets tldBased
     *
     * @return \Domainrobot\Model\EstimationParametersV1TldBased
     */
    public function getTldBased()
    {
        return $this->container['tldBased'];
    }

    /**
     * Sets tldBased
     *
     * @param \Domainrobot\Model\EstimationParametersV1TldBased $tldBased tldBased
     *
     * @return $this
     */
    public function setTldBased($tldBased)
    {
        $this->container['tldBased'] = $tldBased;

        return $this;
    }

    /**
     * Gets pagerank
     *
     * @return \Domainrobot\Model\EstimationParametersV1Pagerank
     */
    public function getPagerank()
    {
        return $this->container['pagerank'];
    }

    /**
     * Sets pagerank
     *
     * @param \Domainrobot\Model\EstimationParametersV1Pagerank $pagerank pagerank
     *
     * @return $this
     */
    public function setPagerank($pagerank)
    {
        $this->container['pagerank'] = $pagerank;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Domainrobot\Model\EstimationParametersV1Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Domainrobot\Model\EstimationParametersV1Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets wikipediaPageview
     *
     * @return \Domainrobot\Model\EstimationParametersV1WikipediaPageview
     */
    public function getWikipediaPageview()
    {
        return $this->container['wikipediaPageview'];
    }

    /**
     * Sets wikipediaPageview
     *
     * @param \Domainrobot\Model\EstimationParametersV1WikipediaPageview $wikipediaPageview wikipediaPageview
     *
     * @return $this
     */
    public function setWikipediaPageview($wikipediaPageview)
    {
        $this->container['wikipediaPageview'] = $wikipediaPageview;

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

