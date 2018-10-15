<?php
/**
 * DunningPlan
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
 * DunningPlan Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DunningPlan implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DunningPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'schedule' => 'int[]',
        'handle' => 'string',
        'state' => 'string',
        'created' => '\DateTime',
        'default_plan' => 'bool',
        'final_subscription_action' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'schedule' => 'int32',
        'handle' => null,
        'state' => null,
        'created' => 'date-time',
        'default_plan' => null,
        'final_subscription_action' => null
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
        'name' => 'name',
        'schedule' => 'schedule',
        'handle' => 'handle',
        'state' => 'state',
        'created' => 'created',
        'default_plan' => 'default_plan',
        'final_subscription_action' => 'final_subscription_action'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'schedule' => 'setSchedule',
        'handle' => 'setHandle',
        'state' => 'setState',
        'created' => 'setCreated',
        'default_plan' => 'setDefaultPlan',
        'final_subscription_action' => 'setFinalSubscriptionAction'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'schedule' => 'getSchedule',
        'handle' => 'getHandle',
        'state' => 'getState',
        'created' => 'getCreated',
        'default_plan' => 'getDefaultPlan',
        'final_subscription_action' => 'getFinalSubscriptionAction'
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

    const STATE_ACTIVE = 'active';
    const STATE_DELETED = 'deleted';
    const FINAL_SUBSCRIPTION_ACTION_EXPIRE = 'expire';
    const FINAL_SUBSCRIPTION_ACTION_ON_HOLD = 'on_hold';
    const FINAL_SUBSCRIPTION_ACTION_NONE = 'none';



    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DELETED,
        ];
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFinalSubscriptionActionAllowableValues()
    {
        return [
            self::FINAL_SUBSCRIPTION_ACTION_EXPIRE,
            self::FINAL_SUBSCRIPTION_ACTION_ON_HOLD,
            self::FINAL_SUBSCRIPTION_ACTION_NONE,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['default_plan'] = isset($data['default_plan']) ? $data['default_plan'] : null;
        $this->container['final_subscription_action'] = isset($data['final_subscription_action']) ? $data['final_subscription_action'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalid_properties[] = "'schedule' can't be null";
        }
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['default_plan'] === null) {
            $invalid_properties[] = "'default_plan' can't be null";
        }
        if ($this->container['final_subscription_action'] === null) {
            $invalid_properties[] = "'final_subscription_action' can't be null";
        }
        $allowed_values = $this->getFinalSubscriptionActionAllowableValues();
        if (!in_array($this->container['final_subscription_action'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'final_subscription_action', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['schedule'] === null) {
            return false;
        }
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['default_plan'] === null) {
            return false;
        }
        if ($this->container['final_subscription_action'] === null) {
            return false;
        }
        $allowed_values = $this->getFinalSubscriptionActionAllowableValues();
        if (!in_array($this->container['final_subscription_action'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Dunning plan name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets schedule
     * @return int[]
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     * @param int[] $schedule The schedule as list of intervals in days
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State of dunning plan, one of the following: `active`, `deleted`.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Date when the dunning plan was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets default_plan
     * @return bool
     */
    public function getDefaultPlan()
    {
        return $this->container['default_plan'];
    }

    /**
     * Sets default_plan
     * @param bool $default_plan If this is default plan
     * @return $this
     */
    public function setDefaultPlan($default_plan)
    {
        $this->container['default_plan'] = $default_plan;

        return $this;
    }

    /**
     * Gets final_subscription_action
     * @return string
     */
    public function getFinalSubscriptionAction()
    {
        return $this->container['final_subscription_action'];
    }

    /**
     * Sets final_subscription_action
     * @param string $final_subscription_action Action to take for subscription if dunning fails, one of the following: `expire`, `on_hold`, `none`
     * @return $this
     */
    public function setFinalSubscriptionAction($final_subscription_action)
    {
        $allowed_values = $this->getFinalSubscriptionActionAllowableValues();
        if (!in_array($final_subscription_action, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'final_subscription_action', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['final_subscription_action'] = $final_subscription_action;

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


