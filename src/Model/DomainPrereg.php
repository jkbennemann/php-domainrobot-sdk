<?php
/**
 * DomainPrereg
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
 * DomainPrereg Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainPrereg implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainPrereg';

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
        'ownerc' => '\Domainrobot\Model\Contact',
        'adminc' => '\Domainrobot\Model\Contact',
        'techc' => '\Domainrobot\Model\Contact',
        'zonec' => '\Domainrobot\Model\Contact',
        'name' => 'string',
        'authinfo' => 'string',
        'nameServers' => '\Domainrobot\Model\NameServer[]',
        'nameServerEntries' => 'string[]',
        'status' => '\Domainrobot\Model\DomainPreregStatusConstants',
        'phase' => 'string',
        'extension' => '\Domainrobot\Model\DomainPreregAddon',
        'orderReference' => 'string',
        'tmchMark' => '\Domainrobot\Model\TmchMark',
        'preregConfig' => '\Domainrobot\Model\PreregConfig',
        'idn' => 'string',
        'confirmed' => '\DateTime',
        'trustee' => 'bool',
        'domainCreated' => '\DateTime',
        'domainExpire' => '\DateTime',
        'registryStatus' => '\Domainrobot\Model\RegistryStatusConstants',
        'recommended' => 'bool'
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
        'ownerc' => null,
        'adminc' => null,
        'techc' => null,
        'zonec' => null,
        'name' => null,
        'authinfo' => null,
        'nameServers' => null,
        'nameServerEntries' => null,
        'status' => null,
        'phase' => null,
        'extension' => null,
        'orderReference' => null,
        'tmchMark' => null,
        'preregConfig' => null,
        'idn' => null,
        'confirmed' => 'date-time',
        'trustee' => null,
        'domainCreated' => 'date-time',
        'domainExpire' => 'date-time',
        'registryStatus' => null,
        'recommended' => null
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
        'ownerc' => 'ownerc',
        'adminc' => 'adminc',
        'techc' => 'techc',
        'zonec' => 'zonec',
        'name' => 'name',
        'authinfo' => 'authinfo',
        'nameServers' => 'nameServers',
        'nameServerEntries' => 'nameServerEntries',
        'status' => 'status',
        'phase' => 'phase',
        'extension' => 'extension',
        'orderReference' => 'orderReference',
        'tmchMark' => 'tmchMark',
        'preregConfig' => 'preregConfig',
        'idn' => 'idn',
        'confirmed' => 'confirmed',
        'trustee' => 'trustee',
        'domainCreated' => 'domainCreated',
        'domainExpire' => 'domainExpire',
        'registryStatus' => 'registryStatus',
        'recommended' => 'recommended'
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
        'ownerc' => 'setOwnerc',
        'adminc' => 'setAdminc',
        'techc' => 'setTechc',
        'zonec' => 'setZonec',
        'name' => 'setName',
        'authinfo' => 'setAuthinfo',
        'nameServers' => 'setNameServers',
        'nameServerEntries' => 'setNameServerEntries',
        'status' => 'setStatus',
        'phase' => 'setPhase',
        'extension' => 'setExtension',
        'orderReference' => 'setOrderReference',
        'tmchMark' => 'setTmchMark',
        'preregConfig' => 'setPreregConfig',
        'idn' => 'setIdn',
        'confirmed' => 'setConfirmed',
        'trustee' => 'setTrustee',
        'domainCreated' => 'setDomainCreated',
        'domainExpire' => 'setDomainExpire',
        'registryStatus' => 'setRegistryStatus',
        'recommended' => 'setRecommended'
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
        'ownerc' => 'getOwnerc',
        'adminc' => 'getAdminc',
        'techc' => 'getTechc',
        'zonec' => 'getZonec',
        'name' => 'getName',
        'authinfo' => 'getAuthinfo',
        'nameServers' => 'getNameServers',
        'nameServerEntries' => 'getNameServerEntries',
        'status' => 'getStatus',
        'phase' => 'getPhase',
        'extension' => 'getExtension',
        'orderReference' => 'getOrderReference',
        'tmchMark' => 'getTmchMark',
        'preregConfig' => 'getPreregConfig',
        'idn' => 'getIdn',
        'confirmed' => 'getConfirmed',
        'trustee' => 'getTrustee',
        'domainCreated' => 'getDomainCreated',
        'domainExpire' => 'getDomainExpire',
        'registryStatus' => 'getRegistryStatus',
        'recommended' => 'getRecommended'
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
        $this->container['ownerc'] = isset($data['ownerc']) ? $this->createData($data['ownerc'], 'ownerc')  : null;
        $this->container['adminc'] = isset($data['adminc']) ? $this->createData($data['adminc'], 'adminc')  : null;
        $this->container['techc'] = isset($data['techc']) ? $this->createData($data['techc'], 'techc')  : null;
        $this->container['zonec'] = isset($data['zonec']) ? $this->createData($data['zonec'], 'zonec')  : null;
        $this->container['name'] = isset($data['name']) ? $this->createData($data['name'], 'name')  : null;
        $this->container['authinfo'] = isset($data['authinfo']) ? $this->createData($data['authinfo'], 'authinfo')  : null;
        $this->container['nameServers'] = isset($data['nameServers']) ? $this->createData($data['nameServers'], 'nameServers')  : null;
        $this->container['nameServerEntries'] = isset($data['nameServerEntries']) ? $this->createData($data['nameServerEntries'], 'nameServerEntries')  : null;
        $this->container['status'] = isset($data['status']) ? $this->createData($data['status'], 'status')  : null;
        $this->container['phase'] = isset($data['phase']) ? $this->createData($data['phase'], 'phase')  : null;
        $this->container['extension'] = isset($data['extension']) ? $this->createData($data['extension'], 'extension')  : null;
        $this->container['orderReference'] = isset($data['orderReference']) ? $this->createData($data['orderReference'], 'orderReference')  : null;
        $this->container['tmchMark'] = isset($data['tmchMark']) ? $this->createData($data['tmchMark'], 'tmchMark')  : null;
        $this->container['preregConfig'] = isset($data['preregConfig']) ? $this->createData($data['preregConfig'], 'preregConfig')  : null;
        $this->container['idn'] = isset($data['idn']) ? $this->createData($data['idn'], 'idn')  : null;
        $this->container['confirmed'] = isset($data['confirmed']) ? $this->createData($data['confirmed'], 'confirmed')  : null;
        $this->container['trustee'] = isset($data['trustee']) ? $this->createData($data['trustee'], 'trustee')  : null;
        $this->container['domainCreated'] = isset($data['domainCreated']) ? $this->createData($data['domainCreated'], 'domainCreated')  : null;
        $this->container['domainExpire'] = isset($data['domainExpire']) ? $this->createData($data['domainExpire'], 'domainExpire')  : null;
        $this->container['registryStatus'] = isset($data['registryStatus']) ? $this->createData($data['registryStatus'], 'registryStatus')  : null;
        $this->container['recommended'] = isset($data['recommended']) ? $this->createData($data['recommended'], 'recommended')  : null;
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
     * @param \Domainrobot\Model\BasicUser $updater The updater of the object.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets ownerc
     *
     * @return \Domainrobot\Model\Contact
     */
    public function getOwnerc()
    {
        return $this->container['ownerc'];
    }

    /**
     * Sets ownerc
     *
     * @param \Domainrobot\Model\Contact $ownerc The owner contact.
     *
     * @return $this
     */
    public function setOwnerc($ownerc)
    {
        $this->container['ownerc'] = $ownerc;

        return $this;
    }

    /**
     * Gets adminc
     *
     * @return \Domainrobot\Model\Contact
     */
    public function getAdminc()
    {
        return $this->container['adminc'];
    }

    /**
     * Sets adminc
     *
     * @param \Domainrobot\Model\Contact $adminc The administrative contact.
     *
     * @return $this
     */
    public function setAdminc($adminc)
    {
        $this->container['adminc'] = $adminc;

        return $this;
    }

    /**
     * Gets techc
     *
     * @return \Domainrobot\Model\Contact
     */
    public function getTechc()
    {
        return $this->container['techc'];
    }

    /**
     * Sets techc
     *
     * @param \Domainrobot\Model\Contact $techc The technical contact reference.
     *
     * @return $this
     */
    public function setTechc($techc)
    {
        $this->container['techc'] = $techc;

        return $this;
    }

    /**
     * Gets zonec
     *
     * @return \Domainrobot\Model\Contact
     */
    public function getZonec()
    {
        return $this->container['zonec'];
    }

    /**
     * Sets zonec
     *
     * @param \Domainrobot\Model\Contact $zonec The dns contact.
     *
     * @return $this
     */
    public function setZonec($zonec)
    {
        $this->container['zonec'] = $zonec;

        return $this;
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
     * @param string $name The name of the domain.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets authinfo
     *
     * @return string
     */
    public function getAuthinfo()
    {
        return $this->container['authinfo'];
    }

    /**
     * Sets authinfo
     *
     * @param string $authinfo The authinfo.
     *
     * @return $this
     */
    public function setAuthinfo($authinfo)
    {
        $this->container['authinfo'] = $authinfo;

        return $this;
    }

    /**
     * Gets nameServers
     *
     * @return \Domainrobot\Model\NameServer[]
     */
    public function getNameServers()
    {
        return $this->container['nameServers'];
    }

    /**
     * Sets nameServers
     *
     * @param \Domainrobot\Model\NameServer[] $nameServers The nameservers.
     *
     * @return $this
     */
    public function setNameServers($nameServers)
    {
        $this->container['nameServers'] = $nameServers;

        return $this;
    }

    /**
     * Gets nameServerEntries
     *
     * @return string[]
     */
    public function getNameServerEntries()
    {
        return $this->container['nameServerEntries'];
    }

    /**
     * Sets nameServerEntries
     *
     * @param string[] $nameServerEntries The nameserver entries.
     *
     * @return $this
     */
    public function setNameServerEntries($nameServerEntries)
    {
        $this->container['nameServerEntries'] = $nameServerEntries;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Domainrobot\Model\DomainPreregStatusConstants
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Domainrobot\Model\DomainPreregStatusConstants $status The preregistration status of the domain.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param string $phase The preregistration phase.
     *
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return \Domainrobot\Model\DomainPreregAddon
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param \Domainrobot\Model\DomainPreregAddon $extension The preregistration extensions.
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets orderReference
     *
     * @return string
     */
    public function getOrderReference()
    {
        return $this->container['orderReference'];
    }

    /**
     * Sets orderReference
     *
     * @param string $orderReference The unique order reference.
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->container['orderReference'] = $orderReference;

        return $this;
    }

    /**
     * Gets tmchMark
     *
     * @return \Domainrobot\Model\TmchMark
     */
    public function getTmchMark()
    {
        return $this->container['tmchMark'];
    }

    /**
     * Sets tmchMark
     *
     * @param \Domainrobot\Model\TmchMark $tmchMark The tmchmark.
     *
     * @return $this
     */
    public function setTmchMark($tmchMark)
    {
        $this->container['tmchMark'] = $tmchMark;

        return $this;
    }

    /**
     * Gets preregConfig
     *
     * @return \Domainrobot\Model\PreregConfig
     */
    public function getPreregConfig()
    {
        return $this->container['preregConfig'];
    }

    /**
     * Sets preregConfig
     *
     * @param \Domainrobot\Model\PreregConfig $preregConfig The preregistration configuration.
     *
     * @return $this
     */
    public function setPreregConfig($preregConfig)
    {
        $this->container['preregConfig'] = $preregConfig;

        return $this;
    }

    /**
     * Gets idn
     *
     * @return string
     */
    public function getIdn()
    {
        return $this->container['idn'];
    }

    /**
     * Sets idn
     *
     * @param string $idn The idn version of the name.
     *
     * @return $this
     */
    public function setIdn($idn)
    {
        $this->container['idn'] = $idn;

        return $this;
    }

    /**
     * Gets confirmed
     *
     * @return \DateTime
     */
    public function getConfirmed()
    {
        return $this->container['confirmed'];
    }

    /**
     * Sets confirmed
     *
     * @param \DateTime $confirmed The confirmation date.
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->container['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Gets trustee
     *
     * @return bool
     */
    public function getTrustee()
    {
        return $this->container['trustee'];
    }

    /**
     * Sets trustee
     *
     * @param bool $trustee Trustee active or not.
     *
     * @return $this
     */
    public function setTrustee($trustee)
    {
        $this->container['trustee'] = $trustee;

        return $this;
    }

    /**
     * Gets domainCreated
     *
     * @return \DateTime
     */
    public function getDomainCreated()
    {
        return $this->container['domainCreated'];
    }

    /**
     * Sets domainCreated
     *
     * @param \DateTime $domainCreated The domain created date.
     *
     * @return $this
     */
    public function setDomainCreated($domainCreated)
    {
        $this->container['domainCreated'] = $domainCreated;

        return $this;
    }

    /**
     * Gets domainExpire
     *
     * @return \DateTime
     */
    public function getDomainExpire()
    {
        return $this->container['domainExpire'];
    }

    /**
     * Sets domainExpire
     *
     * @param \DateTime $domainExpire The domain expire date.
     *
     * @return $this
     */
    public function setDomainExpire($domainExpire)
    {
        $this->container['domainExpire'] = $domainExpire;

        return $this;
    }

    /**
     * Gets registryStatus
     *
     * @return \Domainrobot\Model\RegistryStatusConstants
     */
    public function getRegistryStatus()
    {
        return $this->container['registryStatus'];
    }

    /**
     * Sets registryStatus
     *
     * @param \Domainrobot\Model\RegistryStatusConstants $registryStatus The registry status.
     *
     * @return $this
     */
    public function setRegistryStatus($registryStatus)
    {
        $this->container['registryStatus'] = $registryStatus;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended Recommended
     *
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

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


