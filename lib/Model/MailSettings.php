<?php
/**
 * MailSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * MailSettings Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MailSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MailSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bcc' => 'string',
        'default_from' => 'string',
        'reply_to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bcc' => null,
        'default_from' => null,
        'reply_to' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'bcc' => 'bcc',
        'default_from' => 'default_from',
        'reply_to' => 'reply_to'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bcc' => 'setBcc',
        'default_from' => 'setDefaultFrom',
        'reply_to' => 'setReplyTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bcc' => 'getBcc',
        'default_from' => 'getDefaultFrom',
        'reply_to' => 'getReplyTo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }





    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['default_from'] = isset($data['default_from']) ? $data['default_from'] : null;
        $this->container['reply_to'] = isset($data['reply_to']) ? $data['reply_to'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['default_from'] === null) {
            $invalid_properties[] = "'default_from' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['default_from'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bcc
     * @return string
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     * @param string $bcc Optional Bcc email address to use for all mails. Rfc 822 address.
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets default_from
     * @return string
     */
    public function getDefaultFrom()
    {
        return $this->container['default_from'];
    }

    /**
     * Sets default_from
     * @param string $default_from Default email sender address. Rfc 822 address.
     * @return $this
     */
    public function setDefaultFrom($default_from)
    {
        $this->container['default_from'] = $default_from;

        return $this;
    }

    /**
     * Gets reply_to
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     * @param string $reply_to Optional Reply-To email address. Rfc 822 address.
     * @return $this
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


