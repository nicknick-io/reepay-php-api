<?php
/**
 * ChargeSource
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
 * ChargeSource Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChargeSource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ChargeSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'card' => 'string',
        'fingerprint' => 'string',
        'auth_transaction' => 'string',
        'card_type' => 'string',
        'exp_date' => 'string',
        'masked_card' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'card' => null,
        'fingerprint' => null,
        'auth_transaction' => null,
        'card_type' => null,
        'exp_date' => null,
        'masked_card' => null
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
        'type' => 'type',
        'card' => 'card',
        'fingerprint' => 'fingerprint',
        'auth_transaction' => 'auth_transaction',
        'card_type' => 'card_type',
        'exp_date' => 'exp_date',
        'masked_card' => 'masked_card'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'card' => 'setCard',
        'fingerprint' => 'setFingerprint',
        'auth_transaction' => 'setAuthTransaction',
        'card_type' => 'setCardType',
        'exp_date' => 'setExpDate',
        'masked_card' => 'setMaskedCard'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'card' => 'getCard',
        'fingerprint' => 'getFingerprint',
        'auth_transaction' => 'getAuthTransaction',
        'card_type' => 'getCardType',
        'exp_date' => 'getExpDate',
        'masked_card' => 'getMaskedCard'
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

    const TYPE_CARD = 'card';
    const TYPE_CARD_TOKEN = 'card_token';
    const TYPE_IDEAL = 'ideal';
    const CARD_TYPE_UNKNOWN = 'unknown';
    const CARD_TYPE_VISA = 'visa';
    const CARD_TYPE_MC = 'mc';
    const CARD_TYPE_DANKORT = 'dankort';
    const CARD_TYPE_VISA_DK = 'visa_dk';
    const CARD_TYPE_VISA_ELEC = 'visa_elec';
    const CARD_TYPE_MAESTRO = 'maestro';
    const CARD_TYPE_LASER = 'laser';
    const CARD_TYPE_AMEX = 'amex';
    const CARD_TYPE_DINERS = 'diners';
    const CARD_TYPE_DISCOVER = 'discover';
    const CARD_TYPE_JCB = 'jcb';



    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CARD,
            self::TYPE_CARD_TOKEN,
            self::TYPE_IDEAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_UNKNOWN,
            self::CARD_TYPE_VISA,
            self::CARD_TYPE_MC,
            self::CARD_TYPE_DANKORT,
            self::CARD_TYPE_VISA_DK,
            self::CARD_TYPE_VISA_ELEC,
            self::CARD_TYPE_MAESTRO,
            self::CARD_TYPE_LASER,
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_DINERS,
            self::CARD_TYPE_DISCOVER,
            self::CARD_TYPE_JCB,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['auth_transaction'] = isset($data['auth_transaction']) ? $data['auth_transaction'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['exp_date'] = isset($data['exp_date']) ? $data['exp_date'] : null;
        $this->container['masked_card'] = isset($data['masked_card']) ? $data['masked_card'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        $allowed_values = $this->getCardTypeAllowableValues();
        if (!in_array($this->container['card_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'card_type', must be one of '%s'",
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

        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getCardTypeAllowableValues();
        if (!in_array($this->container['card_type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $type Type of charge source: `card` or `card_token`
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
     * Gets card
     * @return string
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param string $card Reference to customer card if source type `card`
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets fingerprint
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     * @param string $fingerprint Uniquely identifies this particular card number
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets auth_transaction
     * @return string
     */
    public function getAuthTransaction()
    {
        return $this->container['auth_transaction'];
    }

    /**
     * Sets auth_transaction
     * @param string $auth_transaction Reference to authorization transaction if charge is settled after authorization
     * @return $this
     */
    public function setAuthTransaction($auth_transaction)
    {
        $this->container['auth_transaction'] = $auth_transaction;

        return $this;
    }

    /**
     * Gets card_type
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     * @param string $card_type Card type if credit card source: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowed_values = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets exp_date
     * @return string
     */
    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    /**
     * Sets exp_date
     * @param string $exp_date Card expire date on form MM-YY if card source
     * @return $this
     */
    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

        return $this;
    }

    /**
     * Gets masked_card
     * @return string
     */
    public function getMaskedCard()
    {
        return $this->container['masked_card'];
    }

    /**
     * Sets masked_card
     * @param string $masked_card Masked card number if card source
     * @return $this
     */
    public function setMaskedCard($masked_card)
    {
        $this->container['masked_card'] = $masked_card;

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


