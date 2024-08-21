<?php
/**
 * Jurisdiction
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Jurisdiction Class Doc Comment
 *
 * @category    Class
 * @description Describes the jurisdiction of a notary. This is read-only object.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Jurisdiction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'jurisdiction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_system_created_seal' => '?string',
        'allow_user_uploaded_seal' => '?string',
        'commission_id_in_seal' => '?string',
        'county' => '?string',
        'county_in_seal' => '?string',
        'enabled' => '?string',
        'jurisdiction_id' => '?string',
        'name' => '?string',
        'notary_public_in_seal' => '?string',
        'state_name_in_seal' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_system_created_seal' => null,
        'allow_user_uploaded_seal' => null,
        'commission_id_in_seal' => null,
        'county' => null,
        'county_in_seal' => null,
        'enabled' => null,
        'jurisdiction_id' => null,
        'name' => null,
        'notary_public_in_seal' => null,
        'state_name_in_seal' => null
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
        'allow_system_created_seal' => 'allowSystemCreatedSeal',
        'allow_user_uploaded_seal' => 'allowUserUploadedSeal',
        'commission_id_in_seal' => 'commissionIdInSeal',
        'county' => 'county',
        'county_in_seal' => 'countyInSeal',
        'enabled' => 'enabled',
        'jurisdiction_id' => 'jurisdictionId',
        'name' => 'name',
        'notary_public_in_seal' => 'notaryPublicInSeal',
        'state_name_in_seal' => 'stateNameInSeal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_system_created_seal' => 'setAllowSystemCreatedSeal',
        'allow_user_uploaded_seal' => 'setAllowUserUploadedSeal',
        'commission_id_in_seal' => 'setCommissionIdInSeal',
        'county' => 'setCounty',
        'county_in_seal' => 'setCountyInSeal',
        'enabled' => 'setEnabled',
        'jurisdiction_id' => 'setJurisdictionId',
        'name' => 'setName',
        'notary_public_in_seal' => 'setNotaryPublicInSeal',
        'state_name_in_seal' => 'setStateNameInSeal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_system_created_seal' => 'getAllowSystemCreatedSeal',
        'allow_user_uploaded_seal' => 'getAllowUserUploadedSeal',
        'commission_id_in_seal' => 'getCommissionIdInSeal',
        'county' => 'getCounty',
        'county_in_seal' => 'getCountyInSeal',
        'enabled' => 'getEnabled',
        'jurisdiction_id' => 'getJurisdictionId',
        'name' => 'getName',
        'notary_public_in_seal' => 'getNotaryPublicInSeal',
        'state_name_in_seal' => 'getStateNameInSeal'
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
        $this->container['allow_system_created_seal'] = isset($data['allow_system_created_seal']) ? $data['allow_system_created_seal'] : null;
        $this->container['allow_user_uploaded_seal'] = isset($data['allow_user_uploaded_seal']) ? $data['allow_user_uploaded_seal'] : null;
        $this->container['commission_id_in_seal'] = isset($data['commission_id_in_seal']) ? $data['commission_id_in_seal'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['county_in_seal'] = isset($data['county_in_seal']) ? $data['county_in_seal'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['jurisdiction_id'] = isset($data['jurisdiction_id']) ? $data['jurisdiction_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notary_public_in_seal'] = isset($data['notary_public_in_seal']) ? $data['notary_public_in_seal'] : null;
        $this->container['state_name_in_seal'] = isset($data['state_name_in_seal']) ? $data['state_name_in_seal'] : null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets allow_system_created_seal
     *
     * @return ?string
     */
    public function getAllowSystemCreatedSeal()
    {
        return $this->container['allow_system_created_seal'];
    }

    /**
     * Sets allow_system_created_seal
     *
     * @param ?string $allow_system_created_seal 
     *
     * @return $this
     */
    public function setAllowSystemCreatedSeal($allow_system_created_seal)
    {
        $this->container['allow_system_created_seal'] = $allow_system_created_seal;

        return $this;
    }

    /**
     * Gets allow_user_uploaded_seal
     *
     * @return ?string
     */
    public function getAllowUserUploadedSeal()
    {
        return $this->container['allow_user_uploaded_seal'];
    }

    /**
     * Sets allow_user_uploaded_seal
     *
     * @param ?string $allow_user_uploaded_seal 
     *
     * @return $this
     */
    public function setAllowUserUploadedSeal($allow_user_uploaded_seal)
    {
        $this->container['allow_user_uploaded_seal'] = $allow_user_uploaded_seal;

        return $this;
    }

    /**
     * Gets commission_id_in_seal
     *
     * @return ?string
     */
    public function getCommissionIdInSeal()
    {
        return $this->container['commission_id_in_seal'];
    }

    /**
     * Sets commission_id_in_seal
     *
     * @param ?string $commission_id_in_seal 
     *
     * @return $this
     */
    public function setCommissionIdInSeal($commission_id_in_seal)
    {
        $this->container['commission_id_in_seal'] = $commission_id_in_seal;

        return $this;
    }

    /**
     * Gets county
     *
     * @return ?string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param ?string $county 
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets county_in_seal
     *
     * @return ?string
     */
    public function getCountyInSeal()
    {
        return $this->container['county_in_seal'];
    }

    /**
     * Sets county_in_seal
     *
     * @param ?string $county_in_seal 
     *
     * @return $this
     */
    public function setCountyInSeal($county_in_seal)
    {
        $this->container['county_in_seal'] = $county_in_seal;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return ?string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param ?string $enabled 
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets jurisdiction_id
     *
     * @return ?string
     */
    public function getJurisdictionId()
    {
        return $this->container['jurisdiction_id'];
    }

    /**
     * Sets jurisdiction_id
     *
     * @param ?string $jurisdiction_id 
     *
     * @return $this
     */
    public function setJurisdictionId($jurisdiction_id)
    {
        $this->container['jurisdiction_id'] = $jurisdiction_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notary_public_in_seal
     *
     * @return ?string
     */
    public function getNotaryPublicInSeal()
    {
        return $this->container['notary_public_in_seal'];
    }

    /**
     * Sets notary_public_in_seal
     *
     * @param ?string $notary_public_in_seal 
     *
     * @return $this
     */
    public function setNotaryPublicInSeal($notary_public_in_seal)
    {
        $this->container['notary_public_in_seal'] = $notary_public_in_seal;

        return $this;
    }

    /**
     * Gets state_name_in_seal
     *
     * @return ?string
     */
    public function getStateNameInSeal()
    {
        return $this->container['state_name_in_seal'];
    }

    /**
     * Sets state_name_in_seal
     *
     * @param ?string $state_name_in_seal 
     *
     * @return $this
     */
    public function setStateNameInSeal($state_name_in_seal)
    {
        $this->container['state_name_in_seal'] = $state_name_in_seal;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
}

