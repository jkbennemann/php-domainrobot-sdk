<?php
/**
 * PollMessage
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
 * PollMessage Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PollMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PollMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'owner' => '\Domainrobot\Model\BasicUser',
        'job' => '\Domainrobot\Model\WorkflowSpool',
        'notify' => '\Domainrobot\Model\NotifyMessage',
        'stid' => 'string',
        'ctid' => 'string',
        'messages' => '\Domainrobot\Model\Message[]',
        'flags' => 'string',
        'created' => '\DateTime',
        'object' => '\Domainrobot\Model\ResponseObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'owner' => null,
        'job' => null,
        'notify' => null,
        'stid' => null,
        'ctid' => null,
        'messages' => null,
        'flags' => null,
        'created' => 'date-time',
        'object' => null
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
        'id' => 'id',
        'owner' => 'owner',
        'job' => 'job',
        'notify' => 'notify',
        'stid' => 'stid',
        'ctid' => 'ctid',
        'messages' => 'messages',
        'flags' => 'flags',
        'created' => 'created',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'owner' => 'setOwner',
        'job' => 'setJob',
        'notify' => 'setNotify',
        'stid' => 'setStid',
        'ctid' => 'setCtid',
        'messages' => 'setMessages',
        'flags' => 'setFlags',
        'created' => 'setCreated',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'owner' => 'getOwner',
        'job' => 'getJob',
        'notify' => 'getNotify',
        'stid' => 'getStid',
        'ctid' => 'getCtid',
        'messages' => 'getMessages',
        'flags' => 'getFlags',
        'created' => 'getCreated',
        'object' => 'getObject'
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
        $this->container['id'] = isset($data['id']) ? $this->createData($data['id'], 'id')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['job'] = isset($data['job']) ? $this->createData($data['job'], 'job')  : null;
        $this->container['notify'] = isset($data['notify']) ? $this->createData($data['notify'], 'notify')  : null;
        $this->container['stid'] = isset($data['stid']) ? $this->createData($data['stid'], 'stid')  : null;
        $this->container['ctid'] = isset($data['ctid']) ? $this->createData($data['ctid'], 'ctid')  : null;
        $this->container['messages'] = isset($data['messages']) ? $this->createData($data['messages'], 'messages')  : null;
        $this->container['flags'] = isset($data['flags']) ? $this->createData($data['flags'], 'flags')  : null;
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['object'] = isset($data['object']) ? $this->createData($data['object'], 'object')  : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The message id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param \Domainrobot\Model\BasicUser $owner The owner of the message.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets job
     *
     * @return \Domainrobot\Model\WorkflowSpool
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param \Domainrobot\Model\WorkflowSpool $job The job data. Available if the message is a job message
     *
     * @return $this
     */
    public function setJob($job)
    {
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets notify
     *
     * @return \Domainrobot\Model\NotifyMessage
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     *
     * @param \Domainrobot\Model\NotifyMessage $notify The notification data. Available if the message is a notification message
     *
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->container['notify'] = $notify;

        return $this;
    }

    /**
     * Gets stid
     *
     * @return string
     */
    public function getStid()
    {
        return $this->container['stid'];
    }

    /**
     * Sets stid
     *
     * @param string $stid The server transaction id.
     *
     * @return $this
     */
    public function setStid($stid)
    {
        $this->container['stid'] = $stid;

        return $this;
    }

    /**
     * Gets ctid
     *
     * @return string
     */
    public function getCtid()
    {
        return $this->container['ctid'];
    }

    /**
     * Sets ctid
     *
     * @param string $ctid the custom transaction id.
     *
     * @return $this
     */
    public function setCtid($ctid)
    {
        $this->container['ctid'] = $ctid;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Domainrobot\Model\Message[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Domainrobot\Model\Message[] $messages The general localized messages.
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return string
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param string $flags Optional message flags.
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

        return $this;
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
     * Gets object
     *
     * @return \Domainrobot\Model\ResponseObject
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param \Domainrobot\Model\ResponseObject $object The object of the job or notify.
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

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


