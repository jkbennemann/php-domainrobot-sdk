<?php
/**
 * ExchangedPrice
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
 * ExchangedPrice Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExchangedPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExchangedPrice';

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
        'amount' => 'double',
        'type' => '\Domainrobot\Model\PriceTypeConstants',
        'currency' => 'string',
        'priority' => '\Domainrobot\Model\PriorityConstants',
        'customer' => '\Domainrobot\Model\Customer',
        'period' => '\Domainrobot\Model\TimePeriod',
        'discountable' => 'bool',
        'logId' => 'int',
        'refund' => 'int',
        'priceConditions' => '\Domainrobot\Model\PriceServiceEntity[]',
        'comment' => 'string',
        'normalPrice' => '\Domainrobot\Model\ExchangedPrice',
        'valid' => '\DateTime',
        'vatRate' => 'double',
        'vatAmount' => 'double',
        'rate' => 'double'
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
        'amount' => 'double',
        'type' => null,
        'currency' => null,
        'priority' => null,
        'customer' => null,
        'period' => null,
        'discountable' => null,
        'logId' => 'int64',
        'refund' => 'int32',
        'priceConditions' => null,
        'comment' => null,
        'normalPrice' => null,
        'valid' => 'date-time',
        'vatRate' => 'double',
        'vatAmount' => 'double',
        'rate' => 'double'
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
        'amount' => 'amount',
        'type' => 'type',
        'currency' => 'currency',
        'priority' => 'priority',
        'customer' => 'customer',
        'period' => 'period',
        'discountable' => 'discountable',
        'logId' => 'logId',
        'refund' => 'refund',
        'priceConditions' => 'priceConditions',
        'comment' => 'comment',
        'normalPrice' => 'normalPrice',
        'valid' => 'valid',
        'vatRate' => 'vatRate',
        'vatAmount' => 'vatAmount',
        'rate' => 'rate'
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
        'amount' => 'setAmount',
        'type' => 'setType',
        'currency' => 'setCurrency',
        'priority' => 'setPriority',
        'customer' => 'setCustomer',
        'period' => 'setPeriod',
        'discountable' => 'setDiscountable',
        'logId' => 'setLogId',
        'refund' => 'setRefund',
        'priceConditions' => 'setPriceConditions',
        'comment' => 'setComment',
        'normalPrice' => 'setNormalPrice',
        'valid' => 'setValid',
        'vatRate' => 'setVatRate',
        'vatAmount' => 'setVatAmount',
        'rate' => 'setRate'
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
        'amount' => 'getAmount',
        'type' => 'getType',
        'currency' => 'getCurrency',
        'priority' => 'getPriority',
        'customer' => 'getCustomer',
        'period' => 'getPeriod',
        'discountable' => 'getDiscountable',
        'logId' => 'getLogId',
        'refund' => 'getRefund',
        'priceConditions' => 'getPriceConditions',
        'comment' => 'getComment',
        'normalPrice' => 'getNormalPrice',
        'valid' => 'getValid',
        'vatRate' => 'getVatRate',
        'vatAmount' => 'getVatAmount',
        'rate' => 'getRate'
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
        $this->container['amount'] = isset($data['amount']) ? $this->createData($data['amount'], 'amount')  : null;
        $this->container['type'] = isset($data['type']) ? $this->createData($data['type'], 'type')  : null;
        $this->container['currency'] = isset($data['currency']) ? $this->createData($data['currency'], 'currency')  : null;
        $this->container['priority'] = isset($data['priority']) ? $this->createData($data['priority'], 'priority')  : null;
        $this->container['customer'] = isset($data['customer']) ? $this->createData($data['customer'], 'customer')  : null;
        $this->container['period'] = isset($data['period']) ? $this->createData($data['period'], 'period')  : null;
        $this->container['discountable'] = isset($data['discountable']) ? $this->createData($data['discountable'], 'discountable')  : null;
        $this->container['logId'] = isset($data['logId']) ? $this->createData($data['logId'], 'logId')  : null;
        $this->container['refund'] = isset($data['refund']) ? $this->createData($data['refund'], 'refund')  : null;
        $this->container['priceConditions'] = isset($data['priceConditions']) ? $this->createData($data['priceConditions'], 'priceConditions')  : null;
        $this->container['comment'] = isset($data['comment']) ? $this->createData($data['comment'], 'comment')  : null;
        $this->container['normalPrice'] = isset($data['normalPrice']) ? $this->createData($data['normalPrice'], 'normalPrice')  : null;
        $this->container['valid'] = isset($data['valid']) ? $this->createData($data['valid'], 'valid')  : null;
        $this->container['vatRate'] = isset($data['vatRate']) ? $this->createData($data['vatRate'], 'vatRate')  : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $this->createData($data['vatAmount'], 'vatAmount')  : null;
        $this->container['rate'] = isset($data['rate']) ? $this->createData($data['rate'], 'rate')  : null;
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

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * @param \Domainrobot\Model\BasicUser $updater The updating user of the object.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Lorem Ipum
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Domainrobot\Model\PriceTypeConstants
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Domainrobot\Model\PriceTypeConstants $type Lorem Ipum
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Lorem Ipsum
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Domainrobot\Model\PriorityConstants
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Domainrobot\Model\PriorityConstants $priority Lorem Ipum
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Domainrobot\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Domainrobot\Model\Customer $customer Lorem Ipum
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets period
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \Domainrobot\Model\TimePeriod $period Lorem Ipum
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets discountable
     *
     * @return bool
     */
    public function getDiscountable()
    {
        return $this->container['discountable'];
    }

    /**
     * Sets discountable
     *
     * @param bool $discountable Lorem Ipum
     *
     * @return $this
     */
    public function setDiscountable($discountable)
    {
        $this->container['discountable'] = $discountable;

        return $this;
    }

    /**
     * Gets logId
     *
     * @return int
     */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
     * Sets logId
     *
     * @param int $logId Lorem Ipum
     *
     * @return $this
     */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;

        return $this;
    }

    /**
     * Gets refund
     *
     * @return int
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param int $refund Lorem Ipum
     *
     * @return $this
     */
    public function setRefund($refund)
    {
        $this->container['refund'] = $refund;

        return $this;
    }

    /**
     * Gets priceConditions
     *
     * @return \Domainrobot\Model\PriceServiceEntity[]
     */
    public function getPriceConditions()
    {
        return $this->container['priceConditions'];
    }

    /**
     * Sets priceConditions
     *
     * @param \Domainrobot\Model\PriceServiceEntity[] $priceConditions Lorem Ipum
     *
     * @return $this
     */
    public function setPriceConditions($priceConditions)
    {
        $this->container['priceConditions'] = $priceConditions;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Lorem Ipum
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets normalPrice
     *
     * @return \Domainrobot\Model\ExchangedPrice
     */
    public function getNormalPrice()
    {
        return $this->container['normalPrice'];
    }

    /**
     * Sets normalPrice
     *
     * @param \Domainrobot\Model\ExchangedPrice $normalPrice Lorem Ipum
     *
     * @return $this
     */
    public function setNormalPrice($normalPrice)
    {
        $this->container['normalPrice'] = $normalPrice;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return \DateTime
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param \DateTime $valid Lorem Ipum
     *
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets vatRate
     *
     * @return double
     */
    public function getVatRate()
    {
        return $this->container['vatRate'];
    }

    /**
     * Sets vatRate
     *
     * @param double $vatRate The vat rate of the price
     *
     * @return $this
     */
    public function setVatRate($vatRate)
    {
        $this->container['vatRate'] = $vatRate;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return double
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param double $vatAmount The calculated vat amount
     *
     * @return $this
     */
    public function setVatAmount($vatAmount)
    {
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate The exchnage rate between account and price
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

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


