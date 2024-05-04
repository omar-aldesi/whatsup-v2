<?php
/**
 * ObjectSerializer
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

namespace Infobip;

use Infobip\Model\ModelInterface;

/**
 * ObjectSerializer Class Doc Comment
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */
class ObjectSerializer
{
    /** @var string */
    private static $dateTimeFormat = "Y-m-d\TH:i:s.vP";

    private const DISCRIMINATOR_MAPPINGS = [
        "PHONE_NUMBER"=>"WhatsAppPhoneNumberButtonApiData",
        "QUICK_REPLY"=>"WhatsAppQuickReplyButtonApiData",
        "URL"=>"WhatsAppUrlButtonApiData",
        "WhatsAppPhoneNumberButtonApiData"=>"WhatsAppPhoneNumberButtonApiData",
        "WhatsAppQuickReplyButtonApiData"=>"WhatsAppQuickReplyButtonApiData",
        "WhatsAppUrlButtonApiData"=>"WhatsAppUrlButtonApiData",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "DOCUMENT"=>"WhatsAppDocumentHeaderApiData",
        "IMAGE"=>"WhatsAppImageHeaderApiData",
        "LOCATION"=>"WhatsAppLocationHeaderApiData",
        "TEXT"=>"WhatsAppTextHeaderApiData",
        "VIDEO"=>"WhatsAppVideoHeaderApiData",
        "DOCUMENT"=>"WhatsAppDocumentHeaderApiData",
        "IMAGE"=>"WhatsAppImageHeaderApiData",
        "LOCATION"=>"WhatsAppLocationHeaderApiData",
        "TEXT"=>"WhatsAppTextHeaderApiData",
        "VIDEO"=>"WhatsAppVideoHeaderApiData",
        "WhatsAppDocumentHeaderApiData"=>"WhatsAppDocumentHeaderApiData",
        "WhatsAppImageHeaderApiData"=>"WhatsAppImageHeaderApiData",
        "WhatsAppLocationHeaderApiData"=>"WhatsAppLocationHeaderApiData",
        "WhatsAppTextHeaderApiData"=>"WhatsAppTextHeaderApiData",
        "WhatsAppVideoHeaderApiData"=>"WhatsAppVideoHeaderApiData",
        "DOCUMENT"=>"WhatsAppDocumentHeaderApiData",
        "IMAGE"=>"WhatsAppImageHeaderApiData",
        "LOCATION"=>"WhatsAppLocationHeaderApiData",
        "TEXT"=>"WhatsAppTextHeaderApiData",
        "VIDEO"=>"WhatsAppVideoHeaderApiData",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "WhatsAppButtonReplyContent"=>"WhatsAppButtonReplyContent",
        "WhatsAppInboundAudioMessage"=>"WhatsAppInboundAudioMessage",
        "WhatsAppInboundContactMessage"=>"WhatsAppInboundContactMessage",
        "WhatsAppInboundDocumentMessage"=>"WhatsAppInboundDocumentMessage",
        "WhatsAppInboundImageMessage"=>"WhatsAppInboundImageMessage",
        "WhatsAppInboundLocationMessage"=>"WhatsAppInboundLocationMessage",
        "WhatsAppInboundStickerMessage"=>"WhatsAppInboundStickerMessage",
        "WhatsAppInboundTextMessage"=>"WhatsAppInboundTextMessage",
        "WhatsAppInboundVideoMessage"=>"WhatsAppInboundVideoMessage",
        "WhatsAppInboundVoiceMessage"=>"WhatsAppInboundVoiceMessage",
        "WhatsAppListReplyContent"=>"WhatsAppListReplyContent",
        "WhatsAppOrderContent"=>"WhatsAppOrderContent",
        "WhatsAppQuickReplyContent"=>"WhatsAppQuickReplyContent",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "REPLY"=>"WhatsAppInteractiveReplyButtonContent",
        "WhatsAppInteractiveReplyButtonContent"=>"WhatsAppInteractiveReplyButtonContent",
        "DOCUMENT"=>"WhatsAppInteractiveButtonsDocumentHeaderContent",
        "IMAGE"=>"WhatsAppInteractiveButtonsImageHeaderContent",
        "TEXT"=>"WhatsAppInteractiveButtonsTextHeaderContent",
        "VIDEO"=>"WhatsAppInteractiveButtonsVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppInteractiveButtonsDocumentHeaderContent",
        "IMAGE"=>"WhatsAppInteractiveButtonsImageHeaderContent",
        "TEXT"=>"WhatsAppInteractiveButtonsTextHeaderContent",
        "VIDEO"=>"WhatsAppInteractiveButtonsVideoHeaderContent",
        "WhatsAppInteractiveButtonsDocumentHeaderContent"=>"WhatsAppInteractiveButtonsDocumentHeaderContent",
        "WhatsAppInteractiveButtonsImageHeaderContent"=>"WhatsAppInteractiveButtonsImageHeaderContent",
        "WhatsAppInteractiveButtonsTextHeaderContent"=>"WhatsAppInteractiveButtonsTextHeaderContent",
        "WhatsAppInteractiveButtonsVideoHeaderContent"=>"WhatsAppInteractiveButtonsVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppInteractiveButtonsDocumentHeaderContent",
        "IMAGE"=>"WhatsAppInteractiveButtonsImageHeaderContent",
        "TEXT"=>"WhatsAppInteractiveButtonsTextHeaderContent",
        "VIDEO"=>"WhatsAppInteractiveButtonsVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppInteractiveButtonsDocumentHeaderContent",
        "IMAGE"=>"WhatsAppInteractiveButtonsImageHeaderContent",
        "TEXT"=>"WhatsAppInteractiveButtonsTextHeaderContent",
        "VIDEO"=>"WhatsAppInteractiveButtonsVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppInteractiveButtonsDocumentHeaderContent",
        "IMAGE"=>"WhatsAppInteractiveButtonsImageHeaderContent",
        "TEXT"=>"WhatsAppInteractiveButtonsTextHeaderContent",
        "VIDEO"=>"WhatsAppInteractiveButtonsVideoHeaderContent",
        "TEXT"=>"WhatsAppInteractiveListTextHeaderContent",
        "WhatsAppInteractiveListTextHeaderContent"=>"WhatsAppInteractiveListTextHeaderContent",
        "TEXT"=>"WhatsAppInteractiveListTextHeaderContent",
        "REPLY"=>"WhatsAppInteractiveReplyButtonContent",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "DOCUMENT"=>"WhatsAppDocumentHeaderApiData",
        "IMAGE"=>"WhatsAppImageHeaderApiData",
        "LOCATION"=>"WhatsAppLocationHeaderApiData",
        "TEXT"=>"WhatsAppTextHeaderApiData",
        "VIDEO"=>"WhatsAppVideoHeaderApiData",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "PHONE_NUMBER"=>"WhatsAppPhoneNumberButtonApiData",
        "QUICK_REPLY"=>"WhatsAppQuickReplyButtonApiData",
        "URL"=>"WhatsAppUrlButtonApiData",
        "PHONE_NUMBER"=>"WhatsAppPhoneNumberButtonApiData",
        "QUICK_REPLY"=>"WhatsAppQuickReplyButtonApiData",
        "URL"=>"WhatsAppUrlButtonApiData",
        "AUDIO"=>"WhatsAppInboundAudioMessage",
        "BUTTON"=>"WhatsAppQuickReplyContent",
        "CONTACT"=>"WhatsAppInboundContactMessage",
        "DOCUMENT"=>"WhatsAppInboundDocumentMessage",
        "IMAGE"=>"WhatsAppInboundImageMessage",
        "INTERACTIVE_BUTTON_REPLY"=>"WhatsAppButtonReplyContent",
        "INTERACTIVE_LIST_REPLY"=>"WhatsAppListReplyContent",
        "LOCATION"=>"WhatsAppInboundLocationMessage",
        "ORDER"=>"WhatsAppOrderContent",
        "STICKER"=>"WhatsAppInboundStickerMessage",
        "TEXT"=>"WhatsAppInboundTextMessage",
        "VIDEO"=>"WhatsAppInboundVideoMessage",
        "VOICE"=>"WhatsAppInboundVoiceMessage",
        "QUICK_REPLY"=>"WhatsAppTemplateQuickReplyButtonContent",
        "URL"=>"WhatsAppTemplateUrlButtonContent",
        "WhatsAppTemplateQuickReplyButtonContent"=>"WhatsAppTemplateQuickReplyButtonContent",
        "WhatsAppTemplateUrlButtonContent"=>"WhatsAppTemplateUrlButtonContent",
        "DOCUMENT"=>"WhatsAppTemplateDocumentHeaderContent",
        "IMAGE"=>"WhatsAppTemplateImageHeaderContent",
        "LOCATION"=>"WhatsAppTemplateLocationHeaderContent",
        "TEXT"=>"WhatsAppTemplateTextHeaderContent",
        "VIDEO"=>"WhatsAppTemplateVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppTemplateDocumentHeaderContent",
        "IMAGE"=>"WhatsAppTemplateImageHeaderContent",
        "LOCATION"=>"WhatsAppTemplateLocationHeaderContent",
        "TEXT"=>"WhatsAppTemplateTextHeaderContent",
        "VIDEO"=>"WhatsAppTemplateVideoHeaderContent",
        "WhatsAppTemplateDocumentHeaderContent"=>"WhatsAppTemplateDocumentHeaderContent",
        "WhatsAppTemplateImageHeaderContent"=>"WhatsAppTemplateImageHeaderContent",
        "WhatsAppTemplateLocationHeaderContent"=>"WhatsAppTemplateLocationHeaderContent",
        "WhatsAppTemplateTextHeaderContent"=>"WhatsAppTemplateTextHeaderContent",
        "WhatsAppTemplateVideoHeaderContent"=>"WhatsAppTemplateVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppTemplateDocumentHeaderContent",
        "IMAGE"=>"WhatsAppTemplateImageHeaderContent",
        "LOCATION"=>"WhatsAppTemplateLocationHeaderContent",
        "TEXT"=>"WhatsAppTemplateTextHeaderContent",
        "VIDEO"=>"WhatsAppTemplateVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppTemplateDocumentHeaderContent",
        "IMAGE"=>"WhatsAppTemplateImageHeaderContent",
        "LOCATION"=>"WhatsAppTemplateLocationHeaderContent",
        "TEXT"=>"WhatsAppTemplateTextHeaderContent",
        "VIDEO"=>"WhatsAppTemplateVideoHeaderContent",
        "QUICK_REPLY"=>"WhatsAppTemplateQuickReplyButtonContent",
        "URL"=>"WhatsAppTemplateUrlButtonContent",
        "DOCUMENT"=>"WhatsAppTemplateDocumentHeaderContent",
        "IMAGE"=>"WhatsAppTemplateImageHeaderContent",
        "LOCATION"=>"WhatsAppTemplateLocationHeaderContent",
        "TEXT"=>"WhatsAppTemplateTextHeaderContent",
        "VIDEO"=>"WhatsAppTemplateVideoHeaderContent",
        "QUICK_REPLY"=>"WhatsAppTemplateQuickReplyButtonContent",
        "URL"=>"WhatsAppTemplateUrlButtonContent",
        "DOCUMENT"=>"WhatsAppTemplateDocumentHeaderContent",
        "IMAGE"=>"WhatsAppTemplateImageHeaderContent",
        "LOCATION"=>"WhatsAppTemplateLocationHeaderContent",
        "TEXT"=>"WhatsAppTemplateTextHeaderContent",
        "VIDEO"=>"WhatsAppTemplateVideoHeaderContent",
        "DOCUMENT"=>"WhatsAppDocumentHeaderApiData",
        "IMAGE"=>"WhatsAppImageHeaderApiData",
        "LOCATION"=>"WhatsAppLocationHeaderApiData",
        "TEXT"=>"WhatsAppTextHeaderApiData",
        "VIDEO"=>"WhatsAppVideoHeaderApiData",
        "PHONE_NUMBER"=>"WhatsAppPhoneNumberButtonApiData",
        "QUICK_REPLY"=>"WhatsAppQuickReplyButtonApiData",
        "URL"=>"WhatsAppUrlButtonApiData",
        "DOCUMENT"=>"WhatsAppDocumentHeaderApiData",
        "IMAGE"=>"WhatsAppImageHeaderApiData",
        "LOCATION"=>"WhatsAppLocationHeaderApiData",
        "TEXT"=>"WhatsAppTextHeaderApiData",
        "VIDEO"=>"WhatsAppVideoHeaderApiData",
    ];

    /**
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the OpenAPIToolsType of the data
     * @param string $format the format of the OpenAPITools type of the data
     *
     * @return scalar|object|array|null serialized form of $data
     */
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        }

        if ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(self::$dateTimeFormat);
        }

        if (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        }

        if (is_object($data)) {
            $values = [];
            if ($data instanceof ModelInterface) {
                $formats = $data::openAPIFormats();
                foreach ($data::openAPITypes() as $property => $openAPIType) {
                    $getter = $data::getters()[$property];
                    $value = $data->$getter();
                    if ($value !== null && !in_array($openAPIType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
                        $callable = [$openAPIType, 'getAllowableEnumValues'];
                        if (is_callable($callable)) {
                            /** array $callable */
                            $allowedEnumTypes = $callable();
                            if (!in_array($value, $allowedEnumTypes, true)) {
                                $imploded = implode("', '", $allowedEnumTypes);
                                throw new \InvalidArgumentException("Invalid value for enum '$openAPIType', must be one of: '$imploded'");
                            }
                        }
                    }
                    if ($value !== null) {
                        $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $openAPIType, $formats[$property]);
                    }
                }
            } else {
                foreach ($data as $property => $value) {
                    $values[$property] = self::sanitizeForSerialization($value);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it using the predefined format.
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        $callable = [$value, 'toHeaderValue'];
        if (is_callable($callable)) {
            return $callable();
        }

        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it using the predefined format.
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it using the predefined format.
     * If it's a boolean, convert it to "true" or "false".
     *
     * @param string|bool|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof \DateTime) {
            return $value->format(self::$dateTimeFormat);
        } elseif (is_bool($value)) {
            return $value ? 'true' : 'false';
        } else {
            return $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $style                      the format use for serialization (csv,
     * ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $style, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $style)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($style) {
            case 'pipeDelimited':
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'spaceDelimited':
            case 'ssv':
                return implode(' ', $collection);

            case 'simple':
            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data          object or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[] $httpHeaders   HTTP headers
     * @param string   $discriminator discriminator if polymorphism is used
     *
     * @return object|array|null a single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        }

        if (strcasecmp(substr($class, -2), '[]') === 0) {
            $data = is_string($data) ? json_decode($data) : $data;

            if (!is_array($data)) {
                throw new \InvalidArgumentException("Invalid array '$class'");
            }

            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        }

        if (preg_match('/^(array<|map\[)/', $class)) { // for associative array e.g. array<string,int>
            $data = is_string($data) ? json_decode($data) : $data;
            settype($data, 'array');
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        }

        if ($class === 'object') {
            settype($data, 'array');
            return $data;
        }

        if ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                try {
                    return new \DateTime($data);
                } catch (\Exception $exception) {
                    // Some API's return a date-time with too high nanosecond
                    // precision for php's DateTime to handle. This conversion
                    // (string -> unix timestamp -> DateTime) is a workaround
                    // for the problem.
                    return (new \DateTime())->setTimestamp(strtotime($data));
                }
            } else {
                return null;
            }
        }

        /** @psalm-suppress ParadoxicalCondition */
        if (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        }

        if ($class === '\SplFileObject') {
            /** @var \Psr\Http\Message\StreamInterface $data */

            // determine file name
            if (array_key_exists('Content-Disposition', $httpHeaders) &&
                preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);

            return new \SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            $data = is_string($data) ? json_decode($data) : $data;
            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\Infobip\Model\\' . self::DISCRIMINATOR_MAPPINGS[$data->{$discriminator}];
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }

            /** @var ModelInterface $instance */
            $instance = new $class();
            foreach ($instance::openAPITypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                if (isset($data->{$instance::attributeMap()[$property]})) {
                    $propertyValue = $data->{$instance::attributeMap()[$property]};
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }
}