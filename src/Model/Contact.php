<?php
/**
 * Contact
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
 * Contact Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'id' => 'int',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'alias' => 'string',
        'type' => '\Domainrobot\Model\ContactTypeConstants',
        'organization' => 'string',
        'title' => 'string',
        'city' => 'string',
        'country' => 'string',
        'state' => 'string',
        'email' => 'string',
        'protection' => '\Domainrobot\Model\ContactProtectionConstants',
        'sip' => 'string',
        'remarks' => 'string[]',
        'domainsafe' => 'bool',
        'confirmOwnerConsent' => 'bool',
        'comment' => 'string',
        'verification' => '\Domainrobot\Model\GenericStatusConstants',
        'fname' => 'string',
        'lname' => 'string',
        'address' => 'string[]',
        'pcode' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'nicRef' => '\Domainrobot\Model\ContactReference[]',
        'extensions' => '\Domainrobot\Model\ContactExtensions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'id' => 'int32',
        'owner' => null,
        'updater' => null,
        'alias' => null,
        'type' => null,
        'organization' => null,
        'title' => null,
        'city' => null,
        'country' => null,
        'state' => null,
        'email' => null,
        'protection' => null,
        'sip' => null,
        'remarks' => null,
        'domainsafe' => null,
        'confirmOwnerConsent' => null,
        'comment' => null,
        'verification' => null,
        'fname' => null,
        'lname' => null,
        'address' => null,
        'pcode' => null,
        'phone' => null,
        'fax' => null,
        'nicRef' => null,
        'extensions' => null
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
        'id' => 'id',
        'owner' => 'owner',
        'updater' => 'updater',
        'alias' => 'alias',
        'type' => 'type',
        'organization' => 'organization',
        'title' => 'title',
        'city' => 'city',
        'country' => 'country',
        'state' => 'state',
        'email' => 'email',
        'protection' => 'protection',
        'sip' => 'sip',
        'remarks' => 'remarks',
        'domainsafe' => 'domainsafe',
        'confirmOwnerConsent' => 'confirmOwnerConsent',
        'comment' => 'comment',
        'verification' => 'verification',
        'fname' => 'fname',
        'lname' => 'lname',
        'address' => 'address',
        'pcode' => 'pcode',
        'phone' => 'phone',
        'fax' => 'fax',
        'nicRef' => 'nicRef',
        'extensions' => 'extensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'id' => 'setId',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'alias' => 'setAlias',
        'type' => 'setType',
        'organization' => 'setOrganization',
        'title' => 'setTitle',
        'city' => 'setCity',
        'country' => 'setCountry',
        'state' => 'setState',
        'email' => 'setEmail',
        'protection' => 'setProtection',
        'sip' => 'setSip',
        'remarks' => 'setRemarks',
        'domainsafe' => 'setDomainsafe',
        'confirmOwnerConsent' => 'setConfirmOwnerConsent',
        'comment' => 'setComment',
        'verification' => 'setVerification',
        'fname' => 'setFname',
        'lname' => 'setLname',
        'address' => 'setAddress',
        'pcode' => 'setPcode',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'nicRef' => 'setNicRef',
        'extensions' => 'setExtensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'id' => 'getId',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'alias' => 'getAlias',
        'type' => 'getType',
        'organization' => 'getOrganization',
        'title' => 'getTitle',
        'city' => 'getCity',
        'country' => 'getCountry',
        'state' => 'getState',
        'email' => 'getEmail',
        'protection' => 'getProtection',
        'sip' => 'getSip',
        'remarks' => 'getRemarks',
        'domainsafe' => 'getDomainsafe',
        'confirmOwnerConsent' => 'getConfirmOwnerConsent',
        'comment' => 'getComment',
        'verification' => 'getVerification',
        'fname' => 'getFname',
        'lname' => 'getLname',
        'address' => 'getAddress',
        'pcode' => 'getPcode',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'nicRef' => 'getNicRef',
        'extensions' => 'getExtensions'
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
        $this->container['id'] = isset($data['id']) ? $this->createData($data['id'], 'id')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['alias'] = isset($data['alias']) ? $this->createData($data['alias'], 'alias')  : null;
        $this->container['type'] = isset($data['type']) ? $this->createData($data['type'], 'type')  : null;
        $this->container['organization'] = isset($data['organization']) ? $this->createData($data['organization'], 'organization')  : null;
        $this->container['title'] = isset($data['title']) ? $this->createData($data['title'], 'title')  : null;
        $this->container['city'] = isset($data['city']) ? $this->createData($data['city'], 'city')  : null;
        $this->container['country'] = isset($data['country']) ? $this->createData($data['country'], 'country')  : null;
        $this->container['state'] = isset($data['state']) ? $this->createData($data['state'], 'state')  : null;
        $this->container['email'] = isset($data['email']) ? $this->createData($data['email'], 'email')  : null;
        $this->container['protection'] = isset($data['protection']) ? $this->createData($data['protection'], 'protection')  : null;
        $this->container['sip'] = isset($data['sip']) ? $this->createData($data['sip'], 'sip')  : null;
        $this->container['remarks'] = isset($data['remarks']) ? $this->createData($data['remarks'], 'remarks')  : null;
        $this->container['domainsafe'] = isset($data['domainsafe']) ? $this->createData($data['domainsafe'], 'domainsafe')  : null;
        $this->container['confirmOwnerConsent'] = isset($data['confirmOwnerConsent']) ? $this->createData($data['confirmOwnerConsent'], 'confirmOwnerConsent')  : null;
        $this->container['comment'] = isset($data['comment']) ? $this->createData($data['comment'], 'comment')  : null;
        $this->container['verification'] = isset($data['verification']) ? $this->createData($data['verification'], 'verification')  : null;
        $this->container['fname'] = isset($data['fname']) ? $this->createData($data['fname'], 'fname')  : null;
        $this->container['lname'] = isset($data['lname']) ? $this->createData($data['lname'], 'lname')  : null;
        $this->container['address'] = isset($data['address']) ? $this->createData($data['address'], 'address')  : null;
        $this->container['pcode'] = isset($data['pcode']) ? $this->createData($data['pcode'], 'pcode')  : null;
        $this->container['phone'] = isset($data['phone']) ? $this->createData($data['phone'], 'phone')  : null;
        $this->container['fax'] = isset($data['fax']) ? $this->createData($data['fax'], 'fax')  : null;
        $this->container['nicRef'] = isset($data['nicRef']) ? $this->createData($data['nicRef'], 'nicRef')  : null;
        $this->container['extensions'] = isset($data['extensions']) ? $this->createData($data['extensions'], 'extensions')  : null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['lname'] === null) {
            $invalidProperties[] = "'lname' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['pcode'] === null) {
            $invalidProperties[] = "'pcode' can't be null";
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
     * @param int $id The unique identifier of the contact
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
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias The unique alias of the contact
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Domainrobot\Model\ContactTypeConstants
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Domainrobot\Model\ContactTypeConstants $type The type of the contact
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization The name of the organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the contact
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city of the contact
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The country of the contact
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The local country state of the contact
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email of the contact
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets protection
     *
     * @return \Domainrobot\Model\ContactProtectionConstants
     */
    public function getProtection()
    {
        return $this->container['protection'];
    }

    /**
     * Sets protection
     *
     * @param \Domainrobot\Model\ContactProtectionConstants $protection The protection of the contact
     *
     * @return $this
     */
    public function setProtection($protection)
    {
        $this->container['protection'] = $protection;

        return $this;
    }

    /**
     * Gets sip
     *
     * @return string
     */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
     * Sets sip
     *
     * @param string $sip The sip of the contact
     *
     * @return $this
     */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string[]
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string[] $remarks The remarks of the contact
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets domainsafe
     *
     * @return bool
     */
    public function getDomainsafe()
    {
        return $this->container['domainsafe'];
    }

    /**
     * Sets domainsafe
     *
     * @param bool $domainsafe The nic references of the contact
     *
     * @return $this
     */
    public function setDomainsafe($domainsafe)
    {
        $this->container['domainsafe'] = $domainsafe;

        return $this;
    }

    /**
     * Gets confirmOwnerConsent
     *
     * @return bool
     */
    public function getConfirmOwnerConsent()
    {
        return $this->container['confirmOwnerConsent'];
    }

    /**
     * Sets confirmOwnerConsent
     *
     * @param bool $confirmOwnerConsent ???
     *
     * @return $this
     */
    public function setConfirmOwnerConsent($confirmOwnerConsent)
    {
        $this->container['confirmOwnerConsent'] = $confirmOwnerConsent;

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
     * @param string $comment The comment for the contact
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets verification
     *
     * @return \Domainrobot\Model\GenericStatusConstants
     */
    public function getVerification()
    {
        return $this->container['verification'];
    }

    /**
     * Sets verification
     *
     * @param \Domainrobot\Model\GenericStatusConstants $verification The verification status of the contact
     *
     * @return $this
     */
    public function setVerification($verification)
    {
        $this->container['verification'] = $verification;

        return $this;
    }

    /**
     * Gets fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->container['fname'];
    }

    /**
     * Sets fname
     *
     * @param string $fname The first name of the contact
     *
     * @return $this
     */
    public function setFname($fname)
    {
        $this->container['fname'] = $fname;

        return $this;
    }

    /**
     * Gets lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->container['lname'];
    }

    /**
     * Sets lname
     *
     * @param string $lname The last name of the contact
     *
     * @return $this
     */
    public function setLname($lname)
    {
        $this->container['lname'] = $lname;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string[]
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string[] $address The address of the contact.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets pcode
     *
     * @return string
     */
    public function getPcode()
    {
        return $this->container['pcode'];
    }

    /**
     * Sets pcode
     *
     * @param string $pcode The pcode of the contact
     *
     * @return $this
     */
    public function setPcode($pcode)
    {
        $this->container['pcode'] = $pcode;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone The phone number of the contact
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax The fax number of the contact
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets nicRef
     *
     * @return \Domainrobot\Model\ContactReference[]
     */
    public function getNicRef()
    {
        return $this->container['nicRef'];
    }

    /**
     * Sets nicRef
     *
     * @param \Domainrobot\Model\ContactReference[] $nicRef The nic references of the contact
     *
     * @return $this
     */
    public function setNicRef($nicRef)
    {
        $this->container['nicRef'] = $nicRef;

        return $this;
    }

    /**
     * Gets extensions
     *
     * @return \Domainrobot\Model\ContactExtensions
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param \Domainrobot\Model\ContactExtensions $extensions The contact extensions.
     *
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

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


