<?php
/**
 * KlarnaTransaction
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
 * KlarnaTransaction Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KlarnaTransaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KlarnaTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error' => 'string',
        'type' => 'string',
        'ref_transaction' => 'string',
        'error_state' => 'string',
        'acquirer_message' => 'string',
        'klarna_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error' => null,
        'type' => null,
        'ref_transaction' => null,
        'error_state' => null,
        'acquirer_message' => null,
        'klarna_id' => null,
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
        'error' => 'error',
        'type' => 'error',
        'ref_transaction' => 'ref_transaction',
        'error_state' => 'error_state',
        'acquirer_message' => 'acquirer_message',
        'klarna_id' => 'klarna_id',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'error' => 'setError',
        'type' => 'setType',
        'ref_transaction' => 'setRefTransaction',
        'error_state' => 'setErrorState',
        'acquirer_message' => 'setAcquirerMessage',
        'klarna_id' => 'setKlarnaId',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'error' => 'getError',
        'type' => 'getType',
        'ref_transaction' => 'getRefTransaction',
        'error_state' => 'getErrorState',
        'acquirer_message' => 'getAcquirerMessage',
        'klarna_id' => 'getKlarnaId',
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

    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    const TYPE_KLARNA_PAY_NOW = 'klarna_pay_now';
    const TYPE_KLARNA_PAY_LATER = 'klarna_pay_later';
    const TYPE_KLARNA_SLICE_IT = 'klarna_slice_it';
    const TYPE_KLARNA_DIRECT_BANK_TRANSFER = 'klarna_direct_bank_transfer';
    const TYPE_KLARNA_DIRECT_DEBIT = 'klarna_direct_debit';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getErrorStateAllowableValues()
    {
        return [
            self::ERROR_STATE_PENDING,
            self::ERROR_STATE_SOFT_DECLINED,
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
        ];
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_KLARNA_PAY_NOW,
            self::TYPE_KLARNA_PAY_LATER,
            self::TYPE_KLARNA_SLICE_IT,
            self::TYPE_KLARNA_DIRECT_BANK_TRANSFER,
            self::TYPE_KLARNA_DIRECT_DEBIT,
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ref_transaction'] = isset($data['ref_transaction']) ? $data['ref_transaction'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
        $this->container['acquirer_message'] = isset($data['acquirer_message']) ? $data['acquirer_message'] : null;
        $this->container['klarna_id'] = isset($data['klarna_id']) ? $data['klarna_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getErrorStateAllowableValues();
        if (!in_array($this->container['error_state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'error_state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getErrorStateAllowableValues();
        if (!in_array($this->container['error_state'], $allowed_values)) {
            return false;
        }

        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false
        }
        return true;
    }

    /**
     * Gets error
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param string $error Error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors).
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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
     * @param string $type Transaction type: `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ref_transaction
     * @return string
     */
    public function getRefTransaction()
    {
        return $this->container['ref_transaction'];
    }

    /**
     * Sets ref_transaction
     * @param string $ref_transaction Id of a possible referenced transaction
     * @return $this
     */
    public function setRefTransaction($ref_transaction)
    {
        $this->container['ref_transaction'] = $ref_transaction;

        return $this;
    }

    /**
     * Gets error_state
     * @return string
     */
    public function getErrorState()
    {
        return $this->container['error_state'];
    }

    /**
     * Sets error_state
     * @param string $error_state Error state if failed: `pending`, `soft_declined`, `hard_declined` or `processing_error`
     * @return $this
     */
    public function setErrorState($error_state)
    {
        $allowed_values = $this->getErrorStateAllowableValues();
        if (!is_null($error_state) && !in_array($error_state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['error_state'] = $error_state;

        return $this;
    }

    /**
     * Gets acquirer_message
     * @return string
     */
    public function getAcquirerMessage()
    {
        return $this->container['acquirer_message'];
    }

    /**
     * Sets acquirer_message
     * @param string $acquirer_message Acquirer message in case of error
     * @return $this
     */
    public function setAcquirerMessage($acquirer_message)
    {
        $allowed_values = $this->getAcquirerMessageAllowableValues();
        if (!in_array($acquirer_message, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'acquirer_message', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['acquirer_message'] = $acquirer_message;

        return $this;
    }

    /**
     * Gets klarna_id
     * @return string
     */
    public function getKlarnaId()
    {
        return $this->container['klarna_id'];
    }

    /**
     * Sets klarna_id
     * @param string $klarna_id ViaBill id
     * @return $this
     */
    public function setKlarnaId($klarna_id)
    {
        $this->container['klarna_id'] = $klarna_id;

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


