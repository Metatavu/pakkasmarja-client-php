<?php
/**
 * ChatThread
 *
 * PHP version 5
 *
 * @category Class
 * @package  Metatavu\Pakkasmarja
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pakkasmarja REST API
 *
 * REST API for Pakkasmarja
 *
 * OpenAPI spec version: 0.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Metatavu\Pakkasmarja\Api\Model;

use \ArrayAccess;
use \Metatavu\Pakkasmarja\ObjectSerializer;

/**
 * ChatThread Class Doc Comment
 *
 * @category Class
 * @package  Metatavu\Pakkasmarja
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChatThread implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChatThread';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'type' => 'string',
        'originId' => 'string',
        'imageUrl' => 'string',
        'answerType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'title' => null,
        'type' => null,
        'originId' => null,
        'imageUrl' => 'url',
        'answerType' => null
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
        'title' => 'title',
        'type' => 'type',
        'originId' => 'originId',
        'imageUrl' => 'imageUrl',
        'answerType' => 'answerType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'type' => 'setType',
        'originId' => 'setOriginId',
        'imageUrl' => 'setImageUrl',
        'answerType' => 'setAnswerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'type' => 'getType',
        'originId' => 'getOriginId',
        'imageUrl' => 'getImageUrl',
        'answerType' => 'getAnswerType'
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

    const ANSWER_TYPE_TEXT = 'TEXT';
    const ANSWER_TYPE_PREDEFINED = 'PREDEFINED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnswerTypeAllowableValues()
    {
        return [
            self::ANSWER_TYPE_TEXT,
            self::ANSWER_TYPE_PREDEFINED,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['originId'] = isset($data['originId']) ? $data['originId'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['answerType'] = isset($data['answerType']) ? $data['answerType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['answerType'] === null) {
            $invalidProperties[] = "'answerType' can't be null";
        }
        $allowedValues = $this->getAnswerTypeAllowableValues();
        if (!in_array($this->container['answerType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'answerType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['answerType'] === null) {
            return false;
        }
        $allowedValues = $this->getAnswerTypeAllowableValues();
        if (!in_array($this->container['answerType'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets originId
     *
     * @return string
     */
    public function getOriginId()
    {
        return $this->container['originId'];
    }

    /**
     * Sets originId
     *
     * @param string $originId
     *
     * @return $this
     */
    public function setOriginId($originId)
    {
        $this->container['originId'] = $originId;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets answerType
     *
     * @return string
     */
    public function getAnswerType()
    {
        return $this->container['answerType'];
    }

    /**
     * Sets answerType
     *
     * @param string $answerType
     *
     * @return $this
     */
    public function setAnswerType($answerType)
    {
        $allowedValues = $this->getAnswerTypeAllowableValues();
        if (!in_array($answerType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'answerType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['answerType'] = $answerType;

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
}

