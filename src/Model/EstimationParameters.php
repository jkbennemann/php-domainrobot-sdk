<?php
/**
 * EstimationParameters
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
 * EstimationParameters Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'averageKeywordFrequency' => 'string',
        'averageKeywordPrice' => 'string',
        'averageLengthFrequency' => 'string',
        'averageLengthPrice' => 'string',
        'averageTldFrequency' => 'string',
        'averageTldPrice' => 'string',
        'char' => 'string',
        'comDomain' => 'string',
        'completelyNum' => 'string',
        'foundKeywords' => 'string',
        'foundPrefix' => 'string',
        'foundSuffix' => 'string',
        'hyph' => 'string',
        'idnEncoding' => 'string',
        'keywordCount' => 'string',
        'majesticsGlobalRank' => 'string',
        'majesticsPrevGlobalRank' => 'string',
        'majesticsPrevRefIPs' => 'string',
        'majesticsPrevRefSubNets' => 'string',
        'majesticsPrevTldRank' => 'string',
        'majesticsRefIPs' => 'string',
        'majesticsRefSubNets' => 'string',
        'majesticsTldRank' => 'string',
        'nameSeg' => 'string',
        'num' => 'string',
        'numWords' => 'string',
        'tld' => 'string',
        'tldNumDomains' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'averageKeywordFrequency' => null,
        'averageKeywordPrice' => null,
        'averageLengthFrequency' => null,
        'averageLengthPrice' => null,
        'averageTldFrequency' => null,
        'averageTldPrice' => null,
        'char' => null,
        'comDomain' => null,
        'completelyNum' => null,
        'foundKeywords' => null,
        'foundPrefix' => null,
        'foundSuffix' => null,
        'hyph' => null,
        'idnEncoding' => null,
        'keywordCount' => null,
        'majesticsGlobalRank' => null,
        'majesticsPrevGlobalRank' => null,
        'majesticsPrevRefIPs' => null,
        'majesticsPrevRefSubNets' => null,
        'majesticsPrevTldRank' => null,
        'majesticsRefIPs' => null,
        'majesticsRefSubNets' => null,
        'majesticsTldRank' => null,
        'nameSeg' => null,
        'num' => null,
        'numWords' => null,
        'tld' => null,
        'tldNumDomains' => null
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
        'averageKeywordFrequency' => 'averageKeywordFrequency',
        'averageKeywordPrice' => 'averageKeywordPrice',
        'averageLengthFrequency' => 'averageLengthFrequency',
        'averageLengthPrice' => 'averageLengthPrice',
        'averageTldFrequency' => 'averageTldFrequency',
        'averageTldPrice' => 'averageTldPrice',
        'char' => 'char',
        'comDomain' => 'comDomain',
        'completelyNum' => 'completelyNum',
        'foundKeywords' => 'foundKeywords',
        'foundPrefix' => 'foundPrefix',
        'foundSuffix' => 'foundSuffix',
        'hyph' => 'hyph',
        'idnEncoding' => 'idnEncoding',
        'keywordCount' => 'keywordCount',
        'majesticsGlobalRank' => 'majesticsGlobalRank',
        'majesticsPrevGlobalRank' => 'majesticsPrevGlobalRank',
        'majesticsPrevRefIPs' => 'majesticsPrevRefIPs',
        'majesticsPrevRefSubNets' => 'majesticsPrevRefSubNets',
        'majesticsPrevTldRank' => 'majesticsPrevTldRank',
        'majesticsRefIPs' => 'majesticsRefIPs',
        'majesticsRefSubNets' => 'majesticsRefSubNets',
        'majesticsTldRank' => 'majesticsTldRank',
        'nameSeg' => 'nameSeg',
        'num' => 'num',
        'numWords' => 'numWords',
        'tld' => 'tld',
        'tldNumDomains' => 'tldNumDomains'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'averageKeywordFrequency' => 'setAverageKeywordFrequency',
        'averageKeywordPrice' => 'setAverageKeywordPrice',
        'averageLengthFrequency' => 'setAverageLengthFrequency',
        'averageLengthPrice' => 'setAverageLengthPrice',
        'averageTldFrequency' => 'setAverageTldFrequency',
        'averageTldPrice' => 'setAverageTldPrice',
        'char' => 'setChar',
        'comDomain' => 'setComDomain',
        'completelyNum' => 'setCompletelyNum',
        'foundKeywords' => 'setFoundKeywords',
        'foundPrefix' => 'setFoundPrefix',
        'foundSuffix' => 'setFoundSuffix',
        'hyph' => 'setHyph',
        'idnEncoding' => 'setIdnEncoding',
        'keywordCount' => 'setKeywordCount',
        'majesticsGlobalRank' => 'setMajesticsGlobalRank',
        'majesticsPrevGlobalRank' => 'setMajesticsPrevGlobalRank',
        'majesticsPrevRefIPs' => 'setMajesticsPrevRefIPs',
        'majesticsPrevRefSubNets' => 'setMajesticsPrevRefSubNets',
        'majesticsPrevTldRank' => 'setMajesticsPrevTldRank',
        'majesticsRefIPs' => 'setMajesticsRefIPs',
        'majesticsRefSubNets' => 'setMajesticsRefSubNets',
        'majesticsTldRank' => 'setMajesticsTldRank',
        'nameSeg' => 'setNameSeg',
        'num' => 'setNum',
        'numWords' => 'setNumWords',
        'tld' => 'setTld',
        'tldNumDomains' => 'setTldNumDomains'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'averageKeywordFrequency' => 'getAverageKeywordFrequency',
        'averageKeywordPrice' => 'getAverageKeywordPrice',
        'averageLengthFrequency' => 'getAverageLengthFrequency',
        'averageLengthPrice' => 'getAverageLengthPrice',
        'averageTldFrequency' => 'getAverageTldFrequency',
        'averageTldPrice' => 'getAverageTldPrice',
        'char' => 'getChar',
        'comDomain' => 'getComDomain',
        'completelyNum' => 'getCompletelyNum',
        'foundKeywords' => 'getFoundKeywords',
        'foundPrefix' => 'getFoundPrefix',
        'foundSuffix' => 'getFoundSuffix',
        'hyph' => 'getHyph',
        'idnEncoding' => 'getIdnEncoding',
        'keywordCount' => 'getKeywordCount',
        'majesticsGlobalRank' => 'getMajesticsGlobalRank',
        'majesticsPrevGlobalRank' => 'getMajesticsPrevGlobalRank',
        'majesticsPrevRefIPs' => 'getMajesticsPrevRefIPs',
        'majesticsPrevRefSubNets' => 'getMajesticsPrevRefSubNets',
        'majesticsPrevTldRank' => 'getMajesticsPrevTldRank',
        'majesticsRefIPs' => 'getMajesticsRefIPs',
        'majesticsRefSubNets' => 'getMajesticsRefSubNets',
        'majesticsTldRank' => 'getMajesticsTldRank',
        'nameSeg' => 'getNameSeg',
        'num' => 'getNum',
        'numWords' => 'getNumWords',
        'tld' => 'getTld',
        'tldNumDomains' => 'getTldNumDomains'
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
        $this->container['averageKeywordFrequency'] = isset($data['averageKeywordFrequency']) ? $this->createData($data['averageKeywordFrequency'], 'averageKeywordFrequency')  : null;
        $this->container['averageKeywordPrice'] = isset($data['averageKeywordPrice']) ? $this->createData($data['averageKeywordPrice'], 'averageKeywordPrice')  : null;
        $this->container['averageLengthFrequency'] = isset($data['averageLengthFrequency']) ? $this->createData($data['averageLengthFrequency'], 'averageLengthFrequency')  : null;
        $this->container['averageLengthPrice'] = isset($data['averageLengthPrice']) ? $this->createData($data['averageLengthPrice'], 'averageLengthPrice')  : null;
        $this->container['averageTldFrequency'] = isset($data['averageTldFrequency']) ? $this->createData($data['averageTldFrequency'], 'averageTldFrequency')  : null;
        $this->container['averageTldPrice'] = isset($data['averageTldPrice']) ? $this->createData($data['averageTldPrice'], 'averageTldPrice')  : null;
        $this->container['char'] = isset($data['char']) ? $this->createData($data['char'], 'char')  : null;
        $this->container['comDomain'] = isset($data['comDomain']) ? $this->createData($data['comDomain'], 'comDomain')  : null;
        $this->container['completelyNum'] = isset($data['completelyNum']) ? $this->createData($data['completelyNum'], 'completelyNum')  : null;
        $this->container['foundKeywords'] = isset($data['foundKeywords']) ? $this->createData($data['foundKeywords'], 'foundKeywords')  : null;
        $this->container['foundPrefix'] = isset($data['foundPrefix']) ? $this->createData($data['foundPrefix'], 'foundPrefix')  : null;
        $this->container['foundSuffix'] = isset($data['foundSuffix']) ? $this->createData($data['foundSuffix'], 'foundSuffix')  : null;
        $this->container['hyph'] = isset($data['hyph']) ? $this->createData($data['hyph'], 'hyph')  : null;
        $this->container['idnEncoding'] = isset($data['idnEncoding']) ? $this->createData($data['idnEncoding'], 'idnEncoding')  : null;
        $this->container['keywordCount'] = isset($data['keywordCount']) ? $this->createData($data['keywordCount'], 'keywordCount')  : null;
        $this->container['majesticsGlobalRank'] = isset($data['majesticsGlobalRank']) ? $this->createData($data['majesticsGlobalRank'], 'majesticsGlobalRank')  : null;
        $this->container['majesticsPrevGlobalRank'] = isset($data['majesticsPrevGlobalRank']) ? $this->createData($data['majesticsPrevGlobalRank'], 'majesticsPrevGlobalRank')  : null;
        $this->container['majesticsPrevRefIPs'] = isset($data['majesticsPrevRefIPs']) ? $this->createData($data['majesticsPrevRefIPs'], 'majesticsPrevRefIPs')  : null;
        $this->container['majesticsPrevRefSubNets'] = isset($data['majesticsPrevRefSubNets']) ? $this->createData($data['majesticsPrevRefSubNets'], 'majesticsPrevRefSubNets')  : null;
        $this->container['majesticsPrevTldRank'] = isset($data['majesticsPrevTldRank']) ? $this->createData($data['majesticsPrevTldRank'], 'majesticsPrevTldRank')  : null;
        $this->container['majesticsRefIPs'] = isset($data['majesticsRefIPs']) ? $this->createData($data['majesticsRefIPs'], 'majesticsRefIPs')  : null;
        $this->container['majesticsRefSubNets'] = isset($data['majesticsRefSubNets']) ? $this->createData($data['majesticsRefSubNets'], 'majesticsRefSubNets')  : null;
        $this->container['majesticsTldRank'] = isset($data['majesticsTldRank']) ? $this->createData($data['majesticsTldRank'], 'majesticsTldRank')  : null;
        $this->container['nameSeg'] = isset($data['nameSeg']) ? $this->createData($data['nameSeg'], 'nameSeg')  : null;
        $this->container['num'] = isset($data['num']) ? $this->createData($data['num'], 'num')  : null;
        $this->container['numWords'] = isset($data['numWords']) ? $this->createData($data['numWords'], 'numWords')  : null;
        $this->container['tld'] = isset($data['tld']) ? $this->createData($data['tld'], 'tld')  : null;
        $this->container['tldNumDomains'] = isset($data['tldNumDomains']) ? $this->createData($data['tldNumDomains'], 'tldNumDomains')  : null;
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
     * Gets averageKeywordFrequency
     *
     * @return string
     */
    public function getAverageKeywordFrequency()
    {
        return $this->container['averageKeywordFrequency'];
    }

    /**
     * Sets averageKeywordFrequency
     *
     * @param string $averageKeywordFrequency averageKeywordFrequency
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
     * @return string
     */
    public function getAverageKeywordPrice()
    {
        return $this->container['averageKeywordPrice'];
    }

    /**
     * Sets averageKeywordPrice
     *
     * @param string $averageKeywordPrice averageKeywordPrice
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
     * @return string
     */
    public function getAverageLengthFrequency()
    {
        return $this->container['averageLengthFrequency'];
    }

    /**
     * Sets averageLengthFrequency
     *
     * @param string $averageLengthFrequency averageLengthFrequency
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
     * @return string
     */
    public function getAverageLengthPrice()
    {
        return $this->container['averageLengthPrice'];
    }

    /**
     * Sets averageLengthPrice
     *
     * @param string $averageLengthPrice averageLengthPrice
     *
     * @return $this
     */
    public function setAverageLengthPrice($averageLengthPrice)
    {
        $this->container['averageLengthPrice'] = $averageLengthPrice;

        return $this;
    }

    /**
     * Gets averageTldFrequency
     *
     * @return string
     */
    public function getAverageTldFrequency()
    {
        return $this->container['averageTldFrequency'];
    }

    /**
     * Sets averageTldFrequency
     *
     * @param string $averageTldFrequency averageTldFrequency
     *
     * @return $this
     */
    public function setAverageTldFrequency($averageTldFrequency)
    {
        $this->container['averageTldFrequency'] = $averageTldFrequency;

        return $this;
    }

    /**
     * Gets averageTldPrice
     *
     * @return string
     */
    public function getAverageTldPrice()
    {
        return $this->container['averageTldPrice'];
    }

    /**
     * Sets averageTldPrice
     *
     * @param string $averageTldPrice averageTldPrice
     *
     * @return $this
     */
    public function setAverageTldPrice($averageTldPrice)
    {
        $this->container['averageTldPrice'] = $averageTldPrice;

        return $this;
    }

    /**
     * Gets char
     *
     * @return string
     */
    public function getChar()
    {
        return $this->container['char'];
    }

    /**
     * Sets char
     *
     * @param string $char char
     *
     * @return $this
     */
    public function setChar($char)
    {
        $this->container['char'] = $char;

        return $this;
    }

    /**
     * Gets comDomain
     *
     * @return string
     */
    public function getComDomain()
    {
        return $this->container['comDomain'];
    }

    /**
     * Sets comDomain
     *
     * @param string $comDomain comDomain
     *
     * @return $this
     */
    public function setComDomain($comDomain)
    {
        $this->container['comDomain'] = $comDomain;

        return $this;
    }

    /**
     * Gets completelyNum
     *
     * @return string
     */
    public function getCompletelyNum()
    {
        return $this->container['completelyNum'];
    }

    /**
     * Sets completelyNum
     *
     * @param string $completelyNum completelyNum
     *
     * @return $this
     */
    public function setCompletelyNum($completelyNum)
    {
        $this->container['completelyNum'] = $completelyNum;

        return $this;
    }

    /**
     * Gets foundKeywords
     *
     * @return string
     */
    public function getFoundKeywords()
    {
        return $this->container['foundKeywords'];
    }

    /**
     * Sets foundKeywords
     *
     * @param string $foundKeywords foundKeywords
     *
     * @return $this
     */
    public function setFoundKeywords($foundKeywords)
    {
        $this->container['foundKeywords'] = $foundKeywords;

        return $this;
    }

    /**
     * Gets foundPrefix
     *
     * @return string
     */
    public function getFoundPrefix()
    {
        return $this->container['foundPrefix'];
    }

    /**
     * Sets foundPrefix
     *
     * @param string $foundPrefix foundPrefix
     *
     * @return $this
     */
    public function setFoundPrefix($foundPrefix)
    {
        $this->container['foundPrefix'] = $foundPrefix;

        return $this;
    }

    /**
     * Gets foundSuffix
     *
     * @return string
     */
    public function getFoundSuffix()
    {
        return $this->container['foundSuffix'];
    }

    /**
     * Sets foundSuffix
     *
     * @param string $foundSuffix foundSuffix
     *
     * @return $this
     */
    public function setFoundSuffix($foundSuffix)
    {
        $this->container['foundSuffix'] = $foundSuffix;

        return $this;
    }

    /**
     * Gets hyph
     *
     * @return string
     */
    public function getHyph()
    {
        return $this->container['hyph'];
    }

    /**
     * Sets hyph
     *
     * @param string $hyph hyph
     *
     * @return $this
     */
    public function setHyph($hyph)
    {
        $this->container['hyph'] = $hyph;

        return $this;
    }

    /**
     * Gets idnEncoding
     *
     * @return string
     */
    public function getIdnEncoding()
    {
        return $this->container['idnEncoding'];
    }

    /**
     * Sets idnEncoding
     *
     * @param string $idnEncoding idnEncoding
     *
     * @return $this
     */
    public function setIdnEncoding($idnEncoding)
    {
        $this->container['idnEncoding'] = $idnEncoding;

        return $this;
    }

    /**
     * Gets keywordCount
     *
     * @return string
     */
    public function getKeywordCount()
    {
        return $this->container['keywordCount'];
    }

    /**
     * Sets keywordCount
     *
     * @param string $keywordCount keywordCount
     *
     * @return $this
     */
    public function setKeywordCount($keywordCount)
    {
        $this->container['keywordCount'] = $keywordCount;

        return $this;
    }

    /**
     * Gets majesticsGlobalRank
     *
     * @return string
     */
    public function getMajesticsGlobalRank()
    {
        return $this->container['majesticsGlobalRank'];
    }

    /**
     * Sets majesticsGlobalRank
     *
     * @param string $majesticsGlobalRank majesticsGlobalRank
     *
     * @return $this
     */
    public function setMajesticsGlobalRank($majesticsGlobalRank)
    {
        $this->container['majesticsGlobalRank'] = $majesticsGlobalRank;

        return $this;
    }

    /**
     * Gets majesticsPrevGlobalRank
     *
     * @return string
     */
    public function getMajesticsPrevGlobalRank()
    {
        return $this->container['majesticsPrevGlobalRank'];
    }

    /**
     * Sets majesticsPrevGlobalRank
     *
     * @param string $majesticsPrevGlobalRank majesticsPrevGlobalRank
     *
     * @return $this
     */
    public function setMajesticsPrevGlobalRank($majesticsPrevGlobalRank)
    {
        $this->container['majesticsPrevGlobalRank'] = $majesticsPrevGlobalRank;

        return $this;
    }

    /**
     * Gets majesticsPrevRefIPs
     *
     * @return string
     */
    public function getMajesticsPrevRefIPs()
    {
        return $this->container['majesticsPrevRefIPs'];
    }

    /**
     * Sets majesticsPrevRefIPs
     *
     * @param string $majesticsPrevRefIPs majesticsPrevRefIPs
     *
     * @return $this
     */
    public function setMajesticsPrevRefIPs($majesticsPrevRefIPs)
    {
        $this->container['majesticsPrevRefIPs'] = $majesticsPrevRefIPs;

        return $this;
    }

    /**
     * Gets majesticsPrevRefSubNets
     *
     * @return string
     */
    public function getMajesticsPrevRefSubNets()
    {
        return $this->container['majesticsPrevRefSubNets'];
    }

    /**
     * Sets majesticsPrevRefSubNets
     *
     * @param string $majesticsPrevRefSubNets majesticsPrevRefSubNets
     *
     * @return $this
     */
    public function setMajesticsPrevRefSubNets($majesticsPrevRefSubNets)
    {
        $this->container['majesticsPrevRefSubNets'] = $majesticsPrevRefSubNets;

        return $this;
    }

    /**
     * Gets majesticsPrevTldRank
     *
     * @return string
     */
    public function getMajesticsPrevTldRank()
    {
        return $this->container['majesticsPrevTldRank'];
    }

    /**
     * Sets majesticsPrevTldRank
     *
     * @param string $majesticsPrevTldRank majesticsPrevTldRank
     *
     * @return $this
     */
    public function setMajesticsPrevTldRank($majesticsPrevTldRank)
    {
        $this->container['majesticsPrevTldRank'] = $majesticsPrevTldRank;

        return $this;
    }

    /**
     * Gets majesticsRefIPs
     *
     * @return string
     */
    public function getMajesticsRefIPs()
    {
        return $this->container['majesticsRefIPs'];
    }

    /**
     * Sets majesticsRefIPs
     *
     * @param string $majesticsRefIPs majesticsRefIPs
     *
     * @return $this
     */
    public function setMajesticsRefIPs($majesticsRefIPs)
    {
        $this->container['majesticsRefIPs'] = $majesticsRefIPs;

        return $this;
    }

    /**
     * Gets majesticsRefSubNets
     *
     * @return string
     */
    public function getMajesticsRefSubNets()
    {
        return $this->container['majesticsRefSubNets'];
    }

    /**
     * Sets majesticsRefSubNets
     *
     * @param string $majesticsRefSubNets majesticsRefSubNets
     *
     * @return $this
     */
    public function setMajesticsRefSubNets($majesticsRefSubNets)
    {
        $this->container['majesticsRefSubNets'] = $majesticsRefSubNets;

        return $this;
    }

    /**
     * Gets majesticsTldRank
     *
     * @return string
     */
    public function getMajesticsTldRank()
    {
        return $this->container['majesticsTldRank'];
    }

    /**
     * Sets majesticsTldRank
     *
     * @param string $majesticsTldRank majesticsTldRank
     *
     * @return $this
     */
    public function setMajesticsTldRank($majesticsTldRank)
    {
        $this->container['majesticsTldRank'] = $majesticsTldRank;

        return $this;
    }

    /**
     * Gets nameSeg
     *
     * @return string
     */
    public function getNameSeg()
    {
        return $this->container['nameSeg'];
    }

    /**
     * Sets nameSeg
     *
     * @param string $nameSeg nameSeg
     *
     * @return $this
     */
    public function setNameSeg($nameSeg)
    {
        $this->container['nameSeg'] = $nameSeg;

        return $this;
    }

    /**
     * Gets num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
     * Sets num
     *
     * @param string $num num
     *
     * @return $this
     */
    public function setNum($num)
    {
        $this->container['num'] = $num;

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
     * Gets tld
     *
     * @return string
     */
    public function getTld()
    {
        return $this->container['tld'];
    }

    /**
     * Sets tld
     *
     * @param string $tld tld
     *
     * @return $this
     */
    public function setTld($tld)
    {
        $this->container['tld'] = $tld;

        return $this;
    }

    /**
     * Gets tldNumDomains
     *
     * @return string
     */
    public function getTldNumDomains()
    {
        return $this->container['tldNumDomains'];
    }

    /**
     * Sets tldNumDomains
     *
     * @param string $tldNumDomains tldNumDomains
     *
     * @return $this
     */
    public function setTldNumDomains($tldNumDomains)
    {
        $this->container['tldNumDomains'] = $tldNumDomains;

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


