<?php
/**
 * SmsTextualMessage
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Infobip\Model;

use ArrayAccess;
use Infobip\ObjectSerializer;

/**
 * SmsTextualMessage Class Doc Comment
 *
 * @category Class
 * @description An array of message objects of a single message or multiple messages sent under one bulk ID.
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SmsTextualMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmsTextualMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callbackData' => 'string',
        'deliveryTimeWindow' => '\Infobip\Model\SmsDeliveryTimeWindow',
        'destinations' => '\Infobip\Model\SmsDestination[]',
        'flash' => 'bool',
        'from' => 'string',
        'intermediateReport' => 'bool',
        'language' => '\Infobip\Model\SmsLanguage',
        'notifyContentType' => 'string',
        'notifyUrl' => 'string',
        'regional' => '\Infobip\Model\SmsRegionalOptions',
        'sendAt' => '\DateTime',
        'text' => 'string',
        'transliteration' => 'string',
        'validityPeriod' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callbackData' => null,
        'deliveryTimeWindow' => null,
        'destinations' => null,
        'flash' => null,
        'from' => null,
        'intermediateReport' => null,
        'language' => null,
        'notifyContentType' => null,
        'notifyUrl' => null,
        'regional' => null,
        'sendAt' => 'date-time',
        'text' => null,
        'transliteration' => null,
        'validityPeriod' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'callbackData' => 'callbackData',
        'deliveryTimeWindow' => 'deliveryTimeWindow',
        'destinations' => 'destinations',
        'flash' => 'flash',
        'from' => 'from',
        'intermediateReport' => 'intermediateReport',
        'language' => 'language',
        'notifyContentType' => 'notifyContentType',
        'notifyUrl' => 'notifyUrl',
        'regional' => 'regional',
        'sendAt' => 'sendAt',
        'text' => 'text',
        'transliteration' => 'transliteration',
        'validityPeriod' => 'validityPeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callbackData' => 'setCallbackData',
        'deliveryTimeWindow' => 'setDeliveryTimeWindow',
        'destinations' => 'setDestinations',
        'flash' => 'setFlash',
        'from' => 'setFrom',
        'intermediateReport' => 'setIntermediateReport',
        'language' => 'setLanguage',
        'notifyContentType' => 'setNotifyContentType',
        'notifyUrl' => 'setNotifyUrl',
        'regional' => 'setRegional',
        'sendAt' => 'setSendAt',
        'text' => 'setText',
        'transliteration' => 'setTransliteration',
        'validityPeriod' => 'setValidityPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callbackData' => 'getCallbackData',
        'deliveryTimeWindow' => 'getDeliveryTimeWindow',
        'destinations' => 'getDestinations',
        'flash' => 'getFlash',
        'from' => 'getFrom',
        'intermediateReport' => 'getIntermediateReport',
        'language' => 'getLanguage',
        'notifyContentType' => 'getNotifyContentType',
        'notifyUrl' => 'getNotifyUrl',
        'regional' => 'getRegional',
        'sendAt' => 'getSendAt',
        'text' => 'getText',
        'transliteration' => 'getTransliteration',
        'validityPeriod' => 'getValidityPeriod'
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
        return self::$openAPIModelName;
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
        $this->container['callbackData'] = $data['callbackData'] ?? null;
        $this->container['deliveryTimeWindow'] = $data['deliveryTimeWindow'] ?? null;
        $this->container['destinations'] = $data['destinations'] ?? null;
        $this->container['flash'] = $data['flash'] ?? false;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['intermediateReport'] = $data['intermediateReport'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['notifyContentType'] = $data['notifyContentType'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['regional'] = $data['regional'] ?? null;
        $this->container['sendAt'] = $data['sendAt'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['transliteration'] = $data['transliteration'] ?? null;
        $this->container['validityPeriod'] = $data['validityPeriod'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['callbackData']) && (mb_strlen($this->container['callbackData']) > 4000)) {
            $invalidProperties[] = "invalid value for 'callbackData', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['callbackData']) && (mb_strlen($this->container['callbackData']) < 0)) {
            $invalidProperties[] = "invalid value for 'callbackData', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['destinations'] === null) {
            $invalidProperties[] = "'destinations' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets callbackData
     *
     * @return string|null
     */
    public function getCallbackData()
    {
        return $this->container['callbackData'];
    }

    /**
     * Sets callbackData
     *
     * @param string|null $callbackData Additional data that can be used for identifying, managing, or monitoring a message. Data included here will also be automatically included in the message [Delivery Report](#channels/sms/get-outbound-sms-message-delivery-reports). The maximum value is 4000 characters and any overhead may be truncated.
     *
     * @return self
     */
    public function setCallbackData($callbackData)
    {
        if (!is_null($callbackData) && (mb_strlen($callbackData) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $callbackData when calling SmsTextualMessage., must be smaller than or equal to 4000.');
        }
        if (!is_null($callbackData) && (mb_strlen($callbackData) < 0)) {
            throw new \InvalidArgumentException('invalid length for $callbackData when calling SmsTextualMessage., must be bigger than or equal to 0.');
        }

        $this->container['callbackData'] = $callbackData;

        return $this;
    }

    /**
     * Gets deliveryTimeWindow
     *
     * @return \Infobip\Model\SmsDeliveryTimeWindow|null
     */
    public function getDeliveryTimeWindow()
    {
        return $this->container['deliveryTimeWindow'];
    }

    /**
     * Sets deliveryTimeWindow
     *
     * @param \Infobip\Model\SmsDeliveryTimeWindow|null $deliveryTimeWindow deliveryTimeWindow
     *
     * @return self
     */
    public function setDeliveryTimeWindow($deliveryTimeWindow)
    {
        $this->container['deliveryTimeWindow'] = $deliveryTimeWindow;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \Infobip\Model\SmsDestination[]
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Infobip\Model\SmsDestination[] $destinations An array of destination objects for where messages are being sent. A valid destination is required.
     *
     * @return self
     */
    public function setDestinations($destinations)
    {
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets flash
     *
     * @return bool|null
     */
    public function getFlash()
    {
        return $this->container['flash'];
    }

    /**
     * Sets flash
     *
     * @param bool|null $flash Allows for sending a [flash SMS](https://www.infobip.com/docs/sms/message-types#flash-sms) to automatically appear on recipient devices without interaction. Set to `true` to enable flash SMS, or leave the default value, `false` to send a standard SMS.
     *
     * @return self
     */
    public function setFlash($flash)
    {
        $this->container['flash'] = $flash;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from The sender ID which can be alphanumeric or numeric (e.g., `CompanyName`). Make sure you don't exceed [character limit](https://www.infobip.com/docs/sms/get-started#sender-names).
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets intermediateReport
     *
     * @return bool|null
     */
    public function getIntermediateReport()
    {
        return $this->container['intermediateReport'];
    }

    /**
     * Sets intermediateReport
     *
     * @param bool|null $intermediateReport The [real-time intermediate delivery report](#channels/sms/receive-outbound-sms-message-report) containing GSM error codes, messages status, pricing, network and country codes, etc., which will be sent on your callback server. Defaults to `false`.
     *
     * @return self
     */
    public function setIntermediateReport($intermediateReport)
    {
        $this->container['intermediateReport'] = $intermediateReport;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Infobip\Model\SmsLanguage|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Infobip\Model\SmsLanguage|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets notifyContentType
     *
     * @return string|null
     */
    public function getNotifyContentType()
    {
        return $this->container['notifyContentType'];
    }

    /**
     * Sets notifyContentType
     *
     * @param string|null $notifyContentType Preferred delivery report content type, `application/json` or `application/xml`.
     *
     * @return self
     */
    public function setNotifyContentType($notifyContentType)
    {
        $this->container['notifyContentType'] = $notifyContentType;

        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string|null $notifyUrl The URL on your call back server on to which a delivery report will be sent. The [retry cycle](https://www.infobip.com/docs/sms/api#notify-url) for when your URL becomes unavailable uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     *
     * @return self
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets regional
     *
     * @return \Infobip\Model\SmsRegionalOptions|null
     */
    public function getRegional()
    {
        return $this->container['regional'];
    }

    /**
     * Sets regional
     *
     * @param \Infobip\Model\SmsRegionalOptions|null $regional regional
     *
     * @return self
     */
    public function setRegional($regional)
    {
        $this->container['regional'] = $regional;

        return $this;
    }

    /**
     * Gets sendAt
     *
     * @return \DateTime|null
     */
    public function getSendAt()
    {
        return $this->container['sendAt'];
    }

    /**
     * Sets sendAt
     *
     * @param \DateTime|null $sendAt Date and time when the message is to be sent. Used for [scheduled SMS](#channels/sms/get-scheduled-sms-messages). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, and can only be scheduled for no later than 180 days in advance.
     *
     * @return self
     */
    public function setSendAt($sendAt)
    {
        $this->container['sendAt'] = $sendAt;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Content of the message being sent.
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets transliteration
     *
     * @return string|null
     */
    public function getTransliteration()
    {
        return $this->container['transliteration'];
    }

    /**
     * Sets transliteration
     *
     * @param string|null $transliteration The transliteration of your sent message from one script to another. Transliteration is used to replace characters which are not recognized as part of your defaulted alphabet. Possible values: `TURKISH`, `GREEK`, `CYRILLIC`, `SERBIAN_CYRILLIC`, `CENTRAL_EUROPEAN`, `BALTIC` and `NON_UNICODE`.
     *
     * @return self
     */
    public function setTransliteration($transliteration)
    {
        $this->container['transliteration'] = $transliteration;

        return $this;
    }

    /**
     * Gets validityPeriod
     *
     * @return int|null
     */
    public function getValidityPeriod()
    {
        return $this->container['validityPeriod'];
    }

    /**
     * Sets validityPeriod
     *
     * @param int|null $validityPeriod The message validity period in minutes. When the period expires, it will not be allowed for the message to be sent. Validity period longer than 48h is not supported. Any bigger value will automatically default back to `2880`.
     *
     * @return self
     */
    public function setValidityPeriod($validityPeriod)
    {
        $this->container['validityPeriod'] = $validityPeriod;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}