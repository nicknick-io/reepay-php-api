<?php
/**
 * CreateAddOn
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
 * CreateAddOn Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateAddOn implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateAddOn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'handle' => 'string',
        'type' => 'string',
        'amount_incl_vat' => 'bool',
        'all_plans' => 'bool',
        'eligible_plans' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'amount' => 'int32',
        'vat' => 'float',
        'handle' => null,
        'type' => null,
        'amount_incl_vat' => null,
        'all_plans' => null,
        'eligible_plans' => null
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
        'description' => 'description',
        'amount' => 'amount',
        'vat' => 'vat',
        'handle' => 'handle',
        'type' => 'type',
        'amount_incl_vat' => 'amount_incl_vat',
        'all_plans' => 'all_plans',
        'eligible_plans' => 'eligible_plans'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'handle' => 'setHandle',
        'type' => 'setType',
        'amount_incl_vat' => 'setAmountInclVat',
        'all_plans' => 'setAllPlans',
        'eligible_plans' => 'setEligiblePlans'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'handle' => 'getHandle',
        'type' => 'getType',
        'amount_incl_vat' => 'getAmountInclVat',
        'all_plans' => 'getAllPlans',
        'eligible_plans' => 'getEligiblePlans'
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

    const TYPE_ON_OFF = 'on_off';
    const TYPE_QUANTITY = 'quantity';



    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ON_OFF,
            self::TYPE_QUANTITY,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['all_plans'] = isset($data['all_plans']) ? $data['all_plans'] : null;
        $this->container['eligible_plans'] = isset($data['eligible_plans']) ? $data['eligible_plans'] : null;
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
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1)) {
            $invalid_properties[] = "invalid value for 'vat', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0)) {
            $invalid_properties[] = "invalid value for 'vat', must be bigger than or equal to 0.";
        }

        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['vat'] > 1) {
            return false;
        }
        if ($this->container['vat'] < 0) {
            return false;
        }
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
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
     * @param string $name Name of add-on. Will be used as order line text.
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
     * @param string $description Optional description of add-on
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
     * @param int $amount Add-on amount
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateAddOn., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param float $vat Optional vat for add-on. Account default is used if none given.
     * @return $this
     */
    public function setVat($vat)
    {

        if (!is_null($vat) && ($vat > 1)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateAddOn., must be smaller than or equal to 1.');
        }
        if (!is_null($vat) && ($vat < 0)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateAddOn., must be bigger than or equal to 0.');
        }

        $this->container['vat'] = $vat;

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
     * @param string $handle Per account unique handle for the add-on
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Add-on type `on_off` or `quantity`. An `on_off` type cannot be given a quantity when attached to subscription. Fo `quantity` type it is possible.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     * @param bool $amount_incl_vat Whether the amount is including VAT. Default true.
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
    }

    /**
     * Gets all_plans
     * @return bool
     */
    public function getAllPlans()
    {
        return $this->container['all_plans'];
    }

    /**
     * Sets all_plans
     * @param bool $all_plans Whether all plans are eligible for this add-on. Defaults to false.
     * @return $this
     */
    public function setAllPlans($all_plans)
    {
        $this->container['all_plans'] = $all_plans;

        return $this;
    }

    /**
     * Gets eligible_plans
     * @return string[]
     */
    public function getEligiblePlans()
    {
        return $this->container['eligible_plans'];
    }

    /**
     * Sets eligible_plans
     * @param string[] $eligible_plans If not `all_plans` are set to true, then the set of eligible plan handles must be defined.
     * @return $this
     */
    public function setEligiblePlans($eligible_plans)
    {
        $this->container['eligible_plans'] = $eligible_plans;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
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


