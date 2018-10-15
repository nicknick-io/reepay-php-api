<?php
/**
 * CreateSubscriptionDiscount
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
 * CreateSubscriptionDiscount Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateSubscriptionDiscount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateSubscriptionDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'discount' => 'string',
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'percentage' => 'int',
        'apply_to' => 'string[]',
        'fixed_count' => 'int',
        'fixed_period_unit' => 'string',
        'fixed_period' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handle' => null,
        'discount' => null,
        'name' => null,
        'description' => null,
        'amount' => 'int32',
        'percentage' => 'int32',
        'apply_to' => null,
        'fixed_count' => 'int32',
        'fixed_period_unit' => null,
        'fixed_period' => 'int32'
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
        'handle' => 'handle',
        'discount' => 'discount',
        'name' => 'name',
        'description' => 'description',
        'amount' => 'amount',
        'percentage' => 'percentage',
        'apply_to' => 'apply_to',
        'fixed_count' => 'fixed_count',
        'fixed_period_unit' => 'fixed_period_unit',
        'fixed_period' => 'fixed_period'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'discount' => 'setDiscount',
        'name' => 'setName',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'percentage' => 'setPercentage',
        'apply_to' => 'setApplyTo',
        'fixed_count' => 'setFixedCount',
        'fixed_period_unit' => 'setFixedPeriodUnit',
        'fixed_period' => 'setFixedPeriod'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'discount' => 'getDiscount',
        'name' => 'getName',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'percentage' => 'getPercentage',
        'apply_to' => 'getApplyTo',
        'fixed_count' => 'getFixedCount',
        'fixed_period_unit' => 'getFixedPeriodUnit',
        'fixed_period' => 'getFixedPeriod'
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

    const FIXED_PERIOD_UNIT_MONTHS = 'months';
    const FIXED_PERIOD_UNIT_DAYS = 'days';



    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFixedPeriodUnitAllowableValues()
    {
        return [
            self::FIXED_PERIOD_UNIT_MONTHS,
            self::FIXED_PERIOD_UNIT_DAYS,
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
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['apply_to'] = isset($data['apply_to']) ? $data['apply_to'] : null;
        $this->container['fixed_count'] = isset($data['fixed_count']) ? $data['fixed_count'] : null;
        $this->container['fixed_period_unit'] = isset($data['fixed_period_unit']) ? $data['fixed_period_unit'] : null;
        $this->container['fixed_period'] = isset($data['fixed_period']) ? $data['fixed_period'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['discount'] === null) {
            $invalid_properties[] = "'discount' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] > 100)) {
            $invalid_properties[] = "invalid value for 'percentage', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] < 1)) {
            $invalid_properties[] = "invalid value for 'percentage', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fixed_count']) && ($this->container['fixed_count'] < 1)) {
            $invalid_properties[] = "invalid value for 'fixed_count', must be bigger than or equal to 1.";
        }

        $allowed_values = $this->getFixedPeriodUnitAllowableValues();
        if (!in_array($this->container['fixed_period_unit'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'fixed_period_unit', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['fixed_period']) && ($this->container['fixed_period'] < 1)) {
            $invalid_properties[] = "invalid value for 'fixed_period', must be bigger than or equal to 1.";
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

        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['discount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 1) {
            return false;
        }
        if ($this->container['percentage'] > 100) {
            return false;
        }
        if ($this->container['percentage'] < 1) {
            return false;
        }
        if ($this->container['fixed_count'] < 1) {
            return false;
        }
        $allowed_values = $this->getFixedPeriodUnitAllowableValues();
        if (!in_array($this->container['fixed_period_unit'], $allowed_values)) {
            return false;
        }
        if ($this->container['fixed_period'] < 1) {
            return false;
        }
        return true;
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
     * @param string $handle Per subscription unique handle for the subscription discount.
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets discount
     * @return string
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param string $discount Discount for subscription discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
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
     * @param string $name Optional name overriding discount name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Optional description overriding discount description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Optional overriding fixed amount from discount
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateSubscriptionDiscount., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets percentage
     * @return int
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     * @param int $percentage Optional percentage overriding percentage from discount
     * @return $this
     */
    public function setPercentage($percentage)
    {

        if (!is_null($percentage) && ($percentage > 100)) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling CreateSubscriptionDiscount., must be smaller than or equal to 100.');
        }
        if (!is_null($percentage) && ($percentage < 1)) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling CreateSubscriptionDiscount., must be bigger than or equal to 1.');
        }

        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets apply_to
     * @return string[]
     */
    public function getApplyTo()
    {
        return $this->container['apply_to'];
    }

    /**
     * Sets apply_to
     * @param string[] $apply_to Optional overriding discount settings
     * @return $this
     */
    public function setApplyTo($apply_to)
    {
        $this->container['apply_to'] = $apply_to;

        return $this;
    }

    /**
     * Gets fixed_count
     * @return int
     */
    public function getFixedCount()
    {
        return $this->container['fixed_count'];
    }

    /**
     * Sets fixed_count
     * @param int $fixed_count Optioanl overriding discount settings
     * @return $this
     */
    public function setFixedCount($fixed_count)
    {

        if (!is_null($fixed_count) && ($fixed_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $fixed_count when calling CreateSubscriptionDiscount., must be bigger than or equal to 1.');
        }

        $this->container['fixed_count'] = $fixed_count;

        return $this;
    }

    /**
     * Gets fixed_period_unit
     * @return string
     */
    public function getFixedPeriodUnit()
    {
        return $this->container['fixed_period_unit'];
    }

    /**
     * Sets fixed_period_unit
     * @param string $fixed_period_unit Optioanl overriding discount settings
     * @return $this
     */
    public function setFixedPeriodUnit($fixed_period_unit)
    {
        $allowed_values = $this->getFixedPeriodUnitAllowableValues();
        if (!is_null($fixed_period_unit) && !in_array($fixed_period_unit, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fixed_period_unit', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['fixed_period_unit'] = $fixed_period_unit;

        return $this;
    }

    /**
     * Gets fixed_period
     * @return int
     */
    public function getFixedPeriod()
    {
        return $this->container['fixed_period'];
    }

    /**
     * Sets fixed_period
     * @param int $fixed_period Optioanl overriding discount settings
     * @return $this
     */
    public function setFixedPeriod($fixed_period)
    {

        if (!is_null($fixed_period) && ($fixed_period < 1)) {
            throw new \InvalidArgumentException('invalid value for $fixed_period when calling CreateSubscriptionDiscount., must be bigger than or equal to 1.');
        }

        $this->container['fixed_period'] = $fixed_period;

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


